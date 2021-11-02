<?php
require('../../Controladores/db_curso.php');
require('../../Controladores/db_vista_curso.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../elcurso/vista.css">
    <link rel="stylesheet" href="../Navegacion/nav.css">
    <link rel="stylesheet" href="../Curso/caja_comment.css">
    <link rel="stylesheet" href="../accordion/accordion.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../JavaScript/Comentarios.js"></script>
</head>

<body>
    <div class="div">
        <?php include("../Navegacion/Nav.php"); ?>
    </div>
    <div class="contenedor">
        <div class="bloque">
            <div class="bloque_video">
                <div class="sub_bloque_contenido">
                    <div class="dis_bloque">
                        <div class="cabecera_titulo">
                            <div class="">
                                <h1 class="text"> <?php echo $curso->get_titulo(); ?> </h1>
                            </div>
                            <div class=""> Impartida por: <?php echo $curso->get_profesor(); ?> </div>
                        </div>
                        <div class="">
                            <h1>Tema <?php echo $curso->get_tema(); ?>.- <?php echo $curso->get_titulo_capitulo(); ?></h1>
                            <a href="../videos/videos.php?curso=<?php echo $_GET['curso']; ?>&tem=<?php echo $curso->get_tema(); ?>&cap=<?php echo $curso->get_capitulo(); ?>#question<?php echo $curso->get_tema(); ?>"> <button class="btn_dis"> Continuar curso</button> </a>
                        </div>
                    </div>
                </div>
                <div class="sub_bloque_contenido">
                    <h1 class="dis_bloque">
                        <a href="../videos/videos.php?curso=<?php echo $curso->get_idCurso(); ?>&tem=1&cap=1"> <img src="data:image/png;base64,<?php echo base64_encode($curso->get_img()); ?>" alt="" class="miniatura"> </a>
                    </h1>
                </div>
            </div>
            <div class="bloque_menu_video">
                <div class="cabecera">
                    <div class="bloque_cabecera">
                        <input type="radio" name="categoria" id="Visualizacion" value="visualizacion" checked>
                        <input type="radio" name="categoria" id="Archivos" value="Archivos">
                        <input type="radio" name="categoria" id="Comentarios" value="Comentarios">
                        <div class="cabecera_items">
                            <label for="Visualizacion" class="design">
                                <h3 class=ds_btm>Informacion</h3>
                            </label>
                            <label for="Archivos" class="design">
                                <h3 class=ds_btm>Clases y Archivos</h3>
                            </label>
                            <label for="Comentarios" class="design">
                                <h3 class=ds_btm>Comentarios</h3>
                            </label>
                            <label for="Comentarios" class="design"> <a href="../chat/chat.php">
                                    <h3 class=ds_btm>Mensaje privado </h3>
                                </a> </label>
                        </div>
                        <div class="contenedor_info " id="componentes_cabecra">
                            <div class="contenido_informacion">
                                <div class="descripcion_general">
                                    <div class="container_des">
                                        <div class="sep">
                                            <H1>Duracion:</H1>
                                            <div class="sub_texto">
                                                <h2> <?php echo $curso->get_duracion(); ?> </h2>
                                            </div>
                                        </div>
                                        <div class="sep">
                                            <h1>Estudiantes inscritos:</h1>
                                            <h2 class=des><?php echo $curso->get_Inscritos(); ?></h2>
                                        </div>
                                        <div class="sep">
                                            <h1>Descripcion:</h1>
                                            <h2> <?php echo $curso->get_descripcion(); ?> </h2>
                                        </div>
                                        <div class="actualizacion">
                                            <h3 class="date_update">Actualizado el:</h3>
                                            <h3 class="date_update">3 de octubre 2019</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="Calificacion_curso">
                                    <div class="bloque_calificacion">
                                        <div class="cuadro_informativo">
                                            <i class="far fa-heart"></i>
                                            <h2><?php echo $curso->get_likes(); ?></h2>
                                            <h2> personas les gusto este curso</h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="contenido_archivos" id="componentes_cabecra">
                                <div class="bloque_clases_info">
                                    <div class="informacion_clases contenedor_sep">
                                        <div class="bloque_todos_cap">
                                            <?php include("../accordion/accordion.php"); ?>
                                        </div>
                                    </div>
                                    <div class="arcchivos_descargar contenedor_sep">
                                        <div class="contenedor_archivo">
                                            <div class="img_box">
                                                <div class="btn_img">
                                                    <a href="../Multimedia/f.gif" download>
                                                        <h1> Descargar archivos</h1>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="contenido_comentarios" id="componentes_cabecra">
                                <div class="bloque_comentarios">
                                    <div class="cajadecomentarios">
                                        <div class="contenedor_coment">
                                            <div class="fotoynick">
                                                <img src="data:image/png;base64,<?php echo base64_encode($user->get_img()); ?>" alt="" class="perfil">
                                                <h3><?php echo $user->get_NomUser(); ?></h3>
                                            </div>
                                            <div class="coment_bloque">
                                                <textarea name="comment" id="comentario" cols="10" rows="5" class="comment_add"></textarea>
                                                <button class="btn_send" curso="<?php echo $_GET['curso']; ?>"><a href=""><i class="far fa-paper-plane"></i></a> </button>
                                            </div>
                                        </div>

                                        <?php
                                        if ($_GET['curso']) {
                                            $consulta = new Consulta();
                                            $resultados = $consulta->query_select_comentarios_by_curso($_GET['curso']);

                                            foreach ($resultados as $row) {
                                                include("../Curso/caja_comment.php");
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>
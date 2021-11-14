
<?php
require('../../Controladores/db_perfil.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../JavaScript/info_usuario.js"></script>
    <link rel="stylesheet" href="./perfil.css">
    <link rel="stylesheet" href="../Navegacion/nav.css">
    
    <link rel="stylesheet" href="../modal/contmodal.css">
    <title>Document</title>
    
</head>

<body>
    <div class="div">
        <?php include("../Navegacion/Nav.php"); ?>
    </div>
    <div class="contenedor">
        <div class="cabecera">
            <?php 
                if(is_null($row['Foto_Perfil'])){
                    ?>
                        <img src="../Multimedia/predeterminado.png" alt="" class="usperfil ">
                    <?php
                }
                else {
                    ?>
                        <img src="data:image/png;base64,<?php echo base64_encode($user->get_img()); ?>" alt="" class="usperfil ">
                    <?php
                }
            ?>
            
            <h1 class="usname"><?php echo $user->get_NomUser(); ?></h1>
        </div>
        <div class="grupo">
            <div class="subgrupo-info-us">
                <div class="info-personal">
                    <h1> Informacion personal</h1>
                    <h3>Cuenta creada desde el: <?php echo $user->get_FchaRegistro(); ?> </h3>
                    <h3>Fecha de nacimiento: <?php echo $user->get_FchaNac(); ?> </h3>
                    <hr>
                    <div class="responder">
                        <a href="#modal" id="mostrar">
                            <h3 class="btn-edit ">Editar</h3>
                        </a>
                    </div>

                    <hr>
                    <h5>Ultimo cambio realizado: <?php echo $user->get_FchaUltiCambio(); ?></h5>
                </div>
            </div>
            <div class="subgrupo-info-cursos">
                <div class="cont-general">
                    <div class="bloque">
                        <div class="titulo">
                            <div class="cont">
                                <div class="info">
                                    <h1><?php echo $resCantInTerminados[0]['Cantidad']; ?></h1>
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info ">
                                    <h1><?php echo $resCantTerminados[0]['Cantidad']; ?></h1>
                                    <i class="fas fa-check-double"></i>
                                </div>
                                <div class="info ">
                                    <h1><?php echo $resCantTerminados[0]['Cantidad']; ?></h1>
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <h3> por terminar </h3>
                            </div>
                            <div class="info">
                                <h3> terminados </h3>
                            </div>
                            <div class=" info">
                                <h3> Diplomas </h3>
                            </div>
                        </div>
                    </div>
                    <div class="bloque-tittle">
                        <div class="cuadro1">
                            <h2>Ultimo curso visto:</h2>
                        </div>
                        <div class="cuadro2">
                            <a href="../pag-us/info.php">
                                <h3 class="link">Ir a tus cursos</h3>
                            </a>
                        </div>
                    </div>
                    <a href="../elcurso/vista.php?">
                        <div class="Cont-ultimo-curso">
                            <div class="bloque-ultimo-curso">
                                <div class="icon">
                                    <img src="data:image/png;base64,<?php echo base64_encode($resUltimoVisitado[0]['img']); ?>" alt="" class="miniatura">
                                </div>
                                <div class="descripcion">
                                    <div class="contenido-desc">
                                        <h2><?php echo $resUltimoVisitado[0]['Titulo']?></h2>
                                        <h3 class="porcentaje"><?php echo $resUltimoVisitado[0]['Porcentaje']?>% completo</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    </div>
    <?php include("../modal/modal.php") ?>
</body>

</html>
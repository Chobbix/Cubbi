<?php
require('../../Controladores/db_videos.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Navegacion/nav.css">
    <link rel="stylesheet" href="./videos.css">
    <link rel="stylesheet" href="../accordion/accordion.css">
    <script src="https://kit.fontawesome.com/5554cc4983.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../modal/contmodallike.css">
</head>

<body>
    <div class="bloque_principal">
        <div class="bloque_de_video">
            <div class="video">
                <?php
                    
                    foreach($capitulosRes as $row2){
                        if($row2['Tema'] == $_GET["tem"] && $row2['Capitulo'] == $_GET["cap"] && $row2['Curso'] == $_GET["curso"]){
                            if($mostrarVideo == true || $curso->get_isPrecioGeneral() != 3){
                            ?>
                                <video class="video_contenido" controls>
                                    <source src="../../Archivos/Videos/<?php echo $row2['Video'] ?>" type="video/mp4" id="id">
                                </video>
                            <?php
                            } else {
                            ?>
                                <img src="../Multimedia/cubbi.png" alt="" class="logo_base">
                            <?php
                            }
                        }
                    }
                    
                ?>
            </div>
        </div>
        <div class="bloque_de_informacion">
            <div class="bloque_cabecera_principal">
                <div class="bloque_cabecera">
                    <div class="a ">
                        <a href="../elcurso/vista.php?curso=<?php echo $_GET['curso'] ?>"> <i class="fas fa-arrow-left"></i> </a>
                    </div>
                    <div class="logotipo  a">
                        <img src="../Multimedia/cubbi.png" alt="" class="logo_base">
                    </div>
                    <div class="perfil_link a ">
                        <?php include("../Navegacion/perfil.php"); ?>
                    </div>
                </div>
                <div class="bloque_contenedor">
                    <div class="tema">
                        <div class="container">
                            <div class="accordion">
                            <?php
                                foreach($seccionesRes as $row){
                                ?>

                                    <div class="accordion-item" id="question<?php echo $row['ID_Seccion']?>">
                                        <a class="accordion-link" href="#question<?php echo $row['ID_Seccion']?>">
                                            <h3>Tema <?php echo $row['ID_Seccion']?></h3>
                                            <i class="fas fa-angle-down"></i>
                                            <i class="fas fa-angle-up"></i>
                                        </a>
                                        <div class="answer">
                                            <div class="capitulo">
                                                <?php
                                                foreach($capitulosRes as $row2){
                                                    if($row2['Tema'] == $row['ID_Seccion']){
                                                        $url = "videos.php?curso=". $_GET['curso'] ."&tem=". $row2['Tema'] ."&cap=". $row2['Capitulo'] ."#question". $row2['Tema'];
                                                    ?>
                                                        <div class="sub_temas">
                                                            <i class="fas fa-circle-notch"></i>
                                                            <a href=" <?php echo $url ?> "><p><?php echo $row2['Titulo']?></p></a>
                                                        </div>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </div>

                                        </div>
                                    </div>

                                <?php
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="end_curso">
                    <h2><a href="#modal" id="mostrar"> Finalizar curso</a></h2>
                </button>
            </div>
        </div>
    </div>
    <?php include("../modal/modallike.php") ?>
</body>

</html>
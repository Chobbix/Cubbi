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
    <div class="contenedor">
        <div class="bloque_contenedor">
            <div class="video">
                <video class="video_contenido"  controls>
                    <source src="../Multimedia/Campaña 'Cuidado con el perro' - Recojo la caca.mp4" type="video/mp4" id="id">
                </video>
            </div>
            <div class="informacion">
                <div class="cabecera">
                    <a href="../elcurso/vista.php"> <i class="fas fa-arrow-left"></i></button< /a>
                        <div class="separacion">
                            <div class="cont_video">
                                <a href="../Cursos/cursos.php"> <img src="../Multimedia/logo.png" alt="" class="logo"></a>
                            </div>
                        </div>
                        <?php include("../Navegacion/perfil.php"); ?>
                        <div class="perfil">
                            
                        </div>
                </div>
                <div class="bloque_contenedor">
                    <div class="tema">
                        <div class="container">
                            <div class="accordion">
                                <div class="accordion-item" id="question1">
                                    <a class="accordion-link" href="#question1">
                                        <h3>Tema1</h3>
                                        <i class="fas fa-angle-down"></i>
                                        <i class="fas fa-angle-up"></i>
                                    </a>
                                    <div class="answer">
                                        <div class="capitulo">
                                            <div class="sub_temas ">
                                                <i class="fas fa-circle-notch"></i>
                                                <p class="completado">Capitulo1</p>
                                            </div>
                                            <div class="sub_temas">
                                                <i class="fas fa-circle-notch"></i>
                                                <p>Capitulo2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
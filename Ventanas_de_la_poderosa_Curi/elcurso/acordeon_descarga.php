<?php
require('../../Controladores/db_acordeon_curso.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5554cc4983.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./accordion.css">
    <title>Document</title>
</head>

<body>
    <section>
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
                                        <div class="btn_img">
                                            <a href="../../Archivos/Docs/<?php echo $row2['Documento']; ?>" download>
                                                <h1> Descargar archivos</h1>
                                            </a>
                                        </div>
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
    </section>
</body>

</html>
<?php
require('../../Controladores/db_curso.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Navegacion/nav.css">
    <link rel="stylesheet" href="./curso.css">
    <link rel="stylesheet" href="./caja_comment.css">
    <link rel="stylesheet" href="../accordion/accordion.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AalL6GrPpgIxNDaDkesb_DED8QIEEMftQq_TFWnFh3Ty82OAreooXmMoedzVa2uVx7rBrSuzuxr5YZGV&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../JavaScript/Compras.js"></script>
    <link rel="stylesheet" href="../modal/contmodal.css">
    <title>Document</title>
</head>
<body>
    <div class="div">   
        <?php include ("../Navegacion/Nav.php");?>
    </div>
    <div class="contenedor">
        <div class="bloque">
            <div class="sub_bloque">
                <h1><?php echo $curso->get_titulo(); ?></h1>
                <h2 class="descripcion comentario"><?php echo $curso->get_descripcion(); ?></h2>
                <hr>
                <div class="usuario_bloque">
                    <img src="data:image/png;base64,<?php echo base64_encode($curso->get_img()); ?>" alt="" class="perfil">
                    <h3 class="texto_us">Profesor: <?php echo $curso->get_profesor(); ?></h3>
                </div>
                <hr>
                <div class="informacion_megusta">
                    <div class="personas informacion_megusta">
                        <i class="far fa-heart"></i>
                        <h6>126</h6>
                    </div>
                    <div class="personas informacion_megusta">
                        <i class="far fa-user"></i>
                        <h6 class="cantidad">126</h6>
                        <h6>Estudiantes</h6>
                    </div>
                    <div class="me_gusta informacion_megusta">
                        <h6>Actualizado el <?php echo $curso->get_cambio(); ?></h6>
                    </div>
                </div>
                <hr>
                    <div class="container">
                        <div class="accordion">
                            <?php
                                foreach($seccionesRes as $row){
                                    $precioSec = 0;
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
                                                            <hr>
                                                            <i class="fas fa-circle-notch"></i>
                                                            <p><?php echo $row2['Titulo']?></p>
                                                            <p>
                                                            <?php 
                                                                if($curso->get_isPrecioGeneral() == 3) { 
                                                                    $precioSec = $precioSec + $row2['Precio']; 
                                                                }
                                                            ?>
                                                            </p>
                                                            <hr>
                                                        </div>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <?php
                                            if($curso->get_isPrecioGeneral() == 3){
                                                ?>
                                                    <?php 
                                                        $vali = false;
                                                        if(isset($accesosRes)) { 
                                                            foreach($accesosRes as $row3) {
                                                                if($row3['ID_Seccion'] == $row['ID_Seccion']) { echo '<h2 class="comprado">Tema Comprado</h2>'; $vali = true; }
                                                            }
                                                        }

                                                        if($vali == false) {
                                                            ?>
                                                            <button class="btn_diseño_cap"><a href="#modal" id="mostrar" Curso="<?php echo $curso->get_idCurso(); ?>" Tema="<?php echo $row['ID_Seccion'] ?>" Precio="<?php echo $precioSec ?>">Comprar ahora</a></button>
                                                            <?php
                                                        }
                                                    ?>
                                                    <p>
                                                    <?php 
                                                        if($curso->get_isPrecioGeneral() == 3) { echo "$".number_format($precioSec, 2); }
                                                    ?>
                                                    </p>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

                                <?php
                                }
                            ?>
                        </div>
                    </div>
                <?php
                    if($curso->get_isPrecioGeneral() != 3){
                        ?>
                            <hr>
                                <div class="Precio">
                                    <div class="bloque_precio">
                                        <div class="contenedor_precio">
                                            <div class="ayuda">
                                                <h1>$<?php echo number_format($curso->get_precio(), 2); ?></h1>
                                            </div>
                                            <a href="#modal" id="mostrar">
                                                <div class="ayuda">                                        
                                                    <button class="btn_diseño">Comprar ahora</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <hr>
                        <?php
                    }
                ?>
                <div class="caja_comentarios">
                <?php 
                
                if($_GET['curso']){
                    $consulta = new Consulta();
                    $resultados = $consulta->query_select_comentarios_by_curso($_GET['curso']);

                    foreach($resultados as $row) {
                        include ("../Curso/caja_comment.php");
                    }
                }

                ?>              
                </div>                   
            </div>
        </div>      
    </div>
    <link rel="stylesheet" href="./moda.css">
    <?php include("../modal/modalpago.php")?>
</body>
</html>
<?php

require("../../Controladores/db_busquedas.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../Navegacion/nav.css">
    <link rel="stylesheet" href="../Cursos/cursos.css">
    <link rel="stylesheet" href="./filtro.css">
    <link rel="stylesheet" href="../modal/contmodal.css">
    <script src="../../JavaScript/Mensaje.js"></script>
</head>

<body>
    <div class="div">
        <?php include("../Navegacion/Nav.php"); ?>
    </div>
    <div class="Container">
        <div class="bloque">

            <div class="accordion-item" id="question1">
                <a class="accordion-link" href="#question1">
                    <i class="fas fa-sliders-h"></i>
                    <H1>Filtro</H1>
                </a>
                <div class="answer">
                    <div class="contenido_filto">
                        <div class="bloque_filtro">
                            <h2>Fecha de publicacion</h2>
                            <hr>
                            <li> <a href="../Pagduplicada/busqueda.php?categoria=<?php echo $categoriaGet."&opc=1&user=".$userGet."&busqueda=".$txtBusquedaGet;?>">Hoy</a></li>
                            <li> <a href="../Pagduplicada/busqueda.php?categoria=<?php echo $categoriaGet."&opc=2&user=".$userGet."&busqueda=".$txtBusquedaGet;?>">Este mes</a></li>
                            <li> <a href="../Pagduplicada/busqueda.php?categoria=<?php echo $categoriaGet."&opc=3&user=".$userGet."&busqueda=".$txtBusquedaGet;?>">Este año</a></li>
                            <li> <a href="#modal"> Personalizado</a></li>
                        </div>
                        <div class="bloque_filtro ">
                            <h2>Autor del curso</h2>
                            <hr>
                            <form action="../Pagduplicada/busqueda.php?categoria=<?php echo $categoriaGet."&opc=".$opcFiltroGet."&user=".$userGet."&busqueda=".$txtBusquedaGet."&dateIni=".$dateIni."&dateFin=".$dateFin;?>" method="post">
                                <div class="busq">
                                    <input type="text" name="user" class="us_busq" value="<?php echo $userGet ?>">
                                    <button><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <h1><?php echo $categoriaGet ?></h1>
            
            <?php
            require('../../Controladores/db_generar_busquedas.php');
            $contador = 0;

            foreach($resBusqueda as $row) {
                if($contador == 0) {
                    echo "<div class='fila'>";
                    echo "<div class='columla'>";
                }
                ?>

                <div class="contenedor">
                    <a href="../Curso/curso.php?curso=<?php echo $row['ID']; ?>"> <img src="data:image/png;base64,<?php echo base64_encode($row['Imagen']); ?>" alt="" class="video"> </a>
                    <div class="cabecera">
                        <a href="../Curso/curso.php?curso=<?php echo $row['ID']; ?>">
                            <h1><?php echo $row['Titulo']; ?></h1>
                        </a>
                    </div>
                    <h5>Impartida por: <?php echo $row['Profesor']; ?></h5>
                    <div class="informacion_megusta">
                        <div class="me_gusta informacion_megusta">
                            <i class="far fa-heart"></i>
                            <h6>126</h6>
                        </div>
                        <div class="personas informacion_megusta">
                            <i class="far fa-user"></i>
                            <h6>126</h6>
                        </div>
                    </div>
                </div>
                <?php
                $contador ++;
                if($contador == 3) {
                    echo "</div>";
                    echo "</div>";
                    $contador = 0;
                }
            }

            ?>
            
        </div>
    </div>
    <?php include("../modal/modalfiltro.php") ?>
</body>

</html>
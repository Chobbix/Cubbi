<?php

require("../../Controladores/db_nav.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5554cc4983.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="nav.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
    <form action="<?php echo $url ?>" method="post">
        <nav class="nav">
            <a href="../Cursos/cursos.php"> <img src="/Cubbi_BDM_PWCI/Ventanas_de_la_poderosa_Curi/Multimedia/logo.png" alt="logo" class="logo"> </a>
            <ul class="nav-menu">
                <ul class="menu-categorias">
                    <li><a href="#" class="clase-a">Cursos <i class="fas fa-angle-down"></i></a>
                        <ul class="longitud">
                            <li><a href="#">Categorias </a>
                                <ul class="diseno">
                                    <scroll-container class="scroll_nav">
                                    <li><a href="../Pagduplicada/busqueda.php?categoria=Todos<?php echo "&opc=6&user=Todos&busqueda=".$txtBusquedaGet;?>">Todos</a></li>
                                        <?php
                                        foreach ($resCategorias as $row) {
                                        ?>
                                            <li><a href="../Pagduplicada/busqueda.php?categoria=<?php echo $row['txt_Nombre']."&opc=6&user=Todos&busqueda=".$txtBusquedaGet;?>"> <?php echo $row['txt_Nombre'] ?> </a></li>
                                        <?php
                                        }
                                        ?>
                                    </scroll-container>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <li><a class="nav-item buscador "> <input type="text" name="busqueda" id="inputsearch" placeholder="¿Que vas a aprender?" value="<?php echo $txtBusquedaGet ?>" class="search"></li>
                <li><button href="../Pagduplicada/busqueda.php" class="nav-item buscador "> <i class="fas fa-search"></i></button></li>
                <li><a href="../pag-us/info.php"> <i class="fas fa-graduation-cap"></i> </a></li>
                <?php 
                    if($usuarioRol != "Ninguna"){
                        if($usuarioRol == "2"){
                        ?>
                            <li><a href="../chat/chat.php?Maestro=1"><i class="fas fa-comment"></i></a></li>
                        <?php
                        }
                    }
                ?>
                <?php include("../Navegacion/perfil.php"); ?>
            </ul>
        </nav>
    </form>
    </header>

</body>

</html>
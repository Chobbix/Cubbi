<?php

require("../../Controladores/db_dashboard.php");
require('funciones_dashboard.php');

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
    <script src="../../JavaScript/Mensaje.js"></script>
</head>
<body>
    <div class="div">   
        <?php include ("../Navegacion/Nav.php");?>
    </div>
    <div class="Container">
        <div class="bloque">  
            <h1>Lo mas nuevo:</h1>
            <div class="fila">
                <div class="columla"> 
                    <?php imprimir_dashboard($resNuevos); ?>
                </div>
            </div>
            <h1>Mas vendido:</h1>
            <div class="fila">
                <div class="columla">
                    <?php imprimir_dashboard($resVendidos); ?>
                </div>
            </div>
            <h1>Mejor calificado:</h1>
            <div class="fila">
                <div class="columla">           
                    <?php imprimir_dashboard($resCalificados); ?>
                </div>
            </div>
            
        </div>       
    </div>    
</body>
</html>
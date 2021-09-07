<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Navegacion/nav.css">
    <link rel="stylesheet" href="./cesta.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
<link rel="stylesheet" href="../modal/contmodal.css">
    <script src="../../JavaScript/Carrito.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="div">
        <?php include ("../Navegacion/Nav.php");?>
    </div>

    <div class="container-Titulo">
        <div class="carrito">
            <h1>Carrito de Compras</h1>
        </div>
    </div>

    <div class="contenedor-productos">
        <div class="img">
            <button class="btn-eliminar">
                <i class="fas fa-times"></i>
                <img src="../Multimedia/a.gif" alt="" class="img-propiedades">
            </button>
        </div>
        <div class="descripcion">
            <h1>Nombre del curso</h1>
        </div>
        <div class="precio">
            <h1>10000.00$</h1>
        </div>
    </div>

    <div class="contenedor-productos">
        <div class="img">
            <button class="btn-eliminar">
                <i class="fas fa-times"></i>
                <img src="../Multimedia/a.gif" alt="" class="img-propiedades">
            </button>
        </div>
        <div class="descripcion">
            <h1>Nombre del curso</h1>
        </div>
        <div class="precio">
            <h1>10000.00$</h1>
        </div>
    </div>

        <div class="contenedor-productos">
        <div class="img">
            <button class="btn-eliminar">
                <i class="fas fa-times"></i>
                <img src="../Multimedia/a.gif" alt="" class="img-propiedades">
            </button>
        </div>
        <div class="descripcion">
            <h1>Nombre del curso</h1>
        </div>
        <div class="precio">
            <h1>10000.00$</h1>
        </div>
    </div>
        <link rel="stylesheet" href="./moda.css">
    <button  class="btn-confirmar">
        <h2><a href="#modal" id="mostrar"> Confirmar compra</a></h2>
    </button>
    <?php include("../modal/modalpago.php")?>
</body>
</html>
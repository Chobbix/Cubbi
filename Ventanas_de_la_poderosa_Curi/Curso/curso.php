<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Navegacion/nav.css">
    <link rel="stylesheet" href="./curso.css">
    <link rel="stylesheet" href="./caja_comment.css">
    <title>Document</title>
</head>
<body>
    <div class="div">   
        <?php include ("../Navegacion/Nav.php");?>
    </div>
    <div class="contenedor">
        <div class="bloque">
            <div class="sub_bloque">
                <h1>*Titulo del curso*</h1>
                <h2 class="descripcion comentario">*Descripcion del curso*</h2>
                <hr>
                <div class="usuario_bloque">
                    <img src="../Multimedia/a.gif" alt="" class="perfil">
                    <h3 class="texto_us">*Nombre del maestro*</h3>
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
                        <h6>Actualizado el 6 de octubre 2020</h6>
                    </div>
                </div>
                <hr>
                    <div class="Precio">
                        <div class="bloque_precio">
                            <div class="contenedor_precio">
                                <div class="ayuda">
                                    <h1>$250</h1>
                                </div>
                                <a href="../carrito/cesta.php">
                                    <div class="ayuda">                                        
                                        <button class="btn_diseño">Comprar ahora</button>
                                    </div>
                                </a>
                                <div class="ayuda">
                                    <button class="btn_diseño">Agragar al carrito</button>
                                </div>

                            </div>
                        </div>
                                        
                    </div>
                <hr>
                <h3>Informacion del curso:</h3>
                <h3>Duracion:</h3>
                <h3>Clases:</h3>
                <hr>
                <div class="caja_comentarios">
                <?php include ("./caja_comment.php");?>                
                </div>                   
            </div>
        </div>      
    </div>
    
</body>
</html>
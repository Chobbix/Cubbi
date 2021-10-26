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

            <div class="fila">
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
                                <li><a href="">Hoy</a></li>
                                <li> <a href="">Esta semana</a></li>
                                <li> <a href="">Este mes</a></li>
                                <li> <a href="">Este año</a></li>
                                <li> <a href="#modal"> Personalizado</a></li>
                                <?php include("../modal/modalfiltro.php") ?>
                            </div>
                            <div class="bloque_filtro ">
                                <h2>Autor del curso</h2>
                                <hr>
                                <div class="busq">

                                    <input type="text" class="us_busq">
                                    <i class="fas fa-search"></i></a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columla">
                    <div class="contenedor">
                        <a href="#"> <img src="../Multimedia/a.gif" alt="" class="video"> </a>
                        <div class="cabecera">
                            <a href="../Curso/curso.php">
                                <h1>Bordado</h1>
                            </a>
                        </div>
                        <h5>Impartida por: brenda</h5>
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
                        <button class="add-carrito"> Agregar al carro</button>
                    </div>
                    <div class="contenedor">
                        <a href="#"> <img src="../Multimedia/a.gif" alt="" class="video"> </a>
                        <div class="cabecera">
                            <a href="../Curso/curso.php">
                                <h1>Bordado</h1>
                            </a>
                        </div>
                        <h5>Impartida por: brenda</h5>
                        <div class="informacion_megusta">
                            <div class="me_gusta informacion_m                                <i class=" far fa-heart"></i>
                                <h6>126</h6>
                            </div>
                            <div class="personas informacion_megusta">
                                <i class="far fa-user"></i>
                                <h6>126</h6>
                            </div>
                        </div>
                        <a href="../carrito/cesta.php"> <button class="add-carrito"> Agregar al carro</button></a>
                    </div>
                    <div class="contenedor">
                        <a href="#"> <img src="../Multimedia/a.gif" alt="" class="video"> </a>
                        <div class="cabecera">
                            <a href="../Curso/curso.php">
                                <h1>Bordado</h1>
                            </a>
                        </div>
                        <h5>Impartida por: brenda</h5>
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
                        <a href="../carrito/cesta.php"> <button class="add-carrito"> Agregar al carro</button></a>
                    </div>

                </div>
            </div>
            <div class="fila">
                <div class="columla">
                    <div class="contenedor">
                        <a href="#"> <img src="../Multimedia/a.gif" alt="" class="video"> </a>
                        <div class="cabecera">
                            <a href="../Curso/curso.php">
                                <h1>Bordado</h1>
                            </a>
                        </div>
                        <h5>Impartida por: brenda</h5>
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
                        <a href="../carrito/cesta.php"> <button class="add-carrito"> Agregar al carro</button></a>
                    </div>
                    <div class="contenedor">
                        <a href="#"> <img src="../Multimedia/a.gif" alt="" class="video"> </a>
                        <div class="cabecera">
                            <a href="../Curso/curso.php">
                                <h1>Bordado</h1>
                            </a>
                        </div>
                        <h5>Impartida por: brenda</h5>
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
                        <a href="../carrito/cesta.php"> <button class="add-carrito"> Agregar al carro</button></a>
                    </div>
                    <div class="contenedor">
                        <a href="#"> <img src="../Multimedia/a.gif" alt="" class="video"> </a>
                        <div class="cabecera">
                            <a href="../Curso/curso.php">
                                <h1>Bordado</h1>
                            </a>
                        </div>
                        <h5>Impartida por: brenda</h5>
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
                        <a href="../carrito/cesta.php"> <button class="add-carrito"> Agregar al carro</button></a>
                    </div>

                </div>
            </div>
            <div class="fila">
                <div class="columla">
                    <div class="contenedor">
                        <a href="#"> <img src="../Multimedia/a.gif" alt="" class="video"> </a>
                        <div class="cabecera">
                            <a href="../Curso/curso.php">
                                <h1>Bordado</h1>
                            </a>
                        </div>
                        <h5>Impartida por: brenda</h5>
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
                        <a href="../carrito/cesta.php"> <button class="add-carrito"> Agregar al carro</button></a>
                    </div>
                    <div class="contenedor">
                        <a href="#"> <img src="../Multimedia/a.gif" alt="" class="video"> </a>
                        <div class="cabecera">
                            <a href="../Curso/curso.php">
                                <h1>Bordado</h1>
                            </a>
                        </div>
                        <h5>Impartida por: brenda</h5>
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
                        <a href="../carrito/cesta.php"> <button class="add-carrito"> Agregar al carro</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
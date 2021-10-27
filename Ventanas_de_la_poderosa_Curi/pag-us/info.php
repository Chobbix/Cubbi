<?php

require("../../Controladores/db_dashboard.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Navegacion/nav.css">
    <link rel="stylesheet" href="info.css">
    <title>Document</title>
</head>
<body>
    <div >
        <?php include ("../Navegacion/Nav.php");?>
    </div>
    <div class="contenedor">
        <div class="menus">
            <input type="radio" id="cursos" name="categoria" value="preguntas" checked>
            <input type="radio" id="proyectos" name="categoria" value="Respuestas">
            <input type="radio" id="diplomas" name="categoria" value="diplomas">
            <input type="radio" id="guardados" name="categoria" value="guardado">
            <div class="contenedor-categoria">
                <label for="cursos"> <h2 class="design-tittle">Tus cursos</h2></label>
                <label for="diplomas"><h2 class="design-tittle">Tus diplomas</h2>  </label>
                <label for="guardados"><h2 class="design-tittle">Cursos guardados</h2>  </label>
            </div>        
            <div class="contenedor-categoria1"  id="Registro">
                <div class="bloque-contenido">
                    <div class="contenedor-cursos bloque_contenedor_cursos" >
                        <div class="fitro" >
                            <div class="contenedor-filtro">
                                <input type="radio" id="Todos" name="curso" value="todos"checked>
                                <input type="radio" id="sinver" name="curso" value="sinver">
                                <input type="radio" id="progreso" name="curso" value="progreso">
                                <input type="radio" id="Completos" name="curso" value="completos">
                                <input type="radio" id="inexistentes" name="curso" value="inexistentes">
                                <div class="contenedor-filtros">
                                    <div class="cont-btn-filtro">
                                        <ul class="nav-filtro">
                                            <li> <a href="#" class="diseño"> <h1 class="filtro_texto_diseñp">Filtro <i class="fas fa-angle-down"></i></h1></a> 
                                                <ul>
                                                    <li><a href="#"> <label for="Todos"> <h2 class="design-filtro">Todos</h2></label></a></li>
                                                    <li> <a href="#">  <label for="sinver"><h2 class="design-filtro">Sin empezar</h2> </label></a> </li>
                                                    <li> <a href="#">  <label for="progreso"><h2 class="design-filtro">Por terminar</h2>  </label></a> </li>
                                                    <li> <a href="#"><label for="Completos"><h2 class="design-filtro">Terminados</h2>  </label></a> </li>
                                                    <li> <a href="#"> <label for="inexistentes"><h2 class="design-filtro">Solo tuyos</h2>  </label></a> </li>                                              
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>                                           
                                </div>
                                <div class="bloque-menu"  id="filtrado">   
                                    <div class="contenidoooo">
                                        <div class="bloque-contenido"> 
                                            <div class="contenedor-Todos container-dis">
                                                <div class="bloque-containeer">  
                                                    <div class="container">
                                                        <div class="miniatura "> 
                                                            <img src="../Multimedia/c.gif" alt="" class="miniatura_ds"> 
                                                        </div>
                                                        <div class="titulo ">
                                                            <div class="tittle-text" >
                                                                <h4>  Bordado basico </h4>
                                                            </div>
                                                        </div>
                                                        <div class="porcentaje "> 
                                                        </div>
                                                        <div class="btn-curso ">
                                                            <a href="../elcurso/vista.php"> <button class="btn-curso-ds">Empieza ahora</button></a>
                                                            
                                                        </div>
                                                    </div>  
                                                </div>                                                                                                                              
                                            </div>                                                                                                
                                            <div class="contenedor-Todos container-dis">
                                                <div class="bloque-containeer">  
                                                    <div class="container">
                                                        <div class="miniatura ">
                                                            <img src="../Multimedia/c.gif" alt="" class="miniatura_ds">
                                                        </div>
                                                        <div class="titulo ">
                                                            <div class="tittle-text" >
                                                                <h4>  Introduccion a la programacion web </h4>                                                                               
                                                            </div>
                                                        </div>
                                                        <div class="porcentaje ">
                                                            <h5 class="texto"> 10%</h5>
                                                        </div>
                                                        <div class="btn-curso ">
                                                            <a href="../elcurso/vista.php"> <button class="btn-curso-ds">Continua ahora</button> </a>
                                                            
                                                        </div>
                                                    </div>  
                                                </div>                                                                                                                              
                                            </div>  
                                            <div class="contenedor-Todos container-dis">
                                                <div class="bloque-containeer">  
                                                    <div class="container">
                                                        <div class="miniatura ">
                                                            <img src="../Multimedia/c.gif" alt="" class="miniatura_ds"> 
                                                        </div>
                                                        <div class="titulo ">
                                                            <div class="tittle-text" >
                                                                <h4>  Introduccion a la programacion web</h4>                                                                              
                                                            </div>
                                                        </div>
                                                        <div class="porcentaje ">                                                                        
                                                        </div>
                                                        <div class="btn-curso ">
                                                            <a href="../elcurso/vista.php">  <button class="btn-curso-ds">Terminado</button> </a>
                                                        </div>
                                                    </div>  
                                                </div>                                                                                                                              
                                            </div>                                                        
                                            <div class="contenedor-sinver container-dis"  id="filtrado" >
                                                
                                            </div>  
                                            <div class="contenedor-progreso container-dis"  id="filtrado" >
                                                continuar
                                            </div>  
                                            <div class="contenedor-Completos container-dis"  id="filtrado" >
                                                completados
                                            </div>  
                                            <div class="contenedor-inexistentes container-dis"  id="filtrado" >
                                                solo tu puedes ver
                                            </div>                                                                                                                       
                                        </div> 
                                    </div>                                                                                            
                                </div>
                            </div>
                        </div>                            
                    </div>   
                    <div class="contenedor-diplomas bloque_contenedor_cursos" id="Registro">   
                    <?php include ("./cuadro.php");?>                       
                    </div>
                    <div class="contenedor-guardado bloque_contenedor_cursos" id="Registro" >   
                        <div class="contenedor-Todos container-dis">
                            <div class="bloque_general">  
                                <div class="container">
                                    <div class="miniatura ">
                                        <img src="../Multimedia/c.gif" alt="" class="miniatura_ds"> 
                                    </div>
                                    <div class="titulo ">
                                        <div class="tittle-text" >
                                            <h4>  Introduccion a la programacion web</h4>                                                                              
                                        </div>
                                    </div>
                                    <div class="btn-curso ">
                                        <a href="../Curso/curso.php"><button class="btn-curso-ds">Comprar</button></a>
                                        
                                    </div>
                                </div>                               
                            </div> 
                        </div>                                                                                                                             

                    </div> 
                </div>
            </div>                              
        </div>                               
    </div>                                
</body>
</html>               
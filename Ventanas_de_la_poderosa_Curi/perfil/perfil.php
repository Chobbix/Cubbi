<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./perfil.css"> 
    <link rel="stylesheet" href="/Cubbi_BDM_PWCI/Ventanas_de_la_poderosa_Curi/Navegacion/nav.css"> 
<title>Document</title>
</head>
<body>
    <div class="div">
    <?php include ("../Navegacion/Nav.php");?>
    </div>
    <div class="contenedor">
        <div class="cabecera">
            <img src="../Multimedia/a.gif" alt="" class="usperfil ">
            <h1 class="usname">nombre</h1>
        </div>
        <div class="grupo">
            <div class="subgrupo-info-us">
                <div class="info-personal">
                        <h1> Informacion personal</h1>
                        <h3>Cuenta creada desde el 2021</h3>
                        <h3>Fecha de nacimiento:</h3>
                        <hr>                        
                        <div class="responder">
                            <a href="#modal" id="mostrar" >  <h3 class="btn-edit ">Editar</h3>     </a>
                        </div>
                        <aside id="modal" class="modal"> 
                            <div class="contenido-modal"> 
                                <header>
                                    <h1>Editor</h1>
                                    <a href="#" class="cerrar"> <h3 class="x"> <i class="fas fa-times-circle"></i> </h3> </a>
                                </header>
                                <article>
                                    <div class="contenedor-answer">   
                                        <input type="radio" id="Preguntas" name="categoria" value="preguntas" checked >
                                        <input type="radio" id="Respuestas" name="categoria" value="Respuestas">  
                                        <div class="contenedor-categoria">
                                            <label for="Preguntas"> <h6 class="design-tittle separacion">Perfil</h6></label>
                                            <label for="Respuestas"><h6 class="design-tittle">Contraseña</h6> </label>                                      
                                        </div>
                                        <div class="bloque-menu"  id="Registro">
                                        <scroll-container>

                                            <div class="bloque-contenido">
                                                <div class="contenedor-Preg" >
                                                    <div class="bloque-editar">
                                                        <img src="../Multimedia/a.gif" alt="" class="perfilus">
                                                        <div class="divisorio">
                                                            <h1 class="selector" id="type">Nick name</h1> 
                                                            <input type="text">  
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="contenedor-resp" id="Registro" >
                                                    <div class="bloque-editar">
                                                        <div class="divisorio">
                                                            <h1 class="selector " id="type">Contraseña  original:</h1>  
                                                            <input type="text">
                                                        </div>
                                                        <div class="divisorio">
                                                            <h1 class="selector a" id="type">Nueva Contraseña</h1>  
                                                            <input type="text">

                                                        </div>
                                                        <div class="divisorio">                                                             
                                                            <h1 class="selector a" id="type">confirmar Contraseña</h1> 
                                                            <input type="text">                                        
                                                
                                                        </div>
                                                    </div>                                                                                        
                                                </div> 
                                                <div class="btn-guardado">
                                                    <a href="" class="save-modal">  <button  class="btn-guarda">Guardar</button>   </a>
                                                </div>   
                                            </div>                                      
                                        </scroll-container>                                      
                                    </div>                                     
                                </div>
                                </article>
                            </div>
                        </aside>
                        <hr>
                        <h5>Ultimo cambio realizado: 01 sep 2021</h5>
                </div>
            </div>
            <div class="subgrupo-info-cursos">
                <div class="cont-general">
                    <div class="bloque">
                        <div class="titulo">
                            <div class="cont">
                                <div class="info">
                                    <h1>04</h1>
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info ">
                                    <h1>04</h1>
                                    <i class="fas fa-check-double"></i>
                                </div>
                                <div class="info ">
                                    <h1>04</h1>
                                    <i class="fas fa-user-graduate"></i>
                                </div>                            
                            </div>                           
                        </div>
                        <div class="cont">
                            <div class="info">
                                <h3> por terminar </h3>
                            </div>
                            <div class="info">
                                <h3> terminados </h3>
                            </div>
                            <div class=" info">
                                <h3> Diplomas </h3>
                            </div>
                        </div>                        
                    </div>      
                        <div class="bloque-tittle">
                            <div class="cuadro1"> <h2>Ultimo curso visto:</h2></div>
                            <div class="cuadro2">
                                <a href="../pag-us/info.php">
                                    <h3 class="link">Ir a tus cursos</h3>
                                </a>
                            </div>
                        </div>
                        <div class="Cont-ultimo-curso">
                            <a href="#" class="bloque-ultimo-curso">
                                <div class="icon">
                                    <img src="../Multimedia/b.gif" alt="" class="miniatura">
                                </div>
                                <div class="descripcion">
                                    <div class="contenido-desc">
                                        <h2>Curso</h2> 
                                        <h3 class="porcentaje">6% completo</h3>

                                    </div>                                   
                                </div>
                            </a>

                        </div>
                        <div class="bloque-tittle">
                            <div class="cuadro1"><h2 >Ultimo proyecto:</h2></div>
                            <div class="cuadro2">
                                <a href="../pag-us/info.php">
                                    <h3 class="link">Ir a tus proyectos</h3>
                                </a>
                            </div>
                        </div>       
                        <div class="Cont-ultimo-curso">
                            <a href="#" class="bloque-ultimo-curso">
                                <div class="icon">
                                    <img src="../Multimedia/b.gif" alt="" class="miniatura">
                                </div>
                                <div class="descripcion">
                                    <div class="contenido-desc">
                                        <h2>Curso</h2>                                        
                                    </div>                                   
                                </div>
                            </a>

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
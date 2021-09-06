<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../elcurso/vista.css">
    <link rel="stylesheet" href="../Navegacion/nav.css">
</head>
<body>    
    <div class="div">   
        <?php include ("../Navegacion/Nav.php");?>
    </div>
    <div class="contenedor">
        <div class="bloque">
            <div class="bloque_video">
                <div class="sub_bloque_contenido">
                    <div class="dis_bloque">
                        <div class="cabecera_titulo">                            
                            <div class=""> <h1 class="text">*Nombre curso*</h1></div>
                            <div class=""> *impartido por: Brenda*</div>
                        </div>
                        <div class="">
                            <h1>Clase 1.- *Titulo del capitulo*</h1>
                            <a href="../videos/videos.php"> <button class="btn_dis"> Continuar curso</button> </a>
                            
                    </div>
                        
                    </div>
                    
                </div>
                <div class="sub_bloque_contenido">
                    <h1 class="dis_bloque">
                        <a href="../videos/videos.php">  <img src="../Multimedia/b.gif" alt="" class="miniatura"> </a>
                    </h1>
                </div>
            </div>
            <div class="bloque_menu_video">
                <div class="cabecera">
                    <div class="bloque_cabecera">
                        <input type="radio" name="categoria" id="Visualizacion" value="visualizacion" checked>
                        <input type="radio" name="categoria" id="Archivos" value="Archivos">
                        <input type="radio" name="categoria" id="Comentarios" value="Comentarios">
                        <div class="cabecera_items">
                            <label for="Visualizacion" class="design"><h3 class=ds_btm>Informacion</h3></label>
                            <label for="Archivos" class="design"> <h3 class=ds_btm>Clases y Archivos</h3> </label>
                            <label for="Comentarios" class="design"> <h3 class=ds_btm>Comentarios</h3> </label>
                        </div>
                        <div class="contenedor_info " id="componentes_cabecra">
                            <div class="contenido_informacion">
                                <h2>hola</h2>
                            </div>
                            <div class="contenido_archivos"  id="componentes_cabecra">
                                <h3>hola</h3>
                            </div>
                            <div class="contenido_comentarios"  id="componentes_cabecra">
                                <h4>hola</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
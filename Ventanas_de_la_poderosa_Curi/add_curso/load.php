<link rel="stylesheet" href="../Navegacion/nav.css">
<link rel="stylesheet" href="./load.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../../JavaScript/Load2.js"></script>
<?php include("../../Controladores/db_load.php"); ?>
<?php include("../Navegacion/Nav.php"); ?>

<div class="contenedor">
    <div class="menus">
        <input type="radio" id="cursos" name="categoria" value="preguntas" checked>
        <input type="radio" id="proyectos" name="categoria" value="Respuestas">
        <input type="radio" id="diplomas" name="categoria" value="diplomas">
        <input type="radio" id="guardados" name="categoria" value="guardado">
        <div class="contenedor-categoria">
            <label for="cursos">
                <h2 class="design-tittle">Crear curso</h2>
            </label>
            <label for="diplomas">
                <h2 class="design-tittle">Tus cursos</h2>
            </label>
            <label for="guardados">
                <h2 class="design-tittle">Informacion cursos </h2>
            </label>
        </div>
        <div class="contenedor-categoria1" id="Registro">
            <div class="bloque-contenido">
                <div class="contenedor-cursos bloque_contenedor_cursos">
                    <div class="cabecera">
                        <input type="radio" id="Info" name="a" value="Info" checked>
                        <input type="radio" id="contenido" name="a" value="contenido">
                        <div class="hi">
                            <div div class="bontones_seleccion">
                                <label for="Info">
                                    <h1 class="text_decoration">informacion general</h1>
                                </label>
                            </div>
                            <div class="bontones_seleccion">
                                <label for="contenido">
                                    <h1 class="text_decoration">Contenido curso</h1>
                                </label>
                            </div>
                            <button class="save_btn">
                                <h3> Guardar cambios </h3>
                            </button>
                        </div>
                        <hr>
                        <div class="contenido_caja" id="filtrado">
                            <div class="contenedor-Info">
                                <div class="caja">
                                    <div class="subcaja">

                                        <h1>Titulo</h1>
                                        <input name="Titulo" id="Titulo" type="text" placeholder="Ingresa titulo" class="text_input">
                                        <h1>Descripcion</h1>
                                        <input name="Descripcion" id="Descripcion" type="text" placeholder="Ingresa descripcion" class="text_input">
                                        <h1>Agregar Categoria</h1>

                                        <input name="Categoria" id="Categoria" type="text" placeholder="Programacion, manualidades, etc." class="text_input">
                                        <button class="plus add_categoria"><i class="fas fa-plus-circle"></i></button>
                                        <h1>Selecciona Categorias</h1>
                                        <select id="Cat_select" class="select"  multiple="multiple">
                                        <?php

                                        foreach($resCategorias as $row) {
                                            echo "<option value=". $row['ID_Categoria'] .'>'. $row['txt_Nombre'] ."</option>";
                                        }
                                        
                                        ?>
                                        </select>
                                        <h1>Duracion</h1>
                                        <input id="Duracion" type="text" placeholder="tiempo estimado" class="text_input">
                                        <h1 id="Costoh1">Costo:</h1>
                                        <input id="Costo" type="text" placeholder="Asigna un precio" class="text_input">
                                        <h1>Tipo de pago:</h1>
                                        <select name="Tipodepago" id="tipodepago" class="text_input">
                                            <option value="1">Gratis</option>
                                            <option value="2">Curso completo</option>
                                            <option value="3">Pago por nivel</option>
                                        </select>

                                    </div>
                                    <div class="subcaja">
                                        <div class="caja_imagen">
                                            <h1>Imagen del curso </h1>
                                            <div class="img_box">
                                                <div class="btn_img">
                                                    <h1> Subir img</h1>
                                                    <input type="file" id="id_imgCurso" name="imagensubida" accept="image/png, .jpeg, .jpg" class="btn_enviar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caja_imagen">
                                            <h1>Video presentacion</h1>
                                            <div class="img_box">
                                                <div class="btn_img">
                                                    <h1> Subir video</h1>
                                                    <input type="file" id="id_vidCurso" name="imagensubida" accept="video/*"" class=" btn_enviar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contenedor-contenido">
                                <div class="caja">
                                    <div class="subcaja caja_cap">
                                        <div class="bloque_nivel">
                                            <h1>Tema 1</h1>

                                            <div class="cabecera_nivel">
                                                <div class="capitulos">
                                                    <h1>Capitulo 1</h1>
                                                    <div class="contenido">
                                                        <div class="nombre_del_subcapitulo">
                                                            <h2>Titulo</h2>
                                                            <input type="text" placeholder=" Titulo del nivel">
                                                        </div>
                                                        <div class="btn_contenidos">
                                                            <div class="btn_video1">
                                                                <h1> Subir video</h1>
                                                                <input type="file" name="imagensubida" accept="video/*"" class=" btn_enviar">
                                                            </div>
                                                            <div class="btn_video">
                                                                <h1> Subir documentos</h1>
                                                                <input type="file" name="imagensubida" accept="" class="btn_enviar">
                                                            </div>
                                                            <div class="costo" id="boxcosto">
                                                                <h1>Costo:</h1>
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btd_addchap">
                                                <button class="plus btn_cap" NumeroSec="1" NumeroCap="1">
                                                    <i class="fas fa-plus-circle"></i>
                                                    <h5>Agregar otro capitulo</h5>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_addsec" NumeroSec="1">
                                    <button class="plus"><i class="fas fa-plus-circle"></i></button>
                                    <h5>Agregar otra seccion</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require("cursos_creados.php"); ?>
                <?php require("ingresos_generados.php"); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--
<div class="contenedor">
    <div class="bloque">
        <div class="contenido">
            <div class="cabecera">
                <h1>Agregar curso</h1>
            </div>
            <div class="menu_contenido">

            </div>
            <div class="caja_contenido">
                <h1>Titulo del curso:</h1>
                <input type="text" placeholder="Inserta titulo aqui">
                <h1>Descripcion:</h1>
                <input type="text" placeholder="Inserta descripcion aqui">
            </div>
        </div>
    </div>
</div>
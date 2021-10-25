<link rel="stylesheet" href="../Navegacion/nav.css">
<link rel="stylesheet" href="./load.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../../JavaScript/Load2.js"></script>
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

                                        <form id="formAjax" method="POST">
                                            <h1>Titulo</h1>
                                            <input name="Titulo" id="Titulo" type="text" placeholder="Ingresa titulo" class="text_input">
                                            <h1>Descripcion</h1>
                                            <input name="Descripcion" id="Descripcion" type="text" placeholder="Ingresa descripcion" class="text_input">
                                            <h1>Categoria</h1>

                                            <input name="Categoria" id="Categoria" type="text" placeholder="Programacion, manualidades, etc." class="text_input">
                                            <button class="plus"><i class="fas fa-plus-circle"></i></button>
                                            <h1>Categoria</h1>
                                            <select id="Cat_select" class="select"  multiple="multiple">
                                                    <option value="curso1">Curso1</option>
                                                    <option value="curso2">Curso2</option>
                                                    <option value="curso3">Curso3</option>
                                                    <option value="curso4">Curso4</option>
                                            </select>
                                            <h1>Duracion</h1>
                                            <input id="Duracion" type="text" placeholder="tiempo estimado" class="text_input">
                                            <h1>Costo:</h1>
                                            <input id="Costo" type="text" placeholder="Asigna un precio" class="text_input">
                                            <h1>Tipo de pago:</h1>
                                            <select name="Tipodepago" id="tipodepago" class="text_input">
                                                <option value="1">Gratis</option>
                                                <option value="2">Curso completo</option>
                                                <option value="3">Pago por nivel</option>
                                            </select>
                                        </form>

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
                <div class="contenedor-diplomas bloque_contenedor_cursos" id="Registro">
                    <div class="cont_cursos">
                        <div class="bloque_de_cursos">
                            <div class="curso_cajita">
                                <div class="info_basica_curso">
                                    <h1>*Titulo del curso*</h1>
                                    <h1>*borrador*</h1>
                                </div>
                                <div class="btn_edicion">
                                    <div class="">
                                        <button class="ds_delete">
                                            <label for="cursos">
                                                <h1>Editar</h1>
                                            </label>
                                        </button>
                                    </div>
                                    <button class="ds_delete">
                                        <h1>Eliminar</h1>
                                    </button>
                                </div>
                            </div>
                            <div class="curso_cajita">
                                <div class="info_basica_curso">
                                    <h1>*Titulo del curso*</h1>
                                    <h1>*Publicado*</h1>
                                </div>
                                <div class="btn_edicion">
                                    <div class="">
                                        <button class="ds_delete">
                                            <label for="cursos">
                                                <h1>Editar</h1>
                                            </label>
                                        </button>
                                    </div>
                                    <button class="ds_delete">
                                        <h1>Eliminar</h1>
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="contenedor-guardado bloque_contenedor_cursos" id="Registro">
                    <div class="cont_cursos">
                        <div class="contenedor-Todos container-dis">
                            <div class="fitro">
                                <div class="contenedor-filtro">
                                    <input type="radio" id="Todos" name="curso" value="todos" checked>
                                    <input type="radio" id="sinver" name="curso" value="sinver">
                                    <input type="radio" id="progreso" name="curso" value="progreso">
                                    <input type="radio" id="Completos" name="curso" value="completos">
                                    <input type="radio" id="inexistentes" name="curso" value="inexistentes">
                                    <div class="contenedor-filtros">
                                        <div class="cont-btn-filtro">
                                            <ul class="nav-filtro">
                                                <li> <a href="#" class="diseño">
                                                        <h1 class="filtro_texto_diseñp">Filtro <i class="fas fa-angle-down"></i></h1>
                                                    </a>
                                                    <ul>
                                                        <li><a href="#"> <label for="Todos">
                                                                    <h2 class="design-filtro">Todos</h2>
                                                                </label></a></li>
                                                        <li> <a href="#"> <label for="sinver">
                                                                    <h2 class="design-filtro">Curso especifico</h2>
                                                                </label></a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bloque-menu" id="filtrado">
                                        <div class="contenedor-Todos container-dis">

                                            <div class="bloque-containeer">
                                                <div class="container">
                                                    <div class="puntuacion"> <i class="far fa-heart"></i>
                                                        <h1>520 alumnos les gusta tus curso</h1>
                                                    </div>
                                                    <div class="puntuacion"><i class="fas fa-users"></i>
                                                        <h1>525 alumnos</h1>
                                                    </div>
                                                    <div class="puntuacion"> <i class="fas fa-coins"></i>
                                                        <h1>Generaste $1200 pesos</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contenedor-sinver container-dis" id="filtrado">
                                            <div class="caja_informativa">
                                                <section>
                                                    <div class="container">
                                                        <div class="accordion">
                                                            <div class="accordion-item" id="question1">
                                                                <a class="accordion-link" href="#question1">
                                                                    <h3>Tema1</h3>
                                                                    <i class="fas fa-angle-down"></i>
                                                                    <i class="fas fa-angle-up"></i>
                                                                </a>
                                                                <div class="answer">
                                                                    <?php include("./cuadrodesc.php") ?>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item" id="question2">
                                                                <a class="accordion-link" href="#question2">
                                                                    <h3>Tema 2</h3>
                                                                    <i class="fas fa-angle-down"></i>
                                                                    <i class="fas fa-angle-up"></i>
                                                                </a>
                                                                <div class="answer">
                                                                    <?php include("./cuadrodesc.php") ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
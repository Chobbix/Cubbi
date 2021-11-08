<link rel="stylesheet" href="../Navegacion/nav.css">
<link rel="stylesheet" href="./load.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../../JavaScript/Load2.js"></script>
<script src="../../JavaScript/Load_Edit.js"></script>
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

                <?php 
                if(isset($_GET['editando'])) require("ventana_editar.php");
                else require("ventana_agregar.php");
                ?>

                <?php 
                require("cursos_creados.php");
                ?>

                <?php 
                require("ingresos_generados.php"); 
                ?>
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
<link rel="stylesheet" href="../Navegacion/nav.css">
<link rel="stylesheet" href="./chat.css">
<link rel="stylesheet" href="./mensajes.css">
<?php include("../Navegacion/Nav.php"); ?>

<div class="bloque_chat">
    <input type="radio" id="a" name="categoria" value="preguntas" checked>
    <div class="menus">

        <input type="radio" id="chat1" name="categoria" value="chat1" checked>
        <input type="radio" id="chat2" name="categoria" value="chat2">
        <input type="radio" id="chat3" name="categoria" value="chat3">
        <input type="radio" id="chat4" name="categoria" value="chat4">
        <div class="contenedor-categoria">
            <label for="chat1">
                <h6 class="design-tittle">Chat1</h6>
            </label>
            <label for="chat2">
                <h6 class="design-tittle">Chat2</h6>
            </label>
            <label for="chat3">
                <h6 class="design-tittle">Chat3</h6>
            </label>
            <label for="chat4">
                <h6 class="design-tittle"> Chat4</h6>
            </label>
        </div>
        <div class="bloque-menu" id="id">
            <div class="bloque-contenido">
                <div class="contenedor-chat1 block">
                    1
                    <?php include("./mensajes.php"); ?>
                </div>
                <div class="contenedor-chat2 block" id="id">
                    2
                    <?php include("./mensajes.php"); ?>
                </div>
                <div class="contenedor-chat3 block" id="id">
                    3
                    <?php include("./mensajes.php"); ?>
                </div>
                <div class="contenedor-chat4 block" id="id">
                    4
                    <?php include("./mensajes.php"); ?>
                </div>
            </div>
        </div>
    </div>

</div>
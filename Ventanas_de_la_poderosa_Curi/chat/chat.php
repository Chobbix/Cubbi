<link rel="stylesheet" href="../Navegacion/nav.css">
<link rel="stylesheet" href="./chat.css">
<link rel="stylesheet" href="./mensajes.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../../JavaScript/Chats.js"></script>
<?php require("../../Controladores/db_chat.php"); ?>
<?php include("../Navegacion/Nav.php"); ?>

<div class="bloque_chat">
    <input type="radio" id="a" name="categoria" value="preguntas" checked>
    <div class="menus">

    <?php
        if(!isset($_GET['Maestro'])) {
            ?>
            <input type="radio" id="chat1" name="categoria" value="chat1" checked>
            <?php
        } else {
            ?>
            <input type="radio" id="chat1" name="categoria" value="chat1" checked>
            <?php
            $cantidad = count($resChatsActivos);

            for($i=0; $i < $cantidad; $i++) {
                ?>
                <input type="radio" id="chat<?php echo $i + 2 ?>" name="categoria" value="chat<?php echo $i + 2 ?>">
                <?php
            }
            ?>
            <?php
        }
    ?>

        <div class="contenedor-categoria">
        <?php
            if(!isset($_GET['Maestro'])) {
                foreach($resChatsActivos as $row){
                    ?>
                        <label for="chat1">
                            <div class="chats">
                                <h6 class="design-tittle"><?php echo $row['Titulo'] ?></h6>
                            </div>
                        </label>
                    <?php
                }
            } else {
                ?>
                <?php
                $cantidad = 1;

                foreach($resChatsActivos as $row) {
                    ?>
                        <label for="chat<?php echo $cantidad ?>">
                            <div class="chats">
                                <h6 class="design-tittle"><?php echo $row['Usuario'];?></h6>
                            </div>
                        </label>
                    <?php
                    $cantidad ++;
                }
                ?>
                <?php
            }
        ?>
        </div>
        <div class="bloque-menu" id="id">
            <div class="bloque-contenido">
                <?php
                $cantidad = 1;

                foreach($resChatsActivos as $row) {
                    ?>
                        <div class="contenedor-chat<?php echo $cantidad ?> block">
                            <?php include("./mensajes.php"); ?>
                        </div>
                    <?php
                    $cantidad ++;
                }
                ?>
            </div>
        </div>
    </div>

</div>
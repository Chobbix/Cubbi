<!--Hola, soy un archivo PHP creado por Victor. Provecho Brenda-->
<?php
    require("PHP_Classes/usuarios.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <?php
        $juan = new Usuario("Juan23", "Caballo69", "Juan", "Martinez", "juan@hotmail.com");
        $juan->query_insert_Usuario();
        echo "FINALIZADO";
    ?>
</body>
</html>
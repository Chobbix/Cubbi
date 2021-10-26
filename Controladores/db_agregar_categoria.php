<?php

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/categorias.php");

echo $txt_categoria = $_POST['txt_categoria'];

$categoria = new Categorias();
$categoria->set_categoria($txt_categoria);

$categoria->query_insert_categoria();

?>
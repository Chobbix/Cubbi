<?php

require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");

$consulta = new Consulta();
$resCategorias = $consulta->query_select_all_categorias();

?>
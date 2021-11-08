<?php

session_start();
require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");

$consulta = new Consulta();
$resCategorias = $consulta->query_select_all_categorias();
$resCursosMaestro = $consulta->query_select_Cursos_By_Maestro($_SESSION['ses_usuario']);

?>
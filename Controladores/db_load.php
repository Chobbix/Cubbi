<?php

session_start();
require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");

$consulta = new Consulta();
$resCategorias = $consulta->query_select_all_categorias();
$resCursosMaestro = $consulta->query_select_Cursos_By_Maestro($_SESSION['ses_usuario']);

if(isset($_GET['editando'])) {
    $resCursoModificar = $consulta->query_select_curso_by_id($_GET['curso']);
    $resSecciones = $consulta->query_select_secciones_by_curso($_GET['curso']);
    $resCapitulos = $consulta->query_select_capitulos_by_curso($_GET["curso"]);
}

?>
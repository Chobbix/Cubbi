<?php

session_start();
require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");

$opcFiltro = 1;

$consultaRegistrados = new Consulta();
$resCursosregistrados = $consultaRegistrados->query_select_cursosReg_By_Usuario($_SESSION['ses_usuario']);

?>
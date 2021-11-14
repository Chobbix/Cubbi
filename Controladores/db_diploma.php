<?php

require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");

session_start();

$diploma = new Consulta();
$resDiplomaInfo = $diploma->query_select_info_diploma($_SESSION['ses_usuario'], $_GET['curso']);

?>
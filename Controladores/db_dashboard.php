<?php

require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");
require("../../PHP_Classes/dashboard.php");

$dashboard = new Dashboard();

$resNuevos = $dashboard->query_select_mas_nuevos();
$resVendidos = $dashboard->query_select_mas_vendidos();
$resCalificados = $dashboard->query_select_mejor_calificados();

?>
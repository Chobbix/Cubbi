<?php

$consultaCat = new Consulta();
$resCategorias = $consultaCat->query_select_all_categorias();

$categoriaGet = 'Todos';
if (isset($_GET['categoria'])) {
    $categoriaGet = $_GET['categoria'];
}

$opcFiltroGet = '6';
if (isset($_GET['opc'])) {
    $opcFiltroGet = $_GET['opc'];
}

$userGet = 'Todos';
if (isset($_GET['user'])) {
    $userGet = $_GET['user'];
}

$txtBusquedaGet = '';

if (isset($_POST['busqueda'])) {
    $txtBusquedaGet = $_POST['busqueda'];
} 
else if (isset($_GET['busqueda'])) {
    $txtBusquedaGet = $_GET['busqueda'];
}

$url = "../Pagduplicada/busqueda.php?categoria=".$categoriaGet."&opc=".$opcFiltroGet."&user=".$userGet."&busqueda=".$txtBusquedaGet;

?>
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

if (isset($_POST['user'])) {
    $userGet = $_POST['user'];
} 
else if (isset($_GET['user'])) {
    $userGet = $_GET['user'];
}

$txtBusquedaGet = '';

if (isset($_POST['busqueda'])) {
    $txtBusquedaGet = $_POST['busqueda'];
} 
else if (isset($_GET['busqueda'])) {
    $txtBusquedaGet = $_GET['busqueda'];
}

$dateIni = '0000-01-01';
$dateFin = '3000-01-01';

if (isset($_POST['dateIni'])) {
    $dateIni = $_POST['dateIni'];
} 
else if (isset($_GET['dateIni'])) {
    $dateIni = $_GET['dateIni'];
}

if (isset($_POST['dateFin'])) {
    $dateFin = $_POST['dateFin'];
} 
else if (isset($_GET['dateFin'])) {
    $dateFin = $_GET['dateFin'];
}

$url = "../Pagduplicada/busqueda.php?categoria=".$categoriaGet."&opc=6&user=Todos&busqueda=".$txtBusquedaGet;

$usuarioID = "Ninguna";
$usuarioRol = "Ninguna";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['ses_usuario'])) {
    $usuarioID = $_SESSION['ses_usuario'];
    $usuarioRol = $_SESSION['rol'];
}

?>
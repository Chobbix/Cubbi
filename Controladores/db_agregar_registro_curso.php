<?php

session_start();

require('../PHP_Classes/conexion.php');
require('../PHP_Classes/curso_reg.php');

$precio = $_POST['precio'];
$tPago = $_POST['tPago'];
$curso = $_POST['curso'];

$registro = new Curso_reg();
$registro->set_idCurso($curso);
$registro->set_idUsuario($_SESSION['ses_usuario']);
$registro->set_Monto($precio);
$registro->set_TipoPago($tPago);

$registro->query_insert_registro();

?>
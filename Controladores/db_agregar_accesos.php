<?php

session_start();

require('../PHP_Classes/conexion.php');
require('../PHP_Classes/cursos.php');

echo $curso = $_POST['curso'];
echo $seccion = $_POST['seccion'];
echo $usuario = $_SESSION['ses_usuario'];

$acceso = new Cursos();
$acceso->set_idCurso($curso);
$acceso->set_idSeccion($seccion);
$acceso->set_idUsuario($usuario);

$acceso->query_insert_acceso();

?>
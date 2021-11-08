<?php

session_start();
require("../PHP_Classes/conexion.php");
require("../PHP_Classes/mensajes.php");

echo $Usuario = $_POST['usuario'];
echo $Curso = $_POST['curso'];
echo $Mensaje = $_POST['mensaje'];
echo $isFormEscuela = $_POST['isFormEscuela'];

$mensaje = new Mensajes();
$mensaje->set_idUsuario($Usuario);
$mensaje->set_idCurso($Curso);
$mensaje->set_Mensaje($Mensaje);
$mensaje->set_isFromEscuela($isFormEscuela);

$mensaje->query_insert_mensaje();

?>
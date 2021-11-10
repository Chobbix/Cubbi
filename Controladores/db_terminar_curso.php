<?php

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/calificaciones.php");

echo $curso = $_POST['curso'];
echo $usuario = $_POST['usuario'];
echo $opc = $_POST['opc'];

$calificacion = new Calificaciones();
$calificacion->set_idCurso($curso);
$calificacion->set_idUsuario($usuario);

if($opc == "dislike") {
    $calificacion->set_dislike(1);
    $calificacion->set_like(0);
} else {
    $calificacion->set_dislike(0);
    $calificacion->set_like(1);
}

$calificacion->query_insert_like_dislike();

?>
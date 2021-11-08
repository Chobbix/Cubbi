<?php

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/cursos.php");

echo $Curso = $_POST['curso'];

$mensaje = new Cursos();
$mensaje->set_idCurso($Curso);

$mensaje->query_reactivar_curso();

?>
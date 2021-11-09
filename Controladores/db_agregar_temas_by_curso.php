<?php 

session_start();

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/secciones.php");

echo $ID_Seccion = $_POST['ID_Seccion'];
echo $ID_Curso = $_POST['ID_Curso'];

$seccion = new Secciones();
$seccion->set_idSeccion($ID_Seccion);
$seccion->set_idCurso($ID_Curso);

$seccion->query_insert_seccion_By_Curso();

?>
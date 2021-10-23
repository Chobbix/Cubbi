<?php 

session_start();

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/secciones.php");

$ID_Seccion = $_POST['ID_Seccion'];

$seccion = new Secciones();
$seccion->set_idSeccion($ID_Seccion);

$seccion->query_insert_seccion();

?>
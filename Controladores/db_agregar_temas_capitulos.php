<?php 

session_start();

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/consultas.php");
require("../PHP_Classes/capitulos.php");

$ID_Seccion = $_POST['ID_Seccion'];
$ID_Capitulo = $_POST['ID_Capitulo'];
$titulo = $_POST['Titulo'];
$costo = $_POST['Costo'];


$capitulo = new Capitulos();
$capitulo->set_idSeccion($ID_Seccion);
$capitulo->set_idCapitulo($ID_Capitulo);
$capitulo->set_titulo($titulo);
$capitulo->set_precio($costo);


$directorio = "../Archivos/Videos/";
$archivo = $directorio.basename($_FILES['Video']['name']);
move_uploaded_file($_FILES['Video']['tmp_name'], $archivo);
$capitulo->set_rutaVid($_FILES['Video']['name']);

$directorio = "../Archivos/Docs/";
$archivo = $directorio.basename($_FILES['Doc']['name']);
move_uploaded_file($_FILES['Doc']['tmp_name'], $archivo);
$capitulo->set_rutaDoc($_FILES['Doc']['name']);

$capitulo->query_insert_capitulo();

?>
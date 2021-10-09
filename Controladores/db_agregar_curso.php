<?php 

session_start();

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/cursos.php");

$titulo = $_POST['Titulo'];
$descripcion = $_POST['Descripcion'];
$categoria = $_POST["Categoria"];
$duracion = $_POST["Duracion"];
$costo = $_POST["Costo"];
$tipoPago = $_POST["TipoPago"];


$curso = new Cursos();
$curso->set_idUsuario($_SESSION['ses_usuario']);
$curso->set_idCategoria(1);
$curso->set_niveles(5);
$curso->set_titulo($titulo);
$curso->set_descripcion($descripcion);
$curso->set_duracion($duracion);
$curso->set_isPrecioGeneral(true);
$curso->set_precio($costo);

$imgData =addslashes(file_get_contents($_FILES['img']['tmp_name']));
$curso->set_img($imgData);


echo $curso->query_insert_curso();

?>
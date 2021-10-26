<?php 

session_start();

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/cursos.php");
require("../PHP_Classes/categorias.php");

$titulo = $_POST['Titulo'];
$descripcion = $_POST['Descripcion'];
echo $categoria = $_POST["Cat_select"];
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

$directorio = "../Archivos/Videos/";
$archivo = $directorio.basename($_FILES['vid']['name']);
move_uploaded_file($_FILES['vid']['tmp_name'], $archivo);

$curso->set_img($imgData);
$curso->set_video($_FILES['vid']['name']);


$curso->query_insert_curso();

$newCategoria = new Categorias();

$array = explode(",", $categoria);

foreach($array as $value) {
    $newCategoria->set_idCategoria($value);
    $newCategoria->query_insert_categoria_curso();
}

?>
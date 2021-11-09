<?php 

session_start();

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/cursos.php");
require("../PHP_Classes/categorias.php");

echo $titulo = $_POST['Titulo'];
echo $descripcion = $_POST['Descripcion'];
echo $duracion = $_POST["Duracion"];
echo $costo = $_POST["Costo"];
echo $tipoPago = $_POST["TipoPago"];
echo $idCurso = $_POST["curso"];


$curso = new Cursos();
$curso->set_idUsuario($_SESSION['ses_usuario']);
$curso->set_idCategoria(1);
$curso->set_niveles(5);
$curso->set_titulo($titulo);
$curso->set_descripcion($descripcion);
$curso->set_duracion($duracion);
$curso->set_isPrecioGeneral($tipoPago);
$curso->set_precio($costo);
$curso->set_idCurso($idCurso);

if(isset($_FILES['img']['tmp_name'])){
    $imgData =addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $curso->set_img($imgData);
} else {
    echo "imagen llenandose vacia";
    $curso->set_img("");
}

if(isset($_FILES['vid']['tmp_name'])){
    $directorio = "../Archivos/Videos/";
    $archivo = $directorio.basename($_FILES['vid']['name']);
    move_uploaded_file($_FILES['vid']['tmp_name'], $archivo);
    $curso->set_video($_FILES['vid']['name']);
} else {
    $curso->set_video("");
}

$curso->query_update_curso();

?>
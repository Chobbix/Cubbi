<?php
session_start();

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/comentarios.php");

echo $txt_comentario = $_POST['comment'];
echo $id_Curso = $_POST['curso'];

$comentario = new Comentarios();
$comentario->set_idCurso($id_Curso);
$comentario->set_comentario($txt_comentario);
$comentario->set_idUsuario($_SESSION['ses_usuario']);

$comentario->query_insert_comentario();

?>
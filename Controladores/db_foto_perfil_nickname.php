<?php
require("../PHP_Classes/conexion.php");
require("../PHP_Classes/usuarios.php");

session_start();

$imgData = addslashes(file_get_contents($_FILES['imagensubida']['tmp_name']));
echo $nickname = $_POST["nickname"];
echo $_SESSION['ses_usuario'];

$user = new Usuario(0, '', '', '', '', '', '', '');
$user->set_img($imgData);
$user->set_NomUser($nickname);
$user->set_idUsuario($_SESSION['ses_usuario']);

$user->query_update_imgPerfil_nickname();

?>
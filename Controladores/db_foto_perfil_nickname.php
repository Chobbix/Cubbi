<?php
require("../PHP_Classes/conexion.php");
require("../PHP_Classes/usuarios.php");

session_start();

echo $nickname = $_POST["nickname"];
echo $pass = $_POST["pass_new"];
echo $_SESSION['ses_usuario'];

$user = new Usuario(0, '', '', '', '', '', '', '');
$user->set_NomUser($nickname);
$user->set_Contra($pass);
$user->set_idUsuario($_SESSION['ses_usuario']);

if(isset($_FILES['imagensubida']['tmp_name'])){
    $imgData = addslashes(file_get_contents($_FILES['imagensubida']['tmp_name']));
    $user->set_img($imgData);
} else {
    $user->set_img("");
}

$user->query_update_imgPerfil_nickname();
header('location: ../Ventanas_de_la_poderosa_Curi/perfil/perfil.php');

?>
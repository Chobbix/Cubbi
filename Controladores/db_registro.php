<?php
require("../PHP_Classes/conexion.php");
require("../PHP_Classes/usuarios.php");

$rol = $_POST["tipous"];
$nickname = $_POST["nickname"];
$nombre = $_POST["nombre"];
$apes = $_POST["apellidos"];
$correo = $_POST["correo"];
$genero = $_POST["genero"];
$fNac = $_POST["trip-start"]; 
$password = $_POST["password"];

$user = new Usuario($rol, $nickname, $password, $nombre, $apes, $correo, $genero, $fNac);
$_SESSION['ses_usuario'] = $user->query_insert_Usuario();
session_start();
echo $_SESSION['ses_usuario'];

header('location: ../Ventanas_de_la_poderosa_Curi/principal/h.php');
?>
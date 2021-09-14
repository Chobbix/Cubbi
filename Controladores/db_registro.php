<?php

require("../PHP_Classes/usuarios.php");

echo $rol = $_POST["tipous"];
echo $nickname = $_POST["nickname"];
echo $nombre = $_POST["nombre"];
echo $apes = $_POST["apellidos"];
echo $correo = $_POST["correo"];
echo $genero = $_POST["genero"];
echo $fNac = $_POST["trip-start"]; 
echo $password = $_POST["password"];

$user = new Usuario($rol, $nickname, $password, $nombre, $apes, $correo, $genero, $fNac);
$user->query_insert_Usuario();

header('location: ../Ventanas_de_la_poderosa_Curi/principal/h.php');
?>
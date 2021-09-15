<?php

session_start();
require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");
require("../../PHP_Classes/usuarios.php");

$select = new Consulta();
$select->setId_Usuario($_SESSION['ses_usuario']);

$resultados = $select->query_select_Usuario_by_Perfil();
$user;

while($consulta = mysqli_fetch_array($resultados)){
    $user = new Usuario('', $consulta['Usuario'], $consulta['Contrasenia'], $consulta['Nombre_Completo'],  $consulta['Nombre_Completo'],  $consulta['Email'],  $consulta['Genero'], '');
    $user->set_idUsuario($consulta['ID']);
    $user->set_Rol($consulta['Rol']);
    $user->set_Edad($consulta['Genero']);
    $user->set_Edad($consulta['Edad']);
    $user->set_FchaRegistro($consulta['Fecha_Registro']);
    $user->set_img($consulta['Foto_Perfil']);
}

?>
<?php

require("../PHP_Classes/conexion.php");
require("../PHP_Classes/consultas.php");

$correo = $_POST["correo"];
$password = $_POST["password"];

$select = new Consulta();
$select->setTxt_email($correo);
$select->setTxt_password($password);

$resultados = $select->query_select_Usuario_by_login();
$id_usu;
$id_rol;

foreach($resultados as $row){
    $id_usu = $row['ID_Usuario'];
    $id_rol = $row['ID_Rol'];
}

session_start();

$_SESSION['ses_usuario'] = $id_usu;
$_SESSION['rol'] = $id_rol;
header('location: ../Ventanas_de_la_poderosa_Curi/perfil/perfil.php');
?>
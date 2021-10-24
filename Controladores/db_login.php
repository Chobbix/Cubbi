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

foreach($resultados as $row){
    $id_usu = $row['ID_Usuario'];
}

session_start();

$_SESSION['ses_usuario'] = $id_usu;
header('location: ../Ventanas_de_la_poderosa_Curi/perfil/perfil.php');
?>
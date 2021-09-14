<?php

require("../PHP_Classes/consultas.php");

$correo = $_POST["correo"];
$password = $_POST["password"];

$select = new Consulta();
$select->setTxt_email($correo);
$select->setTxt_password($password);

$resultados = $select->query_select_Usuario_by_login();

echo $resultados['txt_NomUser'] . "<br>";
echo $resultados['ID_Usuario'] . "<br>";

//foreach($resultados as $columna => $val){
//    if($columna == "txt_NomUser") echo $val .'<br>';
//    if($columna == "ID_Usuario") echo $val .'<br>';
//}

//$user = new Usuario($rol, $nickname, $password, $nombre, $apes, $correo, $genero, $fNac);
//$user->query_insert_Usuario();

header('location: ../Ventanas_de_la_poderosa_Curi/principal/h.php');
?>
<?php

session_start();
require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");

$mensajes = new Consulta();
$resChatsActivos;

if(!isset($_GET['Maestro'])) {
    $resChatsActivos = $mensajes->query_select_curso_by_id($_GET['curso']);
} else {
    $resChatsActivos = $mensajes->query_select_ChatsActivos_By_Maestro($_SESSION['ses_usuario']);
}

?>
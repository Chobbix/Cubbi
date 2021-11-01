<?php

session_start();
require("../../PHP_Classes/conexion.php");
require("../../PHP_Classes/consultas.php");
require("../../PHP_Classes/usuarios.php");
require("../../PHP_Classes/cursos.php");

$user;

if($_SESSION['ses_usuario']) {
    $select = new Consulta();
    $select->setId_Usuario($_SESSION['ses_usuario']);

    $resultados = $select->query_select_Usuario_by_Perfil();

    foreach($resultados as $row){
        $user = new Usuario('', $row['Usuario'], $row['Contrasenia'], $row['Nombre_Completo'],  $row['Nombre_Completo'],  $row['Email'],  $row['Genero'], $row['Fecha_Nacimiento']);
        $user->set_idUsuario($row['ID']);
        $user->set_Rol($row['Rol']);
        $user->set_Genero($row['Genero']);
        $user->set_Edad($row['Edad']);
        $user->set_FchaRegistro($row['Fecha_Registro']);
        $user->set_FchaUltiCambio($row['Fecha_Cambio']);
        $user->set_img($row['Foto_Perfil']);
    }
}


$curso = new Cursos();

if(isset($_GET["curso"])) {
    $consulta = new Consulta();
    $resultados = $consulta->query_select_curso_by_id($_GET["curso"]);
    
    foreach($resultados as $row){
        $curso->set_idCurso($row['ID']);
        $curso->set_titulo($row['Titulo']);
        $curso->set_descripcion($row['Descripcion']);
        $curso->set_duracion($row['Duracion']);
        $curso->set_img($row['Imagen']);
        $curso->set_profesor($row['Profesor']);
        $curso->set_registro($row['Registro']);
        $curso->set_cambio($row['Cambio']);
        $curso->set_isPrecioGeneral($row['Tipo']);
        $curso->set_precio($row['Precio']);
        $curso->set_likes($row['Likes']);
        $curso->set_Inscritos($row['Registros_Cantidad']);
    }
}

$consulta = new Consulta();
$capitulosRes = $consulta->query_select_capitulos_by_curso($_GET["curso"]);
$seccionesRes = $consulta->query_select_secciones_by_curso($_GET["curso"]);
$accesosRes = $consulta->query_select_accesos($_GET["curso"], $_SESSION['ses_usuario']);

?>
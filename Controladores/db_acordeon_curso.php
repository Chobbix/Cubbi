<?php

$consulta = new Consulta();
$capitulosRes = $consulta->query_select_capitulos_by_curso($_GET["curso"]);
$seccionesRes = $consulta->query_select_secciones_by_curso($_GET["curso"]);

?>
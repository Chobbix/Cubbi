<?php

$resBusqueda;

if($opcFiltroGet == 6) {
    $consultaFiltro = new Consulta();
    $resBusqueda = $consultaFiltro->query_select_busqueda($opcFiltroGet, $txtBusquedaGet, $categoriaGet, $userGet, $opcFiltroGet, '', '');
}

?>
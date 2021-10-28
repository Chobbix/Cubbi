<?php

$resBusqueda;

    $consultaFiltro = new Consulta();
    $resBusqueda = $consultaFiltro->query_select_busqueda($opcFiltroGet, $txtBusquedaGet, $categoriaGet, $userGet, $opcFiltroGet, $dateIni, $dateFin);

?>
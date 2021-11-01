<?php

if(isset($_GET["curso"])) {
    $consulta = new Consulta();
    $resultados = $consulta->query_select_cursoReg_By_Usuario($_SESSION['ses_usuario'], $_GET["curso"]);
    
    foreach($resultados as $row){
        $curso->set_tema($row['Seccion_Actual']);
        $curso->set_capitulo($row['Capitulo_Actual']);
        $curso->set_titulo_capitulo($row['Titulo_Capitulo']);
    }
}

?>
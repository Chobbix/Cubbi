<?php

class Dashboard extends DB {
    public function __construct(){}

    public function query_select_mas_nuevos() {
        $database = new DB;
        $conexion = $database->ConectarDB();
        $sql = "call sp_Consultas ('Mas_Nuevo', 0, 0, '', '')";
        $statementSelect = $conexion->prepare($sql);
        $statementSelect->execute(array());
        $rows = $statementSelect->fetchAll();
        
        return $rows;
    }

    public function query_select_mas_vendidos() {
        $database = new DB;
        $conexion = $database->ConectarDB();
        $sql = "call sp_Consultas ('Mas_Vendidos', 0, 0, '', '')";
        $statementSelect = $conexion->prepare($sql);
        $statementSelect->execute(array());
        $rows = $statementSelect->fetchAll();
        
        return $rows;
    }

    public function query_select_mejor_calificados() {
        $database = new DB;
        $conexion = $database->ConectarDB();
        $sql = "call sp_Consultas ('Mejor_Calificados', 0, 0, '', '')";
        $statementSelect = $conexion->prepare($sql);
        $statementSelect->execute(array());
        $rows = $statementSelect->fetchAll();
        
        return $rows;
    }
}

?>
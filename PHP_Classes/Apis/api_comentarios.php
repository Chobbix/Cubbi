<?php

class Comentarios extends DB {
    public function get_comentarios_by_curso($id_curso) {
        $database = new DB;
        $conexion = $database->ConectarDB();
        $sql = "call sp_Consultas ('Curso', ?, 0, '', '')";
        $statementSelect = $conexion->prepare($sql);
        $statementSelect->execute(array($id_curso));
        $rows = $statementSelect->fetchAll();

        return $rows;
    }
}

?>
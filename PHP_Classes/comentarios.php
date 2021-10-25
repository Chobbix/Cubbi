<?php

class Comentarios extends DB {
    private $ID_Usuario;
    private $ID_Curso;
    private $txt_comentario;

    public function __construct() {
    }

    function set_idCurso($ID_Curso) { $this->ID_Curso = $ID_Curso; }
    function get_idCurso() { return $this->ID_Curso; }

    function set_idUsuario($ID_Usuario) { $this->ID_Usuario = $ID_Usuario; }
    function get_idUsuario() { return $this->ID_Usuario; }

    function set_comentario($txt_comentario) { $this->txt_comentario = $txt_comentario; }
    function get_comentario() { return $this->txt_comentario; }

    public function query_insert_comentario() {
        try{
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Comentarios('A', ?, ?, ?)";
            $statement = $conexion->prepare($sql);
            $statement->execute(array($this->ID_Curso, $this->ID_Usuario, $this->txt_comentario));
            $statement->closeCursor();

        }catch(Exception $e) {
            return $e;
        }
    }
}

?>
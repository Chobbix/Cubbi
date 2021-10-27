<?php

class Categorias extends DB {
    private $ID_Categoria;
    private $txt_categoria;

    public function __construct() {
    }

    function set_idCategoria($ID_Categoria) { $this->ID_Categoria = $ID_Categoria; }
    function get_idCategoria() { return $this->ID_Categoria; }

    function set_categoria($txt_categoria) { $this->txt_categoria = $txt_categoria; }
    function get_categoria() { return $this->txt_categoria; }

    public function query_insert_categoria() {
        try{
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Categorias('A', 0, ?)";
            $statement = $conexion->prepare($sql);
            $statement->execute(array($this->txt_categoria));
            $statement->closeCursor();

        }catch(Exception $e) {
            return $e;
        }
    }

    public function query_insert_categoria_curso() {
        try{
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Categorias('cat_cur', ?, '')";
            $statement = $conexion->prepare($sql);
            $statement->execute(array($this->ID_Categoria));
            $statement->closeCursor();

        }catch(Exception $e) {
            return $e;
        }
    }
}

?>
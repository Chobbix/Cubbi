<?php

class Curso_reg extends DB {
    private $ID_Usuario;
    private $ID_Curso;
    private $f_MontoPagado;
    private $int_TipoPago;
    private $int_SeccionActual;
    private $int_CapituloActual;

    public function __construct() {
    }

    function set_idCurso($ID_Curso) { $this->ID_Curso = $ID_Curso; }
    function get_idCurso() { return $this->ID_Curso; }

    function set_idUsuario($ID_Usuario) { $this->ID_Usuario = $ID_Usuario; }
    function get_idUsuario() { return $this->ID_Usuario; }

    function set_Monto($f_MontoPagado) { $this->f_MontoPagado = $f_MontoPagado; }
    function get_Monto() { return $this->f_MontoPagado; }

    function set_TipoPago($int_TipoPago) { $this->int_TipoPago = $int_TipoPago; }
    function get_TipoPago() { return $this->int_TipoPago; }

    function set_SeccionActual($int_SeccionActual) { $this->int_SeccionActual = $int_SeccionActual; }
    function get_SeccionActual() { return $this->int_SeccionActual; }

    function set_CapituloActual($int_CapituloActual) { $this->int_CapituloActual = $int_CapituloActual; }
    function get_CapituloActual() { return $this->int_CapituloActual; }


    public function query_insert_registro() {
        try{
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Cursos_Registros('A', ?, ?, ?, ?, 0, 0)";
            $statement = $conexion->prepare($sql);
            $statement->execute(array($this->ID_Usuario, $this->ID_Curso, $this->f_MontoPagado, $this->int_TipoPago));
            $statement->closeCursor();

        }catch(Exception $e) {
            return $e;
        }
    }

    public function query_update_seccion_capitulo() {
        try{
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Cursos_Registros('C_SecCap', ?, ?, 0, 0, ?, ?)";
            $statement = $conexion->prepare($sql);
            $statement->execute(array($this->ID_Usuario, $this->ID_Curso, $this->int_SeccionActual, $this->int_CapituloActual));
            $statement->closeCursor();

        }catch(Exception $e) {
            return $e;
        }
    }
}

?>
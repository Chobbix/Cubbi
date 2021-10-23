<?php
    class Secciones extends DB {
        private $ID_Curso;
        private $ID_Seccion;

        public function __construct() {
        }

        function set_idCurso($ID_Curso) { $this->ID_Curso = $ID_Curso; }
        function get_idCurso() { return $this->ID_Curso; }

        function set_idSeccion($ID_Seccion) { $this->ID_Seccion = $ID_Seccion; }
        function get_idSeccion() { return $this->ID_Seccion; }

        public function query_insert_seccion() {
            try{
                $database = new DB;
                $conexion = $database->ConectarDB();
                $sql = "call sp_Secciones('A', 0, ?)";
                $statement = $conexion->prepare($sql);
                $statement->execute(array($this->ID_Seccion));
                $statement->closeCursor();

            }catch(Exception $e) {
                return $e;
            }
        }
    }

?>
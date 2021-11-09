<?php
    class Capitulos extends DB {
        private $ID_Curso;
        private $ID_Seccion;
        private $ID_Capitulo;
        private $txt_Titulo;
        private $f_Precio;
        private $txt_rutaVid;
        private $txt_rutaDoc;

        public function __construct() {
        }

        function set_idCurso($ID_Curso) { $this->ID_Curso = $ID_Curso; }
        function get_idCurso() { return $this->ID_Curso; }

        function set_idSeccion($ID_Seccion) { $this->ID_Seccion = $ID_Seccion; }
        function get_idSeccion() { return $this->ID_Seccion; }

        function set_idCapitulo($ID_Capitulo) { $this->ID_Capitulo = $ID_Capitulo; }
        function get_idCapitulo() { return $this->ID_Capitulo; }

        function set_titulo($txt_Titulo) { $this->txt_Titulo = $txt_Titulo; }
        function get_titulo() { return $this->txt_Titulo; }

        function set_precio($f_Precio) { $this->f_Precio = $f_Precio; }
        function get_precio() { return $this->f_Precio; }

        function set_rutaVid($txt_rutaVid) { $this->txt_rutaVid = $txt_rutaVid; }
        function get_rutaVid() { return $this->txt_rutaVid; }

        function set_rutaDoc($txt_rutaDoc) { $this->txt_rutaDoc = $txt_rutaDoc; }
        function get_rutaDoc() { return $this->txt_rutaDoc; }

        public function query_insert_capitulo() {
            try{
                $database = new DB;
                $conexion = $database->ConectarDB();
                $sql = "CALL sp_Capitulos('A', ?, ?, ?, ?, ?, ?, ?);";
                $statement = $conexion->prepare($sql);
                $statement->execute(array($this->ID_Capitulo, $this->ID_Seccion, $this->ID_Curso, $this->txt_Titulo, $this->f_Precio, $this->txt_rutaVid, $this->txt_rutaDoc));
                $statement->closeCursor();

            }catch(Exception $e) {
                return $e;
            }
        }

        public function query_update_capitulo_by_curso() {
            try{
                $database = new DB;
                $conexion = $database->ConectarDB();
                $sql = "CALL sp_Capitulos('C', ?, ?, ?, ?, ?, ?, ?);";
                $statement = $conexion->prepare($sql);
                $statement->execute(array($this->ID_Capitulo, $this->ID_Seccion, $this->ID_Curso, $this->txt_Titulo, $this->f_Precio, $this->txt_rutaVid, $this->txt_rutaDoc));
                $statement->closeCursor();

            }catch(Exception $e) {
                return $e;
            }
        }

        public function query_insert_capitulo_by_curso() {
            try{
                $database = new DB;
                $conexion = $database->ConectarDB();
                $sql = "CALL sp_Capitulos('D', ?, ?, ?, ?, ?, ?, ?);";
                $statement = $conexion->prepare($sql);
                $statement->execute(array($this->ID_Capitulo, $this->ID_Seccion, $this->ID_Curso, $this->txt_Titulo, $this->f_Precio, $this->txt_rutaVid, $this->txt_rutaDoc));
                $statement->closeCursor();

            }catch(Exception $e) {
                return $e;
            }
        }
    }

?>
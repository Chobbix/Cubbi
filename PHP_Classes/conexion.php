<?php
    class DB {
        public $servidor;
        public $usuario;
        public $contrasenia;
        public $db;

        public function __construct() {
            $this->servidor= "localhost";
            $this->usuario= "root";
            $this->contrasenia= "";
            $this->db= "db_bdmm_pwci";
        }

        public function ConectarDB(){
            $cnx= mysqli_connect($this->servidor, $this->usuario, $this->contrasenia, $this->db);
            return $cnx;
        }
    }
?>
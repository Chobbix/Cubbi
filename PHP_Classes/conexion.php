<?php
    class DB {
        public $servidor;
        public $usuario;
        public $contrasenia;
        public $db;

        public function __construct() {
            $this->db= "db_bdmm_pwci";
            $this->servidor= "mysql:host=localhost;dbname=$this->db";
            $this->usuario= "root";
            $this->contrasenia= "";
        }

        public function ConectarDB(){
            try{
                $cnx= new PDO($this->servidor, $this->usuario, $this->contrasenia);
            } catch(PDOException $e){
                echo $e->getMessage();
            }
            return $cnx;
        }
    }
?>
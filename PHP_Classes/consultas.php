<?php
    require("conexion.php");
    class Consulta extends DB {
        private $id_Rol;
        private $id_Usuario;
        private $txt_email;
        private $txt_password;

        public function __construct() {
        }

        public function getid_Rol() { return $this->id_Rol; }
        public function setid_Rol($id_Rol) { $this->id_Rol = $id_Rol; return $this; }

        public function getId_Usuario() { return $this->id_Usuario; }
        public function setId_Usuario($id_Usuario) { $this->id_Usuario = $id_Usuario; return $this; }

        public function getTxt_email() { return $this->txt_email; }
        public function setTxt_email($txt_email) { $this->txt_email = $txt_email; return $this; }

        public function getTxt_password() { return $this->txt_password; }
        public function setTxt_password($txt_password) { $this->txt_password = $txt_password; return $this; }



        function query_select_Usuario_by_login() {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $resultados = mysqli_query($conexion, "call sp_Consultas ('Login', 0, 0, '{$this->txt_email}', '{$this->txt_password}')");
            $consulta= mysqli_fetch_array($resultados);
            mysqli_close($conexion);

            return $consulta;
        }
    }

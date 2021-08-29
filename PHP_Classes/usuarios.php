<?php
    require("conexion.php");
    class Usuario extends DB {
        private $txt_NomUser;
        private $txt_Contra;
        private $txt_Nom;
        private $txt_ApePat;
        private $txt_Email;
        private $date_FchaRegistro;
        private $date_FchaUltiCambio;

        public function __construct($txt_NomUser, $txt_Contra, $txt_Nom, $txt_ApePat, $txt_Email) {
            $this->txt_NomUser = $txt_NomUser;
            $this->txt_Contra = $txt_Contra;
            $this->txt_Nom = $txt_Nom;
            $this->txt_ApePat = $txt_ApePat;
            $this->txt_Email = $txt_Email;
        }

        function set_NomUser($txt_NomUser) { $this->txt_NomUser = $txt_NomUser; }
        function get_NomUser() { return $this->txt_NomUser; }

        function set_Contra($txt_Contra) { $this->txt_Contra = $txt_Contra; }
        function get_Contra() { return $this->txt_Contra; }

        function set_Nom($txt_Nom) { $this->txt_Nom = $txt_Nom; }
        function get_Nom() { return $this->txt_Nom; }

        function set_ApePat($txt_ApePat) { $this->txt_ApePat = $txt_ApePat; }
        function get_ApePat() { return $this->txt_ApePat; }

        function set_Email($txt_Email) { $this->txt_Email = $txt_Email; }
        function get_Email() { return $this->txt_Email; }

        function set_FchaRegistro($date_FchaRegistro) { $this->date_FchaRegistro = $date_FchaRegistro; }
        function get_FchaRegistro() { return $this->date_FchaRegistro; }

        function set_FchaUltiCambio($date_FchaUltiCambio) { $this->date_FchaUltiCambio = $date_FchaUltiCambio; }
        function get_FchaUltiCambio() { return $this->date_FchaUltiCambio; }



        function query_insert_Usuario() {
            $database = new DB;
            $conexion = $database->ConectarDB();
            mysqli_query($conexion, "call sp_Usuarios('A', null, 1, '{$this->txt_NomUser}', '{$this->txt_Contra}', '{$this->txt_Nom}', '{$this->txt_ApePat}', '{$this->txt_Email}', NOW(), NOW(), null)");
            mysqli_close($conexion);
        }
    }
?>
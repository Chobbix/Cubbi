<?php
    class Usuario {
        public $txt_NomUser;
        public $txt_Contra;
        public $txt_Nom;
        public $txt_ApePat;
        public $txt_Email;
        public $date_FchaRegistro;
        public $date_FchaUltiCambio;

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
    }
?>
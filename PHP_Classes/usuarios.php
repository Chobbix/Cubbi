<?php
    class Usuario extends DB {
        private $id_Usuario;
        private $id_Rol;
        private $txt_Rol;
        private $txt_NomUser;
        private $txt_Contra;
        private $txt_Nom;
        private $txt_ApePat;
        private $txt_Email;
        private $txt_Genero;
        private $txt_Edad;
        private $date_FchaNac;
        private $date_FchaRegistro;
        private $date_FchaUltiCambio;
        private $blob_img;

        public function __construct($id_Rol, $txt_NomUser, $txt_Contra, $txt_Nom, $txt_ApePat, $txt_Email, $txt_Genero, $date_FchaNac) {
            $this->id_Rol = $id_Rol;
            $this->txt_NomUser = $txt_NomUser;
            $this->txt_Contra = $txt_Contra;
            $this->txt_Nom = $txt_Nom;
            $this->txt_ApePat = $txt_ApePat;
            $this->txt_Email = $txt_Email;
            $this->txt_Genero = $txt_Genero;
            $this->date_FchaNac = $date_FchaNac;
        }

        function set_idUsuario($id_Usuario) { $this->id_Usuario = $id_Usuario; }
        function get_idUsuario() { return $this->id_Usuario; }

        function set_idRol($id_Rol) { $this->id_Rol = $id_Rol; }
        function get_idRol() { return $this->id_Rol; }

        function set_Rol($txt_Rol) { $this->txt_Rol = $txt_Rol; }
        function get_Rol() { return $this->txt_Rol; }

        function set_Edad($txt_Edad) { $this->txt_Edad = $txt_Edad; }
        function get_Edad() { return $this->txt_Edad; }

        function set_Genero($txt_Genero) { $this->txt_Genero = $txt_Genero; }
        function get_Genero() { return $this->txt_Genero; }

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

        function set_FchaNac($date_FchaNac) { $this->date_FchaNac = $date_FchaNac; }
        function get_FchaNac() { return $this->date_FchaNac; }

        function set_img($blob_img) { $this->blob_img = $blob_img; }
        function get_img() { return $this->blob_img; }


        function query_insert_Usuario() {
            try{
                $id = 0;
                $database = new DB;
                $conexion = $database->ConectarDB();
                $sql = "call sp_Usuarios('A', null, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW(), null)";
                $statement = $conexion->prepare($sql);
                $statement->execute(array($this->id_Rol, $this->txt_NomUser, $this->txt_Contra, $this->txt_Nom, $this->txt_ApePat, $this->txt_Email, $this->txt_Genero, $this->date_FchaNac));
                $statement->closeCursor();

                $sqlSelct = "call sp_Consultas ('Login', 0, 0, ?, ?)";
                $statementSelect = $conexion->prepare($sqlSelct);
                $statementSelect->execute(array($this->txt_Email, $this->txt_Contra));
                while($row=$statementSelect->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['ID_Usuario'];
                }
                $statementSelect->closeCursor();

                return $id;
            }catch(Exception $e) {
                echo $e;
            }
        }

        function query_update_imgPerfil_nickname() {
            try{
                $database = new DB;
                $conexion = $database->ConectarDB();
                $sql = "call sp_Usuarios('img', ?, 0, ?, ?, '', '', '', '', null, null, null, '{$this->blob_img}')";
                $statement = $conexion->prepare($sql);
                $statement->execute(array($this->id_Usuario, $this->txt_NomUser, $this->txt_Contra));
                $statement->closeCursor();

            }catch(Exception $e) {
                echo $e;
            }
        }
    }
?>
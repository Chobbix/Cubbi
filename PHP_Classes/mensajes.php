<?php

class Mensajes extends DB {
    private $ID_Mensaje;
    private $ID_Curso;
    private $ID_Usuario;
    private $txt_Mensaje;
    private $isFromEscuela;
    private $date_FchaEnvio;

    public function __construct() {
    }

    function set_idMensaje($ID_Mensaje) { $this->ID_Mensaje = $ID_Mensaje; }
    function get_idMensaje() { return $this->ID_Mensaje; }

    function set_idCurso($ID_Curso) { $this->ID_Curso = $ID_Curso; }
    function get_idCurso() { return $this->ID_Curso; }

    function set_idUsuario($ID_Usuario) { $this->ID_Usuario = $ID_Usuario; }
    function get_idUsuario() { return $this->ID_Usuario; }

    function set_Mensaje($txt_Mensaje) { $this->txt_Mensaje = $txt_Mensaje; }
    function get_Mensaje() { return $this->txt_Mensaje; }

    function set_isFromEscuela($isFromEscuela) { $this->isFromEscuela = $isFromEscuela; }
    function get_isFromEscuela() { return $this->isFromEscuela; }

    function set_FechaEnvio($date_FchaEnvio) { $this->date_FchaEnvio = $date_FchaEnvio; }
    function get_FechaEnvio() { return $this->date_FchaEnvio; }

    public function query_insert_mensaje() {
        try{
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Mensajes('A', 0, ?, ?, ?, ?, curdate())";
            $statement = $conexion->prepare($sql);
            $statement->execute(array($this->ID_Curso, $this->ID_Usuario, $this->txt_Mensaje, $this->isFromEscuela));
            $statement->closeCursor();

        }catch(Exception $e) {
            return $e;
        }
    }
}

?>
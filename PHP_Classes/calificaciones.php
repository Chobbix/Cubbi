<?php
    class Calificaciones extends DB {
        private $ID_Curso;
        private $ID_Usuario;
        private $bool_like;
        private $bool_dislike;

        public function __construct() {
        }

        function set_idCurso($ID_Curso) { $this->ID_Curso = $ID_Curso; }
        function get_idCurso() { return $this->ID_Curso; }

        function set_idUsuario($ID_Usuario) { $this->ID_Usuario = $ID_Usuario; }
        function get_idUsuario() { return $this->ID_Usuario; }

        function set_like($bool_like) { $this->bool_like = $bool_like; }
        function get_like() { return $this->bool_like; }

        function set_dislike($bool_dislike) { $this->bool_dislike = $bool_dislike; }
        function get_dislike() { return $this->bool_dislike; }

        public function query_insert_like_dislike() {
            try{
                $database = new DB;
                $conexion = $database->ConectarDB();
                $sql = "CALL sp_Likes_Dislikes('A', ?, ?, ?, ?);";
                $statement = $conexion->prepare($sql);
                $statement->execute(array($this->ID_Curso, $this->ID_Usuario, $this->bool_like, $this->bool_dislike));
                $statement->closeCursor();

            }catch(Exception $e) {
                return $e;
            }
        }
    }

?>
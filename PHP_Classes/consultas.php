<?php
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
            $sql = "call sp_Consultas ('Login', 0, 0, ?, ?)";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute(array($this->txt_email, $this->txt_password));
            $rows = $statementSelect->fetchAll();

            //$resultados = mysqli_query($conexion, "call sp_Consultas ('Login', 0, 0, '{$this->txt_email}', '{$this->txt_password}')");
            //mysqli_close($conexion);

            return $rows;
        }

        function query_select_Usuario_by_Perfil() {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Consultas ('Perfil', ?, 0, '', '')";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute(array($this->id_Usuario));
            $rows = $statementSelect->fetchAll();
            
            //$resultados = mysqli_query($conexion, "call sp_Consultas ('Perfil', '{$this->id_Usuario}', 0, '', '')");
            //mysqli_close($conexion);

            return $rows;
        }

        function query_select_comentarios_by_curso($id_curso) {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Consultas ('Comentarios', ?, 0, '', '')";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute(array($id_curso));
            $rows = $statementSelect->fetchAll();
            
            return $rows;
        }

        function query_select_curso_by_id($id_curso) {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Consultas ('Curso', ?, 0, '', '')";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute(array($id_curso));
            $rows = $statementSelect->fetchAll();
            
            return $rows;
        }

        function query_select_capitulos_by_curso($id_curso) {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Consultas ('Videos', ?, 0, '', '')";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute(array($id_curso));
            $rows = $statementSelect->fetchAll();
            
            return $rows;
        }

        function query_select_secciones_by_curso($id_curso) {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Consultas ('Secciones', ?, 0, '', '')";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute(array($id_curso));
            $rows = $statementSelect->fetchAll();
            
            return $rows;
        }

        function query_select_all_cursos() {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Consultas ('All_cursos', 0, 0, '', '')";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute();
            $rows = $statementSelect->fetchAll();
            
            return $rows;
        }

        function query_select_all_categorias() {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Consultas ('All_categorias', 0, 0, '', '')";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute();
            $rows = $statementSelect->fetchAll();
            
            return $rows;
        }

        function query_select_busqueda($opc, $curso, $categoria, $usuario, $opcFiltro, $dateini, $dateFin) {
            $database = new DB;
            $conexion = $database->ConectarDB();
            $sql = "call sp_Busquedas (?, ?, ?, ?, ?, NOW(), NOW())";
            $statementSelect = $conexion->prepare($sql);
            $statementSelect->execute(array($opc, $curso, $categoria, $usuario, $opcFiltro));
            $rows = $statementSelect->fetchAll();
            
            return $rows;
        }
    }

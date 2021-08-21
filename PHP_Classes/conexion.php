<?php
    function ConectarDB(){
        $servidor= "localhost";
        $usuario= "root";
        $contrasenia= "";
        $db= "db_bdmm_pwci";
        $cnx= mysqli_connect($servidor, $usuario, $contrasenia, $db);

        return $cnx;
    }
?>
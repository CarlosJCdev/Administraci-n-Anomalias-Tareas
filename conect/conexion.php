<?php
class Conexion{
    public static function con(){
         $con = new mysqli("localhost", "usae", "1234", "usae");
        
         $con->set_charset('utf8');
             return $con;
    }
}


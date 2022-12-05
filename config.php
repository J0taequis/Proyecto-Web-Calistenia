<?php
    class Conexion{
        public static function Conectar(){
            define('severname', 'db.inf.uct.cl');
            define('dbname', 'A2022_sarancibia');
            define('username', 'A2022_sarancibia');
            define('password', 'A2022_sarancibia');	
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{
                $conexion = new PDO("mysql:host=".severname."; dbname=".dbname, username, password, $opciones);
                return $conexion;                    
            }catch (Exception $e){
                die("El error de Conexión es: ". $e->getMessage());
            }
        }
    }

    $servername = "db.inf.uct.cl";
    $username = "A2022_sarancibia";
    $password = "A2022_sarancibia";
    $dbname = "A2022_sarancibia";


?>

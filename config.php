<?php
    class Conexion{
        public static function Conectar(){
            define('severname', 'localhost');
            define('dbname', 'calistenia');
            define('username', 'root');
            define('password', '');	
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{
                $conexion = new PDO("mysql:host=".severname."; dbname=".dbname, username, password, $opciones);
                return $conexion;                    
            }catch (Exception $e){
                die("El error de Conexión es: ". $e->getMessage());
            }
        }
    }
?>

<?php
    class Conexion{
        public static function Conectar(){
            $servername = "localhost:3306";
            $username = "root";
            $password = "root";
            $dbname = "Personas";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        }
    }


?>
<?php
    class PersonasModelo{
        private $db;
        private $productos;
        //constructor de la clase
        public function __construct(){
            //conectar a BBDD
            $this->db= Conexion::Conectar();
            //definir la variable $datos como array
            $this->datos=array();
        }
        //recuperar todos los datos
        public function getPersonas(){
            $sql = "SELECT * FROM Persona";
                $result =$this->db->query($sql);
                if ($result->num_rows> 0) {
                    // Salida de datos por filas
                    while($row =$result->fetch_assoc()) {
                       $this->datos[]=$row;
                    }
                } else {
                    echo "0 results";
                }
                return $this->datos;


        }

        public function getBorrar($dni){
            $sql = "DELETE FROM Persona WHERE DNI = '$dni' ";
                $this->db->query($sql);
            
                


        }



        public function getInsertar($DNI,$Nombre,$Edad){
            $sql = "INSERT INTO Persona (DNI, Nombre, Edad)
            VALUES ('$DNI', '$Nombre', $Edad)";
                $this->db->query($sql);
                


        }



        
            
    }


  
    
?>
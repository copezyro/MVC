<?php
    require_once "./Modelo/Modelo.php";

    
    $persona=new PersonasModelo();
    $personas=$persona->getPersonas();



    if (isset($_POST["boton"])) {

        $dni=$_POST["dni"];

        $persona->getBorrar($dni);

        header("Refresh:0");

    }


    if (isset($_POST["boton2"])) {

        $DNI =$_POST["DNI"];
        $Nombre =$_POST["Nombre"];
        $Edad =$_POST["Edad"];

        $persona->getInsertar($DNI,$Nombre,$Edad);

        

    }
    
   
    
   
    include "./Vista/Vista.php";

?>
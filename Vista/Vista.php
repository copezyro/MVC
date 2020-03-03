<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Repaso</h1>
    <table border="1">
        <thead>
            <td>DNI</td>
            <td>Nombre</td>
            <td>Edad</td>
            
        </thead>
        <tbody>
        <?php
            foreach($personas as $fila){
        ?>
             <tr>
                <td><?php echo  $fila["DNI"]?> </td>
                <td><?php echo  $fila["Nombre"]?> </td>
                <td><?php echo  $fila["Edad"]?> </td>
               </tr>
            <?php }?>
        </tbody>
    </table>

    <form action="#" method="POST">
        <label>Dni del usuario a eliminar</label> <br>

        <input type="text" name="dni" value="11111111A"><br>

        <input type="Submit" name="boton" value="Eliminar"> <br><br>



        <label>Dni del usuario a Insertar</label> <br>
        <input type="text" name="DNI"   value=""><br>

        <label>Nombre del usuario a Insertar</label> <br>
        <input type="text" name="Nombre"   value=""><br>

        <label>Edad del usuario a Insertar</label> <br>
        <input type="text" name="Edad"   value=""><br>

        <input type="Submit" name="boton2" value="Insertar"> <br>

    </form>



    
               
    
   

   
</body>
</html>


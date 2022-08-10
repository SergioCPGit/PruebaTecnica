<?php
include("conexion.php");
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Stock </title>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="../css/lista.css"  rel="stylesheet">
        
       
    </head>
    <body>
    <header>
            <nav class="menu">
                <ul >
                    <li><a href="http://localhost/Dona/html/home.html">Home</a></li>
                    <li><a class= "active" href="http://localhost/Dona/php/lista.php">Stock</a></li>
                    <li><a href="http://localhost/Dona/html/registro.html">Registro de producto</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">

            <br>
            <table id="Stock"  >
                <thead>
                 <tr >
                    <th> ID del producto </th>
                    <th> Nombre</th>
                    <th> Precio </th>
                    <th> Stock</th>
                    <th> Proveedor <th>
                 </tr>
                </thead>
                <tbody>
                 <?php
                 $consulta = "SELECT * FROM productos ";
                 $datos = mysqli_query($conexion,$consulta);

                 while($fila= mysqli_fetch_array($datos))
                 {
                  
               
                 ?>
                 <tr >
                    <th> <?php echo $fila['IDproducto']?></th>
                    <th> <?php echo $fila['Nombre']?></th>
                    <th> <?php echo $fila['Precio']?></th>
                    <th> <?php echo $fila['Stock']?></th>
                    <th> <?php echo $fila['Provedor']?></th>
                    <th > <a  class="button1" href="http://localhost/Dona/php/actualizar.php?id=<?php echo $fila['IDproducto']?>"> Actualizar</a> </th>
                    <th > <a  class="button2" href="http://localhost/Dona/php/borrar.php?id=<?php echo $fila['IDproducto']?>"> Borrar</a> </th>
                 </tr>
                 <?php
                 }
                 ?>
                </tbody>

            </table>
                
             
        </div>

    </body>
</html>
<?php
include("conexion.php");


$ID = $_GET['id'];
$sql = "SELECT * FROM productos WHERE  IDproducto = '$ID' ";
$datos = mysqli_query($conexion,$sql);
$fila= mysqli_fetch_array($datos);

if(mysqli_query($conexion,$sql)){
    /*echo "Producto seleccionado";
    echo $ID;*/
    
 }
 else{
    echo"Error:".$sql."<br>".mysqli_error($conexion);
    echo $ID;
    
 }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Home</title>
        <meta charset="UTF-8"/>
        <link href="../css/registro.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="menu">
                <ul>
                    <li><a href="http://localhost/Dona/html/home.html">Home</a></li>
                    <li><a  href="http://localhost/Dona/php/lista.php">Stock</a></li>
                    <li><a class= "active" href="http://localhost/Dona/html/registro.html">Registro de producto</a></li>
                </ul>
              </nav>
        </header>
        <div class="form">
            <form name="Registro" method="POST" action="/Dona/php/update.php">
            <h1>Actualizar producto <?php echo $fila['Nombre']?> <h1><br>
            ID del producto: <?php echo $fila['IDproducto']?><br>
                <input type="hidden" name="id" value =<?php echo $fila['IDproducto']?>  required><br>
            Nombre:<br>
                <input type="text" name="nombre" value =<?php echo $fila['Nombre']?>  required><br>
            Precio:<br>
                <input type="text" name="precio" value =<?php echo $fila['Precio']?> pattern="^[0-9]+(.[0-9]+)?$" required><br>
            Número de unidades adquiridas:<br>
                <input type="text" name="unidades" value =<?php echo $fila['Stock']?> pattern="^[1-9]\d*$" required><br>
            Proveedor:<br>
                <input type="text" name="proveedor" value =<?php echo $fila['Provedor']?>  required><br>
                <input type="submit" name="enviar" class="boton1" value="Actualizar">
                <input type="reset" class="boton2" value="Borrar">
            
            </form>
        </div>

    </body>
</html>
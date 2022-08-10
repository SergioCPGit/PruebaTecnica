<?php
 include("conexion.php");


 $nombre = $_POST["nombre"];
 $precio = $_POST["precio"];
 $unidades = $_POST["unidades"];
 $proveedor = $_POST["proveedor"];
 

 $rs = mysqli_query($conexion, "SELECT MAX(IDproducto) AS id FROM productos");
 if ($row = mysqli_fetch_row($rs)) {
 $id = trim($row[0]);
 $id= $id+1;
 $sql = "INSERT INTO productos VALUES ('$id','$nombre', '$precio', '$unidades', '$proveedor') ";



 if(mysqli_query($conexion,$sql)){
   Header("Location:lista.php");
    
 }
 else{
    echo"Error:".$sql."<br>".mysqli_error($conexion);
    
    
 }

 }

 ?>
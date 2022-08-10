<?php
 include("conexion.php");

 $idp= $_POST["id"];
 $nombre = $_POST["nombre"];
 $precio = $_POST["precio"];
 $unidades = $_POST["unidades"];
 $proveedor = $_POST["proveedor"];
 echo $idp;

 $sql = "UPDATE productos SET  Nombre='$nombre', Precio='$precio', Stock='$unidades', Provedor='$proveedor' WHERE IDproducto ='$idp'";
 
 if(mysqli_query($conexion,$sql)){
   Header("Location:lista.php");
    
 }
 else{
    echo"Error:".$sql."<br>".mysqli_error($conexion);
    
    
 }


 ?>
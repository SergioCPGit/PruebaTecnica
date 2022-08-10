
<?php
include("conexion.php");


$ID = $_GET['id'];
$sql = "DELETE FROM productos WHERE  IDproducto = '$ID' ";
if(mysqli_query($conexion,$sql)){
    Header("Location:lista.php");
    
 }
 else{
    echo"Error:".$sql."<br>".mysqli_error($conexion);
    echo $ID;
    
 }
?>
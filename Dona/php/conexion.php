<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$BD = "donas";

$conexion = mysqli_connect($servidor,$usuario,$password,$BD);

if(!$conexion){
    echo "Fallo conexion <br>";
    die("Connection failed ".mysqli_connect_error());
}
else{
    //echo"Conexion exitosa";
}


?>
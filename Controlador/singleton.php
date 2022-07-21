<?php

require_once 'db.php';

/*$conexion = Conexion::Singleton();

$query = "SELECT * FROM producto";

$resultado = $conexion->query($query); 

while($datos=$resultado->fetch_object())
{
    echo $datos->producto . "<br>"; 
}*/ 

function clientCode()
{
    $s1 = Conexion::Singleton();
    $s2 = Conexion::Singleton();
    if ($s1 == $s2) {
        echo "Singleton funciona, ambas variables contienen la misma instancia. ";
    } else {
        echo "Singleton falla, variables contienen diferentes instancias. ";
    }
}

clientCode();

?>
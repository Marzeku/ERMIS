<!DOCTYPE html>
<html>
<?php include "../Vista/Inicio_Mod.php" ?>

<?php

function modificar()
{
    include '../Controlador/db.php'; 
    
    if(isset($_POST['Actualizar']))
    {
        $DNI = $_POST["DNI"]; 
        $Clave = $_POST["clave"]; 
        
        $salt = '34a@$#aA9823$';
        $Clave = hash('sha256', $salt . $Clave);
      
        $sentencia = "UPDATE `user_info` SET `Clave` = '$Clave' WHERE `DNI` = '$DNI'; "; 

        if(mysqli_query($con, $sentencia))
	    {
           header("location: ../index1.php");
		   //echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	    }
	    else
	    {
		    echo "Error: <h3> <center>" . $sentencia . "<br> </h3> </center>" . mysqli_error($con); 
	    }
    }
    
    mysqli_close($con);

	return $con;

}

$con = modificar(); 

?>

</body>
</html>
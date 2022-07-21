<!DOCTYPE html>
<html>
<?php include "../Vista/Inicio_Mod.php" ?>

<?php 

function actualizar()
{

include '../Controlador/db.php'; 
 
if(isset($_POST['Cambiar']))
{
	$Email = $_POST["email"]; 
	
	$salt = '34a@$#aA9823$';
	
	$Nueva = hash('sha256', $salt . $_POST["nueva"]);

    //$sentencia = "INSERT INTO products 
    //('product_id', 'product_cat', 'product_brand', 'product_title', 'product_price', 'product_desc', 'product_image', 'product_keywords¿, 'stock'
    //VALUES (NULL, '$cat', '$marca', '$nombre', '$precio', '$desc', '$imagen', '$nombre', '15'); "; 
    
    /*$sentencia = "UPDATE `user_info` SET `user_id` = '$id', `first_name` = '$nombre', `last_name` = '$apellido', `email` = '$correo' ,`password` = '$contraseña', `mobile` = '$telefono', 
    `address` = '$direccion',`Rol` = '$rol', `DNI` = '$DNI', `Tipo_Documento` = '$documento' 
	WHERE `user_id` = '$id'; ";*/
	
	$sentencia = "UPDATE `user_info` SET `password` = '$Nueva' WHERE `email` = '$Email'; "; 

	//$sentencia = "UPDATE `user_info` SET `user_id`='$id',`first_name`='$nombre',`last_name`='$apellido',`email`='$correo',`password`='$contraseña',
	//`mobile`='$telefono',`address`='$direccion',`Rol`='$rol',`DNI`='$DNI',`Tipo_Documento`='$documento' 
	//WHERE `user_id`='$id'; "; 

    //$sentencia->execute();

    if(mysqli_query($con, $sentencia))
	{
        header("location: ../index1.php");
		//echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia . "<br> </h3> </center>" . mysqli_error($con); 
	}

	mysqli_close($con);

	return $con;
} 
}

$con = actualizar(); 

?>

</body>
</html>
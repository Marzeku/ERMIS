<!DOCTYPE html>
<html>
<?php include "../Vista/Inicio_Mod.php" ?>

<?php 

function actualizar()
{

include '../Controlador/db.php'; 
 
if(isset($_POST['Actualizar']))
{
	$id = $_POST["ID"]; 
    $DNI = $_POST["DNI"]; 
    $documento = $_POST['documento']; 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    // $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$rol = $_POST['rol']; 

    //$sentencia = "INSERT INTO products 
    //('product_id', 'product_cat', 'product_brand', 'product_title', 'product_price', 'product_desc', 'product_image', 'product_keywords¿, 'stock'
    //VALUES (NULL, '$cat', '$marca', '$nombre', '$precio', '$desc', '$imagen', '$nombre', '15'); "; 
    
    /*$sentencia = "UPDATE `user_info` SET `user_id` = '$id', `first_name` = '$nombre', `last_name` = '$apellido', `email` = '$correo' ,`password` = '$contraseña', `mobile` = '$telefono', 
    `address` = '$direccion',`Rol` = '$rol', `DNI` = '$DNI', `Tipo_Documento` = '$documento' 
	WHERE `user_id` = '$id'; ";*/
	
	$sentencia = "UPDATE `user_info` SET `ID_user`='$id',`first_name`='$nombre',`last_name`='$apellido',`email`='$correo',
	`mobile`='$telefono',`address`='$direccion',`Rol`='$rol',`DNI`='$DNI',`Tipo_Documento`='$documento' 
	WHERE `ID_user`='$id'; "; 

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
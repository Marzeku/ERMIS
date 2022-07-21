<!DOCTYPE html>
<html>
<?php include "../Vista/Inicio_Mod.php" ?>
<?php 

function eliminar()
{

include '../Controlador/db.php'; 
 
if(isset($_POST['Eliminar']))
{
    $id = $_POST['ID']; 

    //$sentencia = "INSERT INTO products 
    //('product_id', 'product_cat', 'product_brand', 'product_title', 'product_price', 'product_desc', 'product_image', 'product_keywords¿, 'stock'
    //VALUES (NULL, '$cat', '$marca', '$nombre', '$precio', '$desc', '$imagen', '$nombre', '15'); "; 
    
    //$sentencia = "UPDATE `products`  SET `product_id`  = '$id', `product_cat`  = '$cat', `product_brand`  = '$marca', `product_title`  = '$nombre', 
    //`product_price`  = '$precio', `product_desc`  = '$desc', `product_image`  = '$imagen', `product_keywords`  = '$nombre', `Stock`  = '$stock', `IVA`  = '$iva', `Descuento`  = '$descuento'
	//WHERE 'product_id' = '113'; "; 

	/*

	$sql1 = "SELECT * FROM compra WHERE `ID_user` = $id"; 
	$result1 = mysqli_query($con, $sql1); 

	while($mostrar = mysqli_fetch_array($result1))
	{
		$Compra = $mostrar["Cod_Compra"];  
	}

	$sql2 = "SELECT * FROM factura WHERE `user_id` = $id"; 
	$result2 = mysqli_query($con, $sql2); 

	while($mostrar = mysqli_fetch_array($result2))
	{
		$Factura = $mostrar["Numero_Factura"];  
	}

	*/

	$sentencia1 = "DELETE FROM `detalle_factura` WHERE `Numero_Factura` = '$Factura'"; 
	$sentencia2 = "DELETE FROM `factura` WHERE `ID_user` = '$id'; ";
	$sentencia3 = "DELETE FROM `detalle_compra` WHERE `Cod_Compra` = '$Compra'"; 
	$sentencia4 = "DELETE FROM `compra` WHERE `user_id` = '$id'; ";
	$sentencia5 = "DELETE FROM `cliente` WHERE `user_id` = '$id'; ";
	$sentencia6 = "DELETE FROM `administrador` WHERE `user_id` = '$id'; ";
	$sentencia = "DELETE FROM `user_info` WHERE `ID_user` = '$id'; ";

	//$sentencia->execute();
	
	/*
	if(mysqli_query($con, $sentencia1))
	{
        //header("location: ../index.php");
		//echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia1 . "<br> </h3> </center>" . mysqli_error($con); 
	}

	if(mysqli_query($con, $sentencia2))
	{
        //header("location: ../index.php");
		//echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia2 . "<br> </h3> </center>" . mysqli_error($con); 
	}

	if(mysqli_query($con, $sentencia3))
	{
        //header("location: ../index.php");
		//echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia3 . "<br> </h3> </center>" . mysqli_error($con); 
	}

	if(mysqli_query($con, $sentencia4))
	{
        //header("location: ../index.php");
		//echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia4 . "<br> </h3> </center>" . mysqli_error($con); 
	}

	if(mysqli_query($con, $sentencia5))
	{
        //header("location: ../index.php");
		//echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia5 . "<br> </h3> </center>" . mysqli_error($con); 
	}

	if(mysqli_query($con, $sentencia6))
	{
        //header("location: ../index.php");
		//echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia6 . "<br> </h3> </center>" . mysqli_error($con); 
	}
	*/

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

$con = eliminar(); 

?>

</body>
</html>
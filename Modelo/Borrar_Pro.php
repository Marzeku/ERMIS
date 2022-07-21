<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src = "https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
<script src="https://gist.github.com/parzibyte/b0cd4aa336b4368ebc1df3eed97e54a3.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<head>
		<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="../Vista/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../Vista/css/carga.css"/> 
		<script src="../Vista/js/jquery2.js"></script>
		<script src="../Vista/js/bootstrap.min.js"></script>
		<script src="../main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
</head>

<?php // include "../Vista/Inicio_Mod.php";
include "../Vista/Modulo.php";

?>

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
	
	$sql1 = "SELECT * FROM detalle_compra WHERE `product_id` = $id"; 
	$result1 = mysqli_query($con, $sql1); 

	while($mostrar = mysqli_fetch_array($result1))
	{
		$Compra = $mostrar["Cod_Compra"];  
	}

	$sql2 = "SELECT * FROM detalle_factura WHERE `product_id` = $id"; 
	$result2 = mysqli_query($con, $sql2); 

	while($mostrar = mysqli_fetch_array($result2))
	{
		$Factura = $mostrar["Numero_Factura"];  
	}

	$sentencia1 = "DELETE FROM `detalle_orden` WHERE product_id = '$id'; ";
	$sentencia3 = "DELETE FROM `detalle_factura` WHERE product_id = '$id'; ";
	$sentencia2 = "DELETE FROM `factura` WHERE Numero_Factura = '$Factura'; ";
	$sentencia5 = "DELETE FROM `detalle_compra` WHERE product_id = '$id'; ";
	$sentencia4 = "DELETE FROM `compra` WHERE Cod_Compra = '$Compra'; ";
	$sentencia = "DELETE FROM `products` WHERE product_id = '$id'; ";

	//$sentencia->execute();
	
	?>

        <script>

        Swal
        .fire({
        title: '&#191;Est\u00e1 seguro de eliminar el producto?',
        text: "Una vez confirmada la petici\u00f3n, no se podr\u00e1 recuperar el registro",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar producto',
        buttons: true,
        dangerMode: true,
        })
        
        .then(resultado => {
        if (resultado.value)
        {
            Swal.fire(
                'Eliminado',
                'El producto ha sido removido',
                'success'
            )
            .then(res => {
            if (res.value)
            {
                Swal.fire(console.log(window.location = "../Vista/Suprimir_Pro.php"));
            }
            });
        }
        });

        </script>
        
        <?php
        
        if((isset($_POST["true"])))
        {
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

            if(mysqli_query($con, $sentencia))
	        {
	            
	        }
	        else
	        {
	            echo "Error: <h3> <center>" . $sentencia . "<br> </h3> </center>" . mysqli_error($con);
	        }
        }
        else
        {
            echo 'Hubo un error al eliminar el producto';
        }
        
        ?>
        
        <center>

        <br><br><br><p></p>
        <font face = "Verdana" size = "4">Si existe un problema, da click:</font> <p></p>

        <a href="javascript:location.reload()"><button class="btn btn-primary" id="Refrescar" width="700px" height="100px"><font size=3 face="Verdana"><b> Refrescar </b></font></button></a>
        <a href="../Controlador/Eliminar_P.php?ID=<?php echo $id; ?>"><button class="btn btn-success" id="Volver" width="700px" height="100px"><font size=3 face="Verdana"><b> Volver </b></font></button></a>

        </center>

    <?php

	mysqli_close($con);

	return $con;
} 
}

$con = eliminar();

?>
</body>
</html>
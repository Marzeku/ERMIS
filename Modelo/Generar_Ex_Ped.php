<?php

include '../Controlador/db.php';

header("Pragma: public");
header("Expires: 0");
$filename = "Registros_Pedidos_ERMIS.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>

<table>
 <tbody>

 <p></p>
 <br>
 
 <font face = "Cambria">
    <center>
        <h2>PEDIDOS DE PRODUCTOS DE TECNOLOGIA</h2>
        <h3>Tienda Web ERMIS</h3>
    </center>
 </font>
 
 <font face = "Georgia">

    <table class="table">
		<thead>
		<tr>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"><h4> ID </h4></font></th>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"><h4> ID del Usuario </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Nombres </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Apellidos </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Correo </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Numero Telefonico </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Direccion </h4></font></th>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"><h4> ID del Producto </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Producto </h4></font></th>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"><h4> Cantidad </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Precio </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Monto Total </h4></font></th>
		</tr>
		</thead>
    <?php 

		$sentencia = "SELECT * FROM cart, products, user_info WHERE p_id = product_id AND user_id = ID_user"; 
		$result = mysqli_query($con, $sentencia); 

		while($mostrar = mysqli_fetch_array($result))
		{ 

		?>

		<center><tr>
			<td width = "5%" class="text-center"> <center> <?php echo $mostrar['id']; ?> </center> </td>
			<td width = "5%" class="text-center"> <center> <?php echo $mostrar['ID_user']; ?> </center>  </td>
			<td width = "10%" class="text-center"> <center> <?php echo $mostrar['first_name']; ?> </center>  </td>
			<td width = "10%" class="text-center"> <center> <?php echo $mostrar['last_name']; ?> </center>  </td>
			<td width = "10%" class="text-center"> <center> <?php echo $mostrar['email']; ?> </center>  </td>
			<td width = "10%" class="text-center"> <center> <?php echo $mostrar['mobile']; ?> </center>  </td>
			<td width = "10%" class="text-center"> <center> <?php echo $mostrar['address']; ?> </center>  </td>
			<td width = "5%" class="text-center"> <center> <?php echo $mostrar['p_id']; ?> </center>  </td>
			<td width = "10%" class="text-center"> <center> <?php echo $mostrar['product_title']; ?> </center> </td>
			<td width = "5%" class="text-center"> <center> <?php echo $mostrar['qty']; ?> </center>  </td>
			<td width = "10%" class="text-center"> <center> $ <?php echo number_format($mostrar['price']); ?>.00 </center>  </td>
			<td width = "10%" class="text-center"> <center> $ <?php echo number_format($mostrar['total_amt']); ?>.00 </center> </td>
		
		</tr></center>		
    <?php } ?>
    </tbody>
	</table>
	</table>
	</font>
	
<?php 

return $con;

?>
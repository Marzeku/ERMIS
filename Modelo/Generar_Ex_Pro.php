<?php

include '../Controlador/db.php';

header("Pragma: public");
header("Expires: 0");
$filename = "Inventario_Productos_ERMIS" . ".xls";
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
        <h2>INVENTARIO DE PRODUCTOS DE TECNOLOGIA</h2>
        <h3>Tienda Web ERMIS</h3>
    </center>
 </font> 
 
 <font face = "Georgia">

    <table class="table">
		<thead>
		<tr>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"><h4> ID </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Categoria </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Marca </h4></font></th>
			<th scope="col" width = "15%" class="text-center"> <font face = "Segoe UI"><h4> Nombre </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Precio </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Descripci贸n </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Stock </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> IVA </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Descuento </h4></font></th>
		</tr>
		</thead>
<?php 

    $sentencia = "SELECT * FROM products";
    $result = mysqli_query($con, $sentencia);

		while($mostrar = mysqli_fetch_array($result))
		{ 
			if($mostrar['product_cat'] == '1')
			{
				$mostrar['product_cat'] = "Tecnologia"; 
			}
			if($mostrar['product_brand'] == '1')
			{
				$mostrar['product_brand'] = "HP"; 
			}
			if($mostrar['product_brand'] == '2')
			{
				$mostrar['product_brand'] = "Samsung"; 
			}
			if($mostrar['product_brand'] == '3')
			{
				$mostrar['product_brand'] = "Apple"; 
			}
			if($mostrar['product_brand'] == '4')
			{
				$mostrar['product_brand'] = "Sony"; 
			}
			if($mostrar['product_brand'] == '5')
			{
				$mostrar['product_brand'] = "LG"; 
			}
		?>

		<center><tr>
		    <td width = "5%" class="text-center"><center><?php echo $mostrar['product_id']; ?></center></td>
			<td width = "10%" class="text-center"><center><?php echo $mostrar['product_cat']; ?></center></td>
			<td width = "10%" class="text-center"><center><?php echo $mostrar['product_brand']; ?></center></td>
			<td width = "15%" class="text-center"><center><?php echo $mostrar['product_title']; ?></center></td>
			<td width = "10%" class="text-center"><center>$<?php echo number_format($mostrar['product_price']); ?>.00</center></td>
			<td width = "30%" class="text-center"><center><?php echo $mostrar['product_desc']; ?></center></td>
			<td width = "10%" class="text-center"><center><?php echo $mostrar['Stock']; ?></center></td>
			<td width = "5%" class="text-center"><center><?php echo ($mostrar['IVA']) * 100; ?>%</center></td>
			<td width = "5%" class="text-center"><center><?php echo ($mostrar['Descuento']) * 100; ?>%</center></td>
		</tr></center>		
    <?php } ?>
    </tbody>
	</table>
	</table>
	</font>
	
<?php 

return $con;

?>
<!DOCTYPE html>
<html>
<?php include "../Vista/Inicio_Mod.php" ?>

<?php

interface Dato
{
	public function pedidos(); 
}

class Listar implements Dato 
{
    
public function pedidos()
{
	include '../Controlador/db.php'; 

	?>
	<div class="container-fluid">
	   <div class="panel panel-primary">
	   <div class="panel-heading"><br><h4 class="display-8" id = "h1">
	    <font face = "Cambria" size = "5"><b>PEDIDOS DEL CARRITO DE COMPRAS</b></font>
	    <div align = "right">
	    <font face = "Candara">
		     <a href = "../Modelo/Generar_Ex_Ped.php"><input style="float:center;" value="Exportar a Excel" type="submit" id="Exportarped_ex" name="Exportarped_ex" class="btn btn-success btn-lg"></a>
		</font>
		</div>
		<div class="row">
		<div class="col-md-12">
		</div>
		</div>
	</div>

	<div class="panel-body">
    <font face = "Georgia">
    <table class="table">
        <thead>
		<tr>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"> <h4> ID </h4> </font></th>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"> <h4> ID del Usuario </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Nombres </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Apellidos </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Correo </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Número Teléfonico </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Dirección </h4> </font> </th>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"> <h4> ID del Producto </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Producto </h4> </font> </th>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"> <h4> Cantidad </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Precio </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Monto Total </h4> </font> </th>
		</tr>
		</thead>
        
		<?php 

		// $sentencia = "SELECT DISTINCT * FROM cart, products, user_info WHERE p_id = product_id"; 
		$sentencia = "SELECT * FROM cart, products, user_info WHERE p_id = product_id AND user_id = ID_user"; 
		$result = mysqli_query($con, $sentencia); 

		while($mostrar = mysqli_fetch_array($result))
		{ 
		?>

		<tr>
			<td width = "5%" class="text-center"> <?php echo $mostrar['id']; ?></td>
			<td width = "5%" class="text-center"> <?php echo $mostrar['ID_user']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['first_name']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['last_name']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['email']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['mobile']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['address']; ?></td>
			<td width = "5%" class="text-center"><?php echo $mostrar['p_id']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['product_title']; ?></td>
			<td width = "5%" class="text-center"><?php echo $mostrar['qty']; ?></td>
			<td width = "10%" class="text-center">$ <?php echo number_format($mostrar['price']); ?>.00</td>
			<td width = "10%" class="text-center">$ <?php echo number_format($mostrar['total_amt']); ?>.00</td>
		</tr>
		<?php } ?>
	</table>
	</div>
	</div>
	</div>
    </font>
    <?php

	return $con;
}
}

Listar::pedidos(); 

?>

    <script>
      
          window.onload = function()
          {
              var contenedor = document.getElementById
              (
                  'contenedor_carga'
              ); 
              
              contenedor.style.visibility = 'hidden';
              contenedor.style.opacity = '0';
          }
          
    </script>
      
</body>
</html>
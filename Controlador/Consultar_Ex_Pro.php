<!DOCTYPE html>
<html>
	<?php include '../Vista/Inicio_Con.php'; ?>
			<ul class="nav navbar-nav">
				<li style="top:1px;left:-120px;"><a href="../Vista/Buscar_Pro.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
			</ul>
		</div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>

<?php

// Patron Factory Method, en el que se define una clase, que contiene una funcion para consultar y asimismo, permite 
// crear nuevos objetos o seleccionarlos directo de la base de datos y mostrarlo en la aplicacion. 

interface Dato
{
	public function consultar(); 
}

class Listar
{
    
public static function consultar()
{
	include 'db.php';
	
	?>

    <div class="container-fluid">
		<div class="panel panel-primary">
		<div class="panel-heading"><br><h4 class="display-8" id = "h1">
		    <font face = "Cambria" size = "5"><b>INVENTARIO DEL CARRITO DE COMPRAS</b></font>
	        <form method="post" action = "../Modelo/Generar_Ex_Pro.php">
	         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	           <font face = "Candara">
	                 <input style="float:center;" value="Exportar a Excel" type="submit" id="Exportarp_ex" name="Exportarp_ex" class="btn btn-primary btn-lg"></b> </h4>
	           </font>
	        </form>
		    <div class align = "right">
	           <div class = "container">
					<div class="row">
						<div class="col-md-10">
							<font face = "Candara">
							<form method="post" action = "../Vista/Buscar1_Pro.php">
								 <input style="float:center;" value="Consultar por Identificación" type="submit" id="Consultar_P" name="Consultar_P" class="btn btn-warning btn-lg">
							</form>
						</div>
						<div class="col-md-1">
							<form method="post" action = "../Vista/Buscar2_Pro.php">
								<input style="float:center;" value="Consultar por Nombre" type="submit" id="Consultar_P" name="Consultar_P" class="btn btn-success btn-lg">
							</form>
							</font>
						</div>	
					</div>
				</div>
			</div>
		</div>

	    <div class="panel-body">
        <font face = "Georgia">
        <table class="table">
        <thead>
		<tr>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"> <h4> ID </h4> </font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Categoria </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Marca </h4> </font> </th>
			<th scope="col" width = "15%" class="text-center"> <font face = "Segoe UI"> <h4> Nombre </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Precio </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Descripción </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Stock </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> IVA </h4> </font> </th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"> <h4> Descuento </h4> </font> </th>
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

		<tr>
		    <td width = "5%" class="text-center"><?php echo $mostrar['product_id']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['product_cat']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['product_brand']; ?></td>
			<td width = "15%" class="text-center"><?php echo $mostrar['product_title']; ?></td>
			<td width = "10%" class="text-center">$<?php echo number_format($mostrar['product_price']); ?>.00</td>
			<td width = "30%" class="text-center"><?php echo $mostrar['product_desc']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['Stock']; ?></td>
			<td width = "5%" class="text-center"><?php echo ($mostrar['IVA']) * 100; ?>%</td>
			<td width = "5%" class="text-center"><?php echo ($mostrar['Descuento']) * 100; ?>%</td>
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

/*class Concrete_Creator_1 extends Creator
{
    public function FactoryMethod()
    {
        return new Concrete_Consulta_1;
    }
}

class Concrete_Creator_2 extends Creator
{
    public function FactoryMethod()
    {
        return new Concrete_Consulta_2;
    }
}

interface Objeto 
{
    public function operation(): string;
}

class Concrete_Consulta_1 implements Objeto
{
    public function operation(): string 
    {
        return "Resultado del Producto Concreta No. 01";
    }
}

class Concrete_Consulta_2 implements Objeto
{
    public function operation(): string 
    {
        return "Resultado del Producto Concreta No. 01";
    }
}

function Buscar(Creator $creator)
{
    $creator->FactoryMethod();
}

//echo "Resultado lanzado de Concrete_Creator_1.\n";
Buscar(new Concrete_Creator_1);
echo "\n\n";

//echo "Resultado lanzado de Concrete_Creator_1.\n";
Buscar(new Concrete_Creator_2);*/ 

//$Dato = new Listar();
//Buscar($Dato); 

/*$B = new buscar();
$B->consultar(); */ 

//function Buscar (Dato $Dato)
//{
	//$Dato->consultar();  	
//}

//$con = buscar::consultar(); 

Listar::consultar(); 

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
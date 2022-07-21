<!DOCTYPE html>
<html>
    <head><meta http-equiv="X-UA-Compatible" content="IE=edge"></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
	<script src = "https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
	<script src="https://gist.github.com/parzibyte/b0cd4aa336b4368ebc1df3eed97e54a3.js"></script>
	        
	<?php include '../Vista/Inicio_Con.php'; ?>
			<ul class="nav navbar-nav">
				<li style="top:1px;left:-120px;"><a href="../Vista/Buscar2_Pro.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
			</ul>
		</div>
        </div>
        
<p><br/></p>

<?php

// Patron Factory Method, en el que se define una clase, que contiene una funcion para consultar y asimismo, permite 
// crear nuevos objetos o seleccionarlos directo de la base de datos y mostrarlo en la aplicacion. 

abstract class Creator
{
	abstract public function FactoryMethod(); 

	public function someOperation(): string
    {
        // Se llama el Factory Method para crear un nuevo objeto
        $product = $this->FactoryMethod();
        // Ahora, se usa el objeto 
        $result = "El mismo codigo creador acaba de funcionar..." .
        $product->operation();

        return $result;
    }
}

class Concrete_Creator extends Creator
{
    public function FactoryMethod()
    {
        return new ConsultaFactory;
    }
}

interface Dato
{
	public function consultar(); 
}

class FactoryMethod 
{

}

class ConsultaFactory 
{
	public function create($type)
	{
		if($type == $_POST["ID"])
		{
			return new Listar(new FactoryMethod); 
		}
	}
}

class Listar
{
private $ID; 

public function __construct($ID)
{
	$this->ID = $ID; 
}

public static function consultar()
{
    include '../Controlador/db.php';

	$ID = $_POST["ID"];

		$sentencia = "SELECT * FROM products WHERE product_id = $ID";
		$result = mysqli_query($con, $sentencia);

		if($mostrar = mysqli_fetch_array($result))
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
			
			// $ID = $mostrar['product_id'];

		?>
		<div class="container-fluid">
		<div class="panel panel-primary">
		<div class="panel-heading"><br><h4 class="display-8" id = "h1">
		    <b><font face = "Cambria" size = "5"><?php if($ID < 10){ echo '0' . $ID . '. '; }else{ echo $ID . '. '; } echo $mostrar['product_title']; ?> </font>
		    <font face = "Candara">
		        <div class align = "right"></h4>
	             <div class = "container">
	             <div class="row">
	             <div class="col-lg-10">
	             <form method="post" action = "../Modelo/Generar1_Ex_Pro.php">
		             <input type = "hidden" id="ID" name="ID" value = <?php echo $ID ?>>
		             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                 <input style="float:center;" value="Exportar a Excel" type="submit" id="Exportarp_ex" name="Exportarp_ex" class="btn btn-primary btn-lg"></b></h4>
	             </form>
	             </div>
	             <div class="col-lg-1">
	             <form method="post" action = "../Vista/Buscar1_Pro.php">
		            <input type = "hidden" id="ID" name="ID" value = <?php echo $ID ?>>
		            <input style="float:center;" value="Consultar por Identificación" type="submit" id="Consultar_P" name="Consultar_P" class="btn btn-success btn-lg"></b></h4>
	             </form>
	             </div>
	             </div>
	             </div>
	             </div>
	        </font>
		    <div class="row">
		    <div class="col-md-12">
		   </div>
		</div>
        <div class="panel-body">
        <font face = "Georgia">
        <table class="table">
        <thead>
		<tr>
			<th scope="col" width = "5%" class="text-center"> <font face = "Segoe UI"><h4> ID </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Categoria </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Marca </h4></font></th>
			<th scope="col" width = "15%" class="text-center"> <font face = "Segoe UI"><h4> Nombre </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Precio </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Descripción </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Stock </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> IVA </h4></font></th>
			<th scope="col" width = "10%" class="text-center"> <font face = "Segoe UI"><h4> Descuento </h4></font></th>
		</tr>
		</thead>
		
	    <tr>
		    <td width = "5%" class="text-center"><?php echo $ID; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['product_cat']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['product_brand']; ?></td>
			<td width = "15%" class="text-center"><?php echo $mostrar['product_title']; ?></td>
			<td width = "10%" class="text-center">$<?php echo number_format($mostrar['product_price']); ?>.00</td>
			<td width = "30%" class="text-center"><?php echo $mostrar['product_desc']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['Stock']; ?></td>
			<td width = "5%" class="text-center"><?php echo ($mostrar['IVA']) * 100; ?>%</td>
			<td width = "5%" class="text-center"><?php echo ($mostrar['Descuento'])  * 100; ?>%</td>
		</tr>
		<?php 
	    }
	    else
	    {
	        include "../Vista/Modulo.php";
	        
	        ?>

	        <script>

	        Swal
	        .fire({
	        title: 'Producto no encontrado',
	        text: 'No se pudieron obtener los datos',
	        icon: 'error',
	        confirmButtonText: 'Ok',
	        })
        
	        .then(resultado => {
	        if (resultado.value)
	        {
                Swal.fire(console.log(window.location = "../Vista/Buscar2_Pro.php"));
	        }
	        });
        
            </script>
            
            <center>

            <br><br><br><p></p>
            <font face = "Verdana" size = "4">Si existe un problema, da click:</font> <p></p>

            <a href="javascript:location.reload()"><button class="btn btn-primary" id="Refrescar" width="700px" height="100px"><font size=3 face="Verdana"><b> Refrescar </b></font></button></a>
            <a href="../Vista/Buscar2_Pro.php"><button class="btn btn-success" id="Volver" width="700px" height="100px"><font size=3 face="Verdana"><b> Volver </b></font></button></a>

            </center>
        
        <?php
        
	        echo 
	        "
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
          
            </script>";
	    }
		?>
	</table>
	</div>
	</font>
	<div class="panel-footer">
	<font face = "Candara">
	    <div class align = "right">
	    <div class = "container">
	    <div class="row">
	        <div class="col-md-3">
			<form method="post" action = "../Controlador/Consultar_Ex_Pro.php">
				<input style="float:center;" value="Consultar todos los productos" type="submit" id="Consultar_P" name="Consultar_P" class="btn btn-link btn-lg">
			</form>
		    </div>
	       <div class="col-md-7">
	       <form method="post" action = "../Controlador/Actualizar_Pro.php">
		      <input type = "hidden" id="ID" name="ID" value = <?php echo $ID ?>>
	          <input style="float:center;" value="Actualizar Producto" type="submit" id="Actualizar_Pro" name="Actualizar_Pro" class="btn btn-warning btn-lg"></b> </h4>
	       </form>
	    </div>
	    <div class="col-md-1">
	        <form method="post" action = "../Controlador/Eliminar_Pro.php">
		       <input type = "hidden" id="ID" name="ID" value = <?php echo $ID ?>>
		       <input style="float:center;" value="Eliminar Producto" type="submit" id="Eliminar_Pro" name="Eliminar_Pro" class="btn btn-danger btn-lg"></b> </h4>
	     </form>
	     </div>
	     </div>
	     </div>
	   </div>
	   </font>
	</div>
	</div>
	</div>
    
    <?php 

	return $con;
}
}

$factory = new ConsultaFactory(); 
// $C = $factory->create($ID); 

function Buscar(Creator $creator)
{
    $creator->FactoryMethod();
}

Buscar(new Concrete_Creator);
echo "\n\n";

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
<!DOCTYPE html>
<html>
	<head><meta http-equiv="X-UA-Compatible" content="IE=edge"></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
	<script src = "https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
	<script src="https://gist.github.com/parzibyte/b0cd4aa336b4368ebc1df3eed97e54a3.js"></script>
	<?php include '../Vista/Inicio_Con.php'; ?>
		<ul class="nav navbar-nav">
			<li style="top:1px;left:-110px;"><a href="../Vista/Eliminar_Pro.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
		</ul>
	</div>
    </div>

<?php

include '../Controlador/db.php'; 

$ID = $_GET["ID"];

$sentencia = "SELECT * FROM products WHERE product_id = $ID"; 
$result = mysqli_query($con, $sentencia); 

while($mostrar = mysqli_fetch_array($result))
{
    if($mostrar['product_cat'] == '1')
	{
		$Cat1 = "Tecnologia"; 
	}
	if($mostrar['product_brand'] == '1')
	{
		$Marca1 = "HP";
	}
	if($mostrar['product_brand'] == '2')
	{
		$Marca1 = "Samsung";
	}
	if($mostrar['product_brand'] == '3')
	{
		$Marca1 = "Apple";
	}
	if($mostrar['product_brand'] == '4')
	{
		$Marca1 = "Sony";
	}
	if($mostrar['product_brand'] == '5')
	{
		$Marca1 = "LG";
	}
	
    $ID1 = $mostrar['product_id'];
	$Cat = $mostrar['product_cat']; 
	$Marca = $mostrar['product_brand']; 
	$Nombre = $mostrar["product_title"];
	$Desc = $mostrar["product_desc"];
	$Precio = $mostrar['product_price'];
}

if($ID == $ID1)
{
?>

<p><br/></p>
<font face = "Palatino" size="4">
<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
				    <div class="panel-heading"><b><font size = "5">Eliminar Producto</font></b><p></p>
				    <b><?php if($ID < 10){ echo '0' . $ID . '. '; }else{ echo $ID . '. '; } echo $Nombre;?></b>
				    </div>
					<div class="panel-body">
					
					<form method="post" action = "../Modelo/Borrar_Pro.php">
						<div class="row">
							<div class="col-md-6">
                                <input type="hidden" id="ID" name="ID" value = "<?php echo $ID; ?>" class="form-control">
                            </div>
							<div class="col-md-12">
								<p></p><label for="nombre">Nombre</label> <p></p>
                                <input type="text" id="nombre" style="font-family: Cambria; font-size: 13pt;" name="nombre" value = "<?php echo $Nombre; ?>" readonly="readonly" class="form-control">
                                <p>
                            </div>
                        </div>
                        <div class="row">
							<div class="col-md-6">
                                <p></p><label for="cat">Categoria</label> <p></p>
                                <select menu="cat" id="cat" name = "cat" style="width : 400px" class="form-control">
                                    <option selected value="<?php echo $Cat; ?>"><?php echo $Cat1; ?></option>
								</select>
								<p>
							</div>
							
                            <div class="col-md-6">
                                <p></p><label for="marca">Marca</label> <p></p>
                                <select menu="marca" id="marca" name = "marca" style="width : 400px" class="form-control">
                                    <option selected disabled value="<?php echo $Marca; ?>"><?php echo $Marca1; ?></option>
								</select>
								<p>
							</div>
                        </div>
                        <style type="text/css">
                            SELECT 
                            {   
                                font-size: 48pt;   
                                font-family : Cambria,arial,helvetica;
                            }
						</style>
                        <div class="row">
                        <div class="col-md-12">
								<p></p><label for="descripcion">Descripción</label><p></p>
                                <textarea id = "textarea" name = "descripcion" rows = "15" cols = "116" required="required" placeholder = "Digite la Descripción" readonly="readonly" class="form-control"><?php echo strip_tags($Desc); ?></textarea>
                                <style type="text/css">
                                   #textarea 
                                   {
                                      font-family: Cambria, verdana, ms sans serif;
                                      font-size: 13pt;
                                   }
                                </style>
                                <p>
                        </div>
                        <div class="col-md-12">
								<p></p><label for="precio">Precio ($)</label><p></p>
                                <input type="number" id="precio" style="font-family: Cambria; font-size: 13pt;" name="precio" value="<?php echo $Precio; ?>" min="0" oninput="this.value = Math.abs(this.value)" readonly="readonly" class="form-control">
                                <p>
                        </div>
                        </div>
                        <p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="font-family: Candara; float:right;" value="Eliminar" type="submit" id="Eliminar" name="Eliminar" class="btn btn-success btn-lg">
							</div>
						</div>
						
					    </div>
                    </form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	</font>
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
        Swal.fire(console.log(window.location = "../Vista/Eliminar1_Pro.php"));
	}
	});
        
    </script>
    
    <center>

    <br><br><br><p></p>
    <font face = "Verdana" size = "4">Si existe un problema, da click:</font> <p></p>

    <a href="javascript:location.reload()"><button class="btn btn-primary" id="Refrescar" width="700px" height="100px"><font size=3 face="Verdana"><b> Refrescar </b></font></button></a>
    <a href="../Vista/Eliminar1_Pro.php"><button class="btn btn-success" id="Volver" width="700px" height="100px"><font size=3 face="Verdana"><b> Volver </b></font></button></a>

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
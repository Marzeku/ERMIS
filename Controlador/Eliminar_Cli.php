<!DOCTYPE html>
<html>
    <?php include '../Vista/Inicio_Con.php'; ?>
		<ul class="nav navbar-nav">
			<li style="top:1px;left:-110px;"><a href="../Vista/Eliminar1_Cli.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
		</ul>
	</div>
    </div>

<?php

include '../Controlador/db.php';

$ID = $_POST["ID"]; 

$sentencia = "SELECT * FROM user_info WHERE `ID_user` = $ID"; 
$result = mysqli_query($con, $sentencia); 

while($mostrar = mysqli_fetch_array($result))
{
	$ID1 = $mostrar['ID_user']; 
	$Nombres = $mostrar["first_name"]; 
	$Apellidos = $mostrar["last_name"];
	$Rol = $mostrar['Rol']; 
}

if($ID == $ID1)
{
?>

<p><br/></p>
<p><br/></p>
<p><br/></p>
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
					<div class="panel-heading"><b>Eliminar un cliente</b></div>
					<div class="panel-body">
					
					<form method="post" action = "../Modelo/Borrar_Cli.php">
						<div class="row">
							<div class="col-md-6">
                                <input type="hidden" id="ID" name="ID" value = "<?php echo $ID ?>" class="form-control">
                            </div>
							<div class="col-md-12">
								<label for="nombre">Nombres</label> <br>
                                <input type="text" id="nombre" name="nombre" value = "<?php echo $Nombres; ?>" readonly="readonly" class="form-control">
                                <p>
                            </div>
                            <div class="col-md-12">
								<label for="apellido">Apellidos</label> <br>
                                <input type="text" id="apellido" name="apellido" value = "<?php echo $Apellidos; ?>" readonly="readonly" class="form-control">
                                <p>
                            </div>
                        </div>
                        <p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Eliminar" type="submit" id="Eliminar" name="Eliminar" class="btn btn-success btn-lg">
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

<?php
}
else
{
	include '../Vista/Eliminar1_Cli.php';

	echo 
	"<div class='alert alert-danger'>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	<center><b>El cliente con el ID ".$ID. " no existe... </b></center>
	</div> ";
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
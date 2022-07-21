<!DOCTYPE html>
<html>
<?php include '../Vista/Inicio_Con.php'; ?>
	<ul class="nav navbar-nav">
		<li style="top:1px;left:-110px;"><a href="../Vista/Actualizar1_Cli.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
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
	$DNI = $mostrar["DNI"]; 
	$Documento = $mostrar["Tipo_Documento"]; 
	$Nombres = $mostrar["first_name"]; 
	$Apellidos = $mostrar["last_name"];
	$Correo = $mostrar["email"];
	// $Contraseña = $mostrar["password"];
	$Telefono = $mostrar["mobile"]; 
	$Direccion = $mostrar["address"];
	$Rol = $mostrar["Rol"]; 
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
					<div class="panel-heading"><b>Actualizar un cliente</b></div>
					<div class="panel-body">
					
					<form method="post" action = "../Modelo/Cambiar_Cli.php">
						<div class="row">
						    <div class="col-md-12">
                                <input type="hidden" id="ID" name="ID" value = "<?php echo $ID; ?>"class="form-control">
                                <p>
                            </div>
							<div class="col-md-6">
								<label for="DNI">DNI</label> <br>
                                <input type="number" id="DNI" name="DNI" value = "<?php echo $DNI; ?>" min="0" oninput="this.value = Math.abs(this.value)" class="form-control">
                                <p>
                            </div>
                            <div class="col-md-6">
                                <label for="documento">Tipo de documento</label> <br>
                                <select menu="documento" id="documento" name = "documento" style="width : 400px" class="form-control">
                                    <option value="<?php echo $Documento; ?>" selected><?php echo $Documento; ?></option>
                                    <option value="1">TI</option>
                                    <option value="2">CC</option>
                                    <option value="3">CE</option>
                                </select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="nombre">Nombres</label>
								<input type="text" id="nombre" name="nombre" value = "<?php echo $Nombres; ?>" class="form-control">
							    <p>
							</div>
						</div>
						<div class="row">
                            <div class="col-md-12">
								<label for="apellido">Apellidos</label>
								<input type="text" id="apellido" name="apellido" value = "<?php echo $Apellidos; ?>" class="form-control">
							    <p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="correo">Correo electronico</label>
								<input type="text" id="correo" name="correo" value = "<?php echo $Correo; ?>" class="form-control">
							    <p>
						    </div>
						</div>
                        <div class="row">
							<div class="col-md-12">
								<label for="telefono">Numero telefonico</label>
								<input type="number" id=" telefono" name="telefono" value = "<?php echo $Telefono; ?>" min="0" oninput="this.value = Math.abs(this.value)" class="form-control">
							    <p>
							</div>
                        </div>
                        <div class="row">
							<div class="col-md-12">
								<label for="direccion">Direccion</label>
								<input type="direccion" id="direccion" name="direccion" value = "<?php echo $Direccion; ?>" class="form-control">
							    <p>
							</div>
						</div>
						<div class="row">
						<div class="col-md-12">
                                <label for="rol">Rol</label> <br>
                                <select menu="rol" id="rol" name = "rol" style="width : 840px" class="form-control">
                                    <option value="<?php echo $Rol; ?>" selected><?php echo $Rol; ?></option>
                                    <option value="Cliente">Cliente</option>
                                    <option value="Administrador">Administrador</option>
								</select>
						<p>
						</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Actualizar" type="submit" id="Actualizar" name="Actualizar"  class="btn btn-success btn-lg">
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
	</div>
	
<?php 
}
else
{
	include '../Vista/Actualizar1_Cli.php';

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
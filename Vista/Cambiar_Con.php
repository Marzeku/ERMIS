<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/carga.css"/> 
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="../main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
	<audio id = "Password" src = "../Musica/Password.mp3" autoplay = "autoplay" loop = "loop"></audio>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="../index.php"><img src = "../product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<ul class="nav navbar-nav">
			    <li><a href="../index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial"> &nbsp;ERMIS </font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="Verificar_CE.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
				<li style="top:10px;left:920px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="../product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
				<script>
				
				function iniciar() 
				{ 
				    var boton=document.getElementById('Play'); 
				    boton.addEventListener('click', Play, false); 
                } 

				function Play() 
				{ 
				    var audio=document.getElementById('Password'); 
				    audio.play(); 
				} 
				window.addEventListener('load', iniciar, false); 
				
				</script>
				<li style="top:10px;left:923px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="../product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
				<script>
				
				function inicio() 
				{ 
				    var boton=document.getElementById('Pausa'); 
				    boton.addEventListener('click', Pausa, false); 
                } 

				function Pausa() 
				{ 
				    var audio=document.getElementById('Password'); 
				    audio.pause(); 
				} 
				window.addEventListener('load', inicio, false); 
				
				</script>
			</ul>
		</div>
</div>

<?php

include '../Controlador/db.php'; 

$Numero = $_POST["DNI"]; 
$Correo = $_POST["correo"]; 
$Clave = $_POST["clave"]; 

$salt = '34a@$#aA9823$';
$Clave = hash('sha256', $salt . $Clave);
        
$sentencia = "SELECT * FROM user_info WHERE `email` = '$Correo' AND `DNI` = '$Numero' AND `Clave` = '$Clave'; "; 
$result = mysqli_query($con, $sentencia); 

while($mostrar = mysqli_fetch_array($result))
{
    $Numero1 = $mostrar['DNI']; 
	$Correo1 = $mostrar['email']; 
    $Clave1 = $mostrar['Clave']; 
}

if(($Numero == $Numero1) and ($Correo == $Correo1) and ($Clave == $Clave1))
{
?>

<p><br/></p>
<p><br/></p>
<p><br/></p>
<audio id="Cambio_C2" src="../music/Cambio_C2.mp3" autoplay="autoplay"></audio>
<audio id="Cambio_C1" src="../music/Cambio_C1.mp3" autoplay="autoplay"></audio>
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
					<div class="panel-heading">Cambiar contraseña</div>
					<div class="panel-body">
					<form method="post" action = "../Modelo/Confirmar_Con.php">
						<div class="row">
							<div class="col-md-6">
                                <input type="hidden" id="email" name="email" value = "<?php echo $Correo1 ?>" class="form-control">
                            </div>
							<div class="col-md-12">
								<label for="contraseña">Nueva contraseña</label> <br>
                                <input type="password" id="nueva" name="nueva" required="required" class="form-control">
                                <p>
                            </div>
                            <!--<div class="col-md-12">
								<label for="repetir">Repetir contraseña</label> <br>
                                <input type="text" id="apellido" name="apellido" value = "<?php //echo $Apellidos; ?>" readonly="readonly" class="form-control">
                                <inp <p>
                            <inp </div>
                        </div>-->
                        </div>
                        <p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Cambiar" type="submit" id="Cambiar" name="Cambiar" class="btn btn-success btn-lg">
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
</body>
</html>
<?php }
else
{
	include '../Vista/Verificar_CE.php'; 

	echo 
	"<audio id='Error' src='../music/Error.mp3' autoplay='autoplay'></audio>
	<div class='alert alert-danger'>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	<center><b>Los datos digitados no concuerdan...</b></center>
	</div> ";
	//echo "<p><br/></p>
	//<p><br/></p>
	//<p><br/></p>"; 
	//echo "<p><br/><p><h1> <center> El correo electronico y el numero de identificacion no concuerdan... </center>  </h1>";
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
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
				<a href="../index1.php"><img src = "../product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<ul class="nav navbar-nav">
			    <li><a href="../index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial"> &nbsp;ERMIS </font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="F_Clave.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
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

$DNI = $_POST["DNI"];
$Password = $_POST["password"]; 
$RePassword = $_POST["repassword"];

$salt1 = '34a@$#aA9823$';
$Password = hash('sha256', $salt1 . $Password);

$salt2 = '34a@$#aA9823$';
$RePassword = hash('sha256', $salt2 . $RePassword);
    
$sentencia = "SELECT * FROM user_info WHERE `DNI` = '$DNI'; "; 
$result = mysqli_query($con, $sentencia); 

while($mostrar = mysqli_fetch_array($result))
{
    $Password1 = $mostrar['password']; 
    $DNI1 = $mostrar['DNI'];
}

echo "$DNI1"; 
echo "$Password1";

if(($Password == $Password1) and ($RePassword == $Password1) and ($DNI == $DNI1))
{
    // Generador de claves

    // Carácteres para la clave
    
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    
    $clave = "";
    
    // Se reconstruye la contraseña segun la longitud que se quiera
    
    for($i = 0; $i < 30; $i++) 
    {
      // Se obtiene un caracter aleatorio escogido de la cadena de caracteres
      
      // Clave generada
      
      $clave .= substr($str, rand(0, 62), 1);
      
      // $salt = '34a@$#aA9823$';
      // $clave = hash('sha256', $salt . $clave);
    }
    
    $file = fopen("Clave_Generada.txt", "w");
    fwrite($file, $clave . PHP_EOL);
    fclose($file);
    
    // header("Content-disposition: attachment; filename=Clave_Generada.txt");
    // header("Content-type: application/txt");
    // readfile("Clave Generada.pdf");
    
    // echo 'Clave generada: '. $clave;
?>
<p><br/></p>
<p><br/></p>
<p><br/></p>

<audio id="Cambio_C2" src="../Musica/Cambio_C2.mp3" autoplay="autoplay"></audio>
<audio id="Cambio_C1" src="../Musica/Cambio_C1.mp3" autoplay="autoplay"></audio>
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
					<div class="panel-heading">Generador de clave secundaria</div>
					<div class="panel-body">
					<form method="post" action = "Descargar_Cl.php">
                        <div class="row">
							<div class="col-md-12">
								<center><input style="float:center;" value="Descargar clave" type="submit" id="Descargar" name="Descargar" class="btn btn-success btn-lg"></center>
							</div>
						</div>
                        <div class="row">
						    <div class="col-md-12">
                                <input type="hidden" id="clave1" name="clave1" value = "<?php echo $clave ?>" required="required" class="form-control">
                                <p>
                            </div>
                        </div>
                    </form>
					<form method="post" action = "../Modelo/Crear_Cl.php">
						<div class="row">
						    <div class="col-md-12">
                                <input type="hidden" id="DNI" name="DNI" value = "<?php echo $DNI1 ?>" required="required" class="form-control">
                                <p>
                            </div>
							<div class="col-md-12">
								<label for="clave">Nueva Clave</label> <br>
                                <input type="text" id="clave" name="clave" value = "<?php echo $clave ?>" required="required" readonly="readonly" class="form-control">
                                <p>
                            </div>
                        </div>
                        <p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Actualizar" type="submit" id="Actualizar" name="Actualizar" class="btn btn-success btn-lg">
							</div>
						</div>
                    </form>
                    </div>
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
	include 'F_Clave.php'; 

	echo
	"<audio id='Error' src='../Musica/Error.mp3' autoplay='autoplay'></audio>
	<div class='alert alert-danger'>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	<center><b>La contraseña es erronea... </b></center>
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
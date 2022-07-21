<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/carga.css"/> 
		<script src="/js/jquery2.js"></script>
		<script src="/js/bootstrap.min.js"></script>
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
				<a href="../index1.php"><img src = "../product_images/Ermis Logo (editado).png" height=42 width=36></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="../index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial">&nbsp;ERMIS</font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
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
					<div class="panel-heading">Generador de clave secundaria</div>
					<div class="panel-body">
					<center>El siguiente formulario genera una segunda "password" que te identifican como un usuario registrado de ERMIS. Con ello, podras hacer muchas acciones, entre ellas, modificar la contraseña actual.</center>
				    <p></p>
					<form method="post" action = "Generar_Cl.php">
						<div class="row">
						    <div class="col-md-12">
								<label for="DNI">Numero de identificacion</label> <br>
                                <input type="text" id="DNI" name="DNI" required="required" class="form-control">
                                <p>
                            </div>
							<div class="col-md-12">
								<label for="password">Password</label> <br>
                                <input type="password" id="password" name="password" required="required" class="form-control">
                                <p>
                            </div>
                            <div class="col-md-12">
								<label for="repassword">Repetir Password</label> <br>
                                <input type="password" id="repassword" name="repassword" required="required" class="form-control">
                                <p>
                            </div>
                            <!--<div class="col-md-12">
								<label for="repetir">Repetir contrase単a</label> <br>
                                <input type="text" id="apellido" name="apellido" value = "<?php //echo $Apellidos; ?>" readonly="readonly" class="form-control">
                                <inp <p>
                            <inp </div>
                        </div>-->
                        </div>
                        <p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Verificar" type="submit" id="Verificar" name="Verificar" class="btn btn-success btn-lg">
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
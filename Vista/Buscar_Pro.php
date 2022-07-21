<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/carga.css"/>
		<link rel="stylesheet" type = "text/css" href = "css/select2.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="../main.js"></script>
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/select2.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
		<script>
		  function ilumina (obj) 
		  {
		      obj.style.filter='alpha(opacity=100)';
		      obj.style.opacity=1;
          }
          function apaga (obj) 
          {
              obj.style.filter='alpha(opacity=50)';
              obj.style.opacity=.5;
          }
        </script>
	</head>
<body>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
<audio id = "profile" src = "../Musica/Profile.mp3" autoplay = "autoplay" loop = "loop"></audio>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="../profile.php"><img src = "../product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="../index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial">&nbsp;ERMIS</font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="Productos.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
				<li style="top:10px;left:920px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="../product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
				<script>
				
				function iniciar() 
				{ 
				    var boton=document.getElementById('Play'); 
				    boton.addEventListener('click', Play, false); 
                } 

				function Play() 
				{ 
				    var audio=document.getElementById('profile'); 
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
				    var audio=document.getElementById('profile'); 
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
					<div class="panel-heading"><b><font face = "Palatino" size="5"><center>Consulta de Producto</center></font></b></div>
					<div class="panel-body">
					<br>
						<div class="row">
							<div class="col-md-12">
								<center><a href="../Controlador/Consultar_Ex_Pro.php"><figure><img src="../product_images/Buscar_Pro.png" alt = "Consultar todos los productos" title = "Consultar todos los productos" height=390 width=290 style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></figure></a></center>
							</div>
						</div>
					<p><b></b></p><p><b></b></p>
				     <br>
					<div class align = "center">
	                <div class = "container">
					<div class="row">
						<div class="col-lg-5">
							 <center><a href="../Vista/Buscar1_Pro.php"><figure><img src="../product_images/BuscarID_Pro.png" alt = "Buscar por ID" title = "Buscar por ID" height=380 width=290 style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></figure></a></center>
						</div>
						<div class="col-lg-1">
							<center><a href="../Vista/Buscar2_Pro.php"><figure><img src="../product_images/BuscarNom_Pro.png" alt = "Buscar por Nombre" title = "Buscar por Nombre" height=380 width=290 style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></figure></a></center>
						</div>
					</div>
					</div>
					</div>
				    <br>
					</div>

					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	</font>
	
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
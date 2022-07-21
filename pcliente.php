<?php

session_start();

if(!isset($_SESSION["CLIENTE"]))
{
	header("location:index1.php");
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="Vista/css/bootstrap.min.css"/>
		<!--<link rel="stylesheet" href="Vista/css/dark-theme.css"/> -->
		<link rel="stylesheet" href="Vista/css/carga.css"/> 
		<script src="Vista/js/jquery2.js"></script>
		<script src="Vista/js/bootstrap.min.js"></script>
		<script src="main1.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
    <!-- <embed src = "pcliente.mp3" autostarty = "true" loop = "true" volume = "80" width = "0" height = "0"> -->
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <audio id = "Login" src = "Musica/Inicio_S.mp3" autoplay = "autoplay"></audio> <audio id = "pcliente" src = "music/PCliente.mp3" autoplay = "autoplay" loop = "loop"></audio> 
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> Alternar navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="pcliente.php"><img src = "product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<a href="pcliente.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial">&nbsp;ERMIS</font></a>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="pcliente.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="pcliente.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Producto </font></a></li>
				<li style="width:250px;left:140px;top:10px;"><input type="text" class="form-control" maxlength="30" id="search" onkeypress="return (event.charCode <= 48 && event.charCode == 32 || event.charCode >= 46 || event.charCode >= 44 || event.charCode >= 48)"></li>
				<!-- <li style="width:150px;left:140px;top:10px;"><input type="text" class="form-control" id="search"></li> -->
				<li style="top:10px;left:150px;"><button class="btn btn-primary" id="search_btn"><font size=3 face="Times New Roman, arial"> Buscar </font></button></li> 
				<!-- <li style="top:10px;left:150px;"><button class="btn btn-primary" id="search_btn"><font size=3 face="Times New Roman, arial"> Buscar </font></button></li> -->
				<li style="top:10px;left:-313px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
				<script>
				
				function iniciar() 
				{ 
				    var boton=document.getElementById('Play'); 
				    boton.addEventListener('click', Play, false); 
                } 

				function Play() 
				{ 
				    var audio=document.getElementById('pcliente'); 
				    audio.play(); 
				} 
				window.addEventListener('load', iniciar, false); 
				
				</script>
				<li style="top:10px;left:-310px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
				<script>
				
				function inicio() 
				{ 
				    var boton=document.getElementById('Pausa'); 
				    boton.addEventListener('click', Pausa, false); 
                } 

				function Pausa() 
				{ 
				    var audio=document.getElementById('pcliente'); 
				    audio.pause(); 
				} 
				window.addEventListener('load', inicio, false); 
				
				</script>
				<li style="top:10px;left:120px;"><form method="post" action = "Vista/Envio_Correo.php">
	            <button class="btn btn-primary" id="Correo" width="100px" height="100px"><font size=3 face="Times New Roman, arial"> Formulario de contacto </font></button>
				</form></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span><font size=3 face="Times New Roman, arial"> Carro </font><span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
								<font face="Cambria" size=3>
									<center><div class="col-md-3 col-xs-3">No. </div></center>
									<center><div class="col-md-3 col-xs-3">Imagen</div><center>
									<center><div class="col-md-3 col-xs-3">Nombre</div></center>
									<center><div class="col-md-3 col-xs-3">Precio en $</div><center>
							    </font>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<font face="Cambria" size=3>
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</font>
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><font size=3 face="Times New Roman, arial"> <?php echo $_SESSION["name"]; ?> </font></a>
					<ul class="dropdown-menu">
						<li><a href="cart_cli.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart"><font size=3 face="Times New Roman, arial"> Carro </font></a></li>
						<li class="divider"></li>
						<li><a href="Vista/f_clave.php" style="text-decoration:none; color:blue;"><font size=3 face="Times New Roman, arial"> Generar clave </font></a></li>
						<li class="divider"></li>
						<li><a href="Vista/Verificar_CE.php" style="text-decoration:none; color:blue;"><font size=3 face="Times New Roman, arial"> Cambiar la contraseña </font></a></li>
						<li class="divider"></li>
						<li><a href="Vista/ayuda.php" style="text-decoration:none; color:blue;"><font size=3 face="Times New Roman, arial"> Servicio al cliente </font></a></li>
						<li class="divider"></li>
						<li><a href="Vista/Coin.html" style="text-decoration:none; color:blue;"><font size=3 face="Times New Roman, arial"> Calculadora Silver Coin </font></a></li>
						<li class="divider"></li>
						<li><a href="Vista/v_informacion.php" style="text-decoration:none; color:blue;"><font size=3 face="Times New Roman, arial"> Temas de interés </font></a></li>
						<li class="divider"></li>
						<li><a href="Controlador/logout.php" style="text-decoration:none; color:blue;"><font size=3 face="Times New Roman, arial"> Cerrar sesión </font></a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<font face = "Georgia" size="3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading"><center><b><font face="Cambria" size=3> </b></center></div>
					<div class="panel-body">
					    <center>
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">
					</font>
					</center>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
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
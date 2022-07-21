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
				<li><a href="../index1.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Producto </font></a></li>
				<li style="top:10px;left:890px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="../product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
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
				<li style="top:10px;left:893px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="../product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
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
					<div class="panel-heading"><b><font face = "Palatino" size="5"><center>Gestión de Productos</center></font></b></div>
					<div class="panel-body">
					
					<form method="post" >
                    <div class="row">
							<div class="col-md-6">
                            <center><a href="Buscar_Pro.php"><figure><img src="../product_images/Consultar_P.PNG" alt = "Consultar producto" title = "Consultar producto" height=365 width=270 style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></figure></a></center><p>
                            </div>
                            <div class="col-md-6">
							<center><a href="Agregar_Pro.php"><img src="../product_images/Agregar_Pro.png" height=365 width=325 alt = "Agregar producto" title = "Agregar producto" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></a></center><p>
                            </div>
                            <div class="col-md-6">
                            <center><a href="Modificar_Pro.php"><img src="../product_images/Modificar_Pro.png" height=340 width=250 alt = "Actualizar producto" title = "Actualizar producto" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></a></center><p>
                            </div>
                            <div class="col-md-6">
							<center><a href="Eliminar_Pro.php"><img src="../product_images/Eliminar_Pro.png" height=340 width=250 alt = "Eliminar producto" title = "Eliminar producto" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></a></center><p>
                            </div>
					</div>
                    </form>
                    </div>
                </div>
            </div>
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
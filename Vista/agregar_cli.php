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
<audio id = "index" src = "../Musica/index.mp3" autoplay = "autoplay" loop = "loop"></audio>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="../profile.php"><img src = "../product_images/Ermis Logo (editado).png" height=46 width=40></a>
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
				    var audio=document.getElementById('index'); 
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
				    var audio=document.getElementById('index'); 
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
				<!--<li style="top:10px;left:645px;"><button style="background-color: #272f3f" type="button" class="btn btn-dark" id="inicio" onclick="cambiarModo()"><font size=3 color="white" face="Times New Roman, arial"> Oscuro / Claro </font></button></li>
				<script type="text/javascript">
				    function cambiarModo() 
				    { 
				        var cuerpoweb = document.body; 
				        cuerpoweb.classList.toggle("oscuro"); 
				        
				        var panelp = document.div;
				        panelp.classList.toggle("panel-body");
				        
				        var panelh = document.div;
				        panelh.classList.toggle("panel-heading");
				        
				        /*
				        var panelb = document.div;
				        panelb.classList.toggle("panel-body");
				        
				        var panel = document.div;
				        panel.classList.toggle("panel");
				        
				        var product = document.div;
				        product.classList.toggle("get_product");
				        */
				        /* let theme = document.getElementById("theme");
				        
				        if (theme.getAttribute("href") == "Vista/css/bootstrap.min.css") 
				        {
				            theme.href = "Vista/css/dark-theme.css";
				        } 
				        else 
				        {
				            theme.href = "Vista/css/bootstrap.min.css";
				        }
				        } */ 
				    }
				</script>-->
				
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
				<div class="panel panel-primary" id="panel_primary">
					<div class="panel-heading"><b>Formulario de registro</b></div>
					<div class="panel-body">
					
					<form method="post" action = "../Modelo/Insertar_Cli.php">
						<div class="row">
							<div class="col-md-6">
								<label for="DNI">Numero de documento</label>
                                <input type="number" id="DNI" name="DNI" maxlenght = 10 required = "required" min="0" oninput="this.value = Math.abs(this.value)" class="form-control">
							</div>
                            <div class="col-md-6">
                                <label for="documento">Tipo de documento</label> <br>
                                <select menu="documento" id="documento" name = "documento" required = "required" style="width : 400px" class="form-control">
                                    <option value="" selected></option>
                                    <option value="1">TI</option>
                                    <option value="2">CC</option>
                                    <option value="3">CE</option>
                                </select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="nombre">Nombres</label>
								<input type="text" id="nombre" name="nombre" maxlenght = 30 required = "required" class="form-control">
							</div>
						</div>
						<div class="row">
                        <div class="col-md-12">
								<label for="apellido">Apellidos</label>
								<input type="text" id="apellido" name="apellido" maxlenght = 30 required = "required" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="correo">Correo electronico</label>
								<input type="text" id="correo" name="correo" maxlenght = 320 required = "required" class = "form-control">
							</div>
                        </div>
                        <div class="row">
							<div class="col-md-12">
								<label for="contraseña">Contraseña</label>
								<input type="password" id="contraseña" name="contraseña" maxlenght = 100 required = "required" class = "form-control">
							</div>
                        </div>
                        <div class="row">
							<div class="col-md-12">
								<label for="repetir contraseña">Repetir Contraseña</label>
								<input type="password" id="recontraseña" name="recontraseña" maxlenght = 100 required = "required" class = "form-control">
							</div>
                        </div>
                        <div class="row">
							<div class="col-md-12">
								<label for="telefono">Numero telefonico</label>
								<input type="number" id=" telefono" name="telefono" maxlenght = 10 required = "required" min="0" oninput="this.value = Math.abs(this.value)" class="form-control">
							</div>
                        </div>
                        <div class="row">
							<div class="col-md-12">
								<label for="imagen">Direccion</label>
								<input type="direccion" id="direccion" name="direccion" maxlenght = 80 required = "required" class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Enviar" type="submit" id="Agregar" name="Agregar"  class="btn btn-success btn-lg">
							</div>
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
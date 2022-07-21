<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
				<li style="top:10px;left:900px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="../product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
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
				<li style="top:10px;left:903px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="../product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
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
					<div class="panel-heading"><b>Agregar un producto</b></div>
					<div class="panel-body">
					
					<form method="post" action = "../Modelo/Insertar_Pro.php" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<p></p><label for="nombre">Nombre</label> <p></p>
                                <input type="text" id="nombre" style="font-family: Cambria; font-size: 13pt;" name="nombre" placeholder = "Digite el nombre del Producto" onkeypress="return (event.charCode == 32 || event.charCode >= 46)" maxlenght = 255 required = "required" class="form-control">
							</div>
							<div class="col-md-6">
								<p></p><center><label for="cat">Categoria</label></center> <p></p>
                                <select menu="categoria" id="categoria" name = "categoria" maxlenght = 1 required = "required" style="width : 400px" class="form-control">
                                    <option selected disabled value="">Seleccionar Categoria</option>
                                    <option value="1">Tecnologia</option>
                                </select>
                                <p>
                            </div>
                            <div class="col-md-6">
                                <p></p> <center><label for="marca">Marca</label></center> <p></p>
                                <select menu="marca" id="marca" name = "marca" maxlenght = 1 required = "required" style="width : 400px" class="form-control">
                                    <option selected disabled value="">Seleccionar Marca</option>
                                    <option value="1">HP</option>
                                    <option value="2">Samsung</option>
                                    <option value="3">Apple</option>
                                    <option value="4">Sony</option>
                                    <option value="5">LG</option>
                                </select>
							</div>
							<style type="text/css">
                                   select 
                                   {   
                                      font-size: 16pt;   
                                      font-family : Cambria,arial,helvetica;
                                   }
							</style>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p></p> <label for="precio">Precio ($)</label> <p></p>
								<input type="text" id="precio" style="font-family: Cambria; font-size: 13pt;" name="precio" placeholder = "Digite el Precio del Producto" maxlength="7" required = "required" min="0" oninput="this.value = Math.abs(this.value)" class="form-control">
							</div>
						</div>
						<div class="row">
                        <div class="col-md-12">
								<br><label for="descripcion">Descripción</label> <p></p>
								<textarea name = "descripcion" style="font-family: Cambria; font-size: 13pt;" placeholder = "Digite la Descripción" rows = "15" cols = "116" required="required" class="form-control"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<br><label for="imagen">Imagen</label><p></p>
								<input style="float:center;" id="imagen" type="file" accept="image/png,image/jpeg,image/gif" name="imagen" value="Seleccionar Imagen" required = "required"> <p></p>
								<b> Nota 1: </b> Solo se admiten archivos con extensión .jpg, .png, .gif o .jpeg <br>
								<b> Nota 2: </b> La imagen en el registro de la Tienda tomar&#225; unas horas en actualizarse <p></p>
							</div>
						</div>
						<p>
						<div class="row">
							<div class="col-md-4">
								<p></p> <center><label for="stock">Stock</label></center> <p></p>
								<input type="text" style="font-family: Cambria; font-size: 13pt;" id="stock" name="stock" placeholder = "Digite un Stock valido" maxlength="4" required = "required" min="0" oninput="this.value = Math.abs(this.value)" class="form-control">
							</div>
							<div class="col-md-4">
								<p></p> <center><label for="iva">IVA (%)</label></center> <p></p>
								<input type="text" style="font-family: Cambria; font-size: 13pt;" id="iva" name="iva" placeholder = "Digite un valor sin porcentaje" min="0" oninput="this.value = Math.abs(this.value)" maxlength="2" required = "required" class="form-control">
							</div>
							<div class="col-md-4">
								<p></p> <center><label for="descuento">Descuento (%)</label></center> <p></p>
								<input type="text" style="font-family: Cambria; font-size: 13pt;" id="descuento" name="descuento" placeholder = "Digite un valor sin porcentaje" min="0" oninput="this.value = Math.abs(this.value)" maxlength="2" required = "required" class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
							    <font face = "Candara">
								<input style="float:right;" value="Agregar" type="submit" id="Agregar" name="Agregar" class="btn btn-success btn-lg">
								</font>
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
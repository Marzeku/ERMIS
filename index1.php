<?php

session_start();

if(isset($_SESSION["uid"]))
{
	header("location:profile.php");
}

if(isset($_SESSION["CLIENTE"]))
{
	header("location:pcliente.php");
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>ERMIS</title>
		<link rel="stylesheet" href="Vista/css/bootstrap.min.css"/>
		<!-- <link rel="stylesheet" href="Vista/css/dark-theme.css"/>-->
		<link rel="stylesheet" href="Vista/css/carga.css"/> 
		<script src="Vista/js/jquery2.js"></script>
		<script src="Vista/js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>
    <!-- <embed src = "M®≤sica de fondo P®¢gina web.mp4" autostarty = "true" loop = "true"></embed> -->
    <!-- <embed src = "index.mp3" autostarty = "true" loop = "true" volume = "80" width = "0" height = "0"> -->
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <audio id="Cerrar" src = "Musica/Cerrar_Sesion.mp3" autoplay = "autoplay"></audio> <audio id="index" src = "Musica/index.mp3" autoplay = "autoplay" loop = "loop"></audio>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">Navegaci√≥n</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index1.php"><img src = "product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<a href="index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial">&nbsp;ERMIS</font></a>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
				<li style="width:365px;left:130px;top:10px;"><input type="text" class="form-control" maxlength="30" id="search" onkeypress="return (event.charCode <= 48 && event.charCode == 32 || event.charCode >= 46 || event.charCode >= 44 || event.charCode >= 48)"></li>
				<li style="top:10px;left:150px;"><button class="btn btn-primary" id="search_btn"><font size=3 face="Times New Roman, arial"> Buscar </font></button></li>
				<!--<li style="top:10px;left:175px;"><button style="background-color: #272f3f" type="button" class="btn btn-dark" id="inicio" onclick="cambiarModo()"><font size=3 color="white" face="Times New Roman, arial"> Oscuro / Claro </font></button></li>-->
			    <!--	<script type="text/javascript">
				    function cambiarModo() 
				    { 
				        var cuerpoweb = document.body; 
				        cuerpoweb.classList.toggle("oscuro"); 
				        
				        var panelb = document.div;
				        panelb.classList.toggle("panel_panel-info");
				        
				        var panel = document.div;
				        panel.classList.toggle("panel-body");
				        
				        var product = document.div;
				        product.classList.toggle("get_product");
				        
				        var footer = document.div;
				        footer.classList.toggle("panel_footer");
				        
				        var panelh = document.div;
				        panelh.classList.toggle("panel-heading");
				        
				        var row = document.div;
				        row.classList.toggle("row");

				        /* let theme = document.getElementById("theme");
				        
				        if (theme.getAttribute("href") == "Vista/css/bootstrap.min.css") 
				        {
				            theme.href = "Vista/css/dark-theme.css";
				        } 
				        else 
				        {
				            theme.href = "Vista/css/bootstrap.min.css";
				        }
				        } -433 -430 */ 
				    }
				</script>  -->
				<li style="top:10px;left:-433px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
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
				<li style="top:10px;left:-430px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
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
				<li style="top:60px;left:375px;"><form method="post" action = "Vista/Ayuda.php">
	            <button class="btn btn-primary" id="Ayuda" width="100px" height="100px"><font size=3 face="Times New Roman, arial"> Acerca de </font></button>
				</form></li>
			</ul>

			<!--<form method="post" action = "Vista/ayuda.php"> 60 - 370 / 52 - 240
		    <div class="row">
			<div class="col-md-12">
				<center><input style="float:right;" value="Ayuda" type="submit" id="Ayuda" name="Ayuda" class="btn btn-success btn-lg"></center>
			</div>
		    </div>
	        <p><b></b></p><p><b></b></p>
	        </form>
	        
	        <form method="post" action = "Vista/ayuda.php">
	            <input style="float:center;" value="Ayuda" type="submit" id="Ayuda" name="Ayuda" class="btn btn-success btn-lg"> 54 545
	        </form>-->
	        
	       <ul class="nav navbar-nav navbar-right">
			    <!-- <li><a href = '19th Floor - Bobby Richards.mp3'>Musica</a></li>-->
			    <!-- <li><embed src = "19th Floor - Bobby Richards.mp3" controls = "controls" witdh = "30px" height = "60px"></embed></li> -->
			    <!--  <li><audio src = "19th Floor - Bobby Richards.mp3">Musica</audio></li> -->
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span><font size=3 face="Times New Roman, arial"> Carro </font><span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
								<font face="Cambria" size=3>
									<center><div class="col-md-3"> No. </div></center>
									<center><div class="col-md-3">Imagen</div></center>
									<center><div class="col-md-3">Nombre</div></center>
									<center><div class="col-md-3">Precio en $</div></center>
								</font>
									<b></b><b></b>
								</div>
							</div>
							<div class="panel-body"></div>
						        <div id="cart_product">
								<font face="Cambria" size=3>
								</font>
								</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"><font size=3 face="Times New Roman, arial"> Iniciar sesi√≥n </font></span></a>
					<ul class="dropdown-menu">
						<div style="width:300px; height:10px">
							<div class="panel panel-primary">
								<div class="panel-heading"><center><b><font face = "Times New Roman" size=3>INICIAR SESION</font></b></center></div>
								<div class="panel-heading">
								    <font face = "Times New Roman">
									<label for="email">Correo electronico</label>
									<input type="email" class="form-control" id="email" required/>
									<p></p>
									<label for="email">Password</label>
									<input type="password" class="form-control" id="password" required/>
									<p><br/></p>
									<a href="Vista/Verificar_CE.php" style="color:white; list-style:none;"> Olvide mi Password</a>
									<input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
									<script>
									
									    document.getElementById('login').addEventListener('click',()=>{
									        hablar('Inicio de sesi®Æn').value());
									    })
								    
								    function hablar('Inicio de sesi®Æn')
								    {
								        speechSysthesis.speak(new SpeechSysthesisUterrance('Inicio de sesi®Æn'));
								    }
									</script>
									</font>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				<li><a href="Vista/agregar_cli.php"><span class="glyphicon glyphicon-user"></span><font size=3 face="Times New Roman, arial"> Crear cuenta </font></a></li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<font face = "Georgia" size="3">
	<div class="container-fluid" id = "contenedor">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
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
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="panel">
					<div class="panel-heading"><center><b><font face="Times New Roman,arial" size=3> </b></center></div> 
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
	</div>
	</font>
	
	<table width="100%" cellspacing="1" cellpadding="3" border="0" bgcolor="#a09c9c">
	    <tr>
	        <td bgcolor="black"><center><img src="product_images/Captura.PNG" height="100px" width="110px"></center><font size=4 color = "white" face="verdana, arial, helvetica"><b><center><p></p>MAS INFORMACION<p></p></center></b></font><p></p></td>
	    </tr>
	    <tr>
	        <td bgcolor="#252850">
	 <table width="100%" cellspacing="1" cellpadding="1" border="0" align="center"> <!-- #22142b -->
	      <tr>
             <td valign=top><font face="verdana, arial, helvetica" color="white" size=4><center><b><p></p> Integrantes Proyecto Tienda ERMIS <p></p></b></center></font></td>
             <td><font face="verdana, arial, helvetica" size=1></font></td>
          </tr>
          <tr>
             <td valign=top><font face="verdana, arial, helvetica" color="white" size=3><center><p></p> Herrera Rodriguez Marcel Edilson <p></p></center><center><p></p> (marcel.herrerar@campusucc.edu.co - 319 5922700) <p></p></center></font></td>
             <td><font face="verdana, arial, helvetica" size=1></font></td>
          </tr>
          <tr>
             <td valign=top><font face="verdana, arial, helvetica" color="white" size=3><center><b><p></p> Universidad Cooperativa de Colombia <p></p></b></center></font></td>
             <td><font face="verdana, arial, helvetica" size=1></font></td>
          </tr>
          <tr> 
              <td valign=top><center><p></p><a href="https://www.ucc.edu.co/Paginas/inicio.aspx"><img src="product_images/UCC logo.png" height="130px" width="150px"></a><p></p><p></p></center></td>
              <td><font face="verdana, arial, helvetica" size=1> </font></td>
          </tr>
          <tr>
	         <td valign=top><font face="verdana, arial, helvetica" color="white" size=3><center><b><h4>Contactos a las redes sociales</h4></b></center></font></td>
	         <td><font face="verdana, arial, helvetica" size=1></font></td>
	         <p></p>
          </tr>
          <tr>
              <p></p>
              <td valign=top><center><a href="https://www.youtube.com/channel/UCYAGgTXgcLYlDQHK_TVWZ7g/videos"><img src="product_images/YouTube.png" height="90px" width="150px"></a></center></td>
              <td><font face="verdana, arial, helvetica" size=1></font></td>
              <p></p>
          </tr>
          <tr>
              <td valign=top><font face="verdana, arial, helvetica" color="white" size=3><center><p></p><b> Correo electronico: </b> marzeku@gmail.com <p></p></center></font></td>
              <td><font face="verdana, arial, helvetica" size=1></font></td>
          </tr>
          <tr>
              <td valign=top></td>
              <p></p>
          </tr>
      </table>
                </td>
          </tr>
      </table>
      
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

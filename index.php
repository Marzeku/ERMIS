<!DOCTYPE html>
<html lang = "es">
    <head>
    <title>ERMIS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="Vista/css/bootstrap.min.css"/>
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
    <body background="product_images/Fondo.jpg">
         <audio id="Inicio" src = "Musica/Formulario_Inicial.mp3" autoplay = "autoplay"></audio><audio id="index" src = "Musica/index.mp3" autoplay = "autoplay" loop = "loop"></audio>
        <div class="navbar navbar-inverse navbar-fixed-top">
        <ul class="nav navbar-nav">
            <li style="top:5px;left:1203px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
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
				<li style="top:5px;left:1200px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
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
        <ul class="nav navbar-nav">
        <li style="top:70px;left:50px;">
        <div style="width:400px; height:10px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div style = "background-color:#18171c">
		<div class="panel-heading"><b><font face = "Times New Roman" size=5 color="white"><center>
		    <a href="https://www.ucc.edu.co/Paginas/inicio.aspx"><img src="product_images/UCC logo.png" height="70px" width="80px"></a>&nbsp;&nbsp;
		    <a href="index.php"><img src = "product_images/E ERMIS.png" height=70 width="70"></a>
		    <p></p>TIENDA WEB ERMIS </b>
		    </font></center></div>

		<div class="panel-heading">
        <div class="row">
        <div class="col-md-12">
        <form method="post" action = "Controlador/login.php">
				<label for="email"><font face = "Times New Roman" size=3 color="white"><center>&nbsp;Correo electrónico</center></font></label>
                <center><font face="Times New Roman"><input type="text" id="email" name="email" maxlenght = 30 class="form-control"></font></center>
		</div>
		</div>
		<p></p><p></p>
		<div class="row">
			<div class="col-md-12">
				<label for="password"><font face = "Times New Roman" size=3 color="white"><center>&nbsp;Contrase&ntilde;a</center></font></label>
				<center><font face="Times New Roman"><input type="password" id="password" name="password" maxlenght = 30 class="form-control"></font></center>
			</div>
		</div>
		<p><p><p></p></p></p>
		<div class="row">
			<div class="col-md-11">
				<a href="Vista/Verificar_CE.php"><font face = "Times New Roman" size=3 color="white"><center><b>Olvide mi Contrase&ntilde;a</b></center></font></a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-11">
			<center>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<p></p><font face = "Times New Roman" size=4><input type="submit" id="login" value="Iniciar Sesion" name = "login" class="btn btn-primary btn-lg"></font>
		</form>
		<br><br>
		<font face = "Times New Roman" size=4><a href = "Vista/agregar_cli.php"><input type="submit" id="Registrar" value="Crear Cuenta" name = "Registrar" class = "btn btn-success btn-lg"></a></font>
			</center>
			</div>
		</div>
		<br>
		</div>
		</div></div></div>
		</font>
		</li>
        <li style="top:70px;left:455px;"><form method="post" action = "index1.php">
	       <button class="btn btn-primary" id="Ayuda" width="100px" height="100px"><font size=3 face="Times New Roman, arial"><b> Ver Productos </b></font></button>
		</form> </li>
		<li style="top:70px;left:465px;"><form method="post" action = "Vista/Ayuda.php">
	       <button class="btn btn-secondary" id="Ayuda" width="100px" height="100px"><font size=3 face="Times New Roman, arial"><b> Acerca de ERMIS </b></font></button>
		</form> </li>
		<li style="top:100px;left:30px;">
	       <div class="separator" style="clear: both; text-align: center;"><br /></div><div class="separator" style="clear: both; text-align: center;"><iframe allowfullscreen="" class="BLOG_video_class" height="390" src="https://www.youtube.com/embed/hBq2BZXgvsY" width="580" youtube-src-id="hBq2BZXgvsY"></iframe></div>
		</li>
		</ul>
        <div class="row">
		</div>
		</div> 
        
						<!--<div class="panel panel-primary">
								<div class="panel-heading"><center><b><font face = "Times New Roman" size=3>TIENDA WEB ERMIS</font></b></center></div>
								<div class="panel-heading">
								    <div class="col-md-4">
								    <font face = "Times New Roman">
									<label for="email">Correo electronico</label>
									</div>
									<input type="email" class="form-control" id="email" required/>
									<p></p>
									<label for="email">Password</label>
									<input type="password" class="form-control" id="password" required/>
									<p><br/></p>
									<a href="Vista/Verificar_CE.php" style="color:white; list-style:none;"> Olvide mi Password</a>
									<input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
									</font>
								</div>
								<div class="panel-footer" id="e_msg"></div>
						</div>-->
    
	<script type="text/javascript"> let headID = document.getElementsByTagName("head")[0]; let newCss = document.createElement('link'); newCss.rel = 'stylesheet'; newCss.type = 'text/css'; newCss.href = "https://botmake.io/embed/bot278678.css"; let newScript = document.createElement('script'); newScript.src = "https://botmake.io/embed/bot278678.js"; newScript.type = 'text/javascript'; headID.appendChild(newScript); headID.appendChild(newCss); </script>
	<br><br><br><br><br><br><br>
		<table width="100%" cellspacing="1" cellpadding="3" border="0" bgcolor="#a09c9c">
	    <tr>
	        <td bgcolor="black"><center><img src="product_images/Captura.PNG" height="100px" width="110px"></center><font size=4 color = "white" face="verdana, arial, helvetica"><b><center><p></p>M&Aacute;S INFORMACI&Oacute;N<p></p></center></b></font><p></p></td>
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
    </body>
</html>
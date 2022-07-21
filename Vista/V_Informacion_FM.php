<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="css/coin.css?v=<?php echo time(); ?>"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/carga.css"/>
		<link rel="stylesheet" href="css/dark-theme.css"/>
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
<body style="background-color:#b4b6b9" background="../public_images/FondoC.jpg">
<div id="contenedor_carga">
    <div id="carga"></div>
</div>
<audio id="pcliente" src = "../Musica/PCliente.mp3" autoplay = "autoplay" loop = "loop"></audio>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="../profile.php"><img src = "../product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<ul class="nav navbar-nav">
			    <li><a href="../index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial">&nbsp;ERMIS</font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="V_Informacion.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
				<li style="top:5px;left:860px;"><form method="post" action = "Ayuda.php">
	            <button class="btn btn-primary" id="Ayuda" width="100px" height="100px"><font size=3 face="Times New Roman, arial"> Servicio al cliente </font></button>
				</form></li>
				<li style="top:5px;left:550px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="../product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
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
				<li style="top:5px;left:553px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="../product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
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
				<!-- <li style="top:5px;left:450px;"><button style="background-color: #272f3f" type="button" class="btn btn-dark" onclick="cambiarModo()"><font size=3 color="white" face="Times New Roman, arial"><b> Oscuro / Claro </b></font></button></li>
				<script type="text/javascript">
				    function cambiarModo() 
				    { 
				        var cuerpoweb = document.body; 
				        cuerpoweb.classList.toggle("oscuro");

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
				</script> -->
			</ul>
		</div>
</div>
<p><br/></p>
<p><br/></p>
<h1><font face="Times New Roman, arial"> &nbsp;&nbsp;&nbsp;<b><center>Temas de interés</b></center></font></h1>
<p><br/></p>
     <div style="text-align:center;">
	 <table width="90%" cellspacing="3" cellpadding="3" align="center" style="margin: 0 auto;"> <!-- #22142b -->
          <tr>
            <td bgcolor = "#252850"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center><b><p></p><p></p></b></center></font> </td>
            <td bgcolor = "#252850"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center><b><p></p><p></p></b></center></font> </td>
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ModSecurity</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Es un firewall de aplicaciones Web embebible bajo licencia GNU  que se ejecuta como módulo del servidor web Apache, provee protección contra diversos ataques hacia aplicaciones Web y permite monitorizar tráfico HTTP,
            <p></p><b>&nbsp;&nbsp;&nbsp;Permite realizar análisis en tiempo real sin necesidad de hacer cambios a la infraestructura existente. &nbsp;&nbsp;&nbsp;ModSecurity filtra ataques por XSS, SQL Injection, comportamientos anómalos en protocolos, robots, troyanos.
            <font face="Times New Roman, arial" size="4" color = "white"><center><b><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5"><center><b><iframe allowfullscreen="" class="BLOG_video_class" height="333" src="https://www.youtube.com/embed/y6ARksR5RCk" width="483" youtube-src-id="y6ARksR5RCk"></iframe></div><div class="separator" style="clear: both; text-align: center;"><div style="text-align: justify;"><br /></div><div style="text-align: justify;"><span color="rgba(0, 0, 0, 0.87)" style="text-align: start; white-space: pre-wrap;"><span style="font-family: georgia;"></b></center></font>
            <p></p>&nbsp;&nbsp;&nbsp;Además ModSecurity cuenta con una consola de administración que permite recopilar registros de &nbsp;&nbsp;&nbsp;monitorización y alertas en tiempo real así como de opciones automatizadas de mantenimiento, entre otras características.
            <p></p>&nbsp;&nbsp;&nbsp;Si la comprobación es correcta, la petición HTTP se transfiere al sitio web para recuperar el contenido. De lo contrario, se llevan a cabo las acciones predefinidas. ModSecurity se soporta tanto en Plesk para Linux como en Plesk para Windows. Este actúa como un módulo de servidor web.
            <p></p>&nbsp;&nbsp;&nbsp;En Linux, ModSecurity es un módulo para Apache. Como consecuencia, este sólo verifica peticiones HTTP que lleguen a Apache. Apache puede complementarse con otro servidor web - nginx. Si activa la opción Procesar PHP mediante nginx del servidor web nginx para el contenido dinámico de su sitio web (en la configuración de Apache y nginx para un sitio web), el firewall para aplicaciones web no podrá verificar las peticiones HTTP, ya que estas nunca llegarán a Apache.
            <p></p>&nbsp;&nbsp;&nbsp;En el caso del contenido estático, si se selecciona la opción Servir archivos estáticos directamente mediante nginx, las peticiones HTTP no llegarán a Apache, por lo que estas no serán verificadas por ModSecurity.
            <p></p></b></font></font><p></p></b></center></font></td> 
          </tr>
      </table>
      </div>
      <br>
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
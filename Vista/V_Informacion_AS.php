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
				<li style="top:5px;left:860px;"><form method="post" action = "ayuda.php">
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
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>AntiSpyware</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Es una aplicación diseñada para detectar los Spyware y ayudar a tratar de eliminarlos. Funcionan de forma similar a los antivirus, y de hecho muchas aplicaciones de seguridad incluyen un AntiSpyware integrado entre sus principales funciones. Aun así, también existen aplicaciones independientes para esta tarea.
            <p></p><b>&nbsp;&nbsp;&nbsp;Muchas empresas de software ofrecen AntiSpyware. Estos programas ofrecen detección de malware en tiempo real, por lista actualizable, o utilizando una combinación de ambos sistemas. Algunos de estos programas son independientes, mientras que los mejores vienen junto con un programa antivirus.
            <font face="Times New Roman, arial" size="4" color = "white"><center><b><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5"><center><b><iframe allowfullscreen="" class="BLOG_video_class" height="333" src="https://www.youtube.com/embed/3nUipBZDDBk" width="483" youtube-src-id="3nUipBZDDBk"></iframe></div><div class="separator" style="clear: both; text-align: center;"><br /></div><div class="separator" style="clear: both; text-align: justify;"><span style="font-family: georgia;"></b></center></font>
            <p></p>&nbsp;&nbsp;&nbsp;Principalmente suelen funcionar de dos formas. La primera es capturando el Spyware en tiempo real. Esto quiere &nbsp;&nbsp;&nbsp;decir, que algunas de estas aplicaciones analizan las tareas del ordenador y los datos que se descargan de &nbsp;&nbsp;&nbsp;Internet, y cuando detectan que descargas una aplicación que parece ser servir para espiar, intenta bloquearla o pregunta si se quiere hacer una accion restrictiva para evitar que se instale en tu ordenador.
            <p></p>&nbsp;&nbsp;&nbsp;Si la comprobación es correcta, la petición HTTP se transfiere al sitio web para recuperar el contenido. De lo contrario, se llevan a cabo las acciones predefinidas. ModSecurity se soporta tanto en Plesk para Linux como en Plesk para Windows. Este actúa como un módulo de servidor web.
            <p></p>&nbsp;&nbsp;&nbsp;La otra manera en la que puede funcionar es utilizando listas actualizadas de los principales Spyware conocidos, con la que analizan el ordenador para comprobar si se tiene alguna de estas amenazas instaladas y ayudar a eliminarlas. Para hacerlo suele analizar las aplicaciones, los archivos de Windows y su registro. Cuando encuentra una de estas amenazas, la aísla y permite borrarla.
            <p></p>&nbsp;&nbsp;&nbsp;Hay que agregar que estos programas se llaman Spyware como alusión a su tendencia a obtener y enviar información personal de un individuo a un tercero sin su consentimiento. Los antispyware están disponibles en varios formatos, y en muchos precios diferentes.
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
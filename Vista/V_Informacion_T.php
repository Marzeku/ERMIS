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
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Tendencias</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>Este es un estudio de las estadisticas de los incidentes informáticos tomando como base datos del CCP (Centro Cibernético Policial) orientado hacia el sector ciudadado de octubre del 2020.
            <p></p>Se emplearon varias distribuciones de probabilidades y estadisticas para conocer la probabilidad de ocurrencia de varios delitos informáticos y su estimación en futuros meses.
            <font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5"><center><b><div class="separator" style="clear: both; text-align: center;"><iframe allowfullscreen="" class="BLOG_video_class" height="333" src="https://www.youtube.com/embed/wJ2L5GdEv1g" width="483" youtube-src-id="wJ2L5GdEv1g"></iframe></div><p style="text-align: justify;"></b></center></font> 
            <p></p>&nbsp;&nbsp;&nbsp;Se hace uso de Python, Excel y RStudio. Por un lado, Python es un lenguaje de programación de código abierto, orientado a objetos, muy simple y fácil de entender. Una de las ventajas principales de aprender Python es la posibilidad de crear un código con gran legibilidad, que ahorra tiempo y recursos, lo que facilita su comprensión e implementación.
            <p></p>&nbsp;&nbsp;&nbsp;Por otro lado, RStudio es un entorno de desarrollo integrado para el lenguaje de programación R, dedicado a la computación estadística y gráficos. 
            <p></p>&nbsp;&nbsp;&nbsp;La finalidad de este estudio es conocer cuales son las modalidades de ataque que llegan a afectar más a los ciudadanos y cuál será el impacto que tendrá en estos tiempos de pandemia por COVID-19, estando entre ellos: La suplantación de identidad, Phishing y la implantación de Malware.
            <p></p><a href="https://campusuccedu-my.sharepoint.com/:b:/g/personal/marcel_herrerar_campusucc_edu_co/Ee-gkKIuoSFJh-tlywTWry8BjHzF9s2lt43Q3g8Ynzw-Pg?e=kBkBS1"><font color="white"><button class="btn btn-primary" id="search_btn"> Más información </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
      </table>
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
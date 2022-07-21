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
<body style="background-color:#b4b6b9" background="../public_images/FondoC.jpg">
<div id="contenedor_carga">
    <div id="carga"></div>
</div>
<audio id="pcliente" src = "../Musica/PCliente.mp3" autoplay = "autoplay" loop = "loop"></audio> <audio id="Ayuda" src = "../Musica/Añadir_P.mp3" autoplay = "autoplay"></audio>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="../profile.php"><img src = "../product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<ul class="nav navbar-nav">
			    <li><a href="../index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial">&nbsp;ERMIS</font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
				<!--<li style="top:5px;left:640px;"><a href="https://quizizz.com/join/quiz/5f5c48b28aee53001b2b3150/start?studentShare=true"><button class="btn btn-primary" id="search_btn"><font face = "Times New Roman, arial" color="white" size=3> Ponme a prueba </font></button></a></li>-->
				<li style="top:5px;left:700px;"><form action = "https://quizizz.com/join/quiz/605274fc263730001b02559b/start?studentShare=true">
	            <!--<button class="btn btn-primary" id="Test" width="100px" height="100px"><font size=3 face="Times New Roman, arial"> Ponme a prueba </font></button>-->
				</form></li>
				<li style="top:5px;left:840px;"><form method="post" action = "Ayuda.php">
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
				<!-- <li style="top:5px;left:430px;"><button style="background-color: #272f3f" type="button" class="btn btn-dark" onclick="cambiarModo()"><font size=3 color="white" face="Times New Roman, arial"><b> Oscuro / Claro </b></font></button></li>
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
<h1><font face="Times New Roman, arial"> &nbsp;&nbsp;&nbsp;<b><center>Temas de Interés </b></center></font></h1>
<p><br/></p>
     <div style="text-align:center;">
	 <table width="90%" cellspacing="5" cellpadding="5" align="center" style="margin: 0 auto;"> <!-- #22142b -->
          <tr>
            <td bgcolor = "#252850"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center><b><p></p><p></p></b></center></font> </td>
            <td bgcolor = "#252850"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center><b><p></p><p></p></b></center></font> </td>
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Tendencias</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>Este es un estudio de las estadisticas de los incidentes informáticos tomando como base datos del CCP (Centro Cibernético Policial) orientado hacia el sector ciudadado de octubre del 2020.</b></center></font>
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Se emplearon varias distribuciones de probabilidades y estadisticas para conocer la probabilidad de ocurrencia de varios delitos informáticos y su estimación en futuros meses.  
            <p></p><a href="V_Informacion_T.php"><font color="white"><button class="btn btn-primary" id="search_btn"> Saber más sobre este estudio </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b>BackDoor</b></center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>En esta entrada se describe la forma en que este tipo de programas pueden afectar a los usuarios, afectando a los equipos que cuentan con el sistema operativo Windows 10.</b></center></font>
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Una puerta trasera es una secuencia especial o un término trasero dentro del código de programación, mediante la cual se pueden evitar los sistemas de seguridad del algoritmo para acceder al sistema. 
            <p></p><a href="V_Informacion_B.php"><font color="white"><button class="btn btn-primary" id="search_btn"> Saber más sobre los BackDoor </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5" color = "white"><center><b><b>Inyecciones SQL</b></b></center></font> </td>
            <td bgcolor = "#1e1e24">&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Aqui se muestra el trabajo de las pruebas de seguridad realizadas sobre la pagina, para concer las fallas de seguridad y en base a ello, proponer un plan de mejora. </b></center></font>
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Es un tipo de ciberataque encubierto en el cual un hacker inserta código propio en un sitio web con el fin de &nbsp;&nbsp;&nbsp;quebrantar las medidas de seguridad y acceder a datos protegidos. Una vez dentro, puede controlar la base de datos del sitio web y secuestrar la información de los usuarios.
            <p></p><a href="V_Informacion_In.php"><font color="white"><button class="btn btn-primary" id="search_btn"> Saber más sobre las Inyecciones SQL </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5" color = "white"><center><b>KeyLogger</b></center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>Aqui se describe la forma en que se pueden usar estos programas por parte de ciberdelincuentes para robar las credenciales de acceso a la cuenta de alguna pagina web. </b></center></font>
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b>Los keyloggers realizan un seguimiento y registran cada tecla que se pulsa en una computadora, a menudo sin el permiso ni el conocimiento del usuario. 
            <p></p><a href="V_Informacion_K.php"><font color="white"><button class="btn btn-primary" id="search_btn"> Saber más sobre los KeyLogger </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5" color = "white"><center><b>Analisis de riesgos</b></center></font> </td>
            <td bgcolor = "#1e1e24"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>Es el estudio de las causas de las posibles amenazas y probables eventos no deseados y los danios y consecuencias que estas puedan producir.
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b>De esta forma, en este enlace es que se muestra la forma en que se aplica el analisis de riesgos como plan de mejora hacia las empresas, considerando ciertos ataques informaticos como los BackDoor. 
            <p></p><a href="V_Informacion_AR.php"><font color="white"><button class="btn btn-primary" id="search_btn"> Saber más sobre Análisis de riesgos </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5" color = "white"><center><b>Firewall web <p></p>ModSecurity</b></center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>Esta es una continuacion de la entrada de Inyecciones SQL, en donde, se muestra el trabajo realizado que se llevo a cabo para proteger la pagina web y la base de datos de este tipo de ataque.
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b> Es un firewall de aplicaciones Web embebible que ejecuta como modulo del servidor web Apache, provee proteccion contra diversos ataques hacia aplicaciones Web y permite monitorizar tráfico HTTP. 
            <p></p><a href="V_Informacion_FM.php"><font color="white"><button class="btn btn-primary" id="search_btn"> Saber más sobre ModSecurity </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5" color = "white"><center><b>AntiSpyware</b></center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Esta es una continuacion de la entrada de KeyLogger, demostrando la forma en que un AntiSpyware incluido en AVG Antivirus puede llegar a detener la amenaza de este malware, orientado hacia el robo de las credenciales de la página. 
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Es una aplicación diseñada para detectar los Spyware y ayudar a tratar de eliminarlos. Funcionan de forma &nbsp;&nbsp;&nbsp;similar a los antivirus, y de hecho muchas aplicaciones de seguridad incluyen un AntiSpyware integrado entre sus principales funciones. Aun así, también existen aplicaciones independientes para esta tarea.
            <p></p><a href="V_Informacion_AS.php"><font color="white"><button class="btn btn-primary" id="search_btn"> Saber más sobre AntiSpyware </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="5" color = "white"><center><b>Proyectos de Ingeniería</b></center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Aquí se define el tema de Proyectos de Ingeniería, en donde, se tocan temas relacionados a la aplicacion de la &nbsp;&nbsp;&nbsp;ingeniería en los proyectos, para conseguir los objetivos planteados, considerando paradigmas como: La modularidad, la prtabilidad y la extensibilidad.
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;Un proyecto se define como la planeación, diseño, organización,  ejecución y control de las actividades necesarias &nbsp;&nbsp;&nbsp;para el logro de objetivos específicos, contando con un presupuesto establecido  y un tiempo de inversión determinado. 
            <p></p><font face="Times New Roman, arial" size="4" color = "white"><center><b>&nbsp;&nbsp;&nbsp;La ingeniería es la aplicación de las ciencias matemáticas, conocimientos científicos y tecnológicos para la innovación, desarrollo e invención y utilización de la técnica industrial.   
            <p></p><a href="V_Informacion_PI.php"><font color="white"><button class="btn btn-primary" id="search_btn"> Saber más sobre los Proyectos de Ingeniería </b></font></font></button></a><p></p></b></center></font></td>    
          </tr>
          <tr>
            <td bgcolor = "black"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center><b><p></p><p></p></b></center></font> </td>
            <td bgcolor = "black"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center><b><p></p><p></p></b></center></font> </td>
          </tr>
      </table>
      <br><br>
      <h2><font face="Times New Roman, arial"><b>Enlaces para más información</b></font></h2>
      <br>
      <table width="90%" cellspacing="5" cellpadding="5" align="center" style="margin: 0 auto;"> <!-- #22142b -->
          <tr>
            <td bgcolor = "#252850"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center></center></font> </td>
            <td bgcolor = "#252850"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center></center></font> </td>
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/Campus Virtual UCC.png" height=80 weight=80></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://campusvirtual.ucc.edu.co/d2l/loginh/"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a Campus Virtual UCC" title = "Acceder a Campus Virtual UCC" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/Oracle PeopleSoft.png" height=80 weight=80></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://opscs.ucc.edu.co/psp/UCNAV/EMPLOYEE/SA/?cmd=logout"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a Timonel" title = "Acceder a Timonel" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/Cisco.png" height=80 weight=80></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://www.netacad.com/es"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a Netacad CISCO" title = "Acceder a Netacad CISCO" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/ISO.png" height=100 weight=100></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://www.iso.org/home.html"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a la página de ISO" title = "Acceder a la página de ISO" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/OAS.png" height=180 weight=180></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://oas.org/en/iten/"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a OAS: ITEN" title = "Acceder a OAS: ITEN" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/CCP.png" height=100 weight=100></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://caivirtual.policia.gov.co/ciberincidentes/tiempo-real"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Conocer el tiempo real de ciberincientes en Colombia" title = "Conocer el tiempo real de ciberincientes en Colombia" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/Kaggle.png" height=80 weight=80></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://www.kaggle.com/datasets"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a Kaggle" title = "Acceder a Kaggle" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/Red Seguridad.png" height=80 weight=80></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://www.redseguridad.com/"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a la revista Red Seguridad" title = "Acceder a la revista Red Seguridad" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/SIC.png" height=80 weight=80></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://revistasic.es/revista-sic-numero-144/"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a la revista SIC" title = "Acceder a la revista SIC" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/Cibersecurity_News.png" height=80 weight=80></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://cybersecuritynews.es/"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a la revista Cibersecurity News" title = "Acceder a la revista Cibersecurity News" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/FORTINET.png" height=40 weight=40></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://www.fortinet.com/lat"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a FORTINET" title = "Acceder a FORTINET" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/Escuela Tecnologica.png" height=120 weight=120></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://etitc.edu.co/es/"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a Escuela Tecnológica Instituto Técnico Central" title = "Acceder a Escuela Tecnológica Instituto Técnico Central" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/FRISOL.png" height=100 weight=100></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="https://flisolbogota.org/2021/"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a FRISOL" title = "Acceder a FRISOL" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center><b><center><b><br><img src="../product_images/Sofia-Plus.png" height=65 weight=65></center></b></center></font><br> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><b><img src="../product_images/Boton de acceso.png" height=80 weight=80 alt = "Acceder a Sofia Plus" title = "Acceder a Sofia Plus" style="filter:alpha(opacity=50); opacity:.5" onmouseover="ilumina(this)" onmouseout="apaga(this)"></b></a></td>    
          </tr>
          <tr>
            <td bgcolor = "black"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center><b><p></p><p></p></b></center></font> </td>
            <td bgcolor = "black"> &nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="3"><center><b><p></p><p></p></b></center></font> </td>
          </tr>
      </table>
      <br><br>
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

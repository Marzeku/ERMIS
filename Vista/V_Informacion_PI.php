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
            <td bgcolor = "#121212"> <font face="Times New Roman, arial" size="5" color = "white"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Proyectos</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></font> </td>
            <td bgcolor = "#1e1e24"><p></p>&nbsp;&nbsp;&nbsp;<font face="Times New Roman, arial" size="4" color = "white"><center><b>Se designa a toda actividad cíclica y única que se emplea para la toma de decisiones, en donde, el conocimiento de la ingeniería, junto con la habilidad matemática y la practica, se consideran para la transformación de los recursos naturales en mecanismos y/o sistemas que resuelven un problema en especifico. 
            <br><br>
            <p></p><a href="https://campusuccedu-my.sharepoint.com/:p:/g/personal/marcel_herrerar_campusucc_edu_co/EZ6V6Fx9K-xKt1TK1WlOV3QBeS-kCGLv0mrx77S_16Jp4w?e=7l3zK0"><font color="white"><button class="btn btn-primary" id="search_btn"> Ver Presentación </b></font></font></button></a><p></p></b></center></font><br>
            <font face="Times New Roman, arial" size="4" color = "white"><b><p></p>&nbsp;&nbsp;&nbsp;La modularidad se define como aquella característica en que dispone todo sistema y el cual, le permite poder ser estudiado o entendido como la unión de varios elementos que interactúan entre si, para alcanzar un objetivo en común, siendo que cada parte o modulo lleva a cabo una tarea necesaria.  
            <p></p>&nbsp;&nbsp;&nbsp;La portabilidad es una característica ideal es que los programas funcionen independientemente del soporte técnico y que se consideren multiplataforma. 
            <p></p>&nbsp;&nbsp;&nbsp;La extensibilidad se le designa a la capacidad del software para agregar funcionalidades sin afectar de alguna manera el sistema. </b></font>
            <br><br>
            <p></p><a href="https://quizizz.com/join/quiz/605274fc263730001b02559b/start?studentShare=true"><font face = "Times New Roman, arial" size = "4" color="white"><button class="btn btn-primary" id="search_btn"><b> Ponme a prueba </b></font></font></button></a><p></p></b></center></font></td>    
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
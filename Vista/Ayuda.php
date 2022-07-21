<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="css/coin.css?v=<?php echo time(); ?>"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/dark-theme.css"/>
		<!-- <link rel="stylesheet" href="css/carga.css"/> -->
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
<audio id="index" src = "../Musica/index.mp3" autoplay = "autoplay" loop = "loop"></audio> <audio id="Ayuda" src = "../Musica/Añadir_P.mp3" autoplay = "autoplay"></audio>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			<a href="../Profile.php"><img src = "../product_images/Ermis Logo (editado).png" height=46 width=40></a>
			</div>
			<ul class="nav navbar-nav">
			    <li><a href="../index1.php" class="navbar-brand"> <font size=5 face="Times New Roman, arial">&nbsp;ERMIS</font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="../index1.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
				<li style="top:10px;left:900px;"><button style="background-color: #242424" class="btn btn-dark" id="Play"><img src="../product_images/Boton Play.PNG" height="26px" weight="26px"></img></button></li>
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
				<li style="top:10px;left:903px;"><button style="background-color: #242424" class="btn btn-dark" id="Pausa"><img src="../product_images/Boton Pausa.PNG" height="26px" weight="26px"></img></button></li>
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
				<!-- <li style="top:10px;left:645px;"><button style="background-color: #272f3f" type="button" class="btn btn-dark" onclick="cambiarModo()"><font size=3 color="white" face="Times New Roman, arial"> Oscuro / Claro </font></button></li>
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
<p><br/></p>

<?php 

$texto = "La pagina web de ERMIS se trata de un carrito de compras o Tienda Online que se encuentra actualmente en un desarrollo y mantenimiento continuo. No obstante, a diferencia de otras paginas similares, tales como: Mercado Libre o Amazon, esta se basa mayormente en la comercializacion de productos de Tecnologia que podrian ayudar a las ventas de una pequenia empresa, pero se tiene que considerar el hecho de que uno de los puntos mas importantes es la implementacion de medidas de seguridad por medio de una auditoria con la metodologia OWASP.";
$division = strpos($texto," ",strlen($texto)/2);
$col1 = substr($texto, 0, $division);
$col2 = substr($texto, $division);

?>

<center>
	<table width="1340" cellspacing="1" cellpadding="3" border="0" bgcolor="#a09c9c">
	    <tr>
	        <td bgcolor="black"><center><img src="../product_images/Captura.PNG" height="100px" width="110px"></center><font size=5 color = "white" face="verdana, arial, helvetica"><b><center><p></p>Proyecto Seguridad Informatica<p></p></center></b></font><p></p></td>
	    </tr>
	    <tr>
	        <td bgcolor="#252850">
	            
	 <table width="95%" cellspacing="1" cellpadding="1" border="0" align="center">
	     <tr>
	         <td valign=top><font face="verdana, arial, helvetica" color="white" size=4><center><b><?php echo $texto ?><p></p><p></p><p></p><p></p></font></b></center></td>
	         <td><font face="verdana, arial, helvetica" size=1></font></td>
         </tr>
         <tr>
              <p></p>
              <td valign=top><center><div class="separator" style="clear: both; text-align: center;"><br /></div><div class="separator" style="clear: both; text-align: center;"><iframe allowfullscreen="" class="BLOG_video_class" height="390" src="https://www.youtube.com/embed/hBq2BZXgvsY" width="481" youtube-src-id="hBq2BZXgvsY"></iframe></div></center></td>
         </tr>
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
              <td valign=top><center><p></p><a href="https://www.ucc.edu.co/Paginas/inicio.aspx"><img src="../product_images/UCC logo.png" height="130px" width="150px"></a><p></p><p></p></center></td>
              <td><font face="verdana, arial, helvetica" size=1> </font></td>
          </tr>
          <tr>
	         <td valign=top><font face="verdana, arial, helvetica" color="white" size=3><center><b><h4>Contactos a las redes sociales</h4></b></center></font></td>
	         <td><font face="verdana, arial, helvetica" size=1></font></td>
	         <p></p>
          </tr>
          <tr>
              <p></p>
              <td valign=top><center><a href="https://www.youtube.com/channel/UCYAGgTXgcLYlDQHK_TVWZ7g/videos"><img src="../product_images/YouTube.png" height="90px" width="150px"></a></center></td>
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
          <br></br>
      </table>
          </td>
          </tr>
      </table>
      
</center>

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

<script type="text/javascript"> let headID = document.getElementsByTagName("head")[0]; let newCss = document.createElement('link'); newCss.rel = 'stylesheet'; newCss.type = 'text/css'; newCss.href = "https://botmake.io/embed/bot278678.css"; let newScript = document.createElement('script'); newScript.src = "https://botmake.io/embed/bot278678.js"; newScript.type = 'text/javascript'; headID.appendChild(newScript); headID.appendChild(newCss); </script>

</body>
</html>
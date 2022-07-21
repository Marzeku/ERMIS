<!DOCTYPE html>
<html>
<head><meta http-equiv="X-UA-Compatible" content="IE=edge"></head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src = "https://unpkg.com/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
<script src="https://gist.github.com/parzibyte/b0cd4aa336b4368ebc1df3eed97e54a3.js"></script>

<head>
		<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="../Vista/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../Vista/css/carga.css"/> 
		<script src="../Vista/js/jquery2.js"></script>
		<script src="../Vista/js/bootstrap.min.js"></script>
		<script src="../main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
</head>

<?php 

// include "../Vista/Inicio_Mod.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

include "../Vista/Modulo.php";

?>

<?php 

// Patron FlyWeight, ya que se esta creando objetos desde cero y asimismo, estos se agregan a la base de datos. 
// Ademas, hace uso del patron Singleton al utilizar la variable de conexion $con 

// Codigo del patron FlyWeight, en el que se crea nuevos objetos desde cero

function actualizar()
{
include '../Controlador/db.php'; 

if(isset($_POST['Actualizar']))
{
    $id = $_POST['ID']; 
    $cat = $_POST["cat"]; 
    $marca = $_POST['marca'];
    $nombre = $_POST["nombre"]; 
    $precio = $_POST['precio'];
    $desc = $_POST['descripcion'];
    // $imagen = $_POST['imagen'];
    $stock = $_POST['stock'];
    $iva = ($_POST['iva'] / 100);
    $descuento = ($_POST['descuento'] / 100);
	
	$archivo = $_FILES['imagen']['name'];
	$temp = $_FILES['imagen']['tmp_name'];
	$tipo = $_FILES['imagen']['type'];
	$tamanio = $_FILES['imagen']['size'];
	
	// print_r($_FILES);
	
	if(!file_exists('Img_Prueba'))
	{
	    mkdir('Img_Prueba',0777,true);
	    
	    if(file_exists('Img_Prueba'))
	    {
	        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000)))
	        {
	            ?>
        
	            <script>
	            
	            var Mensaje1 = "El archivo no es una imagen";
	            var Mensaje2 = "Solo se permiten archivos con extensión .gif, .jpeg, .jpg, .png y con un tamaño máximo de 200 Kb";
	            var Mensaje3 = "error";
        
	            </script>

	            <?php
	            
	            $mail = new PHPMailer(true);

	            try {
	            //Server settings
	            $mail->SMTPDebug = 0;                      //Enable verbose debug output
	            $mail->isSMTP();                                            //Send using SMTP
	            $mail->Host       = 'mail.redesoft.com.co';                     //Set the SMTP server to send through
	            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	            $mail->Username   = '_mainaccount@redesoft.com.co';                     //SMTP username
	            $mail->Password   = 'cvT1P6@z7@tKX9_@';                               //SMTP password
	            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
	            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	            //Recipients
	            $mail->setFrom('redeso@noemi.colombiahosting.com.co', 'redeso');
	            $mail->addAddress('marzeku@gmail.com');     //Add a recipient

	            //Content
    
	            $headers = "marzeku@gmail.com"; 
	            $asunto = "Nuevo producto registrado: ". $nombre;
	            $envio = "
	            <html>
	            <head><title>Nuevo producto registrado</title></head>
	            <body>
	            <p><b> Un Nuevo Producto ha sido registrado </b></p>
	            <ul>
	            <li>Nombre: ". $nombre ."</li>
	            <li>Categoria: ". $cat ."</li>
	            <li>Marca: ". $marca ."</li>
	            <li>Precio: $ ". $precio ."</li>
	            <li>Descripción: ". $desc ."</li>
	            <li>Stock: ". $stock ."</li>
	            <li>IVA: ". $iva ."</li>
	            <li>Descuento: ". $descuento ."</li>
	            </ul>
	            </body>
	            </html>
	            ";
            
	            $mail->isHTML(true);                                  //Set email format to HTML
	            $mail->Subject = $asunto;
	            $mail->Body    = "-> Mensaje enviado por: ". $headers. "<br><br>". $envio;

	            $mail->send();
	            // echo '<font face = "Verdana" size = "4"><center> El mensaje se envió correctamente </center></font>';
            
	            } catch (Exception $e) {
	            echo "<br><font face = 'Verdana' size = '4'><center> Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo} </center></font>";
	            }
	        }
	        else
	        {
	           if(move_uploaded_file($temp, 'Img_Prueba/'.$archivo))
	           {
	               ?>
        
	               <script>
	               
	               var Mensaje1 = "La imagen se guardó correctamente";
	               var Mensaje2 = "Imagen enviada con éxito";
	               var Mensaje3 = "success";
        
	               </script>

	               <?php
	           }
	           else
	           {
	               ?>
        
	               <script>
	               
	               var Mensaje1 = "La imagen no se pudó guardar";
	               var Mensaje2 = "Error al enviar la imagen";
	               var Mensaje3 = "error";
        
	               </script>

	               <?php
	           }
	        }
	    }
	}
	else
	{
	    if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000)))
	    {
	       ?>
        
	       <script>
        
	       var Mensaje1 = "El archivo no es una imagen";
	       var Mensaje2 = "Solo se permiten archivos con extensión .gif, .jpeg, .jpg, .png y con un tamaño máximo de 200 Kb";
	       var Mensaje3 = "error";
        
	       </script>

	       <?php
	       
	        $mail = new PHPMailer(true);

            try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.redesoft.com.co';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '_mainaccount@redesoft.com.co';                     //SMTP username
            $mail->Password   = 'cvT1P6@z7@tKX9_@';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('redeso@noemi.colombiahosting.com.co', 'redeso');
            $mail->addAddress('marzeku@gmail.com');     //Add a recipient

            //Content
    
            $headers = "marzeku@gmail.com"; 
            $asunto = "Nuevo producto actualizado: ". $nombre;
            $envio = "
	        <html>
	        <head><title>Nuevo producto actualizado</title></head>
	        <body>
	        <p><b> Un Nuevo Producto ha sido actualizado </b></p>
	        <ul>
	        <li>Nombre: ". $nombre ."</li>
	        <li>Categoria: ". $cat ."</li>
	        <li>Marca: ". $marca ."</li>
	        <li>Precio: $ ". $precio ."</li>
	        <li>Descripción: ". $desc ."</li>
	        <li>Stock: ". $stock ."</li>
	        <li>IVA: ". $iva ."</li>
	        <li>Descuento: ". $descuento ."</li>
	        </ul>
	        </body>
	        </html>
	        ";
            
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $asunto;
            $mail->Body    = "-> Mensaje enviado por: ". $headers. "<br><br>". $envio;

            $mail->send();
            // echo '<font face = "Verdana" size = "4"><center> El mensaje se envió correctamente </center></font>';
            
            } catch (Exception $e) {
            echo "<br><font face = 'Verdana' size = '4'><center> Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo} </center></font>";
            }
	   }
	   else
	   {
	       if(move_uploaded_file($temp, 'Img_Prueba/'. $archivo))
	       {
	          ?>
        
	          <script>
        
	          var Mensaje1 = "La imagen se guardó correctamente";
	          var Mensaje2 = "Imagen enviada con éxito";
	          var Mensaje3 = "success";
        
	          </script>

	          <?php
	          }
	       else
	       {
	          ?>
        
	          <script>
        
              var Mensaje1 = "La imagen no se pudó guardar";
	          var Mensaje2 = "Error al enviar la imagen";
	          var Mensaje3 = "error";
        
	          </script>

	          <?php
	       }
	   }
	}
	
	$url = 'Img_Prueba/'.$archivo;

	// move_uploaded_file($_FILES['imagen']['tmp_name'], $url.$archivo);

    $imagen = 'Imagen no Disponible.png';

	// Sentencia de SQL para poder Insertar un registro en la base de datos 
	
    $sentencia = "UPDATE `products` SET `product_id` = '$id', `product_cat` = '$cat', `product_brand` = '$marca', `product_title` = '$nombre' ,`product_price` = '$precio', `product_desc` = '$desc', 
    `product_image` = '$imagen',`product_keywords` = '$nombre', `Stock`= '$stock' ,`IVA` = '$iva',`Descuento` = '$descuento' 
    WHERE product_id = '$id'; "; 

	// Ejecucion de la sentencia SQL por medio de la variable de conexion 

    if(mysqli_query($con, $sentencia))
	{
        ?>
        
        <script>
        
        Swal
        .fire({
        title: 'Producto de la tienda actualizado',
        text: 'Registro modificado',
        icon: 'success',
        confirmButtonText: 'Ok',
        })
        
        .then(resultado => {
        if (resultado.value)
        {
            Swal.fire(
                Mensaje1,
                Mensaje2,
                Mensaje3
            )
            .then(res => {
            if (res.value)
            {
                Swal.fire(console.log(window.location = "../Controlador/Actualizar_P.php?ID=<?php echo $id; ?>"));
            }
            });
        }
        });
        
        </script>

        <?php

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.redesoft.com.co';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '_mainaccount@redesoft.com.co';                     //SMTP username
            $mail->Password   = 'cvT1P6@z7@tKX9_@';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('redeso@noemi.colombiahosting.com.co', 'redeso');
            $mail->addAddress('marzeku@gmail.com');     //Add a recipient

            //Content
    
            $headers = "marzeku@gmail.com"; 
            $asunto = "Nuevo producto actualizado: ". $nombre;
            $envio = "
	        <html>
	        <head><title>Nuevo producto actualizado</title></head>
	        <body>
	        <p><b> Un Nuevo Producto ha sido actualizado </b></p>
	        <ul>
	        <li>Nombre: ". $nombre ."</li>
	        <li>Categoria: ". $cat ."</li>
	        <li>Marca: ". $marca ."</li>
	        <li>Precio: $ ". $precio ."</li>
	        <li>Descripción: ". $desc ."</li>
	        <li>Stock: ". $stock ."</li>
	        <li>IVA: ". $iva ."</li>
	        <li>Descuento: ". $descuento ."</li>
	        </ul>
	        </body>
	        </html>
	        ";
            
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $asunto;
            $mail->Body    = "-> Mensaje enviado por: ". $headers. "<br><br>". $envio;
            $mail->AddAttachment($url, $archivo);

            $mail->send();
            // echo '<font face = "Verdana" size = "4"><center> El mensaje se envió correctamente </center></font>';
            
        } catch (Exception $e) {
            echo "<br><font face = 'Verdana' size = '4'><center> Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo} </center></font>";
        }
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia . "<br> </h3> </center>" . mysqli_error($con);
	}
	
	?>
	
	<center>

    <br><br><br><p></p>
    <font face = "Verdana" size = "4">Si existe un problema, da click:</font> <p></p>

    <a href="javascript:location.reload()"><button class="btn btn-primary" id="Refrescar" width="700px" height="100px"><font size=3 face="Verdana"><b> Refrescar </b></font></button></a>
    <a href="../Controlador/Actualizar_P.php?ID=<?php echo $id; ?>"><button class="btn btn-success" id="Volver" width="700px" height="100px"><font size=3 face="Verdana"><b> Volver </b></font></button></a>

    </center>
    
    <?php
    
    // echo "<br><font face = 'Verdana' size = '4'><center> La ruta seleccionada es: ". $url . "</center></font>";
	// echo "<br><font face = 'Verdana' size = '4'><center> La ruta original era: ". $temp . "</center></font>";
	
	mysqli_close($con); // Cierra la conexion 

	return $con; // Ejecuta la funcion para Insertar
  
    }
}

$con = actualizar(); 

?>

</body>
</html>
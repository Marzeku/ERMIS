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
<?php include "../Vista/Inicio_Mod.php" ?>

<?php 

function insertar()
{

include '../Controlador/db.php'; 

$DNI = $_POST["DNI"];
$documento = $_POST["documento"];
$nombre = $_POST["nombre"]; 
$apellido = $_POST["apellido"]; 
$email = $_POST['correo'];
$password = $_POST['contraseña'];
$repassword = $_POST['recontraseña'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

    if(empty($DNI) || empty($documento) || empty($nombre) || empty($apellido) || empty($email) || empty($password) || empty($repassword) ||
	empty($telefono) || empty($direccion))
	{
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Hay que llenar todos los espacios...</b>
			</div>
		";
		exit();
	} 
	else 
	{

	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>El $email no es válido. </b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>La contraseña es débil. </b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>La contraseña es débil. </b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Las contraseñas no son las mismas</b>
			</div>
		";
	}
	if(!preg_match($number,$telefono)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>El número $mobile no es el mismo</b>
			</div>
		";
		exit();
	}
	if(!(strlen($telefono) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>El número de móvil debe ser de 10 dígitos.</b>
			</div>
		";
		exit();
	}
	
	// Se verifica que algun correo de la base de datos sea igual al ingresado
	
	$sql = "SELECT ID_user FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0)
	{
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>La dirección de correo electrónico ya está disponible. Pruebe otra dirección de correo electrónico.  </b>
			</div>
		";
		exit();
	}
	else
	{

    if (isset($_POST['Agregar']))
    {
    
    //  $password = md5($password);  Funcion anterior empleada para encriptar la contraseña, fue reemplazado al ver que MD5 podia ser desencriptado con SQLMap 
    
    // Nuevo metodo de encriptacion con SHA-256   
    
    $salt = '34a@$#aA9823$';
    
    $password = hash('sha256', $salt . $password);

    /*$sentencia = "INSERT INTO products 
    ('product_id', 'product_cat', 'product_brand', 'product_title', 'product_price', 'product_desc', 'product_image', 'product_keywords¿, 'stock'
    VALUES (NULL, '$cat', '$marca', '$nombre', '$precio', '$desc', '$imagen', '$nombre', '15'); "; */
	
	// Sentencia de SQL para poder Insertar un registro en la base de datos 
	
	// Generador de claves

    // Carácteres para la clave
    
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    
    $clave = "";
    
    // Se reconstruye la contraseña segun la longitud que se quiera
    
    for($i = 0; $i < 20; $i++) 
    {
      // Se obtiene un caracter aleatorio escogido de la cadena de caracteres
      
      // Clave generada
      
      $clave .= substr($str, rand(0, 62), 1);
      
      $salt = '34a@$#aA9823$';
    
      $clave = hash('sha256', $salt . $clave);
    }
    
    // echo 'Clave generada: '. $clave;

    $sentencia = "INSERT INTO `user_info` 
    (`ID_user`, `first_name`, `last_name`, `email`, `password`, `Clave`, `mobile`, `address`, `Rol`, `DNI`, `Tipo_Documento`) 
    VALUES (NULL, '$nombre', '$apellido', '$email', '$password', '$clave', '$telefono', '$direccion', 'Cliente', '$DNI', '$documento');"; 
    
    //$email0 = $email; 
    
    $destino = "marzeku@gmail.com";
	$contacto = "Nuevo usuario registrado: ". $nombre. " ". $apellido;
	$mensaje = "Un nuevo usuario se ha registrado: \n"."\n * DNI: ".$DNI."\n * No. Documento: ".$documento."\n * Nombres: ".$nombre."\n * Apellidos: ".$apellido."\n * Correo electronico: ".$email. "\n * Direccion: ".$direccion."\n * Numero telefonico: ".$telefono."\n * Rol: Cliente"; 
	//$headers = "From: marzeku@gmail.com" . "\r\n" . "CC: marzeku@gmail.com";
	
	$stmt = $con->prepare($sentencia); 
	// $stmt->bind_param("sss", $nombre, $apellido, $email, $password, $telefono, $direccion, $DNI, $documento);
	
	mail($destino, $contacto, $mensaje);

	//$sentencia->execute();
	
	// Ejecucion de la sentencia SQL por medio de la variable de conexion 

    // if(mysqli_query($con, $sentencia))
    
    if($stmt->execute())
	{
	    // $email0 = $email; 
	    // $password0 = $password; 
	    
	    ?>
			<div class="panel-heading">
				<input type="hidden" class="form-control" id="<?php $email ?>" required/>
				<input type="hidden" class="form-control" value = "<?php $password ?>" id="password" required/>
			</div>
		<div class="panel-footer" id="e_msg"></div>
								
	    <?php
	    
	    header("location:../index1.php");
	    
	    $sql2 = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' AND `Rol` = 'Cliente'; ";
	    
	    $run2_query = mysqli_query($con,$sql2);
	    $count2 = mysqli_num_rows($run2_query);
	    
	    if($count2 == 1)
	    {
		   $row = mysqli_fetch_array($run2_query);
		   $_SESSION["CLIENTE"] = $row["ID_user"];
		   $_SESSION["name"] = $row["first_name"];
		   echo "truefsvkjbskvvsbd";
	    }
	    
	    
        //include "../Modelo/login.php"; 
        //include "../index.php"; 
        
        // Retorna al inicio del carrito de compras
		//echo "<br> <h3> <center>". "Producto agregado </h3> </center>";
	}
	else
	{
		echo "Error: <h3> <center>" . $sentencia . "<br> </h3> </center>" . mysqli_error($con); 
	}

	mysqli_close($con); // Cierra la conexion 

	return $con; // Retorna la variable de conexion 
    } 
} 
}
}

$con = insertar(); // Ejecuta la funcion para Insertar 

?>

</body>
</html>
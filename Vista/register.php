<?php

include "../Controlador/db.php";

$DNI = $_POST["DNI"];
$documento = $_POST["documento"];
$nombre = $_POST["f_name"]; 
$apellido = $_POST["l_name"]; 
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
	
	$sql = "SELECT user_id FROM user_info WHERE email = '$correo' LIMIT 1" ;
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
		$password = md5($password);
		$sql = "INSERT INTO `user_info` 
		(`user_id`, `DNI`, `Tipo_Documento`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address`, `Rol`) 
		VALUES (NULL, '$DNI', '$Tipo', '$nombre', '$apellido', '$email', 
		'$password', '$telefono', '$direccion', 'Cliente'); ";
		$run_query = mysqli_query($con,$sql);
		
		if($run_query)
	    {
	    $destino= "marzeku@gmail.com";
	    $contacto = "Nuevo usuario registrado: ". $nombre. " ". $apellido;
	    $mensaje = "Un nuevo usuario se ha registrado: \n"."\n * DNI: ".$DNI."\n * No. Documento: ".$documento."\n * Nombres: ".$nombre."\n * Apellidos: ".$apellido."\n * Correo electronico: ".$email."\n * Direccion: ".$direccion."\n * Numero telefonico: ".$telefono."\n * Rol: Cliente"; 
	    //$headers = "From: marzeku@gmail.com" . "\r\n" . "CC: marzeku@gmail.com";
	    
	    mail($destino, $contacto, $mensaje); 
	    
	    ?>
			<div class="panel-heading">
				<input type="hidden" class="form-control" id="<?php $email ?>" required/>
				<input type="hidden" class="form-control" value = "<?php $password ?>" id="password" required/>
			</div>
		<div class="panel-footer" id="e_msg"></div>
								
	    <?php
	    
	    header("location:../index.php");
	    
	    $sql1 = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' AND `Rol` = 'Administrador'; ";
	    $sql2 = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' AND `Rol` = 'Cliente'; ";
	    
	    $run2_query = mysqli_query($con,$sql2);
	    $count2 = mysqli_num_rows($run2_query);
	    
	    if($count2 == 1)
	    {
		   $row = mysqli_fetch_array($run2_query);
		   $_SESSION["CLIENTE"] = $row["user_id"];
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
		    echo "Error: <h3> <center>" . $sql . "<br> </h3> </center>" . mysqli_error($con); 
	    }	
	    
	    //mysqli_close($con); // Cierra la conexion 
	    
	    //return $con; // Retorna la variable de conexion 
	}
	} 
	//$con = insertar(); // Ejecuta la funcion para Insertar 
	
?>
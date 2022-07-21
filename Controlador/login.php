<?php

include "db.php";

session_start();

if(isset($_POST["userLogin"]))
{
	$email = mysqli_real_escape_string($con,$_POST["userEmail"]);
	// $password = md5($_POST["userPassword"]);  Funcion MD5 usada para encriptar contraseñas
	
	$salt = '34a@$#aA9823$';
	$password = hash('sha256', $salt . $_POST["userPassword"]); // Funcion de encriptacion con SHA-256
	
	$sql1 = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' AND `Rol` = 'Administrador'; ";
	$sql2 = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' AND `Rol` = 'Cliente'; ";

	$run1_query = mysqli_query($con,$sql1);
	$count1 = mysqli_num_rows($run1_query);

	$run2_query = mysqli_query($con,$sql2);
	$count2 = mysqli_num_rows($run2_query);

	if($count1 == 1)
	{ 
		$row = mysqli_fetch_array($run1_query);
		$_SESSION["uid"] = $row["ID_user"];
		$_SESSION["name"] = $row["first_name"];
		echo "truefsvkjbskvvsbd";
	}

	if($count2 == 1)
	{
		$row = mysqli_fetch_array($run2_query);
		$_SESSION["CLIENTE"] = $row["ID_user"];
		$_SESSION["name"] = $row["first_name"];
		echo "truefsvkjbskvvsbd";
   }
}

?>
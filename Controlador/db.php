<?php

/*$servername = "localhost";
$username = "root";
$password = "";
$db = "tienda_tusolutionweb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}*/

/*$conn = mysqli_connect(SERVIDOR, USUARIO, PASSWORD, BD) or die("Error de conexion".mysql_error());

$servidor = "mysql:dbname = " . BD . "host = " . SERVIDOR; 

try
{ 
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO :: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
    echo "<script> alert ('Conexion exitosa') </script";  
}
catch(PDOException $e)
{ 
    echo "<script> alert ('Error de conexion') </script";  
}*/

/*function conectar()
{ 
	$user = "root";
	$pass = "";
	$server = "localhost";
	$db = "carrito";
	//$table = "producto"; 
	$con = mysqli_connect($server,$user,$pass,$db) or die ("<h1> <center> Error de conexion </center> </h1>");
	mysqli_select_db ($con, $db) or die ("<h1> <center> Error de conexion </center> </h1>");
	//echo "<script> alert ('Error de conexion') </script";  

	if(!$con)
	{  
		die("<h1> <center> Error de conexion </center> </h1>"). mysqli_connect_error(); 
	}

	//echo "<h1> <center> Conexion exitosa </center> </h1>";

	return $con;
}

$con = conectar();*/

// Patron Singleton 

class Conexion 
{   
	/*private $server = "localhost"; 
	private $user = "root"; 
	private $pass = ""; 
	private $name = "carrito"; */ 
	//private $con; 
	private $rows = array(); // Declaracion del arreglo
	private static $instancia; // Declaracion de la instancia 

	//private $rows = array(); 
	//private static $instancia;

	private function __construct() {}

	public static function Conectar()
	{
		try
		{
			//$con = new mysqli($this->host, $this->user, $this->pass, $this->name);
			//$con->query("SET NAMES 'utf8'");

			// Se definen las variables que permiten la conexion 

			$user = "root";
			$pass = "";
			$server = "localhost"; // El host o servidor 
			$db = "redeso_UCC_Store"; // La base de datos

			// La variable de conexion 

			// $con = mysqli_connect($server, $user,$pass,$db) or die ("<h1> <center> Error de conexion </center> </h1>");
			
			$con = new mysqli($server, $user,$pass,$db) or die ("<h1> <center> Error de conexion </center> </h1>");
			
            //mysqli_select_db ($con, $db) or die ("<h1> <center> Error de conexion </center> </h1>");
            
            if(!$con)
            {
                die('Error de conexion '. mysqli_connect_error()); 
            }
		}
		catch(mysqli_sql_exception $e)
		{
			$con->error=$e->getMessage(); 
		}

		return $con; // Retorna la variable de conexion 

		/*$user = "root";
		$pass = "";
		$server = "localhost";
		$db = "carrito";
		//$table = "producto"; 
		//private $con; 

		$this->con = mysqli_connect($server,$user,$pass,$db) or die ("<h1> <center> Error de conexion </center> </h1>");
		mysqli_select_db ($this, $db) or die ("<h1> <center> Error de conexion </center> </h1>");*/ 
	}

	// Decalracion de la funcion Singleton 

	public static function Singleton()
	{
		if(!isset(self::$instancia))
		{
			$miclase = __CLASS__;
			self::$instancia = new $miclase; 
		}

		return self::$instancia; 
	}

	// Funcion para emplear consultas 

	public function query($query)
	{
		$result = $this->query($query);
		return $result; 
	}

	// Retorna la consulta 

	public function resultquery($query)
	{
		$result = $this->con->query($query);
		$num = misqli_num_rows($result); 

		while($row = $result->fetch_object())
		{
			$row[] = $row; 
		}

		if(num == 0)
		{
			$rows = array(); 
		}

		return $rows; 
	}

	public function __clone()
	{
		trigger_error('La clonacion no esta permitida', E_USER_ERROR); // Declaracion que impide la clonacion 
	}
}

$con = Conexion::Conectar();   // Retorno de la variable para realizar operaciones de SELECT, INSERT, UPDATE y DELETE

?>
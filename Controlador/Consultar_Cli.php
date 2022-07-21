<!DOCTYPE html>
<html>
    <?php include '../Vista/Inicio_Con.php'; ?>
		<ul class="nav navbar-nav">
			<li style="top:1px;left:-120px;"><a href="../Vista/Buscar_Cli.php"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Volver </font></a></li>
		</ul>
		</div>
        </div>

<p><br/></p>
<p><br/></p>
<p><br/></p>

<?php

$ID = $_POST["ID"]; 

?> 

<br><center><h3><b><font face = "Times New Roman"> INFORMACION DEL CLIENTE CON EL ID <?php echo $ID; ?> </font></b></h3></center><br>

<?php

// Patron Factory Method, en el que se define una clase, que contiene una funcion para consultar y asimismo, permite 
// crear nuevos objetos o seleccionarlos directo de la base de datos y mostrarlo en la aplicacion. 

abstract class Creator
{
	abstract public function FactoryMethod(); 
}

class FactoryMethod	{ }

interface Dato
{
	public function consultar(); 
}

class Listar 
{
	private $A = null; 

public function __construct($A)
{
	$this->A = new $A; 
}

public static function consultar()
{
	include '../Controlador/db.php'; 

	$ID = $_POST["ID"]; 

	?>
    <font face = "Times New Roman">
    <table class="table table-dark table-bordered">
		<tr>
            <td bgcolor = "black" width = "5%" class="text-center"> <font color = "white"> <h4> ID </h4> </font></td>
            <td bgcolor = "black" width = "10%" class="text-center"> <font color = "white"> <h4> DNI </h4> </font></td>
            <td bgcolor = "black" width = "5%" class="text-center"> <font color = "white"> <h4> Tipo de documento </h4> </font></td>
			<td bgcolor = "black" width = "10%" class="text-center"> <font color = "white"> <h4> Nombres </h4> </font> </td>
			<td bgcolor = "black" width = "10%" class="text-center"> <font color = "white"> <h4> Apellidos </h4> </font> </td>
			<td bgcolor = "black" width = "15%" class="text-center"> <font color = "white"> <h4> Correo Electronico </h4> </font> </td>
			<td bgcolor = "black" width = "15%" class="text-center"> <font color = "white"> <h4> Numero Telefonico </h4> </font> </td>
			<td bgcolor = "black" width = "20%" class="text-center"> <font color = "white"> <h4> Direccion </h4> </font> </td>
			<td bgcolor = "black" width = "10%" class="text-center"> <font color = "white"> <h4> Rol </h4> </font> </td>
		</tr>

		<?php 
		
		$sentencia = "SELECT * FROM user_info WHERE `ID_user` = $ID"; 
		$result = mysqli_query($con, $sentencia); 

		while($mostrar = mysqli_fetch_array($result))
		{ 
		?>

		<tr>
            <td width = "5%" class="text-center"><?php echo $mostrar['ID_user']; ?></td>
            <td width = "10%" class="text-center"><?php echo $mostrar['DNI']; ?></td>
            <td width = "5%" class="text-center"><?php echo $mostrar['Tipo_Documento']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['first_name']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['last_name']; ?></td>
			<td width = "15%" class="text-center"><?php echo $mostrar['email']; ?></td>
			<td width = "15%" class="text-center"><?php echo $mostrar['mobile']; ?></td>
			<td width = "20%" class="text-center"><?php echo $mostrar['address']; ?></td>
			<td width = "10%" class="text-center"><?php echo $mostrar['Rol']; ?></td>
		</tr>
		<?php } ?>
	</table>
    </font>
	<?php 

	//$con = $this->FactoryMethod(); 
	//$result = $con->consultar(); 

	//return $result; 

	return $con; 
} 
}

class ConsultaFactory 
{
	public function create($type)
	{
		if($type == $_POST["ID"])
		{
			return new Listar(new FactoryMethod); 
		}
	}
}

$factory = new ConsultaFactory(); 
$C = $factory->create($ID); 
Listar::consultar(); 

?>
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


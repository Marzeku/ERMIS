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

<br><center><h3><b><font face = "Times New Roman">CLIENTES DEL CARRITO DE COMPRAS </font><?php ?> </b></h3></center><br>

<form method="post" action = "../Modelo/Generar_Ex_Cli.php">
	<div class="row">
		<div class="col-md-12">
		<center><font face = "Times New Roman"><input style="float:center;" value="Exportar a Excel" type="submit" id="Exportarc_ex" name="Exportarc_ex"  class="btn btn-success btn-lg"></font></center>
			</div>
			</div>
	<p><b></b></p><p><b></b></p>
</form>

<?php

// Patron Factory Method, en el que se define una clase, que contiene una funcion para consultar y asimismo, permite 
// crear nuevos objetos o seleccionarlos directo de la base de datos y mostrarlo en la aplicacion. 

interface Dato
{
	public function consultar(); 
}

class Listar
{
    
public static function consultar()
{
	include 'db.php'; 

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

		$sentencia = "SELECT * FROM user_info"; 
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

	return $con;
}
}

/*class Concrete_Creator_1 extends Creator
{
    public function FactoryMethod()
    {
        return new Concrete_Consulta_1;
    }
}

class Concrete_Creator_2 extends Creator
{
    public function FactoryMethod()
    {
        return new Concrete_Consulta_2;
    }
}

interface Objeto 
{
    public function operation(): string;
}

class Concrete_Consulta_1 implements Objeto
{
    public function operation(): string 
    {
        return "Resultado del Producto Concreta No. 01";
    }
}

class Concrete_Consulta_2 implements Objeto
{
    public function operation(): string 
    {
        return "Resultado del Producto Concreta No. 01";
    }
}

function Buscar(Creator $creator)
{
    $creator->FactoryMethod();
}

//echo "Resultado lanzado de Concrete_Creator_1.\n";
Buscar(new Concrete_Creator_1);
echo "\n\n";

//echo "Resultado lanzado de Concrete_Creator_1.\n";
Buscar(new Concrete_Creator_2);*/ 

//$Dato = new Listar();
//Buscar($Dato); 

/*$B = new buscar();
$B->consultar(); */ 

//function Buscar (Dato $Dato)
//{
	//$Dato->consultar();  	
//}

//$con = buscar::consultar(); 

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
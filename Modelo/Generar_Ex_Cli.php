<?php

include '../Controlador/db.php';

header("Pragma: public");
header("Expires: 0");
$filename = "Clientes.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>

<table>
 <tbody>

 <p></p>
 <br>
 <font face = "Times New Roman">

    <table class="table table-dark table-bordered">
		<tr>
            <td bgcolor = "black" width = "5%" class="text-center"> <font color = "white"> <h4><center> ID </center></h4> </font></td>
            <td bgcolor = "black" width = "10%" class="text-center"> <font color = "white"> <h4><center> DNI </center></h4> </font></td>
            <td bgcolor = "black" width = "5%" class="text-center"> <font color = "white"> <h4><center> Tipo de documento </center></h4> </font></td>
			<td bgcolor = "black" width = "10%" class="text-center"> <font color = "white"> <h4><center> Nombres </center></h4> </font> </td>
			<td bgcolor = "black" width = "10%" class="text-center"> <font color = "white"> <h4><center> Apellidos </center></h4> </font> </td>
			<td bgcolor = "black" width = "15%" class="text-center"> <font color = "white"> <h4><center> Correo Electronico </center></h4> </font> </td>
			<td bgcolor = "black" width = "15%" class="text-center"> <font color = "white"> <h4><center> Numero Telefonico </center></h4> </font> </td>
			<td bgcolor = "black" width = "20%" class="text-center"> <font color = "white"> <h4><center> Direccion </center></h4> </font> </td>
			<td bgcolor = "black" width = "10%" class="text-center"> <font color = "white"> <h4><center> Rol </center></h4> </font> </td>
		</tr>
<?php 

		$sentencia = "SELECT * FROM user_info"; 
		$result = mysqli_query($con, $sentencia); 

		while($mostrar = mysqli_fetch_array($result))
		{ 
		?>

		<tr>
            <td width = "5%" class="text-center"><center><?php echo $mostrar['ID_user']; ?></center></td>
            <td width = "10%" class="text-center"><center><?php echo $mostrar['DNI']; ?></center></td>
            <td width = "5%" class="text-center"><center><?php echo $mostrar['Tipo_Documento']; ?></center></td>
			<td width = "10%" class="text-center"><center><?php echo $mostrar['first_name']; ?></center></td>
			<td width = "10%" class="text-center"><center><?php echo $mostrar['last_name']; ?></center></td>
			<td width = "15%" class="text-center"><center><?php echo $mostrar['email']; ?></center></td>
			<td width = "15%" class="text-center"><center><?php echo $mostrar['mobile']; ?></center></td>
			<td width = "20%" class="text-center"><center><?php echo $mostrar['address']; ?></center></td>
			<td width = "10%" class="text-center"><center><?php echo $mostrar['Rol']; ?></center></td>
		</tr>
		<?php } ?>
    </tbody>
	</table>
	</center>
	</font>
	
<?php 

return $con;

?>
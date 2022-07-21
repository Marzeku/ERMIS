<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ERMIS</title>
		<link rel="stylesheet" href="../Vista/css/bootstrap.min.css"/>
		<script src="../Vista/js/jquery2.js"></script>
		<script src="../Vista/js/bootstrap.min.js"></script>
		<script src="../main.js"></script>
		<style>
			table tr td {padding:10px;}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="../index1.php"><img src = "../product_images/Ermis Logo (editado).png" height=42 width=36></a>..
			</div>
			<ul class="nav navbar-nav">
			    <li><a href="../index1.php" class="navbar-brand"> <font size=4 face="Times New Roman, arial">ERMIS</font></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Inicio </font></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span><font size=3 face="Times New Roman, arial"> Producto </font></a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Detalles del pedido del cliente</h1>
						<hr/>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/camera.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>nombre del producto</td><td><b>Sony Camera</b> </td></tr>
									<tr><td>Precio del producto</td><td><b>$500</b></td></tr>
									<tr><td>Cantidad</td><td><b>3</b></td></tr>
									<tr><td>Pago</td><td><b>Completed</b></td></tr>
									<tr><td>ID de transacción</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
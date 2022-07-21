<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:../index1.php");
}
$trx_id = $_GET["tx"];
$p_st = $_GET["st"];
$amt = $_GET["amt"];
$cc = $_GET["cc"];
$cm = $_GET["cm"];
$c_amt = $_COOKIE["ta"];



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
				<a href="#"><img src = "product_images/Ermis Logo (editado).png" height=42 width=36></a>..
			</div>
			<ul class="nav navbar-nav">
			    <li><a href="#" class="navbar-brand"> <font size=4 face="Times New Roman, arial"> Almacenar ERMIS </font></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-home"></span><font size=3 face="Times New Roman, arial"> Nosotros </font></a></li>
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
						<h1>Gracias </h1>
						<hr/>
						<p>Hola <?php echo $_SESSION["name"]; ?>,Su proceso de pago es
completado con éxito y su ID de transacción es<b></b><br/>
						puedes continuar tus compras<br/></p>
						<a href="../index1.php" class="btn btn-success btn-lg">Seguir comprando</a>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
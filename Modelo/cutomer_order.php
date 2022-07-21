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
	
</body>
</html>
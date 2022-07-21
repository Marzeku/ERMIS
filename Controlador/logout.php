<html>
    <head> </head>
<body>

<?php

session_start();

unset($_SESSION["uid"]);

unset($_SESSION["name"]);

header("location:../index.php");

?>

<?php

session_start();

unset($_SESSION["CLIENTE"]);

unset($_SESSION["name"]);

header("location:../index.php");

?>
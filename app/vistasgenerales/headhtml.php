<?php 
	session_start();
	if(!isset($_SESSION["username"])){
		header("location: ../inicio/acceso.php");
		return;
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Sistema de Gestión Académica</title>
	<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../public/bootstrap/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/jpg" href="../../public/img/egb-logo100.png">
	<link rel="stylesheet" href="../../public/css/estilo.css">
	<link rel="stylesheet" href="../../public/css/adminlte.css">

</head>

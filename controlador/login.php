<?php 

	include("controlador.php");

	$usuario = $_POST['email'];
	$contra = $_POST['password'];

	$control = new Conexion();

	$control->login($usuario, $contra);


 ?>
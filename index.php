<?php 
	
	session_start();
	if(!isset($_SESSION['userid'])){
		header("location: app/inicio/acceso.php");
		return;
	}else{
		header("location: app/home.php");
		return;
	}



 ?>
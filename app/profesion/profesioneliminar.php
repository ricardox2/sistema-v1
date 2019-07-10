<?php 
	
	include("../../controlador/controlador.php");
	$control = new Conexion();

	if(isset($_GET['id'])){
		$id=$_GET['id'];

		$sql= "delete from profesiones where id=".$id;
		$resul = $control->consulta($sql);

		if(!$resul){
			die("Error al eliminar".$sql);
		}
		header("location: profesioninicio.php");
	}

 ?>
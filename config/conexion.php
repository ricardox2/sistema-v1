<?php 
	
	define("BD_HOST", "localhost");
	define("BD_NAME", "bdiegb1");
	define("BD_USER", "root");
	define("BD_PASS", "unasam");

	function Conectar(){
		$con = @mysqli_connect(BD_HOST, BD_USER, BD_PASS) or die("Error de conexión a la base de datos: ".mysqli_connect_error($con));	
		$db = mysqli_select_db( $con, BD_NAME ) or die ( "Upps! No se ha podido conectar a la base de datos.");

	}
	
 ?>
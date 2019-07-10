<?php 

/**
 * 
 */

	define("BD_HOST", "localhost");
	define("BD_USER", "root");
	define("BD_PASS", "unasam");
	define("BD_NAME", "bdiegb");
	
class Conexion
{
	
	public function login($usuario, $contra){
		//variable de conexion a la base de datos
		$con = mysqli_connect(BD_HOST, BD_USER, BD_PASS, BD_NAME) or die("Error de conexión");
		// generacion de consulta para verificar usuario y contraseña
		$consulta="select id, name, email from users where email='".$usuario."' and password='".$contra."'";

		//ejecucion de la consulta
		$resul = $con->query($consulta);
		// $row es un arreglo donde se va guardar los datos que retorna la consulta
		if($row = mysqli_fetch_array($resul)){
			session_start();
			$_SESSION['userid'] = $row['id'];
			$_SESSION['username'] = $row['name'];
			$_SESSION['useremail'] = $row['email'];

		}
		else{
			echo("Upps! Usuario o contraseña incorrectos");
		}



	}


}

	
	public function login($usuario, $contra){
		$con = @mysqli_connect(BD_HOST, BD_USER, BD_PASS, BD_NAME) or die("Error de conexión a la base de datos: ".mysqli_connect_error($con));	

		$consulta ="select id, name, password, email from users where email='".$usuario."'  and password='".$contra."'";
		$resul= $con->query($consulta);

		if($row = mysqli_fetch_array($resul)){
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['usuarioiegb'] = $row['name'];
			$_SESSION['email'] = $row['email'];

			header("location: ../app/home.php");
		}
		else{
			echo("Usuario o contraseña incorrectos");
		}
	}

	public function profesiones(){
		$con = @mysqli_connect(BD_HOST, BD_USER, BD_PASS, BD_NAME) or die("Error de conexión a la base de datos: ".mysqli_connect_error($con));	

		$consulta ="select id, name, password, email from users where email='".$usuario."'  and password='".$contra."'";
		$resul= $con->query($consulta);

		if($row = mysqli_fetch_array($resul)){
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['usuarioiegb'] = $row['name'];
			$_SESSION['email'] = $row['email'];

			header("location: ../app/home.php");
		}
		else{
			echo("Usuario o contraseña incorrectos");
		}
	}




public function conectar(){
		$con = @mysqli_connect(BD_HOST, BD_USER, BD_PASS, DB_NAME) or die("Error de conexión a la base de datos: ".mysqli_connect_error($con));	

		//$db = mysqli_select_db( $con, BD_NAME ) or die ( "Upps! No se ha podido conectar a la base de datos.");
		return $con;
	}


}

	


 ?>
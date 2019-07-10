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
	
	public function conectar(){
		$con= @mysqli_connect(BD_HOST, BD_USER, BD_PASS, BD_NAME) or die("Error de conexión");
		return $con;
	}


	public function login($usuario, $contra){
		//variable de conexion a la base de datos
		$con = mysqli_connect(BD_HOST, BD_USER, BD_PASS, BD_NAME) or die("Error de conexión");
		// generacion de consulta para verificar usuario y contraseña
		$consulta="select u.id, u.name, u.email, r.rol from users u inner join roles r on u.roles_id = r.id where u.email='".$usuario."' and u.password='".$contra."'";

		//ejecucion de la consulta
		$resul = $con->query($consulta);
		// $row es un arreglo donde se va guardar los datos que retorna la consulta
		if($row = mysqli_fetch_array($resul)){
			session_start();
			$_SESSION['userid'] = $row['id'];
			$_SESSION['username'] = $row['name'];
			$_SESSION['useremail'] = $row['email'];
			$_SESSION['userrol'] = $row['rol'];

			header("location: ../app/home.php");

		}
		else{
			header("location: ../app/inicio/acceso.php?fallo=true");
		}



	}

	public function cerrarSession(){
		session_destroy();
		session_unset();
		header("location: ../app/inicio/acceso.php");
	}


	public function consulta($sql){
		// se establece la conexion
		$con = $this->conectar();
		//se ejecuta la consulta, la consulta esta en la variable $sql
		$resul = $con->query($sql);
		return $resul;
	}

	


}

	

 ?>
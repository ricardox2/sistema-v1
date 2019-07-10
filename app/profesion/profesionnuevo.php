<?php 
	include("../../controlador/controlador.php");

	if(isset($_POST['btnRegistrar'])){
		$nombre = $_POST['txtNombre'];	
		$descripcion = $_POST['txtDescripcion'];	
		//se crea el objeto de la clase Conexion
		$control = new Conexion();
		$sql="insert into profesiones(nombre, descripcion) values ('".$nombre."','".$descripcion."')";

		$resul = $control->consulta($sql);

		if(!$resul){
			die("Error en el registro ".$sql);
		}
		header("location: profesioninicio.php");
	}

	include("../vistasgenerales/headhtml.php");
	include("../vistasgenerales/cabacera.php");
	include("../vistasgenerales/menulateral.php");
?>
<div class="content-wrapper" id="contentm">
	<section class="content-header">
		<h1 class="">Profesión Nueva</h1>
	</section>
	<section class="content">
		<div class="row col-md-12">
			<h1 class="pull-right"><a href="profesioninicio.php" class="btn btn-primary">Regresar</a></h1>
		</div>		
		<div class="row col-md-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong>Registro de profesión</strong>
				</div>
				<div class="panel-body">
					<form action="profesionnuevo.php" method="POST">
						<h4>Ingrese datos</h4>
						<div class="form-group col-md-6">
							<label>Profesion:</label>
							<input type="text" name="txtNombre"  class="form-control input-md">
						</div>
						<div class="form-group col-md-6">
							<label>Descripción:</label>
							<input type="text" name="txtDescripcion"  class="form-control input-md">
						</div>
						
						<div class="form-group col-md-6">
							<button type="submit" name="btnRegistrar" class="btn btn-success">Registrar</button>
						</div>
					</form>
				</div>
			</div>

		</div>	
	</section>
</div>


<?php
	include("../vistasgenerales/piepagina.php");
 ?>
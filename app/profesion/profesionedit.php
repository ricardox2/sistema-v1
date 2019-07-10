<?php 
	

	include("../../controlador/controlador.php");

	$control = new Conexion();
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql= "select nombre, descripcion from profesiones where id=".$id;
		$resul = $control->consulta($sql);

		if($row = mysqli_fetch_array($resul)){
			$nombre = $row['nombre'];
			$descripcion = $row['descripcion'];
		}
	}

	if(isset($_POST['btnActualizar'])){
		$id=$_GET['id'];
		$nombre = $_POST['txtNombre'];
		$descripcion = $_POST['txtDescripcion'];
		$sql= "update profesiones set nombre='".$nombre."', descripcion='".$descripcion."' where id=".$id;
		$resul = $control->consulta($sql);
		if(!$resul){
			die("Error en la actualizacion ".$sql);
		}
		header("location: profesioninicio.php");		
	}


	include("../vistasgenerales/headhtml.php");
	include("../vistasgenerales/cabacera.php");
	include("../vistasgenerales/menulateral.php");

?>
<div class="content-wrapper" id="contentm">
	<section class="content-header">
		<h1 class="">Editar Profesión</h1>
	</section>
	<section class="content">
		<div class="row col-md-12">
			<h1 class="pull-right"><a href="profesioninicio.php" class="btn btn-primary">Regresar</a></h1>
		</div>		
		<div class="row col-md-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong>Edición de profesión</strong>
				</div>
				<div class="panel-body">
					<form action="profesionedit.php?id=<?php echo $_GET['id']; ?>" method="POST">
						<h4>Ingrese datos</h4>
						<div class="form-group col-md-6">
							<label>Profesion:</label>
							<input type="text" name="txtNombre"  class="form-control input-md" value="<?php echo($nombre) ?>">
						</div>
						<div class="form-group col-md-6">
							<label>Descripción:</label>
							<input type="text" name="txtDescripcion"  class="form-control input-md" value="<?php echo($descripcion) ?>">
						</div>
						
						<div class="form-group col-md-6">
							<button type="submit" name="btnActualizar" class="btn btn-success">Actualizar</button>
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
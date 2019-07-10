<?php 
	

	include("../../controlador/controlador.php");

	$control = new Conexion();
	
	if(isset($_GET['codigo'])){
		$codigo=$_GET['codigo'];
		$sql= "select nombre, creditosmin, estado from programaestudios where codigo=".$codigo;
		$resul = $control->consulta($sql);

		if($row = mysqli_fetch_array($resul)){
			$nombre = $row['nombre'];
			$creditos = $row['creditosmin'];
			if($row['estado'] == 1){
				$estado="Activo";
			}else{
				$estado="Inactivo";
			}
		}
	}

	if(isset($_POST['btnActualizar'])){
		$codigo=$_GET['codigo'];
		$nombre = $_POST['txtNombre'];
		$creditos = $_POST['txtCreditos'];
		$estado = $_POST['cbEstado'];
		$sql= "update programaestudios set nombre='".$nombre."', creditosmin='".$creditos."', estado='".$estado."' where codigo=".$codigo;

		$resul = $control->consulta($sql);
		if(!$resul){
			die("Error en la actualizacion ".$sql);
		}
		header("location: inicio.php");		
	}


	include("../vistasgenerales/headhtml.php");
	include("../vistasgenerales/cabacera.php");
	include("../vistasgenerales/menulateral.php");

?>
<div class="content-wrapper" id="contentm">
	<section class="content-header">
		<h1 class="">Editar Programas de estudios</h1>
	</section>
	<section class="content">
		<div class="row col-md-12">
			<h1 class="pull-right"><a href="profesioninicio.php" class="btn btn-primary">Regresar</a></h1>
		</div>		
		<div class="row col-md-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong>Edición de Programs de estudios</strong>
				</div>
				<div class="panel-body">
					<form action="editar.php?codigo=<?php echo $_GET['codigo']; ?>" method="POST">
						<h4>Ingrese datos</h4>
						<div class="form-group col-md-12">
							<label>Programa de estudios:</label>
							<input type="text" name="txtNombre"  class="form-control input-md" value="<?php echo($nombre) ?>">
						</div>
						<div class="form-group col-md-6">
							<label>Creditos:</label>
							<input type="text" name="txtCreditos"  class="form-control input-md" value="<?php echo($creditos) ?>">
						</div>

						<div class="form-group col-md-6">
							<label>Estado:</label>
							<select name="cbEstado" id="" class="form-control">
								<option value="1">Activo</option>
								<option value="0">Inactivo</option>
							</select>
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
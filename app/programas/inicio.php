<?php 
	
	include("../vistasgenerales/headhtml.php");
	include("../vistasgenerales/cabacera.php");
	include("../vistasgenerales/menulateral.php");
?>
<div class="content-wrapper" id="contentm">
	<section class="content-header">
		<h1 class="">Gestión de Programas de Estudios</h1>
	</section>
	<section class="content">
		<div class="row col-md-12">
			<h1 class="pull-right"><a href="profesionnuevo.php" class="btn btn-primary">Programa nuevo</a></h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table id="dtable" class="table table-bordered table-striped dataTable">
					<thead>
						<tr>
							<th style="">ID</th>
							<th style="">Programa de Estudio</th>
							<th style="">Creditos Min</th>
							<th style="">Estado</th>
							<th style="width: 20%">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include("../../controlador/controlador.php");
							$consul="Select codigo, nombre, creditosmin, estado from programaestudios";
							$control = new Conexion();

							$resul = $control->consulta($consul); 
							while ( $row = mysqli_fetch_array($resul) ) {
								
						?>
						
							<tr role="row" class="odd">
								<td><?php echo($row['codigo']); ?></td>
								<td><?php echo($row['nombre']); ?></td>
								<td><?php echo($row['creditosmin']); ?></td>
								<td><?php 
									if($row['estado'] == "1"){
										echo("Activo");
									}else{
										echo("Inactivo");
									}

									?></td>
								<td>
									<a href="editar.php?codigo=<?php echo $row['codigo']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar
									</a>
									<a href="eliminar.php?codigo=<?php echo $row['codigo']?>" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar
									</a>
					            </td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<script>
					
				</script>
			</div>
		</div>




		
	</section>
</div>


<?php
	include("../vistasgenerales/piepagina.php");
 ?>
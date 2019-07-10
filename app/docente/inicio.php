<?php 
	include("../vistasgenerales/headhtml.php");
	include("../vistasgenerales/cabacera.php");
	include("../vistasgenerales/menulateral.php");
?>
<div class="content-wrapper" id="contentm">
	<section class="content-header">
		<h1 class="">Gestión de Docentes</h1>
	</section>
	<section class="content">
		<div class="row col-md-12">
			<h1 class="pull-right"><a href="nuevo.php" class="btn btn-primary">Nuevo Docente</a></h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table id="dtable" class="table table-bordered table-striped dataTable">
					<thead>
						<tr>
							<th style="">ID</th>
							<th style="">Paterno</th>
							<th style="">Materno</th>
							<th style="">Nombres</th>
							<th style="">DNI</th>
							<th style="">Genero</th>
							<th style="width: 15%">Profesión</th>
							<th style="width: 15%">Programa</th>							
							<th style="width: 20%">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							include("../../controlador/controlador.php");
							$control = new Conexion();

							$consul="select d.id, d.paterno, d.materno, d.nombres, d.dni, d.genero, f.nombre as profesion, p.nombre as programa from docentes d inner join programaestudios p ON d.programaestudios_codigo=p.codigo inner join profesiones f ON  d.profesiones_id=f.id where d.estado=1;";
							
							$resul = $control->consulta($consul); 
							while ( $row = mysqli_fetch_array($resul) ) {
								
						?>
						
							<tr role="row" class="odd">
								<td><?php echo($row['id']); ?></td>
								<td><?php echo($row['paterno']); ?></td>
								<td><?php echo($row['materno']); ?></td>
								<td><?php echo($row['nombres']); ?></td>
								<td><?php echo($row['dni']); ?></td>
								<td><?php echo($row['genero']); ?></td>
								<td><?php echo($row['profesion']); ?></td>
								<td><?php echo($row['programa']); ?></td>
								<td>
									<a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar
									</a>
									<a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar
									</a>
					            </td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<script>
					$(document).ready(function() {
						$('#dt{{$nametablek}}').DataTable();
					});
				</script>
			</div>
		</div>




		
	</section>
</div>


<?php
	include("../vistasgenerales/piepagina.php");
 ?>
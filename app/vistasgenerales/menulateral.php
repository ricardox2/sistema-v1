<aside class="main-sidebar">
	<section class="sidebar" >
		<div class="" style="color: #eee; text-align: center;background-color: #2d393e;margin: 5px 5px;padding: 5px 5px;word-wrap: break-word;">
			<div>ROL: <?php echo($_SESSION['userrol']) ?></div>
			<div>Usuario: <?php echo($_SESSION['username']) ?></div>
			<div>DNI: <?php echo($_SESSION['useremail']) ?></div>
		</div>
		<!-- search form (Optional) -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Buscar..."/>
			  <span class="input-group-btn">
				<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
			  </span>
			</div>
		</form>
		<!-- /.search form -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" style="background-color: #2d393e;">
			
			<!-- Optionally, you can add icons to the links -->
			<li class="active"><a href="../home.php"><i class='fa fa-home'></i> <span>INICIO</span></a></li>

			<li class="treeview">
				<a href="#"><i class='fa fa-edit'></i> <span> Registro de Alumnos</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="" class=""> Registrar</a></li>
					<li><a href="#" class=""> Historial</a></li>
				</ul>
			</li>	
			<li><a href="#"><i class='fa fa-file-text-o'></i> <span>Alumnos</span></a></li>
			<li><a href="#"><i class='fa fa-newspaper-o'></i> <span>Docentes</span></a></li>
			<li><a href="#"><i class='fa fa-trash-o'></i> <span>Unidades Didacticas</span></a></li>
			<li><a href="#"><i class='fa fa-clipboard'></i> <span>Itinerarios</span></a></li>
			<li><a href="#"><i class='fa fa-search'></i> <span>Programas de estudio</span></a></li>
			<li><a href="#"><i class='fa fa-link'></i> <span></span></a></li>

			<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form2').submit();"><i class='ion ion-android-exit'></i> <span>Cerrar Sesión</span></a></li>
			
			
		</ul>
	</section>
</aside>
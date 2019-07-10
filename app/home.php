<?php

	session_start();
	if(!isset($_SESSION["username"])){
		header("location: inicio/acceso.php");
		return;
	}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Sistema de Gestión Académica</title>
	<link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/bootstrap/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/jpg" href="../public/img/egb-logo100.png">
	<link rel="stylesheet" href="../public/css/estilo.css">
	<link rel="stylesheet" href="../public/css/adminlte.css">

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<img src="../public/img/egb-logo100.png" alt="iegb">
				</div>
				<div class="col-md-10 text-center">
					<h2>Instituto de Educación Superior Tecnológico Público</h2>
					<h2>"ELEAZAR GUZMÁN BARRÓN"</h2>	
				</div>
			</div>
		</div>	
	</header><!-- /header -->
	


<aside class="main-sidebar">
	<section class="sidebar" >
		<div class="" style="color: #eee; text-align: center;background-color: #2d393e;margin: 5px 5px;padding: 5px 5px;word-wrap: break-word;">
			<div>ROL: <?php echo($_SESSION['userrol']); ?></div>
			<div>Usuario: <?php echo($_SESSION['username']); ?></div>
			<div>Email: <?php echo($_SESSION['useremail']); ?></div>
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
			<li class="active"><a href="home.php"><i class='fa fa-home'></i> <span>INICIO</span></a></li>

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

			<li><a href="inicio/logout.php"><i class='ion ion-android-exit'></i> <span>Cerrar Sesión</span></a></li>
			
			
		</ul>
	</section>
</aside>

<div class="content-wrapper" id="contentm">
<section class="content-header">
	<h2 class="">Sistema de Gestión Académica</h2>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
		  <div class="info-box kenmkre" href="">
			<span class="info-box-icon bg-aqua"><i class="fa fa-id-card-o"></i></span>
			<div class="info-box-content">
			  <span class="info-box-text"><b>Registro de</b></span>
			  <span class="info-box-text"><b>Alumnos</b></span>
			</div>
		  </div>
		</div>
			
		<div class="col-md-3 col-sm-6 col-xs-12">
		  <div class="info-box kenmkrd" href="">
			<span class="info-box-icon bg-green"><i class="fa fa-edit"></i></span>
			<div class="info-box-content">
			  <span class="info-box-text"><b>Matricular</b></span>
			  <span class="info-box-text"><b>Alumnos</b></span>
			  <span data-toggle="tooltip" title="" class="badge bg-light-blue"></span>
			</div>
		  </div>
		</div>


		<div class="col-md-3 col-sm-6 col-xs-12">
		  <div class="info-box kenmked" href="">
			<span class="info-box-icon bg-red"><i class="fa fa-calculator"></i></span>
			<div class="info-box-content">
			  <span class="info-box-text"><b>Registrar</b></span>
			  <span class="info-box-text"><b>Evaluaciones</b></span>
			  <span data-toggle="tooltip" title="" class="badge bg-light-blue"></span>
			</div>
		  </div>
		</div>
		

	</div>

	<div class="row">
		<div style="margin-left: 12px; ">
			<h3 class="">Otras Opciones</h3>
		</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box kenmk5987" href="">
				<span class="info-box-icon bg-navy disabled color-palette"><i class=""></i></span>
				<div class="info-box-content">
				  <span class="info-box-text"><b>Reportes</b></span>
				</div>
			  </div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box kenmkbusq5987" href="">
				<span class="info-box-icon bg-purple disabled color-palette"><i class="ion ion-search"></i></span>
				<div class="info-box-content">
				  <span class="info-box-text"><b>Buscar</b></span>
				  <span class="info-box-text"><b>Alumnos</b></span>
				</div>
			  </div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box kenmkhist5987" href="">
				<span class="info-box-icon bg-teal disabled color-palette"><i class="ion ion-ios-albums"></i></span>
				<div class="info-box-content">
				  <span class="info-box-text"><b>Boleta de</b></span>
				  <span class="info-box-text"><b>Notas</b></span>
				</div>
			  </div>
			</div>
			
		</div>
	<div class="row">
		<div style="margin-left: 12px; ">
			<h3 class="">Administración del sistema</h3>
		</div>
			<div class="col-lg-3 col-xs-6">
			  <div class="small-box bg-red" href="">
				<div class="inner">
				  <h3><?php echo "123"?></h3>
				  <h3 style="font-size: 25px;">Alumnos</h3>
				  <p></p>
				</div>
				<div class="icon">
				  <i class="ion ion-android-document"></i>
				</div>
				<a href="#" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>

			<div class="col-lg-3 col-xs-6">
			  <div class="small-box bg-aqua" href="">
				<div class="inner">
				  <h3><?php echo "123"?></h3>
				  <h3 style="font-size: 25px;">Docentes <sup style="font-size: 20px">25</sup></h3>
				  <p></p>
				</div>
				<div class="icon">
				  <i class="ion ion-ios-home-outline"></i>
				</div>
				<a href="docente/inicio.php" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>

			<div class="col-lg-3 col-xs-6">
			  <div class="small-box bg-green" href="">
				<div class="inner">
				  <h3><?php echo "123"?></h3>
				  <h3 style="font-size: 25px;">Unidad Didactica <sup style="font-size: 20px"></sup></h3>
				  <p></p>
				</div>
				<div class="icon">
				  <i class="ion ion-android-menu"></i>
				</div>
				<a href="#" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<div class="col-lg-3 col-xs-6">
			  <div class="small-box bg-green " href="">
				<div class="inner">
				  <h3><?php echo "123"?></h3>
				  <h3 style="font-size: 25px;">Modulos<sup style="font-size: 20px"></sup></h3>
				  <p></p>
				</div>
				<div class="icon">
				  <i class="ion ion-android-folder-open"></i>
				</div>
				<a href="#" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<div class="col-lg-3 col-xs-6">
			  <div class="small-box bg-green " href="">
				<div class="inner">
				  <h3><?php echo "123"?></h3>
				  <h3 style="font-size: 25px;">Programas <sup style="font-size: 20px"></sup></h3>
				  <p></p>
				</div>
				<div class="icon">
				  <i class="ion ion-android-person"></i>
				</div>
				<a href="programas/inicio.php" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			<div class="col-lg-3 col-xs-6">
			  <div class="small-box bg-green " href="">
				<div class="inner">
					<h3><i class="fa fa-user-md"></i></h3>
					<h3 style="font-size: 25px;">Profesiones <sup style="font-size: 20px"></sup></h3>
					<p></p>
				</div>
				<div class="icon">
				  <i class="ion ion-android-person"></i>
				</div>
				<a href="12/profesioninicio.php" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>

			<div class="col-lg-3 col-xs-6">
			  <div class="small-box bg-green " href="">
				<div class="inner">
				  <h3><?php echo "123"?></h3>
				  <h3 style="font-size: 25px;">Usuarios <sup style="font-size: 20px"></sup></h3>
				  <p></p>
				</div>
				<div class="icon">
				  <i class="ion ion-ios-personadd"></i>
				</div>
				<a href="#" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>

		
	</div>
</section>
</div>
</div>
<footer class="main-footer" style="text-align: center;">
	<strong>Copyright &copy; 2019 <a href="http://www.iegb.edu.pe"></a> - Sistema de Gestión Académica - IESTP Eleazar Guzmán Barrón - Huaraz</strong>
</footer>

</div>

	<script src="../public/bootstrap/js/jquery-1.12.4.min.js"></script>
	<script src="../public/bootstrap/js/bootstrap.min.js"></script>
	<script src="../public/js/bootstrap-toggle.min.js"></script>
	<script src="../public/js/app.js"></script>
	<script src="../public/js/javasc.js"></script>

</body>
</html>


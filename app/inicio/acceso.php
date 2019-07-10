<?php 
	session_start(); //inicia sesion
	session_destroy(); // elimina posibles sesiones

	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Sistema de Gestión Académica</title>
	<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../public/bootstrap/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/jpg" href="../../public/img/egb-logo100.png">
	<link rel="stylesheet" href="../../public/css/estilo.css">
	<link rel="stylesheet" href="../../public/css/adminlte.css">

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<img src="../../public/img/egb-logo100.png" alt="iegb">
				</div>
				<div class="col-md-10 text-center">
					<h3>Instituto de Educación Superior Tecnológico Público</h3>
					<h3>"ELEAZAR GUZMÁN BARRÓN"</h3>	
				</div>
			</div>
		</div>	
	</header><!-- /header -->
	
	<div id="app" v-cloak>
		<div class="login-box">
			<div class="login-logo" style="padding-bottom: 0px;margin-bottom: 10px;">
				<h5 style="color: rgb(238, 238, 238);font-size: 21px;margin-bottom: 0px;padding-bottom: 0px;">IESTP Eleazar Guzmán Barrón - Huaraz</h5>
			</div>
			<?php if (isset($_GET['fallo'])) { ?>
			<div class="alert alert-danger">
				<strong>Whops!</strong> Tiene problemas para el acceso.<br>
				<ul>
					<li>Usuario o contraseña incorrectos</li>
				</ul>
			</div>
			<?php } ?>

			<div class="login-box-body">
				<p class="login-box-msg">Inicio de Sessión</p>
				<form action="../../controlador/login.php" method="post">
					
					<div class="form-group has-feedback">
						<input type="email" class="form-control" placeholder="Ingrese su email" name="email"/>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" name="password"/>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sessión</button><br>
						</div>
						<div class="col-xs-12">
							<a href="" class="btn btn-primary btn-block btn-flat">Regresar</a>
						</div><!-- /.col -->
					</div>
				</form>				
			</div><!-- /.login-box-body -->
		</div><!-- /.login-box -->
	</div>

<?php
	include("../vistasgenerales/piepagina.php");
 ?>
	
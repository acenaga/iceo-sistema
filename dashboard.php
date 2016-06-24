<?php
	include 'include/head.php';
	include 'include/botones_modulos.php';
	include 'include/header_backend.php';
	include 'include/seguridad.php';
	session_start();
	echo administrador();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<?php
	echo cabecera();
?>

	<title>Prueba</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php echo header_backend(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 modulos">
			<?php echo modulos(); ?>
		</div>
		<div class="col-md-9">
			<h4>
				Acciones disponibles.
			</h4>
			<div class="tabbable" id="tabs-848305">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-973756" data-toggle="tab">Section 1</a>
					</li>
					<li>
						<a href="#panel-33917" data-toggle="tab">Section 2</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-973756">
						<form role="form">
							<div class="form-group">
								<label for="exampleInputEmail1">
									Email address
								</label>
								<input type="email" class="form-control" id="exampleInputEmail1" />
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">
									Password
								</label>
								<input type="password" class="form-control" id="exampleInputPassword1" />
							</div>
							<div class="form-group">
								<label for="exampleInputFile">
									File input
								</label>
								<input type="file" id="exampleInputFile" />
								<p class="help-block">
									Example block-level help text here.
								</p>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" /> Check me out
								</label>
							</div> 
							<button type="submit" class="btn btn-default">
								Submit
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-33917">
						<p>
							Howdy, I'm in Section 2.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">


		</div>
	</div>
</div>
</body>
</html>
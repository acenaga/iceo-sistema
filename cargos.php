<?php
	include 'include/head.php';
	include 'include/botones_modulos.php';
	include 'include/header_backend.php';
	include 'include/seguridad.php';
	echo administrador();

	require('system/conexion.php');
	$con = new Conexion();

	$cargos = $con->get_cargos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
    echo cabecera();
?>

	<title>Modulo Cargos</title>
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
		<div id="resultado"></div>
			<h4>
				Acciones disponibles.
			</h4>
			<div class="tabbable" id="tabs-848305">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-1" data-toggle="tab">Agregar Cargos</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Modificar Cargos</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Listar Cargos</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<form role="form">
							<div class="form-group">
								<label>
									Nombre del cargo:
								</label>
								<input id="nombre_cargo" type="text" class="form-control" />
							</div>
							<button id="registrar_cargo" class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-2">
						<form role="form">
							<div class="form-group">
								<label>
									Cargo:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($cargos as $cargo): ?>
										<option value="<?php echo $cargo['0'] ?>"><?php echo $cargo['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Nombre del Cargo:
								</label>
								<input id="nombre_cargo" type="text" class="form-control" />
							</div>
							<button type="submit" class="btn btn-default">
								Modificar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-3">
						<form role="form">
							<div class="form-group">
								<label>
									Listar Todos los cargos
								</label>
							</div>
							<button type="submit" class="btn btn-default">
								Listar
							</button>
						</form>
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
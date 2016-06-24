<?php
	include 'include/head.php';
	include 'include/botones_modulos.php';
	include 'include/header_backend.php';
	include 'include/seguridad.php';
	echo administrador();

	require('system/conexion.php');
	$con = new Conexion();

	$proyectos = $con->get_proyectos();

	$empresas = $con->get_empresas();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
    echo cabecera();
?>

	<title>Modulo Proyectos en Curso</title>
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
						<a href="#panel-1" data-toggle="tab">Iniciar Proyecto</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Modificar Proyecto</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Listar Proyectos</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<form role="form">
							<div class="form-group">
								<label>
									Proyecto a iniciar:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($proyectos as $proyecto): ?>
										<option value="<?php echo $proyecto['0'] ?>"><?php echo $proyecto['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Empresa involucrada:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($empresas as $empresas): ?>
										<option value="<?php echo $empresas['2'] ?>"><?php echo $empresas['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Facilitador:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default">
									Anadir facilitador
								</button>
							</div>
							<div class="form-group">
								<label>
									Cliente:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default">
									Anadir cliente
								</button>
							</div>
							<div class="form-group">
								<label>
									Orden de Compra:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Fecha de inicio:
								</label>
								<input id="fecha_inicio" type="date" class="form-control" ></input>
							</div>
							<div class="form-group">
								<label >
									Fecha de Finalizacion:
								</label>
								<input id="fecha_fin" type="date" class="form-control" ></input>
							</div>
							<button type="submit" class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-2">
						<form role="form">
							<div class="form-group">
								<label>
									Proyecto en curso a Modificar:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Proyecto a iniciar:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Empresa involucrada:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Facilitador:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default">
									Anadir facilitador
								</button>
							</div>
							<div class="form-group">
								<label>
									Cliente:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default">
									Anadir cliente
								</button>
							</div>
							<div class="form-group">
								<label>
									Orden de Compra:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Fecha de inicio:
								</label>
								<input id="fecha_inicio" type="date" class="form-control" ></input>
							</div>
							<div class="form-group">
								<label >
									Fecha de Finalizacion:
								</label>
								<input id="fecha_fin" type="date" class="form-control" ></input>
							</div>
							<button type="submit" class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-3">
						<form role="form">
							<div class="form-group">
								<label>
									Listar todos los proyectos en curso
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
<?php
	include 'include/head.php';
	include 'include/botones_modulos.php';
	include 'include/header_backend.php';
	include 'include/seguridad.php';
	echo administrador();

	require('system/conexion.php');
	$con = new Conexion();

	$objetivos = $con->get_objetivos();
	$proyectos = $con->get_proyectos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
    echo cabecera();
?>

	<title>Modulo Proyectos</title>
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
						<a href="#panel-1" data-toggle="tab">Agregar Proyectos</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Modificar Proyectos</a>
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
									Titulo del Proyecto:
								</label>
								<input id="titulo_proyecto" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Tipo de Objetivo:
								</label>
								<select class="form-control" name="" id="id_tipos">
									<?php foreach ($objetivos as $objetivo): ?>
										<option value="<?php echo $objetivo['0'] ?>"><?php echo $objetivo['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Descripcion del objetivo:
								</label>
								<textarea id="descripcion" type="text" class="form-control" rows="5"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default">
									Anadir Objetivo
								</button>
							</div>
							<button id="registrar_proyecto" class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-2">
						<form role="form">
							<div class="form-group">
								<label>
									Proyecto a modificar:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($proyectos as $proyecto): ?>
										<option value="<?php echo $proyecto['0'] ?>"><?php echo $proyecto['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Estado del proyecto
								</label>
								<select class="form-control" name="" id="">
									<option value="1">Activo</option>
									<option value="2">Inactivo</option>
								</select>
							</div>
							<div class="form-group">
								<label>
									Titulo del Proyecto:
								</label>
								<input id="titulo_proyecto" type="text" class="form-control" />
							</div>


							<!-- anadir magia negra para listar todos los objetivos -->


							<div class="form-group">
								<label>
									Tipo de Objetivo:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Descripcion del objetivo:
								</label>
								<textarea id="descripcion" type="text" class="form-control" rows="5"></textarea>
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
									Listar todos los proyectos
								</label>
							</div>
							<button id="" class="btn btn-default">
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
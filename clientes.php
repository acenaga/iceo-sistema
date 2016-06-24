<?php
	include 'include/head.php';
	include 'include/botones_modulos.php';
	include 'include/header_backend.php';
	include 'include/seguridad.php';
	echo administrador();

	require('system/conexion.php');

	$con = new Conexion();

	$nacionalidades = $con->get_nacionalidades();

	$empresas = $con->get_empresas();

	$cargos = $con->get_cargos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
    echo cabecera();
?>

	<title>Modulo Cliente</title>
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
						<a href="#panel-1" data-toggle="tab">Agregar Cliente</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Modificar Cliente</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Listar clientes</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<form role="form">
							<div class="form-group">
								<label>
									Empresa:
								</label>
								<select class="form-control" name="" id="rif_empresa">
									<?php foreach ($empresas as $empresa): ?>
										<option value="<?php echo $empresa['2'] ?>"><?php echo $empresa['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Cargo:
								</label>
								<select class="form-control" name="" id="id_cargo">
									<?php foreach ($cargos as $cargo): ?>
										<option value="<?php echo $cargo['0'] ?>"><?php echo $cargo['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Primer Nombre:
								</label>
								<input id="nombre" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Segundo Nombre:
								</label>
								<input id="segundo_nombre" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Primer Apellido:
								</label>
								<input id="apellido" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Segundo Apellido:
								</label>
								<input id="segundo_apellido" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Nacionalidad:
								</label>
								<select class="form-control" name="" id="id_nacionalidad">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Cedula de Identidad:
								</label>
								<input id="cedula" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Fecha de Nacimiento:
								</label>
								<input id="fecha_nacimiento" type="date" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Usuario:
								</label>
								<input id="usuario" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Password:
								</label>
								<input id="password" type="password" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Repita su password:
								</label>
								<input type="password" class="form-control" />
							</div>
							<div class="form-group">
								<label for="exampleInputFile">
									Ingrese su foto para el perfil
								</label>
								<input type="file" id="exampleInputFile" />
								<p class="help-block">
									La fotografia no debe tener un tamanio mayor a 1,2 Mb.
								</p>
							</div>
							<div class="form-group">
								<label >
									Ingrese su correo electronico:
								</label>
								<input id="correo_usuario" type="email" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Repita su correo electronico:
								</label>
								<input type="email" class="form-control" />
							</div>
							<button id="registrar_cliente" class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-2">
						<form role="form">
							<div class="form-group">
								<label>
									Cliente Modificar:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Estatus:
								</label>
								<select class="form-control" name="" id="">
									<option value="1">Activo</option>
									<option value="2">Inactivo</option>
								</select>
							</div>
							<div class="form-group">
								<label>
									Empresa:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Cargo:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Primer Nombre:
								</label>
								<input id="primer_nombre" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Segundo Nombre:
								</label>
								<input id="segundo_nombre" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Primer Apellido:
								</label>
								<input id="primer_apellido" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Segundo Apellido:
								</label>
								<input id="segundo_apellido" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Nacionalidad:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Cedula de Identidad:
								</label>
								<input id="cedula" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Fecha de Nacimiento:
								</label>
								<input type="date" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Usuario:
								</label>
								<input type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Password:
								</label>
								<input type="password" class="form-control" />
							</div>
							<div class="form-group">
								<label for="exampleInputFile">
									Ingrese su foto para el perfil
								</label>
								<input type="file" id="exampleInputFile" />
								<p class="help-block">
									La fotografia no debe tener un tamanio mayor a 1,2 Mb.
								</p>
							</div>
							<div class="form-group">
								<label >
									Ingrese su correo electronico:
								</label>
								<input type="email" class="form-control" />
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
									Listar Todos los Clientes
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
<?php
	include 'include/head.php';
	include 'include/botones_modulos.php';
	include 'include/header_backend.php';
	include 'include/seguridad.php';
	echo administrador();

	require('system/conexion.php');
	$con = new Conexion();

	$nacionalidades = $con->get_nacionalidades();

	$tipos_estudios = $con->get_tipos_estudios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
    echo cabecera();
?>

	<title>Modulo Facilitadores</title>
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
			<div id="resultado">

  			</div>
			<h4>
				Acciones disponibles.
			</h4>
			<div class="tabbable" id="tabs-848305">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-1" data-toggle="tab">Agregar Facilitador</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Modificar Facilitador</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Listar Facilitadores</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<form role="form">
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
								<select class="form-control" id="id_nacionalidad">
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
								<input type="file" id="" />
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
							<div class="form-group">
								<label >
									Ingrese su direccion de habitacion:
								</label>
								<input id="direccion" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Ingrese su numero de telefono:
								</label>
								<input id="telefono" type="tel" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Ingrese su RIF personal:
								</label>
								<input id="rif_facilitador" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Ingrese sus Estudios de pregrado, post grado y complementarios:
								</label>
							</div>
							<div class="form-group">
								<label>
									Tipo de Estudio:
								</label>
								<select id="id_tipo"class="form-control" name="" id="">
									<?php foreach ($tipos_estudios as $tipo_estudio): ?>
										<option value="<?php echo $tipo_estudio['0'] ?>"><?php echo $tipo_estudio['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Nombre del Instituto:
								</label>
								<input id="instituto" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Titulo Obtenido:
								</label>
								<input id="titulo" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Anio de Egreso:
								</label>
								<input id="anio" type="text" class="form-control" />
							</div>
							<button type="submit" class="btn btn-default">
								anadir estudio
							</button>
							<div class="form-group">
								<label >
									Ingrese su Experiencia laboral:
								</label>
							</div>
							<div class="form-group">
								<label >
									Nombre de la Empresa:
								</label>
								<input id="empresa" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Cargo Desempenado:
								</label>
								<input id="cargo_desempenado" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Tiempo(en meses):
								</label>
								<input id="tiempo" type="number" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Funciones desempenadas:
								</label>
								<textarea id="funciones" class="form-control" rows="5"></textarea>
							</div>
							<div class="form-group">
								<label >
									Nombre del jefe inmediato:
								</label>
								<input id="jefe_inmediato" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default">
									Anadir cargo
								</button>
							</div>
							<button id="registrar_facilitador"class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-2">
						<form role="form">
							<div class="form-group">
								<label>
									Seleccione facilitador:
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
							<div class="form-group">
								<label >
									Ingrese su direccion de habitacion:
								</label>
								<input id="direccion" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Ingrese su numero de telefono:
								</label>
								<input id="telefono" type="tel" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Ingrese su RIF personal:
								</label>
								<input id="rif_facilitador" type="text" class="form-control" />
							</div>


							<!-- Insertar magia negra para listar todos los estudios -->


							<div class="form-group">
								<label >
									Ingrese sus Estudios de pregrado, post grado y complementarios:
								</label>
							</div>
							<div class="form-group">
								<label>
									Tipo de Estudio:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Nombre del Instituto:
								</label>
								<input id="instituo" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Titulo Obtenido:
								</label>
								<input id="titulo" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Anio de Egreso:
								</label>
								<input id="anio" type="text" class="form-control" />
							</div>


							<!-- insertar magia negra para listar todas las experiencias laborales -->


							<div class="form-group">
								<label >
									Ingrese su Experiencia laboral:
								</label>
							</div>
							<div class="form-group">
								<label >
									Nombre de la Empresa:
								</label>
								<input id="empresa" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Cargo Desempenado:
								</label>
								<input id="cargo_desempenado" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Tiempo(en meses):
								</label>
								<input id="tiempo" type="number" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Funciones desempenadas:
								</label>
								<textarea id="funciones" type="text" class="form-control" rows="5"></textarea>
							</div>
							<div class="form-group">
								<label >
									Nombre del jefe inmediato:
								</label>
								<input id="jefe_inmediato" type="number" class="form-control" />
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
									Listar Todos los Facilitadores
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
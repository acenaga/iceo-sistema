<?php
session_start();
   if (!isset($_SESSION['usuario'])or(($_SESSION['rol']!=2)and($_SESSION['rol']!=1))) {
   header('Location: index.php?permiso=true');
   };;

	require('system/conexion.php');
	$con = new Conexion();

	$nacionalidades = $con->get_nacionalidades();
	$empresas = $con->get_empresas();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php

      include 'include/head.php';
      include 'include/botones_modulos.php';
      include 'include/header_backend.php';
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
		<div id="resultado"></div>
			<h4>
				Acciones disponibles.
			</h4>
			<div class="tabbable" id="tabs-848305">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-1" data-toggle="tab">Agregar Empresa</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Modificar Empresa</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Listar Empresa</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<form role="form">
							<div class="form-group">
								<label>
									Nombre de la Empresa:
								</label>
								<input id="nombre_empresa" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									RIF Empresa:
								</label>
								<input id="rif_empresa" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Direccion Fiscal:
								</label>
								<input id="direccion_fiscal" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Cantidad de Trabajadores
								</label>
								<input id="cantidad_trabajadores" type="number" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Nombre del Contacto Principal:
								</label>
								<input id="nombre_contacto" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Apellido del Contacto Principal:
								</label>
								<input id="apellido_contacto" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Telefono del Contacto principal:
								</label>
								<input id="telefono_contacto" type="tel" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Correo Electronico Contacto Principal:
								</label>
								<input id="correo_contacto" type="email" class="form-control" />
							</div>
							<button id="registrar_empresa" class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-2">
						<form role="form">
							<div class="form-group">
								<label>
									Empresa a modificar:
								</label>
								<select class="form-control" name="" id="id_empresa">
									<?php foreach ($empresas as $empresa): ?>
										<option value="<?php echo $empresa['0'] ?>"><?php echo $empresa['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Estado de la Empresa
								</label>
								<select class="form-control" name="" id="">
									<option value="1">Activo</option>
									<option value="2">Inactivo</option>
								</select>
							</div>
							<div class="form-group">
								<label>
									Nombre de la Empresa:
								</label>
								<input id="nombre_empresa1" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									RIF Empresa:
								</label>
								<input id="rif_empresa1" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Direccion Fiscal:
								</label>
								<input id="direccion_fiscal1" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label>
									Cantidad de Trabajadores
								</label>
								<input id="cantidad_trabajadores1" type="number" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Nombre del Contacto Principal:
								</label>
								<input id="nombre_contacto1" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Apellido del Contacto Principal:
								</label>
								<input id="apellido_contacto1" type="text" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Telefono del Contacto principal:
								</label>
								<input id="telefono_contacto1" type="tel" class="form-control" />
							</div>
							<div class="form-group">
								<label >
									Correo Electronico Contacto Principal:
								</label>
								<input id="correo_contacto1" type="email" class="form-control" />
							</div>

							<button id="modificar_empresa" class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-3">
						<form role="form">
							<button type="submit" class="btn btn-default">
								Listar empresas
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
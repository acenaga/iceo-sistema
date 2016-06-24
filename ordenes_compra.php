<?php
	include 'include/head.php';
	include 'include/botones_modulos.php';
	include 'include/header_backend.php';
	include 'include/seguridad.php';
	echo administrador();

	require('system/conexion.php');
	$con = new Conexion();

	$empresas = $con->get_empresas();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
    echo cabecera();
?>

	<title>Modulo orden de compras</title>
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
						<a href="#panel-1" data-toggle="tab">Agregar orden de Compra</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">Modificar orden de Compra</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Listar ordenes de Compra</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						<form role="form">
							<div class="form-group">
								<label>
									Nombre de la Empresa:
								</label>
								<select class="form-control" id="rif_empresa">
									<?php foreach ($empresas as $empresa): ?>
										<option value="<?php echo $empresa['2'] ?>"><?php echo $empresa['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Numero de orden de compra:
								</label>
								<input id="orden_compra" type="text" class="form-control">
							</div>
							<button id="registrar_orden_compra" class="btn btn-default">
								Registrar
							</button>
						</form>
					</div>
					<div class="tab-pane" id="panel-2">
						<form role="form">
						<div class="form-group">
								<label>
									Orden de compra a modificar:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label>
									Nombre de la Empresa:
								</label>
								<select class="form-control" name="" id="">
									<?php foreach ($nacionalidades as $nacionalidad): ?>
										<option value="<?php echo $nacionalidad['0'] ?>"><?php echo $nacionalidad['1'] ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label >
									Numero de orden de compra:
								</label>
								<input id="descripcion" type="text" class="form-control">
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
									Listar todass las ordenes de compra
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
<?php
session_start();
	require('conexion.php');
	if (isset($_POST)) {

		foreach ($_POST as $key => $value) {
			$$key = $value;

		};
		$con = new conexion();
		$empresas=$con->get_empresa($id_empresa);

		foreach ($empresas as $empresa) {
			$nombre_empresa=$empresa['1'];
			$rif_empresa=$empresa['2'];
			$direccion_fiscal=$empresa['3'];
			$cantidad_trabajadores=$empresa['4'];
			$estatus=$empresa['5'];

			$nombre_contacto=$empresa['6'];
			$apellido_contacto=$empresa['7'];
			$telefono_contacto=$empresa['8'];
			$correo_contacto=$empresa['9'];



			echo "<script>document.getElementById('nombre_empresa1').value ='$nombre_empresa';</script>";
			echo "<script>document.getElementById('rif_empresa1').value ='$rif_empresa';</script>";
			echo "<script>document.getElementById('direccion_fiscal1').value ='$direccion_fiscal';</script>";
			echo "<script>document.getElementById('cantidad_trabajadores1').value ='$cantidad_trabajadores';</script>";
			///////////////////////
			echo "<script>document.getElementById('nombre_contacto1').value ='$nombre_contacto';</script>";
			echo "<script>document.getElementById('apellido_contacto1').value ='$apellido_contacto';</script>";
			echo "<script>document.getElementById('telefono_contacto1').value ='$telefono_contacto';</script>";
			echo "<script>document.getElementById('correo_contacto1').value ='$correo_contacto';</script>";
		};
		}




?>
<?php
session_start();
	require('conexion.php');
	if (isset($_POST)) {

		foreach ($_POST as $key => $value) {
			$$key = $value;

		}

		if ($nombre_empresa == "" or	$rif_empresa == "" or	$direccion_fiscal == "" or $cantidad_trabajadores == "" or $nombre_contacto == "" or $apellido_contacto == "" or $telefono_contacto == "" or $correo_contacto == "") {

			echo "Se enviaron campos en blanco, verifique por favor  ";
			foreach ($_POST as $key => $value) {
				echo $$key = $value."<br>";
			}

		}else{
			$con = new conexion();
			$con->modificar_empresa($id_empresa, $nombre_empresa, $rif_empresa, $direccion_fiscal, $cantidad_trabajadores,$estatus);

			$con->modificar_contacto_principal($id_contacto, $nombre_contacto, $apellido_contacto, $telefono_contacto, $correo_contacto, $rif_empresa);


			echo "Empresa modificada con exito";

			}









		}




?>
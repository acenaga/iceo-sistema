<?php
session_start();
	require('conexion.php');
	if (isset($_POST)) {

		foreach ($_POST as $key => $value) {
			$$key = $value;

		}

		if ($nombre == "" or	$segundo_nombre == "" or	$apellido == "" or $segundo_apellido == "" or $cedula == "" or $fecha_nacimiento == "" or $usuario == "" or $password == "" or $id_nacionalidad == "" or $correo_usuario == "" ) {

			echo "Se enviaron campos en blanco, verifique por favor  ";
			foreach ($_POST as $key => $value) {
				echo $$key = $value."<br>";
			}

		}else{
			$con = new conexion();
			$con->registrar_usuario($id_user, $nombre, $segundo_nombre, $apellido, $segundo_apellido, $cedula, $fecha_nacimiento, $usuario, $password, $foto_perfil, $id_nacionalidad, $correo_usuario);

			$con->registrar_cliente($id_cliente, $id_cargo, $rif_empresa, $id_proyecto_curso, $cedula);

			

			echo "Cliente registrado con exito";





		}



	}
?>

<?php
session_start();
	require('conexion.php');
	if (isset($_POST)) {

		foreach ($_POST as $key => $value) {
			$$key = $value;

		}

		if ($nombre == "" or	$segundo_nombre == "" or	$apellido == "" or $segundo_apellido == "" or $cedula == "" or $fecha_nacimiento == "" or $usuario == "" or $password == "" or $id_nacionalidad == "" or $correo_usuario == "" or $direccion == "" or $telefono == "" or $rif_facilitador == "" or $direccion=="" or $telefono =="" or $rif_facilitador=="" or $instituto=="" or $titulo=="" or $anio=="" or $id_tipo =="" or $empresa =="" or $cargo_desempenado=="" or $tiempo=="" or $funciones=="" or $jefe_inmediato=="") {

			echo "Se enviaron campos en blanco, verifique por favor  ";
			foreach ($_POST as $key => $value) {
				echo $$key = $value."<br>";
			}

		}else{
			$con = new conexion();
			$con->registrar_usuario($id_user, $nombre, $segundo_nombre, $apellido, $segundo_apellido, $cedula, $fecha_nacimiento, $usuario, $password, $foto_perfil, $id_nacionalidad, $correo_usuario);

			$con->registrar_facilitador($id_facilitador, $direccion, $telefono, $rif_facilitador, $cedula, $id_proyecto_curso);

			$id_facilitadores = $con->get_facilitador_id($cedula);


			foreach ($id_facilitadores as $id_facilitador) {
			$id_facilitador[0];

			}
			$con->registrar_estudio($id_estudio, $instituto, $titulo, $anio, $id_tipo, $id_facilitador[0]);

			$con->registrar_experiencia($id_experiencia, $empresa, $cargo_desempenado, $tiempo, $funciones, $jefe_inmediato, $id_facilitador[0]);



			echo "Facilitador registrado con exito";





		}



	}
?>




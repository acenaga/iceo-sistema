<?php
session_start();
	require('conexion.php');
	if (isset($_POST)) {

		foreach ($_POST as $key => $value) {
			$$key = $value;

		}

		if ($titulo_proyecto =="" or $descripcion == "") {

			echo "Se enviaron campos en blanco, verifique por favor  ";
			foreach ($_POST as $key => $value) {
				echo $$key = $value."<br>";
			}

		}else{
			$con = new conexion();
			$id_proyecto = $con->registrar_proyecto($id_proyecto, $titulo_proyecto);

			$con->registrar_objetivo_proyecto($id_objetivo, $descripcion, $id_proyecto, $id_tipos);


			echo "Proyecto registrado con exito";




		}



	}
?>
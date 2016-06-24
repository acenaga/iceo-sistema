<?php
session_start();
	require('conexion.php');
	if (isset($_POST)) {

		foreach ($_POST as $key => $value) {
			$$key = $value;

		}

		if ($nombre_cargo =="") {

			echo "Se enviaron campos en blanco, verifique por favor  ";
			foreach ($_POST as $key => $value) {
				echo $$key = $value."<br>";
			}

		}else{
			$con = new conexion();
			$con->registrar_cargo($id_cargo, $nombre_cargo);



			echo "cargo registrado con exito";

			}









		}




?>
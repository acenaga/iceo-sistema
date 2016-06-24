<?php
session_start();
	require('conexion.php');
	if (isset($_POST)) {

		foreach ($_POST as $key => $value) {
			$$key = $value;

		}

		if ($localidad == "" ) {

			echo "Se enviaron campos en blanco, verifique por favor  ";
			foreach ($_POST as $key => $value) {
				echo $$key = $value."<br>";
			}

		}else{
			$con = new conexion();
			$con->registrar_localidad($id_localidad, $localidad, $rif_empresa);



			echo "localidad registrada con exito";


			}









		}




?>
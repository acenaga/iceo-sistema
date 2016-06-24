<?php
session_start();
	require('conexion.php');
	if (isset($_POST)) {

		foreach ($_POST as $key => $value) {
			$$key = $value;

		}

		if ($orden_compra =="") {

			echo "Se enviaron campos en blanco, verifique por favor  ";
			foreach ($_POST as $key => $value) {
				echo $$key = $value."<br>";
			}

		}else{
			$con = new conexion();
			$con->registrar_orden_compra($idorden_compra, $orden_compra, $rif_empresa);



			echo "orden de compra registrada con exito";

			}









		}




?>
<?php
session_start();

	if (!isset($_POST)) {
		die("Error, no se permite el acceso directo");
	}

	require('conexion.php');

	$con = new Conexion();

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$con->login($usuario, $password);


?>
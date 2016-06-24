<?php
	function administrador(){
		return'
				
	  			if (!isset($_SESSION["usuario"])or(($_SESSION["rol"]!=2)and($_SESSION["rol"]!=1))) {
	   			header("Location: index.php?permiso=true");
	   			};
				
	   			'
	;}

 ?>
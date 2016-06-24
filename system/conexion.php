<?php
session_start();

class conexion
{
	private $db_host = "localhost";
	private $db_user = "root";
	private $db_pass = "lovecraft1";
	private $db_name = "iceo_bd";
	protected $conn;


	function __construct()
	{
		$this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

		if ($this->conn->error) {
			die("Ha ocurrido un error al establecer la conexion: error($this->conn->errno) $this->conn->error" );
		}
	}


	////funciones para los select dinamicos///

	public function get_nacionalidades()
	{
		$sql = "SELECT * FROM nacionalidad";
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$nacionalidades = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$nacionalidades[] = array($fila['id_nacionalidad'], $fila['nacionalidad']);
				}
				return $nacionalidades;
			} else {
				return FALSE;
			}
		}
	}

	public function get_tipos_estudios()
	{
		$sql = "SELECT * FROM tipos_estudios";
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$tipos_estudios = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$tipos_estudios[] = array($fila['id_tipo'], $fila['tipo_estudio']);
				}
				return $tipos_estudios;
			} else {
				return FALSE;
			}
		}
	}

	public function get_objetivos()
	{
		$sql = "SELECT * FROM tipos_objetivos";
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$obejtivos = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$obejtivos[] = array($fila['id_tipos'], $fila['objetivo']);
				}
				return $obejtivos;
			} else {
				return FALSE;
			}
		}
	}

	public function get_proyectos()
	{
		$sql = "SELECT * FROM proyecto";
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$proyectos = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$proyectos[] = array($fila['id_proyecto'], $fila['titulo_proyecto']);
				}
				return $proyectos;
			} else {
				return FALSE;
			}
		}
	}

	public function get_empresas()
	{
		$sql = "SELECT * FROM empresas";
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$empresas = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$empresas[] = array($fila['id_empresa'], $fila['nombre_empresa'],$fila['rif_empresa']);
				}
				return $empresas;
			} else {
				return FALSE;
			}
		}
	}

	public function get_empresa($id_empresa)
	{
		//$sql = "SELECT * FROM empresas where id_empresa=".$id_empresa;
		$sql="SELECT * from empresas as e inner join contactos_principales as c on c.rif_empresa=e.rif_empresa and e.id_empresa=".$id_empresa;
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$empresa = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$empresa[] = array($fila['id_empresa'], $fila['nombre_empresa'],$fila['rif_empresa'],$fila['direccion_fiscal'],$fila['cantidad_trabajadores'],$fila['estatus'], $fila['nombre_contacto'],$fila['apellido_contacto'],$fila['telefono_contacto'],$fila['correo_contacto']);
				}
				return $empresa;
			} else {
				return FALSE;
			}
		}
	}


	public function get_facilitador_id($cedula)
	{
		$sql = "SELECT * FROM facilitadores where cedula=".$cedula;
		$consulta = $this->conn->query($sql);
		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$valores = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$valores[] = array($fila['id_facilitador']);
				}
				return $valores;
			} else {
				return FALSE;
			}
		}


	}

	public function get_cargos()
	{
		$sql = "SELECT * FROM cargos";
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$cargos = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$cargos[] = array($fila['id_cargo'], $fila['nombre_cargo']);
				}
				return $cargos;
			} else {
				return FALSE;
			}
		}
	}

	public function get_contacto($rif_empresa)
	{
		$sql = "SELECT * FROM contactos_principales where rif_empresa=".$rif_empresa;
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$contactos = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$contactos[] = array($fila['id_contacto'], $fila['nombre_contacto'],$fila['apellido_contacto'],$fila['telefono_contacto'],$fila['correo_contacto']);
				}
				return $contactos;
			} else {
				return FALSE;
			}
		}
	}




	/////funcion para insertar datos de usarios////////

	public function registrar_usuario($id_user, $nombre,$segundo_nombre, $apellido, $segundo_apellido, $cedula, $fecha_nacimiento, $usuario, $password, $foto_perfil, $id_nacionalidad, $correo_usuario)
	{
		if($id_user==0){


			$sql = "INSERT INTO usuarios (id_user, nombre, segundo_nombre, apellido, segundo_apellido, cedula, fecha_nacimiento, id_rol, usuario, password, foto_perfil, estatus, id_nacionalidad, correo_usuario)
			VALUES('', '$nombre', '$segundo_nombre', '$apellido', '$segundo_apellido', $cedula, '$fecha_nacimiento', 3, '$usuario', MD5('$password'), '$foto_perfil', 1, $id_nacionalidad,'$correo_usuario' )";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	/////funcion para registros de los datos del facilitador

	public function registrar_facilitador($id_facilitador, $direccion, $telefono, $rif_facilitador, $cedula, $id_proyecto_curso)
	{
		if($id_facilitador==0){

			$sql = "INSERT INTO facilitadores (id_facilitador, direccion, telefono, rif_facilitador, cedula, id_proyecto_curso)
			VALUES('', '$direccion', '$telefono', '$rif_facilitador', $cedula, '')";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	public function registrar_cliente($id_cliente, $id_cargo, $rif_empresa, $id_proyecto_curso, $cedula)
	{
		if($id_cliente==0){

			$sql = "INSERT INTO clientes (id_cliente, id_cargo, rif_empresa, id_proyecto_curso, cedula)
			VALUES('', $id_cargo, '$rif_empresa', '', $cedula)";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	/////funcion para registros de los datos de estudio del facilitador


	public function registrar_estudio($id_estudio, $instituto, $titulo, $anio, $id_tipo, $id_facilitador)
	{
		if($id_estudio==0){

			$sql = "INSERT INTO estudios (id_estudio, instituto, titulo, anio, id_tipo, id_facilitador)
			VALUES('', '$instituto', '$titulo', $anio, $id_tipo, $id_facilitador)";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	/////funcion para registrar la experiencia laboral del facilitador
	
	public function registrar_experiencia($id_experiencia, $empresa, $cargo_desempenado, $tiempo, $funciones, $jefe_inmediato, $id_facilitador)
	{
		if($id_estudio==0){

			$sql = "INSERT INTO experiencias_laborales (id_experiencia, empresa, cargo_desempenado, tiempo, funciones, jefe_inmediato, id_facilitador)
			VALUES('', '$empresa', '$cargo_desempenado', '$tiempo', '$funciones', '$jefe_inmediato', $id_facilitador)";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	public function registrar_proyecto($id_proyecto, $titulo_proyecto)
	{
		if($id_proyecto==0){


			$sql = "INSERT INTO proyecto (id_proyecto, titulo_proyecto, estatus)
			VALUES('', '$titulo_proyecto',1)";

		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);
		return $this->conn->insert_id;

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	public function registrar_objetivo_proyecto($id_objetivo, $descripcion, $id_proyecto, $id_tipos)
	{
		if($id_objetivo==0){


			$sql = "INSERT INTO objetivos_proyectos (id_objetivo, descripcion, id_proyecto, id_tipos)
			VALUES('', '$descripcion', $id_proyecto, $id_tipos)";

		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	public function registrar_empresa($id_empresa, $nombre_empresa, $rif_empresa, $direccion_fiscal, $cantidad_trabajadores, $estatus)
	{
		if($id_empresa==0){

			$sql = "INSERT INTO empresas (id_empresa, nombre_empresa, rif_empresa, direccion_fiscal, cantidad_trabajadores, estatus)
			VALUES('', '$nombre_empresa', '$rif_empresa', '$direccion_fiscal', $cantidad_trabajadores, 1)";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}
	public function modificar_empresa($id_empresa, $nombre_empresa, $rif_empresa, $direccion_fiscal, $cantidad_trabajadores, $estatus)
	{
		$sql="UPDATE empresas set nombre_empresa='$nombre_empresa',rif_empresa='$rif_empresa',direccion_fiscal='$direccion_fiscal',cantidad_trabajadores='$cantidad_trabajadores',estatus='$estatus'";


		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}



	public function registrar_contacto_principal($id_contacto, $nombre_contacto, $apellido_contacto, $telefono_contacto, $correo_contacto, $rif_empresa)
	{
		if($id_empresa==0){

			$sql = "INSERT INTO contactos_principales (id_contacto, nombre_contacto, apellido_contacto, telefono_contacto, correo_contacto, rif_empresa)
			VALUES('', '$nombre_contacto', '$apellido_contacto', '$telefono_contacto', '$correo_contacto', '$rif_empresa')";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}
	public function modificar_contacto_principal($id_contacto, $nombre_contacto, $apellido_contacto, $telefono_contacto, $correo_contacto, $rif_empresa)
	{
		$sql="UPDATE contactos_principales set nombre_contacto='$nombre_contacto',apellido_contacto='$apellido_contacto',telefono_contacto='$telefono_contacto',correo_contacto='$correo_contacto',rif_empresa='$rif_empresa'";


		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}
	public function registrar_localidad($id_localidad, $localidad, $rif_empresa)
	{
		if($id_localidad==0){

			$sql = "INSERT INTO localidades_empresas (id_localidad, localidad, rif_empresa)
			VALUES('', '$localidad', '$rif_empresa')";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	public function registrar_cargo($id_cargo, $nombre_cargo)
	{
		if($id_cargo==0){

			$sql = "INSERT INTO cargos (id_cargo, nombre_cargo)
			VALUES('', '$nombre_cargo')";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}

	public function registrar_orden_compra($idorden_compra, $orden_compra, $rif_empresa)
	{
		if($idorden_compra==0){

			$sql = "INSERT INTO ordenes_compras (idorden_compra, orden_compra, rif_empresa)
			VALUES('', '$orden_compra', '$rif_empresa')";
		}else{
			$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'),
			apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
			fecha_nacimiento='$fecha_nacimiento' where id='$id'";

		}
		$consulta = $this->conn->query($sql);

		if ($consulta) {
		} else {
			die(($this->conn->error));
		}

	}





	//////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function login($usuario, $password)
	{
		$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = MD5('$password') " ;
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$fila = $consulta->fetch_assoc();
				$_SESSION['usuario'] = $fila['usuario'];
				$_SESSION['rol'] = $fila['id_rol'];
				header('Location: ../dashboard.php');
			} else {
				session_destroy();
				header('Location: ../index.php?error=true');
			}
		}
	}
	public function eliminar_usuario($id){
		$sql="DELETE FROM usuarios WHERE id='$id'";
		$consulta = $this->conn->query($sql);
		return "echo usuario eliminado".$sql;	
	}

	public function modificar_usuario($user_id){
		$sql="SELECT*from usuarios WHERE id='$user_id'";
		$consulta = $this->conn->query($sql);
		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$mod_user = mysqli_fetch_assoc($consulta);
			}
			return $mod_user;
		} else {
			return FALSE;
		}
	}
	
	public function consultaralumno($usuario){
		$sql="SELECT u.usuario,u.nombre,u.apellido,c.nombre,d.nombre from usuarios as u
		inner join cohortes_has_usuarios AS chu on u.id=chu.usuarios_id
		inner join cohortes as c on chu.cohortes_id=c.id
		inner join diplomados as d on c.id_diplomado=d.id where u.usuario='$usuario'";
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$diplomados = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$diplomados[] = array($fila['nombre']);
				}
				return $diplomados;
			} else {
				return FALSE;
			}
		}
	}

	public function logout()
	{
		session_destroy();
		header('Location: index.php');
	}

	public function get_roles()
	{
		$sql = "SELECT * FROM roles";
		$consulta = $this->conn->query($sql);

		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$roles = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$roles[] = array($fila['id'], $fila['rol']);
				}
				return $roles;
			} else {
				return FALSE;
			}
		}
	}
	public function get_usuarios(){
		$sql = "SELECT * FROM usuarios"; /*AS u INNER JOIN roles AS r ON r.id = u.id_rol";<--Esta consulta devuelve el nombre del rol del usuario, pero por alguna circunstancia en el ID de usuario coloca el id del rol	*/
		$consulta = $this->conn->query($sql);
		if ($consulta) {
			if ($consulta->num_rows > 0) {
				$usuarios = array();
				while ($fila = mysqli_fetch_assoc($consulta)) {
					$usuarios[] = $fila;
				}
				return $usuarios;
			} else {
				return FALSE;
			}
		}

	}

	public function registrarUsuario($id,$id_rol, $usuario, $clave, $nombre, $apellido,
		$email, $telf, $sexo, $numero_carne, $fecha_nacimiento)
	{
		if($id==0){

			$sql = "INSERT INTO usuarios (id_rol, usuario, clave, nombre, 
				apellido, email, telf, sexo, numero_carne, fecha_nacimiento)
VALUES($id_rol, '$usuario', MD5('$clave'), UPPER('$nombre'),
	UPPER('$apellido'), '$email' , $telf, '$sexo', $numero_carne,
	'$fecha_nacimiento')";
}else{
	$sql = "UPDATE usuarios set id_rol='$id_rol', usuario='$usuario', clave=MD5('$clave'), nombre=UPPER('$nombre'), 
	apellido=UPPER('$apellido'), email='$email', telf='$telf', sexo='$sexo', numero_carne='$numero_carne',
	fecha_nacimiento='$fecha_nacimiento' where id='$id'";

}
$consulta = $this->conn->query($sql);

if ($consulta) {
	return TRUE;
} else {
	die(($this->conn->error));
}

}

public function get_diplomados(){
	$sql = "SELECT * FROM diplomados"; 
	$consulta = $this->conn->query($sql);
	if ($consulta) {
		if ($consulta->num_rows > 0) {
			$diplomados = array();
			while ($fila = mysqli_fetch_assoc($consulta)) {
				$diplomados[] = $fila;
			}
			return $diplomados;
		} else {
			return FALSE;
		}
	}

}


public function registrarDiplomado($id, $nombre, $descripcion, $costo, $capacidad)
{
	if($id==0){
		
		$sql = "INSERT INTO diplomados (nombre, descripcion, costo, capacidad)
		VALUES('$nombre', '$descripcion', $costo, $capacidad)";
	}else{
		$sql = "UPDATE diplomados set nombre='$nombre', descripcion='$descripcion', costo=$costo, capacidad=$capacidad	where id='$id'";

	}
	$consulta = $this->conn->query($sql);

	if ($consulta) {
		return TRUE;
	} else {
		die(($this->conn->error));
	}

}

public function eliminar_diplomado($id){
	$sql="DELETE FROM diplomados WHERE id='$id'";
	$consulta = $this->conn->query($sql);
	return "echo diplomado eliminado".$sql;	
}


public function modificar_diplomados($id){
	$sql="SELECT*from diplomados WHERE id='$id'";
	$consulta = $this->conn->query($sql);
	if ($consulta) {
		if ($consulta->num_rows > 0) {
			$mod_diplomados = mysqli_fetch_assoc($consulta);
		}
		return $mod_diplomados;
	} else {
		return FALSE;
	}
}

}

?>
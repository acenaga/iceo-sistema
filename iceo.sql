-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.0.51b-community-nt-log - MySQL Community Edition (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para iceo_bd
CREATE DATABASE IF NOT EXISTS `iceo_bd` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `iceo_bd`;


-- Volcando estructura para tabla iceo_bd.cargos
CREATE TABLE IF NOT EXISTS `cargos` (
  `id_cargo` int(11) NOT NULL auto_increment,
  `nombre_cargo` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_cargo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL auto_increment,
  `id_cargo` int(11) default NULL,
  `rif_empresa` varchar(20) default NULL,
  `id_proyecto_curso` int(11) default NULL,
  `cedula` int(11) default NULL,
  PRIMARY KEY  (`id_cliente`),
  UNIQUE KEY `id_cliente_UNIQUE` (`id_cliente`),
  UNIQUE KEY `rif_empresa_UNIQUE` (`rif_empresa`),
  KEY `idcargo_idx` (`id_cargo`),
  KEY `fk_clientes_proyectos_encurso1_idx` (`id_proyecto_curso`),
  KEY `fk_clientes_Usuarios1_idx` (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.contactos_principales
CREATE TABLE IF NOT EXISTS `contactos_principales` (
  `id_contacto` int(11) NOT NULL auto_increment,
  `nombre_contacto` varchar(45) NOT NULL,
  `apellido_contacto` varchar(45) NOT NULL,
  `telefono_contacto` int(11) NOT NULL,
  `correo_contacto` varchar(45) NOT NULL,
  `rif_empresa` varchar(20) default NULL,
  PRIMARY KEY  (`id_contacto`),
  KEY `fk_contactos_principales_empresas1_idx` (`rif_empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.empresas
CREATE TABLE IF NOT EXISTS `empresas` (
  `id_empresa` int(11) NOT NULL auto_increment,
  `nombre_empresa` varchar(45) NOT NULL,
  `rif_empresa` varchar(20) NOT NULL,
  `direccion_fiscal` varchar(45) NOT NULL,
  `cantidad_trabajadores` int(11) NOT NULL,
  `estatus` int(11) default NULL,
  PRIMARY KEY  (`rif_empresa`),
  UNIQUE KEY `rif_empresa_UNIQUE` (`rif_empresa`),
  UNIQUE KEY `id_empresa_UNIQUE` (`id_empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.estudios
CREATE TABLE IF NOT EXISTS `estudios` (
  `id_estudio` int(11) NOT NULL auto_increment,
  `instituto` varchar(128) NOT NULL,
  `titulo` varchar(128) NOT NULL,
  `anio` int(11) NOT NULL,
  `id_tipo` int(11) default NULL,
  `id_facilitador` int(11) default NULL,
  PRIMARY KEY  (`id_estudio`),
  KEY `fk_estudios_tipos_estudios1_idx` (`id_tipo`),
  KEY `fk_estudios_facilitadores1_idx` (`id_facilitador`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.experiencias_laborales
CREATE TABLE IF NOT EXISTS `experiencias_laborales` (
  `id_experiencia` int(11) NOT NULL auto_increment,
  `empresa` varchar(45) NOT NULL,
  `cargo_desempenado` varchar(45) NOT NULL,
  `tiempo` varchar(45) NOT NULL,
  `funciones` varchar(256) NOT NULL,
  `jefe_inmediato` varchar(45) NOT NULL,
  `id_facilitador` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id_experiencia`,`id_facilitador`),
  KEY `fk_experiencias_laborales_Ufalicitadores1_idx` (`id_facilitador`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.facilitadores
CREATE TABLE IF NOT EXISTS `facilitadores` (
  `id_facilitador` int(11) NOT NULL auto_increment,
  `direccion` varchar(256) NOT NULL,
  `telefono` varchar(16) NOT NULL,
  `rif_facilitador` varchar(16) NOT NULL,
  `cedula` int(11) default NULL,
  `id_proyecto_curso` int(11) default NULL,
  PRIMARY KEY  (`id_facilitador`),
  UNIQUE KEY `idfacilitador_UNIQUE` (`id_facilitador`),
  KEY `fk_Ufalicitadores_Users1_idx` (`cedula`),
  KEY `fk_facilitadores_proyectos_encurso1_idx` (`id_proyecto_curso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.localidades_empresas
CREATE TABLE IF NOT EXISTS `localidades_empresas` (
  `id_localidad` int(11) NOT NULL auto_increment,
  `localidad` varchar(45) NOT NULL,
  `rif_empresa` varchar(20) default NULL,
  PRIMARY KEY  (`id_localidad`),
  KEY `fk_localidades_empresas_empresas1_idx` (`rif_empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.nacionalidad
CREATE TABLE IF NOT EXISTS `nacionalidad` (
  `id_nacionalidad` int(11) NOT NULL auto_increment,
  `nacionalidad` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_nacionalidad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.objetivos_proyectos
CREATE TABLE IF NOT EXISTS `objetivos_proyectos` (
  `id_objetivo` int(11) NOT NULL auto_increment,
  `descripcion` varchar(45) NOT NULL,
  `id_proyecto` int(11) default NULL,
  `id_tipos` int(11) default NULL,
  PRIMARY KEY  (`id_objetivo`),
  KEY `fk_objetivos_proyectos_proyecto1_idx` (`id_proyecto`),
  KEY `fk_objetivos_proyectos_tipos_objetivos1_idx` (`id_tipos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.ordenes_compras
CREATE TABLE IF NOT EXISTS `ordenes_compras` (
  `idorden_compra` int(11) NOT NULL auto_increment,
  `orden_compra` varchar(16) NOT NULL,
  `rif_empresa` varchar(20) default NULL,
  PRIMARY KEY  (`idorden_compra`),
  KEY `fk_ordenes_compras_empresas1_idx` (`rif_empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.proyecto
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(11) NOT NULL auto_increment,
  `titulo_proyecto` varchar(45) NOT NULL,
  `estatus` int(11) default NULL,
  PRIMARY KEY  (`id_proyecto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.proyectos_encurso
CREATE TABLE IF NOT EXISTS `proyectos_encurso` (
  `id_proyecto_curso` int(11) NOT NULL auto_increment,
  `id_proyecto` int(11) default NULL,
  `rif_empresa` varchar(20) default NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date default NULL,
  `idorden_compra` int(11) default NULL,
  PRIMARY KEY  (`id_proyecto_curso`),
  KEY `fk_proyectos_encurso_proyecto1_idx` (`id_proyecto`),
  KEY `fk_proyectos_encurso_empresas1_idx` (`rif_empresa`),
  KEY `fk_proyectos_encurso_ordenes_compras1_idx` (`idorden_compra`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(11) NOT NULL auto_increment,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_rol`),
  UNIQUE KEY `idRoles_UNIQUE` (`id_rol`),
  UNIQUE KEY `Rol_UNIQUE` (`rol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.tipos_estudios
CREATE TABLE IF NOT EXISTS `tipos_estudios` (
  `id_tipo` int(11) NOT NULL auto_increment,
  `tipo_estudio` varchar(128) NOT NULL,
  PRIMARY KEY  (`id_tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.tipos_objetivos
CREATE TABLE IF NOT EXISTS `tipos_objetivos` (
  `id_tipos` int(11) NOT NULL auto_increment,
  `objetivo` varchar(45) NOT NULL,
  PRIMARY KEY  (`id_tipos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.


-- Volcando estructura para tabla iceo_bd.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `segundo_nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `segundo_apellido` varchar(45) NOT NULL,
  `cedula` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_rol` int(11) default NULL,
  `usuario` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `foto_perfil` varchar(45) NOT NULL,
  `estatus` int(11) NOT NULL,
  `id_nacionalidad` int(11) default NULL,
  `correo_usuario` varchar(45) NOT NULL,
  PRIMARY KEY  (`cedula`),
  UNIQUE KEY `UCedula_UNIQUE` (`cedula`),
  UNIQUE KEY `idUser_UNIQUE` (`id_user`),
  UNIQUE KEY `Usuario_UNIQUE` (`usuario`),
  KEY `Id_rol_idx` (`id_rol`),
  KEY `fk_Usuarios_nacionalidad1_idx` (`id_nacionalidad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

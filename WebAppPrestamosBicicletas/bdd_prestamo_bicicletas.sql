-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.21 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para prestamo_bicicletas
CREATE DATABASE IF NOT EXISTS `prestamo_bicicletas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `prestamo_bicicletas`;

-- Volcando estructura para tabla prestamo_bicicletas.estaciones
CREATE TABLE IF NOT EXISTS `estaciones` (
  `id_estacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `localizacion` varchar(150) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `numero_unidades` int(11) NOT NULL,
  `servicio` char(2) NOT NULL,
  PRIMARY KEY (`id_estacion`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla prestamo_bicicletas.estaciones: 1 rows
/*!40000 ALTER TABLE `estaciones` DISABLE KEYS */;
INSERT INTO `estaciones` (`id_estacion`, `nombre`, `localizacion`, `capacidad`, `numero_unidades`, `servicio`) VALUES
	(5, 'ESTACION LAS CASAS 1', 'AMERICA Y AV LAS CASAS SECTOR SEMINARIO', 12, 16, 'PR'),
	(6, 'ESTACION CARLOS ANDRADE MARIN', '18 DE SEPTIEMBRE Y PATRIA', 30, 25, 'PR'),
	(7, 'ESTACION PLAZA GRANDE ', 'PLAZA DE LA INDEPENDENCIA', 100, 65, 'TO');
/*!40000 ALTER TABLE `estaciones` ENABLE KEYS */;

-- Volcando estructura para tabla prestamo_bicicletas.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla prestamo_bicicletas.usuarios: 0 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `user`, `password`) VALUES
	(1, 'Andres', 'Peralta', 'agperalt', '123456');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

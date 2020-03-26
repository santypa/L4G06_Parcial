-- --------------------------------------------------------
-- Host:                         
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para parcial
CREATE DATABASE IF NOT EXISTS `parcial` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `parcial`;

-- Volcando estructura para tabla parcial.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(223) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 CHECKSUM=1;

-- Volcando datos para la tabla parcial.usuarios: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `estado`) VALUES
	(20, 'santy', 'salazar', 'santyp638@gmail.com', '36cc2be07fa0f43f398086b02edff4cd', 'inactivo'),
	(21, 'santyyyyyyy', 'salazar', 'sssssssssss', '1cc39ffd758234422e1f75beadfc5fb2', 'activo'),
	(22, 'santy', 'salazar', 'adawdaw', '7772ad77904f12053ce1bac96c5d4985', 'activo'),
	(23, 'sofia', 'salazar', 'santy-hssp@hotmail.com', 'cc9f4328e026878631d31720239402d3', 'inactivo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.36 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para carros
DROP DATABASE IF EXISTS `carros`;
CREATE DATABASE IF NOT EXISTS `carros` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `carros`;

-- Copiando estrutura para tabela carros.carros
DROP TABLE IF EXISTS `carros`;
CREATE TABLE IF NOT EXISTS `carros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(5000) DEFAULT NULL,
  `marca` varchar(5000) DEFAULT NULL,
  `placa` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela carros.carros: 3 rows
/*!40000 ALTER TABLE `carros` DISABLE KEYS */;
INSERT INTO `carros` (`id`, `modelo`, `marca`, `placa`) VALUES
	(1, 'Corolla', 'Toyota', 'FED-5863'),
	(2, 'Fusca', 'Volkswagen', 'TDS-3548'),
	(3, 'Palio', 'Fiat', 'DFF-9203');
/*!40000 ALTER TABLE `carros` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

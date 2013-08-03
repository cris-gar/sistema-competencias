-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.6-rc


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema jquery_ajax
--

CREATE DATABASE IF NOT EXISTS jquery_ajax;
USE jquery_ajax;

--
-- Definition of table `amigos`
--

DROP TABLE IF EXISTS `amigos`;
CREATE TABLE `amigos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_amigo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`id_amigo`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amigos`
--

/*!40000 ALTER TABLE `amigos` DISABLE KEYS */;
INSERT INTO `amigos` (`id`,`id_amigo`) VALUES 
 (1,'3'),
 (1,'5');
/*!40000 ALTER TABLE `amigos` ENABLE KEYS */;


--
-- Definition of table `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE `datos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `datos`
--

/*!40000 ALTER TABLE `datos` DISABLE KEYS */;
INSERT INTO `datos` (`id`,`nombre`,`apellido`,`correo`,`foto`) VALUES 
 (1,'Martin','Flores Alvarez','martinfloresalvarez@hotmail.com','1'),
 (2,'Susana','Alvarez Martinez','gusydark@hotmail.com','2'),
 (3,'Lina','Ortiz Cruz','tenay_1345@homtail.com','3'),
 (4,'Marina','Carmona Martinez','maribonita@hotmail.com','4'),
 (5,'Violeta','Flores Alvarez','fac@hotmail.com','5'),
 (6,'Carlos','Carlitos vazques','Carlangas@hotmail.com','6'),
 (7,'Laura ','Hernandez Vazques','Lauris_linda@hotmail.com','7');
/*!40000 ALTER TABLE `datos` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

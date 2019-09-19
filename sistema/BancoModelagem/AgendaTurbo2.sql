CREATE DATABASE  IF NOT EXISTS `agendaturbo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `agendaturbo`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: agendaturbo
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `con_cod` int(11) NOT NULL AUTO_INCREMENT,
  `con_nome` varchar(95) DEFAULT NULL,
  `con_rua` varchar(95) DEFAULT NULL,
  `con_bairro` varchar(45) DEFAULT NULL,
  `con_complemento` varchar(45) DEFAULT NULL,
  `con_cidade` varchar(45) DEFAULT NULL,
  `con_estado` varchar(45) DEFAULT NULL,
  `con_cep` varchar(45) DEFAULT NULL,
  `con_email` varchar(45) DEFAULT NULL,
  `con_telefone` varchar(45) DEFAULT NULL,
  `con_celular` varchar(45) DEFAULT NULL,
  `usu_cod` int(11) NOT NULL,
  PRIMARY KEY (`con_cod`),
  KEY `fk_contato_usuario_idx` (`usu_cod`),
  CONSTRAINT `fk_contato_usuario` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (1,'AndrÃ© Moura','Rua Sete','Residencial Espanha','','GuaratinguetÃ¡','SP','12510-564','andre.benedicto@gmail.com','12 3105 5686','(12) 9 8856-3036',1),(3,'Andre Moura','Rua Sete','Residencial Espanha','','GuaratinguetÃ¡','SP','12510-564','andre.benedicto@gmail.com','12 3105 5686','(12) 9 8856-3037',3),(6,'AndrÃ© Moura Benedicto','Rua 7','Residencial Espanha','','GuaratinguetÃ¡','SP','12510-564','andre.benedicto@hotmail.com','12 31055686','(11) 9 8856-3036',6),(7,'AndrÃ© Moura','Rua Sete','Residencial Espanha','','GuaratinguetÃ¡','SP','12510-564','andre.benedicto@etec.sp.gov.br','12 3105 5686','(12) 9 8856-3036',1),(12,'ANDRE DE MOURA BENEDICTO','Rua Antonio Carlos','','','GuaratinguetÃ¡','SP','12510-564','andremoura2500@gmail.com','12988563036','',1),(13,'ANDRE DE MOURA BENEDICTO','Avenida Itau','','','Aparecida','SP','12570000','andremoura2500@gmail.com','12988563036','',4),(14,'ANDRE DE MOURA BENEDICTO','Avenida Itau','','','Aparecida','SP','12570000','andremoura2500@gmail.com','12988563036','',1),(15,'Andre de Moura','Rua Sete','Residencial Espanha','','GuaratinguetÃ¡','SP','12510-564','andre.benedicto@gmail.com','1231055686','',8);
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usu_cod` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(45) DEFAULT NULL,
  `usu_email` varchar(45) DEFAULT NULL,
  `usu_login` varchar(45) DEFAULT NULL,
  `usu_senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usu_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'AndrÃ© Moura','andre.benedicto@etec.sp.gov.br','andre_moura','@ndr3'),(3,'AndrÃ© Moura Benedicto','andre.benedicto@hotmail.com','Andr_MOura','1'),(4,'Andrew','andre.benedicto@etec.sp.gov.br','andre_moura','@ndr3'),(6,'AndrÃ© Moura','andre.benedicto@etec.sp.gov.br','andre_moura','@ndr3'),(8,'Steve Rogers','meuemail@marvel.com','capitao','123'),(12,'ANDRE DE MOURA BENEDICTO','andremoura2500@gmail.com','mouraandre2500@hotmail.com','123'),(15,'Andre Moura','andre.benedicto@gmail.com','mouraandre2500@hotmail.com','123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-16  9:38:28

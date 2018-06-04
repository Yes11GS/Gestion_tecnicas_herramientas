-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: formulario_tec_her
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Base de datos: `formulario_tec_her`
--
CREATE DATABASE IF NOT EXISTS `formulario_tec_her` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `formulario_tec_her`;

-- --------------------------------------------------------

--
-- Dumping data for table `tecnicas`
--

LOCK TABLES `tecnicas` WRITE;
/*!40000 ALTER TABLE `tecnicas` DISABLE KEYS */;
INSERT INTO `tecnicas` VALUES (1,'Análisis de las partes interesadas relevantes','Técnica','Planificación','Complejo','Personas','Identificar los intereses, las expectativas y la influencia de los interesados y relacionarlos con el propósito del proyecto.','•	Acta de constitución del proyecto \r\n•	Documentos de las adquisiciones \r\n•	Factores ambientales de la empresa \r\n•	Activos de los procesos de la organización\r\n','•	Director del proyecto','1.	Identificar interesados\r\nComenzar por crear una lista de interesados clave (Director del proyecto, patrocinador, cliente principal).\r\nEntrevistar a cada uno de los interesados clave.\r\nAmpliar la lista de interesados clave a partir de los resultados de las entrevistas.\r\n\r\n2.	Análisis de impacto\r\nDeterminar el apoyo potencial que cada interesado puede generar.\r\nPriorizar interesados para la gestión y comunicación de expectativas.\r\n\r\n3.	Clasificación\r\nRealizar una clasificación de los interesados para definir una estrategia de aproximación mediante matrices de clasificación:\r\n•	Matriz de poder/interés\r\n•	Matriz de poder/influencia\r\n•	Matriz de influencia/impacto\r\n•	Modelo de prominencia\r\n\r\n4.	Evaluación\r\nEvaluar la forma de respuesta de cada uno de los interesados ante distintas situaciones.\r\nPlanificar cómo influir en ellos para mejorar su apoyo y mitigar los impactos negativos potenciales.\r\n\r\n','Los datos obtenidos pueden contribuir a la elaboración de:\r\n•	Registro de interesados\r\n');
/*!40000 ALTER TABLE `tecnicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrador','management1gth@gmail.com','kf8/ffbObv3H2','d21028d9a02c9e9529a9dfd4bb3325ad5bbe235b0d5fa34081f10a9497b458dd0bd8746b82d29d2deaa7ab99b8c17a4b637e387b8c885f1ca097876dc8d7c1d9ce00acf86553f692fc18f47b2c4b6780763bf18cb6de3560c677f4c3bdea6952b1c2a31d','d9b16a60946326d9f3ed487a67367e1b8ba285d7a804bc1a6ecc78cc587a6f6f59a2e25ce9351af27423398a6dba5394a52dfbf3d19e81b2345bd3cc3be2a36111816230f216846ead39e4294e3077aa5bc9f9e0eae6f79958d3e83f843499ebe274561f',1,2),(2,'Usuario','usergth1@gmail.com','kfl1x3HjXI1fI','633c2ede906b82e69ee90911d11a6277e96cb2e4c35a0805d0cccf90a464dea7b822c590d04047af13e70373b9bdd91ca19fef04fb8a91d7a597efd1c378519afaf143778fad12e0990948d4d3f4b0bd388da9a264ed6a0d5cd6d34cdf6a8af924ece18f','6806581ac461473f7dc94f3a497d7e26da1762a63bda2c27522bfc3aa62c343a24066a12d455601fb1ea3bbb34592410b7a15c518b468122a8ff030072a2880c90d14666d49469cfd93f87d453910a32e19be4e7b0f87e89b2f963f42a352d92730b69ca',1,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
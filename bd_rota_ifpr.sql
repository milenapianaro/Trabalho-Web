CREATE DATABASE  IF NOT EXISTS `cadastro_site` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cadastro_site`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: cadastro_site
-- ------------------------------------------------------
-- Server version	9.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mensagens`
--

DROP TABLE IF EXISTS `mensagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mensagens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_email` varchar(255) NOT NULL,
  `usuario_nome` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `tipo` enum('texto','imagem') DEFAULT 'texto',
  `caminho_imagem` varchar(255) DEFAULT NULL,
  `data_criacao` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagens`
--

LOCK TABLES `mensagens` WRITE;
/*!40000 ALTER TABLE `mensagens` DISABLE KEYS */;
INSERT INTO `mensagens` VALUES (1,'sondeyalessandro@gmail.com','sondeyalessandro@gmail.com','teste','texto',NULL,'2025-07-06 16:57:46'),(2,'sondeyalessandro@gmail.com','sondeyalessandro@gmail.com','teste','texto',NULL,'2025-07-06 16:57:53');
/*!40000 ALTER TABLE `mensagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_login`
--

DROP TABLE IF EXISTS `usuarios_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(150) NOT NULL,
  `genero` enum('Masculino','Feminino','Outro') DEFAULT 'Outro',
  `data_nascimento` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `senha_hash` varchar(255) NOT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_login`
--

LOCK TABLES `usuarios_login` WRITE;
/*!40000 ALTER TABLE `usuarios_login` DISABLE KEYS */;
INSERT INTO `usuarios_login` VALUES (1,'ALESSANDRO SONDEY','Masculino','2003-12-19','sondeyalessandro@gmail.com','20241PIN10030040','$2y$10$37WUYjnZ137maAgfKb5y6uHdEgCu3QETGtmzMtNzRkK9tIYMsB8om','2025-07-06 19:40:02'),(2,'milena Pianaro','Feminino','1996-07-20','milena.pianaro@gmail.com','20241PIN100123456','$2y$10$MMmQ2L16ofZaUt8yvSSF/e/ZlkUonkjre6OouFbWMsPMMfuaMTA4K','2025-07-06 20:48:52'),(3,'LEO ZENI','Masculino','1988-03-25','leozeni@teste.com','123456789','$2y$10$cR.7FcJyQ77XtVGx7F2wb.OVnzXo83l63ckWOBnt021Ndt2w0Nqv2','2025-07-06 20:53:56'),(4,'LEO ZENI','Masculino','1988-03-25','leozeni@teste.com.br','456987','$2y$10$zI92KXNo91NXbmvuN73gGucfhoShYLeAg/4UFEcEBwiC.oLtMyWW.','2025-07-06 20:55:13'),(5,'LEO ZENI','Masculino','1988-03-25','leozeni@teste.com.br.org','4569878','$2y$10$QqHBrzhCkJmGgdYYyb3M9u9t2c17.FMMUJtv9INlZlHpCDyWNgzYK','2025-07-06 21:00:48'),(6,'LEO ZENI','Feminino','1988-03-25','leozeni@teste.com.br.org.gov','1232','$2y$10$wqPmcbsOyuQmFkNXRmohFu6tEJrEJT85JWBaIIb8iz4H1yVTCoEq.','2025-07-06 21:01:57');
/*!40000 ALTER TABLE `usuarios_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'cadastro_site'
--

--
-- Dumping routines for database 'cadastro_site'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-07-06 20:39:22

CREATE DATABASE  IF NOT EXISTS `simple_cms_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `simple_cms_db`;
-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: simple_cms_db
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `pageID` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(15) COLLATE utf8mb4_lithuanian_ci NOT NULL DEFAULT 'New_page',
  `pageContent` text COLLATE utf8mb4_lithuanian_ci,
  PRIMARY KEY (`pageID`),
  UNIQUE KEY `pageID_UNIQUE` (`pageID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home page','<h3 style=\"color: red\"> Labas :) </h3>'),(2,'Something','<h1 style=\"color: blue\"> As krabas </h1>'),(3,'Let\'s try...','<img src=\"https://i.pinimg.com/236x/9e/ca/47/9eca4790704fbf6f133f55c8a4d5649c.jpg\">');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-20 20:56:36

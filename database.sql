-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: lists
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `paragraph_rights`
--

DROP TABLE IF EXISTS `paragraph_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paragraph_rights` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `paragraph_left_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paragraph_rights_paragraph_left_id_foreign` (`paragraph_left_id`),
  CONSTRAINT `paragraph_rights_paragraph_left_id_foreign` FOREIGN KEY (`paragraph_left_id`) REFERENCES `paragraph_lefts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paragraph_rights`
--

LOCK TABLES `paragraph_rights` WRITE;
/*!40000 ALTER TABLE `paragraph_rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `paragraph_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paragraph_lefts`
--

DROP TABLE IF EXISTS `paragraph_lefts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paragraph_lefts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_selected` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paragraph_lefts`
--

LOCK TABLES `paragraph_lefts` WRITE;
/*!40000 ALTER TABLE `paragraph_lefts` DISABLE KEYS */;
INSERT INTO `paragraph_lefts` VALUES (5,'A',1,'2022-11-17 08:06:27','2022-11-17 08:06:27'),(6,'B',1,'2022-11-17 08:06:27','2022-11-17 08:06:27'),(7,'C',1,'2022-11-17 08:06:27','2022-11-17 08:06:27'),(8,'D',1,'2022-11-17 08:06:27','2022-11-17 08:06:27');
/*!40000 ALTER TABLE `paragraph_lefts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-17 18:01:03

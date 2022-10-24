-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: realty
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

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
-- Current Database: `realty`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `realty` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `realty`;

--
-- Table structure for table `realties`
--

DROP TABLE IF EXISTS `realties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `realties` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` json NOT NULL,
  `description` text NOT NULL,
  `price` int unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  `is_actual` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realties`
--

LOCK TABLES `realties` WRITE;
/*!40000 ALTER TABLE `realties` DISABLE KEYS */;
INSERT INTO `realties` VALUES (1,'Объект 1','{\"flat\": \"78\", \"house\": \"45\", \"street\": \"ул. Мамадышская\"}','9-ый дом, 180 кв. метров, двухуровневая',7500000,'2022-10-23 22:05:12','самая-дорогая-квартира-в-Москве.jpg',1),(2,'Объект 2','{\"flat\": \"56\", \"house\": \"56\", \"street\": \"ул. Гагарина\"}','ул. Азата Аббасова, д. 11, Казань',3900000,'2022-10-23 22:07:33','R3.jpg',1),(3,'Объект 3','{\"flat\": \"01\", \"house\": \"97\", \"street\": \"ул. Ленинградская\"}','частный дом из сруба, 100 кв.метров',4500000,'2022-10-23 22:12:17','dom-niva-178145527-2.jpg',1),(4,'Объект 4','{\"flat\": \"78\", \"house\": \"59\", \"street\": \"ул. Галимджана Баруди\"}','Кирпичный дом, 80 кв. метров',3200000,'2022-10-23 22:14:10','1930518.jpg',1),(5,'Объект 5','{\"flat\": \"32\", \"house\": \"24\", \"street\": \"ул. 50 лет Победы\"}','Панельный дом, 45 кв. метров, с двумя лоджиями',2500000,'2022-10-23 22:16:07','1944656.jpg',1),(6,'Объект 6','{\"flat\": \"22\", \"house\": \"11\", \"street\": \"ул. Аббасова\"}','Продается 2-комн. кв., 64 м2, 9/19 этаж',3900000,'2022-10-23 22:17:16','getImage-50.jpeg',1),(7,'Объект 7','{\"flat\": \"7\", \"house\": \"50\", \"street\": \"ул. Лушникова\"}','Продается 2-комн. кв., 45.8 м2, 1/5 этаж',2600000,'2022-10-23 22:18:32','1930134.jpg',1),(8,'Объект 8','{\"flat\": \"01\", \"house\": \"97\", \"street\": \"ул. Широка\"}','Продается 2-комн. кв., 63 м2, 9/10 этаж',4350000,'2022-10-23 22:19:47','novostroyka-usady-197995467-2.jpg',1),(9,'Объект 9','{\"flat\": \"321\", \"house\": \"56\", \"street\": \"ул. Хо Ши Мина\"}','Продается 4-комн. кв., 83.5 м2, 10/11 этаж',3750000,'2022-10-23 22:21:02','Объект 1.jpg',1),(10,'Объект 10','{\"flat\": \"97\", \"house\": \"6\", \"street\": \"ул. Фучика\"}','Продается 2-комн. кв., 62.8 м2, 2/16 этаж',5200000,'2022-10-23 22:22:23','type_b.jpg',1),(11,'Объект 11','{\"flat\": \"68\", \"house\": \"1\", \"street\": \"ул. Ленина\"}','Продается гараж',5200000,'2022-10-24 07:24:13','garazh-moskva-bryanskaya-ulica-191385857-2.jpg',0),(12,'Объект 12','{\"flat\": \"01\", \"house\": \"43\", \"street\": \"ул. 1ая Северная\"}','Продается гараж в Москве',350000,'2022-10-24 07:26:08','garazh-moskva-1ya-severnaya-liniya-202151582-2.jpg',0);
/*!40000 ALTER TABLE `realties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `login` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2022-10-24 10:55:26

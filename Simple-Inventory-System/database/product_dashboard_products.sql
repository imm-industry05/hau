-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: product_dashboard
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `price` int DEFAULT NULL,
  `count` int DEFAULT NULL,
  `quantity_sold` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'ASUS TUF Gaming VG259QR Gaming Monitor – 24.5','24.5-inch Full HD (1920 x 1080) gaming monitor with ultrafast 165Hz refresh rate designed for professional gamers and immersive gameplay\r\nASUS Extreme Low Motion Blur (ELMB ™) technology enables a 1ms response time (MPRT), eliminating ghosting for sharp gaming visuals\r\nShadow Boost enhances image details in dark areas, brightening scenes without over-exposing bright areas\r\nG-SYNC Compatible processing, delivering a seamless, tear-free gaming experience by enabling VRR (variable refresh rate) by default\r\nFeatures an ergonomically designed stand to offer extensive swivel, tilt, pivot and height adjustments',7490,32,32,'2022-09-14 21:27:44','2022-09-14 21:27:44'),(3,'BenQ ZOWIE RL2755 27 inch 27 1ms Console Espo','Adopted Worldwide by Most Professional EsportsTournaments and Players\r\nOptimized for Console EsportsGame Titles Like CoD (Call of Duty), Rainbow six, Fortnite, SF (Street Fighter), Tekken, King of Fighter (KOF), Mortal Kombat, FIFA,Rocket League, Injustice 2, For Honor, Blazblue\r\n27inch\r\n1ms\r\nBlack eQualizer\r\nColor Vibrance\r\nDesigned Frames: Minimize Visual Distractions\r\nWall Mountable',11000,24,63,'2022-09-14 21:28:40','2022-09-14 21:28:40'),(4,'Intel Core i7-12700F 2.1 GHz 12-Core LGA 1700','12 Cores & 20 Threads\r\n2.1 GHz P-Core Clock Speed\r\n4.9 GHz Maximum Turbo Frequency\r\nLGA 1700 Socket\r\n25MB Cache Memory\r\nDual-Channel DDR5-4800 Memory\r\nHybrid Core Architecture\r\nIncludes Thermal Solution\r\n12th Generation (Alder Lake)',19950,12,11,'2022-09-14 21:42:34','2022-09-14 21:42:34');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-14 22:01:47

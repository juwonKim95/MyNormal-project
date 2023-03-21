-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: mynormal
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `freeboard`
--

DROP TABLE IF EXISTS `freeboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `freeboard` (
  `num` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` text,
  `regist_day` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `freeboard`
--

LOCK TABLES `freeboard` WRITE;
/*!40000 ALTER TABLE `freeboard` DISABLE KEYS */;
INSERT INTO `freeboard` VALUES (1,'테스트','1234','테스트','테스트','2023-01-02 (07:54)');
/*!40000 ALTER TABLE `freeboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `no` int NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `tel` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'admin','$2y$10$EHLUB8ep2Tw9HbvwTfR.r.u7EkATZktgHMA8iFfUfJNJhmtU7ot32','2023-01-02 10:06:47','010','admin');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `p_no` int NOT NULL AUTO_INCREMENT,
  `p_title` varchar(50) NOT NULL,
  `p_soimg` varchar(200) DEFAULT NULL,
  `p_bigimg` varchar(200) DEFAULT NULL,
  `p_price` int NOT NULL,
  `p_delprice` int DEFAULT NULL,
  `p_sodesc` varchar(500) DEFAULT NULL,
  `p_desc` text,
  `p_quantity` int NOT NULL,
  PRIMARY KEY (`p_no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'마이 노멀 방탄 라떼','/myNormal/images/마이노멀 방탄라떼.jpg','/myNormal/images/마이노멀 방탄라떼_상세설명.jpg',48000,5000,'고양이가 있다 고양이','고양이가 있다 고양이고양이가 있다 고양이고양이가 있다 고양이고양이가 있다 고양이고양이가 있다 고양이고양이가 있다 고양이',2),(3,'마이노멀 방탄커피_디카페인','/myNormal/images/마이노멀 방탄커피_디카페인.jpg','/myNormal/images/마이노멀 방탄커피_디카페인_상세.jpg',8900,5000,'','',1),(4,'마이노멀_방탄모카','/myNormal/images/마이노멀_방탄모카.jpg','/myNormal/images/마이노멀_방탄모카_상세.jpg',9900,3000,'','',2),(5,'마이노멀_액상알룰오스','/myNormal/images/마이노멀_액상알룰오스.jpg','/myNormal/images/마이노멀_액상알룰오스_상세.jpg',12000,2000,'','',3),(6,'마이노멀_케첩','/myNormal/images/마이노멀_케첩.jpg','/myNormal/images/마이노멀_케첩_상세.jpg',6900,3000,'','',2),(9,'마이노멀 가루 알룰로오스','/myNormal/images/마이노멀_알룰로오스.jpg','/myNormal/images/마이노멀_알룰로오스_상세.jpg',6900,5000,'','',2);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shoppingcart` (
  `c_no` int NOT NULL AUTO_INCREMENT,
  `c_memberid` varchar(20) DEFAULT NULL,
  `c_pno` int NOT NULL,
  `c_quantity` int NOT NULL,
  PRIMARY KEY (`c_no`),
  KEY `c_pno` (`c_pno`),
  CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`c_pno`) REFERENCES `products` (`p_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
INSERT INTO `shoppingcart` VALUES (5,'admin',2,2);
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-03  9:26:59

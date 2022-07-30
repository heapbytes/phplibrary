-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: library
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `uname` varchar(130) NOT NULL,
  `password` varchar(130) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (3,'stud','stud'),(4,'test','uptest'),(5,'asdf','asdf'),(10,'Gourav','password'),(15,'thesession','Thesession1234'),(16,'admin','admin');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `addBooks`
--

DROP TABLE IF EXISTS `addBooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addBooks` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `bk_name` varchar(130) NOT NULL,
  `author` varchar(130) NOT NULL,
  `quantity` int(25) DEFAULT NULL,
  `price` int(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addBooks`
--

LOCK TABLES `addBooks` WRITE;
/*!40000 ALTER TABLE `addBooks` DISABLE KEYS */;
INSERT INTO `addBooks` VALUES (12,'php','php',0,200),(13,'sql','sql',1,200),(15,'MMT','MMT',2,200),(26,'test','test4',6,22),(28,'lol2','lol2',5,99),(29,'asdf','ikk',0,0),(34,'SESSION','important',5,100);
/*!40000 ALTER TABLE `addBooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passbook`
--

DROP TABLE IF EXISTS `passbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passbook` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `uname` varchar(256) DEFAULT NULL,
  `wallet` int(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passbook`
--

LOCK TABLES `passbook` WRITE;
/*!40000 ALTER TABLE `passbook` DISABLE KEYS */;
INSERT INTO `passbook` VALUES (1,'cwit',1000),(3,'test',160),(5,'admin',7795),(6,'stud',24),(7,'test2',1000),(9,'qwerty',280),(10,'thesession',0);
/*!40000 ALTER TABLE `passbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `returnBooks`
--

DROP TABLE IF EXISTS `returnBooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `returnBooks` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `uname` varchar(256) DEFAULT NULL,
  `bk_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `returnBooks`
--

LOCK TABLES `returnBooks` WRITE;
/*!40000 ALTER TABLE `returnBooks` DISABLE KEYS */;
INSERT INTO `returnBooks` VALUES (13,'test','SESSION'),(14,'test','test'),(15,'test','sql'),(16,'test','lol2');
/*!40000 ALTER TABLE `returnBooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studBooks`
--

DROP TABLE IF EXISTS `studBooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studBooks` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `uname` varchar(256) DEFAULT NULL,
  `bk_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studBooks`
--

LOCK TABLES `studBooks` WRITE;
/*!40000 ALTER TABLE `studBooks` DISABLE KEYS */;
INSERT INTO `studBooks` VALUES (3,'test2','sql'),(4,'test2','MMT'),(5,'test2','php'),(6,'test2','CN'),(100,'stud','test'),(121,'test','test');
/*!40000 ALTER TABLE `studBooks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-01 19:36:18

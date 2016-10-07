-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: album
-- ------------------------------------------------------
-- Server version	5.5.50-0ubuntu0.12.04.1

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
-- Table structure for table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artiste` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `music_group` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artiste`
--

LOCK TABLES `artiste` WRITE;
/*!40000 ALTER TABLE `artiste` DISABLE KEYS */;
INSERT INTO `artiste` VALUES (1,'','0000-00-00',''),(2,'','0000-00-00',''),(3,'Hassan','0000-00-00',''),(4,'Bob Marley','2009-10-23',''),(5,'Beyouce','2009-02-10',''),(6,'TJ bala','2009-12-04',''),(7,'TJ bala','2009-12-04',''),(8,'','0000-00-00',''),(9,'','0000-00-00',''),(10,'','0000-00-00',''),(11,'','0000-00-00',''),(12,'','0000-00-00',''),(13,'','0000-00-00',''),(14,'','0000-00-00',''),(15,'','0000-00-00',''),(16,'','0000-00-00',''),(17,'','0000-00-00',''),(18,'','0000-00-00',''),(19,'','0000-00-00',''),(20,'','0000-00-00',''),(21,'','0000-00-00',''),(22,'','0000-00-00',''),(23,'','0000-00-00',''),(24,'','0000-00-00',''),(25,'','0000-00-00',''),(26,'','0000-00-00',''),(27,'','0000-00-00',''),(28,'','0000-00-00',''),(29,'','0000-00-00',''),(30,'','0000-00-00',''),(31,'','0000-00-00',''),(32,'','0000-00-00',''),(33,'','0000-00-00',''),(34,'','0000-00-00',''),(35,'','0000-00-00',''),(36,'','0000-00-00',''),(37,'Musa','0000-00-00','test'),(38,'Rita','1893-03-02',''),(39,'Hassan','0000-00-00','test'),(40,'hasan','2001-12-02','test'),(41,'','0000-00-00',''),(42,'','0000-00-00',''),(43,'','0000-00-00',''),(44,'','0000-00-00',''),(45,'','0000-00-00',''),(46,'','0000-00-00',''),(47,'','0000-00-00',''),(48,'','0000-00-00',''),(49,'','0000-00-00',''),(50,'','0000-00-00',''),(51,'','0000-00-00',''),(52,'','0000-00-00',''),(53,'Hassan','1998-12-10','1'),(54,'','0000-00-00',''),(55,'','0000-00-00',''),(56,'','0000-00-00',''),(57,'','0000-00-00',''),(58,'','0000-00-00',''),(59,'','0000-00-00',''),(60,'','0000-00-00',''),(61,'','0000-00-00',''),(62,'','0000-00-00',''),(63,'','0000-00-00',''),(64,'','0000-00-00',''),(65,'','0000-00-00',''),(66,'','0000-00-00',''),(67,'','0000-00-00',''),(68,'','0000-00-00',''),(69,'','0000-00-00',''),(70,'','0000-00-00',''),(71,'','0000-00-00',''),(72,'','0000-00-00',''),(73,'','0000-00-00','');
/*!40000 ALTER TABLE `artiste` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,''),(2,''),(3,''),(4,''),(5,''),(6,''),(7,''),(8,''),(9,''),(10,''),(11,''),(12,''),(13,''),(14,''),(15,''),(16,''),(17,''),(18,''),(19,''),(20,''),(21,''),(22,''),(23,''),(24,''),(25,''),(26,''),(27,''),(28,''),(29,''),(30,''),(31,'ragae'),(32,'ragae'),(33,'bob'),(34,''),(35,''),(36,''),(37,''),(38,''),(39,''),(40,''),(41,''),(42,''),(43,''),(44,''),(45,''),(46,''),(47,''),(48,''),(49,''),(50,''),(51,''),(52,''),(53,''),(54,''),(55,'');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `song`
--

DROP TABLE IF EXISTS `song`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `song` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `track_nr` varchar(255) DEFAULT NULL,
  KEY `id` (`id`),
  CONSTRAINT `song_ibfk_1` FOREIGN KEY (`id`) REFERENCES `artiste` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `song`
--

LOCK TABLES `song` WRITE;
/*!40000 ALTER TABLE `song` DISABLE KEYS */;
INSERT INTO `song` VALUES (1,'','0000-00-00',''),(2,'','0000-00-00',''),(3,'','0000-00-00',''),(4,'','0000-00-00',''),(5,'','0000-00-00',''),(6,'','0000-00-00',''),(7,'','0000-00-00',''),(8,'','0000-00-00',''),(9,'','0000-00-00',''),(10,'','0000-00-00',''),(11,'','0000-00-00',''),(12,'','0000-00-00',''),(13,'','0000-00-00',''),(14,'','0000-00-00',''),(15,'','0000-00-00',''),(16,'','0000-00-00',''),(17,'','0000-00-00',''),(18,'','0000-00-00',''),(19,'','0000-00-00',''),(20,'','0000-00-00',''),(21,'','0000-00-00',''),(22,'','0000-00-00',''),(23,'','0000-00-00',''),(24,'','0000-00-00',''),(25,'','0000-00-00',''),(26,'','0000-00-00',''),(27,'','0000-00-00',''),(28,'','0000-00-00',''),(29,'','0000-00-00',''),(30,'','0000-00-00',''),(31,'','0000-00-00',''),(32,'','0000-00-00',''),(33,'','0000-00-00',''),(34,'','0000-00-00',''),(35,'','0000-00-00',''),(36,'','0000-00-00',''),(37,'','0000-00-00',''),(38,'','0000-00-00',''),(39,'','0000-00-00',''),(40,'','0000-00-00',''),(41,'','0000-00-00',''),(42,'','0000-00-00',''),(43,'','0000-00-00',''),(44,'','0000-00-00',''),(45,'','0000-00-00',''),(46,'','0000-00-00',''),(47,'','0000-00-00','');
/*!40000 ALTER TABLE `song` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-07  8:51:55

-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: cakephp
-- ------------------------------------------------------
-- Server version	5.5.5-10.0.17-MariaDB

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
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,'Kaos Bola',1,6,NULL,NULL,'2016-04-04 21:46:54','2016-04-04 21:46:54',1),(2,'Barcelona',3,4,NULL,3,'2016-04-04 21:47:21','2016-04-06 17:28:15',1),(3,'Real Madrid',2,5,NULL,1,'2016-04-04 22:23:16','2016-04-04 22:23:16',1);
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `image_dir` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`product_id`),
  KEY `fk_product_id` (`product_id`),
  CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (35,11,'Title','sony-xperia-z5.jpg','5716a0a9-ec0e-4ffe-8431-7b57b00245da'),(37,11,'My title','93201484713PM_635_sony_xperia_z3.jpeg','e15b156c-7cc4-4f08-b993-560e5d136435');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `name` varchar(140) NOT NULL,
  `product_seo` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `product_condition` enum('NEW','USED') DEFAULT 'USED',
  `year` varchar(4) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `picture_dir` varchar(255) NOT NULL DEFAULT 'default',
  `picture` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `view_count` int(11) NOT NULL,
  `product_photo_count` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `row_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_product_category_id` (`product_category_id`),
  CONSTRAINT `fk_product_category` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (11,5,2,'Sony XPERIA z3','sadsa','ddsa','','1231',12313,'e4dff480-de8c-4b94-b865-b2d01bbf0299','z5_premium_chrome_group.png',0,0,'2016-04-07 13:36:55','2016-04-09 13:25:37',0),(12,5,3,'Monopoly On Truth','MonopolyOnTruth','[Music by Isaac Delahaye, Mark Jansen, Simone Simons]\r\n[Lyrics by Mark Jansen, Simone Simons]\r\n\r\nNos docti, pensantes\r\nSed non semper veridici','','2012',1200000,'f995504e-4e87-4e54-b5d5-e651ebe96f7c','djisamsoejazz1.jpg',0,0,'2016-04-07 14:06:28','2016-04-09 14:03:46',0),(13,5,3,'dsfsdf','fa','adsfa sdfaf f ','','1990',1400000,'90cbf514-0c03-44dc-a1d7-e756db3adaf4','518e0f0fd1a85_518e0f0fd3164.jpg',0,0,'2016-04-07 14:30:34','2016-04-07 14:30:34',0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `display_name` varchar(115) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `row_status` int(11) DEFAULT '1' COMMENT '1 = Enable; 0 = Disable',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','','yanuar@gmail.com','greencore','user','2016-03-30 04:01:31','2016-04-03 11:21:44',1),(2,'','','dont@mail.com','$2y$10$mdmXtrCfC9zVr7mpULWN8eBSbN.p4VuI.z99mQNkOvegpfyiRzUY2','user','2016-03-30 15:37:24',NULL,1),(4,'','','yanzgatez@gmail.com','$2y$10$0NH2QxTtwb0Hi2c1PP5C7ezDiEHtGufX3q4iur.hLKfjEvZQvhNAy','user','2016-04-03 10:20:47',NULL,1),(5,'Yanuar Nurcahyo','yanzgatez','yanzgatez@gmail.com','$2y$10$lX55KvEFSO5AeFJgts3yougPsBYyNc0Eh0cZX0msTk9xp4f/1SDhO','admin','2016-04-03 20:13:54','2016-04-03 20:13:54',1),(6,'','yanzgatezx','yanuar@gmail.com','$2y$10$wRCFo3tB6MQW5U13pt56K.jKCDJZAyW1z4VaBUOqhMx4dCNSQU2/q','user','2016-04-06 13:35:18','2016-04-06 13:35:18',1);
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

-- Dump completed on 2016-04-12 19:12:46

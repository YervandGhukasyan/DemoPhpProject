-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` text,
  `content` text,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `owner_id` int(6) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (63,'No comment','The first text messaging service in the United States was provided by American Personal Communications (APC), the first GSM carrier in America. Sprint Telecommunications Venture, a partnership of Sprint Corp. and three large cable TV companies, owned 49 percent of APC. The Sprint venture was the largest single buyer at a government-run spectrum auction that raised $7.7 billion in 2005 for PCS licenses. APC operated under the brand name of Sprint Spectrum and launched service on November 15, 1995 in Washington, D.C. and Baltimore, Maryland. The initial call to launch the network was made from Vice President Al Gore in Washington, D.C. to Mayor Kurt Schmoke in Baltimore.[10] Soon to follow was Omnipoint Communications.[11] Omnipoint\'s George Schmitt, a former Airtouch executive[12] who launched commercial GSM in Germany, recruited Roger Wood[13] from competitor iDEN / Nextel led a team that introduced texting as a commercial service in New York City in November 1996.[9] In preparation for the company\'s launch party in New York\'s Central Park, Wood and co-worker Mark Caron[14] sent the first SMS Text message of \"George are you there?\" to Schmitt during a Sunday morning RF drive test on October 20, 1996. Omnipoint soon offered the first texting between the U.S. and the rest of the world.[15] The tipping point for text messaging was the 1998 marketing plan conceived by Wood which encouraged consumers to use texting as the primary way to communicate with their home countries while traveling overseas instead of calling home.[16] This positioning set the stage for text messaging as the primary means of contact between two or more people not in their home countries.[17]\r\n\r\nInitial growth of text messaging was slow, with customers in 1995 sending on average only 0.4 message per GSM customer per month.[18] One factor in the slow take-up of SMS was that operators were slow to set up charging systems, especially for prepaid subscribers, and eliminate billing fraud, which was possible by changing SMSC settings on individual handsets to use the SMSCs of other operators. Over time, this issue was eliminated by switch-billing instead of billing at the SMSC and by new features within SMSCs to allow blocking of foreign mobile users sending messages through it.','2015-05-31 14:47:28',NULL,NULL),(64,'dadsadsa','study','2015-05-31 20:14:43',NULL,'last test'),(65,'final article','finally i can write a text and hope that it will be written in the database finally i can write a text and hope that it will be written in the databasefinally i can write a text and hope that it will be written in the databasefinally i can write a text and hope that it will be written in the databasefinally i can write a text and hope that it will be written in the databasefinally i can write a text and hope that it will be written in the database ','2015-05-31 20:16:31',NULL,'entertainment');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `art_ids` int(6) NOT NULL,
  `content` text,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `owner` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (82,63,'Today, text messaging is the most widely used mobile data service, with 74% of all mobile phone users worldwide, or 2.4 billion out of 3.3 billion phone subscribers, at end of 2007 being active users of the Short Message Service.','2015-05-31 15:17:05',1),(83,63,'The first text messaging service in the United States was provided by American Personal Communications (APC), the first GSM carrier in America. Sprint Telecommunications Venture, a partnership of Sprint Corp. and three large cable TV companies, owned 49 percent of APC.','2015-05-31 15:21:40',1),(84,63,'new comment','2015-06-02 01:31:53',1),(85,64,'lllfgbfcl,g;l','2015-06-02 05:54:00',1),(86,64,'','2015-06-02 19:47:45',1);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `admin` int(1) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (104,1,'yervand','3665a76e271ada5a75368b99f774e404','yervandghukasyan@gmail.com','2015-06-02 07:08:49'),(105,1,'admin','f6fdffe48c908deb0f4c3bd36c032e72','admin@gmail.com','2015-06-02 07:25:49'),(106,0,'user','5cc32e366c87c4cb49e4309b75f57d64','user@gmail.com','2015-06-02 07:26:58'),(107,0,'oooooooo','985801ad8487ed752256128cd1723737','hhhhhhhhhhhn@gmail.com','2015-06-19 07:57:13');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-21  0:40:59

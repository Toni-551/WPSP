CREATE DATABASE  IF NOT EXISTS `studentskidom` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `studentskidom`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: studentskidom
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `sobe`
--

DROP TABLE IF EXISTS `sobe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sobe` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(45) DEFAULT NULL,
  `Opis` varchar(255) DEFAULT NULL,
  `Kat` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sobe`
--

LOCK TABLES `sobe` WRITE;
/*!40000 ALTER TABLE `sobe` DISABLE KEYS */;
INSERT INTO `sobe` VALUES (1,'111','Opis1','PR'),(2,'116','Opis2','PR'),(4,'118','Opis3','PR'),(5,'210','Opis4','1'),(6,'215','Opis5','1'),(7,'225','Opis6','1'),(8,'305','Opis8','2'),(9,'308','Opis9','2'),(10,'309','Opis10','2'),(11,'310','opis11','2');
/*!40000 ALTER TABLE `sobe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studenti`
--

DROP TABLE IF EXISTS `studenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studenti` (
  `Ime` varchar(25) DEFAULT NULL,
  `Prezime` varchar(45) DEFAULT NULL,
  `JMBAG` varchar(10) NOT NULL,
  PRIMARY KEY (`JMBAG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studenti`
--

LOCK TABLES `studenti` WRITE;
/*!40000 ALTER TABLE `studenti` DISABLE KEYS */;
INSERT INTO `studenti` VALUES ('Nikola','Tucek','1000000001'),('Mirta','Domovic','1000000002'),('Luka','Domovic','1000000003'),('Helena','Jerbic','1000000004'),('Monika','Jerbic','1000000005'),('Petar','Peric','1000000006'),('Marko','Markovic','1000000007'),('Arija','Mudrinovic','1000000008'),('Vatroslav','Tolkic','1000000009'),('Tena','Vedric','1000000010'),('Tea','Sadric','1000000011'),('Ema','Bandic','1000000012'),('Zoran','Radic','1000000013');
/*!40000 ALTER TABLE `studenti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentidodatnipodaci`
--

DROP TABLE IF EXISTS `studentidodatnipodaci`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studentidodatnipodaci` (
  `JMBAG` varchar(10) NOT NULL,
  `Adresa` varchar(45) DEFAULT NULL,
  `Postanski_broj` varchar(45) DEFAULT NULL,
  `Grad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`JMBAG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentidodatnipodaci`
--

LOCK TABLES `studentidodatnipodaci` WRITE;
/*!40000 ALTER TABLE `studentidodatnipodaci` DISABLE KEYS */;
INSERT INTO `studentidodatnipodaci` VALUES ('1000000001','Narodni trg 9','52100','Pula'),('1000000004','Rudeska cesta 172','10000','Zagreb'),('1000000005','Rudeska cesta 172','10000','Zagreb'),('1000000006','V. Gortana 10','51550','Mali Losinj'),('1000000009','Dreznik 20a','47000','Karlovac'),('1000000011','Kaniska 132','53000','Gospic'),('1000000010','Trg svetog Jurja b.b.','48350','Durdevac'),('1000000012','Magistratska ulica 10','49000','Krapina'),('1000000013','Ilica 44','10000','Zagreb'),('1000000002','Zagrebacka 104','47000','Karlovac'),('1000000003','Zagrebacka 104','47000','Karlovac'),('1000000007','Zagrebacka bb','40000','Cakovec'),('1000000008','Marka Marulica','23000','Zadar');
/*!40000 ALTER TABLE `studentidodatnipodaci` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentipodacistudij`
--

DROP TABLE IF EXISTS `studentipodacistudij`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studentipodacistudij` (
  `JMBAG` varchar(10) NOT NULL,
  `Godina_studija` int(11) DEFAULT NULL,
  `Ostvareni_ECTS_bodovi` int(11) DEFAULT NULL,
  `Prosjek_ocjena` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`JMBAG`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentipodacistudij`
--

LOCK TABLES `studentipodacistudij` WRITE;
/*!40000 ALTER TABLE `studentipodacistudij` DISABLE KEYS */;
INSERT INTO `studentipodacistudij` VALUES ('1000000001',2,60,4.00),('1000000002',3,56,3.45),('1000000003',3,60,4.45),('1000000004',2,58,4.67),('1000000005',1,45,3.97),('1000000006',2,57,3.21),('1000000007',1,47,4.31),('1000000008',2,52,3.12),('1000000009',3,49,3.02),('1000000010',3,59,4.35),('1000000011',3,49,4.52),('1000000012',1,59,4.74),('1000000013',1,45,3.56);
/*!40000 ALTER TABLE `studentipodacistudij` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentsoba`
--

DROP TABLE IF EXISTS `studentsoba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studentsoba` (
  `JMBAG` varchar(10) NOT NULL,
  `Id_soba` int(11) DEFAULT NULL,
  PRIMARY KEY (`JMBAG`),
  KEY `Id_soba_idx` (`Id_soba`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentsoba`
--

LOCK TABLES `studentsoba` WRITE;
/*!40000 ALTER TABLE `studentsoba` DISABLE KEYS */;
INSERT INTO `studentsoba` VALUES ('1000000001',1),('1000000010',1),('1000000002',2),('1000000003',2),('1000000004',10),('1000000005',10),('1000000006',4),('1000000007',5),('1000000008',6),('1000000009',7),('1000000011',8),('1000000012',9),('1000000013',9);
/*!40000 ALTER TABLE `studentsoba` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-13 20:52:37

-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: palais
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `fruits`
--

DROP TABLE IF EXISTS `fruits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fruits` (
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `plat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fruits`
--

LOCK TABLES `fruits` WRITE;
/*!40000 ALTER TABLE `fruits` DISABLE KEYS */;
INSERT INTO `fruits` VALUES ('22','Crevettes en beignet',8),('24','Crevettes sautées à la sauce piquante',8),('25','Crevettes sautées à la sauce aigre-douce',8),('26','Crevettes sautées au curry',8),('27','Crevettes sautées aux champignons noirs',8),('28','Crevettes sautées à l\'ail',9.9),('29','Grosses crevettes sautées au sel et poivre',11.8),('30','Grosses crevettes sautées à l\'impérial',1.8),('33','Noix de Saint Jacques à la sauce piquante',14.9),('34','Noix de Saint Jacques sautées au sel et poivre',14.9),('35','Noix de Saint Jacques sautées à l\'ail',14.9),('36','Noix de Saint Jacques à l\'ananas frais',15.9),('37','Calmars sautés à la sauce pimenté',6.5),('38','Calmars sautés à la sauce saté',6.5),('40','Filet de poisson à la sauce pimenté',6.5),('41','Filet de poisson à la sauce aigre-douce',6.5),('42','Cuisses de grenouille à la sauce piquante',9.8),('43','Cuisses de grenouille aux gingembre et ciboulette',9.8),('44','Cuisses de grenouille au sel et poivre',9.8);
/*!40000 ALTER TABLE `fruits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hors`
--

DROP TABLE IF EXISTS `hors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hors` (
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `plat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hors`
--

LOCK TABLES `hors` WRITE;
/*!40000 ALTER TABLE `hors` DISABLE KEYS */;
INSERT INTO `hors` VALUES ('9','Hors d\'œuvres variés chaud pour 2 personnes',14.9),('11','Bo Bun (Vermicelles avec légumes au bœuf)',8.8),('12','Nems au porc',5.5),('13','Nems aux crevettes',5.8),('145','Rouleau de printemps (froid)',5),('15','Raviolis aux crevettes frits',5.9),('16','Salade aux crevettes',4.9),('17','Salade à la chair de crabe',5.8),('18','Salade au poulet',4.5),('19','Omelette aux crevettes',4.8),('20','Omelette à la char de crabe',5.5),('21','Omelette Foo-Yon (légumes)',4.5);
/*!40000 ALTER TABLE `hors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maison`
--

DROP TABLE IF EXISTS `maison`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maison` (
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `plat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maison`
--

LOCK TABLES `maison` WRITE;
/*!40000 ALTER TABLE `maison` DISABLE KEYS */;
INSERT INTO `maison` VALUES ('S1','Gambas sur plaque chauffante',15.8),('S2','Fruits de mer sur plauqe chauffante',13.5),('S3','Noix de Saint Jacques sur plaque chauffante',14.8),('S4','Crevettes sur plaque chauffante',11.9),('S5','Filet de poisson au gingembre et ciboulette sur plaque chauffante',10.9),('S6','Homard sauce piquante sur plaque chauffante',22.8),('S7','Langouste sauce piquante sur plaque chauffante',29.8),('S8','Langouste au gingembre et ciboulette sur plaque chauffante',29.8),('S9','Agneau au gingembre et ciboulette sur plaque chauffante',11.9),('S10','Bœuf sauté sauce saté sur plaque chauffante',10.9),('S11','Canard au gingembre et ciboulette sur plaque chauffante',10.9),('S12','Canard à la sauce d\'orange sur plaque chauffante',10.9),('S13','Boeuf sauté à la sauce d\'huître sur plaque chauffante',10.9),('S14','Poulet sauté sur plaque chauffante',9.8),('S17','Bar à la vapeur',18.8),('S18','Nid de Phénix aux fruits de mer',16.8),('S19','Marmite aux fruits de mer',13.8),('S21','Marmite de crevettes sauce saté aux vermicelles',12.8),('S22','Marmite de poulet et de bœuf au curry',10.8),('S23','Brochettes de crevettes grillées',9.8),('S24','Brochettes de noix de Saint Jacques grillées',14.5),('S25','Brochettes Variées (mélange de crevettes, bœuf, poulet, St-Jacques)',14.5),('S26','Brochettes de poulet grillées',8.8),('S27','Brochettes de bœuf grillées',8.8),('S30','Travers de porc et crevettes géantes grillés au sel et poivre',13.8),('S31','Fondue Chinoise sur réservation (2 pers.)',48),('S32','Fondue Thaï coco et basilic sur réservation (2 pers.)',48),('S33','Bœuf et crevettes grillées sur l\'île de trésor sur réservation (2 pers.)',42);
/*!40000 ALTER TABLE `maison` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nouilles`
--

DROP TABLE IF EXISTS `nouilles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nouilles` (
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `plat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nouilles`
--

LOCK TABLES `nouilles` WRITE;
/*!40000 ALTER TABLE `nouilles` DISABLE KEYS */;
INSERT INTO `nouilles` VALUES ('77','Légumes Chop-Suey',3.9),('78','Champignons noirs sautés nature',3.9),('79','Haricots certs sautés',90),('80','Brocolis sautées nature',4.5),('81','Vermicelles sautées nature',4.8),('82','Nouilles sautées aux nature',4.9),('85','Nouilles sautées maison',5.9),('86','Riz cantonais',4.5),('87','Riz sauté au curry',4.9),('88','Riz nature',1.8);
/*!40000 ALTER TABLE `nouilles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `potage`
--

DROP TABLE IF EXISTS `potage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `potage` (
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `plat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `potage`
--

LOCK TABLES `potage` WRITE;
/*!40000 ALTER TABLE `potage` DISABLE KEYS */;
INSERT INTO `potage` VALUES ('1','Potage maison',5.5),('3','Soupe de raviolis aux crevettes',5.5),('4','Potage aux asperges et crabe',5.5),('5','Potage piquant à la pékinoise',4.9),('6','Potage au poulet et vermicelles',4.5);
/*!40000 ALTER TABLE `potage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thai`
--

DROP TABLE IF EXISTS `thai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `thai` (
  `code` varchar(100) NOT NULL,
  `plat` varchar(200) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thai`
--

LOCK TABLES `thai` WRITE;
/*!40000 ALTER TABLE `thai` DISABLE KEYS */;
INSERT INTO `thai` VALUES ('T1','Potage aux crevettes à la citronnelle',4.9),('T2','Potage au poisson à la citronnelle',4.9),('T3','Potage aux fruits de mer à la citronnelle',5.8),('T4','Samoussa au bœuf',5.9),('T5','Salade aux bœuf',4.9),('T6','Salade aux crevettes',5.5),('T7','Salade aux fruits de mer',7.5),('T8','Salade à l\'ananas frais',5.9),('T9','Salade à la papaye au crabe',6.9),('T10','Salade à la papaye au poulet',6.9),('T11','Poulet sauté au basilic',8),('T12','Bœuf sauté au basilic',8.8),('T13','Agneau sauté au basilic',9.9),('T14','Crevettes sautées au basilic',8.9),('T15','Noix de Saint Jacques sautées au basilic',14.5),('T16','Calmars sautés au basilic',8),('T17','Filet de poisson sauté au basilic',8),('T18','Fruits de mer sautés au basilic',11.8),('T19','Cuisse de grenouille sautée au basilic',10.5),('T20','Bœuf sauté à la citronelle',8.9),('T22','Riz sauté façon thaïlandaise',5.9),('T23','Riz Loc Lac',14.5);
/*!40000 ALTER TABLE `thai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vapeur`
--

DROP TABLE IF EXISTS `vapeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vapeur` (
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `plat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vapeur`
--

LOCK TABLES `vapeur` WRITE;
/*!40000 ALTER TABLE `vapeur` DISABLE KEYS */;
INSERT INTO `vapeur` VALUES ('V1','Raviolis aux crevettes à la vapeur (Ha-kao)',4.5),('V2','Bouchée de porc (Siu-Mai)',4.5),('V3','Bouchée de bœuf',4.5),('V4','Bouchée de crevettes',4.5),('V5','Croissants chinois à la vapeur (Fan-Ko)',4.5),('V6','Croissants chinois en beignet',4.8),('V7','Raviolis Pékinois grillés',6.8),('V8','Assortiment à la vapeur',11.9);
/*!40000 ALTER TABLE `vapeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viande`
--

DROP TABLE IF EXISTS `viande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `viande` (
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `plat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viande`
--

LOCK TABLES `viande` WRITE;
/*!40000 ALTER TABLE `viande` DISABLE KEYS */;
INSERT INTO `viande` VALUES ('60','Bœuf aux oignons',6.8),('61','Bœuf à la sauce piquante',6.8),('62','Bœuf aux champignons noirs',6.8),('63','Bœuf au poivron',6.8),('65','Bœuf sauté aux gingembre et ciboulette',6.8),('66','Bœuf sauté à l\'ail',8.5),('67','Bœuf sauté aux brocolis',6.8),('68','Porc à la sauce aigre-douce',6.1),('71','Porc au curry',6.3),('74','Travers de porc au caramel',7.8),('74B','Porc au caramel',8.8),('75','Travers de porc au sel et poivre',8.8);
/*!40000 ALTER TABLE `viande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volaille`
--

DROP TABLE IF EXISTS `volaille`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `volaille` (
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `plat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volaille`
--

LOCK TABLES `volaille` WRITE;
/*!40000 ALTER TABLE `volaille` DISABLE KEYS */;
INSERT INTO `volaille` VALUES ('45','Poulet en beignet',6.8),('46','Poulet aux amandes',6.5),('47','Poulet à l\'ananas',6.5),('48','Poulet à l\'impérial',6.5),('49','Poulet au curry',6.5),('50','Poulet aux champignons noirs',6.5),('52','Poulet au citron',6.8),('53','Poulet croustillant du chef',8.5),('54','Poulet aux gingembre et ciboulette',6.9),('55','Canard laqué',9.9),('56','Canard aux cinq parfums',9.9),('57','Canard aux champignons noirs',7.8),('59','Canard Royal sauté à l\'ananas frais',9.8);
/*!40000 ALTER TABLE `volaille` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'palais'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-02 11:50:46

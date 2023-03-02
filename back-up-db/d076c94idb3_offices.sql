-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: d076c94idb3
-- ------------------------------------------------------
-- Server version	5.7.40-log

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
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_safe` tinyint(3) unsigned NOT NULL,
  `area_id` int(11) NOT NULL,
  `map_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offices`
--

LOCK TABLES `offices` WRITE;
/*!40000 ALTER TABLE `offices` DISABLE KEYS */;
INSERT INTO `offices` VALUES (1,'開発中',1,1,'https://goo.gl/maps/TvuWcJsBVjEE1TnN8',NULL,'2021-01-26 09:21:45'),(2,'開発中',1,1,'https://g.page/mizunoyodoyabashi?share',NULL,'2021-02-02 06:26:21'),(3,'日本生命保険相互会社 本店',0,1,'https://goo.gl/maps/PTu2tjvYs7FLAVKp7',NULL,'2021-02-02 06:31:36'),(4,'三井住友海上大阪淀屋橋ビル',1,1,'https://goo.gl/maps/dEUA8NxRifgNFN3c6',NULL,'2021-02-02 06:32:23'),(5,'淀屋橋三井ビル',1,1,'https://goo.gl/maps/czhKbTPmgb6A1khb9',NULL,'2021-02-02 06:33:31'),(6,'日本生命本店南館',0,1,'https://goo.gl/maps/m9VRaxQEAfQZiPUg7',NULL,'2021-02-02 06:34:06'),(7,'淀屋橋東京海上日動ビルディング',1,1,'https://goo.gl/maps/5AbHeqDS4FQCcCoH8',NULL,'2021-02-02 06:34:40'),(8,'ヒューリック大阪ビル',0,1,'https://goo.gl/maps/DzRSsVdPW5pu4yiNA',NULL,'2021-02-02 06:35:11'),(9,'大阪興銀ビル',0,1,'https://goo.gl/maps/9FGBTmZe6WUU2fD58',NULL,'2021-02-02 06:35:41'),(10,'三菱UFJ銀行大阪ビル 本館',1,1,'https://goo.gl/maps/xrutqYyoZHQZhqGPA','2021-02-04 14:32:56','2021-02-04 14:32:56'),(11,'大阪朝日生命会館',0,1,'https://goo.gl/maps/JtJugNp3B8Nvyr2F9',NULL,'2021-02-02 07:37:28'),(12,'明治安田生命大阪御堂筋ビル',0,1,'https://goo.gl/maps/LiqhMm5FnpzDt8s88',NULL,'2021-02-02 06:40:06'),(13,'三菱UFJ信託銀行大阪ビル',1,2,'https://goo.gl/maps/evteLEmpWVKMtP89A',NULL,'2021-02-02 06:41:04'),(14,'大阪ガス御堂筋東ビル',1,2,'https://goo.gl/maps/thFUcZYQ8Un67ryr5',NULL,'2021-02-02 06:41:55'),(15,'WAKITA 藤村御堂筋ビル',0,2,'https://goo.gl/maps/umqeDuWawzQEnFxg9',NULL,'2021-02-02 06:42:36'),(16,'武田御堂筋ビル',0,2,'https://goo.gl/maps/DGNAJNwrs98n2a7m9',NULL,'2021-02-02 06:43:10'),(17,'京阪神 御堂筋ビル',1,2,'https://goo.gl/maps/2WVdVu9xB5CXEikh7',NULL,'2021-02-02 06:44:02'),(18,'御堂筋野村ビル',1,2,'https://goo.gl/maps/hwvAf3hLdSWhsWR4A',NULL,'2021-02-02 06:44:29'),(19,'大阪ガスビルディング',0,2,'https://goo.gl/maps/dN56ffzYeMCkUR446',NULL,'2021-02-02 06:45:10'),(20,'あいおいニッセイ同和損保御堂筋ビル',1,2,'https://goo.gl/maps/towqroUX8Wm9922d9',NULL,'2021-02-02 06:47:53'),(21,'創建御堂筋ビル',0,2,'https://goo.gl/maps/dUNPtpe7P8WG1F9B7',NULL,'2021-02-02 06:49:33'),(22,'オービック御堂筋ビル',1,2,'https://goo.gl/maps/YDjQ7UVnhZXzk5PL7',NULL,'2021-02-02 07:03:53'),(23,'NREG御堂筋ビル',0,2,'https://goo.gl/maps/xAQSV2C95dRXZ8V69',NULL,'2021-02-02 07:04:52'),(24,'UD御堂筋ビル',0,2,'https://goo.gl/maps/EngfYQ4Ky9wsJWuL8','2021-02-04 14:33:13','2021-02-04 14:33:13'),(25,'損保ジャパン大阪ビル',0,2,'https://goo.gl/maps/7nQX1oPjRLTxsqiG7',NULL,'2021-02-02 07:51:11'),(26,'銀泉備後町ビル',1,2,'https://goo.gl/maps/Sq7jv1A5L5AHiMQEA',NULL,'2021-02-02 07:51:54'),(27,'京阪神瓦町ビル',0,2,'https://goo.gl/maps/xArfKpbsA68kXdrn8',NULL,'2021-02-02 07:52:35'),(28,'御堂筋三井ビルディング',0,2,'https://goo.gl/maps/2uNWpaxxnYLzgKSi8',NULL,'2021-02-02 07:53:07'),(29,'KFセンタービル',0,3,'https://goo.gl/maps/vAtYp4eJNmgWG8wj9',NULL,'2021-02-02 09:20:17'),(30,'アーバネックス備後町ビル',0,3,'https://goo.gl/maps/gbitbYe8NcZ9ZB939',NULL,'2021-02-02 09:21:06'),(31,'御堂筋安土町ビル',0,3,'https://goo.gl/maps/hcNuR1cRCqTY7Frt6',NULL,'2021-02-02 10:38:40'),(32,'北御堂（本願寺津村別院）',0,3,'https://goo.gl/maps/qxuEwvkNWCanH7gA6',NULL,'2021-02-02 09:22:04'),(33,'第二有楽ビル',0,3,'https://goo.gl/maps/bnR9cG7d6MmTSb3k8',NULL,'2021-02-02 09:22:34'),(34,'御堂筋本町ビル',0,3,'https://goo.gl/maps/fsUrn7LKNpfauL427',NULL,'2021-02-02 09:23:00'),(35,'相愛大学本町学舎',0,3,'https://goo.gl/maps/GRpe1apcswqUEMWX7',NULL,'2021-02-02 09:23:38'),(36,'御堂ビルディング',0,3,'https://goo.gl/maps/Yb9h6Y4Fp1ZFZxZZ6',NULL,'2021-02-02 09:24:08'),(37,'本町ガーデンシティ',1,3,'https://goo.gl/maps/ouoXVXJ41nEnBwrt7',NULL,'2021-02-02 09:25:04'),(38,'東芝大阪ビル（野村不動産御堂筋本町ビル）',0,3,'https://goo.gl/maps/3WMXbCAzyGFxCn4L9',NULL,'2021-02-02 09:25:43'),(39,'ヨドコウビル',0,3,'https://goo.gl/maps/PAnvpNpns2xY5dcV8',NULL,'2021-02-02 09:26:17'),(40,'イトゥビル',0,3,'https://goo.gl/maps/8MCYGbaAPEfhAHfr9',NULL,'2021-02-02 09:29:59'),(41,'イヨビルディング（株）',0,3,'https://goo.gl/maps/H5DXsWwdgyx7x2NN6',NULL,'2021-02-02 09:30:25'),(42,'太陽生命保険保有地',1,3,'https://goo.gl/maps/LPzXt2vfhomftBgn9',NULL,'2021-02-02 09:41:16'),(43,'大阪御堂筋ビル・大阪センタービル',0,3,'https://goo.gl/maps/6ZLvYQ6Ua3cN1LSL6','2021-08-31 09:42:44','2021-08-31 09:42:44'),(44,'大阪御堂筋ビル',0,0,'https://goo.gl/maps/6ZLvYQ6Ua3cN1LSL6','2021-08-31 09:42:44','2021-02-02 09:26:47'),(45,'真宗大谷派難波別院（南御堂）',0,3,'https://goo.gl/maps/wH3MGRmpbbwKZvoP7',NULL,'2021-02-02 09:29:23'),(46,'積和不動産関西南御堂ビル',1,3,'https://goo.gl/maps/jfPFkzLozXzjqFce7',NULL,'2021-02-02 09:28:51'),(47,'本町南ガーデンシティ',0,3,'https://goo.gl/maps/kARweLPiXd9g2S9e9',NULL,'2021-02-02 09:28:25'),(48,'セントラファエロチャペル',0,3,'https://g.page/saintraphaelchapel?share',NULL,'2021-02-02 09:27:54'),(49,'御堂筋ダイビル',0,3,'https://goo.gl/maps/4jQRBiR389D1WxRM7',NULL,'2021-02-02 09:26:47');
/*!40000 ALTER TABLE `offices` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-17 21:44:11

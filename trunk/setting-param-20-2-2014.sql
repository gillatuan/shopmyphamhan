/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.27 : Database - prj_myphamhan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `setting_params` */

DROP TABLE IF EXISTS `setting_params`;

CREATE TABLE `setting_params` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `label` varchar(64) DEFAULT NULL,
  `values` text NOT NULL,
  `description` text,
  `setting_group` varchar(128) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `visible` char(1) DEFAULT NULL,
  `module` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

/*Data for the table `setting_params` */

insert  into `setting_params`(`id`,`name`,`label`,`values`,`description`,`setting_group`,`ordering`,`visible`,`module`) values (1,'ADMIN_EMAIL','Administrator\'s email','gangtergilla4@gmail.com','','General',NULL,'1',''),(2,'BO_PAGE_SIZE','Entries per page in Admin panel','10','','General',NULL,'1',''),(3,'BO_THEME','Back Office theme','Backend','','General',NULL,'1',''),(4,'DEFAULT_BO_LAYOUT','Default BO layout','//layouts/main','','General',NULL,'1',''),(5,'DEFAULT_LAYOUT','Default layout','//layouts/home','','General',NULL,'1',''),(6,'DEFAULT_META_DESCRIPTION','Default meta description','Shop mỹ phẩm hàn chuyên cung cấp sản phẩm xách tay cao cấp 100% hàn quốc, giao hàng tận nơi, giá cực tốt. Liên hệ ngay: 0906.977.244','','General',NULL,'1',''),(7,'DEFAULT_META_KEYWORDS','Default meta keywords','my pham xach tay,nuoc hoa,my pham cao cap,kem duong da,my pham tonymoly,my pham the face shop,bb cream,hàn quốc','','General',NULL,'1',''),(8,'MAIL_METHOD','Mail sending method','smtp','','General',NULL,'1',''),(9,'MAIL_SENDER_NAME','Email sender name','Contact Web3in1','','General',NULL,'1',''),(10,'MAIL_SENDER_ADDRESS','Email sender address','gangtergilla4@gmail.com','','General',NULL,'1',''),(11,'PAGE_SIZE','Entries per page','10','','General',NULL,'1',''),(12,'DB_HOST','DB Host','localhost','','DB Local',NULL,'1',''),(13,'DB_PORT','DB Port','3306','','DB Local',NULL,'1',''),(14,'DB_NAME','DB Name','tuanbui_shopmyphamhan','','DB Local',NULL,'1',''),(15,'DB_PSWD','DB password','u2e2a7yqa','','DB Local',NULL,'1',''),(16,'DB_USER','DB User','tuanbui','','DB Local',NULL,'1',''),(17,'SMTP_HOST','SMTP host','smtp.gmail.com','','General',NULL,'1',''),(18,'SMTP_PASSWORD','SMTP password','Ng9cT71n','','General',NULL,'1',''),(19,'SMTP_PORT','SMTP port','465','','General',NULL,'1',''),(20,'SMTP_SECURE','SMTP sercure connection','ssl','','General',NULL,'1',''),(21,'SMTP_USERNAME','SMTP username','gangtergilla4@gmail.com','','General',NULL,'1',''),(22,'THEME','THEME','Frontend','','General',NULL,'1',''),(23,'APPROVED','Status Approved','1',NULL,'General',NULL,'1',''),(24,'PENDING','Status Pending','2',NULL,'General',NULL,'1',''),(25,'None_Spam','None spam','2','','General',NULL,'1',''),(26,'tagCloudCount ','tagCloudCount ','10',NULL,'General',NULL,'1',''),(27,'commentCount','commentCount','10',NULL,'General',NULL,'1',''),(28,'BO_SUPER_ADMIN_THEME','Super Admin Theme','SuperAdmin',NULL,'General',NULL,'1',''),(29,'ONLINE','User Online','1','','General',NULL,'1',''),(30,'OFFLINE','User Offline','2','','General',NULL,'1',''),(31,'Type_Post','Type Post','1','','General',NULL,'1',''),(32,'INDEX_PAGE','INDEX PAGE','1',NULL,'General',NULL,'1',NULL),(33,'Cache_Time','Cache time','600',NULL,'General',NULL,'1',NULL),(34,'ITEM_PER_PAGE','Item per page','10',NULL,'General',NULL,'1',NULL),(35,'Transport_Charge','Transport Charge','0','','General',NULL,'1',''),(36,'ADMIN_ADDRESS','Administrator\'s address','32/53/19 Ông Ích Khiêm, F.14, Quận 11','','General',NULL,'1',''),(37,'HOTLINE','Administrator\'s Hotline','0906.977.244 - 0903.66.44.64 - Ms.Linh, Mr.Thanh',NULL,'General',NULL,'1',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

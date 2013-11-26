/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.25a : Database - prj_voxe
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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

/*Data for the table `setting_params` */

insert  into `setting_params`(`id`,`name`,`label`,`values`,`description`,`setting_group`,`ordering`,`visible`,`module`) values (1,'ADMIN_EMAIL','Administrator\'s email','gangtergilla4@gmail.com','','General',NULL,'1',''),(2,'BO_PAGE_SIZE','Entries per page in Admin panel','10','','General',NULL,'1',''),(3,'BO_THEME','Back Office theme','Backend','','General',NULL,'1',''),(4,'DEFAULT_BO_LAYOUT','Default BO layout','//layouts/main','','General',NULL,'1',''),(5,'DEFAULT_LAYOUT','Default layout','//layouts/home','','General',NULL,'1',''),(6,'DEFAULT_META_DESCRIPTION','Default meta description','Chuyên cung cấp Vỏ xe nâng Bergougnan đặc ruột 600-9,Vỏ xe nâng TongYong đặc ruột 700-12,Vỏ xe điện Komatsu 305x152,Vỏ xe nâng Aichi đặc ruột 700-12,Vỏ xe nâng Aichi đặc ruột 28x9-15/700,Vỏ xe nâng TongYong đặc ruột 700-12, vỏ xe nâng, mâm xe nâng, vỏ xe điện mới, cũ, nhiều kích cớ,đầy đủ nhà sản xuất Aichi,Bridgestone,... giá cả phải chăng,luôn làm hài lòng quý khách gần xa.Hotline: 0913.600.210','','General',NULL,'1',''),(7,'DEFAULT_META_KEYWORDS','Default meta keywords','Vỏ xe nâng Bergougnan đặc ruột 600-9,Vỏ xe nâng TongYong đặc ruột 700-12,Vỏ xe điện Komatsu 305x152,Vỏ xe nâng Aichi đặc ruột 700-12,Vỏ xe nâng Aichi đặc ruột 28x9-15/700,Vỏ xe nâng TongYong đặc ruột 700-12,Vỏ xe nâng, mâm xe nâng, vỏ xe điện mới, cũ, nhiều loại từ 500-9,650-10,300-10,... với đầy đủ nhà sản xuất Aichi,Bridgestone,..','','General',NULL,'1',''),(8,'MAIL_METHOD','Mail sending method','smtp','','General',NULL,'1',''),(9,'MAIL_SENDER_NAME','Email sender name','Contact Web3in1','','General',NULL,'1',''),(10,'MAIL_SENDER_ADDRESS','Email sender address','gangtergilla4@gmail.com','','General',NULL,'1',''),(11,'PAGE_SIZE','Entries per page','10','','General',NULL,'1',''),(12,'DB_HOST','DB Host','localhost','','DB Local',NULL,'1',''),(13,'DB_PORT','DB Port','3306','','DB Local',NULL,'1',''),(14,'DB_NAME','DB Name','tuanbui_shopmyphamhan','','DB Local',NULL,'1',''),(15,'DB_PSWD','DB password','u2e2a7yqa','','DB Local',NULL,'1',''),(16,'DB_USER','DB User','tuanbui','','DB Local',NULL,'1',''),(17,'SMTP_HOST','SMTP host','smtp.gmail.com','','General',NULL,'1',''),(18,'SMTP_PASSWORD','SMTP password','Ng9cT71n','','General',NULL,'1',''),(19,'SMTP_PORT','SMTP port','465','','General',NULL,'1',''),(20,'SMTP_SECURE','SMTP sercure connection','ssl','','General',NULL,'1',''),(21,'SMTP_USERNAME','SMTP username','gangtergilla4@gmail.com','','General',NULL,'1',''),(22,'THEME','THEME','Frontend','','General',NULL,'1',''),(23,'APPROVED','Status Approved','1',NULL,'General',NULL,'1',''),(24,'PENDING','Status Pending','2',NULL,'General',NULL,'1',''),(25,'None_Spam','None spam','2','','General',NULL,'1',''),(26,'tagCloudCount ','tagCloudCount ','10',NULL,'General',NULL,'1',''),(27,'commentCount','commentCount','10',NULL,'General',NULL,'1',''),(28,'BO_SUPER_ADMIN_THEME','Super Admin Theme','SuperAdmin',NULL,'General',NULL,'1',''),(29,'Online','User Online','1',NULL,'General',NULL,'1',NULL),(30,'Offline','User Offline','2',NULL,'General',NULL,'1',NULL),(31,'Type_Post','Type Post','1','','General',NULL,'1',''),(32,'INDEX_PAGE','INDEX PAGE','1',NULL,'General',NULL,'1',NULL),(33,'Cache_Time','Cache time','600',NULL,'General',NULL,'1',NULL),(34,'ITEM_PER_PAGE','Item per page','10',NULL,'General',NULL,'1',NULL),(35,'Transport_Charge','Transport Charge','0','','General',NULL,'1','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.27 : Database - prj_voxecu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `expired` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cache` */

insert  into `cache`(`id`,`name`,`description`,`expired`,`duration`) values (1,'cached_Review_all_limit-false-_pagingAjax-1_durati','Cache for Review with time=600',1393583775,600);

/*Table structure for table `lookup` */

DROP TABLE IF EXISTS `lookup`;

CREATE TABLE `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `code` varchar(10) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

/*Data for the table `lookup` */

insert  into `lookup`(`id`,`name`,`code`,`type`,`position`) values (1,'Approved','1','Status',1),(2,'Pending','2','Status',2),(3,'Super','0','Level_User',1),(4,'Administrators','1','Level_User',2),(5,'User','3','Level_User',3),(6,'Top','1','Position_Banner',1),(7,'Bottom','2','Position_Banner',2),(8,'Left','3','Position_Banner',3),(9,'Right','4','Position_Banner',4),(11,'Offline','2','isOnline',2),(10,'Online','1','isOnline',1),(12,'Trang chủ','1','Display_On_Page',1),(13,'Trang list','2','Display_On_Page',2),(14,'Trang chi tiết','3','Display_On_Page',3),(15,'Thành công','1','Order_Status',1),(16,'Đang đợi','2','Order_Status',2),(17,'Đang chuyển hàng','3','Order_Status',3),(18,'Hủy','4','Order_Status',4),(19,'Tin Giới Thiệu','1','Type_News',1),(20,'Tin Tức','2','Type_News',2),(21,'Tin Thông Báo','3','Type_News',3),(22,'Tin Khuyến mãi','4','Type_News',4);

/*Table structure for table `pcounter_save` */

DROP TABLE IF EXISTS `pcounter_save`;

CREATE TABLE `pcounter_save` (
  `save_name` varchar(10) NOT NULL,
  `save_value` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `pcounter_save` */

insert  into `pcounter_save`(`save_name`,`save_value`) values ('day_time',2456717),('max_count',1),('max_time',1386738000),('counter',1),('yesterday',1);

/*Table structure for table `pcounter_users` */

DROP TABLE IF EXISTS `pcounter_users`;

CREATE TABLE `pcounter_users` (
  `user_ip` varchar(39) NOT NULL,
  `user_time` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_ip` (`user_ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `pcounter_users` */

insert  into `pcounter_users`(`user_ip`,`user_time`) values ('\'127.0.0.1\'',1393583775);

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

insert  into `setting_params`(`id`,`name`,`label`,`values`,`description`,`setting_group`,`ordering`,`visible`,`module`) values (1,'ADMIN_EMAIL','Administrator\'s email','gangtergilla4@gmail.com','','General',NULL,'1',''),(2,'BO_PAGE_SIZE','Entries per page in Admin panel','10','','General',NULL,'1',''),(3,'BO_THEME','Back Office theme','Backend','','General',NULL,'1',''),(4,'DEFAULT_BO_LAYOUT','Default BO layout','//layouts/main','','General',NULL,'1',''),(5,'DEFAULT_LAYOUT','Default layout','//layouts/home','','General',NULL,'1',''),(6,'DEFAULT_META_DESCRIPTION','Default meta description','Shop mỹ phẩm hàn chuyên cung cấp sản phẩm xách tay cao cấp 100% hàn quốc, giao hàng tận nơi, giá cực tốt. Liên hệ ngay: 0906.977.244','','General',NULL,'1',''),(7,'DEFAULT_META_KEYWORDS','Default meta keywords','my pham xach tay,nuoc hoa,my pham cao cap,kem duong da,my pham tonymoly,my pham the face shop,bb cream,hàn quốc','','General',NULL,'1',''),(8,'MAIL_METHOD','Mail sending method','smtp','','General',NULL,'1',''),(9,'MAIL_SENDER_NAME','Email sender name','Contact Web3in1','','General',NULL,'1',''),(10,'MAIL_SENDER_ADDRESS','Email sender address','gangtergilla4@gmail.com','','General',NULL,'1',''),(11,'PAGE_SIZE','Entries per page','9','','General',NULL,'1',''),(12,'DB_HOST','DB Host','localhost','','DB Local',NULL,'1',''),(13,'DB_PORT','DB Port','3306','','DB Local',NULL,'1',''),(14,'DB_NAME','DB Name','tuanbui_shopmyphamhan','','DB Local',NULL,'1',''),(15,'DB_PSWD','DB password','u2e2a7yqa','','DB Local',NULL,'1',''),(16,'DB_USER','DB User','tuanbui','','DB Local',NULL,'1',''),(17,'SMTP_HOST','SMTP host','smtp.gmail.com','','General',NULL,'1',''),(18,'SMTP_PASSWORD','SMTP password','Ng9cT71n','','General',NULL,'1',''),(19,'SMTP_PORT','SMTP port','465','','General',NULL,'1',''),(20,'SMTP_SECURE','SMTP sercure connection','ssl','','General',NULL,'1',''),(21,'SMTP_USERNAME','SMTP username','gangtergilla4@gmail.com','','General',NULL,'1',''),(22,'THEME','THEME','Frontend','','General',NULL,'1',''),(23,'APPROVED','Status Approved','1',NULL,'General',NULL,'1',''),(24,'PENDING','Status Pending','2',NULL,'General',NULL,'1',''),(25,'None_Spam','None spam','2','','General',NULL,'1',''),(26,'tagCloudCount ','tagCloudCount ','10',NULL,'General',NULL,'1',''),(27,'commentCount','commentCount','10',NULL,'General',NULL,'1',''),(28,'BO_SUPER_ADMIN_THEME','Super Admin Theme','SuperAdmin',NULL,'General',NULL,'1',''),(29,'ONLINE','User Online','1','','General',NULL,'1',''),(30,'OFFLINE','User Offline','2','','General',NULL,'1',''),(31,'Type_Post','Type Post','1','','General',NULL,'1',''),(32,'INDEX_PAGE','INDEX PAGE','1',NULL,'General',NULL,'1',NULL),(33,'Cache_Time','Cache time','600',NULL,'General',NULL,'1',NULL),(34,'ITEM_PER_PAGE','Item per page','9','','General',NULL,'1',''),(35,'Transport_Charge','Transport Charge','0','','General',NULL,'1',''),(36,'ADMIN_ADDRESS','Administrator\'s address','32/53/19 Ông Ích Khiêm, F.14, Quận 11','','General',NULL,'1',''),(37,'HOTLINE','Administrator\'s Hotline','0906.977.244 - 0903.66.44.64 - Ms.Linh, Mr.Thanh',NULL,'General',NULL,'1',NULL);

/*Table structure for table `shop_category` */

DROP TABLE IF EXISTS `shop_category`;

CREATE TABLE `shop_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `page` char(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_category_parent` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_category` */

/*Table structure for table `shop_news` */

DROP TABLE IF EXISTS `shop_news`;

CREATE TABLE `shop_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  `update_date` int(11) DEFAULT NULL,
  `type_news` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page` char(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_news` */

/*Table structure for table `shop_orders` */

DROP TABLE IF EXISTS `shop_orders`;

CREATE TABLE `shop_orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bill_to` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ship_to` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cart` text COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_orders` */

/*Table structure for table `shop_products` */

DROP TABLE IF EXISTS `shop_products`;

CREATE TABLE `shop_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) unsigned NOT NULL,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_curr` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `barcode` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `is_sale_off` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `total_buy` int(11) DEFAULT '0',
  `is_popular` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `page` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_product_category` (`cate_id`),
  CONSTRAINT `FK_product_category` FOREIGN KEY (`cate_id`) REFERENCES `shop_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_products` */

/*Table structure for table `shop_review` */

DROP TABLE IF EXISTS `shop_review`;

CREATE TABLE `shop_review` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  `product_id` int(11) unsigned DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `ip_address` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_review_product` (`product_id`),
  CONSTRAINT `FK_review_product` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_review` */

/*Table structure for table `site_banner` */

DROP TABLE IF EXISTS `site_banner`;

CREATE TABLE `site_banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `page_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `page` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  `expired_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `site_banner` */

/*Table structure for table `site_qa` */

DROP TABLE IF EXISTS `site_qa`;

CREATE TABLE `site_qa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `site_qa` */

/*Table structure for table `site_video` */

DROP TABLE IF EXISTS `site_video`;

CREATE TABLE `site_video` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_id` int(11) unsigned DEFAULT NULL,
  `link_youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page` tinyint(1) DEFAULT '0',
  `create_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_video_category` (`cate_id`),
  CONSTRAINT `FK_video_category` FOREIGN KEY (`cate_id`) REFERENCES `shop_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `site_video` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(64) DEFAULT NULL,
  `description` text,
  `avatar` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `is_online` char(1) DEFAULT NULL,
  `validation_code` varchar(64) DEFAULT NULL,
  `validation_type` smallint(6) DEFAULT NULL,
  `validation_expired` int(11) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `type` char(1) DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=COMPACT;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`email`,`fullname`,`birthday`,`phone`,`address`,`country`,`description`,`avatar`,`website`,`created_date`,`last_login`,`is_online`,`validation_code`,`validation_type`,`validation_expired`,`status`,`type`) values (1,'gilla','827ccb0eea8a706c4c34a16891f84e7b','ngoctuan3010842003@yahoo.com','Bui Doan Ngoc Tuan','1984-10-30','0977757911','27/21 Bui Tu Toan','Viet Nam','Design Web, Yii Framework, Symfony, HTML, CSS, JQuery','2013_08_23_06_27_37_Tulips.jpg,2013_08_23_06_27_37_Penguins.jpg,2013_08_23_06_28_25_Koala.jpg','http://web3in1.com','2013-04-07','2014-02-22','1','',NULL,NULL,'1','0'),(2,'admin','827ccb0eea8a706c4c34a16891f84e7b','ngoctuan3010842003@yahoo.com1','Bui Tran Ngoc Phu','0000-00-00','09040909099','27/21 Bui Tu Toan F.An Lac Q.Binh Tan','VN','tét','',NULL,'2013-04-08','2014-02-28','1','bCpS5xQn',NULL,1386141078,'1','1'),(3,'user','827ccb0eea8a706c4c34a16891f84e7b','ngoctuan3010842003@yahoo.com2','wwww','0000-00-00','3543412345','4334','VN','11111111',NULL,NULL,'2013-04-08','0000-00-00','2',NULL,NULL,0,'1','3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

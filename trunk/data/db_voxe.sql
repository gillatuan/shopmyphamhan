/*
SQLyog Community v9.10 
MySQL - 5.5.27 : Database - prj_voxe
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `cache` */

/*Table structure for table `lookup` */

DROP TABLE IF EXISTS `lookup`;

CREATE TABLE `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `code` varchar(10) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `lookup` */

insert  into `lookup`(`id`,`name`,`code`,`type`,`position`) values (1,'Approved','1','Status',1),(2,'Pending','2','Status',2),(3,'Super','0','Level_User',1),(4,'Administrators','1','Level_User',2),(5,'User','3','Level_User',3),(6,'Top','1','Position_Banner',1),(7,'Bottom','2','Position_Banner',2),(8,'Left','3','Position_Banner',3),(9,'Right','4','Position_Banner',4),(11,'Offline','2','isOnline',2),(10,'Online','1','isOnline',1),(12,'Trang chủ','1','Display_On_Page',1),(13,'Trang list','2','Display_On_Page',2),(14,'Trang chi tiết','3','Display_On_Page',3),(15,'Tin Khuyến Mãi','1','Type_News',1),(16,'Tin Thông Báo','2','Type_News',2),(17,'Tin Tức','3','Type_News',3);

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*Data for the table `setting_params` */

insert  into `setting_params`(`id`,`name`,`label`,`values`,`description`,`setting_group`,`ordering`,`visible`,`module`) values (1,'ADMIN_EMAIL','Administrator\'s email','gangtergilla4@gmail.com','','General',NULL,'1',''),(2,'BO_PAGE_SIZE','Entries per page in Admin panel','10','','General',NULL,'1',''),(3,'BO_THEME','Back Office theme','Backend','','General',NULL,'1',''),(4,'DEFAULT_BO_LAYOUT','Default BO layout','//layouts/main','','General',NULL,'1',''),(5,'DEFAULT_LAYOUT','Default layout','//layouts/main','','General',NULL,'1',''),(6,'DEFAULT_META_DESCRIPTION','Default meta description','Chuyên cung cấp vỏ xe nâng, mâm xe nâng, vỏ xe điện mới, cũ, nhiều kích cớ,đầy đủ nhà sản xuất Aichi,Bridgestone,... giá cả phải chăng,luôn làm hài lòng quý khách gần xa.Hotline: 0913.600.210','','General',NULL,'1',''),(7,'DEFAULT_META_KEYWORDS','Default meta keywords','Vỏ xe nâng, mâm xe nâng, vỏ xe điện mới, cũ, nhiều loại từ 500-9,650-10,300-10... với đầy đủ nhà sản xuất Aichi,Bridgestone,... ','','General',NULL,'1',''),(8,'MAIL_METHOD','Mail sending method','smtp','','General',NULL,'1',''),(9,'MAIL_SENDER_NAME','Email sender name','Contact Web3in1','','General',NULL,'1',''),(10,'MAIL_SENDER_ADDRESS','Email sender address','tuan.buidoanngoc@gmail.com','','General',NULL,'1',''),(11,'PAGE_SIZE','Entries per page','10','','General',NULL,'1',''),(12,'DB_HOST','DB Host','localhost','','DB Local',NULL,'1',''),(13,'DB_PORT','DB Port','3306','','DB Local',NULL,'1',''),(14,'DB_NAME','DB Name','web3in1_voxe','','DB Local',NULL,'1',''),(15,'DB_PSWD','DB password','ng9ct71n','','DB Local',NULL,'1',''),(16,'DB_USER','DB User','web3in1_voxe','','DB Local',NULL,'1',''),(17,'SMTP_HOST','SMTP host','smtp.gmail.com','','General',NULL,'1',''),(18,'SMTP_PASSWORD','SMTP password','ng9ct71n','','General',NULL,'1',''),(19,'SMTP_PORT','SMTP port','465','','General',NULL,'1',''),(20,'SMTP_SECURE','SMTP sercure connection','ssl','','General',NULL,'1',''),(21,'SMTP_USERNAME','SMTP username','gangtergilla4@gmail.com','','General',NULL,'1',''),(22,'THEME','THEME','Frontend','','General',NULL,'1',''),(23,'APPROVED','Status Approved','1',NULL,'General',NULL,'1',''),(24,'PENDING','Status Pending','2',NULL,'General',NULL,'1',''),(25,'None_Spam','None spam','2','','General',NULL,'1',''),(26,'tagCloudCount ','tagCloudCount ','10',NULL,'General',NULL,'1',''),(27,'commentCount','commentCount','10',NULL,'General',NULL,'1',''),(28,'BO_SUPER_ADMIN_THEME','Super Admin Theme','SuperAdmin',NULL,'General',NULL,'1',''),(29,'Online','User Online','1',NULL,'General',NULL,'1',NULL),(30,'Offline','User Offline','2',NULL,'General',NULL,'1',NULL),(31,'Type_Post','Type Post','1','','General',NULL,'1',''),(32,'INDEX_PAGE','INDEX PAGE','1',NULL,'General',NULL,'1',NULL),(33,'Cache_Time','Cache time','600',NULL,'General',NULL,'1',NULL);

/*Table structure for table `shop_banner` */

DROP TABLE IF EXISTS `shop_banner`;

CREATE TABLE `shop_banner` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_banner` */

insert  into `shop_banner`(`id`,`name`,`alias`,`info`,`page_link`,`image`,`position`,`page`,`status`,`ordering`,`create_date`,`expired_date`) values (1,'Banner 1','Banner-1','12345','http://voxe.web3in1.com','2013_09_15_21_13_13-Vo-xe-nang-650-10-2.jpg,2013_09_15_21_13_13-Vo-xe-nang-650-10.jpg','1','1,2','1',NULL,1378789311,1410282000),(2,'Banner 2','Banner-2','banner 2\r\nbanner 2\r\nbanner 2\r\nbanner 2','http://voxe.web3in1.com/shop/Vo-xe-nang-dac-ruot/650-10-PS.web3in1','2013_09_15_14_05_10-Vo-xe-nang-650-10-2.jpg,2013_09_15_14_05_10-Vo-xe-nang-650-10.jpg','3','1,2','1',2,1378882209,1410368400),(3,'Banner 3','Banner-3','Đường dẫn đến web \r\nĐường dẫn đến web  Đường dẫn đến web Đường dẫn đến web ','http://voxe.web3in1.com/shop/Vo-xe-nang-dac-ruot/650-10-PS.web3in1','2013_09_12_18_12_02_chiec-la.jpg,2013_09_12_18_12_02_chim-dai-bang.png,2013_09_12_18_12_02_chiec-vong.jpg','1','1,3','1',3,1378885871,1410368400);

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
  PRIMARY KEY (`id`),
  KEY `FK_category_parent` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_category` */

insert  into `shop_category`(`id`,`name`,`alias`,`description`,`image`,`status`,`parent_id`) values (1,'Vỏ xe nâng','Vo-xe-nang','','','1',0),(2,'Vỏ xe điện','Vo-xe-dien','','','1',0),(3,'Vỏ xe nâng đăc ruột','Vo-xe-nang-dac-ruot','','','1',1),(4,'Vỏ xe nâng có ruột','Vo-xe-nang-co-ruot','','','1',1);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_news` */

insert  into `shop_news`(`id`,`title`,`alias`,`info`,`content`,`image`,`status`,`create_date`,`update_date`,`type_news`) values (1,'Cam kết lợi ích khi mua online','Cam-ket-loi-ich-khi-mua-online','Mua - bán hàng qua mạng - hình thức thương mại mới xuất hiện ở Việt Nam nhưng nhanh chóng phát triển, lôi kéo được nhiều khách hàng tin dùng. Mua hàng qua mạng có nhiều điểm ưu việt so với cách mua- bán trực tiếp ','<h2>Niềm tin &amp; Dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng tuyệt vời</h2>\r\n<p>Ch&uacute;ng t&ocirc;i tin rằng:</p>\r\n<ul class=\"list\">\r\n<li>Mọi người lu&ocirc;n muốn hợp t&aacute;c với người m&agrave; họ tin tưởng.</li>\r\n<li>Mọi người lu&ocirc;n muốn hợp t&aacute;c với người c&oacute; hiểu biết, l&agrave;m việc hiệu quả v&agrave; lu&ocirc;n thực hiện những g&igrave; đ&atilde; hứa.</li>\r\n</ul>\r\n<p>Tại shop bao cao su gai, kh&aacute;ch h&agrave;ng v&agrave; niềm tin của kh&aacute;ch h&agrave;ng l&agrave; điều ch&uacute;ng t&ocirc;i lu&ocirc;n t&acirc;m niệm. shop cam kết b&aacute;n h&agrave;ng 100% ch&iacute;nh h&atilde;ng,đ&uacute;ng như th&ocirc;ng tin sản phẩm, v&agrave; sẽ&nbsp;ho&agrave;n trả gấp đ&ocirc;i&nbsp;cho bạn nếu sản phẩm kh&ocirc;ng phải ch&iacute;nh h&atilde;ng. Để mang lại sự h&agrave;i l&ograve;ng v&agrave; thoải m&aacute;i cho kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i c&oacute;&nbsp;ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng trong 2 ng&agrave;y: kh&aacute;ch h&agrave;ng c&oacute; thể đổi trả bất kỳ sản phẩm n&agrave;o đ&atilde; mua ở shop trong v&ograve;ng 2 ng&agrave;y. Nếu bạn cần trợ gi&uacute;p để nhận dạng h&agrave;ng thật giả, xin li&ecirc;n hệ với ch&uacute;ng t&ocirc;i .</p>\r\n<h2>Thuận tiện</h2>\r\n<p><em>&ldquo;T&ocirc;i th&iacute;ch việc c&oacute; thể ngồi tại nh&agrave;, mặc bộ đồ ngủ của m&igrave;nh, bất chấp b&ecirc;n ngo&agrave;i trời đang nắng n&oacute;ng hay mưa gi&oacute;, t&ocirc;i c&oacute; thể mua sắm bất kỳ l&uacute;c n&agrave;o t&ocirc;i muốn. T&ocirc;i thấy thư gi&atilde;n khi mua sắm, nhưng t&ocirc;i gh&eacute;t sự hối hả của đ&aacute;m đ&ocirc;ng v&agrave; sự ồn &agrave;o&rdquo;</em>&nbsp;&ndash; Chị&nbsp;<strong>Nguyễn Thu Thủy</strong>&nbsp;&ndash; Doanh nh&acirc;n, chia sẻ.</p>\r\n<p>Sự thuật tiện l&agrave; 1 lợi &iacute;ch tuy&ecirc;t vời khi mua sắm trực tuyến tại shop bao cao su gai. Mua sắm trực tuyến rất đơn giản: bạn chỉ cần ngồi trước m&aacute;y t&iacute;nh, v&agrave;i c&uacute; click chuột, lựa chọn sản phẩm bạn th&iacute;ch trong rất nhiều sản phẩm. Sau đ&oacute; sản phẩm sẽ được giao trực tiếp đến tận nh&agrave; bạn.</p>\r\n<p>Nếu bạn cần mua qu&agrave; cho một người bạn tại tỉnh th&agrave;nh kh&aacute;c, bạn kh&ocirc;ng cần lo lắng, ch&uacute;ng t&ocirc;i sẽ g&oacute;i qu&agrave; v&agrave; vận chuyển sản phẩm đến người bạn của bạn nhanh ch&oacute;ng .</p>\r\n<h2>Sự lựa chọn đa dạng</h2>\r\n<p>Tại shop bao cao su gai, ch&uacute;ng t&ocirc;i tập trung v&agrave;o những sản phẩm độc nhất:</p>\r\n<ul class=\"list\">\r\n<li><strong>ĐỘC NHẤT</strong>: 80% những sản phẩm tại shop bao cao su gai bạn kh&ocirc;ng thể t&igrave;m thấy nơi n&agrave;o kh&aacute;c ở Việt Nam.</li>\r\n<li><strong>GI&Aacute; HỢP L&Yacute;</strong>: . Nếu bạn t&igrave;m thấy trung t&acirc;m thương mại n&agrave;o b&aacute;n gi&aacute; thấp hơn shop bao cao su gai, ch&uacute;ng t&ocirc;i sẽ chấp nhận b&aacute;n cho bạn thấp hơn 5% so với gi&aacute; ở shop kh&aacute;c.</li>\r\n</ul>\r\n<p>Hơn nữa, shop bao cao su gai c&ograve;n c&oacute; thể nhận đặt h&agrave;ng v&agrave; chuyển h&agrave;ng đến tỉnh th&agrave;nh kh&aacute;c.</p>','2013_06_23_09_24_10_Penguins.jpg,2013_06_23_09_24_10_Koala.jpg,2013_06_23_09_24_10_Desert.jpg','1',1371979450,1372301718,'4');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_orders` */

insert  into `shop_orders`(`id`,`bill_to`,`ship_to`,`cart`,`info`,`status`,`order_status`,`create_date`) values (1,'{\"email\":\"ngoctuan3010842003@yahoo.com\",\"full_name\":\"Bui Doan Ngoc Tuan\",\"phone\":\"84909793972\",\"address\":\"27\\/21 Bui Tu Toan\",\"description\":\"T\\u00c9T\"}','{\"full_name\":\"Tan Phat\",\"phone\":\"0123456789\",\"address\":\"747 Lac Long Quan\"}','[{\"category\":\"\",\"name\":\"650-10 PS\",\"alias\":\"650-10-PS\",\"price\":\"1.2e+06\",\"quantity\":\"1\",\"value\":1200000,\"valueDiscount\":60000,\"valueAfterDiscount\":1140000,\"totalValueAfterDiscount\":1140000,\"formatValueDiscount\":\"60,000\",\"formatValueAfterDiscount\":\"1,140,000\",\"formatTotalValueAfterDiscount\":\"1,140,000\",\"amountProductsInCart\":3},{\"category\":\"\",\"name\":\"Xe \\u0111i\\u1ec7n abc\",\"alias\":\"Xe-dien-abc\",\"price\":null,\"quantity\":\"1\",\"value\":0,\"valueDiscount\":0,\"valueAfterDiscount\":0,\"totalValueAfterDiscount\":0,\"formatValueDiscount\":\"0\",\"formatValueAfterDiscount\":\"0\",\"formatTotalValueAfterDiscount\":\"0\",\"amountProductsInCart\":3},{\"category\":\"\",\"name\":\"600-9 Nh\\u1eadt\",\"alias\":\"600-9-Nhat\",\"price\":\"2e+06\",\"quantity\":\"1\",\"value\":2000000,\"valueDiscount\":0,\"valueAfterDiscount\":2000000,\"totalValueAfterDiscount\":2000000,\"formatValueDiscount\":\"0\",\"formatValueAfterDiscount\":\"2,000,000\",\"formatTotalValueAfterDiscount\":\"2,000,000\",\"amountProductsInCart\":3}]','Nhanh , gon , le','2','2',1378783091),(2,'{\"email\":\"tuan.buidoanngoc@gmail.com\",\"full_name\":\"Tuan Bui Doan Ngoc\",\"phone\":\"84909793972\",\"address\":\"27\\/21 Bui Tu Toan\",\"description\":\"test \"}','{\"full_name\":\"Tuan Bui Doan Ngoc\",\"phone\":\"84909793972\",\"address\":\"27\\/21 Bui Tu Toan\"}','[{\"category\":\"\",\"name\":\"600-9 Nh\\u1eadt\",\"alias\":\"600-9-Nhat\",\"price\":\"2e+06\",\"quantity\":\"1\",\"value\":2000000,\"valueDiscount\":0,\"valueAfterDiscount\":2000000,\"totalValueAfterDiscount\":2000000,\"formatValueDiscount\":\"0\",\"formatValueAfterDiscount\":\"2,000,000\",\"formatTotalValueAfterDiscount\":\"2,000,000\",\"amountProductsInCart\":2},{\"category\":\"\",\"name\":\"650-10 PS\",\"alias\":\"650-10-PS\",\"price\":\"1.2e+06\",\"quantity\":\"4\",\"value\":4800000,\"valueDiscount\":240000,\"valueAfterDiscount\":4560000,\"totalValueAfterDiscount\":6560000,\"formatValueDiscount\":\"240,000\",\"formatValueAfterDiscount\":\"4,560,000\",\"formatTotalValueAfterDiscount\":\"6,560,000\",\"amountProductsInCart\":2}]','test thu coi','2','2',1378897268),(3,'{\"email\":\"ngoctuan3010842003@yahoo.com\",\"full_name\":\"Tuan Bui Doan Ngoc\",\"phone\":\"84909793972\",\"address\":\"27\\/21 Bui Tu Toan\",\"description\":\"123 \\ntest at eaz s \\n e zeg zgz g zsg \\n zg zg zsg \"}','{\"full_name\":\"Tuan Bui Doan Ngoc\",\"phone\":\"84909793972\",\"address\":\"27\\/21 Bui Tu Toan\"}','[{\"category\":\"\",\"name\":\"600-9 Nh\\u1eadt\",\"alias\":\"600-9-Nhat\",\"price\":\"2e+06\",\"quantity\":4,\"value\":8000000,\"valueDiscount\":0,\"valueAfterDiscount\":8000000,\"totalValueAfterDiscount\":8000000,\"formatValueDiscount\":\"0\",\"formatValueAfterDiscount\":\"8,000,000\",\"formatTotalValueAfterDiscount\":\"8,000,000\",\"amountProductsInCart\":2},{\"category\":\"\",\"name\":\"650-10 PS\",\"alias\":\"650-10-PS\",\"price\":\"1.2e+06\",\"quantity\":\"1\",\"value\":1200000,\"valueDiscount\":60000,\"valueAfterDiscount\":1140000,\"totalValueAfterDiscount\":1140000,\"formatValueDiscount\":\"60,000\",\"formatValueAfterDiscount\":\"1,140,000\",\"formatTotalValueAfterDiscount\":\"1,140,000\",\"amountProductsInCart\":2}]','Khi quý khách có yêu cầu nhận sản phẩm tại địa chỉ khác, nhấn vào » Thêm / Sửa thông tin người nhận « ở bên dưới.<br />\nKhi quý khách có yêu cầu nhận sản phẩm tại địa chỉ khác, nhấn vào » Thêm / Sửa thông tin người nhận « ở bên dưới.','2','2',1378959718);

/*Table structure for table `shop_products` */

DROP TABLE IF EXISTS `shop_products`;

CREATE TABLE `shop_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_products` */

insert  into `shop_products`(`id`,`cate_id`,`name`,`alias`,`info`,`description`,`image`,`price`,`barcode`,`quantity`,`is_sale_off`,`discount`,`total_buy`,`is_popular`,`page`,`status`,`create_date`) values (1,3,'600-9 Nhật','600-9-Nhat','Chuyên cung cấp vỏ xe nâng, vỏ xe đặc ruột 600-9 do Nhật cung cấp mới cũ các loại. Liên lạc trực tiếp với chúng tôi để được tư vấn và deal giá hợp lý cho quý khách','','2013_09_15_22_57_59-Vo-xe-nang-600-9.jpg,2013_09_15_22_57_59-Vo-xe-nang-600-9-2.jpg',2000000,'br6009N-d',-5,'0',0,6,'0','1','1',1378633484),(2,3,'650-10 PS','650-10-PS','Chuyên cung cấp các loại vỏ đặc, mâm xe nâng 650-10 PS','','2013_09_15_23_20_33-Vo-xe-nang-650-10.jpg,2013_09_15_23_22_38-Vo-xe-nang-600-9.jpg,2013_09_15_23_22_38-Vo-xe-nang-600-9-2.jpg',1200000,'65010PS',-5,'1',5,6,'1','1','1',1378781469),(3,2,'Xe điện abc','Xe-dien-abc','Chuyên cung cấp vỏ đặc, vỏ có ruột, mâm xe nâng, xe điện abc','<p>Chuy&ecirc;n cung cấp vỏ đặc, vỏ c&oacute; ruột, m&acirc;m xe n&acirc;ng, xe điện abc</p>\r\n<p>Chuy&ecirc;n cung cấp vỏ đặc, vỏ c&oacute; ruột, m&acirc;m xe n&acirc;ng, xe điện abc</p>\r\n<p>Chuy&ecirc;n cung cấp vỏ đặc, vỏ c&oacute; ruột, m&acirc;m xe n&acirc;ng, xe điện abc</p>','2013_09_13_16_32_50_vo-xe-dien-1.jpg,2013_09_13_16_35_21_vo-xe-dien-2.jpg',NULL,'50010D-D',9,'0',0,1,'0','1','1',1378782670);

/*Table structure for table `shop_qa` */

DROP TABLE IF EXISTS `shop_qa`;

CREATE TABLE `shop_qa` (
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

/*Data for the table `shop_qa` */

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
  `page` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_review_product` (`product_id`),
  CONSTRAINT `FK_review_product` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_review` */

/*Table structure for table `shop_video` */

DROP TABLE IF EXISTS `shop_video`;

CREATE TABLE `shop_video` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shop_video` */

insert  into `shop_video`(`id`,`name`,`alias`,`cate_id`,`link_youtube`,`status`,`page`,`create_date`) values (1,'Gangnam style','Gangnam-style',3,'http://www.youtube.com/watch?v=VwwMzuiSEH0','1',1,1379065872);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`email`,`fullname`,`birthday`,`phone`,`address`,`country`,`description`,`avatar`,`website`,`created_date`,`last_login`,`is_online`,`validation_code`,`validation_type`,`validation_expired`,`status`,`type`) values (1,'gilla','827ccb0eea8a706c4c34a16891f84e7b','ngoctuan3010842003@yahoo.com','Bui Doan Ngoc Tuan','1984-10-30','0977757911','27/21 Bui Tu Toan','Viet Nam','Design Web, Yii Framework, Symfony, HTML, CSS, JQuery','2013_08_23_06_27_37_Tulips.jpg,2013_08_23_06_27_37_Penguins.jpg,2013_08_23_06_28_25_Koala.jpg','http://web3in1.com','2013-04-07','0000-00-00','2','',NULL,NULL,'1','0'),(2,'admin','827ccb0eea8a706c4c34a16891f84e7b','ngoctuan3010842003@yahoo.com1','Bui Tran Ngoc Phu','2010-03-19','09040909099','27/21 Bui Tu Toan F.An Lac Q.Binh Tan','VN','tét','',NULL,'2013-04-08','2013-09-15','1','',NULL,0,'1','1'),(3,'user','827ccb0eea8a706c4c34a16891f84e7b','ngoctuan3010842003@yahoo.com2','wwww','0000-00-00','3543412345','4334','VN','11111111',NULL,NULL,'2013-04-08','2013-04-08',NULL,NULL,NULL,0,'1','3'),(7,'abctest','e10adc3949ba59abbe56e057f20f883e','gangtergilla4@gmail.com','abc test','1988-07-15','09090909090','27.21 bui tu toan','VN','vvvvvvvvvv','2013_08_23_05_28_15_create-crud-by-model.png,2013_08_23_05_28_15_Chrysanthemum.jpg','http://web3in1.com','2013-08-23','0000-00-00','2','',NULL,NULL,'1','3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

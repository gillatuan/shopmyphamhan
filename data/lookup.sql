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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2013 at 11:07 AM
-- Server version: 5.5.33a-MariaDB-log
-- PHP Version: 5.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vomamxenang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE IF NOT EXISTS `cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `expired` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`id`, `name`, `description`, `expired`, `duration`) VALUES
(1, 'cached_Qa_all_limit-false-_pagingAjax-1_duration-6', 'Cache for Qa with time=600', 1378543715, 600),
(2, 'cached_Qa_all_limit-false-_pagingAjax-1_duration-6', 'Cache for Qa with time=600', 1378557086, 600),
(3, 'cache-product-600-9-Nhat', 'cache for Product 600-9-Nhat', 1378633484, 600),
(4, 'cached_Qa_all_limit-false-_pagingAjax-1_duration-6', 'Cache for Qa with time=600', 1378700879, 600),
(5, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378702244, 600),
(6, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378702303, 600),
(7, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378712625, 600),
(8, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378712670, 600),
(9, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378712685, 600),
(10, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378712725, 600),
(11, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378712735, 600),
(12, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378712741, 600),
(13, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378712798, 600),
(14, 'cache-product-650-10-PS', 'cache for Product 650-10-PS', 1378781469, 600),
(15, 'cache-product-650-10-PS-1', 'cache for Product 650-10-PS-1', 1378782179, 600),
(16, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378782195, 600),
(17, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378782222, 600),
(18, 'cache-product-Xe-dien-abc', 'cache for Product Xe-dien-abc', 1378782670, 600),
(19, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378788195, 600),
(20, 'cached_Qa_all_limit-false-_pagingAjax-1_duration-6', 'Cache for Qa with time=600', 1378795203, 600),
(21, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378812009, 600),
(22, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378882195, 600),
(23, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378882212, 600),
(24, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378894418, 600),
(25, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378894556, 600),
(26, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378895724, 600),
(27, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896431, 600),
(28, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896434, 600),
(29, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896557, 600),
(30, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896563, 600),
(31, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896737, 600),
(32, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896810, 600),
(33, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896881, 600),
(34, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896887, 600),
(35, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378896902, 600),
(36, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378957887, 600),
(37, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378957958, 600),
(38, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378958031, 600),
(39, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1378959366, 600),
(40, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1379822597, 600),
(41, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1379825620, 600),
(42, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1379825627, 600),
(43, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1379826651, 600),
(44, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1379845397, 600),
(45, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1379848804, 600),
(46, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1379863274, 600),
(47, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1379863331, 600),
(48, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380038670, 600),
(49, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380039313, 600),
(50, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380039369, 600),
(51, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380039379, 600),
(52, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380039385, 600),
(53, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380043943, 600),
(54, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380122571, 600),
(55, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380551929, 600),
(56, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380554218, 600),
(57, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380554234, 600),
(58, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380904960, 600),
(59, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1380948640, 600),
(60, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381040536, 600),
(61, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381040546, 600),
(62, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381040554, 600),
(63, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381040560, 600),
(64, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381040565, 600),
(65, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381040567, 600),
(66, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381040571, 600),
(67, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381066714, 600),
(68, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381069385, 600),
(69, 'cached_Qa_all_limit-false-_pagingAjax-1_duration-6', 'Cache for Qa with time=600', 1381070078, 600),
(70, 'cache-product-Vo-xe-nang-Bridgestone-Japan-dac-ruo', 'cache for Product Vo-xe-nang-Bridgestone-Japan-dac-ruot-700-12', 1381074029, 600),
(71, 'cache-product-Vo-xe-nang-Bridgestone-Japan-dac-ruo', 'cache for Product Vo-xe-nang-Bridgestone-Japan-dac-ruot-700-12', 1381074434, 600),
(72, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381074448, 600),
(73, 'cache-product-Vo-xe-nang-Bridgestone-Japan-dac-ruo', 'cache for Product Vo-xe-nang-Bridgestone-Japan-dac-ruot-700-12', 1381076099, 600),
(74, 'cache-product-Vo-xe-nang-Bridgestone-Japan-dac-ruo', 'cache for Product Vo-xe-nang-Bridgestone-Japan-dac-ruot-700-12', 1381076179, 600),
(75, 'cache-product-Vo-xe-nang-Bridgestone-Japan-dac-ruo', 'cache for Product Vo-xe-nang-Bridgestone-Japan-dac-ruot-700-12', 1381076256, 600),
(76, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381076340, 600),
(77, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381076451, 600),
(78, 'cache-product-Vo-xe-nang-Bergougnan-dac-ruot-600-9', 'cache for Product Vo-xe-nang-Bergougnan-dac-ruot-600-9', 1381077018, 600),
(79, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381077202, 600),
(80, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381077339, 600),
(81, 'cache-product-Vo-xe-nang-Aichi-dac-ruot-700-12', 'cache for Product Vo-xe-nang-Aichi-dac-ruot-700-12', 1381077992, 600),
(82, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078141, 600),
(83, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078639, 600),
(84, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078653, 600),
(85, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078672, 600),
(86, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078729, 600),
(87, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078735, 600),
(88, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078754, 600),
(89, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078799, 600),
(90, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078834, 600),
(91, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381078995, 600),
(92, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381079033, 600),
(93, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381079096, 600),
(94, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381079116, 600),
(95, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381079162, 600),
(96, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381079178, 600),
(97, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381079402, 600),
(98, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381079419, 600),
(99, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381079437, 600),
(100, 'cache-product-Vo-xe-nang-Bridgestone-Japan-dac-ruo', 'cache for Product Vo-xe-nang-Bridgestone-Japan-dac-ruot-700-12', 1381079642, 600),
(101, 'cache-product-Vo-xe-nang-Aichi-dac-ruot-28x9-15-70', 'cache for Product Vo-xe-nang-Aichi-dac-ruot-28x9-15-700', 1381080369, 600),
(102, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080389, 600),
(103, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080410, 600),
(104, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080416, 600),
(105, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080648, 600),
(106, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080658, 600),
(107, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080689, 600),
(108, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080734, 600),
(109, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080775, 600),
(110, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080857, 600),
(111, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381080894, 600),
(112, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081036, 600),
(113, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081072, 600),
(114, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081076, 600),
(115, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081082, 600),
(116, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081117, 600),
(117, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081140, 600),
(118, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081153, 600),
(119, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081181, 600),
(120, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081186, 600),
(121, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081190, 600),
(122, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081192, 600),
(123, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081193, 600),
(124, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081202, 600),
(125, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081763, 600),
(126, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081820, 600),
(127, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081846, 600),
(128, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381081864, 600),
(129, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082035, 600),
(130, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082183, 600),
(131, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082190, 600),
(132, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082201, 600),
(133, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082329, 600),
(134, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082332, 600),
(135, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082342, 600),
(136, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082496, 600),
(137, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381082667, 600),
(138, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381083847, 600),
(139, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381083863, 600),
(140, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381083880, 600),
(141, 'cached_Review_all_limit-false-_pagingAjax-1_durati', 'Cache for Review with time=600', 1381083900, 600),
(142, 'cache-product-Vo-xe-nang-Aichi-dac-ruot-28x9-15-70', 'cache for Product Vo-xe-nang-Aichi-dac-ruot-28x9-15-700', 1381112751, 600);

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE IF NOT EXISTS `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `code` varchar(10) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Approved', '1', 'Status', 1),
(2, 'Pending', '2', 'Status', 2),
(3, 'Super', '0', 'Level_User', 1),
(4, 'Administrators', '1', 'Level_User', 2),
(5, 'User', '3', 'Level_User', 3),
(6, 'Top', '1', 'Position_Banner', 1),
(7, 'Bottom', '2', 'Position_Banner', 2),
(8, 'Left', '3', 'Position_Banner', 3),
(9, 'Right', '4', 'Position_Banner', 4),
(11, 'Offline', '2', 'isOnline', 2),
(10, 'Online', '1', 'isOnline', 1),
(12, 'Trang chủ', '1', 'Display_On_Page', 1),
(13, 'Trang list', '2', 'Display_On_Page', 2),
(14, 'Trang chi tiết', '3', 'Display_On_Page', 3);

-- --------------------------------------------------------

--
-- Table structure for table `setting_params`
--

CREATE TABLE IF NOT EXISTS `setting_params` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `setting_params`
--

INSERT INTO `setting_params` (`id`, `name`, `label`, `values`, `description`, `setting_group`, `ordering`, `visible`, `module`) VALUES
(1, 'ADMIN_EMAIL', 'Administrator''s email', 'gangtergilla4@gmail.com', '', 'General', NULL, '1', ''),
(2, 'BO_PAGE_SIZE', 'Entries per page in Admin panel', '10', '', 'General', NULL, '1', ''),
(3, 'BO_THEME', 'Back Office theme', 'Backend', '', 'General', NULL, '1', ''),
(4, 'DEFAULT_BO_LAYOUT', 'Default BO layout', '//layouts/main', '', 'General', NULL, '1', ''),
(5, 'DEFAULT_LAYOUT', 'Default layout', '//layouts/main', '', 'General', NULL, '1', ''),
(6, 'DEFAULT_META_DESCRIPTION', 'Default meta description', 'Chuyên cung cấp vỏ xe nâng, mâm xe nâng, vỏ xe điện mới, cũ, nhiều kích cớ,đầy đủ nhà sản xuất Aichi,Bridgestone,... giá cả phải chăng,luôn làm hài lòng quý khách gần xa.Hotline: 0913.600.210', '', 'General', NULL, '1', ''),
(7, 'DEFAULT_META_KEYWORDS', 'Default meta keywords', 'Vỏ xe nâng, mâm xe nâng, vỏ xe điện mới, cũ, nhiều loại từ 500-9,650-10,300-10... với đầy đủ nhà sản xuất Aichi,Bridgestone,... ', '', 'General', NULL, '1', ''),
(8, 'MAIL_METHOD', 'Mail sending method', 'smtp', '', 'General', NULL, '1', ''),
(9, 'MAIL_SENDER_NAME', 'Email sender name', 'Contact Web3in1', '', 'General', NULL, '1', ''),
(10, 'MAIL_SENDER_ADDRESS', 'Email sender address', 'gangtergilla4@gmail.com', '', 'General', NULL, '1', ''),
(11, 'PAGE_SIZE', 'Entries per page', '10', '', 'General', NULL, '1', ''),
(12, 'DB_HOST', 'DB Host', 'localhost', '', 'DB Local', NULL, '1', ''),
(13, 'DB_PORT', 'DB Port', '3306', '', 'DB Local', NULL, '1', ''),
(14, 'DB_NAME', 'DB Name', 'web3in1_voxe', '', 'DB Local', NULL, '1', ''),
(15, 'DB_PSWD', 'DB password', 'ng9ct71n', '', 'DB Local', NULL, '1', ''),
(16, 'DB_USER', 'DB User', 'web3in1_voxe', '', 'DB Local', NULL, '1', ''),
(17, 'SMTP_HOST', 'SMTP host', 'smtp.gmail.com', '', 'General', NULL, '1', ''),
(18, 'SMTP_PASSWORD', 'SMTP password', 'Ng9cT71n', '', 'General', NULL, '1', ''),
(19, 'SMTP_PORT', 'SMTP port', '465', '', 'General', NULL, '1', ''),
(20, 'SMTP_SECURE', 'SMTP sercure connection', 'ssl', '', 'General', NULL, '1', ''),
(21, 'SMTP_USERNAME', 'SMTP username', 'gangtergilla4@gmail.com', '', 'General', NULL, '1', ''),
(22, 'THEME', 'THEME', 'Frontend', '', 'General', NULL, '1', ''),
(23, 'APPROVED', 'Status Approved', '1', NULL, 'General', NULL, '1', ''),
(24, 'PENDING', 'Status Pending', '2', NULL, 'General', NULL, '1', ''),
(25, 'None_Spam', 'None spam', '2', '', 'General', NULL, '1', ''),
(26, 'tagCloudCount ', 'tagCloudCount ', '10', NULL, 'General', NULL, '1', ''),
(27, 'commentCount', 'commentCount', '10', NULL, 'General', NULL, '1', ''),
(28, 'BO_SUPER_ADMIN_THEME', 'Super Admin Theme', 'SuperAdmin', NULL, 'General', NULL, '1', ''),
(29, 'Online', 'User Online', '1', NULL, 'General', NULL, '1', NULL),
(30, 'Offline', 'User Offline', '2', NULL, 'General', NULL, '1', NULL),
(31, 'Type_Post', 'Type Post', '1', '', 'General', NULL, '1', ''),
(32, 'INDEX_PAGE', 'INDEX PAGE', '1', NULL, 'General', NULL, '1', NULL),
(33, 'Cache_Time', 'Cache time', '600', NULL, 'General', NULL, '1', NULL),
(34, 'ITEM_PER_PAGE', 'Item per page', '10', NULL, 'General', NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_banner`
--

CREATE TABLE IF NOT EXISTS `shop_banner` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shop_banner`
--

INSERT INTO `shop_banner` (`id`, `name`, `alias`, `info`, `page_link`, `image`, `position`, `page`, `status`, `ordering`, `create_date`, `expired_date`) VALUES
(1, 'Banner 1', 'Banner-1', '12345', 'http://voxe.web3in1.com', '', '1', '2', '1', NULL, 1378789311, 1410282000),
(2, 'Banner 2', 'Banner-2', 'banner 2\r\nbanner 2\r\nbanner 2\r\nbanner 2', 'http://voxe.web3in1.com/shop/Vo-xe-nang-dac-ruot/650-10-PS.web3in1', '', '1', '2', '1', 2, 1378882209, 1410368400),
(3, 'Banner 3', 'Banner-3', 'Đường dẫn đến web \r\nĐường dẫn đến web  Đường dẫn đến web Đường dẫn đến web ', 'http://voxe.web3in1.com/shop/Vo-xe-nang-dac-ruot/650-10-PS.web3in1', '2013_09_12_18_12_02_chiec-la.jpg,2013_09_12_18_12_02_chim-dai-bang.png,2013_09_12_18_12_02_chiec-vong.jpg', '1', '1,3', '1', 3, 1378885871, 1410368400);

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE IF NOT EXISTS `shop_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_category_parent` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`id`, `name`, `alias`, `description`, `image`, `status`, `parent_id`) VALUES
(1, 'Vỏ xe nâng', 'Vo-xe-nang', '', '', '1', 0),
(2, 'Vỏ xe điện', 'Vo-xe-dien', '', '', '1', 0),
(3, 'Vỏ xe nâng đăc ruột', 'Vo-xe-nang-dac-ruot', '', '', '1', 1),
(4, 'Vỏ xe nâng có ruột', 'Vo-xe-nang-co-ruot', '', '', '1', 1),
(5, 'Mâm xe', 'Mam-xe', 'Mâm xe', '', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_news`
--

CREATE TABLE IF NOT EXISTS `shop_news` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shop_news`
--

INSERT INTO `shop_news` (`id`, `title`, `alias`, `info`, `content`, `image`, `status`, `create_date`, `update_date`, `type_news`) VALUES
(1, 'Cam kết lợi ích khi mua online', 'Cam-ket-loi-ich-khi-mua-online', 'Mua - bán hàng qua mạng - hình thức thương mại mới xuất hiện ở Việt Nam nhưng nhanh chóng phát triển, lôi kéo được nhiều khách hàng tin dùng. Mua hàng qua mạng có nhiều điểm ưu việt so với cách mua- bán trực tiếp ', '<h2>Niềm tin &amp; Dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng tuyệt vời</h2>\r\n<p>Ch&uacute;ng t&ocirc;i tin rằng:</p>\r\n<ul class="list">\r\n<li>Mọi người lu&ocirc;n muốn hợp t&aacute;c với người m&agrave; họ tin tưởng.</li>\r\n<li>Mọi người lu&ocirc;n muốn hợp t&aacute;c với người c&oacute; hiểu biết, l&agrave;m việc hiệu quả v&agrave; lu&ocirc;n thực hiện những g&igrave; đ&atilde; hứa.</li>\r\n</ul>\r\n<p>Tại shop bao cao su gai, kh&aacute;ch h&agrave;ng v&agrave; niềm tin của kh&aacute;ch h&agrave;ng l&agrave; điều ch&uacute;ng t&ocirc;i lu&ocirc;n t&acirc;m niệm. shop cam kết b&aacute;n h&agrave;ng 100% ch&iacute;nh h&atilde;ng,đ&uacute;ng như th&ocirc;ng tin sản phẩm, v&agrave; sẽ&nbsp;ho&agrave;n trả gấp đ&ocirc;i&nbsp;cho bạn nếu sản phẩm kh&ocirc;ng phải ch&iacute;nh h&atilde;ng. Để mang lại sự h&agrave;i l&ograve;ng v&agrave; thoải m&aacute;i cho kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i c&oacute;&nbsp;ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng trong 2 ng&agrave;y: kh&aacute;ch h&agrave;ng c&oacute; thể đổi trả bất kỳ sản phẩm n&agrave;o đ&atilde; mua ở shop trong v&ograve;ng 2 ng&agrave;y. Nếu bạn cần trợ gi&uacute;p để nhận dạng h&agrave;ng thật giả, xin li&ecirc;n hệ với ch&uacute;ng t&ocirc;i .</p>\r\n<h2>Thuận tiện</h2>\r\n<p><em>&ldquo;T&ocirc;i th&iacute;ch việc c&oacute; thể ngồi tại nh&agrave;, mặc bộ đồ ngủ của m&igrave;nh, bất chấp b&ecirc;n ngo&agrave;i trời đang nắng n&oacute;ng hay mưa gi&oacute;, t&ocirc;i c&oacute; thể mua sắm bất kỳ l&uacute;c n&agrave;o t&ocirc;i muốn. T&ocirc;i thấy thư gi&atilde;n khi mua sắm, nhưng t&ocirc;i gh&eacute;t sự hối hả của đ&aacute;m đ&ocirc;ng v&agrave; sự ồn &agrave;o&rdquo;</em>&nbsp;&ndash; Chị&nbsp;<strong>Nguyễn Thu Thủy</strong>&nbsp;&ndash; Doanh nh&acirc;n, chia sẻ.</p>\r\n<p>Sự thuật tiện l&agrave; 1 lợi &iacute;ch tuy&ecirc;t vời khi mua sắm trực tuyến tại shop bao cao su gai. Mua sắm trực tuyến rất đơn giản: bạn chỉ cần ngồi trước m&aacute;y t&iacute;nh, v&agrave;i c&uacute; click chuột, lựa chọn sản phẩm bạn th&iacute;ch trong rất nhiều sản phẩm. Sau đ&oacute; sản phẩm sẽ được giao trực tiếp đến tận nh&agrave; bạn.</p>\r\n<p>Nếu bạn cần mua qu&agrave; cho một người bạn tại tỉnh th&agrave;nh kh&aacute;c, bạn kh&ocirc;ng cần lo lắng, ch&uacute;ng t&ocirc;i sẽ g&oacute;i qu&agrave; v&agrave; vận chuyển sản phẩm đến người bạn của bạn nhanh ch&oacute;ng .</p>\r\n<h2>Sự lựa chọn đa dạng</h2>\r\n<p>Tại shop bao cao su gai, ch&uacute;ng t&ocirc;i tập trung v&agrave;o những sản phẩm độc nhất:</p>\r\n<ul class="list">\r\n<li><strong>ĐỘC NHẤT</strong>: 80% những sản phẩm tại shop bao cao su gai bạn kh&ocirc;ng thể t&igrave;m thấy nơi n&agrave;o kh&aacute;c ở Việt Nam.</li>\r\n<li><strong>GI&Aacute; HỢP L&Yacute;</strong>: . Nếu bạn t&igrave;m thấy trung t&acirc;m thương mại n&agrave;o b&aacute;n gi&aacute; thấp hơn shop bao cao su gai, ch&uacute;ng t&ocirc;i sẽ chấp nhận b&aacute;n cho bạn thấp hơn 5% so với gi&aacute; ở shop kh&aacute;c.</li>\r\n</ul>\r\n<p>Hơn nữa, shop bao cao su gai c&ograve;n c&oacute; thể nhận đặt h&agrave;ng v&agrave; chuyển h&agrave;ng đến tỉnh th&agrave;nh kh&aacute;c.</p>', '2013_06_23_09_24_10_Penguins.jpg,2013_06_23_09_24_10_Koala.jpg,2013_06_23_09_24_10_Desert.jpg', '1', 1371979450, 1372301718, '4');

-- --------------------------------------------------------

--
-- Table structure for table `shop_orders`
--

CREATE TABLE IF NOT EXISTS `shop_orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bill_to` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ship_to` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cart` text COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `shop_orders`
--

INSERT INTO `shop_orders` (`id`, `bill_to`, `ship_to`, `cart`, `info`, `status`, `order_status`, `create_date`) VALUES
(1, '{"email":"ngoctuan3010842003@yahoo.com","full_name":"Bui Doan Ngoc Tuan","phone":"84909793972","address":"27\\/21 Bui Tu Toan","description":"T\\u00c9T"}', '{"full_name":"Tan Phat","phone":"0123456789","address":"747 Lac Long Quan"}', '[{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1.2e+06","quantity":"1","value":1200000,"valueDiscount":60000,"valueAfterDiscount":1140000,"totalValueAfterDiscount":1140000,"formatValueDiscount":"60,000","formatValueAfterDiscount":"1,140,000","formatTotalValueAfterDiscount":"1,140,000","amountProductsInCart":3},{"category":"","name":"Xe \\u0111i\\u1ec7n abc","alias":"Xe-dien-abc","price":null,"quantity":"1","value":0,"valueDiscount":0,"valueAfterDiscount":0,"totalValueAfterDiscount":0,"formatValueDiscount":"0","formatValueAfterDiscount":"0","formatTotalValueAfterDiscount":"0","amountProductsInCart":3},{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2e+06","quantity":"1","value":2000000,"valueDiscount":0,"valueAfterDiscount":2000000,"totalValueAfterDiscount":2000000,"formatValueDiscount":"0","formatValueAfterDiscount":"2,000,000","formatTotalValueAfterDiscount":"2,000,000","amountProductsInCart":3}]', 'Nhanh , gon , le', '2', '2', 1378783091),
(2, '{"email":"tuan.buidoanngoc@gmail.com","full_name":"Tuan Bui Doan Ngoc","phone":"84909793972","address":"27\\/21 Bui Tu Toan","description":"test "}', '{"full_name":"Tuan Bui Doan Ngoc","phone":"84909793972","address":"27\\/21 Bui Tu Toan"}', '[{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2e+06","quantity":"1","value":2000000,"valueDiscount":0,"valueAfterDiscount":2000000,"totalValueAfterDiscount":2000000,"formatValueDiscount":"0","formatValueAfterDiscount":"2,000,000","formatTotalValueAfterDiscount":"2,000,000","amountProductsInCart":2},{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1.2e+06","quantity":"4","value":4800000,"valueDiscount":240000,"valueAfterDiscount":4560000,"totalValueAfterDiscount":6560000,"formatValueDiscount":"240,000","formatValueAfterDiscount":"4,560,000","formatTotalValueAfterDiscount":"6,560,000","amountProductsInCart":2}]', 'test thu coi', '2', '2', 1378897268),
(3, '{"email":"ngoctuan3010842003@yahoo.com","full_name":"Tuan Bui Doan Ngoc","phone":"84909793972","address":"27\\/21 Bui Tu Toan","description":"123 \\ntest at eaz s \\n e zeg zgz g zsg \\n zg zg zsg "}', '{"full_name":"Tuan Bui Doan Ngoc","phone":"84909793972","address":"27\\/21 Bui Tu Toan"}', '[{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2e+06","quantity":4,"value":8000000,"valueDiscount":0,"valueAfterDiscount":8000000,"totalValueAfterDiscount":8000000,"formatValueDiscount":"0","formatValueAfterDiscount":"8,000,000","formatTotalValueAfterDiscount":"8,000,000","amountProductsInCart":2},{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1.2e+06","quantity":"1","value":1200000,"valueDiscount":60000,"valueAfterDiscount":1140000,"totalValueAfterDiscount":1140000,"formatValueDiscount":"60,000","formatValueAfterDiscount":"1,140,000","formatTotalValueAfterDiscount":"1,140,000","amountProductsInCart":2}]', 'Khi quý khách có yêu cầu nhận sản phẩm tại địa chỉ khác, nhấn vào » Thêm / Sửa thông tin người nhận « ở bên dưới.<br />\nKhi quý khách có yêu cầu nhận sản phẩm tại địa chỉ khác, nhấn vào » Thêm / Sửa thông tin người nhận « ở bên dưới.', '2', '2', 1378959718),
(4, '{"email":"ngoctuan3010842003@yahoo.com","full_name":"tuan test ","phone":"09000000000","address":"dia chi","description":"desc"}', '{"full_name":"tuan test ","phone":"09000000000","address":"dia chi"}', '[{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1200000","quantity":"1","value":1200000,"valueDiscount":60000,"valueAfterDiscount":1140000,"totalValueAfterDiscount":1140000,"formatValueDiscount":"60,000","formatValueAfterDiscount":"1,140,000","formatTotalValueAfterDiscount":"1,140,000","amountProductsInCart":1}]', 'khac', '2', '2', 1380122636),
(5, '{"email":"tuan@gmail.com","full_name":"wwww","phone":"84977757911","address":"11","description":"22222"}', '{"full_name":"wwww","phone":"84977757911","address":"11"}', '[{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1200000","quantity":2,"value":2400000,"valueDiscount":120000,"valueAfterDiscount":2280000,"totalValueAfterDiscount":2280000,"formatValueDiscount":"120,000","formatValueAfterDiscount":"2,280,000","formatTotalValueAfterDiscount":"2,280,000","amountProductsInCart":2},{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2000000","quantity":"1","value":2000000,"valueDiscount":0,"valueAfterDiscount":2000000,"totalValueAfterDiscount":2000000,"formatValueDiscount":"0","formatValueAfterDiscount":"2,000,000","formatTotalValueAfterDiscount":"2,000,000","amountProductsInCart":2}]', '23333333333', '2', '2', 1380952026),
(6, '{"email":"tuan.buidoanngoc@gmail.com","full_name":"Tuan Doan Ngoc Bui","phone":"84977757911","address":"111111","description":""}', '{"full_name":"Tuan Doan Ngoc Bui","phone":"84977757911","address":"111111"}', '[{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2000000","quantity":"2","value":4000000,"valueDiscount":0,"valueAfterDiscount":4000000,"totalValueAfterDiscount":5140000,"formatValueDiscount":"0","formatValueAfterDiscount":"4,000,000","formatTotalValueAfterDiscount":"5,140,000","amountProductsInCart":1}]', '', '2', '2', 1380952152),
(7, '{"email":"tuan.buidoanngoc@gmail.com","full_name":"Tuan Doan Ngoc Bui","phone":"84977757911","address":"33333333","description":""}', '{"full_name":"Tuan Doan Ngoc Bui","phone":"84977757911","address":"33333333"}', '[{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2000000","quantity":"1","value":2000000,"valueDiscount":0,"valueAfterDiscount":2000000,"totalValueAfterDiscount":2000000,"formatValueDiscount":"0","formatValueAfterDiscount":"2,000,000","formatTotalValueAfterDiscount":"2,000,000","amountProductsInCart":2},{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1200000","quantity":"1","value":1200000,"valueDiscount":60000,"valueAfterDiscount":1140000,"totalValueAfterDiscount":1140000,"formatValueDiscount":"60,000","formatValueAfterDiscount":"1,140,000","formatTotalValueAfterDiscount":"1,140,000","amountProductsInCart":2}]', '', '2', '2', 1380960294),
(8, '{"username":"admin","email":"ngoctuan3010842003@yahoo.com1","full_name":"Bui Tran Ngoc Phu","phone":"09040909099","address":"27\\/21 Bui Tu Toan F.An Lac Q.Binh Tan","description":"t\\u00e9t\\n111111111111"}', '{"full_name":"phuong","phone":"09090999999999999","address":"dc 2","other":"2222222222\\n333333333"}', '[{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1200000","quantity":"1","value":1200000,"valueDiscount":60000,"valueAfterDiscount":1140000,"totalValueAfterDiscount":1140000,"formatValueDiscount":"60,000","formatValueAfterDiscount":"1,140,000","formatTotalValueAfterDiscount":"1,140,000","amountProductsInCart":2},{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2000000","quantity":"1","value":2000000,"valueDiscount":0,"valueAfterDiscount":2000000,"totalValueAfterDiscount":2000000,"formatValueDiscount":"0","formatValueAfterDiscount":"2,000,000","formatTotalValueAfterDiscount":"2,000,000","amountProductsInCart":2}]', '', '2', '2', 1381031773),
(9, '{"email":"ngoctuan3010842003@yahoo.com","full_name":"ttttttttt","phone":"99999999999","address":"btt","description":"eeeeeeeeeeeeeee\\nrrrrrrrrrrrrrrrr\\nttttttttttttttt"}', '{"full_name":"pppppppppppp","phone":"8888888888888888888","address":"dc 2","other":"khaccccccccccccccc"}', '[{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1200000","quantity":"1","value":1200000,"valueDiscount":60000,"valueAfterDiscount":1140000,"totalValueAfterDiscount":1140000,"formatValueDiscount":"60,000","formatValueAfterDiscount":"1,140,000","formatTotalValueAfterDiscount":"1,140,000","amountProductsInCart":2},{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2000000","quantity":"5","value":10000000,"valueDiscount":0,"valueAfterDiscount":10000000,"totalValueAfterDiscount":11140000,"formatValueDiscount":"0","formatValueAfterDiscount":"10,000,000","formatTotalValueAfterDiscount":"11,140,000","amountProductsInCart":2}]', '', '2', '2', 1381032259),
(10, '{"email":"ngoctuan3010842003@yahoo.com","full_name":"11111111","phone":"11112222222","address":"2223333333333333333","description":"444444444444"}', '{"full_name":"7777777777777","phone":"888888888888888","address":"99999999999999999","other":"444555555555555555"}', '[{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1200000","quantity":"1","value":1200000,"valueDiscount":60000,"valueAfterDiscount":1140000,"totalValueAfterDiscount":1140000,"formatValueDiscount":"60,000","formatValueAfterDiscount":"1,140,000","formatTotalValueAfterDiscount":"1,140,000","amountProductsInCart":2},{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2000000","quantity":"1","value":2000000,"valueDiscount":0,"valueAfterDiscount":2000000,"totalValueAfterDiscount":2000000,"formatValueDiscount":"0","formatValueAfterDiscount":"2,000,000","formatTotalValueAfterDiscount":"2,000,000","amountProductsInCart":2}]', '', '2', '2', 1381032622),
(11, '{"username":"gilla","email":"ngoctuan3010842003@yahoo.com","full_name":"Bui Doan Ngoc Tuan","phone":"0977757911","address":"27\\/21 Bui Tu Toan","description":"Design Web, Yii Framework, Symfony, HTML, CSS, JQuery\\nacbdddd"}', '{"full_name":"Bui Doan Ngoc Tuan","phone":"0977757911","address":"27\\/21 Bui Tu Toan","other":"test 123\\ntest 234"}', '[{"category":"","name":"650-10 PS","alias":"650-10-PS","price":"1200000","quantity":"1","value":1200000,"valueDiscount":60000,"valueAfterDiscount":1140000,"totalValueAfterDiscount":1140000,"formatValueDiscount":"60,000","formatValueAfterDiscount":"1,140,000","formatTotalValueAfterDiscount":"1,140,000","amountProductsInCart":2},{"category":"","name":"600-9 Nh\\u1eadt","alias":"600-9-Nhat","price":"2000000","quantity":"1","value":2000000,"valueDiscount":0,"valueAfterDiscount":2000000,"totalValueAfterDiscount":2000000,"formatValueDiscount":"0","formatValueAfterDiscount":"2,000,000","formatTotalValueAfterDiscount":"2,000,000","amountProductsInCart":2}]', '', '2', '2', 1381038552);

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE IF NOT EXISTS `shop_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) unsigned NOT NULL,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  KEY `FK_product_category` (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`id`, `cate_id`, `cate_name`, `name`, `alias`, `info`, `description`, `image`, `price`, `barcode`, `quantity`, `is_sale_off`, `discount`, `total_buy`, `is_popular`, `page`, `status`, `create_date`) VALUES
(1, 3, NULL, 'Vỏ xe nâng Bergougnan đặc ruột 600-9', 'Vo-xe-nang-Bergougnan-dac-ruot-600-9', 'Chúng tôi chuyên cung cấp mâm xe nâng và vỏ xe nâng Aichi, Bridgestone,Yokohama, ... đăc biệt cung cấp các loại vỏ xe nâng mới/cũ hiệu Bergougnan đặc ruột 600-9', '<p>Ch&uacute;ng t&ocirc;i chuy&ecirc;n b&aacute;n c&aacute;c loại&nbsp;<strong>vỏ xe n&acirc;ng</strong>,&nbsp;<strong>m&acirc;m xe n&acirc;ng</strong>&nbsp;với nhiều thương hiệu v&agrave; th&ocirc;ng số size phong ph&uacute;, đa dạng.</p>\r\n<p>Đặt biệt ch&uacute;ng t&ocirc;i chuy&ecirc;n b&aacute;n&nbsp;<strong>vỏ xe n&acirc;ng mới/cũ</strong>&nbsp;c&aacute;c loại nhập khẩu hiệu (Aichi, Bridgestone,Yokohama,&nbsp;Pio, Komachi, Pro, Rhino, caosumina, Deestone, Heung ah, Solido, cho c&aacute;c h&atilde;ng xe TCM, TOYOTA, KOMATSU, NISSAN, MITSUBISHI, HYSTER...)</p>\r\n<p>Ch&uacute;ng t&ocirc;i tự h&agrave;o l&agrave; nh&agrave; cung cấp sản phẩm mới / cũ hiệu&nbsp;<strong>Bergougnan đặc ruột 600-9</strong>&nbsp;với gi&aacute; cả phải chăng nhưng đảm bảo chất lượng</p>', '2013_10_06_23_30_18-vomamxenang-Vo-xe-nang-Bergougnan_600-9_1.jpg,2013_10_06_23_30_18-vomamxenang-Vo-xe-nang-Bergougnan_600-9_2.jpg', NULL, '6009Bergo', 0, '1', 5, 0, '1', '1', '1', 1378633484),
(2, 3, NULL, 'Vỏ xe nâng Bridgestone Japan đặc ruột 700-12', 'Vo-xe-nang-Bridgestone-Japan-dac-ruot-700-12', 'Chúng tôi chuyên cung cấp mâm xe nâng và vỏ xe nâng mới/cũ hiệu Bridgestone Japan đặc ruột 700-12 Aichi, Bridgestone,Yokohama', '<p>Ch&uacute;ng t&ocirc;i chuy&ecirc;n b&aacute;n c&aacute;c loại <strong>vỏ xe n&acirc;ng</strong>, <strong>m&acirc;m xe n&acirc;ng</strong> với nhiều thương hiệu v&agrave; th&ocirc;ng số size phong ph&uacute;, đa dạng.</p>\r\n<p>Đặt biệt ch&uacute;ng t&ocirc;i chuy&ecirc;n b&aacute;n <strong>vỏ xe n&acirc;ng mới/cũ</strong> c&aacute;c loại nhập khẩu hiệu (Aichi, Bridgestone,Yokohama,&nbsp;<span>Pio, Komachi, Pro, Rhino, caosumina, Deestone, Heung ah, Solido, cho c&aacute;c h&atilde;ng xe TCM, TOYOTA, KOMATSU, NISSAN, MITSUBISHI, HYSTER</span>...)</p>\r\n<p>Ch&uacute;ng t&ocirc;i tự h&agrave;o l&agrave; nh&agrave; cung cấp sản phẩm mới / cũ hiệu <strong>Bridgestone Japan đặc ruột 700-12</strong>&nbsp;với gi&aacute; cả phải chăng nhưng đảm bảo chất lượng</p>', '2013_10_06_23_17_36-vomamxenang-Vo-xe-nang-Tong-Yong_700-12.jpg', NULL, '70012ToYo', 10, '0', 0, 0, '1', '1', '1', 1378781469),
(3, 2, NULL, 'Xe điện abc', 'Xe-dien-abc', 'Chuyên cung cấp vỏ đặc, vỏ có ruột, mâm xe nâng, xe điện abc', '<p>Chuy&ecirc;n cung cấp vỏ đặc, vỏ c&oacute; ruột, m&acirc;m xe n&acirc;ng, xe điện abc</p>\r\n<p>Chuy&ecirc;n cung cấp vỏ đặc, vỏ c&oacute; ruột, m&acirc;m xe n&acirc;ng, xe điện abc</p>\r\n<p>Chuy&ecirc;n cung cấp vỏ đặc, vỏ c&oacute; ruột, m&acirc;m xe n&acirc;ng, xe điện abc</p>', '2013_09_13_16_32_50_vo-xe-dien-1.jpg,2013_09_13_16_35_21_vo-xe-dien-2.jpg', NULL, '50010D-D', 9, '0', 0, 1, '0', '1', '1', 1378782670),
(4, 3, NULL, 'Vỏ xe nâng Aichi đặc ruột 700-12', 'Vo-xe-nang-Aichi-dac-ruot-700-12', 'Chúng tôi chuyên cung cấp mâm xe nâng và vỏ xe nâng mới/cũ hiệu Aichi đặc ruột 700-12, Aichi, Bridgestone,Yokohama, ... đăc biệt cung cấp các loại vỏ xe nâng ', '<p>Ch&uacute;ng t&ocirc;i chuy&ecirc;n b&aacute;n c&aacute;c loại&nbsp;<strong>vỏ xe n&acirc;ng</strong>,&nbsp;<strong>m&acirc;m xe n&acirc;ng</strong>&nbsp;với nhiều thương hiệu v&agrave; th&ocirc;ng số size phong ph&uacute;, đa dạng.</p>\r\n<p>Đặt biệt ch&uacute;ng t&ocirc;i chuy&ecirc;n b&aacute;n&nbsp;<strong>vỏ xe n&acirc;ng mới/cũ</strong>&nbsp;c&aacute;c loại nhập khẩu hiệu (Aichi, Bridgestone,Yokohama,&nbsp;Pio, Komachi, Pro, Rhino, caosumina, Deestone, Heung ah, Solido, cho c&aacute;c h&atilde;ng xe TCM, TOYOTA, KOMATSU, NISSAN, MITSUBISHI, HYSTER...)</p>\r\n<p>Ch&uacute;ng t&ocirc;i tự h&agrave;o l&agrave; nh&agrave; cung cấp sản phẩm mới / cũ hiệu&nbsp;<strong>Aichi đặc ruột 700-12</strong>&nbsp;với gi&aacute; cả phải chăng nhưng đảm bảo chất lượng</p>', '2013_10_06_23_46_32-vomamxenang-Vo-xe-nang-Aichi_700-12_1.jpg', NULL, '', 1, '0', 0, 0, '1', '1', '1', 1381077992),
(6, 3, NULL, 'Vỏ xe nâng Aichi đặc ruột 28x9-15/700', 'Vo-xe-nang-Aichi-dac-ruot-28x9-15-700', 'Chúng tôi chuyên cung cấp mâm xe nâng và vỏ xe nâng mới/cũ hiệu Aichi đặc ruột 28x9-15/700 Aichi, Bridgestone,Yokohama', '<p>Ch&uacute;ng t&ocirc;i chuy&ecirc;n b&aacute;n c&aacute;c loại&nbsp;<strong>vỏ xe n&acirc;ng</strong>,&nbsp;<strong>m&acirc;m xe n&acirc;ng</strong>&nbsp;với nhiều thương hiệu v&agrave; th&ocirc;ng số size phong ph&uacute;, đa dạng.</p>\r\n<p>Đặt biệt ch&uacute;ng t&ocirc;i chuy&ecirc;n b&aacute;n&nbsp;<strong>vỏ xe n&acirc;ng mới/cũ</strong>&nbsp;c&aacute;c loại nhập khẩu hiệu (Aichi, Bridgestone,Yokohama,&nbsp;Pio, Komachi, Pro, Rhino, caosumina, Deestone, Heung ah, Solido, cho c&aacute;c h&atilde;ng xe TCM, TOYOTA, KOMATSU, NISSAN, MITSUBISHI, HYSTER...)</p>\r\n<p>Ch&uacute;ng t&ocirc;i tự h&agrave;o l&agrave; nh&agrave; cung cấp sản phẩm mới / cũ hiệu&nbsp;<strong>Aichi đặc ruột 28x9-15/700</strong>&nbsp;với gi&aacute; cả phải chăng nhưng đảm bảo chất lượng</p>', '2013_10_07_00_26_09-vomamxenang-Vo-xe-nang-Aichi_28x9-15-700_1.jpg,2013_10_07_00_26_09-vomamxenang-Vo-xe-nang-Aichi_28x9-15-700_2.jpg', NULL, '', 10, '0', 0, 0, '1', '1', '1', 1381080369);

-- --------------------------------------------------------

--
-- Table structure for table `shop_qa`
--

CREATE TABLE IF NOT EXISTS `shop_qa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned DEFAULT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop_review`
--

CREATE TABLE IF NOT EXISTS `shop_review` (
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
  KEY `FK_review_product` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop_video`
--

CREATE TABLE IF NOT EXISTS `shop_video` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_id` int(11) unsigned DEFAULT NULL,
  `link_youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page` tinyint(1) DEFAULT '0',
  `create_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_video_category` (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shop_video`
--

INSERT INTO `shop_video` (`id`, `name`, `alias`, `cate_id`, `link_youtube`, `status`, `page`, `create_date`) VALUES
(1, 'Gangnam style', 'Gangnam-style', 3, 'http://www.youtube.com/watch?v=VwwMzuiSEH0', '1', 1, 1379065872);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `fullname`, `birthday`, `phone`, `address`, `country`, `description`, `avatar`, `website`, `created_date`, `last_login`, `is_online`, `validation_code`, `validation_type`, `validation_expired`, `status`, `type`) VALUES
(1, 'gilla', '827ccb0eea8a706c4c34a16891f84e7b', 'ngoctuan3010842003@yahoo.com', 'Bui Doan Ngoc Tuan', '1984-10-30', '0977757911', '27/21 Bui Tu Toan', 'Viet Nam', 'Design Web, Yii Framework, Symfony, HTML, CSS, JQuery', '2013_08_23_06_27_37_Tulips.jpg,2013_08_23_06_27_37_Penguins.jpg,2013_08_23_06_28_25_Koala.jpg', 'http://web3in1.com', '2013-04-07', '2013-10-06', '1', '', NULL, NULL, '1', '0'),
(2, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'ngoctuan3010842003@yahoo.com1', 'Bui Tran Ngoc Phu', '2010-03-19', '09040909099', '27/21 Bui Tu Toan F.An Lac Q.Binh Tan', 'VN', 'tét', '', NULL, '2013-04-08', '2013-10-07', '1', '', NULL, 0, '1', '1'),
(3, 'user', '827ccb0eea8a706c4c34a16891f84e7b', 'ngoctuan3010842003@yahoo.com2', 'wwww', '0000-00-00', '3543412345', '4334', 'VN', '11111111', NULL, NULL, '2013-04-08', '2013-04-08', NULL, NULL, NULL, 0, '1', '3'),
(7, 'abctest', 'e10adc3949ba59abbe56e057f20f883e', 'gangtergilla4@gmail.com', 'abc test', '1988-07-15', '09090909090', '27.21 bui tu toan', 'VN', 'vvvvvvvvvv', '2013_08_23_05_28_15_create-crud-by-model.png,2013_08_23_05_28_15_Chrysanthemum.jpg', 'http://web3in1.com', '2013-08-23', '0000-00-00', '2', '', NULL, NULL, '1', '3');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD CONSTRAINT `FK_product_category` FOREIGN KEY (`cate_id`) REFERENCES `shop_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_review`
--
ALTER TABLE `shop_review`
  ADD CONSTRAINT `FK_review_product` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_video`
--
ALTER TABLE `shop_video`
  ADD CONSTRAINT `FK_video_category` FOREIGN KEY (`cate_id`) REFERENCES `shop_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2022 at 09:25 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_kharch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kharch`
--

DROP TABLE IF EXISTS `tbl_kharch`;
CREATE TABLE IF NOT EXISTS `tbl_kharch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `item_name` varchar(200) DEFAULT NULL,
  `item_qntt` varchar(200) DEFAULT NULL,
  `item_amount` varchar(11) DEFAULT NULL,
  `person` varchar(200) DEFAULT NULL,
  `amount` varchar(11) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `dor` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kharch`
--

INSERT INTO `tbl_kharch` (`id`, `user_id`, `item_name`, `item_qntt`, `item_amount`, `person`, `amount`, `date`, `dor`) VALUES
(17, 1, '', '', '', 'mummy', '5000', '2022-12-03', '2022-12-03 14:48:58'),
(18, 1, 'chawal', '5kg', '250', '', '', '2022-12-03', '2022-12-03 14:50:30'),
(19, 1, 'dal', '2kg', '220', '', '', '2022-12-03', '2022-12-03 14:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `mobile`, `email`, `password`, `dor`) VALUES
(1, 'prad', '7898456512', 'prad@gmail.com', '123', '2022-12-03 14:24:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2013 at 08:25 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoes_app`
--
CREATE DATABASE IF NOT EXISTS `shoes_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shoes_app`;

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heel` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `formal` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `heel`, `price`, `color`, `formal`, `season`) VALUES
(1, 14, 120, 10, 10, 4),
(2, 14, 120, 2, 10, 4),
(3, 7, 100, 10, 10, 4),
(4, 10, 100, 2, 10, 4),
(5, 6, 80, 7, 10, 4),
(6, 8, 100, 2, 10, 4),
(7, 1, 50, 8, 5, 4),
(8, 1, 80, 10, 5, 4),
(9, 1, 60, 10, 4, 4),
(10, 1, 50, 2, 5, 4),
(11, 1, 50, 5, 1, 7),
(12, 1, 50, 3, 1, 7),
(13, 2, 130, 10, 5, 9),
(14, 1, 80, 2, 1, 10),
(15, 1, 80, 10, 1, 10),
(16, 1, 80, 5, 1, 10),
(17, 1, 130, 10, 4, 8),
(18, 1, 130, 8, 4, 8),
(19, 7, 40, 8, 6, 7),
(20, 7, 40, 10, 6, 7),
(21, 11, 160, 10, 10, 9),
(22, 12, 150, 10, 10, 9),
(23, 7, 140, 10, 10, 9),
(24, 9, 150, 8, 10, 8),
(25, 8, 130, 10, 10, 9),
(26, 14, 200, 10, 10, 7),
(27, 9, 130, 8, 9, 8),
(28, 11, 130, 8, 9, 8),
(29, 10, 150, 10, 10, 8),
(30, 2, 130, 10, 8, 9),
(31, 2, 180, 8, 8, 8),
(32, 3, 150, 10, 8, 8),
(33, 4, 150, 10, 7, 8),
(34, 2, 140, 10, 7, 7),
(35, 2, 200, 10, 6, 8),
(36, 2, 170, 10, 8, 8),
(37, 2, 120, 10, 4, 7),
(38, 2, 120, 8, 4, 7),
(39, 2, 120, 10, 5, 7),
(40, 2, 120, 8, 5, 7),
(41, 2, 100, 10, 5, 5),
(42, 2, 60, 5, 5, 5),
(43, 2, 60, 8, 5, 5),
(44, 2, 100, 9, 5, 5),
(45, 2, 80, 3, 2, 6),
(46, 2, 80, 2, 2, 6),
(47, 2, 80, 10, 2, 6),
(48, 8, 100, 9, 10, 4),
(49, 8, 100, 8, 10, 4),
(50, 10, 120, 8, 10, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

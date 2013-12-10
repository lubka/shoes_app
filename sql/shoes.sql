-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2013 at 11:18 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comfort` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `formal` int(11) NOT NULL,
  `warm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `comfort`, `price`, `color`, `formal`, `warm`) VALUES
(1, 1, 120, 10, 10, 4),
(2, 1, 120, 2, 10, 4),
(3, 7, 100, 10, 10, 4),
(4, 5, 100, 2, 10, 4),
(5, 7, 80, 7, 10, 4),
(6, 7, 100, 2, 10, 4),
(7, 8, 50, 8, 5, 4),
(8, 8, 80, 10, 5, 4),
(9, 8, 60, 10, 4, 4),
(10, 8, 50, 2, 5, 4),
(11, 10, 50, 5, 1, 7),
(12, 10, 50, 3, 1, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

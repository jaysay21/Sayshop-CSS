-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2013 at 04:26 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Sayshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(30) DEFAULT NULL,
  `cust_num` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `prod` varchar(40) DEFAULT NULL,
  `quan` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `warranty` date DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_num`, `address`, `prod`, `quan`, `date`, `warranty`) VALUES
(63, 'asdasd', '23', 'asd', NULL, '50', '2013-05-22', '2013-08-22'),
(64, 'asdasd', '23', 'asd', NULL, '20', '2013-05-22', '2013-08-22'),
(65, 'w', '34', 'w', NULL, '1', '2013-05-22', '2013-08-22'),
(66, 'w', '342', 'w', NULL, '1', '2013-05-22', '2013-08-22'),
(67, 'kenneth', '3219998', 'tacloban', NULL, '5', '2013-05-22', '2013-08-22'),
(68, 'kenneth', '3219998', 'tacloban', NULL, '5', '2013-05-22', '2013-08-22'),
(69, 'kenneth', '3219998', 'tacloban', NULL, '5', '2013-05-22', '2013-08-22'),
(70, 'asdasd', '432', 'tacloban', NULL, '5', '2013-05-22', '2013-08-22'),
(71, 'asd', '232323', 'tacloban', NULL, '5', '2013-05-22', '2013-08-22'),
(72, 'jay', '3213998', 'tacloban', NULL, '5', '2013-05-22', '2013-08-22'),
(73, 'jay', '32139998', 'tacloban', NULL, '10', '2013-05-22', '2013-08-22'),
(74, 'polu', '3231399', 'cebu', NULL, '5', '2013-05-22', '2013-08-22'),
(75, 'joseel', '231999', 'palo', NULL, '5', '2013-05-22', '2013-08-22'),
(76, 'joseel', '23123', 'palo', NULL, '10', '2013-05-22', '2013-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`) VALUES
(1, 'jay', 'jaycute');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(40) DEFAULT NULL,
  `prod_price` int(30) DEFAULT NULL,
  `stocks` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`prod_id`, `prod_name`, `prod_price`, `stocks`) VALUES
(78, 'Mouse', 200, -42),
(79, 'Keyboards', 200, -34324),
(80, 'monitor', 1, -50),
(81, 'Video Card', 1000, -3),
(82, 'Video Card', 1000, -50),
(83, 'Ram', 100, -50),
(84, 'Cpu', 100, -20),
(85, 'Webcam', 100, -1),
(86, 'Web', 100, 169),
(87, '', 0, 0),
(88, 'lcd', 500, 0),
(89, 'lipstick', 50, 990);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `cust_id` int(11) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`cust_id`, `prod_id`, `quantity`) VALUES
(41, 2013, NULL),
(42, 2013, NULL),
(43, 2013, NULL),
(44, 2013, NULL),
(45, 2013, NULL),
(46, 2013, NULL),
(47, 2013, NULL),
(48, 2013, NULL),
(49, 2013, NULL),
(50, 79, 42),
(51, 79, 150),
(52, 79, 150),
(53, 79, 150),
(54, 79, 9),
(55, 79, 5),
(56, 80, 50),
(57, 79, 34324),
(58, 81, 3),
(59, 81, 3),
(60, 81, 3),
(61, 82, 50),
(62, 82, 50),
(63, 83, 50),
(64, 84, 20),
(65, 85, 1),
(66, 86, 1),
(67, 88, 5),
(68, 88, 5),
(69, 88, 5),
(70, 88, 5),
(71, 86, 5),
(72, 86, 5),
(73, 86, 10),
(74, 86, 5),
(75, 86, 5),
(76, 89, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

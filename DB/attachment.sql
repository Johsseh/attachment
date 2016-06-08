-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2016 at 04:00 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attachment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `box` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `box`, `telephone`) VALUES
(1, '56465-Nairobi', '+25476899403');

-- --------------------------------------------------------

--
-- Table structure for table `educational`
--

CREATE TABLE IF NOT EXISTS `educational` (
  `edu_id` int(11) NOT NULL AUTO_INCREMENT,
  `college` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  PRIMARY KEY (`edu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `educational`
--

INSERT INTO `educational` (`edu_id`, `college`, `degree`) VALUES
(1, 'Meru University of Science and technology', 'Business information technology'),
(2, 'Meru University of Science and technology', 'Business information technology'),
(3, 'Strathmore', 'Code optimization');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `details_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(30) NOT NULL,
  PRIMARY KEY (`details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`details_id`, `name`, `dob`, `sex`) VALUES
(1, 'Joseph Mwendwa', '2016-06-09', 'male'),
(2, 'ecommerce', '2016-06-02', 'female');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

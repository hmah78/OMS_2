-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2020 at 03:29 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oms`
--

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

DROP TABLE IF EXISTS `guardian`;
CREATE TABLE IF NOT EXISTS `guardian` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `income` int(255) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `firstname`, `lastname`, `email`, `cnic`, `contact`, `income`, `address`, `password`) VALUES
(1, 'Aezaz', 'Ali', '22100070@lums.edu.pk', '35200-5250005-5', '0321 7423434', 1, 'qazi house canal view raod', 'ok123'),
(2, 'Awais', 'Furqan', 'furqanqazi.33@gmail.com', '35200-5250005-5', '0321 7423434', 1, 'qazi house canal view raod', 'awais3344');

-- --------------------------------------------------------

--
-- Table structure for table `guardian_application`
--

DROP TABLE IF EXISTS `guardian_application`;
CREATE TABLE IF NOT EXISTS `guardian_application` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `income` int(255) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `prefStID` int(255) NOT NULL,
  `guadAppID` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`guadAppID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian_application`
--

INSERT INTO `guardian_application` (`firstname`, `lastname`, `email`, `cnic`, `contact`, `income`, `address`, `prefStID`, `guadAppID`) VALUES
('Awais', 'Furqan', 'awaishassan512@yahoo.com', '35200-5250005-5', '0321 7423434', 3, 'qazi house canal view raod', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

DROP TABLE IF EXISTS `sponsor`;
CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `income` int(255) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `firstname`, `lastname`, `email`, `cnic`, `contact`, `income`, `address`, `password`) VALUES
(1, 'Furqan', 'Athar ', 'furqanqazi.33@gmail.com', '35200-5250005-5', '0321 7423434', 4, 'qazi house canal view raod', 'furqan3344');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_application`
--

DROP TABLE IF EXISTS `sponsor_application`;
CREATE TABLE IF NOT EXISTS `sponsor_application` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `income` int(255) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `prefStID` int(255) NOT NULL,
  `sponAppID` int(255) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`sponAppID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor_application`
--

INSERT INTO `sponsor_application` (`firstname`, `lastname`, `email`, `cnic`, `contact`, `income`, `address`, `prefStID`, `sponAppID`, `status`) VALUES
('Furqan', 'Athar ', 'furqanqazi.33@gmail.com', '35200-5250005-5', '0321 7423434', 20, 'qazi house canal view raod', 1, 1, 'Pending'),
('Furqan', 'Athar ', 'furqanqazi.33@gmail.com', '35200-5250005-5', '0321 7423434', 1, 'qazi house canal view raod', 1, 2, 'Pending');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(255) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Cnic` varchar(15) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Desigantion` varchar(255) NOT NULL,
  `EVC` int(100) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `doe` varchar(30) NOT NULL,
  `capacity` int(50) NOT NULL,
  `event_budget` int(50) NOT NULL,
  `Location` varchar(15) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(255) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(90) NOT NULL,
  `Last_name` varchar(90) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `CNIC` varchar(15) NOT NULL,
  `Place_birth` varchar(15) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
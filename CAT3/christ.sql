-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2016 at 04:40 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `christ`
--

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE IF NOT EXISTS `stuinfo` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`stu_id`, `stu_name`, `age`, `gender`,`course`, `address`, `comment`) VALUES
(1, 'Janahi', '23', 'Male', 'Physics', 'Putheri', 'Great'),
(2, 'Siva', '22', 'Male', 'Computer', 'Eraniel', 'No comment!');

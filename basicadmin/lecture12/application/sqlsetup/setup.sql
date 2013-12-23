-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2012 at 08:01 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `dsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE IF NOT EXISTS `adminusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'letmein');

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE IF NOT EXISTS `cinemas` (
  `cinema_id` int(11) NOT NULL AUTO_INCREMENT,
  `cinema_title` varchar(50) NOT NULL,
  PRIMARY KEY (`cinema_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`cinema_id`, `cinema_title`) VALUES
(1, 'Cinema 1'),
(2, 'Cinema 2'),
(3, 'Cinema 3'),
(4, 'Cinema 4');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `_cinema_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `runningtime` int(11) NOT NULL,
  `rating` enum('G','PG','12A','15A','16','18') NOT NULL,
  `description` varchar(50) NOT NULL,
  `imagefile` varchar(150) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `_cinema_id`, `title`, `runningtime`, `rating`, `description`, `imagefile`) VALUES
(1, 3, 'Jaws', 120, '18', '  des here  \r\n  ', ''),
(2, 1, 'Jaws 2', 120, '18', 'des here', ''),
(3, 1, 'Jaws 3', 120, '18', '    des here  \r\n    \r\n  ', ''),
(4, 1, 'Excalibur', 120, '18', 'des here', ''),
(5, 1, 'Aladdin', 120, '18', 'des here', ''),
(6, 1, 'testing', 120, '18', 'des here', ''),
(7, 2, 'testdsfsf', 134, '18', '    des here  \r\n    \r\n  ', ''),
(8, 1, 'asfd', 120, '18', 'des here', ''),
(9, 1, 'Test Loc', 120, '18', '    des here  \r\n    \r\n  ', ''),
(10, 1, 'fadfsaf', 65, '18', '    des here  \r\n    \r\n  ', ''),
(11, 1, 'asfasdf', 345, '18', '    des here  \r\n    \r\n  ', ''),
(12, 1, 'Jaws', 120, '18', '', ''),
(13, 1, 'Jaws', 120, '18', '', ''),
(14, 1, 'Superman', 120, '18', '', ''),
(15, 1, 'Jaws2', 120, '18', '', ''),
(16, 1, 'The Sweeney', 120, '18', '', ''),
(17, 1, 'Jaws', 120, '18', '', ''),
(18, 1, 'Aladdin', 120, '18', '', ''),
(19, 1, 'Jaws', 120, '18', '', ''),
(20, 0, 'My', 120, '18', '', ''),
(21, 0, 'sdfsf', 120, '18', '', ''),
(22, 0, 'SDFD', 120, '18', '', ''),
(23, 0, 'FFFF', 120, '18', '', ''),
(24, 0, 'sdff', 120, '18', '', ''),
(25, 0, 'ff', 120, '18', '', ''),
(26, 0, '', 120, '18', '', ''),
(27, 0, '', 120, '18', '', ''),
(28, 0, '', 120, '18', '', ''),
(29, 0, '', 120, '18', '', 'DSC04142.JPG'),
(30, 0, 'fff', 120, '18', '', ''),
(31, 0, 'ffff', 120, '18', '', 'DSC04142.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `movietimes`
--

CREATE TABLE IF NOT EXISTS `movietimes` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `movietime` varchar(5) NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `movietimes`
--

INSERT INTO `movietimes` (`time_id`, `movie_id`, `movietime`) VALUES
(1, 7, '12:00'),
(2, 7, '13:00'),
(3, 5, '11:00'),
(4, 6, '17:00');

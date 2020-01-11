-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 08:52 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoraphy`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `LoginProcedure` (IN `userName` VARCHAR(80), IN `passwd` VARCHAR(80))  NO SQL
BEGIN
SELECT * FROM logsignup WHERE uname = userName and PASSWORD = passwd;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pwd`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `uname`, `phone`, `msg`) VALUES
('Akhil', 'Akhil', 'akhil@123.com', 99013045, 'Short Movie Cinematography Doubts'),
('Madan', 'Madan', 'madan@123.com', 7996547615, 'I need multiple services, call me asap'),
('Raj', 'Raj', 'raj@123.com', 881023654, 'Group photoshoot doubts, call me'),
('sup', 'sup', 'sup@123.com', 76156165, 'call me i am subbu');

-- --------------------------------------------------------

--
-- Table structure for table `logsignup`
--

CREATE TABLE `logsignup` (
  `uname` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `c_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logsignup`
--

INSERT INTO `logsignup` (`uname`, `email`, `password`, `c_password`) VALUES
('kmj', 'kmj@123.com', 'kmj3', 'kmj3');

-- --------------------------------------------------------

--
-- Table structure for table `pedit`
--

CREATE TABLE `pedit` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedit`
--

INSERT INTO `pedit` (`name`, `email`, `msg`) VALUES
('Akhil', 'akhil@123.com', 'Change the background of my Image'),
('Keval M Jain', 'ch@123.com', 'Change the background'),
('John', 'john@123.com', 'Increase the contrast of my photos'),
('johny', 'johny@123.com', 'contrast'),
('kaushal m jain', 'kaushal@123.com', 'Change the background of my Image'),
('Madan', 'madan@123.com', 'Increase the contrast of my photos'),
('subbu', 'sup@123.com', 'edit it');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`name`, `email`, `date`, `type`) VALUES
('Ahammed Hussain', 'ahamedhitt@gmail.com', '06/11/2019', 'Marriage Photoshoot'),
('Akhil', 'akhil@123.com', '12/11/2019', 'Single Photoshoot'),
('Keval M Jain', 'ch@123.com', '23/11/2019', 'Marriage Photoshoot'),
('John', 'john@123.com', '07/12/2019', 'Marriage Photoshoot'),
('Kaushal', 'kaushal@123.com', '29/11/2019', 'Group Photoshoot'),
('Keval Jain', 'keval1998.work@outlook.com', '13/11/2019', 'Marriage Photoshoot'),
('Kevin', 'kj@123.com', '23/11/2019', 'Marriage Photoshoot'),
('Madan', 'madan@123.com', '13/11/2019', 'Group Photoshoot'),
('subbu', 'sup@123.com', '13/11/2019', 'Group Photoshoot');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_insert`
--

CREATE TABLE `trigger_insert` (
  `uname` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_insert`
--

INSERT INTO `trigger_insert` (`uname`, `email`) VALUES
('', ''),
('subbu', 'subbu@brazzers.com'),
('jithin', 'jithin@123.com'),
('akhilesh', 'akhi@123.com'),
('akhilesh1', 'akhil@123.com'),
('kaushalmaster', 'kaushal@123.com'),
('jithinp', 'jithin@123.com'),
('pushka', 'pushka@123.com'),
('keval', 'kingkeval3@gmail.com'),
('john', 'john@123.com'),
('kmj', 'kmj@123.com'),
('kmj', 'kmj@123.com'),
('john', 'john@123.com'),
('kmj', 'kmj@123.com'),
('john', 'john@123.com');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`name`, `email`, `date`, `type`) VALUES
('Akhil', 'akhil@123.com', '23/11/2019', 'Short Movie'),
('Madan', 'madan@123.com', '23/11/2019', 'Youtube/Other online Videoshoot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `logsignup`
--
ALTER TABLE `logsignup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pedit`
--
ALTER TABLE `pedit`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

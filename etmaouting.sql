-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2016 at 06:04 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etmaouting`
--

-- --------------------------------------------------------

--
-- Table structure for table `agegroup`
--

CREATE TABLE IF NOT EXISTS `agegroup` (
  `AGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `brethren`
--

CREATE TABLE IF NOT EXISTS `brethren` (
  `Id` int(50) NOT NULL,
  `First Name` char(15) COLLATE utf8_bin NOT NULL,
  `Last Name` char(15) COLLATE utf8_bin NOT NULL,
  `Contact` int(11) DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `brethren`
--

INSERT INTO `brethren` (`Id`, `First Name`, `Last Name`, `Contact`, `email`) VALUES
(1, 'boaz', 'Macharia', 700500734, 'Admin@boss.com'),
(2, 'peter', 'wachira', 745789342, 'peter@boss.com');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `startdate` varchar(48) NOT NULL,
  `enddate` varchar(48) NOT NULL,
  `allDay` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `startdate`, `enddate`, `allDay`) VALUES
(1, 'Going to Karura', '2016-02-07T02:30:00', '2016-02-07T05:00:00', 'false'),
(2, 'Holy Communion', '2016-02-14T03:30:00', '2016-02-14T03:30:00', 'false'),
(4, 'out', '2016-02-21T00:00:00+05:30', '2016-02-21T00:00:00+05:30', 'false'),
(5, 'New Event', '2016-02-21T00:00:00+05:30', '2016-02-21T00:00:00+05:30', 'false'),
(6, 'New Event', '2016-02-21T00:00:00+05:30', '2016-02-21T00:00:00+05:30', 'false'),
(7, 'going home', '2016-02-29T00:00:00+05:30', '2016-02-29T00:00:00+05:30', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `Events` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brethren`
--
ALTER TABLE `brethren`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brethren`
--
ALTER TABLE `brethren`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

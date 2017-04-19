-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2016 at 09:30 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `holiday`
--

-- --------------------------------------------------------

--
-- Table structure for table `customertb`
--

CREATE TABLE IF NOT EXISTS `customertb` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customertb`
--

INSERT INTO `customertb` (`cid`, `name`, `phone`, `email`, `username`, `password`) VALUES
(1, 'fleming', '1234', 'fleming@gmail.com', 'fleming', 'fleming');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `cid`, `feedback`) VALUES
(2, 1, 'new feedback'),
(3, 1, 'new srecond'),
(4, 1, 'hjghj'),
(5, 1, 'fghfghfghfg'),
(6, 1, 'fgjhfgjh'),
(7, 1, 'kluiouioiiiiiiiiiiiiiiiiiiii'),
(8, 1, 'jkljlklkjl'),
(9, 1, 'jkhkhjk'),
(10, 1, 'feedback');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gid` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `location`, `image`) VALUES
(11, 'singapore', '../images/d6.jpg'),
(20, 'singapore', '../images/d2.jpg'),
(23, 'singapore', '../images/d5.jpg'),
(24, 'singapore', '../images/d6.jpg'),
(25, 'singapore', '../images/d1.jpg'),
(26, 'singapore', '../images/d4.jpg'),
(27, 'singapore', '../images/d1.jpg'),
(28, 'singapore', '../images/d3.jpg'),
(29, 'singapore', '../images/d4.jpg'),
(30, 'singapore', '../images/d5.jpg'),
(33, 'singapore', '../images/d5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `lid` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lid`, `location`) VALUES
(4, 'pattaya'),
(6, 'singapore'),
(7, 'laksha dweep'),
(8, 'kulu manali'),
(9, 'jordhan'),
(10, 'mecca'),
(11, 'varanassi');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `pkid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkid`, `vid`, `name`, `type`, `location`, `duration`, `amount`, `description`) VALUES
(2, 1, 'pattaya tour', 'family pack', 'pattaya', '3weeks', 'rs.50000', 'pattaya tour 3weeks pattaya tour 3weeks pattaya tour'),
(4, 1, 'pattaya tour 1 week', 'honey moon pack', 'pattaya', '1 week', 'rs.450000', 'pattaya tour 1 week pattaya tour 1 week pattaya tour 1 week'),
(5, 1, 'singapore one month trip', 'educational tour', 'singapore', '1 month', 'rs.40000', 'singapore one month trip singapore one month trip singapore one month trip singapore one month trip');

-- --------------------------------------------------------

--
-- Table structure for table `package_apply`
--

CREATE TABLE IF NOT EXISTS `package_apply` (
  `paid` int(11) NOT NULL,
  `pkid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_apply`
--

INSERT INTO `package_apply` (`paid`, `pkid`, `vid`, `cid`, `date`, `status`, `message`) VALUES
(1, 5, 1, 1, '2016-03-01', 0, ''),
(2, 2, 1, 1, '2016-03-01', 1, 'Congrats! Your Package is Approved We will contact you Immediately'),
(3, 2, 1, 1, '2016-03-05', 1, 'Congrats! Your Package is Approved We will contact you Immediately');

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

CREATE TABLE IF NOT EXISTS `package_type` (
  `pktypid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_type`
--

INSERT INTO `package_type` (`pktypid`, `type`) VALUES
(1, 'family pack'),
(2, 'honey moon pack'),
(4, 'educational tour'),
(5, 'pilgrim tour');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pyid` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `pkid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `account` varchar(50) NOT NULL,
  `cvv` varchar(50) NOT NULL,
  `ticket` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pyid`, `paid`, `pkid`, `vid`, `cid`, `account`, `cvv`, `ticket`) VALUES
(2, 2, 2, 1, 1, '4111111111111', '45555555555555', '52967664'),
(3, 2, 2, 1, 1, '', '', '16197374');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `vid` int(11) NOT NULL,
  `agency` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vid`, `agency`, `phone`, `email`, `username`, `password`, `status`) VALUES
(1, 'travels', '12345', 'travels@gmail.com', 'vendor', 'vendor', 1),
(3, 'jibin', '1223344', 'jibinpjoseppm@gmail.com', 'jibin', 'jibin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customertb`
--
ALTER TABLE `customertb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkid`);

--
-- Indexes for table `package_apply`
--
ALTER TABLE `package_apply`
  ADD PRIMARY KEY (`paid`);

--
-- Indexes for table `package_type`
--
ALTER TABLE `package_type`
  ADD PRIMARY KEY (`pktypid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pyid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customertb`
--
ALTER TABLE `customertb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pkid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `package_apply`
--
ALTER TABLE `package_apply`
  MODIFY `paid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `package_type`
--
ALTER TABLE `package_type`
  MODIFY `pktypid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pyid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

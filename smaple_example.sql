-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2016 at 11:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smaple_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadidate_list`
--

CREATE TABLE `cadidate_list` (
  `Id` int(11) NOT NULL,
  `CATENAME` varchar(150) NOT NULL,
  `CADDR` text NOT NULL,
  `NADDR` text NOT NULL,
  `CATEGEN` int(5) NOT NULL,
  `CATEMOB` varchar(15) NOT NULL,
  `CATEDOB` date NOT NULL,
  `ATIME` varchar(25) NOT NULL,
  `CATEMONTH` varchar(50) NOT NULL,
  `CATEHEIGHT` varchar(15) NOT NULL,
  `CATEWEIGHT` varchar(15) NOT NULL,
  `CATECPLEX` int(25) NOT NULL,
  `CATEQDESC1` text NOT NULL,
  `CATEQDESC2` text NOT NULL,
  `CATEBTYPE` int(10) NOT NULL,
  `CATEBDESC` text NOT NULL,
  `CATEOADDR` text NOT NULL,
  `CATEBINCOME` varchar(25) NOT NULL,
  `CATEFNAME` varchar(100) NOT NULL,
  `CATEFAGE` varchar(5) NOT NULL,
  `CATEFPDESC` text NOT NULL,
  `CATEFINCOME` varchar(25) NOT NULL,
  `CATEFNATIVE` text NOT NULL,
  `CATEFPHNNO` varchar(15) NOT NULL,
  `CATEMNAME` varchar(150) NOT NULL,
  `CATEMAGE` varchar(5) NOT NULL,
  `CATEMPDESC` text NOT NULL,
  `CATEMINCOME` varchar(25) NOT NULL,
  `CATEMNATIVE` text NOT NULL,
  `CATEMPHNNO` varchar(15) NOT NULL,
  `CATEIDSTAR` int(5) NOT NULL,
  `CATELAK` text NOT NULL,
  `CATEDASA` text NOT NULL,
  `CATEOHTYPE` int(5) NOT NULL,
  `CATEOPROPDESC` text NOT NULL,
  `CATEID` varchar(25) NOT NULL,
  `CATEEMAIL` varchar(150) NOT NULL,
  `CATEPWD` varchar(150) NOT NULL,
  `CATEDOR` date NOT NULL,
  `CATEDORENEW` date NOT NULL,
  `CATEPERIOD` int(5) NOT NULL,
  `CATEIMG1` text NOT NULL,
  `CATEIMG2` text NOT NULL,
  `CATEIMG3` text NOT NULL,
  `CATER1` varchar(20) NOT NULL,
  `CATER2` varchar(20) NOT NULL,
  `CATER3` varchar(20) NOT NULL,
  `CATER4` varchar(20) NOT NULL,
  `CATER5` varchar(20) NOT NULL,
  `CATER6` varchar(20) NOT NULL,
  `CATER7` varchar(20) NOT NULL,
  `CATER8` text NOT NULL,
  `CATER9` varchar(20) NOT NULL,
  `CATER10` varchar(20) NOT NULL,
  `CATER11` varchar(20) NOT NULL,
  `CATER12` varchar(20) NOT NULL,
  `CATEA1` varchar(20) NOT NULL,
  `CATEA2` varchar(20) NOT NULL,
  `CATEA3` varchar(20) NOT NULL,
  `CATEA4` varchar(20) NOT NULL,
  `CATEA5` varchar(20) NOT NULL,
  `CATEA6` varchar(20) NOT NULL,
  `CATEA7` varchar(20) NOT NULL,
  `CATEA8` varchar(20) NOT NULL,
  `CATEA9` varchar(20) NOT NULL,
  `CATEA10` varchar(20) NOT NULL,
  `CATEA12` varchar(20) NOT NULL,
  `DISPSTATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cadidate_list`
--

INSERT INTO `cadidate_list` (`Id`, `CATENAME`, `CADDR`, `NADDR`, `CATEGEN`, `CATEMOB`, `CATEDOB`, `ATIME`, `CATEMONTH`, `CATEHEIGHT`, `CATEWEIGHT`, `CATECPLEX`, `CATEQDESC1`, `CATEQDESC2`, `CATEBTYPE`, `CATEBDESC`, `CATEOADDR`, `CATEBINCOME`, `CATEFNAME`, `CATEFAGE`, `CATEFPDESC`, `CATEFINCOME`, `CATEFNATIVE`, `CATEFPHNNO`, `CATEMNAME`, `CATEMAGE`, `CATEMPDESC`, `CATEMINCOME`, `CATEMNATIVE`, `CATEMPHNNO`, `CATEIDSTAR`, `CATELAK`, `CATEDASA`, `CATEOHTYPE`, `CATEOPROPDESC`, `CATEID`, `CATEEMAIL`, `CATEPWD`, `CATEDOR`, `CATEDORENEW`, `CATEPERIOD`, `CATEIMG1`, `CATEIMG2`, `CATEIMG3`, `CATER1`, `CATER2`, `CATER3`, `CATER4`, `CATER5`, `CATER6`, `CATER7`, `CATER8`, `CATER9`, `CATER10`, `CATER11`, `CATER12`, `CATEA1`, `CATEA2`, `CATEA3`, `CATEA4`, `CATEA5`, `CATEA6`, `CATEA7`, `CATEA8`, `CATEA9`, `CATEA10`, `CATEA12`, `DISPSTATUS`) VALUES
(2, 'test', '', '', 0, '', '0000-00-00', '00:00:00', '', '', '', 0, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', '', '', '0000-00-00', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadidate_list`
--
ALTER TABLE `cadidate_list`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadidate_list`
--
ALTER TABLE `cadidate_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

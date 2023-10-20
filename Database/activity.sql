-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 04:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `Act_ID` int(10) NOT NULL,
  `Act_Name` varchar(30) NOT NULL,
  `Act_Date` datetime NOT NULL,
  `Act_Desc` text NOT NULL,
  `Act_MaxJoin` int(10) NOT NULL,
  `Act_Location` varchar(30) NOT NULL,
  `Act_Price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Act_ID`, `Act_Name`, `Act_Date`, `Act_Desc`, `Act_MaxJoin`, `Act_Location`, `Act_Price`) VALUES
(1, 'Apex', '2022-09-11 04:15:09', 'APEX BLABLABLABLABLABLA', 30, 'British', 300.00),
(2, 'Valorant', '2022-09-11 04:15:34', 'Valorant bla bla bla bal bal bal balab labalb labllaskd klsjnxifas lk;ajsdlk ;aso;dkhas jksdhakjsducwd sjdsjkhca jsdhwjdhsjkhc sdjakhsdncajks ', 60, 'Singapore', 150.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Act_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `Act_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

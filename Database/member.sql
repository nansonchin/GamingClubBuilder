-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 08:30 AM
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
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Mem_MemberID` int(10) NOT NULL,
  `Mem_Member_Name` varchar(30) NOT NULL,
  `Mem_UserName` varchar(30) NOT NULL,
  `Mem_Password` varchar(30) NOT NULL,
  `Mem_Email` varchar(50) NOT NULL,
  `Mem_Phone` int(14) NOT NULL,
  `Mem_IsAdmin` tinyint(1) NOT NULL,
  `Mem_MemberGender` char(1) NOT NULL,
  `Mem_status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Mem_MemberID`, `Mem_Member_Name`, `Mem_UserName`, `Mem_Password`, `Mem_Email`, `Mem_Phone`, `Mem_IsAdmin`, `Mem_MemberGender`, `Mem_status`) VALUES
(1, 'Ericht Samaya', 'ErichtSamaya', 'Ericht2022', 'Samaya@gmail.com', 109991234, 1, 'F', 'A'),
(2, 'Eureka', 'Eurelaa2022', 'Akerue', 'Eure@gmail.com', 192223333, 1, 'F', 'A'),
(3, 'Renton Thurston', 'RenThur', 'Ren12345T', 'RenThurs_@gmail.com', 103334444, 0, 'M', 'A'),
(4, 'Beon Hyo-Sonn', 'Beon1234', 'Hyo--Nnos', 'Beon@gmail.com', 118889999, 0, 'M', 'A'),
(5, 'Susanna Hopkins', 'Susanna1222', 'SusannaHopkins.', 'Susanna@gmail.com', 192227777, 0, 'F', 'A'),
(6, 'Rally Vincent', 'Rally5251', 'RallyVincent123', 'RallyVincent.@gmail.com', 189992222, 0, 'M', 'A'),
(7, 'abc', 'abc123', 'abc123', 'abc@gmail.com', 108182222, 1, 'M', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Mem_MemberID`),
  ADD KEY `Mem_status` (`Mem_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Mem_MemberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`Mem_status`) REFERENCES `status` (`Mem_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

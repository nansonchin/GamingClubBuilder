-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 04:30 AM
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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `P_Payment_ID` int(10) NOT NULL,
  `Mem_Member_ID` int(10) NOT NULL,
  `P_Payment_Amount` double(10,2) NOT NULL,
  `P_PaymentDate` datetime NOT NULL,
  `PT_Type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_Payment_ID`, `Mem_Member_ID`, `P_Payment_Amount`, `P_PaymentDate`, `PT_Type`) VALUES
(1, 1, 300.00, '2022-09-11 03:44:37', 'BT'),
(2, 1, 300.00, '2022-09-11 03:45:00', 'BC'),
(3, 1, 300.00, '2022-09-11 03:45:11', 'BC'),
(4, 6, 300.00, '2022-09-11 03:45:18', 'BC'),
(5, 4, 300.00, '2022-09-11 03:45:25', 'BT'),
(6, 4, 300.00, '2022-09-11 03:45:32', 'BC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`P_Payment_ID`),
  ADD KEY `PT_Type` (`PT_Type`),
  ADD KEY `Mem_Member_ID` (`Mem_Member_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `P_Payment_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Mem_Member_ID`) REFERENCES `member` (`Mem_MemberID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`PT_Type`) REFERENCES `payment_type` (`PT_Type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TCK_ID` int(10) NOT NULL,
  `Act_ID` int(10) NOT NULL,
  `TCK_Quantity` int(5) NOT NULL,
  `TCK_PurchaseDate` datetime NOT NULL,
  `P_Payment_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TCK_ID`, `Act_ID`, `TCK_Quantity`, `TCK_PurchaseDate`, `P_Payment_ID`) VALUES
(1, 1, 1, '2022-09-11 04:25:50', 1),
(2, 2, 2, '2022-09-11 04:26:40', 2),
(3, 1, 1, '2022-09-11 04:27:05', 3),
(4, 2, 2, '2022-09-11 04:27:46', 4),
(5, 1, 1, '2022-09-11 04:28:03', 5),
(6, 2, 2, '2022-09-11 04:28:14', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TCK_ID`),
  ADD KEY `P_Payment_ID` (`P_Payment_ID`),
  ADD KEY `Act_ID` (`Act_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `TCK_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`Act_ID`) REFERENCES `activity` (`Act_ID`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`P_Payment_ID`) REFERENCES `payment` (`P_Payment_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

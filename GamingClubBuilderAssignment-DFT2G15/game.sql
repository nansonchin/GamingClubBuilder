-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 04:19 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(10) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `Mem_MemberID` int(10) NOT NULL,
  `Admin_JoinDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_name`, `Mem_MemberID`, `Admin_JoinDate`) VALUES
(1, 'Ericht Samaya', 1, '0000-00-00'),
(2, 'Eureka', 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `admineventdetail`
--

CREATE TABLE `admineventdetail` (
  `Ev_ID` int(10) NOT NULL,
  `Ev_Title` varchar(30) NOT NULL,
  `Ev_SubTitle` text NOT NULL,
  `Ev_Desc` text NOT NULL,
  `Ev_Pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `AC_ID` int(10) NOT NULL,
  `AC_Desc` text NOT NULL,
  `AT_Type` varchar(2) NOT NULL,
  `AC_Date` datetime NOT NULL,
  `Admin_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`AC_ID`, `AC_Desc`, `AT_Type`, `AC_Date`, `Admin_ID`) VALUES
(1, 'New Staff Hiring bl bla', 'NS', '2022-09-11 03:36:53', 2),
(2, 'New Event Apex bla bla', 'NE', '2022-09-11 03:37:12', 2),
(3, 'Web page mc bla bla', 'NM', '2022-09-11 03:37:46', 2),
(4, 'New Staff For bla bla', 'NS', '2022-09-11 03:38:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement_type`
--

CREATE TABLE `announcement_type` (
  `AT_Type` varchar(2) NOT NULL,
  `AT_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_type`
--

INSERT INTO `announcement_type` (`AT_Type`, `AT_Name`) VALUES
('NE', 'New Event'),
('NM', 'Maintenance'),
('NS', 'New Staff Hiring');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Mem_MemberID` int(10) NOT NULL,
  `Mem_Member_FirstName` varchar(30) NOT NULL,
  `Mem_Member_LastName` varchar(30) NOT NULL,
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

INSERT INTO `member` (`Mem_MemberID`, `Mem_Member_FirstName`, `Mem_Member_LastName`, `Mem_UserName`, `Mem_Password`, `Mem_Email`, `Mem_Phone`, `Mem_IsAdmin`, `Mem_MemberGender`, `Mem_status`) VALUES
(1, 'Ericht aa', 'Samayaaaa', 'Ericht', 'ErichtSAMAYA', 'ErichtSSA@gmail.com', 10999123, 1, 'F', 'A'),
(2, 'Eureka', 'Eurela ', 'Eurelaa2022', 'Akerue', 'Eure@gmail.com', 192223333, 1, 'F', 'A'),
(3, 'Renton Thurston', 'Renton Haibo', 'RenThurosu', 'Ren12345T', 'RenThurs_@gmail.com', 103334444, 0, 'M', 'A'),
(4, 'Beon Hyo-Sonn', '', 'Beon1234', 'Hyo--Nnos', 'Beon@gmail.com', 118889999, 0, 'M', 'A'),
(5, 'Susanna Hopkins', '', 'Susanna1222', 'SusannaHopkins.', 'Susanna@gmail.com', 192227777, 0, 'F', 'A'),
(6, 'Rally Vincent', '123', 'Rally5251', 'RallyVincent123', 'RallyVincent.@gmail.com', 123344, 0, 'M', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `N_Notice_ID` int(10) NOT NULL,
  `N_Notice_Desc` varchar(30) NOT NULL,
  `N_Notice_Date` datetime NOT NULL,
  `NT_Type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`N_Notice_ID`, `N_Notice_Desc`, `N_Notice_Date`, `NT_Type`) VALUES
(9, 'Apex Legend is Coming', '2022-09-21 17:08:59', 'NW'),
(19, '1234abc', '0000-00-00 00:00:00', 'NW'),
(26, 'xxxxxxx', '0000-00-00 00:00:00', 'NW'),
(27, 'vvvvv', '2022-09-24 07:22:02', 'NW'),
(28, 'bbbbbb', '2022-09-24 07:24:06', 'NW'),
(29, 'bbbbb', '2022-09-24 07:24:11', 'NW'),
(30, 'hhhhhhhhh', '2022-09-24 07:24:41', 'NW'),
(31, 'abcggggggggg', '2022-09-24 07:24:48', 'NW'),
(32, 'JJJJJJJJJ', '2022-09-24 07:24:56', 'NW');

-- --------------------------------------------------------

--
-- Table structure for table `notice_type`
--

CREATE TABLE `notice_type` (
  `NT_Type` varchar(2) NOT NULL,
  `NT_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_type`
--

INSERT INTO `notice_type` (`NT_Type`, `NT_Name`) VALUES
('MN', 'Maintenance'),
('NN', 'New Notice'),
('NS', 'New Staff'),
('NW', 'News');

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

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `Payment_Status` varchar(2) NOT NULL,
  `Payment_Desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`Payment_Status`, `Payment_Desc`) VALUES
('CC', 'Cancel'),
('CP', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `PT_Type` varchar(2) NOT NULL,
  `PT_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_type`
--

INSERT INTO `payment_type` (`PT_Type`, `PT_Name`) VALUES
('BC', 'Bank Card'),
('BT', 'Bank Transaction');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Mem_status` varchar(2) NOT NULL,
  `Status_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Mem_status`, `Status_Name`) VALUES
('A', 'Active'),
('D', 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TCK_ID` int(10) NOT NULL,
  `Act_ID` int(10) NOT NULL,
  `TCK_Quantity` int(5) NOT NULL,
  `TCK_PurchaseDate` datetime NOT NULL,
  `P_Payment_ID` int(10) NOT NULL,
  `Payment_Status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TCK_ID`, `Act_ID`, `TCK_Quantity`, `TCK_PurchaseDate`, `P_Payment_ID`, `Payment_Status`) VALUES
(1, 1, 1, '2022-09-11 04:25:50', 1, 'CP'),
(2, 2, 2, '2022-09-11 04:26:40', 2, 'CP'),
(3, 1, 1, '2022-09-11 04:27:05', 3, 'CC'),
(4, 2, 2, '2022-09-11 04:27:46', 4, 'CP'),
(5, 1, 1, '2022-09-11 04:28:03', 5, 'CP'),
(6, 2, 2, '2022-09-11 04:28:14', 6, 'CC'),
(7, 1, 2, '2022-09-23 14:45:46', 5, 'CP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Act_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD KEY `Mem_MemberID` (`Mem_MemberID`);

--
-- Indexes for table `admineventdetail`
--
ALTER TABLE `admineventdetail`
  ADD PRIMARY KEY (`Ev_ID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`AC_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`),
  ADD KEY `AT_Type` (`AT_Type`);

--
-- Indexes for table `announcement_type`
--
ALTER TABLE `announcement_type`
  ADD PRIMARY KEY (`AT_Type`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Mem_MemberID`),
  ADD KEY `Mem_status` (`Mem_status`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`N_Notice_ID`),
  ADD KEY `NT_Type` (`NT_Type`);

--
-- Indexes for table `notice_type`
--
ALTER TABLE `notice_type`
  ADD PRIMARY KEY (`NT_Type`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`P_Payment_ID`),
  ADD KEY `PT_Type` (`PT_Type`),
  ADD KEY `Mem_Member_ID` (`Mem_Member_ID`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`Payment_Status`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`PT_Type`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Mem_status`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`TCK_ID`),
  ADD KEY `P_Payment_ID` (`P_Payment_ID`),
  ADD KEY `Act_ID` (`Act_ID`),
  ADD KEY `Payment_Status` (`Payment_Status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `Act_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `AC_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Mem_MemberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `N_Notice_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `P_Payment_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `TCK_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Mem_MemberID`) REFERENCES `member` (`Mem_MemberID`);

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`AT_Type`) REFERENCES `announcement_type` (`AT_Type`),
  ADD CONSTRAINT `announcement_ibfk_2` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`Mem_status`) REFERENCES `status` (`Mem_status`);

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`NT_Type`) REFERENCES `notice_type` (`NT_Type`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Mem_Member_ID`) REFERENCES `member` (`Mem_MemberID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`PT_Type`) REFERENCES `payment_type` (`PT_Type`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`Act_ID`) REFERENCES `activity` (`Act_ID`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`P_Payment_ID`) REFERENCES `payment` (`P_Payment_ID`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`Payment_Status`) REFERENCES `payment_status` (`Payment_Status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 02:02 PM
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
-- Structure for view `web_member`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `web_member`  AS SELECT `member`.`Mem_MemberID` AS `Mem_MemberID`, `member`.`Mem_Member_FirstName` AS `Mem_Member_FirstName`, `member`.`Mem_Member_LastName` AS `Mem_Member_LastName`, `member`.`Mem_UserName` AS `Mem_UserName`, `member`.`Mem_Password` AS `Mem_Password`, `member`.`Mem_Email` AS `Mem_Email`, `member`.`Mem_MemberGender` AS `Mem_MemberGender` FROM `member` WHERE `member`.`Mem_status` = 'A''A'  ;

--
-- VIEW `web_member`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

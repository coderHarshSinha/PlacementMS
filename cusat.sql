-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 08:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cusat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(255) NOT NULL,
  `AdminName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Number` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `AdminName`, `Email`, `Number`, `DOB`, `Qualification`, `Post`, `password`, `Cpassword`) VALUES
('1234', 'Nitish kumar', 'nitishkr6219@gmail.com', '8864093055', '2023-07-14', 'UG', 'NULL', '$2y$10$M/2OzxEH4tR8uYRQjg76jO4TqNEQGpUtveA0z.X/VzBxc.6AYdOhW', '$2y$10$Je7a1zVBR6lYPdc160wvRu6TU9P8baQlkRLZE5JlXpxpLj/Z61v1i');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CompID` varchar(255) NOT NULL,
  `CompName` varchar(255) NOT NULL,
  `MinGpa` varchar(255) NOT NULL DEFAULT 'Null',
  `MaxBack` varchar(255) NOT NULL DEFAULT 'Null',
  `Stipend` varchar(255) NOT NULL DEFAULT 'Null',
  `Salary` varchar(255) NOT NULL DEFAULT 'Null',
  `Profile` varchar(255) NOT NULL DEFAULT 'Null',
  `Posting` varchar(255) NOT NULL DEFAULT 'Null',
  `password` varchar(255) NOT NULL,
  `Cpassword` varchar(255) NOT NULL,
  `Webcompany` varchar(255) NOT NULL,
  `Comphead` varchar(255) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Bool` varchar(100) NOT NULL DEFAULT 'False'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompID`, `CompName`, `MinGpa`, `MaxBack`, `Stipend`, `Salary`, `Profile`, `Posting`, `password`, `Cpassword`, `Webcompany`, `Comphead`, `Date`, `Bool`) VALUES
('123', 'xwz', '6', '2', '20000', '50000', 'sd', 'chennai', '$2y$10$m7QmkNWjWalSaVrWMPeqd.QxtqTqb3hoS7z2DEYek948d.919GWP2', '$2y$10$v1E.9BmGbIhu5/kwZ1Er4OtPNdv3rUss1jqL3muYUnBTYThsbIOIu', 'zzzzz', 'mumbai', '2023-07-12', 'True'),
('1234', 'Google', '7', '3', '10000', '50000', 'sde', 'mumbai', '$2y$10$IIqbWuQWLt2QAVtl9lqvb.0IH7MxG840KTWKxbVKb5n4Lx23txB5O', '$2y$10$SiRrsH1d4asn9dlEbMKwWeUJ8jZH8o8ymqBVkLnR/plvaOYKxgxFm', 'www.google.com', 'New york', '2023-08-18', 'True'),
('123456', 'abcd', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', '$2y$10$4ks3NtV8XjR6W9TxVNJVmer3QtWdTgCnP3uCKNKENDuGbhjAWy0f6', '$2y$10$11dt94CZ5cDzY3NxDvdLwOEAKjrT4X5zJA.dAcMwSCoWloyx44GFu', 'www.google.com', 'New york', '2023-07-21', 'True'),
('786', 'sotty', '7', '2', '20000', '56000', 'sde', 'rajasthan', '$2y$10$t2Hz2lNkcsNnPhGytLFG0e195Wk5K7Oz8ObDqMmFQMtGJ5jA51hte', '$2y$10$gaEHqaiZKysnqJjPKBlgfeaz121hlW1/t1bpQsUVijw4rsG3h4Dzu', 'www.sotty.com', 'delhi', '2023-08-17', 'True'),
('800', 'IBM', '7', '3', '10000', '30000', 'sd', 'kolkata', '$2y$10$QmaTob1/Vrw26U4IhT3hm.KtmdmsdBpYWaKyGp2qJfl9x3y7WIl.O', '$2y$10$TFA4t2CKpY.PMGsR2MGofujxfGmfunYyJZ2q5dOgPSLKf/6o3LCs2', 'www.ibmindia.com', 'kochi', '2023-08-10', 'True'),
('98765', 'abc', '8', '3', '10000', '20000', 'sde', 'kochi', '$2y$10$zbRaEBewHXKEN3YcHowik.JByEdNI3DCNbsocC77u6YYfxLZtwZ6e', '$2y$10$XsI2FHmOFyVzbZxgWfUIfePaX3asZihuuPK4qpqY2eTmaFqsGZXBu', 'abc', 'ranchi', '2023-08-16', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Branch` varchar(230) NOT NULL,
  `percent10` varchar(255) NOT NULL,
  `percent12` varchar(255) NOT NULL,
  `PassYear` varchar(255) NOT NULL,
  `GPA` varchar(255) NOT NULL,
  `Back` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `Skills` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Cpassword` varchar(255) NOT NULL,
  `Bool` varchar(100) NOT NULL DEFAULT 'False',
  `Company` varchar(255) NOT NULL DEFAULT 'Not Registered',
  `Status` varchar(255) NOT NULL DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `FirstName`, `LastName`, `DOB`, `Email`, `Gender`, `Branch`, `percent10`, `percent12`, `PassYear`, `GPA`, `Back`, `Semester`, `Skills`, `Img`, `password`, `Cpassword`, `Bool`, `Company`, `Status`) VALUES
(3, 'Shekhar', 'Mayank', '2023-07-27', 'shekhar@gmail.com', 'Male', 'Information Technology', '', '', '', '', '', '4', 'C/C++ HTML CSS ', 'Image/home1.jpg', '$2y$10$NpxNJEN6bIamgxtxOSViIuyUFecfVmHE8a6BVwPUMESl.Mqpt8xFS', '$2y$10$MlrG0u5HGIF.uSeZNlC9EOjtDlii8mzScz2.zN921uyhFYCOaAUR.', 'False', 'Google', 'NULL'),
(4, 'anuj', 'kumar', '2023-08-02', 'anuj@gmail.com', 'Male', 'Information Technology', '', '', '', '', '', '4', 'C/C++ HTML  ', 'Image/IMG20221113141208.jpg', '$2y$10$e74FGxsaDsaYvJdjTk3PwuloA0m3kVLgf6rNpzHze4Ne8lIpsoTra', '$2y$10$3pOwM/bUhkAPfSBOh9TY8Ou5AwZLlJCD3Tgbbb4WB7au.MM4oL7Ha', 'False', 'Null', 'NULL'),
(124, 'suraj', 'kumar', '2023-07-22', 'suraj11@gmail.com', 'Male', 'Computer Science', '60', '48', '2023', '9', '5', '5', 'C/C++   ', 'Image/WIN_20230415_15_48_24_Pro.jpg', '$2y$10$zcaljgOgRp2sdqdO/FytOuKhLQWYpqMZsCBvv.NCrI87FCd9hES3m', '$2y$10$8TP1xu4RZggs8tLAnZBAteVN73O0fx0TeF.AoxhbdGpAE9UIkQ1Gm', 'False', 'Google', 'NULL'),
(420, 'Shubham', 'kumar', '2023-08-16', 'shubham@gmail.com', 'Male', 'Information Technology', '88', '80', '2019', '8', '1', '4', '   ', 'Image/IMG20220414173527.jpg', '$2y$10$F71vW3a4h0XdhSWUAy412..ddX7./aB5PcoYLa2aTIq6b7EPJiu56', '$2y$10$9zP72Sjjf0evoXSaT1161eJvN1nwl1ItegMwhAWFDm3nqcv6Dco3u', 'False', 'Google', 'Approved'),
(456, 'surajita', 'kumari', '2023-07-19', 'suraj21@gmail.com', 'Male', 'Computer Science', '80', '89', '20', '7', '2', '5', 'C/C++   ', 'Image/WIN_20230415_15_47_05_Pro.jpg', '$2y$10$V.DOexd3hWP.FPWeyA9osOtY7z45vko8IK5IdI1InUNmCN1L/bMuW', '$2y$10$Gu/zbTE0OWMxrr0GNeLCe.EL8J7PGrLZEy4ZpIUKL4ASiT7J4/dZG', 'False', 'Not Registered', 'NULL'),
(4321, 'Natasha', 'Sinha', '2004-03-27', 'natasha@gmail.com', 'Female', 'Computer Science', '98', '89', '2019', '9', '1', '4', 'C/C++   ', 'Image/WIN_20230415_15_49_14_Pro.jpg', '$2y$10$qrtrz.384LdM1kFM41PqWOVqfHoKwtIF3xYqnp5zQ6oVVDHrjbLd2', '$2y$10$adr/dI6LrjAytm0Mm8XcJeeuqyslDhpQIfcui3XyZX6x9793gfbX2', 'False', 'Google', 'NULL'),
(43210, 'ayush', 'kumar', '2023-07-12', 'ayush@gmail.com', '', 'Computer Science', '80', '78', '2019', '8', '1', '4', 'C/C++   ', 'Image/IMG_20230408_172019.jpg', '$2y$10$fHMAv2.M9.lWWDb5yIIHuOiZT4zpDADFUlYUhhimg32ZKHvcF4hYK', '$2y$10$K59EwfAYVqwmwfY0TRhCCOQm/rriGuID7snYIN0rAnFVLvOWCOore', 'False', 'Google', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

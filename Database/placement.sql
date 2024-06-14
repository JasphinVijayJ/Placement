-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 11:24 AM
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
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpdrive`
--

CREATE TABLE `addpdrive` (
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `C/P` tinyint(1) NOT NULL DEFAULT 0,
  `PVenue` varchar(255) NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `ODetails` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addpdrive`
--

INSERT INTO `addpdrive` (`CompanyName`, `Date`, `C/P`, `PVenue`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `ODetails`) VALUES
('Apple', '2015-07-23', 0, 'RVCE', 98, 98, 90, 0, 0, 0, 'Welcome to Apple'),
('Haritha Tech', '2015-06-26', 1, 'SIT', 60, 65, 65, 0, 0, 0, '0'),
('HP', '2013-08-19', 1, 'SSIT', 70, 75, 75, 0, 0, 0, '0'),
('IBM', '2015-05-12', 0, 'CIT College', 60, 65, 65, 0, 0, 0, '0'),
('Infosis', '2015-01-10', 0, 'CIT College', 60, 60, 60, 0, 0, 0, '0'),
('Intel', '2013-09-08', 0, 'CIT', 60, 65, 65, 0, 0, 0, '0'),
('Microsoft company', '2014-12-09', 0, 'CIT', 60, 65, 65, 0, 0, 0, '0'),
('Skype', '2014-06-10', 1, 'SIT College', 75, 75, 75, 0, 0, 0, '0'),
('Tata Consultency Services', '2015-11-24', 1, 'AIE', 65, 70, 75, 0, 0, 0, '0'),
('VTECK', '2013-03-24', 0, 'CIT College', 60, 60, 65, 0, 0, 0, '0'),
('WDS', '2014-09-30', 1, 'KIT', 65, 65, 65, 0, 0, 0, '0'),
('yy', '2015-07-04', 0, '', 45, 55, 55, 8, 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE `basicdetails` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Sem` int(11) NOT NULL,
  `Branch` varchar(15) NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(11) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(11) NOT NULL,
  `Approve` tinyint(1) NOT NULL DEFAULT 0,
  `ApprovalDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `basicdetails`
--

INSERT INTO `basicdetails` (`Id`, `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`, `ApprovalDate`) VALUES
(1, 'veda', 'kumar', '1cg13is400', 11111, 'v@gmil.comk', '2015-06-09', 1, 'ISE', 70, 70, 70, 0, 0, 0, 1, '0000-00-00'),
(2, 'vastala', 'hs', '1cg13cs400', 22222, 'vhs@gmil.com', '1996-03-08', 2, 'CSE', 75, 75, 70, 0, 0, 0, 1, '0000-00-00'),
(3, 'ragini', 'mn', '1cg12is001', 33333, 'r@gmail.com', '1991-01-28', 6, 'ISE', 55, 55, 55, 0, 0, 0, 1, '0000-00-00'),
(4, 'Punith', 'raj kumar', '1cg12cs002', 66666, 'p@gmail.com', '1991-02-13', 8, 'CSE', 85, 85, 85, 0, 0, 0, 0, '0000-00-00'),
(5, 'Manvith', 'kumar', '1cg12cv001', 7777, 'mk@gmail.com', '1998-05-31', 7, 'CVE', 99, 99, 99, 0, 0, 0, 0, '0000-00-00'),
(6, 'Harsha', 'M S', '1cg12ee001', 88888, 'h@gmail.com', '1999-01-04', 8, 'EEE', 99, 99, 99, 0, 0, 0, 0, '0000-00-00'),
(7, 'Tejaswini', 'T L', '1cg12cv002', 99999, 't@gmil.com', '1997-08-13', 4, 'CVE', 65, 65, 65, 0, 0, 0, 0, '0000-00-00'),
(8, 'Ashraf', 'Unissa', '1cg12ee005', 10000, 'au@gmail.com', '1992-10-23', 4, 'EEE', 55, 55, 55, 0, 0, 0, 0, '0000-00-00'),
(9, 'Roja', 'Bai', '1cg12is009', 20000, 'rb@gmail.com', '1997-04-28', 4, 'ISE', 66, 63, 62, 0, 0, 0, 1, '2015-07-23'),
(10, 'Yogesh', 'B L', '1cg12cs031', 40000, 'y@gmail.com', '2000-06-13', 5, 'CSE', 41, 45, 45, 0, 0, 0, 0, '0000-00-00'),
(11, 'rahul', 'khanna', '1cg13is401', 2147483647, 'rr@gmail.com', '2015-07-02', 4, 'ise', 77, 66, 77, 0, 0, 0, 1, '0000-00-00'),
(12, 'Vishruth', 'Harithsa', '1cg12is094', 9880796862, 'harithsa@aol.com', '1994-10-22', 6, 'ISE', 91, 70, 50, 5, 0, 1, 1, '2015-08-18'),
(13, 'Neil', 'Armstrong', '1cg12is000', 2147483647, 'armstrong@neil.com', '2015-07-23', 7, 'ISE', 100, 100, 100, 0, 0, 0, 1, '2015-07-23'),
(14, 'Vishruth', 'Harithsa', '1cg12is011', 9880796862, 'harithsa@aol.com', '2015-08-21', 6, 'ISE', 40, 70, 50, 5, 0, 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hlogin`
--

CREATE TABLE `hlogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `Branch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hlogin`
--

INSERT INTO `hlogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`, `Branch`) VALUES
(1, 'Vijay', 'vijay', '123456', 'vijayjasphin@gmail.com', 'What is your nickname?', 'vinivijay', 'ISE');

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE `plogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'Jasphin', 'jasphin', 'vijay', 'jasphin@gmail.com', 'What is your nickname?', 'vinivijay');

-- --------------------------------------------------------

--
-- Table structure for table `prilogin`
--

CREATE TABLE `prilogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prilogin`
--

INSERT INTO `prilogin` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'Martin', 'martin', '123456', 'martin@gmail.com', 'What is your nickname?', 'martin');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `Name`, `USN`, `PASSWORD`, `Email`, `Question`, `Answer`) VALUES
(15, 'Jasphin Vijay J', '3Vijay2002', 'vijay123', 'vijayjasphin@gmail.com', 'What is your nickname?', 'viinivijay');

-- --------------------------------------------------------

--
-- Table structure for table `updatedrive`
--

CREATE TABLE `updatedrive` (
  `USN` varchar(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Attendence` tinyint(1) NOT NULL DEFAULT 0,
  `WT` tinyint(1) NOT NULL DEFAULT 0,
  `GD` tinyint(1) NOT NULL DEFAULT 0,
  `Techical` tinyint(1) NOT NULL DEFAULT 0,
  `Placed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `updatedrive`
--

INSERT INTO `updatedrive` (`USN`, `Name`, `CompanyName`, `Date`, `Attendence`, `WT`, `GD`, `Techical`, `Placed`) VALUES
('1cg13is400', 'Veda', 'Haritha Tech', '2015-06-26', 1, 1, 1, 1, 1),
('1cg13cs400', 'Vastala', 'HP', '2013-08-19', 1, 1, 1, 1, 1),
('1cg12cs002', 'Punith', 'IBM', '2015-05-12', 1, 1, 1, 1, 1),
('1cg12cv001', 'Manvith', 'Infosis', '2015-01-10', 1, 1, 1, 1, 1),
('1cg12ee001', 'Harsha', 'Intel', '2013-09-08', 1, 1, 1, 1, 1),
('1cg12ee005', 'Ashraf', 'Microsoft company', '2014-12-09', 1, 1, 1, 1, 1),
('1cg12is009', 'Roja', 'Skype', '2014-06-10', 1, 1, 1, 1, 1),
('1cg12cs031', 'Yogesh', 'Tata Consultency Services', '2015-11-24', 1, 1, 1, 1, 1),
('1cg12is001', 'Ragini', 'VTECK', '2013-03-24', 1, 1, 1, 1, 1),
('1cg12cv002', 'Tesjaswini', 'WDS', '2014-09-30', 1, 1, 1, 1, 1),
('1cg12cs002', 'punith', 'yy', '2015-07-04', 1, 1, 1, 0, 0),
('1cg12is094', 'Vishruth Harithsa', 'Apple', '2015-07-23', 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpdrive`
--
ALTER TABLE `addpdrive`
  ADD PRIMARY KEY (`CompanyName`,`Date`);

--
-- Indexes for table `basicdetails`
--
ALTER TABLE `basicdetails`
  ADD PRIMARY KEY (`Id`,`USN`),
  ADD UNIQUE KEY `USN` (`USN`,`Mobile`,`Email`);

--
-- Indexes for table `hlogin`
--
ALTER TABLE `hlogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `prilogin`
--
ALTER TABLE `prilogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `USN` (`USN`,`Email`);

--
-- Indexes for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD KEY `USN` (`USN`),
  ADD KEY `CompanyName` (`CompanyName`,`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basicdetails`
--
ALTER TABLE `basicdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hlogin`
--
ALTER TABLE `hlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plogin`
--
ALTER TABLE `plogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prilogin`
--
ALTER TABLE `prilogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `updatedrive`
--
ALTER TABLE `updatedrive`
  ADD CONSTRAINT `updatedrive_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `basicdetails` (`USN`) ON DELETE CASCADE,
  ADD CONSTRAINT `updatedrive_ibfk_2` FOREIGN KEY (`CompanyName`,`Date`) REFERENCES `addpdrive` (`CompanyName`, `Date`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

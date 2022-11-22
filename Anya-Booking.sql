-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2022 at 02:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Anya-Booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `CitizenID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `CitizenID`, `Username`, `Firstname`, `Lastname`, `Password`, `Email`) VALUES
(2, '1111', 'ADMIN', NULL, NULL, '0123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `C_ID` int(11) NOT NULL,
  `R_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Check_inDate` date DEFAULT NULL,
  `Check_outDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`C_ID`, `R_ID`, `ID`, `Check_inDate`, `Check_outDate`) VALUES
(30, 27, 18, '2022-11-17', '2022-11-20'),
(30, 31, 21, '2022-11-14', '2022-11-23'),
(30, 32, 27, '2022-11-22', '2022-11-24'),
(75, 27, 20, '2022-11-09', '2022-11-17'),
(76, 31, 22, '2022-11-22', '2022-11-24'),
(77, 32, 23, '2022-11-23', '2022-11-25'),
(81, 32, 26, '2022-11-23', '2022-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `username`) VALUES
(27, 'eranga'),
(27, 'toymoo'),
(28, 'ehapinya'),
(31, 'toymoo'),
(32, 'Bond'),
(32, 'eranga'),
(36, 'ehapinya');

-- --------------------------------------------------------

--
-- Table structure for table `communicate`
--

CREATE TABLE `communicate` (
  `C_ID` int(11) NOT NULL,
  `O_ID` int(11) NOT NULL,
  `A_ID` int(11) NOT NULL,
  `CaseOpen` datetime DEFAULT NULL,
  `CaseClose` datetime DEFAULT NULL,
  `Topic` varchar(50) DEFAULT NULL,
  `Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `CitizenID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Disable` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `DOB` date DEFAULT NULL,
  `gender_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `CitizenID`, `Username`, `Firstname`, `Lastname`, `Password`, `Disable`, `Email`, `phonenumber`, `DOB`, `gender_type`) VALUES
(30, '1111111111111', 'ehapinya', 'Apinya', 'Sriyota', 'ehapinya', NULL, 'apinyasriyota@gmail.com', '0111111111', '2002-01-11', 'Female'),
(75, '284190821', 'toymoo', 'TOy', 'Moo', 'toymoo', NULL, 'toymoo', '312789325', '2000-11-06', 'Female'),
(76, 'efef', 'aaa', 'apinya', 'sriyota', 'aaa', NULL, 'aaa', 'asdefef', '0015-11-02', 'Male'),
(77, '1235466992548', 'Bond', 'Bond', 'Forger', 'bonds', NULL, 'bond@gmail.com', '0928374726', '2002-11-21', 'Female'),
(81, '89024', 'eranga', 'Pavaris', 'Christini', '123', NULL, '', '0916542', '2001-03-03', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ID` int(11) NOT NULL,
  `CitizenID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Ownertype` varchar(50) DEFAULT NULL,
  `Disable` int(11) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `gender_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ID`, `CitizenID`, `Username`, `Email`, `Firstname`, `Lastname`, `Password`, `Ownertype`, `Disable`, `DOB`, `gender_type`) VALUES
(14, '8976512', 'phudits', 'phudit@gmail.com', 'Phudit', 'sas', '1234', NULL, NULL, '2002-02-11', 'Male'),
(15, 'fdsad', 'fasd', 'fdasd', 'dfasd', 'dsafs', 'fasd', NULL, NULL, '2000-11-20', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Size` varchar(25) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `RoomNumber` varchar(10) DEFAULT NULL,
  `MaxAdult` int(2) DEFAULT NULL,
  `Facility` varchar(125) DEFAULT NULL,
  `TitleDeed` text DEFAULT NULL,
  `CheckinTime` varchar(4) DEFAULT NULL,
  `CheckoutTime` varchar(4) DEFAULT NULL,
  `O_ID` int(11) NOT NULL,
  `image` varchar(30) NOT NULL DEFAULT '../img/forger_head.JPG'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `Name`, `Size`, `Price`, `RoomNumber`, `MaxAdult`, `Facility`, `TitleDeed`, `CheckinTime`, `CheckoutTime`, `O_ID`, `image`) VALUES
(27, 'IBUS Hotel', '30 Sq.m.', 500, 'IB01', 2, 'TV', NULL, '8AM', '2PM', 15, '../img/ibus_head.JPEG'),
(31, 'Themo', '40 Sq.m.', 900, 'TM0', 3, 'TV', NULL, '8AM', '10AM', 14, '../img/forger_head.JPG'),
(32, 'ToydnyMoo', '90 Sq.m.', 2000, 'TM01', 6, 'Everything', NULL, '8AM', '10AM', 14, '../img/forger_head.JPG'),
(36, 'NunTang', '70 Sq.m.', 1200, 'NT01', 7, 'Pool', NULL, '8AM', '2PM', 14, '../img/forger_head.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CitizenID` (`CitizenID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`C_ID`,`R_ID`,`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`,`username`);

--
-- Indexes for table `communicate`
--
ALTER TABLE `communicate`
  ADD PRIMARY KEY (`C_ID`,`O_ID`,`A_ID`),
  ADD KEY `O_ID` (`O_ID`),
  ADD KEY `A_ID` (`A_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CitizenID` (`CitizenID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `gender_type` (`gender_type`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CitizenID` (`CitizenID`),
  ADD KEY `gender_type` (`gender_type`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`,`O_ID`) USING BTREE,
  ADD KEY `O_ID` (`O_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`R_ID`) REFERENCES `room` (`ID`);

--
-- Constraints for table `communicate`
--
ALTER TABLE `communicate`
  ADD CONSTRAINT `communicate_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `communicate_ibfk_2` FOREIGN KEY (`O_ID`) REFERENCES `owner` (`ID`),
  ADD CONSTRAINT `communicate_ibfk_3` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `owner` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

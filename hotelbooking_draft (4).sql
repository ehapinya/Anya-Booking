-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 05:57 PM
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
-- Database: `hotelbooking_draft`
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

-- --------------------------------------------------------

--
-- Table structure for table `admincancelbook`
--

CREATE TABLE `admincancelbook` (
  `C_ID` int(11) NOT NULL,
  `A_ID` int(11) NOT NULL,
  `R_ID` int(11) NOT NULL,
  `Book_ID` int(11) NOT NULL,
  `DateAndTime` datetime DEFAULT NULL,
  `Reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admindeletebuilding`
--

CREATE TABLE `admindeletebuilding` (
  `A_ID` int(11) NOT NULL,
  `B_ID` int(11) NOT NULL,
  `DateAndTime` datetime DEFAULT NULL,
  `Reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admindeleteroom`
--

CREATE TABLE `admindeleteroom` (
  `A_ID` int(11) NOT NULL,
  `R_ID` int(11) NOT NULL,
  `DateAndTime` datetime DEFAULT NULL,
  `Reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admindisablecustomer`
--

CREATE TABLE `admindisablecustomer` (
  `C_ID` int(11) NOT NULL,
  `A_ID` int(11) NOT NULL,
  `DateAndTime` datetime DEFAULT NULL,
  `Reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admindisableowner`
--

CREATE TABLE `admindisableowner` (
  `A_ID` int(11) NOT NULL,
  `O_ID` int(11) NOT NULL,
  `DateAndTime` datetime DEFAULT NULL,
  `Reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminmodifybook`
--

CREATE TABLE `adminmodifybook` (
  `C_ID` int(11) NOT NULL,
  `A_ID` int(11) NOT NULL,
  `R_ID` int(11) NOT NULL,
  `Book_ID` int(11) NOT NULL,
  `DateAndTime` datetime DEFAULT NULL,
  `Reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminmodifybuilding`
--

CREATE TABLE `adminmodifybuilding` (
  `A_ID` int(11) NOT NULL,
  `B_ID` int(11) NOT NULL,
  `DateAndTime` datetime DEFAULT NULL,
  `Reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminmodifyroom`
--

CREATE TABLE `adminmodifyroom` (
  `A_ID` int(11) NOT NULL,
  `R_ID` int(11) NOT NULL,
  `DateAndTime` datetime DEFAULT NULL,
  `Reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(26, 9, 2, '2022-11-23', '2022-11-24'),
(26, 9, 3, '2022-11-16', '2022-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `ID` int(11) NOT NULL,
  `B_Name` varchar(50) DEFAULT NULL,
  `Address` varchar(2255) DEFAULT NULL,
  `TitleDeed` text DEFAULT NULL,
  `OpenTime` time DEFAULT NULL,
  `CloseTime` time DEFAULT NULL,
  `O_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`ID`, `B_Name`, `Address`, `TitleDeed`, `OpenTime`, `CloseTime`, `O_ID`) VALUES
(2, 'Forger\'s Hotel', '\r\nStreet:  121 Gp 3 Tivanon Pakkred Pak Kret \r\nCity:   Nonthaburi\r\nState/province/area:    Nonthaburi\r\nPhone number  (02)5843235\r\nZip code  11120\r\nCountry calling code  +66\r\nCountry  Thailand', NULL, '06:45:00', '17:00:00', 11),
(4, 'Hellton', 'Street:  121 Gp 3 Tivanon Pakkred Pak Kret *\r\nCity:   Nonthaburi\r\nState/province/area:    Nonthaburi\r\nPhone number  (02)5843235\r\nZip code  11120\r\nCountry calling code  +66\r\nCountry  Thailand', NULL, '10:37:03', '22:37:03', 9);

-- --------------------------------------------------------

--
-- Table structure for table `buildingowner`
--

CREATE TABLE `buildingowner` (
  `O_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Topic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `CitizenID` varchar(50) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
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
(24, '12345678', NULL, 'phu', 'sas', '1234', NULL, 'phudits', '', '0000-00-00', 'Male'),
(26, '11111111111', NULL, '', '', '1234', NULL, 'phudits', '11111111111', '0000-00-00', 'Male'),
(29, '546165', 'phudis', 'jj', 'jj', '1234', NULL, 'jj', '213456461', '0000-00-00', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `type` varchar(10) NOT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`type`, `ID`) VALUES
('Female', 2),
('Male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ID` int(11) NOT NULL,
  `CitizenID` varchar(50) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Ownertype` varchar(50) DEFAULT NULL,
  `Disable` int(11) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `gender_type` varchar(10) DEFAULT NULL,
  `phone_num` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ID`, `CitizenID`, `Username`, `Email`, `Firstname`, `Lastname`, `Password`, `Ownertype`, `Disable`, `DOB`, `gender_type`, `phone_num`) VALUES
(9, '545454545', 'jj', 'phudits', 'hjk', 'sdfsdf', '1234', NULL, NULL, '0000-00-00', 'Male', '000000'),
(11, '786786768', 'hh', 'phu', 'jame', 'game', '1234', NULL, NULL, '0000-00-00', 'Male', '111111'),
(13, '7987986543432', NULL, 'dits', 'hjk', 'sdfsdf', '1234', NULL, NULL, '0000-00-00', 'Male', '222222');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ID` int(11) NOT NULL,
  `R_Name` varchar(50) DEFAULT NULL,
  `Size` varchar(25) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `RoomNumber` int(11) DEFAULT NULL,
  `MaxAdult` varchar(25) DEFAULT NULL,
  `Facility` varchar(125) DEFAULT NULL,
  `TitleDeed` text DEFAULT NULL,
  `CheckinTime` datetime DEFAULT NULL,
  `CheckoutTime` datetime DEFAULT NULL,
  `O_ID` int(11) NOT NULL,
  `B_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`ID`, `R_Name`, `Size`, `Price`, `RoomNumber`, `MaxAdult`, `Facility`, `TitleDeed`, `CheckinTime`, `CheckoutTime`, `O_ID`, `B_ID`) VALUES
(9, 'R01', 'L', '3600', 103, '5', 'TV', NULL, '2022-11-25 22:39:55', '2022-11-29 22:39:55', 11, 2),
(11, 'R02', 'L', '3600', 102, '5', 'Luxury Bedding\r\nRefrigerator\r\nTelevision Set\r\nHousekeeping\r\nFree Wireless Internet\r\nComplimentary Bottled Water', NULL, '2022-11-15 22:38:36', '2022-11-18 22:38:36', 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roomowner`
--

CREATE TABLE `roomowner` (
  `O_ID` int(11) NOT NULL,
  `NumRoomOwns` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `admincancelbook`
--
ALTER TABLE `admincancelbook`
  ADD PRIMARY KEY (`C_ID`,`R_ID`,`Book_ID`,`A_ID`),
  ADD KEY `R_ID` (`R_ID`),
  ADD KEY `fk_bookID1` (`Book_ID`),
  ADD KEY `A_ID` (`A_ID`);

--
-- Indexes for table `admindeletebuilding`
--
ALTER TABLE `admindeletebuilding`
  ADD PRIMARY KEY (`A_ID`,`B_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `admindeleteroom`
--
ALTER TABLE `admindeleteroom`
  ADD PRIMARY KEY (`A_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `admindisablecustomer`
--
ALTER TABLE `admindisablecustomer`
  ADD PRIMARY KEY (`C_ID`,`A_ID`),
  ADD KEY `A_ID` (`A_ID`);

--
-- Indexes for table `admindisableowner`
--
ALTER TABLE `admindisableowner`
  ADD PRIMARY KEY (`A_ID`,`O_ID`),
  ADD KEY `O_ID` (`O_ID`);

--
-- Indexes for table `adminmodifybook`
--
ALTER TABLE `adminmodifybook`
  ADD PRIMARY KEY (`C_ID`,`R_ID`,`Book_ID`,`A_ID`),
  ADD KEY `R_ID` (`R_ID`),
  ADD KEY `Book_ID` (`Book_ID`),
  ADD KEY `A_ID` (`A_ID`);

--
-- Indexes for table `adminmodifybuilding`
--
ALTER TABLE `adminmodifybuilding`
  ADD PRIMARY KEY (`A_ID`,`B_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `adminmodifyroom`
--
ALTER TABLE `adminmodifyroom`
  ADD PRIMARY KEY (`A_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`C_ID`,`R_ID`,`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `O_ID` (`O_ID`);

--
-- Indexes for table `buildingowner`
--
ALTER TABLE `buildingowner`
  ADD PRIMARY KEY (`O_ID`);

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
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CitizenID` (`CitizenID`),
  ADD UNIQUE KEY `phone_num` (`phone_num`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `gender_type` (`gender_type`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`,`O_ID`,`B_ID`),
  ADD KEY `O_ID` (`O_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `roomowner`
--
ALTER TABLE `roomowner`
  ADD PRIMARY KEY (`O_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admincancelbook`
--
ALTER TABLE `admincancelbook`
  ADD CONSTRAINT `admincancelbook_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `admincancelbook_ibfk_2` FOREIGN KEY (`R_ID`) REFERENCES `book` (`R_ID`),
  ADD CONSTRAINT `admincancelbook_ibfk_3` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `fk_bookID1` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`ID`);

--
-- Constraints for table `admindeletebuilding`
--
ALTER TABLE `admindeletebuilding`
  ADD CONSTRAINT `admindeletebuilding_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `admindeletebuilding_ibfk_2` FOREIGN KEY (`B_ID`) REFERENCES `building` (`ID`);

--
-- Constraints for table `admindeleteroom`
--
ALTER TABLE `admindeleteroom`
  ADD CONSTRAINT `admindeleteroom_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `admindeleteroom_ibfk_2` FOREIGN KEY (`R_ID`) REFERENCES `room` (`ID`);

--
-- Constraints for table `admindisablecustomer`
--
ALTER TABLE `admindisablecustomer`
  ADD CONSTRAINT `admindisablecustomer_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `admindisablecustomer_ibfk_2` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `admindisableowner`
--
ALTER TABLE `admindisableowner`
  ADD CONSTRAINT `admindisableowner_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `admindisableowner_ibfk_2` FOREIGN KEY (`O_ID`) REFERENCES `owner` (`ID`);

--
-- Constraints for table `adminmodifybook`
--
ALTER TABLE `adminmodifybook`
  ADD CONSTRAINT `adminmodifybook_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `adminmodifybook_ibfk_2` FOREIGN KEY (`R_ID`) REFERENCES `book` (`R_ID`),
  ADD CONSTRAINT `adminmodifybook_ibfk_3` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`ID`),
  ADD CONSTRAINT `adminmodifybook_ibfk_4` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `adminmodifybuilding`
--
ALTER TABLE `adminmodifybuilding`
  ADD CONSTRAINT `adminmodifybuilding_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `adminmodifybuilding_ibfk_2` FOREIGN KEY (`B_ID`) REFERENCES `building` (`ID`);

--
-- Constraints for table `adminmodifyroom`
--
ALTER TABLE `adminmodifyroom`
  ADD CONSTRAINT `adminmodifyroom_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`),
  ADD CONSTRAINT `adminmodifyroom_ibfk_2` FOREIGN KEY (`R_ID`) REFERENCES `room` (`ID`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`R_ID`) REFERENCES `room` (`ID`);

--
-- Constraints for table `building`
--
ALTER TABLE `building`
  ADD CONSTRAINT `building_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `owner` (`ID`);

--
-- Constraints for table `buildingowner`
--
ALTER TABLE `buildingowner`
  ADD CONSTRAINT `buildingowner_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `owner` (`ID`);

--
-- Constraints for table `communicate`
--
ALTER TABLE `communicate`
  ADD CONSTRAINT `communicate_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `communicate_ibfk_2` FOREIGN KEY (`O_ID`) REFERENCES `owner` (`ID`),
  ADD CONSTRAINT `communicate_ibfk_3` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`ID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`gender_type`) REFERENCES `gender` (`type`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`gender_type`) REFERENCES `gender` (`type`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `owner` (`ID`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`B_ID`) REFERENCES `building` (`ID`);

--
-- Constraints for table `roomowner`
--
ALTER TABLE `roomowner`
  ADD CONSTRAINT `roomowner_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `owner` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

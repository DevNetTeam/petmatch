-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 01:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petmatchdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `helprequests`
--

CREATE TABLE `helprequests` (
  `helpID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `helpLocLat` float(10,6) NOT NULL,
  `helpLocLng` float(10,6) NOT NULL,
  `helpLocCity` varchar(64) NOT NULL,
  `helpLocStreet` varchar(64) NOT NULL,
  `helpLocNum` varchar(64) NOT NULL,
  `helpLocCountry` varchar(64) NOT NULL,
  `helpRegisterTime` datetime NOT NULL,
  `helpStartTime` datetime NOT NULL,
  `helpEndTime` datetime NOT NULL,
  `helpPayment` text NOT NULL,
  `helpAbout` text NOT NULL,
  `helpType` varchar(64) NOT NULL,
  `userPhone` varchar(64) NOT NULL,
  `helpStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `helprequests`
--

INSERT INTO `helprequests` (`helpID`, `userID`, `helpLocLat`, `helpLocLng`, `helpLocCity`, `helpLocStreet`, `helpLocNum`, `helpLocCountry`, `helpRegisterTime`, `helpStartTime`, `helpEndTime`, `helpPayment`, `helpAbout`, `helpType`, `userPhone`, `helpStatus`) VALUES
(139, 1, 51.507351, -0.127758, 'Лондон', '', '', 'Великобритания', '2020-03-02 22:32:53', '2020-03-03 00:00:00', '0000-00-00 00:00:00', 'Разходка в парка', 'С повторение', 'Meet', '1234567890', 1),
(140, 1, 42.675198, 23.278919, 'София', 'булевард „Цар Борис III“', '', 'България', '2020-03-03 00:34:54', '2020-03-03 00:00:00', '0000-00-00 00:00:00', '', 'for little puppies', 'Match', '1234567890', 1);

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `helpID` int(11) NOT NULL,
  `interestedUserID` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `petID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `petName` varchar(64) NOT NULL,
  `petType` varchar(64) NOT NULL,
  `petBirthday` date NOT NULL,
  `petSex` varchar(64) NOT NULL,
  `petFood` text NOT NULL,
  `petTemper` text NOT NULL,
  `petAbout` text NOT NULL,
  `petStatus` int(11) NOT NULL,
  `petRegisterTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`petID`, `userID`, `petName`, `petType`, `petBirthday`, `petSex`, `petFood`, `petTemper`, `petAbout`, `petStatus`, `petRegisterTime`) VALUES
(61, 1, 'Antu', 'Dog\r\n', '2009-12-17', 'male', 'Hills Science Plan Adult', '', 'Akita', 1, '2020-03-02 22:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `pets_helprequests`
--

CREATE TABLE `pets_helprequests` (
  `petID` int(11) NOT NULL,
  `helpID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `recordRegisterTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets_helprequests`
--

INSERT INTO `pets_helprequests` (`petID`, `helpID`, `userID`, `recordRegisterTime`) VALUES
(61, 139, 1, '2020-03-02 22:32:53'),
(61, 140, 1, '2020-03-03 00:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

CREATE TABLE `rankings` (
  `rankID` int(11) NOT NULL,
  `rankingUserID` int(11) NOT NULL,
  `rankedUserID` int(11) NOT NULL,
  `helpID` int(11) NOT NULL,
  `rankRank` int(11) NOT NULL,
  `rankAbout` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userEmail` varchar(64) NOT NULL,
  `userPassword` varchar(64) NOT NULL,
  `userFName` varchar(64) NOT NULL,
  `userLName` varchar(64) NOT NULL,
  `userPhone` varchar(64) NOT NULL,
  `userBirthday` date NOT NULL,
  `userAbout` text NOT NULL,
  `userRegisterTime` datetime NOT NULL,
  `userStatus` varchar(64) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userEmail`, `userPassword`, `userFName`, `userLName`, `userPhone`, `userBirthday`, `userAbout`, `userRegisterTime`, `userStatus`) VALUES
(1, '1@gmail.com', '$2y$10$ViIvcTuGmxaOSdoO1mFMte5G01fmwf8paKE0OYW5Zdoz0e/MBZddC', 'Buda', 'Ninja', '', '0000-00-00', '', '2020-03-02 19:12:33', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `helprequests`
--
ALTER TABLE `helprequests`
  ADD PRIMARY KEY (`helpID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `interested`
--
ALTER TABLE `interested`
  ADD PRIMARY KEY (`helpID`,`interestedUserID`),
  ADD KEY `interestedUserID` (`interestedUserID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`petID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `pets_helprequests`
--
ALTER TABLE `pets_helprequests`
  ADD PRIMARY KEY (`petID`,`helpID`),
  ADD KEY `helpID` (`helpID`);

--
-- Indexes for table `rankings`
--
ALTER TABLE `rankings`
  ADD PRIMARY KEY (`rankID`),
  ADD KEY `rankedUserID` (`rankedUserID`),
  ADD KEY `rankingUserID` (`rankingUserID`),
  ADD KEY `helpID` (`helpID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `helprequests`
--
ALTER TABLE `helprequests`
  MODIFY `helpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `rankings`
--
ALTER TABLE `rankings`
  MODIFY `rankID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `helprequests`
--
ALTER TABLE `helprequests`
  ADD CONSTRAINT `helprequests_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `interested`
--
ALTER TABLE `interested`
  ADD CONSTRAINT `interested_ibfk_1` FOREIGN KEY (`interestedUserID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `interested_ibfk_2` FOREIGN KEY (`helpID`) REFERENCES `helprequests` (`helpID`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `pets_helprequests`
--
ALTER TABLE `pets_helprequests`
  ADD CONSTRAINT `pets_helprequests_ibfk_1` FOREIGN KEY (`helpID`) REFERENCES `helprequests` (`helpID`),
  ADD CONSTRAINT `pets_helprequests_ibfk_2` FOREIGN KEY (`petID`) REFERENCES `pets` (`petID`);

--
-- Constraints for table `rankings`
--
ALTER TABLE `rankings`
  ADD CONSTRAINT `rankings_ibfk_1` FOREIGN KEY (`helpID`) REFERENCES `helprequests` (`helpID`),
  ADD CONSTRAINT `rankings_ibfk_2` FOREIGN KEY (`rankingUserID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `rankings_ibfk_3` FOREIGN KEY (`rankedUserID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

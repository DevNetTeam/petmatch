-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 04:56 PM
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
(139, 1, 51.507351, -0.127758, 'Лондон', '', '', 'Великобритания', '2020-03-02 22:32:53', '2020-03-03 00:00:00', '0000-00-00 00:00:00', 'Разходка в парка', 'С повторение', 'Meet', '1234567890', 2),
(140, 1, 42.675198, 23.278919, 'София', 'булевард „Цар Борис III“', '', 'България', '2020-03-03 00:34:54', '2020-03-03 00:00:00', '0000-00-00 00:00:00', '', 'for little puppies', 'Match', '1234567890', 2),
(142, 1, 42.784588, 23.501190, 'София', '', '', 'България', '2020-03-03 11:00:35', '2020-03-04 00:00:00', '0000-00-00 00:00:00', 'Looking for female dog.', 'Mariage', 'Match', '1234567890', 1),
(143, 13, 42.784588, 23.501190, 'София', '', '', 'България', '2020-03-03 12:27:33', '2020-03-07 00:00:00', '0000-00-00 00:00:00', '', 'sex', 'Meet', '1234567890', 2),
(144, 13, 42.784588, 23.501190, 'София', '', '', 'България', '2020-03-03 12:30:10', '2020-03-05 00:00:00', '0000-00-00 00:00:00', 'матцх', 'match', 'Meet', '1234567890', 2),
(145, 1, 42.784588, 23.501190, 'София', '', '', 'България', '2020-03-03 12:37:03', '2020-03-06 00:00:00', '0000-00-00 00:00:00', 'meet', 'meet', 'Help', '1234567890', 1),
(146, 13, 42.709538, 23.313438, 'София', '', '', 'България', '2020-03-03 13:08:52', '2020-03-07 00:00:00', '0000-00-00 00:00:00', '', 'Среща за сеХ', 'Meet', '1234567890', 1),
(147, 13, 42.648155, 23.409044, 'София', 'Жилищен комплекс Дружба 2', '', 'България', '2020-03-03 13:34:51', '2020-03-04 00:00:00', '0000-00-00 00:00:00', '', 'Разходка в парка', 'Meet', '1234567890', 1),
(148, 14, 42.677315, 23.297316, 'София', '', '', 'България', '2020-03-03 13:48:16', '2020-03-04 00:00:00', '0000-00-00 00:00:00', 'Nema kaja', 'Foof', 'Help', '123456789', 1),
(149, 14, 42.677315, 23.297316, 'София', '', '', 'България', '2020-03-03 13:49:46', '2020-03-05 00:00:00', '0000-00-00 00:00:00', '100', 'Ranuuu', 'Match', '1234567890', 1);

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `helpID` int(11) NOT NULL,
  `interestedUserID` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `interested`
--

INSERT INTO `interested` (`helpID`, `interestedUserID`, `status`) VALUES
(139, 13, 1),
(140, 13, 1),
(142, 13, 1),
(142, 14, 1),
(143, 1, 1),
(144, 1, 1),
(146, 1, 1),
(147, 1, 1);

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
(61, 1, 'Antu', 'Dog\r\n', '2009-12-17', 'male', 'Hills Science Plan Adult', '', 'Akita', 1, '2020-03-02 22:55:17'),
(62, 13, 'Cat', 'Cat', '0000-00-00', 'female', '', '', 'Nrun', 1, '2020-03-03 11:54:35'),
(63, 14, 'Gogo', 'goldfish', '0000-00-00', '', '', '', 'Fish', 1, '2020-03-03 13:44:04');

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
(61, 140, 1, '2020-03-03 00:34:54'),
(61, 142, 1, '2020-03-03 11:00:35'),
(61, 145, 1, '2020-03-03 12:37:03'),
(62, 143, 13, '2020-03-03 12:27:33'),
(62, 144, 13, '2020-03-03 12:30:10'),
(62, 146, 13, '2020-03-03 13:08:52'),
(62, 147, 13, '2020-03-03 13:34:51'),
(63, 148, 14, '2020-03-03 13:48:16'),
(63, 149, 14, '2020-03-03 13:49:46');

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

--
-- Dumping data for table `rankings`
--

INSERT INTO `rankings` (`rankID`, `rankingUserID`, `rankedUserID`, `helpID`, `rankRank`, `rankAbout`) VALUES
(14, 1, 13, 139, 4, 'bbbbbbb'),
(15, 13, 1, 143, 10, 'super'),
(16, 1, 13, 140, 4, 'not good'),
(17, 13, 1, 144, 10, 'супер ман');

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
(1, '1@gmail.com', '$2y$10$ViIvcTuGmxaOSdoO1mFMte5G01fmwf8paKE0OYW5Zdoz0e/MBZddC', 'Buda', 'Ninja', '', '0000-00-00', '', '2020-03-02 19:12:33', 'admin'),
(13, 'test@gmail.com', '$2y$10$tdHAgIuylASI4VDRsaloG.ndA4evtjEwk.d/VKic9UmmLUn/l1rkq', 'Test', 'Testov', '', '0000-00-00', '', '2020-03-03 11:54:03', 'user'),
(14, '1@buda.ninja', '$2y$10$ZOOGRBq8GcCTXy0Wjkq0EO/0NjJwYisCPne2D7g0y29mQqcy4E07G', 'Bu', 'Nin', '', '0000-00-00', '', '2020-03-03 13:43:34', 'user');

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
  MODIFY `helpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `rankings`
--
ALTER TABLE `rankings`
  MODIFY `rankID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 01:10 AM
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
(62, 1, 'Antu', 'Dog\r\n', '2010-12-26', 'male', 'Hills', '', 'Akita', 1, '2020-02-29 18:33:13'),
(63, 2, 'Tantu', 'Dog\r\n', '0000-00-00', '', '', '', 'Big Japanese Dog', 1, '2020-02-29 11:13:18'),
(64, 15, 'Gogo', 'Cat\r\n', '0000-00-00', 'woman', '', '', 'Kreten cat', 1, '2020-03-01 18:06:04');

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
(1, '1@gmail.com', '$2y$10$N.1MTOS4LsoMZKh3voIdDuPtQKFgAqmHRFNLGl.62vd.m.SbyEsPK', 'Buda', 'Ninja', '1234567890', '0000-00-00', 'antu', '2020-02-29 10:59:39', 'admin'),
(2, 'test@gmail.com', '$2y$10$J1EBIlplIxNy4cGCL8TxPelGByxzVDE7q37jfk3BTfmSWIxanuWv6', 'Test', 'Test', '1234567890', '2020-02-01', 'ooooo', '2020-02-28 21:04:33', 'user'),
(15, 'loilo@gamil.com', '$2y$10$KjDeCm8Ir2fbdyaveJMrAuw0v0GrtYtcLdK3lfNcEa9gSyp6CKTg6', 'liolo', 'lilolov', '', '0000-00-00', '', '2020-03-01 18:04:57', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`petID`),
  ADD KEY `userID` (`userID`);

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
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

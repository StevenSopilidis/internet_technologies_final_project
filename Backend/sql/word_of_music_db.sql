-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 10:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `word_of_music_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `disk_ratings`
--

CREATE TABLE `disk_ratings` (
  `Id` varchar(32) NOT NULL,
  `DISK_NAME` varchar(255) DEFAULT NULL,
  `DISK_RELEASE_DATE` date DEFAULT NULL,
  `USER` varchar(255) DEFAULT NULL,
  `REVIEW` int(11) DEFAULT NULL,
  `USER_TEXT` varchar(500) DEFAULT NULL,
  `REVIEWED_ON` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disk_ratings`
--

INSERT INTO `disk_ratings` (`Id`, `DISK_NAME`, `DISK_RELEASE_DATE`, `USER`, `REVIEW`, `USER_TEXT`, `REVIEWED_ON`) VALUES
('f6TztCF5VDn89wn3nCUGK8ndZAiNWzuL', 'opt1', '2022-01-04', 'Mike', 5, 'Best disk ever created', '2022-01-07'),
('p2WUe4HuuiB8s3NhSyvaRK4kiOcXiHds', 'opt2', '2022-01-25', 'Dope', 3, 'Mediocare adsfkweoptnwet', '2022-01-07'),
('wefjrwerhowet', 'opt1', '2021-02-02', 'test1', 2, 'wewfriaoerheqiurqetewqr', '2022-01-07'),
('ZZ2hUdwTN8dG79ZWWaaHVheyT7pPntVX', 'opt1', '2022-01-04', 'Stefanos', 2, 'asdwefwerfwretiwerio', '2022-01-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disk_ratings`
--
ALTER TABLE `disk_ratings`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 09:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
--

-- --------------------------------------------------------

--
-- Table structure for table `construct`
--

CREATE TABLE `construct` (
  `Id` int(11) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `construct`
--

INSERT INTO `construct` (`Id`, `company_name`, `company_email`, `password`) VALUES
(1, 'Nyumba Kikwetu', 'nyumbakikwetu@gmail.com', '$2y$10$DZh0SslxChgb5N5ZsWShMen9Yw4wpKsTmOrRvbcHlj2bh1ErD3UdG'),
(3, 'Imara Houses', 'imara@gmail.com', '$2y$10$S10ePayIEz.QzqGHlC.6y.pFJtwFEOfXLFKG15MthPiQGWIUpNUmi'),
(7, 'Wajenzi', 'wajenzi@gmail.com', '$2y$10$SvhtVXoYcaqzuH1TrkKMwOHlHDdMg9LMqI.u7GCuwb0YUrMzFOaHG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `construct`
--
ALTER TABLE `construct`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `construct`
--
ALTER TABLE `construct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

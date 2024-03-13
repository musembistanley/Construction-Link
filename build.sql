-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 08:29 AM
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
-- Table structure for table `build`
--

CREATE TABLE `build` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `build`
--

INSERT INTO `build` (`Id`, `first_name`, `last_name`, `email`, `Password`) VALUES
(1, 'stanley', 'mutisya', 'stanleymutisya297@gmail.com', '$2y$10$/Vbi8TbTQ4BxOVBIXzArSu8aNvZkuN1A/AeaJqOBKpH'),
(2, 'stanley', 'mutisya', 'stanleymutisya297@gmail.com', '$2y$10$/Vbi8TbTQ4BxOVBIXzArSu8aNvZkuN1A/AeaJqOBKpH'),
(3, 'Dina', 'Mutisya', 'dinamutisya@gmail.com', '$2y$10$nQKOVuv.i030Rrhy4.BZ4.5oZJs1AOMZ7EH5zk08IDd'),
(4, 'Ancent', 'mutisya', 'ancentmutisya@gmail.com', '$2y$10$qY05.OdhL7HN0gFnGyA/8urZeZZvG2bLyjkt5R3vEjc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `build`
--
ALTER TABLE `build`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `build`
--
ALTER TABLE `build`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

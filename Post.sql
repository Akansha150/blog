-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2022 at 05:54 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Post`
--

-- --------------------------------------------------------

--
-- Table structure for table `Register`
--

CREATE TABLE `Register` (
  `id` int NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Register`
--

INSERT INTO `Register` (`id`, `Name`, `username`, `password`, `email`) VALUES
(10, 'Akansha', '@Akansha', '1234', 'ak@gmail.com'),
(12, 'Akansha Wadkar', '@akshu1505', '1234', 'akansha.wadkar@sigmainfo.net'),
(13, 'Akansha Wadkar', 'akansha', '12345', 'akshu@gmail.com'),
(14, 'Akansha Wadkar', 'Akansha17', '1234', 'akansha@gmail.com'),
(15, 'Akansha Wadkar', '@AkanshaW', '12345', 'akansha.wadkar@sigmainfo.net'),
(16, 'Akansha Wadkar', '@AkanshaWadkar', '1234', 'akansha.wadkar@sigmainfo.net'),
(17, 'Akansha Wadkar', '@Akansha121', '1234', 'akansha.wadkar@sigmainfo.net'),
(18, 'Shivam Singh ', 'Shivam', '123', 'shivamsingh.parihar@sigmainfo.net'),
(19, 'Akansha Wdakar', 'Wadkar', '1234', 'akansha.wadkar@singmainfo.net');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Register`
--
ALTER TABLE `Register`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Register`
--
ALTER TABLE `Register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

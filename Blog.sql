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
-- Database: `Blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `Post`
--

CREATE TABLE `Post` (
  `ID` int NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Discription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Post`
--

INSERT INTO `Post` (`ID`, `Title`, `Discription`) VALUES
(15, 'TechCrunch', 'TechCrunch offers knowledge about new gizmos and business-related apps. It is like a reservoir of information on Internet companies & startups around the world.aa'),
(16, 'Recode', 'Currently, owned by VOX media, Recode gives the most updated independent technology news, analysis trends, and reviews from the most respected and informed journalists as well as bloggers in media and technology.'),
(17, 'Mashable', 'Mashable is a world-renowned, entertainment, and multi-platform media channel.  Powered by its own proprietary technology, this tech blog is the go-to source for tech, digital culture, and entertainment content for its influential and dedicated global audience!'),
(18, 'CNET', 'CNET stays ahead of the curve by spreading its hands on all sorts of incredible tech products, and trends and offering unbiased reviews.\r\n\r\n'),
(19, 'The VERGE', 'Another highly engaging tech blog operated by VOX Media publishing news, guidebooks, feature stories, product reviews, and podcasts is The Verge!\r\n\r\nIt offers substantial coverage and no shortage of personalized perspectives. Accordingly, their gadget reviews help make or break the future of technology itself.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Post`
--
ALTER TABLE `Post`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

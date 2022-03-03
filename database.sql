-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 03:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_520_ci NOT NULL,
  `imageUrl` text COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `imageUrl`, `categoryId`) VALUES
(1, 'T1 Ring in Rose Gold with Diamonds, 2.5 mm', '67795253_1010336_ED_M.jpg', 1),
(2, 'T1 Ring in Rose Gold, 4.5 mm', '67796489_1008969_ED.jpg', 1),
(3, 'Tiffany T T1 Ring', '68172071_1016276_SV_1.jpg', 1),
(4, 'X Closed Wide Ring', '68659647_1018034_ED_M.jpg', 1),
(5, 'Freshwater Pearl Ring in Sterling Silver', '64048457_1004020_ED_M.jpg', 1),
(6, 'Sixteen Stone Ring', '19186555_924641_ED.jpg', 1),
(7, 'Sixteen Stone Ring 2.0', '11715966_934392_ED.jpg', 1),
(8, 'Band Ring', '19286797_958160_SV_1_M.jpg', 1),
(9, 'X Closed Wide Ring', '68659590_1018030_ED_M.jpg', 1),
(10, 'Hexagon Ring', '67944291_1016456_ED_M.jpg', 1),
(11, 'T1 Open Hoop Earrings', '68408091_1016259_ED.jpg', 2),
(12, 'Flower Earrings', '23954168_997901_ED.jpg', 2),
(13, 'Victoria Earrings', '38050982_984148_ED.jpg', 2),
(14, 'Platinum Earrings', '60572895_1027799_ED.jpg', 2),
(15, 'Diamond Vine Circle Earrings', '68287480_1012497_ED.jpg', 2),
(16, 'Diamond Vine Drop Earrings', '68287448_1007064_ED.jpg', 2),
(17, 'V-Rope Ear Clips', '19003965_1028001_ED.jpg', 2),
(18, 'Flame Ear Clips', '12628692_1028000_ED.jpg', 2),
(19, 'Earrings', '30254406_930978_ED_M.jpg', 2),
(20, 'Mixed Cluster Drop Earrings', '35390529_996539_ED.jpg', 2),
(21, 'Flame Ear Clips', '13465819_1020229_ED.jpg', 2),
(22, 'Three Leaves Ear Clips', '13849781_926361_ED.jpg', 2),
(23, 'Paloma\'s Melody Ring', '60699615_980279_ED_M.jpg', 1),
(24, 'Tiffany Circlet diamond necklace', '24602621_261617_ED.jpg', 3),
(25, 'Mixed Cluster Necklace', '35092927_993570_ED.jpg', 3),
(26, 'Bow Tie Necklace', '22348442_1020302_ED.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

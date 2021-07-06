-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 08:04 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `id` int(255) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_id` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `name` varchar(60) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable1` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable2` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable3` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable4` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable5` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `negative_point` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `possetive_point` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_id`, `name`, `variable1`, `variable2`, `variable3`, `variable4`, `variable5`, `negative_point`, `possetive_point`, `photo`) VALUES
(1, '1', 'iphone11', 'perfect', 'perfect', 'perfect', 'perfect', 'perfect', 'less internal memory', 'good quality', NULL),
(2, '2', 'samand', '2', '3', '4', '5', '6', 'tormoz', 'speed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usercomment`
--

CREATE TABLE `usercomment` (
  `id` int(255) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `product_id` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable1` varchar(10) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable2` varchar(10) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable3` varchar(10) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable4` varchar(10) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `variable5` varchar(10) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `negative_point` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `possetive_point` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `usercomment`
--

INSERT INTO `usercomment` (`id`, `name`, `product_id`, `email`, `variable1`, `variable2`, `variable3`, `variable4`, `variable5`, `negative_point`, `possetive_point`) VALUES
(1, 'maryam', '1', 'maryam@yahoo.com', '1', '2', '3', '4', '5', 'dfjdfgj', 'dhdh');

-- --------------------------------------------------------

--
-- Table structure for table `userslist`
--

CREATE TABLE `userslist` (
  `id` int(255) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `password` varchar(120) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlist`
--
ALTER TABLE `adminlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercomment`
--
ALTER TABLE `usercomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userslist`
--
ALTER TABLE `userslist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usercomment`
--
ALTER TABLE `usercomment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userslist`
--
ALTER TABLE `userslist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

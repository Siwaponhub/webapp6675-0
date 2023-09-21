-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 06:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--
CREATE DATABASE IF NOT EXISTS `movie` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `movie`;

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--
-- Creation: Sep 21, 2023 at 03:28 PM
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE `actor` (
  `Actor_ID` int(14) NOT NULL,
  `Actor_name` varchar(20) NOT NULL,
  `Actor_lastname` varchar(30) NOT NULL,
  `Actor_age` varchar(10) NOT NULL,
  `Product_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `actor`
--

TRUNCATE TABLE `actor`;
--
-- Dumping data for table `actor`
--

INSERT DELAYED IGNORE INTO `actor` (`Actor_ID`, `Actor_name`, `Actor_lastname`, `Actor_age`, `Product_name`) VALUES
(10, 'Pippaqqqqdwadaw', 'Odonnell', '23', 'Avengers'),
(11, 'Pippaqqqq', 'Odonnell', '23', 'Avengers'),
(13, 'Pippaqqqq', 'Odonnell', '23', 'Avengers'),
(0, 'Pippwadads', 'Odonnell', '23', 'Avengers'),
(15, 'Pippaqqqq', 'Odonnell', '23', 'Avengers'),
(16, 'Foren', 'Mango', '56', 'Jango');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--
-- Creation: Sep 21, 2023 at 03:28 PM
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `Member_ID` int(14) NOT NULL,
  `Member_name` varchar(20) NOT NULL,
  `Member_lastname` varchar(20) NOT NULL,
  `Member_phone` varchar(12) NOT NULL,
  `Member_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `member`
--

TRUNCATE TABLE `member`;
--
-- Dumping data for table `member`
--

INSERT DELAYED IGNORE INTO `member` (`Member_ID`, `Member_name`, `Member_lastname`, `Member_phone`, `Member_Address`) VALUES
(101, 'Fewadawd', 'Hick', '08754236589', 'Lamphun'),
(102, 'Cade ', 'Underwood', '0963587521', 'Kanchanaburi'),
(103, 'Siobhan ', 'Rogers', '0612354215', 'Nonthaburi'),
(104, 'Homin', 'joijee', '0654328569', 'Doraemon'),
(105, 'Siwapoawdad', 'Jais', '0641195837', 'wadasd'),
(106, 'Siwapo', 'Jais', '0641195837', 'wadasd');

-- --------------------------------------------------------

--
-- Table structure for table `member_order`
--
-- Creation: Sep 21, 2023 at 04:04 PM
-- Last update: Sep 21, 2023 at 04:04 PM
--

DROP TABLE IF EXISTS `member_order`;
CREATE TABLE `member_order` (
  `Order_id` int(14) NOT NULL,
  `Member_ID` int(14) NOT NULL,
  `Member_name` varchar(20) NOT NULL,
  `Product_name` varchar(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `member_order`
--

TRUNCATE TABLE `member_order`;
--
-- Dumping data for table `member_order`
--

INSERT DELAYED IGNORE INTO `member_order` (`Order_id`, `Member_ID`, `Member_name`, `Product_name`, `Date`) VALUES
(10001, 101, 'Richart', 'Titanic', '2023-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--
-- Creation: Sep 21, 2023 at 03:28 PM
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `Produce_id` int(10) NOT NULL,
  `Produce_name` varchar(20) NOT NULL,
  `Produce_type` varchar(20) NOT NULL,
  `Product_year` varchar(10) NOT NULL,
  `Product_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `product`
--

TRUNCATE TABLE `product`;
--
-- Dumping data for table `product`
--

INSERT DELAYED IGNORE INTO `product` (`Produce_id`, `Produce_name`, `Produce_type`, `Product_year`, `Product_price`) VALUES
(0, '', '', '', ''),
(104, 'King kong', 'Action', '1990', '230'),
(1001, 'Avatar ', 'SciFI Action', '2009', '200'),
(1002, 'Avengers', 'Action', '2019', '300'),
(1003, 'Titanic ', 'Drama', '1997', '250');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Produce_id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

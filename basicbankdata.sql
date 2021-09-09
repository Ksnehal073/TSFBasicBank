-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 11:48 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicbankdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Snehal karki', 'snehalkarki073@gmail.com', 9712),
(2, 'Sanjay', 'sanjay541@gmail.com', 3610),
(3, 'Seachu', '489seachu@gmail.com', 11152),
(4, 'Hemant', 'ultimatecoder564@gmail.com', 19570),
(5, 'Jitendra', 'Jitendra@chiku.com', 14803),
(6, 'Prashant', 'Panda658@gmail.com', 5662),
(7, 'swikrit', 'swikritavenger@gmail.com', 6255),
(8, 'shabaz', 'alam546@gmail.com', 8773),
(9, 'sudip Paudel', 'Bahun@paudel.com', 9712),
(10, 'Rahul', 'rajRahul478@gmail.com', 9813);

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`id`, `sender`, `receiver`, `amount`, `time`) VALUES
(1, 'Sanjay', 'Rahul', 2000, '2021-09-08 14:41:39'),
(2, 'Snehal karki', 'swikrit', 5000, '2021-09-08 14:42:02'),
(3, 'Seachu', 'sudip Paudel', 100, '2021-09-08 14:54:39'),
(4, 'Hemant', 'Seachu', 10000, '2021-09-08 14:55:06'),
(5, 'Snehal karki', 'Prashant', 50, '2021-09-08 15:17:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

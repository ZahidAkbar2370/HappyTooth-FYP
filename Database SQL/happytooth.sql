-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 11:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happytooth`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(4, 'Hashir', 'hashir@noobweb.com', 'Please provide rates for teeth fillings'),
(5, 'Hiba', 'hiba@earthlink.net', 'Result oriented treatment with friendly staff.');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(99) NOT NULL,
  `uid` int(99) NOT NULL,
  `date` date NOT NULL,
  `prescription` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `uid`, `date`, `prescription`) VALUES
(1, 14, '2021-07-30', 'Dicloran Tabs 1+1\r\nSensodine Toothpase 1+1\r\nSomo Gel'),
(2, 14, '2021-07-30', 'Colgate Optic White\r\nListerine Mouthwash'),
(3, 14, '2021-07-31', 'Dr. Toothpaste 1+1'),
(4, 15, '2021-07-30', 'Colgate Optic White Mouthwash 1+1+1\r\nListrine 1+1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `treatment` varchar(100) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `info` varchar(300) DEFAULT NULL,
  `appointdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `gender`, `age`, `phone`, `treatment`, `degree`, `info`, `appointdate`) VALUES
(2, 'Kareem', '5f4dcc3b5aa765d61d8327deb882cf99', 'doctor', NULL, NULL, NULL, NULL, 'DMD (Pakistan)', NULL, NULL),
(3, 'Naseem', '5f4dcc3b5aa765d61d8327deb882cf99', 'doctor', NULL, NULL, NULL, NULL, 'DDS, DMD (Pakistan)', NULL, NULL),
(6, 'admin', 'a3ab47e46d1bc63fd8db2ac7f854cfca', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Saleem', '5f4dcc3b5aa765d61d8327deb882cf99', 'doctor', NULL, NULL, NULL, NULL, 'DSD (Pakistan)', NULL, NULL),
(9, 'Salma', '5f4dcc3b5aa765d61d8327deb882cf99', 'nurse', NULL, NULL, NULL, NULL, 'BS in Nursing', NULL, NULL),
(10, 'Hafsa', '5f4dcc3b5aa765d61d8327deb882cf99', 'nurse', NULL, NULL, NULL, NULL, 'BS in Nursing', NULL, NULL),
(11, 'Sakeena', '5f4dcc3b5aa765d61d8327deb882cf99', 'nurse', NULL, NULL, NULL, NULL, 'Diploma in Nursing', NULL, NULL),
(14, 'Naila', '5f4dcc3b5aa765d61d8327deb882cf99', 'patient', 'Female', '39', '03001234567', 'Teeth Filling', NULL, 'Teeth Filling :)', '2021-08-26 00:00:00'),
(15, 'Aqib', '5f4dcc3b5aa765d61d8327deb882cf99', 'patient', 'Male', '22', '03491180204', 'Scaling & Cleaning', NULL, 'Teeth Cleaning', '2021-08-26 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

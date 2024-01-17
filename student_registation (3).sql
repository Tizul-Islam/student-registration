-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 07:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_registation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(10) UNSIGNED NOT NULL,
  `ad_name` varchar(45) NOT NULL,
  `ad_password` varchar(45) NOT NULL,
  `ad_username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_password`, `ad_username`) VALUES
(1, 'admin', 'admin', 'Tizul');

-- --------------------------------------------------------

--
-- Table structure for table `admin01`
--

CREATE TABLE `admin01` (
  `ad_id` int(10) UNSIGNED NOT NULL,
  `ad_name` varchar(45) NOT NULL,
  `ad_password` varchar(45) NOT NULL,
  `ad_username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin01`
--

INSERT INTO `admin01` (`ad_id`, `ad_name`, `ad_password`, `ad_username`) VALUES
(1, 'admin', 'admin', 'Tizul'),
(2, 'admin', 'admin', 'Tushar');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `collage` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `class` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fname`, `collage`, `email`, `phone`, `class`, `message`) VALUES
(57, 'Tusahare', 'akbor', 'BF collage', 'tushar@gmail.com', '01875607026', '1st', 'confirm'),
(58, 'sahin', 'sorif', 'mirpour Copllage ', 'shaiin@gmail.com', '01875607026', '1st', 'yes'),
(59, 'Tizul Islam', 'abir', 'dhaka collage', 'tizulislam3@gmail.com', '01875607026', '1st', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `admin01`
--
ALTER TABLE `admin01`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin01`
--
ALTER TABLE `admin01`
  MODIFY `ad_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

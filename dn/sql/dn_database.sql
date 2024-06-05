-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 07:31 PM
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
-- Database: `dn_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `reset_token` varchar(64) DEFAULT NULL,
  `reset_token_expiration` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `reset_token`, `reset_token_expiration`) VALUES
(1, 'admin', '$2y$10$k9IbWvyEapp9.DLnTxpC.uLmF7vpN3Fueqza5LjBb.7UcWjzukjku', 'sebastiandantes159@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers_feedback`
--

CREATE TABLE `customers_feedback` (
  `id` int(11) NOT NULL,
  `rate` enum('1','2','3','4','5') DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  `state` tinyint(4) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_ctrl`
--

CREATE TABLE `feedback_ctrl` (
  `id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `middle_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `event_type` varchar(50) DEFAULT NULL,
  `package` varchar(50) DEFAULT NULL,
  `other_details` text DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `submission_timestamp` date NOT NULL DEFAULT current_timestamp(),
  `attachment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `reset_token` (`reset_token`);

--
-- Indexes for table `customers_feedback`
--
ALTER TABLE `customers_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers_feedback`
--
ALTER TABLE `customers_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

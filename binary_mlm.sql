-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 02:20 PM
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
-- Database: `binary_mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `leg_allocation`
--

CREATE TABLE `leg_allocation` (
  `id` int(11) NOT NULL,
  `profile_id` varchar(256) NOT NULL,
  `left_leg` varchar(100) NOT NULL,
  `right_leg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leg_allocation`
--

INSERT INTO `leg_allocation` (`id`, `profile_id`, `left_leg`, `right_leg`) VALUES
(1, 'ADMIN01', '', ''),
(2, 'FATMOT1189', 'ADMIN01', '');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `profile_id` varchar(256) NOT NULL,
  `sponser_id` varchar(256) NOT NULL,
  `sponser_name` varchar(256) NOT NULL,
  `placement_id` varchar(256) NOT NULL,
  `left_leg` varchar(100) NOT NULL,
  `right_leg` varchar(100) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `dob` varchar(256) NOT NULL,
  `father_name` varchar(256) NOT NULL,
  `mother_name` varchar(256) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `profile_id`, `sponser_id`, `sponser_name`, `placement_id`, `left_leg`, `right_leg`, `first_name`, `last_name`, `dob`, `father_name`, `mother_name`, `mobile_number`, `address`, `status`) VALUES
(1, 'ADMIN01', 'ADMIN01', 'sadadasd', 'ADMIN01', 'FATGDG038', 'FATGDG161', 'FIRSTNAME', 'ADMIN01', '', 'ADMIN01', 'ADMIN01', '', '', '1'),
(122, 'FATGDG038', 'ADMIN01', 'FIRSTNAME ADMIN01', 'ADMIN01', 'SFSFSF1053', '', 'dada', 'sdasdasd', '2024-02-03', 'fath', 'gdgd', '23424234', 'sfsfdsfd', '0'),
(123, 'FATGDG161', 'ADMIN01', 'FIRSTNAME ADMIN01', 'ADMIN01', '', '', 'asdasdasd', 'asdasd', '2024-02-16', 'fath', 'gdgd', '23424234', 'asdadsad', '0'),
(124, 'SFSFSF1053', 'ADMIN01', 'FIRSTNAME ADMIN01', 'FATGDG038', '', '', 'dada', 'dasdasd', '2024-02-10', 'sfs', 'fsfsf', '234234234', 'ssddfsf', '0'),
(125, 'DFFSDF1144', 'SFSFSF1053', 'dada dasdasd', 'SFSFSF1053', '', '', 'sdadsasd', 'fgdgd', '2024-02-11', 'dffgdf', 'sdfsfsdf', '2345234234', 'sdfsdf', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leg_allocation`
--
ALTER TABLE `leg_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leg_allocation`
--
ALTER TABLE `leg_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

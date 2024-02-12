-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 01:31 PM
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
(1, 'ADMIN01', 'ADMIN01', 'sadadasd', 'ADMIN01', 'SSASFG0915', 'SSASFG2429', 'FIRSTNAME', 'ADMIN01', '', 'ADMIN01', 'ADMIN01', '9876543210', '', '1'),
(143, 'SSASFG0915', 'ADMIN01', 'FIRSTNAME ADMIN01', 'ADMIN01', 'SSAGDG1646', 'SSA4641619', 'gdfgdfg', 'dasdasd', '2024-02-09', 'ssasssss', 'sfgsfdsf', '353535', 'dghh', '0'),
(144, 'SSASFG2429', 'ADMIN01', 'FIRSTNAME ADMIN01', 'ADMIN01', '5EGGDF2219', 'FSDSFG2189', 'dfgd', 'dfgdfg', '2024-02-24', 'ssasssss', 'sfgsfdsf', '3535345', 'hertert', '0'),
(145, '5EGGDF2219', 'SSASFG2429', 'dfgd dfgdfg', 'SSASFG2429', '', '', 'gdfgdfg', 'dasdasd', '2024-02-22', '5egdgd', 'gdfgdgdg', '34534534534', 'dgdggdg', '0'),
(147, 'SSAGDG1646', 'ADMIN01', 'FIRSTNAME ADMIN01', 'SSASFG0915', '', '', 'gdfgdfg', 'dasdasd', '2024-02-16', 'ssasssss', 'gdgd', '456456456', 'tdgfdgdfg', '0'),
(148, 'SSA4641619', 'ADMIN01', 'FIRSTNAME ADMIN01', 'SSASFG0915', '', '', 'gdfgdfg', 'dasdasd', '2024-02-16', 'ssasssss', '46466456', '45645646456', 'ryyry', '0'),
(149, 'FSDSFG2189', 'ADMIN01', 'FIRSTNAME ADMIN01', 'SSASFG2429', '', '', 'dfgd', 'dasdasd', '2024-02-21', 'fsdfsdf', 'sfgsfdsf', '456456456', 'sdfsfsdf', '0');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2025 at 06:11 PM
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
-- Database: `audio_notes_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `role`, `class`) VALUES
('kumaar', 'kumaar@gmail.com', 'kumaar', 'staff', '0'),
('ram', 'ram@gmail.com', 'ram', 'student', '12'),
('kalai', 'kalai@gmail.com', 'kalai', 'student', '11');

-- --------------------------------------------------------

--
-- Table structure for table `staff_data_update`
--

CREATE TABLE `staff_data_update` (
  `subject_name` varchar(50) NOT NULL,
  `unit` int(9) NOT NULL,
  `class` int(12) NOT NULL,
  `date` date NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `audio_notes` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_data_update`
--

INSERT INTO `staff_data_update` (`subject_name`, `unit`, `class`, `date`, `staff_id`, `notes`, `audio_notes`) VALUES
('physics', 7, 12, '2025-03-17', 'k12', 'Electromagnetic wave theory', 0x5374616e64617264207265636f7264696e6720322e6d7033),
('physics', 8, 12, '2025-03-17', 'k14', 'electro microscope', 0x656c656374726f6e206d6963726f73636f7065207068797369637320756e697420382e6d7033),
('chemistry', 4, 11, '2025-03-17', 's11', 'hydrogen', 0x687964726f67656e20756e69742034206368656d69737472792e6d7033),
('english', 5, 10, '2025-03-17', 'e2', 'the seven ages', 0x74686520736576656e206167657320656e676c6973682e6d7033);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

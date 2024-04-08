-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 09:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nft-lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `instructor` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `units` int(10) NOT NULL,
  `due_date` date NOT NULL,
  `status` int(3) NOT NULL,
  `file_type` varchar(200) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `title`, `instructor`, `description`, `units`, `due_date`, `status`, `file_type`, `created_at`) VALUES
(1, 2, 'Introduction to Environmental, Health and Safety.', 'Sammy Samildo', 'This is a brief introduction to the safety aspects so that every employee can be aware of  what is required of him during disaster.', 1, '0000-00-00', 0, 'mib-health-safety-original-manual.pdf', 0),
(2, 1, 'rack stacker training for operators', 'Bakari Ali', 'This is a capacity building course that aims on equipping operators with the current technology in the market. ', 3, '0000-00-00', 0, 'Training.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Transport Depart', 'This category comprises of learning materials that are relevant to the transport department so that they can improve on their skills.', '2024-03-21 09:07:18'),
(2, 'Health & Safety.', 'This contains all learning materials that are relevant to the health and safety department.', '2024-03-21 09:09:04'),
(2, 'Health & Safety.', 'This contains all learning materials that are relevant to the health and safety department.', '2024-03-21 09:09:15'),
(3, 'operations', 'This contains all the necessary learning materials ', '2024-03-21 09:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `employee_no` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mypassword` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_no`, `fullname`, `username`, `email`, `mypassword`, `image`, `created_at`) VALUES
(5, 'NFT-002', 'Ali Bin Ali Seif', 'ali001', 'ali001@gmail.com', '$2y$10$tBssplWa1nlg2QUVPcymk.GNbV/OK9mCaAPjoN.2cGVmw8I8fip6y', 'user.png', '2024-03-20 09:46:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

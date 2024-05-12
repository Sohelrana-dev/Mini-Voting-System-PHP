-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2024 at 02:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `protik_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `disqualify_status` int DEFAULT NULL,
  `area` varchar(100) NOT NULL,
  `protik_image` varchar(100) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `protik_name`, `disqualify_status`, `area`, `protik_image`, `deleted_at`) VALUES
(1, 'Saikh Hasina', 'NOWKA', NULL, 'Dhaka', 'saikh_hasina.jpeg', NULL),
(2, 'Khaleda Jiya', 'DHANER SISH', NULL, 'Dhaka', 'khaleda_jiya.png', NULL),
(3, 'Sohel Rana', 'LARAVEL', NULL, 'Dhanmondi', 'sohel_rana.png', NULL),
(4, 'Robert ', 'PAKHA', 1, 'Dhanmondi', 'robert_.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commissioner`
--

CREATE TABLE `commissioner` (
  `id` int NOT NULL,
  `security_key` int NOT NULL,
  `phone_number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `commissioner`
--

INSERT INTO `commissioner` (`id`, `security_key`, `phone_number`) VALUES
(1, 3819, 1726581646);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int NOT NULL,
  `candidate_id` varchar(100) NOT NULL,
  `voter_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `candidate_id`, `voter_id`) VALUES
(1, '1', '1'),
(2, '3', '5'),
(3, '3', '9'),
(4, '1', '10'),
(5, '3', '7');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int NOT NULL,
  `date_of_birth` date NOT NULL,
  `nid_number` varchar(100) NOT NULL,
  `father_name` varchar(999) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `up` varchar(999) NOT NULL,
  `sub_district` varchar(999) NOT NULL,
  `district` varchar(999) NOT NULL,
  `division` varchar(999) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `image` varchar(999) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `name`, `email`, `phone_number`, `date_of_birth`, `nid_number`, `father_name`, `mother_name`, `up`, `sub_district`, `district`, `division`, `blood_group`, `image`, `gender`, `deleted_at`) VALUES
(1, 'sohel rana', 'sohelrana.dev55@gmail.com', 1317986612, '2004-12-29', '1234567899', 'anarul', 'sumiara', 'radhanogor', 'gomostapur', 'chapai nowabgoj', 'Rajshahi', 'AB+', '01317986612.jpeg', 'male', NULL),
(2, 'Sumon', 'vinuregeni@mailinator.com', 1387656789, '2015-08-26', '2354676543', 'Chiquita Stein', 'Prescott Eaton', 'volahat', 'gomostapur', 'madaripur', 'Dhaka', 'B-', '01387656789.png', 'male', '2024-04-04'),
(3, 'Karyn Foreman', 'jobabucit@mailinator.com', 1587908765, '1992-10-19', '2983245674', 'Mathews', 'Yvonne Hebert', 'Unde provide', 'necess', 'Incidunt', 'Qui dolore', 'O+', '01587908765.jpg', 'male', NULL),
(4, 'Mufutau Warner', 'pyje@mailinator.com', 1798005566, '2000-09-11', '2443412321', 'Evangeline Bryan', 'Yoshi Mueller', 'Laboris aut', 'Modi modi', 'Praesentium animi', 'Rerum porro', 'B+', '01798005566.png', 'male', NULL),
(5, 'Michelle Gamble', 'colej@mailinator.com', 1578763409, '1978-08-14', '6753456789', 'Karly Frank', 'Gwendolyn Hurley', 'Culpa exercitation', 'Voluptatem dolorem', 'Tempor dolore', 'Est voluptate', 'B+', '01578763409.png', 'male', NULL),
(6, 'Phillip Jacobson', 'hubykib@mailinator.com', 1967545678, '2016-07-10', '7331234321', 'Harrison Bowers', 'Jenette Blair', 'Qui iusto nulla ', 'Quia consequatur', 'consequatur', 'Commodi', 'B-', '01967545678.png', 'male', NULL),
(7, 'Vielka Merrill', 'tofopylaj@mailinator.com', 1376097654, '1994-11-04', '1647698765', 'Orli Cleveland', 'Erich Gross', 'Et necessitatibus', 'laborum consequatu', 'Rem magna', 'Nihil deserunt', 'B-', '01376097654.png', 'male', NULL),
(8, 'Fletcher Anthony', 'vapyn@mailinator.com', 1587908723, '1982-07-31', '2462334564', 'Marvin Lindsey', 'Ciara Richmond', 'Voluptatem', 'Voluptatem Rerum', 'Sunt adipisicing', 'Quia quis', 'AB-', '01587908723.jpg', 'male', NULL),
(9, 'Timothy Sanford', 'sipusiv@mailinator.com', 1678907654, '1983-09-30', '8463453267', 'Dante Hunt', 'Philip Valencia', 'Deserunt sed ', 'gomostapur', 'rajshahi', 'Dolor nihil', 'AB+', '01678907654.png', 'male', NULL),
(10, 'Jamalia Shannon', 'jugonoxok@mailinator.com', 1365786543, '1998-07-06', '3652312345', 'Bianca Howard', 'Thor Palmer', 'Necessitatibus', 'Molestias maiores oc', 'Harum sed', 'Est eos enim', 'B+', '01365786543.jpg', 'male', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commissioner`
--
ALTER TABLE `commissioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commissioner`
--
ALTER TABLE `commissioner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

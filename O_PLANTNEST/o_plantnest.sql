-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 07:07 PM
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
-- Database: `o_plantnest`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_plant`
--

CREATE TABLE `add_plant` (
  `plant_id` int(10) NOT NULL,
  `plant_title` varchar(500) NOT NULL,
  `plant_price` int(5) NOT NULL,
  `plant_quantity` int(11) NOT NULL,
  `plant_description` varchar(1000) NOT NULL,
  `plant_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_plant`
--

INSERT INTO `add_plant` (`plant_id`, `plant_title`, `plant_price`, `plant_quantity`, `plant_description`, `plant_image`) VALUES
(41, 'adeniam', 450, 92, '', 'plants_image/20231127_113550.jpg'),
(42, 'cactus', 380, 15, '', 'plants_image/20231127_114215.jpg'),
(43, 'table kamini', 180, 5, '', 'plants_image/20231127_113657.jpg'),
(44, 'Rio plant', 100, 20, '', 'plants_image/20231127_111720.jpg'),
(45, 'coin plant', 120, 15, '', 'plants_image/20231127_112141.jpg'),
(46, 'Spider plant', 100, 20, '', 'plants_image/20231127_112932.jpg'),
(47, 'devils backbone', 180, 10, '', 'plants_image/20231127_114137.jpg'),
(48, 'zed plant', 280, 15, '', 'plants_image/20231127_113213.jpg'),
(49, 'Snake plant', 50, 18, '', 'plants_image/20231127_112352.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `plant_id` int(20) NOT NULL,
  `plant_title` varchar(200) NOT NULL,
  `amount` int(6) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `a_number` int(10) NOT NULL,
  `t_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `contact`, `email`, `address`, `plant_id`, `plant_title`, `amount`, `account_type`, `a_number`, `t_id`) VALUES
(89, 'tushar', 1538198535, 'tushar@gmail.com', 'basherhat', 41, 'adeniam', 450, 'bKash', 1538198535, '454564564654634'),
(91, 'tushar', 1538198535, 'tushar@gmail.com', 'basher hat', 41, 'adeniam', 450, 'bKash', 1538198535, '4545643'),
(92, 'tushar', 1538198535, 'tushar@gmail.com', 'thakurgaon', 41, 'adeniam', 450, 'bKash', 1538198535, '52378585'),
(93, 'tushar', 1538198535, 'tushar@gmail.com', 'dinajpur', 41, 'adeniam', 450, 'bKash', 1538198535, '4545643345455');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(20) NOT NULL DEFAULT 'password',
  `permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`u_name`, `u_email`, `u_password`, `permission`) VALUES
('Iftekhar Hossain Tushar', 'a_tushar@gmail.com', 'a_tushar', 'permitted'),
('Iftekhar Hossain Tushar', 'tushar@gmail.com', 'tushar', 'not_permitted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_plant`
--
ALTER TABLE `add_plant`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`u_email`),
  ADD UNIQUE KEY `u_password` (`u_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_plant`
--
ALTER TABLE `add_plant`
  MODIFY `plant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

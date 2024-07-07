-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2024 at 04:15 PM
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
-- Database: `promed`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(266) NOT NULL,
  `email` varchar(266) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `specialties` varchar(266) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `phone`, `specialties`, `appointmentdate`, `appointmenttime`) VALUES
(1, 'meena', 'ss@gf', 'fhdyftu', '48', '2024-07-28', '20:58:00'),
(2, 'rfxd', 'dsd@dsfd.gh', '12344', 'Critical Care', '2024-07-18', '21:06:00'),
(3, 'meena', 'fgsr@tgh.yg', '674646987', 'Cardiology', '2024-07-20', '21:19:00'),
(4, 'meena', 'fgsr@tgh.yg', '674646987', 'Cardiology', '2024-07-20', '21:19:00'),
(5, 'prem', 'fgsr@tgh.yg', '679879870', 'Cardiology', '2024-07-26', '21:27:00'),
(6, 'meena', 'meenatchipkr@gmail.com', '6746476456', 'Critical Care', '2024-08-03', '21:40:00'),
(7, 'last', 'last@gmail.com', '1234567890', 'Anaesthesia', '2024-07-20', '21:45:00'),
(8, 'sheela', 'ss@gf.com', '1234567890', '41', '2024-07-06', '18:28:00'),
(9, 'meena', 'meenatchipkr@gmail.com', '1234567890', '43', '2024-07-14', '19:34:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

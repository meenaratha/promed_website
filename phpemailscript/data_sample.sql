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
-- Database: `mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sample`
--

CREATE TABLE `data_sample` (
  `id` int(11) NOT NULL,
  `name` varchar(266) NOT NULL,
  `email` varchar(266) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `specialties` varchar(266) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_sample`
--

INSERT INTO `data_sample` (`id`, `name`, `email`, `phone`, `specialties`, `appointmentdate`, `appointmenttime`) VALUES
(1, '', '', '', '', '0000-00-00', '00:00:00'),
(2, 'dgd', 'meenatchipkr@gmail.com', '1234567890', '35', '2024-07-10', '17:26:00'),
(3, 'meena', 'fvs@gdr', '67464u76', '49', '2024-07-26', '17:28:00'),
(4, 'meena', 'meenatchipkr@gmail.com', '67464u76', '48', '2024-08-04', '17:29:00'),
(5, '', '', '', '', '0000-00-00', '00:00:00'),
(6, 'meena', 'meenatchipkr@gmail.com', '1234567890', '46', '2024-07-20', '17:41:00'),
(7, '', '', '', '', '0000-00-00', '00:00:00'),
(8, '', '', '', '', '0000-00-00', '00:00:00'),
(9, 'meena', 'meenatchipkr@gmail.com', '1234567890', '46', '2024-07-28', '17:57:00'),
(10, 'meenaaaa', 'meenatchipkr@gmail.com', '1234567890', '42', '2024-07-14', '17:57:00'),
(11, 'meenaaaa', 'meenatchipkr@gmail.com', '1234567890', '47', '2024-07-20', '18:06:00'),
(12, 'sheela', 'meenatchipkr@gmail.com', '67464u76', '43', '2024-07-09', '18:10:00'),
(13, 'web', 'meenaweb1997@gmail.com', '1234567890', '38', '2024-07-21', '18:21:00'),
(14, 'meena', 'fvs@gdr', '1234567890', '42', '2024-07-20', '22:34:00'),
(15, 'meena', 'meenatchipkr@gmail.com', '1234567890', '46', '2024-07-21', '23:34:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sample`
--
ALTER TABLE `data_sample`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sample`
--
ALTER TABLE `data_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

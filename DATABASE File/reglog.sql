-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 05:11 PM
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
-- Database: `reglog`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_of_peoples` varchar(255) NOT NULL,
  `starting_date` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`fullname`, `email`, `no_of_peoples`, `starting_date`, `days`, `price`, `mode`, `location`) VALUES
('', 'aarga@mail.com', '', '2023-12-19', '', '', '', ''),
('', 'tlsdjf@mail.com', '', '2023-12-19', '', '', '', ''),
('', 'af@mail.com', '', '2023-12-19', '10', '39.99', 'Flight', ''),
('CBbcbb', 'adlgkaj@mail.com', '', '2023-12-20', '10', '39.99', 'Flight', ''),
('gafaf', 'afa@mail.com', '23', '2023-12-19', '10', '39.99', 'Flight', ''),
('Rushikesh Gaikwad', 'rushi@mail.com', '12', '2023-12-20', '5', '19.99', 'Flight', ''),
('Rushikehs', 'R12@mail.com', '15', '2023-12-28', '5', '19.99', 'Flight', ''),
('rushikesh', 'rushi@mail.com', '12', '2023-12-22', '13', '49.99', 'Flight', ''),
('', '', '', '2023-12-16', '12', '69.99', 'Flight', ''),
('rushikesbh', 'om2@gmail.com', '23', '2023-12-11', '13', '49.99', 'Flight', 'Rishikesh');

-- --------------------------------------------------------

--
-- Table structure for table `custom_plan`
--

CREATE TABLE `custom_plan` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `no_of_people` varchar(255) NOT NULL,
  `days_of_stay` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custom_plan`
--

INSERT INTO `custom_plan` (`fullname`, `email`, `contact_no`, `no_of_people`, `days_of_stay`, `budget`, `location`, `description`) VALUES
('eushi', 'rushi@mail.com', '54545', '34', '24', '5ww', 'af', 'af'),
('eushi', 'rushi@mail.com', '54545', '34', '24', '5ww', 'af', 'af'),
('Rushikesh gaikwad', 'rushi7giakwad@mail.com', '352154154', '10', '12', '$500', 'goa , taj , karla', 'none'),
('rishi', 'rishi@mail.com', '457812', '45', '547', '$500', 'adaadfa', 'aaf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'VAISHNAVI PRAKASH MULE', '42342', 'vaishnavimule128@gmail.com', 'va'),
(8, 'nikita', 'nikki', 'nikki@gmail.com', 'niki'),
(9, 'renuka', 'renu', 'renuka@gmail.com', '123'),
(13, 'rishi', 'rishi124', 'rishi@mail.com', '1234'),
(14, 'rushikesh', 'rushi', 'rushi@mail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

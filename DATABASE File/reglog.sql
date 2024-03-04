-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 07:16 PM
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
  `location` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`fullname`, `email`, `no_of_peoples`, `starting_date`, `days`, `price`, `mode`, `location`, `id`) VALUES
('omkar', 'om2@gmail.com', '23', '2023-12-18', '12', '7675', 'train', 'mumbai', 13),
('rushikesh gaikwad', 'om2@gmail.com', '45', '2023-12-08', '12', '99', 'flight', 'none', 16),
('Rushikesh Gaikwad', 'r@mail.com', '23', '2023-12-06', '12', '99', 'Flight', 'Delhi', 17),
('Rushikesh Gaikwad', 'rushi@mail.com', '5', '2024-03-26', '5', '19.99', 'Flight', 'Delhi', 21),
('Jayesh Nike', 'jay@mail.com', '124', '2024-03-20', '457', '1200', 'Flight', 'Delhi', 22);

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
(14, 'rushikesh', 'rushi', 'rushi@mail.com', '1234'),
(15, 'John Doe', 'John123', 'example@mail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

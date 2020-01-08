-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 06:03 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leisure`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `postalcode` int(10) NOT NULL,
  `accountnum` int(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `cpword` varchar(50) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `mobile`, `email`, `address`, `postalcode`, `accountnum`, `status`, `pword`, `cpword`, `date`) VALUES
(2, 'Dinuwan ', 'kalubowila', 712184518, 'kalubowila.dc25132@live.com', 'Horana', 12404, 123456789, 'Service Provider', 'asdf', 'asdf', ''),
(4, 'Dinith', 'Herath', 778370323, 'dinithherath18332@gmail.com', 'Kananwila', 12404, 2147483647, 'Customer', 'qwert', 'qwert', ''),
(5, 'Eye Plus ', 'Travels', 778370323, 'eyeplustravels@gmail.com', 'Horana', 12404, 2147483647, 'Service Provider', '123', '123', ''),
(6, 'Grand Vacation', 'Travels', 712184518, 'grandvacations@gmail.com', 'Colombo', 18542, 741852, 'Service Provider', '456', '456', ''),
(7, 'Lasantha ', 'Perera', 718524178, 'lasantha@gmail.com', 'Galle', 78954, 2147483647, 'Customer', '123', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

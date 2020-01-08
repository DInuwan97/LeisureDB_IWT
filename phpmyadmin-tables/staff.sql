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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `postalcode` int(10) NOT NULL,
  `accountnum` int(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `confirmation` varchar(150) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `cpword` varchar(50) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `mobile`, `email`, `address`, `postalcode`, `accountnum`, `status`, `confirmation`, `pword`, `cpword`, `date`) VALUES
(1, 'Yasiru', 'Samarasekara', 778556123, 'yasiru@gmail.com', 'Bulathsinhala', 12400, 456789123, 'Owner', 'Accept', 'asdf', 'asdf', ''),
(2, 'Jehan', 'Frenando', 718208981, 'jehanfrenando@gmail.com', 'Colombo', 45887, 2147483647, 'Admin', 'Accept', 'amarican97sin', 'amarican97sin', ''),
(3, 'Januka', 'Perera', 777610400, 'januka@live.com', 'Kandy', 754112, 7414741, 'Admin', 'Accept', '123', '123', ''),
(4, 'Nimal', 'Perera', 712184518, 'nimal@gmail.com', 'kaduwela', 7878, 1111111111, 'Admin', 'Pending', '123', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

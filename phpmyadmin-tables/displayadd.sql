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
-- Table structure for table `displayadd`
--

CREATE TABLE `displayadd` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `checkby` varchar(150) NOT NULL,
  `paymentstatus` varchar(150) NOT NULL,
  `checkdate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `displayadd`
--

INSERT INTO `displayadd` (`id`, `postid`, `checkby`, `paymentstatus`, `checkdate`) VALUES
(1, 12, 'jehanfrenando@gmail.com', '', ''),
(2, 13, 'jehanfrenando@gmail.com', '', ''),
(3, 16, 'jehanfrenando@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `displayadd`
--
ALTER TABLE `displayadd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `displayadd`
--
ALTER TABLE `displayadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Table structure for table `postadd`
--

CREATE TABLE `postadd` (
  `id` int(11) NOT NULL,
  `servicename` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `cost` decimal(25,2) NOT NULL,
  `usermail` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `adminstatus` varchar(50) NOT NULL,
  `paymentstatus` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postadd`
--

INSERT INTO `postadd` (`id`, `servicename`, `description`, `category`, `cost`, `usermail`, `status`, `adminstatus`, `paymentstatus`, `image`, `date`) VALUES
(11, 'Sigiriya Rock', ' yyyyyyyyyyyyyyyyyyyyf', 'Hikking', '9500.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Pending', 'Pending', '1536228218-27750352_962768180556722_1761516741607335088_n.jpg', ''),
(12, 'Dream World - Thailand', ' qqqqqqqq dddddddddd fffffffffffff', 'Camping', '10500.00', 'eyeplustravels@gmail.com', 'Service Provider', 'Pending', 'Pending', '1536229929-background_m3_login_for_m1_by_andreascy-d3ecbzg.jpg', ''),
(13, 'Singopoore - Universal Studio', ' aaa wrgedthjeryhnb bnryhdtgbdtghwer\r\nqeghwethrtbdfh\r\nethrtyhaergr5h rygretghsdfth\r\nettuyhrgbcbn rthadfgdb\r\nhrjkfgsdfhfgnc    \r\nethdhsdg\r\ndgfhjfggbdfjfg  ryhghnfhxfbc\r\nghghvhkdvb  nfyhujvhv bcguv', 'Swimming', '130000.00', 'grandvacations@gmail.com', 'Service Provider', 'Accept', 'Pending', '1536230985-27750352_962768180556722_1761516741607335088_n.jpg', ''),
(14, 'Unawatuna Beach', ' wefgqwrtgqerb erfghqdfbc et4hdfhwdh\r\nqwrgsf\r\nqe\r\nqe\r\n\r\nqerghqethethdthethertyhr', 'Swimming', '10500.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Pending', 'Pending', '1536233117-banner2.jpg', '2018-09-06 16:55:17'),
(15, 'Hummanaya - Hambanthota', ' asasasasa\r\nfffffdfdfdf gg g g  g hgyyy\r\nhghghgg', 'Camping', '8500.00', 'yasiru@gmail.com', 'Owner', 'Pending', 'Pending', '1536300803-beverage-3157395__340.jpg', '2018-09-07 11:43:23'),
(16, 'Kanneliya Forest', ' asdfghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'Hikking', '8600.00', 'jehanfrenando@gmail.com', 'Admin', 'Accept', 'Accept', '1536397213-maxresdefault.jpg', '2018-09-08 14:30:13'),
(17, 'Kanneliya Forest', ' tytuytuytuy', 'Hikking', '10000.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Accept', 'Pending', '1536558384-2018-06-13.png', '2018-09-10 11:16:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postadd`
--
ALTER TABLE `postadd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postadd`
--
ALTER TABLE `postadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 08:32 AM
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
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `accountnum` int(11) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `balance` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `userid`, `accountnum`, `pwd`, `balance`) VALUES
(1, 0, 123456789, '123', '7500'),
(2, 0, 2147483647, '456', '2200'),
(3, 0, 1147183645, '123', '4800'),
(4, 0, 741852, '456', '6600');

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
(7, 14, 'jehanfrenando@gmail.com', 'Pending', ''),
(8, 11, 'jehanfrenando@gmail.com', 'Accept', ''),
(9, 12, 'jehanfrenando@gmail.com', 'Accept', ''),
(12, 19, 'nimal@gmail.com', 'Pending', ''),
(13, 18, 'januka@live.com', 'Accept', ''),
(14, 20, 'januka@live.com', 'Accept', ''),
(15, 17, 'jehanfrenando@gmail.com', 'Accept', ''),
(16, 21, 'januka@live.com', 'Accept', ''),
(17, 22, 'jehanfrenando@gmail.com', 'Pending', ''),
(18, 23, 'nimal@gmail.com', 'Accept', ''),
(19, 25, 'jehanfrenando@gmail.com', 'Accept', ''),
(20, 24, 'nimal@gmail.com', 'Accept', ''),
(22, 13, 'nimal@gmail.com', 'Pending', ''),
(23, 26, 'jehanfrenando@gmail.com', 'Accept', ''),
(24, 27, 'nimal@gmail.com', 'Accept', ''),
(25, 28, 'jehanfrenando@gmail.com', 'Accept', ''),
(26, 29, 'jehanfrenando@gmail.com', 'Accept', ''),
(27, 31, 'jehanfrenando@gmail.com', 'Accept', ''),
(29, 32, 'nimal@gmail.com', 'Accept', ''),
(33, 30, 'yasiru@gmail.com', 'Accept', '');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `cartid` int(11) NOT NULL,
  `displayid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `servicename` varchar(250) NOT NULL,
  `providermail` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `person` int(11) NOT NULL,
  `unitprice` decimal(25,2) NOT NULL,
  `total` decimal(25,2) NOT NULL,
  `customermail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`cartid`, `displayid`, `postid`, `servicename`, `providermail`, `date`, `person`, `unitprice`, `total`, `customermail`) VALUES
(4, 14, 20, 'Bangckok - Thailand', 'grandvacations@gmail.com', '2018-09-12', 1, '130000.00', '130000.00', 'kalubowila.dc25132@live.com'),
(5, 9, 12, 'Dream World - Thailand', 'eyeplustravels@gmail.com', '2018-09-17', 2, '10500.00', '21000.00', 'kalubowila.dc25132@live.com'),
(6, 7, 14, 'Unawatuna Beach', 'kalubowila.dc25132@live.com', '2018-09-27', 2, '10500.00', '21000.00', 'kalubowila.dc25132@live.com'),
(7, 7, 14, 'Unawatuna Beach', 'kalubowila.dc25132@live.com', '2018-09-20', 1, '10500.00', '10500.00', 'dinithherath18332@gmail.com'),
(8, 9, 12, 'Dream World - Thailand', 'eyeplustravels@gmail.com', '2018-09-20', 2, '10500.00', '10710.00', 'dinithherath18332@gmail.com'),
(9, 14, 20, 'Bangckok - Thailand', 'grandvacations@gmail.com', '2018-09-29', 2, '130000.00', '260000.00', 'kalubowila.dc25132@live.com'),
(10, 7, 14, 'Unawatuna Beach', 'kalubowila.dc25132@live.com', '2018-09-25', 1, '10500.00', '10500.00', 'kalubowila.dc25132@live.com'),
(11, 9, 12, 'Dream World - Thailand', 'eyeplustravels@gmail.com', '2018-09-18', 1, '10500.00', '10500.00', 'kalubowila.dc25132@live.com'),
(12, 9, 12, 'Dream World - Thailand', 'eyeplustravels@gmail.com', '2018-09-25', 2, '10500.00', '21000.00', 'kalubowila.dc25132@live.com'),
(13, 9, 12, 'Dream World - Thailand', 'eyeplustravels@gmail.com', '2018-09-24', 3, '10500.00', '31500.00', 'kalubowila.dc25132@live.com'),
(14, 9, 12, 'Dream World - Thailand', 'eyeplustravels@gmail.com', '2018-09-18', 2, '10500.00', '21000.00', 'dinithherath18332@gmail.com'),
(15, 9, 12, 'Dream World - Thailand', 'eyeplustravels@gmail.com', '2018-08-04', 3, '10500.00', '31500.00', 'kalubowila.dc25132@live.com'),
(16, 17, 22, 'Ritigala Mountain', 'kalubowila.dc25132@live.com', '2018-09-07', 2, '21000.00', '42000.00', 'kalubowila.dc25132@live.com'),
(17, 14, 20, 'Bangckok - Thailand', 'grandvacations@gmail.com', '2018-09-25', 5, '130000.00', '650000.00', 'eyeplustravels@gmail.com'),
(18, 19, 25, 'Sinharaja Rain Forest', 'grandvacations@gmail.com', '2018-10-19', 1, '7500.00', '7500.00', ''),
(19, 22, 13, 'Singopoore - Universal Studio', 'grandvacations@gmail.com', '2018-09-06', 1, '130000.00', '0.00', ''),
(20, 18, 23, 'Bathalegala', 'kalubowila.dc25132@live.com', '2018-09-04', 2, '7500.00', '15000.00', ''),
(21, 13, 18, 'Egypt Pyramids', 'eyeplustravels@gmail.com', '2018-09-06', 1, '10500.00', '10500.00', 'kalubowila.dc25132@live.com'),
(22, 19, 25, 'Sinharaja Rain Forest', 'grandvacations@gmail.com', '2018-09-11', 7, '7500.00', '52500.00', 'grandvacations@gmail.com');

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
(11, 'Sigiriya Rock', ' yyyyyyyyyyyyyyyyyyyyf', 'Hikking', '9500.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Accept', 'Accept', '1536228218-27750352_962768180556722_1761516741607335088_n.jpg', ''),
(12, 'Dream World - Thailand', ' qqqqqqqq dddddddddd fffffffffffff', 'Camping', '10500.00', 'eyeplustravels@gmail.com', 'Service Provider', 'Accept', 'Accept', '1536229929-background_m3_login_for_m1_by_andreascy-d3ecbzg.jpg', ''),
(13, 'Singopoore - Universal Studio', ' aaa wrgedthjeryhnb bnryhdtgbdtghwer\r\nqeghwethrtbdfh\r\nethrtyhaergr5h rygretghsdfth\r\nettuyhrgbcbn rthadfgdb\r\nhrjkfgsdfhfgnc    \r\nethdhsdg\r\ndgfhjfggbdfjfg  ryhghnfhxfbc\r\nghghvhkdvb  nfyhujvhv bcguv', 'Swimming', '130000.00', 'grandvacations@gmail.com', 'Service Provider', 'Accept', 'Pending', '1536230985-27750352_962768180556722_1761516741607335088_n.jpg', ''),
(14, 'Unawatuna Beach', ' wefgqwrtgqerb erfghqdfbc et4hdfhwdh\r\nqwrgsf\r\nqe\r\nqe\r\n\r\nqerghqethethdthethertyhr', 'Swimming', '10500.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Accept', 'Pending', '1536233117-banner2.jpg', '2018-09-06 16:55:17'),
(15, 'Hummanaya - Hambanthota', ' asasasasa\r\nfffffdfdfdf gg g g  g hgyyy\r\nhghghgg', 'Camping', '8500.00', 'yasiru@gmail.com', 'Owner', 'Pending', 'Pending', '1536300803-beverage-3157395__340.jpg', '2018-09-07 11:43:23'),
(16, 'Kanneliya Forest', ' asdfghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'Hikking', '8600.00', 'jehanfrenando@gmail.com', 'Admin', 'Accept', 'Accept', '1536397213-maxresdefault.jpg', '2018-09-08 14:30:13'),
(17, 'Kanneliya Forest', ' tytuytuytuy', 'Hikking', '10000.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Accept', 'Accept', '1536558384-2018-06-13.png', '2018-09-10 11:16:24'),
(18, 'Egypt Pyramids', ' aaaaaaaaaaaaaaaaaaaaaaaa\r\ndddddddddddddddddddddddddddddddd ddddddddddddddddddd eddwferyhtjrth\r\nfgheryjegyikegygygygygygygygygygygygygygygygygygy djrh\r\nfgjhjhjhjhjhjhf', 'Tourism', '10500.00', 'eyeplustravels@gmail.com', 'Service Provider', 'Accept', 'Accept', '1536768364-image5.jpg', '2018-09-12 21:36:04'),
(19, 'Melborne - Australia', ' teyhwethdthrthsdfgb\r\nsdgghrhsdfgbhcn ethfgbcgjhfyjhcvbn hdfbndfhdfgbdrthrf\r\ndgjryjcvbetyhrddhrvb hdhdjhdgxfhryjhndgwsgedt\r\ndffhrjhxcbxc  ghdfvbhbhrth', 'Tourism', '130000.00', 'eyeplustravels@gmail.com', 'Service Provider', 'Accept', 'Pending', '1536768408-image4.jpg', '2018-09-12 21:36:48'),
(20, 'Bangckok - Thailand', ' thsdfghdfghdfye\r\nergheryhegx e4gffffdgbndfyhdyedtthdfhdtthrhrfrhxc \r\ndfghdfhhdfhdfgh\r\nedghdfhdhdfh', 'Camping', '130000.00', 'grandvacations@gmail.com', 'Service Provider', 'Accept', 'Accept', '1536770282-image3.jpg', '2018-09-12 22:08:02'),
(21, 'Kithulgala Forest', ' aaaaaaaewew ffffffffffffff\r\n1144\r\nldld', 'Tourism', '9500.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Accept', 'Accept', '1537378599-39148897_598349750567068_6958726298109739008_o.jpg', '2018-09-19 23:06:39'),
(22, 'Ritigala Mountain', ' qqqqqqqqqqqqqqqqqllllllllllllll\r\nffffffffffffffffffffffffffffff\r\ndfyyhsfhgsh\r\nqqqqqqqqqqqqqqqqqllllllllllllll\r\nffffffffffffffffffffffffffffff\r\ndfyyhsfhgsh\r\nqqqqqqqqqqqqqqqqqllllllllllllll\r\nffffffffffffffffffffffffffffff\r\ndfyyhsfhgshqqqqqqqqqqqqqqqqqllllllllllllll\r\nffffffffffffffffffffffffffffff\r\ndfyyhsfhgsh\r\nqqqqqqqqqqqqqqqqqllllllllllllll\r\nffffffffffffffffffffffffffffff\r\ndfyyhsfhgsh', 'Camping', '21000.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Accept', 'Accept', '1537419623-39208436_598334300568613_5494137687055007744_o.jpg', '2018-09-20 10:30:23'),
(23, 'Bathalegala', ' qqqqqqqqqqqqqqqqqqqqq\r\ndddddddddddddd\r\nffffffffffffffffffff', 'Camping', '7500.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Accept', 'Accept', '1537421634-Screenshot (1).png', '2018-09-20 11:03:54'),
(24, 'Mahaweli Swimming', ' aaaaaaaaaaaaaaaaaaaaa\r\nddddddddddddddd', 'Swimming', '7500.00', 'eyeplustravels@gmail.com', 'Service Provider', 'Accept', 'Accept', '1537421843-beach.jpg', '2018-09-20 11:07:23'),
(25, 'Sinharaja Rain Forest', ' aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaf\r\nfasfdgdg\r\ndgdgdgdgd\r\ndgdgdgdgddggdg', 'Camping', '7500.00', 'grandvacations@gmail.com', 'Service Provider', 'Accept', 'Accept', '1537558093-2018-04-10 (1).png', '2018-09-22 00:58:13'),
(26, 'Lavinia Beach', ' dddddddddddddddddddddddddddd', 'Swimming', '9500.00', 'kalubowila.dc25132@live.com', 'Service Provider', 'Accept', 'Accept', '1537607612-badges_1x.png', '2018-09-22 14:43:32'),
(27, 'Arugam Bay', ' fgsfgfgsfgsfgsfgsf', 'Swimming', '7800.00', 'eyeplustravels@gmail.com', 'Service Provider', 'Accept', 'Accept', '1537786845-WIN_20180330_18_50_45_Pro.jpg', '2018-09-24 16:30:45'),
(28, 'Baticlo Bay', ' fefdfdfdf', 'Swimming', '130000.00', 'eyeplustravels@gmail.com', 'Service Provider', 'Accept', 'Accept', '1537787089-WIN_20180330_18_50_21_Pro.jpg', '2018-09-24 16:34:49'),
(29, 'Pidurangala Rock', ' aadfdsgfgfgf\r\ngfhhghgh\r\ndfhhgh hhghghghg', 'Hikking', '9500.00', 'grandvacations@gmail.com', 'Service Provider', 'Accept', 'Accept', '1537895090-maxresdefault-1-2.jpg', '2018-09-25 22:34:50'),
(30, 'Everest Mountain', ' ererewtrrrerythghfghghgh', 'Hikking', '7900.00', 'jehanfrenando@gmail.com', 'Admin', 'Accept', 'Accept', '1537902241-39261449_598339783901398_2398142384685711360_o.jpg', '2018-09-26 00:34:01'),
(31, 'Nilwala Bay', ' dfsgrgfs dgdghdfh thfgjjhj\r\ntjjhjh jhjfdhjfn\r\nd\r\nhjfyj', 'Tourism', '9500.00', 'eyeplustravels@gmail.com', 'Service Provider', 'Accept', 'Accept', '1537961001-40096823_1091239664378922_314524067153575936_n.jpg', '2018-09-26 16:53:21'),
(32, 'Kalu ganga', ' fgffgdf\r\nfhdghdfgdgd\r\ndndgjghdbhhdghdgjgfhnj', 'Tourism', '7900.00', 'grandvacations@gmail.com', 'Service Provider', 'Accept', 'Accept', '1537961298-39261449_598339783901398_2398142384685711360_o.jpg', '2018-09-26 16:58:18'),
(33, 'Piduruthalagala Mountain2', ' yyjgyjghjghj', 'Swimming', '7800.00', 'grandvacations@gmail.com', 'Service Provider', 'Pending', 'Pending', '1537984698-32293736_2164881666862193_7372595243742396416_o.jpg', '2018-09-26 23:28:18');

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
(5, 'Eye Plus ', 'Travels', 778370323, 'eyeplustravels@gmail.com', 'Horana', 12404, 1147183645, 'Service Provider', '123', '123', ''),
(6, 'Grand Vacation', 'Travels', 712184518, 'grandvacations@gmail.com', 'Colombo', 18542, 741852, 'Service Provider', '456', '456', ''),
(7, 'Lasantha ', 'Perera', 718524178, 'lasantha@gmail.com', 'Galle', 78954, 2004783610, 'Customer', '123', '123', '');

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
(2, 'Jehan', 'Frenando', 718208981, 'jehanfrenando@gmail.com', 'Colombo', 45887, 2147483647, 'Admin', 'Accept', 'usa', 'usa', ''),
(3, 'Januka', 'Perera', 777610400, 'januka@live.com', 'Kandy', 754112, 7414741, 'Admin', 'Accept', '123', '123', ''),
(4, 'Nimal', 'Perera', 712184518, 'nimal@gmail.com', 'kaduwela', 7878, 1111111111, 'Admin', 'Accept', '123', '123', ''),
(5, 'Lakith', 'Peiris', 778556123, 'lakith@gmail.com', 'Kohuwala', 12508, 859958654, 'Admin', 'Pending', '123', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `displayadd`
--
ALTER TABLE `displayadd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `postadd`
--
ALTER TABLE `postadd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `displayadd`
--
ALTER TABLE `displayadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `postadd`
--
ALTER TABLE `postadd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

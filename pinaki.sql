-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 09:16 AM
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
-- Database: `pinaki`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(12, 'Pinaki Biswal', 'biswalpinaki1122@gmail.com', 8280401024, 'fcrgtsreaewasf'),
(13, 'Priyanka Biswal', 'priyanka1122@gmail.com', 7046120369, 'mechanics are so supportive and '),
(14, 'Abinas Das', 'abinashdas.8093@gmail.com', 8280401024, 'mechanics are so tallented and so supportvie\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `data_details`
--

CREATE TABLE `data_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` bigint(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirmpassword` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_details`
--

INSERT INTO `data_details` (`id`, `firstname`, `lastname`, `user_name`, `email`, `mobile`, `gender`, `dob`, `password`, `confirmpassword`, `address`) VALUES
(4, 'bapi', 'sahoo', 'bapi2233', 'bapisahoo1122@gmail.com', 6370463226, 'male', '2023/07/03', '2222', '2222', 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR'),
(6, 'chuni', 'panda', 'chuni123', 'abhilipsa1122@gimail.com', 8908147971, 'female', '2001-01-12', '12345', '12345', 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR'),
(5, 'litun', 'behera', 'litun6370', 'litun1122@gmail.com', 6370463226, 'male', '2023/07/04', '12345', '12345', 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR'),
(2, 'maneesh', 'sethi', 'manees1020', 'maneesh@123gmail.com', 8018976542, 'male', '2023/07/05', 'maneesh@123', 'maneesh@123', 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR'),
(7, 'Pinaki', 'Biswal', 'pinaki6370', 'pinakibiswal1122@gmail.com', 6370463226, 'male', '2023/07/01', 'Pinaki@123', 'Pinaki@123', 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR,\r\npin-756168'),
(3, 'Priyanka', 'Biswal', 'priyannka1123', 'priyanka1122@gmail.com', 9777063614, 'female', '2023/07/04', '123456', '123456', 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR'),
(16, 'Rabin', 'Ulha', 'rabin1122', 'rabinulha1122@gmail.com', 8908146971, 'male', '2001/11/02', '123456', '123456', 'Bhubanswar\r\n751016'),
(20, 'Rabindra', 'Biswal', 'rabindra1234', 'rabindra1122@gmail.com', 8908146971, 'male', '1975/01/02', '123456', '123456', 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR'),
(8, 'Saipriya', 'sahoo', 'sai890', 'saipriya1122@gmail.com', 8908468954, 'female', '', '123456', '123456', 'Saileshrre vihar,7510165\r\nbhubaneswar....');

-- --------------------------------------------------------

--
-- Table structure for table `data_details1`
--

CREATE TABLE `data_details1` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `feedback` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_details1`
--

INSERT INTO `data_details1` (`id`, `name`, `feedback`) VALUES
(6, 'Pinaki Biswal', 'scnxnjsucgstycxgs');

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE `emp_details` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` bigint(30) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `workarea` varchar(255) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`id`, `name`, `email`, `mobile`, `gender`, `workarea`, `dob`, `address`) VALUES
(6, 'Pinaki Biswal', 'pinakibiswal1122@gmail.com', 6370463226, 'male', 'tv,fridge,cooler,washingmachine', '2001-02-20', 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` bigint(10) NOT NULL,
  `request_code` varchar(10) NOT NULL,
  `user_code` varchar(20) DEFAULT NULL,
  `service_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `request_code`, `user_code`, `service_code`) VALUES
(1, 'dsafda', 'pinaki12345', 'FRIDGE');

-- --------------------------------------------------------

--
-- Table structure for table `requester_info`
--

CREATE TABLE `requester_info` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` bigint(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `altmobile` bigint(30) NOT NULL,
  `paddress` varchar(250) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `customer_id` bigint(50) NOT NULL,
  `request_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requester_info`
--

INSERT INTO `requester_info` (`id`, `user_name`, `name`, `mobile`, `date`, `altmobile`, `paddress`, `problem`, `customer_id`, `request_status`) VALUES
(28, 'sai890', 'Abinas Das', 8908146971, '2000-08-07', 9777063617, 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR', 'Cooler', 512410358, 'SUCCESS'),
(29, 'chuni123', 'Pinaki Biswal', 8908146971, '2000-09-09', 9777063617, 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR', 'Guiger', 1481009517, 'SUCCESS'),
(30, 'chuni123', 'Pinaki Biswal', 6370463226, '2023-06-28', 8908146971, 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR', 'TV', 1418837398, 'SUCCESS'),
(33, 'chuni123', 'Saikrushna Panda', 8908146971, '2023-07-18', 8908146971, 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR', 'Washing Machine', 998528735, 'DECLINE'),
(42, 'rabindra1234', 'Pinaki Biswal', 6370463226, '2001-01-02', 8908146971, 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR', 'TV', 2024050704, 'SUCCESS'),
(43, 'rabindra1234', 'Pinaki Biswal', 9777063614, '2001-01-02', 6370463226, 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR', 'TV', 2073622779, 'SUCCESS'),
(46, 'sai890', 'Abinas Das', 6370463226, '2001-01-02', 6370463226, 'NARASINGHPUR  BASUDEVPUR\r\nNARASINGHPUR BASUDEVPUR\r\nNARASINGHPUR', 'TV', 415517652, 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(10) NOT NULL,
  `service_code` varchar(20) NOT NULL,
  `service_name` varbinary(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_code`, `service_name`) VALUES
(2, 'AC', 0x41697220436f6e646974696f6e6572),
(3, 'FAN', 0x4365696c696e672046414e),
(1, 'FRIDGE', 0x524546524947455241544f52),
(4, 'TFAN', 0x5461626c652046616e);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` bigint(5) NOT NULL,
  `user_code` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(600) NOT NULL,
  `rolr_code` varbinary(10) NOT NULL,
  `record_status` int(1) NOT NULL DEFAULT 1,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `user_code`, `user_name`, `password`, `rolr_code`, `record_status`, `created_on`) VALUES
(1, 'pinaki12345', 'pinaki', 'b35f68d20413f9206c9a84be183c89f36fb9d151ada9e9682dd55d1411c5064de9793e7f8e29e37a9b86370afcf8a4d552e9eda5d318da93ed06c2568f6c6d16', '', 1, '2023-07-25 16:03:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_details`
--
ALTER TABLE `data_details`
  ADD PRIMARY KEY (`user_name`,`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `data_details1`
--
ALTER TABLE `data_details1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_details`
--
ALTER TABLE `emp_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_code`),
  ADD KEY `id` (`id`),
  ADD KEY `fk_1` (`user_code`),
  ADD KEY `fk_2` (`service_code`);

--
-- Indexes for table `requester_info`
--
ALTER TABLE `requester_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_code`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_code`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_details`
--
ALTER TABLE `data_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `data_details1`
--
ALTER TABLE `data_details1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emp_details`
--
ALTER TABLE `emp_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requester_info`
--
ALTER TABLE `requester_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`user_code`) REFERENCES `user_master` (`user_code`),
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`service_code`) REFERENCES `services` (`service_code`);

--
-- Constraints for table `requester_info`
--
ALTER TABLE `requester_info`
  ADD CONSTRAINT `requester_info_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `data_details` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

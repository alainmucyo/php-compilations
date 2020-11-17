-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 07:33 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'alain', 'teen');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `Cities` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `Cities`) VALUES
(1, 'Gisenyi'),
(2, 'Musanze'),
(3, 'Kibuye'),
(5, 'Ngororero'),
(6, 'Nyanza'),
(7, 'Butare'),
(8, 'Ruhango'),
(9, 'Nyagatare'),
(10, 'Mushubati'),
(11, 'Gisenyi'),
(12, 'Musanze'),
(13, 'Kibuye'),
(14, 'Muhanga'),
(15, 'Ngororero'),
(16, 'Nyanza'),
(17, 'Butare'),
(18, 'Ruhango'),
(19, 'Nyagatare'),
(20, 'Mushubati'),
(21, 'Kigali'),
(22, 'Rusizi'),
(23, 'Karongi'),
(24, 'Burera'),
(25, 'nyakabuye'),
(26, 'kamembe'),
(27, 'kmb'),
(28, 'mwezi'),
(29, ''),
(30, ''),
(31, 'bugumya'),
(32, 'cite'),
(33, 'migos'),
(34, 'rae'),
(35, 'jjj'),
(36, 'kala');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `place_from` varchar(50) NOT NULL,
  `place_to` varchar(50) NOT NULL,
  `price` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `place_from`, `place_to`, `price`) VALUES
(2, 'Musanze', 'Kigali', '2000'),
(3, 'Gisenyi', 'Kigali', '3000'),
(4, 'Gisenyi', 'Ngororero', '2000'),
(5, 'Gisenyi', 'Karongi', '5000'),
(7, 'Musanze', 'Kigali', '2000'),
(8, 'Gisenyi', 'Kigali', '3000'),
(9, 'Gisenyi', 'Ngororero', '2000'),
(10, 'Gisenyi', 'Karongi', '5000'),
(11, 'Gisenyi', 'Muhanga', '4000'),
(12, 'Rusizi', 'Nyagatare', '12700'),
(13, 'Kigali', 'Muhanga', '930'),
(14, 'Kigali', 'Butare', '2700'),
(15, 'Karongi', 'Muhanga', '4500'),
(16, 'Gisenyi', 'Musanze', '1200'),
(17, 'Burera', 'Musanze', '1200'),
(18, 'nyakabuye', 'kamembe', '1500'),
(19, 'kmb', 'mwezi', '100'),
(20, '', '', '0'),
(21, 'bugumya', 'cite', '100'),
(22, 'migos', 'rae', '-10'),
(23, '', '', '0'),
(24, 'jjj', 'kala', '0');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(100) NOT NULL,
  `seats` varchar(200) NOT NULL,
  `time_go` varchar(200) NOT NULL,
  `id_from_place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `seats`, `time_go`, `id_from_place`) VALUES
(1, '12', '12:00\r\n', ''),
(2, '', '', '1'),
(3, '3', '4:00', '2'),
(4, '', '3:00', '18'),
(5, '', '6:00', '19'),
(6, '', '8:00 Am', '20'),
(7, '', '3:00 Am', '21'),
(8, '', '24:00 Am', '22'),
(9, '', ' Am', '23'),
(10, '', 'sii Am', '24');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ticket_id` int(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `deapart_time` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date_creation` varchar(50) NOT NULL,
  `confirmed` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `ticket_id`, `destination`, `date_time`, `amount`, `deapart_time`, `phone`, `date_creation`, `confirmed`) VALUES
(3, 'yves', 11, 'From :Gisenyi To: Kigali', '2017-08-29 03:19:20', '3000', '8:20', '+250726176476', '2017-08-29 03:19:20', 0),
(4, 'yves', 11, 'From :Gisenyi To: Kigali', '2017-08-29 03:36:58', '3000', '8:20', '+250726176476', '2017-08-29 03:36:58', 0),
(5, 'yves', 11, 'From :Gisenyi To: Kigali', '2017-08-29 03:43:58', '3000', '8:20', '+250726176476', '2017-08-29 03:43:58', 0),
(6, 'yves', 11, 'From :Gisenyi To: Kigali', '2017-08-29 03:44:57', '3000', '8:20', '+250726176476', '2017-08-29 03:44:57', 0),
(8, 'yves', 11, 'From :Gisenyi To: Kigali', '2017-08-29 03:46:39', '3000', '8:20', '+250726176476', '2017-08-29 03:46:39', 0),
(17, 'yves', 8703853, 'From :Gisenyi To: Musanze', '2017-08-29 05:23:32', '1200', '5:00', '+250726176476', '2017-08-29 05:23:32', 0),
(18, 'dhiba', 5439973, 'From :Gisenyi To: Musanze', '2017-08-29 06:39:23', '1200', '6:30', '', '2017-08-29 06:39:23', 0),
(19, 'yves', 83722903, 'From :Musanze To: Burera', '2017-08-29 06:55:13', '1200', '5:00', '+250726176476', '2017-08-29 06:55:13', 0),
(20, 'yves', 59567958, 'From :Kibuye To: Nyanza', '2017-08-29 07:56:44', '0', '5:00', '+250726176476', '2017-08-29 07:56:44', 0),
(21, 'Lucky', 27034381, 'From :Muhanga To: Ngororero', '2017-08-29 09:47:14', '0', '5:00', '0727086381', '2017-08-29 09:47:14', 0),
(22, 'yves', 80318968, 'From :Gisenyi To: Musanze', '2017-08-30 08:18:10', '1200', '5:45', '+250726176476', '2017-08-30 08:18:10', 0),
(23, 'dhiba', 47564401, 'From :Musanze To: Gisenyi', '2017-08-30 08:42:18', '1200', '12:00', '+250787689876', '2017-08-30 08:42:18', 1),
(24, 'Mfurayacu Mucyo Alain', 47564402, 'From :Musanze To: Gisenyi', '2018-01-04 07:13:52', '1200', '12:00', '0725698930', '2018-01-04 07:13:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_interval`
--

CREATE TABLE `time_interval` (
  `id` int(11) NOT NULL,
  `time_go` varchar(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_interval`
--

INSERT INTO `time_interval` (`id`, `time_go`) VALUES
(1, '5:00'),
(2, '5:30'),
(3, '5:45'),
(4, '6:00'),
(5, '6:30'),
(6, '7:00'),
(7, '8:20'),
(8, '9:40'),
(9, '12:00'),
(10, '12:30'),
(11, '13:39'),
(12, '3:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(3, 'yves', 'niyobuhungiro.yve@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '+250726176476'),
(8, 'Madiba', 'diba@gmail.com', '03c7c0ace395d80182db07ae2c30f034', '+78347861'),
(9, 'sipiriani', 'sipiri@guma.com', '81dc9bdb52d04dc20036dbd8313ed055', '+015'),
(15, 'Lucky', 'Luckyfreinet@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0727086381'),
(16, 'dhiba', 'dhiba@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '+250787689876'),
(17, 'Mfurayacu Mucyo Alain', 'alainmucyo3@gmail.com', '3ecffdcbbb3dcefa527942795f05e885', '0725698930'),
(18, 'drameh miller', 'alandrameh@gmail.com', '3ecffdcbbb3dcefa527942795f05e885', '0725698930');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_interval`
--
ALTER TABLE `time_interval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `time_interval`
--
ALTER TABLE `time_interval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

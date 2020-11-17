-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 07:31 AM
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
-- Database: `copy`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `id` int(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `full_name`, `email`, `password`, `image`) VALUES
(1, 'Mucyo alain', 'alainmucyo3@gmail.com', '3ecffdcbbb3dcefa527942795f05e885', 'doctors/Mucyo alain/5a3ff39cbbcde'),
(2, 'Mfurayacu Alain', 'wentalan3@gmail.com', 'd4774a38c584f7d602aedb52b3e189b3', 'doctors/Mfurayacu Alain/5a3ff3cd6f8e4'),
(3, 'Mfura Aldo', 'aldo@yahoo.com', '99754106633f94d350db34d548d6091a', 'doctors/Mfura Aldo/5a3ff414e4941'),
(4, 'Dr. Allan', 'icealan@gmail.com', '99754106633f94d350db34d548d6091a', 'doctors/Dr. Allan/5a3ff4ab26695'),
(5, 'Dr. Agnes', 'agnes@gmail.com', '4124bc0a9335c27f086f24ba207a4912', 'doctors/Dr. Agnes/5a3ff4e82d140'),
(6, 'Dr. Karrueche', 'tran@yahoo.com', 'b2ca678b4c936f905fb82f2733f5297f', 'doctors/Dr. Karrueche/5a3ff5b76f480'),
(7, 'alain', 'fuck@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d', 'doctors/alain/5a40916a959af'),
(8, 'Dr.Mucyo', 'mucyo@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d', 'doctors/Dr.Mucyo/5a43ddd8de9cb');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `det` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `name`, `det`, `image`) VALUES
(1, 'apple', 'cleans teeth', 'fruit/index.jpg'),
(2, 'Strawberry', 'Beatiful', 'fruit/aa.jpg'),
(3, 'berry', 'Blackish', 'fruit/aaa.jpg'),
(4, 'Bananas', 'Tasteful', 'fruit/bananas.jpg'),
(5, 'mango', 'So danger', 'fruit/used5.jpg'),
(6, 'avocado', 'fuckin\' amazing fruit ever tasted', 'fruit/avocadoes.jpg'),
(7, 'apricots', 'doesn\'t found in Rwanda', 'fruit/apricots.jpg'),
(8, 'Bananas', 'ohhhh shit', 'fruit/banana.jpg'),
(9, 'apple', 'ohhhhh what fuck!!!', 'fruit/used4.jpg'),
(10, 'Blueberry', 'This is so dangerous', 'fruit/5a50aa5690b01'),
(11, 'carrots', 'Ehhh walahi', 'fruit/5a50aa7818c7c'),
(12, 'Mango', 'So tastefull', 'fruit/5a50aaa291807'),
(13, 'Tamarind', 'Sorry!!', 'fruit/5a50aac45e262'),
(14, 'jackfruit', 'sorry sorry', 'fruit/5a50b1242688d'),
(15, 'banana', 'sorry', 'fruit/5a50c2f15a3b0');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `question`) VALUES
(1, 'Mucyo', 'What is the importance of avocadoes??\r\nPlease help me.'),
(2, 'Mfurayacu', 'Where can i find Appricots and what it helps our body??'),
(3, 'Allan', 'I like your fuckin\' website'),
(4, 'Esao', 'what is the importance of bananas');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `name`, `answer`) VALUES
(1, 'alain', 'Ehhh, Avocados Helps Brain work well'),
(2, 'Mucyo alain', 'ohhhhh shit, Apricots are not found in Rwanda and about importance, sorry i don\'t know'),
(3, 'Dr.Mucyo', 'Ohhhh motherfucker Thx!!'),
(4, 'Mucyo alain', 'i don\'t know');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`,`full_name`,`email`,`password`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`,`name`,`det`,`image`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`,`name`,`question`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`,`name`,`answer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

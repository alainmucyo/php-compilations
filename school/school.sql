-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 07:32 AM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'sebahana@gmail.com', 'sebu');

-- --------------------------------------------------------

--
-- Table structure for table `cap`
--

CREATE TABLE `cap` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cel`
--

CREATE TABLE `cel` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cel`
--

INSERT INTO `cel` (`id`, `name`, `sex`, `district`, `contact`, `fees`, `bdate`) VALUES
(2, 'Mfurayacu Mucyo Alain', 'boy', 'Rusizi', '+250788809391', 'paid', '12/10/2000');

-- --------------------------------------------------------

--
-- Table structure for table `com`
--

CREATE TABLE `com` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com`
--

INSERT INTO `com` (`id`, `name`, `sex`, `district`, `contact`, `fees`, `bdate`) VALUES
(1, 'jj', 'girl', 'burera', '+250', 'paid', '12/05/2017'),
(2, '', 'girl', '', '+250', 'paid', ''),
(3, 'nnn', 'girl', '', '+250', 'paid', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `name`, `sex`, `district`, `contact`, `fees`, `bdate`) VALUES
(1, 'alain', 'girl', 'rusizi', '+250', 'paid', '01/03/2018');

-- --------------------------------------------------------

--
-- Table structure for table `cons`
--

CREATE TABLE `cons` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dom`
--

CREATE TABLE `dom` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domestic`
--

CREATE TABLE `domestic` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domestic`
--

INSERT INTO `domestic` (`id`, `name`, `sex`, `district`, `contact`, `fees`, `bdate`) VALUES
(2, '', 'girl', '', '+250', 'paid', '');

-- --------------------------------------------------------

--
-- Table structure for table `elec`
--

CREATE TABLE `elec` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maso`
--

CREATE TABLE `maso` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masonary`
--

CREATE TABLE `masonary` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masonary`
--

INSERT INTO `masonary` (`id`, `name`, `sex`, `district`, `contact`, `fees`, `bdate`) VALUES
(3, 'blaise', 'boy', 'nyarugenge', '+25044444', 'Will Pay', '01/15/2005');

-- --------------------------------------------------------

--
-- Table structure for table `mge`
--

CREATE TABLE `mge` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `name`, `sex`, `district`, `contact`, `fees`, `bdate`) VALUES
(2, '', 'girl', '', '+250', 'paid', '');

-- --------------------------------------------------------

--
-- Table structure for table `sol`
--

CREATE TABLE `sol` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solar`
--

CREATE TABLE `solar` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solar`
--

INSERT INTO `solar` (`id`, `name`, `sex`, `district`, `contact`, `fees`, `bdate`) VALUES
(2, 'fuck', 'girl', 'jj', '+250', 'not paid', '12/07/2017');

-- --------------------------------------------------------

--
-- Table structure for table `surv`
--

CREATE TABLE `surv` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surveying`
--

CREATE TABLE `surveying` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveying`
--

INSERT INTO `surveying` (`id`, `name`, `sex`, `district`, `contact`, `fees`, `bdate`) VALUES
(3, 'Esao', 'girl', 'rusizi', '+25079999999', 'paid', '01/01/1940');

-- --------------------------------------------------------

--
-- Table structure for table `tal`
--

CREATE TABLE `tal` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `level` varchar(255) NOT NULL,
  `lesson` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `sex` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `contact`, `level`, `lesson`, `hours`, `sex`) VALUES
(1, 'Matanya David', '+25077777', 'A level', 'Mathematics', '24', 'Female'),
(3, 'Mugangu Aye', '+250000000', 'A level', 'Francais', '10', 'Male'),
(4, 'Shema cedric', '+2500000077', 'A level', 'informatics', '20', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`email`,`password`);

--
-- Indexes for table `cap`
--
ALTER TABLE `cap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cel`
--
ALTER TABLE `cel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons`
--
ALTER TABLE `cons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dom`
--
ALTER TABLE `dom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domestic`
--
ALTER TABLE `domestic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elec`
--
ALTER TABLE `elec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maso`
--
ALTER TABLE `maso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masonary`
--
ALTER TABLE `masonary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mge`
--
ALTER TABLE `mge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sol`
--
ALTER TABLE `sol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solar`
--
ALTER TABLE `solar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surv`
--
ALTER TABLE `surv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveying`
--
ALTER TABLE `surveying`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tal`
--
ALTER TABLE `tal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cap`
--
ALTER TABLE `cap`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cel`
--
ALTER TABLE `cel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `com`
--
ALTER TABLE `com`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cons`
--
ALTER TABLE `cons`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dom`
--
ALTER TABLE `dom`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domestic`
--
ALTER TABLE `domestic`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `elec`
--
ALTER TABLE `elec`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maso`
--
ALTER TABLE `maso`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masonary`
--
ALTER TABLE `masonary`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mge`
--
ALTER TABLE `mge`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sol`
--
ALTER TABLE `sol`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solar`
--
ALTER TABLE `solar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surv`
--
ALTER TABLE `surv`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveying`
--
ALTER TABLE `surveying`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tal`
--
ALTER TABLE `tal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

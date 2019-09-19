-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 06:06 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rainbow`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `Description`) VALUES
(1, 'This is the official page of rainbow airlines which was established in 2007 and have been in service by satisfying all customers with our hospitality '),
(2, 'Have features like\r\ngood food\r\ncomfortable seats\r\nwell thought tickets'),
(3, 'please for awesome plain experience remember us');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `departfrom` varchar(255) NOT NULL,
  `arriveat` varchar(255) NOT NULL,
  `departdate` date NOT NULL,
  `passengerno` int(10) NOT NULL,
  `acceptance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `departfrom`, `arriveat`, `departdate`, `passengerno`, `acceptance`) VALUES
(1, 'kathmandu', 'pokhara', '2019-09-04', 1, 1),
(2, 'kathmandu', 'pokhara', '2019-09-04', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(10) NOT NULL,
  `flightno` int(10) NOT NULL,
  `departfrom` varchar(255) NOT NULL,
  `arriveat` varchar(255) NOT NULL,
  `departuredate` date NOT NULL,
  `arrivaldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `flightno`, `departfrom`, `arriveat`, `departuredate`, `arrivaldate`) VALUES
(1, 34, 'kathmandu', 'mustang', '2019-09-20', '2019-09-21'),
(2, 35, 'kathmandu', 'lumbini', '2019-09-21', '2019-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`) VALUES
(1, 'nia19991@gmail.com', '111'),
(3, 'nis19991@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

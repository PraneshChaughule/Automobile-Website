-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 12:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `username` varchar(256) CHARACTER SET utf8 NOT NULL,
  `email_id` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `contact` int(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `bus_id`, `username`, `email_id`, `contact`, `password`) VALUES
(1, 1, 'Nitesh Chaughule', 'nitesh@xebra.in', 865246559, 'ccascsacascasc'),
(2, 2, 'Nitesh', 'nitesh@socialplay.co.in', 2147483647, 'Nitesh@123'),
(5, 5, 'Nitesh', 'nitesh@socialplay.co.in', 2147483647, 'Nitesh@123'),
(7, 7, 'Pranesh', 'p@gmail.com', 2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

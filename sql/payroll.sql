-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2016 at 03:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `image` tinyblob,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `tin` int(11) DEFAULT NULL,
  `sss` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `paygrade` int(11) DEFAULT NULL,
  `position` varchar(25) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `access` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstname`, `middlename`, `lastname`, `address`, `birthday`, `email`, `contact`, `image`, `username`, `password`, `tin`, `sss`, `status`, `paygrade`, `position`, `department`, `access`) VALUES
(2016000006, 'Ian', 'Evangelista', 'Cruz', 'Manila', '1997-11-11', 'iecruz@gmail.com', 2147483647, NULL, 'iecruz', '4444', 1234, 1234, 0, 1500000, 'CEO', 'EXECUTIVE', 'user'),
(2016000012, 'Amiel', 'Romero', 'Diaz', '132', '0001-01-01', '132@1', 13, 0x696d6167652f416d69656c20526f6d65726f204469617a2e6a7067, 'ardiaz', '123', 321, 321, 1, 32, '321', '321', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2016000013;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

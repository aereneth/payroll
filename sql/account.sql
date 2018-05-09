-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 04:41 AM
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

/*CREATE TABLE `account` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstname`, `middlename`, `lastname`, `address`, `birthday`, `email`, `contact`, `image`, `username`, `password`, `tin`, `sss`, `status`, `paygrade`, `position`, `department`, `access`) VALUES
(2016000015, 'Jerome', 'Samonteza', 'Manawis', 'Manila', '1997-11-13', 'jmanawis@gmail.com', 54321, 0x696d6167652f6a736d616e617769732e6a7067, 'jsmanawis', 'jmars', 5, 5, 1, 500000, 'CFO', 'EXEC', 'user'),
(2016000016, 'Michael', 'Dy', 'Bautista', 'Betty Go-Belmonte', '1997-09-20', 'mdbautista@gmail.com', 54321, 0x696d6167652f6d6462617574697374612e6a7067, 'mdbautista', 'porn', 6, 6, 1, 3000000, 'PRES', 'EXEC', 'admin'),
(2016000017, 'Marlon', 'Gel', 'Demafeliz', 'Villamor Airbase', '1996-01-14', 'mlp4ever@gmail.com', 69696969, 0x696d6167652f6d6764656d6166656c697a2e6a7067, 'mgdemafeliz', 'mlp', 7, 7, 1, 700000, 'VICE PRESIDENT', 'EXEC', 'user'),
(2016000018, 'Joseph', 'Ejercito', 'Estrada', 'Quezon City', '2016-11-16', 'jestrada@gmail.com', 2147483647, 0x696d6167652f6a65657374726164612e6a7067, 'jeestrada', 'holo', 123, 456, 1, 12000, 'Employee', 'ER', 'user'),
(2016000019, 'Katrina', 'Perla', 'Halili', 'Eastwood Codominum', '2016-11-17', 'carelesswhisper@yahoo.com', 2147483647, 0x696d6167652f6b7068616c696c692e6a7067, 'kphalili', 'holo', 123456, 987789, 1, 25000, 'Secretary', 'HR', 'user'),
(2016000020, 'Hayden', 'Xiao', 'Kho', 'Westwood Condominum', '2016-11-19', 'whispercareless@yahoo.com', 2147483647, 0x696d6167652f68786b686f2e706e67, 'hxkho', 'holo', 999, 444, 1, 20000, 'Janitor', 'Staff', 'user'),
(2016000021, 'Vic', 'Sy', 'Sotto', 'Gilmore Subd.', '2016-11-27', 'eb@hellokity.com', 2147483647, NULL, 'vssotto', 'holo', 65456, 73246, 1, 40000, 'Call Center Agent', 'Call Center', 'user'),
(2016000022, 'Joey', 'Vincent', 'De Leon', 'Greenwoods C5 Extension', '2016-11-27', 'eb1@yahoo.com', 2147483647, 0x696d6167652f6a766465206c656f6e2e6a7067, 'jvde leon', 'holo', 897, 678, 1, 30000, 'Floor Manager', 'Production', 'user'),
(2016000023, 'Pedro', 'Malakas', 'Penduko', 'Nawawalang Syudad', '2016-11-24', 'pedro@gmail.com', 2147483647, 0x696d6167652f706d70656e64756b6f2e6a7067, 'pmpenduko', 'holo', 4837, 85743, 1, 23000, 'Mailman', 'Messaging', 'user'),
(2016000024, 'Nardong', 'Brown', 'Putik', 'Mud Town', '2016-11-21', 'nardo@gmail.com', 2147483647, 0x696d6167652f6e62707574696b2e6a7067, 'nbputik', 'holo', 2652, 2648, 1, 60000, 'Bouncer', 'Club', 'user'),
(2016000025, 'Maria', 'Chu', 'Osaka', 'Japantown Binondo', '2016-11-25', 'maria@gmail.com', 2147483647, 0x696d6167652f6d636f73616b612e6a7067, 'mcosaka', 'holo', 13268, 79846, 1, 80000, 'Entertainer', 'Entertainment', 'user'),
(2016000026, 'Rody', 'Roa', 'Duterte', 'Davao City', '2016-10-13', 'rody@gmail.com', 2147483647, 0x696d6167652f7272647574657274652e6a7067, 'rrduterte', 'holo', 7845, 165, 1, 1000000, 'El Presidente', 'Executive', 'user'),
(2016000027, 'Alejandro', 'Geronimo', 'Abadilla', 'Pureza Condominum', '2016-11-26', 'abadills@gmail.com', 2147483647, 0x696d6167652f616761626164696c6c612e6a7067, 'agabadilla', 'holo', 5652, 4568, 1, 40000, 'Poem Writer', 'Poetry', 'user'),
(2016000028, 'Ji', 'Sun', 'Hyo', 'Wantam City', '2016-11-08', 'wanta@yahoo.co', 2147483647, 0x696d6167652f6a7368796f2e6a7067, 'jshyo', 'holo', 13265, 78945, 1, 150000, 'Singer', 'Music', 'user'),
(2016000029, 'Sae', 'Ni', 'Juk', 'Khu Lha City', '2016-06-02', 'saejuk@yahoo.com', 2147483647, 0x696d6167652f736e6a756b2e6a7067, 'snjuk', 'holo', 777, 888, 1, 56000, 'Comedian', 'Entertainment', 'user'),
(2016000030, 'Ardeen', 'Margaux', 'Capuli', 'Anonas Capuli Townhouse', '2017-02-02', 'caps@yahoo.co', 2147483647, 0x696d6167652f616d636170756c692e6a7067, 'amcapuli', 'holo', 1562, 8465, 1, 32500, 'Sou Chef', 'Food', 'user'),
(2016000031, 'Seum', 'Ha', 'Dwa', 'Nangki City', '2016-06-02', 'seum@gmail.com', 2147483647, 0x696d6167652f73686477612e6a7067, 'shdwa', 'holo', 88956, 55236, 1, 41200, 'Comedian', 'Entertainment', 'user'),
(2016000032, 'Park', 'Bo', 'Young', 'Shihau City', '2016-11-22', 'park@yahoo.com', 2147483647, 0x696d6167652f7062796f756e672e6a7067, 'pbyoung', 'holo', 555, 666, 1, 33200, 'Internal Manager', 'Management', 'user'),
(2016000033, 'Kukuri', 'Ka', 'Pu', 'Hula City', '2017-02-03', 'kukur@gmail.com', 2147483647, 0x696d6167652f6b6b70752e6a7067, 'kkpu', 'holo', 6635, 25632, 1, 80000, 'External Manager', 'Management', 'user'),
(2016000034, 'Sponge', 'Bob', 'Squarepants', 'Under The Sea Townhomes', '2016-05-18', 'sponge@gmail.com', 2147483647, 0x696d6167652f736273717561726570616e74732e6a7067, 'sbsquarepants', 'holo', 7894, 7895, 1, 15000, 'Clerk', 'HR', 'user'),
(2016000035, 'Dormamo', 'Black', 'Hole', 'New York', '2016-03-01', 'dormamiii@yahoo.cmo', 2147483647, 0x696d6167652f6462686f6c652e6a7067, 'dbhole', 'holo', 6523, 5623, 1, 25000, 'Assistant Clerk', 'HR', 'user'),
(2016000036, 'Jack', 'So', 'Daniels', 'San Miguel City', '2016-07-06', 'jacky@gmail.com', 2147483647, 0x696d6167652f6a7364616e69656c732e6a7067, 'jsdaniels', 'holo', 794652, 45125, 1, 17000, 'Barista', 'Food', 'user'),
(2016000037, 'Su', 'Li', 'Han', 'kan city', '2016-11-15', 'kan@gmail.com', 2147483647, 0x696d6167652f736c68616e2e6a7067, 'slhan', 'holo', 7894, 4568, 1, 72000, 'External Manager', 'Management', 'user');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2016000038;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

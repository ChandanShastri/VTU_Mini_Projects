-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2018 at 08:30 PM
-- Server version: 5.7.24-0ubuntu0.18.10.1
-- PHP Version: 7.2.10-0ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Chandan_Shastri_Gen2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `Event_Name` varchar(40) NOT NULL,
  `Event_Date` date NOT NULL,
  `Event_Time` time NOT NULL,
  `Event_Detail` varchar(600) NOT NULL,
  `Branch` varchar(3) NOT NULL,
  `Event_Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`Event_Name`, `Event_Date`, `Event_Time`, `Event_Detail`, `Branch`, `Event_Type`) VALUES
('AWESOME', '6666-05-05', '02:57:00', 'MSMQWMSQ', 'ISE', 'Entertainment'),
('Blood Donation', '2018-11-15', '10:20:22', 'HEHEHE', 'ISE', 'Social'),
('Chandan', '2018-11-01', '01:01:00', 'MSMQWMSQ', 'CSE', 'Technical'),
('ChandanSSSS', '2018-11-08', '23:59:00', 'MSMQWMSQ', 'MEC', 'Deaprtmental'),
('ChandanSSSS12', '2018-11-09', '05:05:00', 'edswqedwqe', 'ISE', 'Social'),
('Eventttt', '2018-11-15', '14:24:19', 'EDWEWEWE', 'ISE', 'Social');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`Event_Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

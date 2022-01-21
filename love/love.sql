-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 08:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `love`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(500) NOT NULL,
  `admin_password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_id` int(11) NOT NULL,
  `app_status` int(10) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_address` varchar(5000) NOT NULL,
  `applicant_number` varchar(50) NOT NULL,
  `applicant_nationality` varchar(50) NOT NULL,
  `applicant_sex` varchar(10) NOT NULL,
  `applicant_status` varchar(20) NOT NULL,
  `applicant_birthplace` varchar(500) NOT NULL,
  `applicant_fathername` varchar(500) NOT NULL,
  `applicant_mothername` varchar(500) NOT NULL,
  `applicant_spousename` varchar(500) NOT NULL,
  `applicant_lca` varchar(500) NOT NULL,
  `applicant_ea` varchar(50) NOT NULL,
  `applicant_bloodtype` varchar(500) NOT NULL,
  `applicant_eyecolor` varchar(50) NOT NULL,
  `applicant_emergency_contact` varchar(500) NOT NULL,
  `applicant_emergency_contact_no` varchar(500) NOT NULL,
  `applicant_toa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `app_status`, `applicant_name`, `applicant_address`, `applicant_number`, `applicant_nationality`, `applicant_sex`, `applicant_status`, `applicant_birthplace`, `applicant_fathername`, `applicant_mothername`, `applicant_spousename`, `applicant_lca`, `applicant_ea`, `applicant_bloodtype`, `applicant_eyecolor`, `applicant_emergency_contact`, `applicant_emergency_contact_no`, `applicant_toa`) VALUES
(1, 0, 'Bandong, Kent Romans', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Change Name'),
(2, 2, 'Arnold Turado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Others'),
(3, 2, 'Kent Romans Bandong', 'test', '1', 'test', 'Male', 'Single', 'test', 'test', '', '', '', '', '', '', '', '', 'New'),
(4, 1, 'Test', 'Test', '3', 'Test', 'Male', 'Single', 'Test', 'Test', 'Test', 'Test', 'Student-Drivers Permit', 'PostGraduate', 'A', 'Test', 'Test', 'Test', 'Enhancement of DL'),
(5, 0, 'John Doe', 'Davao', '2', 'Filipino', 'Male', 'Single', 'Davao', 'John', 'Almera', 'N/A', 'Student-Drivers Permit', 'PostGraduate', 'A', 'Black', 'Almera', '09176276009', 'New'),
(6, 1, 'John Alex', 'Davao', '09772700710', 'Filipino', 'Male', 'Single', 'Davao', 'John Doe Sr.', 'Almera Doe', 'N/A', 'Student-Drivers Permit', 'PostGraduate', 'A', 'Black', 'Almera Doe', '09176276009', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `contactnumber` varchar(12) NOT NULL,
  `email` varchar(500) NOT NULL,
  `user_type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_password`, `firstname`, `lastname`, `contactnumber`, `email`, `user_type`) VALUES
(2, 'kentromansb', 'w33HA!!!', 'Kent ', 'Bandong', '2147483647', 'bandong.fade@gmail.com', 1),
(4, 'chiki', '123456', 'Arnold', 'Turado', '2147483647', 'chiki@gmail.com', 0),
(5, 'kbii', '123456', 'Kent', 'Bandong', '09772700710', 'bandong@gmail.com', 0),
(6, 'jbravo1111', '123456', 'test', 'test', '2', 'test12@gmail.com', 0),
(7, 'johndoe', '123456', 'John Alex', 'Doe', '09176276009', 'johndoe@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

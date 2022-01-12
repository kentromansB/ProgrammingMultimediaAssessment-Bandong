-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 09:11 AM
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
  `applicant_LCA` varchar(500) NOT NULL,
  `applicant_EA` varchar(50) NOT NULL,
  `applicant_employer_business_name` varchar(500) NOT NULL,
  `applicant_tin` varchar(500) NOT NULL,
  `applicant_employer_tel_no` varchar(50) NOT NULL,
  `applicant_employer_address` varchar(500) NOT NULL,
  `applicant_emergency_contact` varchar(500) NOT NULL,
  `applicant_emergency_contact_no` varchar(500) NOT NULL,
  `applicant_agency_code` varchar(500) NOT NULL,
  `applicant_issue_date` varchar(500) NOT NULL,
  `applicant_toa` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `applicant_name`, `applicant_address`, `applicant_number`, `applicant_nationality`, `applicant_sex`, `applicant_status`, `applicant_birthplace`, `applicant_fathername`, `applicant_mothername`, `applicant_spousename`, `applicant_LCA`, `applicant_EA`, `applicant_employer_business_name`, `applicant_tin`, `applicant_employer_tel_no`, `applicant_employer_address`, `applicant_emergency_contact`, `applicant_emergency_contact_no`, `applicant_agency_code`, `applicant_issue_date`, `applicant_toa`) VALUES
(1, 'Bandong, Kent Romans', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Arnold Turado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(2, 'kentromansb', '123456', 'Kent', 'Bandong', '2147483647', 'bandong.fade@gmail.com', 1),
(4, 'chiki', '123456', 'Arnold', 'Turado', '2147483647', 'chiki@gmail.com', 0);

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
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

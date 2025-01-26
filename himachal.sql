-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 07:52 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himachal`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` int(100) DEFAULT NULL,
  `password` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `name` varchar(30) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `msg_box` varchar(500) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`name`, `phone_no`, `e_mail`, `msg_box`, `contact_id`, `username`) VALUES
('akhil', '8628051966', 'akhiimodgill54@gmail.com', 'wertyuiosdfghjklxcvbnm,', 1, 'akhilmodgill12');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `new_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`first_name`, `last_name`, `gender`, `dob`, `phone_no`, `e_mail`, `address`, `new_password`) VALUES
('akhil', 'modgill', 'Male', '', '8628051966', '11112222', 'abcd abcd', '123456789'),
('sharma', '2261', '', '', '8350986260', '8350986260', 'bilaspur', '8350986260'),
('akhil', 'modgill', '', '', '8628051966', '8628051966', 'vpo chamba hp ', '8628051966'),
('akhil', 'modgill', 'on', '0', '2147483647', 'akhilmodgill12', 'vpo chamba hp ', '0'),
('akhil', 'modgill', 'Male', '', '7018793714', 'akhilmodgill@', 'qqdff', 'aaaaaaaa'),
('shubham', 'choudhary', 'Male', '', '2103834', 'sjasjasa', 'asjASJQS', '123123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`e_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `query`
--
ALTER TABLE `query`
  ADD CONSTRAINT `query_ibfk_1` FOREIGN KEY (`username`) REFERENCES `sign_up` (`e_mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 09:46 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `cust_name` text NOT NULL,
  `cust_dob` date NOT NULL,
  `mob_no` int(10) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `cust_address` text NOT NULL,
  `land_taken` float NOT NULL,
  `plot_no` varchar(11) DEFAULT NULL,
  `plot_price` bigint(11) DEFAULT NULL,
  `amt_paid` int(11) NOT NULL,
  `mod_of_payment` enum('cash','cheque') NOT NULL,
  `cheque_no` varchar(20) DEFAULT NULL,
  `receipt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_dob`, `mob_no`, `Gender`, `cust_address`, `land_taken`, `plot_no`, `plot_price`, `amt_paid`, `mod_of_payment`, `cheque_no`, `receipt_date`) VALUES
(3, 'Umesh Janaradhan Mundhe', '2005-02-16', 2147483647, 'male', 'Hanumanwadi', 1.5, '1', NULL, 120000, 'cash', '-', '2019-09-19'),
(4, 'Vishal vijayraghvan', '2019-09-05', 2147483647, 'male', 'Dighi', 1.75, '12a', NULL, 111111, 'cheque', 'ABCD1234', '2019-09-19'),
(12, 'Atharva munde', '2019-01-01', 1234564545, 'male', 'hdjkshdjkshdjk', 0.5, '12A', 12, 140000, 'cash', 'Bhhjkhjh', '2014-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `plot`
--

CREATE TABLE `plot` (
  `plot_id` int(11) NOT NULL,
  `plot_name` varchar(20) DEFAULT NULL,
  `plot_address` varchar(50) DEFAULT NULL,
  `plot_size` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plot`
--

INSERT INTO `plot` (`plot_id`, `plot_name`, `plot_address`, `plot_size`) VALUES
(1, 'Phase I', 'Wadgaon road', 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `userpassword` varchar(50) DEFAULT NULL,
  `usertype` enum('admin','other') NOT NULL DEFAULT 'other',
  `usertoken` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `userpassword`, `usertype`, `usertoken`, `created_at`) VALUES
(100, 'admin', 'admin', 'admin', NULL, '2019-09-03 13:34:40'),
(101, 'umesh', 'umesh', 'other', NULL, '2019-09-03 13:35:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `plot`
--
ALTER TABLE `plot`
  ADD PRIMARY KEY (`plot_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

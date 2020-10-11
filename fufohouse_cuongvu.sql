-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 07:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fufohouse_cuongvu`
--

-- --------------------------------------------------------

--
-- Table structure for table `carers`
--

CREATE TABLE `carers` (
  `customer_id` varchar(10) NOT NULL,
  `pin` int(4) NOT NULL,
  `given_name` varchar(20) NOT NULL,
  `family_name` varchar(20) NOT NULL,
  `columns` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carers`
--

INSERT INTO `carers` (`customer_id`, `pin`, `given_name`, `family_name`, `columns`) VALUES
('1123456789', 1123, 'tommy', 'smith', 1),
('2123456789', 2123, 'teddy', 'bear', 2),
('3123456789', 3123, 'antony', 'star', 3),
('4123456789', 4123, 'marie', 'curie', 4),
('5123456789', 5123, 'kumar', 'sanu', 5);

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `given_name` varchar(20) NOT NULL,
  `family_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) NOT NULL,
  `daily_message` varchar(200) NOT NULL,
  `customer_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`given_name`, `family_name`, `dob`, `gender`, `daily_message`, `customer_id`) VALUES
('van', 'anh', '2011-01-01', 'F', '“ The purpose of our lives is to be happy.” — Dalai Lama.', '1123456789'),
('tam', 'nguyen', '2012-02-02', 'M', '“Life is what happens when you’re busy making other plans.” — John Lennon', '2123456789'),
('thanh', 'ho', '2013-03-03', 'F', '“Get busy living or get busy dying.” — Stephen King', '3123456789'),
('anh', 'vu', '2014-04-04', 'M', '“You only live once, but if you do it right, once is enough.” — Mae West', '4123456789'),
('nhung', 'pham', '2015-05-05', 'F', '“Life is a series of baby steps.”– Hoda Kotb', '5123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carers`
--
ALTER TABLE `carers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD KEY `customer_id` (`customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `child_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `carers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

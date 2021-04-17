-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 06:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `result_id` int(11) NOT NULL,
  `polling_unit_unique_id` int(11) NOT NULL,
  `PDP` char(4) NOT NULL,
  `DPP` char(4) NOT NULL,
  `ACN` char(4) NOT NULL,
  `PPA` char(4) NOT NULL,
  `CDC` char(4) NOT NULL,
  `JP` char(4) NOT NULL,
  `ANPP` char(4) NOT NULL,
  `LABO` char(4) NOT NULL,
  `CPP` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`result_id`, `polling_unit_unique_id`, `PDP`, `DPP`, `ACN`, `PPA`, `CDC`, `JP`, `ANPP`, `LABO`, `CPP`) VALUES
(261, 27, '300', '450', '200', '1000', '800', '119', '360', '150', '400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

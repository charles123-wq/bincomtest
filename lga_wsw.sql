-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 06:01 PM
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
-- Table structure for table `lga_wsw`
--

CREATE TABLE `lga_wsw` (
  `id` int(11) NOT NULL,
  `PDP` char(4) NOT NULL,
  `DPP` char(4) NOT NULL,
  `ACN` char(4) NOT NULL,
  `PPA` char(4) NOT NULL,
  `CDC` char(4) NOT NULL,
  `JP` char(4) NOT NULL,
  `ANPP` char(4) NOT NULL,
  `LABO` char(4) NOT NULL,
  `summed_total_polling_unit_results` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lga_wsw`
--

INSERT INTO `lga_wsw` (`id`, `PDP`, `DPP`, `ACN`, `PPA`, `CDC`, `JP`, `ANPP`, `LABO`, `summed_total_polling_unit_results`) VALUES
(1, '287', '426', '113', '960', '409', '117', '349', '139', 2800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lga_wsw`
--
ALTER TABLE `lga_wsw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lga_wsw`
--
ALTER TABLE `lga_wsw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

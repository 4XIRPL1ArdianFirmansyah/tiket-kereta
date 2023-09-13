-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 10:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `username`, `password`, `lv`) VALUES
(1, 'admin', '12345', 'admin'),
(2, 'user', '12345', 'user'),
(5, 'fren', '987', 'user'),
(6, 'ardian', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `awal` enum('blitar','malang','surabaya') NOT NULL,
  `akhir` enum('blitar','malang','surabaya') NOT NULL,
  `pemesanan` varchar(100) NOT NULL,
  `sampai` varchar(100) NOT NULL,
  `kereta` enum('eksekutif','bisnis','ekonomi') NOT NULL,
  `kode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `awal`, `akhir`, `pemesanan`, `sampai`, `kereta`, `kode`) VALUES
(1, '', '', 'Malang', '', '', ''),
(2, 'malang', 'surabaya', '2023-09-13', '', '', ''),
(3, 'malang', 'surabaya', '2023-09-13', '', '', ''),
(4, 'malang', 'surabaya', '2023-09-13', '', '', ''),
(5, 'blitar', 'surabaya', '2023-09-13', '', 'eksekutif', ''),
(6, 'blitar', 'blitar', '2023-09-13', '', 'eksekutif', ''),
(7, 'malang', 'surabaya', '2023-09-14', '', 'eksekutif', ''),
(8, 'malang', 'surabaya', '2023-09-19', '', 'eksekutif', ''),
(9, 'malang', 'surabaya', '2023-09-13', '', 'eksekutif', ''),
(10, 'blitar', 'blitar', '2023-09-13', '', 'eksekutif', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

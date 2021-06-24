-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 08:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung_08`
--

-- --------------------------------------------------------

--
-- Table structure for table `warung_08`
--

CREATE TABLE `warung_08` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nama` varchar(288) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warung_08`
--

INSERT INTO `warung_08` (`id`, `type`, `nama`, `harga`, `gambar`) VALUES
(2, 'Makanan', 'Mie Ayam', '7000', '603d16ec9e3f7.jpg'),
(3, 'Makanan', 'Bakso', '10000', '603d17024c8a9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warung_08`
--
ALTER TABLE `warung_08`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warung_08`
--
ALTER TABLE `warung_08`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

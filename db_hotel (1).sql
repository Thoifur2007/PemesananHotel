-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 09:22 AM
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
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `usernamee` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `usernamee`, `pass`) VALUES
(1, 'thoifur', 'admin', '123'),
(4, 'salman', 'kece', 'badai');

-- --------------------------------------------------------

--
-- Table structure for table `kamarhotel`
--

CREATE TABLE `kamarhotel` (
  `id_kamar` int(10) NOT NULL,
  `jeniskamar` varchar(20) NOT NULL,
  `hargakamar` int(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamarhotel`
--

INSERT INTO `kamarhotel` (`id_kamar`, `jeniskamar`, `hargakamar`, `keterangan`) VALUES
(1, 'Standar', 1000000, 'memiliki fasilitas, seperti tempat tidur, AC, TV,perlengkapan mandi, dan air minum. ukuran kasur yang disediakan oleh Standar Room model single bed, queensize'),
(2, 'Superior', 1500000, 'memiliki fasilitas, seperti tempat tidur, AC, TV, perlengkapan mandi, dan air minum. ukuran kasur yang disediakan oleh Stuperior Room model single bed, queen size, dapat breakfest bed, '),
(3, 'Deluxe', 1800000, 'memiliki fasilitas, seperti tempat tidur, AC, TV, perlengkapan mandi, dan air minum. ukuran kasur yang disediakan oleh Deluxe Room model single bed, queen size, dapat breakfest bed, dan vip member');

-- --------------------------------------------------------

--
-- Table structure for table `penyewakamar`
--

CREATE TABLE `penyewakamar` (
  `id_sewa` int(11) NOT NULL,
  `id_kamar` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `identitas` varchar(50) NOT NULL,
  `hp` int(50) NOT NULL,
  `cekin` date NOT NULL,
  `cekout` date NOT NULL,
  `jumlahkamar` int(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyewakamar`
--

INSERT INTO `penyewakamar` (`id_sewa`, `id_kamar`, `nama`, `identitas`, `hp`, `cekin`, `cekout`, `jumlahkamar`, `total`) VALUES
(10, 2, 'pita', '12345', 987654321, '2024-06-01', '2024-06-03', 1, '3000000'),
(12, 3, 'thoifur', '12345', 87123424, '2024-06-01', '2024-06-06', 1, '9000000'),
(17, 1, 'abc', '123', 345, '2024-06-03', '2024-06-04', 3, '3000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kamarhotel`
--
ALTER TABLE `kamarhotel`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `penyewakamar`
--
ALTER TABLE `penyewakamar`
  ADD PRIMARY KEY (`id_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kamarhotel`
--
ALTER TABLE `kamarhotel`
  MODIFY `id_kamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penyewakamar`
--
ALTER TABLE `penyewakamar`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

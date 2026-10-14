-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2025 at 05:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layanan_industri_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_ikm` varchar(255) NOT NULL,
  `ikm_type_other` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `keperluan` text NOT NULL,
  `purpose_other` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `nama`, `jabatan`, `foto`) VALUES
(1, 'NURUS DANTI', 'Pemilik', 'logo.png'),
(3, 'JULIAH', 'staf', 'Wanita Karir Kartun Yang Digambar Tangan, Wanita, Gadis, Gadis Kartun PNG dan Vektor dengan Background Transparan untuk Unduh Gratis.jpg'),
(4, 'aliando', 'staf', 'Wanita Karir Kartun Yang Digambar Tangan, Wanita, Gadis, Gadis Kartun PNG dan Vektor dengan Background Transparan untuk Unduh Gratis.jpg'),
(5, 'rara', 'staf', 'Wanita Karir Kartun Yang Digambar Tangan, Wanita, Gadis, Gadis Kartun PNG dan Vektor dengan Background Transparan untuk Unduh Gratis.jpg'),
(7, 'raidah safa', 'staf', 'Wanita Karir Kartun Yang Digambar Tangan, Wanita, Gadis, Gadis Kartun PNG dan Vektor dengan Background Transparan untuk Unduh Gratis.jpg'),
(8, 'RETNO ', 'staf', 'logo.png'),
(9, 'nayla', 'staf', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$FnBIGHSlkeC0i1iQAcHxGeckUWbgQlZoJYvNps3G2Z1e0kDK7DENe'),
(2, 'andin', '$2y$10$Cei0chzfT6OVPBLQu9gLiO3Pc1WnN9vov3ymQ8SSzU2iLsWMptjN.'),
(3, 'danti', '$2y$10$a4ZfPu1y2DS54CYPHfJXhe79gtfKfaqTi3CHZBVip8mhgNR1/W.SK'),
(4, 'arum', '$2y$10$NtW10Kth8TYDCtzIuSBN8OHVWKG8GxM4CRJUWYPiGRTRFLTIR5Rzy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

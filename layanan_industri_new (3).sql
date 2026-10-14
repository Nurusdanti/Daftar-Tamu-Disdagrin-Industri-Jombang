-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2025 at 11:29 AM
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
  `tahun_id` int DEFAULT NULL,
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

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `tahun_id`, `email`, `tanggal`, `nama`, `phone`, `alamat`, `jenis_ikm`, `ikm_type_other`, `keperluan`, `purpose_other`, `file_path`, `created_at`) VALUES
(22, NULL, 'hdfslsdfhhiod@jhghjj', '2025-07-17', 'budi', '09877', 'jombang', 'Industri Rumah Tangga', NULL, 'NIB', NULL, NULL, '2025-07-17 08:42:43'),
(23, NULL, 'aliando@gmail.com', '2025-07-17', 'budi', '09877', 'jombang', 'Industri Rumah Tangga', NULL, 'Layanan Konsultasi Bisnis', NULL, 'uploads/1752768050_Premium Vector _ A cartoon of a girl with a book….jpeg', '2025-07-17 16:00:50'),
(24, NULL, 'admin123@gmail.com', '2025-07-19', 'nur azizah', '09876543211', 'dsn pojok klitih, rt 001/rw 002, desa plandaan kecamatan plandaan kabupaten jombang', 'Usaha Kuliner', NULL, 'NIB', NULL, NULL, '2025-07-17 16:01:34'),
(25, NULL, 'juliah123@gmail.com', '2026-01-14', 'Juliah', '08765123456', 'dsn pojok klitih, rt 001/rw 002, desa plandaan kecamatan plandaan kabupaten jombang', 'Industri Serat Alami', NULL, 'NIB', NULL, 'uploads/1752768239_Premium Vector _ A cartoon of a girl with a book….jpeg', '2025-07-17 16:03:59'),
(26, NULL, 'ANDIN@GMAIL.COM', '2025-08-07', 'ANDIN', '0987654123', 'ploso', 'Industri Rumah Tangga', NULL, 'NIB', NULL, NULL, '2025-07-17 16:24:10'),
(27, NULL, 'ANDIN@GMAIL.COM', '2025-08-07', 'ANDIN', '0987654123', 'ploso', 'Kerajinan Tanah Liat', NULL, 'NIB', NULL, 'uploads/1752806967_pvmbg-ga-krb-raster-SMR.jpg', '2025-07-18 02:49:27'),
(28, NULL, 'aliando@gmail.com', '2025-07-18', 'aliando syarif', '081233567889', 'Mojoagung', 'Kerajinan Tanah Liat', NULL, 'layanan advokasi dan Pendampingan', NULL, 'uploads/1752807288_Premium Vector _ A cartoon of a girl with a book….jpeg', '2025-07-18 02:54:48'),
(29, NULL, 'dantia@gmail.com', '2025-07-18', 'NURUS DANTI', '0987654123', 'dsn pojok klitih, rt 001/rw 002, desa plandaan kecamatan plandaan kabupaten jombang', 'Kerajinan Konveksi', NULL, '-', 'khafardsaersaysa', 'uploads/1752807482_pvmbg-ga-krb-raster-SMR.jpg', '2025-07-18 02:58:02'),
(30, NULL, 'juliah123@gmail.com', '2025-07-18', 'Juliah', '08765123456', 'dsn pojok klitih, rt 001/rw 002, desa plandaan kecamatan plandaan kabupaten jombang', 'Kerajinan Tanah Liat', NULL, '-', 'erkjghkurhgiu5tgu', 'uploads/1752807691_ca69a679-dd15-4948-b508-bf4d9051a307.jpg', '2025-07-18 03:01:31'),
(31, NULL, 'rachmaandin29@gmail.com', '2025-07-18', 'ANDIN RACHMA NADILA', '0987654321', 'PLOSO', 'Kerajinan Tanah Liat', NULL, '-', 'HJYFRDTE', 'uploads/1752808068_1752768050_Premium Vector _ A cartoon of a girl with a book….jpeg', '2025-07-18 03:07:48'),
(32, NULL, 'rachmaandin29@gmail.com', '2025-07-18', 'ANDIN RACHMA NADILA', '087654367899', 'Plandaan', 'Industri Serat Alami', NULL, '-', 'hsudiqwgfiqwrgiqriqgf', 'uploads/1752809164_Premium Vector _ A cartoon of a girl with a book….jpeg', '2025-07-18 03:26:04'),
(33, NULL, 'andin@gmail.com', '2025-07-26', 'nurus danti', '012345788968', 'mojoagung', 'Industri Serat Alami', NULL, '', NULL, 'uploads/1752809297_1752807691_ca69a679-dd15-4948-b508-bf4d9051a307.jpg', '2025-07-18 03:28:17'),
(34, NULL, 'juliah123@gmail.com', '2025-07-26', 'Juliah Lestari', '08765123456', 'dsn pojok klitih, rt 001/rw 002, desa plandaan kecamatan plandaan kabupaten jombang', 'Kerajinan Tanah Liat', NULL, 'NIB', NULL, 'uploads/1753510411_Desain tanpa judul.gif', '2025-07-26 06:13:31'),
(35, NULL, 'dantia@gmail.com', '2025-07-26', 'NURUS DANTI', '098765412312', 'dsn pojok klitih, rt 001/rw 002, desa plandaan kecamatan plandaan kabupaten jombang', 'Usaha Kuliner', NULL, 'Izin Usaha Industri (SIINAS)', NULL, 'uploads/1753511700_Sistem pelayanan.png', '2025-07-26 06:35:00'),
(36, NULL, 'dantia@gmail.com', '2025-07-26', 'NURUS DANTI', '098765412312', 'dsn pojok klitih, rt 001/rw 002, desa plandaan kecamatan plandaan kabupaten jombang', 'Kerajinan Tanah Liat', NULL, 'NIB', NULL, 'uploads/1753516307_Sistem pelayanan.png', '2025-07-26 07:51:47'),
(37, NULL, 'juliah@gmail.com', '2025-08-02', 'JULIAH', '081233567889', 'ploso', 'Industri Rumah Tangga', NULL, 'Izin Edar (S-PIRT dan BPOM)', NULL, 'uploads/1753516391_Usecase.jpg', '2025-07-26 07:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_kategori`
--

CREATE TABLE `tahun_kategori` (
  `id` int NOT NULL,
  `tahun` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tahun_kategori`
--

INSERT INTO `tahun_kategori` (`id`, `tahun`) VALUES
(1, 2025),
(2, 2026);

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
(9, 'nayla', 'staf', '4.jpg'),
(10, 'rico cris', 'admin', 'WhatsApp Image 2024-11-20 at 11.28.37_266705c7.jpg'),
(11, 'ANDIN RACHMA NADILA', 'staf', 'Premium Vector _ A cartoon of a girl with a book….jpeg');

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
(4, 'arum', '$2y$10$NtW10Kth8TYDCtzIuSBN8OHVWKG8GxM4CRJUWYPiGRTRFLTIR5Rzy'),
(5, 'aku', '$2y$10$.DlbFPQOd4AqnwU5mVzXkuGMeYzPIKIv4l3Wm35xiuMp7I6knRxBK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahun_id` (`tahun_id`);

--
-- Indexes for table `tahun_kategori`
--
ALTER TABLE `tahun_kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tahun` (`tahun`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tahun_kategori`
--
ALTER TABLE `tahun_kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `form_ibfk_1` FOREIGN KEY (`tahun_id`) REFERENCES `tahun_kategori` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2025 at 07:30 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tarif_parkir`
--

CREATE TABLE `tarif_parkir` (
  `id_tarif` int NOT NULL,
  `jenis_kendaraan` enum('motor','mobil') NOT NULL,
  `harga_flat` int NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tarif_parkir`
--

INSERT INTO `tarif_parkir` (`id_tarif`, `jenis_kendaraan`, `harga_flat`, `updated_at`) VALUES
(1, 'motor', 5000, '2025-11-18 09:36:07'),
(2, 'mobil', 10000, '2025-11-18 09:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int NOT NULL,
  `barcode` char(13) NOT NULL,
  `nomor_polisi` varchar(15) DEFAULT NULL,
  `jenis_kendaraan` enum('motor','mobil') NOT NULL,
  `id_tarif` int NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_keluar` datetime DEFAULT NULL,
  `total_harga` int DEFAULT NULL,
  `id_petugas_masuk` int DEFAULT NULL,
  `id_petugas_keluar` int DEFAULT NULL,
  `status` enum('masuk','keluar') DEFAULT 'masuk'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `barcode`, `nomor_polisi`, `jenis_kendaraan`, `id_tarif`, `tgl_masuk`, `tgl_keluar`, `total_harga`, `id_petugas_masuk`, `id_petugas_keluar`, `status`) VALUES
(2, '2214385623602', 'KT 1824 BS', 'mobil', 2, '2025-11-18 09:37:00', '2025-11-19 10:37:00', 10000, 1, 1, 'keluar'),
(4, '3155239835524', 'KT 1234 BS', 'mobil', 2, '2025-11-18 03:45:23', '2025-11-18 04:37:53', NULL, NULL, NULL, 'keluar'),
(5, '8679022669543', 'KT 5678 JK', 'mobil', 2, '2025-11-18 04:40:17', '2025-11-18 05:58:15', NULL, NULL, 5, 'keluar'),
(6, '9238104390800', 'KT 1222 LK', 'motor', 1, '2025-11-18 04:40:48', '2025-11-18 06:01:02', 5000, NULL, 5, 'keluar'),
(7, '5833263109401', 'KT 1234 BS', 'motor', 1, '2025-11-18 06:37:41', '2025-11-18 06:38:00', 5000, 5, 5, 'keluar'),
(8, '4447854500672', 'KT 5678 JK', 'mobil', 2, '2025-11-18 06:50:50', NULL, NULL, 5, NULL, 'masuk'),
(9, '7957659355783', 'KT 1234 BS', 'mobil', 2, '2025-11-18 07:07:10', '2025-11-18 07:07:58', 10000, 5, 5, 'keluar'),
(10, '3419593463032', 'KT 5678 JK', 'motor', 1, '2025-11-18 07:19:58', NULL, NULL, 5, NULL, 'masuk'),
(11, '6524024184981', 'KT 1222 LK', 'mobil', 2, '2025-11-18 07:21:27', NULL, NULL, 5, NULL, 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `id_tiket` int NOT NULL,
  `jumlah_bayar` int NOT NULL,
  `metode` enum('cash','digital') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'cash',
  `tgl_bayar` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','paid') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_tiket`, `jumlah_bayar`, `metode`, `tgl_bayar`, `status`) VALUES
(1, 2, 10000, 'cash', '2025-11-18 10:16:23', 'pending'),
(4, 8, 10000, 'cash', '2025-11-18 14:57:24', 'paid'),
(5, 9, 10000, 'cash', '2025-11-18 15:07:31', 'paid'),
(6, 10, 5000, 'cash', '2025-11-18 15:20:11', 'paid'),
(7, 11, 10000, 'digital', '2025-11-18 15:21:37', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `role` enum('admin','petugas') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'petugas',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `password`, `gender`, `role`, `created_at`) VALUES
(1, 'Fadlan Firdaus', 'fadlanfirdaus220@gmail.com', '$2y$12$IsszqsBIvpFVbZwiSJlVJuBKFuYxs3Yz5GW8Lqk3b9Odu95nr1DSO', 'L', 'admin', '2025-11-18 08:51:16'),
(5, 'Andik dilma', 'andik@gmail.com', '$2y$10$UaYCK21s6rst.ah/ax4gUebYQGyCGtvc2SML/7awSc1CApHnLvGeO', 'P', 'petugas', '2025-11-18 13:56:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarif_parkir`
--
ALTER TABLE `tarif_parkir`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `id_tarif` (`id_tarif`),
  ADD KEY `tiket_ibfk_2` (`id_petugas_masuk`),
  ADD KEY `tiket_ibfk_3` (`id_petugas_keluar`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tarif_parkir`
--
ALTER TABLE `tarif_parkir`
  MODIFY `id_tarif` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_tarif`) REFERENCES `tarif_parkir` (`id_tarif`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`id_petugas_masuk`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE RESTRICT,
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`id_petugas_keluar`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE RESTRICT;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

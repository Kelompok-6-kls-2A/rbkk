-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2019 at 09:30 AM
-- Server version: 10.2.6-MariaDB-log
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmegawe`
--

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 56, 'wpu3', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lvluser`
--

CREATE TABLE `lvluser` (
  `id_lvl` int(11) NOT NULL,
  `kategori_user` enum('admin','user','owner','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lvluser`
--

INSERT INTO `lvluser` (`id_lvl`, `kategori_user`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `SKCK` varchar(50) DEFAULT NULL,
  `CV` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `foto_ktp` varchar(50) DEFAULT NULL,
  `lainlain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kategori_pekerjaan` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `jam_kerja` enum('full time','partime') DEFAULT NULL,
  `created_add` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `id_user`, `nama_kategori_pekerjaan`, `deskripsi`, `gaji`, `lokasi`, `jam_kerja`, `created_add`) VALUES
(16, 60, 'asd', 'asd', 10000, 'asd', 'full time', '2019-10-24 02:13:57'),
(18, 60, 'coba', 'dfssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 10000, 'Malang', 'full time', '2019-10-25 02:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `alamat_user` text DEFAULT NULL,
  `tempattl_user` varchar(50) DEFAULT NULL,
  `tl_user` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `foto_profil` varchar(50) DEFAULT 'default.jpg',
  `idlvl` int(11) DEFAULT NULL,
  `created_add` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `alamat_user`, `tempattl_user`, `tl_user`, `email`, `password`, `no_hp`, `foto_profil`, `idlvl`, `created_add`) VALUES
(60, 'Abdul Qhodir Zaelany', 'Jl. Raya Tlogomas 246, T. Informatika Universitas Muhammadiyah Malang', 'Malang', '2019-10-20', 'qodirtok@gmail.com', '$2y$10$MvMFbVx9yIZmouquY6Eize96s5dtceE0lBIkqI.klz2zM4MQ4Aeuq', '085234101001', 'default.jpg', 1, NULL),
(64, NULL, NULL, NULL, NULL, 'pwwnned@gmail.com', '$2y$10$LN/hpdR5QsSuiJYbNM3/s.g6V1yr0brLQ2ryiR6nLqFwuljjn9H9i', NULL, 'default.jpg', 2, '2019-10-24 02:13:01'),
(67, NULL, NULL, NULL, NULL, 'rahmatillah36@yahoo.com', '$2y$10$Olu4rq7PPJOPy0A1DFGQ1.8lmG/meyJStxW.N1nrwjHTodyUlcgI.', NULL, 'default.jpg', 3, '2019-10-25 02:11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lvluser`
--
ALTER TABLE `lvluser`
  ADD PRIMARY KEY (`id_lvl`);

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `fk_kerjaan` (`id_pekerjaan`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`),
  ADD KEY `fk_users` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `mnbmnbmnb` (`idlvl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lvluser`
--
ALTER TABLE `lvluser`
  MODIFY `id_lvl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD CONSTRAINT `fkpekerjaan` FOREIGN KEY (`id_pekerjaan`) REFERENCES `tb_pekerjaan` (`id_pekerjaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD CONSTRAINT `pekerjaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idlvl`) REFERENCES `lvluser` (`id_lvl`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

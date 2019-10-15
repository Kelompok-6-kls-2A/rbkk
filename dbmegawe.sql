-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2019 at 09:25 AM
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
  `SKCK` varchar(50) NOT NULL,
  `CV` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `lainlain` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`id_berkas`, `id_pekerjaan`, `SKCK`, `CV`, `foto`, `foto_ktp`, `lainlain`) VALUES
(1, 8, 'asasd', 'asdasd', 'asda', 'asd', 'asda');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kategori_pekerjaan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gaji` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `jam_kerja` enum('full time','partime') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `id_user`, `nama_kategori_pekerjaan`, `deskripsi`, `gaji`, `lokasi`, `jam_kerja`) VALUES
(7, 28, 'art', 'lowongan', 150000, 'malang', 'partime'),
(8, 28, 'art', 'lowongan', 150000, 'malang', 'partime');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat_user` text NOT NULL,
  `tempattl_user` varchar(50) NOT NULL,
  `tl_user` date NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto_profil` varchar(50) NOT NULL,
  `idlvl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `alamat_user`, `tempattl_user`, `tl_user`, `email`, `password`, `no_hp`, `foto_profil`, `idlvl`) VALUES
(28, 'aaaa', 'Jl. Raya Tlogomas 246, T. Informatika Universitas Muhammadiyah Malang', 'Malang', '2019-10-15', 'qodiraja23@gmail.com', 'asdasdhghj', '085234101001', 'hjghjgjhgjhg', 1),
(29, 'Abdul Qhodir Zaelany', 'alksdjlaks', 'alksdjaslkd', '2018-11-30', 'asdasd@gmail.com', 'asdasdhghj', '085234101001', 'hjghjgjhgjhg', 1),
(30, 'Abdul Qhodir Zaelany', 'Jl. Raya Tlogomas 246, T. Informatika Universitas Muhammadiyah Malang', 'lkjlkjlkjlkjkljlkj', '2018-10-30', 'asdasd@gmail.com', 'asdasdhghj', '085234101001', 'hjghjgjhgjhg', 1),
(31, 'Abdul Qhodir Zaelany', 'Jl. Raya Tlogomas 246, T. Informatika Universitas Muhammadiyah Malang', 'lkjlkjlkjlkjkljlkj', '2019-12-30', 'qodiraja23@gmail.com', 'asdasdhghj', '085234101001', 'hjghjgjhgjhg', 1),
(32, 'asdajsdnkajsndkjn', 'Jl. Raya Tlogomas 246, T. Informatika Universitas Muhammadiyah Malang', 'lkjlkjlkjlkjkljlkj', '2019-12-31', 'qodiraja23@gmail.com', 'asdasdhghj', '085234101001', 'hjghjgjhgjhg', 1),
(33, 'jsdkfjhskdjfhskjhk', 'Jl. Raya Tlogomas 246, T. Informatika Universitas Muhammadiyah Malang', 'lkjlkjlkjlkjkljlkj', '2019-12-31', 'qodiraja23@gmail.com', 'asdasdhghj', '085234101001', 'hjghjgjhgjhg', 1),
(34, 'jsdkfjhskdjfhskjhk', 'Jl. Raya Tlogomas 246, T. Informatika Universitas Muhammadiyah Malang', 'lkjlkjlkjlkjkljlkj', '2019-12-31', 'qodiraja23@gmail.com', 'asdasdhghj', '085234101001', 'hjghjgjhgjhg', 1),
(35, 'Abdul Qhodir Zaelany', 'Jl. Raya Tlogomas 246, T. Informatika Universitas Muhammadiyah Malang', 'lkjlkjlkjlkjkljlkj', '2019-12-31', 'qodiraja23@gmail.com', 'asdasdhghj', '085234101001', 'hjghjgjhgjhg', 1);

--
-- Indexes for dumped tables
--

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
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 10:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perbend`
--

-- --------------------------------------------------------

--
-- Table structure for table `dok`
--

CREATE TABLE `dok` (
  `id_dok` int(10) NOT NULL,
  `id_pj` int(10) NOT NULL,
  `id_penjamin` int(10) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `no_permohonan` varchar(30) NOT NULL,
  `tgl_permohonan` datetime DEFAULT NULL,
  `surat_permohonan` text NOT NULL,
  `surat_kuasa` text NOT NULL,
  `jaminan` text NOT NULL,
  `sptnp` text NOT NULL,
  `pib` text NOT NULL,
  `skep` text NOT NULL,
  `tgl_kirim` datetime DEFAULT NULL,
  `nama_penjamin` varchar(60) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `penelitian` varchar(50) NOT NULL,
  `tgl_p` datetime DEFAULT NULL,
  `konfirmasi` varchar(50) NOT NULL,
  `tgl_k` datetime DEFAULT NULL,
  `validasi` varchar(50) NOT NULL,
  `tgl_v` datetime DEFAULT NULL,
  `pbj` varchar(30) NOT NULL,
  `tgl_pbj` datetime DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(19) NOT NULL,
  `foto` text NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(19) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kode_unit_organisasi` varchar(10) NOT NULL,
  `unit_organisasi` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjamin`
--

CREATE TABLE `penjamin` (
  `id_penjamin` int(50) NOT NULL,
  `nama_penjamin` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email_p` varchar(30) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `npwp` varchar(15) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `alamat_p` text NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `tgl_daftar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pj`
--

CREATE TABLE `pj` (
  `id_pj` int(50) NOT NULL,
  `nama_pj` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email_p` varchar(30) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `npwp` varchar(15) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `alamat_p` text NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `tgl_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(6) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `foto_slide` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `link`, `foto_slide`) VALUES
(3, 'Slider 2', 'www.google.com', 'tree-736885.jpg'),
(4, 'Slider 3', '', 'px-beach-daylight-fun-1430675-image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `id_pegawai` int(50) NOT NULL,
  `id_penjamin` int(50) NOT NULL,
  `id_pj` int(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `status_akun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_pegawai`, `id_penjamin`, `id_pj`, `username`, `password`, `status`, `status_akun`) VALUES
(1, 0, 0, 0, 'admin', 'admin', 'admin', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dok`
--
ALTER TABLE `dok`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penjamin`
--
ALTER TABLE `penjamin`
  ADD PRIMARY KEY (`id_penjamin`);

--
-- Indexes for table `pj`
--
ALTER TABLE `pj`
  ADD PRIMARY KEY (`id_pj`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dok`
--
ALTER TABLE `dok`
  MODIFY `id_dok` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(19) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjamin`
--
ALTER TABLE `penjamin`
  MODIFY `id_penjamin` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pj`
--
ALTER TABLE `pj`
  MODIFY `id_pj` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

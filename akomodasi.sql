-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 07:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akomodasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `blok1_pengenalan_tempat`
--

CREATE TABLE `blok1_pengenalan_tempat` (
  `id_blok1` int(11) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupatenkota` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `nomor_sbr` varchar(30) NOT NULL,
  `id_infrastruktur_wilkerstat` varchar(20) NOT NULL,
  `nama_komersial_usaha` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `jalan` varchar(150) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `nama_pengusaha` varchar(150) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blok1_pengenalan_tempat`
--

INSERT INTO `blok1_pengenalan_tempat` (`id_blok1`, `provinsi`, `kabupatenkota`, `kelurahan`, `nomor_sbr`, `id_infrastruktur_wilkerstat`, `nama_komersial_usaha`, `nama_perusahaan`, `jalan`, `kode_pos`, `no_telepon`, `facebook`, `email`, `twitter`, `website`, `nama_pengusaha`, `lat`, `longi`) VALUES
(1, 'Jawa Timur', 'Kota Malang', 'Polowijen', '12345', '157', 'Bisnis', 'Kampung Budaya Polowijen', 'Jalan Cakalang 172 E', '65125', '081234', 'kbp_malang', 'kbp@gmail.com', 'kbp_malang', 'kbp_malang.com', 'Ade Ramadhana Pratama', '-7.9297054', '112.6410554'),
(2, 'Jawa Timur', 'Kota Malang', 'Rampal', '21878', '800', 'Hotel', 'Savana Hotel & Convention', 'Jalan Letjen Sutoyo no 30-34', '65141', '+62341495555', 'hotel_sava', 'savana@gmail.com', 'hotel_savana', 'hotel_savana.com', 'Savana Group', '-7.962238', '112.6341093');

-- --------------------------------------------------------

--
-- Table structure for table `blok3a_keterangan_umum_perusahaan`
--

CREATE TABLE `blok3a_keterangan_umum_perusahaan` (
  `id_blok3a` int(11) NOT NULL,
  `klasifikasi_usaha` varchar(10) NOT NULL,
  `jenis_izin` varchar(10) NOT NULL,
  `if_lsu` varchar(10) NOT NULL,
  `if_anggota_asosiasi` varchar(10) NOT NULL,
  `nama_asosiasi` varchar(10) NOT NULL,
  `sarana_promosi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table akomodasi.blok3a_keterangan_umum_perusahaan: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `akomodasi`.`blok3a_keterangan_umum_perusahaan`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `job_desc`
--

CREATE TABLE `job_desc` (
  `id_job_desc` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_blok1` int(11) NOT NULL,
  `tanggal_survei` date NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `status_job` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error reading data for table akomodasi.job_desc: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `akomodasi`.`job_desc`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `nama_petugas` varchar(100) DEFAULT NULL,
  `ttl` varchar(100) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `jk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `nip`, `nama_petugas`, `ttl`, `alamat`, `jk`) VALUES
(1, 'admin', 'admin', 1, NULL, NULL, NULL, '', NULL),
(2, 'petugas', 'petugas', 2, '123', 'Petugas 1', 'Malang, 3 Januari 1999', 'Jalan Cakalang 172 E', 1),
(3, 'petugas2', 'petugas', 2, '1245', 'Petugas 2', 'Malang, 14 Januari 2001', 'Malang', 1),
(4, 'petugas3', 'petugas', 2, '15043', 'Petugas 3', 'Malang, 13 Januari 2000', 'Malang', 2),
(5, 'petugas4', 'petugas', 2, '7890', 'Petugas 4', 'Malang, 8 Januari 1998', 'Malang', 2),
(6, 'petugas5', 'petugas', 2, '672617', 'Petugas 5', 'Malang, 1 Januari 1999', 'Malang', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blok1_pengenalan_tempat`
--
ALTER TABLE `blok1_pengenalan_tempat`
  ADD PRIMARY KEY (`id_blok1`);

--
-- Indexes for table `blok3a_keterangan_umum_perusahaan`
--
ALTER TABLE `blok3a_keterangan_umum_perusahaan`
  ADD PRIMARY KEY (`id_blok3a`);

--
-- Indexes for table `job_desc`
--
ALTER TABLE `job_desc`
  ADD PRIMARY KEY (`id_job_desc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blok1_pengenalan_tempat`
--
ALTER TABLE `blok1_pengenalan_tempat`
  MODIFY `id_blok1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blok3a_keterangan_umum_perusahaan`
--
ALTER TABLE `blok3a_keterangan_umum_perusahaan`
  MODIFY `id_blok3a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_desc`
--
ALTER TABLE `job_desc`
  MODIFY `id_job_desc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

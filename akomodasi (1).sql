-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 06:02 AM
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
-- Database: `akomodasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailtarifsurvei`
--

CREATE TABLE `detailtarifsurvei` (
  `id_detail_tarif` int(11) NOT NULL,
  `id_survei` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlahKamarTersedia` int(11) DEFAULT 0,
  `kamarDigunakanKemarin` int(11) DEFAULT 0,
  `digunakanKemarin` int(11) DEFAULT 0,
  `checkIn` int(11) DEFAULT 0,
  `checkOut` int(11) DEFAULT 0,
  `kemarinAsing` int(11) DEFAULT 0,
  `kemarinIndonesia` int(11) DEFAULT 0,
  `masukAsing` int(11) DEFAULT 0,
  `masukIndonesia` int(11) DEFAULT 0,
  `keluarAsing` int(11) DEFAULT 0,
  `keluarIndonesia` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailtarifsurvei`
--

INSERT INTO `detailtarifsurvei` (`id_detail_tarif`, `id_survei`, `tanggal`, `jumlahKamarTersedia`, `kamarDigunakanKemarin`, `digunakanKemarin`, `checkIn`, `checkOut`, `kemarinAsing`, `kemarinIndonesia`, `masukAsing`, `masukIndonesia`, `keluarAsing`, `keluarIndonesia`) VALUES
(1640, 22, '2021-08-01', 350, 2, 2, 13, 2, 0, 10, 1, 10, 23, 21),
(1641, 22, '2021-08-02', 56, 4, 13, 10, 2, 1, 10, 19, 2, 32, 32),
(1642, 22, '2021-08-03', 15, 16, 10, 15, 2, 19, 2, 2, 2, 2, 2),
(1643, 22, '2021-08-04', 16, 0, 15, 16, 0, 2, 2, 0, 0, 0, 0),
(1644, 22, '2021-08-05', 15, 0, 16, 15, 0, 0, 0, 0, 0, 0, 0),
(1645, 22, '2021-08-06', 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0),
(1646, 22, '2021-08-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1647, 22, '2021-08-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1648, 22, '2021-08-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1649, 22, '2021-08-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1650, 22, '2021-08-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1651, 22, '2021-08-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1652, 22, '2021-08-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1653, 22, '2021-08-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1654, 22, '2021-08-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1655, 22, '2021-08-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1656, 22, '2021-08-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1657, 22, '2021-08-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1658, 22, '2021-08-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1659, 22, '2021-08-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1660, 22, '2021-08-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1661, 22, '2021-08-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1662, 22, '2021-08-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1663, 22, '2021-08-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1664, 22, '2021-08-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1665, 22, '2021-08-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1666, 22, '2021-08-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1667, 22, '2021-08-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1668, 22, '2021-08-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1669, 22, '2021-08-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1670, 22, '2021-08-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_desc`
--

CREATE TABLE `job_desc` (
  `id_job_desc` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `tanggal_survei` date NOT NULL,
  `periode` varchar(50) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `status_job` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_desc`
--

INSERT INTO `job_desc` (`id_job_desc`, `id_user`, `id_lokasi`, `tanggal_survei`, `periode`, `keterangan`, `status_job`) VALUES
(27, 2, 5, '2021-08-02', '2021-08', 'oi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupatenKota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `namaKomersial` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenisAkomodasi` int(11) NOT NULL,
  `kelasAkomodasi` varchar(100) NOT NULL,
  `linkMaps` varchar(255) NOT NULL,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `provinsi`, `kabupatenKota`, `kecamatan`, `kelurahan`, `namaKomersial`, `alamat`, `jenisAkomodasi`, `kelasAkomodasi`, `linkMaps`, `lattitude`, `longitude`) VALUES
(5, 'Jawa Timur', 'Kota Malang', 'Klojen', 'Klojen', 'Savana Hotel & Convention', 'Jl. Letjen Sutoyo No.30-34', 1, 'Eksklusif', 'https://www.google.com/maps/place/Savana+Hotel+%26+Convention/@-7.9622433,112.6341093,17z/data=!4m8!3m7!1s0x2dd629cc7d30b547:0x1eaff2d670c7fc15!5m2!4m1!1i2!8m2!3d-7.9622433!4d112.636298', '-7.962238', '112.6341093'),
(12, '12121', '2', '2', '2', '2dsadsa', 'dsa', 1, '2', 'g', 'g', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id_survei` int(11) NOT NULL,
  `id_job_desc` int(11) NOT NULL,
  `status_survei` int(11) NOT NULL DEFAULT 0,
  `standarHariKerjaSuite` int(11) DEFAULT NULL,
  `superiorHariKerjaSuite` int(11) DEFAULT NULL,
  `deluxeHariKerjaSuite` int(11) DEFAULT NULL,
  `standarHariLiburSuite` int(11) DEFAULT NULL,
  `superiorHariLiburSuite` int(11) DEFAULT NULL,
  `deluxeHariLiburSuite` int(11) DEFAULT NULL,
  `standarHariKerjaNonSuite` int(11) DEFAULT NULL,
  `superiorHariKerjaNonSuite` int(11) DEFAULT NULL,
  `deluxeHariKerjaNonSuite` int(11) DEFAULT NULL,
  `standarHariLiburNonSuite` int(11) DEFAULT NULL,
  `superiorHariLiburNonSuite` int(11) DEFAULT NULL,
  `deluxeHariLiburNonSuite` int(11) DEFAULT NULL,
  `alasanPenolakan` varchar(250) DEFAULT NULL,
  `totalJumlahKamarTersedia` int(11) NOT NULL DEFAULT 0,
  `totalKamarDigunakanKemarin` int(11) NOT NULL DEFAULT 0,
  `totalDigunakanKemarin` int(11) NOT NULL DEFAULT 0,
  `totalCheckIn` int(11) NOT NULL DEFAULT 0,
  `totalCheckOut` int(11) NOT NULL DEFAULT 0,
  `totalKemarinAsing` int(11) NOT NULL DEFAULT 0,
  `totalKemarinIndonesia` int(11) NOT NULL DEFAULT 0,
  `totalMasukAsing` int(11) NOT NULL DEFAULT 0,
  `totalMasukIndonesia` int(11) NOT NULL DEFAULT 0,
  `totalKeluarAsing` int(11) NOT NULL DEFAULT 0,
  `totalKeluarIndonesia` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`id_survei`, `id_job_desc`, `status_survei`, `standarHariKerjaSuite`, `superiorHariKerjaSuite`, `deluxeHariKerjaSuite`, `standarHariLiburSuite`, `superiorHariLiburSuite`, `deluxeHariLiburSuite`, `standarHariKerjaNonSuite`, `superiorHariKerjaNonSuite`, `deluxeHariKerjaNonSuite`, `standarHariLiburNonSuite`, `superiorHariLiburNonSuite`, `deluxeHariLiburNonSuite`, `alasanPenolakan`, `totalJumlahKamarTersedia`, `totalKamarDigunakanKemarin`, `totalDigunakanKemarin`, `totalCheckIn`, `totalCheckOut`, `totalKemarinAsing`, `totalKemarinIndonesia`, `totalMasukAsing`, `totalMasukIndonesia`, `totalKeluarAsing`, `totalKeluarIndonesia`) VALUES
(22, 27, 2, 10000, 80000, 70000, 10000, 20000, 21000, 70000, 211000, 7932000, 800, 8000, 7000, NULL, 452, 22, 71, 69, 6, 22, 24, 22, 14, 57, 55);

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
  `jk` int(11) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `nip`, `nama_petugas`, `ttl`, `alamat`, `jk`, `id_lokasi`) VALUES
(1, 'admin', 'admin', 1, '123', 'admin', NULL, '', NULL, NULL),
(2, 'petugas', 'petugas', 2, '123', 'Petugas 1', 'Malang, 3 Januari 1999', 'Jalan Cakalang 172 E', 1, NULL),
(3, 'petugas2', 'petugas', 2, '1245', 'Petugas 2', 'Malang, 14 Januari 2001', 'Malang', 1, NULL),
(4, 'petugas3', 'petugas', 2, '15043', 'Petugas 3', 'Malang, 13 Januari 2000', 'Malang', 2, NULL),
(5, 'petugas4', 'petugas', 2, '7890', 'Petugas 4', 'Malang, 8 Januari 1998', 'Malang', 2, NULL),
(6, 'petugas5', 'petugas', 2, '672617', 'Petugas 5', 'Malang, 1 Januari 1999', 'Malang', 1, NULL),
(14, 'savanahotel', 'savanahotel', 3, NULL, 'Savana Hotel & Convention', NULL, NULL, NULL, 5),
(19, 'supervisor', 'supervisor', 4, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '122121', '212112', 3, NULL, '2', NULL, NULL, NULL, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailtarifsurvei`
--
ALTER TABLE `detailtarifsurvei`
  ADD PRIMARY KEY (`id_detail_tarif`);

--
-- Indexes for table `job_desc`
--
ALTER TABLE `job_desc`
  ADD PRIMARY KEY (`id_job_desc`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id_survei`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailtarifsurvei`
--
ALTER TABLE `detailtarifsurvei`
  MODIFY `id_detail_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1671;

--
-- AUTO_INCREMENT for table `job_desc`
--
ALTER TABLE `job_desc`
  MODIFY `id_job_desc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

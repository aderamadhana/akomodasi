-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 09:38 AM
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
(1207, 18, '2021-07-01', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6),
(1208, 18, '2021-07-02', 7, 7, 6, 7, 7, 6, 6, 7, 7, 7, 7),
(1209, 18, '2021-07-03', 8, 8, 7, 8, 8, 7, 7, 8, 8, 8, 8),
(1210, 18, '2021-07-04', 9, 9, 8, 9, 9, 8, 8, 9, 9, 9, 9),
(1211, 18, '2021-07-05', 0, 0, 9, 0, 0, 9, 9, 0, 0, 0, 0),
(1212, 18, '2021-07-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1213, 18, '2021-07-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1214, 18, '2021-07-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1215, 18, '2021-07-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1216, 18, '2021-07-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1217, 18, '2021-07-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1218, 18, '2021-07-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1219, 18, '2021-07-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1220, 18, '2021-07-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1221, 18, '2021-07-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1222, 18, '2021-07-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1223, 18, '2021-07-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1224, 18, '2021-07-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1225, 18, '2021-07-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1226, 18, '2021-07-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1227, 18, '2021-07-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1228, 18, '2021-07-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1229, 18, '2021-07-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1230, 18, '2021-07-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1231, 18, '2021-07-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1232, 18, '2021-07-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1233, 18, '2021-07-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1234, 18, '2021-07-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1235, 18, '2021-07-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1236, 18, '2021-07-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1237, 18, '2021-07-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1238, 17, '2021-07-01', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1239, 17, '2021-07-02', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1240, 17, '2021-07-03', 2, 2, 1, 2, 2, 1, 1, 2, 2, 2, 2),
(1241, 17, '2021-07-04', 0, 0, 2, 0, 0, 2, 2, 0, 0, 0, 0),
(1242, 17, '2021-07-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1243, 17, '2021-07-06', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1244, 17, '2021-07-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1245, 17, '2021-07-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1246, 17, '2021-07-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1247, 17, '2021-07-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1248, 17, '2021-07-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1249, 17, '2021-07-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1250, 17, '2021-07-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1251, 17, '2021-07-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1252, 17, '2021-07-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1253, 17, '2021-07-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1254, 17, '2021-07-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1255, 17, '2021-07-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1256, 17, '2021-07-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1257, 17, '2021-07-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1258, 17, '2021-07-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1259, 17, '2021-07-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1260, 17, '2021-07-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1261, 17, '2021-07-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1262, 17, '2021-07-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1263, 17, '2021-07-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1264, 17, '2021-07-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1265, 17, '2021-07-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1266, 17, '2021-07-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1267, 17, '2021-07-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1268, 17, '2021-07-31', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1269, 19, '2021-06-01', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80),
(1270, 19, '2021-06-02', 7, 7, 80, 7, 7, 80, 80, 7, 7, 7, 7),
(1271, 19, '2021-06-03', 6, 6, 7, 6, 6, 7, 7, 6, 6, 6, 6),
(1272, 19, '2021-06-04', 6, 5, 6, 5, 5, 6, 6, 5, 5, 5, 5),
(1273, 19, '2021-06-05', 2, 2, 5, 2, 2, 5, 5, 2, 2, 2, 2),
(1274, 19, '2021-06-06', 0, 0, 2, 0, 0, 2, 2, 0, 0, 0, 0),
(1275, 19, '2021-06-07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1276, 19, '2021-06-08', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1277, 19, '2021-06-09', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1278, 19, '2021-06-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1279, 19, '2021-06-11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1280, 19, '2021-06-12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1281, 19, '2021-06-13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1282, 19, '2021-06-14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1283, 19, '2021-06-15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1284, 19, '2021-06-16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1285, 19, '2021-06-17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1286, 19, '2021-06-18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1287, 19, '2021-06-19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1288, 19, '2021-06-20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1289, 19, '2021-06-21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1290, 19, '2021-06-22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1291, 19, '2021-06-23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1292, 19, '2021-06-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1293, 19, '2021-06-25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1294, 19, '2021-06-26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1295, 19, '2021-06-27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1296, 19, '2021-06-28', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1297, 19, '2021-06-29', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1298, 19, '2021-06-30', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
(22, 2, 5, '2021-07-27', '2021-07', 'oi', 2),
(23, 2, 6, '2021-07-27', '2021-07', 'oi', 2),
(24, 2, 5, '2021-07-27', '2021-06', 'oi', 2);

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
(6, 'Jawa Timur', 'Kota Malang', 'Lowokwaru', 'Lowokwaru', 'Hotel Santika Premiere Malang', 'Jl. Letjen Sutoyo No.79', 1, 'Eksklusif', 'https://www.google.com/maps/place/Hotel+Santika+Premiere+Malang/@-7.9581602,112.6347913,17z/data=!3m1!4b1!4m8!3m7!1s0x2dd629cc7e38166b:0x597cec8e5a265271!5m2!4m1!1i2!8m2!3d-7.9581655!4d112.63698', '-7.9581602', '112.6347913');

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
(17, 22, 2, 80000, 80000, 90000, 70000, 80000, 90000, 70000, 80000, 80000, 90008, 80000, 80000, 'oi', 4, 4, 5, 4, 4, 5, 5, 4, 4, 4, 4),
(18, 23, 2, 7000000, 800000, 700000, 20000, 200000, 800000, 700000, 60000, 100000, 100000, 90000, 100000, NULL, 30, 30, 36, 30, 30, 36, 36, 30, 30, 30, 30),
(19, 24, 2, 100000, 800000, 120000, 80000, 80000, 100000, 70000, 21000, 70000, 210000, 210000, 210000, NULL, 101, 100, 180, 100, 100, 180, 180, 100, 100, 100, 100);

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
(1, 'admin', 'admin', 1, NULL, NULL, NULL, '', NULL, NULL),
(2, 'petugas', 'petugas', 2, '123', 'Petugas 1', 'Malang, 3 Januari 1999', 'Jalan Cakalang 172 E', 1, NULL),
(3, 'petugas2', 'petugas', 2, '1245', 'Petugas 2', 'Malang, 14 Januari 2001', 'Malang', 1, NULL),
(4, 'petugas3', 'petugas', 2, '15043', 'Petugas 3', 'Malang, 13 Januari 2000', 'Malang', 2, NULL),
(5, 'petugas4', 'petugas', 2, '7890', 'Petugas 4', 'Malang, 8 Januari 1998', 'Malang', 2, NULL),
(6, 'petugas5', 'petugas', 2, '672617', 'Petugas 5', 'Malang, 1 Januari 1999', 'Malang', 1, NULL),
(14, 'savanahotel', 'savanahotel', 3, NULL, 'Savana Hotel & Convention', NULL, NULL, NULL, 5),
(15, 'santikahotel', 'santikahotel', 3, NULL, 'Hotel Santika Premiere Malang', NULL, NULL, NULL, 6);

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
  MODIFY `id_detail_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1299;

--
-- AUTO_INCREMENT for table `job_desc`
--
ALTER TABLE `job_desc`
  MODIFY `id_job_desc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

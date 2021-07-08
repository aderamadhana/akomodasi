-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 05:02 PM
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
  `kecamatan` varchar(50) NOT NULL,
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

INSERT INTO `blok1_pengenalan_tempat` (`id_blok1`, `provinsi`, `kabupatenkota`, `kecamatan`, `kelurahan`, `nomor_sbr`, `id_infrastruktur_wilkerstat`, `nama_komersial_usaha`, `nama_perusahaan`, `jalan`, `kode_pos`, `no_telepon`, `facebook`, `email`, `twitter`, `website`, `nama_pengusaha`, `lat`, `longi`) VALUES
(1, 'Jawa Timur', 'Kota Malang', 'Blimbing', 'Polowijen', '12345', '157', 'Bisnis', 'Kampung Budaya Polowijen', 'Jalan Cakalang 172 E', '65125', '081234', 'kbp_malang', 'kbp@gmail.com', 'kbp_malang', 'kbp_malang.com', 'Ade Ramadhana Pratama', '-7.9297054', '112.6410554'),
(2, 'Jawa Timur', 'Kota Malang', 'Klojen', 'Rampal', '21878', '800', 'Hotel', 'Savana Hotel & Convention', 'Jalan Letjen Sutoyo no 30-34', '65141', '+62341495555', 'hotel_sava', 'savana@gmail.com', 'hotel_savana', 'hotel_savana.com', 'Savana Group', '-7.962238', '112.6341093');

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

--
-- Dumping data for table `job_desc`
--

INSERT INTO `job_desc` (`id_job_desc`, `id_user`, `id_blok1`, `tanggal_survei`, `keterangan`, `status_job`) VALUES
(5, 2, 1, '2021-07-05', 'oi', 0),
(6, 2, 2, '2021-07-05', 'oi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id_survei` int(11) NOT NULL,
  `id_job_desc` int(11) NOT NULL,
  `status_survei` int(11) NOT NULL DEFAULT 0,
  `ttd_petugas` varchar(250) DEFAULT NULL,
  `klasifikasiUsaha` int(11) DEFAULT NULL,
  `jenisIzin` int(11) DEFAULT NULL,
  `sertifikasi` int(11) DEFAULT NULL,
  `anggotaAsosiasi` int(11) DEFAULT NULL,
  `asosiasi` int(11) DEFAULT NULL,
  `saranaPromosi` varchar(50) DEFAULT NULL,
  `sertifikasiSyariah` int(11) DEFAULT NULL,
  `jenisSertifikasiSyariah` int(11) DEFAULT NULL,
  `statusPengelolaanUsaha` int(11) DEFAULT NULL,
  `namaGroupPengelolaanUsaha` varchar(50) DEFAULT NULL,
  `ifOnline` int(11) DEFAULT NULL,
  `saranaPenjualan` int(11) DEFAULT NULL,
  `caraPembayaran` int(11) DEFAULT NULL,
  `agoda` int(11) DEFAULT NULL,
  `bookingcom` int(11) DEFAULT NULL,
  `traveloka` int(11) DEFAULT NULL,
  `oyo` int(11) DEFAULT NULL,
  `airbnb` int(11) DEFAULT NULL,
  `airy` int(11) DEFAULT NULL,
  `reddoorz` int(11) DEFAULT NULL,
  `kamarLainnya` int(11) DEFAULT NULL,
  `banyakKamarStandar` int(11) DEFAULT NULL,
  `banyakTempatTidurStandar` int(11) DEFAULT NULL,
  `kapasitasStandar` int(11) DEFAULT NULL,
  `hargaSingleUmumStandar` int(11) DEFAULT NULL,
  `hargaDoubleUmumStandar` int(11) DEFAULT NULL,
  `hargaSinglePemerintahStandar` int(11) DEFAULT NULL,
  `hargaDoublePemerintahStandar` int(11) DEFAULT NULL,
  `banyakKamarSuperior` int(11) DEFAULT NULL,
  `banyakTempatTidurSuperior` int(11) DEFAULT NULL,
  `kapasitasSuperior` int(11) DEFAULT NULL,
  `hargaSingleUmumSuperior` int(11) DEFAULT NULL,
  `hargaDoubleUmumSuperior` int(11) DEFAULT NULL,
  `hargaSinglePemerintahSuperior` int(11) DEFAULT NULL,
  `hargaDoublePemerintahSuperior` int(11) DEFAULT NULL,
  `banyakKamarDeluxe` int(11) DEFAULT NULL,
  `banyakTempatTidurDouble` int(11) DEFAULT NULL,
  `kapasitasDeluxe` int(11) DEFAULT NULL,
  `hargaSingleUmumDeluxe` int(11) DEFAULT NULL,
  `hargaDoubleUmumDeluxe` int(11) DEFAULT NULL,
  `hargaSinglePemerintahDeluxe` int(11) DEFAULT NULL,
  `hargaDoublePemerintahDeluxe` int(11) DEFAULT NULL,
  `banyakKamarJunior` int(11) DEFAULT NULL,
  `banyakTempatTidurJunior` int(11) DEFAULT NULL,
  `kapasitasJunior` int(11) DEFAULT NULL,
  `hargaSingleUmumJunior` int(11) DEFAULT NULL,
  `hargaDoubleUmumJunior` int(11) DEFAULT NULL,
  `hargaSinglePemerintahJunior` int(11) DEFAULT NULL,
  `hargaDoublePemerintahJunior` int(11) DEFAULT NULL,
  `banyakKamarSuite` int(11) DEFAULT NULL,
  `banyakTempatTidurSuite` int(11) DEFAULT NULL,
  `kapasitasSuite` int(11) DEFAULT NULL,
  `hargaSingleUmumSuite` int(11) DEFAULT NULL,
  `hargaDoubleUmumSuite` int(11) DEFAULT NULL,
  `hargaSinglePemerintahSuite` int(11) DEFAULT NULL,
  `hargaDoublePemerintahSuite` int(11) DEFAULT NULL,
  `banyakKamarPresident` int(11) DEFAULT NULL,
  `banyakTempatTidurPresident` int(11) DEFAULT NULL,
  `kapasitasPresident` int(11) DEFAULT NULL,
  `hargaSingleUmumPresident` int(11) DEFAULT NULL,
  `hargaDoubleUmumPresident` int(11) DEFAULT NULL,
  `hargaSinglePemerintahPresident` int(11) DEFAULT NULL,
  `hargaDoublePemerintahPresident` int(11) DEFAULT NULL,
  `hargaUmumRapat1` int(11) DEFAULT NULL,
  `hargaPemerintahRapat1` int(11) DEFAULT NULL,
  `luasRuangRapat1` int(11) DEFAULT NULL,
  `kapasitasUshape1` int(11) DEFAULT NULL,
  `kapasitasClassRoom1` int(11) DEFAULT NULL,
  `kapasitasRoundTable1` int(11) DEFAULT NULL,
  `kapasitasTheatre1` int(11) DEFAULT NULL,
  `hargaUmumRapat2` int(11) DEFAULT NULL,
  `hargaPemerintahRapat2` int(11) DEFAULT NULL,
  `luasRuangRapat2` int(11) DEFAULT NULL,
  `kapasitasUshape2` int(11) DEFAULT NULL,
  `kapasitasClassRoom2` int(11) DEFAULT NULL,
  `kapasitasRoundTable2` int(11) DEFAULT NULL,
  `kapasitasTheatre2` int(11) DEFAULT NULL,
  `hargaUmumRapat3` int(11) DEFAULT NULL,
  `hargaPemerintahRapat3` int(11) DEFAULT NULL,
  `luasRuangRapat3` int(11) DEFAULT NULL,
  `kapasitasUshape3` int(11) DEFAULT NULL,
  `kapasitasClassRoom3` int(11) DEFAULT NULL,
  `kapasitasRoundTable3` int(11) DEFAULT NULL,
  `kapasitasTheatre3` int(11) DEFAULT NULL,
  `hargaUmumRapat4` int(11) DEFAULT NULL,
  `hargaPemerintahRapat4` int(11) DEFAULT NULL,
  `luasRuangRapat4` int(11) DEFAULT NULL,
  `kapasitasUshape4` int(11) DEFAULT NULL,
  `kapasitasClassRoom4` int(11) DEFAULT NULL,
  `kapasitasRoundTable4` int(11) DEFAULT NULL,
  `kapasitasTheatre4` int(11) DEFAULT NULL,
  `hargaUmumRapat5` int(11) DEFAULT NULL,
  `hargaPemerintahRapat5` int(11) DEFAULT NULL,
  `luasRuangRapat5` int(11) DEFAULT NULL,
  `kapasitasUshape5` int(11) DEFAULT NULL,
  `kapasitasClassRoom5` int(11) DEFAULT NULL,
  `kapasitasRoundTable5` int(11) DEFAULT NULL,
  `kapasitasTheatre5` int(11) DEFAULT NULL,
  `hargaUmumFullboardSingle` int(11) DEFAULT NULL,
  `hargaPemerintahFullboardSingle` int(11) DEFAULT NULL,
  `hargaUmumFullboardDouble` int(11) DEFAULT NULL,
  `hargaPemerintahFullboardDouble` int(11) DEFAULT NULL,
  `hargaUmumFullday` int(11) DEFAULT NULL,
  `hargaPemerintahFullday` int(11) DEFAULT NULL,
  `hargaUmumHalfday` int(11) DEFAULT NULL,
  `hargaPemerintahHalfday` int(11) DEFAULT NULL,
  `hargaUmumMakanperOrang` int(11) DEFAULT NULL,
  `hargaPemerintahMakanperOrang` int(11) DEFAULT NULL,
  `hargaUmumCoffeeperOrang` int(11) DEFAULT NULL,
  `hargaPemerintahCoffeeperOrang` int(11) DEFAULT NULL,
  `ruangPertemuan` int(11) DEFAULT NULL,
  `portableScreen` int(11) DEFAULT NULL,
  `hargaPortableScreen` int(11) DEFAULT NULL,
  `projector` int(11) DEFAULT NULL,
  `hargaProjector` int(11) DEFAULT NULL,
  `wifi` int(11) DEFAULT NULL,
  `hargaWifi` int(11) DEFAULT NULL,
  `parkir` int(11) DEFAULT NULL,
  `hargaParkir` int(11) DEFAULT NULL,
  `flipchart` int(11) DEFAULT NULL,
  `hargaFlipChart` int(11) DEFAULT NULL,
  `soundSystem` int(11) DEFAULT NULL,
  `hargaSoundSystem` int(11) DEFAULT NULL,
  `bukuCatatan` int(11) DEFAULT NULL,
  `hargaBukuCatatan` int(11) DEFAULT NULL,
  `executiver` int(11) DEFAULT NULL,
  `hargaExecutiver` int(11) DEFAULT NULL,
  `pickUp` int(11) DEFAULT NULL,
  `hargaPickUp` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiSLTP` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanSLTP` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiSLTP` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanSLTP` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiSLTP` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanSLTP` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiSLTP` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanSLTP` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiSMK` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanSMK` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiSMK` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanSMK` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiSMK` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanSMK` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiSMK` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanSMK` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiSMA` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanSMA` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiSMA` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanSMA` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiSMA` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanSMA` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiSMA` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanSMA` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiDIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanDIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiDIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanDIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiDIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanDIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiDIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanDIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiDILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanDILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiDILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanDILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiDILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanDILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiDILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanDILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiSIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanSIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiSIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanSIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiSIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanSIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiSIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanSIPariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiSILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanSILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiSILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanSILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiSILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanSILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiSILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanSILainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiS2Pariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanS2Pariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiS2Pariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanS2Pariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiS2Pariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanS2Pariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiS2Pariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanS2Pariwisata` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapLakiLakiS2Lainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTetapPerempuanS2Lainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapLakiLakiS2Lainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakTetapPerempuanS2Lainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarLakiLakiS2Lainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaTidakDibayarPerempuanS2Lainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangLakiLakiS2Lainnya` int(11) DEFAULT NULL,
  `jumlahPekerjaMagangPerempuanS2Lainnya` int(11) DEFAULT NULL,
  `jumlahWNILakiLakiGManager` int(11) DEFAULT NULL,
  `jumlahWNIPerempuanGManager` int(11) DEFAULT NULL,
  `jumlahWNALakiLakiGManager` int(11) DEFAULT NULL,
  `jumlahWNAPerempuanGManager` int(11) DEFAULT NULL,
  `jumlahSertifikasiLakiLakiGManager` int(11) DEFAULT NULL,
  `jumlahSertifikasiPerempuanGManager` int(11) DEFAULT NULL,
  `jumlahWNILakiLakiSLTPManager` int(11) DEFAULT NULL,
  `jumlahWNIPerempuanManager` int(11) DEFAULT NULL,
  `jumlahWNALakiLakiManager` int(11) DEFAULT NULL,
  `jumlahWNAPerempuanManager` int(11) DEFAULT NULL,
  `jumlahSertifikasiLakiLakiManager` int(11) DEFAULT NULL,
  `jumlahSertifikasiPerempuanManager` int(11) DEFAULT NULL,
  `jumlahWNILakiLakiAManager` int(11) DEFAULT NULL,
  `jumlahWNIPerempuanAManager` int(11) DEFAULT NULL,
  `jumlahWNALakiLakiAManager` int(11) DEFAULT NULL,
  `jumlahWNAPerempuanAManager` int(11) DEFAULT NULL,
  `jumlahSertifikasiLakiLakiAManager` int(11) DEFAULT NULL,
  `jumlahSertifikasiPerempuanAManager` int(11) DEFAULT NULL,
  `jumlahWNILakiLakiSupervisor` int(11) DEFAULT NULL,
  `jumlahWNIPerempuanSupervisor` int(11) DEFAULT NULL,
  `jumlahWNALakiLakiSupervisor` int(11) DEFAULT NULL,
  `jumlahWNAPerempuanSupervisor` int(11) DEFAULT NULL,
  `jumlahSertifikasiLakiLakiSupervisor` int(11) DEFAULT NULL,
  `jumlahSertifikasiPerempuanSupervisor` int(11) DEFAULT NULL,
  `jumlahWNILakiLakiTeknis` int(11) DEFAULT NULL,
  `jumlahWNIPerempuanTeknis` int(11) DEFAULT NULL,
  `jumlahWNALakiLakiTeknis` int(11) DEFAULT NULL,
  `jumlahWNAPerempuanTeknis` int(11) DEFAULT NULL,
  `jumlahSertifikasiLakiLakiTeknis` int(11) DEFAULT NULL,
  `jumlahSertifikasiPerempuanTeknis` int(11) DEFAULT NULL,
  `jumlahWNILakiLakiAdministrasi` int(11) DEFAULT NULL,
  `jumlahWNIPerempuanAdministrasi` int(11) DEFAULT NULL,
  `jumlahWNALakiLakiAdministrasi` int(11) DEFAULT NULL,
  `jumlahWNAPerempuanAdministrasi` int(11) DEFAULT NULL,
  `jumlahSertifikasiLakiLakiAdministrasi` int(11) DEFAULT NULL,
  `jumlahSertifikasiPerempuanAdministrasi` int(11) DEFAULT NULL,
  `jumlahWNILakiLakiLainnya` int(11) DEFAULT NULL,
  `jumlahWNIPerempuanLainnya` int(11) DEFAULT NULL,
  `jumlahWNALakiLakiLainnya` int(11) DEFAULT NULL,
  `jumlahWNAPerempuanLainnya` int(11) DEFAULT NULL,
  `jumlahSertifikasiLakiLakiLainnya` int(11) DEFAULT NULL,
  `jumlahSertifikasiPerempuanLainnya` int(11) DEFAULT NULL,
  `upah` int(11) DEFAULT NULL,
  `tunjangan` int(11) DEFAULT NULL,
  `bonus` int(11) DEFAULT NULL,
  `asuransi` int(11) DEFAULT NULL,
  `jamsos` int(11) DEFAULT NULL,
  `jaminanLainnya` int(11) DEFAULT NULL,
  `penyewaanKamar` int(11) DEFAULT NULL,
  `penjualanMakanMinum` int(11) DEFAULT NULL,
  `penyewaanRuangPertemuan` int(11) DEFAULT NULL,
  `penyewaanFasilitasLainnya` int(11) DEFAULT NULL,
  `menyewakanGedung` int(11) DEFAULT NULL,
  `menyewakanGudang` int(11) DEFAULT NULL,
  `penyewaanMesin` int(11) DEFAULT NULL,
  `royalti` int(11) DEFAULT NULL,
  `waralaba` int(11) DEFAULT NULL,
  `pendapatanLainnya` int(11) DEFAULT NULL,
  `bahanBakuMakanMinum` int(11) DEFAULT NULL,
  `pembelianMakanMinumSiapSaji` int(11) DEFAULT NULL,
  `pembelianBahanKimia` int(11) DEFAULT NULL,
  `biayaJasaCuci` int(11) DEFAULT NULL,
  `biayaAmenity` int(11) DEFAULT NULL,
  `banyakBBM` int(11) DEFAULT NULL,
  `hargaBBM` int(11) DEFAULT NULL,
  `banyakLPG` int(11) DEFAULT NULL,
  `hargaLPG` int(11) DEFAULT NULL,
  `banyakGas` int(11) DEFAULT NULL,
  `hargaGas` int(11) DEFAULT NULL,
  `hargaBahanBakarLain` int(11) DEFAULT NULL,
  `banyakPelumas` int(11) DEFAULT NULL,
  `hargaPelumas` int(11) DEFAULT NULL,
  `banyakListrik` int(11) DEFAULT NULL,
  `hargaListrik` int(11) DEFAULT NULL,
  `banyakMembeliAir` int(11) DEFAULT NULL,
  `hargaAir` int(11) DEFAULT NULL,
  `banyakTidakMembeli` int(11) DEFAULT NULL,
  `hargaRel` int(11) DEFAULT NULL,
  `hargaJalanRaya` int(11) DEFAULT NULL,
  `hargaUdata` int(11) DEFAULT NULL,
  `hargaLaut` int(11) DEFAULT NULL,
  `hargaSungai` int(11) DEFAULT NULL,
  `hargaPos` int(11) DEFAULT NULL,
  `hargaTelepon` int(11) DEFAULT NULL,
  `hargaATK` int(11) DEFAULT NULL,
  `hargaKertas` int(11) DEFAULT NULL,
  `hargaKimia` int(11) DEFAULT NULL,
  `hargaCD` int(11) DEFAULT NULL,
  `hargaPengepakan` int(11) DEFAULT NULL,
  `hargaSewaBangunan` int(11) DEFAULT NULL,
  `hargaSewaGudang` int(11) DEFAULT NULL,
  `hargaSewaInventarisKantor` int(11) DEFAULT NULL,
  `hargaSewaKendaraan` int(11) DEFAULT NULL,
  `hargaSewaMesin` int(11) DEFAULT NULL,
  `hargaPerbaikanBangunan` int(11) DEFAULT NULL,
  `hargaPerbaikanKendaraan` int(11) DEFAULT NULL,
  `hargaPerbaikanMesin` int(11) DEFAULT NULL,
  `hargaPerbaikanInventaris` int(11) DEFAULT NULL,
  `hargaUangSaku` int(11) DEFAULT NULL,
  `hargaPenginapan` int(11) DEFAULT NULL,
  `hargaTransportasi` int(11) DEFAULT NULL,
  `hargaPendidikan` int(11) DEFAULT NULL,
  `hargaPenelitianSendiri` int(11) DEFAULT NULL,
  `hargaPenelitianPihakDalam` int(11) DEFAULT NULL,
  `hargaPenelitianPihakAsing` int(11) DEFAULT NULL,
  `hargaTenagaAhliDalam` int(11) DEFAULT NULL,
  `hargaTenagaAhliAsing` int(11) DEFAULT NULL,
  `hargaAsuransiKerugian` int(11) DEFAULT NULL,
  `hargaPromosiIklan` int(11) DEFAULT NULL,
  `hargaJasaPerusahaanLainnya` int(11) DEFAULT NULL,
  `hargaPenyusutanBangunan` int(11) DEFAULT NULL,
  `hargaPenyusutanKendaraan` int(11) DEFAULT NULL,
  `hargaPenyusutanMesin` int(11) DEFAULT NULL,
  `hargaPenyusutanInventaris` int(11) DEFAULT NULL,
  `hargaPenyusutanAmortisasi` int(11) DEFAULT NULL,
  `hargaPBB` int(11) DEFAULT NULL,
  `hargaPKB` int(11) DEFAULT NULL,
  `hargaBBN` int(11) DEFAULT NULL,
  `hargaBEABalik` int(11) DEFAULT NULL,
  `hargaBEAImpor` int(11) DEFAULT NULL,
  `hargaBungaPinjaman` int(11) DEFAULT NULL,
  `hargaJasaKebersihan` int(11) DEFAULT NULL,
  `hargaJasaKeamanan` int(11) DEFAULT NULL,
  `hargaJasaSumbangan` int(11) DEFAULT NULL,
  `hargaPengolahanLimbah` int(11) DEFAULT NULL,
  `hargaWaralabaDalam` int(11) DEFAULT NULL,
  `hargaWaralabaAsing` int(11) DEFAULT NULL,
  `hargaRoyaltiDalam` int(11) DEFAULT NULL,
  `hargaRoyaltiAsing` int(11) DEFAULT NULL,
  `posisiAwalTahunBangunan` int(11) DEFAULT NULL,
  `penambahanBangunan` int(11) DEFAULT NULL,
  `penguranganBangunan` int(11) DEFAULT NULL,
  `posisiAwalTahunMesin` int(11) DEFAULT NULL,
  `penambahanMesin` int(11) DEFAULT NULL,
  `penguranganMesin` int(11) DEFAULT NULL,
  `posisiAwalTahunKendaraan` int(11) DEFAULT NULL,
  `penambahanKendaraan` int(11) DEFAULT NULL,
  `penguranganKendaraan` int(11) DEFAULT NULL,
  `posisiAwalTahunHdT` int(11) DEFAULT NULL,
  `penambahanHdT` int(11) DEFAULT NULL,
  `penguranganHdT` int(11) DEFAULT NULL,
  `posisiAwalTahunPKI` int(11) DEFAULT NULL,
  `penambahanPKI` int(11) DEFAULT NULL,
  `penguranganPKI` int(11) DEFAULT NULL,
  `posisiAwalTahunLainnya` int(11) DEFAULT NULL,
  `penambahanLainnya` int(11) DEFAULT NULL,
  `penguranganLainnya` int(11) NOT NULL,
  `volumeBeras` int(11) DEFAULT NULL,
  `nilaiBeras` int(11) DEFAULT NULL,
  `volumeBerasKetan` int(11) DEFAULT NULL,
  `nilaiBerasKetan` int(11) DEFAULT NULL,
  `volumeTepungBeras` int(11) DEFAULT NULL,
  `nilaiTepungBeras` int(11) DEFAULT NULL,
  `volumeDagingSegar` int(11) DEFAULT NULL,
  `nilaiDagingSegar` int(11) DEFAULT NULL,
  `volumeDagingBeku` int(11) DEFAULT NULL,
  `nilaiDagingBeku` int(11) DEFAULT NULL,
  `volumeTetelan` int(11) DEFAULT NULL,
  `nilaiTetelan` int(11) DEFAULT NULL,
  `volumeTulangIga` int(11) DEFAULT NULL,
  `nilaiTulangIga` int(11) DEFAULT NULL,
  `volumeAyamRas` int(11) DEFAULT NULL,
  `nilaiAyamRas` int(11) DEFAULT NULL,
  `volumeAyamKampung` int(11) DEFAULT NULL,
  `nilaiAyamKampung` int(11) DEFAULT NULL,
  `volumeTelurRas` int(11) DEFAULT NULL,
  `nilaiTelurRas` int(11) DEFAULT NULL,
  `volumeTelurBebek` int(11) DEFAULT NULL,
  `nilaiTelurBebek` int(11) DEFAULT NULL,
  `volumeTuna` int(11) DEFAULT NULL,
  `nilaiTuna` int(11) DEFAULT NULL,
  `volumeLele` int(11) DEFAULT NULL,
  `nilaiLele` int(11) DEFAULT NULL,
  `volumeNila` int(11) DEFAULT NULL,
  `nilaiNila` int(11) DEFAULT NULL,
  `volumeKembung` int(11) DEFAULT NULL,
  `nilaiKembung` int(11) DEFAULT NULL,
  `volumeBandeng` int(11) DEFAULT NULL,
  `nilaiBandeng` int(11) DEFAULT NULL,
  `volumeMujair` int(11) DEFAULT NULL,
  `nilaiMujair` int(11) DEFAULT NULL,
  `volumeIkanLain` int(11) DEFAULT NULL,
  `nilaiIkanLain` int(11) DEFAULT NULL,
  `volumeHewanAir` int(11) DEFAULT NULL,
  `nilaiHewanAir` int(11) DEFAULT NULL,
  `kepemilikanWNI` int(11) DEFAULT NULL,
  `kepemilikanWNA` int(11) DEFAULT NULL,
  `negaraTempatTinggal` varchar(100) DEFAULT NULL,
  `kebangsaan` varchar(100) DEFAULT NULL,
  `ramahLingkungan` int(11) DEFAULT NULL,
  `konsep3R` int(11) DEFAULT NULL,
  `pengolahanLimbah` int(11) DEFAULT NULL,
  `sistemAirBersih` int(11) DEFAULT NULL,
  `catatan` varchar(200) DEFAULT NULL,
  `namaPemberiJawaban` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `nomorTelepon` varchar(20) DEFAULT NULL,
  `tanggalPengesahan` date DEFAULT NULL,
  `ttdPemberiJawaban` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`id_survei`, `id_job_desc`, `status_survei`, `ttd_petugas`, `klasifikasiUsaha`, `jenisIzin`, `sertifikasi`, `anggotaAsosiasi`, `asosiasi`, `saranaPromosi`, `sertifikasiSyariah`, `jenisSertifikasiSyariah`, `statusPengelolaanUsaha`, `namaGroupPengelolaanUsaha`, `ifOnline`, `saranaPenjualan`, `caraPembayaran`, `agoda`, `bookingcom`, `traveloka`, `oyo`, `airbnb`, `airy`, `reddoorz`, `kamarLainnya`, `banyakKamarStandar`, `banyakTempatTidurStandar`, `kapasitasStandar`, `hargaSingleUmumStandar`, `hargaDoubleUmumStandar`, `hargaSinglePemerintahStandar`, `hargaDoublePemerintahStandar`, `banyakKamarSuperior`, `banyakTempatTidurSuperior`, `kapasitasSuperior`, `hargaSingleUmumSuperior`, `hargaDoubleUmumSuperior`, `hargaSinglePemerintahSuperior`, `hargaDoublePemerintahSuperior`, `banyakKamarDeluxe`, `banyakTempatTidurDouble`, `kapasitasDeluxe`, `hargaSingleUmumDeluxe`, `hargaDoubleUmumDeluxe`, `hargaSinglePemerintahDeluxe`, `hargaDoublePemerintahDeluxe`, `banyakKamarJunior`, `banyakTempatTidurJunior`, `kapasitasJunior`, `hargaSingleUmumJunior`, `hargaDoubleUmumJunior`, `hargaSinglePemerintahJunior`, `hargaDoublePemerintahJunior`, `banyakKamarSuite`, `banyakTempatTidurSuite`, `kapasitasSuite`, `hargaSingleUmumSuite`, `hargaDoubleUmumSuite`, `hargaSinglePemerintahSuite`, `hargaDoublePemerintahSuite`, `banyakKamarPresident`, `banyakTempatTidurPresident`, `kapasitasPresident`, `hargaSingleUmumPresident`, `hargaDoubleUmumPresident`, `hargaSinglePemerintahPresident`, `hargaDoublePemerintahPresident`, `hargaUmumRapat1`, `hargaPemerintahRapat1`, `luasRuangRapat1`, `kapasitasUshape1`, `kapasitasClassRoom1`, `kapasitasRoundTable1`, `kapasitasTheatre1`, `hargaUmumRapat2`, `hargaPemerintahRapat2`, `luasRuangRapat2`, `kapasitasUshape2`, `kapasitasClassRoom2`, `kapasitasRoundTable2`, `kapasitasTheatre2`, `hargaUmumRapat3`, `hargaPemerintahRapat3`, `luasRuangRapat3`, `kapasitasUshape3`, `kapasitasClassRoom3`, `kapasitasRoundTable3`, `kapasitasTheatre3`, `hargaUmumRapat4`, `hargaPemerintahRapat4`, `luasRuangRapat4`, `kapasitasUshape4`, `kapasitasClassRoom4`, `kapasitasRoundTable4`, `kapasitasTheatre4`, `hargaUmumRapat5`, `hargaPemerintahRapat5`, `luasRuangRapat5`, `kapasitasUshape5`, `kapasitasClassRoom5`, `kapasitasRoundTable5`, `kapasitasTheatre5`, `hargaUmumFullboardSingle`, `hargaPemerintahFullboardSingle`, `hargaUmumFullboardDouble`, `hargaPemerintahFullboardDouble`, `hargaUmumFullday`, `hargaPemerintahFullday`, `hargaUmumHalfday`, `hargaPemerintahHalfday`, `hargaUmumMakanperOrang`, `hargaPemerintahMakanperOrang`, `hargaUmumCoffeeperOrang`, `hargaPemerintahCoffeeperOrang`, `ruangPertemuan`, `portableScreen`, `hargaPortableScreen`, `projector`, `hargaProjector`, `wifi`, `hargaWifi`, `parkir`, `hargaParkir`, `flipchart`, `hargaFlipChart`, `soundSystem`, `hargaSoundSystem`, `bukuCatatan`, `hargaBukuCatatan`, `executiver`, `hargaExecutiver`, `pickUp`, `hargaPickUp`, `jumlahPekerjaTetapLakiLakiSLTP`, `jumlahPekerjaTetapPerempuanSLTP`, `jumlahPekerjaTidakTetapLakiLakiSLTP`, `jumlahPekerjaTidakTetapPerempuanSLTP`, `jumlahPekerjaTidakDibayarLakiLakiSLTP`, `jumlahPekerjaTidakDibayarPerempuanSLTP`, `jumlahPekerjaMagangLakiLakiSLTP`, `jumlahPekerjaMagangPerempuanSLTP`, `jumlahPekerjaTetapLakiLakiSMK`, `jumlahPekerjaTetapPerempuanSMK`, `jumlahPekerjaTidakTetapLakiLakiSMK`, `jumlahPekerjaTidakTetapPerempuanSMK`, `jumlahPekerjaTidakDibayarLakiLakiSMK`, `jumlahPekerjaTidakDibayarPerempuanSMK`, `jumlahPekerjaMagangLakiLakiSMK`, `jumlahPekerjaMagangPerempuanSMK`, `jumlahPekerjaTetapLakiLakiSMA`, `jumlahPekerjaTetapPerempuanSMA`, `jumlahPekerjaTidakTetapLakiLakiSMA`, `jumlahPekerjaTidakTetapPerempuanSMA`, `jumlahPekerjaTidakDibayarLakiLakiSMA`, `jumlahPekerjaTidakDibayarPerempuanSMA`, `jumlahPekerjaMagangLakiLakiSMA`, `jumlahPekerjaMagangPerempuanSMA`, `jumlahPekerjaTetapLakiLakiDIPariwisata`, `jumlahPekerjaTetapPerempuanDIPariwisata`, `jumlahPekerjaTidakTetapLakiLakiDIPariwisata`, `jumlahPekerjaTidakTetapPerempuanDIPariwisata`, `jumlahPekerjaTidakDibayarLakiLakiDIPariwisata`, `jumlahPekerjaTidakDibayarPerempuanDIPariwisata`, `jumlahPekerjaMagangLakiLakiDIPariwisata`, `jumlahPekerjaMagangPerempuanDIPariwisata`, `jumlahPekerjaTetapLakiLakiDILainnya`, `jumlahPekerjaTetapPerempuanDILainnya`, `jumlahPekerjaTidakTetapLakiLakiDILainnya`, `jumlahPekerjaTidakTetapPerempuanDILainnya`, `jumlahPekerjaTidakDibayarLakiLakiDILainnya`, `jumlahPekerjaTidakDibayarPerempuanDILainnya`, `jumlahPekerjaMagangLakiLakiDILainnya`, `jumlahPekerjaMagangPerempuanDILainnya`, `jumlahPekerjaTetapLakiLakiSIPariwisata`, `jumlahPekerjaTetapPerempuanSIPariwisata`, `jumlahPekerjaTidakTetapLakiLakiSIPariwisata`, `jumlahPekerjaTidakTetapPerempuanSIPariwisata`, `jumlahPekerjaTidakDibayarLakiLakiSIPariwisata`, `jumlahPekerjaTidakDibayarPerempuanSIPariwisata`, `jumlahPekerjaMagangLakiLakiSIPariwisata`, `jumlahPekerjaMagangPerempuanSIPariwisata`, `jumlahPekerjaTetapLakiLakiSILainnya`, `jumlahPekerjaTetapPerempuanSILainnya`, `jumlahPekerjaTidakTetapLakiLakiSILainnya`, `jumlahPekerjaTidakTetapPerempuanSILainnya`, `jumlahPekerjaTidakDibayarLakiLakiSILainnya`, `jumlahPekerjaTidakDibayarPerempuanSILainnya`, `jumlahPekerjaMagangLakiLakiSILainnya`, `jumlahPekerjaMagangPerempuanSILainnya`, `jumlahPekerjaTetapLakiLakiS2Pariwisata`, `jumlahPekerjaTetapPerempuanS2Pariwisata`, `jumlahPekerjaTidakTetapLakiLakiS2Pariwisata`, `jumlahPekerjaTidakTetapPerempuanS2Pariwisata`, `jumlahPekerjaTidakDibayarLakiLakiS2Pariwisata`, `jumlahPekerjaTidakDibayarPerempuanS2Pariwisata`, `jumlahPekerjaMagangLakiLakiS2Pariwisata`, `jumlahPekerjaMagangPerempuanS2Pariwisata`, `jumlahPekerjaTetapLakiLakiS2Lainnya`, `jumlahPekerjaTetapPerempuanS2Lainnya`, `jumlahPekerjaTidakTetapLakiLakiS2Lainnya`, `jumlahPekerjaTidakTetapPerempuanS2Lainnya`, `jumlahPekerjaTidakDibayarLakiLakiS2Lainnya`, `jumlahPekerjaTidakDibayarPerempuanS2Lainnya`, `jumlahPekerjaMagangLakiLakiS2Lainnya`, `jumlahPekerjaMagangPerempuanS2Lainnya`, `jumlahWNILakiLakiGManager`, `jumlahWNIPerempuanGManager`, `jumlahWNALakiLakiGManager`, `jumlahWNAPerempuanGManager`, `jumlahSertifikasiLakiLakiGManager`, `jumlahSertifikasiPerempuanGManager`, `jumlahWNILakiLakiSLTPManager`, `jumlahWNIPerempuanManager`, `jumlahWNALakiLakiManager`, `jumlahWNAPerempuanManager`, `jumlahSertifikasiLakiLakiManager`, `jumlahSertifikasiPerempuanManager`, `jumlahWNILakiLakiAManager`, `jumlahWNIPerempuanAManager`, `jumlahWNALakiLakiAManager`, `jumlahWNAPerempuanAManager`, `jumlahSertifikasiLakiLakiAManager`, `jumlahSertifikasiPerempuanAManager`, `jumlahWNILakiLakiSupervisor`, `jumlahWNIPerempuanSupervisor`, `jumlahWNALakiLakiSupervisor`, `jumlahWNAPerempuanSupervisor`, `jumlahSertifikasiLakiLakiSupervisor`, `jumlahSertifikasiPerempuanSupervisor`, `jumlahWNILakiLakiTeknis`, `jumlahWNIPerempuanTeknis`, `jumlahWNALakiLakiTeknis`, `jumlahWNAPerempuanTeknis`, `jumlahSertifikasiLakiLakiTeknis`, `jumlahSertifikasiPerempuanTeknis`, `jumlahWNILakiLakiAdministrasi`, `jumlahWNIPerempuanAdministrasi`, `jumlahWNALakiLakiAdministrasi`, `jumlahWNAPerempuanAdministrasi`, `jumlahSertifikasiLakiLakiAdministrasi`, `jumlahSertifikasiPerempuanAdministrasi`, `jumlahWNILakiLakiLainnya`, `jumlahWNIPerempuanLainnya`, `jumlahWNALakiLakiLainnya`, `jumlahWNAPerempuanLainnya`, `jumlahSertifikasiLakiLakiLainnya`, `jumlahSertifikasiPerempuanLainnya`, `upah`, `tunjangan`, `bonus`, `asuransi`, `jamsos`, `jaminanLainnya`, `penyewaanKamar`, `penjualanMakanMinum`, `penyewaanRuangPertemuan`, `penyewaanFasilitasLainnya`, `menyewakanGedung`, `menyewakanGudang`, `penyewaanMesin`, `royalti`, `waralaba`, `pendapatanLainnya`, `bahanBakuMakanMinum`, `pembelianMakanMinumSiapSaji`, `pembelianBahanKimia`, `biayaJasaCuci`, `biayaAmenity`, `banyakBBM`, `hargaBBM`, `banyakLPG`, `hargaLPG`, `banyakGas`, `hargaGas`, `hargaBahanBakarLain`, `banyakPelumas`, `hargaPelumas`, `banyakListrik`, `hargaListrik`, `banyakMembeliAir`, `hargaAir`, `banyakTidakMembeli`, `hargaRel`, `hargaJalanRaya`, `hargaUdata`, `hargaLaut`, `hargaSungai`, `hargaPos`, `hargaTelepon`, `hargaATK`, `hargaKertas`, `hargaKimia`, `hargaCD`, `hargaPengepakan`, `hargaSewaBangunan`, `hargaSewaGudang`, `hargaSewaInventarisKantor`, `hargaSewaKendaraan`, `hargaSewaMesin`, `hargaPerbaikanBangunan`, `hargaPerbaikanKendaraan`, `hargaPerbaikanMesin`, `hargaPerbaikanInventaris`, `hargaUangSaku`, `hargaPenginapan`, `hargaTransportasi`, `hargaPendidikan`, `hargaPenelitianSendiri`, `hargaPenelitianPihakDalam`, `hargaPenelitianPihakAsing`, `hargaTenagaAhliDalam`, `hargaTenagaAhliAsing`, `hargaAsuransiKerugian`, `hargaPromosiIklan`, `hargaJasaPerusahaanLainnya`, `hargaPenyusutanBangunan`, `hargaPenyusutanKendaraan`, `hargaPenyusutanMesin`, `hargaPenyusutanInventaris`, `hargaPenyusutanAmortisasi`, `hargaPBB`, `hargaPKB`, `hargaBBN`, `hargaBEABalik`, `hargaBEAImpor`, `hargaBungaPinjaman`, `hargaJasaKebersihan`, `hargaJasaKeamanan`, `hargaJasaSumbangan`, `hargaPengolahanLimbah`, `hargaWaralabaDalam`, `hargaWaralabaAsing`, `hargaRoyaltiDalam`, `hargaRoyaltiAsing`, `posisiAwalTahunBangunan`, `penambahanBangunan`, `penguranganBangunan`, `posisiAwalTahunMesin`, `penambahanMesin`, `penguranganMesin`, `posisiAwalTahunKendaraan`, `penambahanKendaraan`, `penguranganKendaraan`, `posisiAwalTahunHdT`, `penambahanHdT`, `penguranganHdT`, `posisiAwalTahunPKI`, `penambahanPKI`, `penguranganPKI`, `posisiAwalTahunLainnya`, `penambahanLainnya`, `penguranganLainnya`, `volumeBeras`, `nilaiBeras`, `volumeBerasKetan`, `nilaiBerasKetan`, `volumeTepungBeras`, `nilaiTepungBeras`, `volumeDagingSegar`, `nilaiDagingSegar`, `volumeDagingBeku`, `nilaiDagingBeku`, `volumeTetelan`, `nilaiTetelan`, `volumeTulangIga`, `nilaiTulangIga`, `volumeAyamRas`, `nilaiAyamRas`, `volumeAyamKampung`, `nilaiAyamKampung`, `volumeTelurRas`, `nilaiTelurRas`, `volumeTelurBebek`, `nilaiTelurBebek`, `volumeTuna`, `nilaiTuna`, `volumeLele`, `nilaiLele`, `volumeNila`, `nilaiNila`, `volumeKembung`, `nilaiKembung`, `volumeBandeng`, `nilaiBandeng`, `volumeMujair`, `nilaiMujair`, `volumeIkanLain`, `nilaiIkanLain`, `volumeHewanAir`, `nilaiHewanAir`, `kepemilikanWNI`, `kepemilikanWNA`, `negaraTempatTinggal`, `kebangsaan`, `ramahLingkungan`, `konsep3R`, `pengolahanLimbah`, `sistemAirBersih`, `catatan`, `namaPemberiJawaban`, `jabatan`, `nomorTelepon`, `tanggalPengesahan`, `ttdPemberiJawaban`) VALUES
(1, 5, 0, 'http://localhost/akomodasi/upload/ttd/1.PNG', 6, 1, 2, 1, 1, '1,3,4', 1, 1, 2, 'group', 1, 2, 5, 10, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 180, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 10000, 1, 0, 1, 0, 1, 0, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 2, 1, 1, 2, '', '', '', '', '0000-00-00', NULL),
(2, 6, 0, NULL, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `job_desc`
--
ALTER TABLE `job_desc`
  ADD PRIMARY KEY (`id_job_desc`);

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
-- AUTO_INCREMENT for table `blok1_pengenalan_tempat`
--
ALTER TABLE `blok1_pengenalan_tempat`
  MODIFY `id_blok1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_desc`
--
ALTER TABLE `job_desc`
  MODIFY `id_job_desc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 20, 2022 at 08:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `namaObat` varchar(255) NOT NULL,
  `hargaObat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `namaObat`, `hargaObat`) VALUES
(5, 'panadol', 5000),
(7, 'tramadol', 5000),
(8, 'paramex', 7000),
(12, 'paracetamol', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `poli` varchar(255) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `tanggalLahir`, `tempatlahir`, `umur`, `jeniskelamin`, `alamat`, `poli`, `keluhan`) VALUES
(1, 'ahmad sahroni', '2016-04-08', 'Bandung', '6 tahun', 'laki-laki', 'kopo, bandung, jawa barat, indonesia', 'poli anak', 'mengalami demam tinggi dari beberapa hari yang lalu, tidak nafsu makan, dan gangguan pencernaan'),
(2, 'aldi alfarizi', '1999-04-27', 'BANDUNG', '23 tahun', 'laki-laki', 'ciwidey rancabali, kabupaten bandung, jawa barat', 'poli gigi', 'mengalami pembengkakan diarea gusi sebelah kanan bawah');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idBayar` char(20) NOT NULL,
  `idObat` int(10) NOT NULL,
  `totalBayar` varchar(255) NOT NULL,
  `status` enum('BELUM LUNAS','LUNAS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idBayar`, `idObat`, `totalBayar`, `status`) VALUES
('12942348946211e3d8df', 7, '50000', 'LUNAS'),
('17958586136211e3f29a', 8, '52000', 'LUNAS'),
('7264859056211e6dd6cd', 7, '50000', 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id` char(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `idObat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id`, `nama`, `keluhan`, `tindakan`, `idObat`) VALUES
('12942348946211e3d8df', 'ahmad sahroni', 'Sakit pinggang', 'Minum obat', 7),
('17958586136211e3f29a', 'aldi alfarizi', 'Sakit perut', 'Makan', 8),
('7264859056211e6dd6cd', 'ahmad sahroni', 'a', 'a', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(30, 'nova rizky', 'nova', 'nova12345', 'user'),
(31, 'ahmad nur', 'ahmad', 'ahmad12345', 'pegawai'),
(32, 'rohmat saroni', 'rohmat', 'rohmat12345', 'dokter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idBayar`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

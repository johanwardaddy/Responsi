-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2017 at 11:37 AM
-- Server version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HMJ_TI_Bebdahara`
--

-- --------------------------------------------------------

--
-- Table structure for table `lap_ph`
--

CREATE TABLE `lap_ph` (
  `NPK` varchar(25) NOT NULL,
  `nominal` double NOT NULL,
  `aksi` varchar(20) NOT NULL,
  `saldo_saat_itu` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lap_ph`
--

INSERT INTO `lap_ph` (`NPK`, `nominal`, `aksi`, `saldo_saat_itu`, `tanggal`) VALUES
('HMJ/TI/XIII/15-16/204', 5000, 'kurang', 0, '0000-00-00'),
('HMJ/TI/XIII/15-16/204', 5000, 'tambah', 0, '2017-10-16'),
('HMJ/TI/XIII/15-16/204', 5000, 'tambah', 0, '2017-10-16'),
('HMJ/TI/XIII/15-16/204', 10000, 'tambah sal', 230000, '2017-10-16'),
('HMJ/TI/XIII/15-16/205', 50000, 'tambah saldo', 49000, '2017-10-16'),
('HMJ/TI/XIII/15-16/205', 5000, 'ambil saldo', 44000, '2017-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan_hmj`
--

CREATE TABLE `pemasukan_hmj` (
  `id_masuk` int(5) NOT NULL,
  `saldo_masuk` double NOT NULL,
  `asal_masuk` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `saldo_saat_itu` double NOT NULL,
  `dari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukan_hmj`
--

INSERT INTO `pemasukan_hmj` (`id_masuk`, `saldo_masuk`, `asal_masuk`, `tanggal_masuk`, `saldo_saat_itu`, `dari`) VALUES
(1, 400000, 'maroon day', '2017-10-02', 0, ''),
(2, 300000, 'bazar buku', '2017-10-04', 0, ''),
(4, 300000, 'uang DPL', '2017-10-09', 0, ''),
(5, 40000, 'irfangi', '2017-10-09', 0, ''),
(6, 20000, 'orang kaya', '2017-10-09', 6400000, ''),
(7, 30000, 'irfangi', '2017-10-09', 6450000, ''),
(8, 400000, 'maroon day', '2017-10-10', 6600000, ''),
(9, 500000, 'baksos', '2017-10-10', 7000000, 'NETWOKING'),
(10, 1000000, 'maroon day', '2017-10-11', 7925000, 'SKIL DEVELOPMENT'),
(11, 50000, 'irfangi', '2017-10-12', 7675000, 'NETWOKING'),
(12, 500000, 'maronday 17', '2017-10-13', 8075000, 'SKIL DEVELOPMENT'),
(13, 4000, 'alumni', '2017-10-16', 8079000, 'Lain-Lain');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_hmj`
--

CREATE TABLE `pengeluaran_hmj` (
  `id_keluar` int(5) NOT NULL,
  `saldo_keluar` double NOT NULL,
  `guna_keluar` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `saldo_saat_itu` double NOT NULL,
  `dari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran_hmj`
--

INSERT INTO `pengeluaran_hmj` (`id_keluar`, `saldo_keluar`, `guna_keluar`, `tgl_keluar`, `saldo_saat_itu`, `dari`) VALUES
(1, 100000, 'kulum', '2017-10-04', 0, ''),
(2, 500000, 'mubes', '2017-10-08', 0, ''),
(3, 50000, 'beli roti', '2017-10-09', 6400000, ''),
(4, 200000, 'makan makan', '2017-10-09', 6200000, ''),
(5, 100000, 'kulum 2017', '2017-10-10', 6500000, ''),
(6, 5000, 'baksos', '2017-10-10', 6995000, 'dari'),
(7, 70000, 'makan bersama', '2017-10-10', 6925000, 'INTERNAL'),
(8, 300000, 'maroon day', '2017-10-11', 7625000, 'SKIL DEVELOPMENT'),
(9, 100000, 'beli galon', '2017-10-12', 7575000, 'SKIL DEVELOPMENT');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_ph`
--

CREATE TABLE `pengeluaran_ph` (
  `id_keluar_ph` int(5) NOT NULL,
  `saldo_keluar_ph` double NOT NULL,
  `guna_keluar_ph` varchar(50) NOT NULL,
  `tanggal_keluar_ph` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran_ph`
--

INSERT INTO `pengeluaran_ph` (`id_keluar_ph`, `saldo_keluar_ph`, `guna_keluar_ph`, `tanggal_keluar_ph`) VALUES
(1, 1000, 'fdfdf', '2017-10-10'),
(2, 1000, 'makan', '2017-10-10'),
(3, 1000, 'makan', '2017-10-10'),
(4, 40000, 'makan bersama', '2017-10-10'),
(5, 3000, 'saur', '2017-10-10'),
(6, 5000, 'beli galon', '2017-10-10'),
(7, 8000, 'beli galon', '2017-10-10'),
(8, 6000, 'beli galon', '2017-10-11'),
(9, 5000, 'ggggg', '2017-10-12'),
(10, 2000, 'makan', '2017-10-12'),
(11, 2000, 'ererer', '2017-10-12'),
(12, 10000, 'kekek', '2017-10-12'),
(13, 2000, 'rerere', '2017-10-12'),
(14, 10000, 'yuyuyuy', '2017-10-12'),
(15, 2000, 'wewe', '2017-10-12'),
(16, 4000, 'rtrtrt', '2017-10-12'),
(17, 4000, 'makan', '2017-10-12'),
(18, 2000, 'combro', '2017-10-12'),
(19, 9000, 'galon', '2017-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tab` varchar(3) NOT NULL,
  `saldo_tab` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id_tab`, `saldo_tab`) VALUES
('X2b', 8079000);

-- --------------------------------------------------------

--
-- Table structure for table `tabungan_PH`
--

CREATE TABLE `tabungan_PH` (
  `NPK` varchar(25) NOT NULL,
  `saldo_ph` double NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabungan_PH`
--

INSERT INTO `tabungan_PH` (`NPK`, `saldo_ph`, `nama`) VALUES
('HMJ/TI/XIII/15-16/204', 225000, 'Irfangi'),
('HMJ/TI/XIII/15-16/205', 39000, 'gepeng'),
('HMJ/TI/XIII/15-16/206', 137000, 'gawa');

-- --------------------------------------------------------

--
-- Table structure for table `uang_ph_dipakai`
--

CREATE TABLE `uang_ph_dipakai` (
  `id_saldo_pakai` int(5) NOT NULL,
  `saldo_pakai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uang_ph_dipakai`
--

INSERT INTO `uang_ph_dipakai` (`id_saldo_pakai`, `saldo_pakai`) VALUES
(212, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `wong`
--

CREATE TABLE `wong` (
  `jeneng` varchar(8) NOT NULL,
  `muzmet` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wong`
--

INSERT INTO `wong` (`jeneng`, `muzmet`) VALUES
('siUnyil', 'unyil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemasukan_hmj`
--
ALTER TABLE `pemasukan_hmj`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `pengeluaran_hmj`
--
ALTER TABLE `pengeluaran_hmj`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `pengeluaran_ph`
--
ALTER TABLE `pengeluaran_ph`
  ADD PRIMARY KEY (`id_keluar_ph`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id_tab`);

--
-- Indexes for table `tabungan_PH`
--
ALTER TABLE `tabungan_PH`
  ADD PRIMARY KEY (`NPK`);

--
-- Indexes for table `uang_ph_dipakai`
--
ALTER TABLE `uang_ph_dipakai`
  ADD PRIMARY KEY (`id_saldo_pakai`);

--
-- Indexes for table `wong`
--
ALTER TABLE `wong`
  ADD PRIMARY KEY (`jeneng`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemasukan_hmj`
--
ALTER TABLE `pemasukan_hmj`
  MODIFY `id_masuk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pengeluaran_hmj`
--
ALTER TABLE `pengeluaran_hmj`
  MODIFY `id_keluar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengeluaran_ph`
--
ALTER TABLE `pengeluaran_ph`
  MODIFY `id_keluar_ph` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

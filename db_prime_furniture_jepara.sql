-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2018 at 02:00 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prime_furniture_jepara`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dibeli`
--

CREATE TABLE `tbl_dibeli` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dibeli`
--

INSERT INTO `tbl_dibeli` (`id`, `nama_pembeli`, `jumlah`, `nama`, `harga`, `subtotal`) VALUES
(1, 'donyhermawan@gmail.com', 10, 'Minimalis 02', '600,000,000.00', '6,000,000,000.00'),
(2, 'donyhermawan@gmail.com', 1, 'Minimalis 01', '3,000,000.00', '3,000,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_katagori`
--

CREATE TABLE `tbl_katagori` (
  `id` int(11) NOT NULL,
  `nama_katagori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_katagori`
--

INSERT INTO `tbl_katagori` (`id`, `nama_katagori`) VALUES
(1, 'Almari Hias'),
(2, 'Almari Pakaian'),
(3, 'Peralatan Dapur'),
(4, 'Dipan'),
(5, 'Kursi'),
(6, 'Kursi Tamu Sofa'),
(7, 'Kursi Teras'),
(8, 'Meja Rias'),
(9, 'Minimalis'),
(10, 'Peralatan Outdoor'),
(11, 'Buffet'),
(12, 'Cermin'),
(13, 'Meja Makan'),
(14, 'Peralatan Masjid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembeli`
--

CREATE TABLE `tbl_pembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `j_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `rt_rw` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembeli`
--

INSERT INTO `tbl_pembeli` (`id`, `nama`, `j_kelamin`, `propinsi`, `kabupaten`, `kecamatan`, `desa`, `rt_rw`, `no_hp`, `email`, `tanggal`, `kode`) VALUES
(1, 'donyhermawan', 'laki-laki', 'jawa tengah', 'jepara', 'bantul', 'karanggondang', '04/08', '085225996332', 'donyhermawan@gmail.com', '2017-12-24 06:18:16', '1514096296');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengerjaan`
--

CREATE TABLE `tbl_pengerjaan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_pengerjaan` enum('Pemilihan Bahan','Pengerjaan Produk','Penyemprotan Produk','Pengriman Produk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `perataan` varchar(100) NOT NULL,
  `bg_warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `katagori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `kode`, `nama`, `katagori`, `harga`, `gambar`) VALUES
(6, 'MN01', 'Minimalis 01', 'Minimalis', 3000000, '1bca0d1914b27f1a8278a12940fd0d84.jpg'),
(7, 'MN02', 'Minimalis 02', 'Minimalis', 600000000, 'aaa8b3072e50462ecd8c1d6597d1658a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'BambangDwiHartono', '5fcb50372cea67d79b3de9a35a7196f9'),
(2, 'donyhermawan', '77ee6d05b23e742e2aca3fd602f4c599'),
(3, 'mudlofarjaelani', 'f2cd7b3be893dfa09ba153f411f70da4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dibeli`
--
ALTER TABLE `tbl_dibeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_katagori`
--
ALTER TABLE `tbl_katagori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengerjaan`
--
ALTER TABLE `tbl_pengerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dibeli`
--
ALTER TABLE `tbl_dibeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_katagori`
--
ALTER TABLE `tbl_katagori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pengerjaan`
--
ALTER TABLE `tbl_pengerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 10:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elim_flower`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `kd_karyawan` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `kd_karyawan`, `username`, `password`, `level`) VALUES
(1, 'K0001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'K0002', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(3, 'K0003', 'dilla', 'dilla', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` varchar(5) NOT NULL,
  `nama_kurir` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `alamat`, `no_tlp`) VALUES
('K0001', 'Azam', 'Depok', '087787672312'),
('K0002', 'Akram', 'Lenteng Agung', '083867675423'),
('K0003', 'Edit', 'Jakarta', '081265983426'),
('K0004', 'Naufal', 'Beji, Depok', '081256878890'),
('K0005', 'Rizki', 'Jakarta', '089956784454'),
('K0006', 'Udin ', 'Payakumuh', '081999977676');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(5) NOT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_depan`, `nama_belakang`, `alamat`, `no_hp`, `email`) VALUES
('1', 'Rifdah', 'Neta', 'Damai', '0857654635', 'rifdah@gmail.com'),
('PL001', 'Atika', 'Lubis', 'Lenteng Agung', '082272596243', 'atikalubis07@gmail.com'),
('PL002', 'Diana ', 'Ambarwati', 'Citayem', '081234657812', 'dianaambar12@gmail.com'),
('PL003', 'Intan', 'Yoshana', 'Cinere', '087726549813', 'intanyosh34@gmail.com'),
('PL004', 'Indah', 'Widya', 'Depok', '081978567897', 'cahayanur@gmail.com'),
('PL005', 'Fiqih', 'Lubis', 'Bogor', '081243569900', 'adegaff28@gmail.com'),
('PL006', 'Nadella', 'Amelia', 'Beji', '0857654635', 'nadella@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(8) NOT NULL,
  `jumlah_barang` int(3) DEFAULT NULL,
  `total_bayar` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `kd_tanaman` varchar(5) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `gambar` blob NOT NULL,
  `jenis_tanaman` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`kd_tanaman`, `nama_tanaman`, `gambar`, `jenis_tanaman`, `stok`, `harga`) VALUES
('1', '1', 0x62616a752e6a7067, '1', 1, 1),
('2', '2', 0x62616a752e6a7067, '2', 2, 2),
('TB002', 'Bunga Keladi', 0x62616a752e6a7067, 'Bunga', 50, 20000),
('TB003', 'Bunga Mawar', 0x62616a752e6a7067, 'Bunga', 200, 85000),
('TP001', 'Pohon Cemara', 0x62616a752e6a7067, 'Pohon', 35, 350000),
('TP002', 'Bibit Rambutan', 0x62616a752e6a7067, 'Pohon', 100, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_transaksi` int(5) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_bayar` int(10) NOT NULL,
  `kd_pelanggan` varchar(5) NOT NULL,
  `kd_tanaman` varchar(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kd_transaksi`, `tgl_transaksi`, `total_bayar`, `kd_pelanggan`, `kd_tanaman`, `harga`, `qty`) VALUES
(1, '2018-04-20', 40000, '2', 'TB002', 20000, 2),
(2, '2018-04-21', 170000, '2', 'TB003', 85000, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`kd_tanaman`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 07:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsolminkopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jenis_menu` varchar(15) NOT NULL,
  `stok` int(50) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `jenis_menu`, `stok`, `harga`, `gambar`) VALUES
(1, 'Mie Aceh', 'Makanan', 100, 20000, 'mieaceh.jpg'),
(2, 'Roti Canai', 'Makanan', 100, 15000, 'roticanai.jpg'),
(3, 'Nasi Goreng Aceh', 'Makanan', 50, 15000, 'nasgor.jpg'),
(4, 'Mie Goreng Aceh', 'Makanan', 50, 15000, 'miegoreng.jpg'),
(5, 'Martabak Aceh', 'Makanan', 75, 25000, 'martabakaceh.jpg'),
(6, 'Sate Matang', '', 50, 20000, 'satematang.jpg'),
(7, 'Mie Jalak Sabang', 'Makanan', 50, 15000, 'miejalaksabang.png'),
(8, 'Gulai Kambing', 'Makanan', 75, 18000, 'gulaikambing.jpg'),
(9, 'Kopi Espresso (Arabica)', 'Minuman', 100, 8000, 'kopiespresso.jpg'),
(10, 'Kopi Hitam (Robusta)', 'Minuman', 100, 5000, 'kopirobusta.jpg'),
(11, 'Teh Manis', 'Minuman', 75, 5000, 'tehmanis.jpg'),
(12, 'Es Kelapa Muda', 'Minuman', 50, 10000, 'eskelapamuda.jpg'),
(13, 'Es Jeruk', 'Minuman', 50, 8000, 'esjeruk.jpg'),
(14, 'Jus Mangga', 'Minuman', 50, 8000, 'jusmangga.jpg'),
(15, 'Jus Alpukat', 'Minuman', 30, 8000, 'juspukat.jpg'),
(16, 'Es Buah', 'Minuman', 50, 15000, 'esbuah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `total_pembayaran` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `tanggal_pembayaran`, `total_pembayaran`) VALUES
(2, '2022-06-08', 30000),
(3, '2022-06-08', 30000),
(4, '2022-06-08', 28000),
(5, '2022-06-08', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_order` int(10) NOT NULL,
  `id_pembayaran` int(10) NOT NULL,
  `id_menu` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_order`, `id_pembayaran`, `id_menu`, `jumlah`) VALUES
(1, 3, '3', 1),
(2, 3, '4', 1),
(3, 4, '1', 1),
(4, 4, '13', 1),
(5, 5, '3', 1),
(6, 5, '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(25) NOT NULL,
  `status` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `no_telepon`, `status`) VALUES
(1, 'rizkyjemal', 'rizkyjemal', 'Rizky Jemal Safryan', 'Laki-Laki', '2003-04-26', 'Cibubur', '085774143191', 'user'),
(5, 'jems', '1234', 'Jemal', 'Laki-Laki', '1969-06-10', 'Cibubur', '08124334567', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

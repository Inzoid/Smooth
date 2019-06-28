-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 06:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `masakan`
--

CREATE TABLE `masakan` (
  `id_masakan` int(200) NOT NULL,
  `nama_masakan` varchar(200) NOT NULL,
  `kategori` varchar(80) NOT NULL,
  `harga` int(200) NOT NULL,
  `status_makanan` varchar(10) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masakan`
--

INSERT INTO `masakan` (`id_masakan`, `nama_masakan`, `kategori`, `harga`, `status_makanan`, `gambar`) VALUES
(21, 'Pocket Bites Pizza', 'Makanan', 53000, 'Tersedia', 0x6d656174792e706e67),
(22, 'Supreme Pizza', 'Makanan', 41000, 'Tidak Ters', 0x70697a7a612e706e67),
(24, 'Asus Robot', 'Minuman', 65000, 'Tersedia', 0x372e6a7067),
(114, 'Meat Lovers', 'Makanan', 54000, 'Tersedia', 0x6d6561742e706e67),
(119, 'Roasted Chicken', 'Desert', 14000, 'Tersedia', 0x5048442d526f61737465642d436869636b656e2d526963652d4a756c323031382d3231307831363570782e706e67),
(120, 'Chicken Boneless', 'Makanan', 32000, 'Tersedia', 0x636869636b656e5f626f6e656c6573735f74686967682e706e67),
(122, 'Pachota Choco', 'Desert', 8000, 'Tersedia', 0x70616e6e61636f7474615f63686f636f5f736d6f6f63682e706e67),
(123, 'Dessert', 'Desert', 8000, 'Tidak Ters', 0x5048445f69642d53756e6e795f50656163685f466c617442726561642e706e67),
(124, 'Spicy Chicken', 'Desert', 36000, 'Tersedia', 0x5048445f69642d53706963795f436869636b656e5f4368656573652e706e67),
(125, 'Asus Iron Man', 'Minuman', 65000, 'Tersedia', 0x382e6a7067),
(126, 'Chicken Wings 6 Pcs', 'Makanan', 34000, 'Tersedia', 0x436869636b656e5f57696e677374726565745f362d7063735f4d656e755f6974656d5f6e65772e706e67),
(127, 'Asus Saitama', 'Minuman', 55000, 'Tersedia', 0x312e6a7067),
(129, 'Asus Zenfone Max Pro M1', 'Makanan', 85000, 'Tersedia', 0x342e6a7067),
(130, 'Asus', 'Makanan', 85000, 'Tersedia', 0x382e6a7067),
(131, 'Asus Rocket', 'Minuman', 65000, 'Tersedia', 0x352e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_order` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `kembalian` int(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_order`, `nama_menu`, `harga`, `jumlah`, `total`, `kembalian`, `tanggal`) VALUES
(55, 'Pocket Bites Pizza', 53000, 1, '53000', 2000, '2019-04-14'),
(56, 'Chicken Wings 6 Pcs', 34000, 1, '102000', 5000, '2019-04-14'),
(57, 'Lemonade Melon', 6000, 1, '6000', 1000, '2019-04-14'),
(58, 'Supreme Pizza', 41000, 1, '94000', 12000, '2019-04-14'),
(61, 'Lemonade Melon', 6000, 5, '30000', 4000, '2019-04-14'),
(62, 'Pachota Choco', 8000, 2, '16000', 1000, '2019-04-14'),
(64, 'Spicy Chicken', 36000, 1, '36000', 500, '2019-04-14'),
(65, 'Coffe Capucinno Jelly', 10000, 3, '136000', 4500, '2019-04-14'),
(66, 'Coffe Capucinno Jelly', 10000, 1, '63000', 7500, '2019-04-14'),
(67, 'Meat Lovers', 54000, 1, '54000', 2400, '2019-04-14'),
(68, 'Chicken Boneless', 32000, 1, '32000', 3000, '2019-04-14'),
(69, 'Lemonade Melon', 6000, 3, '28000', 2000, '2019-04-14'),
(70, 'Chicken Wings 6 Pcs', 34000, 1, '87000', 13000, '2019-06-12'),
(71, 'Asus', 85000, 1, '205000', 45000, '2019-06-19'),
(72, 'Asus Saitama', 55000, 1, '185000', 15000, '2019-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `id_level` enum('manager','kasir') NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `id_level`, `gambar`) VALUES
(1, 'admin', 'admin', 'ikhbal', 'manager', ''),
(2, 'kasir', 'kasir', 'Arnez', 'kasir', ''),
(3, 'inzoid', '321', 'Inzoid', 'manager', ''),
(15, 'smooth', 'admin', 'smooth', 'manager', ''),
(20, 'drvipz', '12345', 'Droid Vipz', 'manager', 0x706f6c6f73732e6a7067),
(21, 'ikhbal', 'anjay', 'Ikhbal Dwiyantoro', 'manager', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masakan`
--
ALTER TABLE `masakan`
  ADD PRIMARY KEY (`id_masakan`),
  ADD UNIQUE KEY `id_masakan` (`id_masakan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `id_order_2` (`id_order`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masakan`
--
ALTER TABLE `masakan`
  MODIFY `id_masakan` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `transaksi` (`id_order`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

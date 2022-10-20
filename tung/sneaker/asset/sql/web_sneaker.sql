-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 02:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sneaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_giohang_chitiet`
--

CREATE TABLE `tb_giohang_chitiet` (
  `id` int(20) NOT NULL,
  `ma_giohang` int(20) NOT NULL,
  `ma_sanpham` int(20) NOT NULL,
  `soluongmua` int(20) NOT NULL,
  `gia` int(20) NOT NULL,
  `created_time` int(20) NOT NULL,
  `last_updated` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_giohang_chitiet`
--

INSERT INTO `tb_giohang_chitiet` (`id`, `ma_giohang`, `ma_sanpham`, `soluongmua`, `gia`, `created_time`, `last_updated`) VALUES
(6, 16, 3, 4, 1295000, 1666262671, 1666262671),
(7, 16, 15, 2, 1395000, 1666262671, 1666262671);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_giohang_chitiet`
--
ALTER TABLE `tb_giohang_chitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_giohang_chitiet_ibfk_3` (`ma_sanpham`),
  ADD KEY `ma_giohang` (`ma_giohang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_giohang_chitiet`
--
ALTER TABLE `tb_giohang_chitiet`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_giohang_chitiet`
--
ALTER TABLE `tb_giohang_chitiet`
  ADD CONSTRAINT `tb_giohang_chitiet_ibfk_3` FOREIGN KEY (`ma_sanpham`) REFERENCES `tb_sanpham` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_giohang_chitiet_ibfk_4` FOREIGN KEY (`ma_giohang`) REFERENCES `tb_giohang` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

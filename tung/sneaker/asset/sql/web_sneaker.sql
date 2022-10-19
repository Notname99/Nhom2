-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 05:22 PM
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
-- Table structure for table `tb_giohang`
--

CREATE TABLE `tb_giohang` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `tongtien` int(20) NOT NULL,
  `created_time` int(20) NOT NULL,
  `last_updated` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `last_updated` int(20) NOT NULL,
  `ma_size` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotrokhachang`
--

CREATE TABLE `tb_hotrokhachang` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hotrokhachang`
--

INSERT INTO `tb_hotrokhachang` (`id`, `ten`, `email`, `noidung`) VALUES
(1, 'tung', 'tungtrinhthanh0311@gmail.com', 'không có gì');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nhanhieu`
--

CREATE TABLE `tb_nhanhieu` (
  `id` int(11) NOT NULL,
  `nhanhieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nhanhieu`
--

INSERT INTO `tb_nhanhieu` (`id`, `nhanhieu`) VALUES
(1, 'Adidas SuperStar'),
(2, 'Adidas Stan Smith'),
(3, 'Adidas Alphabounce'),
(4, 'Adidas NMD'),
(5, 'Adidas Prophere'),
(6, 'Adidas Ultraboost'),
(7, 'Adidas Falcon'),
(8, 'Adidas Yeezy'),
(9, 'Nike Air Force 1'),
(10, 'Nike Jordan'),
(11, 'Nike Air Max'),
(13, 'Nike Air Max 97'),
(14, 'Nike Air Max 270'),
(15, 'Nike Air Max 90'),
(16, 'Nike Uptempo'),
(17, 'Nike M2K Tekno');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sđt` int(20) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id`, `user`, `email`, `sđt`, `pass`) VALUES
(1, 'ad', 'admin@admin.com', 567384637, 'admin'),
(2, 'tung', 'tungtrinhthanh0311@gmail.com', 485748372, 'Tung031102'),
(3, 'nam', 'nambeo102@gmail.com', 436375896, 'nambeo123'),
(4, 'manh', 'manh3892@gmail.com', 2147483647, 'manh123'),
(5, 'khánh', 'khanhcung0318@gmail.com', 2147483647, 'Khanh1808');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `img` char(175) NOT NULL,
  `gia` int(20) NOT NULL,
  `soluongkho` int(20) NOT NULL,
  `ma_thuonghieu` int(20) NOT NULL,
  `ma_nhanhieu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id`, `ten`, `img`, `gia`, `soluongkho`, `ma_thuonghieu`, `ma_nhanhieu`) VALUES
(1, 'Adidas Falcon Triple White', '../../asset/image/Adidas/Adidas-Falcon-Triple-White.jpg', 1295000, 30, 1, 7),
(2, 'Adidas Falcon Crystal White Navy', '../../asset/image/Adidas/Adidas-Falcon-Crystal-White-Navy.jpg', 1295000, 500, 1, 7),
(3, 'Adidas Falcon Acid House', '../../asset/image/Adidas/Adidas-Falcon-Acid-House.jpg', 1295000, 40, 1, 7),
(4, 'Adidas Ultra Boost 4.0 Triple White', '../../asset/image/Adidas/Adidas-Ultra-Boost-4.0-Triple-White.jpg', 1295000, 70, 1, 6),
(5, 'Adidas Ultra Boost 4.0 Grey Three', '../../asset/image/Adidas/Adidas-Ultra-Boost-4.0-Grey-Three.jpg', 1295000, 35, 1, 6),
(6, 'Adidas Ultra Boost 4.0 Grey Four', '../../asset/image/Adidas/Adidas-Ultra-Boost-4.0-Grey-Four.jpg', 1295000, 90, 1, 6),
(7, 'Adidas Ultra Boost 4.0 Triple Black', '../../asset/image/Adidas/Adidas-Ultra-Boost-4.0-Triple-Black.jpg', 1295000, 70, 1, 6),
(8, 'Adidas Stan Smith Triple White', '../../asset/image/Adidas/Adidas-Stan-Smith-Triple-White.jpg', 995000, 200, 1, 2),
(9, 'Adidas Alphabounce Beyond Dark Grey', '../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Dark-Grey.jpg', 1295000, 350, 1, 3),
(10, 'Adidas NMD R1 Triple White', '../../asset/image/Adidas/Adidas-NMD-R1-Triple-White.jpg', 1295000, 55, 1, 4),
(11, 'Adidas Prophere Triple White', '../../asset/image/Adidas/Adidas-Prophere-Triple-White.jpg', 1295000, 30, 1, 5),
(12, 'Adidas Alphabounce Beyond Black', '../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Black.jpg', 1295000, 250, 1, 3),
(13, 'Adidas Yeezy Boost 700 Mauve', '../../asset/image/Adidas/Adidas-Yeezy-Boost-700-Mauve.jpg', 1395000, 75, 1, 8),
(14, 'Yeezy Boost 700 Wave Runner', '../../asset/image/Adidas/Yeezy-Boost-350-V2-Zebra.jpg', 1395000, 0, 1, 8),
(15, 'Yeezy Boost 350 V2 Static Black', '../../asset/image/Adidas/Yeezy-Boost-350-V2-Static-Black.jpg', 1395000, 55, 1, 8),
(16, 'Yeezy Boost 350 V2 Sesame', '../../asset/image/Adidas/Yeezy-Boost-350-V2-Sesame.jpg', 1395000, 43, 1, 8),
(17, 'Yeezy 350 V2 White Rainbow', '../../asset/image/Adidas/Yeezy-350-V2-White-Rainbow.jpg', 1395000, 66, 1, 8),
(18, 'Yeezy Boost 700 Inertia', '../../asset/image/Adidas/Yeezy-Boost-700-Inertia.jpg', 1395000, 0, 1, 8),
(19, 'Yeezy 700 V2 Static', '../../asset/image/Adidas/Yeezy-700-V2-Static.jpg', 1395000, 25, 1, 8),
(20, 'Adidas NMD R1 Grey', '../../asset/image/Adidas/Adidas-NMD-R1-Grey.jpg', 1195000, 50, 1, 4),
(21, 'Adidas Alphabounce Instinct Core Black Silver Metallic', '../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Core-Black-Silver-Metallic.jpg', 1295000, 150, 1, 3),
(22, 'Adidas Alphabounce Beyond Grey', '../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Grey.jpg', 1295000, 200, 1, 3),
(23, 'Adidas Alphabounce Beyond Cloud White', '../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Cloud-White.jpg', 1295000, 55, 1, 3),
(24, 'Adidas Superstar Running White', '../../asset/image/Adidas/Adidas-Superstar-Running-White.jpg', 895000, 40, 1, 1),
(25, 'Adidas Stan Smith Fairway', '../../asset/image/Adidas/Adidas-Stan-Smith-Fairway.jpg', 895000, 30, 1, 2),
(26, 'Adidas Prophere Grey Solar Red', '../../asset/image/Adidas/Adidas-Prophere-Grey-Solar-Red.jpg', 1195000, 45, 1, 5),
(27, 'Air Jordan 1 Retro High OG University Blue', '../../asset/image/Nike/Air-Jordan-1-Retro-High-OG-University-Blue.jpg', 1295000, 100, 2, 10),
(28, 'Air Force 1 x Dior', '../../asset/image/Nike/Air-Force-1-x-Dior.jpg', 1195000, 500, 2, 9),
(29, 'Air Force 1 Shadow Spruce Aura White', '../../asset/image/Nike/Air-Force-1-Shadow-Spruce-Aura-White.jpg', 1195000, 300, 2, 9),
(30, 'Adidas Alphabounce Instinct Core Heather', '../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Core-Heather.jpg', 1295000, 55, 1, 3),
(31, 'Adidas Alphabounce Instinct Linen', '../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Linen.jpg', 1295000, 30, 1, 3),
(32, 'Yeezy Boost 350 V2 Zebra', '../../asset/image/Adidas/Yeezy-Boost-350-V2-Zebra.jpg', 1395000, 0, 1, 8),
(33, 'Yeezy Boost 350 V2 Static Black', '../../asset/image/Adidas/Yeezy-Boost-350-V2-Static-Black.jpg', 1395000, 55, 1, 8),
(34, 'M2K Tekno White Black Orange', '../../asset/image/Nike/M2K-Tekno-White-Black-Orange.jpg', 1295000, 60, 2, 17),
(35, 'M2K Tekno Platinum Tint Celery', '../../asset/image/Nike/M2K-Tekno-Platinum-Tint-Celery.jpg', 1295000, 70, 2, 17),
(36, 'Air Force 1 Low G-Dragon Peaceminusone Para-Noise Yellow Swoosh(Limited)', '../../asset/image/Nike/Air-Force-1-Low-G_Dragon-Peaceminusone-Para_Noise-Yellow-Swoosh(Limited).jpg', 1575000, 65, 2, 9),
(37, 'Air Force 1 Low G-Dragon Peaceminusone Para-Noise Red Swoosh(Korea exclusive)', '../../asset/image/Nike/Air-Force-1-Low-G_Dragon-Peaceminusone-Para_Noise-Red-Swoosh-(Korea-exclusive).jpg', 1575000, 54, 2, 9),
(38, 'Air Force 1 Low G-Dragon Peaceminusone Para-Noise White Swoosh', '../../asset/image/Nike/Air-Force-1-Low-G_Dragon-Peaceminusone-Para_Noise-White-Swoosh.jpg', 1575000, 0, 2, 9),
(39, 'Air Force 1 Shadow Pale Ivory', '../../asset/image/Nike/Air-Force-1-Shadow-Pale-Ivory.jpg', 1295000, 66, 2, 9),
(40, 'Air Max 270 White', '../../asset/image/Nike/Air-Max-270-White.jpg', 1295000, 60, 2, 14),
(41, 'Air Max 97 Ultra 17 Triple Black', '../../asset/image/Nike/Air-Max-97-Ultra-17-Triple-Black.jpg', 1295000, 45, 2, 13),
(42, 'Air Jordan 1 x Off-White x Retro High OG White', '../../asset/image/Nike/Air-Jordan-1-x-Off_White-x-Retro-High-OG-White.jpg', 1295000, 450, 2, 10),
(43, 'Air More Uptempo White Gum', '../../asset/image/Nike/Air-More-Uptempo-White-Gum.jpg', 1495000, 0, 2, 16),
(44, 'Air More Uptempo Black', '../../asset/image/Nike/Air-More-Uptempo-Black.jpg', 1295000, 35, 2, 16),
(45, 'Air Jordan 4 Retro OG Bred', '../../asset/image/Nike/Air-Jordan-4-Retro-OG-Bred.jpg', 1195000, 45, 2, 10),
(46, 'Air Jordan 1 x Off-White x Retro High OG Chicago', '../../asset/image/Nike/Air-Jordan-1-x-Off_White-x-Retro-High-OG-Chicago.jpg', 1295000, 55, 2, 10),
(47, 'Air Max 90 Triple White', '../../asset/image/Nike/Air-Max-90-Triple-White.jpg', 1295000, 55, 2, 15),
(48, 'Air Force 1 Low Just Do It', '../../asset/image/Nike/Air-Force-1-Low-Just-Do-It.jpg', 1295000, 0, 2, 9),
(49, 'Air Max 97 Ultra 17 Triple White', '../../asset/image/Nike/Air-Max-97-Ultra-17-Triple-White.jpg', 1295000, 56, 2, 13),
(50, 'Air Force 1\'07 LV8 Overbranding', '../../asset/image/Nike/Air-Force-1\'07-LV8-Overbranding.jpg', 1295000, 55, 2, 9),
(51, 'Air Force 1 Low GS Triple White', '../../asset/image/Nike/Air-Force-1-Low-GS-Triple-White.jpg', 995000, 350, 2, 9),
(52, 'Air Max 270 Black White', '../../asset/image/Nike/Air-Max-270-Black-White.jpg', 1295000, 56, 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tb_size`
--

CREATE TABLE `tb_size` (
  `id` int(11) NOT NULL,
  `size` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_size`
--

INSERT INTO `tb_size` (`id`, `size`) VALUES
(1, 35),
(2, 36),
(3, 37),
(4, 38),
(5, 39),
(6, 40),
(7, 41),
(8, 42),
(9, 43),
(10, 44);

-- --------------------------------------------------------

--
-- Table structure for table `tb_thuonghieu`
--

CREATE TABLE `tb_thuonghieu` (
  `id` int(11) NOT NULL,
  `thuonghieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_thuonghieu`
--

INSERT INTO `tb_thuonghieu` (`id`, `thuonghieu`) VALUES
(1, 'Adidas'),
(2, 'Nike');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_giohang`
--
ALTER TABLE `tb_giohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_giohang_chitiet`
--
ALTER TABLE `tb_giohang_chitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_giohang` (`ma_giohang`),
  ADD KEY `ma_size` (`ma_size`),
  ADD KEY `ma_sanpham` (`ma_sanpham`);

--
-- Indexes for table `tb_hotrokhachang`
--
ALTER TABLE `tb_hotrokhachang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nhanhieu`
--
ALTER TABLE `tb_nhanhieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_thuonghieu` (`ma_thuonghieu`),
  ADD KEY `ma_nhanhieu` (`ma_nhanhieu`);

--
-- Indexes for table `tb_size`
--
ALTER TABLE `tb_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_thuonghieu`
--
ALTER TABLE `tb_thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_giohang`
--
ALTER TABLE `tb_giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_giohang_chitiet`
--
ALTER TABLE `tb_giohang_chitiet`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hotrokhachang`
--
ALTER TABLE `tb_hotrokhachang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_nhanhieu`
--
ALTER TABLE `tb_nhanhieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_size`
--
ALTER TABLE `tb_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_thuonghieu`
--
ALTER TABLE `tb_thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_giohang_chitiet`
--
ALTER TABLE `tb_giohang_chitiet`
  ADD CONSTRAINT `tb_giohang_chitiet_ibfk_1` FOREIGN KEY (`ma_giohang`) REFERENCES `tb_giohang` (`id`),
  ADD CONSTRAINT `tb_giohang_chitiet_ibfk_2` FOREIGN KEY (`ma_size`) REFERENCES `tb_size` (`id`),
  ADD CONSTRAINT `tb_giohang_chitiet_ibfk_3` FOREIGN KEY (`ma_sanpham`) REFERENCES `tb_sanpham` (`id`);

--
-- Constraints for table `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `tb_sanpham_ibfk_1` FOREIGN KEY (`ma_thuonghieu`) REFERENCES `tb_thuonghieu` (`id`),
  ADD CONSTRAINT `tb_sanpham_ibfk_2` FOREIGN KEY (`ma_nhanhieu`) REFERENCES `tb_nhanhieu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

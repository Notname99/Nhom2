-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 01:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `tb_adidas`
--

CREATE TABLE `tb_adidas` (
  `id` int(11) NOT NULL,
  `img` char(100) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_adidas`
--

INSERT INTO `tb_adidas` (`id`, `img`, `ten`, `gia`) VALUES
(1, '../../asset/image/Adidas/Yeezy-Boost-350-V2-Zebra.jpg', 'Yeezy Boost 350 V2 Zebra', 1395000),
(2, '../../asset/image/Adidas/Yeezy-Boost-350-V2-Static-Black.jpg', 'Yeezy Boost 350 V2 Static Black', 1395000),
(3, '../../asset/image/Adidas/Yeezy-Boost-350-V2-Sesame.jpg', 'Yeezy Boost 350 V2 Sesame', 1395000),
(4, '../../asset/image/Adidas/Yeezy-350-V2-White-Rainbow.jpg', 'Yeezy 350 V2 White Rainbow', 1395000),
(5, '../../asset/image/Adidas/Adidas-Falcon-Triple-White.jpg', 'Adidas Falcon Triple White', 1295000),
(6, '../../asset/image/Adidas/Adidas-Falcon-Crystal-White-Navy.jpg', 'Adidas Falcon Crystal White Navy', 1295000),
(7, '../../asset/image/Adidas/Adidas-Falcon-Acid-House.jpg', 'Adidas Falcon Acid House', 1295000),
(8, '../../asset/image/Adidas/Adidas-Ultra-Boost-4.0-Triple-White.jpg', 'Adidas Ultra Boost 4.0 Triple White', 1295000),
(9, '../../asset/image/Adidas/Adidas-Ultra-Boost-4.0-Grey-Three.jpg', 'Adidas Ultra Boost 4.0 Grey Three', 1295000),
(10, '../../asset/image/Adidas/Adidas-Ultra-Boost-4.0-Grey-Four.jpg', 'Adidas Ultra Boost 4.0 Grey Four', 1295000),
(11, '../../asset/image/Adidas/Adidas-Ultra-Boost-4.0-Triple-Black.jpg', 'Adidas Ultra Boost 4.0 Triple Black', 1295000),
(12, '../../asset/image/Adidas/Adidas-Stan-Smith-Triple-White.jpg', 'Adidas Stan Smith Triple White', 995000),
(13, '../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Dark-Grey.jpg', 'Adidas Alphabounce Beyond Dark Grey', 1295000),
(14, '../../asset/image/Adidas/Adidas-NMD-R1-Triple-White.jpg', 'Adidas NMD R1 Triple White', 1295000),
(15, '../../asset/image/Adidas/Adidas-Prophere-Triple-White.jpg', 'Adidas Prophere Triple White', 1295000),
(16, '../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Black.jpg', 'Adidas Alphabounce Beyond Black', 1295000),
(17, '../../asset/image/Adidas/Adidas-Yeezy-Boost-700-Mauve.jpg', 'Adidas Yeezy Boost 700 Mauve', 1395000),
(18, '../../asset/image/Adidas/Yeezy-Boost-700-Wave-Runner.jpg', 'Yeezy Boost 700 Wave Runner', 1395000),
(19, '../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Core-Heather.jpg', 'Adidas Alphabounce Instinct Core Heather', 1295000),
(20, '../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Linen.jpg', 'Adidas Alphabounce Instinct Linen', 1295000),
(21, '../../asset/image/Adidas/Yeezy-Boost-700-Inertia.jpg', 'Yeezy Boost 700 Inertia', 1395000),
(22, '../../asset/image/Adidas/Yeezy-700-V2-Static.jpg', 'Yeezy 700 V2 Static', 1395000),
(23, '../../asset/image/Adidas/Adidas-NMD-R1-Grey.jpg', 'Adidas NMD R1 Grey', 1195000),
(24, '../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Core-Black-Silver-Metallic.jpg', 'Adidas Alphabounce Instinct Core Black Silver Metallic', 1295000),
(25, '../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Grey.jpg', 'Adidas Alphabounce Beyond Grey', 1295000),
(26, '../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Cloud-White.jpg', 'Adidas Alphabounce Beyond Cloud White', 1295000),
(27, '../../asset/image/Adidas/Adidas-Superstar-Running-White.jpg', 'Adidas Superstar Running White', 895000),
(28, '../../asset/image/Adidas/Adidas-Stan-Smith-Fairway.jpg', 'Adidas Stan Smith Fairway', 895000),
(29, '../../asset/image/Adidas/Adidas-Prophere-Grey-Solar-Red.jpg', 'Adidas Prophere Grey Solar Red', 1195000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_alphabounce`
--

CREATE TABLE `tb_alphabounce` (
  `id` int(11) NOT NULL,
  `img` char(100) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alphabounce`
--

INSERT INTO `tb_alphabounce` (`id`, `img`, `ten`, `gia`, `size`) VALUES
(1, '../../../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Dark-Grey.jpg', 'Adidas Alphabounce Beyond Dark Grey', 1295000, '40, 41, 42, 43, 44'),
(2, '../../../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Black.jpg', 'Adidas Alphabounce Beyond Black', 1295000, '	\r\n40, 41, 42, 43, 44'),
(3, '../../../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Core-Heather.jpg', 'Adidas Alphabounce Instinct Core Heather', 1295000, '	\r\n36, 37, 38, 41'),
(4, '../../../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Linen.jpg', 'Adidas Alphabounce Instinct Linen', 1295000, '	\r\n36, 37, 38, 39, 40, 41, 42, 43, 44'),
(5, '../../../../asset/image/Adidas/Adidas-Alphabounce-Instinct-Core-Black-Silver-Metallic.jpg', 'Adidas Alphabounce Instinct Core Black Silver Metallic', 1295000, '	\r\n36, 37, 38, 39, 40, 41, 44'),
(6, '../../../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Grey.jpg', 'Adidas Alphabounce Beyond Grey', 1295000, '	\r\n40, 41, 42, 43, 44'),
(7, '../../../../asset/image/Adidas/Adidas-Alphabounce-Beyond-Cloud-White.jpg', 'Adidas Alphabounce Beyond Cloud White', 1295000, '	\r\n36, 37, 38, 39, 40, 41, 42, 43, 44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nmd`
--

CREATE TABLE `tb_nmd` (
  `id` int(11) NOT NULL,
  `img` char(100) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nmd`
--

INSERT INTO `tb_nmd` (`id`, `img`, `ten`, `gia`, `size`) VALUES
(1, '../../../../asset/image/Adidas/Adidas-NMD-R1-Triple-White.jpg', 'Adidas NMD R1 Triple White', 1295000, '	\r\n36, 37, 38, 39, 40, 41, 42, 43, 44'),
(2, '../../../../asset/image/Adidas/Adidas-NMD-R1-Grey.jpg', 'Adidas NMD R1 Grey', 1195000, '	\r\n36, 37, 38, 39, 40, 41, 42, 43, 44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stan_smith`
--

CREATE TABLE `tb_stan_smith` (
  `id` int(11) NOT NULL,
  `img` char(100) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stan_smith`
--

INSERT INTO `tb_stan_smith` (`id`, `img`, `ten`, `gia`, `size`) VALUES
(1, '../../../../asset/image/Adidas/Adidas-Stan-Smith-Triple-White.jpg', 'Adidas Stan Smith Triple White', 995000, '	\r\n36, 37, 38, 39, 40, 41, 42, 43, 44'),
(2, '../../../../asset/image/Adidas/Adidas-Stan-Smith-Fairway.jpg', 'Adidas Stan Smith Fairway', 895000, '36, 37, 38, 39, 40, 41, 42, 43, 44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_superstar`
--

CREATE TABLE `tb_superstar` (
  `id` int(11) NOT NULL,
  `img` char(100) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_superstar`
--

INSERT INTO `tb_superstar` (`id`, `img`, `ten`, `gia`, `size`) VALUES
(1, '../../../../asset/image/Adidas/Adidas-Superstar-Running-White.jpg', 'Adidas Superstar Running White', 895000, '36, 37, 38, 39, 40, 41, 42, 43, 44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_adidas`
--
ALTER TABLE `tb_adidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_alphabounce`
--
ALTER TABLE `tb_alphabounce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nmd`
--
ALTER TABLE `tb_nmd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_stan_smith`
--
ALTER TABLE `tb_stan_smith`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_superstar`
--
ALTER TABLE `tb_superstar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_adidas`
--
ALTER TABLE `tb_adidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_alphabounce`
--
ALTER TABLE `tb_alphabounce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_nmd`
--
ALTER TABLE `tb_nmd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_stan_smith`
--
ALTER TABLE `tb_stan_smith`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_superstar`
--
ALTER TABLE `tb_superstar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

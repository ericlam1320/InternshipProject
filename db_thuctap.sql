-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2018 at 05:26 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thuctap`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietnhom`
--

DROP TABLE IF EXISTS `chitietnhom`;
CREATE TABLE IF NOT EXISTS `chitietnhom` (
  `id` varchar(8) NOT NULL,
  `TenNhom` varchar(255) DEFAULT NULL,
  `SoLuongSV` int(255) DEFAULT NULL,
  `MaMon` varchar(5) NOT NULL,
  `MaLop` varchar(8) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `MaLop` (`MaLop`),
  KEY `MaMon` (`MaMon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `chitietthaoluansub`
--

DROP TABLE IF EXISTS `chitietthaoluansub`;
CREATE TABLE IF NOT EXISTS `chitietthaoluansub` (
  `id` varchar(10) NOT NULL,
  `NgayDang` date DEFAULT NULL,
  `GioDang` time DEFAULT NULL,
  `NoiDung` text,
  `MaPhien` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chitietthaoluansub_ibfk_1` (`MaPhien`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

DROP TABLE IF EXISTS `giangvien`;
CREATE TABLE IF NOT EXISTS `giangvien` (
  `id` varchar(8) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `ChucVu` int(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

DROP TABLE IF EXISTS `lophoc`;
CREATE TABLE IF NOT EXISTS `lophoc` (
  `id` varchar(8) NOT NULL,
  `TenLop` varchar(255) DEFAULT NULL,
  `SoLuongSV` int(255) DEFAULT NULL,
  `MaGV` varchar(8) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `MaGV` (`MaGV`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `id` varchar(5) NOT NULL,
  `TenMon` varchar(255) DEFAULT NULL,
  `HocKy` int(11) DEFAULT NULL,
  `SoTinChi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `nhom`
--

DROP TABLE IF EXISTS `nhom`;
CREATE TABLE IF NOT EXISTS `nhom` (
  `MaNhom` varchar(8) DEFAULT NULL,
  `MaSV` varchar(8) DEFAULT NULL,
  KEY `MaNhom` (`MaNhom`) USING BTREE,
  KEY `MaSV` (`MaSV`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id` varchar(8) NOT NULL,
  `HoTen` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` bit(1) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` mediumtext,
  `MaLop` varchar(8) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `MaLop` (`MaLop`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `thaoluan`
--

DROP TABLE IF EXISTS `thaoluan`;
CREATE TABLE IF NOT EXISTS `thaoluan` (
  `id` varchar(8) NOT NULL,
  `NgayDang` date DEFAULT NULL,
  `GioDang` time DEFAULT NULL,
  `TrangThai` text,
  `NoiDung` text,
  `LuotXem` int(11) DEFAULT NULL,
  `MaMon` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `thaoluan_ibfk_1` (`MaMon`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `thaoluansubgv`
--

DROP TABLE IF EXISTS `thaoluansubgv`;
CREATE TABLE IF NOT EXISTS `thaoluansubgv` (
  `MaTL` varchar(10) DEFAULT NULL,
  `MaGV` varchar(255) DEFAULT NULL,
  KEY `MaTL` (`MaTL`) USING BTREE,
  KEY `MaUser` (`MaGV`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `thaoluansubsv`
--

DROP TABLE IF EXISTS `thaoluansubsv`;
CREATE TABLE IF NOT EXISTS `thaoluansubsv` (
  `MaTL` varchar(10) DEFAULT NULL,
  `MaSV` varchar(255) DEFAULT NULL,
  KEY `thaoluansubsv_ibfk_1` (`MaTL`) USING BTREE,
  KEY `thaoluansubsv_ibfk_2` (`MaSV`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `thongbaolop`
--

DROP TABLE IF EXISTS `thongbaolop`;
CREATE TABLE IF NOT EXISTS `thongbaolop` (
  `id` varchar(8) NOT NULL,
  `MaLop` varchar(8) NOT NULL,
  `NgayTB` date DEFAULT NULL,
  `GioTB` time DEFAULT NULL,
  `TieuDe` text,
  `NoiDung` text,
  `LuotXem` int(11) DEFAULT NULL,
  `MaGV` varchar(8) NOT NULL,
  `MaMon` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `MaGV` (`MaGV`) USING BTREE,
  KEY `MaLop` (`MaLop`) USING BTREE,
  KEY `MaMon` (`MaMon`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `thongbaonhom`
--

DROP TABLE IF EXISTS `thongbaonhom`;
CREATE TABLE IF NOT EXISTS `thongbaonhom` (
  `id` varchar(8) NOT NULL,
  `MaNhom` varchar(8) NOT NULL,
  `NgayTB` date DEFAULT NULL,
  `GioTB` time DEFAULT NULL,
  `TieuDe` text,
  `NoiDung` text,
  `LuotXem` int(11) DEFAULT NULL,
  `MaGV` varchar(8) NOT NULL,
  `MaMon` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `MaGV` (`MaGV`) USING BTREE,
  KEY `thongbaonhom_ibfk_2` (`MaNhom`) USING BTREE,
  KEY `MaMon` (`MaMon`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `thongbaosv`
--

DROP TABLE IF EXISTS `thongbaosv`;
CREATE TABLE IF NOT EXISTS `thongbaosv` (
  `id` varchar(8) NOT NULL,
  `MaSV` varchar(8) NOT NULL,
  `NgayTB` date DEFAULT NULL,
  `GioTB` time DEFAULT NULL,
  `TieuDe` text,
  `NoiDung` text,
  `LuotXem` int(11) DEFAULT NULL,
  `MaGV` varchar(8) NOT NULL,
  `MaMon` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `MaGV` (`MaGV`) USING BTREE,
  KEY `MaLop` (`MaSV`) USING BTREE,
  KEY `MaMon` (`MaMon`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `yeucau`
--

DROP TABLE IF EXISTS `yeucau`;
CREATE TABLE IF NOT EXISTS `yeucau` (
  `id` varchar(8) NOT NULL,
  `NgayGui` date DEFAULT NULL,
  `GioGui` time DEFAULT NULL,
  `TrangThai` int(10) DEFAULT NULL,
  `TieuDe` text,
  `NoiDungYC` text,
  `PhanHoi` text,
  `MaGV` varchar(8) NOT NULL,
  `MaSV` varchar(8) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `MaSV` (`MaSV`) USING BTREE,
  KEY `MaGV` (`MaGV`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietnhom`
--
ALTER TABLE `chitietnhom`
  ADD CONSTRAINT `chitietnhom_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietnhom_ibfk_2` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `chitietthaoluansub`
--
ALTER TABLE `chitietthaoluansub`
  ADD CONSTRAINT `chitietthaoluansub_ibfk_1` FOREIGN KEY (`MaPhien`) REFERENCES `thaoluan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `nhom`
--
ALTER TABLE `nhom`
  ADD CONSTRAINT `nhom_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`id`),
  ADD CONSTRAINT `nhom_ibfk_3` FOREIGN KEY (`MaNhom`) REFERENCES `chitietnhom` (`id`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `thaoluan`
--
ALTER TABLE `thaoluan`
  ADD CONSTRAINT `thaoluan_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thaoluansubgv`
--
ALTER TABLE `thaoluansubgv`
  ADD CONSTRAINT `thaoluansubgv_ibfk_1` FOREIGN KEY (`MaTL`) REFERENCES `chitietthaoluansub` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thaoluansubgv_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thaoluansubsv`
--
ALTER TABLE `thaoluansubsv`
  ADD CONSTRAINT `thaoluansubsv_ibfk_1` FOREIGN KEY (`MaTL`) REFERENCES `chitietthaoluansub` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thaoluansubsv_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thongbaolop`
--
ALTER TABLE `thongbaolop`
  ADD CONSTRAINT `thongbaolop_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongbaolop_ibfk_4` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongbaolop_ibfk_5` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thongbaonhom`
--
ALTER TABLE `thongbaonhom`
  ADD CONSTRAINT `thongbaonhom_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongbaonhom_ibfk_2` FOREIGN KEY (`MaNhom`) REFERENCES `chitietnhom` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongbaonhom_ibfk_3` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thongbaosv`
--
ALTER TABLE `thongbaosv`
  ADD CONSTRAINT `thongbaosv_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongbaosv_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongbaosv_ibfk_3` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `yeucau`
--
ALTER TABLE `yeucau`
  ADD CONSTRAINT `yeucau_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `yeucau_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

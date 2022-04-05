-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2022 at 03:48 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `santmdt`
--

CREATE DATABASE IF NOT EXISTS santmdt;

USE santmdt;
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `TEN_DANG_NHAP` varchar(50) NOT NULL,
  `HOTEN_ADMIN` varchar(1024) DEFAULT NULL,
  `NGAYSINH_ADMIN` date DEFAULT NULL,
  `GIOITINH_ADMIN` varchar(4) DEFAULT NULL,
  `SDT_ADMIN` varchar(10) DEFAULT NULL,
  `EMAIL_ADMIN` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `anh_sp`
--

CREATE TABLE `anh_sp` (
  `ID_HA` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `NGUON_HA` varchar(1024) DEFAULT NULL,
  `LOAI_ANH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

CREATE TABLE `bai_viet` (
  `ID_BV` int(11) NOT NULL,
  `ID_LOAIBV` int(11) NOT NULL,
  `ID_NBL` int(11) NOT NULL,
  `TIEUDE_BV` varchar(1024) DEFAULT NULL,
  `NOIDUNG_BV` text,
  `NGAYDANG_BV` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `baocao_bv`
--

CREATE TABLE `baocao_bv` (
  `ID_BAOCAO_BV` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `ID_BV` int(11) NOT NULL,
  `NGAYLAP_BAOCAO_BV` datetime DEFAULT CURRENT_TIMESTAMP,
  `TRANGTHAI_BAOCAO_BV` varchar(1024) DEFAULT NULL,
  `NOIDUNG_BAOCAO_BV` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `baocao_sp`
--

CREATE TABLE `baocao_sp` (
  `ID_BAOCAO_SP` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `NOIDUNG_BAOCAO_SP` varchar(1024) DEFAULT NULL,
  `NGAYLAP_BAOCAO_SP` datetime DEFAULT CURRENT_TIMESTAMP,
  `TRANGTHAI_BAOCAO_SP` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan_bv`
--

CREATE TABLE `binhluan_bv` (
  `ID_BINHLUAN_BV` int(11) NOT NULL,
  `ID_BV` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `NOIDUNG_BINHLUAN_BV` varchar(1024) DEFAULT NULL,
  `THOIGIAN_BINHLUAN_BV` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan_sp`
--

CREATE TABLE `binhluan_sp` (
  `ID_BINHLUAN_SP` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `NOIDUNG_BINHLUAN_SP` varchar(1024) DEFAULT NULL,
  `THOIGIAN_BINHLUAN_SP` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID_SP` int(11) NOT NULL,
  `ID_DH` int(11) NOT NULL,
  `SOLUONG_SPMUA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `ID_GIOHANG` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `SOLUONG_SP_GH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chitietyeuthich`
--

CREATE TABLE `chitietyeuthich` (
  `ID_YEUTHICH` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `NGAY_THEM_SP_YT` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danh_gia`
--

CREATE TABLE `danh_gia` (
  `ID_DG` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `SOSAO_DG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dia_chi`
--

CREATE TABLE `dia_chi` (
  `ID_DIACHI` int(11) NOT NULL,
  `ND_DIACHI` varchar(50) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `XA_PHUONG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donvi`
--

CREATE TABLE `donvi` (
  `ID_DONVI` int(11) NOT NULL,
  `DONVI_SP` varchar(5) DEFAULT NULL,
  `GIATRI_SP` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ID_DH` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `TRANGTHAI_DH` int(11) DEFAULT NULL,
  `THOIGIANLAP` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gia`
--

CREATE TABLE `gia` (
  `ID_GIA` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `GIA` float DEFAULT NULL,
  `GIA_KM` float DEFAULT NULL,
  `NGAYLAP_GIA` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `ID_GIOHANG` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ID_KH` int(11) NOT NULL,
  `TEN_DANG_NHAP` varchar(50) NOT NULL,
  `HOTEN_KH` varchar(30) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `GIOITINH` varchar(4) DEFAULT NULL,
  `SDT` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ID_KH`, `TEN_DANG_NHAP`, `HOTEN_KH`, `NGAYSINH`, `GIOITINH`, `SDT`, `EMAIL`) VALUES
(6, 'khanh123', 'ÄoÃ n Trá»ng Khanh', NULL, NULL, '0832086239', 'trongkhanh2014@gmail.com'),
(7, 'b1805692', '123', NULL, NULL, '0832086239', 'trongkhanh2014@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `ID_KHUYENMAI` int(11) NOT NULL,
  `TEN_KHUYENMAI` varchar(1024) DEFAULT NULL,
  `NOIDUNG_KM` varchar(1024) DEFAULT NULL,
  `TI_LE_KM` float DEFAULT NULL,
  `NGAYBATDAU` datetime DEFAULT NULL,
  `NGAYKETTHUC` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loaibaiviet`
--

CREATE TABLE `loaibaiviet` (
  `ID_LOAIBV` int(11) NOT NULL,
  `TENLOAI_BV` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loaiquangcao`
--

CREATE TABLE `loaiquangcao` (
  `ID_LOAIQUANGCAO` int(11) NOT NULL,
  `TENLOAIQUANGCAO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE `loai_sp` (
  `ID_LOAI` int(11) NOT NULL,
  `TEN_LOAI` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhabanle_thamgia`
--

CREATE TABLE `nhabanle_thamgia` (
  `ID_NBL` int(11) NOT NULL,
  `ID_KHUYENMAI` int(11) NOT NULL,
  `NGAYTHAMGIA_KM` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nha_ban_le`
--

CREATE TABLE `nha_ban_le` (
  `ID_NBL` int(11) NOT NULL,
  `TEN_DANG_NHAP` varchar(50) NOT NULL,
  `TEN_NBL` varchar(1024) DEFAULT NULL,
  `NGAYTHAMGIA` date DEFAULT NULL,
  `AVATAR_NBL` varchar(50) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE `quangcao` (
  `ID_QUANGCAO` int(11) NOT NULL,
  `ID_NBL` int(11) NOT NULL,
  `ID_LOAIQUANGCAO` int(11) NOT NULL,
  `TENQUANGCAO` varchar(1024) DEFAULT NULL,
  `TRANGTHAIQUANGCAO` varchar(1024) DEFAULT NULL,
  `NGAYQUANGCAO` datetime DEFAULT NULL,
  `NOIDUNGQUANGCAO` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quan_huyen`
--

CREATE TABLE `quan_huyen` (
  `QUAN_HUYEN` varchar(50) NOT NULL,
  `TINH_TP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ID_SP` int(11) NOT NULL,
  `ID_NBL` int(11) NOT NULL,
  `ID_LOAI` int(11) NOT NULL,
  `ID_DONVI` int(11) NOT NULL,
  `TEN_SP` varchar(1024) DEFAULT NULL,
  `TRANGTHAI_SP` varchar(20) DEFAULT NULL,
  `SOLUONG_SP` int(11) DEFAULT NULL,
  `MOTA_SP` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TEN_DANG_NHAP` varchar(50) NOT NULL,
  `MATKHAU` varchar(50) DEFAULT NULL,
  `NGAYLAP_TK` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TEN_DANG_NHAP`, `MATKHAU`, `NGAYLAP_TK`) VALUES
('b1805692', '202cb962ac59075b964b07152d234b70', '2022-04-04 22:45:03'),
('khanh123', '123', '2022-04-04 22:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `tinh_tp`
--

CREATE TABLE `tinh_tp` (
  `TINH_TP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `xa_phuong`
--

CREATE TABLE `xa_phuong` (
  `XA_PHUONG` varchar(50) NOT NULL,
  `QUAN_HUYEN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `yeuthich`
--

CREATE TABLE `yeuthich` (
  `ID_YEUTHICH` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`),
  ADD KEY `FK_ADMIN_CO_TAI_KH_TAIKHOAN` (`TEN_DANG_NHAP`);

--
-- Indexes for table `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD PRIMARY KEY (`ID_HA`),
  ADD KEY `FK_ANH_SP_CO_HINH_A_SAN_PHAM` (`ID_SP`);

--
-- Indexes for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`ID_BV`),
  ADD KEY `FK_BAI_VIET_CO_LOAI_B_LOAIBAIV` (`ID_LOAIBV`),
  ADD KEY `FK_BAI_VIET_DANG_BAI__NHA_BAN_` (`ID_NBL`);

--
-- Indexes for table `baocao_bv`
--
ALTER TABLE `baocao_bv`
  ADD PRIMARY KEY (`ID_BAOCAO_BV`),
  ADD KEY `FK_BAOCAO_B_BI_KHACH__KHACH_HA` (`ID_KH`),
  ADD KEY `FK_BAOCAO_B_CO_BAO_CA_BAI_VIET` (`ID_BV`);

--
-- Indexes for table `baocao_sp`
--
ALTER TABLE `baocao_sp`
  ADD PRIMARY KEY (`ID_BAOCAO_SP`),
  ADD KEY `FK_BAOCAO_S_BAO_CAO_S_SAN_PHAM` (`ID_SP`),
  ADD KEY `FK_BAOCAO_S_LAP_BAO_C_KHACH_HA` (`ID_KH`);

--
-- Indexes for table `binhluan_bv`
--
ALTER TABLE `binhluan_bv`
  ADD PRIMARY KEY (`ID_BINHLUAN_BV`),
  ADD KEY `FK_BINHLUAN_CO_BINH_L_BAI_VIET` (`ID_BV`),
  ADD KEY `FK_BINHLUAN_DUOC_KHAC_KHACH_HA` (`ID_KH`);

--
-- Indexes for table `binhluan_sp`
--
ALTER TABLE `binhluan_sp`
  ADD PRIMARY KEY (`ID_BINHLUAN_SP`),
  ADD KEY `FK_BINHLUAN_CO_BINH_L_KHACH_HA` (`ID_KH`),
  ADD KEY `FK_BINHLUAN_DUOC_BINH_SAN_PHAM` (`ID_SP`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID_SP`,`ID_DH`),
  ADD KEY `FK_CHITIETD_CO_CAC_SA_DON_HANG` (`ID_DH`);

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`ID_GIOHANG`,`ID_SP`),
  ADD KEY `FK_CHITIETG_SP_CHITIE_SAN_PHAM` (`ID_SP`);

--
-- Indexes for table `chitietyeuthich`
--
ALTER TABLE `chitietyeuthich`
  ADD PRIMARY KEY (`ID_SP`,`ID_YEUTHICH`),
  ADD KEY `FK_CHITIETYEUTHICH_SANPHAM` (`ID_YEUTHICH`);

--
-- Indexes for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`ID_DG`),
  ADD KEY `FK_DANH_GIA_CO_DANH_G_KHACH_HA` (`ID_KH`),
  ADD KEY `FK_DANH_GIA_DUOC_DANH_SAN_PHAM` (`ID_SP`);

--
-- Indexes for table `dia_chi`
--
ALTER TABLE `dia_chi`
  ADD PRIMARY KEY (`ID_DIACHI`),
  ADD KEY `FK_DIA_CHI_RELATIONS_XA_PHUON` (`XA_PHUONG`),
  ADD KEY `FK_DIA_CHI_RELATIONS_khach_hang` (`ID_KH`);

--
-- Indexes for table `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`ID_DONVI`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ID_DH`),
  ADD KEY `FK_DON_HANG_DAT_DON_H_KHACH_HA` (`ID_KH`);

--
-- Indexes for table `gia`
--
ALTER TABLE `gia`
  ADD PRIMARY KEY (`ID_GIA`),
  ADD KEY `FK_GIA_RELATIONS_SAN_PHAM` (`ID_SP`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`ID_GIOHANG`),
  ADD KEY `FK_KHACH_HA_CO_GIO_HA_GIOHANG` (`ID_KH`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ID_KH`),
  ADD KEY `FK_KHACH_HA_CO_TAI_KH_TAIKHOAN` (`TEN_DANG_NHAP`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`ID_KHUYENMAI`);

--
-- Indexes for table `loaibaiviet`
--
ALTER TABLE `loaibaiviet`
  ADD PRIMARY KEY (`ID_LOAIBV`);

--
-- Indexes for table `loaiquangcao`
--
ALTER TABLE `loaiquangcao`
  ADD PRIMARY KEY (`ID_LOAIQUANGCAO`);

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`ID_LOAI`);

--
-- Indexes for table `nhabanle_thamgia`
--
ALTER TABLE `nhabanle_thamgia`
  ADD PRIMARY KEY (`ID_NBL`,`ID_KHUYENMAI`),
  ADD KEY `FK_NHABANLE_KHUYEN_MA_KHUYENMA` (`ID_KHUYENMAI`);

--
-- Indexes for table `nha_ban_le`
--
ALTER TABLE `nha_ban_le`
  ADD PRIMARY KEY (`ID_NBL`),
  ADD KEY `FK_NHA_BAN__CO_TAI_KH_TAIKHOAN` (`TEN_DANG_NHAP`);

--
-- Indexes for table `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`ID_QUANGCAO`),
  ADD KEY `FK_QUANGCAO_CO_LOAI_Q_LOAIQUAN` (`ID_LOAIQUANGCAO`),
  ADD KEY `FK_QUANGCAO_DANG_KY_Q_NHA_BAN_` (`ID_NBL`);

--
-- Indexes for table `quan_huyen`
--
ALTER TABLE `quan_huyen`
  ADD PRIMARY KEY (`QUAN_HUYEN`),
  ADD KEY `FK_QUAN_HUY_TAI_TINH_TP` (`TINH_TP`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ID_SP`),
  ADD KEY `FK_SAN_PHAM_BAN_SAN_P_NHA_BAN_` (`ID_NBL`),
  ADD KEY `FK_SAN_PHAM_CO_DON_VI_DONVI` (`ID_DONVI`),
  ADD KEY `FK_SAN_PHAM_THUOC_LOA_LOAI_SP` (`ID_LOAI`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TEN_DANG_NHAP`);

--
-- Indexes for table `tinh_tp`
--
ALTER TABLE `tinh_tp`
  ADD PRIMARY KEY (`TINH_TP`);

--
-- Indexes for table `xa_phuong`
--
ALTER TABLE `xa_phuong`
  ADD PRIMARY KEY (`XA_PHUONG`),
  ADD KEY `FK_XA_PHUON_THUOC_QUAN_HUY` (`QUAN_HUYEN`);

--
-- Indexes for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`ID_YEUTHICH`),
  ADD KEY `FK_YEUTHICH_KHACHANG` (`ID_KH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anh_sp`
--
ALTER TABLE `anh_sp`
  MODIFY `ID_HA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `ID_BV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baocao_bv`
--
ALTER TABLE `baocao_bv`
  MODIFY `ID_BAOCAO_BV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baocao_sp`
--
ALTER TABLE `baocao_sp`
  MODIFY `ID_BAOCAO_SP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan_bv`
--
ALTER TABLE `binhluan_bv`
  MODIFY `ID_BINHLUAN_BV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan_sp`
--
ALTER TABLE `binhluan_sp`
  MODIFY `ID_BINHLUAN_SP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `ID_DG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dia_chi`
--
ALTER TABLE `dia_chi`
  MODIFY `ID_DIACHI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donvi`
--
ALTER TABLE `donvi`
  MODIFY `ID_DONVI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ID_DH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gia`
--
ALTER TABLE `gia`
  MODIFY `ID_GIA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `ID_GIOHANG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ID_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `ID_KHUYENMAI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaibaiviet`
--
ALTER TABLE `loaibaiviet`
  MODIFY `ID_LOAIBV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaiquangcao`
--
ALTER TABLE `loaiquangcao`
  MODIFY `ID_LOAIQUANGCAO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `ID_LOAI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nha_ban_le`
--
ALTER TABLE `nha_ban_le`
  MODIFY `ID_NBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `ID_QUANGCAO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ID_SP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `ID_YEUTHICH` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_ADMIN_CO_TAI_KH_TAIKHOAN` FOREIGN KEY (`TEN_DANG_NHAP`) REFERENCES `taikhoan` (`TEN_DANG_NHAP`);

--
-- Constraints for table `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD CONSTRAINT `FK_ANH_SP_CO_HINH_A_SAN_PHAM` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`);

--
-- Constraints for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD CONSTRAINT `FK_BAI_VIET_CO_LOAI_B_LOAIBAIV` FOREIGN KEY (`ID_LOAIBV`) REFERENCES `loaibaiviet` (`ID_LOAIBV`),
  ADD CONSTRAINT `FK_BAI_VIET_DANG_BAI__NHA_BAN_` FOREIGN KEY (`ID_NBL`) REFERENCES `nha_ban_le` (`ID_NBL`);

--
-- Constraints for table `baocao_bv`
--
ALTER TABLE `baocao_bv`
  ADD CONSTRAINT `FK_BAOCAO_B_BI_KHACH__KHACH_HA` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`),
  ADD CONSTRAINT `FK_BAOCAO_B_CO_BAO_CA_BAI_VIET` FOREIGN KEY (`ID_BV`) REFERENCES `bai_viet` (`ID_BV`);

--
-- Constraints for table `baocao_sp`
--
ALTER TABLE `baocao_sp`
  ADD CONSTRAINT `FK_BAOCAO_S_BAO_CAO_S_SAN_PHAM` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`),
  ADD CONSTRAINT `FK_BAOCAO_S_LAP_BAO_C_KHACH_HA` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`);

--
-- Constraints for table `binhluan_bv`
--
ALTER TABLE `binhluan_bv`
  ADD CONSTRAINT `FK_BINHLUAN_CO_BINH_L_BAI_VIET` FOREIGN KEY (`ID_BV`) REFERENCES `bai_viet` (`ID_BV`),
  ADD CONSTRAINT `FK_BINHLUAN_DUOC_KHAC_KHACH_HA` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`);

--
-- Constraints for table `binhluan_sp`
--
ALTER TABLE `binhluan_sp`
  ADD CONSTRAINT `FK_BINHLUAN_CO_BINH_L_KHACH_HA` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`),
  ADD CONSTRAINT `FK_BINHLUAN_DUOC_BINH_SAN_PHAM` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `FK_CHITIETD_CO_CAC_SA_DON_HANG` FOREIGN KEY (`ID_DH`) REFERENCES `don_hang` (`ID_DH`),
  ADD CONSTRAINT `FK_CHITIETD_THUOC_DON_SAN_PHAM` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`);

--
-- Constraints for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `FK_CHITIETG_GIOHANG_C_GIOHANG` FOREIGN KEY (`ID_GIOHANG`) REFERENCES `giohang` (`ID_GIOHANG`),
  ADD CONSTRAINT `FK_CHITIETG_SP_CHITIE_SAN_PHAM` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`);

--
-- Constraints for table `chitietyeuthich`
--
ALTER TABLE `chitietyeuthich`
  ADD CONSTRAINT `FK_CHITIETYEUTHICH_SANPHAM` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`),
  ADD CONSTRAINT `FK_CHITIETYEUTHICH_YEUTHICH` FOREIGN KEY (`ID_YEUTHICH`) REFERENCES `yeuthich` (`ID_YEUTHICH`);

--
-- Constraints for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD CONSTRAINT `FK_DANH_GIA_CO_DANH_G_KHACH_HA` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`),
  ADD CONSTRAINT `FK_DANH_GIA_DUOC_DANH_SAN_PHAM` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`);

--
-- Constraints for table `dia_chi`
--
ALTER TABLE `dia_chi`
  ADD CONSTRAINT `FK_diachi_khach_hang` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`),
  ADD CONSTRAINT `FK_diachi_xa_phuong` FOREIGN KEY (`XA_PHUONG`) REFERENCES `xa_phuong` (`XA_PHUONG`);

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `FK_DON_HANG_DAT_DON_H_KHACH_HA` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`);

--
-- Constraints for table `gia`
--
ALTER TABLE `gia`
  ADD CONSTRAINT `FK_GIA_RELATIONS_SAN_PHAM` FOREIGN KEY (`ID_SP`) REFERENCES `san_pham` (`ID_SP`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `FK_KHACH_HANG_CO_GIO_HANG` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`);

--
-- Constraints for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `FK_KHACH_HA_CO_TAI_KH_TAIKHOAN` FOREIGN KEY (`TEN_DANG_NHAP`) REFERENCES `taikhoan` (`TEN_DANG_NHAP`);

--
-- Constraints for table `nhabanle_thamgia`
--
ALTER TABLE `nhabanle_thamgia`
  ADD CONSTRAINT `FK_NHABANLE_KHUYEN_MA_KHUYENMA` FOREIGN KEY (`ID_KHUYENMAI`) REFERENCES `khuyenmai` (`ID_KHUYENMAI`),
  ADD CONSTRAINT `FK_NHABANLE_NHA_BAN_L_NHA_BAN_` FOREIGN KEY (`ID_NBL`) REFERENCES `nha_ban_le` (`ID_NBL`);

--
-- Constraints for table `nha_ban_le`
--
ALTER TABLE `nha_ban_le`
  ADD CONSTRAINT `FK_NHA_BAN__CO_TAI_KH_TAIKHOAN` FOREIGN KEY (`TEN_DANG_NHAP`) REFERENCES `taikhoan` (`TEN_DANG_NHAP`);

--
-- Constraints for table `quangcao`
--
ALTER TABLE `quangcao`
  ADD CONSTRAINT `FK_QUANGCAO_CO_LOAI_Q_LOAIQUAN` FOREIGN KEY (`ID_LOAIQUANGCAO`) REFERENCES `loaiquangcao` (`ID_LOAIQUANGCAO`),
  ADD CONSTRAINT `FK_QUANGCAO_DANG_KY_Q_NHA_BAN_` FOREIGN KEY (`ID_NBL`) REFERENCES `nha_ban_le` (`ID_NBL`);

--
-- Constraints for table `quan_huyen`
--
ALTER TABLE `quan_huyen`
  ADD CONSTRAINT `FK_QUAN_HUY_TAI_TINH_TP` FOREIGN KEY (`TINH_TP`) REFERENCES `tinh_tp` (`TINH_TP`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `FK_SAN_PHAM_BAN_SAN_P_NHA_BAN_` FOREIGN KEY (`ID_NBL`) REFERENCES `nha_ban_le` (`ID_NBL`),
  ADD CONSTRAINT `FK_SAN_PHAM_CO_DON_VI_DONVI` FOREIGN KEY (`ID_DONVI`) REFERENCES `donvi` (`ID_DONVI`),
  ADD CONSTRAINT `FK_SAN_PHAM_THUOC_LOA_LOAI_SP` FOREIGN KEY (`ID_LOAI`) REFERENCES `loai_sp` (`ID_LOAI`);

--
-- Constraints for table `xa_phuong`
--
ALTER TABLE `xa_phuong`
  ADD CONSTRAINT `FK_XA_PHUON_THUOC_QUAN_HUY` FOREIGN KEY (`QUAN_HUYEN`) REFERENCES `quan_huyen` (`QUAN_HUYEN`);

--
-- Constraints for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `FK_YEUTHICH_KHACHANG` FOREIGN KEY (`ID_KH`) REFERENCES `khach_hang` (`ID_KH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

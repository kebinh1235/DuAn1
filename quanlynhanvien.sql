-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2020 lúc 11:54 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhanvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `idChucVu` int(11) NOT NULL,
  `tenchucvu` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luong`
--

CREATE TABLE `luong` (
  `bacluong` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `luongcoban` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `hesoluong` float NOT NULL,
  `hesophucap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idNhanVien` int(11) NOT NULL,
  `hoten` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `idPhongBan` int(11) NOT NULL,
  `bacluong` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `masothue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `idPhongBan` int(11) NOT NULL,
  `tenphongban` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoaifb` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianlamviec`
--

CREATE TABLE `thoigianlamviec` (
  `idNhanVien` int(11) NOT NULL,
  `idChucVu` int(11) NOT NULL,
  `ngaynhanviec` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`idChucVu`);

--
-- Chỉ mục cho bảng `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`bacluong`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idNhanVien`),
  ADD KEY `FK_phongban` (`idPhongBan`),
  ADD KEY `FK_bacluong` (`bacluong`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`idPhongBan`);

--
-- Chỉ mục cho bảng `thoigianlamviec`
--
ALTER TABLE `thoigianlamviec`
  ADD PRIMARY KEY (`idNhanVien`),
  ADD KEY `FK_chucvu` (`idChucVu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `idChucVu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idNhanVien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `idPhongBan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thoigianlamviec`
--
ALTER TABLE `thoigianlamviec`
  MODIFY `idNhanVien` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `FK_bacluong` FOREIGN KEY (`bacluong`) REFERENCES `luong` (`bacluong`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_phongban` FOREIGN KEY (`idPhongBan`) REFERENCES `phongban` (`idPhongBan`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `thoigianlamviec`
--
ALTER TABLE `thoigianlamviec`
  ADD CONSTRAINT `FK_chucvu` FOREIGN KEY (`idChucVu`) REFERENCES `chucvu` (`idChucVu`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_nhanvien` FOREIGN KEY (`idNhanVien`) REFERENCES `nhanvien` (`idNhanVien`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

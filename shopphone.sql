-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 12:52 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopphone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`Id`, `HinhAnh`) VALUES
(3, 'imgs/banners/banner 1.png'),
(4, 'imgs/banners/banner 2.png'),
(6, 'imgs/banners/banner 3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(17, 17, 1, 13900000),
(17, 67, 1, 21990000),
(18, 66, 1, 30000000),
(18, 72, 1, 50000000),
(19, 10, 1, 6490000),
(19, 13, 1, 11490000),
(20, 19, 1, 3960000),
(20, 21, 1, 2290000),
(21, 23, 1, 4990000),
(21, 24, 1, 7990000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `TenDM` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `TenDM`, `created_at`, `updated_at`) VALUES
(1, 'Điện Thoại', NULL, NULL),
(2, 'Ốp lưng', NULL, NULL),
(3, 'Phụ kiện', NULL, '2021-12-29 04:03:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia_sp`
--

CREATE TABLE `danh_gia_sp` (
  `id_danh_gia` int(11) NOT NULL,
  `id_nd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `noi_dung` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `id_tra_loi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_gia_sp`
--

INSERT INTO `danh_gia_sp` (`id_danh_gia`, `id_nd`, `id_sp`, `noi_dung`, `id_tra_loi`) VALUES
(1, 126, 74, 'danh_gia', NULL),
(2, 126, 74, 'admin', NULL),
(3, 126, 72, 'admin', NULL),
(4, 126, 74, 'danh', NULL),
(5, 126, 74, 'danh', NULL),
(6, 126, 74, 'a', NULL),
(7, 126, 74, 'danh gia', NULL),
(8, 126, 74, 'a', NULL),
(9, 126, 74, '$danh_gia', NULL),
(10, 126, 74, 'danh gia', NULL),
(11, 126, 74, 'Đây là sản phẩm ngon', NULL),
(12, 126, 74, 'Sản phẩm này còn k ạ', NULL),
(13, 126, 74, '!', NULL),
(14, 126, 74, '!`', NULL),
(15, 126, 72, 'Sản phẩm này còn không ạ?', NULL),
(16, 126, 72, 'Sản phẩm này còn không ạ?\nCòn thì báo 1 tiếng đi nào?', NULL),
(17, 126, 72, 'aa', NULL),
(18, 126, 72, 'chào shop', NULL),
(19, 19, 74, 'Cảm ơn bạn', 11),
(20, 13, 74, 'Có thật sự ngon k vậy?', 11),
(22, 126, 74, 'aa', NULL),
(23, 126, 74, 'admin', NULL),
(24, 126, 74, 'admin1', NULL),
(25, 126, 74, 'admin1\nadmin2', NULL),
(26, 126, 74, 'đánh giá thành công', NULL),
(27, 126, 74, 'fgdfsfghf', NULL),
(28, 126, 74, 'fguihsdfukghdsfkgdfgdfsgdsf', NULL),
(29, 126, 74, 'thành công 1', NULL),
(30, 126, 74, 'thành công 2', NULL),
(31, 126, 74, 'thành công 3', NULL),
(32, 126, 74, 'thành công 4', NULL),
(33, 126, 74, 'thành công 5', NULL),
(34, 126, 74, 'thành công 6', NULL),
(35, 126, 74, 'thành công 7', NULL),
(36, 126, 74, 'thành công 8', NULL),
(37, 126, 74, 'thành công 9', NULL),
(38, 126, 74, 'thành công 10', NULL),
(39, 126, 74, 'thành công 11', NULL),
(40, 126, 74, 'thành công 12', NULL),
(41, 126, 74, 'thành công 13', NULL),
(42, 126, 74, 'dfgdfsgfds', NULL),
(43, 126, 74, 'hay', 42),
(44, 126, 74, 'hay1', 42),
(45, 19, 74, 'hay quá?', 42),
(46, 19, 74, 'ok', 40),
(47, 19, 72, 'chào bạn', 18),
(48, 19, 72, 'bạn khỏe không?', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_nd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_nd`, `id_sp`, `so_luong`, `ngay_tao`) VALUES
(19, 13, 1, '2022-01-04 23:37:22'),
(19, 66, 1, '2022-01-04 23:39:29'),
(19, 68, 1, '2022-01-04 23:37:19'),
(19, 69, 1, '2022-01-04 23:37:25'),
(126, 44, 1, '2022-01-15 06:51:58'),
(126, 71, 1, '2022-01-15 06:51:55'),
(126, 73, 1, '2022-01-15 06:51:48'),
(126, 74, 1, '2022-01-15 06:51:45'),
(126, 75, 1, '2022-01-15 06:51:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_tinh` int(11) NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PhuongThucTT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `MaND`, `NguoiNhan`, `SDT`, `id_tinh`, `DiaChi`, `PhuongThucTT`, `TongTien`, `TrangThai`, `created_at`, `updated_at`) VALUES
(17, 126, 'Đặng Văn Hoài Tú', '0901964693', 15, 'nhà 2', NULL, 35910000, '4', '2022-01-14 19:59:00', '2022-01-14 14:44:05'),
(18, 126, 'Đặng Văn Hoài Tú', '0901964693', 15, 'nhà 2', NULL, 80020000, '1', '2022-01-15 06:49:08', '2022-01-15 06:49:08'),
(19, 126, 'Đặng Văn Hoài Tú', '0901964693', 15, 'nhà 2', NULL, 18000000, '2', '2022-01-15 06:49:29', '2022-01-15 06:49:29'),
(20, 126, 'Đặng Văn Hoài Tú', '0901964693', 15, 'nhà 2', NULL, 4970000, '3', '2022-01-15 06:50:01', '2022-01-15 06:50:01'),
(21, 126, 'Đặng Văn Hoài Tú', '0901964693', 15, 'nhà 2', NULL, 12350000, '0', '2022-01-15 06:50:30', '2022-01-15 06:50:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `TenKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiKM` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GiaTriKM` float(11,0) NOT NULL,
  `don_vi` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayBD` date DEFAULT NULL,
  `TrangThai` int(11) NOT NULL,
  `NgayKT` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `TenKM`, `LoaiKM`, `GiaTriKM`, `don_vi`, `NgayBD`, `TrangThai`, `NgayKT`, `created_at`, `updated_at`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, NULL, NULL, 1, NULL, NULL, NULL),
(3, 'Giá rẻ online', 'GiaReOnline', 650000, 'VNĐ', '2022-01-10', 1, NULL, NULL, NULL),
(4, 'Trả góp 0%', 'TraGop', 0, NULL, '2022-01-01', 1, '2022-01-31', NULL, '2021-12-28 11:32:48'),
(22, 'Tết đến xuân về', 'Lễ', 1000000, 'VNĐ', '2022-01-10', 1, '2022-02-12', '2022-01-11 08:45:52', '2022-01-11 08:45:52'),
(23, 'Sinh nhật 10 năm', 'Sinh nhật', 5, '%', '2022-01-11', 1, '2022-02-11', '2022-01-11 08:55:39', '2022-01-11 08:55:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(11) NOT NULL,
  `TenLSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `TenLSP`, `HinhAnh`, `Mota`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'Apple.jpg', 'Điện thoại apple', NULL, NULL),
(6, 'Vivo', 'Vivo.jpg', 'Các sản phẩm của Vivo', NULL, NULL),
(7, 'Oppo', 'Oppo.jpg', 'Camara Selphi cuc chat tu Oppo', NULL, NULL),
(8, 'SamSung', 'Samsung.jpg', 'Khuyen mai lon tu SamSung', NULL, NULL),
(10, 'Nokia', 'Nokia.jpg', 'Các sản phẩm đến từ thương hiệu Nokia', NULL, NULL),
(14, 'Xiaomi', 'Xiaomi.png', 'Các sản phẩm đến từ thương hiệu Xiaomi', NULL, NULL),
(29, 'VsMart', 'Vsmart42-b_40.png', 'Sản phẩm của VsMart', NULL, NULL),
(30, 'RealMe', 'Realme42-b_37.png', 'Sản phẩm của Real Me', NULL, NULL),
(32, 'eSaver', 'eSaver57-b_47.jpg', 'pin sạc dự phòng', NULL, NULL),
(33, 'AVA', 'AVA57-b_50.jpg', 'Pin sạc dự phòng Ava', NULL, NULL),
(34, 'Mbest', 'Mbest57-b_9.jpg', 'pin sạc dự phòng MBest', NULL, NULL),
(35, 'Sony', 'Sony57-b_43.jpg', 'Pin sạc dự phòng Sony', NULL, NULL),
(36, 'AUKEY', 'AUKEY57-b_51.jpg', 'Pin sạc dự phòng Aukey', NULL, NULL),
(37, 'Xmobile', 'Xmobile57-b_42.jpg', 'Pin sạc dự phòng Xmobile', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `Ho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tinh` int(11) NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Quyen_id` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `email`, `username`, `id_tinh`, `DiaChi`, `password`, `Quyen_id`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Duong', 'Duong', 'Nam', '0976942493', 'duongls2ls@gmail.com', NULL, 1, 'An Vĩnh', 'e99a18c428cb38d5f260853678922e03', 2, 1, NULL, NULL),
(13, 'Nguyễn', 'Trí', '', '02354129852', 'tringuyendb@gmail.com', NULL, 1, '', 'e99a18c428cb38d5f260853678922e03', 1, 1, NULL, NULL),
(14, 'admin', 'admin', 'nam', '23423', 'admin@gmail.com', NULL, 1, 'nui thanh', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, NULL, NULL),
(19, 'Võ ', 'Phong Nhã', '1', '0254255258', 'mona@gmail.com', NULL, 1, 'đasa', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, NULL, NULL),
(126, 'Đặng Văn Hoài', 'Tú', 'Nam', '0901964693', 'dangtu9520@gmail.com', NULL, 15, 'nhà 2', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '2021-12-29 15:21:25', '2022-01-02 00:38:25'),
(131, 'Nguyễn Đắc', 'Toàn', 'Nam', '0123456789', 'toan@gmail.com', NULL, 17, NULL, 'f6fdffe48c908deb0f4c3bd36c032e72', 3, 1, '2022-01-14 14:31:17', '2022-01-14 14:45:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ChiTietQuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Quản trị viên'),
(3, 'Personnel', 'Nhân Viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `TH_id` int(11) NOT NULL,
  `DM_id` int(11) NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `HinhAnh1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KM_id` int(11) DEFAULT NULL,
  `ManHinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HDH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CamSau` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CamTruoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPU` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ram` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Rom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDCard` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pin` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL,
  `thong_so_khac` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `TH_id`, `DM_id`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `KM_id`, `ManHinh`, `HDH`, `CamSau`, `CamTruoc`, `CPU`, `Ram`, `Rom`, `SDCard`, `Pin`, `TrangThai`, `thong_so_khac`, `MoTa`, `created_at`, `updated_at`) VALUES
(4, 8, 1, 'SamSung Galaxy A80', 8890000, 20, 'img/products/samsung-galaxy-a80-050220-050225-400x460.png', '/img/products/samsung-galaxy-a80-vang-hong-8-org.jpg', '/img/products/samsung-galaxy-a80-vang-hong-9-org.jpg', 1, 'Super AMOLED', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, TOF 3D', 'Chính 48 MP & Phụ 8 MP, TOF 3D', 'Snapdragon 730 8 nhân', '8 GB', '128 GB', '', '3700 mAh', NULL, NULL, '', '2020-07-21 19:28:23', '2021-12-29 14:35:22'),
(6, 8, 1, 'SamSung Galaxy S20', 18990000, 10, 'img/products/samsung-galaxy-s20-plus-400x460-fix-400x460.png', '/img/products/samsung-galaxy-s20-plus-xanh-duong-6-org.jpg', '/img/products/samsung-galaxy-s20-plus-xanh-duong-8-org.jpg', 1, 'Dynamic AMOLED 2X', 'Android 10', 'Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D', '10 MP', 'Exynos 990 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '4500 mAh', 1, NULL, '<p>Chiếc điện thoại Samsung Galaxy S20 Plus - Siêu phẩm với thiết màn hình tràn viền, hiệu năng đỉnh cao kết hợp cùng nhiều đột phá về công nghệ dẫn đầu thế giới smartphone.</p><p>Thiết kế màn hình tràn viền, siêu mượt 120 Hz</p><div><br></div>', '2020-07-21 19:33:15', NULL),
(9, 7, 1, 'Oppo A91', 5990000, 10, 'img/products/oppo-a91-trang-400x460-1-400x460.png', '/img/products/oppo-a91-den-6-org.jpg', '/img/products/oppo-a91-den-1-org.jpg', 1, 'AMOLED, 6.4', 'ColorOS 6.1 (Android 9.0)', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '16 MP', 'MediaTek Helio P70 8 nhân', '6 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4025 mAh, có sạc nhanh', 1, NULL, '<p>OPPO A91 là một mẫu smartphone tầm trung mới ra mắt vào cuối năm 2019 của OPPO với nhiều tính năng thú vị, cấu hình ổn cùng giá bán phải chăng.</p><p>Cụm 4 camera độ phân giải 48 MP</p><p>Dung lượn Ram và Rom lớn</p><p>Một ngoại hình bóng bẩy</p>', '2020-07-23 15:55:13', NULL),
(10, 7, 1, 'Oppo A92', 6490000, 9, 'img/products/oppo-a92-tim-400x460-400x460.png', '/img/products/oppo-a92-tim-1-org.jpg', '/img/products/oppo-a92-tim-6-org.jpg', 4, 'TFT LCD, 6.5', 'Android 10', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '16 MP', 'Snapdragon 665 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5000 mAh, có sạc nhanh', 1, NULL, '<p>OPPO A92 là mẫu smartphone tầm trung vừa mới được OPPO ra mắt đầu tháng 5/2020. Chiếc điện thoại gây ấn tượng với thiết kế màn hình khoét lỗ tràn viền, cụm 4 camera ấn tượng và được bán với mức giá vô cùng phải chăng.</p><p>Hiệu năng mạnh mẽ trên Snapdragon</p><p>Dung lượn pin khủng kết hợp với sạc nhanh</p><p>Màn hình siêu tràn viền thời đại mới</p><p>Bộ 4 camera bắt trọn mọi khoảnh khắc</p>', '2020-07-23 15:56:28', NULL),
(13, 7, 1, 'Oppo Reno3 Pro', 11490000, 9, 'img/products/oppo-reno3-pro-den-400x460-400x460.png', '/img/products/oppo-reno3-pro-trang-1-org.jpg', '/img/products/oppo-reno3-pro-trang-7-org.jpg', 4, 'Sunlight Super AMOLED, 6.4', 'Android 10', 'Chính 64 MP & Phụ 13 MP, 8 MP, 2 MP', 'Chính 44 MP & Phụ 2 MP', 'MediaTek Helio P95 8 nhân', '8 GB', '256 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4025 mAh, có sạc nhanh', 1, NULL, '<p>OPPO Reno3 Pro tiếp nối truyền thống dòng Reno, vẫn sở hữu cụm camera sau chất lượng cao và bổ sung tính năng quay video Siêu chống rung 2.0 ấn tượng. OPPO cũng trang bị cho máy cụm camera selfie kép tích hợp AI, thiết kế cao cấp cùng màn hình siêu mượt 90Hz theo kịp xu hướng.</p><p>Màn hình nốt ruồi kép, siêu mượt 90Hz</p><p>Camera chất lượng hàng đầu</p><p>Pin dùng cả ngày, sạc siêu nhanh VOOC 4.0</p>', '2020-07-23 15:59:28', NULL),
(14, 14, 1, 'Xiaomi Mi A3', 3490000, 5, 'img/products/xiaomi-mi-a3-white-400x460.png', '/img/products/xiaomi-mi-a3-xanh-1-org.jpg', '/img/products/xiaomi-mi-a3-xanh-6-org.jpg', 4, 'AMOLED, 6.01', 'Android 9 Pie (Android One)', 'Chính 48 MP & Phụ 8 MP, 2 MP', '32 MP', 'Snapdragon 665 8 nhân', '4 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4030 mAh, có sạc nhanh', 1, NULL, '<p>Xiaomi đã và đang khá thành công với các sản phẩm thuộc dòng Mi A của mình và mới đây hãng đã tiếp tục cho ra mắt phiên bản nâng cấp là chiếc Xiaomi Mi A3 (Mi CC9e) với cải tiến mạnh mẽ về camera và hiệu năng bên trong.</p><p>Cụm 3 camera ở mặt lưng</p><p>Thiết kế lột xác so với thế hệ cũ</p><p>Hiệu nawg vẫn rất mạnh mẽ</p>', '2020-07-23 16:00:23', NULL),
(15, 14, 1, 'Xiaomi Note 8 Pro', 5690000, 5, 'img/products/xiaomi-redmi-note-8-pro-6gb-128gb-white-400x460.png', '/img/products/xiaomi-redmi-note-8-pro-6gb-128gb-6-1-org.jpg', '/img/products/xiaomi-redmi-note-8-pro-6gb-128gb-8-1-org.jpg', 1, 'IPS LCD, 6.53', 'Android 9.0 (Pie)', 'Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP', '20 MP', 'MediaTek Helio G90T 8 nhân', '6 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4500 mAh, có sạc nhanh', 1, NULL, '<p>Là phiên bản nâng cấp của chiếc Xiaomi Redmi Note 7 Pro đã \"làm mưa làm gió\" trên thị trường trước đó, chiếc Xiaomi Redmi Note 8 Pro (6GB/128GB) sẽ là sự lựa chọn hàng đầu dành cho người dùng quan tâm nhiều về hiệu năng và camera của một chiếc máy tầm trung.</p><p>Hiệu năng hàng đầu phân khúc</p><p>Camera được đầu tư mạnh mẽ</p><p>Pin khủng còn sạc nhanh</p><p>Màn hình lớn, trải nghiệm thích hơn</p>', '2020-07-23 16:01:26', NULL),
(16, 14, 1, 'Xiaomi Note 10 Lite', 9990000, 10, 'img/products/xiaomi-mi-note-10-lite-400x460-trang-1-400x460.png', '/img/products/xiaomi-mi-note-10-lite-den-6-org.jpg', '/img/products/xiaomi-mi-note-10-lite-den-7-org.jpg', 4, 'AMOLED, 6.47', 'Android 10', 'Chính 64 MP & Phụ 8 MP, 5 MP, 2 MP', '16 MP', 'Snapdragon 730G 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5260 mAh, có sạc nhanh', 1, NULL, '<p>Xiaomi Mi Note 10 Lite là thế hệ Mi Note tiếp theo vừa được Xiaomi chính thức ra mắt vào tháng 5/2020. Máy sở hữu nhiều trang bị hấp dẫn với bộ 4 camera lên đến 64 MP, thiết kế thời trang cùng màn hình AMOLED cong 3D quyến rũ.</p><p>Thời trang và thanh thoát với màn hình tràn viền 3D</p><p>Chụp ảnh với bộ 4 camera lên đến 64 MP</p><p>Pin vượt ngưỡng 5000 mAh, sử dụng thả ga</p><p>Hệ điều hành Android 10 sử dụng giao diện MIUI nhiều tính năng hấp dẫn</p>', '2020-07-23 16:03:30', NULL),
(17, 14, 1, 'Xiaomi Note 10 Pro', 13900000, 9, 'img/products/xiaomi-mi-note-10-pro-black-400x460.png', '/img/products/xiaomi-mi-note-10-pro-den-1-org.jpg', '/img/products/xiaomi-mi-note-10-pro-den-6-org.jpg', 1, 'AMOLED, 6.47\", Full HD+', 'Android 9.0 (Pie)', 'Chính 108 MP & Phụ 20 MP, 12 MP, 5 MP, 2 MP', '32 MP', 'Snapdragon 730G 8 nhân', '8 GB', '256 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5260 mAh, có sạc nhanh', 1, NULL, '<p>Siêu phẩm tầm trung Xiaomi Mi Note 10 Pro, chiếc smartphone đầu tiên sở hữu ống kính độ phân giải 108 MP cùng hệ thống 5 camera độc đáo, công nghệ sạc siêu nhanh 30W đi kèm nhiều tính năng nổi trội khác.</p><p>Thiết kế cao cấp</p><p>Màn hình cong tràn ', '2020-07-22 09:30:01', NULL),
(18, 14, 1, 'Xiaomi Redmi Note 9s', 5990000, 10, 'img/products/xiaomi-redmi-note-9s-400x460-400x460.png', '/img/products/xiaomi-redmi-note-9s-xanh-la-1-org.jpg', '/img/products/xiaomi-redmi-note-9s-xanh-la-6-org.jpg', 4, 'IPS LCD, 6.67', 'Android 10', 'Chính 48 MP & Phụ 8 MP, 5 MP, 2 MP', '16 MP', 'Snapdragon 720 8 nhân', '6 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '5020 mAh, có sạc nhanh', 1, NULL, '<p>Redmi Note 9s là sản phẩm tầm trung nhà Xiaomi, gây ấn tượng với thiết kế tràn viền độc đáo, cấu hình mạnh mẽ và hệ thống bốn camera sau chất lượng.</p><p>Thiết kế cao cấp, vân tay dời sang cạnh bên</p><p>Mạnh mẽ vượt trội trong phân khúc</p><p>Chụp ảnh ấn tượng với cụm camera lên đến 48 MP</p>', '2020-07-23 16:04:51', NULL),
(19, 29, 1, 'VsMart Active 3', 3960000, 4, 'img/products/vsmart-active-3-6gb-purple-ruby-400x460-1-400x460.png', '/img/products/vsmart-active-3-6gb-tim-6-org.jpg', '/img/products/vsmart-active-3-6gb-tim-8-org.jpg', 3, 'AMOLED, 6.39', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, 2 MP', '16 MP', 'MediaTek Helio P60 8 nhân', '6 GB', '64 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4020 mAh, có sạc nhanh', 1, NULL, '<p>Ra mắt vào đầu năm 2020, Vsmart Active 3 (4GB/64GB) là một smartphone có hiệu năng ổn định, thời lượng pin cả ngày dài và còn nhiều tính năng đặc biệt khác nữa, hứa hẹn sẽ mang đến cho bạn một thiết bị công nghệ chẳng những thời trang còn rất hiện đại.</p><p>Sang trọng với mặt lưng kính, hiệu ứng gradient thời thượng</p><p>Màn hình tràn viền sống động</p><p>Bộ 3 camera chuyên nghiệp, camera chính lên đến 48 MP</p><p>Hiệu năng ảnh, xử lý mượt mà</p><p>Hệ điều hành tối ưu cho người Việt</p>', '2020-07-23 16:07:03', NULL),
(20, 29, 1, 'VsMart Bee 3', 1590000, 20, 'img/products/vsmart-bee-3-white400x460-400x460.png', '/img/products/vsmart-bee-3-den-6-org.jpg', '/img/products/vsmart-bee-3-den-7-org.jpg', 3, 'IPS LCD, 6.0', 'Android 9.0 (Pie)', '8 MP', '5 MP', 'MediaTek MT6739WW 4 nhân', '2 GB', '16 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '3000 mAh', 1, NULL, '<p>Vsmart Bee 3 là một chiếc smartphone với mức giá siêu rẻ được ra đời để phục vụ người dùng. Máy sở hữu hiệu năng đủ dùng cùng camera chất lượng tốt, màn hình lớn thoải mái và hệ điều hành VOS được tối ưu dành riêng cho người Việt.</p><p>Màn hình rộng rãi lên đến 6 inch</p><p>Camera sắc nét trong tầm giá</p><p>Hiệu năng mượt mà, thoái mái lưu trữ</p><p>Thời lượng pin vượt trội</p><p>Thiết kế đơn giản, nhẹ nhàng</p>', '2020-07-23 16:08:30', NULL),
(21, 29, 1, 'VsMart Joy 3', 2290000, 19, 'img/products/vsmart-joy-3-2gb-tim-400x460-400x460.png', '/img/products/vsmart-joy-3-2gb-trang-6-1-org.jpg', '/img/products/vsmart-joy-3-2gb-trang-8-1-org.jpg', 3, 'IPS LCD, 6.5', 'Android 9.0 (Pie)', 'Chính 13 MP & Phụ 8 MP, 2 MP', '8 MP', 'Snapdragon 632 8 nhân', '2 GB', '32 GB', 'MicroSD, hỗ trợ tối đa 64 GB', '5000 mAh, có sạc nhanh', 1, NULL, '<p>Vsmart Joy 3 2GB/32GB là chiếc điện thoại thương hiệu Việt với thiết kế màn hình giọt nước, cụm camera ấn tượng, dung lượng pin khủng đi kèm mức giá bán cực kỳ bình dân.</p><p>Thiết kế sang trọng</p><p>Cụm ba camera độc đáo, xóa phông ảo diệu</p><p>Thời lượng pin lâu có hỗ trợ sạc nhanh</p><p>Hiệu năng mạnh mẽ trong phân khúc</p>', '2020-07-23 16:09:52', NULL),
(23, 30, 1, 'Realme 5Pro', 4990000, 19, 'img/products/realme-5-pro-white-chi-tiet-400x460.png', '/img/products/realme-5-pro-trang-6-org.jpg', '/img/products/realme-5-pro-trang-9-org.jpg', 3, 'IPS LCD, 6.3', 'Android 9.0 (Pie)', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '16 MP', 'Snapdragon 712 8 nhân', '4 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4035 mAh, có sạc nhanh', 1, NULL, '<p>Realme 5 Pro 4GB/128GB, đúng như tên gọi thì đây sẽ là phiên bản cao cấp hơn của chiếc Realme 5 nhằm hướng tới đối tượng người dùng đòi hỏi nhiều hơn về cấu hình của một chiếc smartphone.</p><p>Hiệu năng nâng cấp mạnh mẽ</p><p>Camera hàng đầu phân khúc</p><p>Nhiều trang bị chỉ có trên những chiếc máy cao cấp</p>', '2020-07-23 16:12:46', NULL),
(24, 30, 1, 'Realme 6 Pro', 7990000, 9, 'img/products/realme-6-pro-do-400x460-3-400x460.png', '/img/products/realme-6-pro-mau-do-1-org.jpg', '/img/products/realme-6-pro-mau-do-6-org.jpg', 4, 'IPS LCD, 6.6', 'Android 10', 'Chính 64 MP & Phụ 12 MP, 8 MP, 2 MP', 'Chính 16 MP & Phụ 8 MP', 'Snapdragon 720G 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4300 mAh, có sạc nhanh', 1, NULL, '<p>Realme 6 Pro là mẫu smartphone cao cấp hơn trong bộ đôi Realme 6 Series mới ra mắt của Realme. Vẫn với tiêu chí smartphone cấu hình mạnh - giá tốt, Realme 6 Pro còn nổi bật với cụm 6 camera ấn tượng, màn hình siêu mượt 90 Hz theo xu hướng.</p><p>Realme 6 Pro: 6 camera cực đỉnh</p><p>Cấu hình mạnh mẽ trong phân khúc</p><p>Màn nhình 90Hz siêu mượt</p><p>Pin lớn kèm sạc nhanh</p>', '2020-07-23 16:13:52', NULL),
(28, 35, 3, 'Sạc dự phòng  5.000 mAh', 472000, 10, 'img/products/sac-du-phong-polymer-5000mah-sony-cp-v5b-bc-la-600x600.jpg', '/img/products/sac-du-phong-polymer-5000mah-sony-cp-v5b-bc-la-2-org.jpg', '/img/products/sac-du-phong-polymer-5000mah-sony-cp-v5b-bc-la-3-org.jpg', 1, '', '', '', '', '', NULL, NULL, '', '', 1, NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1;\">Thông số kỹ thuật</h2><ul class=\"parameter tableparameter_acc\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 0px; list-style: none; position: relative; overflow: hidden; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><li class=\"g7619 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\"><a href=\"https://www.thegioididong.com/hoi-dap/hieu-suat-sac-cua-pin-sac-du-phong-co-y-nghia-gi-1198538\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Hiệu suất sạc:</a></span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">65%</span></div></li><li class=\"g23370 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Dung lượng pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10.000 mAh</span></div></li><li class=\"g6440 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thời gian sạc đầy pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10 - 11 giờ (dùng Adapter 1A)</span><span style=\"margin: 0px; padding: 0px;\">5 - 6 giờ (dùng Adapter 2A)</span></div></li><li class=\"g6441 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn vào:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Micro USB/Lightning: 5V - 2A</span></div></li><li class=\"g21149 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn ra:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">USB: 5V - 2A</span></div></li><li class=\"g12099 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Lõi pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\"><a href=\"https://www.thegioididong.com/hoi-dap/so-sanh-pin-li-ion-va-pin-li-po-651833#lipo\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Pin Polymer (Li-Po)</a></span></div></li><li class=\"g21148 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Công nghệ/Tiện ích:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Đèn LED báo hiệu</span></div></li><li class=\"g8942 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Kích thước:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Dài 13.9 cm - Ngang 7.09 cm - Dày 1.6 cm</span></div></li><li class=\"g21150 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Trọng lượng:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">228 g</span></div></li><li class=\"g14787 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Sản xuất tại:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Trung Quốc</span></div></li></ul>', '2020-07-23 16:14:58', NULL),
(29, 37, 3, 'Sạc dự phòng 15.000 mAh', 850000, 10, 'img/products/sac-du-phong-15000mah-type-c-xmobile-pj-jp200-xam-1-1-600x600.jpg', '/img/products/sac-du-phong-15000mah-type-c-xmobile-pj-jp200-xam-4-1-org.jpg', '/img/products/sac-du-phong-15000mah-type-c-xmobile-pj-jp200-xam-5-org.jpg', 1, '', '', '', '', '', NULL, NULL, '', '', 1, NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, \"DejaVu Sans\", \"Liberation Sans\", Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1;\">Thông số kỹ thuật</h2><ul class=\"parameter tableparameter_acc\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 0px; list-style: none; position: relative; overflow: hidden; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \"DejaVu Sans\", \"Liberation Sans\", Freesans, sans-serif; font-size: 14px;\"><li class=\"g7619 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\"><a href=\"https://www.thegioididong.com/hoi-dap/hieu-suat-sac-cua-pin-sac-du-phong-co-y-nghia-gi-1198538\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Hiệu suất sạc:</a></span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">65%</span></div></li><li class=\"g23370 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Dung lượng pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">15.000 mAh</span></div></li><li class=\"g6440 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thời gian sạc đầy pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10 - 11 giờ (dùng Adapter 1A)</span><span style=\"margin: 0px; padding: 0px;\">5 - 6 giờ (dùng Adapter 2A)</span></div></li><li class=\"g6441 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn vào:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Micro USB/Lightning: 5V - 2A</span></div></li><li class=\"g21149 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn ra:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">USB: 5V - 2A</span></div></li><li class=\"g12099 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Lõi pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\"><a href=\"https://www.thegioididong.com/hoi-dap/so-sanh-pin-li-ion-va-pin-li-po-651833#lipo\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Pin Polymer (Li-Po)</a></span></div></li><li class=\"g21148 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Công nghệ/Tiện ích:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Đèn LED báo hiệu</span></div></li><li class=\"g8942 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Kích thước:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Dài 13.9 cm - Ngang 7.09 cm - Dày 1.6 cm</span></div></li><li class=\"g21150 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Trọng lượng:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">228 g</span></div></li><li class=\"g14787 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Sản xuất tại:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Trung Quốc</span></div></li></ul>', '2020-07-23 16:16:20', NULL),
(30, 36, 3, 'Sạc dự phòng 10.000mAh', 490000, 0, 'img/products/sac-du-phong-polymer-10000mah-type-c-aukey-pb-xn10-1-1-600x600.jpg', '/img/products/sac-du-phong-polymer-10000mah-type-c-aukey-pb-xn10-3-org.jpg', '/img/products/sac-du-phong-polymer-10000mah-type-c-aukey-pb-xn10-4-org.jpg', 1, '', '', '', '', '', NULL, NULL, '', '', 1, NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1;\">Thông số kỹ thuật</h2><ul class=\"parameter tableparameter_acc\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 0px; list-style: none; position: relative; overflow: hidden; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><li class=\"g7619 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\"><a href=\"https://www.thegioididong.com/hoi-dap/hieu-suat-sac-cua-pin-sac-du-phong-co-y-nghia-gi-1198538\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Hiệu suất sạc:</a></span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">65%</span></div></li><li class=\"g23370 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Dung lượng pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10.000 mAh</span></div></li><li class=\"g6440 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thời gian sạc đầy pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10 - 11 giờ (dùng Adapter 1A)</span><span style=\"margin: 0px; padding: 0px;\">5 - 6 giờ (dùng Adapter 2A)</span></div></li><li class=\"g6441 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn vào:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Micro USB/Lightning: 5V - 2A</span></div></li><li class=\"g21149 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn ra:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">USB: 5V - 2A</span></div></li><li class=\"g12099 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Lõi pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\"><a href=\"https://www.thegioididong.com/hoi-dap/so-sanh-pin-li-ion-va-pin-li-po-651833#lipo\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Pin Polymer (Li-Po)</a></span></div></li><li class=\"g21148 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Công nghệ/Tiện ích:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Đèn LED báo hiệu</span></div></li><li class=\"g8942 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Kích thước:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Dài 13.9 cm - Ngang 7.09 cm - Dày 1.6 cm</span></div></li><li class=\"g21150 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Trọng lượng:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">228 g</span></div></li><li class=\"g14787 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Sản xuất tại:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Trung Quốc</span></div></li></ul>', '2020-07-23 16:16:15', NULL),
(31, 32, 3, 'Sạc dự phòng 10.000mAh', 850000, 10, 'img/products/pin-sac-du-phong-polymer-10000mah-lightning-esaver-add-1-600x600.jpg', '/img/products/pin-sac-du-phong-polymer-10000mah-lightning-esaver-3-org.jpg', '/img/products/pin-sac-du-phong-polymer-10000mah-lightning-esaver-4-org.jpg', 1, '', '', '', '', '', NULL, '', '', '', 1, NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1;\">Thông số kỹ thuật</h2><ul class=\"parameter tableparameter_acc\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 0px; list-style: none; position: relative; overflow: hidden; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><li class=\"g7619 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\"><a href=\"https://www.thegioididong.com/hoi-dap/hieu-suat-sac-cua-pin-sac-du-phong-co-y-nghia-gi-1198538\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Hiệu suất sạc:</a></span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">64%</span></div></li><li class=\"g23370 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Dung lượng pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10.000 mAh</span></div></li><li class=\"g6440 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thời gian sạc đầy pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10 - 11 giờ (dùng Adapter 1A)</span><span style=\"margin: 0px; padding: 0px;\">5 - 6 giờ (dùng Adapter 2A)</span></div></li><li class=\"g6441 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn vào:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Micro USB: 5V - 2A</span></div></li><li class=\"g21149 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn ra:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">USB: 5V - 2.1A</span></div></li><li class=\"g12099 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Lõi pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\"><a href=\"https://www.thegioididong.com/hoi-dap/so-sanh-pin-li-ion-va-pin-li-po-651833#lipo\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Pin Polymer (Li-Po)</a></span></div></li><li class=\"g21148 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Công nghệ/Tiện ích:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Đèn LED báo hiệu</span></div></li><li class=\"g8942 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Kích thước:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Dài 14.3 cm - ngang 7.5 cm - Dày 1.5 cm</span></div></li><li class=\"g21150 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Trọng lượng:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">233g</span></div></li><li class=\"g20963 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thương hiệu của:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Thế Giới Di Động</span></div></li><li class=\"g14787 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Sản xuất tại:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Trung Quốc</span></div></li></ul>', '2020-07-23 16:21:59', NULL);
INSERT INTO `sanpham` (`id`, `TH_id`, `DM_id`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `KM_id`, `ManHinh`, `HDH`, `CamSau`, `CamTruoc`, `CPU`, `Ram`, `Rom`, `SDCard`, `Pin`, `TrangThai`, `thong_so_khac`, `MoTa`, `created_at`, `updated_at`) VALUES
(32, 34, 3, 'Sạc dự phòng 10.000mAh', 700000, 10, 'img/products/sac-du-phong-10000mah-type-c-qc30-mbest-ds506-wb-ava-1-600x600.jpg', '/img/products/sac-du-phong-10000mah-type-c-qc30-mbest-ds506-wb-5-2-org.jpg', '/img/products/sac-du-phong-10000mah-type-c-qc30-mbest-ds506-wb-4-2-org.jpg', 1, '', '', '', '', '', NULL, '', '', '', 1, NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1;\">Thông số kỹ thuật</h2><ul class=\"parameter tableparameter_acc\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 0px; list-style: none; position: relative; overflow: hidden; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><li class=\"g7619 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\"><a href=\"https://www.thegioididong.com/hoi-dap/hieu-suat-sac-cua-pin-sac-du-phong-co-y-nghia-gi-1198538\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Hiệu suất sạc:</a></span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">65%</span></div></li><li class=\"g23370 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Dung lượng pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10.000 mAh</span></div></li><li class=\"g6440 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thời gian sạc đầy pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10 - 11 giờ (dùng Adapter 1A)</span><span style=\"margin: 0px; padding: 0px;\">5 - 6 giờ (dùng Adapter 2A)</span></div></li><li class=\"g6441 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn vào:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Micro USB/Lightning: 5V - 2A</span></div></li><li class=\"g21149 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn ra:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">USB: 5V - 2A</span></div></li><li class=\"g12099 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Lõi pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\"><a href=\"https://www.thegioididong.com/hoi-dap/so-sanh-pin-li-ion-va-pin-li-po-651833#lipo\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Pin Polymer (Li-Po)</a></span></div></li><li class=\"g21148 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Công nghệ/Tiện ích:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Đèn LED báo hiệu</span></div></li><li class=\"g8942 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Kích thước:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Dài 13.9 cm - Ngang 7.09 cm - Dày 1.6 cm</span></div></li><li class=\"g21150 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Trọng lượng:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">228 g</span></div></li><li class=\"g14787 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Sản xuất tại:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Trung Quốc</span></div></li></ul>', '2020-07-23 16:16:31', NULL),
(33, 36, 3, 'Cáp Micro USB 1.2mAukey', 119000, 5, 'img/products/cap-micro-usb-12m-aukey-cb-am1-den-trang-1-600x600.jpg', '/img/products/cap-micro-usb-12m-aukey-cb-am1-den-trang-3-org.jpg', '/img/products/cap-micro-usb-12m-aukey-cb-am1-den-trang-4-org.jpg', 1, '', '', '', '', '', NULL, '', '', '', 1, NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1;\">Thông số kỹ thuật</h2><ul class=\"parameter tableparameter_acc\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 0px; list-style: none; position: relative; overflow: hidden; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><li class=\"g12321 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Chức năng:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Sạc</span><span style=\"margin: 0px; padding: 0px;\">Truyền dữ liệu</span></div></li><li class=\"g8061 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Đầu ra:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Micro USB: 5V - 2A</span></div></li><li class=\"g8059 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Độ dài dây:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">1 m</span></div></li><li class=\"g21338 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thương hiệu của:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Thế Giới Di Động</span></div></li><li class=\"g14627 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Sản xuất tại:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Trung Quốc</span></div></li></ul><div class=\"callorder\" style=\"margin: -10px 0px 0px; padding: 0px 10px; overflow: hidden; font-size: 14px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;\"=\"\"></div>', '2020-07-23 16:17:13', NULL),
(35, 32, 3, 'Sạc dây Nokia e.Saver X032', 50000, 0, 'img/products/sac-day-nokia-dau-nho-esaver-x032-trang-ava-600x600.jpg', '/img/products/sac-day-nokia-dau-nho-esaver-x032-trang-1-7-org.jpg', '/img/products/sac-day-nokia-dau-nho-esaver-x032-trang-3-1-org.jpg', 1, '', '', '', '', '', NULL, '', '', '', 1, NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1;\">Thông số kỹ thuật</h2><ul class=\"parameter tableparameter_acc\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 0px; list-style: none; position: relative; overflow: hidden; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><li class=\"g12321 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Chức năng:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Sạc</span></div></li><li class=\"g8061 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Đầu ra:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">USB: 5V - 2.4A</span></div></li><li class=\"g21338 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thương hiệu của:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Thế Giới Di Động</span></div></li><li class=\"g14627 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Sản xuất tại:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Trung Quốc</span></div></li></ul>', '2020-07-23 16:17:43', NULL),
(37, 37, 3, 'Sạc dự phòng 10.000 mAh', 700000, 0, 'img/products/sac-du-phong-10000mah-type-c-energizer-ue10047pq-6-org.jpg', '/img/products/sac-du-phong-polymer-10000mah-qc30-xmobile-p68d-5-org.jpg', '/img/products/sac-du-phong-polymer-10000mah-qc30-xmobile-p68d-6-org.jpg', 1, '', '', '', '', '', NULL, '', '', '', 1, NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 20px; line-height: 1.3em; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; color: rgb(51, 51, 51); outline: none; zoom: 1;\">Thông số kỹ thuật</h2><ul class=\"parameter tableparameter_acc\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 10px 0px 0px; list-style: none; position: relative; overflow: hidden; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(51, 51, 51); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><li class=\"g7619 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\"><a href=\"https://www.thegioididong.com/hoi-dap/hieu-suat-sac-cua-pin-sac-du-phong-co-y-nghia-gi-1198538\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Hiệu suất sạc:</a></span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">65%</span></div></li><li class=\"g23370 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Dung lượng pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10.000 mAh</span></div></li><li class=\"g6440 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thời gian sạc đầy pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">10 - 11 giờ (dùng Adapter 1A)</span><span style=\"margin: 0px; padding: 0px;\">5 - 6 giờ (dùng Adapter 2A)</span></div></li><li class=\"g6441 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn vào:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Micro USB: 5V - 2A</span></div></li><li class=\"g21149 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Nguồn ra:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">USB: 5V - 2A</span></div></li><li class=\"g12099 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Lõi pin:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\"><a href=\"https://www.thegioididong.com/hoi-dap/so-sanh-pin-li-ion-va-pin-li-po-651833#pin-li-ion\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(40, 138, 214);\">Pin Li-Ion</a></span></div></li><li class=\"g21148 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Công nghệ/Tiện ích:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Đèn LED báo hiệu</span></div></li><li class=\"g21150 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Trọng lượng:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">240g</span></div></li><li class=\"g20963 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238);\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Thương hiệu của:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Thế Giới Di Động</span></div></li><li class=\"g14787 \" style=\"margin: 0px; padding: 5px 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 360px; border-top: 1px solid rgb(238, 238, 238); border-bottom: 0px;\"><span style=\"margin: 0px; padding: 5px 0px; display: table-cell; width: 144px; vertical-align: top; color: rgb(102, 102, 102);\">Sản xuất tại:</span><div style=\"margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top;\"><span style=\"margin: 0px; padding: 0px;\">Trung Quốc</span></div></li></ul>', '2020-07-23 16:21:17', NULL),
(42, 32, 3, 'Đế điện thoại eSaver', 35000, 10, 'img/products/de-dien-thoai-esaver-jhd-171-xanh-trang-add-600x600.jpg', '/img/products/de-dien-thoai-esaver-jhd-171-xanh-trang-xam-2-org.jpg', '/img/products/de-dien-thoai-esaver-jhd-171-xanh-trang-xam-5-org.jpg', 1, '', '', '', '', '', NULL, '', '', '', 1, NULL, '<p>Thiết kế nhỏ gọn, bắt mắt.</p><p>Góc nghiêng 45 độ vừa tầm nhìn người dùng.</p><p>Đế bám chặt với điện thoại nhờ lớp keo dính 2 mặt chắn chắc.</p><p>Dễ dàng theo dõi thông báo trong lúc làm việc.</p>', '2020-07-22 20:17:45', NULL),
(44, 1, 1, 'iPhone 11 Pro Max 512GB', 35000000, 10, 'img/products/iphone-11-pro-max-512gb-gold-400x460.png', '/img/products/iphone-11-pro-max-512gb-xanh-6-org.jpg', '/img/products/iphone-11-pro-max-512gb-xanh-1-1-org.jpg', 4, 'OLED, 6.5', 'iOS 13', '3 camera 12 MP', '12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '512 GB', 'Không có', '3969 mAh, có sạc nhanh', 1, NULL, '<blockquote>Để tìm kiếm một chiếc smartphone có hiệu năng mạnh mẽ và có thể sử dụng mượt mà trong 2-3 năm tới thì không có chiếc máy nào xứng đang hơn chiếc iPhone 11 Pro Max 512GB mới ra mắt trong năm 2019 của Apple</blockquote><blockquote>Hiệu năng \"đè bẹp\" mọi đối thủ</blockquote>', '2020-07-22 22:01:48', '2022-01-14 14:43:29'),
(45, 1, 1, 'iPhone 11 Pro Max 256GB', 28000000, 10, 'img/products/iphone-11-pro-max-256gb-black-400x460.png', '/img/products/iphone-11-pro-max-256gb-mau-bac-1-org.jpg', '/img/products/iphone-11-pro-max-256gb-mau-bac-6-org.jpg', 4, 'OLED, 6.5', 'iOS 13', '3 camera 12 MP', '12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '256 GB', 'Không có', '3969 mAh, có sạc nhanh', 1, NULL, '<blockquote>iPhone 11 Pro Max 256GB là chiếc iPhone cao cấp nhất trong bộ 3 iPhone Apple giới thiệu trong năm 2019 và quả thực chiếc smartphone này mang trong mình nhiều trang bị xứng đáng với tên gọi \"Pro\".<br>Pro về camera sau<br>Pro luôn cả camera trướ', '2020-07-23 14:08:58', NULL),
(46, 1, 1, 'iPhone 11 256GB', 21990000, 120, 'img/products/iphone-11-128gb-green-400x460.png', '/img/products/iphone-11-128gb-xanh-la-7-org.jpg', '/img/products/iphone-11-256gb-xanh-la-4-org.jpg', 4, ' IPS LCD', 'iOS 15', '2 camera 12 MP', '12 MP', 'Apple A13 Bionic 6 nhân', '4 GB', '256 GB', '', '3110 mAh', 1, NULL, '<p>iPhone 11 256GB là chiếc máy có mức giá khá dễ chịu đến từ Apple. Nếu bạn không muốn bỏ ra số tiền quá lớn mà vẫn có được những nâng cấp về camera hay một hiệu năng đầy mạnh mẽ thì đây thực sự là một lựa chọn hàng đầu dành cho bạn.</p><p>Hiệu năng vẫn tương đương phiên bản Pro Max</p><p>Camera cải tiến lớn</p><p>Màu sắc mới, thiết kế đẹp hơn</p><p>Thời lượng pin đã tốt nay còn tốt hơn</p>', '2020-07-22 22:01:11', NULL),
(48, 1, 1, 'iPhone 8 Plus 128GB', 15990000, 20, 'img/products/iphone-8-plus-128gb-082720-052722-400x460.png', '/img/products/iphone-8-plus-vang-dong-1-org.jpg', '/img/products/iphone-8-plus-vang-dong-4-org.jpg', 1, 'LED-backlit IPS LCD, 5.5', 'iOS 13', 'Chính 12 MP & Phụ 12 MP', '7 MP', 'Apple A11 Bionic 6 nhân', '3 GB', '128 GB', 'Không có', '2691 mAh, có sạc nhanh', 1, NULL, '<blockquote>Fan trung thành của nhà Táo thì chắc hẳn không nên bỏ qua iPhone 8 Plus 128GB, một bản nâng cấp từ iPhone 7 Plus, được tích hợp thêm sạc không dây, chipset A11 Bionic 6 nhân mạnh mẽ cùng các tính năng mới giúp cho việc trải nghiệm lâu dài tốt ', '2020-07-22 22:01:02', NULL),
(56, 6, 1, 'Vivo V19', 8590000, 10, 'img/products/vivo-v19-xanh-400x460-400x460.png', '/img/products/vivo-v19-bac-1-org.jpg', '/img/products/vivo-v19-bac-6-org.jpg', 1, 'Super AMOLED, 6.44\", Full HD+', 'Android 10', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Chính 32 MP & Phụ 8 MP', 'Snapdragon 712 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '4500 mAh, có sạc nhanh', 1, NULL, '<p>Vivo V19 là mẫu smartphone tầm trung ra mắt vào đầu năm 2020 của Vivo. Thiết bị ghi điểm ở thiết kế thời trang, khả năng chụp ảnh đêm ấn tượng, cụm 4 camera đa dụng và công nghệ sạc nhanh vượt trội 33W.</p><p>Thiết kế nổi bật, trải nghiệm hình ảnh không giới hạn</p><p>4 camera ấn tượng, chụp đêm cực chất</p><p>Cấu hình mạnh mẽ, sạc siêu nhanh 33W</p><div><br></div>', '2020-07-23 17:15:27', NULL),
(57, 1, 1, 'iPhone SE 12', 14490000, 10, 'img/products/ip1.png', '/img/products/ip2.jpg', '/img/products/ip3.jpg', 1, 'IPS LCD, 4.7\", Retina', 'iOS 13', 'Chính 12 MP & Phụ 12 MP', '7 MP', 'Apple A13 Bionic 6 nhân', '8 GB', '128 GB', '', '2691 mAh, có sạc nhanh', 1, NULL, '<p>Sau bao ngày chờ đợi, iPhone SE 2020 cuối cùng đã được ra mắt làm thỏa mãn triệu tín đồ Táo khuyết. Sở hữu thiết kế siêu nhỏ gọn như iPhone 8, chip A13 Bionic cho hiệu năng khủng như iPhone 11, nhưng iPhone SE 2020 lại có một mức giá tốt đến bất ngờ.</p><p>Thiết kế nhỏ gọn trong lòng bàn tay.</p><p>Cấu hình “không đối thủ” trong tầm giá</p><p>Camera đơn - đa tính năng</p><p>Sở hữu công nghệ đỉnh cao với mức giá phải chăng</p>', '2020-07-23 17:20:44', NULL),
(65, 1, 2, 'Ốp Iphone 13', 100000, 213, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-30 07:33:56', '2021-12-30 07:33:56'),
(66, 8, 1, 'Samsung Galaxy S21 Ultra 5G 128GB', 30000000, 49, 'img/products/samsung-galaxy-s21-ultra-bac-600x600-1-200x200.png', 'img/products/samsung-galaxy-s21-ultra-bac-4-org.jpg', 'img/products/samsung-galaxy-s21-ultra-bac-5-org.jpg', 1, 'Dynamic AMOLED 2X', '\nAndroid 11', '\nChính 108 MP & Phụ 12 MP, 10 MP, 10 MP', '\n40 MP', '\nExynos 2100 8 nhân', '12 GB', '128 GB', NULL, '\n5000 mAh', 1, NULL, '<p>Sự đẳng cấp được Samsung gửi gắm thông qua chiếc smartphone Galaxy S21 Ultra 5G với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong, hứa hẹn đáp ứng trọn vẹn nhu cầu ngày càng cao của người dùng.</p><p>Đột phá trong thiết kế thời thượng</p><p>Thỏa mãn thị giác hơn bao giờ hết</p><p>Sức mạnh kinh khủng từ chip Exynos 2100</p><p>Sẵn sàng khám phá thế giới với camera đẳng cấp</p><p>Tận hưởng ngày dài đáng nhớ</p>', '2022-01-03 15:51:25', '2022-01-03 15:51:25'),
(67, 14, 1, 'Xiaomi Mi 11 5G', 21990000, 119, 'img/products/xiaomi-mi-11-xamdam-600x600-200x200.png', 'img/products/xiaomi-mi-11-xamdam-4-org.jpg', 'img/products/xiaomi-mi-11-xamdam-5-org.jpg', 1, '\nAMOLED', '\nAndroid 11', 'Chính 108 MP & Phụ 13 MP, 5 MP', '\n20 MP', '\nSnapdragon 888 8 nhân', '8 GB', '256 GB', NULL, '\n4600 mAh', 1, NULL, '<p>Xiaomi Mi 11 một siêu phẩm đến từ Xiaomi, máy cho trải nghiệm hiệu năng hàng đầu với vi xử lý Qualcomm Snapdragon 888, cùng loạt công nghệ đỉnh cao, khiến bất kỳ ai cũng sẽ choáng ngợp về smartphone này.</p><p>Thiết kế nổi bật với cụm camera độc nhất</p><p>Làm chủ mọi khung hình với bộ 3 camera 108 MP</p><p>Hiệu năng hàng khủng với Snapdragon 888</p><p>Sạc nhanh công suất cao 55 W</p><p>Trải nghiệm đỉnh cao với màn hình 120 Hz</p>', '2022-01-04 15:21:20', '2022-01-04 15:28:06'),
(68, 1, 1, 'iPhone 13 512GB', 33990000, 120, 'img/products/iphone-13-midnight-1-200x200.png', 'img/products/iphone-13-black-2.png', 'img/products/iphone-13-black-1.png', 1, ' OLED', ' iOS 15', ' 2 camera 12 MP', ' 12 MP', ' Apple A15 Bionic 6 nhân', '4 GB', '512 GB', NULL, ' 3240 mAh', 1, NULL, '<p>Thu hút tất cả sự chú ý của mọi người ngay khi ra mắt, iPhone 13 512 GB có vẻ ngoài cao cấp, tích hợp bộ xử lý mạnh mẽ, cụm camera kép cho khả năng ghi hình cực nét, dung lượng bộ nhớ lớn, hỗ trợ mạng 5G tận hưởng giải trí tuyệt vời theo cách bạn muốn. </p><p>Thiết kế nguyên khối sang trọng đến từng chi tiết</p><p>Màn hình Super Retina XDR xem mọi thứ đều sắc nét</p><p>Quay chụp chuyên nghiệp với hệ thống camera kép</p><p>Cấu hình đột phá với chip Apple A15 Bionic</p><p>Nâng cấp dung lượng pin</p>', '2022-01-04 16:39:11', '2022-01-04 16:39:11'),
(69, 8, 1, 'Samsung Galaxy Z Flip3 5G 256GB', 26990000, 120, 'img/products/samsung-galaxy-z-flip-3-black-1-200x200.png', 'img/products/samsung-galaxy-z-flip-3-black-gc-org.png', 'img/products/samsung-galaxy-z-flip3-black-3-org.png', 1, ' Dynamic AMOLED 2X', ' Android 11', ' 2 camera 12 MP', ' 10 MP', ' Snapdragon 888 8 nhân', '8 GB', '256 GB', NULL, ' 3300 mAh', 1, NULL, '<p>Nối tiếp thành công của Galaxy Z Flip 5G, trong sự kiện Galaxy Unpacked vừa qua Samsung tiếp tục giới thiệu đến thế giới về Galaxy Z Flip3 5G 256GB. Sản phẩm có nhiều cải tiến từ độ bền cho đến hiệu năng và thậm chí nó còn vượt xa hơn mong đợi của mọi người.</p><p>Thiết kế nhỏ gọn đầy lôi cuốn</p><p>Trải nghiệm thị giác cực đỉnh</p><p>Cấu hình cực khủng</p><p>Chuyên gia nhiếp ảnh</p><p>Viên pin kép thông minh</p>', '2022-01-04 17:01:15', '2022-01-04 17:01:15'),
(71, 1, 1, 'iPhone 12 Pro 512GB', 38490000, 120, 'img/products/200x200-xanh-org.png', 'img/products/iphone-12-pro-512gb-xanh-4-org.jpg', 'img/products/iphone-12-pro-512gb-xanh-5-org.jpg', 4, ' OLED', ' iOS 15', ' 3 camera 12 MP', ' 12 MP', ' Apple A14 Bionic 6 nhân', '6 GB', '512 GB', NULL, ' 2815 mAh', 1, NULL, '<p>Thêm siêu phẩm của series iPhone 12 được Apple cho ra mắt trong sự kiện “Hi Speed”, mang trên mình các yếu tố của một siêu phẩm với nhiều tính năng đặc biệt, hấp dẫn và không ai khác đó chính là iPhone 12 Pro 512 GB.</p><p>Tốc độ 5G siêu nhanh</p><p>Sức mạnh vượt trội - thách thức mọi giới hạn</p><p>Ống kính đẳng cấp, chuyên nghiệp</p><p>Thiết kế vuông vức, mạnh mẽ</p><p>Trải nghiệm hoàn hảo trên màn hình OLED</p><p>Sạc không dây MagSafe hữu ích</p>', '2022-01-05 15:54:34', '2022-01-05 15:54:34'),
(72, 8, 1, 'Samsung Galaxy Z Fold2 5G', 50000000, 116, 'img/products/samsung-galaxy-z-fold-2-den-200x200.png', 'img/products/samsung-galaxy-z-fold-2-den-1-org.png', 'img/products/samsung-galaxy-z-fold-2-den-2-org.png', 4, 'Chính: Dynamic AMOLED 2X, Phụ: Super AMOLED', 'Android 10', '3 camera 12 MP', 'Trong 10 MP & Ngoài 10 MP', 'Snapdragon 865+ 8 nhân', '12 GB', '256 GB', NULL, '4500 mAh', 1, NULL, '<p>Galaxy Z Fold 2 là tên gọi chính thức của điện thoại màn hình gập cao cấp của Samsung. Với nhiều nâng cấp tiên phong về thiết kế, hiệu năng và camera, hứa hẹn đây sẽ là một siêu phẩm thành công tiếp theo đến từ “ông trùm” sản xuất điện thoại lớn nhất thế giới. </p><p>Thiết kế cải tiến hướng đến sự hoàn thiện</p><p>Màn hình lớn và bền hơn thế hệ cũ</p><p>Bộ 5 camera kiến tạo tuyệt tác</p><p>Hiệu năng dẫn đầu với Snapdragon 865+</p>', '2022-01-05 16:14:56', '2022-01-05 16:14:56'),
(73, 1, 1, 'iPhone 13 Pro 1TB', 46990000, 120, 'img/products/iphone-13-pro-silver-200x200.png', 'img/products/iphone-13-pro-silver-2.png', 'img/products/iphone-13-pro-silver-1.png', 22, ' OLED', 'iOS 15', '3 camera 12 MP', '12 MP', 'Apple A15 Bionic 6 nhân', '6 GB', '1 TB', NULL, ' 3095 mAh', 1, NULL, '<p>Cùng trải nghiệm một phiên bản iPhone có bộ nhớ trong lớn nhất từ trước đến nay, sở hữu dung lượng lưu trữ lên đến 1 TB, tương tự với các phiên bản khác máy vẫn có một màn hình siêu đẹp cùng hiệu năng vô cùng mạnh mẽ đó chính là iPhone 13 Pro 1TB.</p><p>Hiệu năng tuyệt vời nhờ chip thế hệ mới</p><p>Khung hình rực rỡ, tần số quét màn hình 120 Hz</p><p>Cụm camera thách thức khả năng sáng tạo của bạn</p><p>Thiết kế sang chảnh, đa sắc màu lựa chọn</p><p>Cải thiện thời lượng pin thêm 2.5 giờ sử dụng</p>', '2022-01-05 16:26:04', '2022-01-14 15:08:25'),
(74, 1, 1, 'iPhone 13 Pro Max 1TB', 49990000, 117, 'img/products/iphone-13-pro-max-silver-200x200.png', 'img/products/iphone-13-pro-max-silver-1.png', 'img/products/iphone-13-pro-max-silver-2.png', 22, ' OLED', ' iOS 15', ' 3 camera 12 MP', ' 12 MP', ' Apple A15 Bionic 6 nhân', '6 GB', '1 TB', NULL, ' 4352 mAh', 1, '<tr><td>Mạng di động</td><td>Hỗ trợ 5G</td></tr>', '<p>iPhone 13 Pro Max 1 TB thuộc phân khúc điện thoại cao cấp mà không một iFan nào có thể bỏ qua, với màn hình lớn sắc nét, cấu hình vượt trội, dung lượng lưu trữ \"khủng\", thời gian sử dụng dài, mỗi lần trải nghiệm đều cho bạn cảm giác thỏa mãn đáng ngạc nhiên.</p><p>Apple A15 Bionic - cấu hình đột phá</p><p>Tải xuống siêu nhanh cùng mạng 5G</p><p>Xem nội dung nhiều hơn, rõ nét hơn với màn hình lớn</p><p>Nâng cấp hệ thống camera </p><p>Vẻ ngoài sang trọng đặc trưng</p><p>Dung lượng pin đáp ứng đến 95 giờ nghe nhạc</p>', '2022-01-12 16:42:25', '2022-01-12 16:42:25'),
(75, 1, 1, 'iPhone 12 Pro Max 512GB', 41990000, 120, 'img/products/iphone-12-pro-max-xam-new-600x600-200x200.png', 'img/products/iphone-12-pro-max-512gb-xam-4-org.jpg', 'img/products/iphone-12-pro-max-512gb-xam-5-org.jpg', 22, 'OLED', 'iOS 15', '3 camera 12 MP', '12 MP', 'Apple A14 Bionic 6 nhân', '6 GB', '512 GB', NULL, '3687 mAh', 1, NULL, '<p>iPhone 12 Pro Max 512GB - đẳng cấp từ tên gọi đến từng chi tiết. Ngay từ khi chỉ là tin đồn thì chiếc smartphone này đã làm đứng ngồi không yên bao “fan cứng” nhà Apple, với những nâng cấp vô cùng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt mà chưa một chiếc iPhone tiền nhiệm nào có được.</p><p>Thu hút từ cái nhìn đầu tiên</p><p>Super Retina XDR - mang đến trải nghiệm màn hình chân thực</p><p>Hệ thống camera được nâng cấp mạnh mẽ</p><p>Chuẩn kết nối 5G - nhanh hơn, thông minh hơn</p><p>Apple A14 Bionic - Hiệu năng mạnh mẽ hàng đầu</p><p>Hỗ trợ công nghệ sạc không dây MagSafe</p>', '2022-01-12 16:46:13', '2022-01-12 16:46:13'),
(76, 1, 1, 'iPhone 12 256GB', 26990000, 120, 'img/products/iphone-12-xanh-duong-new-600x600-200x200.png', 'img/products/iphone-12-xanh-duong-4-org.jpg', 'img/products/iphone-12-xanh-duong-5-org.jpg', 22, 'OLED', ' iOS 15', '2 camera 12 MP', '12 MP', ' Apple A14 Bionic 6 nhân', '4 GB', '256 GB', NULL, ' 2815 mAh', 1, '<tr><td>Hỗ trợ sạc tối đa</td><td>20 W</td></tr><tr><td>Kháng nước, bụi</td><td>IP68</td></tr>', '<p>iPhone 12 256 GB được Apple cho ra mắt đã đem đến làn sóng mạnh mẽ đối với những ai yêu công nghệ nói chung và “fan hâm mộ” trung thành của iPhone nói riêng, với con chip mạnh, dung lượng lưu trữ lớn cùng thiết kế toàn diện và khả năng hiển thị hình ảnh xuất sắc.</p><p>Thiết kế hoàn thiện đến từng chi tiết</p><p>Trang bị chipset mạnh mẽ nhất 2020</p><p>Phá vỡ khái niệm camera trên smartphone</p><p>Mẫu iPhone đầu tiên được trang bị 5G</p><p>Thời lượng pin đủ dùng</p>', '2022-01-12 17:47:16', '2022-01-12 17:47:16'),
(77, 1, 1, 'iPhone 13 mini 512GB', 30990000, 120, 'img/products/iphone-13-mini-pink-1-200x200.png', 'img/products/iphone-13-mini-hong-4.jpg', 'img/products/iphone-13-mini-hong-5.jpg', 22, 'OLED', ' iOS 15', ' 2 camera 12 MP', ' 12 MP', ' Apple A15 Bionic 6 nhân', '4 GB', '512 GB', NULL, ' 2438 mAh', 1, NULL, '<p>iPhone 13 mini 512GB là chiếc điện thoại có thiết kế nhỏ gọn, ngoại hình khá là dễ thương khi nằm gọn trong bàn tay nhưng lại gây bất ngờ hơn nữa với sức mạnh hiệu năng đáng kinh ngạc, màn hình OLED siêu nét cùng camera nhiếp ảnh chuyên nghiệp.</p><p>Thiết kế nhỏ gọn, cao cấp</p><p>Màn hình Super Retina XDR siêu nét</p><p>Cụm camera được nâng cấp toàn diện</p><p>Hiệu năng nâng cấp với chip Apple A15 Bionic</p><p>Dung lượng pin được cải thiện, hỗ trợ sạc nhanh</p>', '2022-01-12 17:54:41', '2022-01-12 17:54:41'),
(78, 1, 1, 'iPhone 12 mini 256GB', 21990000, 120, 'img/products/iphone-23-mini-den-new-600x600-200x200.png', 'img/products/iphone-12-mini-256gb-den-4-org.jpg', 'img/products/iphone-12-mini-den-5-org.jpg', 22, 'OLED', ' iOS 15', ' 2 camera 12 MP', ' 12 MP', ' Apple A14 Bionic 6 nhân', '4 GB', '256 GB', NULL, ' 2227 mAh', 1, NULL, '<p>Apple giới thiệu đến người dùng 4 phiên bản iPhone mới trong sự kiện Hi, Speed! ngày 14/10, trong đó có iPhone 12 mini 256 GB, đây là sản phẩm hỗ trợ 5G có thiết kế nhỏ nhất, nhẹ nhất, mỏng nhất trên thế giới cho đến thời điểm hiện tại (10/2020).</p><p>Thiết kế cao cấp và cứng cáp</p><p>Màn hình Super Retina XDR trải nghiệm đỉnh cao</p><p>Camera kép thách thức bóng tối, hỗ trợ quay video chuẩn Dolby Vision</p><p>Apple A14 Bionic, hiệu năng mẽ hàng đầu phân khúc</p><p>Chuẩn kết nối 5G - nhanh hơn, thông minh hơn</p><p>Sạc nhanh 20 W, tiết kiệm thời gian sạc</p>', '2022-01-12 18:02:20', '2022-01-12 18:02:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `id_tinh` int(11) NOT NULL,
  `ten_tinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhthanh`
--

INSERT INTO `tinhthanh` (`id_tinh`, `ten_tinh`) VALUES
(1, 'An Giang'),
(2, 'Bà Rịa – Vũng Tàu'),
(3, 'Bạc Liêu'),
(4, 'Bắc Giang'),
(5, 'Bắc Kạn'),
(6, 'Bắc Ninh'),
(7, 'Bến Tre'),
(8, 'Bình Dương'),
(9, 'Bình Định'),
(10, 'Bình Phước'),
(11, 'Bình Thuận'),
(12, 'Cà Mau'),
(13, 'Cao Bằng'),
(14, 'Cần Thơ'),
(15, 'Đà Nẵng'),
(16, 'Đắk Lắk'),
(17, 'Đắk Nông'),
(18, 'Điện Biên'),
(19, 'Đồng Nai'),
(20, 'Đồng Tháp'),
(21, 'Gia Lai'),
(22, 'Hà Giang'),
(23, 'Hà Nam'),
(24, 'Hà Nội'),
(25, 'Hà Tĩnh'),
(26, 'Hải Dương'),
(27, 'Hải Phòng'),
(28, 'Hậu Giang'),
(29, 'Hòa Bình'),
(30, 'Thành phố Hồ Chí Minh'),
(31, 'Hưng Yên'),
(32, 'Khánh Hòa'),
(33, 'Kiên Giang'),
(34, 'Kon Tum'),
(35, 'Lai Châu'),
(36, 'Lạng Sơn'),
(37, 'Lào Cai'),
(38, 'Lâm Đồng'),
(39, 'Long An'),
(40, 'Nam Định'),
(41, 'Nghệ An'),
(42, 'Ninh Bình'),
(43, 'Ninh Thuận'),
(44, 'Phú Thọ'),
(45, 'Phú Yên'),
(46, 'Quảng Bình'),
(47, 'Quảng Nam'),
(48, 'Quảng Ngãi'),
(49, 'Quảng Ninh'),
(50, 'Quảng Trị'),
(51, 'Sóc Trăng'),
(52, 'Sơn La'),
(53, 'Tây Ninh'),
(54, 'Thái Bình'),
(55, 'Thái Nguyên'),
(56, 'Thanh Hóa'),
(57, 'Thừa Thiên Huế'),
(58, 'Tiền Giang'),
(59, 'Trà Vinh'),
(60, 'Tuyên Quang'),
(61, 'Vĩnh Long'),
(62, 'Vĩnh Phúc'),
(63, 'Yên Bái');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`) USING BTREE,
  ADD KEY `MaSP` (`MaSP`) USING BTREE;

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `danh_gia_sp`
--
ALTER TABLE `danh_gia_sp`
  ADD PRIMARY KEY (`id_danh_gia`),
  ADD KEY `id_nd` (`id_nd`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_nd`,`id_sp`),
  ADD KEY `id_nd` (`id_nd`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `MaKH` (`MaND`) USING BTREE,
  ADD KEY `id_tinh` (`id_tinh`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `MaLSP` (`id`) USING BTREE,
  ADD KEY `MaLSP_2` (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `MaQuyen` (`Quyen_id`) USING BTREE,
  ADD KEY `id_tinh` (`id_tinh`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`) USING BTREE;

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `LoaiSP` (`TH_id`) USING BTREE,
  ADD KEY `MaKM` (`KM_id`) USING BTREE,
  ADD KEY `sanpham_ibfk_4` (`DM_id`);

--
-- Chỉ mục cho bảng `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`id_tinh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `danh_gia_sp`
--
ALTER TABLE `danh_gia_sp`
  MODIFY `id_danh_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danh_gia_sp`
--
ALTER TABLE `danh_gia_sp`
  ADD CONSTRAINT `danh_gia_sp_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `danh_gia_sp_ibfk_2` FOREIGN KEY (`id_nd`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_nd`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`id`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`id_tinh`) REFERENCES `tinhthanh` (`id_tinh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`Quyen_id`) REFERENCES `phanquyen` (`MaQuyen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nguoidung_ibfk_2` FOREIGN KEY (`id_tinh`) REFERENCES `tinhthanh` (`id_tinh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`KM_id`) REFERENCES `khuyenmai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`TH_id`) REFERENCES `loaisanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`DM_id`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

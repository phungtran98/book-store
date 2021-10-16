-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 08:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `bl_id` bigint(20) UNSIGNED NOT NULL,
  `bl_noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bl_id_reply` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ctgiohang`
--

CREATE TABLE `ctgiohang` (
  `gh_id` bigint(20) UNSIGNED NOT NULL,
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `ctgh_tongtien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `cthd_id` bigint(20) UNSIGNED NOT NULL,
  `hd_id` int(11) NOT NULL,
  `httt_id` int(11) NOT NULL,
  `htvc_id` int(11) NOT NULL,
  `cthd_tongtien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `gh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `htt_id` bigint(20) UNSIGNED NOT NULL,
  `htt_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `htt_mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhthucvanchuyen`
--

CREATE TABLE `hinhthucvanchuyen` (
  `htvc_id` bigint(20) UNSIGNED NOT NULL,
  `htvc_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `htvc_mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `hd_id` bigint(20) UNSIGNED NOT NULL,
  `gh_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `kh_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kh_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_sdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_gtinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_diachi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`kh_id`, `kh_ten`, `kh_email`, `kh_sdt`, `kh_gtinh`, `kh_diachi`, `kh_avatar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Trần Thanh Phụng', 'tokU@gmail.com', '7701646712', '1', '3EwHvx4Z70', '', '2021-10-16 17:38:06', '2021-10-16 17:38:06', NULL),
(2, 'Lâm Ngọc Mỹ', 't1zx@gmail.com', '8656150954', '0', 'wriaKAP7fI', '', '2021-10-16 17:38:06', '2021-10-16 17:38:06', NULL),
(3, 'Trần Quốc Cường', 'n2ox@gmail.com', '1005653411', '1', '7yaP9zr32R', '', '2021-10-16 17:38:06', '2021-10-16 17:38:06', NULL),
(4, 'Trần Trung Khánh', '4XfG@gmail.com', '7559420071', '1', '7pLMxQd6wx', '', '2021-10-16 17:38:06', '2021-10-16 17:38:06', NULL),
(5, 'Phườn Vũ', '8RZl@gmail.com', '3107092859', '1', 'MrTzyqQhRp', '', '2021-10-16 17:38:06', '2021-10-16 17:38:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loaisach`
--

CREATE TABLE `loaisach` (
  `ls_id` bigint(20) UNSIGNED NOT NULL,
  `ls_ma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ls_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ls_mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisach`
--

INSERT INTO `loaisach` (`ls_id`, `ls_ma`, `ls_ten`, `ls_mota`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IuDw', 'BÀ MẸ VÀ EM BÉ', 'bmFv9emld1Lfzrp2wk67KTSHByfKJTTV', '2021-10-16 17:38:43', '2021-10-16 17:38:43', NULL),
(2, 'vUug', 'DINH DƯỠNG - SỨC KHỎE', 'mNwP8gxuNfBAWteIJRG00arGMFQwHKkg', '2021-10-16 17:38:43', '2021-10-16 17:38:43', NULL),
(3, 'qKRE', 'CHÍNH TRỊ - PHÁP LÝ', '0Lwp7LbS75QmxqvAb1AnQAyk8AWCKXEA', '2021-10-16 17:38:43', '2021-10-16 17:38:43', NULL),
(4, 'gxZh', 'CÔNG NGHỆ THÔNG TIN', 'zWUsa5TetGB9vIYyzjabSI5iq7JyoU6M', '2021-10-16 17:38:43', '2021-10-16 17:38:43', NULL),
(5, 'y6Ti', 'Y HỌC', 'AOUJpnT1aRTmImTpGE6xA3bHLjEn7U1c', '2021-10-16 17:38:43', '2021-10-16 17:38:43', NULL),
(6, '0ekw', 'KINH TẾ', 'Vcy0LO5tOeshUKLcCjIBtmXdbK1f56c7', '2021-10-16 17:38:43', '2021-10-16 17:38:43', NULL),
(7, 'OkK0', 'THIẾU NHI', 'KRTruvamDDHqYQu7v86J6Fe78XqF8vFY', '2021-10-16 17:38:43', '2021-10-16 17:38:43', NULL),
(8, 'caAz', 'THIẾU NHI', 'LGztdXUbaCV1FYwnHaXEzcif05FTJM3y', '2021-10-16 17:38:43', '2021-10-16 17:38:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_17_050344_create_tacgai_table', 1),
(4, '2020_04_17_050555_create_nhaxb_table', 1),
(5, '2020_04_17_050655_create_loaisach_table', 1),
(6, '2020_04_17_050924_create_sach_table', 1),
(7, '2020_04_17_051330_create_hinhthucthanhtoan_table', 1),
(8, '2020_04_17_051431_create_hinhthucvanchuyen_table', 1),
(9, '2020_05_01_033809_create_giohang_table', 1),
(10, '2020_05_01_033827_create_ctgiohang_table', 1),
(11, '2020_05_01_033908_create_hoadon_table', 1),
(12, '2020_05_01_033932_create_cthoadon_table', 1),
(13, '2020_05_01_045430_create_khachhang_table', 1),
(14, '2020_05_01_045431_create_taikhoan_table', 1),
(15, '2020_05_01_045450_create_binhluan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhaxb`
--

CREATE TABLE `nhaxb` (
  `nxb_id` bigint(20) UNSIGNED NOT NULL,
  `nxb_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhaxb`
--

INSERT INTO `nhaxb` (`nxb_id`, `nxb_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nhà xuất bản Chính trị Quốc gia', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(2, 'Nhà xuất bản Tư pháp', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(3, 'Nhà xuất bản Hồng Đức', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(4, 'Nhà xuất bản Quân đội', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(5, 'Nhà xuất bản Công an nhân dân', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(6, 'Nhà xuất bản Kim Đồng', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(7, 'Nhà xuất bản Lao động', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(8, 'Nhà xuất bản Tôn giáo', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(9, 'Nhà xuất bản Hà Nội', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(10, 'Nhà xuất bản Lý luận chính trị', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(11, 'Nhà xuất bản Hải phòng', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(12, 'Nhà xuất bản Thanh Hoá', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(13, 'Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(14, 'Nhà xuất bản Trẻ', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL),
(15, 'Nhà xuất bản Đồng Nai', '2021-10-16 17:38:17', '2021-10-16 17:38:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `s_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_gia` int(11) NOT NULL,
  `s_danhgia` int(11) DEFAULT NULL,
  `s_tieude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_trangthai` int(11) NOT NULL,
  `s_tinhtrang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ls_id` bigint(20) UNSIGNED NOT NULL,
  `tg_id` bigint(20) UNSIGNED NOT NULL,
  `nxb_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`s_id`, `s_ten`, `s_gia`, `s_danhgia`, `s_tieude`, `s_hinhanh`, `s_mota`, `s_trangthai`, `s_tinhtrang`, `ls_id`, `tg_id`, `nxb_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sách 1', 150000, NULL, NULL, '3.jpg', '<p><strong>Đắc nh&acirc;n t&acirc;m</strong>&nbsp;&ndash;&nbsp;<strong>How to win friends and Influence People</strong>&nbsp;của Dale Carnegie l&agrave; quyển s&aacute;ch nổi tiếng nhất, b&aacute;n chạy nhất v&agrave; c&oacute; tầm ảnh hưởng nhất của mọi thời đại. T&aacute;c phẩm đ&atilde; được chuyển ngữ sang hầu hết c&aacute;c thứ tiếng tr&ecirc;n thế giới v&agrave; c&oacute; mặt ở h&agrave;ng trăm quốc gia.</p><p>Đ&acirc;y l&agrave; quyển s&aacute;ch duy nhất về thể loại&nbsp;<strong>self-help</strong>&nbsp;li&ecirc;n tục đứng đầu danh mục s&aacute;ch b&aacute;n chạy nhất (best-selling Books) do b&aacute;o The New York Times b&igrave;nh chọn suốt 10 năm liền. Ri&ecirc;ng bản tiếng Anh của s&aacute;ch đ&atilde; b&aacute;n được hơn 15 triệu bản tr&ecirc;n thế giới. T&aacute;c phẩm c&oacute; sức lan toả v&ocirc; c&ugrave;ng rộng lớn &ndash; d&ugrave; bạn đi đến bất cứ nơi đ&acirc;u, bất kỳ quốc gia n&agrave;o cũng đều c&oacute; thể nh&igrave;n thấy. T&aacute;c phẩm được đ&aacute;nh gi&aacute; l&agrave; quyển s&aacute;ch đầu ti&ecirc;n v&agrave; hay nhất, c&oacute; ảnh hưởng l&agrave;m thay đổi cuộc đời của h&agrave;ng triệu người tr&ecirc;n thế giới.</p>', 1, NULL, 1, 1, 1, '2021-10-16 17:47:10', '2021-10-16 17:47:21', NULL),
(2, 'Sách 2', 150000, NULL, NULL, '3.jpg', '<p>Đắc nh&amp;acirc;n t&amp;acirc;m&lt;/strong&gt;&amp;nbsp;&amp;ndash;&amp;nbsp;&lt;strong&gt;How to win friends and Influence People&lt;/strong&gt;&amp;nbsp;của Dale Carnegie l&amp;agrave; quyển s&amp;aacute;ch nổi tiếng nhất, b&amp;aacute;n chạy nhất v&amp;agrave; c&amp;oacute; tầm ảnh hưởng nhất của mọi thời đại. T&amp;aacute;c phẩm đ&amp;atilde; được chuyển ngữ sang hầu hết c&amp;aacute;c thứ tiếng tr&amp;ecirc;n thế giới v&amp;agrave; c&amp;oacute; mặt ở h&amp;agrave;ng trăm quốc gia.</p>', 1, NULL, 3, 3, 4, '2021-10-16 17:48:42', '2021-10-16 17:48:42', NULL),
(3, 'Doraemon', 150000, NULL, NULL, '2.jpg', '<p>Kh&ocirc;ng</p>', 1, NULL, 7, 4, 3, '2021-10-16 17:49:35', '2021-10-16 17:49:35', NULL),
(4, 'Doraemon 2', 150000, NULL, NULL, '6.jpg', '<p>kh&ocirc;ng</p>', 1, NULL, 7, 2, 13, '2021-10-16 17:50:02', '2021-10-16 17:50:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `tg_id` bigint(20) UNSIGNED NOT NULL,
  `tg_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`tg_id`, `tg_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'NGUYỄN NHẬT ÁNH', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(2, 'FUJIKO F FUJIO', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(3, 'TRANG HẠ', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(4, 'NGUYỄN PHONG VIỆT', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(5, 'ANH KHANG', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(6, 'NGUYỄN NGỌC SƠN (SƠN PARIS)', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(7, 'ERNEST MILLER HEMINGWAY', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(8, 'FRANZ KAFKA', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(9, 'GABRIEL GARCIA MARQUEZ', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL),
(10, 'HARPER LEE', '2021-10-16 17:38:26', '2021-10-16 17:38:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `tk_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kh_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tk_id`, `username`, `password`, `remember_token`, `kh_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '$2y$10$uNtKKanFoH5JyXL8AQD0DOxnH7mBfTqXMFJQPisoYRl1nv8z9M2Ki', NULL, 1, '2021-10-16 17:38:35', '2021-10-16 17:38:35', NULL),
(2, 'my', '$2y$10$1ZGpAjRzMrcqbexWxfNP2O8bYz7u636M5SgOF9.YbRwD/eNgcN0Yq', NULL, 2, '2021-10-16 17:38:35', '2021-10-16 17:38:35', NULL),
(3, 'cuong', '$2y$10$557ef.Sk.sVYAmV8Y8h4n./dULwKgZLRYGdyOIVd9uPNlRLegpg8S', NULL, 3, '2021-10-16 17:38:35', '2021-10-16 17:38:35', NULL),
(4, 'khanh', '$2y$10$bqiHf7A70wdKj9tXN4KYxePCWzpQnzt.jrRW6RKeqyObFmboKkkPi', NULL, 4, '2021-10-16 17:38:35', '2021-10-16 17:38:35', NULL),
(5, 'vu', '$2y$10$iuva4Bfcfe49zcjKik977u6dS01kfDqNX6m3QfDsICkZsw4hPWYcm', NULL, 5, '2021-10-16 17:38:35', '2021-10-16 17:38:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`bl_id`),
  ADD KEY `binhluan_kh_id_foreign` (`kh_id`),
  ADD KEY `binhluan_s_id_foreign` (`s_id`);

--
-- Indexes for table `ctgiohang`
--
ALTER TABLE `ctgiohang`
  ADD PRIMARY KEY (`gh_id`,`s_id`),
  ADD KEY `ctgiohang_s_id_foreign` (`s_id`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`cthd_id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`gh_id`);

--
-- Indexes for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`htt_id`);

--
-- Indexes for table `hinhthucvanchuyen`
--
ALTER TABLE `hinhthucvanchuyen`
  ADD PRIMARY KEY (`htvc_id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hd_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_id`);

--
-- Indexes for table `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`ls_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhaxb`
--
ALTER TABLE `nhaxb`
  ADD PRIMARY KEY (`nxb_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `sach_ls_id_foreign` (`ls_id`),
  ADD KEY `sach_nxb_id_foreign` (`nxb_id`),
  ADD KEY `sach_tg_id_foreign` (`tg_id`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`tg_id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tk_id`),
  ADD KEY `taikhoan_kh_id_foreign` (`kh_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `bl_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `cthd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `gh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  MODIFY `htt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hinhthucvanchuyen`
--
ALTER TABLE `hinhthucvanchuyen`
  MODIFY `htvc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `hd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaisach`
--
ALTER TABLE `loaisach`
  MODIFY `ls_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nhaxb`
--
ALTER TABLE `nhaxb`
  MODIFY `nxb_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `s_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `tg_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `tk_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_kh_id_foreign` FOREIGN KEY (`kh_id`) REFERENCES `khachhang` (`kh_id`),
  ADD CONSTRAINT `binhluan_s_id_foreign` FOREIGN KEY (`s_id`) REFERENCES `sach` (`s_id`);

--
-- Constraints for table `ctgiohang`
--
ALTER TABLE `ctgiohang`
  ADD CONSTRAINT `ctgiohang_gh_id_foreign` FOREIGN KEY (`gh_id`) REFERENCES `giohang` (`gh_id`),
  ADD CONSTRAINT `ctgiohang_s_id_foreign` FOREIGN KEY (`s_id`) REFERENCES `sach` (`s_id`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ls_id_foreign` FOREIGN KEY (`ls_id`) REFERENCES `loaisach` (`ls_id`),
  ADD CONSTRAINT `sach_nxb_id_foreign` FOREIGN KEY (`nxb_id`) REFERENCES `nhaxb` (`nxb_id`),
  ADD CONSTRAINT `sach_tg_id_foreign` FOREIGN KEY (`tg_id`) REFERENCES `tacgia` (`tg_id`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_kh_id_foreign` FOREIGN KEY (`kh_id`) REFERENCES `khachhang` (`kh_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

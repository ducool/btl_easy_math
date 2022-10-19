-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 04:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nhom5`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_chuong_trinh`
--

CREATE TABLE `chi_tiet_chuong_trinh` (
  `chi_tiet_id` varchar(10) NOT NULL,
  `ct_chuong` varchar(10) NOT NULL,
  `chi_tiet_ten_bai` varchar(200) NOT NULL,
  `chi_tiet_video_bai` varchar(200) NOT NULL,
  `chi_tiet_bai_tap` varchar(200) DEFAULT NULL,
  `chi_tiet_dap_an` varchar(200) DEFAULT NULL,
  `chi_tiet_ghi_chu` varchar(300) DEFAULT NULL,
  `chi_tiet_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `tk_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bai_hoc_da_luu`
--

CREATE TABLE `tbl_bai_hoc_da_luu` (
  `bh_id` int(10) NOT NULL,
  `chi_tiet_id` varchar(10) NOT NULL,
  `tk_id` varchar(10) NOT NULL,
  `bh_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chuong_trinh`
--

CREATE TABLE `tbl_chuong_trinh` (
  `ct_chuong` varchar(10) NOT NULL,
  `ct_ten_chuong` varchar(200) NOT NULL,
  `th_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chuong_trinh`
--

INSERT INTO `tbl_chuong_trinh` (`ct_chuong`, `ct_ten_chuong`, `th_id`) VALUES
('L12C1', '[Đại số] Chương 1: Hàm số', 'LOP12'),
('L12C2', '[Đại số] Chương 2: Hàm số lũy thừa, hàm số mũ, hàm số logarit', 'LOP12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dang_ky_khoa_hoc`
--

CREATE TABLE `tbl_dang_ky_khoa_hoc` (
  `dk_id` int(10) NOT NULL,
  `th_id` varchar(10) NOT NULL,
  `tk_id` int(10) NOT NULL,
  `dk_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dang_ky_khoa_hoc`
--

INSERT INTO `tbl_dang_ky_khoa_hoc` (`dk_id`, `th_id`, `tk_id`, `dk_created`) VALUES
(1, 'LOP12', 2, '2022-10-18 14:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giao_vien`
--

CREATE TABLE `tbl_giao_vien` (
  `gv_id` varchar(10) NOT NULL,
  `gv_ho_ten` varchar(200) NOT NULL,
  `gv_thong_tin` text NOT NULL,
  `th_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_giao_vien`
--

INSERT INTO `tbl_giao_vien` (`gv_id`, `gv_ho_ten`, `gv_thong_tin`, `th_id`) VALUES
('GV1', 'Hồ Đức Thuận', 'Giáo viên có nhiều năm kinh nghiệm giảng dạy Toán 12 từ cơ bản đến nâng cao.', 'LOP12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gop_y`
--

CREATE TABLE `tbl_gop_y` (
  `gy_id` int(10) NOT NULL,
  `gy_email` varchar(200) NOT NULL,
  `gy_dien_thoai` varchar(20) NOT NULL,
  `gy_tieu_de` varchar(200) NOT NULL,
  `gy_noi_dung` text NOT NULL,
  `gy_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gop_y`
--

INSERT INTO `tbl_gop_y` (`gy_id`, `gy_email`, `gy_dien_thoai`, `gy_tieu_de`, `gy_noi_dung`, `gy_created`) VALUES
(1, 'nguyenminhthuy@gmail.com', '0974658274', 'Về chương 1 lớp 12', 'Bài tập giảng dạy rất chi tiết.', '2022-10-18 14:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tai_khoan`
--

CREATE TABLE `tbl_tai_khoan` (
  `tk_id` int(10) NOT NULL,
  `tk_ten_tai_khoan` varchar(100) NOT NULL,
  `tk_mat_khau` varchar(100) NOT NULL,
  `tk_email` varchar(200) NOT NULL,
  `tk_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `tk_anh_dai_dien` varchar(200) DEFAULT NULL,
  `tk_loai_tai_khoan` varchar(50) NOT NULL DEFAULT 'user',
  `tk_dien_thoai` varchar(20) DEFAULT NULL,
  `tk_ngay_sinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tai_khoan`
--

INSERT INTO `tbl_tai_khoan` (`tk_id`, `tk_ten_tai_khoan`, `tk_mat_khau`, `tk_email`, `tk_created`, `tk_anh_dai_dien`, `tk_loai_tai_khoan`, `tk_dien_thoai`, `tk_ngay_sinh`) VALUES
(1, 'Nguyễn Thị Ngọc Anh', 'mothaiba', 'ngocanh@gmail.com', '2022-10-17 06:00:27', NULL, 'admin', NULL, NULL),
(2, 'Nguyễn Minh Thúy', '09022005', 'nguyenminhthuy@gmail.com', '2022-10-18 14:01:52', NULL, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tong_hop_khoa_hoc`
--

CREATE TABLE `tbl_tong_hop_khoa_hoc` (
  `th_id` varchar(10) NOT NULL,
  `th_ten_khoa_hoc` varchar(100) NOT NULL,
  `th_thong_tin` text NOT NULL,
  `th_anh_khoa_hoc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tong_hop_khoa_hoc`
--

INSERT INTO `tbl_tong_hop_khoa_hoc` (`th_id`, `th_ten_khoa_hoc`, `th_thong_tin`, `th_anh_khoa_hoc`) VALUES
('LOP10', 'Khóa học Toán lớp 10', 'Tổng hợp các kiến thức đại số và hình học lớp 10. Khóa học được chia theo các chương, mỗi bài học gồm video bài giảng, đề ôn tập và đáp án.', 'anh_khoa_hoc_lop_10.jpg'),
('LOP11', 'Khóa học Toán lớp 11', 'Tổng hợp các kiến thức đại số và hình học lớp 11. Khóa học được chia theo các chương, mỗi bài học gồm video bài giảng, đề ôn tập và đáp án.', 'anh_khoa_hoc_lop_11.jpg'),
('LOP12', 'Khóa học Toán lớp 12', 'Tổng hợp các kiến thức đại số và hình học lớp 12. Khóa học được chia theo các chương, mỗi bài học gồm video bài giảng, đề ôn tập và đáp án.', 'anh_khoa_hoc_lop_12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_chuong_trinh`
--
ALTER TABLE `chi_tiet_chuong_trinh`
  ADD PRIMARY KEY (`chi_tiet_id`),
  ADD KEY `fk_chuongtrinh_chitiet` (`ct_chuong`);

--
-- Indexes for table `tbl_bai_hoc_da_luu`
--
ALTER TABLE `tbl_bai_hoc_da_luu`
  ADD PRIMARY KEY (`bh_id`);

--
-- Indexes for table `tbl_chuong_trinh`
--
ALTER TABLE `tbl_chuong_trinh`
  ADD PRIMARY KEY (`ct_chuong`),
  ADD KEY `fk_tonghop_chuong_trinh` (`th_id`);

--
-- Indexes for table `tbl_dang_ky_khoa_hoc`
--
ALTER TABLE `tbl_dang_ky_khoa_hoc`
  ADD PRIMARY KEY (`dk_id`),
  ADD KEY `fk_dangky_tonghop` (`th_id`),
  ADD KEY `fk_dangky_taikhoan` (`tk_id`);

--
-- Indexes for table `tbl_giao_vien`
--
ALTER TABLE `tbl_giao_vien`
  ADD PRIMARY KEY (`gv_id`),
  ADD KEY `fk_giaovien_tonghop` (`th_id`);

--
-- Indexes for table `tbl_gop_y`
--
ALTER TABLE `tbl_gop_y`
  ADD PRIMARY KEY (`gy_id`);

--
-- Indexes for table `tbl_tai_khoan`
--
ALTER TABLE `tbl_tai_khoan`
  ADD PRIMARY KEY (`tk_id`);

--
-- Indexes for table `tbl_tong_hop_khoa_hoc`
--
ALTER TABLE `tbl_tong_hop_khoa_hoc`
  ADD PRIMARY KEY (`th_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bai_hoc_da_luu`
--
ALTER TABLE `tbl_bai_hoc_da_luu`
  MODIFY `bh_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dang_ky_khoa_hoc`
--
ALTER TABLE `tbl_dang_ky_khoa_hoc`
  MODIFY `dk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gop_y`
--
ALTER TABLE `tbl_gop_y`
  MODIFY `gy_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tai_khoan`
--
ALTER TABLE `tbl_tai_khoan`
  MODIFY `tk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_chuong_trinh`
--
ALTER TABLE `chi_tiet_chuong_trinh`
  ADD CONSTRAINT `fk_chuongtrinh_chitiet` FOREIGN KEY (`ct_chuong`) REFERENCES `tbl_chuong_trinh` (`ct_chuong`);

--
-- Constraints for table `tbl_chuong_trinh`
--
ALTER TABLE `tbl_chuong_trinh`
  ADD CONSTRAINT `fk_tonghop_chuong_trinh` FOREIGN KEY (`th_id`) REFERENCES `tbl_tong_hop_khoa_hoc` (`th_id`);

--
-- Constraints for table `tbl_dang_ky_khoa_hoc`
--
ALTER TABLE `tbl_dang_ky_khoa_hoc`
  ADD CONSTRAINT `fk_dangky_taikhoan` FOREIGN KEY (`tk_id`) REFERENCES `tbl_tai_khoan` (`tk_id`),
  ADD CONSTRAINT `fk_dangky_tonghop` FOREIGN KEY (`th_id`) REFERENCES `tbl_tong_hop_khoa_hoc` (`th_id`);

--
-- Constraints for table `tbl_giao_vien`
--
ALTER TABLE `tbl_giao_vien`
  ADD CONSTRAINT `fk_giaovien_tonghop` FOREIGN KEY (`th_id`) REFERENCES `tbl_tong_hop_khoa_hoc` (`th_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

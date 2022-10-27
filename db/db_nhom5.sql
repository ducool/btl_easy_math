-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2022 lúc 12:33 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_nhom5`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_chuong_trinh`
--

CREATE TABLE `chi_tiet_chuong_trinh` (
  `chi_tiet_id` int(10) NOT NULL,
  `ct_chuong` int(10) NOT NULL,
  `chi_tiet_ten_bai` varchar(200) NOT NULL,
  `chi_tiet_video_bai` varchar(200) NOT NULL,
  `chi_tiet_bai_tap` varchar(200) DEFAULT NULL,
  `chi_tiet_dap_an` varchar(200) DEFAULT NULL,
  `chi_tiet_ghi_chu` varchar(300) DEFAULT NULL,
  `chi_tiet_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `tk_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_chuong_trinh`
--

INSERT INTO `chi_tiet_chuong_trinh` (`chi_tiet_id`, `ct_chuong`, `chi_tiet_ten_bai`, `chi_tiet_video_bai`, `chi_tiet_bai_tap`, `chi_tiet_dap_an`, `chi_tiet_ghi_chu`, `chi_tiet_created`, `tk_id`) VALUES
(1, 1, 'Bài 1: Kĩ Thuật xét tính đơn điệu của hàm số', 'https://www.youtube.com/watch?v=8siMxNiMesI', 'https://drive.google.com/file/d/1NuZ3dm5AWUK2zjoUAHB8gi9Qr0O0k8Te/view', 'https://drive.google.com/file/d/1TbKLnhVAPL34bJinf3tCPIR9tn7It4ZQ/view', NULL, '2022-10-19 09:05:57', 1),
(2, 1, 'Bài 2: Cực trị hàm số', 'https://drive.google.com/file/d/1TbKLnhVAPL34bJinf3tCPIR9tn7It4ZQ/view', 'https://drive.google.com/file/d/1TbKLnhVAPL34bJinf3tCPIR9tn7It4ZQ/view', 'https://drive.google.com/file/d/1TbKLnhVAPL34bJinf3tCPIR9tn7It4ZQ/view', NULL, '2022-10-19 09:05:57', 1),
(3, 1, 'Bài 3: Xác định cực trị hàm số', 'https://youtu.be/aIB_4IYP3XM', 'https://drive.google.com/file/d/1lFrPyrwvAMmCKkGjkiv3WlAxNK4I5Ubs/view', 'https://drive.google.com/file/d/1pe_kd5Vn5-LZxMl82iSwyN1JRH0MCIf8/view', NULL, '2022-10-19 16:39:48', 1),
(4, 2, 'Bài 1: Lũy thừa và các công thức', 'https://www.youtube.com/watch?v=tqUrjqdCKAk&list=PLjwDqV0cxzXVu-ZYLXMb4Qoh8SiAgXU7Q&index=1&t=24s', 'https://drive.google.com/file/d/1OVFptD53TbgNgwUuREPCo6LjQ2umKCvj/view?usp=sharing', 'https://drive.google.com/file/d/1oIwRnVxNgep101qzRJWFUQLa0YMZRBWF/view?usp=sharing', NULL, '2022-10-19 16:48:37', 1),
(5, 2, 'Bài 2: Logarit', 'https://youtu.be/0lg2ZxKh2F0', 'https://drive.google.com/file/d/1YxFT5fjJjJa6aZpRvPJ--4A6Lnm2MqSB/view?usp=sharing', 'https://drive.google.com/file/d/1R0CJNW6OabpcKD4v4s71DvpH2Nploqpx/view?usp=sharing', NULL, '2022-10-19 16:48:37', 1),
(6, 2, 'Bài 3: Đạo hàm hàm số mũ - hàm số logarit ', 'https://www.youtube.com/watch?v=H7alsuY95n8&list=PLjwDqV0cxzXVu-ZYLXMb4Qoh8SiAgXU7Q&index=2', 'https://drive.google.com/file/d/1pV5q37_hL5cy8RjSebRB2BRELX74GJ2G/view', 'https://drive.google.com/file/d/18uU2ErBMa7I4YEGAa8eJ8Fyqrs1dEugb/view', NULL, '2022-10-19 16:50:00', 1),
(7, 3, 'Bài 1: Hàm số lượng giác', 'https://www.youtube.com/watch?v=h6F1cfElgeQ&list=PLjwDqV0cxzXU3gAvN-HnOwFnD3GC1DAcb&index=12&t=1s', 'https://drive.google.com/file/d/1wjNv6sWDe3Gcu17lM1Y3-N_AHl8ZuvF0/view', 'https://drive.google.com/file/d/1jxNw7w-72PSVLWLT2TZilaGQhbOLYlBh/view', NULL, '2022-10-27 09:22:41', 1),
(8, 3, 'Bài 2: Phương Trình Lượng Giác Cơ Bản', 'https://youtu.be/pwWxVSD8MpE', 'https://drive.google.com/file/d/1QtXFJAxSVohAuAK9APbigGoS02HDqXgX/view', 'https://drive.google.com/file/d/1nwH5OWM3MbGiuJAaKw9pKYTXUJej1PvU/view', NULL, '2022-10-27 09:22:41', 1),
(9, 4, 'Bài 1: Phép Biến Hình', 'https://www.youtube.com/watch?v=aqsw4RnOUns&feature=youtu.be', 'https://drive.google.com/file/d/1mMh67nEF5dgnbFoNPcMJ1WRnywWUeTWF/view', 'https://drive.google.com/file/d/15tooajjs6xuwWnkDZcuGpSEghqBt-yTS/view', NULL, '2022-10-27 09:30:52', 1),
(10, 4, 'Bài 2: Phép Tịnh Tiến', 'https://www.youtube.com/watch?v=SJPguH3Baz0', 'https://drive.google.com/file/d/1WaQ0D5PMFG_-Dclr5D0xyZwvskVOsCfE/view', 'https://drive.google.com/file/d/1Zx_07qxtaZHL_gQ71bMLyNkKSAzTDW5f/view', NULL, '2022-10-27 09:30:52', 1),
(11, 5, 'Bài 1: Mệnh Đề', 'https://www.youtube.com/watch?v=oaJ1pn-kRsU&list=PLjwDqV0cxzXVu-ZYLXMb4Qoh8SiAgXU7Q&index=6', 'https://drive.google.com/file/d/1Il0My2zHSjT0d4dkzx9UmmCzSwEYjUlO/view', 'https://drive.google.com/file/d/1NCUGvECsaKNTgZrfozDOnmslj1EPa0T-/view', NULL, '2022-10-27 09:34:48', 1),
(12, 5, 'Bài 2: Tập Hợp', 'https://www.youtube.com/watch?v=6Qvg8e4z-0g&feature=youtu.be', 'https://drive.google.com/file/d/1lfS001LbIDwJAY8mzBdfTe8LYSmqJC75/view', 'https://drive.google.com/file/d/1TSzYbjjBLAQPIJwMcoGRhOw-HyKK7Px3/view', NULL, '2022-10-27 09:34:48', 1),
(13, 6, 'Bài 1: Các Định Nghĩa', 'https://www.youtube.com/watch?v=aqsw4RnOUns&feature=youtu.be', 'https://drive.google.com/file/d/1WaQ0D5PMFG_-Dclr5D0xyZwvskVOsCfE/view', 'https://drive.google.com/file/d/15tooajjs6xuwWnkDZcuGpSEghqBt-yTS/view', NULL, '2022-10-27 09:37:02', 1),
(14, 6, 'Bài 2: Tổng Và Hiệu Của Hai Vectơ', 'https://www.youtube.com/watch?v=oaJ1pn-kRsU&list=PLjwDqV0cxzXVu-ZYLXMb4Qoh8SiAgXU7Q&index=6', 'https://drive.google.com/file/d/1mMh67nEF5dgnbFoNPcMJ1WRnywWUeTWF/view', 'https://drive.google.com/file/d/15tooajjs6xuwWnkDZcuGpSEghqBt-yTS/view', NULL, '2022-10-27 09:37:02', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chuong_trinh`
--

CREATE TABLE `tbl_chuong_trinh` (
  `ct_chuong` int(10) NOT NULL,
  `ct_ten_chuong` varchar(200) NOT NULL,
  `th_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chuong_trinh`
--

INSERT INTO `tbl_chuong_trinh` (`ct_chuong`, `ct_ten_chuong`, `th_id`) VALUES
(1, '[Đại số] Chương 1: Hàm số', 'LOP12'),
(2, '[Đại số] Chương 2: Hàm số lũy thừa, hàm số mũ, hàm số logarit', 'LOP12'),
(3, '[ĐẠI SỐ] Chương 1: Hàm số lượng giác và phương trình lượng giác', 'LOP11'),
(4, '[HÌNH HỌC] CHƯƠNG 1: PHÉP DỜI HÌNH VÀ PHÉP ĐỒNG DẠNG TRONG MẶT PHẲNG', 'LOP11'),
(5, '[ĐẠI SỐ] Chương 1: Mệnh Đề – Tập Hợp', 'LOP10'),
(6, '[HÌNH HỌC] Chương 1: Vectơ', 'LOP10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dang_ky_khoa_hoc`
--

CREATE TABLE `tbl_dang_ky_khoa_hoc` (
  `dk_id` int(10) NOT NULL,
  `th_id` varchar(10) NOT NULL,
  `tk_id` int(10) NOT NULL,
  `dk_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dang_ky_khoa_hoc`
--

INSERT INTO `tbl_dang_ky_khoa_hoc` (`dk_id`, `th_id`, `tk_id`, `dk_created`) VALUES
(49, 'LOP12', 3, '2022-10-27 07:24:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giao_vien`
--

CREATE TABLE `tbl_giao_vien` (
  `gv_id` int(10) NOT NULL,
  `gv_ho_ten` varchar(200) NOT NULL,
  `gv_thong_tin` text NOT NULL,
  `th_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_giao_vien`
--

INSERT INTO `tbl_giao_vien` (`gv_id`, `gv_ho_ten`, `gv_thong_tin`, `th_id`) VALUES
(1, 'Hồ Đức Thuận', 'Giáo viên có nhiều năm kinh nghiệm giảng dạy Toán 12 từ cơ bản đến nâng cao.', 'LOP12'),
(2, 'Doãn Minh Thật', 'Giáo viên có nhiều năm kinh nghiệm giảng dạy Toán 11 từ cơ bản đến nâng cao.', 'LOP11'),
(3, 'Doãn Minh Thật', 'Giáo viên có nhiều năm kinh nghiệm giảng dạy Toán 10 từ cơ bản đến nâng cao.', 'LOP10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gop_y`
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
-- Đang đổ dữ liệu cho bảng `tbl_gop_y`
--

INSERT INTO `tbl_gop_y` (`gy_id`, `gy_email`, `gy_dien_thoai`, `gy_tieu_de`, `gy_noi_dung`, `gy_created`) VALUES
(1, 'nguyenminhthuy@gmail.com', '0974658274', 'Về chương 1 lớp 12', 'Bài tập giảng dạy rất chi tiết.', '2022-10-18 14:04:29'),
(2, 'loo@gmail.com', '090373952', 'Test', 'Chào nhé', '2022-10-26 04:47:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tai_khoan`
--

CREATE TABLE `tbl_tai_khoan` (
  `tk_id` int(10) NOT NULL,
  `tk_ten_tai_khoan` varchar(100) NOT NULL,
  `tk_mat_khau` varchar(100) NOT NULL,
  `tk_email` varchar(200) NOT NULL,
  `tk_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `tk_anh_dai_dien` varchar(200) DEFAULT NULL,
  `tk_loai_tai_khoan` varchar(50) NOT NULL DEFAULT 'user',
  `tk_dien_thoai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tai_khoan`
--

INSERT INTO `tbl_tai_khoan` (`tk_id`, `tk_ten_tai_khoan`, `tk_mat_khau`, `tk_email`, `tk_created`, `tk_anh_dai_dien`, `tk_loai_tai_khoan`, `tk_dien_thoai`) VALUES
(1, 'Nguyễn Thị Ngọc Anh', 'mothaiba', 'ngocanh@gmail.com', '2022-10-17 06:00:27', NULL, 'admin', NULL),
(2, 'Anh thư', '09022005', 'nguyenminhthuy@gmail.com', '2022-10-18 14:01:52', '264372000_1329225657524050_9151701995143130414_n.jpg', 'user', NULL),
(3, 'Anh thư', '456', 'mkla456@gmail.com', '2022-10-26 07:32:43', '260006156_209243341360604_6879513226724839290_n.png', 'user', '0123456777');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tong_hop_khoa_hoc`
--

CREATE TABLE `tbl_tong_hop_khoa_hoc` (
  `th_id` varchar(10) NOT NULL,
  `th_ten_khoa_hoc` varchar(100) NOT NULL,
  `th_thong_tin` text NOT NULL,
  `th_anh_khoa_hoc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tong_hop_khoa_hoc`
--

INSERT INTO `tbl_tong_hop_khoa_hoc` (`th_id`, `th_ten_khoa_hoc`, `th_thong_tin`, `th_anh_khoa_hoc`) VALUES
('LOP10', 'Khóa học Toán lớp 10', 'Tổng hợp các kiến thức đại số và hình học lớp 10. Khóa học được chia theo các chương, mỗi bài học gồm video bài giảng, đề ôn tập và đáp án.', 'khoahoc10.png'),
('LOP11', 'Khóa học Toán lớp 11', 'Tổng hợp các kiến thức đại số và hình học lớp 11. Khóa học được chia theo các chương, mỗi bài học gồm video bài giảng, đề ôn tập và đáp án.', 'khoahoc11.png'),
('LOP12', 'Khóa học Toán lớp 12', 'Tổng hợp các kiến thức đại số và hình học lớp 12. Khóa học được chia theo các chương, mỗi bài học gồm video bài giảng, đề ôn tập và đáp án.', 'khoahoc12.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_chuong_trinh`
--
ALTER TABLE `chi_tiet_chuong_trinh`
  ADD PRIMARY KEY (`chi_tiet_id`),
  ADD KEY `fk_chuongtrinh_chitiet` (`ct_chuong`);

--
-- Chỉ mục cho bảng `tbl_chuong_trinh`
--
ALTER TABLE `tbl_chuong_trinh`
  ADD PRIMARY KEY (`ct_chuong`),
  ADD KEY `fk_tonghop_chuong_trinh` (`th_id`);

--
-- Chỉ mục cho bảng `tbl_dang_ky_khoa_hoc`
--
ALTER TABLE `tbl_dang_ky_khoa_hoc`
  ADD PRIMARY KEY (`dk_id`),
  ADD KEY `fk_dangky_tonghop` (`th_id`),
  ADD KEY `fk_dangky_taikhoan` (`tk_id`);

--
-- Chỉ mục cho bảng `tbl_giao_vien`
--
ALTER TABLE `tbl_giao_vien`
  ADD PRIMARY KEY (`gv_id`),
  ADD KEY `fk_giaovien_tonghop` (`th_id`);

--
-- Chỉ mục cho bảng `tbl_gop_y`
--
ALTER TABLE `tbl_gop_y`
  ADD PRIMARY KEY (`gy_id`);

--
-- Chỉ mục cho bảng `tbl_tai_khoan`
--
ALTER TABLE `tbl_tai_khoan`
  ADD PRIMARY KEY (`tk_id`);

--
-- Chỉ mục cho bảng `tbl_tong_hop_khoa_hoc`
--
ALTER TABLE `tbl_tong_hop_khoa_hoc`
  ADD PRIMARY KEY (`th_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_chuong_trinh`
--
ALTER TABLE `chi_tiet_chuong_trinh`
  MODIFY `chi_tiet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_chuong_trinh`
--
ALTER TABLE `tbl_chuong_trinh`
  MODIFY `ct_chuong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_dang_ky_khoa_hoc`
--
ALTER TABLE `tbl_dang_ky_khoa_hoc`
  MODIFY `dk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `tbl_giao_vien`
--
ALTER TABLE `tbl_giao_vien`
  MODIFY `gv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_gop_y`
--
ALTER TABLE `tbl_gop_y`
  MODIFY `gy_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_tai_khoan`
--
ALTER TABLE `tbl_tai_khoan`
  MODIFY `tk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_chuong_trinh`
--
ALTER TABLE `chi_tiet_chuong_trinh`
  ADD CONSTRAINT `fk_chuongtrinh_chitiet` FOREIGN KEY (`ct_chuong`) REFERENCES `tbl_chuong_trinh` (`ct_chuong`);

--
-- Các ràng buộc cho bảng `tbl_chuong_trinh`
--
ALTER TABLE `tbl_chuong_trinh`
  ADD CONSTRAINT `fk_tonghop_chuong_trinh` FOREIGN KEY (`th_id`) REFERENCES `tbl_tong_hop_khoa_hoc` (`th_id`);

--
-- Các ràng buộc cho bảng `tbl_dang_ky_khoa_hoc`
--
ALTER TABLE `tbl_dang_ky_khoa_hoc`
  ADD CONSTRAINT `fk_dangky_taikhoan` FOREIGN KEY (`tk_id`) REFERENCES `tbl_tai_khoan` (`tk_id`),
  ADD CONSTRAINT `fk_dangky_tonghop` FOREIGN KEY (`th_id`) REFERENCES `tbl_tong_hop_khoa_hoc` (`th_id`);

--
-- Các ràng buộc cho bảng `tbl_giao_vien`
--
ALTER TABLE `tbl_giao_vien`
  ADD CONSTRAINT `fk_giaovien_tonghop` FOREIGN KEY (`th_id`) REFERENCES `tbl_tong_hop_khoa_hoc` (`th_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 04:04 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chuong_trinh`
--
ALTER TABLE `tbl_chuong_trinh`
  ADD PRIMARY KEY (`ct_chuong`),
  ADD KEY `fk_tonghop_chuong_trinh` (`th_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_chuong_trinh`
--
ALTER TABLE `tbl_chuong_trinh`
  ADD CONSTRAINT `fk_tonghop_chuong_trinh` FOREIGN KEY (`th_id`) REFERENCES `tbl_tong_hop_khoa_hoc` (`th_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

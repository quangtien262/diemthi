-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 04:48 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hri`
--

-- --------------------------------------------------------

--
-- Table structure for table `hri__location`
--

CREATE TABLE `hri__location` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `parentID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sortOrder` tinyint(3) UNSIGNED NOT NULL DEFAULT '255'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hri__location`
--

INSERT INTO `hri__location` (`id`, `name`, `parentID`, `sortOrder`) VALUES
(2, 'An Giang', 1, 255),
(3, 'Bà Rịa Vũng Tàu', 1, 255),
(4, 'Bình Dương', 1, 255),
(5, 'Bình Phước', 1, 255),
(6, 'Bình Thuận', 1, 255),
(7, 'Bình Định', 1, 255),
(8, 'Bắc Giang', 1, 255),
(9, 'Bắc Kạn', 1, 255),
(10, 'Bắc Ninh', 1, 255),
(11, 'Bến Tre', 1, 255),
(12, 'Cao Bằng', 1, 255),
(13, 'Cà Mau', 1, 255),
(14, 'Cần Thơ', 1, 255),
(15, 'Gia Lai', 1, 255),
(16, 'Hà Giang', 1, 255),
(17, 'Hà Nam', 1, 255),
(18, 'Hà Nội', 1, 2),
(19, 'Hà Tĩnh', 1, 255),
(20, 'Hòa Bình', 1, 255),
(21, 'Hưng Yên', 1, 255),
(22, 'Hải Dương', 1, 255),
(23, 'Hải Phòng', 1, 255),
(24, 'Hồ Chí Minh', 1, 3),
(25, 'Khánh Hòa', 1, 255),
(26, 'Kiên Giang', 1, 255),
(27, 'Kon Tum', 1, 255),
(28, 'Lai Châu', 1, 255),
(29, 'Long An', 1, 255),
(30, 'Lào Cai', 1, 255),
(31, 'Lâm Đồng', 1, 255),
(32, 'Lạng Sơn', 1, 255),
(33, 'Nam Định', 1, 255),
(34, 'Nghệ An', 1, 255),
(35, 'Ninh Bình', 1, 255),
(36, 'Ninh Thuận', 1, 255),
(37, 'Phú Thọ', 1, 255),
(38, 'Phú Yên', 1, 255),
(40, 'Quảng Nam', 1, 255),
(41, 'Quảng Ngãi', 1, 255),
(42, 'Quảng Ninh', 1, 255),
(43, 'Quảng Trị', 1, 255),
(44, 'Sơn La', 1, 255),
(45, 'Thanh Hóa', 1, 255),
(46, 'Thái Bình', 1, 255),
(47, 'Thái Nguyên', 1, 255),
(48, 'Thừa Thiên Huế', 1, 255),
(49, 'Tiền Giang', 1, 255),
(50, 'Trà Vinh', 1, 255),
(51, 'Tuyên Quang', 1, 255),
(52, 'Tây Ninh', 1, 255),
(53, 'Vĩnh Long', 1, 255),
(54, 'Vĩnh Phúc', 1, 255),
(55, 'Yên Bái', 1, 255),
(56, 'Đà Nẵng', 1, 4),
(57, 'Đắk Lắk', 1, 255),
(58, 'Đồng Nai', 1, 255),
(59, 'Đồng Tháp', 1, 255),
(60, 'Bạc Liêu', 1, 255),
(61, 'Sóc Trăng', 1, 255),
(62, 'Hậu Giang', 1, 255),
(63, 'Đắk Nông', 1, 255),
(64, 'Điện Biên', 1, 255),
(2702, 'Nhật bản', 0, 255),
(2703, 'Indonesia', 0, 255),
(2704, 'Malaysia', 0, 255),
(2705, 'philippines', 0, 255),
(2706, 'Hà Lan', 0, 255),
(2707, 'USA', 0, 255),
(2708, 'EU', 0, 255),
(2709, 'Hàn Quốc', 0, 255);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hri__location`
--
ALTER TABLE `hri__location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hri__location`
--
ALTER TABLE `hri__location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2710;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

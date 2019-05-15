-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 07:49 PM
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
-- Database: `diemthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_right`
--

CREATE TABLE `ad_right` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_right`
--

INSERT INTO `ad_right` (`id`, `name`, `parent_id`, `sort_order`, `created_at`, `updated_at`, `image`, `link`) VALUES
(1, 'Giao dịch vàng', 0, 0, '2019-05-09 22:19:57', '2019-05-09 22:19:57', '/photos/1/quang-cao/quang-cao-02.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `ad_top`
--

CREATE TABLE `ad_top` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_top`
--

INSERT INTO `ad_top` (`id`, `name`, `parent_id`, `sort_order`, `created_at`, `updated_at`, `image`, `link`) VALUES
(1, 'The sun', 0, 0, '2019-05-09 22:09:19', '2019-05-09 22:18:25', '/photos/1/quang-cao/quang-cao-01.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `parent_id`, `sort_order`, `created_at`, `updated_at`, `link`, `image`) VALUES
(1, 'Banner', 0, 0, '2019-05-09 22:05:33', '2019-05-09 22:15:34', '#', '/photos/1/banner/banner.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `route_id` int(11) DEFAULT NULL,
  `seo_keyword` text COLLATE utf8_unicode_ci,
  `seo_description` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `sort_order`, `created_at`, `updated_at`, `name`, `parent_id`, `route_id`, `seo_keyword`, `seo_description`, `link`) VALUES
(2, 3, '2019-03-29 23:05:16', '2019-05-09 04:45:22', 'Kinh tế', 0, 0, NULL, NULL, 'http://www.baogiaothong.vn/kinh-te/'),
(3, 7, '2019-03-29 23:05:43', '2019-05-09 04:44:51', 'Thể thao', 0, 0, NULL, NULL, 'http://www.baogiaothong.vn/the-thao/'),
(4, 8, '2019-03-29 23:05:26', '2019-05-09 04:45:09', 'Công nghệ', 0, 0, NULL, NULL, 'http://www.baogiaothong.vn/cong-nghe/'),
(8, 5, '2019-04-14 23:09:32', '2019-05-09 04:42:28', 'Chất lượng cuộc sống', 0, 0, NULL, NULL, 'http://www.baogiaothong.vn/suc-khoe-doi-song/'),
(11, 1, '2019-04-14 23:10:32', '2019-05-09 04:43:10', 'Pháp luật', 0, 0, NULL, NULL, 'http://www.baogiaothong.vn/phap-luat/'),
(12, 6, '2019-04-14 23:10:47', '2019-05-09 04:43:51', 'Văn hóa giải trí', 0, 0, NULL, NULL, 'http://www.baogiaothong.vn/giai-tri/'),
(13, 4, '2019-04-22 01:21:37', '2019-05-09 04:40:23', 'Thời sự -  Xã hội', 0, 0, NULL, NULL, 'http://www.baogiaothong.vn/thoi-su-xa-hoi/'),
(14, 2, '2019-04-29 03:25:58', '2019-05-09 04:41:11', 'Giao thông', 0, 0, NULL, NULL, 'http://www.baogiaothong.vn/giao-thong-phat-trien/');

-- --------------------------------------------------------

--
-- Table structure for table `configweb`
--

CREATE TABLE `configweb` (
  `id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_title` text COLLATE utf8_unicode_ci,
  `seo_description` text COLLATE utf8_unicode_ci,
  `seo_keyword` text COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `configweb`
--

INSERT INTO `configweb` (`id`, `sort_order`, `created_at`, `updated_at`, `name`, `address`, `email`, `logo`, `seo_title`, `seo_description`, `seo_keyword`, `phone`) VALUES
(1, 0, '2019-04-05 20:49:15', '2019-05-09 22:41:03', 'Công Ty TNHH ABC', 'Nguyen Khuyen, 5/12', 'quangtienvkt@gmail.com', '/photos/1/logo/home.png', 'Báo Giao Thông - Tra điểm thi THPT và Tuyển sinh lớp 10', 'Báo Giao Thông - Tra điểm thi THPT và Tuyển sinh lớp 10', 'Báo Giao Thông, Tra điểm thi THPT, Tuyển sinh lớp 10', '32');

-- --------------------------------------------------------

--
-- Table structure for table `diem_thi_thpt`
--

CREATE TABLE `diem_thi_thpt` (
  `id` int(10) UNSIGNED NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sobaodanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diem_thi` text COLLATE utf8_unicode_ci,
  `gioi_tinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toan` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `ngu_van` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `lich_su` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `dia_ly` int(11) DEFAULT '0',
  `gdcd` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `khxh` int(11) DEFAULT '0',
  `tieng_anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `vat_ly` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `hoa_hoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `sinh_hoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `name`, `parent_id`, `sort_order`, `created_at`, `updated_at`, `link`) VALUES
(1, 'Nội dung mới', 0, 6, '2019-04-30 22:52:46', '2019-04-30 22:52:46', '#'),
(2, 'Ứng dụng cho Windows 10', 1, 1, '2019-04-30 22:52:55', '2019-04-30 22:52:55', '#'),
(3, 'Các ứng dụng Office', 1, 2, '2019-04-30 22:53:08', '2019-04-30 22:53:13', '#'),
(4, 'Microsoft Store', 0, 5, '2019-04-30 22:54:18', '2019-04-30 22:54:18', NULL),
(5, 'Hồ sơ tài khoản', 4, 1, '2019-04-30 22:54:26', '2019-04-30 22:54:26', NULL),
(6, 'Trung tâm Tải xuống', 4, 2, '2019-04-30 22:54:32', '2019-04-30 22:54:32', NULL),
(7, 'Trả lại', 4, 3, '2019-04-30 22:54:39', '2019-04-30 22:54:39', NULL),
(8, 'Theo dõi đơn hàng', 4, 4, '2019-04-30 22:54:48', '2019-04-30 22:54:48', NULL),
(9, 'Giáo dục', 0, 4, '2019-04-30 22:55:33', '2019-04-30 22:55:33', NULL),
(10, 'Microsoft trong giáo dục', 9, 1, '2019-04-30 22:55:36', '2019-04-30 22:55:36', NULL),
(11, 'Office cho học sinh', 9, 2, '2019-04-30 22:55:43', '2019-04-30 22:55:43', NULL),
(12, 'Office 365 cho trường học', 9, 3, '2019-04-30 22:55:52', '2019-04-30 22:55:52', NULL),
(13, 'Doanh nghiệp', 0, 3, '2019-04-30 22:56:11', '2019-04-30 22:56:11', NULL),
(14, 'Microsoft Azure', 13, 1, '2019-04-30 22:56:22', '2019-04-30 22:56:22', NULL),
(15, 'Microsoft Industry', 13, 2, '2019-04-30 22:56:28', '2019-04-30 22:56:28', NULL),
(16, 'Dịch vụ Tài chính', 13, 3, '2019-04-30 22:56:39', '2019-04-30 22:56:39', NULL),
(17, 'Nhà phát triển', 0, 2, '2019-04-30 22:56:55', '2019-04-30 22:56:55', NULL),
(18, 'Microsoft Visual Studio', 17, 1, '2019-04-30 22:57:03', '2019-04-30 22:57:03', NULL),
(19, 'Mạng lưới Nhà phát triển', 17, 2, '2019-04-30 22:57:10', '2019-04-30 22:57:10', NULL),
(20, 'Công ty', 0, 1, '2019-04-30 22:57:22', '2019-04-30 22:57:22', NULL),
(21, 'Sự nghiệp', 20, 1, '2019-04-30 22:57:31', '2019-04-30 22:57:31', NULL),
(22, 'Giới thiệu về công ty', 20, 2, '2019-04-30 22:57:49', '2019-04-30 22:57:49', NULL),
(23, 'Tin tức công ty', 20, 3, '2019-04-30 22:57:58', '2019-04-30 22:57:58', NULL),
(24, 'Nhà đầu tư', 20, 4, '2019-04-30 22:58:09', '2019-04-30 22:58:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`, `parent_id`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Nam', 0, 0, '2019-05-10 05:20:36', '2019-05-10 05:20:36'),
(2, 'Nữ', 0, 0, '2019-05-10 05:20:42', '2019-05-10 05:20:42');

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
(3, '2019_02_22_024550_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Model\\User', 2),
(2, 'App\\Model\\User', 3),
(2, 'App\\Model\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `summary` text COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `seo_keyword` text COLLATE utf8_unicode_ci,
  `seo_description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `sort_order`, `created_at`, `updated_at`, `title`, `image`, `content`, `summary`, `category_id`, `seo_keyword`, `seo_description`) VALUES
(4, 0, '2019-03-19 20:22:05', '2019-04-22 00:55:10', 'Laporte: \'Man City mạnh hơn Liverpool\'', '/photos/1/hi-res-8a7cae324bacba9b17177b2-2578-7496-1554699289_500x300.png', '<h1>Laporte: &#39;Man City mạnh hơn Liverpool&#39;</h1>\r\n\r\n<p>Trung vệ Man City muốn đội nh&agrave; đoạt mọi danh hiệu m&ugrave;a n&agrave;y.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Khi gi&agrave;nh chiến thắng mọi trận đấu, ch&uacute;ng t&ocirc;i cảm thấy l&agrave; đội b&oacute;ng lớn. Ch&uacute;ng t&ocirc;i sẽ giữ vững phong độ v&agrave; gi&agrave;nh mọi danh hiệu, đ&oacute; l&agrave; điều to&agrave;n đội mong muốn&quot;,&nbsp;Aymeric Laporte n&oacute;i với tờ&nbsp;<em>Telefoot</em>. &quot;Trở th&agrave;nh đội hay nhất ở Ngoại hạng Anh l&agrave; phần thưởng quan trọng, v&agrave; t&ocirc;i hy vọng Man City sẽ kết th&uacute;c m&ugrave;a giải với v&agrave;i danh hiệu&quot;.</p>\r\n\r\n<p>Man City đang tr&ecirc;n đường chinh phục c&uacute; ăn bốn ở m&ugrave;a giải n&agrave;y. Đội b&oacute;ng vừa lọt v&agrave;o chung kết Cup FA, sau khi đoạt Cup Li&ecirc;n đo&agrave;n Anh. Man City cũng chuẩn bị thi đấu ở tứ kết Champions League, v&agrave; đang đua tranh ng&ocirc;i v&ocirc; địch Ngoại hạng Anh c&ugrave;ng Liverpool.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Laporte là một trong những trụ cột ở hàng thủ Man City. Ảnh: AFP.\" src=\"https://i-thethao.vnecdn.net/2019/04/08/hi-res-8a7cae324bacba9b17177b2-2832-1770-1554699289.png\" style=\"margin:0px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Laporte l&agrave; một trong những trụ cột ở h&agrave;ng thủ Man City. Ảnh:&nbsp;<em>AFP.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&quot;Liệu ch&uacute;ng t&ocirc;i c&oacute; mạnh hơn Liverpool? T&ocirc;i cho rằng đ&uacute;ng như vậy. Liverpool c&oacute; đội h&igrave;nh rất chất lượng nhưng t&ocirc;i hy vọng Man City sẽ l&agrave;m n&ecirc;n kh&aacute;c biệt. T&ocirc;i tới Man City để gi&agrave;nh mọi danh hiệu, bao gồm cả Champions League. Mục ti&ecirc;u trước mắt l&agrave; tiến tới trận chung kết&quot;, Laporte n&oacute;i trước trận tứ kết lượt đi tr&ecirc;n s&acirc;n Tottenham.</p>\r\n\r\n<p>Trong khi Man City chơi trận b&aacute;n kết Cup FA v&agrave;o cuối tuần trước, Liverpool đ&atilde; tận dụng thời cơ vươn l&ecirc;n vị tr&iacute; dẫn đầu Ngoại hạng Anh. Liverpool đang hơn Man City hai điểm, nhưng chơi nhiều hơn một trận.</p>', 'Man City đang trên đường chinh phục cú ăn bốn ở mùa giải này. Đội bóng vừa lọt vào chung kết Cup FA,', 3, NULL, NULL),
(5, 0, '2019-03-21 02:18:27', '2019-04-21 03:11:09', 'Thương  Hiệu Suzaran', '/photos/1/Nhandienthuonghieu3-ID2984.png', '<p>Sản phẩm b&ocirc;ng tẩy trang được sản xuất bằng c&ocirc;ng nghệ y tế</p>\r\n\r\n<p>Trụ sở ch&iacute;nh của ch&uacute;ng t&ocirc;i được đặt tại Nhật Bản, Suzaran cung cấp những sản phẩm đảm bảo ti&ecirc;u chuẩn tr&ecirc;n thị trường.</p>\r\n\r\n<p><!--[if !supportLists]-->-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Lời ch&agrave;o</p>\r\n\r\n<p>Suzaran tự tin về c&aacute;c sản phẩm của m&igrave;nh tr&ecirc;n thị trường. B&ocirc;ng Tẩy Trang Lily Bell được thiết kế sử dụng trong l&agrave;m đẹp v&agrave; xuất ph&aacute;t từ một lịch sử l&acirc;u đời: Đ&oacute; ch&iacute;nh l&agrave; miếng Gạc Y tế được sử dụng trong c&aacute;c t&igrave;nh huống quan trọng v&agrave; sản xuất ra c&aacute;c sản phẩm an to&agrave;n d&ugrave;ng cho em b&eacute;. Được bắt đầu sản xuất tại Nhật Bản từ 180 năm trước, Suzaran tự h&agrave;o mang đến Việt Nam những miếng b&ocirc;ng chất lượng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Suzaran lu&ocirc;n theo đ&ocirc;ng h&agrave;nh c&ugrave;ng kh&aacute;ch h&agrave;ng để đ&aacute;p ứng những nhu cầu ti&ecirc;u chuẩn m&agrave; kh&aacute;ch h&agrave;ng đề ra. Thương hiệu B&ocirc;ng t&acirc;y trang Lily Bell được người ti&ecirc;u d&ugrave;ng y&ecirc;u th&iacute;ch với c&ocirc;ng dụng gi&uacute;p chăm s&oacute;c da, l&agrave;m sạch da. Suzaran Việt Nam hứa hẹn sẽ mang đến những sản phẩm chất lượng đến kh&aacute;ch h&agrave;ng.</p>', 'Sản phẩm bông tẩy trang được sản xuất bằng công nghệ y tế\r\nTrụ sở chính của chúng tôi được đặt tại Nhật Bản', 4, NULL, NULL),
(6, 0, '2019-04-06 20:58:36', '2019-04-21 03:11:24', 'Chứng nhận An toàn', '/photos/1/giay-chung-nhan-ve-sinh-an-toan-thuc-pham.jpg', '<p>1. Sản phẩm uy t&iacute;n&nbsp;</p>\r\n\r\n<p>2. Chất lượng đạt chuẩn</p>\r\n\r\n<p>3. l&agrave;m việc với ti&ecirc;u ch&iacute; &quot;c&ugrave;ng đồng h&agrave;nh v&agrave; ph&aacute;t triển&quot;</p>', 'mang đến cho khách hàng những sản phẩm thảo dược được điều chế hoàn toàn 100% từ thiên nhiên', 4, NULL, NULL),
(7, 0, '2019-04-21 03:15:05', '2019-04-22 01:12:55', 'Nông dân vượt dốc đào măng đắng vào cuối vụ ở Thanh Hóa', '/photos/1/20190416095816-1555493123-5172-1555493171_380x228.jpg', '<p>Ng&agrave;y 22/4, Bộ trưởng Gi&aacute;o dục v&agrave; Đ&agrave;o tạo Ph&ugrave;ng Xu&acirc;n Nhạ đ&atilde; trả lời b&aacute;o ch&iacute;&nbsp;về việc xử l&yacute; những người li&ecirc;n quan đến gian lận điểm thi ở H&agrave; Giang, Sơn La v&agrave; H&ograve;a B&igrave;nh.&nbsp;</p>\r\n\r\n<p><em>- 16 c&aacute;n bộ gi&aacute;o dục, c&ocirc;ng an ở ba tỉnh đ&atilde; bị khởi tố v&igrave; li&ecirc;n quan gian lận điểm thi THPT Quốc gia, nhưng Chủ tịch Hội đồng thi, người đứng đầu ng&agrave;nh gi&aacute;o dục địa phương, phụ huynh trong ng&agrave;nh c&oacute; con em được n&acirc;ng điểm chưa bị xử l&yacute;. L&agrave; Chủ tịch Hội đồng thi THPT quốc gia, Bộ trưởng c&oacute; &yacute; kiến thế n&agrave;o với địa phương?</em></p>\r\n\r\n<p>- T&ocirc;i rất đau l&ograve;ng v&agrave; kh&ocirc;ng chấp nhận những c&aacute;n bộ, vi&ecirc;n chức ng&agrave;nh gi&aacute;o dục c&oacute; h&agrave;nh vi gian lận điểm thi cho th&iacute; sinh. H&agrave;nh vi n&agrave;y vi phạm đạo đức nh&agrave; gi&aacute;o, vi phạm ph&aacute;p luật nghi&ecirc;m trọng.&nbsp;</p>\r\n\r\n<p>Bộ đề nghị c&aacute;c địa phương xem x&eacute;t xử l&yacute; nghi&ecirc;m c&aacute;n bộ, c&ocirc;ng chức, vi&ecirc;n chức trong ng&agrave;nh gi&aacute;o dục c&oacute; h&agrave;nh vi gian lận điểm thi cho con em m&igrave;nh, tinh thần l&agrave; cương quyết đưa ra khỏi ng&agrave;nh những c&aacute;n bộ n&agrave;y.&nbsp;Bộ cũng đang t&iacute;ch cực phối hợp với Bộ C&ocirc;ng an x&aacute;c định đối tượng vi phạm để xử l&yacute; c&ocirc;ng bằng, ch&iacute;nh x&aacute;c, kh&ocirc;ng bao che v&agrave; minh bạch.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Bộ trưởng Phùng Xuân Nhạ. Ảnh: Võ Hải.\" src=\"https://i-vnexpress.vnecdn.net/2019/04/22/ong-nha-8650-1555909769.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Bộ trưởng Ph&ugrave;ng Xu&acirc;n Nhạ. Ảnh:&nbsp;<em>V&otilde; Hải.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><em>- 222 t</em><em>h&iacute; sinh sai điểm thi ở H&agrave; Giang, Sơn La, H&ograve;a B&igrave;nh vẫn được x&eacute;t tuyển đại học, trong khi những em mang điện thoại v&agrave;o ph&ograve;ng thi, d&ugrave; chưa sử dụng đ&atilde; bị đ&igrave;nh chỉ, hủy kết quả thi. Bộ trưởng nghĩ sao về hai c&aacute;ch xử l&yacute; n&agrave;y?</em></p>\r\n\r\n<p>-&nbsp;Tất cả h&agrave;nh vi gian lận trong kỳ thi THPT quốc gia n&oacute;i ri&ecirc;ng v&agrave; bất cứ kỳ thi n&agrave;o kh&aacute;c đều sẽ bị xử l&yacute; nghi&ecirc;m.&nbsp;C&aacute;c đại học khối c&ocirc;ng an đ&atilde; hủy kết quả tr&uacute;ng tuyển, trả về địa phương th&iacute; sinh được n&acirc;ng điểm. C&aacute;c trường khối d&acirc;n sự cũng hủy kết quả tr&uacute;ng tuyển với th&iacute; sinh c&oacute; điểm chấm thẩm định thấp hơn điểm chuẩn.</p>\r\n\r\n<p>Ri&ecirc;ng 12 th&iacute; sinh c&oacute; điểm chấm thẩm định kh&ocirc;ng thấp hơn điểm chuẩn th&igrave; trước mắt c&aacute;c trường đang cho tiếp tục theo học. Tuy nhi&ecirc;n, khi c&oacute; kết luận của cơ quan điều tra, em n&agrave;o c&oacute; tham gia v&agrave;o qu&aacute; tr&igrave;nh gian lận sẽ bị xử l&yacute; theo ph&aacute;p luật.</p>\r\n\r\n<p>Quan điểm của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo l&agrave; xử l&yacute; nghi&ecirc;m khắc, xem x&eacute;t cho th&ocirc;i học những th&iacute; sinh c&oacute; kết luận li&ecirc;n quan đến gian lận thi cử.</p>\r\n\r\n<p><em>-&nbsp;Tại sao việc xử l&yacute; kh&ocirc;ng sớm hơn để đỡ tốn c&ocirc;ng sức, tiền bạc khi c&aacute;c em học tiếp?</em></p>\r\n\r\n<p>-&nbsp;Xử l&yacute; sai phạm li&ecirc;n quan đến kết quả thi THPT quốc gia của th&iacute; sinh kh&ocirc;ng chỉ được &aacute;p dụng bởi Quy chế thi THPT quốc gia m&agrave; c&ograve;n nhiều văn bản quy phạm ph&aacute;p luật v&agrave; c&aacute;c quy định kh&aacute;c của cơ sở gi&aacute;o dục đại học. Khi xử l&yacute; một trường hợp, ch&uacute;ng ta phải &aacute;p dụng nhiều quy định để đảm bảo t&iacute;nh ch&iacute;nh x&aacute;c, c&ocirc;ng bằng, nghi&ecirc;m minh.</p>\r\n\r\n<p>Theo Luật Gi&aacute;o dục đại học, việc tuyển sinh thuộc quyền tự chủ của cơ sở gi&aacute;o dục đại học. C&aacute;c cơ sở gi&aacute;o dục đại học c&oacute; quyền v&agrave; tr&aacute;ch nhiệm xử l&yacute;, kh&ocirc;ng thụ động ngồi đợi chỉ đạo của Bộ. Vừa qua, c&aacute;c đại học khối c&ocirc;ng an đ&atilde; chủ động xử l&yacute; theo quyền v&agrave; tr&aacute;ch nhiệm của họ. T&ocirc;i ủng hộ c&aacute;ch xử l&yacute; của c&aacute;c trường n&agrave;y.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i đang r&agrave; so&aacute;t, tham khảo &yacute; kiến chuy&ecirc;n gia ph&aacute;p luật để ho&agrave;n thiện c&aacute;c quy chế của ng&agrave;nh nhằm giải quyết những vấn đề thực tế ph&aacute;t sinh khi thực hiện cơ chế tự chủ đại học, đặc biệt l&agrave; quy định c&aacute;c chế t&agrave;i đủ mạnh để răn đe, xử l&yacute; ngay với c&aacute;c loại vi phạm gi&aacute;n tiếp trong thi cử.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://vnexpress.net/infographics/222-thi-sinh-duoc-nang-diem-bi-xu-ly-the-nao-3911339.html\"><img alt=\"222 thí sinh được nâng điểm đang bị xử lý như thế nào? Đồ họa: Tiến Thành\" src=\"https://i-vnexpress.vnecdn.net/2019/04/22/thi-sinh-vi-pham-5511-15557623-6234-6850-1555906557.jpg\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>222 th&iacute; sinh được n&acirc;ng điểm đang bị xử l&yacute; như thế n&agrave;o? Đồ họa:&nbsp;<em>Tiến Th&agrave;nh</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><em>- Hai th&aacute;ng nữa l&agrave; diễn ra kỳ thi THPT quốc gia 2019, Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo đ&atilde; chuẩn bị như thế n&agrave;o để ngăn chặn gian lận?</em></p>\r\n\r\n<p>-&nbsp;T&ocirc;i lu&ocirc;n qu&aacute;n triệt với c&aacute;n bộ tham gia v&agrave;o c&ocirc;ng t&aacute;c thi rằng việc tổ chức kỳ thi THPT quốc gia v&agrave; tuyển sinh đại học kh&ocirc;ng chỉ l&agrave; nhiệm vụ chuy&ecirc;n m&ocirc;n của ng&agrave;nh gi&aacute;o dục, m&agrave; c&ograve;n l&agrave; nhiệm vụ ch&iacute;nh trị, tr&aacute;ch nhiệm với x&atilde; hội. Do đ&oacute;, việc n&agrave;y phải đặc biệt được coi trọng để đảm bảo t&iacute;nh an to&agrave;n, nghi&ecirc;m t&uacute;c, c&ocirc;ng bằng, ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p>Những &quot;lỗ hổng&quot; về mặt quy tr&igrave;nh, kỹ thuật trong tổ chức thi THPT quốc gia 2018 hiện đ&atilde; được ng&agrave;nh gi&aacute;o dục khắc phục. Ch&uacute;ng t&ocirc;i cũng tăng cường ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin v&agrave; sử dụng c&aacute;c thiết bị kỹ thuật để đảm bảo an ninh, an to&agrave;n trong tổ chức thi; n&acirc;ng cấp phần mềm để ngăn chặn v&agrave; hỗ trợ ph&aacute;t hiện gian lận trong qu&aacute; tr&igrave;nh chấm thi.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, kỹ thuật, c&ocirc;ng nghệ c&oacute; tốt đến đ&acirc;u, con người tham gia v&agrave;o l&agrave;m thi m&agrave; kh&ocirc;ng tốt, cố &yacute; vi phạm th&igrave; ti&ecirc;u cực vẫn c&oacute; thể xảy đến. Do đ&oacute;, trong c&aacute;c cuộc họp chuẩn bị cho kỳ thi năm nay, t&ocirc;i lu&ocirc;n đặc biệt y&ecirc;u cầu lựa chọn c&aacute;n bộ c&oacute; năng lực, tr&aacute;ch nhiệm, phẩm chất ch&iacute;nh trị tốt để tham gia l&agrave;m thi v&agrave; phải chịu tr&aacute;ch nhiệm trực tiếp trước ph&aacute;p luật.</p>\r\n\r\n<p>Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo mong c&aacute;c bộ ng&agrave;nh, địa phương v&agrave; người d&acirc;n cả nước đồng h&agrave;nh, gi&aacute;m s&aacute;t, để việc tổ chức kỳ thi THPT quốc gia v&agrave; tuyển sinh đại học, cao đẳng 2019 th&agrave;nh c&ocirc;ng tốt đẹp.</p>', 'Gia đình ông Phạm Văn Ý vượt sườn dốc trơn trượt, tìm đào măng đắng vào cuối vụ. Thân măng dài 20-30 cm trọng', 3, NULL, NULL),
(8, 0, '2019-04-21 23:07:12', '2019-04-21 23:07:12', 'Fognini vô địch Monte Carlo 2019', '/photos/1/20001-1555870122-1555870136-7229-1555870146_180x108.png', '<p>Tay vợt Italy lần đầu v&ocirc; địch một giải ATP 1000, sau khi hạ Dusan Lajovic 6-3, 6-4 tại chung kết giải Monte Carlo.</p>\r\n\r\n<p>Một ng&agrave;y sau khi g&acirc;y sốc bằng việc loại Rafael Nadal ở b&aacute;n kết, Fabio Fognini c&oacute; được danh hiệu lớn nhất trong sự nghiệp từ trước đến nay. Tay vợt Italy nhẹ nh&agrave;ng vượt qua &quot;hiện tượng&quot; Dusan Lajovic trong trận ATP 1000 đầu ti&ecirc;n m&agrave; cả hai g&oacute;p mặt.</p>\r\n\r\n<p>Ở ba lần hạ Nadal trước đ&oacute;, Fognini đều thua nhanh ở v&ograve;ng đấu kế tiếp. Tay vợt Italy khiến người h&acirc;m mộ lo ngại điều tương tự sẽ lặp lại, khi đ&aacute;nh mất game giao b&oacute;ng thứ hai trong trận.</p>\r\n\r\n<p>Nhưng Lajovic cũng mới lần đầu dự chung kết ATP 1000 v&agrave; kh&ocirc;ng vững v&agrave;ng về t&acirc;m l&yacute;. Tay vợt Serbia c&oacute; hai game-point để dẫn 3-1 nhưng đều bỏ lỡ. Anh đ&aacute;nh hỏng qu&aacute; nhiều, để Fognini thắng liền bốn game v&agrave; dẫn ngược 5-2.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Lajovic mắc tới 36 lỗi tự đánh hỏng ở trận chung kết, nhiều hơn Fognini 13 lỗi. Ảnh: AP.\" src=\"https://i-thethao.vnecdn.net/2019/04/22/2000-jpeg-1555869978-2434-1555870145.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Lajovic mắc tới 36 lỗi tự đ&aacute;nh hỏng ở trận chung kết, nhiều hơn Fognini 13 lỗi. Ảnh:&nbsp;<em>AP</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Fognini c&agrave;ng chơi c&agrave;ng lấy lại sự b&igrave;nh tĩnh. Anh cứu th&agrave;nh c&ocirc;ng break-point ở game giao quyết định, trước khi thắng set đầu 6-3 nhờ điểm winner thứ 12.</p>\r\n\r\n<p>Lajovic đuối hơn trong c&aacute;c pha đ&ocirc;i c&ocirc;ng cuối s&acirc;n nhưng cũng kh&ocirc;ng dễ đầu h&agrave;ng. Tay vợt số 48 thế giới mất game giao b&oacute;ng đầu set hai, nhưng gỡ h&ograve;a ngay sau đ&oacute;. Chỉ khi Fognini thắng th&ecirc;m một game giao b&oacute;ng nữa v&agrave; vươn l&ecirc;n dẫn 3-2, thế trận mới tuột khỏi tầm tay Lajovic. Tay vợt Serbia g&aacute;c vợt chung cuộc với tỷ số 3-6, 4-6.</p>\r\n\r\n<p>&quot;Lần đầu v&agrave;o chung kết ATP 1000 l&agrave; trải nghiệm tuyệt vời với t&ocirc;i&quot;, Lajovic chia sẻ. &quot;Gi&oacute; tại Monte Carlo kh&aacute; to v&agrave; Fognini l&agrave; người gi&agrave;u kinh nghiệm hơn ở điều kiện thời tiết như h&ocirc;m nay. C&aacute;c c&uacute; quả v&agrave; khả năng di chuyển của anh ấy cũng rất tốt. T&ocirc;i c&oacute; cảm gi&aacute;c rằng m&igrave;nh vất vả hơn anh ấy trong việc gi&agrave;nh điểm. Đ&oacute; l&agrave; điểm mấu chốt trong thất bại n&agrave;y&quot;.</p>\r\n\r\n<p>Fognini l&agrave; hạt giống thấp nhất đăng quang tại Monte Carlo trong 20 năm qua. Anh gi&agrave;nh số tiền thưởng 958.000 đ&ocirc;la c&ugrave;ng 1000 điểm thưởng ATP &ndash; số điểm gi&uacute;p tay vợt Italy vươn l&ecirc;n thứ 12 thế giới v&agrave;o tuần n&agrave;y.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Fognini lên ngôi xứng đáng tại Monte Carlo. Ảnh: AP.\" src=\"https://i-thethao.vnecdn.net/2019/04/22/2000-1-jpeg-1555870095-5370-1555870146.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Fognini l&ecirc;n ng&ocirc;i xứng đ&aacute;ng tại Monte Carlo. Ảnh<em>:&nbsp;AP.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&quot;T&ocirc;i phải chuẩn bị kỹ c&agrave;ng cho trận đấu n&agrave;y v&igrave; HLV cũ của t&ocirc;i đang l&agrave;m việc c&ugrave;ng Lajovic&quot;, Fognini chia sẻ. &quot;T&ocirc;i đ&atilde; cố gắng kh&ocirc;ng để bị bắt b&agrave;i. Đ&acirc;y l&agrave; th&agrave;nh tựu to lớn sau một giải đấu kh&oacute; khăn. T&ocirc;i rất hạnh ph&uacute;c&quot;.</p>\r\n\r\n<p>Danh hiệu ATP 1000 đầu ti&ecirc;n sẽ mang đến sự tự tin cho Fognini trong phần c&ograve;n lại của m&ugrave;a đất nện. Tay vợt mới trở lại sau chấn thương từng hai lần su&yacute;t bị loại tại Monte Carlo năm nay. Anh bị Andrey Rubley dẫn 6-4, 4-1 ở v&ograve;ng một v&agrave; bị Borna Coric dẫn 6-1, 2-0 ở tứ kết. Fognini thắng ngược cả hai trận đấu đ&oacute;, rồi hạ &quot;Vua đất nện&quot; Nadal chỉ sau hai set v&agrave; cuối c&ugrave;ng c&oacute; danh hiệu lớn nhất sự nghiệp từ trước đến nay</p>', 'Tay vợt Italy lần đầu vô địch một giải ATP 1000, sau khi hạ Dusan Lajovic 6-3, 6-4 tại chung kết giải Monte Carlo.', 3, NULL, NULL),
(9, 0, '2019-04-21 23:08:43', '2019-04-21 23:08:43', 'Ronaldo cam kết ở lại Juventus', '/photos/1/ronaldo-1555823369-1555823379-8659-1555823432.png', '<p>Si&ecirc;u sao 34 tuổi sẽ gắn b&oacute; với &quot;L&atilde;o B&agrave;&quot; th&ecirc;m &iacute;t nhất một m&ugrave;a giải để chinh phục Champions League.</p>\r\n\r\n<p>&quot;Chắc chắn 1000 phần trăm l&agrave; t&ocirc;i sẽ ở lại Juventus m&ugrave;a tới&quot;, Cristiano Ronaldo n&oacute;i sau khi c&ugrave;ng Juventus v&ocirc; địch Serie A 2018-2019. Đường căng ngang của anh khiến hậu vệ Fiorentina phản lưới, ấn định thắng lợi 2-1 cho Juventus ở v&ograve;ng 33. Chiến thắng gi&uacute;p CLB th&agrave;nh Turin hơn nh&igrave; bảng Napoli 20 điểm, v&ocirc; địch sớm năm v&ograve;ng.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Ronaldo (số 7) sẽ không rời Juventus hè 2019. Ảnh: Reuters.\" src=\"https://i-thethao.vnecdn.net/2019/04/21/ronaldo-1555823369-1555823379-8659-1555823432.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ronaldo (số 7) sẽ kh&ocirc;ng rời Juventus h&egrave; 2019. Ảnh:&nbsp;<em>Reuters</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tương lai của Ronaldo tại Turin bị đặt dấu hỏi, sau khi Juventus bị Ajax loại ở tứ kết Champions League. Ch&acirc;u &Acirc;u l&agrave; mục ti&ecirc;u chinh phục của Juventus m&ugrave;a n&agrave;y, sau bảy năm li&ecirc;n tiếp đoạt Scudetto. Nhưng, sự hiện diện của Ronaldo chưa đủ để gi&uacute;p &quot;L&atilde;o B&agrave;&quot; ho&agrave;n th&agrave;nh ước nguyện. Danh hiệu Serie A của Juventus gần bằng Inter v&agrave; AC Milan cộng lại, nhưng họ thua hai CLB th&agrave;nh Milan ở danh hiệu Champions League.</p>\r\n\r\n<p>Ronaldo cũng coi trọng Champions League hơn danh hiệu quốc gia, nhưng đ&acirc;y l&agrave; lần đầu anh v&ocirc; địch Serie A. Si&ecirc;u sao người Bồ Đ&agrave;o Nha trở th&agrave;nh cầu thủ đầu ti&ecirc;n v&ocirc; địch Anh, T&acirc;y Ban Nha v&agrave; Italy. Juventus c&oacute; thể sẽ lột x&aacute;c trong h&egrave; 2019, để chinh phục Champions League sau 24 năm dang dở.</p>\r\n\r\n<p>Ronaldo cập bến Juventus h&egrave; 2018 với gi&aacute; 120 triệu đ&ocirc;la. Mục ti&ecirc;u của anh l&agrave; đi t&igrave;m thử th&aacute;ch mới.</p>', 'Siêu sao 34 tuổi sẽ gắn bó với \"Lão Bà\" thêm ít nhất một mùa giải để chinh phục Champions League.', 3, NULL, NULL),
(10, 0, '2019-04-21 23:11:53', '2019-04-21 23:11:53', 'Golfer Đài Loan vô địch RBC Heritage', '/photos/1/2000-1555910972-2965-1555910996_180x108.jpg', '<p>Cheng-tsung Pan lần đầu v&ocirc; địch một giải PGA Tour, khi đạt điểm -12 qua bốn v&ograve;ng tại RBC Heritage.</p>\r\n\r\n<p>Sau 32 năm, Đ&agrave;i Loan mới c&oacute; th&ecirc;m một golfer v&ocirc; địch PGA Tour. C.T. Pan tạo ra bất ngờ lớn khi vượt mặt golfer số một thế giới Dustin Johnson c&ugrave;ng những t&ecirc;n tuổi kh&aacute;c để gi&agrave;nh số tiền thưởng 1,242 triệu đ&ocirc;la cho nh&agrave; v&ocirc; địch.</p>\r\n\r\n<p>Năm birdie v&agrave; một bogey ở v&ograve;ng cuối l&agrave; đủ để Pan l&ecirc;n ng&ocirc;i với tổng điểm -12, c&aacute;ch đ&uacute;ng một gậy so với nh&igrave; bảng Matt Kuchar. Chiến thắng tại s&acirc;n Harbour Town khiến sự nghiệp của golfer Đ&agrave;i Loan sang trang. Anh được đảm bảo quyền dự PGA Tour đến năm 2021, gi&agrave;nh v&eacute; dự hai major PGA Championship 2019 v&agrave; Masters 2020. B&ecirc;n cạnh đ&oacute;, Pan cũng s&aacute;ng cửa lọt v&agrave;o đội h&igrave;nh tuyển Quốc tế dự Presidents Cup v&agrave;o cuối năm.</p>\r\n\r\n<p>&quot;Đ&acirc;y l&agrave; chiến thắng kh&oacute; tin&quot;, Pan chia sẻ ngay sau giải. &quot;Điện thoại của t&ocirc;i đổ chu&ocirc;ng li&ecirc;n tục trong 10 ph&uacute;t vừa qua. T&ocirc;i rất hạnh ph&uacute;c với chiến thắng đầu ti&ecirc;n tr&ecirc;n Tour&quot;.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"C.T. Pan là golfer thứ 14 lần đầu vô địch PGA Tour tại RBC Heritage. Ảnh: AP.\" src=\"https://i-thethao.vnecdn.net/2019/04/22/2000-jpeg-1555910946-4777-1555910996.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C.T. Pan l&agrave; golfer thứ 14 lần đầu v&ocirc; địch PGA Tour tại RBC Heritage. Ảnh:&nbsp;<em>AP.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Danh hiệu tại RBC Heritage cũng giải tỏa phần n&agrave;o cho C.T. Pan, người đ&aacute;nh kh&ocirc;ng tốt từ đầu năm với bốn giải kh&ocirc;ng qua cắt v&agrave; chỉ c&oacute; ba lần lọt top 25 ở c&aacute;c giải tham dự.</p>\r\n\r\n<p>Matt Kuchar đứng thứ hai với điểm -11, trong khi Patrick Cantlay, Scott Piercy v&agrave; Shane Lowry xếp T3 với một gậy nhiều hơn. Golfer dẫn đầu v&ograve;ng ba Dustin Johnson th&igrave; g&acirc;y thất vọng tr&agrave;n trề. Số một thế giới bogey ba lần v&agrave; bogey k&eacute;p hai lần chỉ trong năm hố, từ hố 11 đến 15, qua đ&oacute; đạt điểm +6 ở v&ograve;ng cuối v&agrave; rớt xuống T28 chung cuộc với tổng -4.</p>\r\n\r\n<p>Tuần n&agrave;y, c&aacute;c golfer sẽ c&oacute; mặt tại Louisiana, Mỹ để dự giải đấu đ&ocirc;i Zurich Classic of New Orleans. Đ&acirc;y l&agrave; sự kiện duy nhất trong m&ugrave;a giải diễn ra với thể thức gh&eacute;p cặp golfer qua bốn v&ograve;ng</p>', 'Cheng-tsung Pan lần đầu vô địch một giải PGA Tour, khi đạt điểm -12 qua bốn vòng tại RBC Heritage.', 3, NULL, NULL),
(11, 0, '2019-04-21 23:13:53', '2019-04-21 23:28:03', 'Mourinho không bất ngờ nếu Ajax hay Tottenham vô địch Champions League', '/photos/1/untitled-1555833729-5394-1555833820_180x108.png', '<p>HLV người Bồ Đ&agrave;o Nha tin hai đội b&oacute;ng bị xem l&agrave; cửa dưới c&oacute; cơ hội ngang ngửa với Liverpool v&agrave; Barca.</p>\r\n\r\n<p>&quot;T&ocirc;i thực sự vui cho Ajax v&agrave; Tottenham. Một khi bạn v&agrave;o tới tứ kết, phải c&oacute; l&yacute; do n&agrave;o đ&oacute; để điều đ&oacute; xảy ra. Ở v&ograve;ng bảng, đ&ocirc;i khi bạn gặp may, đ&ocirc;i khi đối thủ chơi kh&ocirc;ng tốt như kỳ vọng, đ&ocirc;i khi bạn gặp may khi bốc thăm v&ograve;ng 1/8. Nhưng khi v&agrave;o tới tứ kết, theo một c&aacute;ch đ&aacute;ng t&ocirc;n trọng, t&ocirc;i lu&ocirc;n tin rằng mỗi đội c&oacute; 12,5% cơ hội v&ocirc; địch&quot;, Jose Mourinho n&oacute;i.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Mourinho tin rằng Ajax và Tottenham đủ sức vô địch Champions League. Ảnh: Reuters.\" src=\"https://i-thethao.vnecdn.net/2019/04/21/Untitled-7836-1555833819.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Mourinho tin rằng Ajax v&agrave; Tottenham đủ sức v&ocirc; địch Champions League. Ảnh:&nbsp;<em>Reuters</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ajax li&ecirc;n tiếp tạo ra hai cơn địa chấn khi đ&aacute;nh bại Real Madrid ở v&ograve;ng 1/8 v&agrave; Juventus ở tứ kết. Tottenham cũng g&acirc;y sốc khi loại Man City của Pep Guardiola để g&oacute;p mặt tại b&aacute;n kết.</p>\r\n\r\n<p>&quot;Khi bạn v&agrave;o b&aacute;n kết, cơ hội thậm ch&iacute; lớn hơn, l&agrave; 25% cho mỗi đội&quot;, Mourinho n&oacute;i th&ecirc;m. &quot;T&ocirc;i sẽ kh&ocirc;ng bất ngờ nếu Ajax hay Tottenham v&ocirc; địch. Được rồi, c&oacute; lẽ t&ocirc;i sẽ bất ngờ một ch&uacute;t nhưng t&ocirc;i sẽ kh&ocirc;ng sốc v&igrave; hai đội đ&oacute; đ&atilde; v&agrave;o b&aacute;n kết v&agrave; một trong hai sẽ v&agrave;o chung kết. Trận chung kết l&agrave; trận đấu cuối c&ugrave;ng, chỉ một trận. N&oacute; chỉ k&eacute;o d&agrave;i 90 ph&uacute;t v&agrave; đ&oacute; l&agrave; trận đấu cả đời của đa số cầu thủ&quot;.</p>\r\n\r\n<p>&quot;T&ocirc;i nghĩ cả hai đội đều đang mơ về chức v&ocirc; địch v&agrave; họ c&oacute; l&yacute; do tốt để mơ về n&oacute;. Ajax l&agrave; chuy&ecirc;n gia loại c&aacute;c đội lớn. C&ograve;n Tottenham, ch&uacute;ng ta kh&ocirc;ng thể xem họ l&agrave; đội b&oacute;ng &#39;s&aacute;t &ocirc;ng lớn&#39; v&igrave; Man City kh&ocirc;ng c&oacute; truyền thống tại Champions League. Nhưng dẫu sao Man City vẫn l&agrave; đội b&oacute;ng h&agrave;ng đầu ở Anh, v&agrave; Tottenham vẫn c&oacute; thể đ&aacute;nh bại họ. Cho n&ecirc;n, t&ocirc;i nghĩ cơ hội v&ocirc; địch của Tottenham l&agrave; 50-50&quot;, &ocirc;ng n&oacute;i tiếp.</p>', 'HLV người Bồ Đào Nha tin hai đội bóng bị xem là cửa dưới có cơ hội ngang ngửa với Liverpool và Barca.', 3, NULL, NULL),
(12, 0, '2019-04-21 23:07:12', '2019-04-21 23:07:12', 'Fognini vô địch Monte Carlo 2019', '/photos/1/20001-1555870122-1555870136-7229-1555870146_180x108.png', '<p>Tay vợt Italy lần đầu v&ocirc; địch một giải ATP 1000, sau khi hạ Dusan Lajovic 6-3, 6-4 tại chung kết giải Monte Carlo.</p>\r\n\r\n<p>Một ng&agrave;y sau khi g&acirc;y sốc bằng việc loại Rafael Nadal ở b&aacute;n kết, Fabio Fognini c&oacute; được danh hiệu lớn nhất trong sự nghiệp từ trước đến nay. Tay vợt Italy nhẹ nh&agrave;ng vượt qua &quot;hiện tượng&quot; Dusan Lajovic trong trận ATP 1000 đầu ti&ecirc;n m&agrave; cả hai g&oacute;p mặt.</p>\r\n\r\n<p>Ở ba lần hạ Nadal trước đ&oacute;, Fognini đều thua nhanh ở v&ograve;ng đấu kế tiếp. Tay vợt Italy khiến người h&acirc;m mộ lo ngại điều tương tự sẽ lặp lại, khi đ&aacute;nh mất game giao b&oacute;ng thứ hai trong trận.</p>\r\n\r\n<p>Nhưng Lajovic cũng mới lần đầu dự chung kết ATP 1000 v&agrave; kh&ocirc;ng vững v&agrave;ng về t&acirc;m l&yacute;. Tay vợt Serbia c&oacute; hai game-point để dẫn 3-1 nhưng đều bỏ lỡ. Anh đ&aacute;nh hỏng qu&aacute; nhiều, để Fognini thắng liền bốn game v&agrave; dẫn ngược 5-2.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Lajovic mắc tới 36 lỗi tự đánh hỏng ở trận chung kết, nhiều hơn Fognini 13 lỗi. Ảnh: AP.\" src=\"https://i-thethao.vnecdn.net/2019/04/22/2000-jpeg-1555869978-2434-1555870145.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Lajovic mắc tới 36 lỗi tự đ&aacute;nh hỏng ở trận chung kết, nhiều hơn Fognini 13 lỗi. Ảnh:&nbsp;<em>AP</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Fognini c&agrave;ng chơi c&agrave;ng lấy lại sự b&igrave;nh tĩnh. Anh cứu th&agrave;nh c&ocirc;ng break-point ở game giao quyết định, trước khi thắng set đầu 6-3 nhờ điểm winner thứ 12.</p>\r\n\r\n<p>Lajovic đuối hơn trong c&aacute;c pha đ&ocirc;i c&ocirc;ng cuối s&acirc;n nhưng cũng kh&ocirc;ng dễ đầu h&agrave;ng. Tay vợt số 48 thế giới mất game giao b&oacute;ng đầu set hai, nhưng gỡ h&ograve;a ngay sau đ&oacute;. Chỉ khi Fognini thắng th&ecirc;m một game giao b&oacute;ng nữa v&agrave; vươn l&ecirc;n dẫn 3-2, thế trận mới tuột khỏi tầm tay Lajovic. Tay vợt Serbia g&aacute;c vợt chung cuộc với tỷ số 3-6, 4-6.</p>\r\n\r\n<p>&quot;Lần đầu v&agrave;o chung kết ATP 1000 l&agrave; trải nghiệm tuyệt vời với t&ocirc;i&quot;, Lajovic chia sẻ. &quot;Gi&oacute; tại Monte Carlo kh&aacute; to v&agrave; Fognini l&agrave; người gi&agrave;u kinh nghiệm hơn ở điều kiện thời tiết như h&ocirc;m nay. C&aacute;c c&uacute; quả v&agrave; khả năng di chuyển của anh ấy cũng rất tốt. T&ocirc;i c&oacute; cảm gi&aacute;c rằng m&igrave;nh vất vả hơn anh ấy trong việc gi&agrave;nh điểm. Đ&oacute; l&agrave; điểm mấu chốt trong thất bại n&agrave;y&quot;.</p>\r\n\r\n<p>Fognini l&agrave; hạt giống thấp nhất đăng quang tại Monte Carlo trong 20 năm qua. Anh gi&agrave;nh số tiền thưởng 958.000 đ&ocirc;la c&ugrave;ng 1000 điểm thưởng ATP &ndash; số điểm gi&uacute;p tay vợt Italy vươn l&ecirc;n thứ 12 thế giới v&agrave;o tuần n&agrave;y.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Fognini lên ngôi xứng đáng tại Monte Carlo. Ảnh: AP.\" src=\"https://i-thethao.vnecdn.net/2019/04/22/2000-1-jpeg-1555870095-5370-1555870146.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Fognini l&ecirc;n ng&ocirc;i xứng đ&aacute;ng tại Monte Carlo. Ảnh<em>:&nbsp;AP.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&quot;T&ocirc;i phải chuẩn bị kỹ c&agrave;ng cho trận đấu n&agrave;y v&igrave; HLV cũ của t&ocirc;i đang l&agrave;m việc c&ugrave;ng Lajovic&quot;, Fognini chia sẻ. &quot;T&ocirc;i đ&atilde; cố gắng kh&ocirc;ng để bị bắt b&agrave;i. Đ&acirc;y l&agrave; th&agrave;nh tựu to lớn sau một giải đấu kh&oacute; khăn. T&ocirc;i rất hạnh ph&uacute;c&quot;.</p>\r\n\r\n<p>Danh hiệu ATP 1000 đầu ti&ecirc;n sẽ mang đến sự tự tin cho Fognini trong phần c&ograve;n lại của m&ugrave;a đất nện. Tay vợt mới trở lại sau chấn thương từng hai lần su&yacute;t bị loại tại Monte Carlo năm nay. Anh bị Andrey Rubley dẫn 6-4, 4-1 ở v&ograve;ng một v&agrave; bị Borna Coric dẫn 6-1, 2-0 ở tứ kết. Fognini thắng ngược cả hai trận đấu đ&oacute;, rồi hạ &quot;Vua đất nện&quot; Nadal chỉ sau hai set v&agrave; cuối c&ugrave;ng c&oacute; danh hiệu lớn nhất sự nghiệp từ trước đến nay</p>', 'Tay vợt Italy lần đầu vô địch một giải ATP 1000, sau khi hạ Dusan Lajovic 6-3, 6-4 tại chung kết giải Monte Carlo.', 3, NULL, NULL),
(13, 0, '2019-04-21 23:08:43', '2019-04-21 23:08:43', 'Ronaldo cam kết ở lại Juventus', '/photos/1/ronaldo-1555823369-1555823379-8659-1555823432.png', '<p>Si&ecirc;u sao 34 tuổi sẽ gắn b&oacute; với &quot;L&atilde;o B&agrave;&quot; th&ecirc;m &iacute;t nhất một m&ugrave;a giải để chinh phục Champions League.</p>\r\n\r\n<p>&quot;Chắc chắn 1000 phần trăm l&agrave; t&ocirc;i sẽ ở lại Juventus m&ugrave;a tới&quot;, Cristiano Ronaldo n&oacute;i sau khi c&ugrave;ng Juventus v&ocirc; địch Serie A 2018-2019. Đường căng ngang của anh khiến hậu vệ Fiorentina phản lưới, ấn định thắng lợi 2-1 cho Juventus ở v&ograve;ng 33. Chiến thắng gi&uacute;p CLB th&agrave;nh Turin hơn nh&igrave; bảng Napoli 20 điểm, v&ocirc; địch sớm năm v&ograve;ng.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Ronaldo (số 7) sẽ không rời Juventus hè 2019. Ảnh: Reuters.\" src=\"https://i-thethao.vnecdn.net/2019/04/21/ronaldo-1555823369-1555823379-8659-1555823432.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ronaldo (số 7) sẽ kh&ocirc;ng rời Juventus h&egrave; 2019. Ảnh:&nbsp;<em>Reuters</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tương lai của Ronaldo tại Turin bị đặt dấu hỏi, sau khi Juventus bị Ajax loại ở tứ kết Champions League. Ch&acirc;u &Acirc;u l&agrave; mục ti&ecirc;u chinh phục của Juventus m&ugrave;a n&agrave;y, sau bảy năm li&ecirc;n tiếp đoạt Scudetto. Nhưng, sự hiện diện của Ronaldo chưa đủ để gi&uacute;p &quot;L&atilde;o B&agrave;&quot; ho&agrave;n th&agrave;nh ước nguyện. Danh hiệu Serie A của Juventus gần bằng Inter v&agrave; AC Milan cộng lại, nhưng họ thua hai CLB th&agrave;nh Milan ở danh hiệu Champions League.</p>\r\n\r\n<p>Ronaldo cũng coi trọng Champions League hơn danh hiệu quốc gia, nhưng đ&acirc;y l&agrave; lần đầu anh v&ocirc; địch Serie A. Si&ecirc;u sao người Bồ Đ&agrave;o Nha trở th&agrave;nh cầu thủ đầu ti&ecirc;n v&ocirc; địch Anh, T&acirc;y Ban Nha v&agrave; Italy. Juventus c&oacute; thể sẽ lột x&aacute;c trong h&egrave; 2019, để chinh phục Champions League sau 24 năm dang dở.</p>\r\n\r\n<p>Ronaldo cập bến Juventus h&egrave; 2018 với gi&aacute; 120 triệu đ&ocirc;la. Mục ti&ecirc;u của anh l&agrave; đi t&igrave;m thử th&aacute;ch mới.</p>', 'Siêu sao 34 tuổi sẽ gắn bó với \"Lão Bà\" thêm ít nhất một mùa giải để chinh phục Champions League.', 3, NULL, NULL),
(14, 0, '2019-04-21 23:11:53', '2019-04-21 23:11:53', 'Golfer Đài Loan vô địch RBC Heritage', '/photos/1/2000-1555910972-2965-1555910996_180x108.jpg', '<p>Cheng-tsung Pan lần đầu v&ocirc; địch một giải PGA Tour, khi đạt điểm -12 qua bốn v&ograve;ng tại RBC Heritage.</p>\r\n\r\n<p>Sau 32 năm, Đ&agrave;i Loan mới c&oacute; th&ecirc;m một golfer v&ocirc; địch PGA Tour. C.T. Pan tạo ra bất ngờ lớn khi vượt mặt golfer số một thế giới Dustin Johnson c&ugrave;ng những t&ecirc;n tuổi kh&aacute;c để gi&agrave;nh số tiền thưởng 1,242 triệu đ&ocirc;la cho nh&agrave; v&ocirc; địch.</p>\r\n\r\n<p>Năm birdie v&agrave; một bogey ở v&ograve;ng cuối l&agrave; đủ để Pan l&ecirc;n ng&ocirc;i với tổng điểm -12, c&aacute;ch đ&uacute;ng một gậy so với nh&igrave; bảng Matt Kuchar. Chiến thắng tại s&acirc;n Harbour Town khiến sự nghiệp của golfer Đ&agrave;i Loan sang trang. Anh được đảm bảo quyền dự PGA Tour đến năm 2021, gi&agrave;nh v&eacute; dự hai major PGA Championship 2019 v&agrave; Masters 2020. B&ecirc;n cạnh đ&oacute;, Pan cũng s&aacute;ng cửa lọt v&agrave;o đội h&igrave;nh tuyển Quốc tế dự Presidents Cup v&agrave;o cuối năm.</p>\r\n\r\n<p>&quot;Đ&acirc;y l&agrave; chiến thắng kh&oacute; tin&quot;, Pan chia sẻ ngay sau giải. &quot;Điện thoại của t&ocirc;i đổ chu&ocirc;ng li&ecirc;n tục trong 10 ph&uacute;t vừa qua. T&ocirc;i rất hạnh ph&uacute;c với chiến thắng đầu ti&ecirc;n tr&ecirc;n Tour&quot;.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"C.T. Pan là golfer thứ 14 lần đầu vô địch PGA Tour tại RBC Heritage. Ảnh: AP.\" src=\"https://i-thethao.vnecdn.net/2019/04/22/2000-jpeg-1555910946-4777-1555910996.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C.T. Pan l&agrave; golfer thứ 14 lần đầu v&ocirc; địch PGA Tour tại RBC Heritage. Ảnh:&nbsp;<em>AP.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Danh hiệu tại RBC Heritage cũng giải tỏa phần n&agrave;o cho C.T. Pan, người đ&aacute;nh kh&ocirc;ng tốt từ đầu năm với bốn giải kh&ocirc;ng qua cắt v&agrave; chỉ c&oacute; ba lần lọt top 25 ở c&aacute;c giải tham dự.</p>\r\n\r\n<p>Matt Kuchar đứng thứ hai với điểm -11, trong khi Patrick Cantlay, Scott Piercy v&agrave; Shane Lowry xếp T3 với một gậy nhiều hơn. Golfer dẫn đầu v&ograve;ng ba Dustin Johnson th&igrave; g&acirc;y thất vọng tr&agrave;n trề. Số một thế giới bogey ba lần v&agrave; bogey k&eacute;p hai lần chỉ trong năm hố, từ hố 11 đến 15, qua đ&oacute; đạt điểm +6 ở v&ograve;ng cuối v&agrave; rớt xuống T28 chung cuộc với tổng -4.</p>\r\n\r\n<p>Tuần n&agrave;y, c&aacute;c golfer sẽ c&oacute; mặt tại Louisiana, Mỹ để dự giải đấu đ&ocirc;i Zurich Classic of New Orleans. Đ&acirc;y l&agrave; sự kiện duy nhất trong m&ugrave;a giải diễn ra với thể thức gh&eacute;p cặp golfer qua bốn v&ograve;ng</p>', 'Cheng-tsung Pan lần đầu vô địch một giải PGA Tour, khi đạt điểm -12 qua bốn vòng tại RBC Heritage.', 3, NULL, NULL),
(15, 0, '2019-04-21 23:13:53', '2019-04-21 23:28:35', 'Mourinho không bất ngờ nếu Ajax hay Tottenham vô địch Champions League', '/photos/1/untitled-1555833729-5394-1555833820_180x108.png', '<p>HLV người Bồ Đ&agrave;o Nha tin hai đội b&oacute;ng bị xem l&agrave; cửa dưới c&oacute; cơ hội ngang ngửa với Liverpool v&agrave; Barca.</p>\r\n\r\n<p>&quot;T&ocirc;i thực sự vui cho Ajax v&agrave; Tottenham. Một khi bạn v&agrave;o tới tứ kết, phải c&oacute; l&yacute; do n&agrave;o đ&oacute; để điều đ&oacute; xảy ra. Ở v&ograve;ng bảng, đ&ocirc;i khi bạn gặp may, đ&ocirc;i khi đối thủ chơi kh&ocirc;ng tốt như kỳ vọng, đ&ocirc;i khi bạn gặp may khi bốc thăm v&ograve;ng 1/8. Nhưng khi v&agrave;o tới tứ kết, theo một c&aacute;ch đ&aacute;ng t&ocirc;n trọng, t&ocirc;i lu&ocirc;n tin rằng mỗi đội c&oacute; 12,5% cơ hội v&ocirc; địch&quot;, Jose Mourinho n&oacute;i.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Mourinho tin rằng Ajax và Tottenham đủ sức vô địch Champions League. Ảnh: Reuters.\" src=\"https://i-thethao.vnecdn.net/2019/04/21/Untitled-7836-1555833819.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Mourinho tin rằng Ajax v&agrave; Tottenham đủ sức v&ocirc; địch Champions League. Ảnh:&nbsp;<em>Reuters</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ajax li&ecirc;n tiếp tạo ra hai cơn địa chấn khi đ&aacute;nh bại Real Madrid ở v&ograve;ng 1/8 v&agrave; Juventus ở tứ kết. Tottenham cũng g&acirc;y sốc khi loại Man City của Pep Guardiola để g&oacute;p mặt tại b&aacute;n kết.</p>\r\n\r\n<p>&quot;Khi bạn v&agrave;o b&aacute;n kết, cơ hội thậm ch&iacute; lớn hơn, l&agrave; 25% cho mỗi đội&quot;, Mourinho n&oacute;i th&ecirc;m. &quot;T&ocirc;i sẽ kh&ocirc;ng bất ngờ nếu Ajax hay Tottenham v&ocirc; địch. Được rồi, c&oacute; lẽ t&ocirc;i sẽ bất ngờ một ch&uacute;t nhưng t&ocirc;i sẽ kh&ocirc;ng sốc v&igrave; hai đội đ&oacute; đ&atilde; v&agrave;o b&aacute;n kết v&agrave; một trong hai sẽ v&agrave;o chung kết. Trận chung kết l&agrave; trận đấu cuối c&ugrave;ng, chỉ một trận. N&oacute; chỉ k&eacute;o d&agrave;i 90 ph&uacute;t v&agrave; đ&oacute; l&agrave; trận đấu cả đời của đa số cầu thủ&quot;.</p>\r\n\r\n<p>&quot;T&ocirc;i nghĩ cả hai đội đều đang mơ về chức v&ocirc; địch v&agrave; họ c&oacute; l&yacute; do tốt để mơ về n&oacute;. Ajax l&agrave; chuy&ecirc;n gia loại c&aacute;c đội lớn. C&ograve;n Tottenham, ch&uacute;ng ta kh&ocirc;ng thể xem họ l&agrave; đội b&oacute;ng &#39;s&aacute;t &ocirc;ng lớn&#39; v&igrave; Man City kh&ocirc;ng c&oacute; truyền thống tại Champions League. Nhưng dẫu sao Man City vẫn l&agrave; đội b&oacute;ng h&agrave;ng đầu ở Anh, v&agrave; Tottenham vẫn c&oacute; thể đ&aacute;nh bại họ. Cho n&ecirc;n, t&ocirc;i nghĩ cơ hội v&ocirc; địch của Tottenham l&agrave; 50-50&quot;, &ocirc;ng n&oacute;i tiếp.</p>', 'HLV người Bồ Đào Nha tin hai đội bóng bị xem là cửa dưới có cơ hội ngang ngửa với Liverpool và Barca.', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_data`
--

CREATE TABLE `news_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_data`
--

INSERT INTO `news_data` (`id`, `name`, `parent_id`, `sort_order`, `created_at`, `updated_at`, `image`, `description`, `link`) VALUES
(1, 'Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận', 0, 0, '2019-05-09 22:33:24', '2019-05-09 22:33:24', 'http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg', 'Theo kết quả được công bố, hơn 60% người dân được lấy ý kiến đồng thuận với việc xây bãi xe ngầm trong công viên Cầu Giấy.', NULL),
(2, 'Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận', 0, 0, '2019-05-09 22:33:24', '2019-05-09 22:33:24', 'http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg', 'Theo kết quả được công bố, hơn 60% người dân được lấy ý kiến đồng thuận với việc xây bãi xe ngầm trong công viên Cầu Giấy.', NULL),
(3, 'Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận', 0, 0, '2019-05-09 22:33:24', '2019-05-09 22:33:24', 'http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg', 'Theo kết quả được công bố, hơn 60% người dân được lấy ý kiến đồng thuận với việc xây bãi xe ngầm trong công viên Cầu Giấy.', NULL),
(4, 'Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận', 0, 0, '2019-05-09 22:33:24', '2019-05-09 22:33:24', 'http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg', 'Theo kết quả được công bố, hơn 60% người dân được lấy ý kiến đồng thuận với việc xây bãi xe ngầm trong công viên Cầu Giấy.', NULL),
(5, 'Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận', 0, 0, '2019-05-09 22:33:24', '2019-05-09 22:33:24', 'http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg', 'Theo kết quả được công bố, hơn 60% người dân được lấy ý kiến đồng thuận với việc xây bãi xe ngầm trong công viên Cầu Giấy.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('quangtienvkt@gmail.com', '$2y$10$6qhwY0f0bB8tONoMotYJwu3h3kSHJUwFKG.hTIZlMPvJaG4FFV9wu', '2019-01-30 02:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'View list news', 'web', '2019-02-21 20:37:14', '2019-02-24 01:40:46'),
(2, 'Edit news', 'web', '2019-02-21 20:38:38', '2019-02-24 01:41:03'),
(3, 'Delete news', 'web', '2019-02-24 01:41:27', '2019-02-24 01:41:27'),
(4, 'View list Product', 'web', '2019-02-24 01:43:35', '2019-02-24 01:43:35'),
(5, 'Edit Product', 'web', '2019-02-24 01:43:47', '2019-02-24 01:43:54'),
(6, 'Delete news', 'web', '2019-02-24 01:44:05', '2019-02-24 01:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `quan_ly_hinh_anh`
--

CREATE TABLE `quan_ly_hinh_anh` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2019-02-21 20:31:34', '2019-02-23 17:40:53'),
(2, 'News', 'web', '2019-02-23 16:50:55', '2019-02-24 01:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `sort_order`, `created_at`, `updated_at`, `name`, `route_name`, `parent_id`) VALUES
(1, 1, '2019-03-31 23:16:28', '2019-04-07 04:49:39', 'Hiển thị một bài viết', 'about', 0),
(2, 2, '2019-03-31 23:17:13', '2019-04-07 04:49:53', 'Hiển thị danh sách sản phẩm', 'product', 0),
(3, 3, '2019-03-31 23:19:43', '2019-04-07 04:50:16', 'Hiển thị  danh Sách Tin Tức', 'news', 0),
(4, 4, '2019-03-31 23:18:18', '2019-04-07 04:50:02', 'Hiển thị trang liên hệ', 'contact', 0),
(6, 7, '2019-04-22 01:19:00', '2019-04-22 01:19:00', 'Hiển thị Trang chủ', 'home', 0),
(7, 5, '2019-04-29 03:08:48', '2019-04-29 03:08:48', 'Dang sách landing page', 'listLandingPage', 0),
(8, 6, '2019-04-29 03:09:15', '2019-04-29 03:09:15', 'Một trang landing page đơn', 'singleLandingPage', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(15) NOT NULL,
  `sort_order` int(11) DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_edit` int(11) DEFAULT '0',
  `type_show` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'BASIC, DRAG_DROP',
  `count_item_of_page` int(11) DEFAULT '30',
  `model_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `form_data_type` int(11) DEFAULT '1',
  `import` int(11) DEFAULT '0',
  `export` int(11) DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `sort_order`, `name`, `display_name`, `is_edit`, `type_show`, `count_item_of_page`, `model_name`, `parent_id`, `form_data_type`, `import`, `export`, `created_at`, `updated_at`) VALUES
(14, 2, 'news', 'Quản lí tin tức', 1, NULL, 30, NULL, 26, 1, 0, 0, '2019-03-19', '2019-04-01'),
(16, 3, 'category', 'QL danh mục', 1, '1', 30, NULL, 0, 2, 0, 0, '2019-03-30', '2019-05-01'),
(24, 3, 'route', 'route', 0, '1', 30, NULL, 26, 2, 0, 0, '2019-04-01', '2019-05-01'),
(26, 8, 'tables', 'Category', 0, '1', 30, 'Tables', 0, 1, 0, 0, '2019-02-21', '2019-02-21'),
(27, 6, 'configweb', 'Cấu hình website', 1, '5', 30, NULL, 0, 1, 0, 0, '2019-04-06', '2019-05-01'),
(35, 4, 'users', 'Quản lý User', 0, NULL, 30, NULL, 26, 2, 0, 0, '2019-05-01', '2019-05-01'),
(36, 1, 'footer', 'Nội dung phần chân website', 1, '1', 30, NULL, 26, 2, 0, 0, '2019-05-01', '2019-05-01'),
(37, 2, 'tuyen_sinh_lop10', 'Tuyển sinh lớp 10', 1, '0', 30, NULL, 0, 1, 1, 1, '2019-05-04', '2019-05-06'),
(38, 1, 'diem_thi_thpt', 'Điểm thi THPT', 1, '0', 30, NULL, 0, 2, 1, 1, '2019-05-10', '2019-05-10'),
(39, 7, 'gender', 'Giới tính', 0, '1', 30, NULL, 0, 2, 0, 0, '2019-05-10', '2019-05-10'),
(40, 4, 'news_data', 'Tin tức trang chủ', 1, '1', 30, NULL, 0, 2, 0, 0, '2019-05-10', '2019-05-10'),
(41, 1, 'banner', 'Hình ảnh banner', 1, '5', 30, NULL, 42, 2, 0, 0, '2019-05-10', '2019-05-10'),
(42, 5, 'quan_ly_hinh_anh', 'Hình ảnh', 1, NULL, 30, NULL, 0, 1, 0, 0, '2019-05-10', '2019-05-10'),
(43, 2, 'ad_top', 'Quảng cáo TOP', 1, '5', 30, NULL, 42, 1, 0, 0, '2019-05-10', '2019-05-10'),
(44, 3, 'ad_right', 'Quảng cáo Right', 1, '1', 30, NULL, 42, 1, 0, 0, '2019-05-10', '2019-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `table_column`
--

CREATE TABLE `table_column` (
  `id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value_default` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_null` tinyint(2) DEFAULT '1',
  `max_length` int(11) DEFAULT NULL,
  `edit` tinyint(1) DEFAULT '1',
  `type_show` int(11) DEFAULT NULL,
  `add2search` int(11) DEFAULT NULL,
  `search_type` int(11) DEFAULT '1',
  `type_edit` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `show_in_list` tinyint(4) DEFAULT '0',
  `require` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT '0',
  `parent_id` int(11) DEFAULT '0',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `select_table_id` int(11) DEFAULT NULL,
  `conditions` text COLLATE utf8_unicode_ci,
  `fast_edit` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `table_column`
--

INSERT INTO `table_column` (`id`, `table_id`, `display_name`, `name`, `type`, `value_default`, `is_null`, `max_length`, `edit`, `type_show`, `add2search`, `search_type`, `type_edit`, `show_in_list`, `require`, `sort_order`, `parent_id`, `created_at`, `updated_at`, `select_table_id`, `conditions`, `fast_edit`) VALUES
(4, 9, 'name', 'name', 'VARCHAR', '100', 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 0, 0, '2019-02-11', '2019-02-18', 0, NULL, 0),
(7, 9, 'Image', 'image', 'INT', NULL, 1, NULL, 1, NULL, 1, 1, 'image_laravel', 1, 0, 0, 0, '2019-02-21', '2019-02-21', 0, NULL, 0),
(8, 13, 'Name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 0, 0, 0, '2019-02-21', '2019-02-21', 0, NULL, 0),
(9, 13, 'parent_id', 'parent_id', 'INT', NULL, 1, NULL, 1, NULL, 0, 1, 'select', 1, 0, 0, 0, '2019-02-21', '2019-02-21', 13, NULL, 0),
(14, 14, 'title', 'title', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 1, 0, '2019-03-19', '2019-03-19', 0, NULL, 0),
(15, 14, 'image', 'image', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 1, 3, 0, '2019-03-19', '2019-03-19', 0, NULL, 0),
(16, 14, 'content', 'content', 'LONGTEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'summoner', 0, 1, 4, 0, '2019-03-19', '2019-03-19', 0, NULL, 0),
(18, 14, 'summary', 'summary', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 0, 1, 5, 0, '2019-03-19', '2019-03-27', 0, NULL, 0),
(20, 14, 'sort_order', 'sort_order', 'INT', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 1, 8, 0, '2019-03-20', '2019-05-04', 0, NULL, 0),
(21, 15, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 0, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(22, 15, 'parent_id', 'parent_id', 'INT', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 0, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(24, 15, 'sort_order', 'sort_order', 'INT', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 0, 0, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(25, 16, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 0, 1, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(26, 16, 'parent_id', 'parent_id', 'INT', NULL, 1, NULL, 1, NULL, 1, 1, 'select', 1, 0, 4, 0, '2019-03-30', '2019-04-29', 16, NULL, 0),
(27, 17, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 1, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(28, 17, 'describe', 'describe', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 0, 0, 3, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(29, 17, 'image', 'image', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 0, 2, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(30, 17, 'summary', 'summary', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 0, 0, 4, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(31, 17, 'content', 'content', 'LONGTEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'summoner', 0, 0, 5, 0, '2019-03-30', '2019-03-30', 0, NULL, 0),
(32, 18, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 0, 1, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(33, 18, 'image', 'image', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'image_laravel', 1, 0, 2, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(34, 19, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 1, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(36, 20, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 0, 1, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(37, 20, 'image', 'image', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 1, 0, 3, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(38, 20, 'summary', 'summary', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'summoner', 0, 0, 4, 0, '2019-03-31', '2019-04-07', 0, NULL, 0),
(40, 21, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 2, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(41, 21, 'image', 'image', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 0, 3, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(42, 21, 'summary', 'summary', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 0, 1, 4, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(44, 21, 'content', 'content', 'LONGTEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'summoner', 0, 0, 5, 0, '2019-03-31', '2019-03-31', 0, NULL, 0),
(45, 22, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 1, 0, '2019-04-01', '2019-04-01', 0, NULL, 0),
(46, 22, 'image', 'image', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 1, 2, 0, '2019-04-01', '2019-04-01', 0, NULL, 0),
(47, 23, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 0, 1, 0, '2019-04-01', '2019-04-01', 0, NULL, 0),
(48, 23, 'image', 'image', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'image_laravel', 1, 0, 2, 0, '2019-04-01', '2019-04-01', 0, NULL, 0),
(49, 16, 'Chọn kiểu hiển thị', 'route_id', 'INT', NULL, 1, NULL, 1, NULL, 0, 1, 'select', 0, 0, 3, 0, '2019-04-01', '2019-05-09', 24, NULL, 0),
(50, 24, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 0, 0, '2019-04-01', '2019-04-01', 0, NULL, 0),
(51, 24, 'route_name', 'route_name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 0, 0, '2019-04-01', '2019-04-01', 0, NULL, 0),
(52, 25, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 0, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(53, 25, 'summary', 'summary', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 1, 0, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(54, 25, 'content', 'content', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'summoner', 0, 1, 0, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(55, 25, 'image', 'image', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 1, 0, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(58, 20, 'Link xem thêm', 'link', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 0, 0, 2, 0, '2019-04-06', '2019-04-08', 0, NULL, 0),
(59, 21, 'link', 'link', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 0, 1, 1, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(60, 27, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 1, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(61, 27, 'address', 'address', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 1, 1, 3, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(62, 27, 'email', 'email', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 4, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(63, 27, 'logo', 'logo', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 1, 5, 0, '2019-04-06', '2019-04-06', 0, NULL, 0),
(67, 27, '[SEO] Tiêu đề', 'seo_title', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 1, 0, 6, 0, '2019-04-06', '2019-05-10', 0, NULL, 0),
(68, 27, '[SEO] Mô tả', 'seo_description', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 0, 0, 7, 0, '2019-04-06', '2019-05-10', 0, NULL, 0),
(69, 27, '[SEO] Từ khóa', 'seo_keyword', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 0, 1, 8, 0, '2019-04-06', '2019-05-10', 0, NULL, 0),
(70, 27, 'phone', 'phone', 'INT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 2, 0, '2019-04-06', '2019-04-07', 0, NULL, 0),
(81, 14, 'chọn danh mục', 'category_id', 'INT', NULL, 1, NULL, 1, NULL, 0, 1, 'select', 0, 0, 2, 0, '2019-04-07', '2019-05-04', 16, NULL, 0),
(82, 29, 'name', 'name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 1, 0, '2019-04-08', '2019-04-08', 0, NULL, 0),
(83, 29, 'pdf', 'pdf', 'TEXT', NULL, 1, 255, 1, NULL, 0, 1, 'pdf', 0, 0, 3, 0, '2019-04-08', '2019-04-08', 0, NULL, 0),
(84, 29, 'image', 'image', 'TEXT', NULL, 1, 255, 1, NULL, 0, 1, 'image_laravel', 0, 0, 4, 0, '2019-04-08', '2019-04-08', 0, NULL, 0),
(85, 29, 'summary', 'summary', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'summoner', 0, 0, 5, 0, '2019-04-08', '2019-04-08', 0, NULL, 0),
(86, 20, 'video', 'video', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'video', 0, 0, 0, 0, '2019-04-08', '2019-04-08', 0, NULL, 0),
(87, 29, 'Chọn danh mục', 'category_id', 'INT', NULL, 1, NULL, 1, NULL, 0, 1, 'select', 0, 0, 2, 0, '2019-04-08', '2019-04-08', 16, NULL, 0),
(88, 19, 'parent_id', 'parent_id', 'INT', NULL, 1, NULL, 0, NULL, 1, 1, 'select', 0, 0, 0, 0, '2019-04-11', '2019-04-11', 19, NULL, 0),
(89, 31, 'name', 'name', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 1, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(90, 31, 'parent_id', 'parent_id', 'INT', NULL, 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 5, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(91, 31, 'input_type', 'input_type', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'input', 0, 0, 3, 0, '2019-04-15', '2019-04-28', 0, NULL, 0),
(92, 31, 'block_type_id', 'block_type_id', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'select', 0, 0, 4, 0, '2019-04-15', '2019-04-15', 32, NULL, 0),
(93, 32, 'name', 'name', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 1, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(94, 32, 'parent_id', 'parent_id', 'INT', NULL, 1, 255, 0, NULL, 0, 1, 'number', 0, 0, 3, 0, '2019-04-15', '2019-04-29', 0, NULL, 0),
(95, 32, 'image', 'image', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 0, 2, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(96, 33, 'name', 'name', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 1, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(97, 33, 'parent_id', 'parent_id', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 0, 0, 5, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(98, 33, 'landing_page_id', 'landing_page_id', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'select', 0, 0, 2, 0, '2019-04-15', '2019-04-28', 34, NULL, 0),
(100, 33, 'data', 'data', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 3, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(101, 34, 'name', 'name', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 0, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(102, 34, 'parent_id', 'parent_id', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 0, 0, 0, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(103, 34, 'image', 'image', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 0, 0, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(104, 34, 'category_id', 'category_id', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'select', 0, 0, 0, 0, '2019-04-15', '2019-04-15', 16, NULL, 0),
(105, 34, 'blocks', 'blocks', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'block', 0, 0, 0, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(106, 35, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 1, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(107, 35, 'Mật khẩu (Bỏ trống nếu bạn không muốn thay đổi))', 'password', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'encryption', 0, 0, 4, 0, '2019-04-15', '2019-05-01', 0, NULL, 0),
(108, 35, 'name', 'name', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 0, 0, 2, 0, '2019-04-15', '2019-04-15', 0, NULL, 0),
(109, 35, 'remember_token', 'remember_token', 'VARCHAR', NULL, 1, 255, 0, NULL, 0, 1, 'text', 0, 0, 7, 0, '2019-04-15', '2019-05-01', 0, NULL, 0),
(110, 35, 'Tên đăng nhập', 'username', 'VARCHAR', '', 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 3, 0, '2019-04-21', '2019-05-01', 0, NULL, 0),
(111, 35, 'Email', 'email', 'VARCHAR', '', 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 5, 0, '2019-04-21', '2019-04-21', 0, NULL, 0),
(112, 35, 'user_type', 'user_type', 'VARCHAR', '0', 1, 255, 0, NULL, 0, 1, 'text', 0, 0, 6, 0, '2019-04-21', '2019-05-01', 0, NULL, 0),
(122, 33, 'block_id', 'block_id', 'INT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 4, 0, '2019-04-28', '2019-04-28', 0, NULL, 0),
(124, 31, 'input_name', 'input_name', 'VARCHAR', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 2, 0, '2019-04-28', '2019-04-28', 0, NULL, 0),
(125, 16, 'Thứ tự sắp sếp', 'sort_order', 'INT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 7, 0, '2019-04-29', '2019-05-09', 0, NULL, 0),
(126, 24, 'parent_id', 'parent_id', 'INT', NULL, 1, NULL, 0, NULL, 0, 1, 'select', 0, 0, 0, 0, '2019-04-29', '2019-04-29', 24, NULL, 0),
(127, 24, 'sort_order', 'sort_order', 'INT', NULL, 1, NULL, 0, NULL, 1, 1, 'number', 1, 0, 0, 0, '2019-04-29', '2019-04-29', 0, NULL, 0),
(132, 36, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 1, 0, '2019-05-01', '2019-05-01', 0, NULL, 0),
(133, 36, 'Tiêu đề', 'name', 'VARCHAR', '', 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 2, 0, '2019-05-01', '2019-05-01', 0, NULL, 0),
(134, 36, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 4, 0, '2019-05-01', '2019-05-01', 0, NULL, 0),
(135, 36, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 5, 0, '2019-05-01', '2019-05-01', 0, NULL, 0),
(136, 36, 'Liên kết (VD: http://abc.com/...)', 'link', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 3, 0, '2019-05-01', '2019-05-01', 0, NULL, 0),
(137, 37, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 1, 0, '2019-05-04', '2019-05-04', 0, NULL, 0),
(138, 37, 'Tên', 'ten', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 4, 0, '2019-05-04', '2019-05-05', 0, NULL, 0),
(139, 37, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 11, 0, '2019-05-04', '2019-05-04', 0, NULL, 0),
(140, 37, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 12, 0, '2019-05-04', '2019-05-04', 0, NULL, 0),
(141, 16, '[SEO] Từ khóa', 'seo_keyword', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'number', 0, 0, 5, 0, '2019-05-04', '2019-05-04', 0, NULL, 0),
(142, 16, '[SEO] Mô tả', 'seo_description', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 6, 0, '2019-05-04', '2019-05-04', 0, NULL, 0),
(145, 14, '[SEO] Từ khóa', 'seo_keyword', 'TEXT', NULL, 1, NULL, 1, NULL, 1, 1, 'textarea', 1, 0, 6, 0, '2019-05-04', '2019-05-04', 0, NULL, 0),
(146, 14, '[SEO] Mô tả', 'seo_description', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 0, 0, 7, 0, '2019-05-04', '2019-05-04', 0, NULL, 0),
(147, 37, 'SBD', 'sbd', 'VARCHAR', '0', 1, NULL, 1, NULL, 1, 1, 'number', 1, 1, 2, 0, '2019-05-04', '2019-05-05', 0, NULL, 0),
(148, 37, 'Họ', 'ho', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 0, 3, 0, '2019-05-04', '2019-05-05', 0, NULL, 0),
(150, 37, 'Điểm1', 'diem1', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 6, 0, '2019-05-04', '2019-05-06', 0, NULL, 0),
(152, 37, 'NgàySinh', 'ngaysinh', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 1, 5, 0, '2019-05-06', '2019-05-06', 0, NULL, 0),
(153, 37, 'Điểm2', 'diem2', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 7, 0, '2019-05-06', '2019-05-06', 0, NULL, 0),
(154, 37, 'Điểm3', 'diem3', 'VARCHAR', NULL, 1, NULL, 1, NULL, 1, 1, 'text', 1, 1, 8, 0, '2019-05-06', '2019-05-06', 0, NULL, 0),
(155, 37, 'Điểm4', 'diem4', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 1, 9, 0, '2019-05-06', '2019-05-06', 0, NULL, 0),
(156, 16, 'Liên kết', 'link', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 1, 0, 2, 0, '2019-05-09', '2019-05-09', 0, NULL, 1),
(157, 38, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 1, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(158, 38, 'Họ tên', 'ho_ten', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 2, 0, '2019-05-10', '2019-05-10', 0, NULL, 1),
(159, 38, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 3, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(160, 38, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 18, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(161, 38, 'SốBáoDanh', 'sobaodanh', 'VARCHAR', NULL, 1, 255, 1, NULL, 1, 1, 'text', 1, 0, 4, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(162, 38, 'Điểm thi', 'diem_thi', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 1, 0, 5, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(163, 38, 'Giới tính', 'gioi_tinh', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 6, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(164, 38, 'CMND', 'cmnd', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 7, 0, '2019-05-10', '2019-05-10', 0, NULL, 1),
(165, 39, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 0, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(166, 39, 'Tiêu đề', 'name', 'VARCHAR', NULL, 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 0, 0, '2019-05-10', '2019-05-10', 0, NULL, 1),
(167, 39, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 0, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(168, 39, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 0, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(169, 38, 'Toán', 'toan', 'VARCHAR', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 8, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(170, 38, 'Ngữ văn', 'ngu_van', 'VARCHAR', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 9, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(171, 38, 'Lịch sử', 'lich_su', 'VARCHAR', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 14, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(172, 38, 'Địa lí', 'dia_ly', 'INT', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 15, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(173, 38, 'GDCD', 'gdcd', 'VARCHAR', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 16, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(174, 38, 'KHXH', 'khxh', 'INT', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 17, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(175, 38, 'Tiếng Anh', 'tieng_anh', 'VARCHAR', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 10, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(176, 38, 'Vật Lý', 'vat_ly', 'VARCHAR', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 11, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(177, 38, 'Hóa học', 'hoa_hoc', 'VARCHAR', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 12, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(178, 38, 'Sinh học', 'sinh_hoc', 'VARCHAR', '0', 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 13, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(179, 40, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 1, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(180, 40, 'Tiêu đề', 'name', 'VARCHAR', '', 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 2, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(181, 40, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 6, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(182, 40, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 7, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(183, 40, 'Hình ảnh', 'image', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 0, 3, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(184, 40, 'Mô tả ngắn', 'description', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'textarea', 0, 0, 4, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(185, 41, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 1, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(186, 41, 'Tiêu đề', 'name', 'VARCHAR', '', 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 2, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(187, 41, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 5, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(188, 41, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 6, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(189, 41, 'Liên kết', 'link', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 4, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(190, 41, 'Hình ảnh', 'image', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 0, 3, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(191, 42, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 0, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(192, 42, 'Tiêu đề', 'name', 'VARCHAR', '', 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 0, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(193, 42, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 0, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(194, 42, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 0, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(195, 43, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 1, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(196, 43, 'Tiêu đề', 'name', 'VARCHAR', '', 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 2, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(197, 43, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 5, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(198, 43, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 6, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(199, 43, 'Hình ảnh', 'image', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 0, 3, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(200, 43, 'Liên kết', 'link', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 4, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(201, 44, 'ID', 'id', 'INT', '', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 1, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(202, 44, 'Tiêu đề', 'name', 'VARCHAR', '', 1, 255, 1, NULL, 0, 1, 'text', 1, 0, 2, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(203, 44, 'Danh mục cha', 'parent_id', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 5, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(204, 44, 'Thứ tự sắp sếp', 'sort_order', 'INT', '0', 1, NULL, 0, NULL, 0, 1, 'text', 0, 0, 6, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(205, 44, 'Hình ảnh', 'image', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'image_laravel', 0, 0, 3, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(206, 44, 'Liên kết', 'link', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 4, 0, '2019-05-10', '2019-05-10', 0, NULL, 0),
(208, 40, 'Liên kết', 'link', 'TEXT', NULL, 1, NULL, 1, NULL, 0, 1, 'text', 0, 0, 5, 0, '2019-05-10', '2019-05-10', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tuyen_sinh_lop10`
--

CREATE TABLE `tuyen_sinh_lop10` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sbd` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `ho` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diem1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diem2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diem3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diem4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `user_type`) VALUES
(1, 'tienlq', 'quangtienvkt@gmail.com', '$2y$10$qDSM1xhz.Tk7dgDP1vvIpO7oDFWK7tyqndVivchYpBEHoK62YyvCu', 'P3fj7Dfn1D1aoHiHeMTJxmVUKAUMOrgdnwlMqMRC13YtNwvEWhbJWtMMRlOR', '2019-01-30 02:49:15', '2019-01-30 02:49:15', 'tienlq', ''),
(5, 'admin', 'quangtienvkt@gmail.com', '$2y$10$xS.w4lODyZETLIuENs1BXuRn3RnUTu6KdZ7fUTsP572VHJiZn3ika', 'fTA0nsXMH1dnsCzNsziuIaVQ1fibShjxDyLHfusORz7STwWAdW40FHiJcPHI', '2019-01-30 02:49:15', '2019-04-30 18:05:58', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_right`
--
ALTER TABLE `ad_right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_top`
--
ALTER TABLE `ad_top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configweb`
--
ALTER TABLE `configweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diem_thi_thpt`
--
ALTER TABLE `diem_thi_thpt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_data`
--
ALTER TABLE `news_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quan_ly_hinh_anh`
--
ALTER TABLE `quan_ly_hinh_anh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_column`
--
ALTER TABLE `table_column`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuyen_sinh_lop10`
--
ALTER TABLE `tuyen_sinh_lop10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ad_right`
--
ALTER TABLE `ad_right`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ad_top`
--
ALTER TABLE `ad_top`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `configweb`
--
ALTER TABLE `configweb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diem_thi_thpt`
--
ALTER TABLE `diem_thi_thpt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156682;
--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `news_data`
--
ALTER TABLE `news_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `quan_ly_hinh_anh`
--
ALTER TABLE `quan_ly_hinh_anh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `table_column`
--
ALTER TABLE `table_column`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT for table `tuyen_sinh_lop10`
--
ALTER TABLE `tuyen_sinh_lop10`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40012;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2015 at 07:35 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `view_count` bigint(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `view_count`, `created`, `updated_at`) VALUES
(1, 'Mua bán nhà, đất', 16, '2015-05-04 15:23:45', '2015-05-13 08:23:28'),
(2, 'Thuê, cho thuê nhà', 0, '2015-05-04 15:23:45', '2015-05-04 15:23:45'),
(3, 'Ô tô, xe máy', 1, '2015-05-04 15:24:13', '2015-05-13 08:05:56'),
(4, 'Thời trang', 0, '2015-05-04 15:24:13', '2015-05-04 15:24:13'),
(5, 'Nhà vườn', 0, '2015-05-04 15:25:14', '2015-05-04 15:25:14'),
(6, 'Điện máy', 0, '2015-05-04 15:25:14', '2015-05-04 15:25:14'),
(7, 'Điện thoại, chợ sim', 0, '2015-05-04 15:25:41', '2015-05-04 15:25:41'),
(8, 'Việc làm', 0, '2015-05-04 15:25:56', '2015-05-04 15:25:56'),
(9, 'Dịch vụ', 0, '2015-05-04 15:25:56', '2015-05-04 15:25:56'),
(10, 'Du lịch', 0, '2015-05-04 20:43:53', '2015-05-04 20:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `category_lv2`
--

CREATE TABLE IF NOT EXISTS `category_lv2` (
  `parent_id` int(11) NOT NULL,
`id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_lv2`
--

INSERT INTO `category_lv2` (`parent_id`, `id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nhà trong ngõ', '2015-05-04 00:00:00', '2015-05-04 00:00:00'),
(1, 2, 'Căn hộ, chung cư', '2015-05-04 00:00:00', '2015-05-04 00:00:00'),
(1, 3, 'Nhà mặt phố', '2015-05-04 17:33:59', '2015-05-04 17:33:59'),
(1, 4, 'Nhà tập thể', '2015-05-04 17:33:59', '2015-05-04 17:33:59'),
(1, 5, 'Biệt thự', '2015-05-04 17:33:59', '2015-05-04 17:33:59'),
(2, 6, 'Nhà riêng/ Nguyên căn', '2015-05-04 20:36:10', '2015-05-04 20:36:10'),
(2, 7, 'Nhà trọ/ Phòng trọ', '2015-05-04 20:36:10', '2015-05-04 20:36:10'),
(3, 8, 'Xe mới', '2015-05-04 20:36:10', '2015-05-04 20:36:10'),
(3, 9, 'Xe cũ', '2015-05-04 20:36:10', '2015-05-04 20:36:10'),
(4, 10, 'Thời trang nam', '2015-05-04 20:36:10', '2015-05-04 20:36:10'),
(4, 11, 'Thời trang nữ', '2015-05-04 20:37:12', '2015-05-04 20:37:12'),
(5, 12, 'Đồ nội thất', '2015-05-04 20:37:12', '2015-05-04 20:37:12'),
(5, 13, 'Vườn/ Đồ ngoại thất', '2015-05-04 20:37:43', '2015-05-04 20:37:43'),
(6, 14, 'Điện tử, kĩ thuật số', '2015-05-04 20:38:35', '2015-05-04 20:38:35'),
(6, 15, 'Điện lạnh, gia dụng', '2015-05-04 20:38:35', '2015-05-04 20:38:35'),
(6, 16, 'Máy tính, Laptop', '2015-05-04 20:39:08', '2015-05-04 20:39:08'),
(7, 17, 'Điện thoại/ Máy tính bảng', '2015-05-04 20:39:08', '2015-05-04 20:39:08'),
(7, 18, 'Sim', '2015-05-04 20:39:43', '2015-05-04 20:39:43'),
(8, 19, 'Lao động phổ thông', '2015-05-04 20:39:43', '2015-05-04 20:39:43'),
(8, 20, 'Lao động trí óc', '2015-05-04 20:43:12', '2015-05-04 20:43:12'),
(9, 21, 'Dịch vụ gia đình', '2015-05-04 20:43:12', '2015-05-04 20:43:12'),
(9, 22, 'Dịch vụ văn phòng', '2015-05-04 20:43:12', '2015-05-04 20:43:12'),
(9, 23, 'Dịch vụ sửa chữa', '2015-05-04 20:43:12', '2015-05-04 20:43:12'),
(10, 24, 'Tour du lịch', '2015-05-04 20:44:49', '2015-05-04 20:44:49'),
(10, 25, 'Vé máy bay, tàu, xe', '2015-05-04 20:44:49', '2015-05-04 20:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`id` int(11) NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `path`, `created_at`, `updated_at`) VALUES
(1, 'assets/img/postImg/1.jpg', '2015-05-05 10:33:19', '2015-05-05 10:33:19'),
(2, 'assets/img/postImg/2.jpg', '2015-05-05 14:25:28', '2015-05-05 14:25:28'),
(3, 'assets/img/postImg/3.jpg', '2015-05-05 14:26:42', '2015-05-05 14:26:42'),
(4, 'assets/img/postImg/4.png', '2015-05-05 14:29:19', '2015-05-05 14:29:19'),
(5, 'assets/img/postImg/5.png', '2015-05-05 14:46:06', '2015-05-05 14:46:06'),
(6, 'assets/img/postImg/6.png', '2015-05-05 14:47:14', '2015-05-05 14:47:14'),
(7, 'assets/img/postImg/7.jpg', '2015-05-11 03:15:30', '2015-05-11 03:15:30'),
(8, 'assets/img/postImg/8.jpg', '2015-05-11 03:18:00', '2015-05-11 03:18:00'),
(9, 'assets/img/postImg/9.jpg', '2015-05-11 03:19:30', '2015-05-11 03:19:30'),
(10, 'assets/img/postImg/10.jpg', '2015-05-12 13:42:03', '2015-05-12 13:42:03'),
(11, 'assets/img/postImg/11.jpg', '2015-05-12 13:57:00', '2015-05-12 13:57:00'),
(12, 'assets/img/postImg/12.jpg', '2015-05-12 13:59:25', '2015-05-12 13:59:25'),
(13, 'assets/img/postImg/13.jpg', '2015-05-12 13:59:48', '2015-05-12 13:59:48'),
(14, 'assets/img/postImg/14.jpg', '2015-05-12 14:00:30', '2015-05-12 14:00:30'),
(15, 'assets/img/postImg/15.jpg', '2015-05-12 14:09:35', '2015-05-12 14:09:35'),
(16, 'assets/img/postImg/16.jpg', '2015-05-12 14:11:03', '2015-05-12 14:11:03'),
(17, 'assets/img/postImg/17.jpg', '2015-05-12 14:15:55', '2015-05-12 14:15:55'),
(18, 'assets/img/postImg/18.jpg', '2015-05-12 14:17:46', '2015-05-12 14:17:46'),
(19, 'assets/img/postImg/19.jpg', '2015-05-12 14:18:59', '2015-05-12 14:18:59'),
(20, 'assets/img/postImg/20.jpg', '2015-05-12 14:19:41', '2015-05-12 14:19:41'),
(21, 'assets/img/postImg/21.jpg', '2015-05-12 14:20:45', '2015-05-12 14:20:45'),
(22, 'assets/img/postImg/22.jpg', '2015-05-12 14:20:48', '2015-05-12 14:20:48'),
(23, 'assets/img/postImg/23.jpg', '2015-05-13 02:15:58', '2015-05-13 02:15:58'),
(24, 'assets/img/postImg/24.jpg', '2015-05-13 02:16:34', '2015-05-13 02:16:34'),
(25, 'assets/img/postImg/25.jpg', '2015-05-13 02:16:57', '2015-05-13 02:16:57'),
(26, 'assets/img/postImg/26.jpg', '2015-05-13 02:24:48', '2015-05-13 02:24:48'),
(27, 'assets/img/postImg/27.jpg', '2015-05-13 02:25:02', '2015-05-13 02:25:02'),
(28, 'assets/img/postImg/28.jpg', '2015-05-13 02:25:26', '2015-05-13 02:25:26'),
(29, 'assets/img/postImg/29.jpg', '2015-05-13 02:25:36', '2015-05-13 02:25:36'),
(30, 'assets/img/postImg/30.jpg', '2015-05-13 02:25:53', '2015-05-13 02:25:53'),
(31, 'assets/img/postImg/31.jpg', '2015-05-13 06:43:27', '2015-05-13 06:43:27'),
(32, 'assets/img/postImg/32.jpg', '2015-05-13 06:47:03', '2015-05-13 06:47:03'),
(33, 'assets/img/postImg/33.jpg', '2015-05-13 06:48:18', '2015-05-13 06:48:18'),
(34, 'assets/img/postImg/34.jpg', '2015-05-13 06:49:49', '2015-05-13 06:49:49'),
(35, 'assets/img/postImg/35.jpg', '2015-05-13 06:50:01', '2015-05-13 06:50:01'),
(36, 'assets/img/postImg/36.jpg', '2015-05-13 07:24:17', '2015-05-13 07:24:17'),
(37, 'assets/img/postImg/37.jpg', '2015-05-13 07:38:43', '2015-05-13 07:38:43'),
(38, 'assets/img/postImg/38.jpg', '2015-05-13 08:04:05', '2015-05-13 08:04:05'),
(39, 'assets/img/postImg/39.jpg', '2015-05-13 08:04:48', '2015-05-13 08:04:48'),
(40, 'assets/img/postImg/40.jpg', '2015-05-13 08:29:05', '2015-05-13 08:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_id2` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `score` float NOT NULL DEFAULT '0',
  `priority` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `category_id2`, `user_id`, `title`, `price`, `description`, `image`, `phone`, `address`, `location`, `view_count`, `score`, `priority`, `created_at`, `updated_at`) VALUES
(2, 2, 17, 1, 'Sale 50% nhân dịp quốc tế đàn ông', 100, 'Nhân dịp quốc tế đàn ông, 69 Store giảm giá 50% cho tất cả mặt hàng quần sịp hiện có tại cửa hàng', 'assets/img/postImg/4.jpg', '', '', 'Hanoi', 3, 0, 0, '2015-03-30 09:33:05', '2015-03-30 16:33:05'),
(3, 3, 9, 1, 'Bán biệt thự cao cấp dưới gầm cầu Long Biên', 10000000, 'Hiện chúng tôi đang sở hữu 69 biệt thự cao cấp dưới gầm cầu Long Biên. Điểm đặt biệt đây là những căn biệt thự cổ kính hòa hợp với thiên nhiên mưa gió, chim chuột và tiếng ô tô xe máy qua lại hàng ngày ...', 'assets/img/postImg/3.jpg', '', '', 'Hanoi', 6, 0, 0, '2015-03-30 09:33:05', '2015-05-13 08:05:56'),
(7, 1, 5, 8, 'Rua xe mien phi', 20, 'Trong xe mien phi o so 6 duong 9 phuong Tau Bay', 'assets/img/postImg/11.jpg', '', '', '', 7, 0, 1, '2015-03-30 15:28:07', '2015-03-30 15:36:35'),
(10, 1, 3, 1, 'Cho thuê nhà', 20000000, 'Cần cho thuê nhà đầy đủ tiện nghi, 80m2, hai tầng.', 'assets/img/postImg/25.jpg', '0166525737', 'Hà Nội', 'Ha noi', 5, 0, 0, '2015-05-13 02:16:57', '2015-05-13 08:23:29'),
(13, 1, 1, 1, 'sdfsgfdsg', 234234, 'ădfwefe', 'assets/img/postImg/40.jpg', '34534', 'dfvbvdf', 'Toan quoc', 0, 0, 0, '2015-05-13 08:29:05', '2015-05-13 15:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8_unicode_ci NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `score` float NOT NULL,
  `post_count` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `full_name`, `email`, `phone`, `address`, `avatar`, `user_type`, `status`, `score`, `post_count`, `created_at`, `updated_at`) VALUES
(1, '8843028fefce50a6de50acdf064ded27', 'Phan Huân', 'huanpc@bkav.com', '0134315321221', 'Ngoc Thuy Long Bien Ha Noi VN', 'assets/img/postImg/39.jpg', 1, 1, 2, 6, '2015-03-26 11:25:05', '2015-05-13 08:29:05'),
(8, '', 'huyem', 'dfsd', '', '', '', 0, 0, 0, 0, '2015-03-29 17:08:47', '2015-03-30 10:53:10'),
(10, '', 'sgasg', 'fsd', '', '', '', 0, 0, 0, 0, '2015-03-29 17:11:12', '2015-03-30 10:53:10'),
(11, '', 'sgasg', 'dfsdfs', '', '', '', 0, 0, 0, 0, '2015-03-29 17:12:09', '2015-03-30 10:53:10'),
(12, '8843028fefce50a6de50acdf064ded27', '', 'fdsf@gmail.com', '', '', '', 0, 0, 0, 0, '2015-05-05 22:58:23', '2015-05-05 22:58:23'),
(13, '8843028fefce50a6de50acdf064ded27', '', 'fdfsf@gmail.com', '', '', '', 0, 0, 0, 0, '2015-05-05 22:59:11', '2015-05-05 22:59:11'),
(14, '8843028fefce50a6de50acdf064ded27', '', 'asdfeaf@gmail.com', '', '', '', 0, 0, 0, 0, '2015-05-05 23:01:47', '2015-05-05 23:01:47'),
(15, 'd93a5def7511da3d0f2d171d9c344e91', '', 'ewafewf@aesf.com', '', '', '', 0, 0, 0, 0, '2015-05-13 00:16:06', '2015-05-13 00:16:06'),
(16, '8843028fefce50a6de50acdf064ded27', '', 'duylxbk57@gmail.com', '', '', '', 0, 0, 0, 0, '2015-05-13 09:17:59', '2015-05-13 09:17:59'),
(17, '8843028fefce50a6de50acdf064ded27', '', 'duylxbk@gmail.com', '', '', '', 0, 0, 0, 0, '2015-05-13 13:33:28', '2015-05-13 13:33:28'),
(18, '8843028fefce50a6de50acdf064ded27', '', 'duy123@gmail.com', '', '', '', 0, 0, 0, 0, '2015-05-13 13:38:23', '2015-05-13 13:38:23'),
(19, '8843028fefce50a6de50acdf064ded27', '', 'abc@gmail.com', '', '', '', 0, 0, 0, 0, '2015-05-13 13:40:56', '2015-05-13 13:40:56'),
(20, '8843028fefce50a6de50acdf064ded27', 'abc', '123@gmail.com', '03485289', 'Ha Noi', 'assets/img/postImg/31.jpg', 0, 0, 0, 1, '2015-05-13 13:42:40', '2015-05-13 07:24:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `category_lv2`
--
ALTER TABLE `category_lv2`
 ADD PRIMARY KEY (`id`), ADD KEY `parent_id` (`parent_id`), ADD KEY `id` (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`), ADD UNIQUE KEY `title` (`title`), ADD KEY `category_id` (`category_id`), ADD KEY `user_id` (`user_id`), ADD KEY `title_2` (`title`), ADD KEY `category_id2` (`category_id2`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category_lv2`
--
ALTER TABLE `category_lv2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_lv2`
--
ALTER TABLE `category_lv2`
ADD CONSTRAINT `category_lv1-2` FOREIGN KEY (`parent_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `category_lv1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

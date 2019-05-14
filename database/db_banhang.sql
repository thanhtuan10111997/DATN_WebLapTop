-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 03:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `created_at`, `updated_at`) VALUES
(1, 'An Giang', NULL, NULL),
(2, 'Bà Rịa - Vũng Tàu', NULL, NULL),
(3, 'Bắc Giang', NULL, NULL),
(4, 'Bắc Kạn', NULL, NULL),
(5, 'Bạc Liêu', NULL, NULL),
(6, 'Bắc Ninh', NULL, NULL),
(7, 'Bến Tre', NULL, NULL),
(8, 'Bình Định', NULL, NULL),
(9, 'Bình Dương', NULL, NULL),
(10, 'Bình Phước', NULL, NULL),
(11, 'Bình Thuận', NULL, NULL),
(12, 'Cà Mau', NULL, NULL),
(13, 'Cao Bằng', NULL, NULL),
(14, 'Đắk Lắk', NULL, NULL),
(15, 'Đắk Nông', NULL, NULL),
(16, 'Điện Biên', NULL, NULL),
(17, 'Đồng Nai', NULL, NULL),
(18, 'Đồng Tháp', NULL, NULL),
(19, 'Gia Lai', NULL, NULL),
(20, 'Hà Giang', NULL, NULL),
(21, 'Hà Nam', NULL, NULL),
(22, 'Hà Tĩnh', NULL, NULL),
(23, 'Hải Dương', NULL, NULL),
(24, 'Hậu Giang', NULL, NULL),
(25, 'Hòa Bình', NULL, NULL),
(26, 'Hưng Yên', NULL, NULL),
(27, 'Khánh Hòa', NULL, NULL),
(28, 'Kiên Giang', NULL, NULL),
(29, 'Kon Tum', NULL, NULL),
(30, 'Lai Châu', NULL, NULL),
(31, 'Lâm Đồng', NULL, NULL),
(32, 'Lạng Sơn', NULL, NULL),
(33, 'Lào Cai', NULL, NULL),
(34, 'Long An', NULL, NULL),
(35, 'Nam Định', NULL, NULL),
(36, 'Nghệ An', NULL, NULL),
(37, 'Ninh Bình', NULL, NULL),
(38, 'Ninh Thuận', NULL, NULL),
(39, 'Phú Thọ', NULL, NULL),
(40, 'Quảng Bình', NULL, NULL),
(41, 'Quảng Nam', NULL, NULL),
(42, 'Quảng Ngãi', NULL, NULL),
(43, 'Quảng Ninh', NULL, NULL),
(44, 'Quảng Trị', NULL, NULL),
(45, 'Sóc Trăng', NULL, NULL),
(46, 'Sơn La', NULL, NULL),
(47, 'Tây Ninh', NULL, NULL),
(48, 'Thái Bình', NULL, NULL),
(49, 'Thái Nguyên', NULL, NULL),
(50, 'Thanh Hóa', NULL, NULL),
(51, 'Thừa Thiên Huế', NULL, NULL),
(52, 'Tiền Giang', NULL, NULL),
(53, 'Trà Vinh', NULL, NULL),
(54, 'Tuyên Quang', NULL, NULL),
(55, 'Vĩnh Long', NULL, NULL),
(56, 'Vĩnh Phúc', NULL, NULL),
(57, 'Yên Bái', NULL, NULL),
(58, 'Phú Yên', NULL, NULL),
(59, 'Cần Thơ', NULL, NULL),
(60, 'Đà Nẵng', NULL, NULL),
(61, 'Hải Phòng', NULL, NULL),
(62, 'Hà Nội', NULL, NULL),
(63, 'TP HCM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Iphone', 0, NULL, NULL, NULL),
(2, 'Iphone 8', 1, NULL, NULL, NULL),
(3, 'Iphone X', 1, NULL, NULL, NULL),
(4, 'Samsung', 0, NULL, NULL, NULL),
(5, 'Samsung Galaxy', 4, NULL, NULL, NULL),
(6, 'Xiaomi', 0, NULL, NULL, NULL),
(7, 'Nokia', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `screen` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_camera` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_camera` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memory` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery_capacity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `product_id`, `screen`, `os`, `back_camera`, `front_camera`, `ram`, `memory`, `battery_capacity`, `created_at`, `updated_at`) VALUES
(1, 1, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP', '7 MP', '3 GB', '64 GB', '2691 mAh', NULL, NULL),
(2, 2, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP', '7 MP', '3 GB', '64 GB', '2691 mAh', NULL, NULL),
(3, 3, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP', '7 MP', '3 GB', '64 GB', '2691 mAh', NULL, NULL),
(4, 4, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP', '7 MP', '3 GB', '64 GB', '2691 mAh', NULL, NULL),
(5, 5, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP', '7 MP', '3 GB', '64 GB', '2691 mAh', NULL, NULL),
(6, 6, 'LED-backlit IPS LCD, 5.5\", Retina HD', 'iOS 11', '2 camera 12 MP', '7 MP', '3 GB', '64 GB', '2691 mAh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crons`
--

CREATE TABLE `crons` (
  `command` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_run` int(11) NOT NULL,
  `last_run` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'cdsc-iphone-x-256gb-h2-400x460-400x460.png', NULL, NULL),
(2, 1, 'qmR0-iphone-x-64gb-silver-400x460.png', NULL, NULL),
(3, 1, '4gvR-iphone-8-red-1-400x460.png', NULL, NULL),
(4, 2, 'EKBx-iphone-6-32gb-vang-400-400x460.png', NULL, NULL),
(5, 2, 'kAp9-iphone-8-64gb-1-400x460-1-400x460.png', NULL, NULL),
(6, 2, '8C6I-iphone-x-64gb-silver-400x460.png', NULL, NULL),
(7, 3, 'ucdS-vivo-v7-plus-1-400x460.png', NULL, NULL),
(8, 3, 'lREs-samsung-galaxy-j7-plus-2-400x460.png', NULL, NULL),
(9, 4, 'tUXr-samsung-galaxy-j8-400x460.png', NULL, NULL),
(10, 4, '75Ko-vivo-v7-plus-1-400x460.png', NULL, NULL),
(11, 5, 'y2B6-iphone-x-256gb-h2-400x460-400x460.png', NULL, NULL),
(12, 5, 'AGEk-iphone-6-32gb-vang-400-400x460.png', NULL, NULL),
(13, 6, 'bf2c-iphone-8-plus-64gb-h1-400x460.png', NULL, NULL),
(14, 6, 'hllE-iphone-8-64gb-1-400x460-1-400x460.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_08_28_091817_create_addresses_table', 1),
(2, '2018_08_28_091817_create_categories_table', 1),
(3, '2018_08_28_091817_create_comments_table', 1),
(4, '2018_08_28_091817_create_configurations_table', 1),
(5, '2018_08_28_091817_create_contacts_table', 1),
(6, '2018_08_28_091817_create_images_table', 1),
(7, '2018_08_28_091817_create_news_table', 1),
(8, '2018_08_28_091817_create_order_details_table', 1),
(9, '2018_08_28_091817_create_orders_table', 1),
(10, '2018_08_28_091817_create_password_resets_table', 1),
(11, '2018_08_28_091817_create_products_table', 1),
(12, '2018_08_28_091817_create_ratings_table', 1),
(13, '2018_08_28_091817_create_slides_table', 1),
(14, '2018_08_28_091817_create_users_table', 1),
(15, '2018_08_28_091819_add_foreign_keys_to_comments_table', 1),
(16, '2018_08_28_091819_add_foreign_keys_to_configurations_table', 1),
(17, '2018_08_28_091819_add_foreign_keys_to_images_table', 1),
(18, '2018_08_28_091819_add_foreign_keys_to_order_details_table', 1),
(19, '2018_08_28_091819_add_foreign_keys_to_orders_table', 1),
(20, '2018_08_28_091819_add_foreign_keys_to_products_table', 1),
(21, '2018_08_28_091819_add_foreign_keys_to_ratings_table', 1),
(22, '2018_08_28_091819_add_foreign_keys_to_users_table', 1),
(23, '2018_09_05_211519_create_crons_table', 1),
(24, '2018_09_15_171610_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `avatar`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, '4VVI-img_1052_800x450.jpg', 'Rò rỉ video trên tay iPhone XS, iPhone XS Plus, iPhone 2018', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.<br><br>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis \r\n            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis \r\n            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend \r\n            laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla \r\n            luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent \r\n            per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at \r\n            ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros \r\n            convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean \r\n            et nulla purus. Mauris vel tellus non nunc mattis lobortis.', NULL, NULL),
(2, 'lQol-1_800x450.jpg', 'Cách tắt nguồn trên iPhone X nhanh và đơn giản', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.<br><br>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis \r\n            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis \r\n            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend \r\n            laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla \r\n            luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent \r\n            per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at \r\n            ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros \r\n            convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean \r\n            et nulla purus. Mauris vel tellus non nunc mattis lobortis.', NULL, NULL),
(3, 'bTRA-maxresdefault1copy_1280x720-800-resize.jpg', 'Smartphone Samsung hay iPhone cũ thường có giá bao nhiêu?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.<br><br>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis \r\n            vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis \r\n            in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend \r\n            laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla \r\n            luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent \r\n            per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at \r\n            ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros \r\n            convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean \r\n            et nulla purus. Mauris vel tellus non nunc mattis lobortis.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `payment` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(15,0) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Đang chờ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_ship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,0) NOT NULL,
  `discount` decimal(15,0) DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `descript`, `price`, `discount`, `avatar`, `view`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Điện thoại iPhone 8 Plus 64GB', '<p>Thừa hưởng thiết kế đ&atilde; đạt đến độ chuẩn mực, thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-8-plus\" target=\"_blank\">iPhone 8 Plus</a>&nbsp;thay đổi phong c&aacute;ch b&oacute;ng bẩy hơn v&agrave; bổ sung h&agrave;ng loạt t&iacute;nh năng cao cấp cho trải nghiệm sử dụng v&ocirc; c&ugrave;ng tuyệt vời.</p>', '23990000', '1350000', '97Lr-iphone-8-plus-64gb-h1-400x460.png', 0, NULL, NULL, NULL),
(2, 3, 'Điện thoại iPhone X 64GB Gray', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>', '2212000', '110000', 'NQY7-iphone-x-64gb-1-400x460.png', 1, NULL, '2019-04-11 23:40:06', NULL),
(3, 3, 'Điện thoại iPhone X 64GB Silver', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>', '8990000', '1350000', '67uG-iphone-x-64gb-silver-400x460.png', 0, NULL, NULL, NULL),
(4, 4, 'Điện thoại iPhone 8 Plus 256GB', '<p>Thừa hưởng thiết kế đ&atilde; đạt đến độ chuẩn mực, thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-8-plus\" target=\"_blank\">iPhone 8 Plus</a>&nbsp;thay đổi phong c&aacute;ch b&oacute;ng bẩy hơn v&agrave; bổ sung h&agrave;ng loạt t&iacute;nh năng cao cấp cho trải nghiệm sử dụng v&ocirc; c&ugrave;ng tuyệt vời.</p>', '6299000', '1000000', 'jHd1-iphone-8-64gb-1-400x460-1-400x460.png', 0, NULL, NULL, NULL),
(5, 5, 'Điện thoại Xiaomi Redmi 6A', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>', '17990000', '1350000', 'b1lk-oppo-f7-bac-400x460.png', 0, NULL, NULL, NULL),
(6, 6, 'Điện thoại Oppo', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>', '11990000', '1350000', 'dvnu-iphone-8-64gb-1-400x460-1-400x460.png', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_id` int(10) UNSIGNED NOT NULL,
  `rateable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `image_link`, `created_at`, `updated_at`) VALUES
(1, 'nPUQ', 'Vdon-slider-03.png', NULL, NULL),
(2, 'RufE', 'vmBA-XS68-slider-02.png', NULL, NULL),
(3, 'cwMk', 'Z688-slider-01.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `address_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) UNSIGNED DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `address_id`, `name`, `email`, `password`, `phone`, `level`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 37, 'Admin', 'quanghavan96@gmail.com', '$2y$10$ZdUV1RJjEaoghE.kLeQo2em7udNsjCGHPfrCwGhEYPS/K8mi4XFei', '01638161533', 1, '9zt4e05nZL', NULL, NULL, NULL),
(2, 36, 'Nguyễn Văn Mạnh', 'havanquang120796@gmail.com', '$2y$10$6RaM5Dubj.iemdWhgYkhXOxHivyvOhW.pY6k/YhUHpFdSEYgPknSO', '01638161533', 0, 'UXWyXQgDON', NULL, NULL, NULL),
(3, 37, 'Đinh Khắc Doanh', 'ha.van.quang@framgia.com', '$2y$10$5gophixwf7ZprYINqFym7.Q.kHHev3iaP8urKRNpWld0MB0M5HBDy', '01623462563', 0, 'spxkkAHfCW', NULL, NULL, NULL),
(4, 35, 'Phạm Công Định', '20143578@student.hust.edu.vn', '$2y$10$2I1PxeduK38yyrJlV0zcT.f4NybaqUo4VDK9Qn7gn253UguF.RHKG', '01638321489', 0, 'FWmc8I6YC3', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `configurations_product_id_unique` (`product_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crons`
--
ALTER TABLE `crons`
  ADD PRIMARY KEY (`command`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_id_rateable_type_index` (`rateable_id`,`rateable_type`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_index` (`user_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_address_id_foreign` (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `configurations`
--
ALTER TABLE `configurations`
  ADD CONSTRAINT `configurations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

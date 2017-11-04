-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 06:48 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-nms-online`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_row_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `category_long_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `has_child` int(11) NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL,
  `count_product` int(11) NOT NULL,
  `category_sort_order` int(11) NOT NULL,
  `meta_key` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_row_id`, `category_name`, `category_image`, `category_short_description`, `category_long_description`, `parent_id`, `has_child`, `is_featured`, `level`, `count_product`, `category_sort_order`, `meta_key`, `meta_description`, `created_at`, `updated_at`) VALUES
(56, 'Electronics', 'Laptop.jpg', '', '', 0, 1, 0, 0, 0, 0, '', '', '2016-06-11 22:27:42', '2016-08-09 13:42:12'),
(57, 'Cloth', 'Shirt.jpg', '', '', 0, 0, 0, 0, 0, 0, '', '', '2016-06-11 22:27:59', '2016-08-09 13:42:19'),
(59, 'Bag', 'Bag.jpg', '', '', 0, 1, 0, 0, 0, 0, '', '', '2016-08-09 13:42:05', '2016-08-09 13:42:05'),
(65, 'Watch', 'Watch.jpg', '', '', 56, 1, 0, 1, 0, 0, '', '', '2016-12-14 22:49:55', '2016-12-14 22:49:55'),
(66, 'Bike', 'Bike.jpg', '', '', 65, 0, 0, 2, 0, 0, '', '', '2017-02-18 00:42:19', '2017-02-18 00:42:19'),
(67, 'Ornaments', 'Ornaments.jpg', '', '', 59, 0, 0, 1, 0, 0, '', '', '2017-03-02 22:19:05', '2017-03-02 22:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_row_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_name_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` float(8,2) DEFAULT NULL,
  `product_height` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_width` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_weight` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_row_id` int(11) DEFAULT NULL,
  `product_sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `is_latest` tinyint(1) DEFAULT '0',
  `product_short_description` text COLLATE utf8_unicode_ci,
  `product_long_description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_row_id`, `product_name`, `product_name_url`, `product_price`, `product_height`, `product_width`, `product_weight`, `category_row_id`, `product_sku`, `product_image`, `is_featured`, `is_latest`, `product_short_description`, `product_long_description`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', '', 500.00, '', '', '', 56, 'tbl4', 'Laptop.jpg', 1, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2016-08-09 13:52:54'),
(4, 'Shirt', '', 250.00, '', '', '', 57, 'chr3', 'Shirt.jpg', 1, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2016-08-09 13:51:38'),
(5, 'Necklace', '', 900.00, '', '', '', 67, 'shr', 'Ornaments.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2016-08-09 13:51:15'),
(6, 'Hero', '', 1200.00, '', '', '', 66, 'prod', 'Bike.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2017-03-04 23:45:52'),
(10, 'Watch', '', 34543.00, '', '', '', 65, 'asdsad', 'Watch.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2016-08-09 14:00:18'),
(11, 'Mobile', '', 343.00, '', '', '', 56, 'fdsf', 'Mobile.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2016-08-09 14:00:37'),
(12, 'Furniture', '', 43543.00, '', '', '', 100, 'dsfsd', 'Furniture.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2016-08-09 14:00:58'),
(13, 'Bag', NULL, 500.00, NULL, NULL, NULL, 59, NULL, 'Bag.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2017-08-18 03:41:19'),
(14, 'Refrigerator', NULL, 6000.00, NULL, NULL, NULL, 56, NULL, 'Refrigerator.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2017-08-18 03:44:12'),
(15, 'Pant', NULL, 750.00, NULL, NULL, NULL, 57, NULL, 'Pant.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2017-08-18 04:36:06'),
(16, 'Three Pice', NULL, 1800.00, NULL, NULL, NULL, 57, NULL, 'Three Pice.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2017-08-18 04:38:56'),
(17, 'Ring', NULL, 5800.00, NULL, NULL, NULL, 67, NULL, 'Ring.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2017-08-18 04:49:03'),
(18, 'School Bag', NULL, 500.00, NULL, NULL, NULL, 59, NULL, 'School Bag.jpg\r\n', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2017-08-18 05:57:26'),
(19, 'Ladies Bag', NULL, 1000.00, NULL, NULL, NULL, 59, NULL, 'Ladies Bag.jpg', 0, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-08-18 06:07:28', '2017-08-18 06:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `temp_orders`
--

CREATE TABLE `temp_orders` (
  `temp_order_row_id` int(11) NOT NULL,
  `product_row_id` int(11) NOT NULL,
  `tracking_number` varchar(255) NOT NULL,
  `product_price` float(8,2) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_total_price` float(8,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_orders`
--

INSERT INTO `temp_orders` (`temp_order_row_id`, `product_row_id`, `tracking_number`, `product_price`, `product_qty`, `product_total_price`, `created_at`, `updated_at`) VALUES
(1, 18, 'ACJUUCHdUmotTTMLIx9kfOwDYTxBZvy2hW0u4eIr', 500.00, 1, 500.00, '2017-08-25 13:28:06', NULL),
(2, 19, 'ACJUUCHdUmotTTMLIx9kfOwDYTxBZvy2hW0u4eIr', 1000.00, 1, 1000.00, '2017-08-25 13:31:47', NULL),
(3, 5, 'ACJUUCHdUmotTTMLIx9kfOwDYTxBZvy2hW0u4eIr', 900.00, 1, 900.00, '2017-08-25 13:46:58', NULL),
(4, 6, 'wsW01n32rulLaGR9hyOHypGYbL9sgQsNxQ1Ne7SG', 1200.00, 1, 1200.00, '2017-09-07 14:09:29', NULL),
(5, 11, 'wsW01n32rulLaGR9hyOHypGYbL9sgQsNxQ1Ne7SG', 343.00, 1, 343.00, '2017-09-07 14:10:25', NULL),
(6, 16, 'wsW01n32rulLaGR9hyOHypGYbL9sgQsNxQ1Ne7SG', 1800.00, 1, 1800.00, '2017-09-07 14:12:54', NULL),
(7, 4, 'YipYB65fFAekGQKdayZCSSZgTjcDpQ8bcGutvXCe', 250.00, 12, 3000.00, '2017-09-07 14:55:37', NULL),
(8, 4, 'YipYB65fFAekGQKdayZCSSZgTjcDpQ8bcGutvXCe', 250.00, 1, 250.00, '2017-09-07 14:57:17', NULL),
(9, 4, 'YipYB65fFAekGQKdayZCSSZgTjcDpQ8bcGutvXCe', 250.00, 1, 250.00, '2017-09-07 14:59:07', NULL),
(10, 5, 'YipYB65fFAekGQKdayZCSSZgTjcDpQ8bcGutvXCe', 900.00, 4, 3600.00, '2017-09-07 15:01:22', NULL),
(11, 4, 'YipYB65fFAekGQKdayZCSSZgTjcDpQ8bcGutvXCe', 250.00, 10, 2500.00, '2017-09-07 15:01:49', NULL),
(12, 17, 'YipYB65fFAekGQKdayZCSSZgTjcDpQ8bcGutvXCe', 5800.00, 1, 5800.00, '2017-09-07 15:04:37', NULL),
(13, 19, 'YipYB65fFAekGQKdayZCSSZgTjcDpQ8bcGutvXCe', 1000.00, 10, 10000.00, '2017-09-07 15:06:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md.Abdus Salam', 'salamcseiu21@gmail.com', '$2y$10$V3EK0HqcAeQxeblhT5zsGOrpmYLJZGLhPHeeELFkSsd1Y3tZ/RXMm', 'xXiWhVkqhv9OtleTOJ7f22yfTSHYRMk4Yzu3aXeYikKFQZuBzGp5Nl276qRE', '2017-08-03 23:39:05', '2017-08-03 23:39:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_row_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_row_id`);

--
-- Indexes for table `temp_orders`
--
ALTER TABLE `temp_orders`
  ADD PRIMARY KEY (`temp_order_row_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_row_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_row_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `temp_orders`
--
ALTER TABLE `temp_orders`
  MODIFY `temp_order_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

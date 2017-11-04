-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 12:09 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Md.Abdsu Salam', 'salamcseiu21@gmail.com', '22743737', 1, '2017-09-09 21:52:17', '2017-09-09 21:52:17');

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
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `has_child` int(11) DEFAULT '0',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `level` int(11) DEFAULT NULL,
  `count_product` int(11) DEFAULT NULL,
  `category_sort_order` int(11) DEFAULT NULL,
  `meta_key` text COLLATE utf8_unicode_ci,
  `meta_description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_row_id`, `category_name`, `category_image`, `category_short_description`, `category_long_description`, `parent_id`, `has_child`, `is_featured`, `level`, `count_product`, `category_sort_order`, `meta_key`, `meta_description`, `created_at`, `updated_at`) VALUES
(56, 'Electronics', 'Laptop.jpg', '', '', 1, 1, 0, 0, 0, 0, '', '', '2016-06-11 22:27:42', '2016-08-09 13:42:12'),
(57, 'Cloth', 'Shirt.jpg', '', '', 1, 0, 0, 0, 0, 0, '', '', '2016-06-11 22:27:59', '2016-08-09 13:42:19'),
(59, 'Bag', 'Bag.jpg', '', '', 1, 1, 0, 0, 0, 0, '', '', '2016-08-09 13:42:05', '2016-08-09 13:42:05'),
(65, 'Watch', 'Watch.jpg', '', '', 1, 1, 0, 1, 0, 0, '', '', '2016-12-14 22:49:55', '2016-12-14 22:49:55'),
(66, 'Bike', 'Bike.jpg', '', '', 1, 0, 0, 2, 0, 0, '', '', '2017-02-18 00:42:19', '2017-02-18 00:42:19'),
(67, 'Ornaments', 'Ornaments.jpg', '', '', 1, 0, 0, 1, 0, 0, '', '', '2017-03-02 22:19:05', '2017-03-02 22:19:05'),
(68, 'Book', 'Book.jpg', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 1, 0, 1, 0, 0, 0, '', '', NULL, NULL),
(69, 'Interior', 'Floor Mat.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 1, 0, 1, NULL, NULL, NULL, NULL, NULL, '2017-09-10 11:25:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 'Nilphamari', '2017-09-08 10:37:09', '2017-09-08 10:37:09'),
(2, 'Rangpur', '2017-09-08 10:37:09', '2017-09-08 10:37:09'),
(3, 'Kurigram', '2017-09-08 10:37:44', '2017-09-08 10:37:44'),
(4, 'Lalmonirhat', '2017-09-08 10:37:44', '2017-09-08 10:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `merchant_id` int(11) NOT NULL,
  `merchant_name` varchar(255) NOT NULL,
  `merchant_image` varchar(255) NOT NULL,
  `merchant_website_url` varchar(255) NOT NULL,
  `is_featured` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`merchant_id`, `merchant_name`, `merchant_image`, `merchant_website_url`, `is_featured`) VALUES
(1, 'Md.Abdus Salam', 'Abdus Salam.JPG', 'http://www.salamcse.com', 1),
(2, 'Shohana Khatun', 'Shohana.jpg', 'http://www.salamcse.com', 1),
(3, 'Md.Noyon Miah', 'Abdus Salam.JPG', 'http://www.salamcse.com', 1),
(4, 'Mithila Khan', 'Shohana.jpg', 'http://www.salamcse.com', 1);

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_row_id` int(11) NOT NULL,
  `product_price` decimal(18,2) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_total_price` decimal(18,2) NOT NULL,
  `tracking_number` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_method` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_row_id`, `product_price`, `product_qty`, `product_total_price`, `tracking_number`, `created_at`, `updated_at`, `payment_method`) VALUES
(1, 25, '5432.00', 3, '16296.00', 'qpvmATZVBoX561VnNTOXrtND88OclmdarhbrK3HG', '2017-09-10 18:28:47', '2017-09-10 18:28:47', 1),
(2, 24, '243.00', 2, '486.00', 'qpvmATZVBoX561VnNTOXrtND88OclmdarhbrK3HG', '2017-09-10 18:28:47', '2017-09-10 18:28:47', 1),
(3, 4, '250.00', 2, '500.00', 'd9zZKxQQMQtTewhbjlYaS9po4TGw1wTUQ66as1y1', '2017-09-11 00:56:38', '2017-09-11 00:56:38', 2),
(4, 24, '243.00', 2, '486.00', 'd9zZKxQQMQtTewhbjlYaS9po4TGw1wTUQ66as1y1', '2017-09-11 00:56:38', '2017-09-11 00:56:38', 2),
(5, 14, '6000.00', 2, '12000.00', 'wxCFvmlFWFWl8jwwqg4SjDBHHmUgzOyZJsS9NdvT', '2017-09-11 01:01:52', '2017-09-11 01:01:52', 1),
(6, 1, '500.00', 2, '1000.00', 'wxCFvmlFWFWl8jwwqg4SjDBHHmUgzOyZJsS9NdvT', '2017-09-11 01:01:52', '2017-09-11 01:01:52', 1),
(7, 15, '750.00', 3, '2250.00', 'pbGQEbJxQppfiKuanMP3KocTGqFLY8vBeXvzVEGh', '2017-09-11 01:11:15', '2017-09-11 01:11:15', 1),
(8, 22, '400.00', 2, '800.00', 'pbGQEbJxQppfiKuanMP3KocTGqFLY8vBeXvzVEGh', '2017-09-11 01:11:15', '2017-09-11 01:11:15', 1),
(9, 25, '5432.00', 2, '10864.00', 'pbGQEbJxQppfiKuanMP3KocTGqFLY8vBeXvzVEGh', '2017-09-11 01:11:15', '2017-09-11 01:11:15', 1),
(10, 24, '243.00', 3, '729.00', 'kZJ2uUjWusqnfVhbcB35Fu3QJx39W72zUXcZGwc8', '2017-09-11 01:21:31', '2017-09-11 01:21:31', 1);

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
  `parent_id` int(11) NOT NULL,
  `product_short_description` text COLLATE utf8_unicode_ci,
  `product_long_description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_row_id`, `product_name`, `product_name_url`, `product_price`, `product_height`, `product_width`, `product_weight`, `category_row_id`, `product_sku`, `product_image`, `is_featured`, `is_latest`, `parent_id`, `product_short_description`, `product_long_description`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', '', 500.00, '', '', '', 56, 'tbl4', 'Laptop.jpg', 1, 1, 2, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 07:22:59', '2016-08-09 13:52:54'),
(4, 'Shirt', '', 250.00, '', '', '', 57, 'chr3', 'Shirt.jpg', 1, 1, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2016-08-09 13:51:38'),
(5, 'Necklace', '', 900.00, '', '', '', 67, 'shr', 'Ornaments.jpg', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2016-08-09 13:51:15'),
(6, 'Hero', '', 1200.00, '', '', '', 66, 'prod', 'Bike.jpg', 1, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2017-03-04 23:45:52'),
(10, 'Watch', '', 34543.00, '', '', '', 65, 'asdsad', 'Watch.jpg', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2016-08-09 14:00:18'),
(11, 'Mobile', '', 343.00, '', '', '', 56, 'fdsf', 'Mobile.jpg', 1, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2016-08-09 14:00:37'),
(12, 'Furniture', '', 43543.00, '', '', '', 100, 'dsfsd', 'Furniture.jpg', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2016-08-09 14:00:58'),
(13, 'Bag', NULL, 500.00, NULL, NULL, NULL, 59, NULL, 'Bag.jpg', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2017-08-18 03:41:19'),
(14, 'Refrigerator', NULL, 6000.00, NULL, NULL, NULL, 56, NULL, 'Refrigerator.jpg', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2017-08-18 03:44:12'),
(15, 'Pant', NULL, 750.00, NULL, NULL, NULL, 57, NULL, 'Pant.jpg', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2017-08-18 04:36:06'),
(16, 'Three Pice', NULL, 1800.00, NULL, NULL, NULL, 57, NULL, 'Three Pice.jpg', 1, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2017-08-18 04:38:56'),
(17, 'Ring', NULL, 5800.00, NULL, NULL, NULL, 67, NULL, 'Ring.jpg', 1, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2017-08-18 04:49:03'),
(18, 'School Bag', NULL, 500.00, NULL, NULL, NULL, 59, NULL, 'School Bag.jpg\r\n', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2017-08-18 05:57:26'),
(19, 'Ladies Bag', NULL, 1000.00, NULL, NULL, NULL, 59, NULL, 'Ladies Bag.jpg', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-09-13 06:27:32', '2017-08-18 06:03:04'),
(20, 'Appace', NULL, 100000.00, NULL, NULL, NULL, 66, NULL, 'Appace.png', 0, 0, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).\r\nA buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', '2017-09-13 06:27:32', '2017-09-09 17:01:17'),
(21, 'History', NULL, 500.00, NULL, NULL, NULL, 68, NULL, 'Book.jpg', 1, 0, 1, '\r\nA buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', '\r\nA buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).\r\n\r\nA buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', '2017-09-13 06:27:32', '2017-09-10 14:50:41'),
(22, 'Barrons-Gre', NULL, 400.00, NULL, NULL, NULL, 68, NULL, 'Barrons-6-Gre-Practice-Tests.jpg', 1, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '2017-09-13 06:27:32', '2017-09-10 17:51:41'),
(23, 'Baby Floor Mat', NULL, 40000.00, NULL, NULL, NULL, 69, NULL, 'Ideal-Baby-Floor-Mat.jpg', 1, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '2017-09-13 06:27:32', '2017-09-10 18:05:14'),
(24, 'Gre-Tests', NULL, 243.00, NULL, NULL, NULL, 68, NULL, 'Cracking-the-GRE-2016-Edition.jpg', 1, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '2017-09-13 06:27:32', '2017-09-10 18:18:22'),
(25, 'Floor Mat', NULL, 5432.00, NULL, NULL, NULL, 69, NULL, 'Floor Mat.jpg', 1, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '2017-09-13 06:27:32', '2017-09-10 18:20:29'),
(26, 'Monitor', NULL, 9000.00, NULL, NULL, NULL, 56, NULL, 'Accer Monitor.jpg', 1, 0, 1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '2017-09-13 06:27:32', '2017-09-11 15:04:58'),
(27, 'rojector', NULL, 4567.00, NULL, NULL, NULL, 56, NULL, 'LCD-projector-reviews.jpg.pagespeed.jpg', 1, 0, 1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '2017-09-13 06:27:32', '2017-09-11 15:08:17'),
(28, 'Printer', NULL, 6786.00, NULL, NULL, NULL, 56, NULL, 'Pinter.jpg', 1, 0, 1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,', '2017-09-13 06:27:32', '2017-09-11 15:12:07');

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
(13, 19, 'YipYB65fFAekGQKdayZCSSZgTjcDpQ8bcGutvXCe', 1000.00, 10, 10000.00, '2017-09-07 15:06:35', NULL),
(14, 1, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 500.00, 22, 11000.00, '2017-09-08 03:01:56', NULL),
(15, 1, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 500.00, 22, 11000.00, '2017-09-08 03:02:45', NULL),
(16, 10, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 34543.00, 8, 276344.00, '2017-09-08 03:02:53', NULL),
(17, 4, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 250.00, 2, 500.00, '2017-09-08 04:02:32', NULL),
(18, 11, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 343.00, 2, 686.00, '2017-09-08 04:07:12', NULL),
(19, 15, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 750.00, 4, 3000.00, '2017-09-08 04:09:09', NULL),
(20, 5, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 900.00, 2, 1800.00, '2017-09-08 04:11:59', NULL),
(21, 13, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 500.00, 15, 7500.00, '2017-09-08 04:13:15', NULL),
(22, 19, 'LOFs8yfhvX8EyQNcCfBgrJiZ9YNglnXTbDkAuiCw', 1000.00, -2, -2000.00, '2017-09-08 04:18:37', NULL),
(28, 11, '6RKVVSGXzNXvDvBPWvPIVrGNg4Co7Pr2OSPuHP3W', 343.00, 4, 1372.00, '2017-09-08 05:16:58', NULL),
(30, 13, '6RKVVSGXzNXvDvBPWvPIVrGNg4Co7Pr2OSPuHP3W', 500.00, 1, 500.00, '2017-09-08 05:24:01', NULL),
(34, 15, 'L5ktp75RzTxQAw7d5ArhRoYwIu6dMRnnSAhHvvLR', 750.00, 3, 2250.00, '2017-09-08 10:08:01', NULL),
(35, 1, 'L5ktp75RzTxQAw7d5ArhRoYwIu6dMRnnSAhHvvLR', 500.00, 2, 1000.00, '2017-09-08 10:25:37', NULL),
(36, 12, 'L5ktp75RzTxQAw7d5ArhRoYwIu6dMRnnSAhHvvLR', 43543.00, 1, 43543.00, '2017-09-08 10:32:08', NULL),
(37, 6, 'L5ktp75RzTxQAw7d5ArhRoYwIu6dMRnnSAhHvvLR', 1200.00, 4, 4800.00, '2017-09-08 10:53:46', NULL),
(38, 17, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 5800.00, 9, 52200.00, '2017-09-08 11:00:05', NULL),
(39, 18, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 500.00, 3, 1500.00, '2017-09-08 11:19:44', NULL),
(40, 6, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 1200.00, 2, 2400.00, '2017-09-08 11:20:08', NULL),
(41, 16, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 1800.00, 4, 7200.00, '2017-09-08 11:36:33', NULL),
(42, 19, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 1000.00, 1, 1000.00, '2017-09-08 11:36:51', NULL),
(43, 10, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 34543.00, 1, 34543.00, '2017-09-08 11:37:30', NULL),
(44, 14, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 6000.00, 1, 6000.00, '2017-09-08 11:37:55', NULL),
(45, 6, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 1200.00, 1, 1200.00, '2017-09-08 11:59:28', NULL),
(46, 16, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 1800.00, 4, 7200.00, '2017-09-08 12:00:30', NULL),
(47, 11, 'b9TLLjfqQPjYBIUlZlYiF8Q2H1GPLjt7FAhDkMgm', 343.00, 2, 686.00, '2017-09-08 12:07:09', NULL),
(48, 17, 't1iTfETZBxmBTNCCbNfzZmP2jiF96yexCJ3kO91N', 5800.00, 1, 5800.00, '2017-09-08 12:48:40', NULL),
(66, 1, 'uKXdiSJDUbbidn3QR2rDDQjR5fXYe6ZwUtCF7tlZ', 500.00, 6, 3000.00, '2017-09-09 13:53:02', NULL),
(67, 11, 'uKXdiSJDUbbidn3QR2rDDQjR5fXYe6ZwUtCF7tlZ', 343.00, 1, 343.00, '2017-09-09 14:16:39', NULL),
(70, 25, 'qpvmATZVBoX561VnNTOXrtND88OclmdarhbrK3HG', 5432.00, 3, 16296.00, '2017-09-10 18:25:03', NULL),
(71, 24, 'qpvmATZVBoX561VnNTOXrtND88OclmdarhbrK3HG', 243.00, 2, 486.00, '2017-09-10 18:25:17', NULL),
(72, 4, 'd9zZKxQQMQtTewhbjlYaS9po4TGw1wTUQ66as1y1', 250.00, 2, 500.00, '2017-09-11 00:56:13', NULL),
(73, 24, 'd9zZKxQQMQtTewhbjlYaS9po4TGw1wTUQ66as1y1', 243.00, 2, 486.00, '2017-09-11 00:56:26', NULL),
(74, 14, 'wxCFvmlFWFWl8jwwqg4SjDBHHmUgzOyZJsS9NdvT', 6000.00, 2, 12000.00, '2017-09-11 01:01:33', NULL),
(75, 1, 'wxCFvmlFWFWl8jwwqg4SjDBHHmUgzOyZJsS9NdvT', 500.00, 2, 1000.00, '2017-09-11 01:01:43', NULL),
(76, 15, 'pbGQEbJxQppfiKuanMP3KocTGqFLY8vBeXvzVEGh', 750.00, 3, 2250.00, '2017-09-11 01:10:41', NULL),
(77, 22, 'pbGQEbJxQppfiKuanMP3KocTGqFLY8vBeXvzVEGh', 400.00, 2, 800.00, '2017-09-11 01:10:52', NULL),
(78, 25, 'pbGQEbJxQppfiKuanMP3KocTGqFLY8vBeXvzVEGh', 5432.00, 2, 10864.00, '2017-09-11 01:11:05', NULL),
(79, 24, 'kZJ2uUjWusqnfVhbcB35Fu3QJx39W72zUXcZGwc8', 243.00, 3, 729.00, '2017-09-11 01:21:19', NULL),
(80, 26, 'J5qi7W1hbavUUeuOLXCJI3GpEZhTIDV0ofV9sDes', 9000.00, 2, 18000.00, '2017-09-12 16:29:16', NULL),
(81, 4, 'J5qi7W1hbavUUeuOLXCJI3GpEZhTIDV0ofV9sDes', 250.00, 1, 250.00, '2017-09-12 17:24:41', NULL);

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
(1, 'Noyon', 'noyon@gmail.com', '$2y$10$lalpMJP.V8CByV/Idh98c.bD7oZTB6r1cvkZ/CvIC/S7uty8YvvPK', 'Dmfjmks34F1Rl2uf8HYIzSUAHZJAnLvoi4Hu6PBNMWxM586UMcB9FgNM1KEx', '2017-09-12 07:43:51', '2017-09-12 07:43:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_row_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_row_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_row_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `temp_orders`
--
ALTER TABLE `temp_orders`
  MODIFY `temp_order_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 10:48 AM
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
(1, 'Md.Abdsu Salam', 'salamcseiu21@gmail.com', '22743737', 1, '2017-09-09 21:52:17', '2017-09-09 21:52:17'),
(2, 'Shohana Khatun', 'shohana@gmail.com', '11111', 1, '2017-10-22 23:44:35', '2017-10-22 23:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_row_id` int(11) UNSIGNED NOT NULL,
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
(56, 'Electronics', 'Laptop.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '', 1, 1, 0, 0, 0, 0, '', '', '2016-06-11 22:27:42', '2016-08-09 13:42:12'),
(57, 'Cloth', 'Shirt.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '', 1, 0, 0, 0, 0, 0, '', '', '2016-06-11 22:27:59', '2016-08-09 13:42:19'),
(59, 'Fashion', 'Bag.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '', 1, 1, 0, 0, 0, 0, '', '', '2016-08-09 13:42:05', '2016-08-09 13:42:05'),
(66, 'Bike', 'Bike.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '', 1, 0, 0, 2, 0, 0, '', '', '2017-02-18 00:42:19', '2017-02-18 00:42:19'),
(67, 'Jewlery', 'Ornaments.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '', 1, 0, 0, 1, 0, 0, '', '', '2017-03-02 22:19:05', '2017-03-02 22:19:05'),
(68, 'Book', 'Book.jpg', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 1, 0, 1, 0, 0, 0, '', '', NULL, NULL),
(70, 'Interior', 'Floor Mat.jpg', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 6, 0, 0, NULL, NULL, NULL, NULL, NULL, '2017-10-29 08:47:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `division_id` int(3) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `full_name`, `short_name`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '01', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(2, 'Rajshahi', '02', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(3, 'Khulna', '03', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(4, 'Chittagong', '04', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(5, 'Barisal', '05', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(6, 'Sylhet', '06', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(7, 'Rangpur', '07', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(8, 'Manikgonj', '08', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(9, 'Gazipur', '09', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(10, 'Mymensingh', '10', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(11, 'Narayanganj', '11', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(12, 'Tangail', '12', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(13, 'Madaripur', '13', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(14, 'Jamalpur', '14', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(15, 'Munshiganj', '15', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(16, 'Gopalganj', '16', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(17, 'Sherpur', '17', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(18, 'Kishoreganj', '18', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(19, 'Narsingdi', '19', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(20, 'Shariatpur', '20', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(21, 'Netrokona', '21', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(22, 'Rajbari', '22', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(23, 'Faridpur', '23', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(24, 'Bogra', '24', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(25, 'Joypurhat', '25', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(26, 'Naogaon', '26', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(27, 'Natore', '27', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(28, 'Chapai Nawabganj', '28', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(29, 'Pabna', '29', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(30, 'Sirajganj', '30', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(31, 'Shatkhira', '31', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(32, 'Bagerhat', '32', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(33, 'Jessore', '33', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(34, 'Narail', '34', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(35, 'Magura', '35', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(36, 'Jhenaidah', '36', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(37, 'Chuadanga', '37', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(38, 'Kushtia', '38', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(39, 'Meherpur', '39', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(40, 'Bandarban', '40', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(41, 'Rangamati', '41', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(42, 'Khagrachari', '42', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(43, 'Cox''s Bazar', '43', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(44, 'Feni', '44', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(45, 'Noakhali', '45', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(46, 'Lakshmipur', '46', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(47, 'Comilla', '47', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(48, 'Brahmanbaria', '48', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(49, 'Chandpur', '49', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(50, 'Barguna', '50', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(51, 'Bhola', '51', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(52, 'Jhalokati', '52', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(53, 'Patuakhali', '53', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(54, 'Pirojpur', '54', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(55, 'Maulvi Bazar', '55', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(56, 'Habiganj', '56', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(57, 'Sunamgonj', '57', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(58, 'Dinajpur', '58', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(59, 'Gaibandha', '59', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(60, 'Kurigram', '60', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(61, 'Lalmonirhat', '61', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(62, 'Nilphamari', '62', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(63, 'Panchagarh', '63', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(64, 'Thakurgaon', '64', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `merchant_id` int(11) NOT NULL,
  `merchant_name` varchar(255) NOT NULL,
  `merchant_image` varchar(255) NOT NULL,
  `about_merchant` text CHARACTER SET utf8 NOT NULL,
  `about_shop` text CHARACTER SET utf8 NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_image` varchar(200) NOT NULL,
  `shop_category` varchar(255) NOT NULL,
  `shop_location` varchar(255) NOT NULL,
  `merchant_website_url` varchar(255) NOT NULL,
  `is_featured` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`merchant_id`, `merchant_name`, `merchant_image`, `about_merchant`, `about_shop`, `shop_name`, `shop_image`, `shop_category`, `shop_location`, `merchant_website_url`, `is_featured`) VALUES
(1, 'Md.Abdus Salam', 'Abdus Salam.JPG', 'Modo temporibus his ex. Vix erant latine luptatum et, \r\neam tollit reformidans', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', 'Exclusive collection', 'Electronics.jpg', 'Electronics', 'Nilphamari', 'http://www.salamcse.com', 1),
(2, 'Shohana Khatun', 'Shohana.jpg', 'Modo temporibus his ex. Vix erant latine luptatum et, \r\neam tollit reformidans', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', 'Men & Wemen Style', 'Cloth.jpg', 'Cloth', 'Lalmonirhat', 'http://www.salamcse.com', 1),
(3, 'Md.Noyon Miah', 'Noyon.JPG', 'Modo temporibus his ex. Vix erant latine luptatum et, \r\neam tollit reformidans', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', 'Jewlery for All', 'Jewelers-shop.jpg', 'Jewlery', 'Kurigram', 'http://www.salamcse.com', 1),
(4, 'Mithila Khan', 'Mithila Khan.jpg', 'Modo temporibus his ex. Vix erant latine luptatum et, \r\neam tollit reformidans', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', 'NMS Book Stall ', 'Book Shop.jpg', 'Book', 'Nilphamari', 'http://www.salamcse.com', 1),
(5, 'Rima Khatun', 'Rima.jpg', 'Modo temporibus his ex. Vix erant latine luptatum et, \r\neam tollit reformidans', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', 'Fashion Sepecialiest', 'Watch.jpg', 'Fashion', 'Nilphamari', 'http://www.salamcseiu.com', 1),
(6, 'Shohel Miah', 'Shohel.png', 'Modo temporibus his ex. Vix erant latine luptatum et, \r\neam tollit reformidans', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', 'Design of Home', 'Interior.jpg', 'Interior', 'Rangpur', 'http://www.salamcse.com', 1),
(7, 'Mizanur Rahman', 'Mizanur.JPG', 'Modo temporibus his ex. Vix erant latine luptatum et, \r\neam tollit reformidans', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', 'Let''s your dream to be true', 'Bike Shop.jpg', 'Bike', 'Nilphamari', 'http://www.salamcseiu.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `replay_message` text,
  `reply_status` int(11) NOT NULL DEFAULT '0' COMMENT '0=Not replied,1=Replied',
  `admin_id` int(11) NOT NULL DEFAULT '0',
  `message_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `subject`, `message`, `replay_message`, `reply_status`, `admin_id`, `message_date`) VALUES
(2, 4, 'HI', 'I have not get my orders ...Can I know?', 'Of course', 1, 2, '2017-10-30 12:23:16'),
(3, 5, 'Test', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your ', '', 0, 2, '2017-10-30 12:33:19'),
(4, 4, 'Test 1', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your ', 'We will inform you soon...', 1, 2, '2017-10-30 12:33:19'),
(5, 6, 'Good morning', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your', 'Yes..', 1, 2, '2017-10-31 10:00:17'),
(6, 4, 'Good after noon', 'Hi Nms .How are you?', 'Fine ..Whats about you?', 1, 2, '2017-10-31 11:49:23');

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
  `user_id` int(11) NOT NULL,
  `product_total_price` decimal(18,2) NOT NULL,
  `order_details` text NOT NULL,
  `order_status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0=Pending,1=Delevered',
  `deletion_status` tinyint(2) DEFAULT '0' COMMENT '1=Deleted',
  `shiping_address` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_method` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_total_price`, `order_details`, `order_status`, `deletion_status`, `shiping_address`, `created_at`, `updated_at`, `payment_method`) VALUES
(1, 4, '54000.00', '[{"product_row_id":28,"product_sku":"NMS15623","product_name":"Printer 1","product_price":4500,"product_qty":2,"product_total_price":9000},{"product_row_id":14,"product_sku":"NMS15609","product_name":"Refrigerator","product_price":30000,"product_qty":1,"product_total_price":30000},{"product_row_id":31,"product_sku":"NMS15631","product_name":"Mobile 1","product_price":5000,"product_qty":3,"product_total_price":15000}]', 0, 0, '{"name":"Md.Noyon Miah","mobile":"01520102680","district":"7","upazila":"126","address":"ABc"}', '2017-11-02 15:38:05', '2017-11-02 15:38:05', '{"payment_method":"Cash on Delivery","payment_id":"2"}'),
(2, 4, '400.00', '[{"product_row_id":22,"product_sku":"NMS46817","product_name":"Barrons-Gre","product_price":400,"product_qty":1,"product_total_price":400}]', 0, 0, '{"name":"Noyon Miah","mobile":"0174582554","district":"5","upazila":"404","address":"gfdsg"}', '2017-11-02 15:40:50', '2017-11-02 15:40:50', '{"payment_method":"Cash on Delivery","payment_id":"2"}');

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
  `category_row_id` int(11) UNSIGNED NOT NULL,
  `product_sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT '0',
  `is_latest` tinyint(1) DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `deletion_status` int(11) NOT NULL DEFAULT '0',
  `product_short_description` text COLLATE utf8_unicode_ci,
  `product_long_description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_row_id`, `product_name`, `product_name_url`, `product_price`, `product_height`, `product_width`, `product_weight`, `category_row_id`, `product_sku`, `product_image`, `is_featured`, `is_latest`, `parent_id`, `deletion_status`, `product_short_description`, `product_long_description`, `created_at`, `updated_at`) VALUES
(1, 'Asus Laptop', '', 35000.00, '20', '14', '', 56, 'NMS15601', 'Laptop.jpg', 1, 1, 1, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your. A buyer persona is an imaginary customer. It is the person for whom you’ve developed your', '2017-11-02 09:32:33', '2016-08-09 13:52:54'),
(4, 'Shirt', '', 250.00, '', '', '', 57, 'NMS25706', 'Shirt.jpg', 1, 1, 2, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:28:16', '2016-08-09 13:51:38'),
(5, 'Necklace', '', 70000.00, '', '', '', 67, 'NMS26702', 'Ornaments.jpg', 0, 0, 3, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:26:27', '2016-08-09 13:51:15'),
(6, 'Hero', '', 120000.00, '', '', '', 66, 'NMS26603', 'Bike.jpg', 1, 0, 7, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:26:49', '2017-03-04 23:45:52'),
(10, 'Watch', '', 850.00, '', '', '', 59, 'NMS55907', 'Watch.jpg', 0, 0, 5, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-02 09:34:47', '2016-08-09 14:00:18'),
(12, 'Furniture', '', 8600.00, '', '', '', 69, 'NMS26905', 'Furniture.jpg', 0, 0, 6, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:27:35', '2016-08-09 14:00:58'),
(13, 'Bag', NULL, 500.00, NULL, NULL, NULL, 59, 'NMS55908', 'Bag.jpg', 0, 0, 5, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-02 09:35:19', '2017-08-18 03:41:19'),
(14, 'Refrigerator', NULL, 30000.00, NULL, NULL, NULL, 56, 'NMS15609', 'Refrigerator.jpg', 0, 0, 1, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-02 09:32:40', '2017-08-18 03:44:12'),
(15, 'Pant', NULL, 750.00, NULL, NULL, NULL, 57, 'NMS25710', 'Pant.jpg', 0, 0, 2, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:29:50', '2017-08-18 04:36:06'),
(16, 'Three Pice', NULL, 1800.00, NULL, NULL, NULL, 57, 'NMS25711', 'Three Pice.jpg', 1, 0, 2, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:29:58', '2017-08-18 04:38:56'),
(17, 'Ring', NULL, 5800.00, NULL, NULL, NULL, 67, 'NMS26712', 'Ring.jpg', 1, 0, 3, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:30:14', '2017-08-18 04:49:03'),
(18, 'School Bag', NULL, 500.00, NULL, NULL, NULL, 59, 'NMS25913', 'School Bag.jpg\r\n', 0, 0, 5, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:30:27', '2017-08-18 05:57:26'),
(19, 'Ladies Bag', NULL, 1000.00, NULL, NULL, NULL, 59, 'NMS25914', 'Ladies Bag.jpg', 0, 0, 5, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'Lorem ipsum dolor sit amet, vel sumo tritani ornatus ut, modo temporibus his ex. Vix erant latine luptatum et, eam tollit reformidans an', '2017-11-01 08:35:38', '2017-08-18 06:03:04'),
(20, 'Appace', NULL, 160000.00, NULL, NULL, NULL, 66, 'NMS26615', 'Appace.png', 0, 0, 7, 0, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).\r\nA buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', '2017-11-01 08:35:56', '2017-09-09 17:01:17'),
(21, 'History', NULL, 500.00, NULL, NULL, NULL, 68, 'NMS46816', 'Book.jpg', 1, 0, 4, 0, '\r\nA buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', '\r\nA buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).\r\n\r\nA buyer persona is an imaginary customer. It is the person for whom you’ve developed your product and to whom you’d love to sell it (of course!).', '2017-11-02 06:35:20', '2017-09-10 14:50:41'),
(22, 'Barrons-Gre', NULL, 400.00, NULL, NULL, NULL, 68, 'NMS46817', 'Barrons-6-Gre-Practice-Tests.jpg', 1, 0, 4, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '2017-11-02 06:35:29', '2017-09-10 17:51:41'),
(23, 'Baby Floor Mat', NULL, 980.00, NULL, NULL, NULL, 69, 'NMS26918', 'Ideal-Baby-Floor-Mat.jpg', 1, 0, 6, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '2017-11-01 08:37:02', '2017-09-10 18:05:14'),
(24, 'Gre-Tests', NULL, 243.00, NULL, NULL, NULL, 68, 'NMS46819', 'Cracking-the-GRE-2016-Edition.jpg', 1, 0, 4, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '2017-11-02 06:35:39', '2017-09-10 18:18:22'),
(25, 'Floor Mat', NULL, 750.00, NULL, NULL, NULL, 69, 'NMS26920', 'Floor Mat.jpg', 1, 0, 6, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It haLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It ha', '2017-11-01 08:37:24', '2017-09-10 18:20:29'),
(28, 'Printer 1', NULL, 4500.00, '20', '14', NULL, 56, 'NMS15623', 'Pinter.jpg', 1, 0, 1, 0, NULL, NULL, '2017-11-02 09:32:46', '2017-09-11 15:12:07'),
(29, 'T-Shirt', NULL, 350.00, NULL, NULL, NULL, 57, 'NMS25724', 'T-Shirt.jpg', 0, 0, 2, 0, 'A T-shirt (or t shirt, or tee) is a style of unisex fabric shirt named after the T shape of its body and sleeves. It normally has short sleeves and a round neckline, known as a crew neck, which lacks a collar. T-shirts are generally made of a light, inexpensive fabric and are easy to clean.', 'A T-shirt (or t shirt, or tee) is a style of unisex fabric shirt named after the T shape of its body and sleeves. It normally has short sleeves and a round neckline, known as a crew neck, which lacks a collar. T-shirts are generally made of a light, inexpensive fabric and are easy to clean.\r\n\r\nTypically made of cotton textile in a stockinette or jersey knit, it has a distinctively pliable texture compared to shirts made of woven cloth. Most modern versions have a body made from a continuously woven tube, produced on a circular loom, such that the torso has no side seams. The manufacture of T-shirts has become highly automated and may include cutting fabric with a laser or a water jet.\r\n\r\nThe T-shirt evolved from undergarments used in the 19th century and, in the mid-20th century, transitioned from undergarment to general-use casual clothing.', '2017-11-02 09:35:11', '2017-10-22 17:28:49'),
(31, 'Mobile 1', NULL, 5000.00, '20', '14', NULL, 56, 'NMS15631', 'Mobile.jpg', 1, 0, 1, 1, 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your', 'A buyer persona is an imaginary customer. It is the person for whom you’ve developed your A buyer persona is an imaginary customer. It is the person for whom you’ve developed your', '2017-11-01 17:05:49', '2017-11-01 16:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `sells_products_sku`
--

CREATE TABLE `sells_products_sku` (
  `id` int(11) NOT NULL,
  `product_sku` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sells_products_sku`
--

INSERT INTO `sells_products_sku` (`id`, `product_sku`, `qty`, `order_date`) VALUES
(1, 'NMS15623', 2, '2017-11-02 15:38:05'),
(2, 'NMS15609', 1, '2017-11-02 15:38:05'),
(3, 'NMS15631', 3, '2017-11-02 15:38:05'),
(4, 'NMS46817', 1, '2017-11-02 15:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'M.A.Salam', 'salamcseiu21@gmail.com', '01520102680');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_total_price` decimal(18,2) NOT NULL,
  `order_details` text NOT NULL,
  `order_status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0=Pending,1=Delevered',
  `deletion_status` tinyint(2) DEFAULT '0' COMMENT '1=Deleted',
  `customer_address` text NOT NULL,
  `shiping_address` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_method` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `user_id`, `product_total_price`, `order_details`, `order_status`, `deletion_status`, `customer_address`, `shiping_address`, `created_at`, `updated_at`, `payment_method`) VALUES
(10, 2, '35000.00', '[{"product_row_id":1,"product_name":"Laptop","product_price":35000,"product_qty":1,"product_total_price":35000}]', 0, 0, '{"name":"Md.Abdus Salam","district":"2","upazila":"169","address":"sdfsaf","email":"salam@gmail.com","phone":"091222"}', '{"name":"Noyon Miah","district":"7","upazila":"126","address":"sdfsad"}', '2017-10-26 20:04:37', '2017-10-26 20:04:37', '{"payment_method":"bKash","txr_id":"1234567890","payment_id":"1"}'),
(11, 2, '241800.00', '[{"product_row_id":1,"product_name":"Laptop","product_price":35000,"product_qty":1,"product_total_price":35000},{"product_row_id":6,"product_name":"Hero","product_price":120000,"product_qty":2,"product_total_price":240000},{"product_row_id":16,"product_name":"Three Pice","product_price":1800,"product_qty":1,"product_total_price":1800}]', 0, 0, '{"name":"Salam Khan","district":"10","upazila":"205","address":"fsdf","email":"salam@gmail.com","phone":"83495"}', '{"name":"Noyon Miah","district":"3","upazila":"275","address":"sdfas"}', '2017-10-26 20:07:02', '2017-10-26 20:07:02', '{"payment_method":"Cash on Delivery","payment_id":"2"}'),
(12, 2, '1400.00', '[{"product_row_id":1,"product_name":"Laptop","product_price":35000,"product_qty":1,"product_total_price":35000},{"product_row_id":6,"product_name":"Hero","product_price":120000,"product_qty":2,"product_total_price":240000},{"product_row_id":16,"product_name":"Three Pice","product_price":1800,"product_qty":1,"product_total_price":1800},{"product_row_id":22,"product_name":"Barrons-Gre","product_price":400,"product_qty":1,"product_total_price":400},{"product_row_id":19,"product_name":"Ladies Bag","product_price":1000,"product_qty":1,"product_total_price":1000}]', 0, 0, '{"name":"Md.Dulal Hossain","district":"5","upazila":"404","address":"asfdsa","email":"dulal@gmail.com","phone":"09877"}', '{"name":"Noyon Miah","district":"3","upazila":"281","address":"afsas"}', '2017-10-26 20:08:58', '2017-10-26 20:08:58', '{"payment_method":"Credit Card","payment_id":"3","card_no":"09876","card_name":"DBBL","cw":"UYTR","exp_month":null,"exp_year":null}'),
(13, 2, '9749.00', '[{"product_row_id":1,"product_name":"Laptop","product_price":35000,"product_qty":1,"product_total_price":35000},{"product_row_id":6,"product_name":"Hero","product_price":120000,"product_qty":2,"product_total_price":240000},{"product_row_id":16,"product_name":"Three Pice","product_price":1800,"product_qty":1,"product_total_price":1800},{"product_row_id":22,"product_name":"Barrons-Gre","product_price":400,"product_qty":2,"product_total_price":800},{"product_row_id":19,"product_name":"Ladies Bag","product_price":1000,"product_qty":1,"product_total_price":1000},{"product_row_id":11,"product_name":"Mobile","product_price":8999,"product_qty":1,"product_total_price":8999},{"product_row_id":15,"product_name":"Pant","product_price":750,"product_qty":1,"product_total_price":750}]', 0, 0, '{"name":"Md.Abdus Salam CSE","district":"62","upazila":"153","address":"fsad","email":"salamcseiu21@gmail.com","phone":"0917852"}', '{"name":"Noyon Miah","district":"11","upazila":"43","address":"fsda"}', '2017-10-26 20:34:35', '2017-10-26 20:34:35', '{"payment_method":"Credit Card","payment_id":"3","card_no":"9876","card_name":"IBL","cw":"ASDFGHJ","exp_month":"02","exp_year":"2022"}'),
(14, 2, '8999.00', '[{"product_row_id":11,"product_name":"Mobile","product_price":8999,"product_qty":1,"product_total_price":8999}]', 0, 0, '{"name":"Salam sfasd","district":"10","upazila":"205","address":"fadsf","email":"salam@gmail.com","phone":"09876543"}', '{"name":"Noyon Miah","district":"6","upazila":"94","address":"sdfasd"}', '2017-10-26 21:21:07', '2017-10-26 21:21:07', '{"payment_method":"bKash","txr_id":"6656FA","payment_id":"1"}'),
(15, 5, '30000.00', '[{"product_row_id":14,"product_name":"Refrigerator","product_price":30000,"product_qty":1,"product_total_price":30000}]', 0, 0, '{"name":"Milon miha ksjfkas","district":"11","upazila":"42","address":"safas","email":"milon@gmail.com","phone":"48358"}', '{"name":"Noyon Miah","district":"3","upazila":"275","address":"fsa"}', '2017-10-29 22:13:10', '2017-10-29 22:13:10', '{"payment_method":"Cash on Delivery","payment_id":"2"}'),
(16, 6, '30000.00', '[{"product_row_id":14,"product_name":"Refrigerator","product_price":30000,"product_qty":1,"product_total_price":30000}]', 0, 0, '{"name":" ","district":null,"upazila":null,"address":null,"email":null,"phone":null}', '{"name":"Noyon Miah","district":"Seelct district","upazila":"Seelct Upazilla","address":null}', '2017-10-31 14:54:36', '2017-10-31 14:54:36', '');

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
  `updated_at` datetime DEFAULT NULL,
  `order_status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0=Pending,1=Submited'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_orders`
--

INSERT INTO `temp_orders` (`temp_order_row_id`, `product_row_id`, `tracking_number`, `product_price`, `product_qty`, `product_total_price`, `created_at`, `updated_at`, `order_status`) VALUES
(1, 11, 'BGYrvQWEphBRE2YNMqOU0EPsO177u5UIWft1PmgC', 343.00, 1, 343.00, '2017-10-07 14:23:27', NULL, 1),
(2, 22, '3A7Jxqd06lKxvG6frB7fn1TMoDVreq1MGcYIkc7C', 400.00, 1, 400.00, '2017-10-17 13:31:55', NULL, 1),
(3, 14, '3A7Jxqd06lKxvG6frB7fn1TMoDVreq1MGcYIkc7C', 6000.00, 1, 6000.00, '2017-10-17 14:44:31', NULL, 0),
(4, 11, 'G3FIJGFStCqLIKzj9FljDHLCZ3E0jWhPdEqOxJSn', 343.00, 2, 686.00, '2017-10-19 13:42:20', NULL, 1),
(5, 10, 'G3FIJGFStCqLIKzj9FljDHLCZ3E0jWhPdEqOxJSn', 34543.00, 2, 69086.00, '2017-10-19 13:42:35', NULL, 1),
(6, 17, 'YwnTH3bwcEf1nWpIuxJR74QHBv43947U5eM7tuAd', 5800.00, 1, 5800.00, '2017-10-20 04:41:36', NULL, 0),
(7, 14, 'vT2r922XrA4PZ0WODt6Tem2Y8e6DrCMK6jIZlM1V', 6000.00, 1, 6000.00, '2017-10-20 06:01:22', NULL, 1),
(8, 18, 'vT2r922XrA4PZ0WODt6Tem2Y8e6DrCMK6jIZlM1V', 500.00, 1, 500.00, '2017-10-20 06:01:30', NULL, 1),
(9, 27, 'vT2r922XrA4PZ0WODt6Tem2Y8e6DrCMK6jIZlM1V', 4567.00, 2, 9134.00, '2017-10-20 06:08:40', NULL, 0),
(10, 25, 'vT2r922XrA4PZ0WODt6Tem2Y8e6DrCMK6jIZlM1V', 5432.00, 1, 5432.00, '2017-10-20 06:08:46', NULL, 0),
(11, 17, 'vT2r922XrA4PZ0WODt6Tem2Y8e6DrCMK6jIZlM1V', 5800.00, 1, 5800.00, '2017-10-20 06:08:54', NULL, 0),
(12, 11, 'avzR9UzB5gjUQTmpz7uquCGtYhtr9rtTN3z2Rwvc', 343.00, 1, 343.00, '2017-10-20 06:20:29', NULL, 0),
(13, 5, 'avzR9UzB5gjUQTmpz7uquCGtYhtr9rtTN3z2Rwvc', 900.00, 1, 900.00, '2017-10-20 06:20:48', NULL, 0),
(14, 11, 'WGXhkiuJhEnwKvopnDt6AnxzivhI7WdVIELxIiSO', 343.00, 1, 343.00, '2017-10-20 08:44:51', NULL, 1),
(15, 17, 'Wor5GlWHnLq51tacQRV4BN0Zer1KMyxZR11miX4B', 5800.00, 1, 5800.00, '2017-10-20 09:25:10', NULL, 1),
(16, 18, 'Wor5GlWHnLq51tacQRV4BN0Zer1KMyxZR11miX4B', 500.00, 3, 1500.00, '2017-10-20 09:25:31', NULL, 1),
(17, 21, 'xTUcWclEJkhyWzStDJhks7uPPibeCQBA9idIeuxZ', 500.00, 1, 500.00, '2017-10-20 09:30:54', NULL, 1),
(18, 1, 'xTUcWclEJkhyWzStDJhks7uPPibeCQBA9idIeuxZ', 500.00, 1, 500.00, '2017-10-20 09:31:03', NULL, 1),
(19, 23, 'xTUcWclEJkhyWzStDJhks7uPPibeCQBA9idIeuxZ', 40000.00, 1, 40000.00, '2017-10-20 09:33:21', NULL, 0),
(20, 27, 'W1G6RKtUUnO9GJgmUqWpJ2nVGa9rJc8ntPmppeJP', 4567.00, 3, 13701.00, '2017-10-20 10:57:06', NULL, 1),
(31, 14, 'gFffGBrwntmb957F0d1mZ9G1xFnhEMZEC0yrr5It', 6000.00, 7, 42000.00, '2017-10-20 14:44:15', NULL, 0),
(32, 10, 'gFffGBrwntmb957F0d1mZ9G1xFnhEMZEC0yrr5It', 34543.00, 3, 103629.00, '2017-10-20 14:54:11', NULL, 0),
(33, 11, 'KNLiOtQ2HHFRYI0G7nrvdwSrjjE1YSZPh4LunlFV', 343.00, 1, 343.00, '2017-10-20 15:18:55', NULL, 0),
(34, 11, 'TLBu1FuLew1CVJVL4nfYEBh1aJsIpuG5GXZkgflp', 343.00, 2, 686.00, '2017-10-20 15:45:26', NULL, 0),
(35, 23, 'TLBu1FuLew1CVJVL4nfYEBh1aJsIpuG5GXZkgflp', 40000.00, 1, 40000.00, '2017-10-20 15:45:53', NULL, 0),
(36, 27, 'EQfKNhFIJdnmgt15e2Qbq4X7EG1BgYQps4r3q0bk', 4567.00, 1, 4567.00, '2017-10-20 15:49:47', NULL, 0),
(37, 11, 'EQfKNhFIJdnmgt15e2Qbq4X7EG1BgYQps4r3q0bk', 343.00, 3, 1029.00, '2017-10-20 16:07:09', NULL, 0),
(38, 10, 'EQfKNhFIJdnmgt15e2Qbq4X7EG1BgYQps4r3q0bk', 34543.00, 1, 34543.00, '2017-10-20 16:26:05', NULL, 0),
(39, 14, 'SLOJalnyfCXaxsSIYUHVqxamLg8NTVdhyBvzLySV', 6000.00, 1, 6000.00, '2017-10-20 17:38:41', NULL, 0),
(40, 5, 'SLOJalnyfCXaxsSIYUHVqxamLg8NTVdhyBvzLySV', 900.00, 1, 900.00, '2017-10-20 17:43:01', NULL, 0),
(41, 11, 'spFDyM9iVxP1rURLUjZJHOaFlW2f6mArBP3PcMJY', 343.00, 1, 343.00, '2017-10-21 14:55:45', NULL, 0),
(42, 26, 'spFDyM9iVxP1rURLUjZJHOaFlW2f6mArBP3PcMJY', 9000.00, 1, 9000.00, '2017-10-21 16:01:29', NULL, 0),
(43, 26, 'h125Op5fAdge6jpbsbduSaNcwDrAUZIZghh3IeXy', 9000.00, 2, 18000.00, '2017-10-21 16:15:42', NULL, 1),
(44, 6, 'h125Op5fAdge6jpbsbduSaNcwDrAUZIZghh3IeXy', 1200.00, 1, 1200.00, '2017-10-21 16:15:56', NULL, 1),
(45, 14, 'h125Op5fAdge6jpbsbduSaNcwDrAUZIZghh3IeXy', 6000.00, 1, 6000.00, '2017-10-21 16:30:08', NULL, 0),
(47, 17, 'r30yVCZz58yLP9BwGFxJAXecnVbMppRyxxNyyDmV', 5800.00, 2, 11600.00, '2017-10-22 15:40:19', NULL, 0),
(48, 27, 'r30yVCZz58yLP9BwGFxJAXecnVbMppRyxxNyyDmV', 4500.00, 2, 9000.00, '2017-10-22 17:01:22', NULL, 0),
(49, 14, 'pCHScwzB7Dlh0T0iFnivozh1SPOl1SyZRswET3KV', 30000.00, 2, 60000.00, '2017-10-23 18:05:52', NULL, 0),
(50, 11, 'lLWEzrszPOLURcO8KQVQXEYqh4sIrNXjmKCNrhHQ', 8999.00, 2, 17998.00, '2017-10-23 18:06:55', NULL, 1),
(51, 6, 'lLWEzrszPOLURcO8KQVQXEYqh4sIrNXjmKCNrhHQ', 120000.00, 1, 120000.00, '2017-10-23 18:07:06', NULL, 1),
(52, 17, 'lLWEzrszPOLURcO8KQVQXEYqh4sIrNXjmKCNrhHQ', 5800.00, 3, 17400.00, '2017-10-23 18:07:17', NULL, 1),
(53, 11, 'AKmNANfM7qfagZVCtvyCHeyr59BorTBK6zi0BWAj', 8999.00, 1, 8999.00, '2017-10-23 18:25:47', NULL, 1),
(54, 18, 'AKmNANfM7qfagZVCtvyCHeyr59BorTBK6zi0BWAj', 500.00, 1, 500.00, '2017-10-23 18:25:57', NULL, 1),
(55, 29, 'AKmNANfM7qfagZVCtvyCHeyr59BorTBK6zi0BWAj', 350.00, 1, 350.00, '2017-10-23 18:26:09', NULL, 1),
(56, 17, 'AKmNANfM7qfagZVCtvyCHeyr59BorTBK6zi0BWAj', 5800.00, 2, 11600.00, '2017-10-23 18:26:37', NULL, 1),
(57, 1, 'GiNidiwrdLBZx70syUy2B6LJjTUEk9OsxTa7jfPs', 35000.00, 1, 35000.00, '2017-10-25 16:03:59', NULL, 0),
(58, 6, 'GiNidiwrdLBZx70syUy2B6LJjTUEk9OsxTa7jfPs', 120000.00, 2, 240000.00, '2017-10-25 16:04:11', NULL, 0),
(59, 14, 'cHvZMfePDGQDc9dxFEYynraYMuhsLlxrQ65bJjJy', 30000.00, 1, 30000.00, '2017-10-25 16:47:17', NULL, 1),
(60, 11, 'TMXjHRyQXYZuWLTeGOaR7VSrxlb3qjeiOqiMaXE5', 8999.00, 3, 26997.00, '2017-10-25 16:54:40', NULL, 1),
(61, 27, 'TMXjHRyQXYZuWLTeGOaR7VSrxlb3qjeiOqiMaXE5', 4500.00, 1, 4500.00, '2017-10-25 16:58:30', NULL, 0),
(62, 14, 'FDJIUvZ7uraNPrYvROSjMrC9vdlRCq5yV1GHMmYY', 30000.00, 1, 30000.00, '2017-10-25 16:58:48', NULL, 1),
(63, 28, 'HAK5DOqAc2yRNY8rleJDNxUQaLPH4NeTgmstzMOu', 4500.00, 1, 4500.00, '2017-10-25 17:00:28', NULL, 1),
(64, 6, 'qxFCFBjToIwZNi0lwEpjJ3Hty1RATbWOk8o0RYCJ', 120000.00, 1, 120000.00, '2017-10-25 17:01:48', NULL, 1),
(65, 11, 'PFrAu4nLASCUugfcWVIWDYKAbF7XsXza1Nvz7lRm', 8999.00, 4, 35996.00, '2017-10-25 17:09:43', NULL, 1),
(66, 19, 'PFrAu4nLASCUugfcWVIWDYKAbF7XsXza1Nvz7lRm', 1000.00, 1, 1000.00, '2017-10-25 17:09:54', NULL, 1),
(67, 14, 'PFrAu4nLASCUugfcWVIWDYKAbF7XsXza1Nvz7lRm', 30000.00, 1, 30000.00, '2017-10-25 17:23:01', NULL, 1),
(68, 14, 'mfP1FSlKVNkJwI2eZOmWMc1s63dx7OXeAihE3onQ', 30000.00, 1, 30000.00, '2017-10-26 01:16:42', NULL, 0),
(69, 14, 'Pia9kfgaSsWR97WHqCjZujM3AJAgxGbLelE6iC1K', 30000.00, 1, 30000.00, '2017-10-26 01:19:43', NULL, 0),
(70, 14, '9RcV2jkkRmXa1U7WXtZ8K5ELgkcC7m5MePyeh4j7', 30000.00, 2, 60000.00, '2017-10-26 01:24:35', NULL, 0),
(72, 26, 'g3ABbxTNXkfuo08Hk3w5tcrUjyeF8oND9FW2c9tR', 9000.00, 3, 27000.00, '2017-10-26 02:03:57', NULL, 0),
(73, 16, 'g3ABbxTNXkfuo08Hk3w5tcrUjyeF8oND9FW2c9tR', 1800.00, 1, 1800.00, '2017-10-26 02:05:13', NULL, 0),
(74, 4, 'bLFigoLGyJKH3QpI8wclAizm9SKFbAH0V7oBO01b', 250.00, 2, 500.00, '2017-10-26 02:07:56', NULL, 0),
(75, 1, 'X4fQl1XGEdu1NO2UC64QG2egex2JXe9l2jMoY4d6', 35000.00, 1, 35000.00, '2017-10-26 14:03:46', NULL, 1),
(76, 6, 'X4fQl1XGEdu1NO2UC64QG2egex2JXe9l2jMoY4d6', 120000.00, 2, 240000.00, '2017-10-26 14:05:51', NULL, 1),
(77, 16, 'X4fQl1XGEdu1NO2UC64QG2egex2JXe9l2jMoY4d6', 1800.00, 1, 1800.00, '2017-10-26 14:06:17', NULL, 1),
(78, 22, 'X4fQl1XGEdu1NO2UC64QG2egex2JXe9l2jMoY4d6', 400.00, 2, 800.00, '2017-10-26 14:07:22', NULL, 1),
(79, 19, 'X4fQl1XGEdu1NO2UC64QG2egex2JXe9l2jMoY4d6', 1000.00, 1, 1000.00, '2017-10-26 14:07:30', NULL, 1),
(80, 11, 'X4fQl1XGEdu1NO2UC64QG2egex2JXe9l2jMoY4d6', 8999.00, 5, 44995.00, '2017-10-26 14:33:08', NULL, 1),
(81, 15, 'X4fQl1XGEdu1NO2UC64QG2egex2JXe9l2jMoY4d6', 750.00, 1, 750.00, '2017-10-26 14:33:18', NULL, 1),
(82, 11, 'XOI7IQ1rEZLmjIkPR57V8xQm5TKTRiDTWNtbrzsm', 8999.00, 1, 8999.00, '2017-10-26 15:19:30', NULL, 1),
(83, 14, 'z6V0MAnU43Ccq6iQbPeZKYyUcAIhsCp0BO007AyT', 30000.00, 1, 30000.00, '2017-10-29 16:12:03', NULL, 1),
(84, 28, 'wC9h0AgjuYp9Bj1ibDU0bCmKNmKCB6xC4yl9zKmH', 4500.00, 1, 4500.00, '2017-10-31 06:12:01', NULL, 0),
(85, 11, 'sIqJPFmAbWvdV5yTSkAfy0s6dUAp0AMzLYXlBzyv', 8999.00, 1, 8999.00, '2017-10-31 06:16:30', NULL, 0),
(86, 1, 'OI24cBwj2fxJk6p5FSaBkQkChHN3X1PBK71kauLI', 35000.00, 1, 35000.00, '2017-10-31 06:32:54', NULL, 0),
(87, 5, 'OI24cBwj2fxJk6p5FSaBkQkChHN3X1PBK71kauLI', 70000.00, 1, 70000.00, '2017-10-31 06:36:41', NULL, 0),
(88, 26, 'w2X2vCR3hWzuwlv1WDTxEOnOks9kCeVqeSpjBiSA', 9000.00, 1, 9000.00, '2017-10-31 06:40:01', NULL, 0),
(89, 14, 'cTd8RZamiA7MQ3wH42ikS5fXIdMvl41EZjPbizzx', 30000.00, 1, 30000.00, '2017-10-31 06:47:26', NULL, 0),
(90, 11, 'tCU4p4iNlgXFzmnwdBvZMML2wMvfA3kKijPf9Pjo', 8999.00, 1, 8999.00, '2017-10-31 07:34:27', NULL, 0),
(91, 22, 'kojsUYtixHukmZaoLt9U2QNRaIaKv9IR2Gda2bI3', 400.00, 2, 800.00, '2017-10-31 08:20:43', NULL, 0),
(92, 14, '4Ug503XAc56mGPL98AOzFMlYYhw1rA8rK1o00fKU', 30000.00, 1, 30000.00, '2017-10-31 08:31:19', NULL, 1),
(93, 22, 'Th5yHNd7LnskFIqsMWM6tcAFfDP8I3knUzDEixgC', 400.00, 1, 400.00, '2017-10-31 09:06:15', NULL, 0),
(94, 17, 'yX86O5tLRt4I8uDJfc1HRtmF75lMorX2nU8DZ3TI', 5800.00, 1, 5800.00, '2017-10-31 09:12:49', NULL, 1),
(95, 11, '4oh67W5dXqGti7rlD81M9hTYpgxiYNEK2IHT1HAC', 8999.00, 1, 8999.00, '2017-10-31 09:18:26', NULL, 0),
(96, 11, '3MvoPMDFSKTz8HEcffvIIt7qxfrtPJm6SxwdjWrt', 8999.00, 2, 17998.00, '2017-10-31 09:28:33', NULL, 1),
(97, 21, '3MvoPMDFSKTz8HEcffvIIt7qxfrtPJm6SxwdjWrt', 500.00, 2, 1000.00, '2017-10-31 09:33:09', NULL, 1),
(98, 14, '3MvoPMDFSKTz8HEcffvIIt7qxfrtPJm6SxwdjWrt', 30000.00, 2, 60000.00, '2017-10-31 09:33:16', NULL, 1),
(99, 13, '3MvoPMDFSKTz8HEcffvIIt7qxfrtPJm6SxwdjWrt', 500.00, 1, 500.00, '2017-10-31 09:33:24', NULL, 1),
(100, 14, '3i5wJxWENsfgqHVmwVZAobZDOLNr0AC2ytTjmHvL', 30000.00, 1, 30000.00, '2017-10-31 09:58:51', NULL, 0),
(101, 28, 'uPIhlCZc5Fko88tX2EwLcVKUSmk3hH3g7mwWj1X9', 4500.00, 1, 4500.00, '2017-10-31 10:05:30', NULL, 0),
(102, 14, 'uT67ggG4wOv6jpznACdBxpLck9XxO35eUDJUCj6E', 30000.00, 1, 30000.00, '2017-10-31 10:33:45', NULL, 0),
(103, 27, '4gU60XwwZxRPPSIuYtFf2JxKjt8kP6K89oIA9aw9', 4500.00, 2, 9000.00, '2017-10-31 10:38:09', NULL, 0),
(104, 14, 'wTtFVg1Apb4t2CRLyn3mxy2CNory5o0z4D67Vthm', 30000.00, 1, 30000.00, '2017-10-31 10:38:26', NULL, 0),
(105, 1, 'jZh8jL3U0AmE1znFzN706BXMMbxrgTXorf3NpzEg', 35000.00, 1, 35000.00, '2017-10-31 10:39:41', NULL, 1),
(106, 23, 'jZh8jL3U0AmE1znFzN706BXMMbxrgTXorf3NpzEg', 980.00, 1, 980.00, '2017-10-31 10:40:12', NULL, 1),
(107, 14, 'Stptu3acMQcXo0arIoSaV5jkbxbppDnzFfa5U239', 30000.00, 1, 30000.00, '2017-11-01 08:51:32', NULL, 0),
(108, 22, 'Ylg4fUanRC85UPsqNyEPBKkeZJJfHIL3KrDosTLR', 400.00, 1, 400.00, '2017-11-02 04:41:15', NULL, 1),
(109, 24, 'vmxwaUmDGgtNNFl1jMAvLDqwb4MgvVIPzbE4tLwq', 243.00, 2, 486.00, '2017-11-02 06:13:32', NULL, 1),
(110, 4, 'vmxwaUmDGgtNNFl1jMAvLDqwb4MgvVIPzbE4tLwq', 250.00, 2, 500.00, '2017-11-02 06:17:06', NULL, 1),
(111, 17, 'vmxwaUmDGgtNNFl1jMAvLDqwb4MgvVIPzbE4tLwq', 5800.00, 1, 5800.00, '2017-11-02 06:29:05', NULL, 1),
(112, 14, 'vmxwaUmDGgtNNFl1jMAvLDqwb4MgvVIPzbE4tLwq', 30000.00, 1, 30000.00, '2017-11-02 06:29:13', NULL, 1),
(113, 1, 'vmxwaUmDGgtNNFl1jMAvLDqwb4MgvVIPzbE4tLwq', 35000.00, 2, 70000.00, '2017-11-02 06:32:01', NULL, 1),
(114, 28, 'MnNylTuQfXVxI2R0cBndUfRPa3aMyuPJKEmoOYPa', 4500.00, 2, 9000.00, '2017-11-02 09:37:14', NULL, 1),
(115, 14, 'MnNylTuQfXVxI2R0cBndUfRPa3aMyuPJKEmoOYPa', 30000.00, 1, 30000.00, '2017-11-02 09:37:23', NULL, 1),
(116, 31, 'MnNylTuQfXVxI2R0cBndUfRPa3aMyuPJKEmoOYPa', 5000.00, 3, 15000.00, '2017-11-02 09:37:40', NULL, 1),
(117, 22, 'bmyaAp4mxjd3uxDXyzVUITzaJ5M1pq4fK7sbk2YJ', 400.00, 1, 400.00, '2017-11-02 09:40:33', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `full_name`, `short_name`, `code`, `district_id`, `createdAt`, `updatedAt`) VALUES
(1, 'DCC North', '01', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(2, 'DCC South', '02', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(3, 'Dhamrai', '03', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(4, 'Dohar', '04', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(5, 'Keraniganj', '05', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(6, 'Nawabganj', '06', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(7, 'Savar', '07', 200, 1, '2014-10-17 04:15:47', '2014-10-17 04:15:47'),
(8, 'Gazipur Sadar', '01', 18, 9, '2014-10-17 06:00:43', '2014-10-17 06:00:43'),
(12, 'Kaliakair', '02', 200, 9, '2014-10-27 21:48:37', '2014-10-27 21:48:37'),
(13, 'Kaliganj', '03', 200, 9, '2014-10-27 21:49:39', '2014-10-27 21:49:39'),
(14, 'Kapasia', '04', 200, 9, '2014-10-27 21:50:06', '2014-10-27 21:50:06'),
(15, 'Sreepur', '05', 200, 9, '2014-10-27 21:50:48', '2014-10-27 21:50:48'),
(16, 'Tangail Sadar', '06', 200, 12, '2014-10-27 21:52:01', '2014-10-27 21:52:01'),
(17, 'Gopalpur', '07', 200, 12, '2014-10-27 21:52:30', '2014-10-27 21:52:30'),
(18, 'Basail', '08', 200, 12, '2014-10-27 21:53:02', '2014-10-27 21:53:02'),
(19, 'Basail', '09', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Bhuapur', '10', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Delduar', '11', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Ghatail', '12', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Kalihati', '13', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Madhupur', '14', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Mirzapur', '15', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Nagarpur', '16', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Sakhipur', '17', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Dhanbari', '18', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Astagram', '25', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Bajitpur', '26', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Bhairab', '27', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Hossainpur', '28', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Itna', '29', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Karimganj', '30', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Katiadi', '31', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Kishoreganj Sadar', '33', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Kuliarchar', '34', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Mithamain', '35', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Nikli', '36', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Pakundia', '37', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Tarail', '38', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Araihazar', '01', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Bandar', '02', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Narayanganj Sadar', '03', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Rupganj', '04', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Sonargaon', '05', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Fatullah', '06', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Siddhirganj', '07', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Daulatpur', '14', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Ghior', '09', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Harirampur', '10', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Manikgonj Sadar', '11', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Saturia', '12', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Shivalaya', '13', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Singair', '08', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Narsingdi Sadar', '15', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Belabo', '16', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Monohardi', '17', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Palash', '18', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Raipura', '19', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Shibpur', '20', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Gazaria', '21', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Lohajang', '22', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Munshiganj Sadar', '23', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Sirajdikhan', '24', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Sreenagar', '25', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Tongibari', '26', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Ajmiriganj', '01', 1, 56, '2014-10-28 15:21:56', '2014-10-28 15:21:56'),
(69, 'Bahubal', '02', 200, 56, '2014-10-28 15:24:32', '2014-10-28 15:24:32'),
(70, 'Baniyachong', '03', 200, 56, '2014-10-28 15:25:21', '2014-10-28 15:25:21'),
(71, 'Chunarughat', '04', 200, 56, '2014-10-28 15:25:58', '2014-10-28 15:25:58'),
(72, 'Habiganj Sadar', '05', 200, 56, '2014-10-28 15:26:31', '2014-10-28 15:26:31'),
(73, 'Lakhai', '06', 200, 56, '2014-10-28 15:27:07', '2014-10-28 15:27:07'),
(74, 'Madhabpur', '07', 200, 56, '2014-10-28 15:27:40', '2014-10-28 15:27:40'),
(75, 'Nabiganj', '08', 200, 56, '2014-10-28 15:28:23', '2014-10-28 15:28:23'),
(76, 'Barlekha', '09', 200, 55, '2014-10-28 15:29:09', '2014-10-28 15:29:09'),
(77, 'Kamalganj', '10', 200, 55, '2014-10-28 15:29:59', '2014-10-28 15:29:59'),
(78, 'Kulaura', '11', 200, 55, '2014-10-28 15:30:30', '2014-10-28 15:30:30'),
(79, 'Moulvibazar Sadar', '12', 200, 55, '2014-10-28 15:31:01', '2014-10-28 15:31:01'),
(80, 'Rajnagar', '13', 200, 55, '2014-10-28 15:31:40', '2014-10-28 15:31:40'),
(81, 'Sreemangal', '14', 200, 55, '2014-10-28 15:35:51', '2014-10-28 15:35:51'),
(82, 'Juri', '15', 200, 55, '2014-10-28 15:36:21', '2014-10-28 15:36:21'),
(83, 'Bishwamvarpur', '16', 200, 57, '2014-10-28 15:38:01', '2014-10-28 15:38:01'),
(84, 'Chhatak', '17', 200, 57, '2014-10-28 15:38:42', '2014-10-28 15:38:42'),
(85, 'Derai', '18', 200, 57, '2014-10-28 15:39:17', '2014-10-28 15:39:17'),
(86, 'Dharampasha', '19', 200, 57, '2014-10-28 15:39:52', '2014-10-28 15:39:52'),
(87, 'Dowarabazar', '20', 200, 57, '2014-10-28 15:40:25', '2014-10-28 15:40:25'),
(88, 'Jagannathpur', '21', 200, 57, '2014-10-28 15:41:07', '2014-10-28 15:41:07'),
(89, 'Jamalganj', '22', 200, 57, '2014-10-28 15:43:05', '2014-10-28 15:43:05'),
(90, 'Sullah', '23', 200, 57, '2014-10-28 15:44:07', '2014-10-28 15:44:07'),
(91, 'Sunamganj	Sadar', '24', 200, 57, '2014-10-28 15:45:59', '2014-10-28 15:45:59'),
(92, 'Tahirpur', '25', 200, 57, '2014-10-28 15:46:38', '2014-10-28 15:46:38'),
(93, 'South Sunamganj', '26', 200, 57, '2014-10-28 15:47:28', '2014-10-28 15:47:28'),
(94, 'Balaganj', '27', 200, 6, '2014-10-28 15:48:54', '2014-10-28 15:48:54'),
(95, 'Beanibazar', '28', 200, 6, '2014-10-28 15:49:42', '2014-10-28 15:49:42'),
(96, 'Bishwanath', '29', 200, 6, '2014-10-28 15:50:10', '2014-10-28 15:50:10'),
(97, 'Companigonj', '30', 200, 6, '2014-10-28 15:50:46', '2014-10-28 15:50:46'),
(98, 'Fenchuganj', '31', 200, 6, '2014-10-28 15:51:11', '2014-10-28 15:51:11'),
(99, 'Golapganj', '32', 200, 6, '2014-10-28 15:51:51', '2014-10-28 15:51:51'),
(100, 'Gowainghat', '33', 200, 6, '2014-10-28 15:52:55', '2014-10-28 15:52:55'),
(101, 'Jaintiapur', '34', 200, 6, '2014-10-28 15:53:31', '2014-10-28 15:53:31'),
(102, 'Kanaighat', '35', 200, 6, '2014-10-28 15:54:04', '2014-10-28 15:54:04'),
(103, 'Sylhet Sadar', '36', 200, 6, '2014-10-28 15:54:48', '2014-10-28 15:54:48'),
(104, 'Zakiganj', '37', 200, 6, '2014-10-28 15:55:15', '2014-10-28 15:55:15'),
(105, 'South Shurma', '38', 200, 6, '2014-10-28 15:55:45', '2014-10-28 15:55:45'),
(106, 'Birampur', '01', 9, 58, '2014-10-28 16:05:32', '2014-10-28 16:05:32'),
(107, 'Birganj', '02', 9, 58, '2014-10-28 16:06:19', '2014-10-28 16:06:19'),
(108, 'Biral', '03', 9, 58, '2014-10-28 16:06:50', '2014-10-28 16:06:50'),
(109, 'Bochaganj', '04', 9, 58, '2014-10-28 16:07:26', '2014-10-28 16:07:26'),
(110, 'Chirirbandar', '05', 9, 58, '2014-10-28 16:08:44', '2014-10-28 16:08:44'),
(111, 'Phulbari', '06', 9, 58, '2014-10-28 16:12:01', '2014-10-28 16:12:01'),
(112, 'Ghoraghat', '07', 9, 58, '2014-10-28 16:12:39', '2014-10-28 16:12:39'),
(113, 'Hakimpur', '08', 900, 58, '2014-10-28 16:13:34', '2014-10-28 16:13:34'),
(114, 'Kaharole', '09', 900, 58, '2014-10-28 16:14:08', '2014-10-28 16:14:08'),
(115, 'Khansama', '10', 900, 58, '2014-10-28 16:14:38', '2014-10-28 16:14:38'),
(116, 'Dinajpur Sadar', '11', 900, 58, '2014-10-28 16:15:11', '2014-10-28 16:15:11'),
(117, 'Nawabganj', '12', 900, 58, '2014-10-28 16:15:43', '2014-10-28 16:15:43'),
(118, 'Parbatipur', '13', 900, 58, '2014-10-28 16:16:10', '2014-10-28 16:16:10'),
(119, 'Phulchhari', '14', 900, 59, '2014-10-28 16:16:53', '2014-10-28 16:16:53'),
(120, 'Gaibandha Sadar', '15', 900, 59, '2014-10-28 16:17:38', '2014-10-28 16:17:38'),
(121, 'Gobindaganj', '16', 900, 59, '2014-10-28 16:18:23', '2014-10-28 16:18:23'),
(122, 'Palashbari', '17', 900, 59, '2014-10-28 16:19:04', '2014-10-28 16:19:04'),
(123, 'Sadullapur', '18', 900, 59, '2014-10-28 16:19:31', '2014-10-28 16:19:31'),
(124, 'Sughatta', '19', 900, 59, '2014-10-28 16:20:03', '2014-10-28 16:20:03'),
(125, 'Sundarganj', '20', 900, 59, '2014-10-28 16:20:43', '2014-10-28 16:20:43'),
(126, 'Badarganj', '21', 900, 7, '2014-10-28 16:21:27', '2014-10-28 16:21:27'),
(127, 'Gangachhara', '22', 900, 7, '2014-10-28 16:21:56', '2014-10-28 16:21:56'),
(128, 'Kaunia', '23', 900, 7, '2014-10-28 16:22:35', '2014-10-28 16:22:35'),
(129, 'Rangpur Sadar', '24', 900, 7, '2014-10-28 16:23:05', '2014-10-28 16:23:05'),
(130, 'Mithapukur', '25', 900, 7, '2014-10-28 16:23:31', '2014-10-28 16:23:31'),
(131, 'Pirgachha', '26', 900, 7, '2014-10-28 16:23:59', '2014-10-28 16:23:59'),
(132, 'Pirganj', '27', 900, 7, '2014-10-28 16:24:27', '2014-10-28 16:24:27'),
(133, 'Taraganj', '28', 900, 7, '2014-10-28 16:24:53', '2014-10-28 16:24:53'),
(134, 'Baliadangi', '29', 900, 64, '2014-10-28 16:25:31', '2014-10-28 16:25:31'),
(135, 'Haripur', '30', 900, 64, '2014-10-28 16:26:00', '2014-10-28 16:26:00'),
(136, 'Pirganj', '31', 900, 64, '2014-10-28 16:26:29', '2014-10-28 16:26:29'),
(137, 'Ranisankail', '32', 900, 64, '2014-10-28 16:27:04', '2014-10-28 16:27:04'),
(138, 'Thakurgaon Sadar', '33', 900, 64, '2014-10-28 16:27:39', '2014-10-28 16:27:39'),
(139, 'Bhurungamari', '01', 100, 60, '2014-10-28 16:40:52', '2014-10-28 16:40:52'),
(140, 'Char	 Rajibpur', '02', 100, 60, '2014-10-28 16:41:57', '2014-10-28 16:41:57'),
(141, 'Chilmari', '03', 100, 60, '2014-10-28 16:42:33', '2014-10-28 16:42:33'),
(142, 'Phulbari', '04', 100, 60, '2014-10-28 16:43:18', '2014-10-28 16:43:18'),
(143, 'Kurigram	Sadar', '05', 100, 60, '2014-10-28 16:44:02', '2014-10-28 16:44:02'),
(144, 'Nageshwari', '06', 100, 60, '2014-10-28 16:44:37', '2014-10-28 16:44:37'),
(145, 'Rajarhat', '07', 100, 60, '2014-10-28 16:45:20', '2014-10-28 16:45:20'),
(146, 'Raomari', '08', 100, 60, '2014-10-28 16:45:51', '2014-10-28 16:45:51'),
(147, 'Ulipur', '09', 100, 60, '2014-10-28 16:46:25', '2014-10-28 16:46:25'),
(148, 'Aditmari', '10', 100, 61, '2014-10-28 16:47:02', '2014-10-28 16:47:02'),
(149, 'Hatibandha', '11', 100, 61, '2014-10-28 16:47:35', '2014-10-28 16:47:35'),
(150, 'Kaliganj', '12', 100, 61, '2014-10-28 16:48:20', '2014-10-28 16:48:20'),
(151, 'Lalmonirhat Sadar', '13', 100, 61, '2014-10-28 16:48:55', '2014-10-28 16:48:55'),
(152, 'Patgram', '14', 100, 61, '2014-10-28 16:49:26', '2014-10-28 16:49:26'),
(153, 'Dimla', '15', 100, 62, '2014-10-28 16:50:37', '2014-10-28 16:50:37'),
(154, 'Domar', '16', 100, 62, '2014-10-28 16:51:13', '2014-10-28 16:51:13'),
(155, 'Jaldhaka', '17', 100, 62, '2014-10-28 16:51:46', '2014-10-28 16:51:46'),
(156, 'Kishoreganj', '18', 100, 62, '2014-10-28 16:52:31', '2014-10-28 16:52:31'),
(157, 'Nilphamari Sadar', '19', 100, 62, '2014-10-28 16:53:07', '2014-10-28 16:53:07'),
(158, 'Saidpur', '20', 100, 62, '2014-10-28 16:53:36', '2014-10-28 16:53:36'),
(159, 'Atwari', '21', 100, 63, '2014-10-28 16:54:21', '2014-10-28 16:54:21'),
(160, 'Boda', '22', 100, 63, '2014-10-28 16:54:47', '2014-10-28 16:54:47'),
(161, 'Debiganj', '23', 100, 63, '2014-10-28 16:55:28', '2014-10-28 16:55:28'),
(162, 'Panchagarh Sadar', '24', 100, 63, '2014-10-28 16:56:12', '2014-10-28 16:56:12'),
(163, 'Tetulia', '25', 100, 63, '2014-10-28 16:56:40', '2014-10-28 16:56:40'),
(164, 'Bagha', '01', 700, 2, '2014-10-28 17:26:42', '2014-10-28 17:26:42'),
(165, 'Bagmara', '02', 700, 2, '2014-10-28 17:27:18', '2014-10-28 17:27:18'),
(166, 'Charghat', '03', 700, 2, '2014-10-28 17:28:01', '2014-10-28 17:28:01'),
(167, 'Durgapur', '04', 700, 2, '2014-10-28 17:28:31', '2014-10-28 17:28:31'),
(168, 'Godagari', '05', 700, 2, '2014-10-28 17:28:57', '2014-10-28 17:28:57'),
(169, 'Mohanpur', '06', 700, 2, '2014-10-28 17:29:23', '2014-10-28 17:29:23'),
(170, 'Paba', '07', 700, 2, '2014-10-28 17:29:52', '2014-10-28 17:29:52'),
(171, 'Puthia', '08', 700, 2, '2014-10-28 17:30:23', '2014-10-28 17:30:23'),
(172, 'Tanore', '09', 700, 2, '2014-10-28 17:30:50', '2014-10-28 17:30:50'),
(173, 'Boalia', '10', 700, 2, '2014-10-28 17:33:10', '2014-10-28 17:33:10'),
(174, 'Matihar', '11', 700, 2, '2014-10-28 17:33:34', '2014-10-28 17:33:34'),
(175, 'Rajpara', '12', 700, 2, '2014-10-28 17:34:05', '2014-10-28 17:34:05'),
(176, 'Shah Mokdum', '13', 700, 2, '2014-10-28 17:35:00', '2014-10-28 17:35:00'),
(177, 'Akkelpur', '14', 700, 25, '2014-10-28 17:35:41', '2014-10-28 17:35:41'),
(178, 'Joypurhat	Sadar', '15', 700, 25, '2014-10-28 17:36:49', '2014-10-28 17:36:49'),
(179, 'Kalai', '16', 700, 25, '2014-10-28 17:37:43', '2014-10-28 17:37:43'),
(180, 'Khetlal', '17', 200, 25, '2014-10-28 17:38:23', '2014-10-28 17:38:23'),
(181, 'Baksiganj', '01', 200, 14, '2014-10-28 17:38:37', '2014-10-28 17:38:37'),
(182, 'Panchbibi', '18', 700, 25, '2014-10-28 17:39:01', '2014-10-28 17:39:01'),
(183, 'Dewanganj', '02', 200, 14, '2014-10-28 17:39:08', '2014-10-28 17:39:08'),
(184, 'Islampur', '03', 200, 14, '2014-10-28 17:39:50', '2014-10-28 17:39:50'),
(185, 'Atrai', '19', 700, 26, '2014-10-28 17:40:26', '2014-10-28 17:40:26'),
(186, 'Badalgachhi', '20', 700, 26, '2014-10-28 17:41:00', '2014-10-28 17:41:00'),
(187, 'Manda', '21', 700, 26, '2014-10-28 17:41:30', '2014-10-28 17:41:30'),
(188, 'Dhamoirhat', '22', 700, 26, '2014-10-28 17:42:04', '2014-10-28 17:42:04'),
(189, 'Mohadevpur', '23', 700, 26, '2014-10-28 17:42:34', '2014-10-28 17:42:34'),
(190, 'Naogaon	Sadar', '24', 700, 26, '2014-10-28 17:43:04', '2014-10-28 17:43:04'),
(191, 'Niamatpur', '25', 700, 26, '2014-10-28 17:43:37', '2014-10-28 17:43:37'),
(192, 'Patnitala', '26', 700, 26, '2014-10-28 17:44:19', '2014-10-28 17:44:19'),
(193, 'Jamalpur Sadar', '05', 200, 14, '2014-10-28 17:44:27', '2014-10-28 17:44:27'),
(194, 'Porsha', '27', 700, 26, '2014-10-28 17:44:59', '2014-10-28 17:44:59'),
(195, 'Madarganj', '04', 200, 14, '2014-10-28 17:45:17', '2014-10-28 17:45:17'),
(196, 'Raninagar', '28', 700, 26, '2014-10-28 17:45:55', '2014-10-28 17:45:55'),
(197, 'Melandaha', '06', 200, 14, '2014-10-28 17:47:09', '2014-10-28 17:47:09'),
(198, 'Sapahar', '29', 700, 26, '2014-10-28 17:47:17', '2014-10-28 17:47:17'),
(199, 'Sarishabari', '07', 200, 14, '2014-10-28 17:47:36', '2014-10-28 17:47:36'),
(200, 'Bholahat', '30', 700, 28, '2014-10-28 17:48:46', '2014-10-28 17:48:46'),
(201, 'Gomastapur', '31', 700, 28, '2014-10-28 17:49:15', '2014-10-28 17:49:15'),
(202, 'Nachole', '32', 700, 28, '2014-10-28 17:49:43', '2014-10-28 17:49:43'),
(203, 'Nawabganj', '33', 700, 28, '2014-10-28 17:50:10', '2014-10-28 17:50:10'),
(204, 'Shibganj', '34', 700, 28, '2014-10-28 17:50:43', '2014-10-28 17:50:43'),
(205, 'Bhaluka', '08', 200, 10, '2014-10-28 17:50:47', '2014-10-28 17:50:47'),
(206, 'Dhobaura', '09', 200, 10, '2014-10-28 17:51:43', '2014-10-28 17:51:43'),
(207, 'Fulbaria', '10', 200, 10, '2014-10-28 17:52:12', '2014-10-28 17:52:12'),
(208, 'Gaffargaon', '11', 200, 10, '2014-10-28 17:53:14', '2014-10-28 17:53:14'),
(209, 'Gauripur', '12', 200, 10, '2014-10-28 17:54:53', '2014-10-28 17:54:53'),
(210, 'Haluaghat', '13', 200, 10, '2014-10-28 17:55:37', '2014-10-28 17:55:37'),
(211, 'Ishwarganj', '14', 200, 10, '2014-10-28 17:55:59', '2014-10-28 17:55:59'),
(212, 'Mymensingh Sadar', '15', 200, 10, '2014-10-28 17:56:34', '2014-10-28 17:56:34'),
(213, 'Muktagachha', '16', 200, 10, '2014-10-28 17:56:53', '2014-10-28 17:56:53'),
(214, 'Nandail', '17', 200, 10, '2014-10-28 17:57:13', '2014-10-28 17:57:13'),
(215, 'Adamdighi', '01', 800, 24, '2014-10-28 17:58:52', '2014-10-28 17:58:52'),
(216, 'Bogra Sadar', '02', 800, 24, '2014-10-28 17:59:37', '2014-10-28 17:59:37'),
(217, 'Dhunat', '03', 800, 24, '2014-10-28 18:00:06', '2014-10-28 18:00:06'),
(218, 'Phulpur', '18', 200, 10, '2014-10-28 18:00:11', '2014-10-28 18:00:11'),
(219, 'Dhupchanchia', '04', 800, 24, '2014-10-28 18:00:41', '2014-10-28 18:00:41'),
(220, 'Gabtali', '05', 800, 24, '2014-10-28 18:01:10', '2014-10-28 18:01:10'),
(221, 'Trishal', '19', 200, 10, '2014-10-28 18:01:31', '2014-10-28 18:01:31'),
(222, 'Kahaloo', '06', 800, 24, '2014-10-28 18:01:38', '2014-10-28 18:01:38'),
(223, 'Nandigram', '07', 800, 24, '2014-10-28 18:02:04', '2014-10-28 18:02:04'),
(224, 'Tara Khanda', '20', 200, 10, '2014-10-28 18:02:11', '2014-10-28 18:02:11'),
(225, 'Sariakandi', '08', 800, 24, '2014-10-28 18:02:32', '2014-10-28 18:02:32'),
(226, 'Shajahanpur', '09', 800, 24, '2014-10-28 18:03:13', '2014-10-28 18:03:13'),
(227, 'Sherpur', '10', 800, 24, '2014-10-28 18:03:44', '2014-10-28 18:03:44'),
(228, 'Shibganj', '11', 800, 24, '2014-10-28 18:04:19', '2014-10-28 18:04:19'),
(229, 'Sonatola', '12', 800, 24, '2014-10-28 18:04:47', '2014-10-28 18:04:47'),
(230, 'Bagatipara', '13', 800, 27, '2014-10-28 18:05:31', '2014-10-28 18:05:31'),
(231, 'Baraigram', '14', 800, 27, '2014-10-28 18:06:01', '2014-10-28 18:06:01'),
(232, 'Gurudaspur', '15', 800, 27, '2014-10-28 18:06:32', '2014-10-28 18:06:32'),
(233, 'Lalpur', '16', 800, 27, '2014-10-28 18:06:56', '2014-10-28 18:06:56'),
(234, 'Natore Sadar', '17', 800, 27, '2014-10-28 18:07:32', '2014-10-28 18:07:32'),
(235, 'Atpara', '21', 200, 21, '2014-10-28 18:07:40', '2014-10-28 18:07:40'),
(236, 'Singra', '18', 800, 27, '2014-10-28 18:08:04', '2014-10-28 18:08:04'),
(237, 'Naldanga', '19', 800, 27, '2014-10-28 18:08:28', '2014-10-28 18:08:28'),
(238, 'Ataikula', '20', 800, 29, '2014-10-28 18:09:40', '2014-10-28 18:09:40'),
(239, 'Atgharia', '21', 800, 29, '2014-10-28 18:10:06', '2014-10-28 18:10:06'),
(240, 'Bera', '22', 800, 29, '2014-10-28 18:10:36', '2014-10-28 18:10:36'),
(241, 'Bhangura', '23', 800, 29, '2014-10-28 18:11:02', '2014-10-28 18:11:02'),
(242, 'Barhatta', '22', 200, 21, '2014-10-28 18:11:06', '2014-10-28 18:11:06'),
(243, 'Chatmohar', '24', 800, 29, '2014-10-28 18:11:25', '2014-10-28 18:11:25'),
(244, 'Faridpur', '25', 700, 29, '2014-10-28 18:11:51', '2014-10-28 18:11:51'),
(245, 'Ishwardi', '26', 800, 29, '2014-10-28 18:13:00', '2014-10-28 18:13:00'),
(246, 'Pabna Sadar', '27', 800, 29, '2014-10-28 18:13:38', '2014-10-28 18:13:38'),
(247, 'Santhia', '28', 800, 29, '2014-10-28 18:14:07', '2014-10-28 18:14:07'),
(248, 'Sujanagar', '29', 800, 29, '2014-10-28 18:14:34', '2014-10-28 18:14:34'),
(249, 'Durgapur', '23', 200, 21, '2014-10-28 18:14:50', '2014-10-28 18:14:50'),
(250, 'Khaliajuri', '24', 200, 21, '2014-10-28 18:15:28', '2014-10-28 18:15:28'),
(251, 'Belkuchi', '30', 800, 30, '2014-10-28 18:15:45', '2014-10-28 18:15:45'),
(252, 'Kalmakanda', '25', 200, 21, '2014-10-28 18:15:59', '2014-10-28 18:15:59'),
(253, 'Chauhali', '31', 800, 30, '2014-10-28 18:16:24', '2014-10-28 18:16:24'),
(254, 'Kendua', '26', 200, 21, '2014-10-28 18:16:56', '2014-10-28 18:16:56'),
(255, 'Kamarkhanda', '32', 800, 30, '2014-10-28 18:17:08', '2014-10-28 18:17:08'),
(256, 'Madan', '27', 200, 21, '2014-10-28 18:17:34', '2014-10-28 18:17:34'),
(257, 'Kazipur', '33', 800, 30, '2014-10-28 18:17:39', '2014-10-28 18:17:39'),
(258, 'Raiganj', '34', 800, 30, '2014-10-28 18:18:09', '2014-10-28 18:18:09'),
(259, 'Mohanganj', '28', 200, 21, '2014-10-28 18:18:20', '2014-10-28 18:18:20'),
(260, 'Netrokona Sadar', '29', 200, 21, '2014-10-28 18:18:40', '2014-10-28 18:18:40'),
(261, 'Shahjadpur', '35', 800, 30, '2014-10-28 18:18:44', '2014-10-28 18:18:44'),
(262, 'Sirajganj	Sadar', '36', 800, 30, '2014-10-28 18:19:17', '2014-10-28 18:19:17'),
(263, 'Tarash', '37', 800, 30, '2014-10-28 18:20:04', '2014-10-28 18:20:04'),
(264, 'Ullahpara', '38', 800, 30, '2014-10-28 18:20:42', '2014-10-28 18:20:42'),
(265, 'Purbadhala', '30', 200, 21, '2014-10-28 18:21:13', '2014-10-28 18:21:13'),
(266, 'Bagerhat	Sadar', '01', 110, 32, '2014-10-28 18:25:27', '2014-10-28 18:25:27'),
(267, 'Chitalmari', '02', 110, 32, '2014-10-28 18:26:07', '2014-10-28 18:26:07'),
(268, 'Fakirhat', '03', 110, 32, '2014-10-28 18:26:59', '2014-10-28 18:26:59'),
(269, 'Kachua', '04', 110, 32, '2014-10-28 18:27:28', '2014-10-28 18:27:28'),
(270, 'Mollahat', '05', 110, 32, '2014-10-28 18:28:04', '2014-10-28 18:28:04'),
(271, 'Mongla', '06', 110, 32, '2014-10-28 18:28:31', '2014-10-28 18:28:31'),
(272, 'Morrelganj', '07', 110, 32, '2014-10-28 18:29:00', '2014-10-28 18:29:00'),
(273, 'Rampal', '08', 110, 32, '2014-10-28 18:29:34', '2014-10-28 18:29:34'),
(274, 'Sarankhola', '09', 110, 32, '2014-10-28 18:29:57', '2014-10-28 18:29:57'),
(275, 'Batiaghata', '10', 110, 3, '2014-10-28 18:30:33', '2014-10-28 18:30:33'),
(276, 'Dacope', '11', 110, 3, '2014-10-28 18:31:05', '2014-10-28 18:31:05'),
(277, 'Dumuria', '12', 110, 3, '2014-10-28 18:31:49', '2014-10-28 18:31:49'),
(278, 'Dighalia', '13', 110, 3, '2014-10-28 18:32:17', '2014-10-28 18:32:17'),
(279, 'Koyra', '14', 110, 3, '2014-10-28 18:32:42', '2014-10-28 18:32:42'),
(280, 'Paikgachha', '15', 110, 3, '2014-10-28 18:33:06', '2014-10-28 18:33:06'),
(281, 'Phultala', '16', 110, 3, '2014-10-28 18:33:43', '2014-10-28 18:33:43'),
(282, 'Rupsha', '17', 110, 3, '2014-10-28 18:34:07', '2014-10-28 18:34:07'),
(283, 'Terokhada', '18', 110, 3, '2014-10-28 18:34:31', '2014-10-28 18:34:31'),
(284, 'Daulatpur', '19', 110, 3, '2014-10-28 18:34:58', '2014-10-28 18:34:58'),
(285, 'Khalishpur', '20', 110, 3, '2014-10-28 18:35:21', '2014-10-28 18:35:21'),
(286, 'Khan Jahan Ali', '21', 110, 3, '2014-10-28 18:36:00', '2014-10-28 18:36:00'),
(287, 'Kotwali', '22', 110, 3, '2014-10-28 18:36:16', '2014-10-28 18:36:16'),
(288, 'Sonadanga', '23', 110, 3, '2014-10-28 18:36:38', '2014-10-28 18:36:38'),
(289, 'Harintana', '24', 110, 6, '2014-10-28 18:37:05', '2014-10-28 18:37:05'),
(290, 'Assasuni', '25', 110, 31, '2014-10-28 18:38:07', '2014-10-28 18:38:07'),
(291, 'Kalaroa', '27', 110, 3, '2014-10-28 18:38:30', '2014-10-28 18:38:30'),
(292, 'Kaliganj', '28', 110, 31, '2014-10-28 18:39:11', '2014-10-28 18:39:11'),
(293, 'Satkhira sadar', '29', 110, 31, '2014-10-28 18:39:49', '2014-10-28 18:39:49'),
(294, 'Shyamnagar', '30', 110, 31, '2014-10-28 18:41:03', '2014-10-28 18:41:03'),
(295, 'Tala', '31', 110, 31, '2014-10-28 18:41:38', '2014-10-28 18:41:38'),
(296, 'Kalia', '01', 120, 34, '2014-10-28 18:42:41', '2014-10-28 18:42:41'),
(297, 'Lohagara', '02', 120, 34, '2014-10-28 18:43:36', '2014-10-28 18:43:36'),
(298, 'Narail	Sadar', '03', 120, 34, '2014-10-28 18:44:23', '2014-10-28 18:44:23'),
(299, 'Naragati', '04', 120, 34, '2014-10-28 18:45:01', '2014-10-28 18:45:01'),
(300, 'Abhaynagar', '05', 120, 33, '2014-10-28 18:45:46', '2014-10-28 18:45:46'),
(301, 'Bagherpara', '06', 120, 33, '2014-10-28 18:46:51', '2014-10-28 18:46:51'),
(302, 'Chaugachha', '07', 120, 33, '2014-10-28 18:47:25', '2014-10-28 18:47:25'),
(303, 'Jhikargachha', '08', 120, 33, '2014-10-28 18:47:55', '2014-10-28 18:47:55'),
(304, 'Keshabpur', '09', 120, 33, '2014-10-28 18:48:29', '2014-10-28 18:48:29'),
(305, 'Jessore	Sadar', '10', 120, 33, '2014-10-28 18:49:15', '2014-10-28 18:49:15'),
(306, 'Manirampur', '11', 120, 33, '2014-10-28 18:50:23', '2014-10-28 18:50:23'),
(307, 'Sharsha', '12', 120, 33, '2014-10-28 18:51:04', '2014-10-28 18:51:04'),
(308, 'Magura Sadar', '13', 21, 35, '2014-10-28 18:51:52', '2014-10-28 18:51:52'),
(309, 'Mohammadpur', '14', 120, 35, '2014-10-28 18:53:24', '2014-10-28 18:53:24'),
(310, 'Shalikha', '15', 120, 35, '2014-10-28 18:53:48', '2014-10-28 18:53:48'),
(311, 'Sreepur', '16', 120, 35, '2014-10-28 18:54:27', '2014-10-28 18:54:27'),
(312, 'Alamdanga', '01', 130, 37, '2014-10-28 18:55:17', '2014-10-28 18:55:17'),
(313, 'Chuadanga Sadar', '02', 120, 37, '2014-10-28 18:55:59', '2014-10-28 18:55:59'),
(314, 'Damurhuda', '03', 120, 37, '2014-10-28 18:56:53', '2014-10-28 18:56:53'),
(315, 'Jibannagar', '04', 120, 37, '2014-10-28 18:57:20', '2014-10-28 18:57:20'),
(316, 'Harinakunda', '05', 120, 36, '2014-10-28 18:57:58', '2014-10-28 18:57:58'),
(317, 'Jhenaidah Sadar', '06', 120, 36, '2014-10-28 18:58:55', '2014-10-28 18:58:55'),
(318, 'Kaliganj', '07', 120, 36, '2014-10-28 19:00:11', '2014-10-28 19:00:11'),
(319, 'Kotchandpur', '08', 120, 36, '2014-10-28 19:00:55', '2014-10-28 19:00:55'),
(320, 'Maheshpur', '09', 120, 36, '2014-10-28 19:01:21', '2014-10-28 19:01:21'),
(321, 'Shailkupa', '10', 120, 36, '2014-10-28 19:01:49', '2014-10-28 19:01:49'),
(322, 'Bheramara', '11', 130, 38, '2014-10-28 19:03:45', '2014-10-28 19:03:45'),
(323, 'Daulatpur', '12', 130, 38, '2014-10-28 19:04:20', '2014-10-28 19:04:20'),
(324, 'Khoksa', '13', 130, 38, '2014-10-28 19:04:45', '2014-10-28 19:04:45'),
(325, 'Kumarkhali', '14', 130, 38, '2014-10-28 19:05:08', '2014-10-28 19:05:08'),
(326, 'Kushtia Sadar', '15', 130, 38, '2014-10-28 19:05:50', '2014-10-28 19:05:50'),
(327, 'Mirpur', '16', 130, 38, '2014-10-28 19:06:19', '2014-10-28 19:06:19'),
(328, 'Shekhpara', '17', 130, 38, '2014-10-28 19:07:08', '2014-10-28 19:07:08'),
(329, 'Gangni', '18', 130, 39, '2014-10-28 19:08:13', '2014-10-28 19:08:13'),
(330, 'Meherpur Sadar', '19', 130, 39, '2014-10-28 19:09:14', '2014-10-28 19:09:14'),
(331, 'Mujibnagar', '20', 130, 39, '2014-10-28 19:09:41', '2014-10-28 19:09:41'),
(332, 'Ali Kadam', '01', 140, 40, '2014-10-28 19:23:22', '2014-10-28 19:23:22'),
(333, 'Bandarban Sadar', '02', 140, 40, '2014-10-28 19:24:28', '2014-10-28 19:24:28'),
(334, 'Lama', '03', 140, 40, '2014-10-28 19:26:00', '2014-10-28 19:26:00'),
(335, 'Naikhongchhari', '04', 140, 40, '2014-10-28 19:26:30', '2014-10-28 19:26:30'),
(336, 'Rowangchhari', '05', 140, 40, '2014-10-28 19:27:10', '2014-10-28 19:27:10'),
(337, 'Ruma', '06', 140, 40, '2014-10-28 19:27:52', '2014-10-28 19:27:52'),
(338, 'Thanchi', '07', 140, 40, '2014-10-28 19:28:27', '2014-10-28 19:28:27'),
(339, 'Chakaria', '08', 140, 43, '2014-10-28 19:38:47', '2014-10-28 19:38:47'),
(340, 'Cox''s Bazar Sadar', '09', 140, 43, '2014-10-28 19:39:28', '2014-10-28 19:39:28'),
(341, 'Kutubdia', '10', 140, 43, '2014-10-28 19:39:56', '2014-10-28 19:39:56'),
(342, 'Maheshkhali', '11', 140, 43, '2014-10-28 19:40:26', '2014-10-28 19:40:26'),
(343, 'Ramu', '12', 140, 43, '2014-10-28 19:40:59', '2014-10-28 19:40:59'),
(344, 'Teknaf', '13', 140, 43, '2014-10-28 19:41:27', '2014-10-28 19:41:27'),
(345, 'Ukhia', '14', 140, 43, '2014-10-28 19:41:53', '2014-10-28 19:41:53'),
(346, 'Pekua', '15', 140, 43, '2014-10-28 19:42:16', '2014-10-28 19:42:16'),
(347, 'Chhagalnaiya', '16', 140, 44, '2014-10-28 19:42:43', '2014-10-28 19:42:43'),
(348, 'Daganbhuiyan', '17', 140, 44, '2014-10-28 19:43:08', '2014-10-28 19:43:08'),
(349, 'Feni	Sadar', '18', 140, 44, '2014-10-28 19:43:39', '2014-10-28 19:43:39'),
(350, 'Parshuram', '19', 140, 44, '2014-10-28 19:44:02', '2014-10-28 19:44:02'),
(351, 'Sonagazi', '20', 140, 44, '2014-10-28 19:44:25', '2014-10-28 19:44:25'),
(352, 'Fulgazi', '21', 140, 44, '2014-10-28 19:44:47', '2014-10-28 19:44:47'),
(353, 'Anwara', '22', 140, 4, '2014-10-28 19:45:15', '2014-10-28 19:45:15'),
(354, 'Banshkhali', '23', 140, 4, '2014-10-28 19:45:46', '2014-10-28 19:45:46'),
(355, 'Boalkhali', '24', 140, 4, '2014-10-28 19:46:10', '2014-10-28 19:46:10'),
(356, 'Chandanaish', '25', 140, 4, '2014-10-28 19:46:46', '2014-10-28 19:46:46'),
(357, 'Fatikchhari', '26', 140, 4, '2014-10-28 19:47:12', '2014-10-28 19:47:12'),
(358, 'Hathazari', '27', 140, 4, '2014-10-28 19:47:36', '2014-10-28 19:47:36'),
(359, 'Lohagara', '28', 140, 4, '2014-10-28 19:48:07', '2014-10-28 19:48:07'),
(360, 'Mirsharai', '29', 140, 4, '2014-10-28 19:48:30', '2014-10-28 19:48:30'),
(361, 'Jhenaigati', '31', 200, 17, '2014-10-28 19:48:45', '2014-10-28 19:48:45'),
(362, 'Patiya', '30', 140, 4, '2014-10-28 19:48:59', '2014-10-28 19:48:59'),
(363, 'Nakla', '32', 200, 17, '2014-10-28 19:49:15', '2014-10-28 19:49:15'),
(364, 'Rangunia', '31', 140, 4, '2014-10-28 19:49:24', '2014-10-28 19:49:24'),
(365, 'Raozan', '32', 140, 4, '2014-10-28 19:49:46', '2014-10-28 19:49:46'),
(366, 'Sandwip', '33', 140, 4, '2014-10-28 19:50:08', '2014-10-28 19:50:08'),
(367, 'Nalitabari', '33', 200, 17, '2014-10-28 19:50:24', '2014-10-28 19:50:24'),
(368, 'Satkania', '34', 140, 4, '2014-10-28 19:50:42', '2014-10-28 19:50:42'),
(369, 'Sitakunda', '35', 140, 4, '2014-10-28 19:51:03', '2014-10-28 19:51:03'),
(370, 'Sherpur Sadar', '34', 200, 17, '2014-10-28 19:51:03', '2014-10-28 19:51:03'),
(371, 'Bandor-Chittagong	Port', '36', 140, 4, '2014-10-28 19:51:59', '2014-10-28 19:51:59'),
(372, 'Chandgaon', '37', 140, 4, '2014-10-28 19:52:28', '2014-10-28 19:52:28'),
(373, 'Sreebardi', '35', 200, 17, '2014-10-28 19:52:29', '2014-10-28 19:52:29'),
(374, 'Double	Mooring', '38', 140, 4, '2014-10-28 19:52:57', '2014-10-28 19:52:57'),
(375, 'Kotwali', '39', 140, 4, '2014-10-28 19:53:26', '2014-10-28 19:53:26'),
(376, 'Pahartali', '40', 140, 4, '2014-10-28 19:53:50', '2014-10-28 19:53:50'),
(377, 'Panchlaish', '41', 140, 4, '2014-10-28 19:54:16', '2014-10-28 19:54:16'),
(378, 'Dighinala', '42', 140, 42, '2014-10-28 19:54:54', '2014-10-28 19:54:54'),
(379, 'Alfadanga', '01', 200, 23, '2014-10-28 19:55:09', '2014-10-28 19:55:09'),
(380, 'Khagrachhari sadar', '43', 140, 42, '2014-10-28 19:56:37', '2014-10-28 19:56:37'),
(381, 'Bhanga', '02', 200, 23, '2014-10-28 19:56:59', '2014-10-28 19:56:59'),
(382, 'Lakshmichhari', '44', 140, 42, '2014-10-28 19:57:04', '2014-10-28 19:57:04'),
(383, 'Mahalchhari', '45', 140, 42, '2014-10-28 19:57:31', '2014-10-28 19:57:31'),
(384, 'Manikchhari', '46', 140, 42, '2014-10-28 19:58:00', '2014-10-28 19:58:00'),
(385, 'Matiranga', '47', 140, 42, '2014-10-28 19:58:45', '2014-10-28 19:58:45'),
(386, 'Panchhari', '48', 140, 42, '2014-10-28 20:01:12', '2014-10-28 20:01:12'),
(387, 'Ramgarh', '49', 140, 42, '2014-10-28 20:01:39', '2014-10-28 20:01:39'),
(388, 'Bagaichhari', '50', 140, 41, '2014-10-28 20:02:18', '2014-10-28 20:02:18'),
(389, 'Barkal', '51', 140, 41, '2014-10-28 20:02:58', '2014-10-28 20:02:58'),
(390, 'Kawkhali-Betbunia', '52', 140, 41, '2014-10-28 20:04:02', '2014-10-28 20:04:02'),
(391, 'Belaichhari', '53', 140, 41, '2014-10-28 20:04:32', '2014-10-28 20:04:32'),
(392, 'Kaptai', '54', 140, 41, '2014-10-28 20:04:59', '2014-10-28 20:04:59'),
(393, 'Juraichhari', '55', 140, 41, '2014-10-28 20:05:27', '2014-10-28 20:05:27'),
(394, 'Langadu', '56', 140, 41, '2014-10-28 20:05:53', '2014-10-28 20:05:53'),
(395, 'Naniyachar', '57', 140, 41, '2014-10-28 20:06:20', '2014-10-28 20:06:20'),
(396, 'Rajasthali', '58', 140, 41, '2014-10-28 20:06:46', '2014-10-28 20:06:46'),
(397, 'Rangamati', '59', 140, 41, '2014-10-28 20:07:09', '2014-10-28 20:07:09'),
(398, 'Amtali', '01', 160, 50, '2014-10-28 20:13:24', '2014-10-28 20:13:24'),
(399, 'Bamna', '02', 160, 50, '2014-10-28 20:13:54', '2014-10-28 20:13:54'),
(400, 'Barguna Sadar', '03', 160, 50, '2014-10-28 20:14:27', '2014-10-28 20:14:27'),
(401, 'Betagi', '04', 160, 50, '2014-10-28 20:14:52', '2014-10-28 20:14:52'),
(402, 'Patharghata', '05', 160, 50, '2014-10-28 20:15:22', '2014-10-28 20:15:22'),
(403, 'Taltoli', '06', 160, 50, '2014-10-28 20:15:57', '2014-10-28 20:15:57'),
(404, 'Agailjhara', '07', 160, 5, '2014-10-28 20:16:34', '2014-10-28 20:16:34'),
(405, 'Babuganj', '08', 160, 5, '2014-10-28 20:16:59', '2014-10-28 20:16:59'),
(406, 'Bakerganj', '09', 160, 5, '2014-10-28 20:17:26', '2014-10-28 20:17:26'),
(407, 'Boalmari', '03', 200, 23, '2014-10-28 20:17:30', '2014-10-28 20:17:30'),
(408, 'Banaripara', '10', 160, 5, '2014-10-28 20:17:50', '2014-10-28 20:17:50'),
(409, 'Charbhadrasan', '04', 200, 23, '2014-10-28 20:18:04', '2014-10-28 20:18:04'),
(410, 'Gaurnadi', '11', 160, 5, '2014-10-28 20:18:24', '2014-10-28 20:18:24'),
(411, 'Hizla', '12', 160, 5, '2014-10-28 20:18:44', '2014-10-28 20:18:44'),
(412, 'Faridpur Sadar', '05', 200, 23, '2014-10-28 20:19:12', '2014-10-28 20:19:12'),
(413, 'Barisal Sadar', '13', 160, 5, '2014-10-28 20:19:17', '2014-10-28 20:19:17'),
(414, 'Madhukhali', '06', 200, 23, '2014-10-28 20:19:42', '2014-10-28 20:19:42'),
(415, 'Mehendiganj', '14', 160, 5, '2014-10-28 20:19:52', '2014-10-28 20:19:52'),
(416, 'Nagarkanda', '07', 200, 23, '2014-10-28 20:20:08', '2014-10-28 20:20:08'),
(417, 'Muladi', '15', 160, 5, '2014-10-28 20:20:18', '2014-10-28 20:20:18'),
(418, 'Wazirpur', '16', 160, 5, '2014-10-28 20:20:41', '2014-10-28 20:20:41'),
(419, 'Sadarpur', '08', 200, 23, '2014-10-28 20:20:48', '2014-10-28 20:20:48'),
(420, 'Bhola Sadar', '17', 160, 51, '2014-10-28 20:21:13', '2014-10-28 20:21:13'),
(421, 'Burhanuddin', '18', 160, 51, '2014-10-28 20:21:50', '2014-10-28 20:21:50'),
(422, 'Char	Fasson', '19', 160, 51, '2014-10-28 20:22:27', '2014-10-28 20:22:27'),
(423, 'Gopalganj Sadar', '09', 200, 16, '2014-10-28 20:22:54', '2014-10-28 20:22:54'),
(424, 'Daulatkhan', '20', 160, 51, '2014-10-28 20:23:10', '2014-10-28 20:23:10'),
(425, 'Lalmohan', '21', 160, 51, '2014-10-28 20:23:43', '2014-10-28 20:23:43'),
(426, 'Manpura', '22', 160, 51, '2014-10-28 20:24:07', '2014-10-28 20:24:07'),
(427, 'Kashiani', '10', 200, 16, '2014-10-28 20:24:09', '2014-10-28 20:24:09'),
(428, 'Tazumuddin', '23', 160, 51, '2014-10-28 20:24:51', '2014-10-28 20:24:51'),
(429, 'Jhalokati	Sadar', '24', 160, 52, '2014-10-28 20:25:42', '2014-10-28 20:25:42'),
(430, 'Kathalia', '25', 160, 52, '2014-10-28 20:26:17', '2014-10-28 20:26:17'),
(431, 'Kotalipara', '11', 200, 16, '2014-10-28 20:26:21', '2014-10-28 20:26:21'),
(432, 'Nalchity', '26', 160, 52, '2014-10-28 20:26:46', '2014-10-28 20:26:46'),
(433, 'Muksudpur', '12', 200, 16, '2014-10-28 20:26:57', '2014-10-28 20:26:57'),
(434, 'Rajapur', '27', 160, 52, '2014-10-28 20:27:16', '2014-10-28 20:27:16'),
(435, 'Bauphal', '28', 160, 53, '2014-10-28 20:27:55', '2014-10-28 20:27:55'),
(436, 'Dashmina', '29', 160, 53, '2014-10-28 20:28:29', '2014-10-28 20:28:29'),
(437, 'Galachipa', '30', 160, 53, '2014-10-28 20:28:53', '2014-10-28 20:28:53'),
(438, 'Kalapara', '31', 160, 53, '2014-10-28 20:29:18', '2014-10-28 20:29:18'),
(439, 'Mirzaganj', '32', 160, 53, '2014-10-28 20:29:47', '2014-10-28 20:29:47'),
(440, 'Patuakhali Sadar', '33', 160, 53, '2014-10-28 20:30:23', '2014-10-28 20:30:23'),
(441, 'Rangabali', '34', 140, 53, '2014-10-28 20:30:55', '2014-10-28 20:30:55'),
(442, 'Dumki', '35', 160, 53, '2014-10-28 20:31:32', '2014-10-28 20:31:32'),
(443, 'Bhandaria', '36', 160, 54, '2014-10-28 20:32:09', '2014-10-28 20:32:09'),
(444, 'Kawkhali', '37', 160, 54, '2014-10-28 20:32:39', '2014-10-28 20:32:39'),
(445, 'Mathbaria', '38', 160, 54, '2014-10-28 20:33:06', '2014-10-28 20:33:06'),
(446, 'Nazirpur', '39', 160, 54, '2014-10-28 20:33:33', '2014-10-28 20:33:33'),
(447, 'Pirojpur Sadar', '40', 160, 54, '2014-10-28 20:34:14', '2014-10-28 20:34:14'),
(448, 'Tungipara', '13', 200, 16, '2014-10-28 20:34:14', '2014-10-28 20:34:14'),
(449, 'Nesarabad-Swarupkati', '41', 160, 54, '2014-10-28 20:35:16', '2014-10-28 20:35:16'),
(450, 'Zianagor', '42', 160, 54, '2014-10-28 20:35:43', '2014-10-28 20:35:43'),
(451, 'Rajoir', '14', 200, 8, '2014-10-28 20:36:02', '2014-10-28 20:36:02'),
(452, 'Akhaura', '01', 170, 48, '2014-10-28 20:41:40', '2014-10-28 20:41:40'),
(453, 'Bancharampur', '02', 170, 48, '2014-10-28 20:42:29', '2014-10-28 20:42:29'),
(454, 'Madaripur Sadar', '15', 200, 13, '2014-10-28 20:45:46', '2014-10-28 20:45:46'),
(455, 'Kalkini', '16', 200, 13, '2014-10-28 20:46:40', '2014-10-28 20:46:40'),
(456, 'Brahmanbaria sadar', '03', 170, 48, '2014-10-28 20:46:53', '2014-10-28 20:46:53'),
(457, 'Kasba', '04', 170, 48, '2014-10-28 20:47:34', '2014-10-28 20:47:34'),
(458, 'Shibchar', '17', 200, 13, '2014-10-28 20:47:47', '2014-10-28 20:47:47'),
(459, 'Nabinagar', '05', 170, 48, '2014-10-28 20:48:08', '2014-10-28 20:48:08'),
(460, 'Nasirnagar', '06', 170, 48, '2014-10-28 20:48:32', '2014-10-28 20:48:32'),
(461, 'Sarail', '07', 170, 48, '2014-10-28 20:49:01', '2014-10-28 20:49:01'),
(462, 'Ashuganj', '08', 170, 48, '2014-10-28 20:49:29', '2014-10-28 20:49:29'),
(463, 'Bijoynagar', '09', 170, 48, '2014-10-28 20:49:57', '2014-10-28 20:49:57'),
(464, 'Chandpur sadar', '10', 170, 49, '2014-10-28 20:51:04', '2014-10-28 20:51:04'),
(465, 'Faridganj', '11', 170, 49, '2014-10-28 20:51:33', '2014-10-28 20:51:33'),
(466, 'Haimchar', '12', 170, 49, '2014-10-28 20:52:07', '2014-10-28 20:52:07'),
(467, 'Haziganj', '13', 170, 49, '2014-10-28 20:52:44', '2014-10-28 20:52:44'),
(468, 'Kachua', '14', 170, 49, '2014-10-28 20:53:10', '2014-10-28 20:53:10'),
(469, 'Matlab Dakshin', '15', 170, 49, '2014-10-28 20:53:50', '2014-10-28 20:53:50'),
(470, 'Matlab Uttar', '16', 170, 49, '2014-10-28 20:54:25', '2014-10-28 20:54:25'),
(471, 'Shahrasti', '17', 170, 49, '2014-10-28 20:54:56', '2014-10-28 20:54:56'),
(472, 'Barura', '18', 170, 47, '2014-10-28 20:55:55', '2014-10-28 20:55:55'),
(473, 'Brahmanpara', '19', 170, 47, '2014-10-28 20:56:20', '2014-10-28 20:56:20'),
(474, 'Burichang', '20', 170, 47, '2014-10-28 20:56:52', '2014-10-28 20:56:52'),
(475, 'Chandina', '21', 170, 47, '2014-10-28 20:57:17', '2014-10-28 20:57:17'),
(476, 'Chauddagram', '22', 170, 47, '2014-10-28 20:57:40', '2014-10-28 20:57:40'),
(477, 'Daudkandi', '23', 170, 47, '2014-10-28 20:58:15', '2014-10-28 20:58:15'),
(478, 'Debidwar', '24', 170, 47, '2014-10-28 20:58:39', '2014-10-28 20:58:39'),
(479, 'Homna', '25', 170, 47, '2014-10-28 20:59:04', '2014-10-28 20:59:04'),
(480, 'Laksam', '26', 170, 47, '2014-10-28 20:59:31', '2014-10-28 20:59:31'),
(481, 'Muradnagar', '27', 170, 47, '2014-10-28 20:59:56', '2014-10-28 20:59:56'),
(482, 'Nangalkot', '28', 170, 47, '2014-10-28 21:00:20', '2014-10-28 21:00:20'),
(483, 'Comilla Sadar', '29', 170, 47, '2014-10-28 21:00:51', '2014-10-28 21:00:51'),
(484, 'Meghna', '30', 170, 47, '2014-10-28 21:01:17', '2014-10-28 21:01:17'),
(485, 'Titas', '31', 170, 47, '2014-10-28 21:01:48', '2014-10-28 21:01:48'),
(486, 'Monohargonj', '32', 170, 47, '2014-10-28 21:02:11', '2014-10-28 21:02:11'),
(487, 'Sadar South Upazila', '33', 170, 47, '2014-10-28 21:03:08', '2014-10-28 21:03:08'),
(488, 'Lakshmipur Sadar', '34', 170, 46, '2014-10-28 21:03:38', '2014-10-28 21:03:38'),
(489, 'Raipur', '35', 170, 46, '2014-10-28 21:04:02', '2014-10-28 21:04:02'),
(490, 'Ramganj', '36', 170, 46, '2014-10-28 21:04:25', '2014-10-28 21:04:25'),
(491, 'Ramgati', '37', 170, 46, '2014-10-28 21:04:49', '2014-10-28 21:04:49'),
(492, 'Komolnagar', '38', 170, 46, '2014-10-28 21:05:15', '2014-10-28 21:05:15'),
(493, 'Begumganj', '39', 170, 45, '2014-10-28 21:05:53', '2014-10-28 21:05:53'),
(494, 'Noakhali	Sadar', '40', 170, 45, '2014-10-28 21:06:35', '2014-10-28 21:06:35'),
(495, 'Chatkhil', '41', 170, 45, '2014-10-28 21:07:10', '2014-10-28 21:07:10'),
(496, 'Companiganj', '42', 170, 45, '2014-10-28 21:07:43', '2014-10-28 21:07:43'),
(497, 'Hatiya', '43', 170, 45, '2014-10-28 21:08:13', '2014-10-28 21:08:13'),
(498, 'Senbagh', '44', 170, 45, '2014-10-28 21:08:47', '2014-10-28 21:08:47'),
(499, 'Sonaimuri', '45', 170, 45, '2014-10-28 21:09:17', '2014-10-28 21:09:17'),
(500, 'Subarnachar', '46', 170, 45, '2014-10-28 21:09:43', '2014-10-28 21:09:43'),
(501, 'Kabirhat', '47', 170, 45, '2014-10-28 21:10:11', '2014-10-28 21:10:11'),
(502, 'Baliakandi', '18', 600, 22, '2014-10-28 21:11:05', '2014-10-28 21:11:05'),
(503, 'Goalandaghat', '19', 170, 22, '2014-10-28 21:11:31', '2014-10-28 21:11:31'),
(504, 'Pangsha', '20', 170, 22, '2014-10-28 21:11:58', '2014-10-28 21:11:58'),
(505, 'Rajbari Sadar', '21', 600, 22, '2014-10-28 21:12:47', '2014-10-28 21:12:47'),
(506, 'Kalukhali', '22', 170, 22, '2014-10-28 21:13:12', '2014-10-28 21:13:12'),
(507, 'Bhedarganj', '23', 600, 20, '2014-10-28 21:13:47', '2014-10-28 21:13:47'),
(508, 'Damudya', '24', 600, 20, '2014-10-28 21:14:20', '2014-10-28 21:14:20'),
(509, 'Gosairhat', '25', 170, 20, '2014-10-28 21:14:45', '2014-10-28 21:14:45'),
(510, 'Naria', '26', 170, 20, '2014-10-28 21:15:20', '2014-10-28 21:15:20'),
(511, 'Shariatpur Sadar', '27', 600, 20, '2014-10-28 21:16:01', '2014-10-28 21:16:01'),
(512, 'Zanjira', '28', 170, 20, '2014-10-28 21:16:31', '2014-10-28 21:16:31'),
(513, 'Shakhipur', '29', 600, 20, '2014-10-28 21:17:07', '2014-10-28 21:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Image.png',
  `user_type` int(11) NOT NULL DEFAULT '0' COMMENT '0=Users,1=Marchant,2=Admin,3=Super Admin',
  `marchant_id` int(11) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `user_type`, `marchant_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Md.Abdus Salam', 'salamcseiu21@gmail.com', 'Abdus Salam.JPG', 3, 0, '$2y$10$J7TsC5jSpXy8RJ4Ce9IF1uzaSmOPX9i5TJ4JxqyodnvKFxqI9TWAG', 'iE5a7Qkz14jzNYW0ECIxcIT1Jpel7bKUNpScE7SRxK5VhGQb6zObgXpvoM8q', '2017-10-19 23:31:33', '2017-10-19 23:31:33'),
(4, 'Md.Noyon Miah', 'noyon@gmail.com', 'Noyon.jpg', 0, 0, '$2y$10$jkMbTaiH9cAMxAW5h5FM1uwbKGWe63HzCJkr0a9IesZLPQ/8.sY.a', 'YeGir2UE6Zwe4Amnd4m2VwTmF3V1KFTCB6fxErSjSYIKJSVT6CtNzQlyNN1Y', '2017-10-26 23:28:16', '2017-10-26 23:28:16'),
(5, 'Milon Miah', 'milon@gmail.com', 'Image.png', 0, 0, '$2y$10$816Ma2ZGEfT.dHmkQYDHee/HjibTqLLsBl87pIcpmpGmj/zEalwS2', 'IU59ZrHEl585GeEkrsXurCStIjBgj7EIsbHQJ6ELQWQ6orxXqHTjhzdn5nsp', '2017-10-27 10:40:29', '2017-10-27 10:40:29'),
(6, 'Md.Abdul Kader', 'kader@gmail.com', 'Image.png', 0, 0, '$2y$10$S1Bdge/.SHWuZn7tBMMSpOps94k1eVsKs.2d/faN8PnH38RTNBCy2', 'blN2wg3l8YbBymzmCIeHrrNb2zWn5EWlz29IoedQRd6S3ifogTrLZ5JNFZ5k', '2017-10-30 21:58:11', '2017-10-30 21:58:11'),
(7, 'Md.Abu Sayed', 'sayed@gmail.com', 'Image.png', 0, 0, '$2y$10$gduq7H6F..P5zkHbgOLzouAr1pbVsyUrhfoGx6uMZG84eyn22OlWa', NULL, '2017-10-31 03:19:01', '2017-10-31 03:19:01'),
(9, 'Bike BD', 'adminbdbike@gmail.com', 'Image.png', 1, 7, '$2y$10$NltStFh8BUqMYr.KZ17vJO3PGAv2jbpn8busHTeSABJANo6SLB90G', 'YUCvlMA7AilvV59vTB3fBpp6BYDkHsbqNS0Irjs3cuJ8Zz5AhnD3ELKi1wi0', '2017-11-01 03:59:28', '2017-11-01 03:59:28'),
(10, 'NMS Book Stall', 'adminnmsbook@gmail.com', 'Image.png', 1, 4, '$2y$10$GYFB9kBXVtVpiNn1k15ws.7.Cyun80DTCQA/85L.XWq2hWS6oiiU6', 'h7sF6ZssNT7uaQrwQ8VGVZNMPaq7revb2RcD1hp5J6J8cep23rxN0QVBE19F', '2017-11-01 04:44:08', '2017-11-01 04:44:08'),
(11, 'FS BD', 'adminfsbd@gmail.com', 'Image.png', 1, 5, '$2y$10$xMJNCS/.SEFE7hYQVVGMner01giDt3AMJjmB96o8HysMeZeyejZ0.', 'c8NJa3fSVxpMcaOdnXce7lAgvVtslTWAGzup3kuZdeQLB7xousurRzMERPWl', '2017-11-01 04:46:14', '2017-11-01 04:46:14'),
(12, 'NMS Clothing', 'adminnmscloth@gmail.com', 'Image.png', 1, 2, '$2y$10$IKUdEcbSWsQIjQKmY8Z0hOdphlB.yHvqaxmQ/c3XYQqPhT8unUk12', 'rdrG93lM18peQn8PBButQ1HjPzn9KTiOh9W3VccoAGRjVubcx6QXSBEHtIVk', '2017-11-01 04:48:46', '2017-11-01 04:48:46'),
(13, 'NMS Electronics', 'adminnmselectronics@gmail.com', 'Image.png', 1, 1, '$2y$10$DCl/JRJrsnzm5BdV8x01BOXSxoqBabRY/ognopgNN13ifU2.iCNay', 'x8aKs72U3YHbp8IPtDrJbjrI7dwnylOgh7oF3ncvbqdxG2z448DzYvx6aJpg', '2017-11-01 04:53:30', '2017-11-01 04:53:30');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_row_id`),
  ADD KEY `category_row_id` (`category_row_id`);

--
-- Indexes for table `sells_products_sku`
--
ALTER TABLE `sells_products_sku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `temp_orders`
--
ALTER TABLE `temp_orders`
  ADD PRIMARY KEY (`temp_order_row_id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6E1F1E0B08FA272` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type` (`user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_row_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_row_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `sells_products_sku`
--
ALTER TABLE `sells_products_sku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `temp_orders`
--
ALTER TABLE `temp_orders`
  MODIFY `temp_order_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD CONSTRAINT `FK_B6E1F1E0B08FA272` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 08:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_food_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` int(11) NOT NULL,
  `category_status` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `order_number`, `category_status`, `added_on`, `created_at`, `updated_at`) VALUES
(1, 'Drinks', 1, 1, '2021-01-19 00:00:00', '2021-01-19 14:39:32', '2021-01-21 15:04:28'),
(2, 'Desserts', 2, 1, '2021-01-20 00:00:00', '2021-01-19 16:48:09', '2021-01-21 15:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `phone_no`, `password`, `created_at`, `updated_at`) VALUES
(9, 'SuperSani', 'mmm@gmail.com', '51451515', '$2y$10$R/N5yOP5K42quHVN.twWzujRlGhgn9GrqIbmO/QuZdcm5EKB7e4RS', '2021-01-21 07:34:55', '2021-01-21 07:34:55'),
(10, 'dessy_s', 'mmmd@gmail.com', '5145151533333', '$2y$10$8NS9rZkfHgJVdtDOtYYV4OnZWqDJcCOSvNBOcaRsXnY/mDUMQmbtC', '2021-01-21 14:00:05', '2021-01-21 14:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_boys`
--

CREATE TABLE `delivery_boys` (
  `delivery_boy_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_boy_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_boy_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_boy_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_boy_status` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `dish_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `dish_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_status` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `full_price` double(10,2) DEFAULT NULL,
  `half_price` double(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`dish_id`, `category_id`, `dish_name`, `dish_detail`, `dish_image`, `dish_status`, `added_on`, `full_price`, `half_price`, `created_at`, `updated_at`) VALUES
(4, 2, 'Desserts', 'idk, smth', 'BackEndSourceFile/dish_img/3.jpg', 1, '2021-01-21 00:00:00', 10.00, 5.00, '2021-01-21 15:06:40', '2021-01-21 15:09:24'),
(5, 2, 'Dish2', 'idk', 'BackEndSourceFile/dish_img/4.jpg', 1, '2021-01-20 00:00:00', 15.00, 7.00, '2021-01-21 15:07:33', '2021-01-21 15:07:33'),
(6, 1, 'Dish3', 'juice', 'BackEndSourceFile/dish_img/1.jpg', 1, '2021-01-14 00:00:00', 5.00, 3.00, '2021-01-21 15:08:11', '2021-01-21 15:08:11'),
(7, 1, 'Drinks2', 'juice', 'BackEndSourceFile/dish_img/2.jpg', 1, '2021-01-13 00:00:00', 5.00, 3.00, '2021-01-21 15:08:47', '2021-01-21 15:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2021_01_19_132622_create_dishes_table', 4),
(8, '2014_10_12_000000_create_users_table', 5),
(9, '2014_10_12_100000_create_password_resets_table', 5),
(10, '2019_08_19_000000_create_failed_jobs_table', 5),
(11, '2021_01_16_164128_create_categories_table', 5),
(12, '2021_01_18_154618_delivery_boys_table', 5),
(13, '2021_01_19_154934_create_dishes_table', 5),
(14, '2021_01_20_183650_create_customers_table', 6),
(15, '2021_01_21_110650_create_shippings_table', 7),
(16, '2021_01_21_152145_create_payments_table', 8),
(17, '2021_01_21_153015_create_order_details_table', 8),
(18, '2021_01_21_153416_create_orders_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 320.00, 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `dish_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_price` double(8,2) NOT NULL,
  `dish_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `email`, `phone_no`, `address`, `created_at`, `updated_at`) VALUES
(1, 'SuperSani', 'mmm@gmail.com', '51451515', 'tbilisi', '2021-01-21 13:16:51', '2021-01-21 13:16:51'),
(2, 'dessy_s', 'mmmd@gmail.com', '5145151533333', 'tbilisi', '2021-01-21 14:00:10', '2021-01-21 14:00:10'),
(3, 'SuperSani', 'mmm@gmail.com', '51451515', 'tbilisi', '2021-01-22 12:17:02', '2021-01-22 12:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tekla Aivazashvili', 'mmm306204@gmail.com', NULL, '$2y$10$Igok0XRUJVqGlBris3se/.ky0YkSwLB5IaS4.5Zz46bFFO7W9n2qe', NULL, '2021-01-19 14:39:12', '2021-01-19 14:39:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_no_unique` (`phone_no`);

--
-- Indexes for table `delivery_boys`
--
ALTER TABLE `delivery_boys`
  ADD PRIMARY KEY (`delivery_boy_id`),
  ADD UNIQUE KEY `delivery_boys_delivery_boy_phone_number_unique` (`delivery_boy_phone_number`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `delivery_boys`
--
ALTER TABLE `delivery_boys`
  MODIFY `delivery_boy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `dish_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

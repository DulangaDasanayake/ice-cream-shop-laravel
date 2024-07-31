-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 08:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_07_24_104740_create_products_table', 1),
(5, '2024_07_24_135114_create_orders_table', 1),
(6, '2024_07_24_135921_create_order_items_table', 1),
(7, '2024_07_24_140644_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cost`, `name`, `email`, `status`, `city`, `address`, `phone`, `date`, `created_at`, `updated_at`) VALUES
(1, 180.99, 'dulanga', 'dula@gmail.com', 'not paid', 'colombo', 'colombo', '123564564', '2024-07-30 00:00:00', NULL, NULL),
(2, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(3, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(4, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(5, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(6, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(7, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(8, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(9, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(10, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(11, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(12, 84.55, 'dedwdew2323', 'admin@email.com', 'not paid', 'dfede', 'deded', '32424524', '2024-07-30 00:00:00', NULL, NULL),
(13, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(14, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(15, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(16, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(17, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(18, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(19, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(20, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(21, 265.54, 'wsws', 'dedij@email.com', 'not paid', 'kakand', 'd3d3', '1323343', '2024-07-30 00:00:00', NULL, NULL),
(22, 265.54, 'swswswsw', 'ded@email.com', 'not paid', 'dwedwed', 'dwdeew', '343242', '2024-07-30 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_image`, `product_quantity`, `order_date`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(2, 2, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(3, 3, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(4, 4, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(5, 5, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(6, 6, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(7, 7, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(8, 8, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(9, 9, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(10, 10, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(11, 11, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(12, 12, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(13, 13, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(14, 13, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(15, 14, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(16, 14, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(17, 15, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(18, 15, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(19, 16, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(20, 16, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(21, 17, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(22, 17, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(23, 18, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(24, 18, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(25, 19, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(26, 19, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(27, 20, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(28, 20, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(29, 21, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(30, 21, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL),
(31, 22, 4, 'Bowl ice cream', 180.99, 'product-4.jpg', 1, '2024-07-30', NULL, NULL),
(32, 22, 3, 'Cherry ice cream', 84.55, 'portfolio-2.jpg', 1, '2024-07-30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `sale_price`, `quantity`, `category`, `type`, `image`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'Vanilla ice cream', 'Vanilla ice cream with chocolate pieces', 9.99, 4.99, 100, 'ice cream', 'vanilla', 'portfolio-1.jpg', NULL, NULL, NULL, NULL),
(2, 'Fruit ice cream', 'Ice cream with fruits', 55.89, 25.99, 50, 'ice cream', 'fruit', 'portfolio-3.jpg', NULL, NULL, NULL, NULL),
(3, 'Cherry ice cream', 'Ice cream with cherry', 89.99, 84.55, 45, 'ice cream', 'cherry', 'portfolio-2.jpg', NULL, NULL, NULL, NULL),
(4, 'Bowl ice cream', 'Ice cream on a bowl', 200.00, 180.99, 10, 'ice cream', 'bowl', 'product-4.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

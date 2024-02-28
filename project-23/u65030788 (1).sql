-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 05:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u65030788`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อประเภทสินค้า',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `created_at`, `updated_at`) VALUES
(20, 'ผักใบ', '2024-02-16 16:43:23', '2024-02-16 16:43:23'),
(21, 'ผักก้าน', '2024-02-16 16:43:39', '2024-02-16 16:43:39'),
(22, 'ผักหัว', '2024-02-16 16:43:58', '2024-02-16 16:43:58'),
(23, 'ผักผล', '2024-02-16 16:44:12', '2024-02-16 16:44:12');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_15_090121_add_user_table', 1),
(6, '2024_01_16_165935_create_products_table', 2),
(7, '2024_01_16_170007_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('action@gmail.com', '$2y$10$oyjdXcZR4lebU9tX2ZsdsOU59QtCAODTsCYZjyr4/8j9bMlImx/La', '2023-12-13 05:25:57'),
('de@gmail.com', '$2y$10$pcArRLc6QL7HT.bfQFy6c.1i8Zj4lpOX9CIpLnwQjo.OECbVtPGlO', '2024-02-12 05:54:47'),
('rr@gmail.com', '$2y$10$QVNNp9nRJ3kyYJZujI.8R.Z9bQXqc.thOpYAp5K3xJqb3utZy85DC', '2024-01-09 14:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL COMMENT 'รหัสสินค้า',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อสินค้า',
  `price` varchar(255) NOT NULL COMMENT 'ราคาสินค้า',
  `description` text NOT NULL COMMENT 'รายละเอียดสินค้า',
  `qty` int(11) NOT NULL DEFAULT 0 COMMENT 'จำนวนสินค้า',
  `category_id` int(11) NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `image` varchar(255) NOT NULL COMMENT 'รูปสินค้า',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `description`, `qty`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(28, 'ผักบุ้ง', '10/กก.', 'ผักบุ้ง', 8, 20, 'MbBGMCqypM.jpg', '2024-02-16 16:57:21', '2024-02-16 17:24:43'),
(29, 'คะน้า', '18/กก.', 'คะน้า', 10, 20, 'TwM2fc5iN9.jpg', '2024-02-16 17:00:16', '2024-02-16 17:24:08'),
(30, 'ผักกวางตุ้ง', '35/กก.', 'ผักกวางตุ้ง', 10, 20, 'FF1Xp1zjxd.jpg', '2024-02-16 17:03:32', '2024-02-16 17:25:10'),
(31, 'โหระพา', '40/กก.', 'โหระพา', 10, 20, 'Zgk0EHM2fI.jpg', '2024-02-16 17:05:15', '2024-02-16 17:25:29'),
(32, 'ผักชี', '30/กก.', 'ผักชี', 10, 20, 'PIoK45giAD.jpg', '2024-02-16 17:05:48', '2024-02-16 17:25:43'),
(33, 'หน่อไม้ฝรั่ง', '50/กก.', 'หน่อไม่ฝรั่ง', 10, 21, '77HAIxLFe6.jpg', '2024-02-16 17:13:19', '2024-02-16 17:25:59'),
(34, 'ถั่วฟักยาว', '50/กก.', 'ถั่วฟักยาว', 10, 21, 'QxU5sbsFNl.jpg', '2024-02-16 17:16:36', '2024-02-16 17:26:11'),
(35, 'ข้าวโพดอ่อน', '30/กก.', 'ข้าวโพดอ่อน', 10, 21, 'hbxoXClwK7.jpg', '2024-02-16 17:17:34', '2024-02-16 17:26:19'),
(36, 'ถั่วแขก', '60/กก.', 'ถั่วแขก', 10, 21, 'H3roz5ek5l.jpg', '2024-02-16 17:18:36', '2024-02-16 17:26:28'),
(37, 'ต้นหอม', '240/กก.', 'ต้นหอม', 10, 21, '485wj4dihp.jpg', '2024-02-16 17:19:54', '2024-02-16 17:26:43'),
(38, 'หัวผักกาด', '35/กก.', 'หัวผักกาด', 10, 22, 'ckCUMaZ9hb.jpg', '2024-02-16 17:32:53', '2024-02-16 17:32:53'),
(39, 'หัวไชเท้า', '35/กก.', 'หัวไชเท้า', 10, 22, 'XDtepz9hkg.jpg', '2024-02-16 17:34:39', '2024-02-16 17:35:02'),
(40, 'บีทรูด', '50/กก.', 'บีทรูด', 10, 22, 'hsUhwk1lik.jpeg', '2024-02-16 17:37:48', '2024-02-16 17:37:48'),
(41, 'กะหล่ำปลี', '35/กก.', 'กะหล่ำปี', 10, 22, '1fM5VIUchs.jpg', '2024-02-16 17:39:00', '2024-02-16 17:39:00'),
(42, 'กะหล่ำปลีม่วง', '55/กก.', 'กะหล่ำปีม่วง', 10, 22, 'tF1G0NITFJ.jpg', '2024-02-16 17:39:53', '2024-02-16 17:39:53'),
(43, 'ฝักทอง', '20/กก.', 'ฝักทอง', 10, 23, 'GZGfIqZXk7.jpg', '2024-02-16 17:44:21', '2024-02-16 17:44:21'),
(44, 'มะเขือเทศ', '35/กก.', 'มะเขือเทศ', 10, 23, 'CR7lIoknug.jpg', '2024-02-16 17:45:17', '2024-02-16 17:48:13'),
(45, 'แตงกวา', '35/กก.', 'แตงกวา', 10, 23, 'UE98szJbPf.jpg', '2024-02-16 17:46:15', '2024-02-16 17:46:15'),
(46, 'พริกหยวก', '60/กก.', 'พริกหยวก', 10, 23, 'AfLuX7dI8s.jpg', '2024-02-16 17:47:19', '2024-02-16 17:47:19'),
(47, 'พริก', '75/กก.', 'พริก', 10, 23, 'vwxBcbV7Yc.jpg', '2024-02-16 17:48:04', '2024-02-16 17:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'action', 'action2', '0123456789', 'psc1@gmail.com', NULL, '$2y$10$iI1w012gY3N8Rm8QNz0isu8hBNIWL59EggLZR7gmiPTpqkE6nPzsu', NULL, '2024-02-20 02:09:26', '2024-02-20 02:09:26'),
(7, 'ddd', 'ddd', '0123456789', 'psc2@gamil.com', NULL, '$2y$10$rszmaLe7.6j5p/Y./cFMIuh3ZD.4W5dP91hQ4KIdAwkBbBbaLMQsK', NULL, '2024-02-20 03:59:22', '2024-02-20 03:59:22'),
(8, 'Bas', 'Bas', '0123456789', 'bas@gmail.com', NULL, '$2y$10$pXfNJ43KwHIGqrRMKF7cweftasUnLxkhqtwOkzbpCbc8jg.7/2p2.', NULL, '2024-02-20 04:00:56', '2024-02-20 04:00:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทสินค้า', AUTO_INCREMENT=24;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

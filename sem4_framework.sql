-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 03:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem4_framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Medical'),
(2, 'Furniture'),
(3, 'Clean'),
(4, 'Bussiness'),
(5, 'Shop');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_06_13_051035_create_sessions_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `seller_nrp` int(20) UNSIGNED DEFAULT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `slide_image1` varchar(255) DEFAULT NULL,
  `slide_image2` varchar(255) DEFAULT NULL,
  `slide_image3` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_nrp`, `category_id`, `name`, `main_image`, `slide_image1`, `slide_image2`, `slide_image3`, `description`, `price`, `link`, `created_at`, `updated_at`) VALUES
(23, 1, 1, 'Hazel', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'Sailor is a stylish, responsive and easy to use business Bootstrap template. It comes with lot of features and designed for many kind websites such as corporate business, portfolio, product showcase, creative agencies, business consultant, website design, mobile development company etc.\r\n\r\nSailor website template is built with the latest Bootstrap version. It works perfectly on any device and screen size.', '50.000', 'https://www.wix.com/mystunningwebsites/illustration?utm_source=affiliate&utm_medium=paid_referral&utm_campaign=af_https://colorlib.com&experiment_id=cake_87221505^108', '2021-06-15 01:07:48', '2021-06-15 01:07:48'),
(25, 2, 2, 'Medexi', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'Dewi is a modern multi purpose Bootstrap website template. It is specially designed for any kind of digital agency, software, sass, startup, marketing, one page and other online businesses. Powered by Bootstrap Dewi is perfect for a wide variety of projects.\r\n\r\nDewi template is fully responsive and clean on every device and on every modern browser. Easy to use and clean code will be a simple task to get you up and running in no time.', '50.000', 'https://www.templatemonsterpreview.com/de/demo/152638.html?_gl=1*tfdicv*_ga*NDY4Nzg4NzUwLjE2MjMyMTAzNzU.*_ga_FTPYEGT5LY*MTYyMzc2NTE0NS4yLjEuMTYyMzc2NTIyNi41MQ..&_ga=2.9213681.579973978.1623765146-468788750.1623210375&_gac=1.120654458.1623765149.CjwKCAjwn6GGBhADEiwAruUcKg9chFtMKKgwCoYRr0Z7f2O768vd2-OfVMc1jLvhlXeJ9WoAD0TXZBoCKY4QAvD_BwE', '2021-06-15 07:50:44', '2021-06-15 07:50:44'),
(26, 3, 3, 'Kastery', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'Company is a clean and responsive website template for corporate, business and company websites. The company template also comes with all the necessary features and can be used for building website s for consulting firms, finance, agency, business agency, digital agency, tax information, start up business, insurance, loan and many more.\r\n\r\nThe Company template is built with the latest version of the Bootstrap framework. It perfectly fits on all screen sizes and looks gorgeous on all devices, big or small screens, laptops, tablets or phone it will always look great. Just put your info and Company will take care of the rest.', '50.000', 'https://www.templatemonsterpreview.com/de/demo/152638.html?_gl=1*tfdicv*_ga*NDY4Nzg4NzUwLjE2MjMyMTAzNzU.*_ga_FTPYEGT5LY*MTYyMzc2NTE0NS4yLjEuMTYyMzc2NTIyNi41MQ..&_ga=2.9213681.579973978.1623765146-468788750.1623210375&_gac=1.120654458.1623765149.CjwKCAjwn6GGBhADEiwAruUcKg9chFtMKKgwCoYRr0Z7f2O768vd2-OfVMc1jLvhlXeJ9WoAD0TXZBoCKY4QAvD_BwE', '2021-06-15 07:50:44', NULL),
(27, 4, 4, 'Devity', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'Company is a clean and responsive website template for corporate, business and company websites. The company template also comes with all the necessary features and can be used for building website s for consulting firms, finance, agency, business agency, digital agency, tax information, start up business, insurance, loan and many more.\r\n\r\nThe Company template is built with the latest version of the Bootstrap framework. It perfectly fits on all screen sizes and looks gorgeous on all devices, big or small screens, laptops, tablets or phone it will always look great. Just put your info and Company will take care of the rest.', '50.000', 'https://www.templatemonsterpreview.com/de/demo/152638.html?_gl=1*tfdicv*_ga*NDY4Nzg4NzUwLjE2MjMyMTAzNzU.*_ga_FTPYEGT5LY*MTYyMzc2NTE0NS4yLjEuMTYyMzc2NTIyNi41MQ..&_ga=2.9213681.579973978.1623765146-468788750.1623210375&_gac=1.120654458.1623765149.CjwKCAjwn6GGBhADEiwAruUcKg9chFtMKKgwCoYRr0Z7f2O768vd2-OfVMc1jLvhlXeJ9WoAD0TXZBoCKY4QAvD_BwE', '2021-06-15 07:50:44', NULL),
(28, 5, 5, 'Ihr Modegeschaft', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'mainimage.jpg', 'BizLand is a multi purpose modern and creative corporate and agency website template. It\'s created with latest version of Bootstrap framework and all modern technologies like HTML5, CSS3. The amazing and professional BizLand bootstrap template can be used for your corporate and financial businesses, agencies, startups, companies, brands, online service providers and many more.\r\n\r\nBizLand comes with a clean, modern and stunning design that will help you attract your website visitors and keep them engaged. BizLand will allow you to showcase your works and services in an impressive way. All the elements of this template are fully responsive and work smoothly on all devices and screen sizes.', '50.000', 'https://www.templatemonsterpreview.com/de/demo/152638.html?_gl=1*tfdicv*_ga*NDY4Nzg4NzUwLjE2MjMyMTAzNzU.*_ga_FTPYEGT5LY*MTYyMzc2NTE0NS4yLjEuMTYyMzc2NTIyNi41MQ..&_ga=2.9213681.579973978.1623765146-468788750.1623210375&_gac=1.120654458.1623765149.CjwKCAjwn6GGBhADEiwAruUcKg9chFtMKKgwCoYRr0Z7f2O768vd2-OfVMc1jLvhlXeJ9WoAD0TXZBoCKY4QAvD_BwE', '2021-06-15 07:50:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `nrp` int(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `no_telp` varchar(100) DEFAULT NULL,
  `no_reg` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `saldo` int(33) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`nrp`, `user_id`, `no_telp`, `no_reg`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 8, '+6285655540468', '123-4545-234545', NULL, '2021-06-15 07:18:47', '2021-06-15 07:18:47'),
(2, 11, '+6285655540468', '123-4545-234545', NULL, NULL, NULL),
(3, 12, '+6285655540468', '123-4545-234545', NULL, NULL, NULL),
(4, 13, '+6285655540468', '123-4545-234545', NULL, NULL, NULL),
(5, 14, '+6285655540468', '123-4545-234545', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PlPNth7z8RuxPVPW30ZQGKiMrDpx98zDfOycf2t3', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Safari/537.36 Edg/91.0.864.48', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTlVhUkFiOFJoSHN4SEp6OW80VXM1aEExeVVFMzRrOUdDU0wwd2hZSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRJVy95SXB3WVY5ZWFUS25Wa0sudk9PejZZQWJQWi9HRm1oLk1xVzNqcjZSN2NsOG00Zjh0RyI7fQ==', 1623806213);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` int(11) UNSIGNED DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL,
  `payment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `product_id`, `status`, `payment`, `created_at`, `updated_at`) VALUES
(34, 9, 26, '0', NULL, '2021-06-15 18:14:54', '2021-06-15 18:14:54');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'sai', 's@gmail.com', NULL, '$2y$10$jDT8pUmUfVHQkX/GFu.lS.kUQA3plTaSJyVAijJ2VN6FiVHwow8ZW', NULL, NULL, 'ebQhJrzSzhCdrwOC8J0uhnKiLmQ7w1xN2UdCEeOeZnpjd5X9oY2AN2wvRn0r', NULL, 'profile-photos/0zs6Ew0v6kfZM42bvJL3bFoGyHC3dJb3fDyukFui.png', '2021-06-13 00:11:25', '2021-06-13 00:30:18'),
(7, 'pens', 'pens@gmail.com', NULL, '$2y$10$KaHFyZvV7Tk4UAmn6uufeuXj.cD4gsNOl7CP0I6LqBRAIL3/p1cLy', NULL, NULL, NULL, NULL, NULL, '2021-06-15 06:11:08', '2021-06-15 06:11:08'),
(8, 'seller', 'seller@gmail.com', NULL, '$2y$10$nHaI.yH0s.dl1rLWlpNcYu51K4X252AqRMRXmQDOBnxYmkfLLKUxK', NULL, NULL, NULL, NULL, NULL, '2021-06-15 07:18:11', '2021-06-15 07:18:11'),
(9, 'user', 'user@gmail.com', NULL, '$2y$10$IW/yIpwYV9eaTKnVkK.vOOz6YAbPZ/GFmh.MqW3jr6R7cl8m4f8tG', NULL, NULL, NULL, NULL, NULL, '2021-06-15 07:20:11', '2021-06-15 07:20:11'),
(11, 'Naraciaga', 's2@gmail.com', NULL, '$2y$10$GFu17ix8pyJDjnOZ9nZpPexutc17pz5Tc6L1ULedFcrnlx3kSawqW', NULL, NULL, NULL, NULL, NULL, '2021-06-15 17:39:28', '2021-06-15 17:39:28'),
(12, 'Aboga', 's3@gmail.com', NULL, '$2y$10$axBjjNT0uB7rJbmaijyDCOWiUGPLjGr6yIOh5vzI4TEczHy/MqnHG', NULL, NULL, NULL, NULL, NULL, '2021-06-15 17:40:10', '2021-06-15 17:40:10'),
(13, 'Nana', 's4@gmail.com', NULL, '$2y$10$emVYZIVXy8Vh8bbJTo3U..zJOoRf90szMge/w0hebxU0wAuhcDerW', NULL, NULL, NULL, NULL, NULL, '2021-06-15 17:40:50', '2021-06-15 17:40:50'),
(14, 'Salsabila', 's5@gmail.com', NULL, '$2y$10$zryZNa3.lTyYFR2f0gPRnuajjw4hZCrhy9TOrY6zGWz7w4a/n0GEG', NULL, NULL, NULL, NULL, NULL, '2021-06-15 17:41:19', '2021-06-15 17:41:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`category_id`),
  ADD KEY `id_seller` (`seller_nrp`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`nrp`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`product_id`),
  ADD KEY `id_user_2` (`user_id`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`seller_nrp`) REFERENCES `sellers` (`nrp`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

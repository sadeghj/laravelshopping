-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2020 at 02:28 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatar`
--

CREATE TABLE `avatar` (
  `avatar_id` bigint(20) UNSIGNED NOT NULL,
  `pics_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `avatar_pivot`
--

CREATE TABLE `avatar_pivot` (
  `avatar_pivot` binary(10) DEFAULT NULL,
  `avatarable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `avatarable_type` varchar(100) DEFAULT NULL,
  `avatar_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'لباس', '2020-03-12 06:47:37', '2020-03-12 06:47:37'),
(2, 'کیف', '2020-03-12 07:00:14', '2020-03-12 07:00:14'),
(3, 'کفش', '2020-03-12 10:07:04', '2020-03-12 10:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `textcommand` varchar(250) NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL,
  `productid` bigint(20) UNSIGNED NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faktors`
--

CREATE TABLE `faktors` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `confirm` int(11) DEFAULT '0',
  `idfakrots` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `heder_attributes`
--

CREATE TABLE `heder_attributes` (
  `id` int(11) NOT NULL,
  `header` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(26, '2020_03_12_120819_create_avatar_table', 0),
(27, '2020_03_12_120819_create_avatar_pivot_table', 0),
(28, '2020_03_12_120819_create_categorys_table', 0),
(29, '2020_03_12_120819_create_comments_table', 0),
(30, '2020_03_12_120819_create_failed_jobs_table', 0),
(31, '2020_03_12_120819_create_faktors_table', 0),
(32, '2020_03_12_120819_create_password_resets_table', 0),
(33, '2020_03_12_120819_create_product_faktors_table', 0),
(34, '2020_03_12_120819_create_products_table', 0),
(35, '2020_03_12_120819_create_roles_table', 0),
(36, '2020_03_12_120819_create_roles_user_table', 0),
(37, '2020_03_12_120819_create_subcategorys_table', 0),
(38, '2020_03_12_120819_create_transactions_table', 0),
(39, '2020_03_12_120819_create_users_table', 0),
(40, '2020_03_12_120821_add_foreign_keys_to_avatar_table', 0),
(41, '2020_03_12_120821_add_foreign_keys_to_avatar_pivot_table', 0),
(42, '2020_03_12_120821_add_foreign_keys_to_comments_table', 0),
(43, '2020_03_12_120821_add_foreign_keys_to_product_faktors_table', 0),
(44, '2020_03_12_120821_add_foreign_keys_to_roles_user_table', 0),
(45, '2020_03_12_120821_add_foreign_keys_to_subcategorys_table', 0),
(46, '2020_03_12_120821_add_foreign_keys_to_transactions_table', 0);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `discount` int(11) NOT NULL,
  `subcategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_faktors`
--

CREATE TABLE `product_faktors` (
  `idfakrots` int(11) NOT NULL,
  `idproducts` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `discription`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Administartor admin in my website', '2020-03-05 20:30:00', '2020-03-05 20:30:00'),
(2, 'user', 'normal', '2020-03-05 20:30:00', '2020-03-05 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles_user`
--

CREATE TABLE `roles_user` (
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `roles_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles_user`
--

INSERT INTO `roles_user` (`user_id`, `roles_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-02-05 00:00:00', NULL),
(2, 2, '2020-02-05 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategorys`
--

CREATE TABLE `subcategorys` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategorys_attributes`
--

CREATE TABLE `subcategorys_attributes` (
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_attributs`
--

CREATE TABLE `sub_attributs` (
  `sub_id` int(11) DEFAULT NULL,
  `atr_id` int(11) DEFAULT NULL,
  `discription` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `faktorid` int(11) NOT NULL,
  `status` char(1) DEFAULT '0',
  `cofirm` char(1) NOT NULL DEFAULT '0',
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `phone`) VALUES
(1, 'صادق', 'sshartmann@protonmail.com', NULL, '$2y$10$wbI9zVt0ffwSV8QKQr5L8uCES3fviw9/1H7r.LlRrKEszrzm1oLS6', NULL, '2020-02-15 11:33:24', '2020-02-15 11:33:24', NULL, NULL),
(2, 'علی', 'ali@chmail.com', NULL, '$2y$10$vG.HKAvMsTdOZ7dlVbCyJuXopuRShy4tbgznW6DojMlXySrIlPZJi', NULL, '2020-03-06 02:25:03', '2020-03-06 02:25:03', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`avatar_id`);

--
-- Indexes for table `avatar_pivot`
--
ALTER TABLE `avatar_pivot`
  ADD UNIQUE KEY `unq_avatar_pivot_avatar_id` (`avatar_id`),
  ADD KEY `fk_avatar_pivot_users` (`avatarable_id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_products_0` (`productid`),
  ADD KEY `fk_comments_users_0` (`userid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faktors`
--
ALTER TABLE `faktors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unq_faktors_idfakrots` (`idfakrots`);

--
-- Indexes for table `heder_attributes`
--
ALTER TABLE `heder_attributes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_subcategory` (`subcategory`);

--
-- Indexes for table `product_faktors`
--
ALTER TABLE `product_faktors`
  ADD PRIMARY KEY (`idfakrots`,`idproducts`),
  ADD KEY `fk_product_faktors_products_0` (`idproducts`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_user`
--
ALTER TABLE `roles_user`
  ADD KEY `fk_roles_users_roles` (`roles_id`),
  ADD KEY `fk_roles_users_users` (`user_id`);

--
-- Indexes for table `subcategorys`
--
ALTER TABLE `subcategorys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subcategory_category` (`category_id`);

--
-- Indexes for table `sub_attributs`
--
ALTER TABLE `sub_attributs`
  ADD KEY `fk_sub_attributs_attributes` (`atr_id`),
  ADD KEY `idx_sub_attributs` (`sub_id`,`atr_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transactions_faktors` (`faktorid`);

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
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faktors`
--
ALTER TABLE `faktors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `heder_attributes`
--
ALTER TABLE `heder_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subcategorys`
--
ALTER TABLE `subcategorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `avatar`
--
ALTER TABLE `avatar`
  ADD CONSTRAINT `fk_avatar_avatar_pivot` FOREIGN KEY (`avatar_id`) REFERENCES `avatar_pivot` (`avatar_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `avatar_pivot`
--
ALTER TABLE `avatar_pivot`
  ADD CONSTRAINT `fk_avatar_pivot_products` FOREIGN KEY (`avatarable_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_avatar_pivot_users` FOREIGN KEY (`avatarable_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_products_0` FOREIGN KEY (`productid`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comments_users_0` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_faktors`
--
ALTER TABLE `product_faktors`
  ADD CONSTRAINT `fk_product_faktors_faktors` FOREIGN KEY (`idfakrots`) REFERENCES `faktors` (`idfakrots`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_faktors_products_0` FOREIGN KEY (`idproducts`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `roles_user`
--
ALTER TABLE `roles_user`
  ADD CONSTRAINT `fk_roles_users_roles` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_roles_users_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategorys`
--
ALTER TABLE `subcategorys`
  ADD CONSTRAINT `fk_subcategory_category` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_attributs`
--
ALTER TABLE `sub_attributs`
  ADD CONSTRAINT `fk_sub_attributs_attributes` FOREIGN KEY (`atr_id`) REFERENCES `heder_attributes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sub_attributs_subcategorys` FOREIGN KEY (`sub_id`) REFERENCES `subcategorys` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_transactions_faktors` FOREIGN KEY (`faktorid`) REFERENCES `faktors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

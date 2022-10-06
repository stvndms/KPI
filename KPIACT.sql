-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 09:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `aprils`
--

CREATE TABLE `aprils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `augusts`
--

CREATE TABLE `augusts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `decembers`
--

CREATE TABLE `decembers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `februarys`
--

CREATE TABLE `februarys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `januarys`
--

CREATE TABLE `januarys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `januarys`
--

INSERT INTO `januarys` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'dwi', 'jan-images/AEKKTTao62lJ9MUukcIn8TnwfxBDZyArV1bzN0Se.png', '2022-09-04 19:56:17', '2022-09-04 19:56:17'),
(4, 'forsaken', 'jan-images/lGKNzqLQk4zFCfpDQJp0ZQSDNKTtC6kLkuwTvK0g.png', '2022-09-04 19:56:52', '2022-09-04 19:56:52'),
(5, 'reyna', 'jan-images/5aNe733hIxALoyBldhntXq973N9uuOohwicKimoi.png', '2022-09-04 19:57:08', '2022-09-04 19:57:08'),
(6, 'eko', 'jan-images/9jzbfsXBNKouYDaYYZ6kZ5lb0j6sWCOubl66qDae.png', '2022-09-04 19:57:25', '2022-09-04 19:57:25'),
(7, 'indra', 'jan-images/S90v8ebAIVpesevacOyLPbn8QJTF3kC13xYcylIO.png', '2022-09-12 21:21:38', '2022-09-12 21:21:38'),
(9, 'anang', 'jan-images/FAPLqAA3PmLQJNMYt6uutlWDPNVTE97tli43bToB.jpg', '2022-10-04 01:52:52', '2022-10-04 01:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `julys`
--

CREATE TABLE `julys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `junes`
--

CREATE TABLE `junes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marchs`
--

CREATE TABLE `marchs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meis`
--

CREATE TABLE `meis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_19_033431_create_january_table', 1),
(6, '2022_08_25_030916_create_february_table', 1),
(7, '2022_08_25_031104_create_marchs_table', 1),
(8, '2022_08_25_031307_create_aprils_table', 1),
(9, '2022_08_25_031423_create_meis_table', 1),
(10, '2022_08_25_031547_create_junes_table', 1),
(11, '2022_08_25_031646_create_julys_table', 1),
(12, '2022_08_25_031838_create_augusts_table', 1),
(13, '2022_08_25_031946_create_septembers_table', 1),
(14, '2022_08_25_032126_create_octobers_table', 1),
(15, '2022_08_25_032323_create_novembers_table', 1),
(16, '2022_08_25_032422_create_decembers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `novembers`
--

CREATE TABLE `novembers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `octobers`
--

CREATE TABLE `octobers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `septembers`
--

CREATE TABLE `septembers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'indra', 'indra', NULL, '$2y$10$HxQeQnhmI17KpyPGd4WG9.HRlOw6mQpVm/CZTXZqh0FmeP0rjVW9e', 'admin', NULL, NULL, NULL),
(2, 'jett', 'jett', NULL, '$2y$10$nZ7z/neUaZxKId1rrK0g5OB7qJIGfk2qipvORNAqBcI9FrTW5Nc2O', 'user', NULL, '2022-09-02 00:13:26', '2022-09-02 00:13:26'),
(3, 'eko', 'eko', NULL, '$2y$10$q3eXG9cw89m5bmT2gkhAC.VeufodTNepEzqt.vk7rNF4KGHEqHa6.', 'user', NULL, '2022-09-02 01:02:45', '2022-10-04 01:55:37'),
(4, 'anton', 'anton', NULL, '$2y$10$Je/.W1oe3kob1gEB1fmKZena6h8QH0.1VI9Xd.Q98mUpuX8KiQ5Le', 'user', NULL, '2022-09-02 01:03:01', '2022-09-02 01:03:01'),
(5, 'anang', 'anang', NULL, '$2y$10$AJsEXh23Nhv2swmJmcX7tOzAKLclmzrG4CX5.mDBs.JLv7YYHlWTC', 'user', NULL, '2022-09-02 01:03:20', '2022-09-02 01:03:20'),
(6, 'dwi', 'dwi', NULL, '$2y$10$Ti/7gV/S7UDNlwSXvxNhG.ca6LkG2AZ60cYxMBXzUTHSuPDxpTDs6', 'user', NULL, '2022-09-02 01:04:54', '2022-09-02 01:04:54'),
(7, 'finna', 'finna', NULL, '$2y$10$BQwqduoayWiBxTSYlZMT8.oLDQHjlYFArz1SJ65JxFfKDFXdkKcNe', 'user', NULL, '2022-09-02 01:48:30', '2022-09-02 01:48:30'),
(8, 'forsaken', 'forsaken', NULL, '$2y$10$ZYdhuh8om0/LBTzMwVxus.kHuQuH4jCLbH8NlhiKB7w/p7OI.0aAa', 'user', NULL, '2022-09-02 01:54:07', '2022-09-02 01:54:07'),
(9, 'reyna', 'reyna', NULL, '$2y$10$CLHhrMoP96oRtHsriy0HIu9e9o1TifDGbVrQvqOtdMzOLkSyZ0yci', 'user', NULL, '2022-09-02 01:57:41', '2022-09-02 01:57:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aprils`
--
ALTER TABLE `aprils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `augusts`
--
ALTER TABLE `augusts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decembers`
--
ALTER TABLE `decembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `februarys`
--
ALTER TABLE `februarys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `januarys`
--
ALTER TABLE `januarys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `julys`
--
ALTER TABLE `julys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `junes`
--
ALTER TABLE `junes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marchs`
--
ALTER TABLE `marchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meis`
--
ALTER TABLE `meis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novembers`
--
ALTER TABLE `novembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `octobers`
--
ALTER TABLE `octobers`
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
-- Indexes for table `septembers`
--
ALTER TABLE `septembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aprils`
--
ALTER TABLE `aprils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `augusts`
--
ALTER TABLE `augusts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decembers`
--
ALTER TABLE `decembers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `februarys`
--
ALTER TABLE `februarys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `januarys`
--
ALTER TABLE `januarys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `julys`
--
ALTER TABLE `julys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `junes`
--
ALTER TABLE `junes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marchs`
--
ALTER TABLE `marchs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meis`
--
ALTER TABLE `meis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `novembers`
--
ALTER TABLE `novembers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `octobers`
--
ALTER TABLE `octobers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `septembers`
--
ALTER TABLE `septembers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

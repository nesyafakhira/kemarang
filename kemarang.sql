-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2023 at 01:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint UNSIGNED NOT NULL,
  `log_name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Masuk', 'App\\Models\\Barang', NULL, 1, 'App\\Models\\User', 2, '[]', NULL, '2023-11-20 23:43:26', '2023-11-20 23:43:26'),
(2, 'default', 'Masuk', 'App\\Models\\Barang', NULL, 2, 'App\\Models\\User', 2, '[]', NULL, '2023-11-20 23:48:18', '2023-11-20 23:48:18'),
(3, 'default', 'Masuk', 'App\\Models\\Barang', NULL, 3, 'App\\Models\\User', 2, '[]', NULL, '2023-11-20 23:51:01', '2023-11-20 23:51:01'),
(4, 'default', 'Masuk', 'App\\Models\\Barang', NULL, 4, 'App\\Models\\User', 2, '[]', NULL, '2023-11-20 23:54:06', '2023-11-20 23:54:06'),
(5, 'default', 'Masuk', 'App\\Models\\Barang', NULL, 5, 'App\\Models\\User', 2, '[]', NULL, '2023-11-20 23:57:48', '2023-11-20 23:57:48'),
(6, 'default', 'Keluar', 'App\\Models\\Request', NULL, 1, 'App\\Models\\User', 6, '[]', NULL, '2023-11-21 00:00:34', '2023-11-21 00:00:34'),
(7, 'default', 'Keluar', 'App\\Models\\Request', NULL, 2, 'App\\Models\\User', 6, '[]', NULL, '2023-11-21 00:00:54', '2023-11-21 00:00:54'),
(8, 'default', 'Keluar', 'App\\Models\\Request', NULL, 3, 'App\\Models\\User', 6, '[]', NULL, '2023-11-21 00:01:15', '2023-11-21 00:01:15'),
(9, 'default', 'Keluar', 'App\\Models\\Request', NULL, 4, 'App\\Models\\User', 6, '[]', NULL, '2023-11-21 00:01:35', '2023-11-21 00:01:35'),
(10, 'default', 'Keluar', 'App\\Models\\Request', NULL, 5, 'App\\Models\\User', 6, '[]', NULL, '2023-11-21 00:02:44', '2023-11-21 00:02:44'),
(11, 'default', 'Keluar', 'App\\Models\\Request', NULL, 6, 'App\\Models\\User', 7, '[]', NULL, '2023-11-22 18:06:27', '2023-11-22 18:06:27'),
(12, 'default', 'Keluar', 'App\\Models\\Request', NULL, 7, 'App\\Models\\User', 7, '[]', NULL, '2023-11-22 18:06:58', '2023-11-22 18:06:58'),
(13, 'default', 'Keluar', 'App\\Models\\Request', NULL, 8, 'App\\Models\\User', 7, '[]', NULL, '2023-11-22 18:10:12', '2023-11-22 18:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_unit` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_satuan` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga_tanpa_ppn` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppn` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga_ppn` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `jumlah_unit`, `satuan`, `harga_satuan`, `total_harga_tanpa_ppn`, `ppn`, `total_harga_ppn`, `created_at`, `updated_at`) VALUES
(1, 'Spidol', '2', 'Pack', '10000', '50000', '5500', '55500', '2023-11-20 23:43:25', '2023-11-22 18:08:05'),
(2, 'Buku', '9', 'Pcs', '20000', '200000', '22000', '222000', '2023-11-20 23:48:17', '2023-11-21 00:11:33'),
(3, 'Pulpen', '10', 'Pcs', '20000', '200000', '22000', '222000', '2023-11-20 23:51:01', '2023-11-20 23:51:01'),
(4, 'Penghapus Papan Tulis', '10', 'Pcs', '20000', '200000', '22000', '222000', '2023-11-20 23:54:05', '2023-11-20 23:54:47'),
(5, 'Penghapus', '9', 'Pcs', '5000', '50000', '5500', '55500', '2023-11-20 23:57:48', '2023-11-21 00:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint UNSIGNED NOT NULL,
  `tu_id` bigint UNSIGNED DEFAULT NULL,
  `guru_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_unit` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('menunggu','terima','tolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_10_041814_create_permission_tables', 1),
(6, '2023_10_11_035857_create_table_barangs', 1),
(7, '2023_10_13_043535_create_requests_table', 1),
(8, '2023_10_27_040102_create_table_stoks', 1),
(9, '2023_11_06_142225_create_activity_log_table', 1),
(10, '2023_11_06_142226_add_event_column_to_activity_log_table', 1),
(11, '2023_11_06_142227_add_batch_uuid_column_to_activity_log_table', 1),
(12, '2023_11_07_065041_create_contents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'tambah_user', 'web', '2023-11-20 21:45:23', '2023-11-20 21:45:23'),
(2, 'edit_user', 'web', '2023-11-20 21:45:23', '2023-11-20 21:45:23'),
(3, 'hapus_user', 'web', '2023-11-20 21:45:23', '2023-11-20 21:45:23'),
(4, 'lihat_user', 'web', '2023-11-20 21:45:23', '2023-11-20 21:45:23'),
(5, 'proses_request', 'web', '2023-11-20 21:45:23', '2023-11-20 21:45:23'),
(6, 'request_barang', 'web', '2023-11-20 21:45:23', '2023-11-20 21:45:23'),
(7, 'lihat_laporan', 'web', '2023-11-20 21:45:24', '2023-11-20 21:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint UNSIGNED NOT NULL,
  `tu_id` bigint UNSIGNED DEFAULT NULL,
  `guru_id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_unit` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('menunggu','terima','tolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `tu_id`, `guru_id`, `barang_id`, `nama_barang`, `jumlah_unit`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 1, 'Spidol', '1', 'terima', '2023-11-21 00:00:34', '2023-11-21 00:12:36'),
(2, 2, 6, 2, 'Buku', '1', 'terima', '2023-11-21 00:00:54', '2023-11-21 00:11:32'),
(4, 2, 6, 4, 'Penghapus Papan Tulis', '1', 'tolak', '2023-11-21 00:01:34', '2023-11-21 00:11:06'),
(5, 2, 6, 5, 'Penghapus', '1', 'terima', '2023-11-21 00:02:44', '2023-11-21 00:10:51'),
(6, 2, 7, 2, 'Buku', '3', 'tolak', '2023-11-22 18:06:26', '2023-11-22 18:08:18'),
(7, 2, 7, 1, 'Spidol', '2', 'terima', '2023-11-22 18:06:58', '2023-11-22 18:08:05'),
(8, NULL, 7, 3, 'Pulpen', '5', 'menunggu', '2023-11-22 18:10:12', '2023-11-22 18:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-11-20 21:45:24', '2023-11-20 21:45:24'),
(2, 'staff', 'web', '2023-11-20 21:45:24', '2023-11-20 21:45:24'),
(3, 'guru', 'web', '2023-11-20 21:45:24', '2023-11-20 21:45:24'),
(4, 'kepsek', 'web', '2023-11-20 21:45:24', '2023-11-20 21:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(6, 3),
(7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `stoks`
--

CREATE TABLE `stoks` (
  `id` bigint UNSIGNED NOT NULL,
  `barang_id` bigint UNSIGNED NOT NULL,
  `nama_stok` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_awal` int NOT NULL,
  `stok_keluar` int DEFAULT NULL,
  `stok_akhir` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stoks`
--

INSERT INTO `stoks` (`id`, `barang_id`, `nama_stok`, `stok_awal`, `stok_keluar`, `stok_akhir`, `created_at`, `updated_at`) VALUES
(1, 1, 'Spidol', 5, 0, 5, '2023-11-20 23:43:26', '2023-11-20 23:43:26'),
(2, 2, 'Buku', 10, 0, 10, '2023-11-20 23:48:18', '2023-11-20 23:48:18'),
(3, 3, 'Pulpen', 10, 0, 10, '2023-11-20 23:51:01', '2023-11-20 23:51:01'),
(4, 4, 'Penghapus Papan Tulis', 10, 0, 10, '2023-11-20 23:54:06', '2023-11-20 23:54:06'),
(5, 4, 'Penghapus Papan Tulis', 10, 0, 10, '2023-11-20 23:54:47', '2023-11-20 23:54:47'),
(6, 5, 'Penghapus', 10, 0, 10, '2023-11-20 23:57:48', '2023-11-20 23:57:48'),
(7, 5, 'Penghapus', 9, 1, 8, '2023-11-21 00:10:52', '2023-11-21 00:10:52'),
(8, 2, 'Buku', 9, 1, 8, '2023-11-21 00:11:33', '2023-11-21 00:11:33'),
(9, 1, 'Spidol', 4, 1, 3, '2023-11-21 00:12:36', '2023-11-21 00:12:36'),
(10, 1, 'Spidol', 2, 2, 0, '2023-11-22 18:08:05', '2023-11-22 18:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npsn` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `npsn`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '11111111', 'admin@gmail.com', NULL, '$2y$10$pagUq9LH10orJE41awHQ9eLtqbzBcyDknN4nPSGktM8qbHuYx95.O', NULL, '2023-11-20 21:45:24', '2023-11-20 21:45:24'),
(2, 'staff', '123456788', 'staff@gmail.com', NULL, '$2y$10$kP3I/qPybJjwFPKo4wNIv.I5MELnqIcMKlXQe8aQUbrbodWefXG.u', NULL, '2023-11-20 21:45:25', '2023-11-20 21:45:25'),
(3, 'guru', '123456778', 'guru@gmail.com', NULL, '$2y$10$7izD6ftVcyxpsF7h6Dy2sO2XhVHzVlDZSUeZvLn5c.R6a9F/E.DEu', NULL, '2023-11-20 21:45:25', '2023-11-20 21:45:25'),
(4, 'kepsek', '123456678', 'kepsek@gmail.com', NULL, '$2y$10$VKPJ2CKHECLtQ2zb6tXGmOUVQTJqVnPMuElnOL1XEdi6BkBR9HNTa', NULL, '2023-11-20 21:45:25', '2023-11-20 21:45:25'),
(5, 'Pak Asep', '666', 'asep@gmail.com', NULL, '$2y$10$IXQMW/V9hraCXvLMY5N9tegujWsFJE6/FPxh/t7jj/hJsfT6E2fB.', NULL, '2023-11-20 23:35:30', '2023-11-20 23:35:30'),
(6, 'Hikun', '444', 'hikun@gmail.com', NULL, '$2y$10$bOB5TGDM4Bdz33zc.iFCwOlZGwMzBbDodUtsmExTgdaQHfsDRTTnq', NULL, '2023-11-21 00:00:14', '2023-11-21 00:00:14'),
(7, 'Pak Kusnadi', '000', 'kusnadi@gmail.com', NULL, '$2y$10$z9tBmkA1dREYp5T8EfJon.Ku.I1KILzeV2z9ih5rFxNq6RAckcfYi', NULL, '2023-11-22 18:05:52', '2023-11-22 18:05:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_tu_id_foreign` (`tu_id`),
  ADD KEY `contents_guru_id_foreign` (`guru_id`),
  ADD KEY `contents_barang_id_foreign` (`barang_id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_tu_id_foreign` (`tu_id`),
  ADD KEY `requests_guru_id_foreign` (`guru_id`),
  ADD KEY `requests_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `stoks`
--
ALTER TABLE `stoks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stoks_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_npsn_unique` (`npsn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stoks`
--
ALTER TABLE `stoks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contents_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `contents_tu_id_foreign` FOREIGN KEY (`tu_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_tu_id_foreign` FOREIGN KEY (`tu_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stoks`
--
ALTER TABLE `stoks`
  ADD CONSTRAINT `stoks_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

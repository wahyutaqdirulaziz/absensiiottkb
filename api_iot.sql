-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2021 at 09:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `rfid` varchar(50) NOT NULL,
  `check_in` timestamp NULL DEFAULT NULL,
  `check_out` timestamp NULL DEFAULT NULL,
  `status_hadir` varchar(125) NOT NULL DEFAULT 'undefine',
  `status_pulang` varchar(125) NOT NULL DEFAULT 'undifine',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `rfid`, `check_in`, `check_out`, `status_hadir`, `status_pulang`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, '192837', NULL, NULL, 'undefine', 'undifine', '2021-07-01 03:28:48', '2021-07-01 03:28:48', NULL),
(14, '9128379', NULL, NULL, 'undefine', 'undifine', '2021-07-01 03:28:48', '2021-07-01 03:28:48', NULL),
(15, '123879', NULL, NULL, 'undefine', 'undifine', '2021-07-01 03:28:48', '2021-07-01 03:28:48', NULL),
(16, '18723618273', NULL, NULL, 'undefine', 'undifine', '2021-07-01 03:28:48', '2021-07-01 03:28:48', NULL),
(17, '62578', NULL, NULL, 'undefine', 'undifine', '2021-07-01 03:28:48', '2021-07-01 03:28:48', NULL),
(18, '192837', NULL, NULL, 'undefine', 'undifine', '2021-07-02 07:25:42', '2021-07-02 07:25:42', NULL),
(19, '9128379', NULL, NULL, 'undefine', 'undifine', '2021-07-02 07:25:42', '2021-07-02 07:25:42', NULL),
(20, '123879', NULL, NULL, 'undefine', 'undifine', '2021-07-02 07:25:42', '2021-07-02 07:25:42', NULL),
(21, '18723618273', NULL, NULL, 'undefine', 'undifine', '2021-07-02 07:25:42', '2021-07-02 07:25:42', NULL),
(22, '62578', '2021-07-02 07:26:24', NULL, 'hadir', 'undifine', '2021-07-02 07:25:42', '2021-07-02 07:26:24', NULL),
(23, '192837', NULL, NULL, 'undefine', 'undifine', '2021-07-04 01:51:37', '2021-07-04 01:51:37', NULL),
(24, '9128379', NULL, NULL, 'undefine', 'undifine', '2021-07-04 01:51:37', '2021-07-04 01:51:37', NULL),
(25, '123879', NULL, NULL, 'undefine', 'undifine', '2021-07-04 01:51:37', '2021-07-04 01:51:37', NULL),
(26, '18723618273', NULL, NULL, 'undefine', 'undifine', '2021-07-04 01:51:37', '2021-07-04 01:51:37', NULL),
(27, '62578', '2021-07-04 02:40:49', '2021-07-04 02:42:19', 'hadir', 'hadir', '2021-07-04 01:51:37', '2021-07-04 02:42:19', NULL),
(28, '192837', NULL, NULL, 'undefine', 'undifine', '2021-07-05 01:29:34', '2021-07-05 01:29:34', NULL),
(29, '9128379', NULL, NULL, 'undefine', 'undifine', '2021-07-05 01:29:34', '2021-07-05 01:29:34', NULL),
(30, '123879', NULL, NULL, 'undefine', 'undifine', '2021-07-05 01:29:34', '2021-07-05 01:29:34', NULL),
(31, '18723618273', NULL, NULL, 'undefine', 'undifine', '2021-07-05 01:29:35', '2021-07-05 01:29:35', NULL),
(32, '62578', NULL, NULL, 'undefine', 'undifine', '2021-07-05 01:29:35', '2021-07-05 01:29:35', NULL);

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
-- Table structure for table `led`
--

CREATE TABLE `led` (
  `id` int(11) NOT NULL,
  `led_putih` varchar(12) NOT NULL,
  `led_merah` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `led`
--

INSERT INTO `led` (`id`, `led_putih`, `led_merah`) VALUES
(1, 'hidup', 'mati');

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
(4, '2021_06_13_063613_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(12, 'App\\Models\\User', 5),
(12, 'App\\Models\\User', 7),
(13, 'App\\Models\\User', 6),
(13, 'App\\Models\\User', 8),
(13, 'App\\Models\\User', 9);

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
-- Table structure for table `pengaturan_absen`
--

CREATE TABLE `pengaturan_absen` (
  `id` int(11) NOT NULL,
  `masuk` enum('aktif','nonaktif') NOT NULL,
  `pulang` enum('aktif','nonaktif') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan_absen`
--

INSERT INTO `pengaturan_absen` (`id`, `masuk`, `pulang`, `updated_at`) VALUES
(5, 'nonaktif', 'nonaktif', '2021-07-04 02:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Teknik Komputer', '2021-07-05 01:40:24', '2021-07-05 01:40:24', NULL),
(2, 'Teknik Informatika', '2021-07-05 01:42:19', '2021-07-05 01:42:19', NULL),
(3, 'Sistem Infromasi', '2021-07-05 01:42:32', '2021-07-05 01:42:32', NULL),
(4, 'Teknik lingkungan', '2021-07-05 01:43:39', '2021-07-05 01:43:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(12, 'admin', 'web', '2021-06-13 07:59:02', '2021-06-13 07:59:02'),
(13, 'user', 'web', '2021-06-13 07:59:02', '2021-06-13 07:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `rfid`, `nim`, `kelas`, `prodi`, `semester`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'admin@hamzanwadi.id', '192837', '', '0', '0', '', NULL, '$2y$10$HyP7di7jR3nMWImW9yBbHuG/vVksBI5LcKkwjPHffRiSS0X50T7eG', NULL, '2021-06-13 07:59:02', '2021-06-13 07:59:02'),
(6, 'User', 'user@hamzanwadi.id', '9128379', '180203089', 'A', 'Teknik komputer', '6', NULL, '$2y$10$lsKsAb5v39eIhq5rX84phejdA6t6.8S/01/3yxmHZZuA29J.r1pHm', NULL, '2021-06-13 07:59:02', '2021-06-13 07:59:02'),
(7, 'wahyu lombok', 'floy40@example.com', '123879', '18079088', 'A', 'Teknik komputer', '6', NULL, '$2y$10$wnD3TTo3uDm7MFaT92mh6e7iSere9pJGpveNO8dUixf0nj1PqbG6y', NULL, '2021-06-14 02:58:44', '2021-06-14 02:58:44'),
(8, 'anam', 'anam@gmail.com', '18723618273', '180737980', 'B', 'Teknik komputer', '6', NULL, '7488e331b8b64e5794da3fa4eb10ad5d', NULL, '2021-06-14 03:05:12', '2021-06-14 03:05:12'),
(9, 'wahyu taqdirul aziz', 'wahyu@gmail.com', '62578', '198283008', 'B', 'Teknik komputer', '6', NULL, '$2y$10$TYNmOkmU7WJXBczZ3nUcBeUO41w5tju5nZpVdTefDHt8Z/RIFpT9m', NULL, '2021-06-22 20:12:08', '2021-06-22 20:12:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `led`
--
ALTER TABLE `led`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaturan_absen`
--
ALTER TABLE `pengaturan_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `led`
--
ALTER TABLE `led`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaturan_absen`
--
ALTER TABLE `pengaturan_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

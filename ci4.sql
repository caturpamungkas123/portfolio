-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 11:36 AM
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
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `sampul`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'smk.jpg', 'SMK', 'smk', '2020-10-26 22:02:55', '2020-10-26 22:02:55'),
(2, 'smp.jpg', 'SMP', 'smp', '2020-10-26 22:03:10', '2020-10-26 22:03:10'),
(3, 'mi.jpg', 'MI', 'mi', '2020-10-26 22:03:25', '2020-10-26 22:03:25'),
(5, 'logo-1.jpg', 'logo', 'logo', '2020-10-26 23:17:02', '2020-10-26 23:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'caturp101@gamil.com', NULL, '2020-11-03 11:49:56', 0),
(2, '::1', 'caturp101@gamil.com', NULL, '2020-11-03 11:50:08', 0),
(3, '::1', 'caturp101@gmail.com', 1, '2020-11-03 11:50:19', 1),
(4, '::1', 'caturp101@gamil.com', NULL, '2020-11-03 11:54:58', 0),
(5, '::1', 'caturp101@gamil.com', NULL, '2020-11-03 11:55:46', 0),
(6, '::1', 'caturp101@gmail.com', 1, '2020-11-03 11:55:56', 1),
(7, '::1', 'caturp101@gmail.com', 1, '2020-11-03 20:39:11', 1),
(8, '::1', 'caturp101@gmail.com', 1, '2020-11-03 21:18:20', 1),
(9, '::1', 'caturp101@gmail.com', 1, '2020-11-03 22:58:12', 1),
(10, '::1', 'caturpamungkas', NULL, '2020-11-03 23:00:37', 0),
(11, '::1', 'caturp101@gmail.com', 1, '2020-11-03 23:00:46', 1),
(12, '::1', 'caturp101@gmail.com', 1, '2020-11-03 23:10:25', 1),
(13, '::1', 'caturpamungkas', NULL, '2020-11-03 23:13:16', 0),
(14, '::1', 'caturp101@gmail.com', 1, '2020-11-03 23:13:26', 1),
(15, '::1', 'caturp101@gmail.com', 1, '2020-11-03 23:25:04', 1),
(16, '::1', 'caturp101@gmail.com', 1, '2020-11-03 23:32:30', 1),
(17, '::1', 'caturp101@gmail.com', 1, '2020-11-04 08:52:47', 1),
(18, '::1', 'caturp101@gmail.com', 1, '2020-11-04 18:15:25', 1),
(19, '::1', 'knknfknkndwq', NULL, '2020-11-05 04:55:20', 0),
(20, '::1', 'caturp101@gmail.com', 1, '2020-11-05 04:55:33', 1),
(21, '::1', 'caturp101@gmail.com', 1, '2020-11-05 05:14:40', 1),
(22, '::1', 'caturp101@gmail.com', 1, '2020-11-05 08:31:46', 1),
(23, '::1', 'asu', NULL, '2020-11-05 10:36:00', 0),
(24, '::1', 'caturp101@gmail.com', 1, '2020-11-05 20:18:36', 1),
(25, '::1', 'caturp101@gmail.com', 1, '2020-11-06 00:22:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `ttl` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `suporter` varchar(60) DEFAULT NULL,
  `sampul` varchar(225) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `slug`, `ttl`, `alamat`, `suporter`, `sampul`, `updated_at`, `created_at`) VALUES
(1, 'Catur Al Pamungkas', 'catur-al-pamungkas', 'Kebumen, 09 Mei 2000', 'Buluspesantren, Kebumen', 'Aremania Kebumen', '1604064976_044288c699570a493ca7.jpg', '2020-11-05 20:44:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `nama`, `sampul`, `created_at`, `updated_at`) VALUES
(37, 'Grobagan', '1604537621_391a5b8618b9382a7ce9.png', '2020-11-04 18:53:41', '2020-11-04 18:53:41'),
(39, 'SaulKu', '1604547228_014936934a5dbbb23271.jpg', '2020-11-04 21:33:48', '2020-11-04 21:33:48'),
(40, 'saulku', '1604547252_2cab42c1e9a35aca8f41.jpg', '2020-11-04 21:34:12', '2020-11-04 21:34:12'),
(41, 'Saul Ku', '1604547496_b7c08c50486ad09315fe.png', '2020-11-04 21:38:16', '2020-11-04 21:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `hoby`
--

CREATE TABLE `hoby` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `sampul` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoby`
--

INSERT INTO `hoby` (`id`, `nama`, `slug`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Rebahan', 'rebahan', 'rebahan.jpg', NULL, NULL),
(2, 'Bikin Emosi', 'bikin-emosi', 'bikinemosi.jpg', NULL, NULL),
(3, 'Memancing', 'memancing', 'memancing.jpg', '2020-10-26 23:00:55', '2020-10-26 23:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1604424515, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lulus` char(4) DEFAULT NULL,
  `sampul` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_sekolah`, `slug`, `angkatan`, `alamat`, `lulus`, `sampul`, `updated_at`, `created_at`) VALUES
(1, 'Amik Pgri Kebumen', 'amik-pgri-kebumen', 2080, 'Jl. Kaswari No.26 Kebumen', '-', 'amik.jpg', '2020-11-05 21:28:41', NULL),
(2, 'SMK MA\'ARIF 1 KEBUMEN', 'smk-maarif-1-kebumen', 2015, 'jL. Kusuma No.75 Kebumen', '2018', 'smk.jpg', '2020-11-05 09:48:15', NULL),
(3, 'MI MA\'ARIF AMPIH BULUSPESANTREN', 'mi-maarif-ampih-buluspesantren', 2006, 'Ampih, Kec Buluspesantren Kab Kebumen', '2012', 'mi.jpg', '2020-11-06 00:36:03', NULL),
(5, 'SMP NEGERI 2 BULUSPESANTREN', 'smp-negeri-2-buluspesantren', 2012, 'Ampih Kec.Buluspesantren Kab.Kebumen', '2018', 'smp.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `nama` varchar(220) NOT NULL,
  `slug` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `telepon` varchar(220) NOT NULL,
  `pesan` varchar(220) NOT NULL,
  `created_at` varchar(220) NOT NULL,
  `updated_at` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `nama`, `slug`, `email`, `telepon`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Catur Pamungkas', 'catur-pamungkas', 'caturp101@gmail.com', '081228652075', 'Asu', '2020-10-30 11:06:44', '2020-10-30 11:06:44'),
(2, 'Bambang sumantri', 'bambang-sumantri', 'bamang@gmail.com', '23536346234', 'dDAsdasda\r\n', '2020-10-30 11:11:10', '2020-10-30 11:11:10'),
(3, 'Risa Palupi', 'risa-palupi', 'risa@gmail.com', '0812256789', 'dddwdwdwdwd', '2020-10-30 11:12:40', '2020-10-30 11:12:40'),
(4, 'Risa Palupi', 'risa-palupi', 'risa@gmail.com', '081228652075', 'scaasfaf', '2020-10-30 11:28:09', '2020-10-30 11:28:09'),
(5, 'Catur Pamungkas', 'catur-pamungkas', 'caturp101@gmail.com', '081228652075', 'dsdsdsdsd', '2020-10-30 11:29:56', '2020-10-30 11:29:56'),
(6, 'Risa Palupi', 'risa-palupi', 'risa@gmail.com', '081228652075', 'dsdsdsdsdsd', '2020-10-30 11:31:24', '2020-10-30 11:31:24'),
(7, 'Bambang Ragil', 'bambang-ragil', 'Bambang@gmail.com', '081228652075', 'Nisaul  Kepo', '2020-11-01 00:12:25', '2020-11-01 00:12:25'),
(8, 'Bambang', 'bambang', 'caturp101@gmail.com', '081228652075', 'sdsdsdsdsd', '2020-11-04 18:55:23', '2020-11-04 18:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'caturp101@gmail.com', 'caturpamungkas', '$2y$10$McEQXkU3ofh2LOfsuuM7K.xpJexhrz/hq29CCUGUjTG60gTC6a752', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-11-03 11:49:45', '2020-11-03 11:49:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoby`
--
ALTER TABLE `hoby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `hoby`
--
ALTER TABLE `hoby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

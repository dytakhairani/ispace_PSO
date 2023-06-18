-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 01:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
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
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `fileID` bigint(20) UNSIGNED NOT NULL,
  `fileNama` varchar(255) NOT NULL,
  `fileTipe` varchar(255) NOT NULL,
  `fileSize` varchar(255) NOT NULL,
  `fileDesc` text NOT NULL,
  `fileData` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fileOwnerID` bigint(20) UNSIGNED NOT NULL,
  `folderID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folderNama` varchar(255) NOT NULL,
  `folderSemester` int(11) NOT NULL,
  `folderTotalFiles` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `folderNama`, `folderSemester`, `folderTotalFiles`, `created_at`, `updated_at`) VALUES
(1, 'Matematika 1', 1, 0, NULL, NULL),
(2, 'Fisika 1', 1, 0, NULL, NULL),
(3, 'Bahasa Indonesia', 1, 0, NULL, NULL),
(4, 'Kimia 1', 1, 0, NULL, NULL),
(5, 'Konsep SI', 1, 0, NULL, NULL),
(6, 'Pancasila', 1, 0, NULL, NULL),
(7, 'Logika dan Struktur Diskrit', 1, 0, NULL, NULL),
(8, 'Agama', 2, 0, NULL, NULL),
(9, 'Bahasa Inggris', 2, 0, NULL, NULL),
(10, 'Kewarganegaraan', 2, 0, NULL, NULL),
(11, 'Matematika 2', 2, 0, NULL, NULL),
(12, 'Fisika 2', 2, 0, NULL, NULL),
(13, 'Organisasi dan Fungsional Bisnis', 2, 0, NULL, NULL),
(14, 'Algoritma dan Pemrograman', 2, 0, NULL, NULL),
(15, 'Manajemen dan Proses TI', 3, 0, NULL, NULL),
(16, 'Manajemen Proses Bisnis', 3, 0, NULL, NULL),
(17, 'Pemrograman Web', 3, 0, NULL, NULL),
(18, 'Rekayasa Kebutuhan Perangkat Lunak', 3, 0, NULL, NULL),
(19, 'Sistem Basis Data', 3, 0, NULL, NULL),
(20, 'Statistika', 3, 0, NULL, NULL),
(21, 'Desain dan Manajemen Jaringan Komputer', 4, 0, NULL, NULL),
(22, 'Manajemen Basis Data', 4, 0, NULL, NULL),
(23, 'Manajemen Proyek TI', 4, 0, NULL, NULL),
(24, 'Rancang Bangun Perangkat Lunak', 4, 0, NULL, NULL),
(25, 'Sistem Enterprise', 4, 0, NULL, NULL),
(26, 'Implementasi Perangkat Lunak', 5, 0, NULL, NULL),
(27, 'Kecerdasan Bisnis', 5, 0, NULL, NULL),
(28, 'Manajemen Layanan Teknologi Informasi', 5, 0, NULL, NULL),
(29, 'Perencanaan strategis TI', 5, 0, NULL, NULL),
(30, 'Riset Operasi', 5, 0, NULL, NULL),
(31, 'Teknopreneur', 5, 0, NULL, NULL),
(32, 'Analitika Bisnis', 6, 0, NULL, NULL),
(33, 'Desain Pengalaman Pengguna', 6, 0, NULL, NULL),
(34, 'Manajemen Investasi TI', 6, 0, NULL, NULL),
(35, 'Proteksi Aset Informasi', 6, 0, NULL, NULL),
(36, 'Rintisan Bisnis Digital', 6, 0, NULL, NULL),
(37, 'Wawasan dan Aplikasi Teknologi', 6, 0, NULL, NULL);

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_06_015150_create_folder_table', 1),
(7, '2023_06_06_024750_create_file_table', 1),
(8, '2023_06_06_035228_create_posts_table', 1),
(9, '2023_06_08_052837_add_owner_to_posts_table', 1),
(10, '2023_06_14_041556_add_file_size_to_posts_table', 2),
(11, '2023_06_14_072642_add_image_to_users', 2);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folderNama` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `material_type` varchar(255) NOT NULL,
  `material_description` text NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner` varchar(255) NOT NULL,
  `fileSize` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `folderNama`, `file_name`, `material_type`, `material_description`, `upload_file`, `created_at`, `updated_at`, `owner`, `fileSize`) VALUES
(6, 'Fisika 1', 'Vektor', 'Notes', 'Ini Materi Vektor', '1-2 Vektor (2).pdf', '2023-06-17 08:08:33', '2023-06-17 08:08:33', 'Syifa Mumtaz', '674.64 KB'),
(7, 'Matematika 1', 'Bilangan Bulat', 'Notes', 'Ini adalah materi Bilangan Bulat', '139-473-1-PB.pdf', '2023-06-17 08:30:46', '2023-06-17 08:30:46', 'Syifa Mumtaz', '399.56 KB'),
(8, 'Matematika 1', 'Bilangan Ril', 'Video', 'ini video', 'video1241900041.mp4', '2023-06-17 08:32:12', '2023-06-17 08:32:12', 'Syifa Mumtaz', '3.28 MB'),
(9, 'Matematika 1', 'Tes', 'Quiz', 'ini tes quiz', 'Seri-4 (2).png', '2023-06-17 08:32:40', '2023-06-17 08:32:40', 'Syifa Mumtaz', '11.17 KB'),
(10, 'Manajemen dan Proses TI', 'Zedemy Seri 1', 'Notes', 'ini materi zedemy', '413399-none-015f26e6.pdf', '2023-06-17 08:40:17', '2023-06-17 08:40:17', 'Syifa Mumtaz', '579.09 KB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL,
  `nrp` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `nrp`, `date`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Syifa Mumtaz', 'syifamumtaz.22@gmail.com', '2023-06-14 08:03:52', '$2y$10$13On4bDoLmrxOXqn0H6eBOkVVGcYzTtjCjLlTgKIJkzsTdYDx6.Lu', 5026211157, '2003-08-09', NULL, '2023-06-14 01:03:52', '2023-06-14 01:03:52', 'user.png');

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
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`fileID`),
  ADD KEY `file_fileownerid_foreign` (`fileOwnerID`),
  ADD KEY `file_folderid_foreign` (`folderID`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `fileID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_fileownerid_foreign` FOREIGN KEY (`fileOwnerID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `file_folderid_foreign` FOREIGN KEY (`folderID`) REFERENCES `folder` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

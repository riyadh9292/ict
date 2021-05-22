-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 07:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict_mbstu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int(11) NOT NULL,
  `doi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `authors`, `publisher`, `details`, `year`, `doi`, `url`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'An Automated Contact Tracing Approach for Controlling Covid-19 Spread Based on Geolocation Data from Mobile Cellular Networks', 'Md. Tanvir Rahman, Risala T. Khan, Muhammad R. A. Khandaker, Mathini Sellathurai, and Md. Sifat Ar Salan', 'IEEE Access', 'vol.8, pp.213554-213565', 2020, '10.1109/ACCESS.2020.3040198', NULL, 2, '2021-05-22 07:36:58', '2021-05-22 07:36:58'),
(2, 'A Review of Contact Tracing Approaches for Controlling COVID-19 Pandemic', 'Md. Tanvir Rahman, Taslima Ferdaus Shuva, Risala Tasin Khan, Mostofa Kamal Nasir', 'Global Journal of Computer Science and Technology', NULL, 2018, 'https://doi.org/10.34257/GJCSTHVOL21IS1PG31', NULL, 2, '2021-05-22 07:37:43', '2021-05-22 07:37:43'),
(3, 'Voice Assistant and Touch Screen Operated Intelligent Wheelchair for Physically Challenged People', 'Md. Shams Sayied Haque, Md. Tanvir Rahman, Risala Tasin Khan, and Mohammad Shibli Kaysar', 'International Conference on Trends in Computational and Cognitive Engineering. Advances in Intelligent Systems and Computing', 'vol. 1309, Springer', 2020, 'https://doi.org/10.1007/978-981-33-4673-4_32', NULL, 2, '2021-05-22 07:38:43', '2021-05-22 07:38:43'),
(4, 'An Agent-based Grouping Strategy for Federated Grid Computing', 'Aminul Haque, Md. Tanvir Rahman', 'Global Journal of Computer Science and Technology: E Network, Web & Security', NULL, 2020, NULL, NULL, 2, '2021-05-22 07:39:23', '2021-05-22 07:39:23'),
(5, 'Telemedicine and IoMT: Its importance regarding healthcare in Bangladesh', 'Toufik Ahmed Emon, Md. Tanvir Rahman, Uzzal Kumar Prodhan', 'International Journal of Scientific & Engineering Research', 'volume.9, issue. 2', 2016, NULL, NULL, 2, '2021-05-22 07:40:04', '2021-05-22 07:40:04'),
(6, 'Efficient Sensor-Cloud Communication using Data Classification and Compression', 'Md. Tanvir Rahman, Md. Sifat Ar Salan, Taslima Ferdaus Shuva and Risala Tasin Khan', 'International Journal of Information Technology and Computer Science', 'vol. 9, no. 6, pp. 9-17', 2015, '10.5815/ijitcs.2017.06.02', NULL, 2, '2021-05-22 07:42:23', '2021-05-22 07:42:23'),
(7, 'Trusted Device along with Trusted Location and Biometry based Authentication Method', 'Md. Tanvir Rahman, Taslima Ferdaus Shuva and K M Akkas Ali', 'International Journal of Computer Applications', 'vol. 150, no. 4, pp.26-30', 2016, '10.5120/ijca2016911490', NULL, 2, '2021-05-22 07:43:12', '2021-05-22 07:43:12'),
(8, 'Automated CV Processing along with Psychometric Analysis in Job Recruiting Process', 'Firoz Ahmed, Mehrin Anannya, Md. Tanvir Rahman and Risala Tasin Khan', 'International Conference on Electrical Engineering and Information Communication Technology (ICEEICT)', 'pp.1-5', 2015, '10.1109/ICEEICT.2015.7307521', NULL, 2, '2021-05-22 07:44:01', '2021-05-22 07:44:01'),
(9, 'Implementation of a Multi-Environment Alumni Association with Geographical Location Identification', 'Md. Tanvir Rahman and Fahima Tabassum', 'Jahangirnagar University Journal of Information Technology', 'volume 3, pp.41-46', 2014, NULL, NULL, 2, '2021-05-22 07:44:40', '2021-05-22 07:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `title`, `description`, `file_path`, `file_extension`, `created_at`, `updated_at`) VALUES
(1, 'CV of Tanvir Rahman', 'This is a sample description', 'downloads/download_1.pdf', 'pdf', '2021-05-22 12:52:56', '2021-05-22 12:52:56');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_11_154540_create_sessions_table', 1),
(7, '2021_05_20_104937_create_articles_table', 1),
(8, '2021_05_20_204933_create_notices_table', 1),
(9, '2021_05_21_154157_create_messages_table', 1),
(10, '2021_05_22_181409_create_downloads_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
('bJVbZb5mjWTOM1zj8QQTxpaEFjUQUkvgj37vgDAB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibUlNYXB0ZTlBblV5RW5DVjV3a3BMeWFaaWNBV2s1SmcxbTByQlRCYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kb3dubG9hZHMvZG93bmxvYWQvMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1621705914),
('MWzWnsUpTheCJtKnIMdzHtESLXS1fkpnV34Y0nWT', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQ1NzbGFkWkE3YjNYNzZiU3FqRUg5TmxpVjNZclZsbUNsYW43ME9DZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kb3dubG9hZC9maWxlcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRjTy9RMm9RTzVMTzYyaU5rbEhlT3NlN21DNGlJQnNvOS50LlNNMGZwZFY1Ym1ybzNJbUJnYSI7fQ==', 1621688204),
('xOoqW3wC34dAfMW1IeE1ImB1YVQ0eDpJ8NjOULNT', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVHdMVzlJaW4wOVhYUkE0cHhibXQwbVQ5MUpMMnJFaThWeXRQenRFayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91c2VyL3Byb2ZpbGUiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkY08vUTJvUU81TE82MmlOa2xIZU9zZTdtQzRpSUJzbzkudC5TTTBmcGRWNWJtcm8zSW1CZ2EiO30=', 1621684391);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `designation`, `phone`, `address`, `education`, `secondary_email`, `type`, `status`, `bio`, `position`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Tanvir Rahman', 'sajal.it.ju@gmail.com', 'Administrator', 'sajal.it.ju@gmail.com', NULL, NULL, NULL, 'admin', 'active', NULL, 1, NULL, '$2y$10$6pCv7Rw6/u1h1uhDMvvETOjrRRGA8vtbAH7s83Hgktjj3JSx4f6w6', NULL, NULL, NULL, NULL, NULL, '2021-05-22 07:34:30', '2021-05-22 10:43:09'),
(2, 'Dr. Muhammad Shahin Uddin', 'shahin.mbstu@gmail.com', 'Professor', '01834172219', NULL, 'B.Sc. : RUET; M.Sc. : KMU, South Korea; PhD : UNSW, Australia', NULL, 'teacher', 'active', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, NULL, '$2y$10$cO/Q2oQO5LO62iNklHeOse7mC4iIBso9.t.SM0fpdV5bmro3ImBga', NULL, NULL, NULL, NULL, 'profile-photos/LLa7o0RfMj1afRHcbuc7eeoaVwYgEVU6A6qtm6jW.jpg', '2021-05-22 07:34:50', '2021-05-22 11:53:11'),
(3, 'Dr. Sajjad Waheed', 'sajjad.waheed@gmail.com', 'Professor', NULL, NULL, NULL, NULL, 'teacher', 'active', NULL, 3, NULL, '$2y$10$FzxrGwfXdmKGBAIJ9qeB9eO.4K9ONFya6J/Rzdp4XShygPTuOfJce', NULL, NULL, NULL, NULL, 'profile-photos/CKHW3uw0TOhVqUJnuv470xPnEMYN8naQXT9cGDYb.jpg', '2021-05-22 10:41:05', '2021-05-22 11:01:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_title_unique` (`title`),
  ADD UNIQUE KEY `articles_doi_unique` (`doi`),
  ADD UNIQUE KEY `articles_url_unique` (`url`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_secondary_email_unique` (`secondary_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 05:34 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chubi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', NULL, NULL),
(2, 'News', '2019-04-06 00:38:12', '2019-04-06 00:38:12'),
(3, 'Events', '2019-04-06 00:38:24', '2019-04-06 00:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_details` text COLLATE utf8mb4_unicode_ci,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `cat_id`, `title`, `event_image`, `event_details`, `status`, `start_date`, `end_date`, `post_date`, `expiry_date`, `slug`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '卒業式', '140aba6293d96d1c79b061009657333d.1552189889.jpg', '<p>Write about event</p>', 'publish', '2019-03-14', '2019-05-31', '2019-03-10', '2019-05-31', '', '2019-03-10 08:51:29', '2019-04-06 00:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `experience_classes`
--

CREATE TABLE `experience_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `meeting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` enum('japanese','foreign') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furigana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furigana2` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_history` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience_classes`
--

INSERT INTO `experience_classes` (`id`, `meeting`, `nationality`, `first_name`, `furigana`, `furigana2`, `street_address`, `address`, `building_name`, `phone_number`, `mail_address`, `school_history`, `school_name`, `graduation`, `message`, `created_at`, `updated_at`) VALUES
(2, '201 9/6/1 6（日）デッサン体験授業', 'japanese', 'Kamal', 'Nostrud aliquid haru', 'female', 'Nam et pariatur Vol', 'Consectetur dolores', 'Riley Pace', '+1 (225) 135-8567', 'lyhowohi@mailinator.net', 'Aut aut eveniet qui', 'Quynn Alvarado', 'Obcaecati dolorem au', 'Similique aut aut au', '2019-05-09 22:48:09', '2019-05-09 22:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE `graduates` (
  `id` int(10) UNSIGNED NOT NULL,
  `student` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` enum('red','blue') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `graduates`
--

INSERT INTO `graduates` (`id`, `student`, `pass`, `courses`, `link`, `details`, `status`, `color`, `image`, `created_at`, `updated_at`) VALUES
(2, 'MAKO.', '2019', '年 イラストコース卒業', NULL, '<p><strong>漫画家、イラストレーター。 絵柄を使い分け、幅広いジャンル で活躍中。</strong></p>', 'publish', NULL, '91161f48e4602eeed053327d227367d8.1555746398.jpg', '2019-04-20 02:01:38', '2019-04-20 02:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_details` text COLLATE utf8mb4_unicode_ci,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` enum('red','blue') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `info_date`, `info_details`, `status`, `color`, `image`, `created_at`, `updated_at`) VALUES
(4, '「2019」学校案内資料の配布を開始しました', '2018-09-08', NULL, 'publish', 'blue', '9ac346ddf6b416b320d30fd7b8623e8a.1555955163.jpg', '2019-04-20 03:20:47', '2019-04-22 12:01:03'),
(5, '12 月体験授業「クリスマスカードデザイン」 【日程】12 月 16 日 ( 日 )13:00 ～ 16:00', '2018-09-03', NULL, 'publish', 'blue', NULL, '2019-04-20 03:22:27', '2019-04-20 03:22:27'),
(6, '1 月体験授業「人物クロッキー②」 【日程】2019 年 1 月 27 日 ( 日 )13:00 ～ 16:00', '2018-09-01', NULL, 'draft', 'blue', NULL, '2019-04-20 03:23:18', '2019-04-20 21:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_01_074238_update_users_table', 1),
(4, '2019_02_01_074908_create_roles_table', 1),
(5, '2019_03_02_115925_create_events_table', 1),
(6, '2019_03_02_120600_create_categories_table', 1),
(7, '2019_04_19_130336_create_information_table', 2),
(8, '2019_04_20_040637_create_graduates_table', 3),
(9, '2019_04_20_063836_create_graduates_table', 4),
(10, '2019_04_21_094111_create_classes_table', 5),
(11, '2019_05_09_142747_create_online_forms_table', 5),
(12, '2019_05_09_172403_create_experience_classes_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `online_forms`
--

CREATE TABLE `online_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `meeting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` enum('japanese','foreign') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furigana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furigana2` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_history` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online_forms`
--

INSERT INTO `online_forms` (`id`, `meeting`, `nationality`, `first_name`, `furigana`, `furigana2`, `street_address`, `address`, `building_name`, `phone_number`, `mail_address`, `school_history`, `school_name`, `graduation`, `message`, `created_at`, `updated_at`) VALUES
(5, '2019/6/30（日）イラスト験授業', 'foreign', 'Nayda', 'Perferendis non dict', 'male', 'Et rerum et amet ni', 'Quo veniam ipsam ex', 'Amena Mckee', '+1 (387) 608-3745', 'youramesh@gmail.com', 'Repellendus Consequ', 'Chancellor Fisher', 'Nisi et incididunt c', 'Sed eum autem vel an', '2019-05-09 21:12:32', '2019-05-09 21:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$dfNw0LCMlMCYi8p.0uMGq.Jl3sEKpfx8EflRxCwvsm8t.LzmJjs7C', 'zJUAZTm5dZt6nKhPN7oCGPqOLXKEfPXExanYsN6mp1UofFGFcSK5LDIojwH1', NULL, NULL, 1),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$ZjEGeHUxbYtUi5UcxMrb5e7LA2.Jf0egWkjVv/Dbgi5D9YES4qE0O', NULL, NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_classes`
--
ALTER TABLE `experience_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_forms`
--
ALTER TABLE `online_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience_classes`
--
ALTER TABLE `experience_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `online_forms`
--
ALTER TABLE `online_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

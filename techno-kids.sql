-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 10:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techno-kids`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'المسئول', 'admin@techno.com', '$2y$10$ILiD.f4ZpAkKQYDht/1mueTkBQxpyWLNi2YiyjpgtaqSSJO1mvAG2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE IF NOT EXISTS `kids` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kids_email_unique` (`email`),
  KEY `kids_level_id_foreign` (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `name`, `email`, `points`, `gender`, `age`, `image_url`, `level_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'أزهار ضرار', 'mohammad.kanaan@example.org', 0, 'انثى', 6, NULL, 1, '$2y$10$lElehNzi91a0gTNZsYeUyOAta64l7U2TUiYMJVD.zFLGRE1CvuPFu', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(2, 'عائشة بشير', 'abdullah.jabri@example.net', 0, 'انثى', 7, NULL, 1, '$2y$10$4hiYyttwpgofFlMrr9/AseJucTsFeJeGE6GBV8cakxHhs1zsIue0.', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(3, 'ضحى مختار', 'fnimry@example.net', 0, 'انثى', 6, NULL, 1, '$2y$10$g0gUAW.0HNf6zUd2aMEj7eV4OmJy0uOFg3zP4Wx28lbOhN79G49jW', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(4, 'ميناس ابان', 'khaled.obaisi@example.org', 0, 'انثى', 7, NULL, 1, '$2y$10$gqoSCF58fU//DBwAkGMZl.8Wr3r6wSG3yt1fOsylD5HRoCzHCIiP6', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(5, 'رهام باهر', 'kabbadi@example.net', 0, 'انثى', 8, NULL, 1, '$2y$10$fvFJP9b9j8UzVP98.IABEeclzEYRRLQM/fvV9kL6IR9fHrHBoXinG', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(6, 'ديما زيدون', 'rashwani.samer@example.com', 0, 'انثى', 8, NULL, 1, '$2y$10$H.UqK423X1lKmdanUBMvU.YQtS7CfiHCb.NDfm3yA2vmPr4LgRjVi', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(7, 'شذى عبد الحليم', 'yazan63@example.com', 0, 'انثى', 8, NULL, 1, '$2y$10$0Rbtcz4c.Z2aafGRuMZ22OwxQQyHCTNo7ugVDgKASwfm21JKQnzW2', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(8, 'سهير جهاد', 'nimry.layth@example.net', 0, 'انثى', 7, NULL, 1, '$2y$10$A0Xi36RGz8Hq5uq4uGajH.9XPdYBQRkLiOvPHZBrdm8kMU2l65lvi', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(9, 'دانة علاء', 'samer58@example.org', 0, 'انثى', 6, NULL, 1, '$2y$10$lmd5Uf05pw98n4Gc5z0v2elIeH6OGCMvFuLC5bL/WhT3rfn7uhVR6', '2022-12-01 22:09:24', '2022-12-01 22:09:24'),
(10, 'جود رضوان', 'fadi51@example.org', 0, 'انثى', 7, NULL, 1, '$2y$10$D48Yi87/5kmI6ShTwZeA..l4l0tXZBtzZTglS4wPhuNdYA/OZxEea', '2022-12-01 22:09:24', '2022-12-01 22:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range_start` int(11) NOT NULL,
  `range_end` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `range_start`, `range_end`, `created_at`, `updated_at`) VALUES
(1, 'مبتدئ', 0, 50, NULL, NULL),
(2, 'متوسط', 50, 100, NULL, NULL),
(3, 'ممتاز', 100, 150, NULL, NULL),
(4, 'متقدم', 150, 200, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_09_26_023741_create_admins_table', 1),
(3, '2022_10_31_224626_create_topics_table', 1),
(4, '2022_10_31_224727_create_levels_table', 1),
(5, '2022_10_31_224811_create_quizzes_table', 1),
(6, '2022_10_31_224927_create_questions_table', 1),
(7, '2022_10_31_224952_create_videos_table', 1),
(8, '2022_10_31_225009_create_kids_table', 1),
(9, '2022_10_31_225118_test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_quiz_id_foreign` (`quiz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `image_url`, `quiz_id`, `created_at`, `updated_at`) VALUES
(1, 'لوحة تحتوي على دوائر كهربائية تمكن جميع مكونات الحاسب الآلي من التواصل مع بعضها', 'اللوحة الام Motherboard', NULL, 1, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(2, 'معالجة البيانات وتحويلها من الصيغة التي يتعامل معها الحاسب الآلي ومكوناته إلى الشكل الذي يظهر للمستخدم', 'وحدة المعالجة المركزية CPU', NULL, 1, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(3, 'تخزين البيانات الخاصة بالبرامج والعمليات التي يقوم المستخدم باستخدامها بشكل مستمر،', 'الذاكرة العشوائية RAM', NULL, 1, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(4, 'معالجة الصور والرسومات لعرضها بشكل سلسل وصريح', 'وحدة معالجة الرسوم ROM', NULL, 1, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(5, 'يخزن عليها كافة البيانات من صور وملفات ومقاطع فيديو وما إلى ذلك', 'وحدات وأجهزة التخزين Storage Devices', NULL, 1, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(6, NULL, 'شاشة الكمبيوتر', 'screen.jpg', 2, '2022-12-01 22:09:21', '2022-12-01 22:09:21'),
(7, NULL, 'الماوس او الفأرة', 'mouse.jpg', 2, '2022-12-01 22:09:21', '2022-12-01 22:09:21'),
(8, NULL, 'لوحة المفاتيح او الكيبورد', 'keyboard.jpg', 2, '2022-12-01 22:09:21', '2022-12-01 22:09:21'),
(9, NULL, 'وحدة المعالجة المركزية او الكيسة او cpu', 'cpu.jpg', 2, '2022-12-01 22:09:21', '2022-12-01 22:09:21'),
(10, NULL, 'القرص المضغوط او cd rom', 'cd.jpg', 2, '2022-12-01 22:09:21', '2022-12-01 22:09:21'),
(11, NULL, 'السماعات', 'headphone.jpg', 2, '2022-12-01 22:09:21', '2022-12-01 22:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `question_point` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quizzes_topic_id_foreign` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `title`, `subtitle`, `description`, `points`, `question_point`, `type`, `topic_id`, `created_at`, `updated_at`) VALUES
(1, 'الاختبار الاول', 'ضع الاجابة الصحيحة امام التعريف الخاص بها', 'اختبار عن التعاريف الخاصة بالحاسوب', 10, 2, 'text', 1, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(2, 'الاختبار الثانى', 'ضع الاجابة الصحيحة امام الصورة الخاصة بها', 'اختبار عن الصور الخاصة بالحاسوب', 18, 3, 'photo', 4, '2022-12-01 22:09:20', '2022-12-01 22:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kid_id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test_kid_id_foreign` (`kid_id`),
  KEY `test_quiz_id_foreign` (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'اساسيات علم الحاسوب', '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(2, 'اجهزة الحاسب الالى', '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(3, 'شبكة الانترنت', '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(4, 'محتويات الحاسب الالى', '2022-12-01 22:09:20', '2022-12-01 22:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `videos_topic_id_foreign` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `video_url`, `description`, `topic_id`, `created_at`, `updated_at`) VALUES
(1, 'مكونات الحاسوب', 'مكونات-الحاسوب-1.mp4', 'مكونات الحاسوب', 3, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(2, 'المكونات الثانوية للحاسوب', 'مكونات-الحاسوب-2.mkv', 'المكونات الثانوية للحاسوب', 1, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(3, 'المكونات الداخلية للحاسوب', 'مكونات-الحاسوب-3.mkv', 'المكونات الداخلية للحاسوب', 4, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(4, 'انواع الحاسوب', 'انواع-الحواسيب.mkv', 'انواع الحاسوب', 4, '2022-12-01 22:09:20', '2022-12-01 22:09:20'),
(5, 'وحدات الادخال', 'وحدات-الادخال.mp4', 'وحدات الادخال', 3, '2022-12-01 22:09:20', '2022-12-01 22:09:20');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kids`
--
ALTER TABLE `kids`
  ADD CONSTRAINT `kids_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_kid_id_foreign` FOREIGN KEY (`kid_id`) REFERENCES `kids` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

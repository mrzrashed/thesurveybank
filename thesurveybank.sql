-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 09:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesurveybank`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Department of Computer Science and Engineering', 1, NULL, NULL),
(2, 'Department of Software Engineering', 2, NULL, NULL),
(3, 'Department of Business Administration\r\n', 3, NULL, NULL),
(4, 'Department of Electrical and Electronic Engineering\r\n', 4, NULL, NULL);

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
(3, '2019_09_08_164031_create_surveys_table', 1),
(4, '2019_09_08_164140_create_researchers_table', 1),
(5, '2019_09_08_164235_create_results_table', 1),
(6, '2019_09_08_164315_create_questions_table', 1),
(7, '2019_09_08_164351_create_question_options_table', 1),
(8, '2019_09_13_180854_create_user_roles_table', 1),
(9, '2019_09_13_181829_create_departments_table', 1),
(10, '2019_09_13_181900_create_semesters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mrzrashed01@gmail.com', '$2y$10$09A7Bt/gE1cawcrTdufLS.3xq6TEJ/wV0uWssk90vQh7bmIbqcx0.', '2019-09-14 12:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `question_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `survey_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_title`, `survey_id`, `created_at`, `updated_at`) VALUES
(6, 'Please rate our Products or Services for the Quality?', 2, NULL, NULL),
(7, 'Please rate our Products or Services for the Speed ?', 2, NULL, NULL),
(8, 'Please rate our Products or Services for the Cost effectiveness?', 2, NULL, NULL),
(9, 'Please rate our Products or Services for the Value for money?', 2, NULL, NULL),
(10, 'Please rate our Products or Services for the Reliability?', 2, NULL, NULL),
(11, 'Project has been successful, and driven desired business results', 3, NULL, NULL),
(12, 'Team\'s expectations and requirements were understood and effectively implemented', 3, NULL, NULL),
(13, 'Project information was communicated in a timely and effective manner', 3, NULL, NULL),
(14, 'Project execution was effective, based upon established best practices, processes and tools', 3, NULL, NULL),
(15, 'Overall rating for the success of the project', 3, NULL, NULL),
(21, 'Project has been successful, and driven desired business results', 5, NULL, NULL),
(22, 'Team\'s expectations and requirements were understood and effectively implemented?', 5, NULL, NULL),
(23, 'Project information was communicated in a timely and effective manner?', 5, NULL, NULL),
(24, 'Project execution was effective, based upon established best practices, processes and tools', 5, NULL, NULL),
(25, 'Please rate our Products or Services for the Reliability?', 5, NULL, NULL),
(26, 'Project has been successful, and driven desired business results', 6, NULL, NULL),
(27, 'Team\'s expectations and requirements were understood and effectively implemented', 6, NULL, NULL),
(28, 'Project information was communicated in a timely and effective manner', 6, NULL, NULL),
(29, 'Project execution was effective, based upon established best practices, processes and tools', 6, NULL, NULL),
(30, 'Overall rating for the success of the project', 6, NULL, NULL),
(31, 'Project has been successful, and driven desired business results', 7, NULL, NULL),
(32, 'Team\'s expectations and requirements were understood and effectively implemented', 7, NULL, NULL),
(33, 'Project information was communicated in a timely and effective manner?', 7, NULL, NULL),
(34, 'Project execution was effective, based upon established best practices, processes and tools', 7, NULL, NULL),
(35, 'Please rate our Products or Services for the Reliability?', 7, NULL, NULL),
(36, 'Project has been successful, and driven desired business results', 8, NULL, NULL),
(37, 'Team\'s expectations and requirements were understood and effectively implemented', 8, NULL, NULL),
(38, 'Project information was communicated in a timely and effective manner?', 8, NULL, NULL),
(39, 'Project execution was effective, based upon established best practices, processes and tools', 8, NULL, NULL),
(40, 'Please rate our Products or Services for the Reliability?', 8, NULL, NULL),
(41, 'Project has been successful, and driven desired business results', 9, NULL, NULL),
(42, 'Team\'s expectations and requirements were understood and effectively implemented', 9, NULL, NULL),
(43, 'Please rate our Products or Services for the Cost effectiveness?', 9, NULL, NULL),
(44, 'Please rate our Products or Services for the Value for money?', 9, NULL, NULL),
(45, 'Overall rating for the success of the project?', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `option_id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`option_id`, `title`, `question_id`, `created_at`, `updated_at`) VALUES
(26, 'Strongly Agree', 6, NULL, NULL),
(27, 'Agree', 6, NULL, NULL),
(28, 'Neutral', 6, NULL, NULL),
(29, 'Disagree', 6, NULL, NULL),
(30, 'Strongly Disagree', 6, NULL, NULL),
(31, 'Strongly Agree', 7, NULL, NULL),
(32, 'Agree', 7, NULL, NULL),
(33, 'Neutral', 7, NULL, NULL),
(34, 'Disagree', 7, NULL, NULL),
(35, 'Strongly Disagree', 7, NULL, NULL),
(36, 'Strongly Agree', 8, NULL, NULL),
(37, 'Agree', 8, NULL, NULL),
(38, 'Neutral', 8, NULL, NULL),
(39, 'Disagree', 8, NULL, NULL),
(40, 'Strongly Disagree', 8, NULL, NULL),
(41, 'Strongly Agree', 9, NULL, NULL),
(42, 'Agree', 9, NULL, NULL),
(43, 'Neutral', 9, NULL, NULL),
(44, 'Disagree', 9, NULL, NULL),
(45, 'Strongly Disagree', 9, NULL, NULL),
(46, 'Strongly Agree', 10, NULL, NULL),
(47, 'Agree', 10, NULL, NULL),
(48, 'Neutral', 10, NULL, NULL),
(49, 'Disagree', 10, NULL, NULL),
(50, 'Strongly Disagree', 10, NULL, NULL),
(51, 'Strongly Agree', 11, NULL, NULL),
(52, 'Agree', 11, NULL, NULL),
(53, 'Neutral', 11, NULL, NULL),
(54, 'Disagree', 11, NULL, NULL),
(55, 'Strongly Disagree', 11, NULL, NULL),
(56, 'Strongly Agree', 12, NULL, NULL),
(57, 'Agree', 12, NULL, NULL),
(58, 'Neutral', 12, NULL, NULL),
(59, 'Disagree', 12, NULL, NULL),
(60, 'Strongly Disagree', 12, NULL, NULL),
(61, 'Strongly Agree', 13, NULL, NULL),
(62, 'Agree', 13, NULL, NULL),
(63, 'Neutral', 13, NULL, NULL),
(64, 'Disagree', 13, NULL, NULL),
(65, 'Strongly Disagree', 13, NULL, NULL),
(66, 'Strongly Agree', 14, NULL, NULL),
(67, 'Agree', 14, NULL, NULL),
(68, 'Neutral', 14, NULL, NULL),
(69, 'Disagree', 14, NULL, NULL),
(70, 'Strongly Disagree', 14, NULL, NULL),
(71, 'Strongly Agree', 15, NULL, NULL),
(72, 'Agree', 15, NULL, NULL),
(73, 'Neutral', 15, NULL, NULL),
(74, 'Disagree', 15, NULL, NULL),
(75, 'Strongly Disagree', 15, NULL, NULL),
(101, 'Strongly Agree', 21, NULL, NULL),
(102, 'Agree', 21, NULL, NULL),
(103, 'Neutral', 21, NULL, NULL),
(104, 'Disagree', 21, NULL, NULL),
(105, 'Strongly Disagree', 21, NULL, NULL),
(106, 'Strongly Agree', 22, NULL, NULL),
(107, 'Agree', 22, NULL, NULL),
(108, 'Neutral', 22, NULL, NULL),
(109, 'Disagree', 22, NULL, NULL),
(110, 'Strongly Disagree', 22, NULL, NULL),
(111, 'Strongly Agree', 23, NULL, NULL),
(112, 'Agree', 23, NULL, NULL),
(113, 'Neutral', 23, NULL, NULL),
(114, 'Disagree', 23, NULL, NULL),
(115, 'Strongly Disagree', 23, NULL, NULL),
(116, 'Strongly Agree', 24, NULL, NULL),
(117, 'Agree', 24, NULL, NULL),
(118, 'Neutral', 24, NULL, NULL),
(119, 'Disagree', 24, NULL, NULL),
(120, 'Strongly Disagree', 24, NULL, NULL),
(121, 'Strongly Agree', 25, NULL, NULL),
(122, 'Agree', 25, NULL, NULL),
(123, 'Neutral', 25, NULL, NULL),
(124, 'Disagree', 25, NULL, NULL),
(125, 'Strongly Disagree', 25, NULL, NULL),
(126, 'Strongly Agree', 26, NULL, NULL),
(127, 'Agree', 26, NULL, NULL),
(128, 'Neutral', 26, NULL, NULL),
(129, 'Disagree', 26, NULL, NULL),
(130, 'Strongly Disagree', 26, NULL, NULL),
(131, 'Strongly Agree', 27, NULL, NULL),
(132, 'Agree', 27, NULL, NULL),
(133, 'Neutral', 27, NULL, NULL),
(134, 'Disagree', 27, NULL, NULL),
(135, 'Strongly Disagree', 27, NULL, NULL),
(136, 'Strongly Agree', 28, NULL, NULL),
(137, 'Agree', 28, NULL, NULL),
(138, 'Neutral', 28, NULL, NULL),
(139, 'Disagree', 28, NULL, NULL),
(140, 'Strongly Disagree', 28, NULL, NULL),
(141, 'Strongly Agree', 29, NULL, NULL),
(142, 'Agree', 29, NULL, NULL),
(143, 'Neutral', 29, NULL, NULL),
(144, 'Disagree', 29, NULL, NULL),
(145, 'Strongly Disagree', 29, NULL, NULL),
(146, 'Strongly Agree', 30, NULL, NULL),
(147, 'Agree', 30, NULL, NULL),
(148, 'Neutral', 30, NULL, NULL),
(149, 'Disagree', 30, NULL, NULL),
(150, 'Strongly Disagree', 30, NULL, NULL),
(151, 'Strongly Agree', 31, NULL, NULL),
(152, 'Agree', 31, NULL, NULL),
(153, 'Neutral', 31, NULL, NULL),
(154, 'Disagree', 31, NULL, NULL),
(155, 'Strongly Disagree', 31, NULL, NULL),
(156, 'Strongly Agree', 32, NULL, NULL),
(157, 'Agree', 32, NULL, NULL),
(158, 'Neutral', 32, NULL, NULL),
(159, 'Disagree', 32, NULL, NULL),
(160, 'Strongly Disagree', 32, NULL, NULL),
(161, 'Strongly Agree', 33, NULL, NULL),
(162, 'Agree', 33, NULL, NULL),
(163, 'Neutral', 33, NULL, NULL),
(164, 'Disagree', 33, NULL, NULL),
(165, 'Strongly Disagree', 33, NULL, NULL),
(166, 'Strongly Agree', 34, NULL, NULL),
(167, 'Agree', 34, NULL, NULL),
(168, 'Neutral', 34, NULL, NULL),
(169, 'Disagree', 34, NULL, NULL),
(170, 'Strongly Disagree', 34, NULL, NULL),
(171, 'Strongly Agree', 35, NULL, NULL),
(172, 'Agree', 35, NULL, NULL),
(173, 'Neutral', 35, NULL, NULL),
(174, 'Disagree', 35, NULL, NULL),
(175, 'Strongly Disagree', 35, NULL, NULL),
(176, 'Strongly Agree', 36, NULL, NULL),
(177, 'Agree', 36, NULL, NULL),
(178, 'Neutral', 36, NULL, NULL),
(179, 'Disagree', 36, NULL, NULL),
(180, 'Strongly Disagree', 36, NULL, NULL),
(181, 'Strongly Agree', 37, NULL, NULL),
(182, 'Agree', 37, NULL, NULL),
(183, 'Neutral', 37, NULL, NULL),
(184, 'Disagree', 37, NULL, NULL),
(185, 'Strongly Disagree', 37, NULL, NULL),
(186, 'Strongly Agree', 38, NULL, NULL),
(187, 'Agree', 38, NULL, NULL),
(188, 'Neutral', 38, NULL, NULL),
(189, 'Disagree', 38, NULL, NULL),
(190, 'Strongly Disagree', 38, NULL, NULL),
(191, 'Strongly Agree', 39, NULL, NULL),
(192, 'Agree', 39, NULL, NULL),
(193, 'Neutral', 39, NULL, NULL),
(194, 'Disagree', 39, NULL, NULL),
(195, 'Strongly Disagree', 39, NULL, NULL),
(196, 'Strongly Agree', 40, NULL, NULL),
(197, 'Agree', 40, NULL, NULL),
(198, 'Neutral', 40, NULL, NULL),
(199, 'Disagree', 40, NULL, NULL),
(200, 'Strongly Disagree', 40, NULL, NULL),
(201, 'Strongly Agree', 41, NULL, NULL),
(202, 'Agree', 41, NULL, NULL),
(203, 'Neutral', 41, NULL, NULL),
(204, 'Disagree', 41, NULL, NULL),
(205, 'Strongly Disagree', 41, NULL, NULL),
(206, 'Strongly Agree', 42, NULL, NULL),
(207, 'Agree', 42, NULL, NULL),
(208, 'Neutral', 42, NULL, NULL),
(209, 'Disagree', 42, NULL, NULL),
(210, 'Strongly Disagree', 42, NULL, NULL),
(211, 'Strongly Agree', 43, NULL, NULL),
(212, 'Agree', 43, NULL, NULL),
(213, 'Neutral', 43, NULL, NULL),
(214, 'Disagree', 43, NULL, NULL),
(215, 'Strongly Disagree', 43, NULL, NULL),
(216, 'Strongly Agree', 44, NULL, NULL),
(217, 'Agree', 44, NULL, NULL),
(218, 'Neutral', 44, NULL, NULL),
(219, 'Disagree', 44, NULL, NULL),
(220, 'Strongly Disagree', 44, NULL, NULL),
(221, 'Strongly Agree', 45, NULL, NULL),
(222, 'Agree', 45, NULL, NULL),
(223, 'Neutral', 45, NULL, NULL),
(224, 'Disagree', 45, NULL, NULL),
(225, 'Strongly Disagree', 45, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `researchers`
--

CREATE TABLE `researchers` (
  `rsearcher_id` int(10) UNSIGNED NOT NULL,
  `survey_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(10) UNSIGNED NOT NULL,
  `survey_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `survey_id`, `question_id`, `option_id`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 6, 26, 130, 8, NULL, NULL),
(22, 6, 27, 133, 8, NULL, NULL),
(23, 6, 28, 136, 8, NULL, NULL),
(24, 6, 29, 143, 8, NULL, NULL),
(25, 6, 30, 148, 8, NULL, NULL),
(26, 5, 21, 102, 3, NULL, NULL),
(27, 5, 22, 109, 3, NULL, NULL),
(28, 5, 23, 114, 3, NULL, NULL),
(29, 5, 24, 118, 3, NULL, NULL),
(30, 5, 25, 121, 3, NULL, NULL),
(31, 3, 11, 54, 3, NULL, NULL),
(32, 3, 12, 60, 3, NULL, NULL),
(33, 3, 13, 63, 3, NULL, NULL),
(34, 3, 14, 69, 3, NULL, NULL),
(35, 3, 15, 74, 3, NULL, NULL),
(36, 2, 6, 29, 3, NULL, NULL),
(37, 2, 7, 35, 3, NULL, NULL),
(38, 2, 8, 36, 3, NULL, NULL),
(39, 2, 9, 44, 3, NULL, NULL),
(40, 2, 10, 49, 3, NULL, NULL),
(41, 5, 21, 104, 4, NULL, NULL),
(42, 5, 22, 110, 4, NULL, NULL),
(43, 5, 23, 114, 4, NULL, NULL),
(44, 5, 24, 120, 4, NULL, NULL),
(45, 5, 25, 121, 4, NULL, NULL),
(46, 3, 11, 55, 4, NULL, NULL),
(47, 3, 12, 58, 4, NULL, NULL),
(48, 3, 13, 61, 4, NULL, NULL),
(49, 3, 14, 66, 4, NULL, NULL),
(50, 3, 15, 72, 4, NULL, NULL),
(51, 2, 6, 28, 4, NULL, NULL),
(52, 2, 7, 35, 4, NULL, NULL),
(53, 2, 8, 40, 4, NULL, NULL),
(54, 2, 9, 43, 4, NULL, NULL),
(55, 2, 10, 48, 4, NULL, NULL),
(56, 5, 21, 104, 6, NULL, NULL),
(57, 5, 22, 108, 6, NULL, NULL),
(58, 5, 23, 114, 6, NULL, NULL),
(59, 5, 24, 119, 6, NULL, NULL),
(60, 5, 25, 122, 6, NULL, NULL),
(61, 3, 11, 54, 6, NULL, NULL),
(62, 3, 12, 59, 6, NULL, NULL),
(63, 3, 13, 63, 6, NULL, NULL),
(64, 3, 14, 69, 6, NULL, NULL),
(65, 3, 15, 72, 6, NULL, NULL),
(66, 2, 6, 30, 6, NULL, NULL),
(67, 2, 7, 34, 6, NULL, NULL),
(68, 2, 8, 39, 6, NULL, NULL),
(69, 2, 9, 45, 6, NULL, NULL),
(70, 2, 10, 49, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `semester_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester_name`, `semester_id`, `created_at`, `updated_at`) VALUES
(1, 'First Semester', 1, NULL, NULL),
(2, 'Second Semester', 2, NULL, NULL),
(3, 'Third Semester', 3, NULL, NULL),
(4, 'Fourth Semester', 4, NULL, NULL),
(5, 'Fifth Semester', 5, NULL, NULL),
(6, 'Sixth Semester', 6, NULL, NULL),
(7, 'Seventh Semester', 7, NULL, NULL),
(8, 'Eight Semester', 8, NULL, NULL),
(9, 'Ninth Semester', 9, NULL, NULL),
(10, 'Ten Semester', 10, NULL, NULL),
(11, 'Eleven Semester', 11, NULL, NULL),
(12, 'Twelve Semester', 12, NULL, NULL),
(13, 'Teacher', 13, NULL, NULL),
(14, 'Admin', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `survey_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reseacher_id` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`survey_id`, `title`, `reseacher_id`, `department`, `created_at`, `updated_at`) VALUES
(2, 'Product Survey', 2, 2, NULL, NULL),
(3, 'Software Engineering', 2, 2, NULL, NULL),
(5, 'Software Engineering Subjects', 5, 2, NULL, NULL),
(6, 'EEE Survey', 8, 4, NULL, NULL),
(7, 'EEE Day', 9, 4, NULL, NULL),
(8, 'Project Survey For New Subject', 2, 1, NULL, NULL),
(9, 'Project Survey for EEE Subject', 11, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userRole` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `credits` double(8,2) NOT NULL DEFAULT 100.00,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userRole`, `department`, `semester`, `credits`, `password`, `verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@diu.edu.bd', 1, 0, 0, 100.00, '$2y$10$3bv4CylNvXC/Qt8tSyWyHOLs046IrgWgnrmK67nvp6FlLAumVLyBC', 0, 'VlEHECKIhqrREBa0ZkRhOutuFxNPRRgO4xSzV5sElje22bwhvNWd4AzqzpGc', '2019-09-15 07:25:12', '2019-09-15 07:25:12'),
(2, 'Md. Rasheduzzaman Rashed', 'rashed35-1305@diu.edu.bd', 4, 2, 12, 10.00, '$2y$10$YRo/lOHtT2kzcHWa7kiyLu1bEXfbRvxyZww.0LVmJQnjKkZFx2lLa', 0, 'uEWxUZTRTp1wmVIkUV7F5urgpr5HZMa0yWErnTABL3xOZYFkiI25fb3K8NBV', '2019-09-17 13:32:00', '2019-09-17 13:32:49'),
(3, 'Rakesh', 'rakesh@diu.edu.bd', 5, 2, 1, 140.00, '$2y$10$P9Bz54SuBOxYTwwxcprScO7cIFhe55dAN9vK1xyXfJmigw12ua5aO', 0, 'I8PuaYvnrzC3Phj9nm8TBtaFwolEqolEHC5bBLBfEyfG4UmzCLA3YoH6tua6', '2019-09-15 07:50:19', '2019-09-16 12:40:42'),
(4, 'Shakil', 'shakil@diu.edu.bd', 5, 2, 1, 140.00, '$2y$10$RRZ6wG73vRwSwhDVR1xUGuVt4i/RpZvTtLMl.LIVQwrtucwLfEL26', 0, 'mxcKOixjlB9ZIMWAcxtWbhFPpiK3mXqWva36yxDLWVHHDROGOC63L7YqrHlx', '2019-09-15 07:55:06', '2019-09-16 12:42:06'),
(5, 'Jahid', 'jahid@diu.edu.bd', 5, 1, 1, 20.00, '$2y$10$kkoD2OjK8EnP6vWMrSnUKeBaJArhXGyb2H5cZqxaJQsLqQD3mnt9u', 0, '2xhvJQbdhn2p1u5Fq8bLq2aZyHZqBOV0VVvTrkmbNsIWLgeiVQfiLtgaggq8', '2019-09-15 08:11:19', '2019-09-15 08:11:19'),
(6, 'jabed', 'jabed@diu.edu.bd', 5, 2, 10, 140.00, '$2y$10$Bb2DcEjtjibBXz71Opi4xujHqyRCH8ScCuFM1bK5BCWfBDjLMxK3S', 0, 'FrEoUcC1Wwq5OvHRSkUfiW6KGfDE8WrPLBfhIqAb3R307Ml3UU43GYBZ6r07', '2019-09-15 08:05:55', '2019-09-16 12:44:43'),
(7, 'Jabed', 'jabed1@diu.edu.bd', 5, 1, 1, 100.00, '$2y$10$IvmduyzX9u.ECh7OB2WWT..7.ldke/HBPzVohlVNkrRdXsLk7K6Te', 0, 'DzUL6pSsBoGeu0jeCO2NCaCdzASfrx27qFwAdKvigja80nnelYPkf6ep3BdW', '2019-09-16 03:32:29', '2019-09-16 03:32:29'),
(8, 'Rashed', 'rashed1@diu.edu.bd', 4, 4, 1, 20.00, '$2y$10$VOw.aUUEXkcMtkSmB5b0wOBg5ADA9hpKYGEp.VPkLB/9F4bZ6377u', 0, 'bvgMAhKrWGy6d6SSjgytqImKKymCAlCaImop6zKKvsOckc2GpzNLhIu9GmmY', '2019-09-16 03:36:12', '2019-09-16 03:36:12'),
(9, 'Zahidul', 'zahidul@diu.edu.bd', 4, 3, 11, 10.00, '$2y$10$vcWm8EIVSc3Oyg.8IyccFuOu342P7XVTTNhPbSYcQNPDwsqWFiqhu', 0, 'O8Nl2eEpy6auWFmPJaB2JdV4rtin3CCM3mJMRffQgT9w93cQNy6KQAnGRw6v', '2019-09-16 12:25:32', '2019-09-16 12:27:16'),
(10, 'Sumona', 'sumona@diu.edu.bd', 4, 3, 13, 100.00, '$2y$10$m9.3nMEqDO7LgFHbQpk2VeCLOzDfx9uyjZmzqMsJ8tvHwtiWw5h.C', 0, '0HqAAT9M8gm98pj3Ktm5xq8GPZOKPr1ykebCz5Fg4UljK9gDQ3LbcfoYQl0E', '2019-09-17 23:13:23', '2019-09-17 23:13:23'),
(11, 'Rakiba', 'rakiba@diu.edu.bd', 4, 4, 12, 10.00, '$2y$10$i7POx377jQ5mGw5aiiV.huCK7KXbG.JqOIspl04g.J75aMYY8fiKW', 0, 'Pt8n72uuXDgdaK8EHrK7VZkQebvRLY2YRZHyyvHXiyjg27Gvi8NFfZQcrUSR', '2019-09-17 23:14:32', '2019-09-17 23:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `userRole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `userRole`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, NULL, NULL),
(2, 'Researcher', 4, NULL, NULL),
(3, 'Survey User', 5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `researchers`
--
ALTER TABLE `researchers`
  ADD PRIMARY KEY (`rsearcher_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `option_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `researchers`
--
ALTER TABLE `researchers`
  MODIFY `rsearcher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `survey_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

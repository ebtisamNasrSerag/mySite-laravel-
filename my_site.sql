-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 10:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `desc_ar`, `desc_en`, `img`, `created_at`, `updated_at`) VALUES
(1, 'قسم 1', 'category 1', 'عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت لصنع كتاب.', 'When an unknown printer took a galley of type and scrambled it to make a book.', '1556699824.jpg', NULL, '2019-05-01 06:37:30'),
(2, 'قسم 2', 'category 2', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، ا0</p>', '<p class=\"m-b10\"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br> Suspendisse et justo.                                                Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet.                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis                                                commyolk augue aliquam ornare augue.</p>                                            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>                                            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>', '1556699880.jpg', NULL, '2019-05-01 06:38:00'),
(3, 'قسم 3', 'category 3', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>&nbsp;</p>', '1556736529.jpg', NULL, '2019-05-01 16:48:49'),
(4, 'قسم 4', 'category 4', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة ال</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;</p>', '1556703004.jpg', NULL, '2019-05-01 15:56:44'),
(5, 'قسم 5', 'category 5', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعدد</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspter-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some nsequences, or one who avoids a pain that produces no resultant pleasure?</p>', '1556733358.jpg', NULL, '2019-05-01 16:49:09'),
(6, 'تصنيف', 'category', '<p>تصنيف&nbsp;تصنيف</p>', '<p>categorycategory&nbsp;category</p>', '1556733159.jpg', '2019-05-01 15:52:39', '2019-05-01 15:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'ebtisam', '01061512344', 'ebtisam@gmail.com', 'text message', '2019-04-29 13:45:53', '2019-04-29 13:45:53'),
(2, 'sam', '01061512377', 'sam@gmail.com', 'test from footer', '2019-04-29 13:48:47', '2019-04-29 13:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name_ar`, `name_en`, `type`, `url`, `created_at`, `updated_at`) VALUES
(1, 'تيست 1', 'test 1', 0, '1556717101.jpg', NULL, '2019-05-01 11:25:01'),
(2, 'تيست 2', 'test 2', 0, '1556736652.jpg', NULL, '2019-05-01 16:50:52'),
(3, 'تيست 3', 'test 3', 1, 'https://www.youtube.com/v/njPLHfivy9o', NULL, NULL),
(4, 'تيست 4', 'test 4', 1, 'http://www.youtube.com/v/Ahg6qcgoay4', NULL, NULL),
(5, 'تيست3', 'test3', 0, '1556736676.jpg', '2019-05-01 16:51:16', '2019-05-01 16:51:16'),
(7, 'video 33', 'http://www.youtube.com/v/Ahg6qcgoay4', 1, 'http://www.youtube.com/v/Ahg6qcgoay4', '2019-05-01 16:52:43', '2019-05-01 16:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img`, `project_id`, `created_at`, `updated_at`) VALUES
(4, '1556730898.jpg', 2, '2019-05-01 15:14:58', '2019-05-01 15:14:58'),
(5, '1556730898.jpg', 2, '2019-05-01 15:14:58', '2019-05-01 15:14:58'),
(6, '1556730898.jpg', 2, '2019-05-01 15:14:58', '2019-05-01 15:14:58'),
(10, '15567327395cc9db4316d87jpg', 3, '2019-05-01 15:45:39', '2019-05-01 15:45:39'),
(11, '15567327395cc9db434f236jpg', 3, '2019-05-01 15:45:39', '2019-05-01 15:45:39'),
(12, '15567327395cc9db43653fdjpg', 3, '2019-05-01 15:45:39', '2019-05-01 15:45:39'),
(13, '15567327395cc9db4375b14jpg', 3, '2019-05-01 15:45:39', '2019-05-01 15:45:39'),
(14, '15567364675cc9e9d3a809b.jpg', 6, '2019-05-01 16:47:47', '2019-05-01 16:47:47'),
(15, '15567364675cc9e9d3cbbda.jpg', 6, '2019-05-01 16:47:47', '2019-05-01 16:47:47');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_04_28_192642_create_sliders_table', 1),
(13, '2019_04_28_193334_create_categories_table', 1),
(14, '2019_04_28_193603_create_contacts_table', 1),
(15, '2019_04_28_193742_create_galleries_table', 1),
(16, '2019_04_28_194344_create_projects_table', 1),
(17, '2019_04_28_194517_create_services_table', 1),
(18, '2019_04_28_194629_create_site_data_table', 1),
(19, '2019_04_28_195041_create_why_us_table', 1),
(20, '2019_05_01_155405_create_images_table', 2);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name_ar`, `name_en`, `desc_ar`, `desc_en`, `img`, `imgs`, `cat_id`, `created_at`, `updated_at`) VALUES
(2, 'مشروع 1', 'project 1', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، ا0</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>', '1556713168.jpg', '1.jpg,2.jpg,5.jpg,4.jpg', 1, NULL, '2019-05-01 10:19:28'),
(3, 'مشروع 2', 'project 2', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، ا0</p>\r\n', '<p class=\"m-b10\"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br> Suspendisse et justo.\r\n                                                Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet.\r\n                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis\r\n                                                commyolk augue aliquam ornare augue.</p>\r\n                                            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>\r\n                                            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>', 'special-item5.jpg', '1.jpg,2.jpg,5.jpg,4.jpg', 1, NULL, NULL),
(4, 'مشروع 3', 'project 3', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، ا0</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>', 'special-item6.jpg', '1.jpg,2.jpg,5.jpg,4.jpg', 3, NULL, '2019-05-01 10:01:17'),
(5, 'مشروع 4', 'project 4', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، ا0</p>\r\n', '<p class=\"m-b10\"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br> Suspendisse et justo.\r\n                                                Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet.\r\n                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis\r\n                                                commyolk augue aliquam ornare augue.</p>\r\n                                            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>\r\n                                            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>', 'special-item4.jpg', '1.jpg,2.jpg', 5, NULL, NULL),
(6, 'مشروع 5', 'project 5', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، ا0</p>\r\n', '<p class=\"m-b10\"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br> Suspendisse et justo.\r\n                                                Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet.\r\n                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis\r\n                                                commyolk augue aliquam ornare augue.</p>\r\n                                            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>\r\n                                            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>', 'special-item1.jpg', '1.jpg,2.jpg', 2, NULL, NULL),
(7, 'مشروع 6', 'project 6', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، ا0</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>', '1556713147.jpg', '1.jpg,2.jpg,5.jpg,4.jpg', 3, NULL, '2019-05-01 10:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name_ar`, `name_en`, `desc_ar`, `desc_en`, `img`, `created_at`, `updated_at`) VALUES
(1, 'خدمة 1', 'service 1', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من ح</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>o resultant pleasure?</p>', '1556715086.jpg', NULL, '2019-05-01 16:43:12'),
(2, 'خدمة 2', 'service 2', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على&nbsp;</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>consequences, or one who avoids a pain that produces no resultant pleasure?</p>', '1556715111.jpg', NULL, '2019-05-01 16:42:56'),
(3, 'خدمة 3', 'service 3', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على&nbsp;</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>&nbsp;</p>', '1556736157.jpg', NULL, '2019-05-01 16:42:37'),
(4, 'خدمة 4', 'service 4', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيه</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>\r\n\r\n<p>&nbsp;</p>', '1556736119.jpg', NULL, '2019-05-01 16:41:59'),
(5, 'خدمة 5', 'service 5', '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شرك</p>', '<p><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br />\r\nSuspendisse et justo. Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue aliquam ornare augue.</p>\r\n\r\n<p>&nbsp;</p>', '1556715129.jpg', NULL, '2019-05-01 16:41:33'),
(6, 'تيست', 'test', '<p>تفاصيل التيست</p>', '<p>tets services</p>', '1556736240.jpg', '2019-05-01 16:44:00', '2019-05-01 16:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `site_data`
--

CREATE TABLE `site_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_data`
--

INSERT INTO `site_data` (`id`, `about_ar`, `about_en`, `logo`, `address_ar`, `address_en`, `phone`, `email`, `facebook`, `twitter`, `youtube`, `insta`, `map_lat`, `map_lng`, `created_at`, `updated_at`) VALUES
(1, '<p>في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهاتساهم شركة مطاعم ة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمهفي خدمة المجتمع، ا01</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged. It was popularised in the with the .01</p>', '1556638828.png', 'القاهره , المنوفيه , شبين الكوم 1', 'cario,menoufia,shibeen alkom 1', '0121214152 1', 'test@gmail.com1', 'https://www.facebook.com/ 1', 'https://www.twitter.com/ 1', 'https://www.youtube.com/ 1', 'https://www.instagram.com/ 1', '26.551085100928486', '31.777697268383804', NULL, '2019-05-01 16:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_details` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title_ar`, `title_en`, `details_ar`, `details_en`, `show_details`, `created_at`, `updated_at`) VALUES
(2, '1556695338.jpg', '2مرحبا بك', 'welcome 2', 'تساهم شركة بدور قيادي وفعال في خدمة المجتمع، انطلاقًا من وعيها لمسؤولياتها المتعددة بدءًا من حرصها على سلامة وجباتها وتقديمها', 'A leading company in the service of the community, the company is aware of its multiple responsibilities starting from its concern for the safety of its meals and delivery', 0, NULL, '2019-05-01 05:22:18'),
(3, '1556669413.jpg', 'تيست', 'test', 'تفاصيل التيست', 'test details', 0, '2019-04-30 22:10:13', '2019-05-01 05:34:01'),
(4, '1556681937.jpg', 'الفكره44', 'gfdf44', 'تفاصيل التيست44', 'test detailssdADGHJL;44', 0, '2019-05-01 01:38:57', '2019-05-01 05:22:42'),
(6, '1556692545.jpg', 'تيست55551', 'test55551', 'تفاصيل التيست5551', 'test details55551', 0, '2019-05-01 04:35:45', '2019-05-01 15:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'admin@admin.com', NULL, '$2y$10$gv4a8vAAh3nDBgvFfmOOVemOFeqGyFS85cYNXXBHG13N.GFm5LGlq', NULL, '2019-04-30 01:05:45', '2019-05-01 17:01:26'),
(2, 'joe', 'joe@gmail.com', NULL, '$2y$10$eIt7njgUnLuDPCtQvSwW9uRk/9iLmM7dyIb7XR1PNl1SG8T2M4DdO', NULL, '2019-04-30 02:22:51', '2019-04-30 02:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'التصميم', 'design', 'عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت لصنع كتاب.', 'When an unknown printer took a galley of type and scrambled it to make a book.', NULL, '2019-05-01 16:53:46'),
(2, 'الفكره', 'Idea', 'عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت لصنع كتاب.', 'When an unknown printer took a galley of type and scrambled it to make a book.', NULL, '2019-04-30 20:03:57'),
(3, 'المفهوم1', 'Concept1', 'عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت لصنع كتاب.1', 'When an unknown printer took a galley of type and scrambled it to make a book1.', NULL, '2019-05-01 18:04:07'),
(4, 'التنفيذ', 'excecution', 'عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت لصنع كتاب.', 'When an unknown printer took a galley of type and scrambled it to make a book.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_project_id_foreign` (`project_id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_data`
--
ALTER TABLE `site_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_data`
--
ALTER TABLE `site_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

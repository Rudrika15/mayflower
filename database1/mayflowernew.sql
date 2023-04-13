-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 11:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mayflowernew`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `text`, `status`, `created_at`, `updated_at`) VALUES
(5, '<p>Mayflower Women\'s Hospital is globally recognized as one of the leading centres for Endometriosis, gynaecology,and obstetrics.</p><p>In the 18 years, we have set new Benchmarks in performing the most complex Gynaec Endoscopy procedures with high rates of success. We are a renowned centre for Gynaec-Endoscopy and Laparoscopy surgery referred by many doctors.</p><p>We take pride in having on bord some of the finest doctors in the field of gynaecology, obstetrics, gastro-intestinal diseases, infertility , paediatrics , neonatal care , anaesthesia, foetal medicine, Endoscopy, ans Laparoscopy surgeries have performed thousands of successful surgeries and are highly acclaimed and reputed in their respective fields. </p><p><b>\"More than 800 doctors have been trained in our hospital as it is approved for Training and Research in Gynaec-Endoscopic surgeries and Advanced Laparoscopic surgery in gynaecology by several international centres.\"</p></b>', 'N', '2023-03-27 06:35:36', '2023-04-04 00:29:01'),
(6, 'abcd', 'N', '2023-03-30 01:46:11', '2023-04-01 00:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `detail`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'blog1', '<p>hello</p>', 'user.jpg', 'D', '2023-03-17 01:37:29', '2023-03-17 01:46:15'),
(2, 'blod2', '<p>hii</p>', '1680518699.jpg', 'N', '2023-03-17 01:45:13', '2023-04-03 05:14:59'),
(3, 'blod3', '<p>good morning</p>', '1680518771.jpg', 'N', '2023-04-03 05:16:11', '2023-04-03 05:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `doctormasters`
--

CREATE TABLE `doctormasters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `specilist` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctormasters`
--

INSERT INTO `doctormasters` (`id`, `userId`, `photo`, `gender`, `specilist`, `experience`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, '1677818384.jpg', 'female', 'Doctor', '10 years', 'N', '2023-03-02 22:56:13', '2023-03-02 23:09:44'),
(2, 5, 'user.jpg', 'male', 'Doctor', '8 years', 'D', '2023-03-02 22:56:51', '2023-03-02 23:10:17'),
(3, 6, 'user.jpg', 'male', 'Doctor', '5 years', 'N', '2023-03-02 23:05:18', '2023-03-02 23:05:18'),
(4, 13, '1680517235.jpg', 'female', 'Doctor', '5 years', 'N', '2023-03-04 00:01:27', '2023-04-03 04:50:35'),
(5, 14, 'user.jpg', 'female', 'Doctor', '3 years', 'N', '2023-03-04 00:02:54', '2023-04-04 05:01:17'),
(6, 15, 'user.jpg', 'female', 'Doctor', '3 years', 'N', '2023-03-04 01:38:14', '2023-04-04 05:07:55');

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
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans` longtext NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `ans`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Feedback', '<p>Our case managers are available to assist you with all your discharge questions including home health and medical equipment. When you are ready to leave the hospital, a member of our team will escort you by wheelchair to the hospital entrance where you may be picked up.</p>', 'N', '2023-03-17 02:06:03', '2023-04-04 00:30:59'),
(2, 'Informaction helpful?', '<p>yes</p><p>&nbsp;</p>', 'N', '2023-03-17 02:52:59', '2023-03-31 04:12:40'),
(3, 'Where was the Mayflower built?', '<p>The Mayflower &nbsp;set sail from Southampton, England, for North America on August 15, 1620. The ship carried Pilgrims from England to Plymouth, in modern-day Massachusetts, where they established the first permanent European settlement in 1620.</p>', 'N', '2023-03-31 00:26:23', '2023-04-04 00:21:49'),
(4, 'Do you have a parking space?', '<p>There is an exclusive car-parking area, with valet, available in the front of the hospital, a space for about 8 cars in the front, a parking space at the back of the hospital, along with a basement parking, which can accommodate 30 more cars.</p>', 'N', '2023-03-31 03:32:48', '2023-04-01 01:40:16'),
(5, 'How many visitors are allowed?', '<p>The health and safety of our patients, visitors, employees, and our communities remain a top priority. Therefore, in line with the COVID-19 pandemic, we have revised our visiting policy. Only 1 visitor will be allowed at a time.</p><p>Thank you for your understanding and cooperation.</p>', 'D', '2023-03-31 03:33:34', '2023-03-31 04:23:58'),
(6, 'When will I see a physician?', '<p>All patients are first triaged by an ER nurse. Then patients are evaluated by a physician. Patients who have a higher acuity of illness (i.e. heart attack or stroke) may be treated before those patients with less severe conditions (laceration, sprained ankle, etc.). Your patience is always appreciated.&nbsp;</p>', 'N', '2023-04-04 00:33:08', '2023-04-04 00:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `googlereviews`
--

CREATE TABLE `googlereviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `isDeleted` varchar(255) NOT NULL,
  `deleteBy` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_14_094211_create_permission_tables', 1),
(6, '2023_02_21_042947_create_masters_table', 1),
(7, '2023_02_21_064757_create_testsuggetions_table', 1),
(8, '2023_02_21_084645_create_packges_table', 1),
(9, '2023_02_21_102948_create_userpackages_table', 1),
(10, '2023_02_22_093106_create_testcenters_table', 1),
(11, '2023_02_22_103349_create_doctormasters_table', 1),
(12, '2023_02_23_062901_create_packagedetails_table', 1),
(13, '2023_02_23_085904_create_userdoctors_table', 1),
(14, '2023_02_23_104616_create_userdoctorhistories_table', 1),
(15, '2023_02_24_062059_create_userlabreports_table', 1),
(16, '2023_02_25_100011_create_usertestcenters_table', 1),
(17, '2023_02_27_040723_create_usermedicinehistories_table', 1),
(18, '2023_02_27_051300_create_usermasters_table', 1),
(19, '2023_03_06_065606_create_sampletypes_table', 2),
(21, '2023_03_17_050558_create_aboutuses_table', 4),
(22, '2023_03_17_051528_create_testtypes_table', 5),
(24, '2023_03_17_063618_create_blogs_table', 6),
(25, '2023_03_17_071710_create_f_a_q_s_table', 7),
(26, '2023_03_20_070028_create_googlereviews_table', 8),
(27, '2023_04_10_054215_create_testhisories_table', 8),
(28, '2023_04_11_051447_create_tests_table', 8),
(29, '2023_04_11_053937_create_testdetails_table', 8),
(30, '2023_04_11_090340_create_testpackages_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12);

-- --------------------------------------------------------

--
-- Table structure for table `packagedetails`
--

CREATE TABLE `packagedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `packageId` int(11) NOT NULL,
  `emotionToConvey` varchar(255) NOT NULL,
  `forPackageNames` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `sampleType` varchar(255) NOT NULL,
  `testType` varchar(255) DEFAULT NULL,
  `instructionS` varchar(255) NOT NULL,
  `consultation` varchar(255) NOT NULL,
  `awareness` varchar(255) DEFAULT NULL,
  `medicalHistory` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packagedetails`
--

INSERT INTO `packagedetails` (`id`, `packageId`, `emotionToConvey`, `forPackageNames`, `description`, `location`, `sampleType`, `testType`, `instructionS`, `consultation`, `awareness`, `medicalHistory`, `status`, `created_at`, `updated_at`) VALUES
(10, 5, 'One package that you will need', NULL, 'Comprehensive woman health check-up encompassing all the critical aspect of women\'s health', 'Home, Mayflower Clinic, Partner Lab collection', '[\"1\",\"2\"]', NULL, 'i.e. 8-12 hours of fasting is required for accurate results, morning tests , empty stomach', 'Physician,Gynaecology', NULL, 'Family medical history, Patient medical + surgical history, Intimate Evaluation', 'N', '2023-04-12 23:59:18', '2023-04-13 00:24:04'),
(11, 6, 'Diagnosing PCOS', 'Be kind to yourself', 'NEED HELP IN REFINING - Screening and detection of PCOS, consultation on positive lifestyle changes to minimize the effect', 'Home, Mayflower Clinic, Partner Lab collection', '[\"1\",\"2\"]', NULL, 'i.e. 8-12 hours of fasting is required for accurate results, morning tests , empty stomach', 'Physician, Gynaecology, Nutritionist', NULL, 'Family medical history, Patient medical + surgical history', 'N', '2023-04-13 00:06:19', '2023-04-13 00:23:48'),
(12, 7, 'Prevention is better', 'Starting early, Sex-Ed', 'Initiating health journey of young girls with early screening and counseling about body change, periods, hygiene, sexual health and more', 'Home, Mayflower Clinic, Partner Lab collection', '[\"1\",\"2\"]', NULL, 'TBA', 'Physician, Gynaecology, Nutritionist', 'PCOS (lifestyle changes), Sexual Education,  Drugs misuse education, HPV Vaccination, Menstrual Hygiene', 'Family medical history, Patient medical + surgical history', 'N', '2023-04-13 00:14:04', '2023-04-13 00:23:42'),
(13, 8, 'Balanced view on fertility', 'Non- derogatory', 'Take charge of your reproduction health with complete fertility checkup involving comprehensive diagnosis checkups', 'Home, Mayflower Clinic, Partner Lab collection', '[\"1\",\"2\"]', NULL, 'TBA', 'Physician, Gynaecology - 1st Consultation,  IVF Specialist - 2nd Consultation if required', NULL, 'Family medical history, Patient medical + surgical history, Intimate Evaluation', 'N', '2023-04-13 00:17:49', '2023-04-13 00:23:32'),
(14, 9, 'Embracing menopause', NULL, 'Screening and consulting for mature woman before they enter menopause with informed understading of incoming physical and emotional changes.', 'Home, Mayflower Clinic, Partner Lab collection', '[\"1\",\"2\"]', NULL, 'i.e. 8-12 hours of fasting is required for accurate results, morning tests , empty stomach', 'Physician, Gynaecology', NULL, 'Family medical history, Patient medical + surgical history, Intimate Evaluation', 'N', '2023-04-13 00:31:39', '2023-04-13 00:31:39'),
(15, 10, 'Comprehensive diagnos', NULL, 'Expertly crafted multiple diagnosis tests to identify the presence and severity of Endometriosis', 'Home, Mayflower Clinic, Partner Lab collection', '[\"1\",\"2\"]', NULL, 'TBA', 'Gynaecology', 'Surgical Counselling, (MF surgical excellence + surgical videos)', 'Family medical history, Patient medical + surgical history', 'N', '2023-04-13 00:37:31', '2023-04-13 00:37:31'),
(16, 11, 'Start strong - Start healthy', NULL, 'Pre-marriege screening and counselling for new couple before they step into a blooming field of fertility.', 'Home, Mayflower Clinic, Partner Lab collection', '[\"1\",\"2\"]', '2', 'TBA', 'Gynaecology Genetic Counselling', 'Contraceptive advice,  Sexual health & STDs', 'Family medical history, Patient medical + surgical history, Genetic Screening & Counselling (For eg. Thallassemia)', 'N', '2023-04-13 01:03:23', '2023-04-13 01:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `packges`
--

CREATE TABLE `packges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packges`
--

INSERT INTO `packges` (`id`, `userId`, `packageName`, `price`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 'Mayflower - All in one', 19900, 'N', NULL, NULL),
(6, 1, 'PCOS Screening', 8720, 'N', NULL, NULL),
(7, 1, 'Adolescent', 3050, 'N', NULL, NULL),
(8, 1, 'Fertility check up', 11850, 'N', NULL, NULL),
(9, 1, 'Menopausal', 14650, 'N', NULL, NULL),
(10, 1, 'Endometriosis Screening', 8620, 'N', NULL, NULL),
(11, 1, 'Premarital Counselling', 3050, 'N', NULL, NULL),
(12, 1, 'Breast Care', 9100, 'N', NULL, NULL);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(2, 'role-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(3, 'role-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(4, 'role-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(5, 'product-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(6, 'product-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(7, 'product-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(8, 'product-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(9, 'userdoctorhistory-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(10, 'userdoctorhistory-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(11, 'userdoctorhistory-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(12, 'userdoctorhistory-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(13, 'usermedicinehistory-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(14, 'usermedicinehistory-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(15, 'usermedicinehistory-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(16, 'usermedicinehistory-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(17, 'package-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(18, 'package-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(19, 'package-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(20, 'package-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(21, 'packagedetail-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(22, 'packagedetail-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(23, 'packagedetail-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(24, 'packagedetail-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(25, 'testcenter-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(26, 'testcenter-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(27, 'testcenter-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(28, 'testcenter-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(29, 'doctormaster-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(30, 'doctormaster-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(31, 'doctormaster-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(32, 'doctormaster-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(33, 'userpackage-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(34, 'userpackage-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(35, 'userpackage-edit', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(36, 'userpackage-delete', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(37, 'userlabreport-list', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(38, 'userlabreport-create', 'web', '2023-03-02 04:38:56', '2023-03-02 04:38:56'),
(39, 'userlabreport-edit', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(40, 'userlabreport-delete', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(41, 'usertestcenter-list', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(42, 'usertestcenter-create', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(43, 'usertestcenter-edit', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(44, 'usertestcenter-delete', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(45, 'usermaster-list', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(46, 'usermaster-create', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(47, 'usermaster-edit', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(48, 'usermaster-delete', 'web', '2023-03-02 04:38:57', '2023-03-02 04:38:57'),
(49, 'permission-list', 'web', NULL, NULL),
(50, 'permission-create', 'web', NULL, NULL),
(53, 'permission-edit', 'web', NULL, NULL),
(54, 'permission-delete', 'web', NULL, NULL);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-03-02 04:39:01', '2023-03-02 04:39:01'),
(2, 'Doctor', 'web', '2023-03-02 04:42:00', '2023-03-02 04:42:00'),
(3, 'Patients', 'web', '2023-03-03 04:01:27', '2023-03-05 23:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(53, 1),
(54, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sampletypes`
--

CREATE TABLE `sampletypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sampleType` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sampletypes`
--

INSERT INTO `sampletypes` (`id`, `sampleType`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blood', 'N', '2023-03-06 01:43:42', '2023-03-06 01:43:42'),
(2, 'Urine', 'N', '2023-03-06 01:44:04', '2023-03-06 01:52:38'),
(3, 'Blood', 'D', '2023-04-01 01:31:51', '2023-04-01 01:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `testcenters`
--

CREATE TABLE `testcenters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `map` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testcenters`
--

INSERT INTO `testcenters` (`id`, `name`, `address`, `map`, `city`, `landmark`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pramukh', 'to: limdi , near: bustop', 'limdi', 'limdi', 'rajkot by pass', 'N', '2023-03-02 04:58:43', '2023-03-02 04:58:43'),
(2, 'vivekanand', 'wadhwan, block no : 7', 'wadhwan , sbi bank', 'wadhwan', 'jayn derashar', 'N', '2023-03-02 04:59:53', '2023-04-04 05:07:19'),
(3, 'Krishna', 'surendranagar', 'SURENDRANAGAR', 'surendranagar', 'surendranagar', 'N', '2023-04-04 22:50:09', '2023-04-04 22:50:09'),
(4, 'shubham', 'joravnagar, surendranagar', 'surendranagar', 'surendranagar', 'joravnagar', 'N', '2023-04-04 22:52:16', '2023-04-04 22:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `testdetails`
--

CREATE TABLE `testdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testId` int(11) NOT NULL,
  `testDetailName` varchar(255) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testdetails`
--

INSERT INTO `testdetails` (`id`, `testId`, `testDetailName`, `rate`, `created_at`, `updated_at`) VALUES
(1, 1, 'Complete haemogram (24 Tests)', 350, '2023-04-12 23:36:01', '2023-04-12 23:36:01'),
(2, 1, 'Blood group & Rh', 200, '2023-04-12 23:36:31', '2023-04-12 23:36:31'),
(3, 2, 'BMI', NULL, '2023-04-12 23:36:47', '2023-04-12 23:36:47'),
(4, 3, 'Chest X Ray', 500, '2023-04-12 23:37:02', '2023-04-12 23:37:02'),
(5, 3, 'USG Abdomen KUB', 1500, '2023-04-12 23:37:41', '2023-04-12 23:37:41'),
(6, 3, 'USG Pelvis & Follicular/ Ovulation Study', 1500, '2023-04-12 23:38:01', '2023-04-12 23:38:01'),
(7, 5, 'Sono-mammography', 3000, '2023-04-12 23:38:38', '2023-04-12 23:38:38'),
(8, 6, 'PAP Smear', 850, '2023-04-12 23:38:52', '2023-04-12 23:38:52'),
(9, 7, 'RBS', 80, '2023-04-12 23:42:26', '2023-04-12 23:42:26'),
(10, 7, 'HbA1c', 600, '2023-04-12 23:42:48', '2023-04-12 23:42:48'),
(11, 8, 'TSH', 600, '2023-04-12 23:48:37', '2023-04-12 23:48:37'),
(12, 8, 'T3', 600, '2023-04-12 23:48:49', '2023-04-12 23:48:49'),
(13, 8, 'T4', 600, '2023-04-12 23:49:01', '2023-04-12 23:49:01'),
(14, 9, 'FSH', 550, '2023-04-12 23:49:15', '2023-04-12 23:49:15'),
(15, 9, 'LH', 550, '2023-04-12 23:49:26', '2023-04-12 23:49:26'),
(16, 9, 'Testesterone', 550, '2023-04-12 23:49:49', '2023-04-12 23:49:49'),
(17, 9, 'Prolactin', 550, '2023-04-12 23:50:07', '2023-04-12 23:50:07'),
(18, 9, 'AMH', 2000, '2023-04-12 23:50:19', '2023-04-12 23:50:19'),
(19, 10, 'Urine (Routine & Micro) CUA', 170, '2023-04-12 23:50:33', '2023-04-12 23:50:33'),
(20, 10, 'Creatinine', 250, '2023-04-12 23:50:43', '2023-04-12 23:50:43'),
(21, 10, 'Uric Acid', 250, '2023-04-12 23:50:53', '2023-04-12 23:50:53'),
(22, 12, 'Total Cholesterol', 700, '2023-04-12 23:51:08', '2023-04-12 23:51:08'),
(23, 12, 'HDL Cholesterol', NULL, '2023-04-12 23:51:22', '2023-04-12 23:51:22'),
(24, 12, 'LDL Cholesterol', NULL, '2023-04-12 23:51:34', '2023-04-12 23:51:34'),
(25, 12, 'Triglycerides', NULL, '2023-04-12 23:51:49', '2023-04-12 23:52:08'),
(26, 12, 'Total Cholesterol / HDL Ratio', NULL, '2023-04-12 23:52:17', '2023-04-12 23:52:17'),
(27, 13, 'SGPT', 250, '2023-04-12 23:52:33', '2023-04-12 23:52:33'),
(28, 13, 'SGOT', 250, '2023-04-12 23:52:43', '2023-04-12 23:52:43'),
(29, 13, 'Bilirubin Test (1 Parameter)', 250, '2023-04-12 23:52:52', '2023-04-12 23:52:52'),
(30, 13, 'Bilirubin-Direct (1 Parameter)', NULL, '2023-04-12 23:53:32', '2023-04-12 23:53:32'),
(31, 13, 'Proteins Test (1 Parameter)', NULL, '2023-04-12 23:53:40', '2023-04-12 23:53:40'),
(32, 13, 'Serum Albumin Test (1 Parameter)', 250, '2023-04-12 23:53:47', '2023-04-12 23:53:55'),
(33, 14, 'Beta HcG', 600, '2023-04-12 23:54:15', '2023-04-12 23:54:15'),
(34, 15, 'HIV', 400, '2023-04-12 23:54:27', '2023-04-12 23:54:27'),
(35, 15, 'HBsAg', NULL, '2023-04-12 23:54:38', '2023-04-12 23:54:38'),
(36, 15, 'VDRL', 400, '2023-04-12 23:54:48', '2023-04-12 23:54:48'),
(37, 16, 'Sodium', 250, '2023-04-12 23:54:59', '2023-04-12 23:54:59'),
(38, 16, 'Potassium', 250, '2023-04-12 23:55:10', '2023-04-12 23:55:10'),
(39, 16, 'Chloride', 250, '2023-04-12 23:55:19', '2023-04-12 23:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `testhistories`
--

CREATE TABLE `testhistories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Height` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `bmi` varchar(255) DEFAULT NULL,
  `detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`detail`)),
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testpackages`
--

CREATE TABLE `testpackages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `packageId` int(11) NOT NULL,
  `testId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testpackages`
--

INSERT INTO `testpackages` (`id`, `packageId`, `testId`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '2023-04-12 23:59:18', '2023-04-12 23:59:18'),
(2, 5, 4, '2023-04-12 23:59:18', '2023-04-12 23:59:18'),
(3, 5, 5, '2023-04-12 23:59:18', '2023-04-12 23:59:18'),
(4, 5, 6, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(5, 5, 7, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(6, 5, 8, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(7, 5, 9, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(8, 5, 10, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(9, 5, 11, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(10, 5, 12, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(11, 5, 13, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(12, 5, 14, '2023-04-12 23:59:19', '2023-04-12 23:59:19'),
(13, 6, 2, '2023-04-13 00:06:19', '2023-04-13 00:06:19'),
(14, 6, 3, '2023-04-13 00:06:20', '2023-04-13 00:06:20'),
(15, 6, 7, '2023-04-13 00:06:20', '2023-04-13 00:06:20'),
(16, 6, 8, '2023-04-13 00:06:20', '2023-04-13 00:06:20'),
(17, 6, 9, '2023-04-13 00:06:20', '2023-04-13 00:06:20'),
(18, 6, 13, '2023-04-13 00:06:20', '2023-04-13 00:06:20'),
(19, 6, 16, '2023-04-13 00:06:20', '2023-04-13 00:06:20'),
(20, 7, 2, '2023-04-13 00:14:04', '2023-04-13 00:14:04'),
(21, 7, 7, '2023-04-13 00:14:04', '2023-04-13 00:14:04'),
(22, 7, 8, '2023-04-13 00:14:04', '2023-04-13 00:14:04'),
(23, 7, 9, '2023-04-13 00:14:04', '2023-04-13 00:14:04'),
(24, 7, 10, '2023-04-13 00:14:04', '2023-04-13 00:14:04'),
(25, 7, 16, '2023-04-13 00:14:04', '2023-04-13 00:14:04'),
(26, 8, 1, '2023-04-13 00:17:49', '2023-04-13 00:17:49'),
(27, 8, 2, '2023-04-13 00:17:49', '2023-04-13 00:17:49'),
(28, 8, 3, '2023-04-13 00:17:49', '2023-04-13 00:17:49'),
(29, 8, 7, '2023-04-13 00:17:49', '2023-04-13 00:17:49'),
(30, 8, 8, '2023-04-13 00:17:49', '2023-04-13 00:17:49'),
(31, 8, 9, '2023-04-13 00:17:49', '2023-04-13 00:17:49'),
(32, 8, 10, '2023-04-13 00:17:49', '2023-04-13 00:17:49'),
(33, 8, 15, '2023-04-13 00:17:49', '2023-04-13 00:17:49'),
(34, 9, 1, '2023-04-13 00:31:39', '2023-04-13 00:31:39'),
(35, 9, 2, '2023-04-13 00:31:39', '2023-04-13 00:31:39'),
(36, 9, 3, '2023-04-13 00:31:39', '2023-04-13 00:31:39'),
(37, 9, 5, '2023-04-13 00:31:39', '2023-04-13 00:31:39'),
(38, 9, 6, '2023-04-13 00:31:39', '2023-04-13 00:31:39'),
(39, 9, 7, '2023-04-13 00:31:39', '2023-04-13 00:31:39'),
(40, 9, 8, '2023-04-13 00:31:39', '2023-04-13 00:31:39'),
(41, 9, 9, '2023-04-13 00:31:40', '2023-04-13 00:31:40'),
(42, 9, 10, '2023-04-13 00:31:40', '2023-04-13 00:31:40'),
(43, 9, 11, '2023-04-13 00:31:40', '2023-04-13 00:31:40'),
(44, 9, 12, '2023-04-13 00:31:40', '2023-04-13 00:31:40'),
(45, 9, 13, '2023-04-13 00:31:40', '2023-04-13 00:31:40'),
(46, 9, 15, '2023-04-13 00:31:40', '2023-04-13 00:31:40'),
(47, 10, 1, '2023-04-13 00:37:31', '2023-04-13 00:37:31'),
(48, 10, 3, '2023-04-13 00:37:31', '2023-04-13 00:37:31'),
(49, 10, 4, '2023-04-13 00:37:31', '2023-04-13 00:37:31'),
(50, 10, 5, '2023-04-13 00:37:31', '2023-04-13 00:37:31'),
(51, 10, 6, '2023-04-13 00:37:31', '2023-04-13 00:37:31'),
(52, 10, 9, '2023-04-13 00:37:32', '2023-04-13 00:37:32'),
(53, 10, 10, '2023-04-13 00:37:32', '2023-04-13 00:37:32'),
(54, 11, 1, '2023-04-13 01:03:23', '2023-04-13 01:03:23'),
(55, 11, 2, '2023-04-13 01:03:23', '2023-04-13 01:03:23'),
(56, 11, 7, '2023-04-13 01:03:23', '2023-04-13 01:03:23'),
(57, 11, 8, '2023-04-13 01:03:23', '2023-04-13 01:03:23'),
(58, 11, 10, '2023-04-13 01:03:23', '2023-04-13 01:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `testName`, `created_at`, `updated_at`) VALUES
(1, 'Prelimenary test', '2023-04-12 23:33:57', '2023-04-12 23:33:57'),
(2, 'BMI', '2023-04-12 23:34:03', '2023-04-12 23:34:03'),
(3, 'Radiology Imaging', '2023-04-12 23:34:11', '2023-04-12 23:34:11'),
(4, 'MRI', '2023-04-12 23:34:19', '2023-04-12 23:34:19'),
(5, 'Mammography', '2023-04-12 23:34:25', '2023-04-12 23:34:25'),
(6, 'Cancer Detection- hospital', '2023-04-12 23:34:31', '2023-04-12 23:34:31'),
(7, 'Diabetes screening (blood sugar, HbA1c)', '2023-04-12 23:34:38', '2023-04-12 23:34:38'),
(8, 'Thyroid Profile (TSH)', '2023-04-12 23:34:43', '2023-04-12 23:34:43'),
(9, 'Sexual Fertility Hormones', '2023-04-12 23:34:50', '2023-04-12 23:34:50'),
(10, 'Kidney', '2023-04-12 23:34:55', '2023-04-12 23:34:55'),
(11, 'ECG', '2023-04-12 23:35:01', '2023-04-12 23:35:01'),
(12, 'Lipid Profile', '2023-04-12 23:35:06', '2023-04-12 23:35:06'),
(13, 'Liver Function', '2023-04-12 23:35:12', '2023-04-12 23:35:12'),
(14, 'Pregnancy Test', '2023-04-12 23:35:19', '2023-04-12 23:35:19'),
(15, 'Infection Recording', '2023-04-12 23:35:25', '2023-04-12 23:35:25'),
(16, 'Electrolytes', '2023-04-12 23:35:30', '2023-04-12 23:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `testsuggetions`
--

CREATE TABLE `testsuggetions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `masterId` int(11) NOT NULL,
  `parameter` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `opration` varchar(255) NOT NULL,
  `isDeleted` varchar(255) NOT NULL,
  `deleteBy` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testtypes`
--

CREATE TABLE `testtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testType` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testtypes`
--

INSERT INTO `testtypes` (`id`, `testType`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Urine Test', 'N', '2023-03-16 23:49:07', '2023-03-16 23:49:07'),
(2, 'Blood Test', 'N', '2023-03-16 23:49:19', '2023-04-01 00:28:15'),
(3, 'Urine Test', 'D', '2023-04-01 01:31:06', '2023-04-01 01:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `userdoctorhistories`
--

CREATE TABLE `userdoctorhistories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `uploadDate` date NOT NULL,
  `suggestion` longtext NOT NULL,
  `doctorId` int(11) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userdoctorhistories`
--

INSERT INTO `userdoctorhistories` (`id`, `userId`, `title`, `uploadDate`, `suggestion`, `doctorId`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'blood opration  doctor', '2023-03-03', 'no suggestions', 2, 'N', '2023-03-02 23:14:27', '2023-03-02 23:14:27'),
(2, 4, 'doctor', '2023-03-03', 'MBBS', 2, 'N', '2023-03-02 23:14:51', '2023-03-02 23:14:51'),
(3, 2, 'Dentist', '2023-03-04', 'MDS', 6, 'N', '2023-03-02 23:21:55', '2023-03-04 00:46:29'),
(4, 2, 'Endocrinologist', '2023-03-04', 'MBBS', 6, 'N', '2023-03-02 23:22:38', '2023-03-04 00:47:00'),
(5, 3, 'Radiologist', '2023-03-03', 'MRI', 6, 'N', '2023-03-02 23:23:15', '2023-03-02 23:23:15'),
(6, 2, 'Radiologist', '2023-03-03', 'No Suggestion', 6, 'N', '2023-03-03 03:36:00', '2023-03-03 03:36:00'),
(7, 2, 'opration', '2023-03-03', 'No', 6, 'D', '2023-03-03 03:36:43', '2023-03-03 03:36:49'),
(8, 3, 'hello', '2023-03-04', 'hii', 6, 'N', '2023-03-03 03:45:38', '2023-03-04 00:47:40'),
(9, 9, 'Cardiologists', '2023-03-04', 'MBBS', 6, 'N', '2023-03-04 00:27:39', '2023-03-04 01:07:01'),
(10, 12, 'audiologists', '2023-03-04', 'No Suggestion', 6, 'N', '2023-03-04 00:49:31', '2023-03-04 01:07:13'),
(11, 3, 'dentists', '2023-03-04', 'MBBS', 6, 'N', '2023-03-04 00:50:02', '2023-03-04 00:51:32'),
(12, 10, 'pediatricians', '2023-03-04', 'no suggestions', 6, 'N', '2023-03-04 00:53:35', '2023-03-04 00:53:35'),
(13, 2, 'dentists', '2023-03-04', 'MBBS', 6, 'N', '2023-03-04 01:08:29', '2023-03-04 01:08:38'),
(14, 4, 'dentists', '2023-03-04', 'MBBS', 6, 'N', '2023-03-04 01:10:11', '2023-03-04 01:11:37'),
(15, 3, 'pediatricians', '2023-03-04', 'no suggestions', 6, 'N', '2023-03-04 01:10:42', '2023-03-04 01:11:09'),
(16, 2, 'pediatricians', '2023-03-04', 'no suggestions', 6, 'N', '2023-03-04 01:12:23', '2023-03-04 01:13:23'),
(17, 4, 'pediatricians', '2023-03-04', 'no suggestions', 6, 'N', '2023-03-04 01:13:12', '2023-03-04 01:13:12'),
(19, 12, 'Hypochondriacs and hypersensitive patients', '2023-03-04', 'No Suggestion', 14, 'N', '2023-03-04 03:22:12', '2023-03-04 03:23:26'),
(20, 11, 'THIRD BHMS', '2023-04-01', 'No', 14, 'N', '2023-03-04 03:24:24', '2023-04-01 04:12:38'),
(21, 12, 'Indolent patients', '2023-03-04', 'laziness', 14, 'D', '2023-03-04 03:25:10', '2023-03-04 03:25:16'),
(22, 11, 'pediatricians', '2023-04-03', 'No', 6, 'N', '2023-04-03 04:56:45', '2023-04-03 04:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `userdoctors`
--

CREATE TABLE `userdoctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `isDeleted` varchar(255) NOT NULL,
  `deleteBy` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlabreports`
--

CREATE TABLE `userlabreports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `testCenterId` int(11) NOT NULL,
  `document` varchar(255) NOT NULL,
  `note` longtext NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userlabreports`
--

INSERT INTO `userlabreports` (`id`, `userId`, `testCenterId`, `document`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1680592386.pdf', 'blood report', 'N', '2023-04-04 01:43:06', '2023-04-04 01:43:06'),
(2, 1, 2, '1680592412.docx', 'brand report', 'N', '2023-04-04 01:43:32', '2023-04-04 01:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `usermasters`
--

CREATE TABLE `usermasters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usermedicinehistories`
--

CREATE TABLE `usermedicinehistories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `medicineDetails` varchar(255) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usermedicinehistories`
--

INSERT INTO `usermedicinehistories` (`id`, `userId`, `doctorId`, `medicine`, `medicineDetails`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Tremors', 'Palpitations', 'N', '2023-03-02 23:15:12', '2023-03-02 23:15:12'),
(2, 4, 2, 'Palpitations', 'Tremors', 'N', '2023-03-02 23:15:24', '2023-03-02 23:15:24'),
(3, 3, 2, 'melphalan', 'Tremors', 'N', '2023-03-02 23:15:38', '2023-03-02 23:15:38'),
(4, 5, 6, 'Tremors', 'Palpitations', 'N', '2023-03-02 23:23:37', '2023-03-02 23:23:37'),
(5, 3, 6, 'Palpitations', 'Tremors', 'N', '2023-03-02 23:23:50', '2023-03-02 23:23:50'),
(6, 4, 6, 'melphalan', 'Palpitations', 'N', '2023-03-02 23:24:03', '2023-03-02 23:24:03'),
(7, 2, 6, 'Palpitations', 'Tremors', 'N', '2023-03-03 03:38:17', '2023-03-03 03:38:17'),
(8, 2, 6, 'melphalan', 'melphalan', 'N', '2023-03-03 03:38:35', '2023-03-03 03:39:03'),
(9, 4, 6, 'Palpitations', 'melphalan', 'N', '2023-03-03 03:39:25', '2023-03-04 00:52:12'),
(10, 11, 14, 'Palpitations', 'Palpitations 2', 'N', '2023-03-04 03:28:06', '2023-03-04 03:28:06'),
(11, 12, 14, 'Tremors', 'Palpitations', 'N', '2023-03-04 03:28:19', '2023-03-04 03:28:19'),
(12, 11, 6, 'melphalan', 'Palpitations', 'N', '2023-04-03 04:58:00', '2023-04-03 04:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `userpackages`
--

CREATE TABLE `userpackages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `packageDetailId` int(11) NOT NULL,
  `dateOfPurchase` date NOT NULL,
  `validUpto` date NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userpackages`
--

INSERT INTO `userpackages` (`id`, `userId`, `packageDetailId`, `dateOfPurchase`, `validUpto`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-12-12', '2022-12-15', 'N', '2023-03-02 23:11:29', '2023-03-02 23:11:29'),
(2, 1, 3, '2023-02-15', '2023-03-02', 'N', '2023-03-02 23:11:57', '2023-03-02 23:11:57'),
(3, 1, 1, '2022-05-12', '2023-04-01', 'N', '2023-04-01 01:32:53', '2023-04-04 05:01:37'),
(4, 1, 2, '2022-12-15', '2023-05-15', 'N', '2023-04-04 05:03:11', '2023-04-04 05:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `age` timestamp NULL DEFAULT NULL,
  `gender` timestamp NULL DEFAULT NULL,
  `status` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `age`, `gender`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ZGcTf0FuP9OY2fQApfPsleHRueXdsI.07KyFHdrLtijgssAMcgFC.', NULL, NULL, NULL, NULL, '2023-03-02 22:54:17', '2023-03-02 22:54:17'),
(4, 'Keval', 'keval@gmail.com', NULL, '$2y$10$EASHZz8y9kVuTclJv8yuy.SgHJXNDw1acPu4kUn2XXL9nHA1qhIJ.', NULL, NULL, NULL, NULL, '2023-03-02 22:56:13', '2023-03-02 22:56:13'),
(5, 'parth', 'parth@gmail.com', NULL, '$2y$10$apajqGvb/p909M.fRKZVHexasRn4lBSu85VRhZFpUYKSzVHgO.C6q', NULL, NULL, NULL, NULL, '2023-03-02 22:56:51', '2023-03-02 22:56:51'),
(6, 'meet', 'meet@gmail.com', NULL, '$2y$10$eGhZv6VyuS9KgzAQTBoYweFBC6QrR9JtMh0MgMxAGyXUDs120kS.m', NULL, NULL, NULL, NULL, '2023-03-02 23:05:18', '2023-03-02 23:05:18'),
(10, 'Rudrika Dave', 'rudrika@gmail.com', NULL, '$2y$10$NXqQwZYAnVxBOQ5sy8BPP.X/ExHTwPoL7zdAIEbjTecRYfFYOBgrq', NULL, NULL, NULL, NULL, '2023-03-03 04:28:55', '2023-03-03 04:28:55'),
(11, 'manshi', 'manshi@gmail.com', NULL, '$2y$10$8D1MGLBFqSkK7UC7NjveiO/GqUlJAoTTwJ0qRRUIUwo3/4kTc63Ri', NULL, NULL, NULL, NULL, '2023-03-03 04:33:22', '2023-03-03 04:33:22'),
(12, 'jay', 'jay@gmail.com', NULL, '$2y$10$XCc9OTBhyt6uEm1CVlI9E.qXBOmS6nYbByoeBudVttU.lGq/MRoiG', NULL, NULL, NULL, NULL, '2023-03-03 04:41:07', '2023-03-03 04:41:07'),
(13, 'arpita', 'arpita@gmail.com', NULL, '$2y$10$huv1uFjy7Py2t91GuSgl0OzqU8OjJ.nxumfYDYm7PpVUqLjHlvQC2', NULL, NULL, NULL, NULL, '2023-03-04 00:01:27', '2023-03-04 00:01:27'),
(14, 'Madhvi', 'madhvi@gmail.com', NULL, '$2y$10$5xcwDg3OH55tNa9v8WQ/jek3ybXrzs//WU6fed8A37.9127iffrt.', NULL, NULL, NULL, NULL, '2023-03-04 00:02:54', '2023-03-04 00:02:54'),
(15, 'vishva', 'vishva@gmail.com', NULL, '$2y$10$9Ph8ASKYbTepPzxIzypPyudJt2kO0VudU5wRG0L18CqCkzvqB/EJ2', NULL, NULL, NULL, NULL, '2023-03-04 01:38:14', '2023-03-04 01:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `usertestcenters`
--

CREATE TABLE `usertestcenters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `testCenterId` int(11) NOT NULL,
  `status` enum('Y','N','D') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usertestcenters`
--

INSERT INTO `usertestcenters` (`id`, `userId`, `testCenterId`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'N', '2023-03-02 23:13:00', '2023-03-02 23:13:00'),
(2, 1, 2, 'N', '2023-03-02 23:13:07', '2023-03-02 23:13:07'),
(3, 1, 3, 'N', '2023-04-04 23:08:06', '2023-04-04 23:08:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctormasters`
--
ALTER TABLE `doctormasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `googlereviews`
--
ALTER TABLE `googlereviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
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
-- Indexes for table `packagedetails`
--
ALTER TABLE `packagedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packges`
--
ALTER TABLE `packges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `sampletypes`
--
ALTER TABLE `sampletypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testcenters`
--
ALTER TABLE `testcenters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdetails`
--
ALTER TABLE `testdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testhistories`
--
ALTER TABLE `testhistories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testpackages`
--
ALTER TABLE `testpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testsuggetions`
--
ALTER TABLE `testsuggetions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testtypes`
--
ALTER TABLE `testtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdoctorhistories`
--
ALTER TABLE `userdoctorhistories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdoctors`
--
ALTER TABLE `userdoctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlabreports`
--
ALTER TABLE `userlabreports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermasters`
--
ALTER TABLE `usermasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermedicinehistories`
--
ALTER TABLE `usermedicinehistories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpackages`
--
ALTER TABLE `userpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usertestcenters`
--
ALTER TABLE `usertestcenters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctormasters`
--
ALTER TABLE `doctormasters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `googlereviews`
--
ALTER TABLE `googlereviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `packagedetails`
--
ALTER TABLE `packagedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `packges`
--
ALTER TABLE `packges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sampletypes`
--
ALTER TABLE `sampletypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testcenters`
--
ALTER TABLE `testcenters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testdetails`
--
ALTER TABLE `testdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `testhistories`
--
ALTER TABLE `testhistories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testpackages`
--
ALTER TABLE `testpackages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testsuggetions`
--
ALTER TABLE `testsuggetions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testtypes`
--
ALTER TABLE `testtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdoctorhistories`
--
ALTER TABLE `userdoctorhistories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userdoctors`
--
ALTER TABLE `userdoctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlabreports`
--
ALTER TABLE `userlabreports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usermasters`
--
ALTER TABLE `usermasters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usermedicinehistories`
--
ALTER TABLE `usermedicinehistories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userpackages`
--
ALTER TABLE `userpackages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usertestcenters`
--
ALTER TABLE `usertestcenters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

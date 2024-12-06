-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2024 at 04:31 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `AppointmentNumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MobileNumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AppointmentDate` date NOT NULL,
  `AppointmentTime` time NOT NULL,
  `Specialization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Doctor` bigint UNSIGNED NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci,
  `ApplyDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointments_doctor_id_foreign` (`Doctor`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `AppointmentNumber`, `Name`, `MobileNumber`, `Email`, `AppointmentDate`, `AppointmentTime`, `Specialization`, `Doctor`, `Message`, `ApplyDate`, `Remark`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'APP6330', 'Abelardo Dickens IV', '5364953480', 'skye.hartmann@example.net', '2020-05-04', '07:53:04', 'Neurology', 3, 'Iste mollitia aliquam quae.', '1970-08-06 10:59:14', 'Doctor unavailable, appointment postponed.', 'pending', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(2, 'APP0308', 'Crystal Wisozk IV', '1361961479', 'joshua.erdman@example.org', '2006-10-11', '23:40:51', 'Neurology', 7, 'Fugit saepe fugit delectus ut eligendi.', '1987-12-03 11:04:01', 'Appointment rescheduled.', 'approved', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(3, 'APP1142', 'Ms. Lenore Welch', '8707188172', 'boyd.homenick@example.net', '2022-08-26', '19:09:20', 'Neurology', 6, 'Dignissimos amet a a repellat impedit.', '1992-03-01 23:40:13', 'Appointment rescheduled.', 'approved', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(4, 'APP6857', 'Olaf Rowe', '3730841532', 'feeney.jaleel@example.org', '1972-10-04', '13:17:37', 'Pediatrics', 1, 'Harum molestiae quos distinctio eligendi ipsum.', '2006-02-26 19:09:03', 'Cancelled due to incorrect mobile number.', 'pending', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(5, 'APP1679', 'Norberto Deckow', '1467296225', 'idaugherty@example.net', '1996-02-12', '12:02:12', 'Pediatrics', 9, 'Reprehenderit rerum iste non repellat omnis vero rem.', '1977-03-29 17:51:28', 'Appointment scheduled successfully.', 'approved', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(6, 'APP6511', 'Carmelo Dare I', '8367443087', 'mfeeney@example.net', '1998-08-02', '23:06:08', 'Neurology', 2, 'Est non dolores occaecati cumque.', '2016-10-03 13:24:37', 'Appointment rescheduled.', 'cancelled', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(7, 'APP7442', 'Prof. Jarod Schaden IV', '4212363198', 'conroy.brandy@example.net', '1971-04-24', '13:42:53', 'Dermatology', 3, 'Pariatur ad qui nulla voluptatum in ab hic voluptate.', '1978-05-22 05:55:16', 'Doctor unavailable, appointment postponed.', 'pending', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(8, 'APP7055', 'Mrs. Elisha Marvin I', '8419687693', 'nicolas.alexandria@example.com', '1977-05-29', '00:52:14', 'Neurology', 2, 'Dolorem harum molestias dicta eum.', '2005-03-20 12:00:17', 'Doctor unavailable, appointment postponed.', 'pending', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(9, 'APP6682', 'Joannie Boyer', '3049289521', 'goodwin.jewell@example.net', '1976-11-03', '15:03:52', 'Pediatrics', 8, 'Dolor ut fugit voluptas sit sunt.', '2021-06-18 07:04:21', 'Doctor unavailable, appointment postponed.', 'cancelled', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(10, 'APP6404', 'Francesco Schuppe', '6831502706', 'feeney.walker@example.org', '2022-10-09', '09:56:46', 'Cardiology', 6, 'Laboriosam dolorem sint sunt officiis tempore harum.', '2005-08-02 20:32:09', 'Cancelled due to incorrect mobile number.', 'cancelled', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(11, 'APP4583', 'Dr. Alvah Kreiger', '8978161487', 'jstiedemann@example.org', '2002-08-09', '21:05:54', 'Dermatology', 7, 'Qui est molestiae atque qui labore nihil.', '2010-09-16 23:32:13', 'Appointment rescheduled.', 'cancelled', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(12, 'APP4042', 'Telly Mayert', '3182129987', 'jerde.flavie@example.net', '1999-02-26', '12:37:37', 'Dermatology', 8, 'Placeat dolor officia necessitatibus atque sed hic.', '1991-04-26 08:43:19', 'Cancelled due to incorrect mobile number.', 'cancelled', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(13, 'APP5914', 'Dedric Cole DVM', '3609611821', 'xgaylord@example.org', '1997-12-10', '18:42:45', 'Cardiology', 6, 'Vero soluta beatae dignissimos numquam neque voluptas maxime officiis.', '2024-11-16 10:43:43', 'Appointment scheduled successfully.', 'approved', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(14, 'APP3802', 'Ronaldo Mosciski', '1436292665', 'violette.hermiston@example.com', '1982-05-30', '08:17:42', 'Cardiology', 2, 'Inventore error quis modi iste quo nobis.', '2020-04-22 12:10:59', 'Doctor unavailable, appointment postponed.', 'approved', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(15, 'APP0639', 'Vance Fahey', '4724791088', 'delphine.bernhard@example.com', '1985-10-29', '16:04:58', 'Dermatology', 4, 'Eius quos qui provident sint aut est ullam.', '2014-03-04 21:37:55', 'Appointment rescheduled.', 'approved', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(16, 'APP1102', 'Katheryn Dickens MD', '1160567373', 'isai53@example.org', '2022-01-10', '06:10:46', 'Cardiology', 2, 'Nisi distinctio architecto aliquid placeat.', '1982-02-14 15:14:42', 'Appointment scheduled successfully.', 'cancelled', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(17, 'APP8819', 'Princess Turcotte', '8585992636', 'gstehr@example.com', '2006-02-17', '05:28:20', 'Neurology', 1, 'Perspiciatis non aut sunt nobis animi.', '2015-03-25 15:54:17', 'Doctor unavailable, appointment postponed.', 'pending', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(18, 'APP2799', 'Juvenal Rippin', '6707176493', 'bartell.osbaldo@example.net', '1989-07-28', '10:46:05', 'Cardiology', 6, 'In provident excepturi sequi sit voluptatem ab.', '2011-02-09 01:03:26', 'Appointment rescheduled.', 'approved', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(19, 'APP2829', 'Gene Olson II', '8763501008', 'jeremie.prohaska@example.com', '1985-01-27', '14:07:44', 'Dermatology', 10, 'Similique in provident consequatur sunt eum.', '1993-05-31 05:49:19', 'Appointment scheduled successfully.', 'cancelled', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(20, 'APP3941', 'Lewis Mills', '3264212317', 'brandi14@example.net', '1982-08-14', '17:22:03', 'Cardiology', 5, 'Nemo vel recusandae recusandae aut architecto tempora quo.', '1991-02-06 14:04:35', 'Doctor unavailable, appointment postponed.', 'pending', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(21, 'APP5301', 'Lynn VonRueden I', '8269053784', 'watsica.abner@example.com', '2008-01-28', '00:31:35', 'Dermatology', 5, 'Alias sit perspiciatis tenetur rerum.', '2015-12-02 17:59:19', 'Cancelled due to incorrect mobile number.', 'cancelled', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(22, 'APP1404', 'Gerard Hills', '3932050752', 'elisabeth96@example.org', '1987-10-03', '01:29:39', 'Pediatrics', 1, 'Sit sint unde consequatur accusantium deserunt.', '2003-01-29 01:24:45', 'Cancelled due to incorrect mobile number.', 'cancelled', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(23, 'APP1843', 'Mr. Frederik Hermann MD', '9235213209', 'wyman.mary@example.org', '1998-08-07', '13:49:07', 'Neurology', 1, 'Dolorem expedita et et laborum corrupti quia delectus.', '1996-09-30 04:53:11', 'Cancelled due to incorrect mobile number.', 'pending', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(24, 'APP3290', 'Colten Williamson', '9521485852', 'botsford.cedrick@example.org', '2002-09-30', '13:02:46', 'Neurology', 5, 'Quibusdam eligendi officia quaerat iusto.', '2024-05-23 05:21:50', 'Appointment scheduled successfully.', 'cancelled', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(25, 'APP3599', 'Dr. Rosella Rath', '5808247087', 'coralie13@example.com', '1987-08-14', '08:49:30', 'Neurology', 1, 'Ut est et eos eius nobis.', '2016-04-26 07:57:40', 'Follow-up appointment scheduled.', 'cancelled', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(26, 'APP2725', 'Casper Windler', '9054573796', 'baumbach.harold@example.com', '1988-02-10', '09:27:02', 'Dermatology', 6, 'Quo temporibus quia accusantium consequatur ullam voluptas.', '2021-10-05 06:49:52', 'Follow-up appointment scheduled.', 'approved', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(27, 'APP2375', 'Chauncey Tillman', '2257262238', 'savanah.beer@example.org', '2016-12-09', '23:05:34', 'Cardiology', 9, 'Dolor error minus non occaecati.', '2018-09-01 00:52:20', 'Appointment rescheduled.', 'cancelled', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(28, 'APP0259', 'Roosevelt Rowe III', '2815068830', 'pierre.durgan@example.com', '1984-11-29', '00:02:59', 'Neurology', 2, 'Aut quae sit repellendus qui ratione perspiciatis et.', '1998-08-23 21:18:49', 'Appointment rescheduled.', 'approved', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(29, 'APP6187', 'Ms. Rachel Smitham Sr.', '9882505499', 'leann.doyle@example.net', '2003-06-20', '09:18:49', 'Cardiology', 6, 'Quo molestiae at eveniet atque.', '1982-01-12 04:21:02', 'Cancelled due to incorrect mobile number.', 'approved', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(30, 'APP0104', 'Mayra Effertz', '9452652125', 'bogisich.rhoda@example.net', '1990-09-22', '18:03:56', 'Pediatrics', 6, 'Cum id rerum reiciendis rerum.', '1997-09-29 16:31:57', 'Appointment rescheduled.', 'pending', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(31, '56895', 'Mihir', '4212333445', 'mihir.hirpara8191@gmail.com', '2024-12-11', '01:58:00', '2', 5, NULL, '2024-12-03 06:59:21', NULL, NULL, '2024-12-03 11:59:21', '2024-12-03 11:59:21'),
(32, '53995', 'Mihir', '4212333445', 'mihir.hirpara8191@gmail.com', '2024-12-23', '18:31:00', '1', 21, NULL, '2024-12-03 07:27:33', NULL, NULL, '2024-12-03 12:27:33', '2024-12-03 12:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_28_175526_create_appointments_table', 1),
(6, '2024_05_28_175541_create_pages_table', 1),
(7, '2024_05_28_175606_create_specializations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `PageType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PageTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PageDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MobileNumber` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Timing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `PageType`, `PageTitle`, `PageDescription`, `MobileNumber`, `Email`, `Timing`, `created_at`, `updated_at`) VALUES
(1, 'aboutus', 'About Us', '<div><font color=\"#202124\" face=\"arial, sans-serif\"><b>Our mission declares our purpose of existence as a company and our objectives.</b></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><b><br></b></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><b>To give every customer much more than what he/she asks for in terms of quality, selection, value for money and customer service, by understanding local tastes and preferences and innovating constantly to eventually provide an unmatched experience in jewellery shopping.</b></font></div>', '5294299651', 'hansen.brendan@example.org', '10:30 am to 7:30 pm', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(2, 'contactus', 'Contact Us', '890, Sector 62, Gyan Sarovar, GAIL Noida (Delhi/NCR)', '4532412641', 'info@gmail.com', '10:30 am to 7:30 pm', '2024-11-29 19:49:43', '2024-11-29 19:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

DROP TABLE IF EXISTS `specializations`;
CREATE TABLE IF NOT EXISTS `specializations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Specialization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `Specialization`, `created_at`, `updated_at`) VALUES
(1, 'Orthopedics', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(2, 'Internal Medicine', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(3, 'Obstetrics and Gynecology', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(4, 'Dermatology', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(5, 'Pediatrics', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(6, 'Radiology', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(7, 'General Surgery', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(8, 'Ophthalmology', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(9, 'Family Medicine', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(10, 'Chest Medicine', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(11, 'Anesthesia', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(12, 'Pathology', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(13, 'ENT', '2024-11-29 19:49:43', '2024-11-29 19:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MobileNumber` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Specialization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `MobileNumber`, `email`, `Specialization`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amya Hahn', '2495643314', 'volkman.asha@example.org', '8', '2024-11-29 19:43:07', '$2y$10$kij/uoFoCSA6vVXUzGz0vuIW5jPdJu4.Rm0FO28NGISIPbqHzTUHW', 'cx0CsFMAo0', '2024-11-29 19:43:08', '2024-11-29 19:43:08'),
(2, 'Laurine Pouros DVM', '7739584584', 'celestine.upton@example.org', '4', '2024-11-29 19:43:07', '$2y$10$gC8YnqAjt1B2yQNb06nmReEn460v1rkIFRLBdRAVFHP7WWyI1kEFy', 'I4LuN2z9vI', '2024-11-29 19:43:08', '2024-11-29 19:43:08'),
(3, 'Noemie Douglas Sr.', '5216900688', 'rabernathy@example.net', '3', '2024-11-29 19:43:07', '$2y$10$10GNXBRulpg/hFuov8JyDuyxwBUDbgIOuEJDe579/dmlMouHMtVC.', 'nVpDi8DKYo', '2024-11-29 19:43:08', '2024-11-29 19:43:08'),
(4, 'Prof. Carlotta Weber MD', '5130994116', 'dconn@example.net', '4', '2024-11-29 19:43:07', '$2y$10$2OtsHOYLrjsuHDAgz63G/.Qf.sMt9DQ7RiX1L.5opij8EbsQoo5ly', '77MRKqwI3q', '2024-11-29 19:43:08', '2024-11-29 19:43:08'),
(5, 'Prof. Bertrand Toy III', '0821042052', 'corwin.issac@example.net', '2', '2024-11-29 19:43:08', '$2y$10$4B9n1tjVhZf12ORAIr6IJ.WN6EaEbGCsN0z03ETvrFTeRCol01zIu', 'yGC7zDOHmb', '2024-11-29 19:43:08', '2024-11-29 19:43:08'),
(6, 'Elinore Christiansen', '0314684868', 'pacocha.elliot@example.net', '11', '2024-11-29 19:47:26', '$2y$10$MDFBbHrfIJTsT.8tjULhs.dGm2JaJfOOdBPB/YpS7Pbgex8.mFy3S', 'OL3t9XfSiF', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(7, 'Amya Reilly', '9588316473', 'greenfelder.elta@example.net', '10', '2024-11-29 19:47:26', '$2y$10$w2RdJoZaapinVNIk6ZduJ.fGPLPvE0O0aUx2flW63BHs9eQz3tVXu', 'ZwfdL7fEKR', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(8, 'Maci Moore', '9182764076', 'karianne.ruecker@example.net', '3', '2024-11-29 19:47:26', '$2y$10$s7dvEVW9w2xrB1nKzeREl.f74Pc39kyn3dbkR9BpNZz.HSxC9JhMa', 'FEZEkmxybp', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(9, 'Jeffery Feil', '8594457165', 'ford.greenfelder@example.net', '9', '2024-11-29 19:47:27', '$2y$10$kDaha9voJYg1UHnmEkEFn.l5RBvTj2GCI.ijaNE9EhZdyBdnavlUG', 'zgAiQkEA2Y', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(10, 'Scarlett Johns', '9092575694', 'robb02@example.com', '4', '2024-11-29 19:47:27', '$2y$10$ykj.W.1GHW1Nb3FreRjcyeVbb2gyz5.mUfNj1EzIxXXcmXmUZZAl6', 'A46agUHpXt', '2024-11-29 19:47:27', '2024-11-29 19:47:27'),
(11, 'Allie Langosh III', '1269520685', 'kozey.christop@example.net', '8', '2024-11-29 19:48:33', '$2y$10$AMo0jVwhAVbMaKrh5VMEcuVKQY07q4OV2ihGXgvzIDt0nS1cUZXya', 'FveN80GMjF', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(12, 'Miss Julianne Reynolds Sr.', '7098003006', 'thea.mertz@example.com', '5', '2024-11-29 19:48:33', '$2y$10$S8zue0LS4FV8Is6nFfUZNuuF/VIDhhdzOupPqOyLWsX6Do6QeGBkS', 'PxeWKgmDgW', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(13, 'Kade Wiegand', '5614224859', 'vmcclure@example.org', '7', '2024-11-29 19:48:33', '$2y$10$AesVTNXZas3enVEj1bjnc.zDXXKUpyUbOkGVqcu.K3zB1yron432G', 'ZchgHTRqXA', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(14, 'Terence Kovacek', '0976062984', 'bruen.lionel@example.net', '4', '2024-11-29 19:48:33', '$2y$10$Mg0zgnmLr8rCMSqjV7Jk7uffvM/czz5hd7bhRU1OO8E/KLfSGpYXi', 'q522iNO1UE', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(15, 'Valentine Jacobson', '2939954354', 'amina.marvin@example.org', '4', '2024-11-29 19:48:33', '$2y$10$mMUkddusVMfzBLHpq7yNVOM.Q7NALb9jGWkYUxvMO89p0xKcK.VfS', 'fKHC94mIlV', '2024-11-29 19:48:33', '2024-11-29 19:48:33'),
(16, 'Mattie Kemmer', '0964820160', 'funk.odell@example.org', '4', '2024-11-29 19:49:42', '$2y$10$vYaAhzEMAIc4lE3x/J.ZAO6dujaaLY.Aqj8xDKvc3dCcgtnR0iFxe', '5MUFeXXDWa', '2024-11-29 19:49:42', '2024-11-29 19:49:42'),
(17, 'Ms. Oleta Bartoletti III', '2748225590', 'kole22@example.org', '10', '2024-11-29 19:49:42', '$2y$10$JJFYb65hujW7pu2.hnsSwuKc/6CNHdshI0n6vQNopIvJPK9BjxPRq', 'aZ8Fc3oCCb', '2024-11-29 19:49:42', '2024-11-29 19:49:42'),
(18, 'Ms. Adrianna Cronin DDS', '7242292546', 'barrows.christina@example.com', '4', '2024-11-29 19:49:42', '$2y$10$pxLlHZ7C73P0MVR2ZvIRnuP0sYQYHOdUrSSJ6FoeD3v6H22PixtMW', 'HFTJDLh9b9', '2024-11-29 19:49:42', '2024-11-29 19:49:42'),
(19, 'Prof. Sylvia Brown', '4774021485', 'chuels@example.com', '9', '2024-11-29 19:49:42', '$2y$10$J3010c03AeCtO2SXAPCJXuPvTJw380iEKb81u/o5gspB4Q0uLQmK6', 'GMcqyEHgkc', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(20, 'Stanford Mueller', '6910416306', 'madelynn25@example.org', '6', '2024-11-29 19:49:42', '$2y$10$tuVZyqT3BFUFkQRsbONl4ePXbJjlIXYEh63zK1OW8RH3fDOyQ0NO.', '6s3qXbOBTG', '2024-11-29 19:49:43', '2024-11-29 19:49:43'),
(21, 'Mihir', '1234567890', 'mihir.hirpara8191@gmail.com', '1', NULL, '$2y$10$xEeD950nnbitcdegF6A0C.5A52elCjKFAnhqxesrBWCldAQS9j30m', NULL, '2024-12-03 12:18:52', '2024-12-03 12:18:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

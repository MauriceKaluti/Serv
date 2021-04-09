-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2021 at 04:55 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resqyjgn_rescue`
--

-- --------------------------------------------------------

--
-- Table structure for table `air_quotes`
--

CREATE TABLE `air_quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_dest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nature_patient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Lol', '2065.png', '2020-03-27 14:36:36', '2020-03-27 14:36:38'),
(3, 'General News', 'Dope', '7652.png', '2020-03-27 15:41:49', '2020-03-27 15:41:51'),
(4, 'Laptop', 'cool category', '6723.png', '2020-03-29 07:17:26', '2020-03-29 07:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_subscribers`
--

CREATE TABLE `blog_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_events`
--

CREATE TABLE `book_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_entity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_entity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_events`
--

INSERT INTO `book_events` (`id`, `user_id`, `event_id`, `event_entity`, `event_title`, `applicant_name`, `applicant_email`, `applicant_entity`, `applicant_department`, `applicant_position`, `ticket_price`, `created_at`, `updated_at`) VALUES
(25, '27', '23', 'Private Sector', 'STATE OF EMERGENCY RESCUES IN KENYA', 'Musa', 'musaomri@gmail.com', 'GUEST', 'TRAINER', 'director', '2500', '2020-10-08 19:55:33', '2020-10-08 19:55:33'),
(26, '27', '23', 'Private Sector', 'STATE OF EMERGENCY RESCUES IN KENYA', 'Musa', 'shafimshindi@gmail.com', 'Official', 'Fire and Emergency rescue', 'Manager', '2500', '2020-10-08 19:57:45', '2020-10-08 19:57:45'),
(27, NULL, '26', 'Private Sector', 'EMERGENCY RESCUE SYMPOSIUM', 'Russo Mnene', 'russo.mnene@gmail.com', 'Paraclete Consult', 'Resource Mobilisation', 'Financial Services Lead', '2500', '2020-10-13 10:01:55', '2020-10-13 10:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0712345678', 'Testing Message', 'Finally', '2020-03-14 17:04:06', '2020-03-14 17:04:06'),
(4, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0712345678', 'Great', 'Toastr test', '2020-03-15 04:47:01', '2020-03-15 04:47:01'),
(5, '1', 'Morisoo', 'mauricemakau63@gmail.com', '069744701', 'Detailed Roadmap & Quote', 'Cool', '2020-03-15 04:55:20', '2020-03-15 04:55:20'),
(6, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0712345678', 'Testing Message', 'rewa', '2020-03-15 12:08:51', '2020-03-15 12:08:51'),
(7, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0712345678', 'Testing Message', 'wee', '2020-03-15 12:12:35', '2020-03-15 12:12:35'),
(8, '1', 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', 'Detailed Roadmap & Quote', 'Cool Toastr Coming Well', '2020-03-15 12:14:15', '2020-03-15 12:14:15'),
(9, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0712345678', 'Great', 'fresh', '2020-03-15 12:14:39', '2020-03-15 12:14:39'),
(10, '1', 'Morisoo', 'mauricemakau63@gmail.com', '069744701', 'Loan', 'fweffef', '2020-03-15 12:15:32', '2020-03-15 12:15:32'),
(11, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0712345678', 'Testing Message', 'ddd', '2020-03-15 12:15:48', '2020-03-15 12:15:48'),
(13, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0712345678', 'Testing Message', 'rtqrtfrf', '2020-03-16 07:18:51', '2020-03-16 07:18:51'),
(14, '1', 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', 'ffaef', 'efefeffe', '2020-03-17 11:50:33', '2020-03-17 11:50:33'),
(15, NULL, 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', 'Testing Message', 'wow', '2020-03-18 03:00:56', '2020-03-18 03:00:56'),
(16, NULL, 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', 'Great', 'aff', '2020-03-18 03:01:15', '2020-03-18 03:01:15'),
(17, '5', 'Musa Omri', 'musaomri@gmail.com', '0722489411', 'I need an air evacution for one of our clients in kilimanjaro area', 'I need an air evacution for one of our clients in kilimanjaro area', '2020-05-02 21:00:39', '2020-05-02 21:00:39'),
(18, '5', 'jackson', 'musaomri@gmail.com', '+254722214654', 'ENQUIRY', 'KINDLY FURNISH ME WITH MORE INFORMATION ON EMS PRODUCTS', '2020-05-06 10:38:35', '2020-05-06 10:38:35'),
(19, '5', 'Musa Omri', 'musaomri@gmail.com', '212554445', 'TEST', 'TEST', '2020-05-06 10:39:51', '2020-05-06 10:39:51'),
(20, NULL, 'Sibyl Bulcock', 'sibyl@stardatagroup.com', 'NA', 'Question?', 'Do you need more clients? \r\n\r\nWe have amazing databases starting at $9.99 until the end of the Month!\r\n\r\nVisit us at StarDataGroup.com', '2021-02-23 18:12:05', '2021-02-23 18:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `dharuras`
--

CREATE TABLE `dharuras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dharura_package` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_manuf` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dharuras`
--

INSERT INTO `dharuras` (`id`, `user_id`, `dharura_package`, `name`, `email`, `phone`, `postal_address`, `town`, `reg_no`, `vehicle_model`, `vehicle_type`, `year_manuf`, `package_price`, `created_at`, `updated_at`) VALUES
(12, '15', 'Silver', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Nairobi', 'Mombasa', 'KCY271J', 'Alfa Romeo', 'SUV', '2019', '800', '2020-03-24 05:16:54', '2020-03-24 05:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_roads`
--

CREATE TABLE `emergency_roads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_yes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emergency_roads`
--

INSERT INTO `emergency_roads` (`id`, `user_id`, `owner_name`, `email`, `phone`, `town`, `vehicle_model`, `vehicle_type`, `vehicle_reg`, `insurance_yes`, `insurance_no`, `road_price`, `created_at`, `updated_at`) VALUES
(3, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Nakuru', 'Aston Martin', 'Saloon', 'KCV143W', 'Yes', NULL, '25700', '2020-03-24 11:31:50', '2020-03-24 11:31:50'),
(5, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Nakuru', 'Audi', 'Saloon', 'KCV143W', 'Yes', NULL, '25700', '2020-03-24 11:34:07', '2020-03-24 11:34:07'),
(6, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '069744701', 'Vihiga', 'Aston Martin', 'SUV', 'KCV143W', NULL, 'No', '22700', '2020-03-24 11:34:29', '2020-03-24 11:34:29'),
(7, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Makuyu', 'Lamborghini', 'Bus', 'KCV143W', 'Yes', NULL, '25700', '2020-03-24 11:36:34', '2020-03-24 11:36:34'),
(8, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Nyamira', 'Ferrari', 'Saloon', 'KCV143W', 'Yes', NULL, '25700', '2020-03-25 06:04:41', '2020-03-25 06:04:41'),
(9, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Bomet', 'Jaguar', 'SUV', 'KCV143W', NULL, 'No', '22700', '2020-03-25 06:05:51', '2020-03-25 06:05:51'),
(10, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Kisumu', 'Fiat', 'Saloon', 'KCV143W', NULL, 'No', '25700', '2020-03-25 11:41:07', '2020-03-25 11:41:07'),
(11, '15', 'Fatma QulthumT', 'fatma254@gmail.com', '0712345678', 'Nairobi', 'Buick', 'Saloon', 'KCV143W', 'Yes', NULL, '25700', '2020-03-27 12:15:59', '2020-03-27 12:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquiry_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `map`, `location`, `image`, `details`, `created_at`, `updated_at`) VALUES
(29, 'SAFETY TRAININGS FOR LEARNING INSTITUTIONS', '2021-03-22', 'ZOOM', 'VIRTUAL', '1626.jpg', 'Education sector remains  vulnerable to risks of fire due to lack of specialized training, lack of appropriate equipment, adequate resources, systematic disaster mitigation and response mechanisms. Join us and learn from experts in the industry', '2021-03-04 19:47:46', '2021-03-04 19:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `event_images`
--

CREATE TABLE `event_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_images`
--

INSERT INTO `event_images` (`id`, `event_id`, `image`, `created_at`, `updated_at`) VALUES
(2, '17', '252.png', '2020-03-13 12:06:53', '2020-03-13 12:06:53'),
(3, '16', '8210.png', '2020-03-13 12:06:53', '2020-03-13 12:06:53'),
(4, '17', '327.png', '2020-03-13 12:06:54', '2020-03-13 12:06:54'),
(9, '23', '489.png', '2020-09-14 19:24:05', '2020-09-14 19:24:05'),
(10, '23', '4339.jpg', '2020-09-14 19:24:22', '2020-09-14 19:24:22'),
(12, '23', '1942.png', '2020-09-14 19:25:08', '2020-09-14 19:25:08'),
(13, '23', '2788.jpg', '2020-10-08 19:32:50', '2020-10-08 19:32:50'),
(14, '23', '9584.jpg', '2020-10-08 19:46:32', '2020-10-08 19:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fanakas`
--

CREATE TABLE `fanakas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fanaka_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fanakas`
--

INSERT INTO `fanakas` (`id`, `user_id`, `user_name`, `email`, `phone`, `vehicle_model`, `vehicle_reg`, `fanaka_price`, `town`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Resa', 'mauricemakau63@gmail.com', '0700422699', 'Mercedes', 'KCV143W', '25000', 'Kisumu', '2020-03-17 10:23:12', '2020-03-19 03:39:57'),
(3, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0700422699', 'Ford', 'KCV143W', '25000', 'Mombasa', '2020-03-19 06:26:08', '2020-03-19 06:26:08'),
(5, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0700422699', 'Audi', 'KCV143W', '25000', 'Kisumu', '2020-03-19 06:31:19', '2020-03-19 06:31:19'),
(7, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Mercedes', 'KCV143W', '25000', 'Mombasa', '2020-03-23 05:16:12', '2020-03-23 05:16:12'),
(8, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', 'Subaru', 'KCV143W', '25000', 'Ngong', '2020-03-23 16:51:47', '2020-03-23 16:51:47'),
(9, '15', 'Fatma QulthumT', 'fatma254@gmail.com', '0712345678', 'Nissan', 'KCV143W', '25000', 'Nyamira', '2020-03-26 13:59:00', '2020-03-26 13:59:00'),
(10, NULL, 'Morisoo', 'mauricemakau63@gmail.com', '0700422699', 'General Motors', 'KCV143W', '25000', 'Nairobi', '2020-04-27 23:28:16', '2020-04-27 23:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `fanaka_tests`
--

CREATE TABLE `fanaka_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sacco_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fanaka_tests`
--

INSERT INTO `fanaka_tests` (`id`, `user_id`, `user_name`, `email`, `phone`, `sacco_name`, `vehicle_driver`, `vehicle_reg`, `county`, `town`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'mauricemakau63@gmail.com', '0700422699', 'RUKAGINA', 'Nairobi', 'Nairobi', 'Migori,Nairobi-City', 'Mombasa,Nakuru', '2020-03-19 02:38:56', '2020-03-19 02:38:56'),
(2, NULL, NULL, 'mauricemakau63@gmail.com', '0700422699', 'RUKAGINA', 'Nairobi', 'Nairobi', 'Tana-River', 'Mombasa', '2020-03-19 02:48:08', '2020-03-19 02:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `fire_packages`
--

CREATE TABLE `fire_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resident_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_households` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_extra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_staffs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_person2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_students` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serv_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_engine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_marshal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_equip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supply_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_safety` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fire_packages`
--

INSERT INTO `fire_packages` (`id`, `user_id`, `package_type`, `resident_name`, `number_households`, `number_extra`, `hotel_name`, `number_staffs`, `res_name`, `org_name`, `inst_name`, `cont_person`, `cont_person2`, `email`, `phone_one`, `phone_two`, `number_students`, `county`, `town`, `serv_category`, `post_address`, `post_code`, `additional`, `fire_engine`, `fire_marshal`, `service_equip`, `supply_service`, `fire_safety`, `cost`, `created_at`, `updated_at`) VALUES
(1, '1', 'Institution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vdfv', 'vsdvs', 'ds', 'mauricemakau63@gmail.com', '0700422699', '0712345678', '33', 'Nairobi City', 'Nairobi Metro', 'Fire Inspection', 'Nairobi, Nairobi', '00100', 'rwrw', 'Deploy a standby fire engine', 'Deploy fire marshal in site', 'Service existing fire fighting equipments on site', NULL, NULL, '9500', '2020-03-15 13:50:04', '2020-03-15 13:50:04'),
(2, '1', 'Corporate', NULL, NULL, NULL, NULL, NULL, NULL, 'Kazi Safi Sultions', NULL, 'Sadia', 'Fresa', 'mauricemakau63@gmail.com', '0700422699', '0712345678', NULL, 'Mombasa', 'Nairobi', 'Fire Audit', 'Nairobi', '00120', 'Fres', 'Deploy a standby fire engine', NULL, NULL, 'Supply and service fire fighting equipments', NULL, '8500', '2020-03-15 13:52:11', '2020-03-15 13:52:11'),
(3, '1', 'Hotel', NULL, NULL, NULL, 'Few', '23', NULL, NULL, NULL, 'fre', 'ssf', 'mauricemakau63@gmail.com', '0700422699', '0764564263', NULL, 'Mombasa', 'Mombasa', 'Fire Audit', 'Nairobi, Nairobi, Nairobi', '00100', 'retd', NULL, NULL, 'Service existing fire fighting equipments on site', 'Supply and service fire fighting equipments', NULL, '10500', '2020-03-15 14:01:42', '2020-03-15 14:01:42'),
(5, '1', 'Residence', NULL, NULL, NULL, NULL, NULL, 'Muturi Maks', NULL, NULL, 'Sadia', 'svsd', 'mauricemakau63@gmail.com', '0700422699', '0764564263', NULL, 'Kwale', 'Naivasha', 'Fire rescue and emergency medical rescue', 'Nairobi, Nairobi, Nairobi', '00100', 'tresa', NULL, 'Deploy fire marshal in site', NULL, NULL, NULL, '6500', '2020-03-15 14:04:25', '2020-03-15 14:04:25'),
(6, '1', 'Estate', 'Muturi Salim', '21', '45', NULL, NULL, NULL, NULL, NULL, 'Veda', 'treda', 'mauricemakau63@gmail.com', '0700422699', '0712345678', NULL, 'Wajir', 'Kisumu', 'Fire Audit', 'Nairobi, Nairobi, Nairobi', '00100', 'reswa', NULL, NULL, 'Service existing fire fighting equipments on site', 'Supply and service fire fighting equipments', NULL, '8500', '2020-03-15 14:06:02', '2020-03-15 14:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `kikwetus`
--

CREATE TABLE `kikwetus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `principal_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dependants` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kikwetu_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kikwetus`
--

INSERT INTO `kikwetus` (`id`, `user_id`, `principal_name`, `email`, `phone`, `phone_alt`, `street_name`, `town`, `house_no`, `no_dependants`, `kikwetu_price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', '0700422699', 'Nairobi, Nairobi, Nairobi', 'Nairobi', '3r', '', '6500', '2020-03-19 08:08:46', '2020-03-19 08:08:46'),
(2, '1', 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', '0700422699', 'Nairobi, Nairobi, Nairobi', 'Nairobi', '3r', '3', '25000', '2020-03-19 10:28:29', '2020-03-19 10:28:29'),
(3, '1', 'Morisoo', 'mauricemakau63@gmail.com', '0712345678', '0712345678', 'Nairobi', 'Mombasa', '3r', '3', '25000', '2020-03-21 06:47:26', '2020-03-21 06:47:26'),
(4, '15', 'Fatma Qulthum', 'mauricemakau63@gmail.com', '0712345678', '0700422699', 'Nairobi', 'Nairobi', '3r', '4', '25000', '2020-03-23 05:22:15', '2020-03-23 05:22:15'),
(5, '15', 'Fatma Qulthum', 'fatma254@gmail.com', '0712345678', NULL, 'Nairobi', 'Nairobi', '3r', '3', '25000', '2020-03-24 06:08:50', '2020-03-24 06:08:50'),
(6, '1', 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', NULL, 'Nairobi, Nairobi', 'Vihiga', '3r', '3', '25000', '2020-07-12 16:43:57', '2020-07-12 16:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `medical_corporates`
--

CREATE TABLE `medical_corporates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `building_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_employees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_med_corp_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_corporates`
--

INSERT INTO `medical_corporates` (`id`, `user_id`, `company_name`, `contactp_name`, `email`, `phone_one`, `phone_two`, `industry`, `town`, `street`, `post_address`, `post_code`, `building_no`, `no_employees`, `emergency_med_corp_price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Kazi Safi Sultions', 'Morreh', 'mauricemakau63@gmail.com', '0700422699', '0764564263', 'ICT', 'Nairobi', 'Nairobi', 'Nairobi', '00120', '45A', '10-20', '11700', '2020-03-15 11:04:29', '2020-03-15 11:04:29'),
(2, '1', 'Kazi Safi Sultions', 'Morreh', 'mauricemakau63@gmail.com', '0700422699', '744701', 'ICT', 'Kisumu', 'Nairobi', 'Nairobi', '00120', '45A', '20-30', '11700', '2020-03-21 05:30:22', '2020-03-21 05:30:22'),
(3, '1', 'Kazi Safi Sultions', 'Morreh', 'mauricemakau63@gmail.com', '0700422699', '0712345678', 'Tours & Travel', 'Nairobi', 'Nairobi', 'Nairobi', '00120', '45A', '10-20', '11700', '2020-03-21 06:51:02', '2020-03-21 06:51:02'),
(4, '1', 'Kazi Safi Sultions', 'Morreh', 'mauricemakau63@gmail.com', '0700422699', '0700422699', 'Tours & Travel', 'Nairobi Metro', 'Nairobi', 'Nairobi', '00120', '45A', '40-50', '11700', '2020-03-21 07:04:40', '2020-03-21 07:04:40'),
(5, '1', 'Kazi Safi Sultions', 'Morreh', 'mauricemakau63@gmail.com', '0700422699', '069744701', 'Tours & Travel', 'Nairobi', 'Nairobi', 'Nairobi', '00120', '45A', '20-30', '11700', '2020-03-21 10:56:25', '2020-03-21 10:56:25'),
(6, '5', 'MAMA YAO', 'MUSITH', 'musaomri@gmail.com', '5887888', '+3654489774', 'ICT', 'Nairobi', 'NAMANGA RD', '11148500', '0100', '01541254', '50-Above', '11700', '2020-05-02 20:38:09', '2020-05-02 20:38:09'),
(7, '5', 'MAMA YAO', 'MUSITH', 'musaomri@gmail.com', '5887888', '0722498856', 'Tours & Travel', 'Mombasa', 'NAMANGA RD', '11100', '01255', '1254', '40-50', '11700', '2020-05-02 20:39:19', '2020-05-02 20:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `medical_estates`
--

CREATE TABLE `medical_estates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `est_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_households` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_geographical` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_med_estate_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_estates`
--

INSERT INTO `medical_estates` (`id`, `user_id`, `est_name`, `phone_one`, `phone_two`, `email`, `contact_person`, `town`, `post_address`, `post_code`, `no_households`, `special_geographical`, `emergency_med_estate_price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Muturi Maks', '0700422699', '422699', 'mauricemakau63@gmail.com', 'Muturi Maks', 'Nairobi', 'Nairobi, Nairobi, Nairobi', '00100', '3', 'dgdg', '4500', '2020-03-21 17:08:25', '2020-03-21 17:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `medical_families`
--

CREATE TABLE `medical_families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_facility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `med_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `med_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dependants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_med_fam_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_families`
--

INSERT INTO `medical_families` (`id`, `user_id`, `first_name`, `email`, `phone_one`, `idp_no`, `dob`, `medical_facility`, `facility_phone`, `town`, `post_address`, `post_code`, `med_info`, `blood_group`, `med_condition`, `no_dependants`, `emergency_med_fam_price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Muturi', 'mauricemakau63@gmail.com', '0700422699', '34363535', '2020-03-16', 'Nrb Hsp', '0712345678', 'Nairobi Metro', 'Nairobi, Nairobi, Nairobi', '00100', 'None', 'O+', 'None of the Above', '3', '11700', '2020-03-15 11:06:19', '2020-03-15 11:06:19'),
(2, '1', 'Muturi', 'mauricemakau63@gmail.com', '0700422699', '34363535', '2020-03-26', '77755', '0700422699', 'Nairobi', 'Nairobi, Nairobi, Nairobi', '00100', 'wtttt', 'AB', 'Paralysis', '4', '6500', '2020-03-21 05:49:18', '2020-03-21 05:49:18'),
(3, '1', 'Muturi', 'mauricemakau63@gmail.com', '0700422699', '34363535', '2020-03-12', 'Nrb Hsp', '0712345678', 'Mombasa', 'Nairobi', '00120', 'ngn', 'O+', 'Hypertension', '3', '6500', '2020-03-21 07:05:37', '2020-03-21 07:05:37'),
(4, '15', 'Muturi', 'mauricemakau63@gmail.com', '0700422699', '34363535', '2020-03-10', 'Nrb Hsp', '069744701', 'Nairobi', 'Nairobi, Nairobi, Nairobi', '00100', 'dfsfa', 'A', 'Epilepsy', '4', '6500', '2020-03-24 06:26:10', '2020-03-24 06:26:10'),
(5, '15', 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', '34363535', '2020-04-01', 'Nrb Hsp', '0712345678', 'Nakuru', 'Nairobi, Nairobi', '00100', 'Coll', 'O+', 'None of the Above', '5', '6500', '2020-03-25 04:23:07', '2020-03-25 04:23:07'),
(6, '5', 'ROBERT GRAY', 'musaomri@gmail.com', '0725154879', '2144555884', '2020-04-27', 'KATOLO', '3665445563', 'Mandera', '1254', '1000', 'this is not mandatory', 'AB', 'Hypertension', '2', '6500', '2020-05-02 20:45:28', '2020-05-02 20:45:28'),
(7, '21', 'Muturi Maks', 'mauricemakau63@gmail.com', '0700422699', '34363535', '2020-06-12', 'Nrb Hsp', '069744701', 'Mombasa', 'Nairobi, Nairobi', '00100', 'Test', 'O+', 'Diabetes', '3', '6500', '2020-06-12 18:29:01', '2020-06-12 18:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `medical_individuals`
--

CREATE TABLE `medical_individuals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ind_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refer_facility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_med_ind_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_individuals`
--

INSERT INTO `medical_individuals` (`id`, `user_id`, `ind_name`, `phone_one`, `phone_two`, `email`, `town`, `refer_facility`, `special_condition`, `emergency_med_ind_price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Morreh', '0700422699', '0764564263', 'mauricemakau63@gmail.com', 'Nairobi', 'Nrb ho', 'None', '8400', '2020-03-15 11:07:53', '2020-03-15 11:07:53'),
(2, '1', 'Morreh', '0700422699', '422699', 'mauricemakau63@gmail.com', 'Nairobi', 'Nrb ho', 'None', '2500', '2020-03-21 05:47:09', '2020-03-21 05:47:09'),
(3, '1', 'Morreh', '0712345678', '0712345678', 'mauricemakau63@gmail.com', 'Nairobi', 'Nrb ho', 'None', '2500', '2020-03-21 07:06:07', '2020-03-21 07:06:07'),
(4, '1', 'Morreh', '0712345678', '069744701', 'mauricemakau63@gmail.com', 'Nairobi Metro', 'Nrb ho', 'Hypertension', '2500', '2020-03-21 07:12:42', '2020-03-21 07:12:42'),
(6, '5', 'MOSES OMERI', '1354678', '0722458789', 'eagleplusservices@gmail.com', 'Muhoroni', 'machakos', 'NON', '2500', '2020-05-02 20:49:38', '2020-05-02 20:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `medical_institutions`
--

CREATE TABLE `medical_institutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_students` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_facility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_med_inst_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_institutions`
--

INSERT INTO `medical_institutions` (`id`, `user_id`, `institution_name`, `email`, `phone_one`, `phone_two`, `contact_person`, `county`, `town`, `no_students`, `post_address`, `post_code`, `medical_facility`, `facility_phone`, `special_condition`, `emergency_med_inst_price`, `created_at`, `updated_at`) VALUES
(1, '1', 'Shiners', 'mauricemakau63@gmail.com', '0700422699', '0764564263', 'Muturi Maks', 'Nairobi City', 'Nairobi', '50-100', 'Nairobi, Nairobi, Nairobi', '00100', 'Nrb Hsp', '0700422699', 'None', '23500', '2020-03-15 11:03:15', '2020-03-15 11:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `medical_residences`
--

CREATE TABLE `medical_residences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `res_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_med_res_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_residences`
--

INSERT INTO `medical_residences` (`id`, `user_id`, `res_name`, `phone_one`, `phone_two`, `email`, `contact_person`, `town`, `post_address`, `post_code`, `duration_cover`, `medical_condition`, `emergency_med_res_price`, `created_at`, `updated_at`) VALUES
(2, '1', 'Muturi Maks', '0700422699', '069744701', 'mauricemakau63@gmail.com', 'moRISO', 'Kisumu', 'Nairobi, Nairobi', '00100', '4 Years', 'None of the Above', '6500', '2020-03-21 07:13:18', '2020-03-21 07:13:18');

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
(4, '2020_03_10_190420_create_notifications_table', 2),
(5, '2020_03_12_063635_create_events_table', 3),
(6, '2020_03_13_123748_create_book_events_table', 4),
(7, '2020_03_13_134749_create_event_images_table', 5),
(8, '2020_03_14_192302_create_contacts_table', 6),
(9, '2020_03_15_053823_create_enquiries_table', 7),
(11, '2020_03_15_091218_create_dharuras_table', 8),
(12, '2020_03_15_110937_create_msafiri_psvs_table', 9),
(13, '2020_03_15_110956_create_msafiri_motos_table', 9),
(14, '2020_03_15_123431_create_medical_estates_table', 10),
(15, '2020_03_15_123452_create_medical_families_table', 10),
(16, '2020_03_15_123515_create_medical_corporates_table', 10),
(17, '2020_03_15_123601_create_medical_institutions_table', 10),
(18, '2020_03_15_123631_create_medical_individuals_table', 10),
(19, '2020_03_15_123721_create_medical_residences_table', 10),
(20, '2020_03_15_162032_create_fire_packages_table', 11),
(21, '2020_03_18_154709_create_fanaka_tests_table', 12),
(22, '2020_03_19_054451_create_kikwetus_table', 13),
(23, '2020_03_19_055043_create_fanakas_table', 13),
(24, '2020_03_19_140049_create_rescue_firsts_table', 14),
(26, '2020_03_21_132025_create_air_quotes_table', 15),
(27, '2020_03_21_140249_create_rescue_fires_table', 16),
(28, '2020_03_21_140306_create_rescue_medicals_table', 16),
(29, '2020_03_21_140324_create_rescue_roads_table', 16),
(30, '2020_03_24_102950_create_emergency_roads_table', 17),
(31, '2020_03_27_153946_create_blog_posts_table', 18),
(32, '2020_03_27_154015_create_blog_categories_table', 18),
(33, '2020_03_27_154148_create_blog_subscribers_table', 18),
(34, '2020_03_29_084330_create_lols_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `msafiri_motos`
--

CREATE TABLE `msafiri_motos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moto_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `msafiri_psvs`
--

CREATE TABLE `msafiri_psvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sacco_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fleet_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `psv_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('95472a92-48c3-4574-8a31-7a5fa6c6de37', 'App\\Notifications\\Signup', 'App\\User', 1, '{\"data\":\"You are added successfully to a trading team\"}', NULL, '2020-03-11 05:12:58', '2020-03-11 05:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mauricemakau63@gmail.com', '$2y$10$JWWyXOStebYQIZpdJwi9bOxYhtf9cLrtpnHs/uEUL3txnHkk2NsyS', '2020-03-17 13:23:12'),
('musaomri@gmail.com', '$2y$10$UkdeVGSpVFX70QYJEIiVTeSCGpAdeLzocR/PmPkJ6/V8De2Bn65fm', '2020-10-12 14:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `rescue_fires`
--

CREATE TABLE `rescue_fires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rescue_fires`
--

INSERT INTO `rescue_fires` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `email`, `phone`, `address`, `postal_code`, `city`, `town`, `vehicle_model`, `vehicle_reg`, `vehicle_photo`, `passport_photo`, `created_at`, `updated_at`) VALUES
(4, '1', 'Muturi', 'Maks', 'Kazi Safi Sultions', 'mauricemakau63@gmail.com', '0700422699', 'Nairobi, Nairobi, Nairobi', '00100', 'Nairobi', 'Nairobi Metro', 'Mercedes', 'KCV143W', '8401.png', '6038.png', '2020-03-21 13:04:43', '2020-03-21 13:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `rescue_firsts`
--

CREATE TABLE `rescue_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rescue_firsts`
--

INSERT INTO `rescue_firsts` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `email`, `phone`, `address`, `postal_code`, `city`, `town`, `vehicle_model`, `vehicle_reg`, `vehicle_photo`, `passport_photo`, `created_at`, `updated_at`) VALUES
(2, '1', 'Muturi', 'Maks', 'Kazi Safi Sultions', 'mauricemakau63@gmail.com', '0700422699', 'Nairobi, Nairobi, Nairobi', '00100', 'Nairobi', 'Nairobi Metro', 'BMW', 'KCV143W', '843.jpg', '823.png', '2020-03-21 11:25:11', '2020-03-21 11:25:13'),
(3, '1', 'Muturi', 'Maks', 'Kazi Safi Sultions', 'mauricemakau63@gmail.com', '0700422699', 'Nairobi, Nairobi, Nairobi', '00100', 'Nairobi', 'Nairobi', 'Toyota', 'KCV143W', '9749.png', '1471.jpg', '2020-03-21 11:35:37', '2020-03-21 11:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `rescue_medicals`
--

CREATE TABLE `rescue_medicals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rescue_medicals`
--

INSERT INTO `rescue_medicals` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `email`, `phone`, `address`, `postal_code`, `city`, `town`, `vehicle_model`, `vehicle_reg`, `vehicle_photo`, `passport_photo`, `created_at`, `updated_at`) VALUES
(2, '15', 'Muturi', 'Maks', 'Kazi Safi Sultions', 'mauricemakau63@gmail.com', '0712345678', 'Nairobi', '00120', 'Mombasa', 'Thika', 'General Motors', 'KCV143W', '3976.png', '5158.png', '2020-03-25 04:39:04', '2020-03-25 04:39:12'),
(3, NULL, 'John', 'Rickson', 'HAUNT', 'info@resq247.life', '+254722865048', '11164', '0100', 'Mombasa', 'Mombasa', 'Alfa Romeo', 'KCN 984R', '/tmp/phpJsih2p', '/tmp/phpDgrWqf', '2020-05-05 14:29:53', '2020-05-05 14:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `rescue_roads`
--

CREATE TABLE `rescue_roads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_reg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rescue_roads`
--

INSERT INTO `rescue_roads` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `email`, `phone`, `address`, `postal_code`, `city`, `town`, `vehicle_model`, `vehicle_reg`, `vehicle_photo`, `passport_photo`, `created_at`, `updated_at`) VALUES
(1, '1', 'Muturi', 'Maks', 'Kazi Safi Sultions', 'mauricemakau63@gmail.com', '0700422699', 'Nairobi, Nairobi, Nairobi', '00100', 'Nairobi', 'Nairobi Metro', 'Mercedes', 'KCV143W', '7155.jpg', '8825.png', '2020-03-21 11:31:32', '2020-03-21 11:31:33'),
(2, '15', 'Muturi', 'Maks', 'Kazi Safi Sultions', 'mauricemakau63@gmail.com', '0700422699', 'Nairobi, Nairobi', '00100', 'Mombasa', 'Nairobi', 'Toyota', 'KCV143W', '5572.jpg', '4957.jpg', '2020-03-23 06:05:02', '2020-03-23 06:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `site_actives`
--

CREATE TABLE `site_actives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_actives`
--

INSERT INTO `site_actives` (`id`, `status`, `created_at`, `updated_at`) VALUES
(3, 9, '2020-08-30 00:54:00', '2021-03-21 09:25:08'),
(4, 7, '2020-08-30 01:08:17', '2021-03-21 09:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT 0,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Moriso', 1, 'mauricemakau63@gmail.com', NULL, '$2y$10$LHWLZFh8VMSQYTv0f6N7Pu3O0ZtgWAH3ykU4aFSQ.SCyogdh.sxR2', 'Alc6nMpMl7z3ArvvfvVg7NwgjdXwwLysf89StIJLV8oqZnfh1aoSreEaekkF', '2020-03-01 23:33:28', '2020-03-01 23:33:28'),
(2, 'Moriso', 0, 'moriso254@gmail.com', NULL, '$2y$10$jOuSV9qySBEXB8sroGx8lOLg4GMMn6ZdnuXs5Xj88WGZ5nAf5/ucK', NULL, '2020-03-08 05:11:19', '2020-03-08 05:11:19'),
(4, 'lll', 0, 'morisaao254@gmail.com', NULL, '$2y$10$GgflLK5WmSo6xal/UEtywembT6WKGONf8cz08AyLzN8LGW5zFkMlu', NULL, '2020-03-10 17:58:07', '2020-03-10 17:58:07'),
(16, 'Muturi Maks', 0, 'morise254@gmail.com', NULL, '$2y$10$Hxxy5oVXCQRw8uk9vpFT3.RoJkMWnqB/e8R5x/2gN5YjMIQimUKxa', NULL, '2020-03-26 08:47:21', '2020-03-26 08:47:21'),
(21, 'Mourinho', 0, 'morisi@gmail.com', NULL, '$2y$10$CPxhurrRwiW41d1.n0NOnOnqZGroie6oibl8mk5/mhjAUf6tNgTMm', NULL, '2020-06-12 18:16:30', '2020-06-12 18:16:30'),
(22, 'Ahmed Issack', 0, 'Ahmedissackhassan9@gmail.com', NULL, '$2y$10$XUQdp77/6fqzhjEsn5KYoOFAdExRPfyG9eWDaHyU6/tK6q39DGQg2', NULL, '2020-06-15 10:18:54', '2020-06-15 10:18:54'),
(23, 'GALGALLO ABDUBA DENGICHA', 0, 'mohaabduba7@gmail.com', NULL, '$2y$10$/KMHimBkrWOhvbHrFFHcOuG7rg6Lvd7QHMqpveRYqkJIN33J/ZBaW', NULL, '2020-06-15 11:11:51', '2020-06-15 11:11:51'),
(24, 'Jane Nderi', 0, 'nderyjayne@gmail.com', NULL, '$2y$10$RpzLx3uLYOH2agdG0s6P2.vfAfNkB9e65DPq2jJ.sa7XhfAUYbXhW', NULL, '2020-06-15 14:06:28', '2020-06-15 14:06:28'),
(25, 'Brandon stockly', 0, 'bstockly47@gmail.com', NULL, '$2y$10$6vbsIvw5ItK9VmJOiBw8pu3Abo3JmJtEQoeTCOop5thupGu9agiN6', NULL, '2020-06-15 18:59:22', '2020-06-15 18:59:22'),
(27, 'Musa', 1, 'musaomri@gmail.com', NULL, '$2y$10$Ig7pLGn4ukve2YrYNYUam.kF1AN.w3FlfbgUsRjisRZ/LaHZUxWli', 'Y0G9xcfLjDeo7vDTlxCuvZlG4ugJSyKzrUeamr8yjkEAA2Pb0DAkPKdrvG49', '2020-08-30 15:21:12', '2020-09-14 17:53:56'),
(28, 'Musa', 1, 'musaomri@outlook.com', NULL, '$2y$10$gvpKCp8HBu0eOZBsp8gGneikFAJfOT38jm2MCzJmoU1.S4kL6CfEO', NULL, '2020-09-14 17:54:55', '2020-09-14 17:54:55'),
(29, 'Morreh', 0, 'mercmaury63@gmail.com', NULL, '$2y$10$2q/ruavWkwVLwEsdT7p2qu6CldI03Sqxb4ST3gHF2qhyZ9GaCKCca', NULL, '2020-10-15 11:50:48', '2020-10-15 11:50:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `air_quotes`
--
ALTER TABLE `air_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_subscribers`
--
ALTER TABLE `blog_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_events`
--
ALTER TABLE `book_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dharuras`
--
ALTER TABLE `dharuras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_roads`
--
ALTER TABLE `emergency_roads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_images`
--
ALTER TABLE `event_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fanakas`
--
ALTER TABLE `fanakas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fanaka_tests`
--
ALTER TABLE `fanaka_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_packages`
--
ALTER TABLE `fire_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kikwetus`
--
ALTER TABLE `kikwetus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_corporates`
--
ALTER TABLE `medical_corporates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_estates`
--
ALTER TABLE `medical_estates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_families`
--
ALTER TABLE `medical_families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_individuals`
--
ALTER TABLE `medical_individuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_institutions`
--
ALTER TABLE `medical_institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_residences`
--
ALTER TABLE `medical_residences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msafiri_motos`
--
ALTER TABLE `msafiri_motos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msafiri_psvs`
--
ALTER TABLE `msafiri_psvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rescue_fires`
--
ALTER TABLE `rescue_fires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rescue_firsts`
--
ALTER TABLE `rescue_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rescue_medicals`
--
ALTER TABLE `rescue_medicals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rescue_roads`
--
ALTER TABLE `rescue_roads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_actives`
--
ALTER TABLE `site_actives`
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
-- AUTO_INCREMENT for table `air_quotes`
--
ALTER TABLE `air_quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_subscribers`
--
ALTER TABLE `blog_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book_events`
--
ALTER TABLE `book_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `dharuras`
--
ALTER TABLE `dharuras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `emergency_roads`
--
ALTER TABLE `emergency_roads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `event_images`
--
ALTER TABLE `event_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fanakas`
--
ALTER TABLE `fanakas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fanaka_tests`
--
ALTER TABLE `fanaka_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fire_packages`
--
ALTER TABLE `fire_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kikwetus`
--
ALTER TABLE `kikwetus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medical_corporates`
--
ALTER TABLE `medical_corporates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medical_estates`
--
ALTER TABLE `medical_estates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_families`
--
ALTER TABLE `medical_families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medical_individuals`
--
ALTER TABLE `medical_individuals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medical_institutions`
--
ALTER TABLE `medical_institutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_residences`
--
ALTER TABLE `medical_residences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `msafiri_motos`
--
ALTER TABLE `msafiri_motos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `msafiri_psvs`
--
ALTER TABLE `msafiri_psvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rescue_fires`
--
ALTER TABLE `rescue_fires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rescue_firsts`
--
ALTER TABLE `rescue_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rescue_medicals`
--
ALTER TABLE `rescue_medicals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rescue_roads`
--
ALTER TABLE `rescue_roads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_actives`
--
ALTER TABLE `site_actives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

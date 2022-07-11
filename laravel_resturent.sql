-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 01:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_resturent`
--

-- --------------------------------------------------------

--
-- Table structure for table `basicinfos`
--

CREATE TABLE `basicinfos` (
  `basic_id` bigint(20) UNSIGNED NOT NULL,
  `address_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_two` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_slug` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_creator` int(11) DEFAULT NULL,
  `category_editor` int(11) DEFAULT NULL,
  `category_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_image`, `category_slug`, `category_creator`, `category_editor`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Drinks', '1657548338_9626840.png', 'drinks', 1, NULL, 1, '2022-07-11 14:05:38', NULL),
(2, 'Salads', '1657548381_3783795.png', 'salads', 1, NULL, 1, '2022-07-11 14:06:21', NULL),
(3, 'Pasta', '1657548421_8726002.png', 'pasta', 1, NULL, 1, '2022-07-11 14:07:02', NULL),
(4, 'Burgers', '1657548526_5224379.png', 'burgers', 1, NULL, 1, '2022-07-11 14:08:46', NULL),
(5, 'Deserts', '1657548566_2349029.png', 'deserts', 1, NULL, 1, '2022-07-11 14:09:26', NULL),
(6, 'Pizzas', '1657548641_8975472.png', 'pizzas', 1, NULL, 1, '2022-07-11 14:10:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `chef_id` bigint(20) UNSIGNED NOT NULL,
  `chef_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chef_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chef_image` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chef_slug` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chef_creator` int(11) DEFAULT NULL,
  `chef_editor` int(11) DEFAULT NULL,
  `chef_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`chef_id`, `chef_title`, `chef_details`, `chef_image`, `chef_slug`, `chef_creator`, `chef_editor`, `chef_status`, `created_at`, `updated_at`) VALUES
(1, 'Naeem Rony', 'Sous Chef', '1657558011_8779483.jpg', 'naeem802rony', 1, 1, 1, '2022-07-11 16:45:12', '2022-07-11 16:46:51'),
(2, 'Jone Doe', 'Sous Chef', '1657557951_3483218.jpg', 'jone-doe', 1, NULL, 1, '2022-07-11 16:45:51', NULL),
(3, 'Shorif Uddin', 'Main Chef', '1657557998_4237565.jpg', 'shorif-uddin', 1, NULL, 1, '2022-07-11 16:46:38', NULL),
(4, 'Sagar Doe', 'Chef', '1657558037_7479379.jpg', 'sagar-doe', 1, NULL, 1, '2022-07-11 16:47:17', NULL),
(5, 'Tarek CHY', 'Helping Chef', '1657558099_2514573.jpg', 'tarek-chy', 1, NULL, 1, '2022-07-11 16:48:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `contact_address_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email_one` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email_two` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_address_one`, `contact_address_two`, `contact_phone_one`, `contact_phone_two`, `contact_email_one`, `contact_email_two`, `contact_status`, `created_at`, `updated_at`) VALUES
(1, '20 Carrochan Rd, Balloch, Alexandria G83 8EG, UK 69QJ+2F Alexandria, United Kingdom', '', '+91 123 456 789 0 ', '+91 123 456 788 0 ', 'prizzon@gmail.com', 'pizza@gmail.com', 1, '2022-07-11 22:35:53', '2022-07-11 22:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_time` timestamp NULL DEFAULT NULL,
  `event_image` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_slug` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_creator` int(11) DEFAULT NULL,
  `event_editor` int(11) DEFAULT NULL,
  `event_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_time`, `event_image`, `event_slug`, `event_creator`, `event_editor`, `event_status`, `created_at`, `updated_at`) VALUES
(1, 'NEW FOOD POSSESSION SO COMPARISON INQUIETUDE', '2022-07-12 18:00:00', '1657561017_8811620.jpg', 'new-food-possession-so-comparison-inquietude', 1, NULL, 1, '2022-07-11 17:36:58', NULL),
(2, 'NEW CHEF POSSESSION SO COMPARISON INQUIETUDE', '2022-07-15 18:00:00', '1657561187_8911526.jpg', 'new-chef-possession-so-comparison-inquietude', 1, NULL, 1, '2022-07-11 17:39:47', NULL),
(3, 'NEW REVIEW POSSESSION SO COMPARISON INQUIETUDE', '2022-07-19 18:00:00', '1657561223_3337007.jpg', 'new-review-possession-so-comparison-inquietude', 1, NULL, 1, '2022-07-11 17:40:23', '2022-07-11 17:41:10');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `feature_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_icon` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_slug` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_creator` int(11) DEFAULT NULL,
  `feature_editor` int(11) DEFAULT NULL,
  `feature_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `feature_title`, `feature_details`, `feature_icon`, `feature_slug`, `feature_creator`, `feature_editor`, `feature_status`, `created_at`, `updated_at`) VALUES
(1, 'ORDER YOUR FOOD', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-', 'order-1.svg', 'order3395your3395food', 1, NULL, 1, '2022-07-11 07:00:15', NULL),
(2, 'DELIVERY OR PICK UP', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-', 'order-2.svg', 'delivery4998or4998pick4998up', 1, NULL, 1, '2022-07-11 07:10:52', NULL),
(3, 'DELICIOUS RECEIPE', 'Lorem ipsum dolor sit amet, consecteturs adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-', 'order-3.svg', 'delicious438receipe', 1, 1, 1, '2022-07-11 07:11:05', '2022-07-11 09:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `menuses`
--

CREATE TABLE `menuses` (
  `menus_id` bigint(20) UNSIGNED NOT NULL,
  `menus_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menus_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menus_price` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menus_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menus_image` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menus_slug` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menus_creator` int(11) DEFAULT NULL,
  `menus_editor` int(11) DEFAULT NULL,
  `menus_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menuses`
--

INSERT INTO `menuses` (`menus_id`, `menus_name`, `menus_details`, `menus_price`, `menus_category`, `menus_image`, `menus_slug`, `menus_creator`, `menus_editor`, `menus_status`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'a', '1', '1657552376_7805301.png', 'a', 1, NULL, 0, '2022-07-11 15:12:57', '2022-07-11 15:36:58'),
(3, 'Margherita pizza', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Pizzas', '1657552605_2833609.png', 'margherita-pizza', 1, NULL, 1, '2022-07-11 15:16:45', NULL),
(4, 'Rum With Soda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Drinks', '1657552721_3864588.png', 'rum-with-soda', 1, NULL, 1, '2022-07-11 15:18:41', NULL),
(5, 'Ceaser Salad', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Salads', '1657552742_6733289.png', 'ceaser-salad', 1, NULL, 1, '2022-07-11 15:19:03', NULL),
(6, 'Sea Food Pasta', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Pasta', '1657552771_972920.png', 'sea-food-pasta', 1, NULL, 1, '2022-07-11 15:19:31', NULL),
(7, 'Chocolate Cookies', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Deserts', '1657552855_6304122.png', 'chocolate-cookies', 1, NULL, 1, '2022-07-11 15:20:56', NULL),
(8, 'Pepperoni Pizza', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Pizzas', '1657552885_6801346.png', 'pepperoni-pizza', 1, NULL, 1, '2022-07-11 15:21:25', NULL),
(9, 'Bismarck pizza', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Pizzas', '1657552919_5064692.png', 'bismarck-pizza', 1, NULL, 1, '2022-07-11 15:21:59', NULL),
(10, 'Valdostana pizza', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Pizzas', '1657552956_5813088.png', 'valdostana-pizza', 1, NULL, 1, '2022-07-11 15:22:36', NULL),
(11, 'Valdostana Burgers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '$20.50', 'Burgers', '1657552990_2083012.png', 'valdostana-burgers', 1, NULL, 1, '2022-07-11 15:23:10', '2022-07-11 15:33:21');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_07_09_220724_create_roles_table', 2),
(10, '2022_07_11_115920_create_features_table', 3),
(11, '2022_07_11_154558_create_specialities_table', 4),
(12, '2022_07_11_192253_create_categories_table', 5),
(13, '2022_07_11_201919_create_menuses_table', 6),
(14, '2022_07_11_220243_create_chefs_table', 7),
(15, '2022_07_11_225245_create_events_table', 8),
(16, '2022_07_12_014008_create_reservations_table', 9),
(17, '2022_07_12_041913_create_basicinfos_table', 10),
(18, '2022_07_12_042513_create_contacts_table', 11),
(19, '2022_07_12_042915_create_socialmedia_table', 11);

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `rtable_id` bigint(20) UNSIGNED NOT NULL,
  `rtable_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtable_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtable_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtable_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtable_name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtable_email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtable_sms` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtable_editor` int(11) DEFAULT NULL,
  `rtable_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`rtable_id`, `rtable_time`, `rtable_member`, `rtable_date`, `rtable_phone`, `rtable_name`, `rtable_email`, `rtable_sms`, `rtable_editor`, `rtable_status`, `created_at`, `updated_at`) VALUES
(2, 'hour', NULL, '2022-07-29', '4', NULL, NULL, NULL, NULL, 0, '2022-07-11 21:57:46', NULL),
(3, NULL, NULL, '2022-07-13', NULL, 'f', 'f', NULL, NULL, 0, '2022-07-11 22:02:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Super-Admin', '2022-07-09 17:08:52', '2022-07-09 17:22:09'),
(2, 'Admin', '2022-07-09 17:10:03', NULL),
(3, 'Author', '2022-07-09 17:22:41', NULL),
(4, 'Editor', '2022-07-09 17:22:54', NULL),
(5, 'User', '2022-07-09 17:23:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `sm_id` bigint(20) UNSIGNED NOT NULL,
  `sm_facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_dribbble` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_slack` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_behance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_google` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_reddit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`sm_id`, `sm_facebook`, `sm_twitter`, `sm_linkedin`, `sm_dribbble`, `sm_youtube`, `sm_slack`, `sm_instagram`, `sm_behance`, `sm_google`, `sm_reddit`, `sm_status`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'twitter', 'linkdin', 'dribble', 'youtube', '', '', '', '', '', 1, '2022-07-11 22:35:53', '2022-07-11 22:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `special_id` bigint(20) UNSIGNED NOT NULL,
  `special_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_image` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_slug` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_creator` int(11) DEFAULT NULL,
  `special_editor` int(11) DEFAULT NULL,
  `special_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`special_id`, `special_name`, `special_image`, `special_slug`, `special_creator`, `special_editor`, `special_status`, `created_at`, `updated_at`) VALUES
(1, 'Mexican Green Wave', '1657544359_9628468.jpg', '', 1, NULL, 1, '2022-07-11 12:59:19', NULL),
(2, 'Double Cheese Pizza', '1657544835_4302666.jpg', '', 1, 1, 1, '2022-07-11 13:00:06', '2022-07-11 13:07:27'),
(3, 'Margherita Pizza', '1657544433_7683667.jpg', '', 1, NULL, 1, '2022-07-11 13:00:33', '2022-07-11 13:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 5,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `role`, `image`, `user_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shorif Uddin', 1555781464, 'shorif@gmail.com', NULL, '$2y$10$1m9CGiDq.rjVCuONirew5OgZXPIIqHTL/fNyUtYiyBHk2FfzgeRF.', 1, '1657393375_8736504.jpg', 1, NULL, '2022-07-09 09:22:34', '2022-07-09 19:02:55'),
(2, 'Rony Naeem', 1755781464, 'rony@gmail.com', NULL, '$2y$10$ksoIiu8NjK4FhhQWTV.SweG6Pnn845HbHaO/.ojqW.WPkPoPKPUla', 2, '1657392357_4585625.jpg', 1, NULL, '2022-07-09 18:28:18', '2022-07-09 19:21:34'),
(3, 'Sagar', 189557814, 'sagar@gmail.com', NULL, '$2y$10$7iiDxZ7WYKo249apfGQ8H.psBsSJcl32iBs9hV42uP6CLSQkKT44u', 4, '1657442164_5846706.jpg', 1, NULL, '2022-07-10 08:36:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basicinfos`
--
ALTER TABLE `basicinfos`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`chef_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `menuses`
--
ALTER TABLE `menuses`
  ADD PRIMARY KEY (`menus_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`rtable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `roles_role_name_unique` (`role_name`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`sm_id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`special_id`);

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
-- AUTO_INCREMENT for table `basicinfos`
--
ALTER TABLE `basicinfos`
  MODIFY `basic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `chef_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menuses`
--
ALTER TABLE `menuses`
  MODIFY `menus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `rtable_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `sm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `special_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

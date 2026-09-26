-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2026 at 08:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelAssignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `city_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shankar Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(2, 1, 'Telibandha', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(3, 1, 'Pandri', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(4, 1, 'Devendra Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(5, 1, 'Tatibandh', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(6, 1, 'Mowa', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(7, 1, 'Katora Talab', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(8, 2, 'Supela', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(9, 2, 'Nehru Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(10, 2, 'Smriti Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(11, 2, 'Kohka', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(12, 2, 'Risali', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(13, 2, 'Sector 6', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(14, 3, 'Vyapar Vihar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(15, 3, 'Telipara', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(16, 3, 'Mangla', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(17, 3, 'Sarkanda', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(18, 3, 'Torwa', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(19, 3, 'Rajkishore Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(20, 14, 'Wright Town', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(21, 14, 'Napier Town', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(22, 14, 'Vijay Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(23, 14, 'Adhartal', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(24, 14, 'Gorakhpur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(25, 14, 'Madan Mahal', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(26, 14, 'Ranjhi', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(27, 12, 'MP Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(28, 12, 'Arera Colony', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(29, 12, 'Kolar Road', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(30, 12, 'Bairagarh', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(31, 12, 'Shahpura', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(32, 12, 'Bawadia Kalan', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(33, 13, 'Vijay Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(34, 13, 'Rau', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(35, 13, 'Palasia', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(36, 13, 'Bhawarkuan', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(37, 13, 'Sudama Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(38, 13, 'Scheme No. 54', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(39, 23, 'Andheri', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(40, 23, 'Bandra', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(41, 23, 'Borivali', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(42, 23, 'Dadar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(43, 23, 'Goregaon', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(44, 23, 'Powai', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(45, 24, 'Kothrud', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(46, 24, 'Viman Nagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(47, 24, 'Hinjewadi', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(48, 24, 'Baner', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(49, 24, 'Wakad', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(50, 24, 'Hadapsar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(51, 31, 'Downtown Los Angeles', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(52, 31, 'Hollywood', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(53, 31, 'Beverly Hills', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(54, 31, 'Koreatown', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(55, 31, 'Santa Monica', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(56, 31, 'Venice', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(57, 34, 'Downtown', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(58, 34, 'SoMa', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(59, 34, 'Mission District', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(60, 34, 'Chinatown', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(61, 34, 'Sunset District', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(62, 34, 'Richmond District', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:active, 0:inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobiles', 'mobiles', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(2, 'Cars', 'cars', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(3, 'Bikes', 'bikes', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(4, 'Electronics', 'electronics', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(5, 'Furniture', 'furniture', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(6, 'Property', 'property', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(7, 'Fashion', 'fashion', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(8, 'Books', 'books', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(9, 'Sports', 'sports', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(10, 'Pets', 'pets', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(11, 'Services', 'services', NULL, NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'Raipur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(2, 5, 'Bhilai', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(3, 5, 'Bilaspur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(4, 5, 'Korba', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(5, 5, 'Durg', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(6, 5, 'Rajnandgaon', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(7, 5, 'Jagdalpur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(8, 5, 'Ambikapur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(9, 5, 'Raigarh', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(10, 5, 'Dhamtari', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(11, 5, 'Mahasamund', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(12, 13, 'Bhopal', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(13, 13, 'Indore', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(14, 13, 'Jabalpur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(15, 13, 'Gwalior', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(16, 13, 'Ujjain', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(17, 13, 'Sagar', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(18, 13, 'Satna', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(19, 13, 'Rewa', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(20, 13, 'Dewas', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(21, 13, 'Katni', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(22, 13, 'Ratlam', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(23, 14, 'Mumbai', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(24, 14, 'Pune', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(25, 14, 'Nagpur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(26, 14, 'Nashik', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(27, 14, 'Aurangabad', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(28, 14, 'Thane', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(29, 14, 'Kolhapur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(30, 14, 'Solapur', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(31, 27, 'Los Angeles', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(32, 27, 'San Diego', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(33, 27, 'San Jose', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(34, 27, 'San Francisco', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(35, 27, 'Fresno', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(36, 27, 'Sacramento', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(37, 27, 'Oakland', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(38, 31, 'Miami', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(39, 31, 'Orlando', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(40, 31, 'Tampa', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(41, 31, 'Jacksonville', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(42, 31, 'Tallahassee', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(43, 31, 'Fort Lauderdale', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(5) NOT NULL,
  `phone_code` varchar(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `phone_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India', 'IN', '+91', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(2, 'United States', 'US', '+1', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(3, 'United Kingdom', 'GB', '+44', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(4, 'Australia', 'AU', '+61', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(5, 'United Arab Emirates', 'AE', '+971', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(6, 'Singapore', 'SG', '+65', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(7, 'Germany', 'DE', '+49', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(8, 'France', 'FR', '+33', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(9, 'Japan', 'JP', '+81', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` varchar(255) NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` smallint(5) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(17, '0001_01_01_000000_create_users_table', 1),
(18, '0001_01_01_000001_create_cache_table', 1),
(19, '0001_01_01_000002_create_jobs_table', 1),
(20, '2026_09_26_152050_create_categories_table', 1),
(21, '2026_09_26_161712_create_sub_categories_table', 1),
(22, '2026_09_26_163742_create_countries_table', 1),
(23, '2026_09_26_164610_create_states_table', 1),
(24, '2026_09_26_165432_create_cities_table', 1),
(25, '2026_09_26_170251_create_areas_table', 1),
(26, '2026_09_26_173040_create_products_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `detail` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `sub_category_id`, `name`, `slug`, `detail`, `image`, `country_id`, `state_id`, `city_id`, `area_id`, `price`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 9, 31, 'Football', 'football-in-devendra-nagar-raipur-iid-3', NULL, '1790445162_8463.jpeg', 1, 5, 1, 4, 1499.00, 1, '2026-09-26 16:59:34', '2026-09-26 17:52:42'),
(4, 1, 3, 11, 'scooti', 'scooti-in-nehru-nagar-bhilai-iid-4', NULL, '1790445315_9116.jpeg', 1, 5, 2, 9, 39000.00, 1, '2026-09-26 17:55:15', '2026-09-26 17:55:15'),
(5, 3, 3, 9, 'Scooter', 'scooter-in-rajkishore-nagar-bilaspur-iid-5', NULL, '1790445457_7100.jpeg', 1, 5, 3, 19, 50000.00, 1, '2026-09-26 17:57:37', '2026-09-26 17:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Andhra Pradesh', 'AP', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(2, 1, 'Arunachal Pradesh', 'AR', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(3, 1, 'Assam', 'AS', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(4, 1, 'Bihar', 'BR', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(5, 1, 'Chhattisgarh', 'CG', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(6, 1, 'Goa', 'GA', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(7, 1, 'Gujarat', 'GJ', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(8, 1, 'Haryana', 'HR', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(9, 1, 'Himachal Pradesh', 'HP', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(10, 1, 'Jharkhand', 'JH', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(11, 1, 'Karnataka', 'KA', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(12, 1, 'Kerala', 'KL', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(13, 1, 'Madhya Pradesh', 'MP', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(14, 1, 'Maharashtra', 'MH', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(15, 1, 'Odisha', 'OD', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(16, 1, 'Punjab', 'PB', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(17, 1, 'Rajasthan', 'RJ', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(18, 1, 'Tamil Nadu', 'TN', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(19, 1, 'Telangana', 'TS', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(20, 1, 'Uttar Pradesh', 'UP', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(21, 1, 'Uttarakhand', 'UK', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(22, 1, 'West Bengal', 'WB', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(23, 2, 'Alabama', 'AL', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(24, 2, 'Alaska', 'AK', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(25, 2, 'Arizona', 'AZ', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(26, 2, 'Arkansas', 'AR', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(27, 2, 'California', 'CA', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(28, 2, 'Colorado', 'CO', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(29, 2, 'Connecticut', 'CT', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(30, 2, 'Delaware', 'DE', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(31, 2, 'Florida', 'FL', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(32, 2, 'Georgia', 'GA', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(33, 2, 'Hawaii', 'HI', 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Smartphones', 'mobiles-smartphones', 'sub_categories/smartphones.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(2, 1, 'Feature Phones', 'mobiles-feature-phones', 'sub_categories/feature-phones.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(3, 1, 'Tablets', 'mobiles-tablets', 'sub_categories/tablets.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(4, 1, 'Mobile Accessories', 'mobiles-mobile-accessories', 'sub_categories/mobile-accessories.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(5, 2, 'Hatchback', 'cars-hatchback', 'sub_categories/hatchback.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(6, 2, 'Sedan', 'cars-sedan', 'sub_categories/sedan.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(7, 2, 'SUV', 'cars-suv', 'sub_categories/suv.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(8, 2, 'Luxury Cars', 'cars-luxury-cars', 'sub_categories/luxury-cars.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(9, 3, 'Motorcycles', 'bikes-motorcycles', 'sub_categories/motorcycles.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(10, 3, 'Scooters', 'bikes-scooters', 'sub_categories/scooters.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(11, 3, 'Electric Bikes', 'bikes-electric-bikes', 'sub_categories/electric-bikes.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(12, 4, 'TV', 'electronics-tv', 'sub_categories/tv.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(13, 4, 'Computer & Laptop', 'electronics-computer-laptop', 'sub_categories/computer-laptop.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(14, 4, 'Cameras', 'electronics-cameras', 'sub_categories/cameras.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(15, 4, 'Audio', 'electronics-audio', 'sub_categories/audio.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(16, 5, 'Sofa', 'furniture-sofa', 'sub_categories/sofa.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(17, 5, 'Bed', 'furniture-bed', 'sub_categories/bed.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(18, 5, 'Table & Chair', 'furniture-table-chair', 'sub_categories/table-chair.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(19, 6, 'For Sale', 'property-for-sale', 'sub_categories/for-sale.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(20, 6, 'For Rent', 'property-for-rent', 'sub_categories/for-rent.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(21, 6, 'Land & Plot', 'property-land-plot', 'sub_categories/land-plot.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(22, 7, 'Men', 'fashion-men', 'sub_categories/men.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(23, 7, 'Women', 'fashion-women', 'sub_categories/women.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(24, 7, 'Kids', 'fashion-kids', 'sub_categories/kids.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(25, 7, 'Shoes', 'fashion-shoes', 'sub_categories/shoes.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(26, 8, 'Academic Books', 'books-academic-books', 'sub_categories/academic-books.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(27, 8, 'Novels', 'books-novels', 'sub_categories/novels.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(28, 8, 'Competitive Exams', 'books-competitive-exams', 'sub_categories/competitive-exams.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(29, 9, 'Cricket', 'sports-cricket', 'sub_categories/cricket.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(30, 9, 'Football', 'sports-football', 'sub_categories/football.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(31, 9, 'Fitness Equipment', 'sports-fitness-equipment', 'sub_categories/fitness-equipment.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(32, 10, 'Dogs', 'pets-dogs', 'sub_categories/dogs.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(33, 10, 'Cats', 'pets-cats', 'sub_categories/cats.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(34, 10, 'Birds', 'pets-birds', 'sub_categories/birds.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(35, 11, 'Home Services', 'services-home-services', 'sub_categories/home-services.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(36, 11, 'Repair Services', 'services-repair-services', 'sub_categories/repair-services.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24'),
(37, 11, 'Professional Services', 'services-professional-services', 'sub_categories/professional-services.jpg', NULL, 1, '2026-09-26 16:42:24', '2026-09-26 16:42:24');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kamlesh Patel', 'phlebon@gmail.com', NULL, '$2y$12$nfGz2NrXNf4QJb/5SFUnfOOS2GJ2JDJr1By6XOxU.4TMGhj3XIk8K', NULL, '2026-09-26 16:42:45', '2026-09-26 16:42:45'),
(2, 'Kamlesh Patel', 'kamlesh@gmail.com', NULL, '$2y$12$Gy4j7XaqV1xvm70/21vfieSFOUBtNg704/2gXa5cmLUmAgpVTR.a.', NULL, '2026-09-26 17:31:00', '2026-09-26 17:31:00'),
(3, 'Ramesh', 'ramesh@gmail.com', NULL, '$2y$12$miIxowlSyoNU8VNP6WurJecSaGn4oDMe17qZ12j/CnNvkOtKXwCAq', NULL, '2026-09-26 17:56:53', '2026-09-26 17:56:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `areas_city_id_name_unique` (`city_id`,`name`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_state_id_name_unique` (`state_id`,`name`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`),
  ADD UNIQUE KEY `countries_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `products_country_id_foreign` (`country_id`),
  ADD KEY `products_state_id_foreign` (`state_id`),
  ADD KEY `products_category_id_status_index` (`category_id`,`status`),
  ADD KEY `products_city_id_status_index` (`city_id`,`status`),
  ADD KEY `products_area_id_status_index` (`area_id`,`status`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `states_country_id_name_unique` (`country_id`,`name`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_category_id_name_unique` (`category_id`,`name`),
  ADD UNIQUE KEY `sub_categories_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

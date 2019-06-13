-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2019 at 11:59 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_salaries`
--

DROP TABLE IF EXISTS `advance_salaries`;
CREATE TABLE IF NOT EXISTS `advance_salaries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advance_salaries`
--

INSERT INTO `advance_salaries` (`id`, `staff_id`, `amount`, `date`, `persiandate`, `created_at`, `updated_at`) VALUES
(18, 7, 10, '2019-02-19', '۱۳۹۷/۱۲/۱۳', '2019-02-28 05:58:24', '2019-02-28 05:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL,
  `vendor_id` int(191) NOT NULL,
  `commissionpercentage` int(191) NOT NULL,
  `commission` bigint(20) NOT NULL,
  `mercenary` bigint(20) NOT NULL,
  `monshiana` bigint(20) NOT NULL,
  `market_fee` bigint(20) NOT NULL,
  `total_spent` bigint(20) NOT NULL,
  `kham_afghani` bigint(20) NOT NULL,
  `pakha_afghani` bigint(20) NOT NULL,
  `todaykaldar` int(11) NOT NULL,
  `pakha_kaldar` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `stock_id`, `vendor_id`, `commissionpercentage`, `commission`, `mercenary`, `monshiana`, `market_fee`, `total_spent`, `kham_afghani`, `pakha_afghani`, `todaykaldar`, `pakha_kaldar`, `created_at`, `updated_at`) VALUES
(132, 52, 1, 4, 0, 250, 1, 1, 891, 0, -891, 12, -74250, '2019-03-30 03:30:09', '2019-03-30 03:30:09'),
(131, 51, 15, 5, 5300, 750, 50, 0, 36480, 106000, 69520, 530, 131170, '2019-02-28 05:38:59', '2019-02-28 05:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `buyand_sales`
--

DROP TABLE IF EXISTS `buyand_sales`;
CREATE TABLE IF NOT EXISTS `buyand_sales` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `buyandsalecustomer_id` int(11) NOT NULL,
  `customersale_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `persiandate` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyand_sale_customers`
--

DROP TABLE IF EXISTS `buyand_sale_customers`;
CREATE TABLE IF NOT EXISTS `buyand_sale_customers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` bigint(20) NOT NULL DEFAULT '0',
  `paid_amount` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyand_sale_customers`
--

INSERT INTO `buyand_sale_customers` (`id`, `name`, `address`, `phone`, `total_amount`, `paid_amount`, `created_at`, `updated_at`) VALUES
(1, 'najib plokhomri', 'market', '08089', 0, 1200000, '2019-02-02 23:09:06', '2019-02-02 23:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `buyand_sale_other_customers`
--

DROP TABLE IF EXISTS `buyand_sale_other_customers`;
CREATE TABLE IF NOT EXISTS `buyand_sale_other_customers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `customersale_id` int(11) NOT NULL,
  `customer_quantity` int(11) NOT NULL,
  `price_per_item` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `loan_amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyand_sale_other_customers`
--

INSERT INTO `buyand_sale_other_customers` (`id`, `customer_id`, `stock_id`, `customersale_id`, `customer_quantity`, `price_per_item`, `total_price`, `paid_amount`, `loan_amount`, `date`, `persiandate`, `created_at`, `updated_at`) VALUES
(5, 31, 50, 161, 10, 20, 200, 120, 80, '2019-02-01', '۱۳۹۷/۱۱/۰۱', '2019-02-12 06:25:33', '2019-02-12 06:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `buyand_sale_payments`
--

DROP TABLE IF EXISTS `buyand_sale_payments`;
CREATE TABLE IF NOT EXISTS `buyand_sale_payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `buyandsalecustomer_id` int(11) NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `paid_amount` bigint(20) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_amount` int(11) DEFAULT '0',
  `loan_amount` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `phone`, `paid_amount`, `loan_amount`, `created_at`, `updated_at`) VALUES
(32, 'haji gul agha', 'pati abad', '487837', 46000, 0, '2019-02-02 06:09:39', '2019-02-02 06:09:39'),
(31, 'mohmad agaul', 'deh sabz', '478743', 5120, 15, '2019-02-02 06:09:15', '2019-02-02 06:09:15'),
(30, 'noman kheali', 'bakhtyaran', '98329843', 12000, 3, '2019-02-02 06:09:01', '2019-02-02 06:09:01'),
(29, 'zakerullah', 'karte naw', '3499494', 0, 12, '2019-02-02 06:08:34', '2019-02-02 06:08:34'),
(28, 'اجمل', 'پل خشتی', '078263663', 0, 0, '2019-01-27 05:37:48', '2019-01-28 06:00:44'),
(25, 'کاکا ولی', 'ارزان قیمت', '07999999', 0, 0, '2019-01-24 08:46:22', '2019-01-24 08:46:22'),
(24, 'حاجی گل', 'مارکیت', '0789999', 0, 0, '2019-01-24 08:45:56', '2019-01-24 08:45:56'),
(23, 'حاجی نادر', 'چهل متره', '0789999', 0, 0, '2019-01-24 08:45:34', '2019-01-24 08:45:34'),
(27, 'دوکان', 'مارکیت', '07916353553', 0, 570, '2019-01-26 04:43:45', '2019-01-26 04:43:45'),
(22, 'نقد', 'مارکیت', '009000', 0, 0, '2019-01-24 08:45:09', '2019-01-24 08:45:09'),
(33, 'matiullah zakerullah', 'bagh bala', '8473874874', 0, 0, '2019-02-02 06:18:55', '2019-02-02 06:18:55'),
(34, 'shaker', 'karte naw', '982982982', 0, 0, '2019-02-02 06:19:10', '2019-02-02 06:19:10'),
(35, 'mohmad rafiqh', 'karte naw', '8987', 0, 0, '2019-02-02 06:19:32', '2019-02-02 06:19:32'),
(36, 'haji shirin', 'karte naw', '98798798', 0, 0, '2019-02-02 06:19:53', '2019-02-02 06:19:53'),
(37, 'emam', 'market', '34343', 0, 0, '2019-02-02 06:20:09', '2019-02-02 06:20:09'),
(38, 'enginner mahmmod', 'chelston', '498438432', 0, 0, '2019-02-02 06:20:28', '2019-02-02 06:20:28'),
(39, 'asheqh gul mohmmad', 'karte naw', '87876', 0, 0, '2019-02-02 06:26:26', '2019-02-02 06:26:26'),
(40, 'gul mohmmad', 'karte naw', '898', 0, 0, '2019-02-02 06:26:42', '2019-02-02 06:26:42'),
(41, 'farid ajmal', 'karte naw', '098098', 0, 0, '2019-02-02 06:27:00', '2019-02-02 06:27:00'),
(42, 'naqhibullah', 'pati abad', '09809809', 0, 0, '2019-02-02 06:27:19', '2019-02-02 06:27:19'),
(43, 'rafiullah', 'chehel metra', '980989087', 0, 0, '2019-02-02 06:27:32', '2019-02-02 06:27:32'),
(44, 'mohmmad wali', 'chawk', '98798798798', 0, 0, '2019-02-02 07:53:30', '2019-02-02 07:53:30'),
(45, 'noor ahmad', 'dako', '98987', 0, 0, '2019-02-02 07:53:39', '2019-02-02 07:53:39'),
(46, 'khowaja morad', 'charikar', '897987', 0, 0, '2019-02-02 07:53:51', '2019-02-02 07:53:51'),
(47, 'abdull', 'charikar', '98798', 0, 0, '2019-02-02 07:54:03', '2019-02-02 07:54:03'),
(48, 'mohmad anwar', 'sarai shamali', '98686', 0, 0, '2019-02-02 07:54:20', '2019-02-02 07:54:20'),
(49, 'haji hamayoon', 'market', '9879', 0, 0, '2019-02-02 07:54:37', '2019-02-02 07:54:37'),
(50, 'malek momin', 'market', '9879798', 0, 0, '2019-02-02 07:58:03', '2019-02-02 07:58:03'),
(52, 'Haroon', 'مارکیت', '0791643460', 12000, -12000, '2019-05-08 03:28:11', '2019-05-08 03:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payments`
--

DROP TABLE IF EXISTS `customer_payments`;
CREATE TABLE IF NOT EXISTS `customer_payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `loan_amount` bigint(20) NOT NULL,
  `paid_amount` bigint(20) NOT NULL,
  `new_loan_amount` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_payments`
--

INSERT INTO `customer_payments` (`id`, `customer_id`, `loan_amount`, `paid_amount`, `new_loan_amount`, `date`, `created_at`, `updated_at`) VALUES
(50, 32, 0, 12700, 0, '2019-02-19', '2019-02-28 05:35:27', '2019-02-28 05:35:27'),
(49, 32, 0, 13300, 0, '2019-02-07', '2019-02-28 05:34:18', '2019-02-28 05:34:18'),
(51, 52, 0, 12000, -12000, '2019-02-19', '2019-05-08 03:29:48', '2019-05-08 03:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `customer_sales`
--

DROP TABLE IF EXISTS `customer_sales`;
CREATE TABLE IF NOT EXISTS `customer_sales` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(191) NOT NULL,
  `stock_id` bigint(20) DEFAULT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_quantity` int(11) NOT NULL,
  `sold` int(11) NOT NULL DEFAULT '0',
  `price_per_item` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `paid_amount` bigint(20) NOT NULL,
  `loan_amount` bigint(191) NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=165 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_sales`
--

INSERT INTO `customer_sales` (`id`, `customer_id`, `stock_id`, `customer_name`, `vendor_name`, `item`, `customer_quantity`, `sold`, `price_per_item`, `total_price`, `paid_amount`, `loan_amount`, `date`, `persiandate`, `created_at`, `updated_at`) VALUES
(160, 31, 50, NULL, NULL, NULL, 200, 0, '100', 20000, 5000000, 15000, '2019-02-07', '۱۳۹۷/۱۱/۲۲', '2019-02-12 06:17:10', '2019-02-12 06:17:10'),
(161, 27, 50, NULL, NULL, NULL, 30, 10, '19', 570, 0, 570, '2019-02-19', '۱۳۹۷/۱۱/۳۰', '2019-02-12 06:23:49', '2019-02-12 06:23:49'),
(162, 32, 51, NULL, NULL, NULL, 200, 0, '230', 46000, 200000000, 26000, '2019-02-08', '۱۳۹۷/۱۲/۲۶', '2019-02-28 05:30:33', '2019-02-28 05:30:33'),
(163, 30, 51, NULL, NULL, NULL, 200, 0, '240', 48000, 12000000, 36000, '2019-02-19', '۱۳۹۷/۱۲/۲۷', '2019-02-28 05:31:49', '2019-02-28 05:31:49'),
(164, 29, 51, NULL, NULL, NULL, 100, 0, '120', 12000, 0, 12000, '2019-02-19', '۱۳۹۷/۱۲/۲۷', '2019-02-28 05:32:09', '2019-02-28 05:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `daily_expenses`
--

DROP TABLE IF EXISTS `daily_expenses`;
CREATE TABLE IF NOT EXISTS `daily_expenses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_expenses`
--

INSERT INTO `daily_expenses` (`id`, `staff_id`, `money_amount`, `reason`, `date`, `persiandate`, `created_at`, `updated_at`) VALUES
(21, '1', '12000', 'fxngfcngfc', '2011-08-19', '۱۳۹۷/۱۱/۲۹', '2019-05-11 01:54:00', '2019-05-11 01:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `exchanger_payments`
--

DROP TABLE IF EXISTS `exchanger_payments`;
CREATE TABLE IF NOT EXISTS `exchanger_payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `exchange_id` int(11) NOT NULL,
  `ex_paid_amount` int(11) NOT NULL,
  `rate` int(11) DEFAULT '0',
  `afghani` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exchanges`
--

DROP TABLE IF EXISTS `exchanges`;
CREATE TABLE IF NOT EXISTS `exchanges` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `exchanger` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex_paid_amount` bigint(20) NOT NULL DEFAULT '0',
  `ex_afghani_amount` bigint(20) NOT NULL DEFAULT '0',
  `our_paid_amount` bigint(20) NOT NULL DEFAULT '0',
  `loan_amount` bigint(20) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exchanges`
--

INSERT INTO `exchanges` (`id`, `exchanger`, `phone`, `address`, `ex_paid_amount`, `ex_afghani_amount`, `our_paid_amount`, `loan_amount`, `date`, `created_at`, `updated_at`) VALUES
(3, 'Naser', '0778965909', 'sarai shahzada', 12000, 120000, 0, 0, NULL, '2019-01-22 23:01:18', '2019-01-29 01:58:13'),
(5, 'دوکان', '123456', 'مارکیت', 0, 0, 0, 0, NULL, '2019-02-08 03:05:49', '2019-02-08 03:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item`, `vendor_id`, `created_at`, `updated_at`) VALUES
(12, 'amrot', NULL, '2019-01-29 03:23:40', '2019-01-29 03:23:40'),
(13, 'angor', NULL, '2019-02-02 06:04:04', '2019-02-02 06:04:04'),
(14, 'keno', NULL, '2019-02-02 07:50:36', '2019-02-02 07:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_09_143821_create_vendorlists_table', 1),
(4, '2018_12_09_170730_create_customers_table', 2),
(5, '2018_12_10_055951_create_stocks_table', 3),
(6, '2018_12_10_114930_create_customer_sales_table', 4),
(7, '2018_12_11_071653_create_items_table', 5),
(8, '2018_12_17_065657_create_customer_payments_table', 6),
(9, '2018_12_19_061240_create_bills_table', 7),
(10, '2019_01_05_063305_create_profiles_table', 8),
(11, '2019_01_08_154052_create_staff_table', 9),
(12, '2019_01_09_061628_create_salaries_table', 10),
(13, '2019_01_11_061552_create_daily_expenses_table', 11),
(14, '2019_01_17_171810_create_vendor_payments_table', 12),
(15, '2019_01_20_095544_create_exchanges_table', 13),
(16, '2019_01_20_110449_create_exchanger_payments_table', 14),
(17, '2019_01_21_090959_create_payment_to_exchangers_table', 15),
(18, '2019_01_25_150817_create_advance_salaries_table', 16),
(19, '2019_02_03_031751_create_buyand_sale_customers_table', 17),
(20, '2019_02_04_063817_create_buyand_sales_table', 18),
(21, '2019_02_06_124559_create_buyand_sale_payments_table', 19),
(22, '2019_02_07_123709_create_buyand_sale_other_customers_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_to_exchangers`
--

DROP TABLE IF EXISTS `payment_to_exchangers`;
CREATE TABLE IF NOT EXISTS `payment_to_exchangers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `exchange_id` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `banner`, `created_at`, `updated_at`) VALUES
(6, '1', '1546674088_avatar-2.jpg', '2019-01-05 03:11:28', '2019-01-05 03:11:28'),
(12, '1', '1548402023_iphone_and_ipad-wallpaper-1366x768.jpg', '2019-01-25 03:10:23', '2019-01-25 03:10:23'),
(13, '1', '1548402068_1546673936_600 x 600 px (8).jpg', '2019-01-25 03:11:08', '2019-01-25 03:11:08'),
(14, '1', '1556000394_asad.jpg', '2019-04-23 01:49:54', '2019-04-23 01:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

DROP TABLE IF EXISTS `salaries`;
CREATE TABLE IF NOT EXISTS `salaries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `staff_id`, `salary_quantity`, `date`, `created_at`, `updated_at`) VALUES
(16, '7', '2000000', '2019-02-19', '2019-02-28 05:58:49', '2019-02-28 05:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advance` bigint(20) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `number`, `advance`, `created_at`, `updated_at`) VALUES
(1, 'Someone', '079665655', 0, '2019-01-08 11:47:06', '2019-01-29 06:12:02'),
(2, 'new', '1234', 0, '2019-01-08 11:53:00', '2019-01-08 11:53:00'),
(3, 'sajad', '0791643460', 0, '2019-01-09 01:22:05', '2019-01-09 01:22:05'),
(4, 'Ahmad', '102929292', 0, '2019-01-09 02:31:59', '2019-01-09 02:31:59'),
(5, 'hedayatullah', '526363243', 0, '2019-01-19 04:04:12', '2019-01-19 04:04:12'),
(6, 'kk', '123', 0, '2019-01-25 10:52:46', '2019-01-25 10:52:46'),
(7, 'صفی الله', '78787', 0, '2019-01-27 06:42:05', '2019-01-27 06:42:05'),
(8, 'شفع الله', '39872983732', 0, '2019-02-02 07:14:25', '2019-02-02 07:14:25'),
(9, 'ضیاالحق', '98787768', 0, '2019-02-02 07:14:58', '2019-02-02 07:14:58'),
(10, 'قاری', '868686', 0, '2019-02-02 07:17:16', '2019-02-02 07:17:16'),
(11, 'اشپز', '868768', 0, '2019-02-02 07:17:52', '2019-02-02 07:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(10) UNSIGNED DEFAULT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `sold` int(11) DEFAULT '0',
  `mazdori_price` int(11) NOT NULL DEFAULT '0',
  `total_mazdori` int(11) NOT NULL DEFAULT '0',
  `bill_number` int(11) NOT NULL DEFAULT '0',
  `carnumber` int(11) NOT NULL,
  `kaldarrent` int(11) DEFAULT '0',
  `rate` int(11) NOT NULL DEFAULT '0',
  `carrent` int(11) NOT NULL,
  `monshiana` bigint(20) NOT NULL DEFAULT '0',
  `kanta` bigint(20) NOT NULL DEFAULT '0',
  `sharwalli` bigint(20) NOT NULL DEFAULT '0',
  `commissionpercentage` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stocks_vendor_id_foreign` (`vendor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `vendor_id`, `vendor_name`, `item`, `quantity`, `sold`, `mazdori_price`, `total_mazdori`, `bill_number`, `carnumber`, `kaldarrent`, `rate`, `carrent`, `monshiana`, `kanta`, `sharwalli`, `commissionpercentage`, `date`, `persiandate`, `created_at`, `updated_at`) VALUES
(50, 1, NULL, 'apple', 500, 230, 2, 1000, 767676, 55665, 56000, 540, 30240, 1000, 0, 0, NULL, '2019-02-11', '۱۳۹۷/۱۱/۲۳', '2019-02-11 03:07:59', '2019-02-11 03:07:59'),
(52, 1, NULL, 'amrot', 250, 0, 1, 250, 12, 12, 1200, 531, 637, 1, 1, 1, NULL, '2019-02-19', '۱۳۹۷/۱۱/۱۴', '2019-03-30 03:29:35', '2019-03-30 03:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$SgYP83u6uHyxZDmM9mVVZeGc.8apwRxPs6BEWN3rgtgYuBYj5HizS', 'tEGnUr0ugwrEsTVYDTpT148VtTkTS1GJSM6mTOl3h7M8feXbZBUkJp1zwVpB', '2018-12-24 06:09:35', '2019-01-03 04:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `vendorlists`
--

DROP TABLE IF EXISTS `vendorlists`;
CREATE TABLE IF NOT EXISTS `vendorlists` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaldar_paid_amount` bigint(20) NOT NULL DEFAULT '0',
  `kaldar_payment` bigint(20) NOT NULL DEFAULT '0',
  `paid_amount` bigint(20) NOT NULL DEFAULT '0',
  `our_paid_amount` bigint(20) NOT NULL DEFAULT '0',
  `loan_amount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendorlists`
--

INSERT INTO `vendorlists` (`id`, `name`, `email`, `address`, `phone`, `kaldar_paid_amount`, `kaldar_payment`, `paid_amount`, `our_paid_amount`, `loan_amount`, `created_at`, `updated_at`) VALUES
(1, 'shah', 'shah@gmail.com', 'pakistan', '2345', 0, 0, 0, 0, 0, '2018-12-09 11:12:15', '2018-12-09 11:12:15'),
(2, 'new', 'new@gmail.com', 'kabul', '124677', 0, 0, 0, 0, 0, '2018-12-09 11:12:56', '2018-12-09 11:12:56'),
(3, 'someone', 'someone@gm.com', 'Herat', '078439', 0, 0, 0, 0, 0, '2018-12-09 12:29:16', '2018-12-09 12:29:16'),
(6, 'masih', 'masih@gmail.com', 'mazar', '2834', 0, 0, 0, 0, 0, '2018-12-10 01:11:12', '2018-12-10 01:11:12'),
(7, 'هارون', NULL, 'کابل', '389234', 0, 0, 0, 0, 0, '2018-12-10 01:15:51', '2018-12-10 01:15:51'),
(8, 'shah Nawaz khan', NULL, 'Peshawer', '078956636', 0, 0, 0, 0, 0, '2018-12-15 00:57:44', '2019-01-28 08:11:20'),
(9, 'ahmad', NULL, 'kart-e-naw', '834848', 0, 0, 0, 0, 0, '2018-12-26 06:36:21', '2018-12-26 06:36:21'),
(10, 'nawaz', NULL, 'peshawar', '0776327632', 0, 0, 0, 0, 0, '2019-01-19 02:17:43', '2019-01-19 02:17:43'),
(11, 'حاجی گل', NULL, 'پشاور', '0783636', 0, 0, 0, 0, 0, '2019-01-22 05:45:27', '2019-01-28 08:12:41'),
(13, 'حاجی اشو', NULL, 'Peshawer', '87868', 0, 0, 0, 0, 0, '2019-02-02 07:50:20', '2019-02-02 07:50:20'),
(12, 'حاجی ظفر', NULL, 'pehsawar', '07989898787', 0, 0, 0, 0, 0, '2019-02-02 06:03:06', '2019-02-02 06:03:06'),
(14, 'دوکان', NULL, 'market', '9879876', 0, 0, 0, 0, 0, '2019-02-02 08:08:33', '2019-02-02 08:08:33'),
(15, 'Osman', NULL, 'pehsawar', '878768', 0, 0, 0, 0, 0, '2019-02-28 05:23:15', '2019-02-28 05:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payments`
--

DROP TABLE IF EXISTS `vendor_payments`;
CREATE TABLE IF NOT EXISTS `vendor_payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `loan_amount` bigint(20) NOT NULL DEFAULT '0',
  `new_paid_amount` bigint(20) NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '0',
  `new_loan_amount` bigint(20) NOT NULL DEFAULT '0',
  `afghani_pay_amount` bigint(20) DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `persiandate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

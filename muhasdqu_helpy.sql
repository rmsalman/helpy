-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 10:48 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhasdqu_helpy`
--

-- --------------------------------------------------------

--
-- Table structure for table `ea_appointments`
--

CREATE TABLE `ea_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending',
  `book_datetime` datetime DEFAULT NULL,
  `start_datetime` datetime DEFAULT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `notes` text,
  `hash` text,
  `is_unavailable` tinyint(4) DEFAULT '0',
  `id_users_provider` bigint(20) UNSIGNED DEFAULT NULL,
  `id_users_customer` bigint(20) UNSIGNED DEFAULT NULL,
  `id_services` bigint(20) UNSIGNED DEFAULT NULL,
  `id_google_calendar` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_appointments`
--

INSERT INTO `ea_appointments` (`id`, `status`, `book_datetime`, `start_datetime`, `end_datetime`, `notes`, `hash`, `is_unavailable`, `id_users_provider`, `id_users_customer`, `id_services`, `id_google_calendar`) VALUES
(67, 'pending', '2017-04-19 14:41:08', '2017-04-19 17:45:00', '2017-04-19 18:15:00', 'na g na', '39e684239a1657a73f0d3d157b53c7c9', 0, 85, 88, 13, NULL),
(68, 'pending', '2017-04-19 14:41:50', '2017-04-19 17:45:00', '2017-04-19 18:15:00', 'soory boy ', 'e355fa0017379ae4c44c1ad8482850cc', 0, 85, 88, 13, NULL),
(69, 'pending', '2017-04-19 16:04:55', '2017-04-24 09:00:00', '2017-04-24 09:30:00', '', '1249df7b1cb0796dba55b6391585cf32', 0, 85, 88, 13, NULL),
(71, 'pending', '2017-04-19 16:57:39', '2017-04-24 09:30:00', '2017-04-24 10:00:00', '', 'a79154a6f7f1188183a509483004f656', 0, 85, 88, 13, NULL),
(72, 'pending', '2017-04-19 18:15:04', '2017-04-24 10:00:00', '2017-04-24 10:30:00', '', '0cbc6a464f295cc7b3f9d11da14bdc87', 0, 85, 103, 13, NULL),
(73, 'pending', '2017-04-19 18:24:33', '2017-04-24 10:30:00', '2017-04-24 11:00:00', '', 'ac977b095c6e0d50e9d5420aec7ea5ff', 0, 85, 103, 13, NULL),
(78, 'pending', '2017-04-20 08:20:45', '2017-05-01 09:45:00', '2017-05-01 10:15:00', '', '248d68ac76615285e47283b0cc05c5bc', 0, 85, 106, 13, NULL),
(79, 'pending', '2017-04-20 08:35:40', '2017-05-15 09:15:00', '2017-05-15 09:45:00', '', '0c940f5745b79ce26eb0b64ad1eec6bb', 0, 85, 106, 13, NULL),
(80, 'pending', '2017-04-25 12:04:25', '2017-05-01 09:15:00', '2017-05-01 09:45:00', '', 'e21f49e6be174f0e7a466a196c74bae6', 0, 85, 88, 13, NULL),
(81, 'pending', '2017-04-25 12:19:26', '2017-06-12 09:00:00', '2017-06-12 09:30:00', '', 'adc36eb9b43ee879167942d7ea0f8394', 0, 85, 88, 13, NULL),
(82, 'pending', '2017-04-25 15:31:32', '2017-05-08 09:45:00', '2017-05-08 10:15:00', '', '13ea5249cb0824f290578a1abc69d5a3', 0, 85, 88, 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ea_roles`
--

CREATE TABLE `ea_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `slug` varchar(256) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT NULL COMMENT '0',
  `appointments` int(4) DEFAULT NULL COMMENT '0',
  `customers` int(4) DEFAULT NULL COMMENT '0',
  `services` int(4) DEFAULT NULL COMMENT '0',
  `users` int(4) DEFAULT NULL COMMENT '0',
  `system_settings` int(4) DEFAULT NULL COMMENT '0',
  `user_settings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_roles`
--

INSERT INTO `ea_roles` (`id`, `name`, `slug`, `is_admin`, `appointments`, `customers`, `services`, `users`, `system_settings`, `user_settings`) VALUES
(1, 'Administrator', 'admin', 1, 15, 15, 15, 15, 15, 15),
(2, 'Provider', 'provider', 0, 15, 15, 0, 0, 0, 15),
(3, 'Customer', 'customer', 0, 0, 0, 0, 0, 0, 0),
(4, 'Secretary', 'secretary', 0, 15, 15, 0, 0, 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `ea_secretaries_providers`
--

CREATE TABLE `ea_secretaries_providers` (
  `id_users_secretary` bigint(20) UNSIGNED NOT NULL,
  `id_users_provider` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ea_services`
--

CREATE TABLE `ea_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `currency` varchar(32) DEFAULT NULL,
  `description` text,
  `availabilities_type` varchar(32) DEFAULT 'flexible',
  `attendants_number` int(11) DEFAULT '1',
  `id_service_categories` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_services`
--

INSERT INTO `ea_services` (`id`, `name`, `duration`, `price`, `currency`, `description`, `availabilities_type`, `attendants_number`, `id_service_categories`) VALUES
(13, 'Test Service', 30, '50.00', 'USD because paypal do not MAD', 'This is a test service by the category one', 'flexible', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ea_services_providers`
--

CREATE TABLE `ea_services_providers` (
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_services` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_services_providers`
--

INSERT INTO `ea_services_providers` (`id_users`, `id_services`) VALUES
(85, 13),
(107, 13);

-- --------------------------------------------------------

--
-- Table structure for table `ea_service_categories`
--

CREATE TABLE `ea_service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_service_categories`
--

INSERT INTO `ea_service_categories` (`id`, `name`, `description`) VALUES
(1, 'category one', 'here is the category one description');

-- --------------------------------------------------------

--
-- Table structure for table `ea_settings`
--

CREATE TABLE `ea_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(512) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_settings`
--

INSERT INTO `ea_settings` (`id`, `name`, `value`) VALUES
(16, 'company_working_plan', '{\"monday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"tuesday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"wednesday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"thursday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"friday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"saturday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"sunday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]}}'),
(17, 'book_advance_timeout', '30'),
(18, 'google_analytics_code', ''),
(19, 'customer_notifications', '1'),
(20, 'date_format', 'DMY'),
(21, 'require_captcha', '0'),
(22, 'company_name', 'SilverStone'),
(23, 'company_email', 'rm.salman.dev@gmail.com'),
(24, 'company_link', 'http://localhost/easyappointments/');

-- --------------------------------------------------------

--
-- Table structure for table `ea_users`
--

CREATE TABLE `ea_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(512) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `mobile_number` varchar(128) DEFAULT NULL,
  `phone_number` varchar(128) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `state` varchar(128) DEFAULT NULL,
  `zip_code` varchar(64) DEFAULT NULL,
  `notes` text,
  `id_roles` bigint(20) UNSIGNED NOT NULL,
  `education` text NOT NULL,
  `work` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_users`
--

INSERT INTO `ea_users` (`id`, `first_name`, `last_name`, `email`, `mobile_number`, `phone_number`, `address`, `city`, `state`, `zip_code`, `notes`, `id_roles`, `education`, `work`, `password`, `user_status`) VALUES
(84, 'salman', 'saeed', 'rm.salman.dev@gmail.com', '', '+923004744535', '', '', '', '', '', 1, '', '', '0', 1),
(85, 'John', 'Doe', 'john@doe.com', '', '0123456789', '', '', '', '', '', 2, 'my education here', 'mine work here', '0', 1),
(88, 'salman', 'saeed', 'salman@ranag.com', NULL, 'Phone Numbezz', 'Address', 'lahore', NULL, '56000', 'new customer added', 3, 'education here 2', 'work here 2', '97502267ac1b12468f69c14dd70196e9', 1),
(103, 'salman', 'saeed', 'salman@sdfskdjn.com', NULL, '1234567', 'salman@sdfskdjn.com', NULL, NULL, '213423', NULL, 3, 'education here', 'work here', '202cb962ac59075b964b07152d234b70', 1),
(106, 'salman', 'saeed', 'salman@salzman.com', NULL, '12334', 'address', NULL, NULL, '1234567', 'i am Salu', 3, '', '', '202cb962ac59075b964b07152d234b70', 1),
(107, 'salman', 'saeed', 'salman.saeed786921@gmail.com', '123423456456', '1234567', 'lahore', 'lahore', 'punjab', '1234', 'testings', 2, '', '', '', 1),
(115, 'salman', 'saeed', 'salmanz@asd.com', NULL, '1234341', 'lahore', NULL, NULL, '23223', 'asfsdkjn kkjjsnsjddc', 3, '', '', '97502267ac1b12468f69c14dd70196e9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ea_user_settings`
--

CREATE TABLE `ea_user_settings` (
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL,
  `salt` varchar(512) DEFAULT NULL,
  `working_plan` text,
  `notifications` tinyint(4) DEFAULT '0',
  `google_sync` tinyint(4) DEFAULT '0',
  `google_token` text,
  `google_calendar` varchar(128) DEFAULT NULL,
  `sync_past_days` int(11) DEFAULT '5',
  `sync_future_days` int(11) DEFAULT '5',
  `calendar_view` varchar(32) DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_user_settings`
--

INSERT INTO `ea_user_settings` (`id_users`, `username`, `password`, `salt`, `working_plan`, `notifications`, `google_sync`, `google_token`, `google_calendar`, `sync_past_days`, `sync_future_days`, `calendar_view`) VALUES
(84, 'salman', '8eae4cdfbe959da59a97d6be7179a0177f5dcebc64e09597bf69162bceff4c54', '02bc341e727fcd13766b98f7b5c8954738e9737dd8d4f3cd528aba692c426222', NULL, 0, 0, NULL, NULL, 5, 5, 'default'),
(85, 'johndoe', 'da5dbae9389baf15a7de70494ea365213fb09857f5cb6c4514b59aaa04e5588d', 'a33d41b29663bf9511e3f6720ad296f1b19d4ee6d431c92180e82cd4b510180e', '{\"monday\":{\"start\":\"09:00\",\"end\":\"11:00\",\"breaks\":[{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"tuesday\":null,\"wednesday\":null,\"thursday\":null,\"friday\":null,\"saturday\":null,\"sunday\":null}', 0, 0, NULL, NULL, 5, 5, 'default'),
(107, 'salmansaeed', '9ff4fe596af46c9b32ed847f136227dda157322a5caac16a46ee921302574cad', 'a6faf66d3d7c9ba9f09aaa334faacf232fd800c1107569bfdd6ee18ca0f7fc3d', '{\"monday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"tuesday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"wednesday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"thursday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"friday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"saturday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]},\"sunday\":{\"start\":\"09:00\",\"end\":\"18:00\",\"breaks\":[{\"start\":\"11:20\",\"end\":\"11:30\"},{\"start\":\"14:30\",\"end\":\"15:00\"}]}}', 0, 0, '', NULL, 5, 5, 'default');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mes_id` int(11) NOT NULL,
  `mes_by` int(200) NOT NULL,
  `mes_to` int(200) NOT NULL,
  `mes_messages` text NOT NULL,
  `mes_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mes_updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mes_id`, `mes_by`, `mes_to`, `mes_messages`, `mes_created_at`, `mes_updated_at`) VALUES
(23, 88, 85, 'messages', '2017-04-20 14:58:36', '0000-00-00 00:00:00'),
(24, 88, 85, 'messages', '2017-04-20 14:58:47', '0000-00-00 00:00:00'),
(25, 85, 88, 'messages', '2017-04-20 15:00:42', '0000-00-00 00:00:00'),
(26, 88, 88, 'sdasfvsdfv', '2017-04-20 15:33:09', '0000-00-00 00:00:00'),
(27, 88, 88, 'sdasfvsdfv', '2017-04-20 15:33:24', '0000-00-00 00:00:00'),
(28, 85, 88, 'messaging\r\n', '2017-04-20 15:38:29', '0000-00-00 00:00:00'),
(29, 85, 88, 'reply again', '2017-04-20 15:40:31', '0000-00-00 00:00:00'),
(30, 84, 103, 'slkjflkd', '2017-04-25 12:43:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `paypal`
--

CREATE TABLE `paypal` (
  `paypal_id` int(11) NOT NULL,
  `payer_email` varchar(60) NOT NULL,
  `payer_id` varchar(60) NOT NULL,
  `payer_status` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `address_name` varchar(60) NOT NULL,
  `address_street` varchar(60) NOT NULL,
  `address_city` varchar(60) NOT NULL,
  `address_state` varchar(60) NOT NULL,
  `address_country_code` varchar(60) NOT NULL,
  `address_zip` varchar(60) NOT NULL,
  `residence_country` varchar(60) NOT NULL,
  `txn_id` varchar(60) NOT NULL,
  `mc_currency` varchar(60) NOT NULL,
  `mc_fee` varchar(60) NOT NULL,
  `mc_gross` varchar(60) NOT NULL,
  `protection_eligibility` varchar(60) NOT NULL,
  `payment_fee` varchar(60) NOT NULL,
  `payment_gross` varchar(60) NOT NULL,
  `payment_status` varchar(60) NOT NULL,
  `shipping` varchar(60) NOT NULL,
  `item_name` varchar(60) NOT NULL,
  `item_number` varchar(60) NOT NULL,
  `quantity` varchar(60) NOT NULL,
  `txn_type` varchar(60) NOT NULL,
  `payment_type` varchar(60) NOT NULL,
  `payment_date` varchar(60) NOT NULL,
  `business` varchar(60) NOT NULL,
  `receiver_id` varchar(60) NOT NULL,
  `notify_version` varchar(60) NOT NULL,
  `verify_sign` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paypal`
--

INSERT INTO `paypal` (`paypal_id`, `payer_email`, `payer_id`, `payer_status`, `first_name`, `last_name`, `address_name`, `address_street`, `address_city`, `address_state`, `address_country_code`, `address_zip`, `residence_country`, `txn_id`, `mc_currency`, `mc_fee`, `mc_gross`, `protection_eligibility`, `payment_fee`, `payment_gross`, `payment_status`, `shipping`, `item_name`, `item_number`, `quantity`, `txn_type`, `payment_type`, `payment_date`, `business`, `receiver_id`, `notify_version`, `verify_sign`) VALUES
(1, 'faizanarshadkhan-buyer@gmail.com', 'TCUCLEVAEBXJ6', 'VERIFIED', 'test', 'buyer', 'test buyer', '1 Main St', 'San Jose', 'CA', 'US', '95131', 'US', '23U497700J290740U', 'USD', '1.03', '25.00', 'ELIGIBLE', '1.03', '25.00', 'Completed', '0.00', 'Membership', '115', '1', 'web_accept', 'instant', '2017-04-26T10:42:37Z', 'zartash.tahir042@gmail.com', 'EZZYBWQSL2R8W', 'UNVERSIONED', 'AiPC9BjkCyDFQXbSkoZcgqH3hpacAFxG69DXGubT1iNEdrTGv0OJbnt8'),
(2, 'faizanarshadkhan-buyer@gmail.com', 'TCUCLEVAEBXJ6', 'VERIFIED', 'test', 'buyer', 'test buyer', '1 Main St', 'San Jose', 'CA', 'US', '95131', 'US', '23U497700J290740U', 'USD', '1.03', '25.00', 'ELIGIBLE', '1.03', '25.00', 'Completed', '0.00', 'Membership', '115', '1', 'web_accept', 'instant', '2017-04-26T10:42:37Z', 'zartash.tahir042@gmail.com', 'EZZYBWQSL2R8W', 'UNVERSIONED', 'AiPC9BjkCyDFQXbSkoZcgqH3hpacAFxG69DXGubT1iNEdrTGv0OJbnt8'),
(3, 'faizanarshadkhan-buyer@gmail.com', 'TCUCLEVAEBXJ6', 'VERIFIED', 'test', 'buyer', 'test buyer', '1 Main St', 'San Jose', 'CA', 'US', '95131', 'US', '23U497700J290740U', 'USD', '1.03', '25.00', 'ELIGIBLE', '1.03', '25.00', 'Completed', '0.00', 'Membership', '115', '1', 'web_accept', 'instant', '2017-04-26T10:42:37Z', 'zartash.tahir042@gmail.com', 'EZZYBWQSL2R8W', 'UNVERSIONED', 'AiPC9BjkCyDFQXbSkoZcgqH3hpacAFxG69DXGubT1iNEdrTGv0OJbnt8'),
(4, 'faizanarshadkhan-buyer@gmail.com', 'TCUCLEVAEBXJ6', 'VERIFIED', 'test', 'buyer', 'test buyer', '1 Main St', 'San Jose', 'CA', 'US', '95131', 'US', '23U497700J290740U', 'USD', '1.03', '25.00', 'ELIGIBLE', '1.03', '25.00', 'Completed', '0.00', 'Membership', '115', '1', 'web_accept', 'instant', '2017-04-26T10:42:37Z', 'zartash.tahir042@gmail.com', 'EZZYBWQSL2R8W', 'UNVERSIONED', 'AiPC9BjkCyDFQXbSkoZcgqH3hpacAFxG69DXGubT1iNEdrTGv0OJbnt8');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(250) NOT NULL,
  `rating_value` int(250) NOT NULL,
  `rating_by` int(250) NOT NULL,
  `rating_to` int(250) NOT NULL,
  `rating_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `rating_value`, `rating_by`, `rating_to`, `rating_created`) VALUES
(2, 4, 88, 85, '2017-04-27 15:26:57'),
(6, 2, 88, 107, '2017-04-27 19:12:59'),
(8, 4, 88, 85, '2017-04-27 15:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_full_name` varchar(50) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_zipcode` varchar(11) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1',
  `user_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`user_id`, `user_name`, `user_full_name`, `user_email`, `user_password`, `user_zipcode`, `user_status`, `user_created`, `user_updated`) VALUES
(1, 'salman', 'Salman saeed', 'salman.saeed@salman.com', '202cb962ac59075b964b07152d234b70', '12345', 1, '2017-04-18 15:36:58', '2017-04-18 18:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wal_id` int(85) NOT NULL,
  `wal_currency` varchar(60) NOT NULL,
  `wal_of` int(60) NOT NULL,
  `wal_by` int(60) NOT NULL,
  `wallet_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `wallet_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wal_id`, `wal_currency`, `wal_of`, `wal_by`, `wallet_date`, `wallet_updated`) VALUES
(1, '2000', 84, 85, '2017-04-18 18:32:27', '2017-04-20 19:16:48'),
(6, '6000', 85, 84, '2017-04-18 18:32:27', '2017-04-20 20:07:38'),
(7, '6000', 88, 84, '2017-04-18 18:32:27', '2017-04-20 20:07:38'),
(8, '4000', 85, 88, '2017-04-18 18:32:27', '2017-04-20 20:14:32'),
(9, '234234234', 84, 1, '2017-04-20 20:19:43', '2017-04-20 20:41:02'),
(10, '221234', 85, 1, '2017-04-20 20:32:16', '2017-04-20 20:36:53'),
(11, '123', 84, 85, '2017-04-20 20:41:32', '0000-00-00 00:00:00'),
(14, '115', 115, 84, '2017-04-20 20:41:32', '0000-00-00 00:00:00'),
(15, '3.75', 84, 115, '2017-04-26 17:00:05', '0000-00-00 00:00:00'),
(16, '3.75', 84, 115, '2017-04-26 17:00:59', '0000-00-00 00:00:00'),
(17, '21.25', 115, 84, '2017-04-26 17:00:59', '0000-00-00 00:00:00'),
(18, '3.75', 84, 115, '2017-04-26 17:02:21', '0000-00-00 00:00:00'),
(19, '21.25', 115, 84, '2017-04-26 17:02:21', '0000-00-00 00:00:00'),
(20, '3.75', 84, 115, '2017-04-26 17:07:39', '0000-00-00 00:00:00'),
(21, '21.25', 115, 84, '2017-04-26 17:07:39', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ea_appointments`
--
ALTER TABLE `ea_appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users_customer` (`id_users_customer`),
  ADD KEY `id_services` (`id_services`),
  ADD KEY `id_users_provider` (`id_users_provider`);

--
-- Indexes for table `ea_roles`
--
ALTER TABLE `ea_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ea_secretaries_providers`
--
ALTER TABLE `ea_secretaries_providers`
  ADD PRIMARY KEY (`id_users_secretary`,`id_users_provider`),
  ADD KEY `fk_ea_secretaries_providers_1` (`id_users_secretary`),
  ADD KEY `fk_ea_secretaries_providers_2` (`id_users_provider`);

--
-- Indexes for table `ea_services`
--
ALTER TABLE `ea_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_service_categories` (`id_service_categories`);

--
-- Indexes for table `ea_services_providers`
--
ALTER TABLE `ea_services_providers`
  ADD PRIMARY KEY (`id_users`,`id_services`),
  ADD KEY `id_services` (`id_services`);

--
-- Indexes for table `ea_service_categories`
--
ALTER TABLE `ea_service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ea_settings`
--
ALTER TABLE `ea_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ea_users`
--
ALTER TABLE `ea_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_roles` (`id_roles`);

--
-- Indexes for table `ea_user_settings`
--
ALTER TABLE `ea_user_settings`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mes_id`);

--
-- Indexes for table `paypal`
--
ALTER TABLE `paypal`
  ADD PRIMARY KEY (`paypal_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ea_appointments`
--
ALTER TABLE `ea_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `ea_roles`
--
ALTER TABLE `ea_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ea_services`
--
ALTER TABLE `ea_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ea_service_categories`
--
ALTER TABLE `ea_service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ea_settings`
--
ALTER TABLE `ea_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ea_users`
--
ALTER TABLE `ea_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `paypal`
--
ALTER TABLE `paypal`
  MODIFY `paypal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wal_id` int(85) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ea_appointments`
--
ALTER TABLE `ea_appointments`
  ADD CONSTRAINT `ea_appointments_ibfk_2` FOREIGN KEY (`id_users_customer`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ea_appointments_ibfk_3` FOREIGN KEY (`id_services`) REFERENCES `ea_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ea_appointments_ibfk_4` FOREIGN KEY (`id_users_provider`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ea_secretaries_providers`
--
ALTER TABLE `ea_secretaries_providers`
  ADD CONSTRAINT `fk_ea_secretaries_providers_1` FOREIGN KEY (`id_users_secretary`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ea_secretaries_providers_2` FOREIGN KEY (`id_users_provider`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ea_services`
--
ALTER TABLE `ea_services`
  ADD CONSTRAINT `ea_services_ibfk_1` FOREIGN KEY (`id_service_categories`) REFERENCES `ea_service_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `ea_services_providers`
--
ALTER TABLE `ea_services_providers`
  ADD CONSTRAINT `ea_services_providers_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ea_services_providers_ibfk_2` FOREIGN KEY (`id_services`) REFERENCES `ea_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ea_users`
--
ALTER TABLE `ea_users`
  ADD CONSTRAINT `ea_users_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `ea_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ea_user_settings`
--
ALTER TABLE `ea_user_settings`
  ADD CONSTRAINT `ea_user_settings_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

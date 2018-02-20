-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2018 at 06:19 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-region`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('/*', '1', 1515756290);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1515756290, 1515756290),
('/*admin/', 2, NULL, NULL, NULL, 1515756290, 1515756290);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_parent_id` int(11) DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `route` varchar(63) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `data` blob,
  `order` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img_name` varchar(255) DEFAULT NULL,
  `active` enum('0','1') NOT NULL,
  `images` text,
  `videos` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_parent_id`, `title`, `route`, `description`, `data`, `order`, `date`, `img_name`, `active`, `images`, `videos`) VALUES
(9, 0, '', 'gyuxatntesutyun', '', '', NULL, '2018-02-02 09:45:22', '', '0', NULL, NULL),
(10, 0, '', 'finansner', '', '', NULL, '2018-02-02 09:46:16', '', '0', NULL, NULL),
(11, 0, '', 'zbosashrjutyun', '', '', NULL, '2018-02-02 09:51:04', '', '0', NULL, NULL),
(12, 0, '', 'krtutyun', '', '', NULL, '2018-02-02 09:51:29', '', '0', NULL, NULL),
(13, 0, '', 'qaxaqashinutyun', '', '', NULL, '2018-02-02 09:52:16', '', '0', NULL, NULL),
(14, 0, '', 'aroxjapahutyun', '', '', NULL, '2018-02-02 09:52:42', '', '0', NULL, NULL),
(15, 0, '', 'ardyunaberutyun', '', '', NULL, '2018-02-02 09:53:10', '', '0', NULL, NULL),
(16, 0, '', 'mardkayin-resusrsner', '', '', NULL, '2018-02-02 09:54:36', '', '0', NULL, NULL),
(17, 0, '', 'mshakuyt-sport', '', '', NULL, '2018-02-02 09:55:32', '', '0', NULL, NULL),
(18, 0, '', 'axbahanutyun', '', '', NULL, '2018-02-02 09:55:54', '', '0', NULL, NULL),
(19, 0, '', 'hoxayin-hashvekshir', '', '', NULL, '2018-02-02 09:56:29', '', '0', NULL, NULL),
(20, 16, '', 'bnakchutyan-tiv', '', '', NULL, '2018-02-02 09:57:08', '', '0', NULL, NULL),
(21, 12, '', 'dproc', '', '', NULL, '2018-02-02 09:58:08', '', '0', NULL, NULL),
(22, 21, '', 'himnakan-dproc', '', '', NULL, '2018-02-02 09:58:42', '', '0', NULL, NULL),
(23, 9, '', 'anasnaglxaqanak', '', '', NULL, '2018-02-02 10:22:52', '', '0', NULL, NULL),
(24, 9, '', 'mexanizacia', '', '', NULL, '2018-02-02 10:26:44', '', '0', NULL, NULL),
(25, 9, '', 'aygi', '', '', NULL, '2018-02-02 10:27:17', '', '0', NULL, NULL),
(26, 9, '', 'vorogman-canc', '', '', NULL, '2018-02-02 10:29:20', '', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(32) NOT NULL,
  `code` varchar(31) NOT NULL,
  `active` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `name`, `code`, `active`) VALUES
(1, 'Eng', 'en', '1'),
(2, 'Հայ', 'hy', '1'),
(3, 'Рус', 'ru', '1');

-- --------------------------------------------------------

--
-- Table structure for table `locality`
--

CREATE TABLE `locality` (
  `id` int(3) NOT NULL,
  `name` varchar(31) NOT NULL,
  `title` varchar(255) NOT NULL,
  `route` varchar(60) NOT NULL,
  `lat` varchar(11) DEFAULT NULL,
  `lng` varchar(11) DEFAULT NULL,
  `data` blob,
  `img_name` varchar(255) DEFAULT NULL,
  `type` varchar(11) NOT NULL,
  `order` int(11) NOT NULL,
  `active` enum('0','1') NOT NULL,
  `images` text,
  `videos` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locality`
--

INSERT INTO `locality` (`id`, `name`, `title`, `route`, `lat`, `lng`, `data`, `img_name`, `type`, `order`, `active`, `images`, `videos`) VALUES
(1, 'Akhuryan', '', 'about', '40.780292', '43.875751', '', '', 'region', 0, '0', NULL, NULL),
(2, 'Arevik', '', 'about', '40.741233', '43.903920', '', '', 'village', 0, '0', NULL, NULL),
(3, 'Aygabac', '', 'about', '40.700259', '43.905830', '', '', 'village', 0, '0', NULL, NULL),
(4, 'Basen', '', 'about', '40.757261', '43.987906', '', '', 'village', 0, '0', NULL, NULL),
(5, 'Kamo', '', 'about', '40.826815', '43.949175', '', '', 'village', 0, '0', NULL, NULL),
(6, 'Hovit', '', 'about', '40.768647', '43.994129', '', '', 'village', 0, '0', NULL, NULL),
(7, 'Jrarat', '', 'about', '40.741063', '44.026294', '', '', 'village', 0, '0', NULL, NULL),
(8, 'Karnut', '', 'about', '40.784319', '43.952973', '', '', 'village', 0, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  `title` varchar(255) NOT NULL,
  `active` varchar(11) NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`, `title`, `active`, `keyword`) VALUES
(1, 'about', NULL, NULL, NULL, NULL, 'about', 'yes', 'about'),
(2, 'contacts', NULL, NULL, NULL, NULL, 'contacts', 'yes', 'contacts');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1515739287),
('m140209_132017_init', 1515739291),
('m140403_174025_create_account_table', 1515739292),
('m140504_113157_update_tables', 1515739297),
('m140504_130429_create_token_table', 1515739298),
('m140506_102106_rbac_init', 1515745500),
('m140602_111327_create_menu_table', 1515765919),
('m140830_171933_fix_ip_field', 1515739299),
('m140830_172703_change_account_table_name', 1515739299),
('m141222_110026_update_ip_field', 1515739300),
('m141222_135246_alter_username_length', 1515739301),
('m150614_103145_update_social_account_table', 1515739303),
('m150623_212711_fix_username_notnull', 1515739303),
('m151218_234654_add_timezone_to_profile', 1515739304),
('m160312_050000_create_user', 1515765919),
('m160929_103127_add_last_login_at_to_user_table', 1515739304),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1515745500);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(1, '36ZUEmgW9xHOMP3fXxfZeW7KY9sILraf', 1515756290, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
(1, 'admin', 'gevorg.hovhannisyan86@gmail.com', '$2y$12$eV.8KnKCwOVzR.c0ZxzYweeYVxC95PPbwX9Sht/ZBLccyhZxy.2Zu', 'Q2e42pwjTcNFltgVyq7rQrM7ZqJzfZG8', NULL, NULL, NULL, '127.0.0.1', 1515756290, 1515756290, 0, 1519135545);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `auth_assignment_user_id_idx` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locality`
--
ALTER TABLE `locality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `locality`
--
ALTER TABLE `locality`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 03:pcd06 AM
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
-- Database: `pcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `assy_l1_ds`
--

CREATE TABLE `assy_l1_ds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assy_l1_ds`
--

INSERT INTO `assy_l1_ds` (`id`, `plan`, `actual`, `tgl`) VALUES
(283, '500', '412', '2022-05-01'),
(284, '500', '447', '2022-05-02'),
(285, '500', '488', '2022-05-03'),
(286, '500', '447', '2022-05-04'),
(287, '500', '419', '2022-05-05'),
(288, '500', '435', '2022-05-06'),
(289, '500', '490', '2022-05-07'),
(290, '500', '450', '2022-05-08'),
(291, '500', '452', '2022-05-09'),
(292, '500', '434', '2022-05-10'),
(293, '500', '433', '2022-05-11'),
(294, '500', '446', '2022-05-12'),
(295, '500', '480', '2022-05-13'),
(296, '500', '405', '2022-05-14'),
(297, '500', '478', '2022-05-15'),
(298, '500', '419', '2022-05-16'),
(299, '500', '489', '2022-05-17'),
(300, '500', '430', '2022-05-18'),
(301, '500', '455', '2022-05-19'),
(302, '500', '415', '2022-05-20'),
(303, '500', '407', '2022-05-21'),
(304, '500', '493', '2022-05-22'),
(305, '500', '449', '2022-05-23'),
(306, '500', '497', '2022-05-24'),
(307, '500', '500', '2022-05-25'),
(308, '500', '441', '2022-05-26'),
(309, '500', '453', '2022-05-27'),
(310, '500', '468', '2022-05-28'),
(311, '500', '430', '2022-05-29'),
(312, '500', '403', '2022-05-30'),
(313, '500', '408', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `assy_l1_ns`
--

CREATE TABLE `assy_l1_ns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assy_l1_ns`
--

INSERT INTO `assy_l1_ns` (`id`, `plan`, `actual`, `tgl`) VALUES
(32, '700', '462', '2022-05-01'),
(33, '700', '429', '2022-05-02'),
(34, '700', '497', '2022-05-03'),
(35, '700', '478', '2022-05-04'),
(36, '700', '476', '2022-05-05'),
(37, '700', '419', '2022-05-06'),
(38, '700', '427', '2022-05-07'),
(39, '700', '446', '2022-05-08'),
(40, '700', '466', '2022-05-09'),
(41, '700', '446', '2022-05-10'),
(42, '700', '493', '2022-05-11'),
(43, '700', '407', '2022-05-12'),
(44, '700', '465', '2022-05-13'),
(45, '700', '497', '2022-05-14'),
(46, '700', '404', '2022-05-15'),
(47, '700', '455', '2022-05-16'),
(48, '700', '450', '2022-05-17'),
(49, '700', '458', '2022-05-18'),
(50, '700', '456', '2022-05-19'),
(51, '700', '426', '2022-05-20'),
(52, '700', '454', '2022-05-21'),
(53, '700', '485', '2022-05-22'),
(54, '700', '411', '2022-05-23'),
(55, '700', '431', '2022-05-24'),
(56, '700', '478', '2022-05-25'),
(57, '700', '405', '2022-05-26'),
(58, '700', '484', '2022-05-27'),
(59, '700', '474', '2022-05-28'),
(60, '700', '500', '2022-05-29'),
(61, '700', '478', '2022-05-30'),
(62, '700', '498', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `assy_l2_ds`
--

CREATE TABLE `assy_l2_ds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assy_l2_ds`
--

INSERT INTO `assy_l2_ds` (`id`, `plan`, `actual`, `tgl`) VALUES
(1, '1000', '982', '2022-05-01'),
(2, '1000', '911', '2022-05-02'),
(3, '1000', '840', '2022-05-03'),
(4, '1000', '955', '2022-05-04'),
(5, '1000', '844', '2022-05-05'),
(6, '1000', '962', '2022-05-06'),
(7, '1000', '917', '2022-05-07'),
(8, '1000', '984', '2022-05-08'),
(9, '1000', '833', '2022-05-09'),
(10, '1000', '931', '2022-05-10'),
(11, '1000', '819', '2022-05-11'),
(12, '1000', '915', '2022-05-12'),
(13, '1000', '800', '2022-05-13'),
(14, '1000', '824', '2022-05-14'),
(15, '1000', '849', '2022-05-15'),
(16, '1000', '988', '2022-05-16'),
(17, '1000', '877', '2022-05-17'),
(18, '1000', '801', '2022-05-18'),
(19, '1000', '849', '2022-05-19'),
(20, '1000', '812', '2022-05-20'),
(21, '1000', '1000', '2022-05-21'),
(22, '1000', '935', '2022-05-22'),
(23, '1000', '836', '2022-05-23'),
(24, '1000', '970', '2022-05-24'),
(25, '1000', '858', '2022-05-25'),
(26, '1000', '906', '2022-05-26'),
(27, '1000', '917', '2022-05-27'),
(28, '1000', '873', '2022-05-28'),
(29, '1000', '871', '2022-05-29'),
(30, '1000', '998', '2022-05-30'),
(31, '1000', '889', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `assy_l2_ns`
--

CREATE TABLE `assy_l2_ns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assy_l2_ns`
--

INSERT INTO `assy_l2_ns` (`id`, `plan`, `actual`, `tgl`) VALUES
(1, '1200', '887', '2022-05-01'),
(2, '1200', '982', '2022-05-02'),
(3, '1200', '917', '2022-05-03'),
(4, '1200', '841', '2022-05-04'),
(5, '1200', '898', '2022-05-05'),
(6, '1200', '902', '2022-05-06'),
(7, '1200', '876', '2022-05-07'),
(8, '1200', '969', '2022-05-08'),
(9, '1200', '870', '2022-05-09'),
(10, '1200', '837', '2022-05-10'),
(11, '1200', '818', '2022-05-11'),
(12, '1200', '819', '2022-05-12'),
(13, '1200', '936', '2022-05-13'),
(14, '1200', '954', '2022-05-14'),
(15, '1200', '947', '2022-05-15'),
(16, '1200', '883', '2022-05-16'),
(17, '1200', '814', '2022-05-17'),
(18, '1200', '971', '2022-05-18'),
(19, '1200', '810', '2022-05-19'),
(20, '1200', '972', '2022-05-20'),
(21, '1200', '846', '2022-05-21'),
(22, '1200', '860', '2022-05-22'),
(23, '1200', '1000', '2022-05-23'),
(24, '1200', '932', '2022-05-24'),
(25, '1200', '806', '2022-05-25'),
(26, '1200', '845', '2022-05-26'),
(27, '1200', '981', '2022-05-27'),
(28, '1200', '971', '2022-05-28'),
(29, '1200', '985', '2022-05-29'),
(30, '1200', '951', '2022-05-30'),
(31, '1200', '928', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `attendance-p4`
--

CREATE TABLE `attendance-p4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_mp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_mp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_add_mp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance-p4`
--

INSERT INTO `attendance-p4` (`id`, `dept`, `shift`, `total_mp`, `plan`, `act`, `p_m`, `percent`, `add_mp`, `total_add_mp`, `percent2`, `date`) VALUES
(45, 'BODY PLANT 1', 'a', '1658', '770', '700', '-70', '90.9', '0', '700', '90.9', '2022-04-26'),
(46, 'PAINT PLANT 1', 'a', '367', '152', '100', '-52', '65.8', '0', '100', '65.8', '2022-04-26'),
(47, 'ASSEMBLY PLANT 1', 'a', '944', '398', '300', '-98', '75.4', '0', '300', '75.4', '2022-04-26'),
(48, 'BODY PLANT 2', 'a', '670', '299', '275', '-24', '92', '0', '275', '92', '2022-04-26'),
(49, 'PAINT PLANT 2', 'a', '526', '218', '218', '0', '100', '0', '218', '100', '2022-04-26'),
(50, 'ASSEMBLY PLANT 2', 'a', '1030', '463', '463', '0', '100', '0', '463', '100', '2022-04-26'),
(51, 'LOGISTIC ASSY', 'a', '378', '152', '142', '-10', '93.4', '0', '142', '93.4', '2022-04-26'),
(52, 'MAINTENANCE FOR BODY & UTILITY', 'a', '80', '25', '22', '-3', '88', '0', '22', '88', '2022-04-26'),
(53, 'MAINTENANCE FOR PAINTING & ASSEMBLING', 'a', '77', '31', '25', '-6', '80.6', '0', '25', '80.6', '2022-04-26'),
(54, 'QUALITY INSPECTION', 'a', '273', '108', '96', '-12', '88.9', '0', '96', '88.9', '2022-04-26'),
(55, 'AUDIT & PROJECT PREPARATION', 'a', '55', '16', '16', '0', '100', '0', '16', '100', '2022-04-26'),
(56, 'BODY PLANT 1', 'a', '1658', '770', '765', '-5', '99.4', '0', '765', '99.4', '2022-04-25'),
(57, 'PAINT PLANT 1', 'a', '367', '152', '125', '-27', '82.2', '0', '125', '82.2', '2022-04-25'),
(58, 'ASSEMBLY PLANT 1', 'a', '944', '398', '378', '-20', '95', '0', '378', '95', '2022-04-25'),
(59, 'BODY PLANT 2', 'a', '670', '299', '299', '0', '100', '0', '299', '100', '2022-04-25'),
(60, 'PAINT PLANT 2', 'a', '526', '218', '218', '0', '100', '0', '218', '100', '2022-04-25'),
(61, 'ASSEMBLY PLANT 2', 'a', '1030', '463', '463', '0', '100', '0', '463', '100', '2022-04-25'),
(62, 'LOGISTIC ASSY', 'a', '378', '152', '142', '-10', '93.4', '0', '142', '93.4', '2022-04-25'),
(63, 'MAINTENANCE FOR BODY & UTILITY', 'a', '80', '25', '22', '-3', '88', '0', '22', '88', '2022-04-25'),
(64, 'MAINTENANCE FOR PAINTING & ASSEMBLING', 'a', '77', '31', '26', '-5', '83.9', '0', '26', '83.9', '2022-04-25'),
(65, 'QUALITY INSPECTION', 'a', '273', '108', '96', '-12', '88.9', '0', '96', '88.9', '2022-04-25'),
(66, 'AUDIT & PROJECT PREPARATION', 'a', '55', '16', '13', '-3', '81.3', '0', '13', '81.3', '2022-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `attendance-pcd`
--

CREATE TABLE `attendance-pcd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `npk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance-pcd`
--

INSERT INTO `attendance-pcd` (`id`, `npk`, `name`, `division`, `dept`, `section`, `position`, `shift`, `time`, `date`) VALUES
(196, '2535', 'GOENANTO A.', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Division Head', 'NON SHIFT', '00:00:00', '2022-04-19'),
(197, '71687', 'TAKUYA KENZAKI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Division Head', 'NON SHIFT', '00:00:00', '2022-04-19'),
(198, '28217', 'W. BENNY U.', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '00:00:00', '2022-04-19'),
(199, '21965', 'HENDRY', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '07:15:00', '2022-04-19'),
(200, '65704', 'K. TERAMOTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '00:00:00', '2022-04-19'),
(201, '71891', 'M. DIFA AZMII', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Supervisor', 'NON SHIFT', '06:28:00', '2022-04-19'),
(202, '17248', 'AGUS RIYADI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Supervisor', 'NON SHIFT', '08:00:00', '2022-04-19'),
(203, '40917', 'KRISNA IRNANDA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'VAI, CCR & Daily Planning', 'Supervisor', 'NON SHIFT', '06:30:00', '2022-04-19'),
(204, '1046', 'WAHONO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Foreman', 'NON SHIFT', '06:49:00', '2022-04-19'),
(205, '2748', 'YENNITA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Staff', 'NON SHIFT', '07:11:00', '2022-04-19'),
(206, '7105', 'CHAIRUL BAKRI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Foreman', 'NON SHIFT', '07:12:00', '2022-04-19'),
(207, '7224', 'EKO SETIAWAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFTB', '20:38:00', '2022-04-19'),
(208, '13436', 'ZARKASI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Foreman', 'SHIFTB', '20:21:00', '2022-04-19'),
(209, '14573', 'ANDRI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Foreman', 'NON SHIFT', '00:00:00', '2022-04-19'),
(210, '16747', 'ADHI PURWONO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Leader', 'NON SHIFT', '08:23:00', '2022-04-19'),
(211, '17209', 'HUDORY ILYAS', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFT A', '00:00:00', '2022-04-19'),
(212, '17585', 'HENDI LESMANA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Leader', 'NON SHIFT', '07:07:00', '2022-04-19'),
(213, '17632', 'IRWAN RADIAN SAPUTRA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Foreman', 'NON SHIFT', '07:27:00', '2022-04-19'),
(214, '17919', 'SRIYANTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFTB', '20:23:00', '2022-04-19'),
(215, '21501', 'UGIK TOFANI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Foreman', 'SHIFT A', '07:11:00', '2022-04-19'),
(216, '21621', 'PUTU SEDANA YASA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:31:00', '2022-04-19'),
(217, '21622', 'CECEP SAEPUL ANWAR', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Team Member', 'SHIFT A', '06:59:00', '2022-04-19'),
(218, '22403', 'DIDI SUGIHARTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Leader', 'SHIFTB', '20:16:00', '2022-04-19'),
(219, '22879', 'DIAN SULISTYARINI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Foreman', 'NON SHIFT', '07:19:00', '2022-04-19'),
(220, '23655', 'ELWIN SUTRANGGA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Leader', 'NON SHIFT', '07:37:00', '2022-04-19'),
(221, '25287', 'SUTRISNO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '00:00:00', '2022-04-19'),
(222, '30265', 'MUHAMAD SYARIEF HIDAYAT', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '07:57:00', '2022-04-19'),
(223, '30926', 'ADE IRVANSYAH', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '00:00:00', '2022-04-19'),
(224, '41771', 'SAMSUL FALAKH', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:53:00', '2022-04-19'),
(225, '44919', 'NUR ROHMADI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:40:00', '2022-04-19'),
(226, '46938', 'FATWA HUSADA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '06:48:00', '2022-04-19'),
(227, '52571', 'AHMAD SHOBIRIN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '07:36:00', '2022-04-19'),
(228, '58460', 'MUCHAMAD KHOIRUL IKHWAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Team Member', 'NON SHIFT', '07:25:00', '2022-04-19'),
(229, '69270', 'ALDI SATRIYA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '07:00:00', '2022-04-19'),
(230, '70861', 'REGGIANA IHZA RAHMADHAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:58:00', '2022-04-19'),
(231, '71341', 'ANWAR MAULANA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Team Member', 'NON SHIFT', '06:19:00', '2022-04-19'),
(232, '71342', 'MUHAMMAD TAUHID THOFANNI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:23:00', '2022-04-19'),
(233, '71343', 'AHMAD RIZAL', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:14:00', '2022-04-19'),
(234, '71344', 'MULIA ARIZKY SURYA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:30:00', '2022-04-19'),
(235, '2535', 'GOENANTO A.', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Division Head', 'NON SHIFT', '00:00:00', '2022-04-20'),
(236, '71687', 'TAKUYA KENZAKI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Division Head', 'NON SHIFT', '00:00:00', '2022-04-20'),
(237, '28217', 'W. BENNY U.', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '00:00:00', '2022-04-20'),
(238, '21965', 'HENDRY', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '07:15:00', '2022-04-20'),
(239, '65704', 'K. TERAMOTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '00:00:00', '2022-04-20'),
(240, '71891', 'M. DIFA AZMII', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Supervisor', 'NON SHIFT', '06:28:00', '2022-04-20'),
(241, '17248', 'AGUS RIYADI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Supervisor', 'NON SHIFT', '08:00:00', '2022-04-20'),
(242, '40917', 'KRISNA IRNANDA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'VAI, CCR & Daily Planning', 'Supervisor', 'NON SHIFT', '06:30:00', '2022-04-20'),
(243, '1046', 'WAHONO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Foreman', 'NON SHIFT', '06:49:00', '2022-04-20'),
(244, '2748', 'YENNITA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Staff', 'NON SHIFT', '07:11:00', '2022-04-20'),
(245, '7105', 'CHAIRUL BAKRI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Foreman', 'NON SHIFT', '07:12:00', '2022-04-20'),
(246, '7224', 'EKO SETIAWAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFTB', '20:38:00', '2022-04-20'),
(247, '13436', 'ZARKASI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Foreman', 'SHIFTB', '20:21:00', '2022-04-20'),
(248, '14573', 'ANDRI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Foreman', 'NON SHIFT', '00:00:00', '2022-04-20'),
(249, '16747', 'ADHI PURWONO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Leader', 'NON SHIFT', '08:23:00', '2022-04-20'),
(250, '17209', 'HUDORY ILYAS', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFT A', '00:00:00', '2022-04-20'),
(251, '17585', 'HENDI LESMANA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Leader', 'NON SHIFT', '07:07:00', '2022-04-20'),
(252, '17632', 'IRWAN RADIAN SAPUTRA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Foreman', 'NON SHIFT', '07:27:00', '2022-04-20'),
(253, '17919', 'SRIYANTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFTB', '20:23:00', '2022-04-20'),
(254, '21501', 'UGIK TOFANI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Foreman', 'SHIFT A', '07:11:00', '2022-04-20'),
(255, '21621', 'PUTU SEDANA YASA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:31:00', '2022-04-20'),
(256, '21622', 'CECEP SAEPUL ANWAR', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Team Member', 'SHIFT A', '06:59:00', '2022-04-20'),
(257, '22403', 'DIDI SUGIHARTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Leader', 'SHIFTB', '20:16:00', '2022-04-20'),
(258, '22879', 'DIAN SULISTYARINI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Foreman', 'NON SHIFT', '07:19:00', '2022-04-20'),
(259, '23655', 'ELWIN SUTRANGGA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Leader', 'NON SHIFT', '07:37:00', '2022-04-20'),
(260, '25287', 'SUTRISNO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '00:00:00', '2022-04-20'),
(261, '30265', 'MUHAMAD SYARIEF HIDAYAT', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '07:57:00', '2022-04-20'),
(262, '30926', 'ADE IRVANSYAH', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '00:00:00', '2022-04-20'),
(263, '41771', 'SAMSUL FALAKH', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:53:00', '2022-04-20'),
(264, '44919', 'NUR ROHMADI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:40:00', '2022-04-20'),
(265, '46938', 'FATWA HUSADA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '06:48:00', '2022-04-20'),
(266, '52571', 'AHMAD SHOBIRIN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '07:36:00', '2022-04-20'),
(267, '58460', 'MUCHAMAD KHOIRUL IKHWAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Team Member', 'NON SHIFT', '07:25:00', '2022-04-20'),
(268, '69270', 'ALDI SATRIYA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '07:00:00', '2022-04-20'),
(269, '70861', 'REGGIANA IHZA RAHMADHAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:58:00', '2022-04-20'),
(270, '71341', 'ANWAR MAULANA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Team Member', 'NON SHIFT', '06:19:00', '2022-04-20'),
(271, '71342', 'MUHAMMAD TAUHID THOFANNI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:23:00', '2022-04-20'),
(272, '71343', 'AHMAD RIZAL', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:14:00', '2022-04-20'),
(273, '71344', 'MULIA ARIZKY SURYA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:30:00', '2022-04-20'),
(274, '2535', 'GOENANTO A.', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Division Head', 'NON SHIFT', '00:00:00', '2022-04-21'),
(275, '71687', 'TAKUYA KENZAKI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Division Head', 'NON SHIFT', '00:00:00', '2022-04-21'),
(276, '28217', 'W. BENNY U.', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '00:00:00', '2022-04-21'),
(277, '21965', 'HENDRY', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '07:15:00', '2022-04-21'),
(278, '65704', 'K. TERAMOTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', NULL, 'Dept Head', 'NON SHIFT', '00:00:00', '2022-04-21'),
(279, '71891', 'M. DIFA AZMII', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Supervisor', 'NON SHIFT', '06:28:00', '2022-04-21'),
(280, '17248', 'AGUS RIYADI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Supervisor', 'NON SHIFT', '08:00:00', '2022-04-21'),
(281, '40917', 'KRISNA IRNANDA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'VAI, CCR & Daily Planning', 'Supervisor', 'NON SHIFT', '06:30:00', '2022-04-21'),
(282, '1046', 'WAHONO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Foreman', 'NON SHIFT', '06:49:00', '2022-04-21'),
(283, '2748', 'YENNITA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Staff', 'NON SHIFT', '07:11:00', '2022-04-21'),
(284, '7105', 'CHAIRUL BAKRI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Foreman', 'NON SHIFT', '07:12:00', '2022-04-21'),
(285, '7224', 'EKO SETIAWAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFTB', '20:38:00', '2022-04-21'),
(286, '13436', 'ZARKASI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Foreman', 'SHIFTB', '20:21:00', '2022-04-21'),
(287, '14573', 'ANDRI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Foreman', 'NON SHIFT', '00:00:00', '2022-04-21'),
(288, '16747', 'ADHI PURWONO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Leader', 'NON SHIFT', '08:23:00', '2022-04-21'),
(289, '17209', 'HUDORY ILYAS', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFT A', '00:00:00', '2022-04-21'),
(290, '17585', 'HENDI LESMANA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Leader', 'NON SHIFT', '07:07:00', '2022-04-21'),
(291, '17632', 'IRWAN RADIAN SAPUTRA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Foreman', 'NON SHIFT', '07:27:00', '2022-04-21'),
(292, '17919', 'SRIYANTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Leader', 'SHIFTB', '20:23:00', '2022-04-21'),
(293, '21501', 'UGIK TOFANI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Foreman', 'SHIFT A', '07:11:00', '2022-04-21'),
(294, '21621', 'PUTU SEDANA YASA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:31:00', '2022-04-21'),
(295, '21622', 'CECEP SAEPUL ANWAR', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Administration & Improvement', 'Team Member', 'SHIFT A', '06:59:00', '2022-04-21'),
(296, '22403', 'DIDI SUGIHARTO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Leader', 'SHIFTB', '20:16:00', '2022-04-21'),
(297, '22879', 'DIAN SULISTYARINI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Foreman', 'NON SHIFT', '07:19:00', '2022-04-21'),
(298, '23655', 'ELWIN SUTRANGGA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Leader', 'NON SHIFT', '07:37:00', '2022-04-21'),
(299, '25287', 'SUTRISNO', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '00:00:00', '2022-04-21'),
(300, '30265', 'MUHAMAD SYARIEF HIDAYAT', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '07:57:00', '2022-04-21'),
(301, '30926', 'ADE IRVANSYAH', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '00:00:00', '2022-04-21'),
(302, '41771', 'SAMSUL FALAKH', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:53:00', '2022-04-21'),
(303, '44919', 'NUR ROHMADI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:40:00', '2022-04-21'),
(304, '46938', 'FATWA HUSADA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '06:48:00', '2022-04-21'),
(305, '52571', 'AHMAD SHOBIRIN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Daily Planning', 'Team Member', 'NON SHIFT', '07:36:00', '2022-04-21'),
(306, '58460', 'MUCHAMAD KHOIRUL IKHWAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Vehicle Planning', 'Team Member', 'NON SHIFT', '07:25:00', '2022-04-21'),
(307, '69270', 'ALDI SATRIYA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '07:00:00', '2022-04-21'),
(308, '70861', 'REGGIANA IHZA RAHMADHAN', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:58:00', '2022-04-21'),
(309, '71341', 'ANWAR MAULANA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Digitalization & Improvement', 'Team Member', 'NON SHIFT', '06:19:00', '2022-04-21'),
(310, '71342', 'MUHAMMAD TAUHID THOFANNI', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:23:00', '2022-04-21'),
(311, '71343', 'AHMAD RIZAL', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFTB', '20:14:00', '2022-04-21'),
(312, '71344', 'MULIA ARIZKY SURYA', 'PCL - Production Control & Logistic', 'PC - Planning & Control', 'Central Control Room', 'Team Member', 'SHIFT A', '06:30:00', '2022-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `best_attendance`
--

CREATE TABLE `best_attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `best_qcc`
--

CREATE TABLE `best_qcc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best_qcc`
--

INSERT INTO `best_qcc` (`id`, `image`, `tgl`) VALUES
(12, 'monthly-best/best-qcc/Best QCC-Mei 2022.png', '2022-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `best_ss`
--

CREATE TABLE `best_ss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `best_ss`
--

INSERT INTO `best_ss` (`id`, `image`, `npk`, `name`, `nilai`, `tgl`) VALUES
(1, 'monthly-best/best-ss/Irwan_Radian_S.-May-2022.jpg', '17632', 'Irwan Radian S.', '78', '2022-05-30'),
(2, 'monthly-best/best-ss/M._Khoirul_Ikhwan-May-2022.jpg', '58460', 'M. Khoirul Ikhwan', '78', '2022-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `daily_planning_delivery`
--

CREATE TABLE `daily_planning_delivery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_planning_delivery`
--

INSERT INTO `daily_planning_delivery` (`id`, `tgl`, `filename`, `path`) VALUES
(3, '2022-05-31', '06. Rencana Produksi  Delivery June_2022 Rev.00.xls', 'planning-delivery/06. Rencana Produksi  Delivery June_2022 Rev.00.xls');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_l1_ds`
--

CREATE TABLE `delivery_l1_ds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_l1_ds`
--

INSERT INTO `delivery_l1_ds` (`id`, `plan`, `actual`, `tgl`) VALUES
(218, '600', '455', '2022-05-01'),
(219, '600', '416', '2022-05-02'),
(220, '600', '480', '2022-05-03'),
(221, '600', '448', '2022-05-04'),
(222, '600', '441', '2022-05-05'),
(223, '600', '496', '2022-05-06'),
(224, '600', '498', '2022-05-07'),
(225, '600', '418', '2022-05-08'),
(226, '600', '486', '2022-05-09'),
(227, '600', '464', '2022-05-10'),
(228, '600', '419', '2022-05-11'),
(229, '600', '419', '2022-05-12'),
(230, '600', '488', '2022-05-13'),
(231, '600', '401', '2022-05-14'),
(232, '600', '409', '2022-05-15'),
(233, '600', '477', '2022-05-16'),
(234, '600', '416', '2022-05-17'),
(235, '600', '488', '2022-05-18'),
(236, '600', '493', '2022-05-19'),
(237, '600', '498', '2022-05-20'),
(238, '600', '462', '2022-05-21'),
(239, '600', '474', '2022-05-22'),
(240, '600', '437', '2022-05-23'),
(241, '600', '405', '2022-05-24'),
(242, '600', '489', '2022-05-25'),
(243, '600', '402', '2022-05-26'),
(244, '600', '498', '2022-05-27'),
(245, '600', '497', '2022-05-28'),
(246, '600', '422', '2022-05-29'),
(247, '600', '436', '2022-05-30'),
(248, '600', '472', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_l1_ns`
--

CREATE TABLE `delivery_l1_ns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_l1_ns`
--

INSERT INTO `delivery_l1_ns` (`id`, `plan`, `actual`, `tgl`) VALUES
(1, '800', '461', '2022-05-01'),
(2, '800', '467', '2022-05-02'),
(3, '800', '442', '2022-05-03'),
(4, '800', '441', '2022-05-04'),
(5, '800', '496', '2022-05-05'),
(6, '800', '408', '2022-05-06'),
(7, '800', '438', '2022-05-07'),
(8, '800', '466', '2022-05-08'),
(9, '800', '402', '2022-05-09'),
(10, '800', '405', '2022-05-10'),
(11, '800', '412', '2022-05-11'),
(12, '800', '442', '2022-05-12'),
(13, '800', '482', '2022-05-13'),
(14, '800', '483', '2022-05-14'),
(15, '800', '458', '2022-05-15'),
(16, '800', '454', '2022-05-16'),
(17, '800', '428', '2022-05-17'),
(18, '800', '411', '2022-05-18'),
(19, '800', '437', '2022-05-19'),
(20, '800', '482', '2022-05-20'),
(21, '800', '446', '2022-05-21'),
(22, '800', '406', '2022-05-22'),
(23, '800', '409', '2022-05-23'),
(24, '800', '432', '2022-05-24'),
(25, '800', '456', '2022-05-25'),
(26, '800', '453', '2022-05-26'),
(27, '800', '488', '2022-05-27'),
(28, '800', '465', '2022-05-28'),
(29, '800', '462', '2022-05-29'),
(30, '800', '433', '2022-05-30'),
(31, '800', '430', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_l2_ds`
--

CREATE TABLE `delivery_l2_ds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_l2_ds`
--

INSERT INTO `delivery_l2_ds` (`id`, `plan`, `actual`, `tgl`) VALUES
(1, '1100', '894', '2022-05-01'),
(2, '1100', '950', '2022-05-02'),
(3, '1100', '892', '2022-05-03'),
(4, '1100', '958', '2022-05-04'),
(5, '1100', '929', '2022-05-05'),
(6, '1100', '890', '2022-05-06'),
(7, '1100', '982', '2022-05-07'),
(8, '1100', '867', '2022-05-08'),
(9, '1100', '846', '2022-05-09'),
(10, '1100', '801', '2022-05-10'),
(11, '1100', '839', '2022-05-11'),
(12, '1100', '909', '2022-05-12'),
(13, '1100', '971', '2022-05-13'),
(14, '1100', '998', '2022-05-14'),
(15, '1100', '841', '2022-05-15'),
(16, '1100', '884', '2022-05-16'),
(17, '1100', '973', '2022-05-17'),
(18, '1100', '936', '2022-05-18'),
(19, '1100', '935', '2022-05-19'),
(20, '1100', '861', '2022-05-20'),
(21, '1100', '878', '2022-05-21'),
(22, '1100', '841', '2022-05-22'),
(23, '1100', '956', '2022-05-23'),
(24, '1100', '948', '2022-05-24'),
(25, '1100', '855', '2022-05-25'),
(26, '1100', '873', '2022-05-26'),
(27, '1100', '845', '2022-05-27'),
(28, '1100', '845', '2022-05-28'),
(29, '1100', '905', '2022-05-29'),
(30, '1100', '935', '2022-05-30'),
(31, '1100', '933', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_l2_ns`
--

CREATE TABLE `delivery_l2_ns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_l2_ns`
--

INSERT INTO `delivery_l2_ns` (`id`, `plan`, `actual`, `tgl`) VALUES
(1, '1300', '859', '2022-05-01'),
(2, '1300', '857', '2022-05-02'),
(3, '1300', '906', '2022-05-03'),
(4, '1300', '983', '2022-05-04'),
(5, '1300', '848', '2022-05-05'),
(6, '1300', '849', '2022-05-06'),
(7, '1300', '884', '2022-05-07'),
(8, '1300', '975', '2022-05-08'),
(9, '1300', '855', '2022-05-09'),
(10, '1300', '920', '2022-05-10'),
(11, '1300', '842', '2022-05-11'),
(12, '1300', '934', '2022-05-12'),
(13, '1300', '813', '2022-05-13'),
(14, '1300', '964', '2022-05-14'),
(15, '1300', '934', '2022-05-15'),
(16, '1300', '871', '2022-05-16'),
(17, '1300', '931', '2022-05-17'),
(18, '1300', '943', '2022-05-18'),
(19, '1300', '977', '2022-05-19'),
(20, '1300', '856', '2022-05-20'),
(21, '1300', '892', '2022-05-21'),
(22, '1300', '988', '2022-05-22'),
(23, '1300', '910', '2022-05-23'),
(24, '1300', '967', '2022-05-24'),
(25, '1300', '842', '2022-05-25'),
(26, '1300', '999', '2022-05-26'),
(27, '1300', '952', '2022-05-27'),
(28, '1300', '903', '2022-05-28'),
(29, '1300', '806', '2022-05-29'),
(30, '1300', '835', '2022-05-30'),
(31, '1300', '983', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `dpr_1`
--

CREATE TABLE `dpr_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus_minus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dpr_1`
--

INSERT INTO `dpr_1` (`id`, `tgl`, `plan`, `actual`, `plus_minus`) VALUES
(3, '2022-05-11', '127', '137', '10'),
(4, '2022-05-12', '493', '499', '6'),
(5, '2022-05-13', '521', '521', '0'),
(6, '2022-05-14', '282', '281', '-1'),
(7, '2022-05-17', '573', NULL, '-573'),
(8, '2022-05-18', '573', NULL, '-573'),
(9, '2022-05-19', '564', NULL, '-564'),
(10, '2022-05-20', '526', NULL, '-526'),
(11, '2022-05-22', '245', NULL, '-245'),
(12, '2022-05-23', '573', NULL, '-573'),
(13, '2022-05-24', '573', NULL, '-573'),
(14, '2022-05-25', '564', NULL, '-564'),
(15, '2022-05-27', '526', NULL, '-526'),
(16, '2022-05-30', '525', NULL, '-525'),
(17, '2022-05-31', '525', NULL, '-525');

-- --------------------------------------------------------

--
-- Table structure for table `dpr_2`
--

CREATE TABLE `dpr_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus_minus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dpr_2`
--

INSERT INTO `dpr_2` (`id`, `tgl`, `plan`, `actual`, `plus_minus`) VALUES
(1, '2022-05-11', '146', '155', '9'),
(2, '2022-05-12', '587', '592', '5'),
(3, '2022-05-13', '598', '539', '-59'),
(4, '2022-05-14', '219', '209', '-10'),
(5, '2022-05-17', '409', NULL, '-409'),
(6, '2022-05-18', '409', NULL, '-409'),
(7, '2022-05-19', '409', NULL, '-409'),
(8, '2022-05-20', '409', NULL, '-409'),
(9, '2022-05-22', '190', NULL, '-190'),
(10, '2022-05-23', '409', NULL, '-409'),
(11, '2022-05-24', '409', NULL, '-409'),
(12, '2022-05-25', '668', NULL, '-668'),
(13, '2022-05-27', '604', NULL, '-604'),
(14, '2022-05-30', '646', NULL, '-646'),
(15, '2022-05-31', '645', NULL, '-645');

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE `employee_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `npk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`id`, `npk`, `name`, `tgl_lahir`, `alamat`, `photo`) VALUES
(1, '2748', 'YENNITA', '1969-01-28', 'KOPM.TRIAS ESTATE BEKASI', 'pcd-employee/2748-YENNITA.jpg'),
(2, '22879', 'DIAN SULISTYARINI', '1985-01-25', 'JL.POHON BERINGIN NO.66 RT.011/03 SUNTER TG.PRIOK JAKAR', 'pcd-employee/22879-DIAN SULISTYARINI.jpg'),
(3, '71341', 'ANWAR MAULANA', '2002-01-16', 'VILLA MUTIARA JAYA BLOK N90 NO.19 RT = 003 RW = 014 KELURAHAN =WANAJAYA KECAMATAN = CIBITUNG KOTA/KAB = KABUPATEN BEKASI KODE POS =17520', NULL),
(4, '1046', 'WAHONO', '1969-02-05', 'Kencana Loka Blok R No 56 RT 01/12 Sektor XII 4 BSD Kel Ciater Kec Serpong Tangerang', 'pcd-employee/1046-WAHONO.jpg'),
(6, '71342', 'MUHAMMAD TAUHID T', '2000-02-16', 'PURI CENDANA BLOK B4 NO 09 TAMBUN SELATAN RT = 008 RW = 018 KELURAHAN =SUMBERJAYA KECAMATAN = TAMBUN SELATAN KOTA/KAB = BEKASI KODE POS =17510', 'pcd-employee/71342-MUHAMMAD TAUHID T.jpg'),
(7, '7224', 'EKO SETIAWAN', '1979-03-04', 'JL.A YANI GG KECUBUNG RT011/05 JAKARTA TI', 'pcd-employee/7224-EKO SETIAWAN.jpg'),
(8, '21501', 'UGIK TOFANI', '1986-03-01', 'JL PAPANGGO 1D NO 31A RT 08 RW 02 TANJUNG PRIOK', 'pcd-employee/21501-UGIK TOFANI.JPG'),
(9, '44919', 'NUR ROHMADI', '1993-03-09', 'TANJUNG RT/RW 11/03 KEL. CELEP KEC. KEDAWUNG KAB. SRAGEN', 'pcd-employee/44919-NUR ROHMADI.jpg'),
(10, '52571', 'AHMAD SHOBIRIN', '1995-03-04', 'KADILANGU RT/RW 01/02 KEC. TRANGKIL', 'pcd-employee/52571-AHMAD SHOBIRIN.jpg'),
(11, '69270', 'ALDI SATRIYA', '2001-03-10', 'DUSUN DUKUH RT = 039 RW = 017 KELURAHAN =PANJALU KECAMATAN = PANJALU KOTA/KAB = CIAMIS KODE POS =46264', 'pcd-employee/69270-ALDI SATRIYA.jpg'),
(12, '41771', 'SAMSUL FALAKH', '1989-04-03', 'DS. KLUWUD RT.01/01 BULAKAMBA BREBES JATENG 52253', 'pcd-employee/41771-SAMSUL FALAKH.jpg'),
(13, '14573', 'ANDRI', '1980-05-07', 'JL. PENGANTIN ALI RT004/006 JAKARTA', 'pcd-employee/14573-ANDRI.jpg'),
(14, '16747', 'ADHI PURWONO', '1985-05-22', 'JL.KAMPUNG BUGIS RT004/04 JAKARTA', 'pcd-employee/16747-ADHI PURWONO.jpg'),
(15, '30265', 'M.SYARIEF HIDAYAT', '1983-05-04', 'Palsigunung Rt.02/01 Kel.Desa. Mekarsari Kec. Cimanggis Kab. Depok Ja-Bar', 'pcd-employee/30265-M.SYARIEF HIDAYAT.jpg'),
(16, '71343', 'AHMAD RIZAL', '2003-05-21', 'KRAGAN RT = 002 RW = 003 KELURAHAN =KRAGAN KECAMATAN = KRAGAN KOTA/KAB = REMBANG KODE POS =59273', 'pcd-employee/71343-AHMAD RIZAL.jpg'),
(17, '71344', 'MULIA ARIZKY SURYA', '2003-05-21', 'DUSUN BOGORAME RT = 006 RW = 001 KELURAHAN =BOGOTANJUNG KECAMATAN = GABUS KOTA/KAB = PATI KODE POS =59173', 'pcd-employee/71344-MULIA ARIZKY SURYA.jpg'),
(18, '17632', 'IRWAN RADIAN S', '1984-06-24', 'JL.ASRAMA BS RT.04/10 NO.1 JAKARTA TIMUR', 'pcd-employee/17632-IRWAN RADIAN S.jpg'),
(19, '22403', 'DIDI SUGIARTO', '1986-06-27', 'PUSPO RT.01/01 BRUNO 1 PURWOREJO PURWOREJO', 'pcd-employee/22403-DIDI SUGIARTO.JPG'),
(20, '23655', 'ELWIN SUTRANGGA', '1988-06-20', 'KMP.BUDIRAJA RT03/01 SIRNABAYA CIREBON UTARA JAWA BARAT', 'pcd-employee/23655-ELWIN SUTRANGGA.jpg'),
(21, '65704', 'KAZUSHI TERAMOTO', '1980-06-06', 'Jl. Gaya Motor III No 5, Sunter II, Jakarta Utara', 'pcd-employee/65704-KAZUSHI TERAMOTO.jpg'),
(23, '21965', 'HENDRY', '1983-07-18', 'JL. PRIMA 2 NO. 22 RT. 10/11 CENGKARENG, JAKARTA BARAT', 'pcd-employee/21965-HENDRY.JPG'),
(24, '58460', 'MUCHAMAD KHOIRUL I', '1996-07-08', 'NGASINAN RT = 013 RW = 003 KELURAHAN =NGASINAN KECAMATAN = PADANGAN KOTA/KAB = BOJONEGORO KODE POS =52162', 'pcd-employee/58460-MUCHAMAD KHOIRUL I.jpg'),
(26, '17248', 'AGUS RIYADI', '1979-08-23', 'JL. TANAH SERATUS RT.01/02 BANTEN', 'pcd-employee/17248-AGUS RIYADI.jpg'),
(27, '30926', 'ADE IRVANSYAH', '1984-08-24', 'KP.Cakung RT.017/004 Cakung barat Kec.cakung Jakarta Timur', 'pcd-employee/30926-ADE IRVANSYAH.jpg'),
(28, '17209', 'HUDORY ILYAS', '1981-09-25', 'JL. WARAKAS IV GG.2 NO.62 JAKARTA UTARA', 'pcd-employee/17209-HUDORY ILYAS.jpg'),
(29, '21622', 'CECEP SAEPUL A', '1983-09-29', 'PERUMAHAN VILLA MUTIARA MAS 1 BLOK A2 NO.11 RT 07 RW 04, DESA PAHLAWAN SETIA, KEC. TARUMAJAYA, BEKASI', 'pcd-employee/21622-CECEP SAEPUL A.jpg'),
(31, '7105', 'CHAIRUL BAKRI', '1974-10-24', 'JL.MARDANI RAYA NO15B RT003/013 JAKARTA PUSAT 10520', 'pcd-employee/7105-CHAIRUL BAKRI.jpg'),
(32, '17919', 'SRIYANTO', '1981-10-20', 'JL. KRAMAT JAYA RT.010 RW.001 JAKARTA PUSAT', 'pcd-employee/17919-SRIYANTO.jpg'),
(33, '46938', 'FATWA HUSADA', '1992-10-10', 'DK JURUTENGAH RT 03 RW 02 BANJUR PASAR BULUS PESANTREN KEBUMEN JAWA TENGAH 54391', 'pcd-employee/46938-FATWA HUSADA.jpg'),
(34, '17585', 'HENDI LESMANA', '1982-12-12', 'Perumahan Taman Jati Sari Permai Jl. Papua Rt 05/014 Blok EN No. 11 Kel. Jati Sari Kec. Jati Asih Bekasi Selatan Kode Pos 17426', 'pcd-employee/17585-HENDI LESMANA.JPG'),
(35, '21621', 'PUTU SEDANA YASA', '1986-12-27', 'JL.BUAH NO.21 RT004/001 CIJANTUNG JAKARTA TIMUR JAKARTA ( KOS JL. PAPANGGO 1D NO. 45 RT 015/03 TANJUNG PRIOK)', 'pcd-employee/21621-PUTU SEDANA YASA.JPG'),
(36, '70861', 'REGGIANA IHZA R', '1999-12-18', 'PERUM GRIYA SULTHAN PERSADA 1 BLOK A3/2 RT = 005 RW = 009 KELURAHAN =JEJALEN JAYA KECAMATAN = TAMBUN UTARA KOTA/KAB = KABUPATEN BEKASI KODE POS =17510', 'pcd-employee/70861-REGGIANA IHZA R.jpg'),
(38, '13436', 'ZARKASI', '1980-07-09', 'JL WARAKAS GG 22 / 6 RT 005 RW 07 KEL. PAPAPNGGO TJ PRIOK JAK-UTARA', 'pcd-employee/13436-ZARKASI.jpg');

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
-- Table structure for table `kpi`
--

CREATE TABLE `kpi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kpi`
--

INSERT INTO `kpi` (`id`, `tgl`, `description`, `status`, `user_id`) VALUES
(3, '2022-05-31', 'Tingkatkan OTD ke 90%', 'Belum Tercapai', 47);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_12_151040_create_pcd-attendance_table', 1),
(8, '2022_04_14_081632_create_attendance_p4_table', 1),
(25, '2022_04_21_133408_create_otd2_table', 13),
(26, '2022_04_21_130858_create_otd1_table', 14),
(31, '2022_04_28_095247_create_employee_birthday_image_table', 18),
(33, '2022_04_28_094554_create_qcc_table', 20),
(34, '2022_05_12_104946_create_best_attendance_table', 21),
(41, '2022_05_13_103034_create_assy_l1_table', 26),
(42, '2022_05_13_103041_create_assy_l2_table', 27),
(43, '2022_05_13_103501_create_delivery_l1_table', 28),
(44, '2022_05_13_103515_create_delivery_l2_table', 29),
(49, '2022_05_13_104640_create_assy_l1_ns_table', 34),
(50, '2022_05_13_104704_create_delivery_l1_ns_table', 35),
(51, '2022_05_13_104724_create_assy_l2_ns_table', 36),
(52, '2022_05_13_104759_create_delivery_l2_ns_table', 37),
(55, '2022_05_17_090441_create_monthly_mdp_table', 38),
(56, '2022_04_28_083444_create_birthday_table', 39),
(58, '2022_05_17_151000_create_monthly_per_models_table', 41),
(59, '2022_05_17_140518_create_monthly_total_per_type_table', 42),
(60, '2022_05_17_151000_create_monthly_total_permodel_table', 43),
(63, '2022_05_20_110040_create_l1_daily_reportfile_table', 45),
(64, '2022_05_20_110057_create_l1_hourly_running_table', 46),
(65, '2022_05_20_110114_create_l1_summary_problem_table', 47),
(66, '2022_05_20_130235_create_l2_daily_report_table', 48),
(67, '2022_05_20_130314_create_l2_hourly_running_table', 49),
(68, '2022_05_20_130344_create_l2_summary_problem_table', 50),
(69, '2022_05_22_174758_create_report_delay_unit_table', 51),
(70, '2022_05_22_175017_create_report_eom_table', 52),
(71, '2022_05_22_175042_create_report_asakai_table', 53),
(72, '2022_05_22_175117_create_report_bod_table', 54),
(73, '2022_05_22_175140_create_report_achievement_1977_table', 55),
(75, '2022_05_20_110040_create_report_dailyprod_l1_table', 56),
(76, '2022_04_13_143322_create_dpr1_table', 57),
(77, '2022_04_13_143425_create_dpr2_table', 58),
(78, '2022_05_24_111052_create_summary_problem_l1_assy_table', 59),
(79, '2022_05_24_111112_create_summary_problem_l1_toso_table', 60),
(80, '2022_05_24_111137_create_summary_problem_l1_welding_table', 61),
(81, '2022_05_24_111210_create_summary_problem_l2_assy_table', 62),
(82, '2022_05_24_111228_create_summary_problem_l2_toso_table', 63),
(83, '2022_05_24_111302_create_summary_problem_l2_welding_table', 64),
(86, '2022_05_17_090441_create_monthly_total_mdp_table', 67),
(87, '2022_04_25_073253_create_monthly_sap_table', 68),
(88, '2022_04_26_084748_create_monthly_kap_table', 69),
(90, '2014_10_12_000000_create_users_table', 71),
(91, '2022_05_25_134126_create_sop_table', 72),
(93, '2022_04_28_094404_create_ss_table', 74),
(94, '2022_05_25_090138_create_daily_planning_delivery_table', 75),
(98, '2022_05_31_132113_create_kpi_table', 76);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_kap`
--

CREATE TABLE `monthly_kap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_kap`
--

INSERT INTO `monthly_kap` (`id`, `tgl`, `volume`, `status`) VALUES
(1, '2022-01-01', '18912', 'Actual'),
(2, '2022-02-01', '16696', 'Actual'),
(3, '2022-03-01', '20859', 'Actual'),
(4, '2022-04-01', '17068', 'OPR'),
(5, '2022-05-01', '13348', 'OPR'),
(6, '2022-06-01', '21062', 'Forecast'),
(7, '2022-07-01', '21540', 'Forecast'),
(8, '2022-08-01', '22225', 'Forecast'),
(9, '2022-09-01', '20718', 'Forecast'),
(10, '2022-10-01', '20445', 'Forecast'),
(11, '2022-11-01', '20092', 'Forecast'),
(12, '2022-12-01', '19566', 'Forecast');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_sap`
--

CREATE TABLE `monthly_sap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_sap`
--

INSERT INTO `monthly_sap` (`id`, `tgl`, `volume`, `status`) VALUES
(1, '2022-01-01', '27084', 'Actual'),
(2, '2022-02-01', '23967', 'Actual'),
(3, '2022-03-01', '28143', 'Actual'),
(4, '2022-04-01', '23518', 'OPR'),
(5, '2022-05-01', '15533', 'OPR'),
(6, '2022-06-01', '27353', 'Forecast'),
(7, '2022-07-01', '27397', 'Forecast'),
(8, '2022-08-01', '28700', 'Forecast'),
(9, '2022-09-01', '28641', 'Forecast'),
(10, '2022-10-01', '27376', 'Forecast'),
(11, '2022-11-01', '27769', 'Forecast'),
(12, '2022-12-01', '27771', 'Forecast');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_total`
--

CREATE TABLE `monthly_total` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `volume_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_total`
--

INSERT INTO `monthly_total` (`id`, `tgl`, `volume_total`, `status`) VALUES
(2, '2022-01-01', '45996', 'Actual'),
(3, '2022-02-01', '40663', 'Actual'),
(4, '2022-03-01', '49002', 'Actual'),
(5, '2022-04-01', '40586', 'OPR'),
(6, '2022-05-01', '28881', 'OPR'),
(7, '2022-06-01', '48415', 'Forecast'),
(8, '2022-07-01', '48937', 'Forecast'),
(9, '2022-08-01', '50925', 'Forecast'),
(10, '2022-09-01', '49359', 'Forecast'),
(11, '2022-10-01', '47821', 'Forecast'),
(13, '2022-12-01', '47337', 'Forecast'),
(14, '2022-11-01', '47861', 'Forecast'),
(15, '2021-01-01', '45996', 'Actual'),
(16, '2021-02-01', '40663', 'Actual'),
(17, '2021-03-01', '49002', 'Actual'),
(18, '2021-04-01', '40586', 'Actual'),
(19, '2021-05-01', '28881', 'Actual'),
(20, '2021-06-01', '48415', 'Actual'),
(21, '2021-07-01', '48937', 'Actual'),
(22, '2021-08-01', '50925', 'Actual'),
(23, '2021-09-01', '49359', 'Actual'),
(24, '2021-10-01', '47821', 'Actual'),
(25, '2021-12-01', '47337', 'Actual'),
(26, '2021-11-01', '47861', 'Actual');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_total_permodel`
--

CREATE TABLE `monthly_total_permodel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_total_permodel`
--

INSERT INTO `monthly_total_permodel` (`id`, `tgl`, `model`, `volume`, `plant`) VALUES
(1, '2022-03-17', 'U-IMV', '450', 'SAP'),
(2, '2022-03-17', 'B-MPV', '6376', 'SAP'),
(3, '2022-03-17', 'D22D', '11437', 'SAP'),
(4, '2022-03-17', 'GRANMAX', '8023', 'SAP'),
(5, '2022-03-17', 'D80N', '5381', 'KAP'),
(6, '2022-03-17', 'D30D', '4893', 'KAP'),
(7, '2022-03-17', 'TERIOS KAP', '0', 'KAP'),
(8, '2022-03-17', 'RUSH KAP', '0', 'KAP'),
(9, '2022-03-17', 'A-SUV', '8053', 'KAP'),
(10, '2022-04-30', 'U-IMV', '300', 'SAP'),
(11, '2022-04-30', 'B-MPV', '5182', 'SAP'),
(12, '2022-04-30', 'D22D', '9821', 'SAP'),
(14, '2022-04-30', 'D80N', '3276', 'KAP'),
(15, '2022-04-30', 'TERIOS KAP', '0', 'KAP'),
(16, '2022-04-30', 'RUSH KAP', '0', 'KAP'),
(17, '2022-04-30', 'A-SUV', '7112', 'KAP'),
(18, '2022-04-30', 'D30D', '5645', 'KAP'),
(20, '2022-04-25', 'GRANMAX', '6684', 'SAP');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_total_pertype`
--

CREATE TABLE `monthly_total_pertype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_total_pertype`
--

INSERT INTO `monthly_total_pertype` (`id`, `tgl`, `type`, `volume`, `plant`) VALUES
(1, '2022-03-17', 'Xenia', '200', 'SAP'),
(2, '2022-03-17', 'Avanza DOM', '100', 'SAP'),
(3, '2022-03-17', 'Avanza EXP', '150', 'SAP'),
(4, '2022-03-17', 'B-MPV D-Dom', '2614', 'SAP'),
(5, '2022-03-17', 'B-MPV T-Dom', '3762', 'SAP'),
(6, '2022-03-17', 'Terios', '2614', 'SAP'),
(7, '2022-03-17', 'Rush', '4755', 'SAP'),
(8, '2022-03-17', 'RUSH EXPORT (T-Exp)', '4068', 'SAP'),
(9, '2022-03-17', 'D40D DOMESTIC (D-Dom)', '5319', 'SAP'),
(10, '2022-03-17', 'D16B WAGON  D-Dom', '300', 'SAP'),
(11, '2022-03-17', 'D40D D-Brand Export', '280', 'SAP'),
(12, '2022-03-17', 'Townlite', '1909', 'SAP'),
(13, '2022-03-17', 'TownLite Japan LHD', '0', 'SAP'),
(14, '2022-03-17', 'D40L Daihatsu', '25', 'SAP'),
(15, '2022-03-17', 'D40L MAZDA', '190', 'SAP'),
(19, '2022-03-17', 'D30D D-Dom', '2014', 'KAP'),
(20, '2022-03-17', 'D30D T-Dom', '2879', 'KAP'),
(25, '2022-04-30', 'Xenia', '100', 'SAP'),
(26, '2022-04-30', 'Avanza DOM', '200', 'SAP'),
(27, '2022-04-30', 'Avanza EXP', '0', 'SAP'),
(28, '2022-04-30', 'B-MPV D-Dom', '853', 'SAP'),
(29, '2022-04-30', 'B-MPV T-Dom', '4329', 'SAP'),
(30, '2022-04-30', 'Terios', '2538', 'SAP'),
(31, '2022-04-30', 'Rush', '3109', 'SAP'),
(32, '2022-04-30', 'RUSH EXPORT (T-Exp)', '4174', 'SAP'),
(33, '2022-04-30', 'D40D DOMESTIC (D-Dom)', '4730', 'SAP'),
(34, '2022-04-30', 'D16B WAGON  D-Dom', '300', 'SAP'),
(35, '2022-04-30', 'D40D D-Brand Export', '150', 'SAP'),
(36, '2022-04-30', 'Townlite', '1289', 'SAP'),
(37, '2022-04-30', 'TownLite Japan LHD', '0', 'SAP'),
(38, '2022-04-30', 'D40L Daihatsu', '35', 'SAP'),
(39, '2022-04-30', 'D40L MAZDA', '180', 'SAP'),
(40, '2022-04-30', 'D30D D-Dom', '2897', 'KAP'),
(42, '2022-04-25', 'D30D T-Dom', '2748', 'KAP');

-- --------------------------------------------------------

--
-- Table structure for table `otd_1`
--

CREATE TABLE `otd_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ot_adv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ot_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otd_1`
--

INSERT INTO `otd_1` (`id`, `tgl`, `plan`, `ot_adv`, `delay`, `plan_percent`, `ot_percent`, `delay_percent`) VALUES
(1, '2022-04-01', '2212', '1806', '406', '90', '81.6', '18.4'),
(2, '2022-04-04', '995', '767', '228', '90', '77.1', '22.9'),
(3, '2022-04-05', '994', '762', '232', '90', '76.7', '23.3'),
(4, '2022-04-06', '995', '742', '253', '90', '74.6', '25.4'),
(5, '2022-04-07', '992', '855', '137', '90', '86.2', '13.8'),
(8, '2022-04-08', '1040', '912', '128', '90', '87.7', '12.3'),
(9, '2022-04-09', '577', '302', '275', '90', '52.3', '47.7'),
(10, '2022-04-10', '499', '267', '232', '90', '53.5', '46.5'),
(11, '2022-04-11', '1051', '811', '240', '90', '77.2', '22.8'),
(12, '2022-04-12', '1051', '830', '221', '90', '79', '21'),
(13, '2022-04-13', '1051', '860', '221', '90', '81.8', '21'),
(14, '2022-04-14', '1051', '919', '132', '90', '87.4', '12.6'),
(15, '2022-04-18', '1051', '1007', '44', '90', '95.8', '4.2'),
(16, '2022-04-19', '1051', '1006', '45', '90', '95.7', '4.3'),
(17, '2022-04-20', '1051', '1006', '45', '90', '95.7', '4.3'),
(18, '2022-04-21', '1050', '1043', '7', '90', '99.3', '0.7'),
(19, '2022-04-22', '1050', '1011', '39', '90', '96.3', '3.7'),
(20, '2022-04-23', '1624', '56', '1568', '90', '3.4', '96.6'),
(21, '2022-04-24', '499', '452', '47', '90', '90.6', '9.4'),
(22, '2022-04-25', '1050', '765', '285', '90', '72.9', '27.1'),
(23, '2022-04-26', '1050', '746', '304', '90', '71', '29'),
(24, '2022-04-27', '1050', '492', '558', '90', '46.9', '53.1'),
(25, '2022-04-28', '577', '288', '289', '90', '49.9', '50.1');

-- --------------------------------------------------------

--
-- Table structure for table `otd_2`
--

CREATE TABLE `otd_2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ot_adv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ot_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otd_2`
--

INSERT INTO `otd_2` (`id`, `tgl`, `plan`, `ot_adv`, `delay`, `plan_percent`, `ot_percent`, `delay_percent`) VALUES
(8, '2022-04-01', '1664', '1660', '4', '90', '99.8', '0.2'),
(9, '2022-04-04', '743', '741', '2', '90', '99.7', '0.3'),
(10, '2022-04-05', '742', '741', '1', '90', '99.9', '0.1'),
(11, '2022-04-06', '742', '741', '1', '90', '99.9', '0.1'),
(12, '2022-04-07', '742', '742', '0', '90', '100', '0'),
(13, '2022-04-08', '742', '742', '0', '90', '100', '0'),
(14, '2022-04-09', '389', '389', '0', '90', '100', '0'),
(15, '2022-04-10', '341', '339', '2', '90', '99.4', '0.6'),
(16, '2022-04-11', '744', '739', '5', '90', '99.3', '0.7'),
(17, '2022-04-12', '743', '735', '8', '90', '98.9', '1.1'),
(18, '2022-04-13', '741', '733', '8', '90', '98.9', '1.1'),
(19, '2022-04-14', '741', '737', '4', '90', '99.5', '0.5'),
(20, '2022-04-18', '741', '740', '1', '90', '99.9', '0.1'),
(21, '2022-04-19', '744', '744', '0', '90', '100', '0'),
(22, '2022-04-20', '744', '743', '1', '90', '99.9', '0.1'),
(23, '2022-04-21', '740', '733', '7', '90', '99.1', '0.9'),
(24, '2022-04-22', '744', '742', '2', '90', '99.7', '0.3'),
(25, '2022-04-23', '2496', '1411', '1085', '90', '56.5', '43.5'),
(26, '2022-04-24', '342', '97', '245', '90', '28.4', '71.6'),
(27, '2022-04-25', '744', '630', '114', '90', '84.7', '15.3'),
(28, '2022-04-26', '743', '623', '120', '90', '83.8', '16.2'),
(29, '2022-04-27', '742', '544', '198', '90', '73.3', '26.7'),
(30, '2022-04-28', '390', '173', '217', '90', '44.4', '55.6');

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
-- Table structure for table `report_achievement_1977`
--

CREATE TABLE `report_achievement_1977` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_achievement_1977`
--

INSERT INTO `report_achievement_1977` (`id`, `filename`, `path`, `tgl`) VALUES
(1, '62907798b1c35- Report Achievement Delivery 1977 - 27 Mei 2022.pdf', 'report-summary/report-1977/pdf/62907798b1c35- Report Achievement Delivery 1977 - 27 Mei 2022.pdf', '2022-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `report_asakai`
--

CREATE TABLE `report_asakai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_asakai`
--

INSERT INTO `report_asakai` (`id`, `filename`, `path`, `tgl`) VALUES
(2, '6290766b002a1- Report Asakai - 27 Mei 2022.pdf', 'report-summary/report-asakai/pdf/6290766b002a1- Report Asakai - 27 Mei 2022.pdf', '2022-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `report_bod`
--

CREATE TABLE `report_bod` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_bod`
--

INSERT INTO `report_bod` (`id`, `filename`, `path`, `tgl`) VALUES
(1, '629076fa6db78- Report BOD - 27 Mei 2022.pdf', 'report-summary/report-bod/pdf/629076fa6db78- Report BOD - 27 Mei 2022.pdf', '2022-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `report_dailyprod_l1`
--

CREATE TABLE `report_dailyprod_l1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_dailyprod_l1`
--

INSERT INTO `report_dailyprod_l1` (`id`, `filename`, `path`, `tgl`) VALUES
(9, '628c31eebacd7-Daily Prod Report Line #1 - 24 Mei 2022.pdf', 'file/report-line-1/daily-prod/pdf/628c31eebacd7-Daily Prod Report Line #1 - 24 Mei 2022.pdf', '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `report_dailyprod_l2`
--

CREATE TABLE `report_dailyprod_l2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_delay_unit`
--

CREATE TABLE `report_delay_unit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_delay_unit`
--

INSERT INTO `report_delay_unit` (`id`, `filename`, `path`, `tgl`) VALUES
(2, '629076d4ac1fe- Report Delay Unit - 27 Mei 2022.pdf', 'report-summary/delay-unit/pdf/629076d4ac1fe- Report Delay Unit - 27 Mei 2022.pdf', '2022-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `report_eom`
--

CREATE TABLE `report_eom` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_eom`
--

INSERT INTO `report_eom` (`id`, `filename`, `path`, `tgl`) VALUES
(1, '629076e86ac60- Report End Of Month - 27 Mei 2022.pdf', 'report-summary/report-eom/pdf/629076e86ac60- Report End Of Month - 27 Mei 2022.pdf', '2022-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `report_hourlyrunning_l1`
--

CREATE TABLE `report_hourlyrunning_l1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_hourlyrunning_l1`
--

INSERT INTO `report_hourlyrunning_l1` (`id`, `filename`, `path`, `tgl`) VALUES
(3, '628c320da9ecb-Hourly Running Unit Report Line #1 - 24 Mei 2022.pdf', 'file/report-line-1/hourly-running/pdf/628c320da9ecb-Hourly Running Unit Report Line #1 - 24 Mei 2022.pdf', '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `report_hourlyrunning_l2`
--

CREATE TABLE `report_hourlyrunning_l2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_summaryproblem_l1`
--

CREATE TABLE `report_summaryproblem_l1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_summaryproblem_l1`
--

INSERT INTO `report_summaryproblem_l1` (`id`, `filename`, `path`, `tgl`) VALUES
(1, '628c324f10f7c-Summary Problem Report Line #1 - 24 Mei 2022.pdf', 'file/report-line-1/summary-problem/pdf/628c324f10f7c-Summary Problem Report Line #1 - 24 Mei 2022.pdf', '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `report_summaryproblem_l2`
--

CREATE TABLE `report_summaryproblem_l2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sop_adm`
--

CREATE TABLE `sop_adm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sop_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sop_adm`
--

INSERT INTO `sop_adm` (`id`, `tgl`, `filename`, `path`, `section`, `sop_code`) VALUES
(31, '2022-05-31', 'SOP Update Calender Master PIS Line #1.pdf', 'sop/vai/SOP Update Calender Master PIS Line #1.pdf', 'vai', '01_vai'),
(32, '2022-05-31', 'SOP Update Calender Master PIS Line #2.pdf', 'sop/vai/SOP Update Calender Master PIS Line #2.pdf', 'vai', '02_vai'),
(33, '2022-05-31', 'SOP Update Over Time Master PIS Line #1.pdf', 'sop/vai/SOP Update Over Time Master PIS Line #1.pdf', 'vai', '03_vai'),
(34, '2022-05-31', 'SOP Update Over Time Master PIS Line #2.pdf', 'sop/vai/SOP Update Over Time Master PIS Line #2.pdf', 'vai', '04_vai'),
(35, '2022-05-31', 'SOP Update Planning Andon Master PIS Line #1.pdf', 'sop/vai/SOP Update Planning Andon Master PIS Line #1.pdf', 'vai', '05_vai'),
(36, '2022-05-31', 'SOP Update Planning Andon Master PIS Line #2.pdf', 'sop/vai/SOP Update Planning Andon Master PIS Line #2.pdf', 'vai', '06_vai'),
(37, '2022-05-31', 'SOP Update Color Master PIS Line #1.pdf', 'sop/vai/SOP Update Color Master PIS Line #1.pdf', 'vai', '07_vai'),
(38, '2022-05-31', 'SOP Update Color Master PIS Line #2.pdf', 'sop/vai/SOP Update Color Master PIS Line #2.pdf', 'vai', '08_vai'),
(39, '2022-05-31', 'SOP Update Model Master PIS Line #1.pdf', 'sop/vai/SOP Update Model Master PIS Line #1.pdf', 'vai', '09_vai'),
(40, '2022-05-31', 'SOP Update Model Master PIS Line #2.pdf', 'sop/vai/SOP Update Model Master PIS Line #2.pdf', 'vai', '10_vai'),
(41, '2022-05-31', 'SOP Update Destination Master PIS Line #1.pdf', 'sop/vai/SOP Update Destination Master PIS Line #1.pdf', 'vai', '11_vai'),
(42, '2022-05-31', 'SOP Update Destination Master PIS Line #2.pdf', 'sop/vai/SOP Update Destination Master PIS Line #2.pdf', 'vai', '12_vai'),
(43, '2022-05-31', 'SOP Update Tracking Point Master PIS Line #1.pdf', 'sop/vai/SOP Update Tracking Point Master PIS Line #1.pdf', 'vai', '13_vai'),
(44, '2022-05-31', 'SOP Create Planning Bulanan Delivery Line #1 & #2.pdf', 'sop/vai/SOP Create Planning Bulanan Delivery Line #1 & #2.pdf', 'vai', '15_vai'),
(45, '2022-05-31', 'SOP Create Planning Delivery Base on WOS vs Planning Delivery Bulanan.pdf', 'sop/vai/SOP Create Planning Delivery Base on WOS vs Planning Delivery Bulanan.pdf', 'vai', '16_vai'),
(46, '2022-05-31', 'SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix.pdf', 'sop/vai/SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix.pdf', 'vai', '17_vai'),
(47, '2022-05-31', 'SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix & Color.pdf', 'sop/vai/SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix & Color.pdf', 'vai', '18_vai'),
(48, '2022-05-31', 'SOP Create Scenario Unit Terakhir Run Out Base on Jig in.pdf', 'sop/vai/SOP Create Scenario Unit Terakhir Run Out Base on Jig in.pdf', 'vai', '20_vai'),
(49, '2022-05-31', 'SOP Create Arrangement Composition for Planning.pdf', 'sop/daily-plan/SOP Create Arrangement Composition for Planning.pdf', 'daily_plan', '02_dailyplan'),
(50, '2022-05-31', 'SOP Create Day Night Planning.pdf', 'sop/daily-plan/SOP Create Day Night Planning.pdf', 'daily_plan', '04_dailyplan'),
(51, '2022-05-31', 'SOP Create Data NQC Rev. 02.pdf', 'sop/daily-plan/SOP Create Data NQC Rev. 02.pdf', 'daily_plan', '08_dailyplan'),
(52, '2022-05-31', 'SOP Create Plan By Line & By Model.pdf', 'sop/daily-plan/SOP Create Plan By Line & By Model.pdf', 'daily_plan', '01_dailyplan'),
(54, '2022-05-31', 'SOP Order Part Berdasarkan Rencana Produksi.pdf', 'sop/daily-plan/SOP Order Part Berdasarkan Rencana Produksi.pdf', 'daily_plan', '10_dailyplan'),
(55, '2022-05-31', 'SOP Pembuatan WOS D40D ( Gran Max & Luxio ).pdf', 'sop/daily-plan/SOP Pembuatan WOS D40D ( Gran Max & Luxio ).pdf', 'daily_plan', '11_dailyplan'),
(57, '2022-05-31', 'SOP Pembuatan WOS Untuk Support Ordering ANBUNKA.pdf', 'sop/daily-plan/SOP Pembuatan WOS Untuk Support Ordering ANBUNKA.pdf', 'daily_plan', '13_dailyplan'),
(61, '2022-05-31', 'SOP Production Planning Line #1 & Line #2.pdf', 'sop/daily-plan/SOP Production Planning Line #1 & Line #2.pdf', 'daily_plan', '05_dailyplan'),
(63, '2022-05-31', 'SOP Create Template WOS D14N.pdf', 'sop/daily-plan/SOP Create Template WOS D14N.pdf', 'daily_plan', '22_dailyplan'),
(64, '2022-05-31', 'SOP Upload WOS to PIS.pdf', 'sop/daily-plan/SOP Upload WOS to PIS.pdf', 'daily_plan', '19_dailyplan'),
(65, '2022-05-31', 'SOP Pembuatan WOS Planning U-IMV.pdf', 'sop/daily-plan/SOP Pembuatan WOS Planning U-IMV.pdf', 'daily_plan', '20_dailyplan'),
(66, '2022-05-31', 'SOP Pergantian Printer VEHICLE CARD.pdf', 'sop/daily-plan/SOP Pergantian Printer VEHICLE CARD.pdf', 'daily_plan', '21_dailyplan'),
(67, '2022-05-31', 'SOP Print Out Vehicle Card D40D.pdf', 'sop/daily-plan/SOP Print Out Vehicle Card D40D.pdf', 'daily_plan', '23_dailyplan'),
(68, '2022-05-31', 'SOP Print Out Vehicle Card U-IMV.pdf', 'sop/daily-plan/SOP Print Out Vehicle Card U-IMV.pdf', 'daily_plan', '24_dailyplan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `npk`, `password`, `role`, `image`, `division`, `dept`, `position`, `section`, `shift`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0', '$2y$10$HBOAMovuacIfoXGZbB2Bs.KxBJE4jxiTXxH9wZlbQd9jwpM25XNxO', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 08:41:23', '2022-05-31 02:32:09'),
(47, 'HENDRY', '21965', '$2y$10$hC.QvOnRsISRxpRGkJu4Re.5LrJvmYgMqWWIyLcV2RtBtEPDmV6OW', 'member', NULL, 'pcl', 'planning_control', 'dept_head', NULL, 'non_shift', '2022-05-30 00:31:29', '2022-05-30 00:31:29'),
(48, 'K. TERAMOTO', '65704', '$2y$10$/rY16Tu2F.B8SJC7/2p9leffgvEEct3s8fand6pX.KZDB8I4OJb8K', 'member', NULL, 'pcl', 'planning_control', 'dept_head', NULL, 'non_shift', '2022-05-30 00:31:29', '2022-05-30 00:31:29'),
(49, 'W. BENNY U.', '28217', '$2y$10$DV49bWh8dBmRVRr0N6KJ6uIyRWo6EhBpGffGkbk/VoDddbDsppbqa', 'member', NULL, 'pcl', 'planning_control', 'dept_head', NULL, 'non_shift', '2022-05-30 00:31:29', '2022-05-30 00:31:29'),
(50, 'GOENANTO A.', '2535', '$2y$10$k1UlrOPYSWxvdFzwZnJL6uozBuLKsVm2h7cvqErvygO6w8Klz8sYO', 'member', NULL, 'pcl', 'planning_control', 'division_head', NULL, 'non_shift', '2022-05-30 00:31:29', '2022-05-30 00:31:29'),
(51, 'TAKUYA KENZAKI', '71687', '$2y$10$qROIPetI/BhRAOpzdaimB.T0a8ydVxKAe76MkUjZ2nNarr56jmm2m', 'member', NULL, 'pcl', 'planning_control', 'division_head', NULL, 'non_shift', '2022-05-30 00:31:30', '2022-05-30 00:31:30'),
(52, 'ANDRI', '14573', '$2y$10$hunZgOhPiH1ns/LVDrXV1Or19NX8/tXuzXC2/BMoStZHWRl5rTg2e', 'member', NULL, 'pcl', 'planning_control', 'foreman', 'vai', 'non_shift', '2022-05-30 00:31:30', '2022-05-30 00:31:30'),
(53, 'CHAIRUL BAKRI', '7105', '$2y$10$RI5DcXoidOMz6/vhOmDVKO/gPhNEbryikAJ3B2TT4o0HGxFH31s5m', 'PIC Daily Planning', NULL, 'pcl', 'planning_control', 'foreman', 'daily_plan', 'non_shift', '2022-05-30 00:31:30', '2022-05-30 08:00:26'),
(54, 'DIAN SULISTYARINI', '22879', '$2y$10$FlmlYaYL3gHvPhKd9Ack..26YVLkIEmJWxA05usUTfvLOX94r.TEa', 'member', NULL, 'pcl', 'planning_control', 'foreman', 'vehicle_plan', 'non_shift', '2022-05-30 00:31:30', '2022-05-30 00:31:30'),
(55, 'IRWAN RADIAN SAPUTRA', '17632', '$2y$10$AL36mEstWNU6FfVzhn1oJ.DIHyrgGU8KQ7rtALshSO1jWds4.qbUm', 'member', NULL, 'pcl', 'planning_control', 'foreman', 'vehicle_plan', 'non_shift', '2022-05-30 00:31:30', '2022-05-30 00:31:30'),
(57, 'WAHONO', '1046', '$2y$10$OELqtm6j5G6YnlRGdDUqp.X72sA9.59z973VO8xDzAE4ymtz08t1a', 'member', NULL, 'pcl', 'planning_control', 'foreman', 'vai', 'non_shift', '2022-05-30 00:31:30', '2022-05-30 00:31:30'),
(59, 'AGUS RIYADI', '17248', '$2y$10$LKDYvUvWWc8VUYO.aDyEzeqMbctyeOKvGqUQBJbCHAvm5J0BMthcG', 'member', NULL, 'pcl', 'planning_control', 'spv', 'digital_improve', 'non_shift', '2022-05-30 00:31:30', '2022-05-30 00:31:30'),
(60, 'M. DIFA AZMII', '71891', '$2y$10$DGPD47Q4rTWBTzzwX.oK4OUgORPEy8QuT6xskLjnYlunYUxrhCflG', 'member', NULL, 'pcl', 'planning_control', 'spv', 'vehicle_plan', 'non_shift', '2022-05-30 00:31:30', '2022-05-30 00:31:30'),
(61, 'YENNITA', '2748', '$2y$10$bNDmpqIvkGosSa12ZXIdsuokxbRBIJYnbwahgpyD/murM8XAJVW.q', 'member', NULL, 'pcl', 'planning_control', 'staff', 'vai', 'non_shift', '2022-05-30 00:31:31', '2022-05-30 00:31:31'),
(62, 'DIDI SUGIHARTO', '22403', '$2y$10$.KKF9yZYmpiwQeyD7Y7zK.XIGzobd2nUsqzbv5g7iXMxmxQP1y7NG', 'member', NULL, 'pcl', 'planning_control', 'team_leader', 'ccr', 'shift', '2022-05-30 00:31:31', '2022-05-30 00:31:31'),
(63, 'EKO SETIAWAN', '7224', '$2y$10$8Vkae5gvvMMaVVPAnHAenOURfDHrsGIs94uL1nZZv4Jp4u1aOFVXe', 'member', NULL, 'pcl', 'planning_control', 'team_leader', 'vai', 'shift', '2022-05-30 00:31:31', '2022-05-30 00:31:31'),
(64, 'HUDORY ILYAS', '17209', '$2y$10$sbeew/5FuU5FDgSUbOOZreRMBWjmEksPdNFjWB//fzdZxscv8FbFe', 'member', NULL, 'pcl', 'planning_control', 'team_leader', 'vai', 'shift', '2022-05-30 00:31:31', '2022-05-30 00:31:31'),
(65, 'SRIYANTO', '17919', '$2y$10$o5gwnHj1ufUTjtZRk2jDyOhsw63tL9GwgPYnGtbys3pDBJ8uV5ScO', 'member', NULL, 'pcl', 'planning_control', 'team_leader', 'vai', 'shift', '2022-05-30 00:31:31', '2022-05-30 00:31:31'),
(66, 'ADHI PURWONO', '16747', '$2y$10$tqg93pC62DuDihruf/hL8eNke0HX94EcMD2HVzcFI0AIqGJzJZ7sq', 'PIC VAI', NULL, 'pcl', 'planning_control', 'team_leader', 'digital_improve', 'non_shift', '2022-05-30 00:31:31', '2022-05-30 07:58:53'),
(67, 'ELWIN SUTRANGGA', '23655', '$2y$10$mrzyk5LT.9.b.MHizu7NI.XC9Qp59gPntfS4rHwKt5hAtx3JK36Me', 'member', NULL, 'pcl', 'planning_control', 'team_leader', 'ccr', 'non_shift', '2022-05-30 00:31:31', '2022-05-30 00:31:31'),
(68, 'HENDI LESMANA', '17585', '$2y$10$5DzaNsA.na39G8x6oOaIE.Q292wqcNy4llXrGqnS4CD8WKMjvijhi', 'PIC Daily Planning', NULL, 'pcl', 'planning_control', 'team_leader', 'daily_plan', 'non_shift', '2022-05-30 00:31:31', '2022-05-30 08:00:35'),
(69, 'ADE IRVANSYAH', '30926', '$2y$10$s0XDux507nAiGWc/86z07euIXhpeVBUvqo2IiESm3dU2JgLonYXUm', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:31', '2022-05-30 00:31:31'),
(70, 'AHMAD RIZAL', '71343', '$2y$10$CuVcmxRgLkX1QczEdETDdu0ONhwy2FJqCfiY1hMUConwuwjSVRZ02', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:31', '2022-05-30 00:31:31'),
(71, 'AHMAD SHOBIRIN', '52571', '$2y$10$sj.Y/GsC66MS59HYwVuxx.3x.Poni93kXgJmHi6cfc7O4XKc0SvxW', 'PIC Daily Planning', NULL, 'pcl', 'planning_control', 'team_member', 'daily_plan', 'non_shift', '2022-05-30 00:31:32', '2022-05-30 08:02:38'),
(72, 'ALDI SATRIYA', '69270', '$2y$10$6h8GfxuCbYtmQTqTfAII/.HuADACdc2umUHltrZObyFMnBxf1f7Om', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:32', '2022-05-30 00:31:32'),
(73, 'ANWAR MAULANA', '71341', '$2y$10$3VfsikH80qxiR4j0lgVQpOgqADTEwufGs0KXNmEWfvrqyYUl7SKKG', 'PIC VAI', NULL, 'pcl', 'planning_control', 'team_member', 'digital_improve', 'non_shift', '2022-05-30 00:31:32', '2022-05-30 07:58:24'),
(74, 'CECEP SAEPUL ANWAR', '21622', '$2y$10$D/.lEFwFCmYLAtEXjqeEu.YTzhSSrXOW7wn0JveWLCyF0jQUNztk2', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'vai', 'shift', '2022-05-30 00:31:32', '2022-05-30 00:31:32'),
(75, 'FATWA HUSADA', '46938', '$2y$10$IniB7Ix7LhFTk6yJUDvtueinBek7SZc48jAY1y9rdBZBYcIOvTjpG', 'PIC Daily Planning', NULL, 'pcl', 'planning_control', 'team_member', 'daily_plan', 'non_shift', '2022-05-30 00:31:32', '2022-05-30 08:02:31'),
(76, 'MUCHAMAD KHOIRUL IKHWAN', '58460', '$2y$10$A.IhW4HvsHB2/cx3WzlcDeY2RjvH4fL04IeTHzEmHogBB4casHgMe', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'vehicle_plan', 'non_shift', '2022-05-30 00:31:32', '2022-05-30 00:31:32'),
(77, 'MUHAMAD SYARIEF HIDAYAT', '30265', '$2y$10$MHog/EenFOOUveDAo8iyu.Wl6voysOXH2skhtCtyA1ZOXIkycUMHu', 'PIC Daily Planning', NULL, 'pcl', 'planning_control', 'team_member', 'daily_plan', 'non_shift', '2022-05-30 00:31:32', '2022-05-30 08:02:01'),
(78, 'MUHAMMAD TAUHID THOFANNI', '71342', '$2y$10$eWxYYpQeNp1c.vyl3igYguPFSOvy52i2WWTiAY5HIQ0QP36cxxzHO', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:32', '2022-05-30 00:31:32'),
(79, 'MULIA ARIZKY SURYA', '71344', '$2y$10$8.de3x1HaaF9Ep6Q0i29VuqoH/Fip//NmvMUnDR5jWIU0KIS6qKX6', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:32', '2022-05-30 00:31:32'),
(80, 'NUR ROHMADI', '44919', '$2y$10$TK6EnIMsaUN38Q4GbaiyrumgfqN5UMl5dWLMb0k4Tj1HgCm296JhS', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:32', '2022-05-30 00:31:32'),
(81, 'PUTU SEDANA YASA', '21621', '$2y$10$RpEv4dvR2NFT46vgxQHTn.OXGuCEe5SMhe/poT0CtzAkRCuixxcb6', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:33', '2022-05-30 00:31:33'),
(82, 'REGGIANA IHZA RAHMADHAN', '70861', '$2y$10$a1P32ATnQQnuLT3DdFiAJ.qfSixMcGL4eLHaicBQWPH83kOC2XSpq', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:33', '2022-05-30 00:31:33'),
(83, 'SAMSUL FALAKH', '41771', '$2y$10$8y262wA8G8Xlnex/1/M18OuAu86OS8FDOBl9YM2nVlPWakjmckLK.', 'member', NULL, 'pcl', 'planning_control', 'team_member', 'ccr', 'shift', '2022-05-30 00:31:33', '2022-05-30 00:31:33'),
(89, 'UGIK TOFANI', '21501', '$2y$10$iwwx77R/UZ8urtifyUQc1uTTZpmglgw2xRs869cDgTGHCCJSYrHp2', 'PIC CCR', NULL, 'pcl', 'planning_control', 'foreman', 'ccr', 'shift', '2022-05-30 03:01:58', '2022-05-30 03:01:58'),
(90, 'ZARKASI', '13436', '$2y$10$JAjulYOh4W0bDwL2mg457uwV4ZhpKdj.OzYIZJWxvNy0rn6swsbfK', 'PIC CCR', NULL, 'pcl', 'planning_control', 'foreman', 'ccr', 'shift', '2022-05-30 03:03:12', '2022-05-30 03:03:12'),
(91, 'Line', '000', '$2y$10$e3/5FyZ2AVPZvQE6btXgseU4MT1exMYFspUDousTeVlXb94Od40mq', 'line', NULL, 'pcl', 'planning_control', NULL, NULL, NULL, '2022-05-31 02:32:41', '2022-05-31 02:32:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assy_l1_ds`
--
ALTER TABLE `assy_l1_ds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assy_l1_ns`
--
ALTER TABLE `assy_l1_ns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assy_l2_ds`
--
ALTER TABLE `assy_l2_ds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assy_l2_ns`
--
ALTER TABLE `assy_l2_ns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance-p4`
--
ALTER TABLE `attendance-p4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance-pcd`
--
ALTER TABLE `attendance-pcd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_attendance`
--
ALTER TABLE `best_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_qcc`
--
ALTER TABLE `best_qcc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_ss`
--
ALTER TABLE `best_ss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_planning_delivery`
--
ALTER TABLE `daily_planning_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_l1_ds`
--
ALTER TABLE `delivery_l1_ds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_l1_ns`
--
ALTER TABLE `delivery_l1_ns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_l2_ds`
--
ALTER TABLE `delivery_l2_ds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_l2_ns`
--
ALTER TABLE `delivery_l2_ns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dpr_1`
--
ALTER TABLE `dpr_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dpr_2`
--
ALTER TABLE `dpr_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kpi`
--
ALTER TABLE `kpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kpi_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_kap`
--
ALTER TABLE `monthly_kap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_sap`
--
ALTER TABLE `monthly_sap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_total`
--
ALTER TABLE `monthly_total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_total_permodel`
--
ALTER TABLE `monthly_total_permodel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_total_pertype`
--
ALTER TABLE `monthly_total_pertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otd_1`
--
ALTER TABLE `otd_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otd_2`
--
ALTER TABLE `otd_2`
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
-- Indexes for table `report_achievement_1977`
--
ALTER TABLE `report_achievement_1977`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_asakai`
--
ALTER TABLE `report_asakai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_bod`
--
ALTER TABLE `report_bod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_dailyprod_l1`
--
ALTER TABLE `report_dailyprod_l1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_dailyprod_l2`
--
ALTER TABLE `report_dailyprod_l2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_delay_unit`
--
ALTER TABLE `report_delay_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_eom`
--
ALTER TABLE `report_eom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_hourlyrunning_l1`
--
ALTER TABLE `report_hourlyrunning_l1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_hourlyrunning_l2`
--
ALTER TABLE `report_hourlyrunning_l2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_summaryproblem_l1`
--
ALTER TABLE `report_summaryproblem_l1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_summaryproblem_l2`
--
ALTER TABLE `report_summaryproblem_l2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sop_adm`
--
ALTER TABLE `sop_adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_npk_unique` (`npk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assy_l1_ds`
--
ALTER TABLE `assy_l1_ds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `assy_l1_ns`
--
ALTER TABLE `assy_l1_ns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `assy_l2_ds`
--
ALTER TABLE `assy_l2_ds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `assy_l2_ns`
--
ALTER TABLE `assy_l2_ns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `attendance-p4`
--
ALTER TABLE `attendance-p4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `attendance-pcd`
--
ALTER TABLE `attendance-pcd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `best_attendance`
--
ALTER TABLE `best_attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `best_qcc`
--
ALTER TABLE `best_qcc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `best_ss`
--
ALTER TABLE `best_ss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daily_planning_delivery`
--
ALTER TABLE `daily_planning_delivery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_l1_ds`
--
ALTER TABLE `delivery_l1_ds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `delivery_l1_ns`
--
ALTER TABLE `delivery_l1_ns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `delivery_l2_ds`
--
ALTER TABLE `delivery_l2_ds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `delivery_l2_ns`
--
ALTER TABLE `delivery_l2_ns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `dpr_1`
--
ALTER TABLE `dpr_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dpr_2`
--
ALTER TABLE `dpr_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kpi`
--
ALTER TABLE `kpi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `monthly_kap`
--
ALTER TABLE `monthly_kap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `monthly_sap`
--
ALTER TABLE `monthly_sap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `monthly_total`
--
ALTER TABLE `monthly_total`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `monthly_total_permodel`
--
ALTER TABLE `monthly_total_permodel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `monthly_total_pertype`
--
ALTER TABLE `monthly_total_pertype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `otd_1`
--
ALTER TABLE `otd_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `otd_2`
--
ALTER TABLE `otd_2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_achievement_1977`
--
ALTER TABLE `report_achievement_1977`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_asakai`
--
ALTER TABLE `report_asakai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_bod`
--
ALTER TABLE `report_bod`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_dailyprod_l1`
--
ALTER TABLE `report_dailyprod_l1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report_dailyprod_l2`
--
ALTER TABLE `report_dailyprod_l2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_delay_unit`
--
ALTER TABLE `report_delay_unit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_eom`
--
ALTER TABLE `report_eom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_hourlyrunning_l1`
--
ALTER TABLE `report_hourlyrunning_l1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report_hourlyrunning_l2`
--
ALTER TABLE `report_hourlyrunning_l2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_summaryproblem_l1`
--
ALTER TABLE `report_summaryproblem_l1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_summaryproblem_l2`
--
ALTER TABLE `report_summaryproblem_l2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sop_adm`
--
ALTER TABLE `sop_adm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kpi`
--
ALTER TABLE `kpi`
  ADD CONSTRAINT `kpi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

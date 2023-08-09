-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 06:18 AM
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
-- Table structure for table `assy`
--

CREATE TABLE `assy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assy`
--

INSERT INTO `assy` (`id`, `plan`, `actual`, `line`, `shift`, `tgl`) VALUES
(1, '500', '427', '1', 'day', '2022-05-01'),
(2, '500', '493', '1', 'day', '2022-05-02'),
(3, '500', '467', '1', 'day', '2022-05-03'),
(4, '500', '494', '1', 'day', '2022-05-04'),
(5, '500', '463', '1', 'day', '2022-05-05'),
(6, '500', '481', '1', 'day', '2022-05-06'),
(7, '500', '417', '1', 'day', '2022-05-07'),
(8, '500', '450', '1', 'day', '2022-05-08'),
(9, '500', '485', '1', 'day', '2022-05-09'),
(10, '500', '499', '1', 'day', '2022-05-10'),
(11, '500', '406', '1', 'day', '2022-05-11'),
(12, '500', '497', '1', 'day', '2022-05-12'),
(13, '500', '464', '1', 'day', '2022-05-13'),
(14, '500', '480', '1', 'day', '2022-05-14'),
(15, '500', '459', '1', 'day', '2022-05-15'),
(16, '500', '420', '1', 'day', '2022-05-16'),
(17, '500', '492', '1', 'day', '2022-05-17'),
(18, '500', '412', '1', 'day', '2022-05-18'),
(19, '500', '498', '1', 'day', '2022-05-19'),
(20, '500', '479', '1', 'day', '2022-05-20'),
(21, '500', '402', '1', 'day', '2022-05-21'),
(22, '500', '413', '1', 'day', '2022-05-22'),
(23, '500', '499', '1', 'day', '2022-05-23'),
(24, '500', '464', '1', 'day', '2022-05-24'),
(25, '500', '461', '1', 'day', '2022-05-25'),
(26, '500', '448', '1', 'day', '2022-05-26'),
(27, '500', '486', '1', 'day', '2022-05-27'),
(28, '500', '457', '1', 'day', '2022-05-28'),
(29, '500', '494', '1', 'day', '2022-05-29'),
(30, '500', '470', '1', 'day', '2022-05-30'),
(31, '500', '463', '1', 'day', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_p4`
--

CREATE TABLE `attendance_p4` (
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

-- --------------------------------------------------------

--
-- Table structure for table `attendance_pcd`
--

CREATE TABLE `attendance_pcd` (
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
(1, 'monthly-best/best-ss/Best-SS-58460-M._Khoirul_Ikhwan-June-2022.jpg', '58460', 'M. Khoirul Ikhwan', '78', '2022-05-06'),
(2, 'monthly-best/best-ss/Best-SS-17632-Irwan_Radian_S.-June-2022.jpg', '17632', 'Irwan Radian S.', '78', '2022-05-06');

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
(1, '2022-06-06', '06. Rencana Produksi  Delivery June_2022 Rev.00.xls', 'planning-delivery/06. Rencana Produksi  Delivery June_2022 Rev.00.xls');

-- --------------------------------------------------------

--
-- Table structure for table `daily_production`
--

CREATE TABLE `daily_production` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus_minus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '30926', 'ADE IRVANSYAH', '1984-08-24', 'KP.Cakung RT.017/004 Cakung barat Kec.cakung Jakarta Timur', 'pcd-employee/30926-ADE IRVANSYAH.jpg'),
(2, '16747', 'ADHI PURWONO', '1985-05-22', 'JL.KAMPUNG BUGIS RT004/04 JAKARTA', 'pcd-employee/16747-ADHI PURWONO.jpg'),
(3, '17248', 'AGUS RIYADI', '1979-08-23', 'JL. TANAH SERATUS RT.01/02 BANTEN', 'pcd-employee/17248-AGUS RIYADI.jpg'),
(4, '71343', 'AHMAD RIZAL', '2003-05-21', 'KRAGAN RT = 002 RW = 003 KELURAHAN =KRAGAN KECAMATAN = KRAGAN KOTA/KAB = REMBANG KODE POS =59273', 'pcd-employee/71343-AHMAD RIZAL.jpg'),
(5, '52571', 'AHMAD SHOBIRIN', '1995-03-04', 'KADILANGU RT/RW 01/02 KEC. TRANGKIL', 'pcd-employee/52571-AHMAD SHOBIRIN.jpg'),
(6, '69270', 'ALDI SATRIYA', '2001-03-10', 'DUSUN DUKUH RT = 039 RW = 017 KELURAHAN =PANJALU KECAMATAN = PANJALU KOTA/KAB = CIAMIS KODE POS =46264', 'pcd-employee/69270-ALDI SATRIYA.jpg'),
(7, '14573', 'ANDRI', '1980-05-07', 'JL. PENGANTIN ALI RT004/006 JAKARTA', 'pcd-employee/14573-ANDRI.jpg'),
(8, '71341', 'ANWAR MAULANA', '2002-01-16', 'VILLA MUTIARA JAYA BLOK N90 NO.19 RT = 003 RW = 014 KELURAHAN =WANAJAYA KECAMATAN = CIBITUNG KOTA/KAB = KABUPATEN BEKASI KODE POS =17520', NULL),
(9, '21622', 'CECEP SAEPUL ANWAR', '1983-09-29', 'PERUMAHAN VILLA MUTIARA MAS 1 BLOK A2 NO.11 RT 07 RW 04, DESA PAHLAWAN SETIA, KEC. TARUMAJAYA, BEKASI', 'pcd-employee/21622-CECEP SAEPUL ANWAR.jpg'),
(10, '7105', 'CHAIRUL BAKRI', '1974-10-24', 'JL.MARDANI RAYA NO15B RT003/013 JAKARTA PUSAT 10520', 'pcd-employee/7105-CHAIRUL BAKRI.jpg'),
(11, '22879', 'DIAN SULISTYARINI', '1985-01-25', 'JL.POHON BERINGIN NO.66 RT.011/03 SUNTER TG.PRIOK JAKAR', 'pcd-employee/22879-DIAN SULISTYARINI.jpg'),
(12, '22403', 'DIDI SUGIHARTO', '1986-06-27', 'PUSPO RT.01/01 BRUNO 1 PURWOREJO PURWOREJO', 'pcd-employee/22403-DIDI SUGIHARTO.JPG'),
(13, '7224', 'EKO SETIAWAN', '1979-03-04', 'JL.A YANI GG KECUBUNG RT011/05 JAKARTA TI', 'pcd-employee/7224-EKO SETIAWAN.jpg'),
(14, '23655', 'ELWIN SUTRANGGA', '1988-06-20', 'KMP.BUDIRAJA RT03/01 SIRNABAYA CIREBON UTARA JAWA BARAT', 'pcd-employee/23655-ELWIN SUTRANGGA.jpg'),
(15, '46938', 'FATWA HUSADA', '1992-10-10', 'DK JURUTENGAH RT 03 RW 02 BANJUR PASAR BULUS PESANTREN KEBUMEN JAWA TENGAH 54391', 'pcd-employee/46938-FATWA HUSADA.jpg'),
(16, '2535', 'GOENANTO A.', '1970-01-01', NULL, NULL),
(17, '17585', 'HENDI LESMANA', '1982-12-12', 'Perumahan Taman Jati Sari Permai Jl. Papua Rt 05/014 Blok EN No. 11 Kel. Jati Sari Kec. Jati Asih Bekasi Selatan Kode Pos 17426', 'pcd-employee/17585-HENDI LESMANA.JPG'),
(18, '21965', 'HENDRY', '1983-07-18', 'JL. PRIMA 2 NO. 22 RT. 10/11 CENGKARENG, JAKARTA BARAT', 'pcd-employee/21965-HENDRY.JPG'),
(19, '17209', 'HUDORY ILYAS', '1981-09-25', 'JL. WARAKAS IV GG.2 NO.62 JAKARTA UTARA', 'pcd-employee/17209-HUDORY ILYAS.jpg'),
(20, '17632', 'IRWAN RADIAN SAPUTRA', '1984-06-24', 'JL.ASRAMA BS RT.04/10 NO.1 JAKARTA TIMUR', 'pcd-employee/17632-IRWAN RADIAN SAPUTRA.jpg'),
(21, '65704', 'K. TERAMOTO', '1980-06-06', 'Jl. Gaya Motor III No 5, Sunter II, Jakarta Utara', 'pcd-employee/65704-K. TERAMOTO.jpg'),
(22, '71891', 'M. DIFA AZMII', '1970-01-01', NULL, NULL),
(23, '58460', 'MUCHAMAD KHOIRUL IKHWAN', '1996-07-08', 'NGASINAN RT = 013 RW = 003 KELURAHAN =NGASINAN KECAMATAN = PADANGAN KOTA/KAB = BOJONEGORO KODE POS =52162', 'pcd-employee/58460-MUCHAMAD KHOIRUL IKHWAN.jpg'),
(24, '30265', 'MUHAMAD SYARIEF HIDAYAT', '1983-05-04', 'Palsigunung Rt.02/01 Kel.Desa. Mekarsari Kec. Cimanggis Kab. Depok Ja-Bar', 'pcd-employee/30265-MUHAMAD SYARIEF HIDAYAT.jpg'),
(25, '71342', 'MUHAMMAD TAUHID THOFANNI', '2000-02-16', 'PURI CENDANA BLOK B4 NO 09 TAMBUN SELATAN RT = 008 RW = 018 KELURAHAN =SUMBERJAYA KECAMATAN = TAMBUN SELATAN KOTA/KAB = BEKASI KODE POS =17510', 'pcd-employee/71342-MUHAMMAD TAUHID THOFANNI.jpg'),
(26, '71344', 'MULIA ARIZKY SURYA', '2003-05-21', 'DUSUN BOGORAME RT = 006 RW = 001 KELURAHAN =BOGOTANJUNG KECAMATAN = GABUS KOTA/KAB = PATI KODE POS =59173', 'pcd-employee/71344-MULIA ARIZKY SURYA.jpg'),
(27, '44919', 'NUR ROHMADI', '1993-03-09', 'TANJUNG RT/RW 11/03 KEL. CELEP KEC. KEDAWUNG KAB. SRAGEN', 'pcd-employee/44919-NUR ROHMADI.jpg'),
(28, '21621', 'PUTU SEDANA YASA', '1986-12-27', 'JL.BUAH NO.21 RT004/001 CIJANTUNG JAKARTA TIMUR JAKARTA ( KOS JL. PAPANGGO 1D NO. 45 RT 015/03 TANJUNG PRIOK)', 'pcd-employee/21621-PUTU SEDANA YASA.JPG'),
(29, '70861', 'REGGIANA IHZA RAHMADHAN', '1999-12-18', 'PERUM GRIYA SULTHAN PERSADA 1 BLOK A3/2 RT = 005 RW = 009 KELURAHAN =JEJALEN JAYA KECAMATAN = TAMBUN UTARA KOTA/KAB = KABUPATEN BEKASI KODE POS =17510', 'pcd-employee/70861-REGGIANA IHZA RAHMADHAN.jpg'),
(30, '41771', 'SAMSUL FALAKH', '1989-04-03', 'DS. KLUWUD RT.01/01 BULAKAMBA BREBES JATENG 52253', 'pcd-employee/41771-SAMSUL FALAKH.jpg'),
(31, '17919', 'SRIYANTO', '1981-10-20', 'JL. KRAMAT JAYA RT.010 RW.001 JAKARTA PUSAT', 'pcd-employee/17919-SRIYANTO.jpg'),
(32, '71687', 'TAKUYA KENZAKI', '1970-01-01', NULL, NULL),
(33, '21501', 'UGIK TOFANI', '1986-03-01', 'JL PAPANGGO 1D NO 31A RT 08 RW 02 TANJUNG PRIOK', 'pcd-employee/21501-UGIK TOFANI.JPG'),
(34, '1046', 'WAHONO', '1969-02-05', 'Kencana Loka Blok R No 56 RT 01/12 Sektor XII 4 BSD Kel Ciater Kec Serpong Tangerang', 'pcd-employee/1046-WAHONO.jpg'),
(35, '2748', 'YENNITA', '1969-01-28', 'KOPM.TRIAS ESTATE BEKASI', 'pcd-employee/2748-YENNITA.jpg'),
(36, '13436', 'ZARKASI', '1980-07-09', 'JL WARAKAS GG 22 / 6 RT 005 RW 07 KEL. PAPAPNGGO TJ PRIOK JAK-UTARA', 'pcd-employee/13436-ZARKASI.jpg');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_12_151040_create_pcd-attendance_table', 1),
(7, '2022_04_13_143425_create_dpr2_table', 1),
(8, '2022_04_14_081632_create_attendance_p4_table', 1),
(9, '2022_04_21_130858_create_otd1_table', 1),
(10, '2022_04_21_133408_create_otd2_table', 1),
(11, '2022_04_25_073253_create_monthly_sap_table', 1),
(12, '2022_04_26_084748_create_monthly_kap_table', 1),
(13, '2022_04_28_083444_create_employee_list_table', 1),
(14, '2022_04_28_094404_create_ss_table', 1),
(15, '2022_04_28_094554_create_qcc_table', 1),
(16, '2022_05_12_104946_create_best_attendance_table', 1),
(18, '2022_05_13_103041_create_assy_l2_ds_table', 1),
(19, '2022_05_13_103501_create_delivery_l1_ds_table', 1),
(20, '2022_05_13_103515_create_delivery_l2_ds_table', 1),
(21, '2022_05_13_104640_create_assy_l1_ns_table', 1),
(22, '2022_05_13_104704_create_delivery_l1_ns_table', 1),
(23, '2022_05_13_104724_create_assy_l2_ns_table', 1),
(24, '2022_05_13_104759_create_delivery_l2_ns_table', 1),
(26, '2022_05_17_140518_create_monthly_total_per_type_table', 1),
(27, '2022_05_17_151000_create_monthly_total_permodel_table', 1),
(28, '2022_05_20_110040_create_report_dailyprod_l1_table', 1),
(29, '2022_05_20_110057_create_report_hourlyrunning_l1_table', 1),
(30, '2022_05_20_110114_create_report_summaryproblem_l1_table', 1),
(31, '2022_05_20_130235_create_report_dailyprod_l2_table', 1),
(32, '2022_05_20_130314_create_report_hourlyrunning_l2_table', 1),
(33, '2022_05_20_130344_create_report_summaryproblem_l2_table', 1),
(34, '2022_05_22_174758_create_report_delay_unit_table', 1),
(35, '2022_05_22_175017_create_report_eom_table', 1),
(36, '2022_05_22_175042_create_report_asakai_table', 1),
(37, '2022_05_22_175117_create_report_bod_table', 1),
(38, '2022_05_22_175140_create_report_achievement_1977_table', 1),
(39, '2022_05_25_090138_create_daily_planning_delivery_table', 1),
(40, '2022_05_25_134126_create_sop_table', 1),
(41, '2022_05_31_132113_create_kpi_table', 1),
(42, '2022_05_17_090441_create_monthly_total_mdp_table', 2),
(43, '2022_05_13_103034_create_assy_l1_ds_table', 3),
(44, '2022_05_13_103034_create_assy_table', 4),
(45, '2022_05_13_103501_create_delivery_table', 5),
(46, '2022_04_13_143322_create_dpr1_table', 6),
(48, '2022_04_21_130858_create_ontime_delivery_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_total`
--

CREATE TABLE `monthly_total` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date DEFAULT NULL,
  `volume_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_sap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_kap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_total`
--

INSERT INTO `monthly_total` (`id`, `tgl`, `volume_total`, `volume_sap`, `volume_kap`, `status`) VALUES
(1, '2022-01-01', '45996', '27084', '18912', 'Actual'),
(2, '2022-02-01', '40663', '23967', '16696', 'Actual'),
(3, '2022-03-01', '49002', '28143', '20859', 'Actual'),
(4, '2022-04-01', '40586', '23518', '17068', 'Actual'),
(5, '2022-05-01', '23476', '12976', '10500', 'Actual'),
(6, '2022-06-01', '45315', '24125', '21190', 'OPR'),
(7, '2022-07-01', '49780', '27706', '22074', 'Forecast'),
(8, '2022-08-01', '52519', '29198', '23321', 'Forecast'),
(9, '2022-09-01', '51046', '29147', '21899', 'Forecast'),
(10, '2022-10-01', '49272', '27805', '21467', 'Forecast'),
(11, '2022-11-01', '47858', '27766', '20092', 'Forecast'),
(12, '2022-12-01', '47337', '27771', '19566', 'Forecast');

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
(1, '2022-03-01', 'U-IMV', '450', 'SAP'),
(2, '2022-03-01', 'B-MPV', '6376', 'SAP'),
(3, '2022-03-01', 'D22D', '11437', 'SAP'),
(4, '2022-03-01', 'GRANMAX', '8023', 'SAP'),
(5, '2022-03-01', 'D80N', '5381', 'KAP'),
(6, '2022-03-01', 'D30D', '4893', 'KAP'),
(7, '2022-03-01', 'TERIOS KAP', '0', 'KAP'),
(8, '2022-03-01', 'RUSH KAP', '0', 'KAP'),
(9, '2022-03-01', 'A-SUV', '8053', 'KAP'),
(10, '2022-04-01', 'U-IMV', '300', 'SAP'),
(11, '2022-04-01', 'B-MPV', '5182', 'SAP'),
(12, '2022-04-01', 'D22D', '9821', 'SAP'),
(13, '2022-04-01', 'GRANMAX', '6684', 'SAP'),
(14, '2022-04-01', 'D80N', '3276', 'KAP'),
(15, '2022-04-01', 'D30D', '5645', 'KAP'),
(16, '2022-04-01', 'TERIOS KAP', '0', 'KAP'),
(17, '2022-04-01', 'RUSH KAP', '0', 'KAP'),
(18, '2022-04-01', 'A-SUV', '7112', 'KAP'),
(19, '2022-05-01', 'U-IMV', '0', 'SAP'),
(20, '2022-05-01', 'B-MPV', '4416', 'SAP'),
(21, '2022-05-01', 'D22D', '7939', 'SAP'),
(22, '2022-05-01', 'GRANMAX', '5268', 'SAP'),
(23, '2022-05-01', 'D80N', '3458', 'KAP'),
(24, '2022-05-01', 'D30D', '4435', 'KAP'),
(25, '2022-05-01', 'TERIOS KAP', '0', 'KAP'),
(26, '2022-05-01', 'RUSH KAP', '0', 'KAP'),
(27, '2022-05-01', 'A-SUV', '5250', 'KAP'),
(28, '2022-06-01', 'U-IMV', '0', 'SAP'),
(29, '2022-06-01', 'B-MPV', '7176', 'SAP'),
(30, '2022-06-01', 'D22D', '11916', 'SAP'),
(31, '2022-06-01', 'GRANMAX', '8251', 'SAP'),
(32, '2022-06-01', 'D80N', '5131', 'KAP'),
(33, '2022-06-01', 'D30D', '9406', 'KAP'),
(34, '2022-06-01', 'TERIOS KAP', '0', 'KAP'),
(35, '2022-06-01', 'RUSH KAP', '0', 'KAP'),
(36, '2022-06-01', 'A-SUV', '6844', 'KAP');

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
(1, '2022-03-01', 'Xenia', '200', 'SAP'),
(2, '2022-03-01', 'Avanza DOM', '100', 'SAP'),
(3, '2022-03-01', 'Avanza EXP', '150', 'SAP'),
(4, '2022-03-01', 'B-MPV D-Dom', '2614', 'SAP'),
(5, '2022-03-01', 'B-MPV T-Dom', '3762', 'SAP'),
(6, '2022-03-01', 'Terios', '2614', 'SAP'),
(7, '2022-03-01', 'Rush', '4755', 'SAP'),
(8, '2022-03-01', 'RUSH EXPORT (T-Exp)', '4068', 'SAP'),
(9, '2022-03-01', 'D40D DOMESTIC (D-Dom)', '5319', 'SAP'),
(10, '2022-03-01', 'D16B WAGON  D-Dom', '300', 'SAP'),
(11, '2022-03-01', 'D40D D-Brand Export', '280', 'SAP'),
(12, '2022-03-01', 'Townlite', '1909', 'SAP'),
(13, '2022-03-01', 'TownLite Japan LHD', '0', 'SAP'),
(14, '2022-03-01', 'D40L Daihatsu', '25', 'SAP'),
(15, '2022-03-01', 'D40L MAZDA', '190', 'SAP'),
(16, '2022-03-01', 'D30D D-Dom', '2014', 'KAP'),
(17, '2022-03-01', 'D30D T-Dom', '2879', 'KAP'),
(18, '2022-04-01', 'Xenia', '100', 'SAP'),
(19, '2022-04-01', 'Avanza DOM', '200', 'SAP'),
(20, '2022-04-01', 'Avanza EXP', '0', 'SAP'),
(21, '2022-04-01', 'B-MPV D-Dom', '853', 'SAP'),
(22, '2022-04-01', 'B-MPV T-Dom', '4329', 'SAP'),
(23, '2022-04-01', 'Terios', '2538', 'SAP'),
(24, '2022-04-01', 'Rush', '3109', 'SAP'),
(25, '2022-04-01', 'RUSH EXPORT (T-Exp)', '4174', 'SAP'),
(26, '2022-04-01', 'D40D DOMESTIC (D-Dom)', '4730', 'SAP'),
(27, '2022-04-01', 'D16B WAGON  D-Dom', '300', 'SAP'),
(28, '2022-04-01', 'D40D D-Brand Export', '150', 'SAP'),
(29, '2022-04-01', 'Townlite', '1289', 'SAP'),
(30, '2022-04-01', 'TownLite Japan LHD', '0', 'SAP'),
(31, '2022-04-01', 'D40L Daihatsu', '35', 'SAP'),
(32, '2022-04-01', 'D40L MAZDA', '180', 'SAP'),
(33, '2022-04-01', 'D30D D-Dom', '2897', 'KAP'),
(34, '2022-04-01', 'D30D T-Dom', '2748', 'KAP'),
(35, '2022-05-01', 'Xenia', '0', 'SAP'),
(36, '2022-05-01', 'Avanza DOM', '0', 'SAP'),
(37, '2022-05-01', 'Avanza EXP', '0', 'SAP'),
(38, '2022-05-01', 'B-MPV D-Dom', '340', 'SAP'),
(39, '2022-05-01', 'B-MPV T-Dom', '4076', 'SAP'),
(40, '2022-05-01', 'Terios', '435', 'SAP'),
(41, '2022-05-01', 'Rush', '3240', 'SAP'),
(42, '2022-05-01', 'RUSH EXPORT (T-Exp)', '4264', 'SAP'),
(43, '2022-05-01', 'D40D DOMESTIC (D-Dom)', '3105', 'SAP'),
(44, '2022-05-01', 'D16B WAGON  D-Dom', '83', 'SAP'),
(45, '2022-05-01', 'D40D D-Brand Export', '150', 'SAP'),
(46, '2022-05-01', 'Townlite', '845', 'SAP'),
(47, '2022-05-01', 'TownLite Japan LHD', '880', 'SAP'),
(48, '2022-05-01', 'D40L Daihatsu', '25', 'SAP'),
(49, '2022-05-01', 'D40L MAZDA', '180', 'SAP'),
(50, '2022-05-01', 'D30D D-Dom', '2321', 'KAP'),
(51, '2022-05-01', 'D30D T-Dom', '2114', 'KAP'),
(52, '2022-06-01', 'Xenia', '0', 'SAP'),
(53, '2022-06-01', 'Avanza DOM', '0', 'SAP'),
(54, '2022-06-01', 'Avanza EXP', '0', 'SAP'),
(55, '2022-06-01', 'B-MPV D-Dom', '1032', 'SAP'),
(56, '2022-06-01', 'B-MPV T-Dom', '6144', 'SAP'),
(57, '2022-06-01', 'Terios', '1234', 'SAP'),
(58, '2022-06-01', 'Rush', '5624', 'SAP'),
(59, '2022-06-01', 'RUSH EXPORT (T-Exp)', '5058', 'SAP'),
(60, '2022-06-01', 'D40D DOMESTIC (D-Dom)', '4994', 'SAP'),
(61, '2022-06-01', 'D16B WAGON  D-Dom', '139', 'SAP'),
(62, '2022-06-01', 'D40D D-Brand Export', '109', 'SAP'),
(63, '2022-06-01', 'Townlite', '1394', 'SAP'),
(64, '2022-06-01', 'TownLite Japan LHD', '1410', 'SAP'),
(65, '2022-06-01', 'D40L Daihatsu', '25', 'SAP'),
(66, '2022-06-01', 'D40L MAZDA', '180', 'SAP'),
(67, '2022-06-01', 'D30D D-Dom', '5904', 'KAP'),
(68, '2022-06-01', 'D30D T-Dom', '3502', 'KAP');

-- --------------------------------------------------------

--
-- Table structure for table `ontime_delivery`
--

CREATE TABLE `ontime_delivery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` date NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ot_adv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ot_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delay_percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '629d9a2b8957f - Report BOD - 2022-06-06.pdf', 'report-summary/report-bod/excel/629d9a2b8957f - Report BOD - 2022-06-06.pdf', '2022-06-06');

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
(2, '629d98d71a764 -Daily Prod Report Line #1 - 2022-06-06.xlsm', 'report-line-1/daily-prod/excel/629d98d71a764 -Daily Prod Report Line #1 - 2022-06-06.xlsm', '2022-06-06');

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

--
-- Dumping data for table `report_dailyprod_l2`
--

INSERT INTO `report_dailyprod_l2` (`id`, `filename`, `path`, `tgl`) VALUES
(2, '629d996c5447b -Daily Prod Report Line #2 - 2022-06-06.xlsm', 'file/report-line-2/daily-prod/excel/629d996c5447b -Daily Prod Report Line #2 - 2022-06-06.xlsm', '2022-06-06');

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
(11, '629d99dcc5f25 - Report End Of Month - 2022-06-06.pdf', 'report-summary/report-eom/629d99dcc5f25 - Report End Of Month - 2022-06-06.pdf', '2022-06-06');

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
(2, '629d991374648 -Hourly Running Unit Report Line #1 - 2022-06-06.xlsm', 'report-line-1/hourly-running/excel/629d991374648 -Hourly Running Unit Report Line #1 - 2022-06-06.xlsm', '2022-06-06');

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

--
-- Dumping data for table `report_hourlyrunning_l2`
--

INSERT INTO `report_hourlyrunning_l2` (`id`, `filename`, `path`, `tgl`) VALUES
(2, '629d997fbe3c3 -Hourly Running Unit Report Line #2 - 2022-06-06.xlsm', 'file/report-line-2/hourly-running/excel/629d997fbe3c3 -Hourly Running Unit Report Line #2 - 2022-06-06.xlsm', '2022-06-06');

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
(2, '629d991dea41e -Summary Problem Report Line #1 - 2022-06-06.xlsx', 'file/report-line-1/summary-problem/excel/629d991dea41e -Summary Problem Report Line #1 - 2022-06-06.xlsx', '2022-06-06');

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

--
-- Dumping data for table `report_summaryproblem_l2`
--

INSERT INTO `report_summaryproblem_l2` (`id`, `filename`, `path`, `tgl`) VALUES
(2, '629d999068c86 -Summary Problem Report Line #2 - 2022-06-06.xlsm', 'file/report-line-2/summary-problem/excel/629d999068c86 -Summary Problem Report Line #2 - 2022-06-06.xlsm', '2022-06-06');

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
(1, '2022-06-06', 'SOP Update Calender Master PIS Line #1.pdf', 'sop/vai/SOP Update Calender Master PIS Line #1.pdf', 'vai', '01_vai'),
(2, '2022-06-06', 'SOP Update Calender Master PIS Line #2.pdf', 'sop/vai/SOP Update Calender Master PIS Line #2.pdf', 'vai', '02_vai'),
(3, '2022-06-06', 'SOP Update Over Time Master PIS Line #1.pdf', 'sop/vai/SOP Update Over Time Master PIS Line #1.pdf', 'vai', '03_vai'),
(4, '2022-06-06', 'SOP Update Over Time Master PIS Line #2.pdf', 'sop/vai/SOP Update Over Time Master PIS Line #2.pdf', 'vai', '04_vai'),
(5, '2022-06-06', 'SOP Update Planning Andon Master PIS Line #1.pdf', 'sop/vai/SOP Update Planning Andon Master PIS Line #1.pdf', 'vai', '05_vai'),
(6, '2022-06-06', 'SOP Update Planning Andon Master PIS Line #2.pdf', 'sop/vai/SOP Update Planning Andon Master PIS Line #2.pdf', 'vai', '06_vai'),
(7, '2022-06-06', 'SOP Update Color Master PIS Line #1.pdf', 'sop/vai/SOP Update Color Master PIS Line #1.pdf', 'vai', '07_vai'),
(8, '2022-06-06', 'SOP Update Color Master PIS Line #2.pdf', 'sop/vai/SOP Update Color Master PIS Line #2.pdf', 'vai', '08_vai'),
(9, '2022-06-06', 'SOP Update Model Master PIS Line #1.pdf', 'sop/vai/SOP Update Model Master PIS Line #1.pdf', 'vai', '09_vai'),
(10, '2022-06-06', 'SOP Update Model Master PIS Line #2.pdf', 'sop/vai/SOP Update Model Master PIS Line #2.pdf', 'vai', '10_vai'),
(11, '2022-06-06', 'SOP Update Destination Master PIS Line #1.pdf', 'sop/vai/SOP Update Destination Master PIS Line #1.pdf', 'vai', '11_vai'),
(12, '2022-06-06', 'SOP Update Destination Master PIS Line #2.pdf', 'sop/vai/SOP Update Destination Master PIS Line #2.pdf', 'vai', '12_vai'),
(13, '2022-06-06', 'SOP Update Tracking Point Master PIS Line #1.pdf', 'sop/vai/SOP Update Tracking Point Master PIS Line #1.pdf', 'vai', '13_vai'),
(14, '2022-06-06', 'SOP Create Planning Bulanan Delivery Line #1 & #2.pdf', 'sop/vai/SOP Create Planning Bulanan Delivery Line #1 & #2.pdf', 'vai', '15_vai'),
(15, '2022-06-06', 'SOP Create Planning Delivery Base on WOS vs Planning Delivery Bulanan.pdf', 'sop/vai/SOP Create Planning Delivery Base on WOS vs Planning Delivery Bulanan.pdf', 'vai', '16_vai'),
(16, '2022-06-06', 'SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix.pdf', 'sop/vai/SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix.pdf', 'vai', '17_vai'),
(17, '2022-06-06', 'SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix & Color.pdf', 'sop/vai/SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix & Color.pdf', 'vai', '18_vai'),
(18, '2022-06-06', 'SOP Create Scenario Unit Terakhir Run Out Base on Jig in.pdf', 'sop/vai/SOP Create Scenario Unit Terakhir Run Out Base on Jig in.pdf', 'vai', '20_vai'),
(19, '2022-06-06', 'SOP Create Plan By Line & By Model.pdf', 'sop/daily-plan/SOP Create Plan By Line & By Model.pdf', 'daily_plan', '01_dailyplan'),
(20, '2022-06-06', 'SOP Create Arrangement Composition for Planning.pdf', 'sop/daily-plan/SOP Create Arrangement Composition for Planning.pdf', 'daily_plan', '02_dailyplan'),
(21, '2022-06-06', 'SOP Create Day Night Planning.pdf', 'sop/daily-plan/SOP Create Day Night Planning.pdf', 'daily_plan', '04_dailyplan'),
(22, '2022-06-06', 'SOP Production Planning Line #1 & Line #2.pdf', 'sop/daily-plan/SOP Production Planning Line #1 & Line #2.pdf', 'daily_plan', '05_dailyplan'),
(23, '2022-06-06', 'SOP Create Data NQC Rev. 02.pdf', 'sop/daily-plan/SOP Create Data NQC Rev. 02.pdf', 'daily_plan', '08_dailyplan'),
(24, '2022-06-06', 'SOP Pembuatan WOS D40D ( Gran Max & Luxio ).pdf', 'sop/daily-plan/SOP Pembuatan WOS D40D ( Gran Max & Luxio ).pdf', 'daily_plan', '09_dailyplan'),
(25, '2022-06-06', 'SOP Order Part Berdasarkan Rencana Produksi.pdf', 'sop/daily-plan/SOP Order Part Berdasarkan Rencana Produksi.pdf', 'daily_plan', '10_dailyplan'),
(26, '2022-06-06', 'SOP Pembuatan WOS Untuk Support Ordering ANBUNKA.pdf', 'sop/daily-plan/SOP Pembuatan WOS Untuk Support Ordering ANBUNKA.pdf', 'daily_plan', '13_dailyplan'),
(27, '2022-06-06', 'SOP Upload WOS to PIS.pdf', 'sop/daily-plan/SOP Upload WOS to PIS.pdf', 'daily_plan', '19_dailyplan'),
(28, '2022-06-06', 'SOP Pembuatan WOS Planning U-IMV.pdf', 'sop/daily-plan/SOP Pembuatan WOS Planning U-IMV.pdf', 'daily_plan', '20_dailyplan'),
(29, '2022-06-06', 'SOP Pergantian Printer VEHICLE CARD.pdf', 'sop/daily-plan/SOP Pergantian Printer VEHICLE CARD.pdf', 'daily_plan', '21_dailyplan'),
(31, '2022-06-06', 'SOP Create Template WOS D14N.pdf', 'sop/daily-plan/SOP Create Template WOS D14N.pdf', 'daily_plan', '22_dailyplan'),
(32, '2022-06-06', 'SOP Print Out Vehicle Card D40D.pdf', 'sop/daily-plan/SOP Print Out Vehicle Card D40D.pdf', 'daily_plan', '23_dailyplan'),
(33, '2022-06-06', 'SOP Print Out Vehicle Card U-IMV.pdf', 'sop/daily-plan/SOP Print Out Vehicle Card U-IMV.pdf', 'daily_plan', '24_dailyplan'),
(34, '2022-06-06', '01. SOP Upload VLT to TMMIN.pdf', 'sop/vehicle-plan/01. SOP Upload VLT to TMMIN.pdf', 'vehicle_plan', '01_vehicleplan'),
(35, '2022-06-06', '02. SOP Generate VIN AI (Daily).pdf', 'sop/vehicle-plan/02. SOP Generate VIN AI (Daily).pdf', 'vehicle_plan', '02_vehicleplan'),
(36, '2022-06-06', '03. SOP Genarate VIN TMMIN (Daily).pdf', 'sop/vehicle-plan/03. SOP Genarate VIN TMMIN (Daily).pdf', 'vehicle_plan', '03_vehicleplan'),
(37, '2022-06-06', '04. SOP Download VLT for TMMIN with VIN.pdf', 'sop/vehicle-plan/04. SOP Download VLT for TMMIN with VIN.pdf', 'vehicle_plan', '04_vehicleplan'),
(38, '2022-06-06', '05. SOP Download WOS Daily All Model.pdf', 'sop/vehicle-plan/05. SOP Download WOS Daily All Model.pdf', 'vehicle_plan', '05_vehicleplan'),
(39, '2022-06-06', '21. SOP Alokasi Unit Batam.pdf', 'sop/vehicle-plan/21. SOP Alokasi Unit Batam.pdf', 'vehicle_plan', '06_vehicleplan'),
(40, '2022-06-06', '06. SOP Change Data Color di SAP.pdf', 'sop/vehicle-plan/06. SOP Change Data Color di SAP.pdf', 'vehicle_plan', '07_vehicleplan'),
(41, '2022-06-06', '07. SOP Create Template Daily WOS for TMMIN.pdf', 'sop/vehicle-plan/07. SOP Create Template Daily WOS for TMMIN.pdf', 'vehicle_plan', '08_vehicleplan'),
(42, '2022-06-06', '08. SOP Create Template Daily WOS.pdf', 'sop/vehicle-plan/08. SOP Create Template Daily WOS.pdf', 'vehicle_plan', '09_vehicleplan'),
(43, '2022-06-06', '10. SOP Download VLT System.pdf', 'sop/vehicle-plan/10. SOP Download VLT System.pdf', 'vehicle_plan', '11_vehicleplan'),
(44, '2022-06-06', '11. SOP Download WOS Monthly.pdf', 'sop/vehicle-plan/11. SOP Download WOS Monthly.pdf', 'vehicle_plan', '12_vehicleplan'),
(45, '2022-06-06', '12. SOP Running Template WOS All Model.pdf', 'sop/vehicle-plan/12. SOP Running Template WOS All Model.pdf', 'vehicle_plan', '14_vehicleplan'),
(46, '2022-06-06', '09. SOP Running WOS AI By Suffix.pdf', 'sop/vehicle-plan/09. SOP Running WOS AI By Suffix.pdf', 'vehicle_plan', '15_vehicleplan'),
(47, '2022-06-06', '13. SOP Update Sales Result.pdf', 'sop/vehicle-plan/13. SOP Update Sales Result.pdf', 'vehicle_plan', '16_vehicleplan'),
(48, '2022-06-06', '15. Upload WOS to SAP System (DOM Only).pdf', 'sop/vehicle-plan/15. Upload WOS to SAP System (DOM Only).pdf', 'vehicle_plan', '18_vehicleplan'),
(49, '2022-06-06', '23. SOP Upload WOS to SAP System (Export Only).pdf', 'sop/vehicle-plan/23. SOP Upload WOS to SAP System (Export Only).pdf', 'vehicle_plan', '19_vehicleplan'),
(50, '2022-06-06', '16. SOP Send VIN to AI.pdf', 'sop/vehicle-plan/16. SOP Send VIN to AI.pdf', 'vehicle_plan', '20_vehicleplan'),
(51, '2022-06-06', '22. SOP Receive VLT Data from TMMIN.pdf', 'sop/vehicle-plan/22. SOP Receive VLT Data from TMMIN.pdf', 'vehicle_plan', '21_vehicleplan'),
(52, '2022-06-06', '17. SOP Create MPP.pdf', 'sop/vehicle-plan/17. SOP Create MPP.pdf', 'vehicle_plan', '22_vehicleplan'),
(53, '2022-06-06', '18. SOP Download NIK-AI DSO.pdf', 'sop/vehicle-plan/18. SOP Download NIK-AI DSO.pdf', 'vehicle_plan', '23_vehicleplan'),
(54, '2022-06-06', '20. SOP Model Code Change.pdf', 'sop/vehicle-plan/20. SOP Model Code Change.pdf', 'vehicle_plan', '24_vehicleplan'),
(55, '2022-06-06', '19. SOP Production Order.pdf', 'sop/vehicle-plan/19. SOP Production Order.pdf', 'vehicle_plan', '26_vehicleplan');

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
(1, 'Admin', '0', '$2y$10$yqrHgUnsLl3yE5fJI4qZA.4YIy9BmaYW7OzRM3vBoGEj1xyoO6Qvm', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-06 02:47:14'),
(2, 'Line', '000', '$2y$10$Kkg3ypIkOhNU49DBi/NxW.XgICwRNd1Iyjdw9TT7q6SoKLD5JyB3G', 'Line', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-06 01:49:46'),
(111, 'ADHI PURWONO', '16747', '$2y$10$i476WqGp.Wshm7pqDnhQw.YeB1FL8GsuA6RLjtll.MnCdmnXVbP.u', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Leader', 'Digitalization & Improvement', 'Non-Shift', '2022-06-06 01:47:08', '2022-06-06 01:47:08'),
(112, 'AGUS RIYADI', '17248', '$2y$10$sYHRpVynhgp3rp5/MuT8OecX6om9Zfoq0duFBZTXv92QdYYar5oTm', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Supervisor', 'Digitalization & Improvement', 'Non-Shift', '2022-06-06 01:47:08', '2022-06-06 01:47:08'),
(113, 'AHMAD RIZAL', '71343', '$2y$10$ajPGrpQM/Jr7seok8YQliOmD2PjVBG0FCBxnXF00SmiCGsCqvDk46', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Central Control Room', 'Shift', '2022-06-06 01:47:08', '2022-06-06 01:47:08'),
(114, 'AHMAD SHOBIRIN', '52571', '$2y$10$xJ6Cfced6/qzkBC.yDT81OG22lO4Bic4655SR4eQ.ac415qesapAq', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Daily Planning', 'Non-Shift', '2022-06-06 01:47:08', '2022-06-06 01:47:08'),
(115, 'ALDI SATRIYA', '69270', '$2y$10$YwzMIGTTP01Ek80GtIerRO.6K3aFQa12Li2J/xN.w522INRQop6Oq', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Central Control Room', 'Shift', '2022-06-06 01:47:08', '2022-06-06 01:47:08'),
(116, 'ANDRI', '14573', '$2y$10$f7xhvgMqRosM1dYjAYt3LOVOcRiRK.FHkYm4mzAkcLYOGmpjfjAfu', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Foreman', 'Vehicle Administration & Improvement', 'Non-Shift', '2022-06-06 01:47:08', '2022-06-06 01:47:08'),
(117, 'ANWAR MAULANA', '71341', '$2y$10$to89EiO24NsDFjs1/5Ch0eQsZ/G7ZJRGYNapwyo0cmzboyeajXqSW', 'PIC Daily Planning', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Digitalization & Improvement', 'Non-Shift', '2022-06-06 01:47:08', '2022-06-07 02:55:27'),
(118, 'CECEP SAEPUL ANWAR', '21622', '$2y$10$gXpAkt8HcCHnRqysqFc9eeoIvTcUF..2o0asRfmr0pA1PgTrp1yMe', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Vehicle Administration & Improvement', 'Shift', '2022-06-06 01:47:08', '2022-06-06 01:47:08'),
(119, 'CHAIRUL BAKRI', '7105', '$2y$10$OFHo/B4e1.yzNNL33.5atuaHR6GT7gH30JtZ1YQMkTRwDZtojzIZ6', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Foreman', 'Daily Planning', 'Non-Shift', '2022-06-06 01:47:08', '2022-06-06 01:47:08'),
(120, 'DIAN SULISTYARINI', '22879', '$2y$10$bcpy5P7XbKKBcy88Hg6QK.4Gg8nXdiyynp6OAKEhFB0qXYGZuQx1a', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Foreman', 'Vehicle Planning', 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(121, 'DIDI SUGIHARTO', '22403', '$2y$10$sqA1KIruP4VewfdR0bLfOey1t3oEmnbQdLFAiWGCQyrSE67B3QIZO', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Leader', 'Central Control Room', 'Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(122, 'EKO SETIAWAN', '7224', '$2y$10$HKc04Ts5/D7REne9oKn6aeu0xsdc1RjlKVrKGwzMA3yB/XqUO1vGC', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Leader', 'Vehicle Administration & Improvement', 'Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(123, 'ELWIN SUTRANGGA', '23655', '$2y$10$.roxEC8QbGb1tWubsZPPSeXmMii5GJH8LP/XuFCdKv8RewZHT/iYO', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Leader', 'Central Control Room', 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(124, 'FATWA HUSADA', '46938', '$2y$10$1FKI4ZkLFnDXOZb4HNe8zuEENV80K1vYqWAvs4Niinjy.pNwvfc0e', 'PIC Daily Planning', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Daily Planning', 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 06:28:34'),
(125, 'GOENANTO A.', '2535', '$2y$10$h.z.u9wXFdFNdDXYoJ5FkuFb.93jgUvXAD7P1uG2HvI6CxoeduEZq', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Division Head', NULL, 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(126, 'HENDI LESMANA', '17585', '$2y$10$gWtrx.QeHhD8uCCMFjhV8ewBm1kLsyDpzY70n7Y0T.JIVX7udQap6', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Leader', 'Daily Planning', 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(127, 'HENDRY', '21965', '$2y$10$xgPMggkKHnvXAyrv27j16.x1h7NYl8QnIAVF4e3BUKVPVLPxGXaGq', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Dept Head', NULL, 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(128, 'HUDORY ILYAS', '17209', '$2y$10$zFnsFqFlg1Ui7DOihuL5YugkQ4Rfnm70J/WK8P9kbJN7sGrflcxiK', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Leader', 'Vehicle Administration & Improvement', 'Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(129, 'IRWAN RADIAN SAPUTRA', '17632', '$2y$10$I5KFQVE31ShRuOPw7maBtekohodmX2GUNnOv/FxVWi573FCl8uMOS', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Foreman', 'Vehicle Planning', 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(130, 'K. TERAMOTO', '65704', '$2y$10$DO5e.QOTU7/wyVt2XImFpOI1YbH3BgFKX8YSZYXTr6mXfcxT2c.gy', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Dept Head', NULL, 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(131, 'M. DIFA AZMII', '71891', '$2y$10$PQW2XaRXOX1PidGqQECHv.sgHmGKFOLNPAGMjAeuQ9NBkI3vJrMoq', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Supervisor', 'Vehicle Planning', 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(132, 'MUCHAMAD KHOIRUL IKHWAN', '58460', '$2y$10$t28eNy5jA2enMVLhqQgH4e5yu7/dQxLRuWL/9Fb9/12pXrLSipPqC', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Vehicle Planning', 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(133, 'MUHAMAD SYARIEF HIDAYAT', '30265', '$2y$10$AxLun1Lra08L8oA4G76Aq.DlcxPXWK21wzqY/f.op/67wqYYKnvsy', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Daily Planning', 'Non-Shift', '2022-06-06 01:47:09', '2022-06-06 01:47:09'),
(134, 'MUHAMMAD TAUHID THOFANNI', '71342', '$2y$10$1WUt.H8mTfPOzt8Mlz2UJObqi7P/fZyN3xUyb8dUzSeoDe7dTDXHG', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Central Control Room', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(135, 'MULIA ARIZKY SURYA', '71344', '$2y$10$1TZzpKYUwcx4A5I1EcMpxOziu8MB2GQQ4Ku9hbLBC8C1Q0aKuxEgK', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Central Control Room', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(136, 'NUR ROHMADI', '44919', '$2y$10$LJYEY0d5uysF4KXkg7wUK.UeVYbA..X9gQ/mNdJ2nN675CvEtpNCa', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Central Control Room', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(137, 'PUTU SEDANA YASA', '21621', '$2y$10$5hsClt7Jt07tuj4q7fchgubSxJUwfm9q6bv4r8weonuY.hY56f6zW', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Central Control Room', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(138, 'REGGIANA IHZA RAHMADHAN', '70861', '$2y$10$XE9g/CL/cF2tLaHs83T/FOpTuN4NwBqsOqgAdNJFEUwbUkvRxfxsO', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Central Control Room', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(139, 'SAMSUL FALAKH', '41771', '$2y$10$Mv6Nt6LOfSy0Y6.S64r2ZeYGyUP0tclJ3gD3/TNBMEOxIbl2LQNdi', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Member', 'Central Control Room', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(140, 'SRIYANTO', '17919', '$2y$10$7V9xb28Z8.rQRDs3q8H0ju4y7xHbaz23ZJ4F3zaPrJ/UU2AqARScy', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Team Leader', 'Vehicle Administration & Improvement', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(141, 'TAKUYA KENZAKI', '71687', '$2y$10$nHW10eXcqqD18KeIjkQKwOBoKThCfUbxL.ww4fyeihVtHNw2qe4T6', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Division Head', NULL, 'Non-Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(142, 'UGIK TOFANI', '21501', '$2y$10$uQqewSznuOVp.mEENg7Vyew5pD6jDywxJpdVy8Wrfs3BYp/agkjIi', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Foreman', 'Central Control Room', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(143, 'WAHONO', '1046', '$2y$10$C8/QGg9qChnGqyXEg9ANn.poVgsoh3KW4PwzAJ0f8AF4TrTPtwlB6', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Foreman', 'Vehicle Administration & Improvement', 'Non-Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(144, 'YENNITA', '2748', '$2y$10$lQAixit5EqD16ohNJhd8y.AiQGgxSWj30jagohs2tl3x/Ov0BeTgG', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'staff', 'Vehicle Administration & Improvement', 'Non-Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10'),
(145, 'ZARKASI', '13436', '$2y$10$cL/yt/1QnF3bKs1grcNC/uxJ7d4hqBcVzO7ZaFYISIi86xkj39U5u', 'Member', NULL, 'Production Control & Logistics', 'Planning Control', 'Foreman', 'Central Control Room', 'Shift', '2022-06-06 01:47:10', '2022-06-06 01:47:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assy`
--
ALTER TABLE `assy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_p4`
--
ALTER TABLE `attendance_p4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_pcd`
--
ALTER TABLE `attendance_pcd`
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
-- Indexes for table `daily_production`
--
ALTER TABLE `daily_production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
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
-- Indexes for table `ontime_delivery`
--
ALTER TABLE `ontime_delivery`
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
-- AUTO_INCREMENT for table `assy`
--
ALTER TABLE `assy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `attendance_p4`
--
ALTER TABLE `attendance_p4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_pcd`
--
ALTER TABLE `attendance_pcd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `best_attendance`
--
ALTER TABLE `best_attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `best_qcc`
--
ALTER TABLE `best_qcc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `best_ss`
--
ALTER TABLE `best_ss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daily_planning_delivery`
--
ALTER TABLE `daily_planning_delivery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_production`
--
ALTER TABLE `daily_production`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kpi`
--
ALTER TABLE `kpi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `monthly_total`
--
ALTER TABLE `monthly_total`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `monthly_total_permodel`
--
ALTER TABLE `monthly_total_permodel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `monthly_total_pertype`
--
ALTER TABLE `monthly_total_pertype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `ontime_delivery`
--
ALTER TABLE `ontime_delivery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_achievement_1977`
--
ALTER TABLE `report_achievement_1977`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_asakai`
--
ALTER TABLE `report_asakai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_bod`
--
ALTER TABLE `report_bod`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_dailyprod_l1`
--
ALTER TABLE `report_dailyprod_l1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_dailyprod_l2`
--
ALTER TABLE `report_dailyprod_l2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_delay_unit`
--
ALTER TABLE `report_delay_unit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_eom`
--
ALTER TABLE `report_eom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `report_hourlyrunning_l1`
--
ALTER TABLE `report_hourlyrunning_l1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_hourlyrunning_l2`
--
ALTER TABLE `report_hourlyrunning_l2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_summaryproblem_l1`
--
ALTER TABLE `report_summaryproblem_l1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_summaryproblem_l2`
--
ALTER TABLE `report_summaryproblem_l2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sop_adm`
--
ALTER TABLE `sop_adm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

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

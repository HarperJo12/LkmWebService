-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2020 at 02:10 PM
-- Server version: 10.2.29-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u719821558_likmiws`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_service`
--

CREATE TABLE `customer_service` (
  `NIK` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_Lkp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_service`
--

INSERT INTO `customer_service` (`NIK`, `Nama_Lkp`, `created_at`, `updated_at`) VALUES
('13001', 'Angela Lensia', '2019-10-14 09:49:54', '2019-10-14 09:49:54'),
('13002', 'Valencia Josephine', '2019-10-14 09:50:05', '2019-10-14 09:50:05'),
('13003', 'Indah Permata', '2019-10-14 09:50:19', '2019-10-14 09:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIK` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_Lkp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIK`, `Nama_Lkp`, `created_at`, `updated_at`) VALUES
('11001', 'Hendrawan Jacobus', '2019-10-14 09:47:16', '2019-10-14 09:47:16'),
('11002', 'Devina Angelica', '2019-10-14 09:47:46', '2019-10-14 09:47:46'),
('11003', 'Sylviana Setiawan', '2019-10-14 09:48:12', '2019-10-14 09:48:12'),
('11004', 'Bambang Yakobus', '2019-10-14 09:49:28', '2019-10-14 09:49:28'),
('11005', 'Hendrawan Imanuel', '2019-10-14 09:49:41', '2019-10-14 09:49:41'),
('11006', 'Melliana Setiani', '2019-10-19 20:45:58', '2019-10-19 20:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `jadkuldummy`
--

CREATE TABLE `jadkuldummy` (
  `Id` int(10) UNSIGNED NOT NULL,
  `kodemk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namamatkul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hari` int(11) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `npm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jadkuldummy`
--

INSERT INTO `jadkuldummy` (`Id`, `kodemk`, `namamatkul`, `kelas`, `hari`, `mulai`, `selesai`, `npm`, `created_at`, `updated_at`) VALUES
(1, '14030', 'Grafika Komputer', 'A', 1, '15:00:00', '17:00:00', '2015110001', '2019-10-24 20:29:39', '2019-10-24 20:29:39'),
(2, '14010', 'Metode Numerik', 'B', 3, '10:00:00', '12:00:00', '2015110001', '2019-10-24 20:30:07', '2019-10-24 20:30:07'),
(3, '14001', 'Inggris 1', 'A', 6, '15:00:00', '17:00:00', '2015110001', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(4, '14005', 'Kewarganegaraan', 'A', 1, '15:00:00', '17:40:00', '2015130001', '2019-10-24 20:30:38', '2019-10-24 20:30:38'),
(5, '14022', 'Web Design', 'B', 4, '15:00:00', '17:00:00', '2015130001', '2019-10-24 20:30:52', '2019-10-24 20:30:52'),
(6, '14002', 'Inggris 1', 'B', 5, '15:00:00', '17:00:00', '2015130001', '2019-10-24 20:31:02', '2019-10-24 20:31:02'),
(7, '14023', 'Manaj. Kualitas PL', 'A', 1, '10:40:00', '12:00:00', '2015110001', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(8, '14031', 'Pancasila', 'B', 1, '13:00:00', '14:40:00', '2015110001', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(9, '14069', 'Logika', 'A', 6, '08:30:00', '10:00:00', '2015110001', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(10, '14024', 'Kalkulus', 'A', 1, '10:40:00', '12:00:00', '2015130001', '2019-10-24 20:30:38', '2019-10-24 20:30:38'),
(11, '14031', 'Pancasila', 'B', 1, '13:00:00', '14:40:00', '2015130001', '2019-10-24 20:30:52', '2019-10-24 20:30:52'),
(12, '14068', 'Logika', 'B', 5, '10:40:00', '12:00:00', '2015130001', '2019-10-24 20:31:02', '2019-10-24 20:31:02'),
(13, '14030', 'Grafika Komputer', 'A', 1, '15:00:00', '17:00:00', '2015110002', '2019-10-24 20:29:39', '2019-10-24 20:29:39'),
(14, '14010', 'Metode Numerik', 'B', 3, '10:00:00', '12:00:00', '2015110002', '2019-10-24 20:30:07', '2019-10-24 20:30:07'),
(15, '14001', 'Inggris 1', 'A', 6, '15:00:00', '17:00:00', '2015110002', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(16, '14023', 'Manaj. Kualitas PL', 'A', 1, '10:40:00', '12:00:00', '2015110002', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(17, '14031', 'Pancasila', 'B', 1, '13:00:00', '14:40:00', '2015110002', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(18, '14069', 'Logika', 'A', 6, '08:30:00', '10:00:00', '2015110002', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(19, '14023', 'Manaj. Kualitas PL', 'A', 1, '10:40:00', '12:00:00', '2015110003', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(20, '14031', 'Pancasila', 'B', 1, '13:00:00', '14:40:00', '2015110003', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(21, '14069', 'Logika', 'A', 6, '08:30:00', '10:00:00', '2015110003', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(22, '14006', 'Kewarganegaraan', 'A', 2, '13:00:00', '14:40:00', '2015110003', '2019-10-24 20:30:38', '2019-10-24 20:30:38'),
(23, '14002', 'Inggris 1', 'B', 5, '15:00:00', '17:00:00', '2015110003', '2019-10-24 20:31:02', '2019-10-24 20:31:02'),
(24, '14005', 'Kewarganegaraan', 'A', 1, '15:00:00', '17:40:00', '2015130002', '2019-10-24 20:30:38', '2019-10-24 20:30:38'),
(25, '14022', 'Web Design', 'B', 4, '15:00:00', '17:00:00', '2015130002', '2019-10-24 20:30:52', '2019-10-24 20:30:52'),
(26, '14002', 'Inggris 1', 'B', 5, '15:00:00', '17:00:00', '2015130002', '2019-10-24 20:31:02', '2019-10-24 20:31:02'),
(27, '14023', 'Manaj. Kualitas PL', 'A', 1, '10:40:00', '12:00:00', '2015130002', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(28, '14069', 'Logika', 'A', 6, '08:30:00', '10:00:00', '2015130002', '2019-10-24 20:30:26', '2019-10-24 20:30:26'),
(29, '14005', 'Kewarganegaraan', 'A', 1, '15:00:00', '17:40:00', '2015130003', '2019-10-24 20:30:38', '2019-10-24 20:30:38'),
(30, '14022', 'Web Design', 'B', 4, '15:00:00', '17:00:00', '2015130003', '2019-10-24 20:30:52', '2019-10-24 20:30:52'),
(31, '14002', 'Inggris 1', 'B', 5, '15:00:00', '17:00:00', '2015130003', '2019-10-24 20:31:02', '2019-10-24 20:31:02'),
(32, '14024', 'Kalkulus', 'A', 1, '10:40:00', '12:00:00', '2015130003', '2019-10-24 20:30:38', '2019-10-24 20:30:38'),
(33, '14031', 'Pancasila', 'B', 1, '13:00:00', '14:40:00', '2015130003', '2019-10-24 20:30:52', '2019-10-24 20:30:52'),
(34, '14068', 'Logika', 'B', 5, '10:40:00', '12:00:00', '2015130003', '2019-10-24 20:31:02', '2019-10-24 20:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `k_jurusan`
--

CREATE TABLE `k_jurusan` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Kd_Jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NIK` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `k_jurusan`
--

INSERT INTO `k_jurusan` (`Id`, `Kd_Jurusan`, `NIK`, `created_at`, `updated_at`) VALUES
(1, '13', '11001', '2020-01-09 11:19:01', '2020-01-09 11:19:01'),
(2, '11', '11002', '2020-01-09 11:20:19', '2020-01-09 11:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NPM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_Lkp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Stat` int(11) DEFAULT NULL,
  `Ipk` double(8,2) DEFAULT NULL,
  `Sks_Lulus` int(11) DEFAULT NULL,
  `Dos1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dos2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kelas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Jenjang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Bidang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NPM`, `Nama_Lkp`, `Tgl_Lahir`, `Password`, `Stat`, `Ipk`, `Sks_Lulus`, `Dos1`, `Dos2`, `Kelas`, `Jenjang`, `Jurusan`, `Bidang`, `created_at`, `updated_at`) VALUES
('2015110001', 'Shelly Haryono', '1999-10-22', '22101999', 1, 0.00, 0, NULL, NULL, 'Malam', 'Sarjana 1', 'Manajemen informatika', 'Manajemen Bisnis', '2019-10-14 09:46:21', '2019-10-14 09:46:21'),
('2015110002', 'Daren Herlambang', '1998-05-15', '15051998', 1, 0.00, 0, NULL, NULL, 'Reguler', 'Sarjana 1', 'Manajemen informatika', 'Manajemen Informatika', '2019-10-14 09:46:21', '2019-10-14 09:46:21'),
('2015110003', 'Heidy Permata', '1997-06-03', '03061997', 1, 0.00, 0, NULL, NULL, 'Malam', 'Sarjana 1', 'Manajemen informatika', 'Komputerisasi Akuntansi', '2019-10-14 09:46:21', '2019-10-14 09:46:21'),
('2015130001', 'Supono Adrian', '1995-05-23', '23051995', 1, 0.00, 0, NULL, NULL, 'Reguler', 'Sarjana 1', 'Teknik Informatika', 'Grafis dan Multimedia', '2019-10-14 09:45:26', '2019-10-14 09:45:26'),
('2015130002', 'Dyanne Jacinda', '1997-08-02', '02081997', 1, 0.00, 0, NULL, NULL, 'Reguler', 'Sarjana 1', 'Teknik Informatika', 'Rekayasa Perangkat Lunak', '2019-10-14 09:45:26', '2019-10-14 09:45:26'),
('2015130003', 'Terry Pratama', '1997-01-22', '01221997', 1, 0.00, 0, NULL, NULL, 'Reguler', 'Sarjana 1', 'Teknik Informatika', 'Grafis dan Multimedia', '2019-10-14 09:45:26', '2019-10-14 09:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_24_115856_create_table_tiket', 1),
(4, '2019_05_24_172657_create_table_p_izin', 1),
(5, '2019_05_24_173356_create_table_p_ujian', 1),
(6, '2019_05_24_173936_create_table_p_perpindahan', 1),
(7, '2019_05_24_175108_create_table_p_sidang', 1),
(8, '2019_09_26_152741_create_table_p_matkul_det', 1),
(9, '2019_10_07_092605_create_table_mahasiswa', 1),
(10, '2019_10_07_102624_create_table_dosen', 1),
(11, '2019_10_07_111404_create_table_customer_service', 1),
(12, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(13, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(14, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(15, '2016_06_01_000004_create_oauth_clients_table', 2),
(16, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(17, '2019_10_24_140510_create_table_jadkuldummy', 3),
(18, '2020_01_09_171738_create_table_k_jurusan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('3641b94f5c665a9dc011ce4710b0ad3abe0d3c75fb07a928eb022256a0f5e46a8a4d15e43a907510', 11001, 1, 'MyApp', '[]', 1, '2019-10-21 22:10:03', '2019-10-21 22:10:03', '2020-10-22 12:10:03'),
('45f0233cc3466a7fc0ac43b83ad3eea320e6347ef6510bd173464d704cf6046b7f81b4e897b02608', 11001, 1, 'MyApp', '[]', 1, '2019-10-21 22:01:37', '2019-10-21 22:01:37', '2020-10-22 12:01:37'),
('7611aaa6f87278f87c8dd5945f0aeae2ca7674cd144f3ea1677c055e68f032670071e8734d158ba2', 11001, 1, 'MyApp', '[]', 1, '2019-10-21 21:57:35', '2019-10-21 21:57:35', '2020-10-22 11:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'SUGeF2KlH8YkaVWpRNPbjLdyMQNMl8fNQ3eEjE6V', 'http://localhost', 1, 0, 0, '2019-10-21 21:07:42', '2019-10-21 21:07:42'),
(2, NULL, 'Laravel Password Grant Client', 'D6tSIFikIkB0nXvQM1K24Qtq28XjYSd20JOVOua7', 'http://localhost', 0, 1, 0, '2019-10-21 21:07:42', '2019-10-21 21:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-10-21 21:07:42', '2019-10-21 21:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p_izin`
--

CREATE TABLE `p_izin` (
  `No_Trans` int(10) UNSIGNED NOT NULL,
  `Jenis` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Lampiran` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tgl_Awal` date NOT NULL,
  `Tgl_Akhir` date NOT NULL,
  `Keterangan` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `p_izin`
--

INSERT INTO `p_izin` (`No_Trans`, `Jenis`, `Lampiran`, `Tgl_Awal`, `Tgl_Akhir`, `Keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Izin', '201513000120191110094145.jpg', '2019-08-20', '2019-08-22', 'Ada acara Keluarga', '2019-10-15 07:10:43', '2019-10-15 07:10:43'),
(2, 'Izin', '201513000120191110094253.jpg', '2019-08-19', '2019-08-20', 'Ada acara di pantai', '2019-10-15 07:12:02', '2019-10-15 07:12:02'),
(3, 'Sakit', '201513000120191110094056.jpg', '2019-10-09', '2019-10-10', 'Sakit demam pak', '2019-10-15 07:12:59', '2019-10-15 07:12:59'),
(19, 'Sakit', '201511000220200107184029.jpg', '2019-09-19', '2019-09-23', 'Sakit demam, dan pilek', '2020-01-07 18:40:35', '2020-01-07 18:40:35'),
(20, 'Izin', '201511000320200107184404.jpg', '2019-09-20', '2019-09-30', 'izin liburan ke luar negeri', '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(21, 'Sakit', '201513000220200107184536.jpg', '2019-09-03', '2019-09-08', 'Mengigil hingga masuk rumah sakit', '2020-01-07 18:45:55', '2020-01-07 18:45:55'),
(22, 'Izin', '201513000320200107184846.jpg', '2019-09-12', '2019-09-17', 'ada acara keluarga besar', '2020-01-07 18:48:48', '2020-01-07 18:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `p_matkul_det`
--

CREATE TABLE `p_matkul_det` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Kode_Mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_Mk` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Tgl_Kuliah` date NOT NULL,
  `Jam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Kelas` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Stat` int(11) NOT NULL,
  `No_Trans` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `p_matkul_det`
--

INSERT INTO `p_matkul_det` (`Id`, `Kode_Mk`, `Nama_Mk`, `Tgl_Kuliah`, `Jam`, `Kelas`, `Stat`, `No_Trans`, `created_at`, `updated_at`) VALUES
(1, '14045', 'Budi Pekerti', '2019-08-20', '15:00 - 17:00', 'A', 0, 1, '2019-10-15 07:10:43', '2019-10-15 07:10:43'),
(2, '14040', 'Kalkulus', '2019-08-21', '10:00 - 12:00', 'B', 0, 1, '2019-10-15 07:10:43', '2019-10-15 07:10:43'),
(3, '14045', 'Budi Pekerti', '2019-08-19', '15:00 - 17:00', 'A', 0, 2, '2019-10-15 07:12:02', '2019-10-15 07:12:02'),
(4, '14040', 'Kalkulus', '2019-08-20', '10:00 - 12:00', 'B', 0, 2, '2019-10-15 07:12:02', '2019-10-15 07:12:02'),
(5, '14096', 'Metode Numerik', '2019-10-09', '15:00 - 16:40', 'A', 0, 3, '2019-10-15 07:12:59', '2019-10-15 07:12:59'),
(6, '14095', 'Kewirausahaan', '2019-10-10', '10:40 - 12:00', 'B', 0, 3, '2019-10-15 07:12:59', '2019-10-15 07:12:59'),
(7, '14045', 'Budi Pekerti', '2019-08-20', '15:00 - 17:00', 'A', 0, 4, '2019-10-15 07:13:39', '2019-10-15 07:13:39'),
(8, '14040', 'Kalkulus', '2019-08-21', '10:00 - 12:00', 'B', 0, 4, '2019-10-15 07:13:39', '2019-10-15 07:13:39'),
(9, '14045', 'Budi Pekerti', '2019-09-14', '15:00 - 17:00', 'A', 0, 5, '2019-10-15 07:19:11', '2019-10-15 07:19:11'),
(10, '14040', 'Kalkulus', '2019-09-16', '10:00 - 12:00', 'B', 0, 5, '2019-10-15 07:19:11', '2019-10-15 07:19:11'),
(11, '14005', 'Kewirausahaan', '2019-09-14', '10:00 - 12:00', 'B', 0, 5, '2019-10-15 07:19:11', '2019-10-15 07:19:11'),
(12, '14010', 'Metode Numerik', '2019-09-15', '10:00 - 12:00', 'B', 0, 5, '2019-10-15 07:19:11', '2019-10-15 07:19:11'),
(13, '14002', 'Inggris 1', '2019-09-15', '10:00 - 12:00', 'B', 0, 5, '2019-10-15 07:19:11', '2019-10-15 07:19:11'),
(14, '14002', 'Kewarganegaraan', '2019-09-16', '10:00 - 12:00', 'B', 0, 5, '2019-10-15 07:19:11', '2019-10-15 07:19:11'),
(15, '14099', 'Metode Numerik', '2019-08-13', '15:00 - 16:40', 'A', 0, 6, '2019-10-15 07:21:42', '2019-10-15 07:21:42'),
(16, '14098', 'Kewirausahaan', '2019-08-14', '10:40 - 12:00', 'B', 0, 6, '2019-10-15 07:21:42', '2019-10-15 07:21:42'),
(17, '14001', 'Inggris 1', '2019-09-21', '15:00 - 17:00', 'A', 0, 19, '2020-01-07 18:40:35', '2020-01-07 18:40:35'),
(18, '14069', 'Logika', '2019-09-21', '08:30 - 10:00', 'A', 0, 19, '2020-01-07 18:40:35', '2020-01-07 18:40:35'),
(19, '14030', 'Grafika Komputer', '2019-09-23', '15:00 - 17:00', 'A', 0, 19, '2020-01-07 18:40:35', '2020-01-07 18:40:35'),
(20, '14023', 'Manaj. Kualitas PL', '2019-09-23', '10:40 - 12:00', 'A', 0, 19, '2020-01-07 18:40:35', '2020-01-07 18:40:35'),
(21, '14031', 'Pancasila', '2019-09-23', '13:00 - 14:40', 'B', 0, 19, '2020-01-07 18:40:35', '2020-01-07 18:40:35'),
(22, '14002', 'Inggris 1', '2019-09-20', '15:00 - 17:00', 'B', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(23, '14069', 'Logika', '2019-09-21', '08:30 - 10:00', 'A', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(24, '14023', 'Manaj. Kualitas PL', '2019-09-23', '10:40 - 12:00', 'A', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(25, '14031', 'Pancasila', '2019-09-23', '13:00 - 14:40', 'B', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(26, '14006', 'Kewarganegaraan', '2019-09-24', '13:00 - 14:40', 'A', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(27, '14002', 'Inggris 1', '2019-09-27', '15:00 - 17:00', 'B', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(28, '14069', 'Logika', '2019-09-28', '08:30 - 10:00', 'A', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(29, '14023', 'Manaj. Kualitas PL', '2019-09-30', '10:40 - 12:00', 'A', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(30, '14031', 'Pancasila', '2019-09-30', '13:00 - 14:40', 'B', 0, 20, '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(31, '14022', 'Web Design', '2019-09-05', '15:00 - 17:00', 'B', 0, 21, '2020-01-07 18:45:55', '2020-01-07 18:45:55'),
(32, '14002', 'Inggris 1', '2019-09-06', '15:00 - 17:00', 'B', 0, 21, '2020-01-07 18:45:55', '2020-01-07 18:45:55'),
(33, '14069', 'Logika', '2019-09-07', '08:30 - 10:00', 'A', 0, 21, '2020-01-07 18:45:55', '2020-01-07 18:45:55'),
(34, '14005', 'Kewarganegaraan', '2019-09-16', '15:00 - 17:40', 'A', 0, 22, '2020-01-07 18:48:48', '2020-01-07 18:48:48'),
(35, '14024', 'Kalkulus', '2019-09-16', '10:40 - 12:00', 'A', 0, 22, '2020-01-07 18:48:48', '2020-01-07 18:48:48'),
(36, '14031', 'Pancasila', '2019-09-16', '13:00 - 14:40', 'B', 0, 22, '2020-01-07 18:48:48', '2020-01-07 18:48:48'),
(37, '14010', 'Metode Numerik', '2019-10-16', '10:00 - 12:00', 'B', 0, 23, '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(38, '14001', 'Inggris 1', '2019-10-19', '15:00 - 17:00', 'A', 0, 23, '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(39, '14069', 'Logika', '2019-10-19', '08:30 - 10:00', 'A', 0, 23, '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(40, '14030', 'Grafika Komputer', '2019-10-21', '15:00 - 17:00', 'A', 0, 23, '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(41, '14023', 'Manaj. Kualitas PL', '2019-10-21', '10:40 - 12:00', 'A', 0, 23, '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(42, '14031', 'Pancasila', '2019-10-21', '13:00 - 14:40', 'B', 0, 23, '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(43, '14010', 'Metode Numerik', '2019-10-23', '10:00 - 12:00', 'B', 0, 23, '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(44, '14002', 'Inggris 1', '2019-10-18', '15:00 - 17:00', 'B', 0, 24, '2020-01-07 18:52:45', '2020-01-07 18:52:45'),
(45, '14069', 'Logika', '2019-10-19', '08:30 - 10:00', 'A', 0, 24, '2020-01-07 18:52:45', '2020-01-07 18:52:45'),
(46, '14005', 'Kewarganegaraan', '2019-09-02', '15:00 - 17:40', 'A', 0, 25, '2020-01-07 18:53:33', '2020-01-07 18:53:33'),
(47, '14023', 'Manaj. Kualitas PL', '2019-09-02', '10:40 - 12:00', 'A', 0, 25, '2020-01-07 18:53:33', '2020-01-07 18:53:33'),
(48, '14022', 'Web Design', '2019-09-05', '15:00 - 17:00', 'B', 0, 25, '2020-01-07 18:53:33', '2020-01-07 18:53:33'),
(49, '14022', 'Web Design', '2019-09-05', '15:00 - 17:00', 'B', 0, 26, '2020-01-07 18:54:33', '2020-01-07 18:54:33'),
(50, '14002', 'Inggris 1', '2019-09-06', '15:00 - 17:00', 'B', 0, 26, '2020-01-07 18:54:33', '2020-01-07 18:54:33'),
(51, '14068', 'Logika', '2019-09-06', '10:40 - 12:00', 'B', 0, 26, '2020-01-07 18:54:33', '2020-01-07 18:54:33'),
(52, '14005', 'Kewarganegaraan', '2019-09-09', '15:00 - 17:40', 'A', 0, 26, '2020-01-07 18:54:33', '2020-01-07 18:54:33'),
(53, '14024', 'Kalkulus', '2019-09-09', '10:40 - 12:00', 'A', 0, 26, '2020-01-07 18:54:33', '2020-01-07 18:54:33'),
(54, '14031', 'Pancasila', '2019-09-09', '13:00 - 14:40', 'B', 0, 26, '2020-01-07 18:54:33', '2020-01-07 18:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `p_perpindahan`
--

CREATE TABLE `p_perpindahan` (
  `No_Trans` int(10) UNSIGNED NOT NULL,
  `Kls_Awal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Kls_Akhir` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Jjg_Awal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Jjg_Akhir` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Jrs_Awal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Jrs_Akhir` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Bdg_Awal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Bdg_Akhir` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tahun_Sem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Keterangan` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Lampiran1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lampiran2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `p_perpindahan`
--

INSERT INTO `p_perpindahan` (`No_Trans`, `Kls_Awal`, `Kls_Akhir`, `Jjg_Awal`, `Jjg_Akhir`, `Jrs_Awal`, `Jrs_Akhir`, `Bdg_Awal`, `Bdg_Akhir`, `Tahun_Sem`, `Keterangan`, `Lampiran1`, `Lampiran2`, `created_at`, `updated_at`) VALUES
(7, 'Reguler', 'Karyawan', 'Sarjana 1(S1)', 'Sarjana 1(S1)', 'Teknik Informatika', 'Manajemen Informatika', 'Grafis dan Multimedia', 'Manajemen Bisnis', 'Semester Ganjil Tahun 2018/2019', 'Mengumpulkan biaya kuliah :(', '201513000120191110222657.docx', '201513000120191110222435.pdf', '2019-10-15 07:22:15', '2019-10-15 07:22:15'),
(8, 'Karyawan', 'Reguler', 'Sarjana 1(S1)', 'Sarjana 1(S1)', 'Manajemen Informatika', 'Teknik Informatika', 'Manajemen Bisnis', 'Rekayasa Perangkat Lunak', 'Semester Ganjil Tahun 2018/2019', 'Ini bukan jalan ninjaku', NULL, NULL, '2019-10-15 07:23:56', '2019-10-15 07:23:56'),
(9, 'Reguler', 'Reguler', 'Sarjana 1(S1)', 'Sarjana (S1)', 'Manajemen Informatika', 'Teknik Informatika', 'Manajemen Informatika', 'Grafis dan Multimedia', 'Semester Ganjil Tahun 2018/2019', 'Sepertinya bukan bidang saya', NULL, NULL, '2019-10-15 07:30:15', '2019-10-15 07:30:15'),
(13, 'Reguler', 'Karyawan', 'Sarjana 1(S1)', 'Sarjana 1(S1)', 'Teknik Informatika', 'Manajemen Informatika', 'Rekayasa Perangkat Lunak', 'Manajemen Bisnis', 'Semester Ganjil Tahun 2018/2019', 'Saya tidak memiliki keahlian di bidang ini', '201513000120191110222657.docx', '201513000120191110222435.pdf', '2019-10-15 07:22:15', '2019-10-15 07:22:15'),
(14, 'Karyawan', 'Reguler', 'Sarjana 1(S1)', 'Sarjana 1(S1)', 'Manajemen Informatika', 'Teknik Informatika', 'Komputerisasi Akuntansi', 'Grafis dan Multimedia', 'Semester Ganjil Tahun 2018/2019', 'Ini bukan jalan ninjaku', NULL, NULL, '2019-10-15 07:23:56', '2019-10-15 07:23:56'),
(15, 'Reguler', 'Reguler', 'Sarjana 1(S1)', 'Sarjana (S1)', 'Teknik Informatika', 'Manajemen Informatika', 'Grafis dan Multimedia', 'Komputerisasi Akuntansi (D3/S1)', 'Semester Ganjil Tahun 2018/2019', 'Sepertinya bukan bidang saya', NULL, NULL, '2019-10-15 07:30:15', '2019-10-15 07:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `p_sidang`
--

CREATE TABLE `p_sidang` (
  `No_Trans` int(10) UNSIGNED NOT NULL,
  `Ttl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Alamat` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Kd_Pos` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `No_Telp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `No_HP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Jenjang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Jurusan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Bidang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Judul_TA` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_Prs` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Alamat_Prs` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pembimbing` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Ko_Pembimbing` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tahun_Sem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Lmp_Kwitansi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `p_sidang`
--

INSERT INTO `p_sidang` (`No_Trans`, `Ttl`, `Alamat`, `Kd_Pos`, `No_Telp`, `No_HP`, `Email`, `Jenjang`, `Jurusan`, `Bidang`, `Judul_TA`, `Nama_Prs`, `Alamat_Prs`, `Pembimbing`, `Ko_Pembimbing`, `Tahun_Sem`, `Lmp_Kwitansi`, `created_at`, `updated_at`) VALUES
(10, 'Bandung, 22 Oktober 1999', 'Jl Abc No 5 Bandung', '40130', NULL, '0822156465', 'askda@gmail.com', 'Sarjana 1', 'Teknik Informatika', 'Grafis dan Multimedia', 'Menguji Perbandingan Gambar Vector', NULL, NULL, 'Sylviana Setiawan', NULL, 'Semester Ganjil Tahun 2019/2020', '201513000120191109195542.jpg', '2019-10-15 07:40:32', '2019-10-15 07:40:32'),
(11, 'Jakarta, 23 Mei 1995', 'Jl Melati No 3 Bandung', '40120', NULL, '081231231', 'askd@gmail.com', 'Sarjana 1', 'Manajemen Informatika', 'Manajemen Bisnis', 'Penelitian Pengaruh E-Commerce Terhadap Pasar Swalayan', NULL, NULL, 'Bambang Yakobus', NULL, 'Semester Ganjil Tahun 2019/2020', '201513000120191109195542.jpg', '2019-10-15 07:44:21', '2019-10-15 07:44:21'),
(12, 'Cilacap, 22 Januari 1997', 'Jl. Cemara No 23 Bandung', '40552', '02245464848', '0813454678', 'supdud@gmail.com', 'Sarjana 1', 'Teknik Informatika', 'Grafis dan Multimedia', 'Machine Learning Pendeteksi Wajah', NULL, NULL, 'Hendrawan Jacobus', 'Bambang Yakobus', 'Semester Ganjil Tahun 2018/2019', '201513000120191109195542.jpg', '2019-10-15 07:47:15', '2019-10-15 07:47:15'),
(16, 'Bandung, 02 Agustus 1997', 'Jl Abc No 5 Bandung', '40130', NULL, '0822156465', 'asda@gmail.com', 'Sarjana 1', 'Teknik Informatika', 'Rekayasa Perangkat Lunak', 'Aplikasi Keuangan Toko Bangunan', 'CV. Batu Penjuru', 'Jl. Cihampelas No. 25 Bandung', 'Melliana Setiani', NULL, 'Semester Ganjil Tahun 2019/2020', '201513000120191109195542.jpg', '2019-10-15 07:40:32', '2019-10-15 07:40:32'),
(17, 'Jakarta, 15 Mei 1998', 'Jl Melati No 3 Bandung', '40120', NULL, '081231231', 'skda@gmail.com', 'Sarjana 1', 'Manajemen Informatika', 'Manajemen Informatika', 'Penelitian Penjualan Online Toko Sembako', 'CV. Sinar Jaya', 'Jl. Broxite No. 11 Bandung', 'Hendrawan Jacobus', NULL, 'Semester Ganjil Tahun 2019/2020', '201513000120191109195542.jpg', '2019-10-15 07:44:21', '2019-10-15 07:44:21'),
(18, 'Cilacap, 03 Juni 1997', 'Jl. Cemara No 23 Bandung', '40552', '02245464848', '0813454678', 'updude@gmail.com', 'Sarjana 1', 'Manajemen Informatika', 'Komputerisasi Akuntansi', 'Analisa Keuangan Toko Online', NULL, NULL, 'Bambang Yakobus', 'Hendrawan Imanuel', 'Semester Ganjil Tahun 2018/2019', '201513000120191109195542.jpg', '2019-10-15 07:47:15', '2019-10-15 07:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `p_ujian`
--

CREATE TABLE `p_ujian` (
  `No_Trans` int(10) UNSIGNED NOT NULL,
  `Jenis` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tahun_Sem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tgl_Awal` date NOT NULL,
  `Tgl_Akhir` date NOT NULL,
  `Keterangan` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `p_ujian`
--

INSERT INTO `p_ujian` (`No_Trans`, `Jenis`, `Tahun_Sem`, `Tgl_Awal`, `Tgl_Akhir`, `Keterangan`, `created_at`, `updated_at`) VALUES
(4, 'UTS', 'Semester Ganjil Tahun 2018/2019', '2019-08-20', '2019-08-22', 'Sakit pak', '2019-10-15 07:13:39', '2019-10-15 07:13:39'),
(5, 'UAS', 'Semester Ganjil Tahun 2018/2019', '2019-09-14', '2019-09-16', 'Ada perlombaan renang di luar kota', '2019-10-15 07:19:11', '2019-10-15 07:19:11'),
(6, 'UTS', 'Semester Ganjil Tahun 2018/2019', '2019-08-12', '2019-08-15', 'Ada acara keluarga', '2019-10-15 07:21:42', '2019-10-15 07:21:42'),
(23, 'UAS', 'Semester Genap Tahun 2018/2019', '2019-10-16', '2019-10-24', 'ada acara keluarga di bogor', '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(24, 'UAS', 'Semester Ganjil Tahun 2018/2019', '2019-10-17', '2019-10-19', 'Ada pekerjaan yang tidak bisa dilewatkan', '2020-01-07 18:52:45', '2020-01-07 18:52:45'),
(25, 'UTS', 'Semester Ganjil Tahun 2018/2019', '2019-09-02', '2019-09-05', 'Sakit demam pak', '2020-01-07 18:53:33', '2020-01-07 18:53:33'),
(26, 'UTS', 'Semester Ganjil Tahun 2018/2019', '2019-09-04', '2019-09-10', 'Sepupu menikah', '2020-01-07 18:54:33', '2020-01-07 18:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `No_Tiket` int(10) UNSIGNED NOT NULL,
  `Tgl_Transaksi` date NOT NULL,
  `Jenis_Tiket` int(11) NOT NULL,
  `Stat` int(11) NOT NULL,
  `Kelas` int(11) NOT NULL,
  `NPM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NIK_Cs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NIK_Dosen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`No_Tiket`, `Tgl_Transaksi`, `Jenis_Tiket`, `Stat`, `Kelas`, `NPM`, `NIK_Cs`, `NIK_Dosen`, `created_at`, `updated_at`) VALUES
(1, '2019-09-27', 1, 0, 1, '2015130001', NULL, '11001', '2019-10-15 07:10:43', '2019-10-15 07:10:43'),
(2, '2019-09-30', 1, 0, 2, '2015110001', NULL, '11002', '2019-10-15 07:12:02', '2019-10-15 07:12:02'),
(3, '2019-10-15', 1, 0, 1, '2015130001', NULL, '11001', '2019-10-15 07:12:59', '2019-10-15 07:12:59'),
(4, '2019-09-27', 2, 0, 2, '2015110001', NULL, '11002', '2019-10-15 07:13:39', '2019-10-15 07:13:39'),
(5, '2019-10-01', 2, 0, 1, '2015130001', NULL, '11001', '2019-10-15 07:19:11', '2019-10-15 07:19:11'),
(6, '2019-10-15', 2, 0, 2, '2015110001', NULL, '11002', '2019-10-15 07:21:42', '2019-10-15 07:21:42'),
(7, '2019-09-27', 3, 0, 1, '2015130001', NULL, '11001', '2019-10-15 07:22:15', '2019-10-15 07:22:15'),
(8, '2019-10-04', 3, 0, 2, '2015110001', NULL, '11002', '2019-10-15 07:23:56', '2019-10-15 07:23:56'),
(9, '2019-10-15', 3, 0, 1, '2015110002', NULL, '11002', '2019-10-15 07:30:15', '2019-10-15 07:30:15'),
(10, '2019-09-27', 4, 0, 2, '2015110001', NULL, '11003', '2019-10-15 07:40:32', '2019-10-15 07:40:32'),
(11, '2019-10-05', 4, 0, 1, '2015130001', NULL, '11004', '2019-10-15 07:44:21', '2019-10-15 07:44:21'),
(12, '2019-10-15', 4, 0, 1, '2015130003', NULL, '11001', '2019-10-15 07:47:15', '2019-10-15 07:47:15'),
(13, '2019-09-29', 3, 0, 1, '2015130002', NULL, '11001', '2019-10-15 07:40:32', '2019-10-15 07:40:32'),
(14, '2019-09-29', 3, 0, 2, '2015110003', NULL, '11002', '2019-10-15 07:44:21', '2019-10-15 07:44:21'),
(15, '2019-10-15', 3, 0, 1, '2015130003', NULL, '11001', '2019-10-15 07:47:15', '2019-10-15 07:47:15'),
(16, '2019-09-28', 4, 0, 1, '2015130002', NULL, '11006', '2019-10-15 07:40:32', '2019-10-15 07:40:32'),
(17, '2019-10-25', 4, 0, 1, '2015110002', NULL, '11001', '2019-10-15 07:44:21', '2019-10-15 07:44:21'),
(18, '2019-10-28', 4, 0, 2, '2015110003', NULL, '11004', '2019-10-15 07:47:15', '2019-10-15 07:47:15'),
(19, '2019-09-27', 1, 0, 1, '2015110002', NULL, '11002', '2020-01-07 18:40:35', '2020-01-07 18:40:35'),
(20, '2019-09-28', 1, 0, 2, '2015110003', NULL, '11002', '2020-01-07 18:44:07', '2020-01-07 18:44:07'),
(21, '2019-09-29', 1, 0, 1, '2015130002', NULL, '11001', '2020-01-07 18:45:55', '2020-01-07 18:45:55'),
(22, '2019-09-29', 1, 0, 1, '2015130003', NULL, '11001', '2020-01-07 18:48:48', '2020-01-07 18:48:48'),
(23, '2019-09-30', 2, 0, 1, '2015110002', NULL, '11002', '2020-01-07 18:51:39', '2020-01-07 18:51:39'),
(24, '2019-09-30', 2, 0, 2, '2015110003', NULL, '11002', '2020-01-07 18:52:45', '2020-01-07 18:52:45'),
(25, '2019-10-25', 2, 0, 1, '2015130002', NULL, '11001', '2020-01-07 18:53:33', '2020-01-07 18:53:33'),
(26, '2019-10-28', 2, 0, 1, '2015130003', NULL, '11001', '2020-01-07 18:54:33', '2020-01-07 18:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
('11001', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 2, NULL, '2019-10-14 09:47:15', '2019-10-14 09:47:15'),
('11002', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 2, NULL, '2019-10-14 09:47:46', '2019-10-14 09:47:46'),
('11003', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 3, NULL, '2019-10-14 09:48:12', '2019-10-14 09:48:12'),
('11004', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 3, NULL, '2019-10-14 09:49:27', '2019-10-14 09:49:27'),
('11005', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 3, NULL, '2019-10-14 09:49:41', '2019-10-14 09:49:41'),
('11006', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 3, NULL, '2019-10-19 20:45:57', '2019-10-19 22:26:40'),
('13001', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 4, NULL, '2019-10-14 09:49:54', '2019-10-14 09:49:54'),
('13002', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 4, NULL, '2019-10-14 09:50:05', '2019-10-14 09:50:05'),
('13003', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 4, NULL, '2019-10-14 09:50:19', '2019-10-14 09:50:19'),
('2015110001', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 1, NULL, '2019-10-14 09:46:21', '2019-10-14 09:46:21'),
('2015110002', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 1, NULL, '2019-10-14 09:46:21', '2019-10-14 09:46:21'),
('2015110003', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 1, NULL, '2019-10-14 09:46:21', '2019-10-14 09:46:21'),
('2015130001', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 1, NULL, '2019-10-14 09:45:26', '2019-10-14 09:45:26'),
('2015130002', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 1, NULL, '2019-10-14 09:45:26', '2019-10-14 09:45:26'),
('2015130003', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 1, NULL, '2019-10-14 09:45:26', '2019-10-14 09:45:26'),
('4363', '$2a$10$f0QxNtDUbex2iy5beIdDbOONrThONGScF2qmilKIvTSmb0AnGxHMK', 0, NULL, '2019-10-14 09:45:26', '2019-10-14 09:45:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_service`
--
ALTER TABLE `customer_service`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `jadkuldummy`
--
ALTER TABLE `jadkuldummy`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `k_jurusan`
--
ALTER TABLE `k_jurusan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `p_izin`
--
ALTER TABLE `p_izin`
  ADD PRIMARY KEY (`No_Trans`);

--
-- Indexes for table `p_matkul_det`
--
ALTER TABLE `p_matkul_det`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `p_matkul_det_no_trans_foreign` (`No_Trans`);

--
-- Indexes for table `p_perpindahan`
--
ALTER TABLE `p_perpindahan`
  ADD PRIMARY KEY (`No_Trans`);

--
-- Indexes for table `p_sidang`
--
ALTER TABLE `p_sidang`
  ADD PRIMARY KEY (`No_Trans`);

--
-- Indexes for table `p_ujian`
--
ALTER TABLE `p_ujian`
  ADD PRIMARY KEY (`No_Trans`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`No_Tiket`),
  ADD KEY `tiket_npm_foreign` (`NPM`),
  ADD KEY `tiket_nik_dosen_foreign` (`NIK_Dosen`),
  ADD KEY `tiket_nik_cs_foreign` (`NIK_Cs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadkuldummy`
--
ALTER TABLE `jadkuldummy`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `k_jurusan`
--
ALTER TABLE `k_jurusan`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_matkul_det`
--
ALTER TABLE `p_matkul_det`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `No_Tiket` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_npm_foreign` FOREIGN KEY (`NPM`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_izin`
--
ALTER TABLE `p_izin`
  ADD CONSTRAINT `p_izin_no_trans_foreign` FOREIGN KEY (`No_Trans`) REFERENCES `tiket` (`No_Tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_matkul_det`
--
ALTER TABLE `p_matkul_det`
  ADD CONSTRAINT `p_matkul_det_no_trans_foreign` FOREIGN KEY (`No_Trans`) REFERENCES `tiket` (`No_Tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_perpindahan`
--
ALTER TABLE `p_perpindahan`
  ADD CONSTRAINT `p_perpindahan_no_trans_foreign` FOREIGN KEY (`No_Trans`) REFERENCES `tiket` (`No_Tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_sidang`
--
ALTER TABLE `p_sidang`
  ADD CONSTRAINT `p_sidang_no_trans_foreign` FOREIGN KEY (`No_Trans`) REFERENCES `tiket` (`No_Tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_ujian`
--
ALTER TABLE `p_ujian`
  ADD CONSTRAINT `p_ujian_no_trans_foreign` FOREIGN KEY (`No_Trans`) REFERENCES `tiket` (`No_Tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_nik_cs_foreign` FOREIGN KEY (`NIK_Cs`) REFERENCES `customer_service` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_nik_dosen_foreign` FOREIGN KEY (`NIK_Dosen`) REFERENCES `dosen` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_npm_foreign` FOREIGN KEY (`NPM`) REFERENCES `mahasiswa` (`NPM`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

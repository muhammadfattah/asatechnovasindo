-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 05:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asatechnovasindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(1, '/assets/img/clients/iosfil7KCcLfQSRNOPzjhsMbDNvV2kNI6TXBM38x.png', '2022-07-13 17:03:46', '2022-07-13 19:44:58'),
(2, '/assets/img/clients/5eWytOI21t68uZy06Vf9jpcOj37kMMbDSlsy0rNI.png', '2022-07-13 17:03:54', '2022-07-13 19:44:58'),
(3, '/assets/img/clients/2JKGaVEfUWJYndDEcvgvoGI6KDrgL9gVkeVXJFIY.png', '2022-07-13 17:04:03', '2022-07-13 17:04:03'),
(4, '/assets/img/clients/vX4Kkai5AdTDY57L5oN9i3aB6IWFXz7aG6RQib5u.png', '2022-07-13 17:04:13', '2022-07-13 17:04:13'),
(5, '/assets/img/clients/rIElhU59AH00c66e9CbXKwqCevDdj8BAFZHDrbMR.png', '2022-07-13 17:15:24', '2022-07-13 17:15:24'),
(6, '/assets/img/clients/7btZPgd8pKN4hmVFXRuk05A4E4iWtppHFUjobl19.png', '2022-07-13 17:15:24', '2022-07-13 17:15:24'),
(7, '/assets/img/clients/0jshDh7CXVHsIuUYHstTFoKVEw7jEQqrQPr9WzGI.png', '2022-07-13 17:15:24', '2022-07-13 17:15:24'),
(8, '/assets/img/clients/O4y4jQH14RqfQqeHCZjBuycoWckGYUGJtdQ88MU0.png', '2022-07-13 17:17:48', '2022-07-13 17:17:48'),
(9, '/assets/img/clients/WLm1vePM2f8BsFPYuTO5gITgCKDI5uZcavp4X8hL.png', '2022-07-13 17:17:48', '2022-07-13 17:17:48'),
(10, '/assets/img/clients/mymkyPaROFZZGS1CbJDqXcUGQVmrvsrvKLP89xoK.png', '2022-07-13 17:17:48', '2022-07-13 17:17:48'),
(11, '/assets/img/clients/UBnKo08VEZaYxZATRPNqWhzGJRMnANp5UjF3hqTj.png', '2022-07-13 17:20:02', '2022-07-13 17:20:02'),
(12, '/assets/img/clients/WOWhARhIpzgqb9p9onR2sACsZ2A9QmPJ6YbY5T3U.png', '2022-07-13 17:20:02', '2022-07-13 17:20:02'),
(13, '/assets/img/clients/UsvqsatPGlcpjrfHcVLZRGRT6I0RtEQZDrlk8CGc.png', '2022-07-13 17:20:14', '2022-07-13 17:20:14'),
(14, '/assets/img/clients/TNbqnQUpXJSKgiyPzStZQ7qQ3ZVFWAx64qCDmzRR.png', '2022-07-13 17:20:15', '2022-07-13 17:20:15'),
(15, '/assets/img/clients/g0UFiybz6xwWkHTO6t5TP3d8PscbNRrFuDIUB52M.png', '2022-07-13 17:20:15', '2022-07-13 17:20:15'),
(16, '/assets/img/clients/bqKn5uR9ALlGkhVLCLUk9OMGpOKC17F8G7ip7Gvd.png', '2022-07-13 17:20:15', '2022-07-13 17:20:15'),
(17, '/assets/img/clients/qut6uJ7V5wJ1tLYUdppVVnDGJCwM3dPPCK20zqQS.png', '2022-07-13 17:20:15', '2022-07-13 17:20:15'),
(18, '/assets/img/clients/Jm34xmWhUzcLayDVEfkSH1yv12lEXLELkSqr0pzv.png', '2022-07-13 17:20:37', '2022-07-13 17:20:37'),
(19, '/assets/img/clients/raDkPSpTMFe9wv9Q365kMUhqu9aExdO4NaVvqR3j.png', '2022-07-13 17:20:37', '2022-07-13 17:20:37'),
(20, '/assets/img/clients/V16Vrj0Qtb4KdMrUMsyJzVVAea1yhS2aPjU8YOf0.png', '2022-07-13 17:20:37', '2022-07-13 17:20:37'),
(21, '/assets/img/clients/mkiwiv7Mjrfya7JzncBcBB3DtJDobOvxex2SmpUD.png', '2022-07-13 17:20:38', '2022-07-13 17:20:38'),
(22, '/assets/img/clients/MgZn1ydO4xoebSn1i3HExhuuMazRxjhxwkrjSBYl.png', '2022-07-13 17:20:38', '2022-07-13 17:20:38'),
(23, '/assets/img/clients/vKGbCXv20x6sSkWWkJNwvzjDSLbabbx3IbvtRMTH.png', '2022-07-13 17:20:38', '2022-07-13 17:20:38'),
(24, '/assets/img/clients/6nkRtmMn0bUULWkTDij7JLl69N8SDTqPUdIik73y.png', '2022-07-13 17:20:38', '2022-07-13 17:20:38'),
(25, '/assets/img/clients/TfgPImm2ClE0pHRGAxLLPqmc23jNjWl7RGRoKGeP.png', '2022-07-13 17:20:38', '2022-07-13 17:20:38');

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
(5, '2022_07_12_051638_create_clients_table', 1),
(6, '2022_07_12_071731_create_portfolios_table', 2),
(7, '2022_07_13_070012_create_products_table', 3);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `application_name`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'Booking System', '/assets/img/portofolio/OuLWPLjLg6NfEWW4zn2MJoxbHKkHoXb9UwiYeDAd.jpg', '2022-07-13 16:51:16', '2022-07-13 16:51:16'),
(2, 'Presensi Online', '/assets/img/portofolio/dHJmMk15yuUu0Lb1sVQlBjl6FxdmcPdgnlLkzx2Q.jpg', '2022-07-13 16:51:33', '2022-07-13 16:51:33'),
(3, 'Management Security', '/assets/img/portofolio/GFK8wfSGX3AvKxr17U41DYilRcWqVwVkvwWYMnBZ.jpg', '2022-07-13 16:51:47', '2022-07-13 16:51:47'),
(4, 'Sistem Penyandaran Kapal', '/assets/img/portofolio/PSFc1Pop0ni6uXqxJe6ekIUQG0FUKpp1mKkrxOwm.jpg', '2022-07-13 16:52:13', '2022-07-13 16:52:13'),
(5, 'Depo Part Informations', '/assets/img/portofolio/rwOGA6Naic4zWfU1XHgjs71jkAlpdhMYD5Ch91zB.jpg', '2022-07-13 16:52:26', '2022-07-13 16:52:26'),
(6, 'Meter Data', '/assets/img/portofolio/xUJc7J3i21wxCbRtLKR7sWn5fJj7gZAcQzKiVJBp.jpg', '2022-07-13 16:52:41', '2022-07-13 16:52:41'),
(7, 'Primary Marketing Area', '/assets/img/portofolio/ACO95nNLqCo2sh5oNGUbkJmwLQoLVwjwkGQMI7wC.jpg', '2022-07-13 16:52:59', '2022-07-13 16:52:59'),
(8, 'Sistem Informasi dan Manajemen Pangan', '/assets/img/portofolio/NREIGb8XkAYu7223TIqkYRnKdhlJTnKZ7IGYmmQz.jpg', '2022-07-13 16:53:31', '2022-07-13 16:53:31'),
(9, 'ASA POS', '/assets/img/portofolio/ibCu3CNXigHbPTrBG0bvo8L3TlJDy1yKQqDw2A7F.jpg', '2022-07-13 16:53:59', '2022-07-13 16:53:59'),
(10, 'Air Flood Light Control', '/assets/img/portofolio/AHPBaLknvMDu1cnUw5PHCYZXXyJ8PC4GC6J3gGJx.jpg', '2022-07-13 16:54:22', '2022-07-13 16:54:22'),
(11, 'CLINIC MANAGEMENT', '/assets/img/portofolio/CyzCU8UI5uscfUyidYkxCciVfE7Zc6pQKMHjPPFY.jpg', '2022-07-13 16:54:40', '2022-07-13 16:54:40'),
(12, 'Environtment Monitoring', '/assets/img/portofolio/YA0g4UXDxeK7bmsoHhAd2vHajKm0lbV3t0w7wOlT.jpg', '2022-07-13 16:55:08', '2022-07-13 16:55:08'),
(13, 'Fire Alarm Monitoring', '/assets/img/portofolio/Wru0TrkR5RseR0CAjHZV7G1jvyY4pbU8fHtEnTqz.jpg', '2022-07-13 16:55:39', '2022-07-13 16:55:39'),
(14, 'GPS - Tracker', '/assets/img/portofolio/OZJBkpUTs4PajDCjaVqMWlTe2vPyUdJhBTdsvbpg.jpg', '2022-07-13 16:56:05', '2022-07-13 16:56:05'),
(15, 'Hotel Management System', '/assets/img/portofolio/jMGLQ3uyU6C3Qasbikb1eCIQxJwj1VHJvUzg5qTi.jpg', '2022-07-13 16:56:20', '2022-07-13 16:56:20'),
(16, 'Indeks Kepuasan Layanan', '/assets/img/portofolio/n6kNaSxsnSrPIOuznWj4KrprnkOLuOLw5vCOkzu6.jpg', '2022-07-13 16:56:52', '2022-07-13 16:56:52'),
(17, 'LPG Management System', '/assets/img/portofolio/KAkCDEbutKkTohIEHAuyaWp7TwzraMpM9yhtxwza.jpg', '2022-07-13 16:57:17', '2022-07-13 16:57:17'),
(18, 'Oil Management System', '/assets/img/portofolio/mryp2iweWLOobxJXmfOVtfRyqVoyWFFNRsJPqJAZ.jpg', '2022-07-13 16:57:30', '2022-07-13 16:57:30'),
(19, 'Purchase Order Management System', '/assets/img/portofolio/yAMOmQh3ciOhNDT2sog2BepFofI6KtuTF3qSP6Su.jpg', '2022-07-13 16:57:52', '2022-07-13 16:57:52'),
(20, 'Queue Management System', '/assets/img/portofolio/EXtMCm5PLbFPNn0jr21wKiNeRvhb82hmEKzX9D91.jpg', '2022-07-13 16:58:09', '2022-07-13 16:58:09'),
(21, 'SMS Gateway', '/assets/img/portofolio/eWd1Xf124NHgSDamVd3I8THpAzeziME1t3Y6a0vH.jpg', '2022-07-13 16:58:38', '2022-07-13 16:58:38'),
(22, 'SPBU Management System', '/assets/img/portofolio/62WW0yWdIq6u4D6KdJriAjxqqF767TDgQldIiHur.jpg', '2022-07-13 16:59:02', '2022-07-13 16:59:02'),
(23, 'Security Checklist Management System', '/assets/img/portofolio/dBeQtOOm6fu5k085re1SHYPu9wAdhmZUhQS9oRc7.jpg', '2022-07-13 16:59:37', '2022-07-13 16:59:37'),
(24, 'Virtual Museum', '/assets/img/portofolio/IGhqd7jtEIFKM6BhIdxcFzRIeJftujCBxpsD8Mjw.jpg', '2022-07-13 17:00:55', '2022-07-13 17:00:55'),
(25, 'Real-Time Monitoring System', '/assets/img/portofolio/VQ95DZAz410Z7J6Qqw1aqC7eMRwEmTIX2mPQ80Bs.jpg', '2022-07-13 17:01:53', '2022-07-13 17:01:53'),
(26, 'E-Ticketing', '/assets/img/portofolio/uK9zjPnUpB3rIxFm8k7GBxN0K1wavpqMylqOy208.png', '2022-07-13 17:02:33', '2022-07-13 17:02:33'),
(27, 'Antrian Online', '/assets/img/portofolio/w5yJ03PPzalS1Z8nEMFMwKXSjXBWuHatcwGQlpfP.png', '2022-07-13 17:02:43', '2022-07-13 17:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `application_name`, `description`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'Real-Time Monitoring System', 'Real Time Monitoring System Menampilkan semua pusat data Anda dan pantau semua Key Performance Indicator (KPI). Lacak kapasitas di beberapa lokasi secara Real-Time untuk mendapatkan gambaran akurat tentang data dan pengaturan kinerja Tim dan Perusahaan Anda.', '/assets/img/product/AYkKFQdEVl1xCiAe88zIkHvCDwC49OtQhP8soncT.png', '2022-07-13 16:39:49', '2022-07-13 16:39:49'),
(2, 'Sistem Informasi Manajemen Rumah Sakit (SIMRS)', 'Sistem Informasi Management Rumah Sakit membantu manajemen rumah sakit dalam menyediakan berbagai bahan pengambilan keputusan (eviden based), mempermudah proses pengklaiman pasien asuransi, memperlancar konektivitas rumah sakit dengan pihak asuransi (BPJS) dalam kegiatan klaim pelayanan, serta mempermudah rumah sakit dalam melakukan perhitungan insentif/ remunerasi bagi seluruh karyawan terutama dokter atau insan medis.', '/assets/img/product/GCIgowGRC3xdrPt2HXvsjYvLkvhRJfdJhIr0vgVm.png', '2022-07-13 16:40:41', '2022-07-13 16:40:41'),
(3, 'Sistem Informasi Manajemen Puskesmas (SIMPUS)', 'Sistem Informasi Manajemen Puskesmas membantu manajemen Puskesmas dalam menyediakan berbagai bahan pengambilan keputusan (eviden based), mempermudah proses pengklaiman pasien asuransi, memperlancar konektivitas Puskesmas dengan pihak asuransi (BPJS) dalam kegiatan klaim pelayanan, serta mempermudah Puskesmas dalam melakukan perhitungan insentif/ remunerasi bagi seluruh karyawan terutama dokter atau insan medis.', '/assets/img/product/6sT05iuEaL97VQtdyORNV2BTY6lfcQoh6LbA8XUv.png', '2022-07-13 16:42:31', '2022-07-13 16:42:31'),
(4, 'Virtual City', 'Satu Aplikasi Untuk Semua Layanan pada suatu Kota sehingga memudahkan bagi setiap penggunannya untuk mendapatkan Informasi mengenai layanan apa saja yang dibutuhkan.', '/assets/img/product/wko6Fw0xpRlp54BkIgMviHB0ydJEHRQMElkkbFvj.png', '2022-07-13 16:43:05', '2022-07-13 16:43:05'),
(5, 'Virtual Management System', 'Sistem Aplikasi Virtual Multifungsi untuk segala kebutuhan dengan menghadirkan tampilan Gambar dan Video Panorama 360 derajat. Sistem ini banyak dipergunakan untuk kebutuhan bisnis seperti Pariwisata, Promosi, sales/marketing, bazaar, Expo, meeting, event organizer, advertising, virtual tour dan lain sebagainya.', '/assets/img/product/ohCvM4VU0VNorSP6V64dEuHSiEzvd5R5HWjCCna4.png', '2022-07-13 16:44:04', '2022-07-13 16:44:04'),
(6, 'Virtual Tracking System', 'Sistem Aplikasi Tracking Online & Digital menjadi salah satu solusi bagi Organisasi yang melaksanakan kegiatan usaha dan untuk memantau segala kegiatan dari mulai Karyawan, Inventory, Visitor, Elektronik, dan lain sebagainya.', '/assets/img/product/k6Eh26jmU8Jgu1qyRnlzbftumVRZTuO1wUK0raQM.png', '2022-07-13 16:44:45', '2022-07-13 16:44:45'),
(7, 'Virtual Pelayanan Terpadu', 'Virtual Public Services adalah Sistem Layanan Umum yang Memberikan solusi pelayanan secara Virtual dengan didukung teknologi yang terbaru sehingga dapat memberikan Pelayanan secara maksimal. Sistem ini sangat cocok bagi Perusahaan / Lembaga yang memiliki bagian Pelayanan Konsumen (Costumer Service).', '/assets/img/product/dpIe5uAOdMY84XC4pLPN64l0a34IbqyDXcOhqFIk.png', '2022-07-13 16:45:30', '2022-07-13 16:45:30'),
(8, 'Sistem Informasi Manajemen Klinik dan Apotik', 'Sistem Informasi Menejemen Khusus untuk Klinik dan Opotik yang dapat membantu Pihak Menejemen dalam mengelola Layanan dan Penjualan Obat. Memudahkan dalam pengendalian Inventori sampai dengan sistem Payment Of Sales (POS).', '/assets/img/product/h26Is3PH6rbtP6wXlbsr49Ci7sWp2hGRvZfvNjxF.png', '2022-07-13 16:46:18', '2022-07-13 16:46:18'),
(9, 'Sistem Informasi Manajemen Perta', 'Sistem Informasi Management Untuk SPBU, SPBBE & Agen LPG sangat layak digunakan untuk membantu tugas manajemen agar lebih efektif dan efisien. Dan dengan dukungan teknologi internet, Anda juga bisa mengambil data yang dibutuhkan pada sistem secara realtime kapanpun dan dimanapun.', '/assets/img/product/iOhEt6o4EFSoFowgMEWkqjM0QR2nlXJ3WnEWVrGx.png', '2022-07-13 16:47:15', '2022-07-13 16:47:15'),
(10, 'Smart Electronic Controlling System', 'Selalu kerepotan jika harus mematikan atau menyalakan manual lampu dan berbagai alat elektronik satu- persatu di Kantor? Dengan Smart Electronic Controlling System kini mematikan peralatan elektronik bisa otomatis dikendalikan dari aplikasi smartphone berbasis Android.', '/assets/img/product/GJHUv3HK7TFMT4Mr0VW8Fn5dz7pf4fWNPJoRQfLn.png', '2022-07-13 16:47:55', '2022-07-13 16:47:55'),
(11, 'Enterprise Resource Planning (ERP)', 'ERP adalah singkatan dari Enterprise Resource Planning yang merupakan software dan sistem yang digunakan untuk merencanakan dan mengelola semua proses dari supply chain, manufaktur, services, keuangan dan proses lain dalam sebuah perusahaan.', '/assets/img/product/m0OiIg1zromyu9ONlJpCfgXkwnqj27Ol3xLLvt5g.png', '2022-07-13 16:48:50', '2022-07-13 16:48:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(2, 'admin', '$2y$10$t2m9rBZ7E85nvygQglUuceKU2MWDhUzu/mgnmBKE5t5iVSTFEZTHW', '2022-07-13 07:49:25', '2022-07-13 16:38:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
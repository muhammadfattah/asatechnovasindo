-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 06:57 AM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `slug`, `thumbnail`, `quote`, `content`, `created_at`, `updated_at`) VALUES
(7, 2, 'Pentingnya Sistem Informasi Dalam Sebuah Organisasi', 'pentingnya-sistem-informasi-dalam-sebuah-organisasi', '/assets/img/article/NhYjABdxKjaOmHWRTOnFsgGrbFCpPNXk9MSbzosm.png', 'Anda tentunya sudah tidak asing lagi dengan kalimat Sistem Informasi bukan? Sistem informasi ini merupakan kumpulan dari komponen yang saling bekerjasama mengelola informasi dalam bentuk data sehingga dapat diproses menjadi lebih mudah untuk berbagai kemudahan dalam sebuah organisasi. Dengan adanya pengelolaan data yang berbasis digital ini memungkinkan segala keputusan juga bisa dibuat dengan lebih mudah sehingga dengan demikian tentunya memudahkan setiap orang dalam bekerja.', '<p style=\"text-align: justify; \">Anda tentunya sudah tidak asing lagi dengan kalimat Sistem Informasi bukan? Sistem informasi ini merupakan kumpulan dari komponen yang saling bekerjasama mengelola informasi dalam bentuk data sehingga dapat diproses menjadi lebih mudah untuk berbagai kemudahan dalam sebuah organisasi. Dengan adanya pengelolaan data yang berbasis digital ini memungkinkan segala keputusan juga bisa dibuat dengan lebih mudah sehingga dengan demikian tentunya memudahkan setiap orang dalam bekerja.</p><p style=\"text-align: justify;\"><br></p><blockquote class=\"blockquote\"><p style=\"text-align: justify;\">\"Beralih kesistem Digital Sekarang Juga Atau Anda Akan Tertinggal\"</p></blockquote><p style=\"text-align: justify; \"><br></p><h4 style=\"text-align: justify;\"><b>HEMAT BIAYA</b></h4><p style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Bagaimana bisa menggunakan system informasi dikatakan hemat biaya? Memang pada awalnya Anda akan membutuhkan biaya saat pertama kali hendak menggunakan system informasi yang baru, namun jika dipikirkan kembali, sebenarnya semua biaya yang Anda keluarkan di awal penggunaannya itu tidak seberapa jika dibandingkan dengan biaya yang perlu Anda keluarkan saat Anda belum menggunakan system informasi digital. Saat semua data dikelola secara manual maka Anda harus mengeluarkan biaya tenaga kerja yang akan mengelolanya, belum lagi alat tulis kantor (ATK) seperti kertas dan tinta yang harus dikeluarkan. Namun dengan system informasi digital berupa aplikasi atau software yang digunakan maka Anda bisa lebih hemat dan memangkas semua kebutuhan biaya tersebut dalam jangka waktu yang panjang.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></p><h4 style=\"text-align: justify;\"><b>LAYANAN SEMAKIN BERKUALITAS</b></h4><p style=\"text-align: justify;\">Sistem informasi ini juga sering kali dikaitkan sebagai solusi dari permasalahan layanan publik. Sering kali banyak masyarakat yang mengeluh karena layanan yang diberikan oleh sebuah instansi publik tidak cukup baik sehingga dengan demikian menyusahkan masyarakat. Dengan adanya system informasi berbasis internet atau digital yang bisa diakses secara online tentunya akan membuat pelayanan publik itu diperbarui menjadi lebih baik lagi, sehingga dengan demikian proses pelayanan publik bisa berjalan dengan lebih cepat.</p><p style=\"text-align: justify;\"><br></p><h4 style=\"text-align: justify;\"><b>DAYA SAING LEBIH BAIK</b></h4><p style=\"text-align: justify;\">Dengan adanya system informasi yang baik di dalam sebuah organisasi maka tentunya bisa menambah nilai atau daya saing sebuah organisasi menjadi lebih baik, karena dengan adanya system informasi yang digunakan itu maka kualitas layanan yang bertambah baik serta proses pengambilan keputusan yang lebih cepat menjadi keunggulan utama yang membuat organisasi Anda menjadi lebih terdepan dibandingkan dengan yang lainnya.</p><p style=\"text-align: justify;\"><br></p><h4 style=\"text-align: justify;\"><b>PENYIMPANAN DATA LEBIH AKURAT</b></h4><p style=\"text-align: justify;\">Untuk tujuan keuangan dan pemecahan masalah maka tentunya sebuah organisasi membutuhkan data yang akurat. Dengan adanya system informasi ini maka data-data dari waktu yang lama pun tentunya akan tersimpan dan terekam dengan baik sehingga dapat dicari lagi di kemudian hari untuk berbagai kebutuhan. Proses pencarian data yang cepat ini tentunya sangat menghemat waktu dan membantu organisasi dalam mengelola semua informasi.</p>', '2022-07-19 03:04:27', '2022-07-19 04:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `article_images`
--

CREATE TABLE `article_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(3, '/assets/catalog/E-Catalog.pdf', '2022-07-14 16:55:49', '2022-07-17 21:32:24');

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
(1, '/assets/img/clients/iosfil7KCcLfQSRNOPzjhsMbDNvV2kNI6TXBM38x.png', '2022-07-13 17:03:46', '2022-07-13 21:23:21'),
(2, '/assets/img/clients/5eWytOI21t68uZy06Vf9jpcOj37kMMbDSlsy0rNI.png', '2022-07-13 17:03:54', '2022-07-13 21:23:08'),
(3, '/assets/img/clients/2JKGaVEfUWJYndDEcvgvoGI6KDrgL9gVkeVXJFIY.png', '2022-07-13 17:04:03', '2022-07-13 21:23:21'),
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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_maps` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `address`, `email`, `website`, `maps`, `street_maps`, `created_at`, `updated_at`) VALUES
(1, '0852-6695-5852', 'Jl. Gagak Hitam (Ringroad) No. 11-12, Kota Medan, Sumatera Utara - Indonesia. 20122.', 'asatechnovasindo@gmail.com', 'www.asatechnovasindo.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.042202466971!2d98.62471281744385!3d3.5777751999999956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312faa37c49e35%3A0x89d51e34a9362f7a!2sASA%20TECH!5e0!3m2!1sid!2sid!4v1657690015784!5m2!1sid!2sid', 'https://www.google.com/maps/embed?pb=!4v1657689647071!6m8!1m7!1sY_h5-HZ416wlf3Mk-_gKsQ!2m2!1d3.577732391111335!2d98.62650194995372!3f83.4742!4f0!5f0.7820865974627469', NULL, '2022-07-14 10:12:05');

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
(7, '2022_07_13_070012_create_products_table', 3),
(8, '2022_07_14_132901_create_sliders_table', 4),
(9, '2022_07_14_135400_create_slider_images_table', 4),
(10, '2022_07_14_143451_create_services_table', 5),
(11, '2022_07_14_153521_create_contacts_table', 6),
(12, '2022_07_14_154526_create_team_contacts_table', 6),
(13, '2022_07_14_231243_create_catalogs_table', 7),
(14, '2022_07_15_065151_create_profiles_table', 8),
(15, '2022_07_15_074201_create_visions_table', 9),
(16, '2022_07_15_074210_create_missions_table', 9),
(17, '2022_07_18_130114_create_articles_table', 10),
(18, '2022_07_18_130201_create_article_images_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `mission`, `created_at`, `updated_at`) VALUES
(1, 'Menciptakan Produk dengan inovasi dan konsep kreatif berbasis Teknologi', '2022-07-15 01:38:22', '2022-07-15 01:39:53'),
(2, 'Menyediakan Produk dan Jasa yang terbaik untuk para konsumen', '2022-07-15 01:38:10', '2022-07-15 01:39:53'),
(3, 'Berperan sebagai inspirator. kreator, inovator, dan konsultan dalam bidang teknologi', '2022-07-15 01:38:42', '2022-07-15 01:38:42');

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
(1, 'Booking System', '/assets/img/portofolio/OuLWPLjLg6NfEWW4zn2MJoxbHKkHoXb9UwiYeDAd.jpg', '2022-07-13 16:51:16', '2022-07-13 21:25:12'),
(2, 'Presensi Online', '/assets/img/portofolio/dHJmMk15yuUu0Lb1sVQlBjl6FxdmcPdgnlLkzx2Q.jpg', '2022-07-13 16:51:33', '2022-07-13 21:25:12'),
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
(1, 'Real-Time Monitoring System', 'Real Time Monitoring System Menampilkan semua pusat data Anda dan pantau semua Key Performance Indicator (KPI). Lacak kapasitas di beberapa lokasi secara Real-Time untuk mendapatkan gambaran akurat tentang data dan pengaturan kinerja Tim dan Perusahaan Anda.', '/assets/img/product/AYkKFQdEVl1xCiAe88zIkHvCDwC49OtQhP8soncT.png', '2022-07-13 16:39:49', '2022-07-14 01:45:18'),
(2, 'Sistem Informasi Manajemen Rumah Sakit (SIMRS)', 'Sistem Informasi Management Rumah Sakit membantu manajemen rumah sakit dalam menyediakan berbagai bahan pengambilan keputusan (eviden based), mempermudah proses pengklaiman pasien asuransi, memperlancar konektivitas rumah sakit dengan pihak asuransi (BPJS) dalam kegiatan klaim pelayanan, serta mempermudah rumah sakit dalam melakukan perhitungan insentif/ remunerasi bagi seluruh karyawan terutama dokter atau insan medis.', '/assets/img/product/GCIgowGRC3xdrPt2HXvsjYvLkvhRJfdJhIr0vgVm.png', '2022-07-13 16:40:41', '2022-07-14 01:45:18'),
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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_2` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_1_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_2_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `section_1`, `section_2`, `section_1_image`, `section_2_image`, `created_at`, `updated_at`) VALUES
(1, 'CV. ASA TECHNOVASINDO adalah Perusahaan yang bergerak dibidang Teknologi Informasi yang berfokus pada Pengembangan Sofware dan Hardware, Penyedia barang dan Jasa Multimedia serta sistem komputerisasi berbasis teknologi untuk mendukung kemajuan perkembangan teknologi global saat ini dan masa mendatang.\r\n\r\nCV. ASA TECHNOVASINDO sumber daya manusia profesional dan berpengalaman dibidangnya sehingga kami dapat memberikan pelayanan terbaik untuk menjamin kepuasaan para konsumen kami.', 'Kami memiliki moto “Berkarya Untuk Bangsa Dan Menjadi Generasi Mandiri” dengan menghadirkan Produk dan Jasa yang bermutu serta berkualitas terbaik bagi semua konsumen kami.\r\n\r\nSeiring perkembangan zaman dan sesuai visi & misi perusahaan CV. ASA TECHNOVASINDO, maka kami akan terus menerus melakukan inovasi demi menjadi perusahaan yang lebih berkompeten demi terwujudnya cita-cita bersama.', '/assets/img/company_profiles/dPfzkKACJvHuMxi7k4zlh1wbl8viNIq2EnBTjnpC.jpg', '/assets/img/company_profiles/onbdG0oh4GW4u4qlMe0UXGBdQA6FHZ87AQPAHPu7.jpg', '2022-07-15 00:06:47', '2022-07-17 20:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'IT Consultant', 'Spesialis teknis yang berfokus pada integrasi teknologi informasi ke dalam bisnis dan menunjukkan kepada klien cara menggunakan teknologi TI secara lebih efisien untuk membantu mencapai tujuan.', '2022-07-14 07:51:57', '2022-07-14 07:54:30'),
(3, 'Apps Development', 'Kami Pengembang Teknologi dalam pembuatan project elektronika Internet of Things (IoT) dengan kontrol sistem kendali untuk semua jenis keperluan Berbasis Internet.', '2022-07-14 07:52:09', '2022-07-14 07:54:30'),
(4, 'Hardware Interface', 'Peran digital marketing consultant sangat dibutuhkan ketika bisnis Anda mengalami kebuntuan menemukan tujuan serta menyusun strategi sehingga kami hadir memberikan Jasa Layanan ini.', '2022-07-14 07:52:38', '2022-07-14 07:52:38'),
(5, 'Web Development', 'Spesialis teknis yang berfokus pada integrasi teknologi informasi ke dalam bisnis dan menunjukkan kepada klien cara menggunakan teknologi TI secara lebih efisien untuk membantu mencapai tujuan.', '2022-07-14 07:53:01', '2022-07-14 07:53:01'),
(6, 'Sistem Integrasi', 'Kami Pengembang Teknologi dalam pembuatan project elektronika Internet of Things (IoT) dengan kontrol sistem kendali untuk semua jenis keperluan Berbasis Internet.', '2022-07-14 07:53:14', '2022-07-14 07:53:14'),
(7, 'Digital Marketing', 'Peran digital marketing consultant sangat dibutuhkan ketika bisnis Anda mengalami kebuntuan menemukan tujuan serta menyusun strategi sehingga kami hadir memberikan Jasa Layanan ini.', '2022-07-14 07:53:27', '2022-07-14 07:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Penuhi Kebutuhan Digitalisasi Usaha Anda', 'Dengan adanya sistem informasi berbasis internet atau digital yang bisa diakses secara online tentunya akan membuat pelayanan publik itu diperbarui menjadi lebih baik lagi, sehingga dengan demikian proses pelayanan publik bisa berjalan dengan lebih cepat', NULL, '2022-07-14 09:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(2, '/assets/img/sliders/XK6SVM5dTfgXb5mEDtfjaOMFtF2Cj2GHvWc64MsS.jpg', '2022-07-14 09:38:05', '2022-07-15 08:35:00'),
(4, '/assets/img/sliders/rfIRPaGN8Y2Y6aAEmj7JAKO5QqxUEUqWH0DKNbt4.jpg', '2022-07-14 07:08:52', '2022-07-15 08:35:00'),
(5, '/assets/img/sliders/GXAUWYEBll8QDghxglcT9wBlAWwL3fwjO1pDJHIh.jpg', '2022-07-14 07:31:36', '2022-07-14 09:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `team_contacts`
--

CREATE TABLE `team_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_contacts`
--

INSERT INTO `team_contacts` (`id`, `name`, `phone`, `position`, `created_at`, `updated_at`) VALUES
(2, 'IT Consultant', '0821-6746-7505', 'IT Consultant', '2022-07-14 09:42:29', '2022-07-14 10:08:29'),
(3, 'Digital Consultant', '0822-7622-5022', 'Digital Consultant', '2022-07-14 10:03:41', '2022-07-14 10:08:37'),
(4, 'ME Consultant', '0852-9703-6088', 'ME Consultant', '2022-07-14 10:04:02', '2022-07-14 10:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin', '$2y$10$KKEGt6TBBcPDY5LQ9DgQuOXpQPwXK3vslwwZaovA7mNiNdSyu8gAO', 'super admin', '2022-07-13 07:49:25', '2022-07-19 03:32:36'),
(4, 'Muhammad Fattah 2', 'muhammadfattah', '$2y$10$ANT..S0o5OBAlN.dXYjbIOFy7WZFR6Wx.LnQLYUtXs1jHwWG3kn8G', 'admin', '2022-07-14 17:51:34', '2022-07-14 22:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vision` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `vision`, `created_at`, `updated_at`) VALUES
(1, 'Menjadi Perusahaan terbaik dalam bidangnya dan berkompeten untuk menjadi pilihan utama Konsumen dan Masyarakat luas', '2022-07-15 01:06:22', '2022-07-15 01:22:06'),
(3, 'Menjadi Perusahaan yang dapat berkarya untuk Bangsa demi terwujudnya Generasi Cerdas dan Mandiri', '2022-07-15 01:35:43', '2022-07-15 01:35:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `missions`
--
ALTER TABLE `missions`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_contacts`
--
ALTER TABLE `team_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `article_images`
--
ALTER TABLE `article_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_contacts`
--
ALTER TABLE `team_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

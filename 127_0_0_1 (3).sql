-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 05:10 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--
CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
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
-- Table structure for table `tour_days`
--

CREATE TABLE `tour_days` (
  `id_day` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_days`
--

INSERT INTO `tour_days` (`id_day`, `id_tour`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hari ini berkumpul di Bandara Soekarno Hatta International Airport untuk penerbangan menuju Haikou yang merupakan ibukota Provinsi Hainan yang merupakan pulau kedua terbesar di China dengan Sriwijaya Air. Setibanya di Haikou Meilan International Airport, ', '2019-06-27 06:27:38', '0000-00-00 00:00:00'),
(2, 1, 'Pagi ini setelah santap pagi, Anda akan diajak berkeliling di Haikou Arcade Ancient Street yang dianggap jalan paling unik di Haikou. Kemudian dilanjutkan menuju Xinglong untuk mengunjungi Desa Bali yaitu sebuah desa dimana bangunan dan betuk arsitektur n', '2019-06-27 06:28:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tour_hours`
--

CREATE TABLE `tour_hours` (
  `id_hour` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `id_day` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_hours`
--

INSERT INTO `tour_hours` (`id_hour`, `id_tour`, `id_day`, `waktu`, `detail`) VALUES
(1, 1, 1, '13:09:00', 'Makan'),
(2, 1, 2, '21:00:00', 'Bobo');

-- --------------------------------------------------------

--
-- Table structure for table `tour_rating`
--

CREATE TABLE `tour_rating` (
  `id_rating` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_rating`
--

INSERT INTO `tour_rating` (`id_rating`, `id_tour`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2019-06-27 06:25:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `travel_exclude_highlights`
--

CREATE TABLE `travel_exclude_highlights` (
  `id_exclude_higlights` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_exclude_highlights`
--

INSERT INTO `travel_exclude_highlights` (`id_exclude_higlights`, `id_tour`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Surcharges during conferences, conventions, trade exhibitions etc', '2019-06-27 06:24:57', '0000-00-00 00:00:00'),
(2, 1, 'Any fluctuation in the rate of exchange which may come into effect prior to the departure.', '2019-06-27 06:24:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `travel_foto`
--

CREATE TABLE `travel_foto` (
  `id_foto` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_foto`
--

INSERT INTO `travel_foto` (`id_foto`, `id_tour`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'TAHITI-BORA- BORA-ALL-INCLUSIVE-HOLIDAY-1118.jpg', '2019-07-11 07:29:21', '0000-00-00 00:00:00'),
(2, 1, '923b7a59cc9a8098d203516b24a0690b--bora-bora-french-polynesia-grass-skirt.jpg', '2019-07-11 07:29:17', '0000-00-00 00:00:00'),
(3, 1, '0b3fcddaa235770d8e8c290a031a67eb.jpg', '2019-07-11 07:29:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `travel_include`
--

CREATE TABLE `travel_include` (
  `id_include` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_include`
--

INSERT INTO `travel_include` (`id_include`, `id_tour`, `id_komponen`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-06-27 06:03:50', '0000-00-00 00:00:00'),
(2, 1, 2, '2019-06-27 06:03:50', '0000-00-00 00:00:00'),
(3, 1, 3, '2019-06-27 06:04:37', '0000-00-00 00:00:00'),
(4, 1, 3, '2019-06-27 06:04:37', '0000-00-00 00:00:00'),
(5, 1, 5, '2019-06-27 06:04:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `travel_include_higlights`
--

CREATE TABLE `travel_include_higlights` (
  `id_include_higlights` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_include_higlights`
--

INSERT INTO `travel_include_higlights` (`id_include_higlights`, `id_tour`, `detail`, `created_at`, `updated_at`) VALUES
(1, 1, 'Round Trip economy class airfare on Air India / Jet Airways Ex Chennai / Bangalore.', '2019-06-27 06:16:23', '0000-00-00 00:00:00'),
(2, 1, '03 Night accommodation at A 3* Hotel City Hub with Breakfast ON TWIN / TRIPLE SHARING BASIS.', '2019-06-27 06:16:23', '0000-00-00 00:00:00'),
(3, 1, '01 Full day pass to Universal Studio in Resort World Sentosa.', '2019-06-27 06:16:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `travel_kategori`
--

CREATE TABLE `travel_kategori` (
  `id_kategori` int(11) NOT NULL,
  `inisial` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_kategori`
--

INSERT INTO `travel_kategori` (`id_kategori`, `inisial`, `nama_kategori`, `icon`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'beach', 'BEACH HOLIDAYS', 'fa fa-soundcloud', 'beach170.jpg', '2019-07-02 03:50:52', '0000-00-00 00:00:00'),
(2, 'boat', 'BOAT HOUSE', 'fa fa-home', 'boat170.jpg', '2019-07-02 03:51:21', '0000-00-00 00:00:00'),
(3, 'adventure', 'ADVENTURE TOURS', 'fa fa-paw', 'adventure.jpg', '2019-07-02 03:52:32', '0000-00-00 00:00:00'),
(4, 'honeymoon', 'HONEYMOON PACKAGE', 'fa fa-birthday-cake', 'honeymoon170.jpg', '2019-07-02 03:54:52', '0000-00-00 00:00:00'),
(5, 'wingride', 'WING RIDE IN FOREST', 'fa fa-pied-piper-alt', 'forest170.jpg', '2019-07-02 03:54:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `travel_komponen`
--

CREATE TABLE `travel_komponen` (
  `id_komponen` int(11) NOT NULL,
  `nama_komponen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_komponen`
--

INSERT INTO `travel_komponen` (`id_komponen`, `nama_komponen`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Transport', 'fa fa-car', '2019-06-27 05:58:59', '0000-00-00 00:00:00'),
(2, 'Flights', 'fa fa-plane', '2019-06-27 06:02:39', '0000-00-00 00:00:00'),
(3, 'Sight Seeing', 'fa fa-binoculars', '2019-06-27 06:02:39', '0000-00-00 00:00:00'),
(4, 'Food', 'fa fa-cutlery', '2019-06-27 06:03:21', '0000-00-00 00:00:00'),
(5, 'Hotel', 'fa fa-building-o', '2019-06-27 06:03:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `travel_tour`
--

CREATE TABLE `travel_tour` (
  `id_tour` int(11) NOT NULL,
  `id_agen` int(11) NOT NULL,
  `nama_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `orang` int(11) NOT NULL,
  `tgl_keberangkatan` datetime NOT NULL,
  `tgl_start` datetime NOT NULL,
  `tgl_end` datetime NOT NULL,
  `hari` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_highlit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_ar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_tour`
--

INSERT INTO `travel_tour` (`id_tour`, `id_agen`, `nama_tour`, `biaya`, `orang`, `tgl_keberangkatan`, `tgl_start`, `tgl_end`, `hari`, `deskripsi`, `foto_highlit`, `created_at`, `updated_ar`) VALUES
(1, 1, 'Discover Australia', 6500000, 20, '2019-06-30 00:00:00', '2019-06-26 00:00:00', '2019-06-29 00:00:00', 3, 'Australia diberkahi dengan sejumlah lingkungan alam paling khas dan beragam di muka bumi ini. Anda akan menjumpai lanskap dan margasatwa nan memukau, termasuk beragam taman nasional dan Area Warisan Dunia. Temukan hutan kuno di tepi perkotaan modern, daki pegunungan berselimut salju, dan berenanglah di beberapa perairan paling murni di dunia. Anda juga berkesempatan untuk bercengkerama dengan satwa Australia di habitat alaminya: bersnorkel bersama penyu laut di Great Barrier Reef, berjalan bersama kuoka imut di Rottnest Island, serta saksikan parade penguin mungil setiap harinya di Phillip Island. Ini hanyalah sekelumit pengalaman alam Australia yang tentunya sayang dilewatkan. ', 'TAHITI-BORA- BORA-ALL-INCLUSIVE-HOLIDAY-1118.jpg', '2019-07-16 14:21:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_original` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `avatar_original`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '108182194731860336389', 'Chandra Ramdhan', 'chandraramdhanpurnama@gmail.com', '2019-06-24 16:17:28', '$2y$10$mWGCQbIfWoCQA6TtBIg60.3xms4ID3i/KOlnDMl8U.UqfeRdnGySi', 'https://lh6.googleusercontent.com/-vVXeBHM7mlo/AAAAAAAAAAI/AAAAAAAAAuo/Age4oWujKEg/photo.jpg', 'https://lh6.googleusercontent.com/-vVXeBHM7mlo/AAAAAAAAAAI/AAAAAAAAAuo/Age4oWujKEg/photo.jpg', 'GemKfkaJ7CbTHpDJCQReFzWbkdocYGh6lOr3hZ1K7mJiaAVMcs00qeqZzKry', '2019-06-24 16:17:28', '2019-06-24 16:43:53'),
(5, NULL, 'Chan', '160613024chandra@gmail.com', NULL, '$2y$10$cfmizsyU2DuNCrCb/1FDG.2vC3qcYXZ47HnMxMqLC3IqmF.CSh/i6', NULL, NULL, NULL, '2019-06-24 16:49:38', '2019-06-24 16:49:38'),
(6, '104957535707842183670', 'Maulana Sutejo', '900maulana@gmail.com', '2019-06-26 06:02:25', '$2y$10$/.8bfCCMWYW4YcEHcNNznOmdSJ4mye9MiSjL4OdWE74KDebDm.aMG', 'https://lh5.googleusercontent.com/-pPNCVYFuCx8/AAAAAAAAAAI/AAAAAAAAABE/Iw0HTeB5JhE/photo.jpg', 'https://lh5.googleusercontent.com/-pPNCVYFuCx8/AAAAAAAAAAI/AAAAAAAAABE/Iw0HTeB5JhE/photo.jpg', 'bMbxBiWpIAkjci84q3mMw0yqrfLUGJjP2jufdgMHm94mnNPaBZgZiJpR1lV4', '2019-06-26 06:02:25', '2019-06-26 06:02:45'),
(7, '114530502738680398153', 'game acc', 'gameacc15s3@gmail.com', '2019-06-27 04:13:21', '$2y$10$kizWL8On7LZ/cL1IN1ceeOLtA5.LT0oA1ZGBi0odT7sXjJQc5m0CG', 'https://lh4.googleusercontent.com/-2s-ZbJxvEek/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rer41GK_-3P3JN1FWz6OmNT8wCk1Q/photo.jpg', 'https://lh4.googleusercontent.com/-2s-ZbJxvEek/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rer41GK_-3P3JN1FWz6OmNT8wCk1Q/photo.jpg', 'yDUMc5XgJux84iBwyFekjtfLpovp4TpPWP4nJR1jxPmR8kLLj7K2qKV5ptiT', '2019-06-27 04:13:21', '2019-06-27 04:13:55'),
(8, NULL, 'fauzan', 'fauzanasyari4@gmail.com', NULL, '$2y$10$ALqM8ktizNqKNsvXASbqqOBdN94eFG/HWLQfgD54SPpYc3aWa7Qra', NULL, NULL, NULL, '2019-06-27 04:40:15', '2019-06-27 04:40:15'),
(9, '112953207119065311474', 'Hanif', 'naufalhanif037@gmail.com', '2019-06-27 04:49:38', '$2y$10$9lA0QXgLcr0Jc9jvs89ASuju6t5i5m9qxoarhv7jjI9am31kxf6Ji', 'https://lh6.googleusercontent.com/-NaKlW9jn8Gc/AAAAAAAAAAI/AAAAAAAAC58/RD3NUbbf2hY/photo.jpg', 'https://lh6.googleusercontent.com/-NaKlW9jn8Gc/AAAAAAAAAAI/AAAAAAAAC58/RD3NUbbf2hY/photo.jpg', 'SrLgxHsP6Stxk4PBSrvaIxgIe5tZiJej23XDLRVqJv4Pqmh2zcRlBJ2a1Qcq', '2019-06-27 04:47:04', '2019-06-27 05:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_agent`
--

CREATE TABLE `user_agent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_original` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_agent`
--

INSERT INTO `user_agent` (`id`, `google_id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `avatar_original`, `remember_token`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '108182194731860336389', 'PT. CIPAGANTI', 'chandraramdhanpurnama@gmail.com', '2019-06-24 16:17:28', '$2y$10$mWGCQbIfWoCQA6TtBIg60.3xms4ID3i/KOlnDMl8U.UqfeRdnGySi', 'https://lh6.googleusercontent.com/-vVXeBHM7mlo/AAAAAAAAAAI/AAAAAAAAAuo/Age4', 'https://lh6.googleusercontent.com/-vVXeBHM7mlo/AAAAAAAAAAI/AAAAAAAAAuo/Age4oWujKEg/photo.jpg', 'GemKfkaJ7CbTHpDJCQReFzWbkdocYGh6lOr3hZ1K7mJiaAVMcs00qeqZzKry', 'Unit Bisnis yang melayani Tours & Airlines Ticketing yang melayani beberapa layanan seperti jasa penjualan tiket penerbangan baik Domestik atau Internasional dan jasa tour domestik maupun internasional, program M.I.C.E (Meeting, Insentive, Conference, Exhibition).', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_days`
--
ALTER TABLE `tour_days`
  ADD PRIMARY KEY (`id_day`);

--
-- Indexes for table `tour_hours`
--
ALTER TABLE `tour_hours`
  ADD PRIMARY KEY (`id_hour`);

--
-- Indexes for table `tour_rating`
--
ALTER TABLE `tour_rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD UNIQUE KEY `id_tour` (`id_tour`);

--
-- Indexes for table `travel_exclude_highlights`
--
ALTER TABLE `travel_exclude_highlights`
  ADD PRIMARY KEY (`id_exclude_higlights`);

--
-- Indexes for table `travel_foto`
--
ALTER TABLE `travel_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `travel_include`
--
ALTER TABLE `travel_include`
  ADD PRIMARY KEY (`id_include`);

--
-- Indexes for table `travel_include_higlights`
--
ALTER TABLE `travel_include_higlights`
  ADD PRIMARY KEY (`id_include_higlights`);

--
-- Indexes for table `travel_kategori`
--
ALTER TABLE `travel_kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `inisial` (`inisial`);

--
-- Indexes for table `travel_komponen`
--
ALTER TABLE `travel_komponen`
  ADD PRIMARY KEY (`id_komponen`);

--
-- Indexes for table `travel_tour`
--
ALTER TABLE `travel_tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_agent`
--
ALTER TABLE `user_agent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_days`
--
ALTER TABLE `tour_days`
  MODIFY `id_day` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour_hours`
--
ALTER TABLE `tour_hours`
  MODIFY `id_hour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour_rating`
--
ALTER TABLE `tour_rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travel_exclude_highlights`
--
ALTER TABLE `travel_exclude_highlights`
  MODIFY `id_exclude_higlights` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travel_foto`
--
ALTER TABLE `travel_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `travel_include`
--
ALTER TABLE `travel_include`
  MODIFY `id_include` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel_include_higlights`
--
ALTER TABLE `travel_include_higlights`
  MODIFY `id_include_higlights` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `travel_kategori`
--
ALTER TABLE `travel_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel_komponen`
--
ALTER TABLE `travel_komponen`
  MODIFY `id_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel_tour`
--
ALTER TABLE `travel_tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_agent`
--
ALTER TABLE `user_agent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

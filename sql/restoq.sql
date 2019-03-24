-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 08:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoq`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_10_14_045105_create_mahasiswas_table', 1),
('2017_12_02_154207_create_restaurants_table', 1),
('2017_12_02_162430_create_restaurant_tables_table', 1),
('2017_12_02_165143_create_reservations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `restaurant_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `type`, `description`, `rating`, `address`, `city`, `phone`, `email`, `image`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Ta Wan', 'Chineese Food', 'Ta Wan adalah tempat berkumpulnya kehangatan sejak  tahun 1996. Mulai dari hangatnya kekerabatan sampai hangatnya percakapan dua insan, semua bertemu bersama dengan kehangatan beragam menu Ta Wan.', 4, 'Mall Central Park Lantai 3 No. 203, Jalan Letjen. S. Parman No. 28', 'Jakarta Barat', '02129200486', 'tawanrestaurant@gmail.com', 'TaWan.jpg', 'a', NULL, NULL),
(2, 'Burger King', 'Fast Food', 'Burger King adalah restoran fast food asal Amerika yang menyajikan menu utama burger. Burger King memiliki ribuan cabang yang tersebar di seluruh dunia.', 4, 'Hayam Wuruk Plaza II Lantai 1, Jalan Hayam Wuruk No.108', 'Jakarta Barat', '0216241221', 'contact@burgerking.com', 'BurgerKing.jpg', 'na', NULL, NULL),
(3, 'Dharma Kitchen', 'Vegetarian', 'Dharma Kitchen (dahulu bernama Citarasa Restaurant) telah menjadi restoran vegetarian favorit yang melayani selama lebih dari 20 tahun. Sekarang kami melakukan peremajaan dan pengembangan variasi menu vegetarian. Kami merasa bahagia memiliki kesempatan untuk melayani dan mempersembahkan kenikmatan masakan kami untuk Anda.', 4, 'Central Park Mall. Jl. Letjen S. Parman No.28', 'Jakarta Barat', '02129200018', 'order@dharmakitchen.com', 'DharmaKitchen.jpg', 'na', NULL, NULL),
(4, 'Ippudo', 'Japanese Food', 'IPPUDO is one of the best Japanese restaurant in Jakarta serving only the best ramen with highest quality of ingredients.', 5, 'Pacific Place Mall.Jl. Jend. Sudirman No.52-53', 'Jakarta Selatan', '02157973339', 'ippudo@gmail.com', 'Ippudo.jpg', 'na', NULL, NULL),
(5, 'Imperial Kitchen', 'Chineese Food', 'Since its establishment in 1993, Imperial Group’s Restaurant has earned a reputation for excellence due to its cuisine quality, fine service, delicious food, reasonable price and pleasant atmosphere.', 4, 'Transmart Carrefour Cempaka Putih, Lt.Dasar, Jalan Jend Ahmad Yani No. 83', 'Jakarta Pusat', '0217805972', 'order@imperialkitchen.com', 'ImperialKitchen.jpg', 'na', NULL, NULL),
(6, 'Kentucky Fried Chicken', 'Fast Food', 'KFC (Kentucky Fried Chicken) adalah salah satu restoran rantai terbesar di dunia. yang berkantor pusat di Louisville, Kentucky, Amerika Serikat. sebuah “ikon Amerika” restoran terbesar kedua setelah McDonald, dengan lebih 17.000 outlet di 105 negara dan berapa wilayah. KFC didirikan oleh Kolonel Harland Sanders, yang mulai menjual ayam goreng nya dari pinggir jalan restoran di Corbin, Kentucky.', 5, 'Mall Ciputra.Jl. Jend. S.Parman, Grogol', 'Jakarta Barat', '0215681539', 'order@kfc.com', 'KFC.jpg', 'na', NULL, NULL),
(7, 'Sushi Tei', 'Japanese Food', 'PT Sushi Tei Indonesia opened its first outlet in Jakarta in 2003, bringing the renowned Japanese restaurant brand to sushi enthusiasts in Indonesia. Currently there are thirty five Sushi Tei outlets in total nationwide, with eighteen of them spread across Greater Jakarta.', 5, 'Mall Central Park. Jl. Letjen S. Parman No.28', 'Jakarta Barat', '02156985276', 'order@sushitei.com', 'SushiTei.jpg', 'na', NULL, NULL),
(8, 'Paradise Dynasty', 'Chineese Food', 'Paradise Dynasty adalah restoran chinese food keluarga yang menyajikan makanan dengan bahan baku kualitas terbaik. Kami selalu mengutamakan mutu dan kualitas makanan yang kami sediakan.', 5, 'Mall Central Park. Jl. Letjen S. Parman No.28', 'Jakarta Barat', '02129200352', 'Paradisedynastyresto@ymail.com', 'ParadiseDynasty.jpg', 'na', NULL, NULL),
(9, 'Pizza Hut', 'Fast Food', 'Pizza hut adalah restoran yang menyediakan pizza, merupakan restoran pizza terbesar di Indonesia. Kami menyajikan pizza dengan bahan baku kualitas terbaik untuk menjamin kualitas hidangan yang anda santap.', 5, 'Mal Taman Anggrek Lt. 3, Jl. Letjen. S. Parman Kav. 21,', 'Jakarta Barat', '08113249030', 'pizzahut@gmail.com', 'PizzaHut.jpg', 'na', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_tables`
--

CREATE TABLE `restaurant_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `table_number` int(11) NOT NULL,
  `max_people` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `date_of_birth`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shanti Setiani', 'Female', '1997-12-01', 'shantisetiani01@gmail.com', '$2y$10$sMsDcFWpObZlTj/McXpIKO7JGsD7JLT9Bs75bCOuaM3gMg1J5lBlq', '087775030627', 'Royal Mediterania Garden Residences', NULL, '2017-12-06 23:04:57', '2017-12-06 23:04:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

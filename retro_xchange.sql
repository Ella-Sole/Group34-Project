-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2025 at 05:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retro_xchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items_for_sale`
--

CREATE TABLE `items_for_sale` (
  `item_id` int(11) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_stock` int(11) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_description` text DEFAULT NULL,
  `category` enum('ps3','ps3 console','ps4','ps4 console','xbox one','xbox one console','xbox 360','xbox 360 console','switch','switch console','3ds','2ds','ds','gameboy colour','xbox','psp','psvita','wii','wii console','wiiu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items_for_sale`
--

INSERT INTO `items_for_sale` (`item_id`, `item_price`, `item_name`, `item_stock`, `item_image`, `item_description`, `category`) VALUES
(1, 19.99, 'Red Dead Redemption', 5, '71W0shS7ylL._AC_SL1000', 'Third-person action-adventure game', 'ps3'),
(2, 10.00, 'Fallout 4', 7, '812nlgWkM6L.AC_SL1500', 'Single-player action RPG game', 'xbox one'),
(3, 30.00, 'The Legend of Zelda: Tears of the Kingdom', 11, '81eHh0BNU0L._AC_SL1500', 'Open-world action-adventure game', 'switch'),
(4, 20.00, 'Super Mario 3D All Stars', 8, '81Xi9uVRf4L.AC_SL1500', 'Compilation game including Super Mario 64, Super Mario Sunshine and Super Mario Galaxy', 'switch'),
(5, 15.00, 'GTA V', 15, '91Y4xD7QGNL.AC_SL1500', 'Action-adventure game', 'xbox 360'),
(6, 5.99, 'FIFA 21', 0, '91KwPLW4BqL._AC_SL1500_', 'Football game', 'ps4'),
(7, 30.00, 'Animal Crossing: New Horizons', 16, '81s8etnYPrL._AC_SL1500_', 'Social simulation game', 'switch'),
(8, 30.00, 'Hades', 9, '81TzcunnxZL._AC_SL1500_', 'Rouguelike action RPG game', 'ps4'),
(9, 17.00, 'Nintendo Wii Remote', 3, '613MCdoJsKL._AC_SX679_', 'Remote controller', 'wii console'),
(10, 18.00, 'Ceozon Ps3 Controller', 12, '61s0qrNZJ9L._AC_SX385_', 'Dual Vibration', 'ps3 console'),
(11, 20.00, 'Generic Ps4 Controller', 5, '71AELNYsd1L._AC_SX466_', 'Gamepad Joystick', 'ps4 console'),
(12, 90.00, 'Xbox 360 Elite Console', 10, '61IlbDSM31L._AC_SY500_', '120GB Hard Drive', 'xbox 360 console'),
(13, 213.00, 'Sony PlayStation 4 Console', 13, '61nxfegwhDL.__AC_SX300_SY300_QL70_ML2_', '1TB Black (Renewed)', 'ps4 console'),
(14, 160.00, 'Microsoft Xbox One S', 12, '61KtYZcXXML.__AC_SY300_SX300_QL70_ML2_', '500GB (renewed)', 'xbox one console'),
(15, 250.00, 'Nintendo Switch (OLED Model)', 3, '71m0aFDqciL._AC_SX522_', '64GB white model', 'switch console');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_08_231041_create_items_for_sale_table', 1),
(5, '2024_12_08_231043_create_payment_method_table', 1),
(6, '2024_12_08_231044_create_personal_details_table', 1),
(7, '2024_12_08_231045_create_purchase_history_table', 1),
(8, '2024_12_08_231046_create_user_details_table', 1),
(9, '2025_03_08_222219_create_purchased_items_table', 1),
(10, '2025_03_23_135747_create_user_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `card_name_holder` varchar(50) DEFAULT NULL,
  `account_number` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `personal_details_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` enum('Male','Female','Other','Prefer not to say') DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postcode` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`personal_details_id`, `first_name`, `middle_name`, `last_name`, `gender`, `phone_number`, `address`, `postcode`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchased_items`
--

CREATE TABLE `purchased_items` (
  `purchase_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `purchase_status` enum('purchased','out for delivery','delivered','returned','not delivered/shipment lost') NOT NULL DEFAULT 'purchased'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `purchase_id` int(11) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `date_of_purchase` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_status` enum('Normal','Admin') NOT NULL DEFAULT 'Normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `user_status`) VALUES
(1, 'admin@gmail.com', '$2y$12$Sp/9ZAyxEMbm0/40PtJDq.mHzohHoARSkIAKc3hRDfzL.V28JBUZ.', NULL, '2025-02-10 20:00:01', NULL, 'Admin'),
(2, 'user@gmail.com', '$2y$12$xfISKMjQ.Cwqo3kN8SNyyeTF609cmBZRVpqtF12mc586c4rPsDNtC', NULL, '2025-03-22 16:14:05', NULL, 'Normal'),
(3, 'bob@gmail.com', '$2y$12$0viqrrNiy3DCrIbKAyj7we4gFjMcZSCoojMuCLLgDos/hUOLKcsHO', NULL, '2025-03-20 13:10:12', NULL, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `details_id` int(11) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `personal_details_info` int(11) DEFAULT NULL,
  `payment_method` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`details_id`, `users_id`, `personal_details_info`, `payment_method`) VALUES
(1, 1, 1, NULL),
(2, 2, 2, NULL),
(3, 3, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `review_id` int(11) NOT NULL,
  `game_reviewed` int(11) NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL,
  `review` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items_for_sale`
--
ALTER TABLE `items_for_sale`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`personal_details_id`);

--
-- Indexes for table `purchased_items`
--
ALTER TABLE `purchased_items`
  ADD KEY `purchased_items_purchase_id_foreign` (`purchase_id`),
  ADD KEY `purchased_items_item_id_foreign` (`item_id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `purchase_history_users_id_foreign` (`users_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`details_id`),
  ADD UNIQUE KEY `fkPersonalDetails` (`personal_details_info`),
  ADD KEY `user_details_users_id_foreign` (`users_id`),
  ADD KEY `fkPaymentMethod` (`payment_method`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `fkItemIdForReview` (`game_reviewed`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items_for_sale`
--
ALTER TABLE `items_for_sale`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `personal_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchased_items`
--
ALTER TABLE `purchased_items`
  ADD CONSTRAINT `purchased_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items_for_sale` (`item_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchased_items_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchase_history` (`purchase_id`) ON DELETE CASCADE;

--
-- Constraints for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD CONSTRAINT `purchase_history_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `fkPaymentMethod` FOREIGN KEY (`payment_method`) REFERENCES `payment_method` (`payment_method_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fkPersonalDetails` FOREIGN KEY (`personal_details_info`) REFERENCES `personal_details` (`personal_details_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_details_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD CONSTRAINT `fkItemIdForReview` FOREIGN KEY (`game_reviewed`) REFERENCES `items_for_sale` (`item_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

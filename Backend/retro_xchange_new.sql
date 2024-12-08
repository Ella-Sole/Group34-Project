-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 08:44 PM
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
-- Table structure for table `items_for_sale`
--

CREATE TABLE `items_for_sale` (
  `item_id` int(11) NOT NULL,
  `item_price` decimal(10,0) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_description` text DEFAULT NULL,
  `category` enum('ps3','ps4','xbox one','xbox 360','switch','3ds','2ds','ds','gameboy colour','xbox','psp','psvita','wii','wiiu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_id` int(9) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(65535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(9) NOT NULL,
  `card_name_holder` varchar(50) DEFAULT NULL,
  `account_number` int(16) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `personal_details_id` int(9) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Other','Prefer not to say') NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `receipt_id` int(15) NOT NULL,
  `purchased_item` int(11) NOT NULL,
  `date_of_purchase` datetime NOT NULL,
  `purchase_status` enum('purchased','out for delivery','delivered','returned','not delivered/shipment lost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(9) NOT NULL,
  `login_info` int(9) NOT NULL,
  `personal_details_info` int(9) NOT NULL,
  `payment_metod` int(11) NOT NULL,
  `purchase_history` int(11) NOT NULL,
  `user_status` enum('Normal','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items_for_sale`
--
ALTER TABLE `items_for_sale`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_id`);

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
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `fkPurchasedItem` (`purchased_item`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `fkLoginDetails` (`login_info`) USING BTREE,
  ADD UNIQUE KEY `fkPersonalDetails` (`personal_details_info`) USING BTREE,
  ADD KEY `fkPaymentMethod` (`payment_metod`),
  ADD KEY `fkPurchaseHistory` (`purchase_history`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items_for_sale`
--
ALTER TABLE `items_for_sale`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `personal_details_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `receipt_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD CONSTRAINT `fkPurchasedItem` FOREIGN KEY (`purchased_item`) REFERENCES `items_for_sale` (`item_id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `fkLoginDetails` FOREIGN KEY (`login_info`) REFERENCES `login_details` (`login_id`),
  ADD CONSTRAINT `fkPaymentMethod` FOREIGN KEY (`payment_metod`) REFERENCES `payment_method` (`payment_method_id`),
  ADD CONSTRAINT `fkPersonalDetails` FOREIGN KEY (`personal_details_info`) REFERENCES `personal_details` (`personal_details_id`),
  ADD CONSTRAINT `fkPurchaseHistory` FOREIGN KEY (`purchase_history`) REFERENCES `purchase_history` (`receipt_id`);

INSERT INTO `items_for_sale` (`item_id`, `item_price`, `item_name`, `item_image`,`item_description`,`category`) VALUES
(1, 10, 'Red Dead Redemption', '71W0shS7ylL._AC_SL1000','Action Survival','ps3'),
(2, 4, 'Fallout 4', '812nlgWkM6L.AC_SL1500','Action RPG','xbox one'),
(3, 13, 'Legend of Zelda Breath of the Wild', '81eHh0BNU0L._AC_SL1500','Action Adventure','switch'),
(4, 20, 'Super Mario 64', '81Xi9uVRf4L.AC_SL1500','Action platformer','switch'),
(5, 15, 'GTA V', '91Y4xD7QGNL.AC_SL1500','Action Platformer','xbox 360'),
(6, 2, 'FIFA 21','91KwPLW4BqL._AC_SL1500_','Football','ps4'),
(7,30,'Animal Crossing: New Horizons','81s8etnYPrL._AC_SL1500_','Social Simulation','switch');
COMMIT;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 01:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larava`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 is selling 1 is out of 2 is stop sell',
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 is sell on home 1 is not',
  `time_create` datetime NOT NULL,
  `time_del` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `cate_name`, `status`, `type`, `time_create`, `time_del`) VALUES
(1, '   Men T-shirt ', 0, 0, '2023-02-16 16:35:37', NULL),
(2, 'Women Dress', 1, 0, '2023-02-16 16:48:44', NULL),
(3, 'Polo', 2, 0, '2023-02-16 17:29:20', NULL),
(4, 'Kids', 1, 0, '0000-00-00 00:00:00', NULL),
(5, 'Bags', 1, 0, '0000-00-00 00:00:00', NULL),
(6, ' Men shcc', 0, 0, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `phone_user` varchar(20) NOT NULL,
  `adress_user` varchar(255) NOT NULL,
  `total_price` float NOT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `name_prd` varchar(255) NOT NULL,
  `quantity_prd` int(11) NOT NULL,
  `price_prd` float NOT NULL,
  `time_create` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `prd_price` float NOT NULL,
  `prd_quantity` int(30) NOT NULL,
  `prd_img` varchar(255) NOT NULL,
  `prd_type` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `cate_id` varchar(255) NOT NULL,
  `time_create` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prd_name`, `prd_price`, `prd_quantity`, `prd_img`, `prd_type`, `status`, `cate_id`, `time_create`, `updated_at`) VALUES
(1, 'Easy Polo Black Editions', 50, 100, 'product12.jpg', 0, 0, 'Polo', NULL, '2023-02-18 15:56:40'),
(2, 'Easy T-Shirt White Edition', 61, 2156, 'test2.png', 0, 0, 'Polo', NULL, '2023-02-18 15:45:09'),
(4, 'ghgwgw', 23, 4214, 'test2.png', 0, 0, 'Women Dress', NULL, '2023-02-18 15:46:50'),
(5, 'sadadd', 50, 21312, 'sd', 0, 0, '    Men shirt ', NULL, '2023-02-18 15:46:57'),
(6, 'fafaf', 34, 324, 'test2.png', 1, 0, 'Kids', NULL, '2023-02-18 15:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `phone`, `type`) VALUES
(1, 'user1', '123', '123456', 0),
(2, 'user2', '123', '123485', 0),
(3, 'admin1', '123', '11411', 1),
(4, 'user2', '123', '123485', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prd_name` (`prd_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

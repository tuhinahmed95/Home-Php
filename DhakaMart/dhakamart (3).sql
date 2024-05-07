-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 04:57 AM
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
-- Database: `dhakamart`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(4, 'Samsung'),
(5, 'Philips'),
(6, 'Oppo'),
(7, 'HP'),
(8, 'Dell'),
(9, 'Sony'),
(10, 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `brand_id`) VALUES
(129, 'Electronics', 4),
(130, 'Iron', 5),
(131, 'Monitor', 7),
(132, 'Mouse', 7),
(133, 'Mobile', 6),
(134, '---', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `previous_price` double(10,2) DEFAULT NULL,
  `discount` double(10,2) DEFAULT NULL,
  `present_price` double(10,2) DEFAULT NULL,
  `brand_id` varchar(100) DEFAULT NULL,
  `cat_id` int(100) DEFAULT NULL,
  `sub_cat_id` int(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `coupon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `previous_price`, `discount`, `present_price`, `brand_id`, `cat_id`, `sub_cat_id`, `quantity`, `unit`, `coupon`) VALUES
(8, 'https://i.ibb.co/MDz0zPT/32702.png', 'Dress', 455.00, 4.00, 344.00, 'Philips', 112, 38, '3', 'Pound', '4tt'),
(10, 'https://ibb.co/XLQRsHd', 'Pant', 744.00, 4.00, 455.00, 'Samsung', 115, 40, '300', 'Piece', '#$6th'),
(11, '', '', 0.00, 0.00, 0.00, 'Samsung', 129, 47, '0', 'KG', ''),
(12, '', '', 0.00, 0.00, 0.00, '', 129, 47, '0', 'KG', ''),
(13, '', '', 0.00, 0.00, 0.00, '', 129, 48, '0', 'KG', ''),
(14, '', '', 0.00, 0.00, 0.00, '', 129, 47, '0', 'KG', ''),
(18, 'https://ibb.co/XLQRsHd', 'Mahmuda Binte Sayeed', 744.00, 0.00, 455.00, '4', 129, 47, '200', 'KG', '5ee'),
(19, 'https://ibb.co/XLQRsHd', 'Phone', 744.00, 4.00, 455.00, '4', 129, 47, '3000', 'KG', '4r4ui');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `cat_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `brand_id`, `cat_id`) VALUES
(47, 'Mobile', 4, 129),
(48, 'Fridge', 10, 129),
(49, 'AC', 5, 130);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

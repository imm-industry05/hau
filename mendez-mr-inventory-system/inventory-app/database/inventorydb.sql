-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 05:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+08:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--
CREATE DATABASE IF NOT EXISTS inventorydb;

USE inventorydb;

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2a$10$I3qKkNLEUGVIqbGCNyydSOovA5t.0385z7.BQI2vc8IuHms1U3dgi');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`) VALUES
(1, 'adones', '$2a$10$gPlX7FlRFIwcB9E.N4MjROEdryV2MnsMfmFzv6ZAgmKI7u254heVW');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'ordered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `descr` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descr`, `price`, `stock`, `picture`) VALUES
(1, 'All Natural Soap', 'Cleanse, moisturize and soothe your skin with all natural handmade soap made with organic oils and plant butters, pure essential oils, organic herbs, and spices. ', 126, 100, 'afc7eae2c9b20daad05728da662f3c65.jpg'),
(2, 'Unscented Baby Powder', 'An organic baby powder for delicate skin formulated with finely milled vegetable root powders, skin soothing botanicals and silky clay that work together to absorb moisture.', 520, 100, 'organic_natural_baby_skin_care_products-16.jpg'),
(4, 'Lip Balm: Healing Herbs', 'An organic lip balm made with soothing oils and botanicals that moisturize and help promote healing.', 560, 100, 'c335c6e65ac8c9327bf5bd023e38a3b1.jpg'),
(5, 'Deodorant: Coconut Cream', 'An organic cream deodorant made with soothing ingredients that effectively neutralize odor and plant-based powders that help absorb wetness, so you stay fresh naturally.', 122, 100, '40e14cf92b6d21976908d25fa136ccbf.jpg'),
(6, 'Xanthone Plus Capsule', 'The best medicine for health issues', 250, 100, '6b72346f80fb5478f34ef8558e4be80d.jpg'),
(7, 'Malunggay Medicine', 'Moringa Oleifera or locally known as Malungay, is widely used as a vegetable ingredient in cooking. It is a popular plant known for high nutritional value as well as an herbal medicine a number of illness and other practical uses.', 350, 100, 'bc0cd8fd7a3bcfa86a8efad5effa452e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

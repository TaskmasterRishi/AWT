-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 08:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE `shop_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`) VALUES
(1, 'Apple iPhone', 'The iPhone 7, with its amazing features and drool-worthy design, looks every bit as efficient as it is. With a powerful processor and ample internal storage, this smartphone offers you a seamless performance.', 'APPM01', 'apple-iphone-7.jpeg', 39999),
(2, 'Samsung On5', 'With a leathery feel, the Samsung Galaxy On5 has a classy look with a thin frame that provides you a comfortable steady grip. The quick launch feature in the phone lets you capture moments easily by pushing the home button twice. With a Palm Gesture Selfie feature, a wide viewing angle and the Beauty Shot mode, the camera gives you rewarding selfie experiences.', 'SAMM01', 'samsung-galaxy-on5.jpeg', 7990),
(3, 'OPPO F3 Plus', '\r\nFeaturing a 1.95 GHz Qualcomm Snapdragon MSM8976 Pro processor, an Adreno 510 GPU and 4 GB of RAM, the OPPO F3 Plus offers fast and fluid multitasking. It comes with a 4000-mAh battery that won’t call it a day until you do.', 'OPPM01', 'oppo-f3-plus.jpeg', 24595),
(4, 'Asus Zenfone', 'Asus Zenfone 3s Max (Gold, 32 GB)  (3 GB RAM)', 'AUSM01', 'asus-zenfone-3s-max.jpeg', 8984);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

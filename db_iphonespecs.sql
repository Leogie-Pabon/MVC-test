-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 07:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_iphonespecs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category_name`, `description`) VALUES
(1, 'Base Model', 'Base model of iphone, not S, Plus, Pro, and Pro Max'),
(2, 'S model', 'S model of an iphone, much better specs than base model'),
(3, 'Plus model', 'Plus model of an iphone, much better specs than S model'),
(25, 'Pro model', 'Pro model of an iphone, only available on iphone 11 above'),
(26, 'Pro Max model', 'Peo Max model of an iphone, much higher than Pro version and only available on iphone 11 above');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iphones`
--

CREATE TABLE `tbl_iphones` (
  `iphone_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `description` varchar(2555) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_iphones`
--

INSERT INTO `tbl_iphones` (`iphone_id`, `name`, `processor`, `description`, `image`, `user_id`) VALUES
(48, 'Apple iPhone 11', 'Apple A13 Bionic (7 nm+)', 'Released 2019, September 20\r\n194g, 8.3mm thickness\r\niOS 13, up to iOS 17.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-11.jpg', 1),
(49, 'Apple iPhone 15 Pro Max', 'Apple A17 Pro (3 nm)', 'Released 2023, September 22\r\n221g, 8.3mm thickness\r\niOS 17, up to iOS 17.1.1\r\n256GB/512GB/1TB storage, no card slot', '15promax.jpg', 1),
(50, 'Apple iPhone 12', 'Apple A14 Bionic (5 nm)', 'Released 2020, October 23\r\n164g, 7.4mm thickness\r\niOS 14.1, up to iOS 17.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-12.jpg', 1),
(51, 'Apple iPhone XR', 'Apple A12 Bionic (7 nm)', 'Released 2018, October 26\r\n194g, 8.3mm thickness\r\niOS 12, up to iOS 17.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-xr-new.jpg', 1),
(52, 'Apple iPhone XR', 'Apple A12 Bionic (7 nm)', 'Released 2018, October 26\r\n194g, 8.3mm thickness\r\niOS 12, up to iOS 17.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-xr-new.jpg', 1),
(53, 'Apple iPhone 14 Pro Max', 'Apple A16 Bionic (4 nm)', 'Released 2022, September 16\r\n240g, 7.9mm thickness\r\niOS 16, up to iOS 17.1.1\r\n128GB/256GB/1TB storage, no card slot', '14-pro-max.jpg', 1),
(54, 'Apple iPhone 13', 'Apple A15 Bionic (5 nm)', 'Released 2021, September 24\r\n174g, 7.7mm thickness\r\niOS 15, up to iOS 17.1.1\r\n128GB/256GB/512GB storage, no card slot', 'apple-iphone-13.jpg', 1),
(55, 'Apple iPhone 13 Pro Max', 'Apple A15 Bionic (5 nm)', 'Released 2021, September 24\r\n240g, 7.7mm thickness\r\niOS 15, up to iOS 17.1.1\r\n128GB/256GB/1TB storage, no card slot', 'apple-iphone-13-pro-max (1).jpg', 1),
(56, 'Apple iPhone X', 'Apple A11 Bionic (10 nm)', 'Released 2017, November 03\r\n174g, 7.7mm thickness\r\niOS 11.1.1, up to iOS 16.6.1\r\n64GB/256GB storage, no card slot', 'apple-iphone-x.jpg', 1),
(57, 'Apple iPhone 15', 'Apple A16 Bionic (4 nm)', 'Released 2023, September 22\r\n171g, 7.8mm thickness\r\niOS 17, up to iOS 17.1.1\r\n128GB/256GB/512GB storage, no card slot', 'apple-iphone-15.jpg', 1),
(58, 'Apple iPhone 11 Pro Max', 'Apple A13 Bionic (7 nm+)', 'Released 2019, September 20\r\n226g, 8.1mm thickness\r\niOS 13, up to iOS 17.1.1\r\n64GB/256GB/512GB storage, no card slot', 'apple-iphone-11-pro maxx.jpg', 1),
(59, 'Apple iPhone XS Max', 'Apple A12 Bionic (7 nm)', 'Released 2018, September 21 208g, 7.7mm thickness iOS 12, up to iOS 17.1.1 64GB/256GB/512GB storage, no card slot', 'apple-iphone-xs-max-new1.jpg', 1),
(60, 'Apple iPhone 12 Pro Max', 'Apple A14 Bionic (5 nm)', 'Released 2020, November 13\r\n228g, 7.4mm thickness\r\niOS 14.1, up to iOS 17.1.1\r\n128GB/256GB/512GB storage, no card slot\r\n', '14-pro-max.jpg', 1),
(61, 'Apple iPhone 15 Pro', 'Apple A17 Pro (3 nm)', 'Released 2023, September 22\r\n187g, 8.3mm thickness\r\niOS 17, up to iOS 17.1.1\r\n128GB/256GB/1TB storage, no card slot', 'apple-iphone-15-pro.jpg', 1),
(62, 'Apple iPhone 11 Pro', 'Apple A13 Bionic (7 nm+)', 'Released 2019, September 20\r\n188g, 8.1mm thickness\r\niOS 13, up to iOS 17.1.1\r\n64GB/256GB/512GB storage, no card slot', 'apple-iphone-11-pro.jpg', 1),
(63, 'Apple iPhone XS', 'Apple A12 Bionic (7 nm)', 'Released 2018, September 21\r\n177g, 7.7mm thickness\r\niOS 12, up to iOS 17.1.1\r\n64GB/256GB/512GB storage, no card slot', 'apple-iphone-xs-new.jpg', 1),
(64, 'Apple iPhone 12 Pro', 'Apple A14 Bionic (5 nm)', 'Released 2020, October 23\r\n189g, 7.4mm thickness\r\niOS 14.1, up to iOS 17.1.1\r\n128GB/256GB/512GB storage, no card slot', 'apple-iphone-12-pro--.jpg', 1),
(65, 'Apple iPhone 14', 'Apple A15 Bionic (5 nm)', 'Released 2022, September 16\r\n172g, 7.8mm thickness\r\niOS 16, up to iOS 17.1.1\r\n128GB/256GB/512GB storage, no card slot', 'apple-iphone-14.jpg', 1),
(66, 'Apple iPhone 7', 'Apple A10 Fusion (16 nm)', 'Released 2016, September 16\r\n138g, 7.1mm thickness\r\niOS 10.0.1, up to iOS 15.7\r\n32GB/128GB/256GB storage, no card slot', 'apple-iphone-7r4.jpg', 1),
(67, 'Apple iPhone 14 Pro', 'Apple A16 Bionic (4 nm)', 'Released 2022, September 16\r\n206g, 7.9mm thickness\r\niOS 16, up to iOS 17.1.1\r\n128GB/256GB/1TB storage, no card slot', 'apple-iphone-14-pro.jpg', 1),
(68, 'Apple iPhone 13 Pro', 'Apple A15 Bionic (5 nm)', 'Released 2021, September 24\r\n204g, 7.7mm thickness\r\niOS 15, up to iOS 17.1.1\r\n128GB/256GB/1TB storage, no card slot', 'apple-iphone-13-pro.jpg', 1),
(69, 'Apple iPhone 7 Plus', 'OS 15.7 Chipset	', 'Released 2016, September 16\r\n188g, 7.3mm thickness\r\niOS 10.0.1, up to iOS 15.7\r\n32GB/128GB/256GB storage, no card slot', 'apple-iphone-7-plus-r2.jpg', 1),
(70, 'Apple iPhone 8 Plus', 'Apple A11 Bionic (10 nm)', 'Released 2017, September 22\r\n202g, 7.5mm thickness\r\niOS 11, up to iOS 16.6.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-8-new.jpg', 1),
(71, 'Apple iPhone 8', 'Apple A11 Bionic (10 nm)', 'Released 2017, September 22\r\n148g, 7.3mm thickness\r\niOS 11, up to iOS 16.6.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-8-new.jpg', 1),
(72, 'Apple iPhone 12 mini', 'Apple A14 Bionic (5 nm)', 'Released 2020, November 13\r\n135g, 7.4mm thickness\r\niOS 14.1, up to iOS 17.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-12-mini.jpg', 1),
(73, 'Apple iPhone 15 Plus', 'Apple A16 Bionic (4 nm)', 'Released 2023, September 22\r\n201g, 7.8mm thickness\r\niOS 17, up to iOS 17.1.1\r\n128GB/256GB/512GB storage, no card slo', 'apple-iphone-15-plus-.jpg', 1),
(74, 'Apple iPhone SE (2022)', 'Apple A15 Bionic (5 nm)', 'Released 2022, March 18\r\n144g, 7.3mm thickness\r\niOS 15.4, up to iOS 17.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-se-2022.jpg', 1),
(75, 'Apple iPhone SE (2020)', 'Apple A13 Bionic (7 nm+)', 'Released 2020, April 24\r\n148g, 7.3mm thickness\r\niOS 13, up to iOS 17.1.1\r\n64GB/128GB/256GB storage, no card slot', 'apple-iphone-se-2020.jpg', 1),
(76, 'Apple iPhone 6', 'Apple A8 (20 nm)', 'Released 2014, September 19\r\n129g, 6.9mm thickness\r\niOS 8, up to iOS 12.5.6\r\n16GB/32GB/128GB storage, no card slot', 'apple-iphone-6-4.jpg', 1),
(77, 'Apple iPhone 6', 'Apple A8 (20 nm)', 'Released 2014, September 19\r\n129g, 6.9mm thickness\r\niOS 8, up to iOS 12.5.6\r\n16GB/32GB/128GB storage, no card slot', 'apple-iphone-6-4.jpg', 1),
(78, 'Apple iPhone 6s', 'Apple A9 (14 nm)', 'Released 2015, September 25\r\n143g, 7.1mm thickness\r\niOS 9, up to iOS 15.7\r\n16GB/32GB/128GB storage, no card slot', 'apple-iphone-6s1.jpg', 1),
(79, 'Apple iPhone 14 Plus', 'Apple A15 Bionic (5 nm)', 'Released 2015, September 25\r\n143g, 7.1mm thickness\r\niOS 9, up to iOS 15.7\r\n16GB/32GB/128GB storage, no card slot', 'apple-iphone-14-plus.jpg', 1),
(80, 'Apple iPhone 13 mini', 'Apple A15 Bionic (5 nm)', 'Released 2021, September 24\r\n141g, 7.7mm thickness\r\niOS 15, up to iOS 17.1.1\r\n128GB/256GB/512GB storage, no card slot', 'apple-iphone-13-mini.jpg', 1),
(81, 'Apple iPhone SE', 'Apple A9 (14 nm)', 'Released 2016, March 31\r\n113g, 7.6mm thickness\r\niOS 9.3.2, up to iOS 15.7\r\n16GB/32GB/128GB storage, no card slot', 'apple-iphone-5se-ofic.jpg', 1),
(82, 'Apple iPhone 6s Plus', 'Apple A9 (14 nm)', 'Released 2015, September 25\r\n192g, 7.3mm thickness\r\niOS 9, up to iOS 15.7\r\n16GB/32GB/128GB storage, no card slot', 'apple-iphone-6-plus2.jpg', 1),
(83, 'Apple iPhone 5s', 'Apple A7 (28 nm)', 'Released 2013, September 20\r\n112g, 7.6mm thickness\r\niOS 7, up to iOS 12.5.6\r\n16GB/32GB/64GB storage, no card slot', 'apple-iphone-5se-ofic.jpg', 1),
(84, 'Apple iPhone 6 Plus', 'Apple A8 (20 nm)', 'Released 2014, September 19\r\n172g, 7.1mm thickness\r\niOS 8, up to iOS 12.5.6\r\n16GB/64GB/128GB storage, no card slot', 'apple-iphone-6-plus2.jpg', 1),
(85, 'Apple iPhone 5', 'Apple A6 (32 nm)', 'Released 2012, September 21\r\n112g, 7.6mm thickness\r\niOS 6, up to iOS 10.3.4\r\n16GB/32GB/64GB storage, no card slot', 'apple-iphone-5-ofic.jpg', 1),
(86, 'Apple iPhone 4', 'Apple A4 (45 nm)', 'Released 2010, June\r\n137g, 9.3mm thickness\r\niOS 4, up to iOS 7.1.2\r\n8GB/16GB/32GB storage, no card slot', 'apple-iphone-4-ofic-final.jpg', 1),
(87, 'Apple iPhone 4s', 'Apple A5 (45 nm)', 'Released 2011, October 14\r\n140g, 9.3mm thickness\r\niOS 5, up to iOS 9.3.6\r\n8GB/16GB/64GB storage, no card slot', 'apple-iphone-4s-new.jpg', 1),
(88, 'Apple iPhone 3GS', 'Apple iPhone 3GS', 'Released 2009, June\r\n135g, 12.3mm thickness\r\niOS 3, up to iOS 6.1.6\r\n8GB/16GB/32GB storage, no card slot', 'apple-iphone-3gs-ofic.jpg', 1),
(89, 'Apple iPhone 5c', 'Apple A6 (32 nm)', '132g, 9mm thickness\r\niOS 7, up to iOS 10.3.3\r\n8GB/16GB/32GB storage, no card slot', 'apple-iphone-5c-new2.jpg', 1),
(90, 'Apple iPhone 3G', '412 MHz ARM 11', 'Released 2008, July\r\n133g, 12.3mm thickness\r\niOS, up to iOS 4.2.1\r\n8GB/16GB storage, no card slot', 'apple-iphone-3gs-ofic.jpg', 1),
(91, 'Apple iPhone 4 CDMA', 'Apple A4 (45 nm)', 'Released 2011, February\r\n137g, 9.3mm thickness\r\niOS 4, up to iOS 7.1.1\r\n16GB/32GB storage, no card slot', 'apple-iphone4-cdma.jpg', 1),
(92, 'Apple iPhone 4 CDMA', 'Apple A4 (45 nm)', 'Released 2011, February\r\n137g, 9.3mm thickness\r\niOS 4, up to iOS 7.1.1\r\n16GB/32GB storage, no card slot', 'apple-iphone4-cdma.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iphones_categories`
--

CREATE TABLE `tbl_iphones_categories` (
  `ipn_ctgs_id` int(11) NOT NULL,
  `iphone_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_iphones_categories`
--

INSERT INTO `tbl_iphones_categories` (`ipn_ctgs_id`, `iphone_id`, `category_id`) VALUES
(118, 48, 1),
(121, 50, 1),
(122, 52, 1),
(123, 53, 25),
(124, 53, 26),
(125, 54, 1),
(126, 55, 25),
(127, 55, 26),
(128, 56, 1),
(129, 57, 1),
(130, 58, 25),
(131, 58, 26),
(134, 60, 25),
(135, 60, 26),
(136, 61, 25),
(137, 62, 25),
(138, 63, 1),
(139, 63, 2),
(140, 64, 25),
(141, 65, 1),
(142, 66, 1),
(143, 67, 25),
(144, 68, 25),
(145, 69, 3),
(146, 70, 3),
(147, 71, 1),
(148, 72, 1),
(149, 73, 3),
(150, 74, 2),
(151, 75, 2),
(152, 77, 1),
(153, 78, 2),
(154, 79, 3),
(155, 80, 1),
(156, 81, 2),
(157, 82, 3),
(158, 83, 2),
(159, 84, 2),
(160, 85, 1),
(161, 86, 1),
(162, 87, 2),
(163, 88, 1),
(164, 89, 1),
(165, 90, 1),
(166, 91, 1),
(167, 92, 1),
(170, 59, 2),
(171, 59, 26),
(172, 49, 25),
(173, 49, 26);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `type`) VALUES
(1, 'Leogie', 'Pabon', 'pabonleogie09@gmail.com', 'password', 'administrator'),
(2, 'Plato', 'Osborne', 'kezunojam@mailinator.com', 'password', 'regular'),
(3, 'Katelyn', 'Marks', 'qazeje@mailinator.com', 'password', 'regular'),
(4, 'Cadman', 'Bell', 'sowycujyko@mailinator.com', 'password', 'regular'),
(5, 'Jillian', 'Peters', 'bytegex@mailinator.com', 'password', 'regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_iphones`
--
ALTER TABLE `tbl_iphones`
  ADD PRIMARY KEY (`iphone_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_iphones_categories`
--
ALTER TABLE `tbl_iphones_categories`
  ADD PRIMARY KEY (`ipn_ctgs_id`),
  ADD KEY `tbl_books_categories_ibfk_1` (`iphone_id`),
  ADD KEY `tbl_books_categories_ibfk_2` (`category_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_iphones`
--
ALTER TABLE `tbl_iphones`
  MODIFY `iphone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tbl_iphones_categories`
--
ALTER TABLE `tbl_iphones_categories`
  MODIFY `ipn_ctgs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_iphones`
--
ALTER TABLE `tbl_iphones`
  ADD CONSTRAINT `tbl_iphones_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_iphones_categories`
--
ALTER TABLE `tbl_iphones_categories`
  ADD CONSTRAINT `tbl_iphones_categories_ibfk_1` FOREIGN KEY (`iphone_id`) REFERENCES `tbl_iphones` (`iphone_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_iphones_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

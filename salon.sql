-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2025 at 11:10 AM
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
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('jsiranija@gmail.com', 'admin#salon');

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`id`, `name`, `email`, `message`) VALUES
(1, 'ssss', 'meera123@gmail.com', 'hii'),
(10, 'siranija j', 'jeyaseelnsiranija@gmail.com', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `service_name`, `category`, `price`) VALUES
(2, 'Shampoo, Cut & Blow-Dry', 'Hair Cuts - Ladies', 3500.00),
(3, 'Hair Cuts - Ladies', 'Exclusive Cut & Style by Creative Director', 5000.00),
(4, 'One-Length Trim', 'Hair Cuts - Ladies', 1950.00),
(5, 'Hair Wash Service', 'Hair Cuts - Ladies', 1500.00),
(6, 'Children\'s Haircut', 'Hair Cuts - Ladies', 1700.00),
(7, 'Blow Dry & Setting/Ironing', 'Hair Setting - Ladies', 5310.00),
(8, 'Perm / Smoothening / Rebonding', 'Chemical Treatments Section', 9000.00),
(9, 'Keratin Treatment', 'Chemical Treatments Section', 15000.00),
(10, 'Oil & Steam Head Massage', ' Scalp Massage Section ', 3000.00),
(11, 'Deep Conditioning Treatment', ' Scalp Massage Section ', 1800.00),
(12, 'Dandruff Treatment', ' Scalp Massage Section ', 2000.00),
(13, 'Hair Loss Treatment', ' Scalp Massage Section ', 4100.00),
(14, 'Hair Spa with Serum', ' Scalp Massage Section ', 5000.00),
(15, 'Forehead Threading', ' Beauty Services Section', 250.00),
(16, 'Upper lip Threading', 'Forehead Threading', 250.00),
(17, 'Eyebrow Threading', 'Forehead Threading', 300.00),
(18, 'Cheek Threading', 'Forehead Threading', 250.00),
(19, 'Full face Threading', 'Forehead Threading', 750.00),
(20, 'Underarm Waxing', 'Beauty Services Section', 800.00),
(21, 'Half Arm Waxing', 'Beauty Services Section', 1700.00),
(22, 'Full Arm Waxing', 'Beauty Services Section', 3000.00),
(23, 'Half leg Waxing', 'Beauty Services Section', 2200.00),
(24, 'Full leg Waxing', 'Beauty Services Section', 3200.00),
(25, 'Bikini Line Waxing', 'Beauty Services Section', 1500.00),
(26, 'Full body Waxing', 'Beauty Services Section', 10000.00),
(27, 'Upper Lip Bleaching', 'Beauty Services Section', 500.00),
(28, 'Face & Neck Bleaching', 'Beauty Services Section', 1900.00),
(29, 'Underarm Bleaching', 'Beauty Services Section', 600.00),
(30, 'Half Arm Bleaching', 'Beauty Services Section', 2200.00),
(31, 'Full Arm Bleaching', 'Beauty Services Section', 2200.00),
(32, 'Half Leg Bleaching', 'Beauty Services Section', 2500.00),
(33, 'Full Leg Bleaching', 'Beauty Services Section', 3000.00),
(34, 'Full Body Bleaching', 'Beauty Services Section', 15000.00),
(35, 'Manicure', 'Beauty Services Section', 2500.00),
(36, 'Gel/Acrylic Nails', 'Beauty Services Section', 1500.00),
(37, 'Pedicure', 'Beauty Services Section', 3500.00),
(38, 'Foot Massage', 'Beauty Services Section', 3200.00),
(39, 'Clean Up', 'Beauty Services Section', 2000.00),
(40, 'Full Facial', 'Beauty Services Section', 3500.00),
(41, 'Skin Lightening Treatment', 'Beauty Services Section', 5000.00),
(42, 'Eye Treatment', 'Beauty Services Section', 3000.00),
(43, 'Back Treatment', 'Beauty Services Section', 5000.00),
(44, 'Advanced Facial/Gold Facial', 'Beauty Services Section', 10000.00),
(45, 'Engagement Dressing', 'Wedding Packages Section', 40000.00),
(46, 'Dressing of the Bride with Trials and Flowers', 'Wedding Packages Section', 90000.00),
(47, 'Homecoming with Flowers', 'Wedding Packages Section', 60000.00),
(48, 'Going Away Change (Optional)', 'Wedding Packages Section', 25000.00),
(49, 'Bridesmaid with Flowers', 'Wedding Packages Section', 29000.00),
(50, 'Flower Girls', 'Wedding Packages Section', 7000.00),
(51, 'Wedding Dresses', 'Dress Rental Categories Section', 10000.00),
(52, 'Formal Wear', 'Dress Rental Categories Section', 10000.00),
(53, 'Party Dresses', 'Dress Rental Categories Section', 10000.00),
(54, 'Cultural and Traditional Dresses', 'Dress Rental Categories Section', 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `message`) VALUES
(1, 'siranija', 'sira@gmail.com', 'customer service is very satisfied'),
(6, 'siranija j', 'jeyaseelnsiranija@gmail.com', 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

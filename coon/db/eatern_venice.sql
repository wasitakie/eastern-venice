-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 01, 2024 at 06:25 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eatern_venice`
--

-- --------------------------------------------------------

--
-- Table structure for table `group_product`
--

CREATE TABLE `group_product` (
  `group_type_id` int(11) NOT NULL,
  `group_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_product`
--

INSERT INTO `group_product` (`group_type_id`, `group_type`) VALUES
(1, 'Flash Drive'),
(2, 'IT Gadget'),
(3, 'Stationery'),
(4, 'Pen'),
(5, 'Key holder'),
(6, 'Glass/Mug/Bottle'),
(7, 'Clock/Watch'),
(8, 'Import Item'),
(9, 'Polo/T-shirt/Jacket'),
(10, 'Towel'),
(11, 'Cap'),
(12, 'Bag'),
(13, 'Umbrella'),
(14, 'Flashlight'),
(15, 'เก้าอี้สนาม'),
(16, 'Fan'),
(17, 'Gift set'),
(18, 'Other Premium'),
(19, 'Power Bank'),
(20, 'LED Products'),
(21, 'กิ๊ฟเซ็ท');

-- --------------------------------------------------------

--
-- Table structure for table `group_product_sub`
--

CREATE TABLE `group_product_sub` (
  `sub_type_id` int(11) NOT NULL,
  `sub_type_product` varchar(100) NOT NULL,
  `sub_group_id` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_product_sub`
--

INSERT INTO `group_product_sub` (`sub_type_id`, `sub_type_product`, `sub_group_id`) VALUES
(1, 'Flash Drive ยางหยอด', '1'),
(2, 'Design Flash Drive', '1'),
(3, 'Flash Drive โลหะ', '1'),
(4, 'Flash Drive หนัง', '1'),
(5, 'Flash Drive แบบอื่นๆ', '1'),
(6, 'IT Gadget', '2'),
(7, 'Organizer', '3'),
(8, 'Post-it', '3'),
(9, 'Calculator', '3'),
(10, 'ซองใส่นามบัตร', '3'),
(11, 'อุปกรณ์เครื่องเขียนอื่นๆ', '3'),
(12, 'Highlighter', '4'),
(13, 'Metal Pen', '4'),
(14, 'Plastic Pen', '4'),
(15, 'Key holder', '5'),
(16, 'Stainless Bottle', '6'),
(17, 'Plastic Bottle', '6'),
(18, 'Bottle Set', '6'),
(19, 'Mug', '6'),
(20, 'Clock', '7'),
(21, 'อิเล็คทรอนิค', '8'),
(22, 'Other import item', '8'),
(23, 'Polo T-shirt Jacket', '9'),
(24, 'ผ้าขนหนู', '10'),
(25, 'Cap', '11'),
(26, 'Shopping Bag', '12'),
(27, 'Small Bag', '12'),
(28, 'Travelling Bag', '12'),
(29, 'ร่ม', '13'),
(30, 'ไฟฉาย', '14'),
(31, 'เก้าอี้สนาม', '15'),
(32, 'พัดลม', '16'),
(33, 'Gift set', '17'),
(34, 'Other Premium', '18'),
(35, 'Power Bank 1,800-2,600 mAh', '19'),
(36, 'Power Bank 4,400-6,000 mAh', '19'),
(37, 'Power Bank 8,000-10,000 mAh', '19'),
(38, 'LED Product', '20'),
(39, 'กิ๊ฟเซ็ท', '21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_product`
--
ALTER TABLE `group_product`
  ADD PRIMARY KEY (`group_type_id`);

--
-- Indexes for table `group_product_sub`
--
ALTER TABLE `group_product_sub`
  ADD PRIMARY KEY (`sub_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group_product`
--
ALTER TABLE `group_product`
  MODIFY `group_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `group_product_sub`
--
ALTER TABLE `group_product_sub`
  MODIFY `sub_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

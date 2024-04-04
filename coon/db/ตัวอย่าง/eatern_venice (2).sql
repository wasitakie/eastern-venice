-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2024 at 08:09 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `group_product`
--

CREATE TABLE `group_product` (
  `group_type_id` int(11) NOT NULL,
  `group_type` varchar(100) NOT NULL,
  `group_text` text NOT NULL,
  `group_description` text NOT NULL,
  `group_keywords` text NOT NULL,
  `group_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_product`
--

INSERT INTO `group_product` (`group_type_id`, `group_type`, `group_text`, `group_description`, `group_keywords`, `group_time`) VALUES
(1, 'flash deive', '<p><span style=\"font-size: 14px;\">﻿ddddd</span><br></p>', 'eeee', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-27 08:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `group_product_sub`
--

CREATE TABLE `group_product_sub` (
  `sub_type_id` int(11) NOT NULL,
  `sub_type_product` varchar(100) NOT NULL,
  `sub_group_id` varchar(3) NOT NULL,
  `sub_text` text NOT NULL,
  `sub_file` varchar(200) NOT NULL,
  `sub_description` text NOT NULL,
  `sub_keyword` text NOT NULL,
  `sub_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_product_sub`
--

INSERT INTO `group_product_sub` (`sub_type_id`, `sub_type_product`, `sub_group_id`, `sub_text`, `sub_file`, `sub_description`, `sub_keyword`, `sub_time`) VALUES
(1, 'flash deive ยอดหยาง', '1', '<p><span style=\"font-size: 14px;\">﻿wwwwwwwgg</span><br></p>', 'SubImage_1-1006030951200-L.jpg', 'ewwww', 'eeeeee', '2024-02-27 08:30:50'),
(2, 'flash deive aaa', '1', '<p>คำอธิบายส่วนบน<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"><span style=\"color: rgb(133, 135, 150); font-family: Nunito, -apple-system, &quot;system-ui&quot;, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(248, 249, 252); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">คำอธิบายส่วนบน</span><span style=\"font-size: 14px;\">﻿</span><br></p>', 'SubImage_1341484741-0.jpg', 'fffff', 'eeeeee', '2024-02-27 08:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_description` text NOT NULL,
  `home_keyword` text NOT NULL,
  `home_text` text NOT NULL COMMENT 'ในแทบสีส้ม',
  `home_time_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `home_description`, `home_keyword`, `home_text`, `home_time_update`) VALUES
(1, 'เราเป็นผู้นำเข้าของ Premium จัดทำ จัดหา และออกแบบ สินค้าพรีเมี่ยม และ Premium gift ทุกชนิดตาม ที่ท่านต้องการ ของพรีเมี่ยมของเรามีให้ท่านเลือกหลากหลายตามเทศกาลและความต้องการ เช่น เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม และสินค้าอื่นๆ อีกมากมาย', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', 'เราเป็นผู้นำเข้าของ Premium จัดทำ จัดหา และออกแบบ สินค้าพรีเมี่ยม และ Premium gift ทุกชนิดตาม ที่ท่านต้องการ ของพรีเมี่ยมของเรามีให้ท่านเลือกหลากหลายตามเทศกาลและความต้องการ เช่น เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม และสินค้าอื่นๆ อีกมากมาย5555', '2024-02-23 08:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_images_id` int(11) NOT NULL,
  `product_sub_id` varchar(10) NOT NULL,
  `product_images_name` varchar(250) NOT NULL,
  `product_images_num` varchar(250) NOT NULL,
  `product_images_detail` text NOT NULL,
  `product_images_file` text NOT NULL,
  `product_images_description` text NOT NULL,
  `product_images_keyword` text NOT NULL,
  `product_hot` int(11) NOT NULL,
  `product_images_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_images_id`, `product_sub_id`, `product_images_name`, `product_images_num`, `product_images_detail`, `product_images_file`, `product_images_description`, `product_images_keyword`, `product_hot`, `product_images_time`) VALUES
(1, '1', 'Big COLA Flash Drive', 'USB144', '<p>eeeeeee</p>', 'Thumbnails_1-1006030951200-L.jpg/Thumbnails_1524ae3f96119371a6f3e28839140c01.jpg/Thumbnails_custom-flash-drive-shape-rubber.jpg/Thumbnails_custom-rubber-usb-flash-drive-red.jpg', 'eeee', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', 1, '2024-02-28 07:06:26'),
(2, '2', 'Card Flash Drive', 'USB159', '<p>ggggggg</p>', 'Thumbnails_original-1397109499958.png/Thumbnails_q0uzzabdlVcBHR7WTD0-o.jpg/Thumbnails_spd_20190328123343_b.jpg', 'eeee', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', 0, '2024-02-27 08:32:52'),
(3, '1', 'BB Flash Drive', '122', '<p>รายละเอียดสินค้า<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"><span style=\"color: rgb(133, 135, 150); font-family: Nunito, -apple-system, &quot;system-ui&quot;, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(248, 249, 252); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">รายละเอียดสินค้า</span><br></p>', 'Thumbnails_igor-miske-Px3iBXV-4TU-unsplash.jpg', 'Description', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', 1, '2024-02-28 07:11:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_images_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group_product`
--
ALTER TABLE `group_product`
  MODIFY `group_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `group_product_sub`
--
ALTER TABLE `group_product_sub`
  MODIFY `sub_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2024 at 06:32 AM
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
(1, 'Flash Drive', '<p><span style=\"font-family: Nunito, -apple-system, \" system-ui\",=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\",=\"\" \"noto=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" left;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" white-space:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-thickness:=\"\" initial;=\"\" text-decoration-style:=\"\" text-decoration-color:=\"\" float:=\"\" display:=\"\" inline=\"\" !important;\"=\"\"><b style=\"\"><font color=\"#ffffff\">Flash Drive</font></b></span><span style=\"color: rgb(133, 135, 150); font-family: Nunito, -apple-system, \" system-ui\",=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\",=\"\" \"noto=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" left;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" white-space:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-thickness:=\"\" initial;=\"\" text-decoration-style:=\"\" text-decoration-color:=\"\" display:=\"\" inline=\"\" !important;=\"\" float:=\"\" none;\"=\"\"> </span><span style=\"\" system-ui\",=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\",=\"\" \"noto=\"\" emoji\";=\"\" font-size:=\"\" 16px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" left;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" white-space:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-thickness:=\"\" initial;=\"\" text-decoration-style:=\"\" text-decoration-color:=\"\" display:=\"\" inline=\"\" !important;=\"\" float:=\"\" none;\"=\"\"><font color=\"#ffffff\">คุณภาพที่สามารถมอบให้ในโอกาสต่างๆ หรือ ใช้เป็นสินค้าส่งเสริมการขาย มีดีไซด์ สวยงาม สามารถสกรีน หรือ เลเซอร์โลโก้ลงไป สำหรับแจกเป็นของขวัญ,รางวัลโปรโมชั่น,ของที่ระลึกในโอกาสสำคัญ เช่น ปีใหม่ เพื่อสร้างภาพลักษณ์และความแตกต่างให้กับบริษัท หน่วยงาน องค์กร ของคุณ Main</font></span><br></p>', 'เราเป็นผู้นำเข้าของ Premium จัดทำ จัดหา และออกแบบ สินค้าพรีเมี่ยม และ Premium gift ทุกชนิดตาม ที่ท่านต้องการ ของพรีเมี่ยมของเรามีให้ท่านเลือกหลากหลายตามเทศกาลและความต้องการ เช่น เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม และสินค้าอื่นๆ อีกมากมาย', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-16 07:40:43'),
(2, 'IT Gadget', '', '', '', '2024-02-14 08:06:12'),
(3, 'Stationery', '', '', '', '2024-02-14 08:06:12'),
(4, 'Pen', '', '', '', '2024-02-14 08:06:12'),
(5, 'Key holder', '', '', '', '2024-02-14 08:06:12'),
(6, 'Glass/Mug/Bottle', '', '', '', '2024-02-14 08:06:12'),
(7, 'Clock/Watch', '', '', '', '2024-02-14 08:06:12'),
(8, 'Import Item', '', '', '', '2024-02-14 08:06:12'),
(9, 'Polo/T-shirt/Jacket', '', '', '', '2024-02-14 08:06:12'),
(10, 'Towel', '', '', '', '2024-02-14 08:06:12'),
(11, 'Cap', '', '', '', '2024-02-14 08:06:12'),
(12, 'Bag', '', '', '', '2024-02-14 08:06:12'),
(13, 'Umbrella', '', '', '', '2024-02-14 08:06:12'),
(14, 'Flashlight', '', '', '', '2024-02-14 08:06:12'),
(15, 'เก้าอี้สนาม', '', '', '', '2024-02-14 08:06:12'),
(16, 'Fan', '', '', '', '2024-02-14 08:06:12'),
(17, 'Gift set', '', '', '', '2024-02-14 08:06:12'),
(18, 'Other Premium', '', '', '', '2024-02-14 08:06:12'),
(19, 'Power Bank', '', '', '', '2024-02-14 08:06:12'),
(20, 'LED Products', '', '', '', '2024-02-14 08:06:12'),
(21, 'กิ๊ฟเซ็ท', '', '', '', '2024-02-14 08:06:12');

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
(1, 'Flash Drive ยางหยอด', '1', '<p><span style=\"font-family: Nunito, -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" \"noto=\"\" emoji\";=\"\" font-size:=\"\" 1rem;\"=\"\">&nbsp;Flash Drive คุณภาพที่สามารถมอบให้ในโอกาสต่างๆ หรือ ใช้เป็นสินค้าส่งเสริมการขาย มีดีไซด์ สวยงาม สามารถสกรีน หรือ เลเซอร์โลโก้ลงไป สำหรับแจกเป็นของขวัญ,รางวัลโปรโมชั่น,ของที่ระลึกในโอกาสสำคัญ เช่น ปีใหม่ เพื่อสร้างภาพลักษณ์และความแตกต่างให้กับบริษัท หน่วยงาน องค์กร ของคุณ</span><br></p>', 'Thumbnails_IT095.jpg', 'เราเป็นผู้นำเข้าของ Premium จัดทำ จัดหา และออกแบบ สินค้าพรีเมี่ยม และ Premium gift ทุกชนิดตาม ที่ท่านต้องการ ของพรีเมี่ยมของเรามีให้ท่านเลือกหลากหลายตามเทศกาลและความต้องการ เช่น เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม และสินค้าอื่นๆ อีกมากมาย', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-16 07:48:15'),
(2, 'Design Flash Drive', '1', '<p>5555555555555555555555555<br><span style=\"font-size: 14px;\">﻿</span></p>', 'Thumbnails_spd_20190328123343_b.jpg', '5555555', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-20 08:07:10'),
(3, 'Flash Drive โลหะ', '1', '<p>555d555555544444<br><span style=\"font-size: 14px;\">﻿</span></p>', 'Thumbnails_vihee7.jpg', 'Description', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-22 09:53:29'),
(4, 'Flash Drive หนัง', '1', '', '', '', '', '2024-02-15 07:13:43'),
(5, 'Flash Drive แบบอื่นๆ', '1', '', '', '', '', '2024-02-15 07:13:43'),
(6, 'IT Gadget', '2', '', '', '', '', '2024-02-15 07:13:43'),
(7, 'Organizer', '3', '', '', '', '', '2024-02-15 07:13:43'),
(8, 'Post-it', '3', '', '', '', '', '2024-02-15 07:13:43'),
(9, 'Calculator', '3', '', '', '', '', '2024-02-15 07:13:43'),
(10, 'ซองใส่นามบัตร', '3', '', '', '', '', '2024-02-15 07:13:43'),
(11, 'อุปกรณ์เครื่องเขียนอื่นๆ', '3', '', '', '', '', '2024-02-15 07:13:43'),
(12, 'Highlighter', '4', '', '', '', '', '2024-02-15 07:13:43'),
(13, 'Metal Pen', '4', '', '', '', '', '2024-02-15 07:13:43'),
(14, 'Plastic Pen', '4', '', '', '', '', '2024-02-15 07:13:43'),
(15, 'Key holder', '5', '', '', '', '', '2024-02-15 07:13:43'),
(16, 'Stainless Bottle', '6', '', '', '', '', '2024-02-15 07:13:43'),
(17, 'Plastic Bottle', '6', '', '', '', '', '2024-02-15 07:13:43'),
(18, 'Bottle Set', '6', '', '', '', '', '2024-02-15 07:13:43'),
(19, 'Mug', '6', '', '', '', '', '2024-02-15 07:13:43'),
(20, 'Clock', '7', '', '', '', '', '2024-02-15 07:13:43'),
(21, 'อิเล็คทรอนิค', '8', '', '', '', '', '2024-02-15 07:13:43'),
(22, 'Other import item', '8', '', '', '', '', '2024-02-15 07:13:43'),
(23, 'Polo T-shirt Jacket', '9', '', '', '', '', '2024-02-15 07:13:43'),
(24, 'ผ้าขนหนู', '10', '', '', '', '', '2024-02-15 07:13:43'),
(25, 'Cap', '11', '', '', '', '', '2024-02-15 07:13:43'),
(26, 'Shopping Bag', '12', '', '', '', '', '2024-02-15 07:13:43'),
(27, 'Small Bag', '12', '', '', '', '', '2024-02-15 07:13:43'),
(28, 'Travelling Bag', '12', '', '', '', '', '2024-02-15 07:13:43'),
(29, 'ร่ม', '13', '', '', '', '', '2024-02-15 07:13:43'),
(30, 'ไฟฉาย', '14', '', '', '', '', '2024-02-15 07:13:43'),
(31, 'เก้าอี้สนาม', '15', '', '', '', '', '2024-02-15 07:13:43'),
(32, 'พัดลม', '16', '', '', '', '', '2024-02-15 07:13:43'),
(33, 'Gift set', '17', '', '', '', '', '2024-02-15 07:13:43'),
(34, 'Other Premium', '18', '', '', '', '', '2024-02-15 07:13:43'),
(35, 'Power Bank 1,800-2,600 mAh', '19', '', '', '', '', '2024-02-15 07:13:43'),
(36, 'Power Bank 4,400-6,000 mAh', '19', '', '', '', '', '2024-02-15 07:13:43'),
(37, 'Power Bank 8,000-10,000 mAh', '19', '', '', '', '', '2024-02-15 07:13:43'),
(38, 'LED Product', '20', '', '', '', '', '2024-02-15 07:13:43'),
(39, 'กิ๊ฟเซ็ท', '21', '', '', '', '', '2024-02-15 07:13:43');

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
  `product_images_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_images_id`, `product_sub_id`, `product_images_name`, `product_images_num`, `product_images_detail`, `product_images_file`, `product_images_description`, `product_images_keyword`, `product_images_time`) VALUES
(1, '1', 'Big COLA Flash Drive', 'USB144', '<p>Flash Drive สั่งทำตามแบบลูกค้า ขนาดความจุมีตั้งแต่ 1GB,2GB,4GB,8GB,16GB,32GB ตามความต้องการของลูกค้า<br></p>', 'Thumbnails_IT099.jpg/Thumbnails_IT089.jpg/Thumbnails_IT098.jpg', 'เราเป็นผู้นำเข้าของ Premium จัดทำ จัดหา และออกแบบ สินค้าพรีเมี่ยม และ Premium gift ทุกชนิดตาม ที่ท่านต้องการ ของพรีเมี่ยมของเรามีให้ท่านเลือกหลากหลายตามเทศกาลและความต้องการ เช่น เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม และสินค้าอื่นๆ อีกมากมาย', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-16 07:26:53'),
(2, '2', 'Card Flash Drive', 'USB159', '<p>dddddd</p>', 'Thumbnails_spd_20190328123343_b.jpg/Thumbnails_q0uzzabdlVcBHR7WTD0-o.jpg/Thumbnails_Metal-Credit-Bank-Card-Shape-USB-Flash-Drive-Custom-Lgoo-USB-Business-Card-Gift-Flash-Memory.jpg/Thumbnails_original-1397109499958.png', 'dddddd', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-20 08:08:53'),
(3, '1', 'BB Flash Drive', 'USB120', '<p>dddddddd</p>', 'Thumbnails_custom-rubber-usb-flash-drive-red.jpg/Thumbnails_1-1006030951200-L.jpg/Thumbnails_1524ae3f96119371a6f3e28839140c01.jpg/Thumbnails_custom-flash-drive-shape-rubber.jpg', '66251144411', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-20 08:13:17'),
(4, '3', 'Flash Drive โลหะ', 'USB155', '<p>55541115555</p>', 'Thumbnails_vihee7.jpg/Thumbnails_1348746278-0.jpg/Thumbnails_1341484741-0.jpg/Thumbnails_download.jpeg', '5555525554454', 'เสื้อยืด เสื้อโปโล และเสื้อแจ็กเก็ตพรีเมี่ยม ซึ่งมีให้เลือกหลากหลายทั้งแบบ และเนื้อผ้า, กระเป๋าผ้าพรีเมี่ยมลดโลกร้อน, Flash Drive หลากหลายแบบ, ปากกา พรีเมี่ยม โลหะและพลาสติก, สินค้า PVC และเรซิ่นรูปแบบต่างๆ, แก้วมัคเซรามิค, กระบอกน้ำพรีเมี่ยมแบบต่างๆ มีทั้งแบบเดี่ยว หรือ จัดเซ็ท, Organizer, สมุดโน๊ตพรีเมี่ยม, พวงกุญแจ, พัดลม, ไฟฉาย, นาฬิกาข้อมือ และ นาฬิกาแขวนผนัง, พวงกุญแจโลหะ, ม่านสูญญากาศพรีเมี่ยม', '2024-02-22 09:54:58');

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
  MODIFY `group_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `group_product_sub`
--
ALTER TABLE `group_product_sub`
  MODIFY `sub_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2025 at 03:43 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indoor_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

DROP TABLE IF EXISTS `add_to_cart`;
CREATE TABLE IF NOT EXISTS `add_to_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_product_id` int(50) NOT NULL,
  `cart_user_id` int(50) NOT NULL,
  `cart_quatity` int(50) NOT NULL,
  `cart_total` varchar(50) NOT NULL,
  `cart_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `displayed_items`
--

DROP TABLE IF EXISTS `displayed_items`;
CREATE TABLE IF NOT EXISTS `displayed_items` (
  `displayed_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `displayed_item_image` varchar(250) NOT NULL,
  `displayed_item_overlay_image` varchar(250) NOT NULL,
  `displayed_item_name` varchar(50) NOT NULL,
  `displayed_item_category` varchar(50) NOT NULL,
  `displayed_item_rate` varchar(50) NOT NULL,
  `displayed_item_quandity` varchar(50) NOT NULL,
  `displayed_item_sort` int(11) NOT NULL COMMENT '1 best seller,2 featured,3 sales',
  PRIMARY KEY (`displayed_item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `displayed_items`
--

INSERT INTO `displayed_items` (`displayed_item_id`, `displayed_item_image`, `displayed_item_overlay_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_rate`, `displayed_item_quandity`, `displayed_item_sort`) VALUES
(1, 'Terracotta-blue-front.png', 'Terracotta-blue-use.jpg', 'terracotta plant pot', 'Pot', 'Rs. 1,199.00', '835', 1),
(2, 'womenvase.png', 'womenvase-use.jpg', 'Stoneware candle holder', 'Decor', 'Rs. 1,299.00', '499', 1),
(3, 'Terracotta-black-front.png', 'Terracotta-black-size.jpg', 'terracotta plant pot', 'Pot', 'Rs. 1,199.00', '500', 1),
(4, 'stand.png', 'stand-use.jpg', 'Two-tiered tray', 'Decor', 'Rs. 1,999.00', '234', 2),
(5, 'sheetdarkgreen.png', 'sheetdarkgreen-use.jpg', 'Cotton single duvet cover set', 'Bedroom', 'Rs. 1,699.00', '132', 2),
(6, 'Ruffle-trimmed Cushion Cover - Orange_striped-front.png', 'Ruffle-trimmed Cushion Cover - Orange_striped-fabric.jpg', 'Ruffle-trimmed Cushion Cover', 'Decor', 'Rs. 1,199.00', '1k', 2),
(7, 'candle-front.jpg', 'candle-use.jpg', 'Cork-lid scented candle', 'Decor', 'Rs. 299.00', '123', 3),
(8, 'fourmug-front.jpg', 'fourmug-use.jpg', '4-pack espresso cups', 'Kitchen', 'Rs. 1,499.00', '115', 3),
(9, 'Six The Residence Metal & Linen Lounge Chair-angle.png', 'Six The Residence Metal & Linen Lounge Chair-use.jpg', 'Metal& Linen Lounge Chair', 'Living Room', 'Rs. 4,899.00', '6', 3),
(10, 'fruitbowl-front.jpg', 'fruitbowl-use.jpg', 'Stoneware Bowls', 'Kitchen', 'Rs. 2,299.00', '1.5k', 0),
(11, 'mirror.png', 'mirror-use.jpg', 'Mango Wood Mirror', 'Decor', 'Rs. 2,499.00', '250', 0),
(12, 'greychair-angle.jpg', 'greychair-use.jpg', 'Lounge chair', 'Living Room', 'Rs. 6,199.00', '12', 0),
(14, 'lamp-front.jpg', 'lamp-use.jpg', 'lamb', 'decor', 'Rs. 1,499.00', '248', 2),
(15, 'Cotton terry dressing gown.jpg', 'Cotton terry dressing gown_use.jpg', 'Cotton terry dressing gown', 'Balcony & Outdoor', 'Rs.2,999.00', '149', 0),
(16, 'Hanging planter box.jpg', 'Hanging planter box_use.jpg', 'Hanging planter box', 'Pot', 'Rs.2,699.00', '150', 1);

-- --------------------------------------------------------

--
-- Table structure for table `labour_details`
--

DROP TABLE IF EXISTS `labour_details`;
CREATE TABLE IF NOT EXISTS `labour_details` (
  `labour_id` int(11) NOT NULL AUTO_INCREMENT,
  `labour_code` varchar(50) NOT NULL,
  `labour_name` varchar(150) NOT NULL,
  `labour_address` varchar(250) NOT NULL,
  `labour_number` varchar(12) NOT NULL,
  `labour_image` varchar(250) NOT NULL,
  PRIMARY KEY (`labour_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour_details`
--

INSERT INTO `labour_details` (`labour_id`, `labour_code`, `labour_name`, `labour_address`, `labour_number`, `labour_image`) VALUES
(1, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(2, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(3, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(4, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(5, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(6, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(7, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(8, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(9, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(10, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf'),
(11, 'icons8-pixel-cat-100.png', 'gtgtg', 'zf', 'fgfg', 'dfgf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_username` varchar(50) NOT NULL,
  `login_email` varchar(50) NOT NULL,
  `login_password` varchar(500) NOT NULL,
  `login_usertype` varchar(50) NOT NULL,
  `login_profile` varchar(250) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_email`, `login_password`, `login_usertype`, `login_profile`) VALUES
(1, 'admin', 'login@gmail.com', 'admin', 'admin', 'admin.png'),
(2, 'naveen', 'naveen@gmail.com', 'ert', 'user', 'icons8-pixel-cat-100.png'),
(3, 'mathew', 'mathew@gmail.com', 'edc', 'user', 'icons8-pixel-cat-100.png'),
(4, 'praveen', 'praveen@gmail.com', 'rfv', 'user', 'icons8-pixel-cat-100.png'),
(5, 'elen', 'elen@gmail.com', 'tgb', 'user', 'icons8-pixel-cat-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `more_product_images`
--

DROP TABLE IF EXISTS `more_product_images`;
CREATE TABLE IF NOT EXISTS `more_product_images` (
  `more_id` int(25) NOT NULL AUTO_INCREMENT,
  `more_productId` int(25) NOT NULL,
  `more_productColorId` int(25) NOT NULL,
  `more_productImage` varchar(250) NOT NULL,
  `more_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `more_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `more_delete` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`more_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_extra_details`
--

DROP TABLE IF EXISTS `product_extra_details`;
CREATE TABLE IF NOT EXISTS `product_extra_details` (
  `extra_id` int(25) NOT NULL AUTO_INCREMENT,
  `extra_product_id` int(50) NOT NULL,
  `extra_color` varchar(50) NOT NULL,
  `extra_color_code` varchar(50) NOT NULL,
  `extra_color_image` varchar(50) NOT NULL,
  `extra_size` varchar(50) NOT NULL,
  `extra_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `extra_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `extra_delete` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`extra_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_extra_details`
--

INSERT INTO `product_extra_details` (`extra_id`, `extra_product_id`, `extra_color`, `extra_color_code`, `extra_color_image`, `extra_size`, `extra_create`, `extra_update`, `extra_delete`) VALUES
(1, 1, 'black', '#000', 'Terracotta-black-front.png', 'M', '2025-09-16 09:54:07', '2025-09-16 09:54:07', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

DROP TABLE IF EXISTS `signin`;
CREATE TABLE IF NOT EXISTS `signin` (
  `signin_id` int(11) NOT NULL AUTO_INCREMENT,
  `signin_login_id` int(25) NOT NULL,
  `signin_email` varchar(50) NOT NULL,
  `signin_password` varchar(500) NOT NULL,
  `signin_username` varchar(50) NOT NULL,
  `signin_profile` varchar(50) NOT NULL,
  PRIMARY KEY (`signin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`signin_id`, `signin_login_id`, `signin_email`, `signin_password`, `signin_username`, `signin_profile`) VALUES
(1, 2, 'naveen@gmail.com', 'ert', 'naveen', ''),
(2, 2, 'naveen@gmail.com', 'ert', 'naveen', 'icons8-pixel-cat-100.png'),
(3, 3, 'mathew@gmail.com', 'edc', 'mathew', 'icons8-pixel-cat-100.png'),
(4, 4, 'praveen@gmail.com', 'rfv', 'praveen', 'icons8-pixel-cat-100.png'),
(5, 5, 'elen@gmail.com', 'tgb', 'elen', 'icons8-pixel-cat-100.png');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_items`
--

DROP TABLE IF EXISTS `wishlist_items`;
CREATE TABLE IF NOT EXISTS `wishlist_items` (
  `wishlist_id` int(25) NOT NULL AUTO_INCREMENT,
  `wishlist_image` varchar(500) NOT NULL,
  `wishlist_overlay_image` varchar(500) NOT NULL,
  `wishlist_name` varchar(50) NOT NULL,
  `wishlist_category` varchar(50) NOT NULL,
  `wishlist_price` varchar(50) NOT NULL,
  PRIMARY KEY (`wishlist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

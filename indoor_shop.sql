-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2025 at 04:00 AM
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
  `displayed_item_description` varchar(750) NOT NULL,
  `displayed_item_rate` varchar(50) NOT NULL,
  `displayed_item_quandity` varchar(50) NOT NULL,
  `displayed_item_sort` int(11) NOT NULL COMMENT '1 best seller,2 featured,3 sales',
  `displayed_item_h1` varchar(50) NOT NULL,
  `displayed_item_h1_des` varchar(750) NOT NULL,
  `displayed_item_h2` varchar(50) NOT NULL,
  `displayed_item_h2_des` varchar(750) NOT NULL,
  PRIMARY KEY (`displayed_item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `displayed_items`
--

INSERT INTO `displayed_items` (`displayed_item_id`, `displayed_item_image`, `displayed_item_overlay_image`, `displayed_item_name`, `displayed_item_category`, `displayed_item_description`, `displayed_item_rate`, `displayed_item_quandity`, `displayed_item_sort`, `displayed_item_h1`, `displayed_item_h1_des`, `displayed_item_h2`, `displayed_item_h2_des`) VALUES
(1, 'Terracotta-blue-front.png', 'Terracotta-blue-use.jpg', 'terracotta plant pot', 'Pot', 'Plant pot in glazed terracotta. The plant pot has a reactive glaze that creates variegated colouring, giving each one a unique appearance. Height 14.5 cm. Diameter 17.5 cm.', 'Rs. 1,199.00', '835', 1, 'Stylish Blue Ceramic Pot', 'This textured blue ceramic pot blends modern design with timeless charm. Perfect for indoor plants or herbs, it adds elegance and a calming touch to any room decor.', 'Elegant Blue Ceramic Planter', 'This blue ceramic planter features a rich glaze and modern design, perfect for plants or herbs. Its sturdy build and timeless style add a calming, sophisticated touch to any interior space.'),
(2, 'womenvase.png', 'womenvase-use.jpg', 'Stoneware candle holder', 'Decor', 'Large vase made from stoneware, inspired by ancient statues and lush nature. Add a touch of class and colour to your interior with this detailed vase, featuring a glossy glaze and a handpainted look. Approx. diameter 15 cm. Height 28 cm.', 'Rs. 1,299.00', '499', 1, 'care guide', 'Bring your clean, previously loved clothing or textiles to one of our stores — they can be from any brand.', 'A Mediterranean-Inspired Ceramic Head Vase', 'This ceramic head vase features a serene female bust crowned with lemons and green leaves, inspired by Mediterranean charm. Perfect for plants, flowers, or as a statement décor piece, it blends art and function beautifully. Its vibrant colors, detailed craftsmanship, and glossy finish bring elegance, freshness, and cultural style to any space.'),
(4, 'stand.png', 'stand-use.jpg', 'Two-tiered tray', 'Decor', 'This modern two-tier plant stand features a sleek cream finish and a minimalist arched design. Perfect for displaying plants, herbs, or décor items, it offers style and functionality in one piece. Its sturdy build and compact footprint make it ideal for enhancing small spaces with elegance and organization.', 'Rs. 1,999.00', '234', 2, 'Modern Two-Tier Plant Stand', 'Stylish cream stand with two tiers, perfect for plants, décor, and saving space.', 'Minimalist Two-Tier Plant Stand', 'This elegant two-tier plant stand features a sleek cream finish and modern arch design, perfect for displaying plants or décor while saving space stylishly.'),
(5, 'sheetdarkgreen.png', 'sheetdarkgreen-use.jpg', 'Cotton single duvet cover set', 'Bedroom', 'Sink into comfort with this rich, dark green duvet cover and pillowcase set. The deep, earthy tone brings a sense of tranquility and a touch of nature-inspired elegance to your bedroom. Perfect for creating a stylish, serene retreat. Enjoy a soft, cozy night\'s sleep with this inviting bedding.', 'Rs. 1,699.00', '132', 2, 'Olive Bedding Set', 'This dark green duvet and pillow brings natural, calming elegance for a peaceful night\'s sleep.', 'Deep Forest Comfort', 'This dark green duvet and pillowcase set offers a serene, rich color to transform your bedroom into a tranquil, stylish retreat for restful sleep.'),
(6, 'Ruffle-trimmed Cushion Cover - Orange_striped-front.png', 'Ruffle-trimmed Cushion Cover - Orange_striped-fabric.jpg', 'Ruffle-trimmed Cushion Cover', 'Decor', 'Add a touch of playful coastal charm with this peach and cream striped cushion cover. The cheerful vertical pattern and soft colors instantly brighten your sofa, armchair, or bed. It’s the perfect, simple accent piece to inject freshness and style into any room\'s decor.', 'Rs. 1,199.00', '1k', 2, 'Striped Accent Pillow', 'Orange and white stripes make this cushion cover a bright, playful, and cheerful home accent.', 'Chic Striped Cushion', 'This peach and cream striped cushion cover instantly brightens any space. The playful pattern adds a fresh, cheerful, and stylish accent to your sofa or bed.'),
(7, 'candle-front.jpg', 'candle-use.jpg', 'Cork-lid scented candle', 'Decor', ' This Sundried Linen Scented Candle captures the fresh, clean scent of laundry day. The crisp, invigorating fragrance features top notes of cotton, apple, and white musk. Housed in a clear glass jar with a cork lid, it adds a touch of simple, modern elegance to any room.', 'Rs. 299.00', '123', 3, 'Cotton Musk Candle', 'The Sundried Linen candle offers a fresh, clean scent with notes of cotton and apple.', 'Fresh Linen Fragrance', 'Enjoy the Sundried Linen candle with crisp notes of cotton, apple, and white musk. Its clean scent beautifully freshens any space.'),
(8, 'fourmug-front.jpg', 'fourmug-use.jpg', '4-pack espresso cups', 'Kitchen', 'Elevate your morning ritual with this set of four stoneware mugs. Each piece features a unique, reactive glaze in earthy, neutral tones, ensuring no two are exactly alike. Their minimalist, handleless design offers a comfortable, rustic feel, perfect for enjoying coffee, tea, or even small desserts.', 'Rs. 1,499.00', '115', 3, 'Handleless Stoneware', 'This set of four small stoneware mugs features a unique, natural-look glaze for rustic charm.', 'Artisan Ceramic Mugs', 'Enjoy a perfectly sized cup from this four-piece stoneware set. The unique, speckled matte glazes bring natural, earthy charm to your kitchen.'),
(9, 'Six The Residence Metal & Linen Lounge Chair-angle.png', 'Six The Residence Metal & Linen Lounge Chair-use.jpg', 'Metal& Linen Lounge Chair', 'Living Room', 'This elegant lounge chair features a striking contrast between its slender black metal frame and plush, cream-colored linen cushions. The deep seat and soft, oversized pillows invite relaxation, while the minimalist design adds a touch of modern, sophisticated comfort to any living space or reading nook.', 'Rs. 4,899.00', '6', 3, 'Minimalist Armchair', 'This linen-upholstered armchair with a black metal frame delivers minimalist style and maximum comfort.', 'Sleek Comfort Seating', 'Relax in this modern lounge chair featuring a minimalist black metal frame and soft, oversized linen cushions. It\'s the perfect statement piece.'),
(10, 'fruitbowl-front.jpg', 'fruitbowl-use.jpg', 'Stoneware Bowls', 'Kitchen', 'This set of four stoneware snack bowls brings a rustic, organic feel to your table. Each bowl features a unique, reactive glaze in varying neutral shades, from creamy white to speckled beige. Perfect for serving sauces, dips, nuts, or small side dishes, these bowls offer simple, artisanal elegance.', 'Rs. 2,299.00', '1.5k', 0, 'Neutral Serving Bowls', 'Small, glazed stoneware bowls in neutral shades are ideal for dips, nuts, or condiments.', 'Artisan Dipping Bowls', 'This four-pack of small stoneware bowls features beautiful, unique reactive glazes. They are perfect for serving dips, spices, or appetizers.'),
(11, 'mirror.png', 'mirror-use.jpg', 'Mango Wood Mirror', 'Decor', 'This striking asymmetrical mirror boasts a unique, organic shape framed in rich, dark brown wood. Its fluid lines and natural aesthetic create a captivating focal point, adding modern artistry and depth to any wall. Perfect for an entryway, living room, or bedroom seeking a touch of distinctive design.', 'Rs. 2,499.00', '250', 0, 'Asymmetrical Wood Mirror', 'A dark wood-framed mirror with an organic, asymmetrical shape adds artistic flair.', 'Artistic Accent Mirror', 'This unique, organically shaped mirror features a rich dark wood frame. It\'s a perfect artistic accent for any contemporary space.'),
(12, 'greychair-angle.jpg', 'greychair-use.jpg', 'Lounge chair', 'Living Room', 'This stylish armchair combines plush, light-grey boucle fabric with a sleek chrome metal frame for a cozy, yet modern look. The rounded armrests and generous cushioning offer exceptional comfort, while the exposed frame provides a touch of contemporary industrial design. Perfect for a chic reading corner or living room accent.', 'Rs. 6,199.00', '12', 0, 'Contemporary Boucle Seating', 'A cozy, light-grey boucle chair with a sleek, modern chrome frame for stylish comfort.', 'Modern Comfort Armchair', 'This chic armchair features plush grey boucle upholstery and a minimalist chrome frame. It provides luxurious comfort with a clean, modern aesthetic.'),
(14, 'lamp-front.jpg', 'lamp-use.jpg', 'lamb', 'decor', 'This oval-shaped paper lantern brings a soft, diffused glow and a touch of minimalist elegance to any room. Its delicate, ribbed texture and natural off-white hue create a warm, inviting ambiance. Perfect for adding a modern, airy feel as a ceiling fixture or decorative accent in a serene space.', 'Rs. 1,499.00', '248', 2, 'Oval Paper Lamp', 'A simple, elegant oval paper lantern provides a soft, diffused light for any room.', 'Soft Glow Light', 'This elegant oval paper lantern diffuses light beautifully, adding a soft, warm ambiance. Its minimalist design enhances any modern space.'),
(15, 'Cotton terry dressing gown.jpg', 'Cotton terry dressing gown_use.jpg', 'Cotton terry dressing gown', 'Balcony & Outdoor', 'Indulge in luxurious comfort with this soft cotton terry dressing gown in a calming beige tone. Perfect for post-bath relaxation, it features a cozy shawl collar, matching tie belt, and practical front pockets. The absorbent material makes it an essential for spa-like comfort in your own home.', 'Rs.2,999.00', '149', 0, 'Cozy Beige Robe', 'This soft cotton terry dressing gown provides cozy, absorbent comfort with a tie belt.', 'Absorbent Cotton Comfort', 'Wrap up in this soft beige cotton terry dressing gown. It features a shawl collar and pockets for ultimate post-shower or lounge comfort.'),
(16, 'Hanging planter box.jpg', 'Hanging planter box_use.jpg', 'Hanging planter box', 'Pot', 'This stylish hanging planter box in a soft, neutral beige offers a modern way to display your favorite plants. Featuring a fluted upper design and a discreet lower tray for drainage, it\'s perfect for herbs, succulents, or small flowers. Its sleek, oval shape saves space while adding contemporary flair.', 'Rs.2,699.00', '150', 1, 'Oval Hanging Planter', 'A fluted beige hanging planter with a drainage tray, ideal for herbs and small plants.', 'Modern Hanging Garden', 'This beige fluted hanging planter offers a sleek home for plants. Its clever design includes drainage, perfect for modern indoor gardening.');

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

-- --------------------------------------------------------

--
-- Table structure for table `xtraproductcolorform`
--

DROP TABLE IF EXISTS `xtraproductcolorform`;
CREATE TABLE IF NOT EXISTS `xtraproductcolorform` (
  `proClr_id` int(50) NOT NULL AUTO_INCREMENT,
  `proClr_productId` int(50) NOT NULL,
  `proClr_colorname` varchar(50) NOT NULL,
  `proClr_colorCode` varchar(50) NOT NULL,
  `proClr_image` varchar(250) NOT NULL,
  PRIMARY KEY (`proClr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xtraproductcolorform`
--

INSERT INTO `xtraproductcolorform` (`proClr_id`, `proClr_productId`, `proClr_colorname`, `proClr_colorCode`, `proClr_image`) VALUES
(1, 1, 'black', '#000000', 'Terracotta-black-front.png'),
(2, 1, 'white', '#fffffff', 'Terracotta-white-front.jpg'),
(3, 5, 'old rose', '#C08081', 'Cotton single duvet cover set - Old rose -front.png'),
(5, 5, 'olive green', '#636B2F', 'sheetdarkgreen.png');

-- --------------------------------------------------------

--
-- Table structure for table `xtraproductimage`
--

DROP TABLE IF EXISTS `xtraproductimage`;
CREATE TABLE IF NOT EXISTS `xtraproductimage` (
  `proImg_id` int(50) NOT NULL AUTO_INCREMENT,
  `proImg_productId` int(50) NOT NULL,
  `proImg_colorid` int(50) NOT NULL,
  `proImg_img` varchar(500) NOT NULL,
  `proImg_insert` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `proImg_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `proImg_delete` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`proImg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xtraproductimage`
--

INSERT INTO `xtraproductimage` (`proImg_id`, `proImg_productId`, `proImg_colorid`, `proImg_img`, `proImg_insert`, `proImg_update`, `proImg_delete`) VALUES
(1, 1, 3, 'Terracotta-blue-size.jpg', '2025-10-03 10:12:18', '2025-10-03 10:12:18', b'0'),
(2, 1, 3, 'Terracotta-blue-two.jpg', '2025-10-03 10:16:09', '2025-10-03 10:16:09', b'0'),
(3, 1, 3, 'Terracotta-blue-two.jpg', '2025-10-03 10:16:22', '2025-10-03 10:16:22', b'0'),
(4, 1, 3, 'Terracotta-blue-two.jpg', '2025-10-03 10:16:53', '2025-10-03 10:16:53', b'0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

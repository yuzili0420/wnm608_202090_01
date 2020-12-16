-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 11:35 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuzi_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category`, `image_main`, `date_create`, `date_modify`, `price`, `quantity`, `description`) VALUES
(1, '3CE MINI MULTI EYE COLOR PALETTE #DIAMOND GLINT', 'beauty', 'img/beauty/3ce_mini.jpg', '2020-12-16 10:50:52', '2020-12-16 10:50:52', 20.00, '1', 'Beautifully glowing translucent glitters are compactly packed in a 4-color eyeshadow palette to complete your sparkling eye makeup. Condition: 99% new'),
(2, '3CE TRIPLE SHADOW #OVERSTAY', 'beauty', 'img/beauty/3ce_overstay.jpg', '2020-12-16 11:02:14', '2020-12-16 11:02:14', 16.00, '1', '3 intense shades that sparkle from every angle, soft & silky texture with world class color payoff. Condition:98% new'),
(3, '3CE TRIPLE SHADOW #NO NO NO', 'beauty', 'img/beauty/3ce_nonono.jpg', '2020-12-16 11:03:57', '2020-12-16 11:03:57', 18.00, '1', 'The Bordeaux shade is partnered with muted shimmering shades, delivering a sensuous feel. Condition: 99% new'),
(4, 'KKW BEAUTY FOREVER HIGHLIGHTER', 'beauty', 'img/beauty/kkw_highlighter.jpg', '2020-12-16 11:06:02', '2020-12-16 11:06:02', 15.00, '1', 'Shimmering champagne gold. Net Wt. 0.14oz (3.85 g). Condition: 99% new'),
(5, 'COLORPOP THE FULL BEAT', 'beauty', 'img/beauty/colorpop_sponge.jpg', '2020-12-16 11:09:32', '2020-12-16 11:09:32', 16.00, '1', 'With this 5 piece Blending Sponge Kit, we’ve got any look, technique, and beat covered! From airbrushed finish to snatched contour, this kit is all you need. Condition: 99% new'),
(6, 'FLOWER KNOWS × PRETTY ROCK BABY BLUSH DUO', 'beauty', 'img/beauty/flower_blushduo.jpg', '2020-12-16 11:12:21', '2020-12-16 11:12:21', 28.00, '1', 'A blush duo in peach and rosy color. Net Wt. 13g * 2. Condition: 99% new'),
(7, 'FLOWER KNOWS × PRETTY ROCK BABY LIP TINT # LIL ROSE', 'beauty', 'img/beauty/flower_liptint.jpg', '2020-12-16 11:14:47', '2020-12-16 11:14:47', 7.00, '1', 'Glossy lip tint that can be layered up for different look. Net Wt 2.2g. Condition: 96% new'),
(8, 'HOOLA MATTE BRONZER MATTE POWDER FOR FACE', 'beauty', 'img/beauty/hoola_bronzer.jpg', '2020-12-16 11:16:53', '2020-12-16 11:16:53', 28.00, '1', 'Sweep your shade of Hole all over face for a matte, natural-looking bronze. For a more contoured look, apply a deeper shade in the hollows of your cheekbones. Condition: 99% new'),
(9, 'EVE LOM CLEANSER 200ML', 'beauty', 'img/beauty/', '2020-12-16 11:19:27', '2020-12-16 11:19:27', 69.00, '1', 'This unique balm formula that contains a unique signature blend of 4 aromatic oils to cleanse, hydrate, tone, exfoliate and remove every trace of makeup. Condition: brand-new'),
(10, 'KIKO TUSCAN SUNSHINE PERFECTING POWDER', 'beauty', 'img/beauty/evelom_cleanser.jpg', '2020-12-16 11:20:41', '2020-12-16 11:20:41', 6.00, '1', 'Perfecting powder with fixing and highlighting properties. Condition: 96% new.'),
(11, 'JO MALONE COLOGNE SET', 'beauty', 'img/beauty/jomalone_set.jpg', '2020-12-16 11:22:31', '2020-12-16 11:22:31', 88.00, '1', '30ml * 2 in Red Roses and Wood Sage & Sea Salt. Condition: 90% left.'),
(12, 'FENTY BEAUTY SUN STALK\'R INSTANT WARMTH BRONZER', 'beauty', 'img/beauty/fenty_bronzer.jpg', '2020-12-16 11:24:54', '2020-12-16 11:24:54', 23.00, '1', 'INSTANT SUN-SOAKED GLOW THAT LASTS. BLENDABLE, BUILDABLE, TRANSFER-RESISTANT. Fill weight: 6.23 g/ 0.22 oz. Condition: 98% new');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

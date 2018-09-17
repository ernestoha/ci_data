-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2018 at 03:03 AM
-- Server version: 5.5.60
-- PHP Version: 5.4.45-0+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE `ci_data` /*!40100 DEFAULT CHARACTER SET utf8 */;
GRANT insert,alter,delete,drop,update,create,select,execute ON ci_data.* TO ci_data@'localhost' IDENTIFIED BY 'ci_data';
FLUSH privileges;

use `ci_data`;

--
-- Database: `ci_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_COLOR_NAME` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`) VALUES
(1, 'Amaranth'),
(2, 'Amber'),
(3, 'Amethyst'),
(4, 'Apricot'),
(5, 'Aquamarine'),
(6, 'Azure'),
(7, 'Baby Blue'),
(8, 'Beige'),
(9, 'Black'),
(10, 'Blue'),
(11, 'Blue-Green'),
(12, 'Blue-Violet'),
(13, 'Blush'),
(14, 'Bronze'),
(15, 'Brown'),
(16, 'Burgundy'),
(17, 'Byzantium'),
(18, 'Carmine'),
(19, 'Cerise'),
(20, 'Cerulean'),
(21, 'Champagne'),
(22, 'Chartreuse Green'),
(23, 'Chocolate'),
(24, 'Cobalt Blue'),
(25, 'Coffee'),
(26, 'Copper'),
(27, 'Coral'),
(28, 'Crimson'),
(29, 'Cyan'),
(30, 'Desert Sand'),
(31, 'Electric Blue'),
(32, 'Emerald'),
(33, 'Erin'),
(34, 'Gold'),
(35, 'Gray'),
(36, 'Green'),
(37, 'Harlequin'),
(38, 'Indigo'),
(39, 'Ivory'),
(40, 'Jade'),
(41, 'Jungle Green'),
(42, 'Lavender'),
(43, 'Lemon'),
(44, 'Lilac'),
(45, 'Lime'),
(46, 'Magenta'),
(47, 'Magenta Rose'),
(48, 'Maroon'),
(49, 'Mauve'),
(50, 'Navy Blue'),
(51, 'Ochre'),
(52, 'Olive'),
(53, 'Orange'),
(54, 'Orange-Red'),
(55, 'Orchid'),
(56, 'Peach'),
(57, 'Pear'),
(58, 'Periwinkle'),
(59, 'Persian Blue'),
(60, 'Pink'),
(61, 'Plum'),
(62, 'Prussian Blue'),
(63, 'Puce'),
(64, 'Purple'),
(65, 'Raspberry'),
(66, 'Red'),
(67, 'Red-Violet'),
(68, 'Rose'),
(69, 'Ruby'),
(70, 'Salmon'),
(71, 'Sangria'),
(72, 'Sapphire'),
(73, 'Scarlet'),
(74, 'Silver'),
(75, 'Slate Gray'),
(76, 'Spring Bud'),
(77, 'Spring Green'),
(78, 'Tan'),
(79, 'Taupe'),
(80, 'Teal'),
(81, 'Turquoise'),
(82, 'Violet'),
(83, 'Viridian'),
(84, 'White'),
(85, 'Yellow');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_color` smallint(6) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_COLOR` (`id_color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `FK_COLOR` FOREIGN KEY (`id_color`) REFERENCES `colors` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

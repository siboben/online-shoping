-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2017 at 09:33 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clothinng`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'admin'),
(2, 'Pivot', 'pivot'),
(3, 'The Premier', 'premier'),
(4, 'Campus', 'campus'),
(5, 'Arsenal', 'arsenal'),
(6, 'Mutavu', 'mutavu');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_in`
--

CREATE TABLE IF NOT EXISTS `cloth_in` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `size` varchar(20) NOT NULL,
  `style` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `post_price` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stock_code` (`stock_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `cloth_in`
--

INSERT INTO `cloth_in` (`id`, `stock_code`, `name`, `color`, `size`, `style`, `category`, `picture`, `quantity`, `price`, `total`, `post_price`) VALUES
(21, 'STKCKK', 'Costume', 'Kaki', 'Medium', '2 button', 'Kids', '240x240_KhakiSuit.jp', 98, 15000, 1470000, 20000),
(50, 'STKTLWBJ', 'Trousers', 'Black', 'Large', 'Jeans', 'Women', '', 90, 5000, 450000, 6000),
(18, 'STKSLWBN', 'Shirts', 'Black', 'Large', 'Nylon', 'Women', 'Tulips.jpg', 20, 1000, 20000, 1500),
(16, 'STKTMMBUJ', 'Trousers', 'Blue', 'Medium', 'jeans', 'Men', 'Tulips.jpg', 18, 20000, 360000, 100000),
(20, 'STKCSMW1', 'Costume', 'White', 'Small', '1button', 'Men', 'Tulips.jpg', 14, 2000, 28000, 2500),
(19, 'STKCKW', 'Costume', 'White', 'Kids', '2 button', 'Kids', '', 10, 20000, 200000, 25000),
(22, 'STKCKB', 'Costume', 'Black', 'Kids', '2 button', 'Kids', '', 289, 15000, 4335000, 20000),
(23, 'STKCLMW1', 'Costume', 'White', 'Large', '1 button', 'Men', 'Jellyfish.jpg', 200, 35000, 7000000, 40000),
(24, 'STKCLMW2', 'Costume', 'White', 'Large', '2 button', 'Men', 'jos-a-bank-stays-coo', 300, 25000, 7500000, 30000),
(25, 'STKCLMB1', 'Costume', 'Black', 'Large', '1 button', 'Men', '', 150, 35000, 5250000, 40000),
(27, 'STKCLMK1', 'Costume', 'Kaki', 'Large', '1 button', 'Men', '', 150, 25000, 3750000, 30000),
(28, 'STKCLMK2', 'Costume', 'Kaki', 'Large', '2 button', 'Men', '', 230, 32000, 7360000, 37000),
(29, 'STKCMMB1', 'Costume', 'Black', 'Medium', '1 button', 'Men', '', 95, 35000, 3325000, 40000),
(30, 'STKCMMB2', 'Costume', 'Black', 'Medium', '2 button', 'Men', '', 425, 25000, 10625000, 30000),
(31, 'STKCMMK1', 'Costume', 'Kaki', 'Medium', '1 button', 'Men', '', 100, 25000, 2500000, 30000),
(32, 'STKCMMK2', 'Costume', 'Kaki', 'Medium', '2 button', 'Men', '', 396, 40000, 15840000, 50000),
(33, 'STKCMMW1', 'Costume', 'White', 'Medium', '1 button', 'Men', '', 200, 50000, 10000000, 60000),
(34, 'STKCMMW2', 'Costume', 'White', 'Medium', '2 button', 'Men', '', 1000, 25000, 25000000, 40000),
(35, 'STKCSMB2', 'Costume', 'Black', 'Small', '2 button', 'Men', '', 120, 30000, 3600000, 40000),
(36, 'STKCSMW2', 'Costume', 'White', 'Small', '2 button', 'Men', '', 150, 35000, 5250000, 37000),
(37, 'STKCSMK1', 'Costume', 'Kaki', 'Small', '1 button', 'Men', '', 1000, 25000, 25000000, 30000),
(38, 'STKCSMK2', 'Costume', 'Kaki', 'Small', '2 button', 'Men', '', 150, 30000, 4500000, 37000),
(39, 'STKTLMBJ', 'Trousers', 'Black', 'Large', 'Jeans', 'Men', '', 96, 9000, 864000, 10000),
(40, 'STKTLMBUJ', 'Trousers', 'Blue', 'Large', 'Jeans', 'Men', '', 200, 8000, 1600000, 9000),
(41, 'STKTLMBC', 'Trousers', 'Black', 'Large', 'Cotton', 'Men', '', 200, 4500, 900000, 6000),
(42, 'STKTLMKC', 'Trousers', 'Kaki', 'Large', 'Cotton', 'Men', '', 100, 4500, 450000, 6000),
(43, 'STKTMMBJ', 'Trousers', 'Black', 'Large', 'Jeans', 'Men', '', 96, 8500, 864000, 10000),
(44, 'STKTMMBC', 'Trousers', 'Black', 'Medium', 'Cotton', 'Men', '', 100, 5000, 500000, 6000),
(45, 'STKTMMBKC', 'Trousers', 'Kaki', 'Medium', 'Cotton', 'Men', '', 200, 4500, 900000, 5500),
(46, 'STKTSMBJ', 'Trousers', 'Black', 'Small', 'Jeans', 'Men', '', 100, 7000, 700000, 8000),
(47, 'STKTSMBUJ', 'Trousers', 'Blue', 'Small', 'Jeans', 'Men', '', 150, 8500, 1275000, 9500),
(48, 'STKTSMBC', 'Trousers', 'Black', 'Small', 'Cotton', 'Men', '', 450, 8000, 3600000, 9000),
(49, 'STKTSMKC', 'Trousers', 'Kaki', 'Small', 'Cotton', 'Men', '', 120, 4500, 540000, 6000),
(51, 'STKTLWBUJ', 'Trousers', 'Blue', 'Large', 'Jeans', 'Women', '', 1000, 4500, 4500000, 6000),
(52, 'STKTLWBC', 'Trousers', 'Black', 'Large', 'Cotton', 'Women', '', 450, 5000, 2250000, 6000),
(53, 'STKTLWKC', 'Trousers', 'Kaki', 'Large', 'Cotton', 'Women', '', 100, 5000, 500000, 6000),
(54, 'STKTMWBJ', 'Trousers', 'Black', 'Medium', 'Jeans', 'Women', '', 100, 5000, 500000, 6000),
(55, 'STKTMWBUJ', 'Trousers', 'Blue', 'Medium', 'Jeans', 'Women', '', 150, 5000, 750000, 6000),
(56, 'STKTMWBC', 'Trousers', 'Black', 'Medium', 'Cotton', 'Women', '', 450, 4500, 2025000, 5500),
(57, 'STKTMWBKC', 'Trousers', 'Kaki', 'Medium', 'Cotton', 'Women', '', 450, 4500, 2025000, 5500),
(58, 'STKTSWBJ', 'Trousers', 'Black', 'Small', 'Jeans', 'Women', '', 150, 5000, 750000, 6000),
(59, 'STKTSWBUJ', 'Trousers', 'Blue', 'Small', 'Jeans', 'Women', '', 200, 5000, 1000000, 6000),
(60, 'STKTSWBC', 'Trousers', 'Black', 'Small', 'Cotton', 'Women', '', 120, 5000, 600000, 6000),
(62, 'STKSLMBN', 'Shirts', 'Black', 'Large', 'Nylon', 'Men', '', 100, 3000, 300000, 4000),
(63, 'STKSLMWN', 'Shirts', 'White', 'Large', 'Nylon', 'Men', '', 400, 3000, 1200000, 4000),
(64, 'STKSLMBC', 'Trousers', 'Black', 'Large', 'Cotton', 'Men', '', 200, 4000, 800000, 5000),
(65, 'STKSLMWC', 'Shirts', 'White', 'Large', 'Cotton', 'Men', '', 100, 4500, 450000, 6000),
(66, 'STKSMMBN', 'Shirts', 'Black', 'Medium', 'Nylon', 'Men', '', 300, 3000, 900000, 4000),
(67, 'STKSMMWN', 'Shirts', 'White', 'Medium', 'Nylon', 'Men', '', 200, 3000, 600000, 4000),
(68, 'STKSMMBC', 'Shirts', 'Black', 'Medium', 'Cotton', 'Men', '', 150, 5000, 750000, 6000),
(69, 'STKSMMWC', 'Shirts', 'White', 'Medium', 'Cotton', 'Men', '', 1000, 5000, 5000000, 6000),
(70, 'STKSSMBN', 'Shirts', 'Black', 'Small', 'Nylon', 'Men', '', 89, 4500, 400500, 5500),
(71, 'STKSSMWN', 'Shirts', 'White', 'Small', 'Nylon', 'Men', '', 150, 4500, 675000, 5500),
(72, 'STKSSMBC', 'Shirts', 'Black', 'Small', 'Cotton', 'Men', '', 1000, 5000, 5000000, 6000),
(73, 'STKSSMWC', 'Shirts', 'White', 'Small', 'Cotton', 'Men', '', 150, 5000, 750000, 6000),
(74, 'STKSLWWN', 'Shirts', 'White', 'Large', 'Nylon', 'Women', '', 150, 2500, 375000, 3000),
(75, 'STKSLWBC', 'Shirts', 'Black', 'Large', 'Cotton', 'Women', '', 150, 2500, 375000, 3000),
(76, 'STKSLWWC', 'Shirts', 'White', 'Large', 'Cotton', 'Women', '', 200, 2500, 500000, 3000),
(77, 'STKSMWBN', 'Shirts', 'Black', 'Medium', 'Nylon', 'Women', '', 150, 2500, 375000, 3000),
(78, 'STKSMWWN', 'Shirts', 'White', 'Medium', 'Nylon', 'Women', '', 100, 2500, 250000, 3000),
(79, 'STKSMWBC', 'Shirts', 'Black', 'Medium', 'Cotton', 'Women', '', 150, 2500, 375000, 3000),
(80, 'STKSMWWC', 'Shirts', 'White', 'Small', 'Cotton', 'Women', '', 150, 2500, 375000, 3000),
(81, 'STKSSWBN', 'Shirts', 'Black', 'Small', 'Nylon', 'Women', '', 100, 2500, 250000, 3000),
(82, 'STKSSWWN', 'Shirts', 'White', 'Small', 'Nylon', 'Women', '', 100, 2500, 250000, 3000),
(83, 'STKSSWBC', 'Shirts', 'Black', 'Small', 'Cotton', 'Women', '', 100, 2500, 250000, 3000),
(84, 'STKSSWWC', 'Shirts', 'White', 'Small', 'Cotton', 'Women', '', 200, 2500, 500000, 3000),
(85, 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 4654, 654654, 655, 5465);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `color_name` (`color_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color_name`) VALUES
(1, 'Black'),
(2, 'White'),
(3, 'Kaki'),
(4, 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `names`, `phone`, `email`, `comments`) VALUES
(6, 'These are available comments and suggest', 'These are ', 'These are available com@ments ', 'These are available comments and suggestions. These are available comments and suggestions These are available comments and suggestions\r\n\r\nNo comment available\r\nBack'),
(7, 'sibomana', '0722979961', 'siboben@yahoo.com', 'wow this is the best site'),
(8, 'sibomana', '0722979961', 'siboben@yahoo.com', 'wow this is the best site'),
(9, 'sibomana', '0785535483', 'siboben@yahoo.com', 'welcome to online clothes shopingsystem');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `gender`, `phone`, `email`, `username`, `password`) VALUES
(95, 'Mutavu', 'Grace', 'Female', '0725339460', 'kanyanateta@yahoo.fr', 'customer', '91ec1f9324753048c0096d036a694f86'),
(96, 'Sibomana', 'benjamin', 'Male', '0722979961', 'siboben@yahoo.com', 'campus', '162832ab572046b2dd00c343cf5096c7'),
(97, 'SAFARI ', 'Cyprianho', 'Male', '0726767500', 'sacyprianho@yahoo.co.uk', 'ntambara', '7e48fbd4896633e186da0b97c10302c1'),
(98, 'gakuru', 'valens', 'Male', '0722976696', 'siboben@yahoo.uk', 'ben', '7fe4771c008a22eb763df47d19e2c6aa'),
(101, 'Rukundo', 'Bosco', 'Male', '0788846708', 'bosco@yahoo.fr', 'bosco', '13036a5c965bb73653a5de95b89ae4c2'),
(100, 'Karengera', 'Evode', 'Male', '0788562365', 'karengera@yahoo.com', 'evode', 'db9900eab05962dbb81375bea90ba41a'),
(102, 'fmdvfhxcjkv', 'kjvhkcjvb', 'Male', 'jfdhgiu', 'kjfgbvb@fdg.rft', 'ikbufhvcb', '80406cc5c137c51b9cdc2773835b058b');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ordering_date` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `style` varchar(20) NOT NULL,
  `category` varchar(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `district` varchar(20) NOT NULL,
  `account` int(20) NOT NULL,
  `shipping_options` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordering_date`, `id`, `phone`, `email`, `name`, `color`, `size`, `style`, `category`, `quantity`, `price`, `total`, `district`, `account`, `shipping_options`) VALUES
('22-06-2014 12:44:34', 69, '0722979961', 'siboben@yahoo.com', 'Costume', 'White', 'Kids', '2 button', 'Kids', 10, 25000, 250000, 'Nyabihu', 0, 'Sending to Customer'),
('25-08-2014 02:04:32', 70, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '2 button', 'Men', 3, 30000, 90000, 'Rusizi', 0, 'Pickup From Seller'),
('25-08-2014 03:20:59', 71, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '1 button', 'Men', 3, 40000, 120000, 'huye', 0, 'Pickup From Seller'),
('26-08-2014 09:29:15', 72, '0722979961', 'siboben@yahoo.com', 'Costume', 'White', 'Small', '1button', 'Men', 3, 2500, 7500, 'Rusizi', 0, 'Pickup From Seller'),
('26-08-2014 05:37:11', 73, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '1 button', 'Men', 2, 40000, 80000, 'Nyabihu', 0, 'Sending to Customer'),
('27-08-2014 07:27:42', 74, '0722979961', 'siboben@yahoo.com', 'Trousers', 'Black', 'Large', 'Jeans', 'Women', 2, 6000, 12000, 'huye', 0, 'Pickup From Seller'),
('27-08-2014 09:15:16', 75, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '2 button', 'Men', 3, 30000, 90000, 'kicukiro', 0, 'Pickup From Seller'),
('27-08-2014 10:35:06', 76, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Large', '1 button', 'Men', 1, 40000, 40000, 'Nyabihu', 0, 'Pickup From Seller'),
('27-08-2014 11:40:07', 77, '0722979961', 'siboben@yahoo.com', 'Trousers', 'Black', 'Large', 'Jeans', 'Women', 5, 6000, 30000, 'kamonyi', 0, 'Pickup From Seller'),
('28-08-2014 10:12:13', 78, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '2 button', 'Men', 4, 30000, 120000, 'gasabo', 0, 'Sending to Customer'),
('28-08-2014 10:18:51', 79, '078898782', 'ildephonse20@yahoo.com', 'Costume', 'White', 'Small', '1button', 'Men', 11, 2500, 27500, 'gasabo', 0, 'Sending to Customer'),
('19-06-2014 08:45:08', 66, '0726904360', 'phenias13014@gmail.com', 'Costume', 'Black', 'Large', '2 button', 'Men', 7, 50000, 350000, 'Rusizi', 0, 'Pickup From Seller'),
('19-06-2014 08:45:08', 67, '0726904360', 'phenias13014@gmail.com', 'Costume', 'Black', 'Large', '2 button', 'Men', 7, 50000, 350000, 'Rusizi', 0, 'Pickup From Seller'),
('19-06-2014 08:48:21', 68, '0726904360', 'phenias13014@gmail.com', 'Costume', 'Black', 'Medium', '2 button', 'Kids', 2, 25000, 50000, 'Rusizi', 0, 'Pickup From Seller'),
('19-06-2014 08:39:37', 65, '0726904360', 'phenias13014@gmail.com', 'Costume', 'Black', 'Large', '2 button', 'Men', 3, 50000, 150000, 'Rusizi', 0, 'Sending to Customer'),
('05-06-2014 01:23:57', 63, '0722979961', 'siboben@yahoo.com', 'Trousers', 'Blue', 'Medium', 'jeans', 'Men', 2, 100000, 200000, 'huye', 0, 'Sending to Customer'),
('05-06-2014 01:30:10', 64, '078898782', 'ildephonse20@yahoo.com', 'Costume', 'Kaki', 'Medium', '2 button', 'Kids', 2, 20000, 40000, 'huye', 0, 'Pickup From Seller'),
('01-06-2014 01:52:34', 57, '078898782', 'ildephonse20@yahoo.com', 'Costume', 'White', 'Large', '1 Bouton', 'Men', 5, 25000, 125000, 'huye', 0, 'Pickup From Seller'),
('02-06-2014 09:24:11', 59, '0725916516', 'eugenie@yahoo.com', 'Costume', 'Kaki', 'Large', '2botton', 'Men', 10, 200000, 2000000, 'gisa', 0, 'Pickup From Seller'),
('02-06-2014 09:33:49', 60, '071111', 'jeanne@yahoo.com', 'Costume', 'Kaki', 'Large', '2botton', 'Men', 2, 200000, 400000, 'ki', 0, 'Pickup From Seller'),
('30-08-2014 04:27:11', 82, '0722979961', 'siboben@yahoo.com', 'Shirts', 'Black', 'Small', 'Nylon', 'Men', 1, 5500, 5500, 'Rusizi', 2147483647, '--Select option--'),
('04-06-2014 11:57:37', 62, '0722979961', 'siboben@yahoo.com', 'Costume', 'White', 'Small', '1button', 'Men', 2, 2500, 5000, 'huye', 0, 'Pickup From Seller'),
('30-08-2014 12:31:07', 80, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '2 button', 'Men', 7, 30000, 210000, 'Huye', 456798932, 'Sending to Customer'),
('30-08-2014 12:35:32', 81, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '2 button', 'Kids', 22, 25000, 550000, 'Kibuye', 40000, 'Pickup From Seller'),
('30-08-2014 04:50:16', 83, '0722979961', 'siboben@yahoo.com', 'Shirts', 'Black', 'Small', 'Nylon', 'Men', 2, 5500, 11000, 'Rusizi', 2147483647, 'Pickup From Seller'),
('30-08-2014 04:57:29', 84, '0722979961', 'siboben@yahoo.com', 'Shirts', 'Black', 'Small', 'Nylon', 'Men', 2, 5500, 11000, 'Rusizi', 2147483647, 'Pickup From Seller'),
('30-08-2014 04:58:37', 85, '0722979961', 'siboben@yahoo.com', 'Shirts', 'Black', 'Small', 'Nylon', 'Men', 2, 5500, 11000, 'Rusizi', 2147483647, 'Pickup From Seller'),
('30-08-2014 05:42:28', 86, '0722979961', 'siboben@yahoo.com', 'Shirts', 'Black', 'Small', 'Nylon', 'Men', 2, 5500, 11000, 'Rusizi', 4654657, 'Pickup From Seller'),
('31-08-2014 10:06:52', 90, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Large', '1 button', 'Men', 2, 40000, 80000, 'huye', 2147483647, 'Pickup From Seller'),
('31-08-2014 02:47:37', 89, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '2 button', 'Men', 2, 30000, 60000, 'Huye', 4654657, 'Pickup From Seller'),
('01-09-2014 01:54:50', 91, '0722979961', 'siboben@yahoo.com', 'Trousers', 'Black', 'Large', 'Jeans', 'Women', 3, 6000, 18000, 'huye', 2147483647, 'Pickup From Seller'),
('01-09-2014 10:30:12', 92, '0722979961', 'siboben@yahoo.com', 'Trousers', 'Black', 'Large', 'Jeans', 'Men', 2, 10000, 20000, 'Kibuye', 2147483647, 'Pickup From Seller'),
('01-09-2014 11:29:14', 93, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '2 button', 'Men', 2, 30000, 60000, 'huye', 2147483647, 'Pickup From Seller'),
('02-09-2014 12:50:02', 94, '0725339460', 'kanyanateta@yahoo.fr', 'Costume', 'Black', 'Kids', '2 button', 'Kids', 2, 20000, 40000, 'Kibuye', 2147483647, 'Pickup From Seller'),
('03-09-2014 07:08:28', 95, '0725339460', 'kanyanateta@yahoo.fr', 'Trousers', 'Black', 'Large', 'Jeans', 'Men', 2, 10000, 20000, 'huye', 2147483647, 'Sending to Customer'),
('03-09-2014 09:39:46', 96, '0722979961', 'siboben@yahoo.com', 'Costume', 'Black', 'Medium', '2 button', 'Men', 2, 30000, 60000, 'Rusizi', 2147483647, 'Sending to Customer'),
('04-09-2014 09:04:04', 97, '0788846708', 'bosco@yahoo.fr', 'Costume', 'Black', 'Medium', '2 button', 'Men', 2, 30000, 60000, 'Karongi', 7777, 'Sending to Customer');

-- --------------------------------------------------------

--
-- Table structure for table `shop_keeper`
--

CREATE TABLE IF NOT EXISTS `shop_keeper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `shop_keeper`
--

INSERT INTO `shop_keeper` (`id`, `firstname`, `lastname`, `gender`, `phone`, `email`, `username`, `password`) VALUES
(12, 'SAFARI ', 'Cyprianho', 'Male', '0726767500', 'sacyprianho@yahoo.co.uk', 'ntambara', '7e48fbd4896633e186da'),
(13, 'Mutavu', 'Grace', 'Female', '0725339460', 'kanyanateta@yahoo.fr', 'keeper', '6cc61f49c2ae633aed09');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size_name`) VALUES
(2, 'Medium'),
(3, 'Large'),
(5, 'Small'),
(9, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stock_code` (`stock_code`),
  UNIQUE KEY `stock_code_2` (`stock_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `stock_code`) VALUES
(22, 'STKCMMB2'),
(21, 'STKCMMB1'),
(20, 'STKCMMW2'),
(19, 'STKCMMW1'),
(18, 'STKCLMK2'),
(17, 'STKCLMK1'),
(16, 'STKCLMB2'),
(15, 'STKCLMB1'),
(14, 'STKCLMW2'),
(13, 'STKCLMW1'),
(23, 'STKCMMK1'),
(24, 'STKCMMK2'),
(25, 'STKCSMW1'),
(26, 'STKCSMW2'),
(27, 'STKCSMB1'),
(28, 'STKCSMB2'),
(29, 'STKCSMK1'),
(30, 'STKCSMK2'),
(40, 'STKCKB'),
(41, 'STKCKW'),
(42, 'STKCKK'),
(43, 'STKTLMBJ'),
(44, 'STKTLMBUJ'),
(45, 'STKTLMBC'),
(46, 'STKTLMKC'),
(47, 'STKTMMBJ'),
(48, 'STKTMMBUJ'),
(49, 'STKTMMBC'),
(50, 'STKTMMBKC'),
(51, 'STKTSMBJ'),
(52, 'STKTSMBUJ'),
(53, 'STKTSMBC'),
(54, 'STKTSMKC'),
(55, 'STKTLWBJ'),
(56, 'STKTLWBUJ'),
(57, 'STKTLWBC'),
(58, 'STKTLWKC'),
(59, 'STKTMWBJ'),
(60, 'STKTMWBUJ'),
(61, 'STKTMWBC'),
(62, 'STKTMWBKC'),
(63, 'STKTSWBJ'),
(64, 'STKTSWBUJ'),
(65, 'STKTSWBC'),
(66, 'STKTSWKC'),
(67, 'STKSLMBN'),
(68, 'STKSLMWN'),
(69, 'STKSLMBC'),
(70, 'STKSLMWC'),
(71, 'STKSMMBN'),
(72, 'STKSMMWN'),
(73, 'STKSSMBN'),
(74, 'STKSSMWC'),
(75, 'STKSMMBC'),
(76, 'STKSMMWC'),
(77, 'STKSSMWN'),
(78, 'STKSSMBC'),
(79, 'STKSLWBN'),
(80, 'STKSLWWN'),
(81, 'STKSLWBC'),
(82, 'STKSLWWC'),
(83, 'STKSMWBN'),
(84, 'STKSMWWN'),
(85, 'STKSMWBC'),
(86, 'STKSMWWC'),
(87, 'STKSSWBN'),
(88, 'STKSSWWN'),
(89, 'STKSSWBC'),
(90, 'STKSSWWC');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type_name`) VALUES
(1, 'Costume'),
(2, 'Trousers'),
(8, 'Dresses'),
(7, 'Shirts'),
(9, 'Skirts');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `username`, `password`) VALUES
(16, 'Keeper', 'ntambara', '7e48fbd4896633e186da0b97c10302c1'),
(21, 'administrator', 'armetus', '71ac9852111154e1463723a21625f6f3'),
(22, 'administrator', 'Premier', '71ac9852111154e1463723a21625f6f3'),
(24, 'administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(25, 'Keeper', 'keeper', '6cc61f49c2ae633aed091f22d7868752'),
(26, 'Keeper', 'kk', 'kk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `author`, `price`, `image`) VALUES
(1, 'The Starry Night', 'Van Gogh', 500000, 'product_images/thestarrynight.jpg'),
(3, 'The Scream', 'Edvard Munch', 900000, 'product_images/thescream.jpg'),
(5, 'The Oxcart', 'Nicolae Grigorescu', 100000, 'product_images/theoxcart.jpg'),
(6, 'The American Gothic', 'Grant DeVolson Wood', 25000, 'product_images/theamericangothic.jpg'),
(7, 'Mona Lisa', 'Leonardo DaVinci', 300000, 'product_images/themonalisa.jpg'),
(8, 'Girl with a Pearl Earring', 'Johannes Vermeer', 40000, 'product_images/thegirlwiththeearring.jpg'),
(9, 'The Wisdom Of The Earth', 'Constantin Brancusi', 65470, 'product_images/thewisdom.jpg'),
(10, 'Unnamed ', 'Franz Kafka', 26847, 'product_images/thedrawing.jpeg'),
(11, 'Jeun Fille Endormie', 'Pablo Picasso', 587694, 'product_images/thejeunfilleendormie.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

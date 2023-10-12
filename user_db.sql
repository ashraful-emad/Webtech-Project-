-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 05:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `category`) VALUES
(1, 'learning c++', '../picture/c++.jpg', 255, 'books'),
(2, 'java ', '../picture/java.jpeg', 255, 'books'),
(3, 'Captain America Suit', '../picture/captain.jpg', 9999, 'fashion'),
(4, 'Iron Man Suit', '../picture/suit1.jpg', 30000, 'fashion '),
(5, 'Spider man Suit', '../picture/spiderman.jpg', 10999, 'fashion'),
(6, 'Cricket Bat', '../picture/cricket bat.jpg', 750, 'sports'),
(7, 'Cricket Ball', '../picture/cricket ball.jpg', 350, 'sports'),
(8, 'samusng', '../picture/1.jpg', 70000, 'electronics'),
(15, 'IPhone', '../picture/2.png', 11200000, 'electronics'),
(16, 'rrt', '../picture/palm_trees_silhouette_sunset_180300_1920x1080.jpg', 100, 'fashion');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'Admin two', 'admin_two@gmail.com', '1234567890', 'admin'),
(3, 'user one', 'user@gmail.com', '0987654321', 'user'),
(4, 'user two', 'user_two@gmail.com', 'qwertyuio0', 'user'),
(5, 'user', 'user@gmail.com', 'ttttt00000', 'user'),
(6, 'ASD', 'xx@gmail.com', 'qwertyuioplkjhgfdsa', 'admin'),
(7, 'Admin', 'admin@gmail.com', '1234567890', 'admin'),
(8, 'user', 'user@gmail.com', '1234567890PO', 'user'),
(9, 'rider qqqq', 'rider@gmail.com', '1234567890', 'rider');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

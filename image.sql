-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 12:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capacha`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image_src` varchar(30) NOT NULL,
  `image_key` varchar(10) NOT NULL,
  `image_value` varchar(250) NOT NULL,
  `image_key2` varchar(250) NOT NULL,
  `image_value2` varchar(250) NOT NULL,
  `truenum` int(3) NOT NULL,
  `falsenum` int(3) NOT NULL,
  `true_time` int(11) NOT NULL,
  `false_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image_src`, `image_key`, `image_value`, `image_key2`, `image_value2`, `truenum`, `falsenum`, `true_time`, `false_time`) VALUES
(1, 'cap1.jpg', 'keb4a', 'start from the <span class =\"key-color\">car</span> rotate to <span class =\"key-color\">right </span>', 'ka4be', 'start from the <span class =\"key-color\">car</span> rotate to <span class =\"key-color\"> left </span>', 2, 0, 0, 0),
(2, 'cap2.jpg', '7tyrd', 'start from the <span class =\"key-color\">lion</span> rotate to <span class =\"key-color\"> right </span>', '7dryt', 'start from the <span class =\"key-color\">lion</span> rotate to <span class =\"key-color\"> left </span>', 4, 0, 18, 0),
(3, 'cap3.jpg', 'f97e9ndu', 'start from the <span class =\"key-color\"> strawbery </span>rotate to <span class =\"key-color\"> right </span>', 'fudb9f79', 'start from the <span class =\"key-color\"> strawbery </span>rotate to <span class =\"key-color\"> left </span>', 2, 0, 0, 0),
(4, 'cap4.jpg', 'ff999', 'start from the <span class =\"key-color\">tree</span> rotate to <span class =\"key-color\"> right </span>', 'f999f', 'start from the <span class =\"key-color\">tree</span> rotate to <span class =\"key-color\"> left </span>', 2, 1, 0, 6),
(5, 'cap5.jpg', '8765abcd', 'start from the <span class =\"key-color\">motopick</span> rotate to <span class =\"key-color\"> right </span>', '8dcba567', 'start from the <span class =\"key-color\">motopick</span> rotate to <span class =\"key-color\"> left </span>', 2, 0, 0, 0),
(6, 'cap6.jpg', '4aag8g', 'start from the <span class =\"key-color\">chir</span> rotate to <span class =\"key-color\"> right </span>', '4g8gaa', 'start from the <span class =\"key-color\">chir</span> rotate to <span class =\"key-color\"> left </span>', 2, 2, 0, 0),
(7, 'cap7.jpg', '1hhq', 'start from the <span class =\"key-color\">fish</span> rotate to <span class =\"key-color\"> right </span>', '1qhh', 'start from the <span class =\"key-color\">fish</span> rotate to <span class =\"key-color\"> left </span>', 1, 0, 0, 0),
(8, 'cap8.jpg', '8ym2', 'start from the <span class =\"key-color\">shark</span> rotate to <span class =\"key-color\"> right </span>', '82my', 'start from the <span class =\"key-color\">shark</span> rotate to <span class =\"key-color\"> left </span>', 3, 1, 0, 5),
(9, 'cap9.jpg', 'uj6k', 'start from the <span class =\"key-color\">lion</span> rotate to <span class =\"key-color\"> right </span>', 'uk6j', 'start from the <span class =\"key-color\">lion</span> rotate to <span class =\"key-color\"> left </span>', 5, 0, 0, 0),
(10, 'cap10.jpg', 'ttg3jd', 'start from the <span class =\"key-color\"> strawbery </span>rotate to <span class =\"key-color\"> right</span>', 'tdj33gt', 'start from the <span class =\"key-color\"> strawbery </span>rotate to <span class =\"key-color\"> left</span>', 1, 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 06:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `msg`) VALUES
(0, 'ROma ', 4567890, 'hellonme00@gmail.com', 'ok'),
(0, 'Rabin', 4567890, 'hellonme00@gmail.com', 'ok'),
(0, 'Rabin', 4567890, 'hellonme00@gmail.com', 'ok'),
(0, 'Rabin', 2147483647, 'sujan@gmail.com', 'ok'),
(0, 'Sujan', 0, 'hellonme00@gmail.com', 'PL'),
(0, 'Rabin', 0, 'sujan@gmail.com', 'ok'),
(0, 'Sujan', 2147483647, 'hellonme00@gmail.com', 'ok'),
(0, 'RAbin', 2147483647, 'rabinchy86@gmail.com', 'this website is lit'),
(0, 'suajn', 980065874, 'sujan123@gmail.com', 'jlblb'),
(0, 'avs', 2147483647, 'admin22@gmail.com', 'dcecd');

-- --------------------------------------------------------

--
-- Table structure for table `loginsystem`
--

CREATE TABLE `loginsystem` (
  `id` int(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginsystem`
--

INSERT INTO `loginsystem` (`id`, `fname`, `lname`, `username`, `email`, `password`, `date_time`) VALUES
(1, '0', '0', '0', '0', '9300000', '0000-00-00 00:00:00.000000'),
(2, 'ROman', 'Bhattari', 'sujan', 'hellonme00@gmail.com', '93e05a041435c083504c986de85caba1', '2022-11-15 09:11:57.000000'),
(3, 'Sujan', 'Situala', 'sujan', 'heacdjnjcsds00@gmail.com', '93e05a041435c083504c986de85caba1', '2022-11-15 09:11:30.000000'),
(4, 'ROman', 'Bhattari', 'sujan', 'acjbcs@gmail.com', '93e05a041435c083504c986de85caba1', '2022-11-15 09:11:35.000000'),
(5, 'roman', 'bhattarai', 'roman123', 'hellonme005465@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-11-15 17:11:40.000000'),
(6, 'Sujan', 'Bhattari', 'sujan21', 'hellonme0010@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-11-16 05:11:57.000000'),
(7, 'rabin', 'chaudhary', 'rabin123', 'rabinchy86@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-11-16 07:11:44.000000'),
(8, 'hari', 'ram', 'hariram', 'ufu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-11-16 08:11:07.000000'),
(9, 'ram', 'chaudhary', 'ram123', 'ram21@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-11-16 09:11:48.000000'),
(10, 'sujan', 'sit', 'suj445', 'sujan22@gmail.com', '11b921ef080f7736089c757404650e40', '2022-11-18 07:11:14.000000'),
(11, 'roman', 'bhat', 'roman225', 'roman221@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-11-18 07:11:07.000000'),
(12, 'sujan', 'sitaula', 'sujan', 'sujan123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-06-14 16:06:33.000000'),
(13, 'roman', 'karki', 'roman1', 'romanjung@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-07-05 17:07:37.000000'),
(14, 'admin', 'admin', 'admin', 'admin2@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-07-11 17:07:09.000000'),
(15, 'admin', 'admin', 'admin22', 'admin22@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-07-17 13:07:18.000000'),
(16, 'roman', 'karki', 'roman1', 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-08-06 19:08:28.000000'),
(17, 'admina', 'admina', 'admin', 'admina@gmail.com', '91183e1cb4e46961f86a2ef6287927ad', '2024-05-04 18:05:03.000000'),
(18, 'mero', 'mero', 'mero', 'mero22@gmail.com', 'd0ff812ad7553f05047ce40e48a0b009', '2024-05-04 18:05:01.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(1, 'sujan', 9800905568, 'ktm', ''),
(2, 'sujan', 9800905568, 'ktm', 'COD'),
(3, 'rabin', 98123456789, 'ktm', 'COD'),
(4, 'sujan', 98123456, 'ktm', 'COD'),
(5, 'roman', 9812345769, 'ktm', 'COD'),
(6, 'sujan', 9800905568, 'brt', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `Order_id` int(100) NOT NULL,
  `Item_name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`Order_id`, `Item_name`, `Price`, `Quantity`) VALUES
(0, 'Vitamin B', 4800, 1),
(0, 'C4 Pre-workout', 4000, 1),
(0, 'Amino Energy', 4800, 1),
(0, 'whey protein', 5500, 1),
(2, 'fishoil', 2000, 1),
(2, 'whey protein', 5500, 1),
(3, 'fishoil', 2000, 1),
(4, 'fishoil', 2000, 2),
(5, 'fishoil', 2000, 2),
(6, 'C4 Pre-workout', 4000, 1),
(6, 'whey protein', 5500, 1),
(6, 'Amino Energy', 4800, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginsystem`
--
ALTER TABLE `loginsystem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginsystem`
--
ALTER TABLE `loginsystem`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 09:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`) VALUES
(1, 'admin@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `set_seat_price` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `seats` varchar(300) NOT NULL,
  `services` varchar(300) NOT NULL,
  `country` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `set_seat_price`, `total_price`, `phone`, `seats`, `services`, `country`, `user_id`) VALUES
(22, 'Ayesha', 'khani@gmail.com', '800000', '1600000', '12345678', '2', 'By Air', 'Pakistan To India', '38'),
(23, 'Wahab', 'wahab@gmail.com', '800000', '3200000', '12345678', '4', 'By Air', 'Pakistan To Saudi Arabia', '40'),
(24, 'wajeeha', 'wajeha@gmail.com', '800000', '2400000', '12345678', '3', 'By Air', 'Pakistan To Turki', '40'),
(25, 'Ayesha', 'khani@gmail.com', '800000', '', '', '0', 'Select', 'Select', '41'),
(26, 'Ayesha', 'khaniayesha@gmail.com', '800000', '2400000', '12345678', '3', 'By Air', 'Pakistan To South Africa', '41'),
(27, 'anees', 'anees786@gmail.com', '800000', '2400000', '12345678', '3', 'By Air', 'Pakistan To Dubai', '38');

-- --------------------------------------------------------

--
-- Table structure for table `package_add`
--

CREATE TABLE `package_add` (
  `id` int(255) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `country1` varchar(300) NOT NULL,
  `country2` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_add`
--

INSERT INTO `package_add` (`id`, `title`, `image`, `price`, `country1`, `country2`, `date`, `time`, `description`) VALUES
(38, 'Turkey', 'australia.jfif', '800000', 'pakistan', 'turkey', '2022-04-13', '12:00', 'wednesday'),
(39, 'Dubai', 'windows activate.PNG', '800000', 'turkey ', 'dubai', '2022-04-16', '12:00', 'Sunday Trip'),
(40, 'America', '$_86.JPG', '800000', 'pakistan', 'America', '2022-04-16', '12:00', 'Sunday Trip'),
(41, 'USA', '3.jpg', '800000', 'pakistan', 'USA', '2022-04-04', '12:00', 'Sunday Trip');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `f_name` varchar(300) NOT NULL,
  `l_name` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `c_password` varchar(300) NOT NULL,
  `gender` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `f_name`, `l_name`, `image`, `email`, `phone`, `password`, `c_password`, `gender`) VALUES
(27, 'khani', 'khani', 'bg.jpg', 'khani@gmail.com', '12345678', '123', '123', 'female'),
(28, 'ashu', 'khan', 'download.jpg', 'ashu@gmail.com', '12345678', '789', '789', 'female'),
(30, 'ashu', 'khanu', '05d1692fb310204da969330feebf5225.jpeg', 'abc@gmail.com', '12345678', '888', '888', 'female'),
(31, 'shehroz', 'khan', '1 (2).jpg', 'shehroz@gmail.com', '12345678', '000', '000', 'female'),
(32, 'wahab', 'khan', '3.jpg', 'wahab@gmail.com', '12345678', '123', '123', 'male'),
(33, 'israr', 'khan', '1 (2).png', 'israr@gmail.com', '12345678', '123', '123', 'male'),
(34, 'ayeshanaz', 'khan', 'windows activate.PNG', 'khaniayesha@gmail.com', '1234567890', '123', '123', 'female'),
(35, 'Wajeeha', 'Javaid', '', 'wajeeha@gmail.com', '12345678', '123', '123', ''),
(36, 'Wajeeha', 'jutt', '', 'jiya@gmail.com', '12345678', '000', '000', ''),
(37, 'kainat', 'tayyab', '', 'kainat@gmail.com', '1234567890', '123', '123', 'female'),
(38, 'zain', 'khan', '', 'zain@gmail.com', '1234567890', '123', '123', 'male'),
(39, 'zoni', 'jutt', '', 'zoni@gmail.com', '1234567890', '0000', '0000', 'female'),
(40, 'khan', 'zada', '64-2.jpg', 'khanzadA@gmail.com', '1234567890', '123', '123', 'male'),
(41, 'Naina', 'khan', '', 'naina@gmail.com', '1234567890', '123', '123', 'female'),
(42, 'knl', 'lmlk', '', 'dadu@gmail.com', '1234567890', '1122', '1122', 'female'),
(43, 'khani', 'khan', '', 'dadu9@gmail.com', '12345678', '5555', '5555', 'female'),
(44, 'ashu', 'khan', '2.jpg', 'khaniiu@gmail.com', '1234567890', '55', '55', 'female'),
(45, 'pgli', 'kuri', '3.jpg', 'pgli@gmail.com', '1234567890', '11', '11', 'female'),
(46, 'dada', 'dada', '4.jpg', 'dada@gmail.com', '1234567890', '123', '123', 'male'),
(47, 'anees', 'shahzad', '64-1.jpg', 'anees786@gmail.com', '123456', '123', '123', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_add`
--
ALTER TABLE `package_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `package_add`
--
ALTER TABLE `package_add`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

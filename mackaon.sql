-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 04:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mackaon`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Middle_name` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Account_Type` varchar(15) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `First_name`, `Middle_name`, `LastName`, `Account_Type`, `Username`, `Password`, `Photo`, `Date`) VALUES
(14, 'Karl Francis', 'D', 'Lopez', 'Administrator', 'karl', '$2y$10$e9X9F/Zhyl44Ae1qDzpQD.HTuwp3tfxq5GmxwZVS/hgWJziIuOZ3K', 'profile.jpg', '2022-11-21 14:21:00'),
(15, 'Sample', 'Sample', 'Sample', 'Kitchen', 'sample', '$2y$10$BFcN3EVSWhCoee3A5YRS2ey1SPQTBH8QGs5hRLjdAdHONmb7CqAPO', 'profile.jpg', '2022-11-21 05:36:06'),
(17, 'Admin ', ' ', ' ', 'Administrator', 'Admin', '$2y$10$XqK2S1nheYy6NE.r.AuTb.uf/J6lDgFKNAO9yeTJCpbJ2B8OnCUT.', 'profile.jpg', '2022-11-23 12:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `category` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `video` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brgy`
--

CREATE TABLE `brgy` (
  `id` int(11) NOT NULL,
  `brgyCode` varchar(15) NOT NULL,
  `brgyDesc` varchar(50) NOT NULL,
  `regCode` varchar(15) NOT NULL,
  `provCode` varchar(15) NOT NULL,
  `citymunCode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brgy`
--

INSERT INTO `brgy` (`id`, `brgyCode`, `brgyDesc`, `regCode`, `provCode`, `citymunCode`) VALUES
(1, '71218001', 'Cabatuan', '7', '712', '71218'),
(2, '71218002', 'Cantubod', '7', '712', '71218'),
(3, '71218003', 'Carbon', '7', '712', '71218'),
(4, '71218004', 'Concepcion', '7', '712', '71218'),
(5, '71218005', 'Dagohoy', '7', '712', '71218'),
(6, '71218006', 'Hibale', '7', '712', '71218'),
(7, '71218007', 'Magtangtang', '7', '712', '71218'),
(8, '71218008', 'Nahud', '7', '712', '71218'),
(9, '71218009', 'Poblacion', '7', '712', '71218'),
(10, '71218010', 'Remedios', '7', '712', '71218'),
(11, '71218011', 'San Carlos', '7', '712', '71218'),
(12, '71218012', 'San Miguel', '7', '712', '71218'),
(13, '71218013', 'Santa Fe', '7', '712', '71218'),
(14, '71218014', 'Santo Ni??o', '7', '712', '71218'),
(15, '71218015', 'Tabok', '7', '712', '71218'),
(16, '71218016', 'Taming', '7', '712', '71218'),
(17, '71218017', 'Villa Anunciado', '7', '712', '71218');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Category`, `date`) VALUES
(11, 'MILKTEA', '2022-11-20 14:49:43'),
(12, 'Burger', '2022-11-20 14:42:50'),
(13, 'Pizza', '2022-11-20 14:46:24'),
(14, 'Fruit Blends', '2022-11-20 14:46:47'),
(15, 'Coffee/Choco Blends', '2022-11-20 14:47:10'),
(16, 'Frappe', '2022-11-20 14:47:41'),
(17, 'Fries', '2022-11-20 14:48:01'),
(18, 'Nachos', '2022-11-20 14:48:08'),
(19, 'Add Ons', '2022-11-20 14:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `psgcCode` varchar(15) NOT NULL,
  `citymunDesc` varchar(50) NOT NULL,
  `regDesc` varchar(15) NOT NULL,
  `provCode` varchar(15) NOT NULL,
  `citymunCode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `psgcCode`, `citymunDesc`, `regDesc`, `provCode`, `citymunCode`) VALUES
(18, '71218000', 'DANAO', '7', '712', '71218');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_fee`
--

CREATE TABLE `delivery_fee` (
  `id` int(11) NOT NULL,
  `City` int(11) NOT NULL,
  `Fee` varchar(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_fee`
--

INSERT INTO `delivery_fee` (`id`, `City`, `Fee`, `date`) VALUES
(12, 71218001, '25', '2022-11-21 02:56:13'),
(13, 71218002, '10', '2022-11-23 14:04:34'),
(14, 71218003, '12', '2022-11-23 14:04:42'),
(15, 71218004, '12', '2022-11-23 14:04:48'),
(17, 71218005, '12', '2022-11-23 14:05:00'),
(18, 71218006, '34', '2022-11-23 14:05:05'),
(19, 71218007, '12', '2022-11-23 14:05:16'),
(20, 71218008, '54', '2022-11-23 14:05:23'),
(21, 71218009, '0', '2022-11-23 14:05:31'),
(22, 71218010, '32', '2022-11-23 14:05:36'),
(23, 71218011, '54', '2022-11-23 14:05:43'),
(24, 71218012, '234', '2022-11-23 14:06:07'),
(25, 71218013, '23', '2022-11-23 14:06:13'),
(26, 71218014, '23', '2022-11-23 14:06:19'),
(27, 71218015, '23', '2022-11-23 14:06:34'),
(28, 71218016, '14', '2022-11-23 14:07:17'),
(29, 71218017, '85', '2022-11-23 14:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `Restaurant_name` varchar(50) NOT NULL,
  `Address` varchar(75) NOT NULL,
  `Contact_info` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Hrs` varchar(250) NOT NULL,
  `Moto` varchar(200) NOT NULL,
  `About` varchar(500) NOT NULL,
  `Offers` varchar(200) NOT NULL,
  `Rooms` varchar(100) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `Date_started` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `Restaurant_name`, `Address`, `Contact_info`, `Tel`, `Email`, `Hrs`, `Moto`, `About`, `Offers`, `Rooms`, `Logo`, `owner_name`, `Date_started`) VALUES
(1, 'Mac Ka On', 'G. Orapa Street, Poblacion, Danao, Bohol', '0906 592 9886', '', 'mackaon@gmail.com', 'Wednesday	  10AM-9PM\r\nThursday	          10AM-9PM\r\nFriday	                  11AM-9:30PM\r\nSaturday	          11AM-9:30PM\r\nSunday	          11AM-9:30PM\r\nMonday	          10AM-9PM\r\nTuesday	          10AM-9PM', 'Taste The Difference! Choose Me Or The Food ', 'Kung Wa Mo Kasuway Panuway Mo Hahahhahahahha', 'We Accept Private Functions/Events And Catering Services', '3 Air Conditioned Function Rooms With T.V.', 'mckaon.jpg', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Middle_name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_Number` varchar(15) NOT NULL,
  `Email_address` varchar(40) NOT NULL,
  `Position` varchar(40) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Date_started` date NOT NULL,
  `Date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `First_Name`, `Middle_name`, `Last_Name`, `extension`, `address`, `contact_Number`, `Email_address`, `Position`, `Photo`, `Gender`, `Date_started`, `Date_added`) VALUES
(2, 'Renz', 'S', 'Desamero', '', 'Talisay City', '09126577623', 'renzdesamero@gmail.com', '2', 'profile.jpg', 'Male', '1999-01-12', '2022-10-20 02:29:55'),
(3, 'Vincent', 'S', 'Liso-an', '', 'Bacolod CIty', '09123456789', 'vincent21@gmail.com', '4', 'profile.jpg', 'Male', '2000-06-14', '2022-10-20 02:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `qty` varchar(6) NOT NULL,
  `price` varchar(7) NOT NULL,
  `description` varchar(250) NOT NULL,
  `category` varchar(25) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `expenses` varchar(7) NOT NULL,
  `status` varchar(1) NOT NULL,
  `size` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `qty`, `price`, `description`, `category`, `photo`, `expenses`, `status`, `size`) VALUES
(1, 'Sample', '55', '1', '1', '11', 'Double Cheeseburger.jpg', '0', '0', 'Small'),
(14, 'MilkTea', '20', '65', 'MILKTEA', '11', '10e9r6x3-720 (1).jpg', '35', '0', 'Small'),
(15, 'THAI MILK', '45', '80', 'MILKTEA', '11', '10e9r6x3-720 (1).jpg', '40', '0', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `remarks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `remarks`) VALUES
(0, 1, 74, 'Hello', '1'),
(52, 4, 1, 'dasdas', '1'),
(53, 4, 1, 'dasdsa', '1'),
(54, 4, 1, 'ediwow', '1'),
(55, 4, 0, 'asdasdas', '1'),
(56, 1, 4, 'dasdas', '1'),
(57, 1, 4, 'qeasd', '1'),
(58, 0, 1, 'op', '0'),
(59, 4, 1, 'dsa', '1'),
(60, 4, 1, 'pre', '1'),
(61, 1, 4, 'ano pre', '1'),
(62, 4, 1, 'wala pre', '1'),
(63, 1, 4, 'gaano ka?', '1'),
(64, 4, 1, 'wala pre ah', '1'),
(65, 1, 4, 'hehe', '1'),
(66, 1, 4, 'musta pre', '1'),
(67, 4, 1, 'ayos lang pre', '1'),
(68, 1, 4, 'pre', '1'),
(69, 4, 1, 'oh', '1'),
(70, 4, 1, 'dasdsa', '1'),
(71, 1, 4, 'dasdas', '1'),
(72, 1, 35, 'hey', '1'),
(73, 35, 1, 'what', '1'),
(74, 35, 1, 'das', '1'),
(75, 1, 35, 'hey', '1'),
(76, 1, 35, 'oy', '1'),
(77, 36, 1, 'op', '0'),
(78, 1, 66, 'hi', '1'),
(79, 66, 1, 'yes?', '1'),
(80, 72, 1, 'ey', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `message` varchar(150) NOT NULL,
  `status` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `message`, `status`, `date`) VALUES
(1, '8O1P6IFC', 'New Order', 'Seen', '2022-11-23 12:44:30'),
(57, 'IV8415QJ', 'New Order', 'Seen', '2022-11-21 05:19:25'),
(58, '9UHV6TJD', 'New Order', 'Seen', '2022-11-21 14:06:37'),
(59, '1FK40IMJ', 'New Order', 'Seen', '2022-11-21 14:13:03'),
(60, '4V6D2XS5', 'New Order', 'Seen', '2022-11-21 14:15:42'),
(61, 'TAFSXGB2', 'New Order', 'Seen', '2022-11-23 08:45:11'),
(62, '2Z6EWFS9', 'New Order', 'Seen', '2022-11-23 08:46:33'),
(63, '4GTWFXYN', 'New Order', 'Seen', '2022-11-23 08:53:25'),
(64, 'DBKEQMRF', 'New Order', 'Seen', '2022-11-23 08:53:34'),
(65, 'KO4WERM8', 'New Order', 'Seen', '2022-11-23 08:54:12'),
(66, 'KA230UFB', 'New Order', 'Seen', '2022-11-23 10:36:27'),
(67, 'IPM479T8', 'New Order', 'Seen', '2022-11-23 13:20:11'),
(68, '9G3L617F', 'New Order', 'Seen', '2022-11-24 02:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `Order_id` varchar(15) NOT NULL,
  `Menu_id` varchar(11) NOT NULL,
  `Menu_Price` varchar(6) NOT NULL,
  `Menu_QTY` varchar(3) NOT NULL,
  `Total_Price` varchar(6) NOT NULL,
  `Payment_status` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `Customer_id` varchar(11) NOT NULL,
  `total_expense` varchar(25) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Order_id`, `Menu_id`, `Menu_Price`, `Menu_QTY`, `Total_Price`, `Payment_status`, `status`, `date`, `Customer_id`, `total_expense`, `size`) VALUES
(1, '8O1P6IFC', '14', '65', '1', '65', 'COD', 'delivered', '2022-11-23 13:36:33', '72', '35', 'Small'),
(2, '0', '14', '65', '0', '0', 'N/A', 'delivered', '0000-00-00 00:00:00', '0', '', ''),
(3, '0', '15', '80', '0', '0', 'N/A', 'delivered', '0000-00-00 00:00:00', '0', '', ''),
(4, 'IPM479T8', '15', '80', '2', '160', 'COD', 'delivered', '2022-11-23 14:14:26', '72', '80', 'Regular'),
(6, '00000', '14', '65', '10', '650', 'N/A', 'Cart', '2022-11-23 14:33:23', '73', '350', 'Small'),
(7, '00000', '1', '1', '10', '10', 'N/A', 'Cart', '2022-11-23 14:33:27', '73', '0', 'Small'),
(8, '9G3L617F', '1', '1', '5', '5', 'COD', 'delivered', '2022-11-23 15:13:23', '74', '0', 'Small'),
(9, '9G3L617F', '14', '65', '5', '325', 'COD', 'delivered', '2022-11-23 15:13:28', '74', '175', 'Small'),
(10, '9G3L617F', '1', '1', '2', '2', 'COD', 'delivered', '2022-11-24 03:34:36', '74', '0', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `salary` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position`, `salary`, `date`) VALUES
(2, 'Cook', '500', '2022-10-24 00:42:54'),
(3, 'Service Crew', '400', '2022-11-03 08:20:26'),
(4, 'Manager', '500', '2022-11-03 08:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `token` varchar(25) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Barangay` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `Photo` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `token`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `City`, `Barangay`, `Address`, `Contact`, `Email`, `UserName`, `Password`, `Photo`, `date`, `status`) VALUES
(72, '2065379184', 'Karl Francis', 'D', 'Lopez', 'Male', '71218000', '71218001', 'E', '0909090909', '123@123.com', 'karl', '$2y$10$bLWsA14fTLmx38BJwxG.T.W72FhxDu5o/N16/N4rtrDkLI5sW3sha', 'profile.jpg', '2022-11-21 05:24:59', ''),
(74, '3170869425', 'Eddie', 'O.', 'Gingco', 'Male', '71218000', '71218009', 'Cantiwas St. Poblacion, Danao, Bohol', '09127891836', 'eddiegingco971@gmail.com', 'eddie', '$2y$10$Yp9sxFW21gBrzezG8B8sCORGI9X0QhvbeoQAceiFN8odrAnoPtka.', 'profile.jpg', '2022-11-23 14:12:01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgy`
--
ALTER TABLE `brgy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_fee`
--
ALTER TABLE `delivery_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `delivery_fee`
--
ALTER TABLE `delivery_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

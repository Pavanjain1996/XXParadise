-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 01:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xxparadise`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`) VALUES
(1, 'Pavanjain1996', 'Pavanjain1996');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `c_username` varchar(50) NOT NULL,
  `c_pid` int(11) NOT NULL,
  `c_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `c_username`, `c_pid`, `c_quantity`) VALUES
(3, 'pavan123', 9, 10),
(4, 'pavan123', 9, 6),
(6, 'pavan123', 1, 2),
(7, 'alice123', 1, 3),
(8, 'alice123', 5, 4),
(9, 'pavan123', 8, 4),
(14, 'subra123', 7, 4),
(15, 'subra123', 6, 5),
(16, 'vishist123', 2, 3),
(17, 'vishist123', 3, 12),
(18, 'sarthak123', 11, 4),
(19, 'sarthak123', 9, 5),
(20, 'mohini123', 6, 6),
(21, 'mohini123', 4, 7),
(22, 'surili123', 3, 22),
(23, 'surili123', 4, 10),
(24, 'pooja123', 12, 3),
(25, 'pooja123', 14, 4),
(26, 'diksha123', 22, 5),
(27, 'diksha123', 25, 4),
(28, 'saumya123', 2, 4),
(29, 'saumya123', 22, 3),
(30, 'tanu123', 2, 4),
(31, 'tanu123', 13, 7),
(32, 'manu123', 22, 4),
(33, 'manu123', 1, 3),
(34, 'roshini123', 12, 9),
(35, 'roshini123', 3, 5),
(36, 'aarti123', 26, 4),
(37, 'aarti123', 16, 5),
(39, 'pavan123', 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_gender` varchar(10) NOT NULL DEFAULT 'Male',
  `d_state` varchar(50) NOT NULL,
  `d_city` varchar(50) NOT NULL,
  `d_contact` varchar(50) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_username` varchar(50) NOT NULL,
  `d_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryman`
--

INSERT INTO `deliveryman` (`d_id`, `d_name`, `d_gender`, `d_state`, `d_city`, `d_contact`, `d_email`, `d_username`, `d_password`) VALUES
(1, 'Mukesh Imran', 'Male', 'Madhya Pradesh', 'Bhopal', '9865321245', 'mukesh.imran@gmail.com', 'mukesh', 'mukesh'),
(2, 'Ramkumar Sen', 'Male', 'Madhya Pradesh', 'Sagar', '9865324125', 'ram.kumar12@gmail.com', 'ramkumar', 'ramkumar'),
(4, 'Suresh Kaliya', 'Male', 'Madhya Pradesh', 'Damoh', '8754965256', 'mukesh@gmail.com', 'suresh', 'suresh'),
(5, 'Rahul Gupta', 'Male', 'Madhya Pradesh', 'Indore', '9856542514', 'rahulg.t@gmail.com', 'rahul', 'rahul'),
(6, 'Ayesha Iqbal', 'Female', 'Madhya Pradesh', 'Vidisha', '9856523564', 'ayesha@gmail.com', 'ayesha', 'ayesha'),
(7, 'Sonam Choubey', 'Female', 'Madhya Pradesh', 'Jabalpur', '5865234152', 'sonam.choubey@gmail.com', 'sonam', 'sonam'),
(8, 'Karishma Kumari', 'Female', 'Madhya Pradesh', 'Katni', '8956451245', 'karish.ma@gmail.com', 'karishma', 'karishma');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `o_username` varchar(50) NOT NULL,
  `o_pid` int(11) NOT NULL,
  `o_quantity` int(11) NOT NULL,
  `o_amount` int(11) NOT NULL,
  `o_date` date NOT NULL,
  `o_state` varchar(30) NOT NULL,
  `o_city` varchar(50) NOT NULL,
  `o_deliveryman` varchar(50) NOT NULL,
  `o_status` varchar(50) NOT NULL DEFAULT 'Order Recieved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_username`, `o_pid`, `o_quantity`, `o_amount`, `o_date`, `o_state`, `o_city`, `o_deliveryman`, `o_status`) VALUES
(4, 'pavan123', 2, 4, 52, '2020-04-02', 'Madhya Pradesh', 'Bhopal', 'Mukesh Imran', 'Delivered'),
(5, 'pavan123', 2, 2, 26, '2020-04-02', 'Madhya Pradesh', 'Bhopal', 'Mukesh Imran', 'Delivered'),
(7, 'pavan123', 5, 6, 108, '2020-04-02', 'Madhya Pradesh', 'Bhopal', 'Mukesh Imran', 'Delivered'),
(9, 'pavan123', 11, 4, 100, '2020-04-02', 'Madhya Pradesh', 'Bhopal', 'Mukesh Imran', 'Delivered'),
(10, 'alice123', 10, 5, 85, '2020-04-02', 'Madhya Pradesh', 'Sagar', 'Ramkumar Sen', 'Delivered'),
(11, 'alice123', 1, 3, 39, '2020-04-02', 'Madhya Pradesh', 'Sagar', 'Ramkumar Sen', 'Delivered'),
(12, 'pavan123', 8, 4, 88, '2020-04-02', 'Madhya Pradesh', 'Bhopal', 'Mukesh Imran', 'Delivered'),
(17, 'subra123', 7, 6, 114, '2020-04-03', 'Madhya Pradesh', 'Damoh', 'Suresh Kalia', 'Delivered'),
(18, 'subra123', 11, 12, 300, '2020-04-03', 'Madhya Pradesh', 'Damoh', 'Suresh Kalia', 'Delivered'),
(19, 'vishist123', 2, 8, 104, '2020-04-03', 'Madhya Pradesh', 'Indore', 'Rahul Gupta', 'Dispatched'),
(20, 'vishist123', 2, 4, 52, '2020-04-03', 'Madhya Pradesh', 'Indore', 'Rahul Gupta', 'Dispatched'),
(21, 'sarthak123', 11, 4, 100, '2020-04-03', 'Madhya Pradesh', 'Vidisha', 'Ayesha Iqbal', 'Dispatched'),
(22, 'sarthak123', 2, 6, 78, '2020-04-03', 'Madhya Pradesh', 'Vidisha', 'Ayesha Iqbal', 'Dispatched'),
(23, 'mohini123', 6, 6, 96, '2020-04-03', 'Madhya Pradesh', 'Jabalpur', 'Sonam Choubey', 'Delivered'),
(24, 'mohini123', 8, 8, 176, '2020-04-03', 'Madhya Pradesh', 'Jabalpur', 'Sonam Choubey', 'Delivered'),
(25, 'surili123', 3, 23, 345, '2020-04-03', 'Madhya Pradesh', 'Katni', 'Karishma Kumari', 'Dispatched'),
(26, 'surili123', 1, 12, 156, '2020-04-03', 'Madhya Pradesh', 'Katni', 'Karishma Kumari', 'Dispatched'),
(27, 'pooja123', 12, 5, 90, '2020-04-03', 'Madhya Pradesh', 'Bhopal', 'Mukesh Imran', 'Dispatched'),
(28, 'pooja123', 30, 6, 180, '2020-04-03', 'Madhya Pradesh', 'Bhopal', 'Mukesh Imran', 'Dispatched'),
(29, 'diksha123', 22, 7, 105, '2020-04-03', 'Madhya Pradesh', 'Sagar', 'Ramkumar Sen', 'Dispatched'),
(30, 'diksha123', 25, 14, 252, '2020-04-03', 'Madhya Pradesh', 'Sagar', 'Ramkumar Sen', 'Dispatched'),
(31, 'saumya123', 2, 4, 52, '2020-04-03', 'Madhya Pradesh', 'Damoh', 'Suresh Kalia', 'Dispatched'),
(32, 'saumya123', 12, 4, 72, '2020-04-03', 'Madhya Pradesh', 'Damoh', 'Suresh Kalia', 'Delivered'),
(33, 'tanu123', 2, 4, 52, '2020-04-03', 'Madhya Pradesh', 'Indore', 'Rahul Gupta', 'Dispatched'),
(34, 'tanu123', 22, 9, 135, '2020-04-03', 'Madhya Pradesh', 'Indore', 'Rahul Gupta', 'Dispatched'),
(35, 'manu123', 22, 4, 60, '2020-04-03', 'Madhya Pradesh', 'Vidisha', 'Ayesha Iqbal', 'Dispatched'),
(36, 'manu123', 14, 6, 132, '2020-04-03', 'Madhya Pradesh', 'Vidisha', 'Ayesha Iqbal', 'Dispatched'),
(37, 'roshini123', 12, 2, 36, '2020-04-03', 'Madhya Pradesh', 'Jabalpur', 'Sonam Choubey', 'Delivered'),
(38, 'roshini123', 22, 15, 225, '2020-04-03', 'Madhya Pradesh', 'Jabalpur', 'Sonam Choubey', 'Delivered'),
(39, 'aarti123', 16, 5, 60, '2020-04-03', 'Madhya Pradesh', 'Katni', 'Karishma Kumari', 'Dispatched'),
(40, 'aarti123', 15, 7, 140, '2020-04-03', 'Madhya Pradesh', 'Katni', 'Karishma Kumari', 'Dispatched'),
(41, 'pavan123', 12, 5, 90, '2020-04-04', 'Madhya Pradesh', 'Bhopal', 'Mukesh Imran', 'Dispatched'),
(42, 'subra123', 23, 25, 475, '2020-04-07', 'Madhya Pradesh', 'Damoh', 'Suresh Kalia', 'Dispatched'),
(43, 'vishist123', 12, 10, 180, '2020-04-07', 'Madhya Pradesh', 'Indore', 'Rahul Gupta', 'Dispatched'),
(44, 'mohini123', 16, 12, 144, '2020-04-07', 'Madhya Pradesh', 'Jabalpur', 'Sonam Choubey', 'Delivered'),
(45, 'aarti123', 5, 20, 360, '2020-04-07', 'Madhya Pradesh', 'Katni', 'Karishma Kumari', 'Dispatched'),
(46, 'roshini123', 12, 9, 162, '2020-04-08', 'Madhya Pradesh', 'Jabalpur', 'Sonam Choubey', 'Delivered'),
(47, 'tanu123', 14, 5, 110, '2020-04-08', 'Madhya Pradesh', 'Indore', 'Rahul Gupta', 'Dispatched'),
(48, 'vishist123', 31, 4, 100, '2020-04-08', 'Madhya Pradesh', 'Indore', 'Rahul Gupta', 'Delivered'),
(49, 'subra123', 6, 5, 80, '2020-04-09', 'Madhya Pradesh', 'Damoh', 'Suresh Kaliya', 'Order Recieved'),
(50, 'subra123', 7, 8, 152, '2020-04-09', 'Madhya Pradesh', 'Damoh', 'Suresh Kaliya', 'Order Recieved'),
(51, 'aarti123', 16, 5, 60, '2020-04-09', 'Madhya Pradesh', 'Katni', 'Karishma Kumari', 'Order Recieved'),
(52, 'manu123', 22, 6, 90, '2020-04-09', 'Madhya Pradesh', 'Vidisha', 'Ayesha Iqbal', 'Order Recieved'),
(53, 'sarthak123', 9, 5, 60, '2020-04-09', 'Madhya Pradesh', 'Vidisha', 'Ayesha Iqbal', 'Order Recieved'),
(54, 'sarthak123', 11, 4, 100, '2020-04-09', 'Madhya Pradesh', 'Vidisha', 'Ayesha Iqbal', 'Order Recieved');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_size` varchar(5) NOT NULL,
  `p_brand` varchar(20) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_img`, `p_name`, `p_size`, `p_brand`, `p_price`) VALUES
(1, 'p1.jpg', 'Whisper Ultra Soft L', 'L', 'Whisper', 13),
(2, 'p2.jpg', 'Whisper Ultra Soft XL', 'XL', 'Whisper', 13),
(3, 'p3.jpg', 'Whisper Ultra Soft XL+', 'XL+', 'Whisper', 15),
(4, 'p4.jpg', 'Whisper Ultra Nights XL', 'XL', 'Whisper', 14),
(5, 'p5.jpg', 'Whisper Ultra Nights XL+', 'XL+', 'Whisper', 18),
(6, 'p6.jpg', 'Whisper Ultra Clean L', 'L', 'Whisper', 16),
(7, 'p7.jpg', 'Whisper Ultra Clean XL', 'XL', 'Whisper', 19),
(8, 'p8.jpg', 'Whisper Ultra Clean XL+', 'XL+', 'Whisper', 22),
(9, 'p9.jpg', 'Whisper Choice Ultra L', 'L', 'Whisper', 12),
(10, 'p10.jpg', 'Whisper Choice Ultra XL', 'XL', 'Whisper', 17),
(11, 'p11.jpg', 'Whisper Choice Ultra XL+', 'XL+', 'Whisper', 25),
(12, 'p12.jpg', 'Stayfree Advanced L', 'L', 'Stayfree', 18),
(13, 'p13.jpg', 'Stayfree Advanced XL', 'XL', 'Stayfree', 20),
(14, 'p14.jpg', 'Stayfree Advanced XL+', 'XL+', 'Stayfree', 22),
(15, 'p15.jpg', 'Whisper Ultra Nights L', 'L', 'Whisper', 20),
(16, 'p16.jpg', 'Stayfree Secure L', 'L', 'Stayfree', 12),
(17, 'p17.jpg', 'Stayfree Secure XL', 'XL', 'Stayfree', 15),
(18, 'p18.jpg', 'Stayfree Secure XL+', 'XL+', 'Stayfree', 19),
(19, 'p19.png', 'Stayfree Dry-Max L', 'L', 'Stayfree', 15),
(20, 'p20.png', 'Stayfree Dry-Max XL', 'XL', 'Stayfree', 18),
(21, 'p21.jpg', 'Stayfree Dry-Max XL+', 'XL+', 'Stayfree', 28),
(22, 'p22.jpg', 'Soft Anti-Bacteria L', 'L', 'Sofy', 15),
(23, 'p23.jpg', 'Sofy Anti-Bacteria XL', 'XL', 'Sofy', 19),
(24, 'p24.jpg', 'Sofy Anti-Bacteria XL+', 'XL+', 'Sofy', 22),
(25, 'p25.jpg', 'Sofy Cool L', 'L', 'Sofy', 18),
(26, 'p26.jpg', 'Sofy Cool XL', 'XL', 'Sofy', 20),
(27, 'P27.jpg', 'Sofy Cool XL+', 'XL+', 'Sofy', 25),
(28, 'p28.jpg', 'Sofy Bodyfit L', 'L', 'Sofy', 20),
(29, 'p29.jpg', 'Sofy Bodyfit XL', 'XL', 'Sofy', 25),
(30, 'P30.jpg', 'Sofy Bodyfit XL+', 'XL+', 'Sofy', 30),
(31, 'p31.jpg', 'VWash Wow Ultra Thin L', 'L', 'VWash', 25),
(32, 'p32.jpg', 'VWash Wow Ultra Thin XL', 'XL', 'VWash', 30),
(33, 'p33.jpg', 'VWash Wow Ultra Thin XL+', 'XL+', 'VWash', 35),
(34, 'p34.jpg', 'VWash Wow Maxi L', 'L', 'VWash', 25),
(35, 'p35.jpg', 'VWash Wow Ultra Thin XL', 'XL', 'VWash', 31),
(36, 'p36.jpg', 'VWash Wow Ultra Thin XL+', 'XL+', 'VWash', 39),
(37, 'p37.jpg', 'Carefree Sanitary Napkins L', 'L', 'Carefree', 15),
(38, 'p39.jpg', 'Carefree Sanitary Napkins XL', 'XL', 'Carefree', 20),
(39, 'p39.jpg', 'Carefree Sanitary Napkins XL+', 'XL+', 'Carefree', 25),
(40, 'p40.jpg', 'Carefree Acti-Fresh L', 'L', 'Carefree', 18),
(41, 'p41.jpg', 'Carefree Acti-Fresh XL', 'XL', 'Carefree', 22),
(42, 'p42.png', 'Carefree Acti-Fresh XL+', 'XL+', 'Carefree', 28),
(43, 'p43.jpg', 'Carefree Original L', 'L', 'Carefree', 16),
(44, 'p44.jpg', 'Carefree Original XL', 'XL', 'Carefree', 20),
(45, 'p45.jpg', 'Carefree Original XL+', 'XL+', 'Carefree', 25),
(46, 'p46.jpg', 'Kotex Overnight Panties L', 'L', 'Kotex', 40),
(47, 'p47.jpg', 'Kotex Overnight Panties XL', 'XL', 'Kotex', 60),
(48, 'p48.jpg', 'Kotex Overnight Panties XL+', 'XL+', 'Kotex', 80),
(49, 'p49.jpg', 'Kotex Freedom Pads L', 'L', 'Kotex', 25),
(50, 'p50.jpg', 'Kotex Freedom Pads XL', 'XL', 'Kotex', 45),
(51, 'p51.jpg', 'Kotex Freedom Pads XL+', 'XL+', 'Kotex', 55),
(52, 'p52.jpg', 'Kotex Security Ultra Thin L', 'L', 'Kotex', 20),
(53, 'p53.jpg', 'Kotex Security Ultra Thin XL', 'XL', 'Kotex', 30),
(54, 'p54.jpg', 'Kotex Security Ultra Thin XL+', 'XL+', 'Kotex', 40),
(55, 'p55.jpg', 'Vanessa Sanitary Napkins L', 'L', 'Vanessa', 15),
(56, 'p56.jpg', 'Vanessa Sanitary Napkins XL', 'XL', 'Vanessa', 18),
(57, 'p57.jpg', 'Vanessa Sanitary Napkins XL+', 'XL+', 'Vanessa', 20),
(58, 'p58.jpg', 'Vanessa Smart Sanitary Napkins L', 'L', 'Vanessa', 25),
(59, 'p59.jpg', 'Vanessa Smart Sanitary Napkins XL', 'XL', 'Vanessa', 35),
(60, 'p60.jpg', 'Vanessa Smart Sanitary Napkins XL+', 'XL+', 'Vanessa', 45),
(61, 'p61.jpg', 'Vanessa Comfort Sanitary Pads L', 'L', 'Vanessa', 20),
(62, 'p62.jpg', 'Vanessa Comfort Sanitary Pads XL', 'XL', 'Vanessa', 30),
(63, 'p63.jpg', 'Vanessa Comfort Sanitary Pads XL+', 'XL+', 'Vanessa', 40),
(64, 'p64.jpg', 'Bella Herbs Panty Liners L', 'L', 'Bella', 20),
(65, 'p65.jpg', 'Bella Herbs Panty Liners XL', 'XL', 'Bella', 25),
(66, 'p66.jpg', 'Bella Herbs Panty Liners XL+', 'XL+', 'Bella', 30),
(67, 'p67.jpg', 'Bella Maxi Pads L', 'L', 'Bella', 15),
(68, 'p68.jpg', 'Bella Maxi Pads XL', 'XL', 'Bella', 18),
(69, 'p69.jpg', 'Bella Maxi Pads XL+', 'XL+', 'Bella', 21);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattishgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jharkhand'),
(11, 'Karnataka'),
(12, 'Kerela'),
(13, 'Madhya Pradesh'),
(14, 'Maharastra'),
(15, 'Manipur'),
(16, 'Meghalaya'),
(17, 'Mizoram'),
(18, 'Nagaland'),
(19, 'Odisha'),
(20, 'Punjab'),
(21, 'Rajasthan'),
(22, 'Sikkim'),
(23, 'Tamil Nadu'),
(24, 'Telangana'),
(25, 'Tripura'),
(26, 'Uttar Pradesh'),
(27, 'Uttarakhand'),
(28, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_profile` varchar(500) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_contact` varchar(15) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_pincode` varchar(10) NOT NULL,
  `u_city` varchar(30) NOT NULL,
  `u_state` varchar(30) NOT NULL,
  `u_username` varchar(30) NOT NULL,
  `u_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `u_name`, `u_gender`, `u_profile`, `u_email`, `u_contact`, `u_address`, `u_pincode`, `u_city`, `u_state`, `u_username`, `u_password`) VALUES
(2, 'Pavan Jain', 'Male', 'Pic.jpg', 'jpavan447@gmail.com', '8319615913', 'Kalpana nagar 435 Ayodhya bypass', '462023', 'Bhopal', 'Madhya Pradesh', 'pavan123', 'pavan123'),
(3, 'Alice Maria', 'Female', '5b0d009860955095e18ea6dcdd214287.jpg', 'alice.maria7@yahoo.com', '12345679854', 'String City 22/4 Amol Place', '468098', 'Sagar', 'Madhya Pradesh', 'alice123', 'alice123'),
(5, 'Subra Mahat', 'Male', '475605E3-69C5-4D2B-8727-61B7BB8C4699-500w.jpeg', 'subra.mahat@gmail.com', '5632541256', 'Sindhi Colony 446 Asati Ward', '470661', 'Damoh', 'Madhya Pradesh', 'subra123', 'subra123'),
(6, 'Vishisht Dubey', 'Male', '78070395106fcd1c3e66e3b3810568bb.jpg', 'v.dubey@gmail.com', '9654125354', 'Rai chouraha beside sarthak office', '480998', 'Indore', 'Madhya Pradesh', 'vishist123', 'vishist123'),
(7, 'Sarthak Asati', 'Male', 'G_Ydz6xt_400x400.jpg', 'sarthak@gmail.com', '5898653241', 'Rambhog Colony 445', '856234', 'Vidisha', 'Madhya Pradesh', 'sarthak123', 'sarthak123'),
(8, 'Mohini Agrawal', 'Female', 'de64801f0275c1ab2ea5a9e2bb3ce7bc.jpg', 'mohini.aw@gmail.com', '9865321245', 'Vijay nagar 24', '450216', 'Jabalpur', 'Madhya Pradesh', 'mohini123', 'mohini123'),
(9, 'Surili Khanna', 'Female', 'random-user_imageF34.jpg', 'sur.nna@gmail.com', '9854652321', 'SPM Nagar House no 56', '562345', 'Katni', 'Madhya Pradesh', 'surili123', 'surili123'),
(10, 'Pooja Chabbra', 'Female', '2388097_a_4812183.jpg', 'pooja.ch@gmail.com', '8569652365', '22/4 CS Street Ahmednagar', '462029', 'Bhopal', 'Madhya Pradesh', 'pooja123', 'pooja123'),
(11, 'Diksha Shrivastava', 'Female', '9656769.jpg', 'diksha.va@gmail.com', '8565236412', 'Gadhi Mohhalla Ram Setu Bridge 44 House', '462058', 'Sagar', 'Madhya Pradesh', 'diksha123', 'diksha123'),
(12, 'Saumya Harda', 'Female', '31974191.jpg', 'shard.ya@gmail.com', '9865321245', 'Palandi Chowk 380', '470662', 'Damoh', 'Madhya Pradesh', 'saumya123', 'saumya123'),
(13, 'Tanu Kriplani', 'Female', 'f6a79ff1d9-450.jpg', 'tan.kripa@gmail.com', '9852412546', 'Gulmohar Chowk 56 Haddi Bazar', '852635', 'Indore', 'Madhya Pradesh', 'tanu123', 'tanu123'),
(14, 'Manu Gangra', 'Female', 'original.jpg', 'man.ra@gmail.com', '8545126532', 'Raj Darbar chowk krishna complex shop 44', '985623', 'Vidisha', 'Madhya Pradesh', 'manu123', 'manu123'),
(15, 'Roshini Karta', 'Female', 'sarah-parmenter.jpeg', 'roshni2@gmail.com', '9852635412', '12/24 Karol Bagh 445', '852631', 'Jabalpur', 'Madhya Pradesh', 'roshini123', 'roshini123'),
(16, 'Aarti Saluja', 'Female', 'unnamed.jpg', 'arti.luja@gmail.com', '9856324152', 'King Square 442 nelson Street', '852416', 'Katni', 'Madhya Pradesh', 'aarti123', 'aarti123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `deliveryman`
--
ALTER TABLE `deliveryman`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

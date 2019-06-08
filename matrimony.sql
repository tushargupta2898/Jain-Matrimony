-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 01:45 PM
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
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pwd`) VALUES
(1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `career_status`
--

CREATE TABLE `career_status` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `entry_date` datetime NOT NULL,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `career_status`
--

INSERT INTO `career_status` (`id`, `name`, `entry_date`, `t_status`) VALUES
(1, 'Not Working', '0000-00-00 00:00:00', 0),
(2, 'Study', '0000-00-00 00:00:00', 0),
(3, 'Private Job', '0000-00-00 00:00:00', 0),
(4, 'Government Job', '0000-00-00 00:00:00', 0),
(5, 'Business', '0000-00-00 00:00:00', 0),
(6, 'test12', '2019-03-27 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `cast_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `entry_date` datetime NOT NULL,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`cast_id`, `name`, `entry_date`, `t_status`) VALUES
(1, 'Agrawal', '0000-00-00 00:00:00', 0),
(2, 'Baniya', '0000-00-00 00:00:00', 0),
(3, 'Intercast', '0000-00-00 00:00:00', 0),
(4, 'Jaisawal', '0000-00-00 00:00:00', 0),
(5, 'Khandelwal', '0000-00-00 00:00:00', 0),
(6, 'Kutchi', '0000-00-00 00:00:00', 0),
(7, 'Oswal', '0000-00-00 00:00:00', 0),
(8, 'Porwai', '0000-00-00 00:00:00', 0),
(9, 'Chaturth', '0000-00-00 00:00:00', 0),
(10, 'Vaishya', '0000-00-00 00:00:00', 0),
(11, 'Other', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `entry_date`, `update_date`, `t_status`) VALUES
(1, 'Amarawati', 1, '2018-12-03', '0000-00-00 00:00:00', 0),
(2, 'Raipur', 3, '2018-12-03', '0000-00-00 00:00:00', 0),
(3, 'Bemetara', 3, '2018-12-03', '2019-03-27 08:21:55', 1),
(4, 'Durg', 3, '2018-12-03', '0000-00-00 00:00:00', 0),
(5, 'Korba', 3, '2018-12-03', '0000-00-00 00:00:00', 0),
(6, 'Bhilai', 3, '2018-12-03', '0000-00-00 00:00:00', 0),
(7, 'Bemetara', 3, '2018-12-03', '0000-00-00 00:00:00', 0),
(8, 'Korba', 3, '2018-12-03', '0000-00-00 00:00:00', 0),
(10, 'Ongul', 1, '0000-00-00', '0000-00-00 00:00:00', 0),
(11, 'Karnul', 1, '0000-00-00', '0000-00-00 00:00:00', 0),
(12, 'Kolkata', 2, '0000-00-00', '0000-00-00 00:00:00', 0),
(13, 'Durgapur', 2, '0000-00-00', '0000-00-00 00:00:00', 0),
(14, 'Bhopal', 4, '0000-00-00', '0000-00-00 00:00:00', 0),
(15, 'Indor', 4, '0000-00-00', '0000-00-00 00:00:00', 0),
(16, 'Warangal', 5, '0000-00-00', '0000-00-00 00:00:00', 0),
(17, 'Khammam', 5, '0000-00-00', '0000-00-00 00:00:00', 0),
(18, 'Chikmagalur', 6, '0000-00-00', '0000-00-00 00:00:00', 0),
(19, 'Bijapur', 6, '0000-00-00', '0000-00-00 00:00:00', 0),
(20, 'Jaipur', 7, '0000-00-00', '0000-00-00 00:00:00', 0),
(21, 'Jodhpur', 7, '0000-00-00', '0000-00-00 00:00:00', 0),
(22, 'Coimbatore', 8, '0000-00-00', '0000-00-00 00:00:00', 0),
(23, 'Madurai', 8, '0000-00-00', '0000-00-00 00:00:00', 0),
(24, 'Bhubaneswar', 9, '0000-00-00', '0000-00-00 00:00:00', 0),
(25, 'Rourkela', 9, '0000-00-00', '0000-00-00 00:00:00', 0),
(26, 'Patna', 10, '0000-00-00', '0000-00-00 00:00:00', 0),
(27, 'Danapur', 10, '0000-00-00', '0000-00-00 00:00:00', 0),
(28, 'Narayanpur', 3, '2019-03-26', '0000-00-00 00:00:00', 0),
(29, 'Bemetara1', 3, '2019-03-26', '2019-03-26 12:29:35', 1),
(30, 'Bemetara1', 3, '2019-03-26', '2019-03-26 12:29:31', 1),
(31, 'Surajpur', 3, '2019-03-26', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img_name` varchar(150) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `img_name`, `entry_date`) VALUES
(2, 2, 'banner1.jpg', '2019-03-12 02:14:39'),
(4, 2, 'standard_day.png', '2019-03-18 08:22:31'),
(5, 2, 'standard_day_meridian.png', '2019-03-18 08:22:31'),
(6, 2, 'standard_decade.png', '2019-03-18 08:22:31'),
(7, 2, 'standard_full.png', '2019-03-18 08:22:31'),
(8, 2, 'standard_hour.png', '2019-03-18 08:22:31'),
(9, 2, 'standard_hour_meridian.png', '2019-03-18 08:22:31'),
(10, 2, 'standard_month.png', '2019-03-18 08:22:31'),
(11, 4, 'female.jpg', '2019-03-22 03:55:23'),
(12, 4, 'female2.jpg', '2019-03-22 03:55:23'),
(13, 4, 'female3.jpg', '2019-03-22 03:55:23'),
(14, 4, 'female4.jpg', '2019-03-22 03:55:23'),
(15, 4, 'female5.jpg', '2019-03-22 03:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `height`
--

CREATE TABLE `height` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `height`
--

INSERT INTO `height` (`id`, `name`, `value`, `t_status`) VALUES
(1, '4 Feet 0 Inch', '121.92', 0),
(2, '4 Feet 1 Inch', '124.46', 0),
(3, '4 Feet 2 Inch', '127.00', 0),
(4, '4 Feet 3 Inch', '129.54', 0),
(5, '4 Feet 4 Inch', '132.08', 0),
(6, '4 Feet 5 Inch', '134.62', 0),
(7, '4 Feet 6 Inch', '137.16', 0),
(8, '4 Feet 7 Inch', '139.70', 0),
(9, '4 Feet 8 Inch', '142.24', 0),
(10, '4 Feet 9 Inch', '144.78', 0),
(11, '4 Feet 10 Inch', '147.32', 0),
(12, '4 Feet 11 Inch', '149.86', 0),
(13, '5 Feet 0 Inch', '152.40', 0),
(14, '5 Feet 1 Inch', '154.94', 0),
(15, '5 Feet 2 Inch', '157.48', 0),
(16, '5 Feet 3 Inch', '160.02', 0),
(17, '5 Feet 4 Inch', '162.56', 0),
(18, '5 Feet 5 Inch', '165.10', 0),
(19, '5 Feet 6 Inch', '167.64', 0),
(20, '5 Feet 7 Inch', '170.18', 0),
(21, '5 Feet 8 Inch', '172.72', 0),
(22, '5 Feet 9 Inch', '175.26', 0),
(23, '5 Feet 10 Inch', '177.80', 0),
(24, '5 Feet 11 Inch', '180.34', 0),
(25, '6 Feet 0 Inch', '182.88', 0),
(26, '6 Feet 1 Inch', '185.42', 0),
(27, '6 Feet 2 Inch', '187.96', 0),
(28, '6 Feet 3 Inch', '190.50', 0),
(29, '6 Feet 4 Inch', '193.04', 0),
(30, '6 Feet 5 Inch', '195.58', 0),
(31, '6 Feet 6 Inch', '198.12', 0),
(32, '6 Feet 7 Inch', '200.66', 0),
(33, '6 Feet 8 Inch', '203.20', 0),
(34, '6 Feet 9 Inch', '205.74', 0),
(35, '6 Feet 10 Inch', '208.28', 0),
(36, '6 Feet 11 Inch', '210.82', 0),
(37, '7 Feet 0 Inch', '213.36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

CREATE TABLE `marital_status` (
  `id` int(11) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `entry_date` datetime NOT NULL,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marital_status`
--

INSERT INTO `marital_status` (`id`, `marital_status`, `entry_date`, `t_status`) VALUES
(1, 'Single', '0000-00-00 00:00:00', 0),
(2, 'Divorcee', '0000-00-00 00:00:00', 0),
(3, 'Widow/Widower', '0000-00-00 00:00:00', 0),
(4, 'Separated', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `name`) VALUES
(1, '5th Class'),
(2, '10th Class'),
(3, '12th Class'),
(4, 'Graduate'),
(5, 'Post Graduate'),
(6, 'PHD Holder');

-- --------------------------------------------------------

--
-- Table structure for table `sect`
--

CREATE TABLE `sect` (
  `sect_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sect`
--

INSERT INTO `sect` (`sect_id`, `name`, `entry_date`, `t_status`) VALUES
(1, 'Digamber', '2019-03-26 13:12:36', 0),
(2, 'Shwetamber', '2019-03-26 13:12:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `send_request`
--

CREATE TABLE `send_request` (
  `id` int(11) NOT NULL,
  `from_user` varchar(150) NOT NULL,
  `to_user` varchar(150) NOT NULL,
  `accept_reject` varchar(20) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_request`
--

INSERT INTO `send_request` (`id`, `from_user`, `to_user`, `accept_reject`, `entry_date`) VALUES
(24, 'dinesh@gmail.com', 'rsahu14@gmail.com', '', '2019-03-29 03:10:50'),
(23, 'dinesh@gmail.com', 'subi78@gmail.com', 'accepted', '2019-04-01 08:11:45'),
(22, 'dinesh@gmail.com', 'naira963@gmail.com', '', '2019-03-28 04:46:15'),
(25, 'dinesh@gmail.com', 'banothegarima15@gmail.com', '', '2019-04-15 11:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `entry_date` date NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `entry_date`, `update_date`, `t_status`) VALUES
(1, 'Andhra Pradesh', '2018-12-03', '2019-03-26 11:29:07', 0),
(2, 'West Bangal', '2018-12-03', '0000-00-00 00:00:00', 0),
(3, 'Chhattisgarh', '2018-12-03', '2019-03-26 11:11:48', 0),
(4, 'Madhya Pradesh', '2018-12-03', '0000-00-00 00:00:00', 0),
(5, 'Telangana', '2018-12-03', '0000-00-00 00:00:00', 0),
(6, 'Karnatka', '2018-12-03', '0000-00-00 00:00:00', 0),
(7, 'Rajasthan', '2018-12-03', '0000-00-00 00:00:00', 0),
(8, 'Tamilnadu', '2018-12-03', '0000-00-00 00:00:00', 0),
(9, 'Orrisa', '2018-12-03', '0000-00-00 00:00:00', 0),
(10, 'Bihar', '2018-12-03', '2018-12-03 11:33:36', 0),
(11, 'Kerla', '2019-03-26', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sect`
--

CREATE TABLE `sub_sect` (
  `sub_sect_id` int(11) NOT NULL,
  `sect_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `entry_date` datetime NOT NULL,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_sect`
--

INSERT INTO `sub_sect` (`sub_sect_id`, `sect_id`, `name`, `entry_date`, `t_status`) VALUES
(1, 2, 'Shwetamber-Murtipujaka', '0000-00-00 00:00:00', 0),
(2, 2, 'Shwetamber-Sthanakwasi', '0000-00-00 00:00:00', 0),
(3, 1, 'Digamber-Bisapanthi', '0000-00-00 00:00:00', 0),
(4, 2, 'Shwetamber-Terapanthi', '0000-00-00 00:00:00', 0),
(5, 1, 'Digamber-Gumanapanthi', '0000-00-00 00:00:00', 0),
(6, 1, 'Digamber-Terapanthi', '0000-00-00 00:00:00', 0),
(7, 0, 'hjvhh', '2019-03-27 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` float NOT NULL,
  `dob` date NOT NULL,
  `height` decimal(10,2) NOT NULL,
  `weight` float NOT NULL,
  `income` varchar(30) NOT NULL,
  `hobby` text NOT NULL,
  `mother_tongue` text NOT NULL,
  `known_language` text NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `sect` varchar(100) NOT NULL,
  `sub_sect` varchar(30) NOT NULL,
  `cast` varchar(30) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `state` int(11) NOT NULL,
  `about_me` text NOT NULL,
  `city` int(11) NOT NULL,
  `address` text NOT NULL,
  `last_qualification` int(11) NOT NULL,
  `qualification_name` varchar(100) NOT NULL,
  `career_status` int(11) NOT NULL,
  `mother_name` varchar(150) NOT NULL,
  `father_name` varchar(150) NOT NULL,
  `sister_count` int(11) NOT NULL,
  `brother_count` int(11) NOT NULL,
  `update_percent` int(11) NOT NULL,
  `otp` varchar(150) NOT NULL,
  `t_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `email`, `pass`, `name`, `image`, `gender`, `age`, `dob`, `height`, `weight`, `income`, `hobby`, `mother_tongue`, `known_language`, `marital_status`, `sect`, `sub_sect`, `cast`, `mobile_no`, `state`, `about_me`, `city`, `address`, `last_qualification`, `qualification_name`, `career_status`, `mother_name`, `father_name`, `sister_count`, `brother_count`, `update_percent`, `otp`, `t_status`) VALUES
(1, 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 'abc', '', 'male', 20, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '1', '1', 7856423568, 1, '', 0, '', 4, 'BSc', 0, '', '', 0, 0, 0, '0', 0),
(2, 'dinesh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Dinesh Kumar', '5d6c7e9c07230467e5fe4a6241ecd84a.jpg', 'male', 30, '1988-12-16', '152.40', 42, '1500000', 'Singing', 'Hindi', 'Punjabi', '1', '1', '3', '1', 7896541230, 3, 'About me', 2, 'Paras Nagar Raipur', 4, 'B.E.', 3, 'Mother', 'Father', 1, 1, 100, '16815', 0),
(3, 'pooja25@gmail.com', 'a424ed4bd3a7d6aea720b86d4a360f75', 'Pooja Verma', '', 'female', 23, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '1', '1', 7067454415, 4, '', 0, '', 4, 'BSc', 0, '', '', 0, 0, 0, '0', 0),
(4, 'rsahu14@gmail.com', '202cb962ac59075b964b07152d234b70', 'Riya Sahu', 'female1.jpg', 'female', 22, '1990-02-06', '157.48', 62, '0', 'Eating', '', '', '1', '1', '3', '1', 7067547514, 3, 'I am moody.', 2, 'Address', 4, 'BSc', 3, 'maa', 'papa', 1, 1, 96, '0', 0),
(5, 'tiwaripriya@gmail.com', '202cb962ac59075b964b07152d234b70', 'Priya Tiwari', '', 'female', 22, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '1', '2', 8965477514, 6, '', 0, '', 4, 'BSc', 0, '', '', 0, 0, 0, '0', 0),
(6, 'ranusingh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Ranu Singh', '', 'female', 20, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '3', '1', 8965478514, 1, 'Student', 1, 'Raipur', 4, 'BSc', 0, 'Mamta Singh', 'Ajay Singh', 1, 1, 0, '0', 0),
(7, 'singhsonanchal@gmail.com', '202cb962ac59075b964b07152d234b70', 'Sonanchal Singh', '', 'female', 21, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '3', '2', 8965478512, 5, 'Working', 0, 'Bhopal', 4, 'BSc', 0, 'Lata Singh', 'Jagatpal Singh', 2, 1, 0, '0', 0),
(8, 'govind789@gmail.com', '202cb962ac59075b964b07152d234b70', 'Govind Singh', '', 'male', 24, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '3', '1', 7065478512, 3, 'work', 2, 'pandhri buss stand raipur', 4, 'BSc', 0, 'Urmila Singh', 'Ajay Singh', 2, 1, 0, '0', 0),
(9, 'ajayprakash14@gmail.com', '202cb962ac59075b964b07152d234b70', 'Ajay Dashriye', '', 'male', 24, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '3', '1', 7879031164, 3, 'Student', 2, 'H.No- 22 Bhanpuri ', 4, 'BSc', 3, 'Dhanvantin Dashriye', 'Saheb Dash Dashriye', 0, 3, 0, '0', 0),
(10, 'disha01@gmail.com', '202cb962ac59075b964b07152d234b70', 'Disha Sahu', 'female51.jpg', 'female', 21, '1998-06-09', '154.94', 78, '147852', '', 'English', 'English', '1', '2', '1', '2', 7000891482, 3, 'work', 6, '26/342 1st floor\r\nravi nagar', 4, 'BSc', 2, 'Yamini Sahu', 'Govind Sahu', 3, 2, 96, '0', 0),
(11, 'rajaverma26@gmail.com', '202cb962ac59075b964b07152d234b70', 'Gulshion Verma', '', 'male', 19, '1970-01-01', '0.00', 0, '', '', '', '', '1', '1', '3', '1', 8972531154, 3, 'Study', 2, '27/225 2nd floor Raipur', 4, 'BSc', 2, 'Saroj Verma', 'Pramod Verma', 1, 1, 76, '0', 0),
(12, 'subi78@gmail.com', '202cb962ac59075b964b07152d234b70', 'Shivani Jain', 'female21.jpg', 'female', 22, '1989-06-13', '152.40', 51, '1000000000', 'Gana', 'Orriya', 'Hindi', '1', '1', '3', '1', 8965531154, 3, 'Working in Bhopal', 7, '1/27 Gandhi nagar ', 4, 'BSc', 2, 'Nellu Jain', 'Rajesh Jain', 2, 1, 100, '0', 0),
(13, 'neer456@gmail.com', '202cb962ac59075b964b07152d234b70', 'Neer Jain', '', 'male', 15, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '1', '1', 8965532154, 3, 'Study', 2, 'H.No.-7/25 Sankar nagar raipur', 4, 'BSc', 2, 'Radhika Jain', 'Rajkumar Jain', 2, 1, 0, '0', 0),
(14, 'Hemlata33@gmail.com', '202cb962ac59075b964b07152d234b70', 'Hemlata Verma', '', 'female', 26, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '1', '1', 7000891482, 3, 'Working', 2, '26/1242 1st floor\r\nravi nagar', 4, 'BSc', 3, 'Jaya Verma', 'Sitaram Verma', 2, 0, 0, '0', 0),
(15, 'raghav429@gmail.com', '202cb962ac59075b964b07152d234b70', 'Raghav', '', 'male', 27, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '1', '2', 7000891482, 4, 'At work', 0, '26/1372 1st floor\r\nravi nagar', 4, 'BSc', 4, 'Rama ', 'Suraj', 1, 2, 0, '0', 0),
(16, 'lilharesandeep64@gmail.com', '202cb962ac59075b964b07152d234b70', 'Sandeep Lilhare', '', 'male', 23, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '5', '1', 84565529154, 3, 'Working in Raipur', 2, 'Daganiya Raipur', 4, 'BSc', 3, 'Kajal Lilhare', 'Ramakant Lilhare', 0, 2, 0, '0', 0),
(17, 'ranjeet852@gmail.com', '202cb962ac59075b964b07152d234b70', 'Ranjeet Lilhare', '', 'male', 21, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '2', '1', 84565529159, 3, 'Study', 4, 'Balaghat', 4, 'BSc', 2, 'Renu Lilhare', 'Raman Lilhare', 0, 2, 0, '0', 0),
(18, 'Namrata@gmail.com', '202cb962ac59075b964b07152d234b70', 'Namrata Thakur', '', 'male', 22, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '5', '2', 9576552959, 4, 'working', 0, 'Jabalpur', 4, 'BSc', 3, 'Jagrity Thakur', 'Ajay Thakur', 1, 2, 0, '0', 0),
(19, 'Thakurkavi14@gmail.com', '202cb962ac59075b964b07152d234b70', 'Kavita Thakur', '', 'female', 23, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '2', '2', 9576242959, 4, 'working i Bhopal', 0, 'Trilanga bhopal', 4, 'BSc', 3, 'Kamla Thakur', 'Vivek Thakur', 2, 2, 0, '0', 0),
(20, 'vikranttiwari4@gmail.com', '202cb962ac59075b964b07152d234b70', 'Vikrant Tiwari', '', 'male', 24, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '6', '1', 9576242954, 3, 'Working', 8, 'Nehru nagar Bhopal', 4, 'BSc', 3, 'Gouri Tiwari ', 'Bhupendra Tiwari', 0, 2, 0, '0', 0),
(21, 'tripathi326@gmail.com', '202cb962ac59075b964b07152d234b70', 'trilok Tripathi', '', 'male', 28, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '4', '1', 9576242954, 1, '', 0, '', 4, 'BSc', 0, '', '', 0, 0, 0, '0', 0),
(22, 'sanju10@gmail.com', '202cb962ac59075b964b07152d234b70', 'Sanju Basone', '', 'male', 25, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '5', '1', 7000891482, 3, 'working', 3, '26/136 1st floor\r\nnehru nagar', 4, 'BSc', 3, 'Meena Basone', 'Jagat Basone', 0, 3, 0, '0', 0),
(23, 'lokesh24@gmail.com', '202cb962ac59075b964b07152d234b70', 'Lokesh', '', 'male', 26, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '1', '1', 7000891482, 3, 'study', 7, '24/179\r\njahangirabad ', 4, 'BSc', 2, 'Joti', 'Rajat', 0, 3, 0, '0', 0),
(24, 'banothegarima15@gmail.com', '202cb962ac59075b964b07152d234b70', 'Garima Bnothe', '', 'female', 22, '1995-03-09', '160.02', 51, '123456789', '', 'Punjabi', 'English', '1', '1', '3', '2', 7514962452, 3, 'study', 2, 'Sundar nagar ', 4, 'BSc', 2, 'Bhumika Bnothe', 'Manohar Bnothe', 1, 2, 96, '0', 0),
(25, 'sonallilhare5@gmail.com', '202cb962ac59075b964b07152d234b70', 'Sonal Lilhare', '', 'female', 20, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '4', '1', 9904485237, 1, '', 0, '', 4, 'BSc', 0, '', '', 0, 0, 0, '0', 0),
(27, 'jainbittu76@gmail.com', '202cb962ac59075b964b07152d234b70', 'Bittu Jain', '', 'male', 29, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '4', '1', 9502485237, 3, 'working ', 6, '25/112 Bhilai', 4, 'BSc', 2, 'Rajvanta Jain', 'Ishver Jain', 0, 2, 0, '0', 0),
(28, 'rani6@gmail.com', '202cb962ac59075b964b07152d234b70', 'Rani Jain', '', 'female', 23, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '1', '2', 9502485837, 3, 'student', 7, 'Malvi nagar', 4, 'BSc', 2, 'Rekha Jain', 'Pakash Jain', 2, 0, 0, '0', 0),
(29, 'pankaj03@gmail.com', '202cb962ac59075b964b07152d234b70', 'Pankaj Jain', '', 'male', 25, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '6', '1', 9502485832, 8, 'student', 0, 'Banjari nagar ', 4, 'BSc', 2, 'Anamika Jain', 'Kamal Jain', 1, 1, 0, '0', 0),
(30, 'Kajal86@gmail.com', '202cb962ac59075b964b07152d234b70', 'Kajal Jain', '', 'female', 26, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '2', '1', 9702485832, 10, 'Student', 0, 'Bilashpur', 4, 'BSc', 2, 'Divya Jain', 'Dinesh Jain', 1, 1, 0, '0', 0),
(31, 'vedu@gmail.com', '202cb962ac59075b964b07152d234b70', 'Ved Jain', '', 'male', 27, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '6', '1', 9702485830, 7, 'Doctor', 0, 'Rajasthan', 4, 'BSc', 2, 'Anjali Jain', 'Aman Jain', 0, 0, 0, '0', 0),
(32, 'shalu26@gmail.com', '202cb962ac59075b964b07152d234b70', 'Shalu Jain', '', 'female', 21, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '2', '2', 7876002890, 3, 'student', 8, 'Gudihari ', 4, 'BSc', 2, 'Veena Jain', 'Ritesh Jain', 3, 1, 0, '0', 0),
(33, 'naira963@gmail.com', '202cb962ac59075b964b07152d234b70', 'Naira Jain', '', 'female', 22, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '3', '1', 7876002892, 4, 'Actor', 0, 'New market Bhopal', 4, 'BSc', 5, 'Kaira Jain', 'Jatin Jain', 1, 1, 0, '0', 0),
(34, 'Kartic3@gmail.com', '202cb962ac59075b964b07152d234b70', 'Kartic Jain', '', 'female', 30, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '2', '2', 7876002892, 3, '', 0, '', 4, 'BSc', 0, '', '', 0, 0, 0, '0', 0),
(35, 'neel24@gmail.com', '202cb962ac59075b964b07152d234b70', 'Neel Verma', '', 'male', 24, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '5', '1', 7000891482, 4, '', 0, '', 4, 'BSc', 0, '', '', 0, 0, 0, '0', 0),
(36, 'komal19@gmail.com', '202cb962ac59075b964b07152d234b70', 'Komal kumbhkar', '', 'male', 24, '0000-00-00', '0.00', 0, '', '', '', '', '1', '2', '2', '5', 7000891482, 3, 'Working in kanker', 2, '26/1342 1st floor\r\nravi nagar', 4, 'BSc', 0, 'Manju Kumbhkar', 'lokesh kumbhkar', 0, 1, 0, '0', 0),
(37, 'mamta patel1196', '202cb962ac59075b964b07152d234b70', 'mamta kumar ', '', 'male', 24, '0000-00-00', '0.00', 0, '', '', '', '', '1', '1', '3', '1', 8085537403, 3, '', 0, '', 4, 'BSc', 0, '', '', 0, 0, 0, '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_status`
--
ALTER TABLE `career_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`cast_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `height`
--
ALTER TABLE `height`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marital_status`
--
ALTER TABLE `marital_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sect`
--
ALTER TABLE `sect`
  ADD PRIMARY KEY (`sect_id`);

--
-- Indexes for table `send_request`
--
ALTER TABLE `send_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD UNIQUE KEY `state_name` (`state_name`);

--
-- Indexes for table `sub_sect`
--
ALTER TABLE `sub_sect`
  ADD PRIMARY KEY (`sub_sect_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_status`
--
ALTER TABLE `career_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cast`
--
ALTER TABLE `cast`
  MODIFY `cast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `height`
--
ALTER TABLE `height`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `marital_status`
--
ALTER TABLE `marital_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sect`
--
ALTER TABLE `sect`
  MODIFY `sect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `send_request`
--
ALTER TABLE `send_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_sect`
--
ALTER TABLE `sub_sect`
  MODIFY `sub_sect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

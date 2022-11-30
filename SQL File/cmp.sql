-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 09:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `photo` varchar(2000) NOT NULL,
  `age_verification` varchar(100) NOT NULL,
  `terms_conditions` varchar(122) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `password`, `mobile`, `email`, `date_of_birth`, `address`, `gender`, `country`, `photo`, `age_verification`, `terms_conditions`, `usertype`) VALUES
(1, 'pramod', 'pramod', '9876543210', 'pramod@gmail.com', '2001-05-12', 'Nuwakot', 'Male', 'Nepal', 'user.png', 'Yes', 'Yes', 'User'),
(2, 'admin', 'admin', '9861435726', 'admin@gmail.com', '2000-07-09', 'Tanahun', 'Male', 'Nepal', 'Mr. Saurabh', 'Yes', 'Yes', 'Admin'),
(3, 'saurabh', 'saurabh', '0989729861', 'saurabharyal@gmail.com', '2022-02-02', 'KTM', 'Male', 'Nepal', 'Mr. Saurabh.jpg', 'Yes', 'Yes', 'User'),
(4, 'sanaya', 'sanaya', '9876543221', 'sanaya@gmail.com', '2022-03-30', 'Nuwakot', 'female', 'Nepal', 'trekking.jpg', 'Yes', 'Yes', 'User'),
(5, 'binod', 'binod', '9241245151', 'Binod@gmail.com', '2021-12-29', 'KTM', 'Male', 'Nepal', 'ab.jpg', 'Yes', 'Yes', 'User'),
(6, 'aashu', 'aashu', '9721911422', 'aashu@gmail.com', '2022-03-27', 'KTM', 'Male', 'Nepal', 'ab.jpg', 'Yes', 'Yes', 'User'),
(7, 'sujata', 'sujata', '7814691240', 'sujata@gmail.com', '2022-04-01', 'KTM', 'female', 'Nepal', 'ab.jpg', 'Yes', 'Yes', 'User'),
(8, 'Lalu', 'lalu', '9876543221', 'lal@gmail.com', '2022-03-27', 'KTM', 'Male', 'Nepal', 'about.jpg', 'Yes', 'Yes', 'User'),
(9, 'shrawan', 'shrawan', '9876543210', 'shrawan@gmail.com', '2022-04-01', 'KTM', 'Male', 'Nepal', 'IMG-01634585b7f43525f8059f118b6a9f6e-V.jpg', 'Yes', 'Yes', 'User'),
(10, 'prayag', 'prayag', '9876543210', 'prayag@gmail.com', '2022-04-21', 'KTM', 'Male', 'Nepal', 'ab.jpg', 'Yes', 'Yes', 'User'),
(11, 'shijal', 'shijal', '9876543221', 'shijal@gmail.com', '2022-05-03', 'KTM', 'Female', 'Nepal', 'ab.jpg', 'Yes', 'Yes', 'User'),
(12, 'Jenny', 'jenny', '9805643871', 'jenny@gmail.com', '2000-11-18', 'Dharan', 'Female', 'China', '20201003_121522.jpg', 'Yes', 'Yes', 'User'),
(14, 'prayag1', 'prayag1', '9876543221', 'prayag@gmail.com', '2022-06-23', 'KTM', 'Male', 'Nepal', 'ab.jpg', 'Yes', 'Yes', 'User'),
(15, 'Dan', 'dan', '9801242678', 'dan@gmail.com', '2022-08-08', 'KTM', 'Male', 'Nepal', 'Mr. Saurabh.JPG', 'Yes', 'Yes', 'User'),
(18, 'Ram', 'ram', '9801274563', 'ram@gmail.com', '', 'KTM', 'Male', 'Nepal', 'IMG-01634585b7f43525f8059f118b6a9f6e-V.jpg', 'Yes', 'Yes', 'User'),
(19, 'sarita', 'sarita', '9801274563', 'sarita@gmail.com', '', 'KTM', 'Female', 'Nepal', '20191004_175625.jpg', 'Yes', '', 'User'),
(21, 'Drake', 'drake', '9801274563', 'drake@gmail.com', '', 'PKR', 'Male', 'Nepal', '20201003_121522.jpg', 'Yes', 'Yes', 'User'),
(22, 'Drake', 'drake', '9801274563', 'drake@gmail.com', '', 'PKR', 'Male', 'Nepal', '20201003_121522.jpg', 'Yes', 'Yes', 'User'),
(23, 'pratik', 'pratik', '9801274563', 'pratik@gmail.com', '', 'HTD', 'Male', 'Nepal', '20191005_161612.jpg', 'Yes', 'Yes', 'User'),
(24, 'bibek', 'bibek', '9087865438', 'bibek@gmail.com', '', 'New Road', 'Male', 'Nepal', '20200325_175025.jpg', 'Yes', 'Yes', 'User'),
(25, 'girish', 'girish', '9236517409', 'girish@gmail.com', '', 'London', 'Male', 'Nepal', '20200419_164609.jpg', 'Yes', 'Yes', 'User'),
(26, 'federer', 'federer', '9801274563', 'federer@gmail.com', '', 'Tanahun', 'Male', 'Nepal', '20191004_175653.jpg', 'Yes', 'Yes', 'User'),
(27, 'Saurabh Aryal', 'saurabh2', '9861435726', 'saurabharyal10@gmail', '', 'Erahiti-16, Dhungedhara, Kathmandu', 'Male', 'Nepal', 'Mr. Saurabh.JPG', 'Yes', 'Yes', 'User'),
(28, 'mohan', 'mohan', '9083189210', 'mohan@gmail.com', '', 'Delhi', 'Female', 'India', 'wallpaper.png', 'Yes', 'Yes', 'User'),
(29, 'Saurabh Aryal', 'saurabh', '9861435726', 'saurabharyal10@gmail.com', '', 'Erahiti-16, Dhungedhara, Kathmandu', 'Male', 'Nepal', 'background_image.jpg', '', 'Yes', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `account_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile`, `email`, `address`, `gender`, `country`, `photo`, `document`, `usertype`, `account_id`) VALUES
(1, 'binod', '9809878675', 'binod@gmail.com', 'Gongabu', 'Male', 'Nepal', 'Saurabh.jpg', 'Resume_SaurabhAryal.pdf', 'User', 27),
(2, 'shijal', '9089786543', 'shijal@gmail.com', 'Tokha', 'Female', 'USA', 'background_image.jpg', 'front page.docx', 'User', 27),
(3, 'sanaya', '9876543210', 'sanaya@gmail.com', 'Nuwakot', 'Female', 'Nepal', 'wallpaper.png', 'front page.docx', 'User', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 12:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend`
--

CREATE TABLE `backend` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `who` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backend`
--

INSERT INTO `backend` (`id`, `name`, `dob`, `gender`, `mobileno`, `email`, `address`, `reason`, `who`, `type`, `state`, `password`, `cpassword`) VALUES
(4, 'Adeoti Adebowale', '2022-06-22', 'Male', '09029663936', 'adeotiadebowale@gmail.com', 'crawford', 'My child', 'My child', 'parents', 'lagos state', '8d3c3af7ef6c9cb50d36c4d451ad57f6', '8d3c3af7ef6c9cb50d36c4d451ad57f6');

-- --------------------------------------------------------

--
-- Table structure for table `user_dashboard`
--

CREATE TABLE `user_dashboard` (
  `id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `DOV` varchar(200) NOT NULL,
  `TOV` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_dashboard`
--

INSERT INTO `user_dashboard` (`id`, `location`, `name`, `user_type`, `pname`, `email`, `mobileno`, `purpose`, `parent`, `DOV`, `TOV`) VALUES
(1, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '200', 'seni', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Sibling', '2022-06-28', '01:36'),
(17, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '200', 'seni', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Sibling', '2022-06-28', '01:36'),
(18, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '100', 'seni', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Parent / Guardian', '2022-06-27', '16:52'),
(19, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '200', 'adepeju', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Parent / Guardian', '2022-07-21', '10:15'),
(20, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '100', 'adepeju', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Sibling', '2022-07-09', '19:17'),
(21, 'upload/', '', 'Choose...', '', '', 0, '', 'Choose...', '', ''),
(22, 'upload/', '', 'Choose...', '', '', 0, '', 'Choose...', '', ''),
(23, 'upload/', '', 'Choose...', '', '', 0, '', 'Choose...', '', ''),
(24, 'upload/ACCD6551.JPG', 'Adeoti Adebowale', '100', 'seni', 'usikpedosamel@gmail.com', 2147483647, 'delivery', 'Parent / Guardian', '2022-07-14', '15:31'),
(25, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '300', 'adepeju', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Parent / Guardian', '2022-07-28', '16:51'),
(26, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '300', 'adepeju', 'mom@gmail.com', 2147483647, 'delivery', 'Sibling', '2022-07-21', '16:00'),
(27, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '300', 'seni', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Sibling', '2022-07-29', '12:45'),
(28, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '400', 'adepeju', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Parent / Guardian', '2022-07-29', '13:56'),
(29, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '400', 'adepeju', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Parent / Guardian', '2022-07-29', '13:56'),
(30, 'upload/AJKU2056.JPG', 'Adeoti Adebowale', '300', 'adepeju', 'mom@gmail.com', 2147483647, 'delivery', 'Sibling', '2022-07-21', '16:00'),
(31, 'upload/AJKU2056.JPG', 'Adeoti Adepeju', '400', 'adepeju', 'adeotiadebowale@gmail.com', 2147483647, 'delivery', 'Sibling', '2022-07-23', '11:36'),
(32, 'upload/AJKU2056.JPG', 'Adeoti Adebowale Ibrahim', '400', 'lawi', 'lawi@gmail.com', 2147483647, 'taking him home', 'Parent / Guardian', '2022-07-23', '14:45'),
(33, 'upload/admin.PNG', 'Adeoti Adebowale', '100', 'Uncle Rufus', 'adeotiadebowale@gmail.com', 909090909, 'taking him home', 'Parent / Guardian', '2022-08-02', '15:27'),
(34, 'upload/amala.PNG', 'Adeoti Adebowale', '400', 'Tunde', 'Tunde@gmail.com', 2147483647, 'delivery', 'Parent / Guardian', '2022-07-23', '12:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backend`
--
ALTER TABLE `backend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_dashboard`
--
ALTER TABLE `user_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backend`
--
ALTER TABLE `backend`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_dashboard`
--
ALTER TABLE `user_dashboard`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

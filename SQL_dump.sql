-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 07:30 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csiwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_master`
--

CREATE TABLE `blog_master` (
  `blog_id` int(7) NOT NULL,
  `title` varchar(80) NOT NULL,
  `date_published` date NOT NULL DEFAULT current_timestamp(),
  `content` varchar(30000) NOT NULL,
  `author` varchar(50) NOT NULL DEFAULT 'CSI DDU',
  `photo_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_master`
--

INSERT INTO `blog_master` (`blog_id`, `title`, `date_published`, `content`, `author`, `photo_link`) VALUES
(4, 'Darshna blog', '2019-07-18', 'loremfjshdfj djfh ghgs hguieui', 'Darshan Beladiya', 'assets/images_blog/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `id` int(6) NOT NULL,
  `name` varchar(70) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` varchar(700) NOT NULL,
  `photo_link` varchar(500) DEFAULT NULL,
  `blog_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`id`, `name`, `type`, `date`, `description`, `photo_link`, `blog_link`) VALUES
(12, 'Quizophile', 'Workshop', '0018-12-18', 'this is test', 'assets/images/1.jpg', 'sf'),
(13, 'Javascirpt workshop', 'Seminar', '0030-12-16', 'dhgg', 'assets/images/13.jpg', 'https://developers.google.com/web/tools/'),
(15, 'vivek', 'Knowledge Sharing Se', '2019-06-12', 'thi si stest desc', 'assets/images/14.jpg', 'facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`username`, `password`, `role`) VALUES
('vivek', 'vivek123', 'admin'),
('trupti', 'trupti123', 'admin'),
('smit', 'smit123', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_master`
--
ALTER TABLE `blog_master`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_master`
--
ALTER TABLE `blog_master`
  MODIFY `blog_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

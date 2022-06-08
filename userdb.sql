-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 04:06 PM
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
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `achieve`
--

CREATE TABLE `achieve` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `atype` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `dateach` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achieve`
--

INSERT INTO `achieve` (`id`, `fname`, `atype`, `aname`, `dateach`) VALUES
(2, 'Guddu', 'paper published', 'best teaching methods', '2021-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `cername` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`id`, `fname`, `cername`, `date`, `pic`) VALUES
(1, 'guddu', 'pro', '2021-09-01', 'upload/Akbar_2.jpg'),
(3, 'guddu', 'test image1', '2021-09-25', 'upload/vAjcwGb.jpeg'),
(4, 'guddu', 'test image', '2021-09-22', 'upload/screen.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `cbranch` varchar(255) NOT NULL,
  `cdate` date NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `cname`, `fname`, `cbranch`, `cdate`, `time`) VALUES
(3, 'SQL', 'guddu', 'Engineering', '2021-09-22', '23:28'),
(4, 'php', 'faculty', 'Applied Science', '2021-09-22', '19:28'),
(5, 'dbms', 'faculty', 'Applied Sciences', '2021-09-08', '18:46');

-- --------------------------------------------------------

--
-- Table structure for table `fac_leave`
--

CREATE TABLE `fac_leave` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `apdate` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fac_leave`
--

INSERT INTO `fac_leave` (`id`, `fname`, `reason`, `apdate`, `duration`, `status`) VALUES
(15, 'Guddu', 'not well', '2021-09-30', '1 month', 'Apporved'),
(16, 'Guddu', 'testing', '2021-10-15', '1 month', 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `facteach` varchar(255) NOT NULL,
  `date added` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `branch`, `dept`, `facteach`, `date added`) VALUES
(3, 'dbms', 'CSE', 'Engineering', 'testfac', '2021-09-16 13:11:42.297134'),
(4, 'science ', 'chem', 'Applied Science', 'testfac', '2021-09-30 13:02:51.257766'),
(5, 'Building Blocks', 'CE', 'Engineering', 'Guddu', '2021-09-30 12:55:06.907027'),
(6, 'Thermodynamics and Statistical Mechanics', 'phy', 'Applied Science', 'testfac', '2021-09-30 13:33:03.083457'),
(7, 'Organic Chemistry', 'chem', 'Applied Science', 'Guddu', '2021-09-30 13:33:30.903258'),
(8, ' applied mathematics', 'math', 'Applied Science', 'testfac', '2021-09-30 13:34:14.058889'),
(9, 'Behavior ', 'human', 'Humanities', 'Guddu', '2021-09-30 13:34:35.098142'),
(10, 'Basics of cricket ', 'sport', 'Humanities', 'testfac', '2021-09-30 13:34:54.754924'),
(11, 'C ++', 'IT', 'Engineering', 'Guddu', '2021-09-30 13:35:11.515200'),
(12, 'Wire Type', 'EE', 'Engineering', 'testfac', '2021-09-30 13:35:31.214458'),
(13, 'CNG programming ', 'ME', 'Engineering', 'Guddu', '2021-09-30 13:35:49.968372'),
(14, 'Arduino', 'ECE', 'Engineering', 'testfac', '2021-09-30 13:36:04.118150');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` enum('admin','faculty','user') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sansw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `password`, `name`, `sansw`) VALUES
(1, 'admin', 'sudhanshu', 'sudhanshu123', 'sudhanshu bajpai', 'vedant'),
(3, 'user', 'user', 'user', 'user ', 'user123'),
(7, 'faculty', 'Guddu', 'gudduu123', 'Guddu', 'guddu'),
(8, 'faculty', 'faculty', 'faculty', 'testfac', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mob_no` int(10) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `postcode` int(25) NOT NULL,
  `joined_on` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `exp` int(100) NOT NULL,
  `dtt_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `mob_no`, `add1`, `add2`, `postcode`, `joined_on`, `area`, `email`, `education`, `country`, `state`, `exp`, `dtt_time`) VALUES
(3, 'Guddu', 2147483647, '161, Rathod Layout , Anant Nagar , Nagpur', 'jafar nagar', 440013, '2021-09-01', 'anant nagar', 'bajpai.sudhanshu007@gmail.com', 'B.E', 'India', 'Maharashtra', 5, '2021-09-24 13:26:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achieve`
--
ALTER TABLE `achieve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fac_leave`
--
ALTER TABLE `fac_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achieve`
--
ALTER TABLE `achieve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fac_leave`
--
ALTER TABLE `fac_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

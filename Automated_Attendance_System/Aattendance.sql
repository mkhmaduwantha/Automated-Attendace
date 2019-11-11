-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 04:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Aattendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `creeated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `aname`, `password`, `email`, `status`, `creeated`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1, 1489060137);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `aid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `ispresent` tinyint(4) NOT NULL,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`aid`, `sid`, `date`, `ispresent`, `uid`, `id`) VALUES
(92, 1, 1489795200, 1, 1, 1),
(93, 2, 1489795200, 1, 1, 1),
(94, 3, 1489795200, 1, 1, 1),
(95, 4, 1489795200, 1, 1, 1),
(96, 5, 1489795200, 1, 1, 1),
(97, 1, 1573254000, 1, 1, 1),
(98, 2, 1573254000, 1, 1, 1),
(99, 3, 1573254000, 1, 1, 1),
(100, 4, 1573254000, 1, 1, 1),
(101, 5, 1573254000, 1, 1, 1),
(102, 1, 1573167600, 1, 1, 1),
(103, 2, 1573167600, 1, 1, 1),
(104, 3, 1573167600, 1, 1, 1),
(105, 4, 1573167600, 1, 1, 1),
(106, 5, 1573167600, 1, 1, 1),
(107, 1, 1572908400, 1, 1, 1),
(108, 2, 1572908400, 0, 1, 1),
(109, 3, 1572908400, 0, 1, 1),
(110, 4, 1572908400, 1, 1, 1),
(111, 5, 1572908400, 0, 1, 1),
(112, 1, 1572822000, 1, 1, 1),
(113, 2, 1572822000, 0, 1, 1),
(114, 3, 1572822000, 0, 1, 1),
(115, 4, 1572822000, 0, 1, 1),
(116, 5, 1572822000, 0, 1, 1),
(117, 1, 1570744800, 1, 1, 1),
(118, 2, 1570744800, 1, 1, 1),
(119, 3, 1570744800, 1, 1, 1),
(120, 4, 1570744800, 1, 1, 1),
(121, 5, 1570744800, 1, 1, 1),
(122, 1, 1570399200, 1, 1, 1),
(123, 2, 1570399200, 0, 1, 1),
(124, 3, 1570399200, 0, 1, 1),
(125, 4, 1570399200, 1, 1, 1),
(126, 5, 1570399200, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `rollno`) VALUES
(1, 'jsn', '101'),
(2, 'parth', '102'),
(3, 'jainik', '103'),
(4, 'ronak', '104'),
(5, 'ritul', '105'),
(9, 'kasun', '60'),
(10, 'nimal', '75'),
(11, 'kamal', '76'),
(12, 'hello', '76'),
(13, 'hello', '1'),
(14, 'hashan', '101'),
(15, 'hashan', '300'),
(16, 'hello', '1'),
(17, 'hello', '1'),
(18, 'hashan', '1'),
(19, 'hashan', '100'),
(20, 'hello', '100'),
(21, 'hello', '99'),
(22, 'hello', '122');

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE `student_subject` (
  `sid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`sid`, `id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(8, 2),
(9, 2),
(10, 4),
(11, 4),
(12, 4),
(13, 2),
(14, 2),
(15, 2),
(13, 2),
(13, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'maths'),
(2, 'csa'),
(3, 'dm'),
(4, 'jt'),
(5, 'daa'),
(6, 'IT'),
(7, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `password`, `status`) VALUES
(1, 'vbp', 'vbp', 1),
(2, 'njb', 'njb', 1),
(3, 'prd', 'prd', 1),
(4, 'pmc', 'pmc', 1),
(5, 'hello', 'hello', 1),
(6, 'hello', 'hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_subject`
--

CREATE TABLE `user_subject` (
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_subject`
--

INSERT INTO `user_subject` (`uid`, `id`) VALUES
(1, 1),
(3, 2),
(4, 5),
(2, 4),
(5, 6),
(5, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

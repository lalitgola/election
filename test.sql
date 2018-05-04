-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 08:22 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminid`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desi` varchar(50) NOT NULL,
  `jobp` varchar(100) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `sel` varchar(50) NOT NULL,
  `sels` varchar(50) NOT NULL,
  `selc` varchar(50) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `name`, `desi`, `jobp`, `mob`, `email`, `add1`, `add2`, `sel`, `sels`, `selc`, `pin`, `image`, `des`) VALUES
(8, 'Information About Me', 'Lalit Gola', 'Employee', 'Programmer', '8750757642', 'lalit123@gmail.com', 'Vill. Mahmadpur PO. Fatehpur Billoch', 'Teh. Ballabgarh', '1', '2', '1', '121004', 'eyeu_20180208_171803194.jpg', 'Hello'),
(9, 'Information', 'Kamal', 'Job', 'Desiner', '9876542310', 'kamal123@gmail.com', 'Vill. Gharora Po. Tigaon', 'Teh. Ballabgarh', '1', '2', '1', '121102', 'eyeu_20180208_171819401.jpg', 'Hi friends'),
(10, 'Indian ', 'Suresh Kumar', 'Worker', 'Mechanic', '5649871230', 'suresh123@gmail.com', 'VPO Tigaon', 'Teh. Ballagbarh', '1', '2', '1', '121104', 'eyeu_20180208_171954072.jpg', 'This all about me');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 2, 'Faridabad'),
(3, 2, 'Palwal'),
(4, 2, 'Ballabgarh'),
(5, 2, 'Gurgaon'),
(6, 2, 'Hodal'),
(9, 3, 'Nicobar'),
(10, 3, 'North and Middle '),
(11, 3, 'South Andaman'),
(12, 4, 'Anantapur'),
(13, 4, 'Chittoor'),
(14, 4, 'East Godavari'),
(15, 4, 'YSR Kadapa'),
(16, 4, 'Vizianagaram'),
(17, 5, 'Tawang'),
(18, 5, 'West Kameng'),
(19, 5, 'East Kameng'),
(20, 5, 'Papum Pare'),
(21, 5, 'Kurung Kumey'),
(22, 5, 'Kra Daadi'),
(23, 6, 'Barpeta'),
(24, 6, 'Bongaigaon'),
(25, 6, 'Cachar'),
(26, 6, 'Darrang'),
(27, 6, 'Dhemaji'),
(28, 6, '	Dibrugarh'),
(29, 6, 'Hailakandi');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country`) VALUES
(1, 'India'),
(2, 'Israel '),
(3, 'Australia'),
(4, 'Belgium'),
(5, 'Canada'),
(6, 'Germany '),
(7, 'Japan'),
(8, 'Nepal'),
(9, 'New Zealand '),
(10, 'Russia'),
(11, 'South Africa'),
(12, 'Sri Lanka'),
(13, 'Thailand '),
(14, 'United Kingdom '),
(15, 'United States of America'),
(16, 'Vatican City '),
(17, 'Zambia '),
(23, 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `pshort_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `pname`, `logo`, `pshort_name`) VALUES
(1, 'Bharathiya Jantha Party', 'bjp.jpg', 'BJP'),
(2, 'Indian National Congress', 'cong.jpg', 'INC'),
(3, 'Bahujan Samaj Party', 'bsp.jpg', 'BSP'),
(4, 'Aam Admi Party', 'aap.jpg', 'AAP'),
(5, 'Indian National Lok Dal', 'indl.jpg', 'INLD');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position`) VALUES
(2, 'MLA'),
(3, 'MP'),
(4, 'DC'),
(5, 'BLOCK');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `email`, `pass`) VALUES
(11, 'Lalit Gola', 'lalitgola554@gmail.com', '123456'),
(12, 'Manoj', 'mkgola92@gmail.com', '123456'),
(13, 'Harsh kumar', 'harsh123@gmail.com', '987456'),
(18, 'dinesh', 'dineshsharmarss@gmail.com', '1234'),
(20, 'Harish ', 'harish123@gmail.com', '456987123'),
(21, 'Komal', 'komal123@gmail.com', '2521+263'),
(22, 'Pushpender', 'riskygolaboy123@gmail.com', '45612365'),
(24, 'pradeep', 'pradeep@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(2, 1, 'Haryana'),
(3, 1, 'Andaman and Nicobar Islands'),
(4, 1, 'Andhra Pradesh'),
(5, 1, 'Arunachal Pradesh'),
(6, 1, 'Assam'),
(7, 1, 'Bihar'),
(8, 1, 'Chandigarh'),
(9, 1, 'Chhattisgarh'),
(10, 1, 'Goa'),
(11, 1, 'Gujarat'),
(12, 1, 'Himachal Pradesh'),
(13, 1, 'Jammu and Kashmir'),
(14, 1, 'Jharkhand'),
(15, 1, 'Karnataka'),
(16, 1, 'Kerala'),
(17, 1, 'Madhya Pradesh'),
(18, 1, 'Maharashtra'),
(19, 1, 'Manipur'),
(20, 1, 'Meghalaya'),
(21, 1, 'Mizoram'),
(22, 1, 'Nagaland'),
(23, 1, 'Odisha'),
(24, 1, 'Punjab'),
(25, 1, 'Rajasthan'),
(26, 1, 'Sikkim'),
(27, 1, 'Tamil Nadu'),
(28, 1, 'Telangana'),
(29, 1, 'Tripura'),
(30, 1, 'Uttar Pradesh'),
(31, 1, 'Uttarakhand'),
(32, 1, 'West Bengal'),
(33, 1, 'New Delhi'),
(42, 2, 'Afula'),
(43, 2, 'Arad'),
(44, 2, 'Ashdod'),
(45, 2, 'Baqa al-Gharbiyye'),
(46, 3, 'New South Wales'),
(47, 3, 'Queensland'),
(48, 3, 'South Australia'),
(49, 3, 'Tasmania'),
(50, 3, 'Norfolk Island'),
(51, 4, 'Andenne'),
(52, 4, 'Antoing'),
(53, 4, 'Beauraing'),
(54, 4, 'Beringen'),
(55, 4, 'Waregem'),
(56, 5, 'Alberta'),
(57, 5, '	British Columbia'),
(58, 5, 'Manitoba');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pass`) VALUES
(1, 'Lalit', 'Kumar', 'lalit123@gmail.com', '123456'),
(2, 'Harish', 'Kumar', 'harish123@gmail.com', '654321'),
(3, 'Kapil', 'Shrma', 'kapil123@gmail.com', '123789'),
(10, 'Surjan', 'Gola', 'surjan123@gmail.com', '142536'),
(11, 'Rohit', 'Gola', 'rohit123@gmail.com', '123456'),
(12, 'Suraj', 'Gola', 'suraj123@gmail.com', '123456'),
(13, 'Komal', 'Bhati', 'komal123@gmail.com', '123456'),
(14, 'Munish', 'Kumar', 'munish123@gmail.com', '123456'),
(15, 'Harshit', 'Bhardwaj', 'harshit123@gmail.com', '236541'),
(16, 'jakir', 'jakir', 'jakir123@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `user_id` varchar(110) NOT NULL,
  `party` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `party`, `position`) VALUES
(23, '1', 'BJP', 'mp'),
(24, '1', 'BJP', 'dc'),
(25, '1', 'BJP', 'mla'),
(26, '1', 'BSP', 'block'),
(27, '2', 'BJP', 'mla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

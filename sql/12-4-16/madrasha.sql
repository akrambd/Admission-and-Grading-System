-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 07:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madrasha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `full_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `full_name`) VALUES
(9, 'akram@gmail.com', '12345', 'Akram Chowdhury'),
(101, 'ashrafulrobin3@gmail.com', '12345', 'Ashraful Islam');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `s_id` int(5) NOT NULL,
  `std_name` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(3) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `f_occup` varchar(14) NOT NULL,
  `nation` varchar(14) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `g_mob` varchar(16) NOT NULL,
  `par_addr` text NOT NULL,
  `pre_add` text NOT NULL,
  `prev_inst` varchar(30) NOT NULL,
  `prev_class` varchar(10) NOT NULL,
  `add_class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`s_id`, `std_name`, `birth_date`, `age`, `f_name`, `f_occup`, `nation`, `m_name`, `g_mob`, `par_addr`, `pre_add`, `prev_inst`, `prev_class`, `add_class`) VALUES
(1, 'Akram', '2014-08-11', 2, 'wegfra', 'asfsd', 'weff', 'ewfrE', 'EAFSF', 'WEFRe', 'wefsD', 'the new nation', '5', '6'),
(12, 'Akram', '2016-11-03', 14, 'jhsfdgd', 'dfgd', 'dfgdfg', 'fdgdfgh', 'fdgfd', 'dfgfdgfd', 'dgdf', 'fdgfdg', '5', '6'),
(13, 'MD.Kowsar Alam', '1996-04-03', 22, 'Abul Kashem', 'Abroad', 'bangladeshi', 'kopopp', '01836748221', 'comilla', 'Uttara', 'Comilla Residential school ', '5', '6'),
(14, 'korim', '2010-05-13', 5, 'rahim', 'nothing', 'bangladeshi', 'rohima', '01*****', 'dhaka', 'dhaka', 'ist', 'Play', 'Nursary'),
(15, 'Ashraful', '1994-11-04', 23, 'sirajul islam', 'gov_server', 'bangladeshi', 'minara begum', '0167....', 'dhaka', 'dhaka', 'NU', '4', '4'),
(16, 'Akram', '2016-12-07', 0, 'safdsdf', 'sdfsdf', 'sdfsdfsdf', 'fdssdf', 'sdfsdf', 'sdfsdfsdf', 'SDFSDfsd', 'sdfsdfsd', 'null', 'Play');

-- --------------------------------------------------------

--
-- Table structure for table `grade_table`
--

CREATE TABLE `grade_table` (
  `grade_id` int(10) NOT NULL,
  `teacher_id` int(15) NOT NULL,
  `s_id` int(15) NOT NULL,
  `course_code` int(15) NOT NULL,
  `1st_term` float NOT NULL,
  `mid_term` float NOT NULL,
  `final` float NOT NULL,
  `grade` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mark_id` int(10) NOT NULL,
  `std_id` int(10) NOT NULL,
  `subject_code` varchar(15) NOT NULL,
  `final_term` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mark_id`, `std_id`, `subject_code`, `final_term`) VALUES
(16, 10, 'ENG 101', 0),
(17, 10, 'CSC 101', 0),
(18, 1, 'BAN 101', 0),
(19, 1, 'BAN 101', 56),
(20, 1, 'BAN 101', 100),
(21, 1, 'BAN 101', 88),
(22, 7, 'csc 283', 11);

-- --------------------------------------------------------

--
-- Table structure for table `std_info`
--

CREATE TABLE `std_info` (
  `std_id` int(5) NOT NULL,
  `std_name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(3) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `father_occu` varchar(14) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `gardian_mobile` varchar(16) NOT NULL,
  `parmanent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `prev_institute` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_info`
--

INSERT INTO `std_info` (`std_id`, `std_name`, `password`, `birth_date`, `age`, `father_name`, `father_occu`, `nationality`, `mother_name`, `gardian_mobile`, `parmanent_address`, `present_address`, `prev_institute`, `class`) VALUES
(1, 'Akram', '12345', '2014-08-11', 2, 'wegfra', 'asfsd', 'weff', 'ewfrE', 'EAFSF', 'WEFRe', 'wefsD', 'the new nation', 'Six'),
(7, 'Akram v2', '12345', '1993-07-11', 23, 'Borhan', 'abroad', 'bangladesh', 'Hasina', '0147', 'narsingdi', 'uttara', 'kjska', 'Nursary'),
(10, 'Mr Robin', '12345', '2016-07-06', 12, 'sadasdasd', 'sadsadasd', 'asdsadas', 'sadasdas', '01001011', 'asdssfdsfds', 'sdfffffffffffffff', 'DSFDSFSD', 'Nursary');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(10) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `course_name` varchar(10) NOT NULL,
  `std_id` int(10) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `course_name`, `std_id`, `class`) VALUES
(1, 'BAN 101', 'Bangla', 1, 'Six'),
(3, 'ENG 101', 'English', 10, 'Nursary'),
(7, 'CSC 101', 'Computer', 10, 'Nursary'),
(112, 'csc 283', 'Computer', 7, 'Nursary'),
(113, 'ARA 101', 'Arabic', 0, '4'),
(114, 'ARA 101', 'Arabic', 0, '4'),
(115, 'BAN 101', 'Bangla', 0, '4'),
(116, 'ENG 101', 'English', 0, '4'),
(117, 'MAT 101', 'Mathmatics', 0, '4'),
(118, 'FIQ 101', 'FIQAH', 0, '4'),
(119, 'HAD 101', 'Bangla', 0, '4'),
(120, 'WRI 101', 'Writing', 0, '4');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_info`
--

CREATE TABLE `teachers_info` (
  `teacher_id` int(5) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `position` varchar(25) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `edu_qualify` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_info`
--

INSERT INTO `teachers_info` (`teacher_id`, `t_name`, `position`, `mobile_no`, `address`, `edu_qualify`, `password`, `email`) VALUES
(1, 'John Doe', 'Senior Lecturer', '01000000000', 'CA, USA', 'MS on CS From Oxford University', '12345', 'john@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `grade_table`
--
ALTER TABLE `grade_table`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mark_id`);

--
-- Indexes for table `std_info`
--
ALTER TABLE `std_info`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teachers_info`
--
ALTER TABLE `teachers_info`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `grade_table`
--
ALTER TABLE `grade_table`
  MODIFY `grade_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `std_info`
--
ALTER TABLE `std_info`
  MODIFY `std_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

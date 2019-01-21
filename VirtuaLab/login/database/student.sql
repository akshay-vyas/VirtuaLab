-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2016 at 11:27 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `attached_files`
--

CREATE TABLE IF NOT EXISTS `attached_files` (
  `attached_id` int(100) NOT NULL AUTO_INCREMENT,
  `attached_by` varchar(100) NOT NULL,
  `attached_date` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `attached_file` varchar(100) NOT NULL,
  `subject_id` int(50) NOT NULL,
  PRIMARY KEY (`attached_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `attached_files`
--

INSERT INTO `attached_files` (`attached_id`, `attached_by`, `attached_date`, `title`, `attached_file`, `subject_id`) VALUES
(1, 'Akshaya K', '2016-04-20', 'aaaaa', 'affiliationbyelaws_14112012.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clg`
--

CREATE TABLE IF NOT EXISTS `clg` (
  `clg_id` int(20) NOT NULL AUTO_INCREMENT,
  `clg_name` varchar(100) NOT NULL,
  `clg_city` varchar(50) NOT NULL,
  `clg_address` varchar(200) NOT NULL,
  PRIMARY KEY (`clg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `clg`
--

INSERT INTO `clg` (`clg_id`, `clg_name`, `clg_city`, `clg_address`) VALUES
(1, 'JSS', 'dharwad', 'vidyagiri'),
(2, 'KCD', 'dharwad', 'KCD'),
(4, 'BVB', 'Hubli', 'Vidyanagar'),
(5, 'J T COLLEGE', 'GADAG', 'Hatalgeri Road'),
(6, 'Manorama', 'gadag', 'Hatalgeri Road'),
(7, 'Abdual Kalam ', 'gadag', 'Hatalgeri Road'),
(8, 'A.S.S', 'Gadag', 'Behind hockey ground');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(100) NOT NULL AUTO_INCREMENT,
  `clg_id` int(30) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `sem_id` int(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `clg_id`, `duration`, `course_name`, `sem_id`) VALUES
(4, 1, '3', 'BCA', 6),
(5, 1, '3', 'Bsc CS', 6),
(6, 1, '3', 'B Com', 6),
(7, 2, '3', 'BCA', 6),
(8, 2, '3', 'B Com', 6),
(9, 3, '3', 'BCA', 6),
(10, 4, '3', 'BCA', 6),
(11, 5, '3', 'BCA', 6),
(12, 5, '3', 'B COM', 6),
(14, 5, '3', 'M COM', 4),
(15, 6, '3', 'BCA', 6),
(16, 6, '3', 'B COM', 6),
(17, 7, '3', 'BCA', 6),
(18, 7, '3', 'B COM', 6),
(19, 8, '3', 'BCA', 6),
(20, 8, '3', 'BBA', 6);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` int(100) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `hint_qst` varchar(100) NOT NULL,
  `hint_ans` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `hint_qst`, `hint_ans`, `status`) VALUES
('admin', '123', 'admin', 'name?', 'admin', 'active'),
('JSS', '123456', 'college', 'city of the college?', 'dharwad', ''),
('KCD', '123456', 'college', 'city of the college?', 'dharwad', ''),
('SDM', '123456', 'college', 'city of the college?', 'dharwad', ''),
('BVB', '123456', 'college', 'city of the college?', 'Hubli', ''),
('aks@gmail.com', '123456', 'staff', 'What is your Mobile No?', '9879879879', 'active'),
('resh@gmail.com', '123456', 'staff', 'What is your Mobile No?', '9879899999', 'active'),
('J.T OOLLEGE', '123456', 'college', 'city of the college?', 'GADAG', ''),
('Manorama', '123456', 'college', 'city of the college?', 'gadag', ''),
('Abdual Kalam ', '123456', 'college', 'city of the college?', 'gadag', ''),
('A.S.S', '123456', 'college', 'city of the college?', 'Gadag', ''),
('akshay@gmail.com', '123456', 'student', 'What is your Mobile No?', '9879879879', 'active'),
('Temp', '123456', 'college', 'city of the college?', 'bca', ''),
('Temp2', '123456', 'college', 'city of the college?', 'gadag', ''),
('Temp2', '123456', 'college', 'city of the college?', 'gadag', ''),
('akhila@gmail.com', '123456', 'student', 'What is your Mobile No?', '8123619432', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `q_id` int(50) NOT NULL AUTO_INCREMENT,
  `q_from` varchar(100) NOT NULL,
  `q_to` varchar(100) NOT NULL,
  `query_desc` varchar(200) NOT NULL,
  `reply` varchar(500) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`q_id`, `q_from`, `q_to`, `query_desc`, `reply`) VALUES
(2, 'u', 'u', 'u', 'u'),
(3, 'we', '1', 'we', 'we'),
(4, 'akhila@gmail.com', '1', 'sdfghjk', 'ttyu'),
(5, 'akhila@gmail.com', '....select....', 'how?', 'pending'),
(6, 'akhila@gmail.com', '2', 'how?', 'i dont know..'),
(7, 'akhila@gmail.com', '1', 'how?', 'pending'),
(8, 'akhila@gmail.com', 'aks@gmail.com', 'why?', 'fine thank u'),
(9, 'akhila@gmail.com', 'resh@gmail.com', 'how r u ', 'fine');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Student_id` int(13) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(15) NOT NULL,
  `address` varchar(15) NOT NULL,
  `clg_id` int(30) NOT NULL,
  `course_id` int(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `sem` varchar(20) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Student_id`, `fullname`, `address`, `clg_id`, `course_id`, `email_id`, `mobile`, `gender`, `sem`) VALUES
(3, 'akhila', 'gadag', 2, 1, 'akhila@gmail.com', '9638527417', 'Female', '1'),
(5, 'Akshay', 'gadag', 5, 1, 'akshay@gmail.com', '9879879879', 'Male', '6');

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE IF NOT EXISTS `sem` (
  `sem_id` int(100) NOT NULL AUTO_INCREMENT,
  `sem_name` varchar(100) NOT NULL,
  `s_course_id` varchar(100) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(100) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `sub_name`, `course_id`, `sem`) VALUES
(1, 'C Prog', '1', '1'),
(2, 'CPP', '1', '2'),
(3, 'java', '3', '3'),
(4, '', '', ''),
(5, 'C PROGRAMMING', '4', '1'),
(6, 'ELECTRICAL  ELECTRONIC', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `clg_id` int(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `fullname`, `address`, `clg_id`, `email_id`, `mobile_no`, `age`, `gender`, `qualification`, `status`) VALUES
(1, 'Akshaya K', 'dwd', 1, 'aks@gmail.com', '9879879879', '25', 'Female', 'MSC', 'active'),
(2, 'Reshma P', 'dwd', 2, 'resh@gmail.com', '9879899999', '23', 'Female', 'BCA', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

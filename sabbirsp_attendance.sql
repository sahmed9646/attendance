-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2020 at 08:09 AM
-- Server version: 10.3.23-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabbirsp_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attend`
--

CREATE TABLE `tbl_attend` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `attend` varchar(255) NOT NULL,
  `attend_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attend`
--

INSERT INTO `tbl_attend` (`id`, `roll`, `attend`, `attend_date`) VALUES
(1, 22014, 'present', '0000-00-00'),
(2, 24019, 'absent', '2018-02-08'),
(3, 22019, 'absent', '2018-02-08'),
(4, 12345, 'absent', '2018-02-08'),
(5, 45120, 'absent', '2018-02-08'),
(6, 24020, 'present', '2018-02-08'),
(7, 56214, 'absent', '2018-02-08'),
(8, 24021, 'present', '2018-02-08'),
(9, 24022, 'absent', '2018-02-08'),
(10, 22014, 'absent', '2018-02-08'),
(11, 24019, 'absent', '2018-02-13'),
(12, 22019, 'absent', '2018-02-13'),
(13, 12345, 'absent', '2018-02-13'),
(14, 45120, 'absent', '2018-02-13'),
(15, 24020, 'present', '2018-02-13'),
(16, 56214, 'present', '2018-02-13'),
(17, 24021, 'present', '2018-02-13'),
(18, 24022, 'present', '2018-02-13'),
(19, 22014, 'present', '2018-02-13'),
(20, 24019, 'absent', '2018-03-21'),
(21, 22019, 'present', '2018-03-21'),
(22, 12345, 'present', '2018-03-21'),
(23, 45120, 'absent', '2018-03-21'),
(24, 24020, 'absent', '2018-03-21'),
(25, 56214, 'present', '2018-03-21'),
(26, 24021, 'present', '2018-03-21'),
(27, 24022, 'present', '2018-03-21'),
(28, 22014, 'absent', '2018-03-21'),
(29, 24019, 'present', '2019-04-12'),
(30, 22019, 'absent', '2019-04-12'),
(31, 12345, 'present', '2019-04-12'),
(32, 45120, 'present', '2019-04-12'),
(33, 24020, 'absent', '2019-04-12'),
(34, 56214, 'present', '2019-04-12'),
(35, 24021, 'absent', '2019-04-12'),
(36, 24022, 'present', '2019-04-12'),
(37, 22014, 'absent', '2019-04-12'),
(38, 24019, 'present', '2019-11-08'),
(39, 22019, 'present', '2019-11-08'),
(40, 12345, 'absent', '2019-11-08'),
(41, 45120, 'absent', '2019-11-08'),
(42, 24020, 'absent', '2019-11-08'),
(43, 56214, 'absent', '2019-11-08'),
(44, 24021, 'absent', '2019-11-08'),
(45, 24022, 'present', '2019-11-08'),
(46, 22014, 'present', '2019-11-08'),
(47, 24019, 'present', '2019-11-08'),
(48, 22019, 'present', '2019-11-08'),
(49, 12345, 'absent', '2019-11-08'),
(50, 45120, 'absent', '2019-11-08'),
(51, 24020, 'absent', '2019-11-08'),
(52, 56214, 'absent', '2019-11-08'),
(53, 24021, 'absent', '2019-11-08'),
(54, 24022, 'present', '2019-11-08'),
(55, 22014, 'present', '2019-11-08'),
(56, 24019, 'present', '2020-03-25'),
(57, 22019, 'present', '2020-03-25'),
(58, 12345, 'absent', '2020-03-25'),
(59, 45120, 'present', '2020-03-25'),
(60, 24020, 'present', '2020-03-25'),
(61, 56214, 'absent', '2020-03-25'),
(62, 24021, 'absent', '2020-03-25'),
(63, 24022, 'present', '2020-03-25'),
(64, 22014, 'absent', '2020-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `registration` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `roll`, `registration`, `department`) VALUES
(1, 'sabbir ahmed sumon', 24019, 131101019, 'CSE'),
(2, 'jabed ahmed', 22019, 131102019, 'English'),
(3, 'ahmed', 12345, 123123123, 'BBA'),
(4, 'abir khan', 45120, 12548762, 'english'),
(5, 'Asif Ahmed', 24020, 131101020, 'CSe'),
(6, 'akbar', 56214, 2147483647, 'BBA'),
(7, 'Jamil Hossain', 24021, 131101021, 'CSE'),
(8, 'Zahed Ahmed', 24022, 131101024, 'CSE'),
(9, 'Ruhel Mia', 22014, 141102124, 'English');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attend`
--
ALTER TABLE `tbl_attend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attend`
--
ALTER TABLE `tbl_attend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 06:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`username`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cltotal`
--

CREATE TABLE `cltotal` (
  `class` varchar(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cltotal`
--

INSERT INTO `cltotal` (`class`, `points`) VALUES
('2 South', 132);

-- --------------------------------------------------------

--
-- Table structure for table `eval`
--

CREATE TABLE `eval` (
  `stud_id` varchar(11) NOT NULL,
  `points` int(3) NOT NULL DEFAULT 0,
  `remark` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eval`
--

INSERT INTO `eval` (`stud_id`, `points`, `remark`) VALUES
('1234567890', 85, 'qwerty'),
('1234567891', 47, 'KKKKKKKKKKKKK'),
('1234567892', 82, 'bbvhgbhjkj'),
('1234567893', 67, 'tyyiuiohhfkjhdfkjd'),
('1234567894', 75, 'gghgbkjnnkjhu'),
('1234567895', 54, 'bjhkkjhhhuj');

-- --------------------------------------------------------

--
-- Table structure for table `otable`
--

CREATE TABLE `otable` (
  `sub` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `hour` int(2) NOT NULL,
  `min` int(2) NOT NULL,
  `sechr` int(2) NOT NULL,
  `secmin` int(2) NOT NULL,
  `class` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otable`
--

INSERT INTO `otable` (`sub`, `day`, `hour`, `min`, `sechr`, `secmin`, `class`) VALUES
('Geo', 'Monday', 9, 0, 9, 30, '1 East'),
('History', 'Monday', 8, 0, 9, 0, '1 East'),
('History', 'Wednesday', 11, 0, 12, 0, '1 East'),
('Maths', 'Monday', 8, 0, 9, 0, '2 East');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` varchar(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `DOB` date NOT NULL,
  `address` varchar(350) NOT NULL,
  `parent` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `first_name`, `last_name`, `DOB`, `address`, `parent`, `contact`, `gender`, `class`) VALUES
('1234567890', 'Brian', 'Mutsau', '2020-07-21', '35.193.219.36', 'N. Mustau', '0771231234', 'Male', '2 South'),
('1234567891', 'Lydia', 'Chimheno', '2020-07-23', '5 Ternure, Mandara, Harare', 'R. Chimheno', '0779879876', 'Female', '2 South'),
('1234567892', 'Miriro', 'Mabasa', '2020-09-23', '35.193.219.36', 'J. Mabasa', '0126539417', 'Female', '1 East'),
('1234567893', 'Consolata', 'Kapuya', '2020-08-30', '123 Agnes Drive', 'P. Kapuya', '6789998212', 'Female', '4 South'),
('1234567894', 'Munesu', 'Chimz', '2020-09-30', '5 Ternure, Mandara, Harare', 'R. Chimheno', '0126539417', 'Male', '1 North'),
('1234567895', 'Consolata', 'Mutsau', '2020-09-01', '35.193.219.36', 'N. Mustau', '0771231234', 'Other', '1 East');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `subject`) VALUES
(1, 'X. Phiri', 'History'),
(2, 'P. Masvikeni', 'Literature');

-- --------------------------------------------------------

--
-- Table structure for table `ttable`
--

CREATE TABLE `ttable` (
  `sub` varchar(30) NOT NULL,
  `day` text NOT NULL,
  `hour` int(2) NOT NULL,
  `min` int(2) NOT NULL,
  `sechr` int(2) NOT NULL,
  `secmin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ttable`
--

INSERT INTO `ttable` (`sub`, `day`, `hour`, `min`, `sechr`, `secmin`) VALUES
('Geo', 'Monday', 9, 0, 9, 30),
('Maths', 'Monday', 10, 30, 11, 0),
('Literature', 'Friday', 9, 0, 11, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cltotal`
--
ALTER TABLE `cltotal`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `eval`
--
ALTER TABLE `eval`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

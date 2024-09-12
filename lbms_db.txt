-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2024 at 05:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `id` int(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `baid` int(100) NOT NULL,
  `bcid` int(100) NOT NULL,
  `bnum` int(100) NOT NULL,
  `bprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`id`, `bid`, `bname`, `baid`, `bcid`, `bnum`, `bprice`) VALUES
(2, 101, 'Software Engineering', 1001, 10001, 1, 200),
(6, 102, 'Python Programming', 1002, 10002, 2, 350),
(8, 103, 'Data structure', 1003, 10003, 3, 300),
(9, 105, 'Dot Net', 0, 0, 4, 600),
(10, 106, 'Ruby programming', 0, 0, 5, 800);

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmai.com', 'admin123'),
(2, 'adminn', 'adminn@gmail.com', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(100) NOT NULL,
  `aid` int(100) NOT NULL,
  `aname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `aid`, `aname`) VALUES
(5, 112, 'Chetan Bhagat');

-- --------------------------------------------------------

--
-- Table structure for table `categorydb`
--

CREATE TABLE `categorydb` (
  `id` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorydb`
--

INSERT INTO `categorydb` (`id`, `cname`) VALUES
(2, 'Computer Science Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `s_no` int(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bnum` int(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `student_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`s_no`, `bname`, `bnum`, `aname`, `student_id`, `student_name`) VALUES
(1, 'Software Engineering', 0, 'M D Guptaa', 0, ''),
(2, 'Software Engineering', 1, 'M D Guptaa', 0, ''),
(3, 'Software Engineering', 1, 'M D Guptaa', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `issuebookdb`
--

CREATE TABLE `issuebookdb` (
  `bookid` int(100) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL,
  `fine` int(100) NOT NULL,
  `student_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issuebookdb`
--

INSERT INTO `issuebookdb` (`bookid`, `issue_date`, `return_date`, `fine`, `student_id`) VALUES
(2, '2024-04-04', '2024-04-24', 0, 1),
(3, '2024-02-15', '2024-04-04', 20, 20),
(4, '2024-04-02', '2024-05-03', 0, 2),
(6, '2024-03-03', '2024-04-03', 20, 21),
(8, '2024-03-03', '2024-04-03', 0, 23),
(8, '2024-09-05', '2024-09-25', 0, 0),
(2, '2024-09-05', '2024-09-06', 20, 0),
(6, '2024-09-12', '2024-09-04', 0, 21),
(2, '2024-07-04', '2024-09-11', 50, 1),
(8, '2024-08-07', '2024-09-07', 0, 23),
(6, '2024-09-05', '2024-10-05', 20, 6);

-- --------------------------------------------------------

--
-- Table structure for table `regdb`
--

CREATE TABLE `regdb` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regdb`
--

INSERT INTO `regdb` (`id`, `name`, `email`, `pass`, `number`) VALUES
(1, 'mishi', 'mishi123@gmail.com', 'qwerrR', '1234567'),
(2, 'hani', 'hani@gmail.com', '2345', '09876'),
(20, 'sadaf', 'sadaf@gmail.com', '5666674', '0987654'),
(21, 'pari', 'pari@gmail.com', '444', '12212'),
(23, 'kashif', 'kashif@gmail.com', '123kashif', '2345987654'),
(24, 'zoya', 'zoya1234@gmail.com', 'zoya1', '123454321'),
(25, 'sonali', 'sonali@gmail.com', 'sona123', '11223344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorydb`
--
ALTER TABLE `categorydb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `regdb`
--
ALTER TABLE `regdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbook`
--
ALTER TABLE `addbook`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `adminreg`
--
ALTER TABLE `adminreg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categorydb`
--
ALTER TABLE `categorydb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `s_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regdb`
--
ALTER TABLE `regdb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

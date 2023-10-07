-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 07:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gngg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `uname`, `emailid`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cu_id` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cu_id`, `fname`, `lname`, `emailid`, `message`) VALUES
(9, 'Priya', 'Patel', 'priya@gmail.com', ' hellooo.. what is grab n go mainly do'),
(10, 'Kiya', 'Patel', 'kiya@gmail.com', ' Give some benefits of rider');

-- --------------------------------------------------------

--
-- Table structure for table `pooler`
--

CREATE TABLE `pooler` (
  `p_id` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pooler`
--

INSERT INTO `pooler` (`p_id`, `fname`, `lname`, `emailid`, `phoneno`, `pwd`, `dob`, `gender`, `photo`) VALUES
(7, 'Jiya', 'Mehta', 'jiya@gmail.com', 7898765434, 'Jiya@1234', '2000-12-05', 'FEMALE', '1685723977-1620060735-p1.jpg'),
(9, 'Siyan', 'Patel', 'siyan@gmail.com', 9846454636, 'Siyan@1234', '2000-05-10', 'MALE', '1685725859-1620063506-p2.jpg'),
(10, 'Diya', 'Patel', 'diya12@gmail.com', 8974637829, 'Diya@1234', '2000-05-03', 'MALE', '1685726391-1620060735-p1.jpg'),
(11, 'Miya', 'Patel', 'miya89@gmail.com', 8943104564, 'Miya@1234', '1999-09-09', 'FEMALE', '1685728127-1620123850-s2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rideadd`
--

CREATE TABLE `rideadd` (
  `ra_id` int(4) NOT NULL,
  `r_id` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `from_` varchar(40) NOT NULL,
  `to_` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rideadd`
--

INSERT INTO `rideadd` (`ra_id`, `r_id`, `fname`, `lname`, `from_`, `to_`, `date`, `time`, `phoneno`, `emailid`, `carname`, `price`) VALUES
(10, 10, 'Niyan', 'Patel', 'Kalol', 'Sola', '2023-06-03', '02:30:00', 9867859432, 'niyan123@gmail.com', 'Alto', 15),
(11, 11, 'Janak', 'Vyas', 'Science City', 'Bopal', '2023-06-03', '03:30:00', 9875894331, 'janak@gmail.com', 'Verna', 25),
(13, 13, 'Hiya', 'Patel', 'Ranip', 'Gota', '2023-06-03', '03:30:00', 9878645342, 'hiya12@gmail.com', 'i20', 15);

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `r_id` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`r_id`, `fname`, `lname`, `emailid`, `phoneno`, `pwd`, `dob`, `gender`, `photo`) VALUES
(10, 'Niyan', 'Patel', 'niyan123@gmail.com', 9867859432, 'Niyan@1234', '1998-08-31', 'MALE', '1685723818-1620064136-p7.jpg'),
(11, 'Janak', 'Vyas', 'janak@gmail.com', 9875894331, 'Janak@1234', '2000-11-15', 'MALE', '1685725157-1620063903-p5.jpg'),
(13, 'Hiya', 'Patel', 'hiya12@gmail.com', 9878645342, 'Hiya@1234', '2000-08-17', 'FEMALE', '1685726307-1620064509-p10.jpg'),
(14, 'Kiyan', 'Patel', 'kiyan@gmail.com', 9876543456, 'Kiyan@1234', '2000-12-08', 'MALE', '1685726954-1620124060-s3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `r_feedback`
--

CREATE TABLE `r_feedback` (
  `f_id` int(4) NOT NULL,
  `r_id` int(4) NOT NULL,
  `p_id` int(4) NOT NULL,
  `feedback_date` date NOT NULL,
  `rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `r_feedback`
--

INSERT INTO `r_feedback` (`f_id`, `r_id`, `p_id`, `feedback_date`, `rating`) VALUES
(6, 13, 10, '2023-06-02', 3),
(7, 13, 10, '2023-06-02', 4),
(8, 14, 10, '2023-06-02', 4),
(10, 14, 7, '2023-06-02', 4);

-- --------------------------------------------------------

--
-- Table structure for table `r_req`
--

CREATE TABLE `r_req` (
  `rr_id` int(4) NOT NULL,
  `r_id` int(4) NOT NULL,
  `p_id` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `from_` varchar(70) NOT NULL,
  `to_` varchar(70) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(25) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `phoneno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `r_req`
--

INSERT INTO `r_req` (`rr_id`, `r_id`, `p_id`, `fname`, `lname`, `from_`, `to_`, `date`, `time`, `status`, `emailid`, `phoneno`) VALUES
(12, 13, 10, 'Diya', 'Patel', 'Ranip', 'Gota', '2023-05-03', '03:30:00', 'Accept', 'diya12@gmail.com', 8974637829),
(13, 14, 7, 'Jiya', 'Mehta', 'Kalupur', 'Gota', '2023-06-15', '02:00:00', 'Accept', 'jiya@gmail.com', 7898765434),
(14, 14, 10, 'Diya', 'Patel', 'Bopal', 'Gota', '2023-06-03', '03:30:00', 'Accept', 'diya12@gmail.com', 8974637829);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `pooler`
--
ALTER TABLE `pooler`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `rideadd`
--
ALTER TABLE `rideadd`
  ADD PRIMARY KEY (`ra_id`),
  ADD KEY `rideadd_ibfk_1` (`r_id`);

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `r_feedback`
--
ALTER TABLE `r_feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `r_feedback_ibfk_1` (`p_id`),
  ADD KEY `r_feedback_ibfk_2` (`r_id`);

--
-- Indexes for table `r_req`
--
ALTER TABLE `r_req`
  ADD PRIMARY KEY (`rr_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `r_id` (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pooler`
--
ALTER TABLE `pooler`
  MODIFY `p_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rideadd`
--
ALTER TABLE `rideadd`
  MODIFY `ra_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rider`
--
ALTER TABLE `rider`
  MODIFY `r_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `r_feedback`
--
ALTER TABLE `r_feedback`
  MODIFY `f_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `r_req`
--
ALTER TABLE `r_req`
  MODIFY `rr_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rideadd`
--
ALTER TABLE `rideadd`
  ADD CONSTRAINT `rideadd_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `rider` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `r_feedback`
--
ALTER TABLE `r_feedback`
  ADD CONSTRAINT `r_feedback_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `pooler` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_feedback_ibfk_2` FOREIGN KEY (`r_id`) REFERENCES `rider` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `r_req`
--
ALTER TABLE `r_req`
  ADD CONSTRAINT `p_id` FOREIGN KEY (`p_id`) REFERENCES `pooler` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_id` FOREIGN KEY (`r_id`) REFERENCES `rider` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

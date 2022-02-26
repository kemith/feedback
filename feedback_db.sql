-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 26, 2022 at 10:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `given_to` int(11) NOT NULL,
  `q1` varchar(50) NOT NULL,
  `q2` varchar(50) NOT NULL,
  `q3` varchar(50) NOT NULL,
  `q4` varchar(50) NOT NULL,
  `q5` varchar(50) NOT NULL,
  `q6` varchar(50) NOT NULL,
  `q7` varchar(50) NOT NULL,
  `q8` varchar(50) NOT NULL,
  `q9` varchar(50) NOT NULL,
  `q10` varchar(50) NOT NULL,
  `q11` varchar(50) NOT NULL,
  `q12` varchar(50) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `given_to`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `remarks`, `status`) VALUES
(2, 0, '5', '4', '3', '3', '3', '4', '4', '4', '3', '3', '4', '4', 'Sincere and approachable person', 0),
(3, 0, '3', '2', '3', '4', '4', '5', '4', '3', '2', '1', '2', '3', 'good', 0),
(4, 8, '5', '5', '4', '3', '4', '3', '3', '4', '4', '4', '5', '5', 'Sincere and approachable person', 1),
(5, 4, '3', '2', '3', '3', '4', '3', '2', '2', '2', '3', '1', '2', 'work hard', 1),
(6, 8, '4', '3', '3', '1', '3', '1', '1', '1', '2', '3', '4', '5', 'done', 1),
(7, 8, '1', '2', '3', '4', '5', '4', '3', '2', '1', '2', '3', '4', 'good', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `emp_id`, `username`, `email_id`, `password`, `created_date`, `role`) VALUES
(1, 'Ramesh', 'Pradhan', 201201096, '201201096', 'rapradhan@gelephuthrom.bt', '668d27071775f39b11073face8313ea7', '2021-11-24 13:47:03', 'Engineer'),
(2, 'Chief', 'Chief', 123, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2021-11-24 14:06:25', 'admin'),
(3, 'Ramesh', 'Pradhan', 201201096, 'Ramesh P', 'rapradhan@gelephuthrom.bt', 'a89f3ab4ea1b42d4fd00c82fe79b2b84', '2021-12-06 19:10:13', 'Engineer'),
(4, 'kemith', 'Lepcha', 2019, 'kemith', 'kemith@gmail.com', '7dcb34527f7bc64419a38a1cdd7754c7', '2022-02-11 01:49:56', 'Engineer'),
(5, 'test', 'test', 20001, 'test', 'test@g.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-02-22 15:27:54', 'Engineer'),
(8, 'karma', 'yenten', 2021, 'karma', 'karma@bt.bt', '320feace9cefcab73c6b9de1f4f13512', '2022-02-25 06:55:44', 'Engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

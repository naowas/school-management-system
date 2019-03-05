-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 10:30 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `fatname` varchar(50) NOT NULL,
  `motname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `class` int(11) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `roll_no`, `f_name`, `l_name`, `fatname`, `motname`, `gender`, `dob`, `class`, `contact`, `email`, `address`) VALUES
(8, 88, 'Hamim', 'Morshed Eimon', 'Abid', 'Hasna', 'Male', '1888-11-21', 1, '0188888888888', 'naowas.eimon@gmail.com', 'Dhaka'),
(9, 5, 'Anwar', 'Hossain', 'Hamid', 'Umaa', 'Male', '1999-11-02', 3, '0172254848', 'anwar@mail.com', 'Mirpur'),
(10, 20, 'fdfd', 'Kabir', 'dsfsdf', 'dsfcvzc', 'Female', '2018-09-24', 3, '01723152250', 'anika@mail.com', 'dszc'),
(11, 11, 'Naowas', 'Morshed', 'Monzur Morshed', 'Shanaz Begum', 'Male', '1996-09-11', 10, '01521300848', 'naowas@mail.com', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `stu_score_tbl`
--

CREATE TABLE `stu_score_tbl` (
  `ss_id` int(10) UNSIGNED NOT NULL,
  `stu_id` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  `miderm` float NOT NULL,
  `final` float NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_score_tbl`
--

INSERT INTO `stu_score_tbl` (`ss_id`, `stu_id`, `class`, `teacher`, `sub_id`, `miderm`, `final`, `note`) VALUES
(14, 'fdfd Kabir', 3, 'Abdur Rahman', 'CSE', 434, 432, 'excellent '),
(15, 'Anwar Hossain', 3, 'Abdur Rahman', 'Social Science', 30, 50, 'Good'),
(16, 'fdfd Kabir', 1, 'Abdul Hamid', 'CSE', 60, 44, 'Worst'),
(17, 'Anwar Hossain', 3, 'Eimon Hossain', 'CSE', 55, 70, 'best');

-- --------------------------------------------------------

--
-- Table structure for table `sub_tbl`
--

CREATE TABLE `sub_tbl` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `class` int(11) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_tbl`
--

INSERT INTO `sub_tbl` (`sub_id`, `class`, `teacher_id`, `sub_name`, `note`) VALUES
(6, 5, 'Eimon Hossain', 'bangla', 'ok'),
(7, 4, 'Abdul Hamid', 'CSE', 'Done'),
(8, 6, 'amkk ', 'Islam Studies', 'Edited');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `gender` char(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `salary` float NOT NULL,
  `married` char(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`teacher_id`, `f_name`, `l_name`, `gender`, `dob`, `address`, `degree`, `salary`, `married`, `phone`, `email`) VALUES
(9, 'Eimon', 'Hossain', 'Male', '1991-01-05', 'Kolabanag, Dhaka', 'Bachelor', 190080, 'Yes', '01723152250', 'nazmul@mail.com'),
(15, 'Naowas', '', 'Male', '2018-06-12', 'C/O Monzur Morshed  Holding no: 553 , Ward no: 14 Terokhadia, Rajshahi, Bangladesh', 'Bachelor', 88888900, 'Yes', '1723152250', 'naowas.eimon@gmail.com'),
(16, 'Naowas', '', 'Male', '1996-10-11', 'dhaka', 'Bachelor', 123656, 'Yes', '01723152250', 'naowas.morshed.eimon@gmail.com'),
(17, 'Abdur', 'Rahman', 'Male', '1992-11-01', 'Rajshahi', 'Master', 45000, 'Yes', '01701033045', 'abdur@mail.com'),
(18, 'amkk', '', 'Male', '2018-07-12', 'Rajshahi', 'Bachelor', 90000, 'Yes', '017888777999', 'anika@mail.com'),
(19, 'Abdul', 'Hamid', 'Male', '1988-09-01', 'Dhaka 1512', 'P.H.D', 80000, 'Yes', '01722507978', 'hamid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `name`, `email`, `password`) VALUES
(2, 'Naowas Morshed Eimon', 'naowas.morshed.eimon@gmail.com', '$2y$10$P6j22hlFs9.BejhlvYBUUugKlT9qNBygimy8/S5C8lxGTaT3Z1rxW'),
(3, 'Naowas Morshed Eimon', 'naowas.morshed.eimon@gmail.com', '$2y$10$VYBZAIpJITkm/1e.udFXIuTyMsaQ2FK.tobrhRR4lywmTijSL7FGm'),
(5, 'test', 'test@mail.com', '$2y$10$KbcZyFtI34LhPhCFhzz.9eXLWpdGoGiZkY0ja0Cnngq5HsG52Yks2'),
(7, 'Hasibul', 'hasibul@mail.com', '$2y$10$qYMsJJnU.IHJZRKowO8AQuqbMu/AzhEsinXm7zHicE6reCzmEUZUm'),
(8, 'badhon', 'uap@gmail.com', '$2y$10$ETxYh81Q1OWxhcsm2a30BezLCQOzwSEAxu0BKuU5j0rhGW2bNlxFe'),
(9, 'nme', 'nme@mail.com', '$2y$10$/VzlNAR/ItaPH3GsUwMA6u7C4hHVDxxKO16JcQ1L4v/r3apFGCRLm'),
(10, 'badhon', 'uap@gmail.com', '$2y$10$4lR5Y0fWXi3l5h9JAp0YqeQZA1Wq.uNKkt/7Nywvr4Dim.k8nszuC'),
(11, 'Md.Naowas Morshed Eimon', 'admin@mail.com', '$2y$10$QT5UMQXjvCywVfHfmmfqXOMD61mlF5rB6bZeiKequkgU1kQPk77Pa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `stu_score_tbl`
--
ALTER TABLE `stu_score_tbl`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `sub_tbl`
--
ALTER TABLE `sub_tbl`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stu_score_tbl`
--
ALTER TABLE `stu_score_tbl`
  MODIFY `ss_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sub_tbl`
--
ALTER TABLE `sub_tbl`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2020 at 08:53 AM
-- Server version: 5.5.65-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kazif_assignment_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Academic_staffs`
--

CREATE TABLE IF NOT EXISTS `Academic_staffs` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(32) NOT NULL,
  `qualification` varchar(128) NOT NULL,
  `preferred_days` varchar(128) NOT NULL,
  `consultation_hours` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Academic_staffs`
--

INSERT INTO `Academic_staffs` (`staff_id`, `staff_name`, `qualification`, `preferred_days`, `consultation_hours`) VALUES
(1, 'horton', 'PhD in Computer Technology', 'Mon,Tues, Fri', 'Mon(11:00am-12:30pm)Tues(1:30pm-2:30pm)'),
(2, 'ahmed', 'Bachelor of Information Tecnology', 'Mon,Tues,Thu,Fri', 'Tues(2:30pm-3:30pm)'),
(16, 'kundra', 'PhD in compute science', 'Mon,Tues, Fri', 'Fri(10:30am-11:30am) Tues(1:30pm-2:30pm)'),
(17, 'rahman', 'PhD in web development', 'Mon,Tues', 'Mon(11:30am-12:30pm) Tues(1:30pm-2:30pm)');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `campus_id` int(11) NOT NULL,
  `campus_name` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`campus_id`, `campus_name`) VALUES
(1, 'Neverland'),
(2, 'Pandora'),
(3, 'Revendell');

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE IF NOT EXISTS `course_list` (
  `id` int(11) NOT NULL,
  `unit_code` varchar(128) NOT NULL,
  `unit_name` varchar(128) NOT NULL,
  `availablity` varchar(128) NOT NULL,
  `campus` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`id`, `unit_code`, `unit_name`, `availablity`, `campus`) VALUES
(1, 'SIT101', 'Introduction to web development', 'Semester 2\r\n', 'Neverland'),
(2, 'SIT102', 'Introduction to Programming', 'Semester 2', 'Neverland'),
(3, 'SIT103', 'Introduction to Web Development', 'Semester 1', 'Pandora & Rivendell'),
(4, 'SIT104', 'Data Network and Security', 'Spring', 'Neverland'),
(5, 'SIT105', 'Introduction to Cyber Security', 'Semester 1', 'Neverland');

-- --------------------------------------------------------

--
-- Table structure for table `Enrollment`
--

CREATE TABLE IF NOT EXISTS `Enrollment` (
  `enroll_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `unit_code` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `campus_id` int(11) NOT NULL,
  `tutorial_id` int(11) NOT NULL,
  `enroll_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Enrollment`
--

INSERT INTO `Enrollment` (`enroll_id`, `student_id`, `unit_code`, `semester_id`, `campus_id`, `tutorial_id`, `enroll_date`) VALUES
(18, 513569, 101, 1, 1, 1, '2020-05-31 10:34:50'),
(21, 505152, 103, 1, 1, 1, '2020-05-31 12:11:27'),
(24, 513570, 101, 1, 2, 4, '2020-05-31 20:32:18'),
(25, 513569, 102, 1, 1, 2, '2020-05-31 21:51:29'),
(26, 513572, 101, 2, 3, 1, '2020-05-31 21:52:11'),
(27, 513572, 105, 2, 3, 4, '2020-05-31 21:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`) VALUES
(1, 'semester 1'),
(2, 'semester 2'),
(3, 'spring'),
(4, 'winter school');

-- --------------------------------------------------------

--
-- Table structure for table `Staffs`
--

CREATE TABLE IF NOT EXISTS `Staffs` (
  `staff_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `qualification` varchar(32) NOT NULL,
  `expertise` varchar(32) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=713770 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Staffs`
--

INSERT INTO `Staffs` (`staff_id`, `username`, `email`, `password`, `address`, `qualification`, `expertise`, `phone`, `access`) VALUES
(1, 'soonja', 'soonja@gmail.com', 'kawL5VX.RlAAs', '5/520 Huon Road', 'phd in compute science', 'web development', '0456863179', 1),
(2, 'horton', 'Horton@gmail.com', 'kauskhkBbPC12', '2/10 Huon Road', 'PhD in compute science', 'C programming', '0456863171', 2),
(3, 'ahmed', 'ahmed@gmail.com', 'kaRk0ybmdY9eU', '5/520 Huon Road', 'PhD in compute science', 'Web Development', '0456863789', 0),
(4, 'julian', 'julian@udw.edu.au', 'kaDR2PqadpuGQ', '1/220 West Hobart Road', 'PhD in compute science', 'C Programming', '0456863712', 1),
(5, 'kundra', 'kundra@udw.edu.au', 'katbn8/dNzVXM', 'unit 27/520 south Road', 'Bachelor Of Information Tecnolog', 'Cyber Security', '0456867539', 2),
(6, 'rahman', 'rahman@gmail.com', 'kavRHvPi9yVUk', '5/520 Huon Road', 'Bachelor in compute science', 'Data Science', '0456863741', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE IF NOT EXISTS `Students` (
  `student_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dob` varchar(32) NOT NULL,
  `address` varchar(128) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=513580 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`student_id`, `username`, `email`, `password`, `dob`, `address`, `phone`) VALUES
(505152, 'kshipon', 'shiponmia125@gmail.com', 'kawc6H/lArDOU', '03/03/1997', '5/520 Huon Road', '0480100853'),
(513569, 'kazif', 'kazif@gmail.com', 'ka6zz5u8DY76k', '03/13/1998', '5/520 Huon Road', '0411111111'),
(513570, 'david', 'david@gmail.com', 'kanBnrAvgWEoU', '03/13/1998', '5/520 Huon Road', '0412457870'),
(513571, 'akash', 'akashwj44@gmail.com', 'kaKtdy4pyLfWE', '03/13/1991', '2/520 Huon Road', '0412457123'),
(513572, 'prince', 'prince@gmail.com', 'kazYM6JaAjvOg', '02/13/1995', '1/20 South Road', '0412457741');

-- --------------------------------------------------------

--
-- Table structure for table `Tutorial`
--

CREATE TABLE IF NOT EXISTS `Tutorial` (
  `tutorial_id` int(11) NOT NULL,
  `tutorial_days` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tutorial`
--

INSERT INTO `Tutorial` (`tutorial_id`, `tutorial_days`) VALUES
(1, 'MONDAY (09:30am - 11:30am)'),
(2, 'TUESDAY (11:30am - 01:30pm)'),
(3, 'WEDNESDAY (10:30am - 12:30pm)'),
(4, 'THURSDAY (12::30pm - 02:30pm)'),
(5, 'FRIDAY (02:30pm - 04:30pm)');

-- --------------------------------------------------------

--
-- Table structure for table `uc_allocating_staff`
--

CREATE TABLE IF NOT EXISTS `uc_allocating_staff` (
  `unit_code` int(11) NOT NULL,
  `lecturer` varchar(128) NOT NULL,
  `tutor` varchar(128) NOT NULL,
  `tutorial_location` varchar(128) NOT NULL,
  `tutorial_time` varchar(128) NOT NULL,
  `consultation_hours` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uc_allocating_staff`
--

INSERT INTO `uc_allocating_staff` (`unit_code`, `lecturer`, `tutor`, `tutorial_location`, `tutorial_time`, `consultation_hours`) VALUES
(101, 'Dr.horton', 'ahmed', 'Room101', '9:00am-11:00am', 'Tues(2:30pm-3:30pm)'),
(102, 'Dr.Tim Gale', 'kundra', 'Room102', 'Fri(01:30pm-3:00pm) ', 'Fri(10:30am-11:30am) Tues(1:30pm-2:30pm)'),
(103, 'Dr.Hui Jiao', 'rahman', 'Room103', 'Fri(09:30am-11:30am) ', 'Mon(11:30am-12:30pm) Tues(1:30pm-2:30pm)'),
(104, 'Dr. Zayed Rahman', 'shah', 'Room104', 'Tues(2:30pm-3:30pm)', 'Fri(10:30am-11:30am) Tues(1:30pm-2:30pm)'),
(105, 'Chris Do', 'sam', 'Room102', 'Mon(09:30am-11:30am)', 'Wed(10:30am-11:30am) Tues(1:30pm-2:30pm)'),
(106, 'Jhon Doe', 'Dom', 'Room105', 'Mon(09:30am-11:30am)', 'Wed(1:30pm-2:30pm)');

-- --------------------------------------------------------

--
-- Table structure for table `Unit_list`
--

CREATE TABLE IF NOT EXISTS `Unit_list` (
  `unit_code` int(11) NOT NULL,
  `unit_name` varchar(128) NOT NULL,
  `availability` varchar(32) NOT NULL,
  `Campus` varchar(32) NOT NULL,
  `unit_coordinator` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Unit_list`
--

INSERT INTO `Unit_list` (`unit_code`, `unit_name`, `availability`, `Campus`, `unit_coordinator`) VALUES
(101, 'Introduction to Web Development', 'Semester 1 & 2, Spring, Winter ', 'Pandora & Neverland & Rivendell', 'Dr. horton '),
(102, 'Introduction to Game development', 'Semester 1 & 2, Spring, Winter', 'Pandora & Neverland & Rivendell', 'Dr. Zayed Rahman'),
(103, 'Introduction to Cyber Security', 'Semester 1 & 2, Spring, Winter ', 'Pandora & Neverland & Rivendell', 'Dr. Anwarul'),
(104, 'Data Network and Security', 'Semester 1 & 2, Spring, Winter', 'Pandora & Neverland & Rivendell', 'Dr. Jio Doe'),
(105, 'Data Structure And Algorithms', 'Semester 1 & 2, Spring, Winter', 'Pandora & Neverland & Rivendell', 'Dr. Robert Wellington');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Academic_staffs`
--
ALTER TABLE `Academic_staffs`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`campus_id`);

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Enrollment`
--
ALTER TABLE `Enrollment`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_id_2` (`student_id`),
  ADD KEY `unit_code` (`unit_code`),
  ADD KEY `semester_id` (`semester_id`,`campus_id`),
  ADD KEY `semester_id_2` (`semester_id`,`campus_id`),
  ADD KEY `semester_id_3` (`semester_id`,`campus_id`),
  ADD KEY `student_id_3` (`student_id`,`unit_code`),
  ADD KEY `semester_id_4` (`semester_id`,`campus_id`),
  ADD KEY `campus_id` (`campus_id`),
  ADD KEY `tutorial_id` (`tutorial_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `Staffs`
--
ALTER TABLE `Staffs`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `Tutorial`
--
ALTER TABLE `Tutorial`
  ADD PRIMARY KEY (`tutorial_id`);

--
-- Indexes for table `uc_allocating_staff`
--
ALTER TABLE `uc_allocating_staff`
  ADD PRIMARY KEY (`unit_code`),
  ADD UNIQUE KEY `unit_code` (`unit_code`);

--
-- Indexes for table `Unit_list`
--
ALTER TABLE `Unit_list`
  ADD PRIMARY KEY (`unit_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Academic_staffs`
--
ALTER TABLE `Academic_staffs`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `campus_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Enrollment`
--
ALTER TABLE `Enrollment`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Staffs`
--
ALTER TABLE `Staffs`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=713770;
--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=513580;
--
-- AUTO_INCREMENT for table `Tutorial`
--
ALTER TABLE `Tutorial`
  MODIFY `tutorial_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `uc_allocating_staff`
--
ALTER TABLE `uc_allocating_staff`
  MODIFY `unit_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `Unit_list`
--
ALTER TABLE `Unit_list`
  MODIFY `unit_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Enrollment`
--
ALTER TABLE `Enrollment`
  ADD CONSTRAINT `Enrollment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `Students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Enrollment_ibfk_2` FOREIGN KEY (`unit_code`) REFERENCES `Unit_list` (`unit_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Enrollment_ibfk_3` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Enrollment_ibfk_4` FOREIGN KEY (`campus_id`) REFERENCES `campus` (`campus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Enrollment_ibfk_5` FOREIGN KEY (`tutorial_id`) REFERENCES `Tutorial` (`tutorial_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

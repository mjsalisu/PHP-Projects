-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 07, 2023 at 02:47 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_time_table`
--

CREATE TABLE `class_time_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(40) NOT NULL,
  `time_start` time NOT NULL,
  `unit_code` varchar(40) NOT NULL,
  `venue` varchar(40) NOT NULL,
  `school` int(10) UNSIGNED NOT NULL,
  `department` int(10) UNSIGNED NOT NULL,
  `year_of_study` varchar(40) NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_time_table`
--

INSERT INTO `class_time_table` (`id`, `day`, `time_start`, `unit_code`, `venue`, `school`, `department`, `year_of_study`, `time_end`) VALUES
(1, 'Monday', '08:00:00', 'COM 205', 'L8', 1, 1, '2', '10:00:00'),
(2, 'Monday', '11:00:00', 'MAT 205', 'L10', 1, 1, '2', '13:00:00'),
(3, 'Tuesday', '08:00:00', 'COM 310', 'NS5', 2, 2, '3', '10:00:00'),
(4, 'Tuesday', '16:00:00', 'EDF 210', 'L13', 1, 1, '2', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `school` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `school`) VALUES
(1, 'Technology Education', 1),
(2, 'Computer Science', 2);

-- --------------------------------------------------------

--
-- Table structure for table `exam_time_table`
--

CREATE TABLE `exam_time_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `unit_code` varchar(40) NOT NULL,
  `venue` varchar(40) NOT NULL,
  `school` int(10) UNSIGNED NOT NULL,
  `department` int(10) UNSIGNED NOT NULL,
  `year_of_study` varchar(40) NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam_time_table`
--

INSERT INTO `exam_time_table` (`id`, `date`, `time_start`, `unit_code`, `venue`, `school`, `department`, `year_of_study`, `time_end`) VALUES
(1, '2023-11-10', '08:00:00', 'SWE2205', 'Hall A', 2, 2, '2', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'schools', 1, 3, 3, 3),
(2, 2, 'departments', 1, 3, 3, 3),
(3, 2, 'class_time_table', 1, 3, 3, 3),
(4, 2, 'exam_time_table', 1, 3, 3, 3),
(5, 2, 'personal_time_table', 1, 3, 3, 3),
(6, 2, 'student_details', 1, 3, 3, 3),
(7, 2, 'student_details', 1, 3, 3, 3),
(8, 3, 'schools', 0, 0, 0, 0),
(9, 3, 'departments', 0, 0, 0, 0),
(10, 3, 'class_time_table', 0, 3, 0, 0),
(11, 3, 'exam_time_table', 0, 3, 0, 0),
(12, 3, 'personal_time_table', 1, 1, 1, 1),
(13, 3, 'student_details', 1, 1, 1, 1),
(20, 2, 'notices', 1, 3, 3, 3),
(21, 4, 'schools', 0, 0, 0, 0),
(22, 4, 'departments', 0, 0, 0, 0),
(23, 4, 'class_time_table', 1, 1, 1, 1),
(24, 4, 'exam_time_table', 1, 1, 1, 1),
(25, 4, 'personal_time_table', 0, 0, 0, 0),
(26, 4, 'student_details', 0, 0, 0, 0),
(27, 4, 'notices', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2018-12-04', 0, 0),
(2, 'Admins', 'Admin group created automatically on 2018-12-04', 0, 1),
(3, 'students', 'all students in this group', 1, 0),
(4, 'Class reps', 'all class reps', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT '0',
  `allowEdit` tinyint(4) NOT NULL DEFAULT '0',
  `allowDelete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'schools', '1', 'admin', 1543914528, 1543914528, 2),
(2, 'departments', '1', 'admin', 1543914679, 1543914679, 2),
(3, 'schools', '2', 'admin', 1543914710, 1543914710, 2),
(4, 'departments', '2', 'admin', 1543914732, 1543914732, 2),
(5, 'class_time_table', '1', 'admin', 1543914908, 1543915406, 2),
(6, 'class_time_table', '2', 'admin', 1543915046, 1543915421, 2),
(7, 'class_time_table', '3', 'admin', 1543915081, 1543915435, 2),
(8, 'exam_time_table', '1', 'admin', 1543915517, 1696689382, 2),
(10, 'student_details', '1', 'ronnie', 1543916441, 1696680135, 3),
(12, 'class_time_table', '4', 'koech', 1543929297, 1543929297, 4),
(14, 'personal_time_table', '1', 'ronnie', 1543931609, 1543931609, 3),
(15, 'student_details', '2', 'kenny', 1543943132, 1543943132, 3),
(16, 'student_details', '3', 'omollo', 1543989167, 1543989167, 3),
(17, 'student_details', '4', 'hello', 1544000833, 1544000833, 3),
(18, 'student_details', '5', 'admin', 1696688774, 1696688774, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text,
  `custom2` text,
  `custom3` text,
  `custom4` text,
  `comments` text,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@email.com', '2018-12-04', 2, 0, 1, 'ICT', '', '', '', 'Admin member created automatically on 2018-12-04\nRecord updated automatically on 2018-12-04\nRecord updated automatically on 2023-10-07\nmember updated his profile on 10/07/2023, 10:37 am from IP address ::1', NULL, NULL),
('classrep', '827ccb0eea8a706c4c34a16891f84e7b', 'charleskoech@gmail.com', '2018-12-04', 4, 0, 1, 'Technology education', '', '', '', 'Class rep TED 2ND years 2018', NULL, NULL),
('guest', NULL, NULL, '2023-10-07', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2023-10-07', NULL, NULL),
('student', '827ccb0eea8a706c4c34a16891f84e7b', 'ronniengoda@gmail.com', '2018-12-04', 3, 0, 1, 'Technology education', '', '', '', 'member signed up through the registration form.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice` text NOT NULL,
  `school` int(10) UNSIGNED NOT NULL,
  `department` int(10) UNSIGNED NOT NULL,
  `year_of_study` varchar(40) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal_time_table`
--

CREATE TABLE `personal_time_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(40) NOT NULL,
  `time_start` time NOT NULL,
  `activity` varchar(40) NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_time_table`
--

INSERT INTO `personal_time_table` (`id`, `day`, `time_start`, `activity`, `time_end`) VALUES
(1, 'Tuesday', '18:00:00', 'read some blog magazine', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`) VALUES
(1, 'Education'),
(2, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `school` int(10) UNSIGNED NOT NULL,
  `department` int(10) UNSIGNED NOT NULL,
  `year_of_study` varchar(40) NOT NULL,
  `reg_no` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `full_name`, `school`, `department`, `year_of_study`, `reg_no`) VALUES
(5, 'Jamilu Salisu', 1, 1, '3', 'CST/19/...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_time_table`
--
ALTER TABLE `class_time_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school` (`school`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school` (`school`);

--
-- Indexes for table `exam_time_table`
--
ALTER TABLE `exam_time_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school` (`school`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school` (`school`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `personal_time_table`
--
ALTER TABLE `personal_time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no_unique` (`reg_no`),
  ADD KEY `school` (`school`),
  ADD KEY `department` (`department`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_time_table`
--
ALTER TABLE `class_time_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_time_table`
--
ALTER TABLE `exam_time_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_time_table`
--
ALTER TABLE `personal_time_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

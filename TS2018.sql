-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2017 at 03:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TS2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACADEMIC_RECORD`
--

CREATE TABLE `ACADEMIC_RECORD` (
  `sID` int(11) DEFAULT NULL,
  `courseCode` varchar(15) DEFAULT NULL,
  `grade` varchar(2) DEFAULT NULL,
  `term` varchar(15) DEFAULT NULL,
  `year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseCode` varchar(20) NOT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  `courseTeacher` varchar(100) DEFAULT NULL,
  `courseVenue` varchar(100) DEFAULT NULL,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseCode`, `courseName`, `courseTeacher`, `courseVenue`, `grade`) VALUES
('ENG111', 'Phonetics', 'Ms. Whyte', 'Room 12', ''),
('ENG112', 'English Grammar', 'Ms. Kwarteng', 'Room 2', ''),
('HIS111', 'Basic History', 'Mr. Higgins-Clark', 'Room 4', ''),
('MATH111', 'Nursery Mathematics', 'Mr. Frenchie', 'Room 1', ''),
('MATH112', 'Kindergarten Mathematics', 'Ms. Kingsley', 'Room 6', ''),
('PE111', 'Physical Education', 'Mr. Owusu', 'Track Field 1', '');

-- --------------------------------------------------------

--
-- Table structure for table `COURSE_TEACHERS`
--

CREATE TABLE `COURSE_TEACHERS` (
  `courseCode` varchar(20) DEFAULT NULL,
  `staffID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `HEALTH_RECORD`
--

CREATE TABLE `HEALTH_RECORD` (
  `healthID` int(11) NOT NULL,
  `sID` int(11) DEFAULT NULL,
  `bloodType` varchar(5) DEFAULT NULL,
  `Parent_or_Guardian_name` varchar(50) DEFAULT NULL,
  `Parent_or_Guardian_number` int(10) DEFAULT NULL,
  `Hospital` varchar(100) DEFAULT NULL,
  `DoctorName` varchar(80) DEFAULT NULL,
  `DoctorPhone` int(10) DEFAULT NULL,
  `consent` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PARENT_CHILD`
--

CREATE TABLE `PARENT_CHILD` (
  `parentID` int(11) DEFAULT NULL,
  `sID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PARENT_OR_GUARDIAN`
--

CREATE TABLE `PARENT_OR_GUARDIAN` (
  `pId` int(11) NOT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(2) DEFAULT NULL,
  `phoneNum` int(10) DEFAULT NULL,
  `wardID` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STAFF`
--

CREATE TABLE `STAFF` (
  `staffID` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `staffFName` varchar(20) DEFAULT NULL,
  `staffLName` varchar(50) DEFAULT NULL,
  `staffNum` int(10) DEFAULT NULL,
  `staffAddress` varchar(50) DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STATUS`
--

CREATE TABLE `STATUS` (
  `status_id` int(11) NOT NULL,
  `status_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE `STUDENT` (
  `sID` int(11) NOT NULL,
  `sFirstName` varchar(30) DEFAULT NULL,
  `sMiddleInitial` varchar(6) DEFAULT NULL,
  `sLastName` varchar(50) DEFAULT NULL,
  `sGender` varchar(1) DEFAULT NULL,
  `sDateOfBirth` date DEFAULT NULL,
  `sPlaceOfBirth` varchar(150) DEFAULT NULL,
  `sNationality` varchar(80) DEFAULT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`sID`, `sFirstName`, `sMiddleInitial`, `sLastName`, `sGender`, `sDateOfBirth`, `sPlaceOfBirth`, `sNationality`, `class`) VALUES
(0, 'Rita', 'F', 'Polinski', 'F', '2008-12-05', 'Arizona', 'French', '');

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_CLASSES`
--

CREATE TABLE `STUDENT_CLASSES` (
  `sID` int(11) DEFAULT NULL,
  `courseCode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENT_CLASSES`
--

INSERT INTO `STUDENT_CLASSES` (`sID`, `courseCode`) VALUES
(0, 'ENG112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACADEMIC_RECORD`
--
ALTER TABLE `ACADEMIC_RECORD`
  ADD KEY `sID` (`sID`),
  ADD KEY `classCode` (`courseCode`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseCode`);

--
-- Indexes for table `COURSE_TEACHERS`
--
ALTER TABLE `COURSE_TEACHERS`
  ADD KEY `classCode` (`courseCode`),
  ADD KEY `staffID` (`staffID`);

--
-- Indexes for table `HEALTH_RECORD`
--
ALTER TABLE `HEALTH_RECORD`
  ADD PRIMARY KEY (`healthID`),
  ADD KEY `sID` (`sID`);

--
-- Indexes for table `PARENT_CHILD`
--
ALTER TABLE `PARENT_CHILD`
  ADD KEY `parentID` (`parentID`),
  ADD KEY `sID` (`sID`);

--
-- Indexes for table `PARENT_OR_GUARDIAN`
--
ALTER TABLE `PARENT_OR_GUARDIAN`
  ADD PRIMARY KEY (`pId`),
  ADD KEY `wardID` (`wardID`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `STAFF`
--
ALTER TABLE `STAFF`
  ADD PRIMARY KEY (`staffID`),
  ADD KEY `per_id` (`status_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `STATUS`
--
ALTER TABLE `STATUS`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `STUDENT`
--
ALTER TABLE `STUDENT`
  ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `STUDENT_CLASSES`
--
ALTER TABLE `STUDENT_CLASSES`
  ADD KEY `sID` (`sID`),
  ADD KEY `classCode` (`courseCode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ACADEMIC_RECORD`
--
ALTER TABLE `ACADEMIC_RECORD`
  ADD CONSTRAINT `academic_record_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `STUDENT` (`sID`),
  ADD CONSTRAINT `academic_record_ibfk_2` FOREIGN KEY (`courseCode`) REFERENCES `courses` (`classCode`);

--
-- Constraints for table `COURSE_TEACHERS`
--
ALTER TABLE `COURSE_TEACHERS`
  ADD CONSTRAINT `course_teachers_ibfk_1` FOREIGN KEY (`courseCode`) REFERENCES `courses` (`classCode`),
  ADD CONSTRAINT `course_teachers_ibfk_2` FOREIGN KEY (`staffID`) REFERENCES `STAFF` (`staffID`);

--
-- Constraints for table `HEALTH_RECORD`
--
ALTER TABLE `HEALTH_RECORD`
  ADD CONSTRAINT `health_record_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `STUDENT` (`sID`);

--
-- Constraints for table `PARENT_CHILD`
--
ALTER TABLE `PARENT_CHILD`
  ADD CONSTRAINT `parent_child_ibfk_1` FOREIGN KEY (`parentID`) REFERENCES `PARENT_OR_GUARDIAN` (`pId`),
  ADD CONSTRAINT `parent_child_ibfk_2` FOREIGN KEY (`sID`) REFERENCES `STUDENT` (`sID`);

--
-- Constraints for table `PARENT_OR_GUARDIAN`
--
ALTER TABLE `PARENT_OR_GUARDIAN`
  ADD CONSTRAINT `parent_or_guardian_ibfk_1` FOREIGN KEY (`wardID`) REFERENCES `STUDENT` (`sID`),
  ADD CONSTRAINT `parent_or_guardian_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `STATUS` (`status_id`);

--
-- Constraints for table `STAFF`
--
ALTER TABLE `STAFF`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `STATUS` (`status_id`);

--
-- Constraints for table `STUDENT_CLASSES`
--
ALTER TABLE `STUDENT_CLASSES`
  ADD CONSTRAINT `student_classes_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `STUDENT` (`sID`),
  ADD CONSTRAINT `student_classes_ibfk_2` FOREIGN KEY (`courseCode`) REFERENCES `courses` (`classCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

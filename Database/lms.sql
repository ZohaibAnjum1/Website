-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2023 at 12:41 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int NOT NULL,
  `smr_id` int NOT NULL,
  `code` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `credit_hour` int NOT NULL,
  `semester` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `smr_id`, `code`, `name`, `credit_hour`, `semester`, `Status`) VALUES
(1, 3, 6001, 'Natural Language Process (NLP)', 3, '', '1'),
(2, 3, 6002, 'Digital Image Processing', 3, '', '1'),
(4, 3, 6004, 'Linear Algebra', 3, 'Fall-2023', ''),
(5, 3, 6005, 'Machine Learning', 3, 'Fall-2023', '1'),
(6, 3, 6006, 'Data Structure', 4, 'Fall-2023', '1'),
(7, 3, 6007, 'Deep Learning', 3, 'Fall-2023', '1'),
(8, 3, 6008, 'Design and analysis of Algorithm', 3, 'Fall-2023', '1'),
(9, 3, 6009, 'Dart language ', 4, 'Fall-2023', '0'),
(10, 3, 6010, 'Hardware System ', 4, 'Fall-2023', ''),
(11, 3, 6011, 'Business Analytic', 3, 'Fall-2023', '1'),
(12, 3, 6012, 'International Relations', 3, '', '1'),
(13, 3, 6013, 'Human Behavior', 3, 'Fall-2023', ''),
(14, 3, 6014, 'Business Statistics', 3, 'Fall-2023', '1'),
(15, 3, 6015, 'Technoprenurship and Advancement', 3, 'Fall-2023', '1'),
(16, 3, 6016, 'Embedded and real time system', 4, 'Fall-2023', '1'),
(17, 3, 6017, 'Mobile Application Development', 4, 'Fall-2023', ''),
(18, 3, 6018, 'Compiler Construction', 3, 'Fall-2023', ''),
(19, 3, 6019, 'Pakistan Studies', 2, 'Fall-2023', ''),
(20, 3, 6020, 'Intro to Mathematics', 3, 'Fall-2023', ''),
(21, 3, 6021, 'Islamic Studies', 2, 'Fall-2023', ''),
(22, 3, 6022, 'Computer Vision', 3, 'Fall-2023', ''),
(23, 3, 6023, 'Data Science', 3, 'Fall-2023', '1'),
(24, 3, 6024, 'R Programming', 3, 'Fall-2023', ''),
(25, 3, 6025, 'Multivariate Calculus', 3, 'Fall-2023', ''),
(26, 3, 6026, 'Human Computer Interaction', 3, 'Fall-2023', ''),
(27, 3, 6027, 'Digital Marketing', 3, 'Fall-2023', '0'),
(28, 3, 6028, 'Cost Accounting', 3, 'Fall-2023', '0'),
(29, 3, 6029, 'Principle Accounting', 3, 'Fall-2023', '0'),
(30, 3, 6030, 'Swinging and Stiching', 2, 'Fall-2023', '0'),
(33, 3, 6033, 'Applied Stats', 3, 'Fall-2023', '0'),
(34, 3, 6034, 'Mathemathics', 2, 'Fall-2023', '0'),
(35, 3, 6035, 'Andriod Studio', 3, 'Fall-2023', '0'),
(36, 3, 6036, 'Intro to Laravel', 1, 'Fall-2023', '0'),
(37, 3, 6037, 'Codignator Developer', 3, 'Fall-2023', '1'),
(38, 3, 6038, 'React Development', 3, 'Fall-2023', '0'),
(40, 3, 6039, 'Senior Wordpress Development', 4, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint NOT NULL,
  `age` int NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `username`, `role`, `name`, `phone`, `age`, `department`, `address`, `gender`) VALUES
(1, 'shayan29', 'teacher', 'Shayan Ahmed', 3332313141, 31, 'Environmental Science', 'Scheme no 5', 'male'),
(2, 'uzair34', 'student', 'Uzair', 3123131214, 26, 'Software Engineering', 'Askari 9 Islamabad', 'male'),
(3, 'aqib39', 'teacher', 'Aqib Javaid', 334145121, 21, 'Geophysics', 'Rawalpindi railway scheme no 1', 'male'),
(4, 'ghafran49', 'student', 'Syed Ghafran Haider', 333566112, 21, 'Computer Sciene', 'Dhoke Khaba ', 'male'),
(5, 'zeeshan59', 'student', 'Syed Zeeshan Haider', 3315641313, 22, 'Computer Science', 'Gulberg town', 'male'),
(6, 'usman70', 'teacher', 'Dr Usman Hashmi', 3312451521, 56, 'Computer Science', 'Tarlai Islamabad', 'male'),
(7, 'hameed71', 'teacher', 'Dr Abdul Hameed', 331412516, 51, 'Computer Science', 'Iqra university islamabad campus', 'male'),
(8, 'Usama12', 'student', 'Usama', 334141451, 26, 'Computing and Technology', 'scheme', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `register_course`
--

CREATE TABLE `register_course` (
  `ID` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Code` int DEFAULT NULL,
  `Time of Creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register_course`
--

INSERT INTO `register_course` (`ID`, `Name`, `Code`, `Time of Creation`) VALUES
(1, 'Programming Fundamentals', 8001, '2023-03-01 19:13:54'),
(2, 'Linear Algebra', 8002, '2023-03-01 19:19:53'),
(3, 'Design and Analysis of Algorithm', 8003, '2023-03-02 11:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `register_semester`
--

CREATE TABLE `register_semester` (
  `smr_id` int NOT NULL,
  `SemesterName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Year` int NOT NULL,
  `Time of Creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register_semester`
--

INSERT INTO `register_semester` (`smr_id`, `SemesterName`, `Year`, `Time of Creation`) VALUES
(1, 'Spring', 2023, '2023-03-01 19:52:49'),
(2, 'Summer', 2023, '2023-03-02 11:15:50'),
(3, 'Fall', 2023, '2023-03-02 11:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL,
  `semester_id` int NOT NULL,
  `reg_status` enum('Register','Unregister') NOT NULL DEFAULT 'Unregister'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`id`, `student_id`, `course_id`, `semester_id`, `reg_status`) VALUES
(1, 23, 1, 3, 'Register'),
(2, 23, 2, 3, 'Unregister'),
(3, 23, 6, 3, 'Unregister'),
(4, 23, 16, 3, 'Unregister'),
(5, 23, 7, 3, 'Register'),
(6, 26, 23, 3, 'Register'),
(7, 26, 16, 3, 'Register'),
(8, 26, 15, 3, 'Register'),
(9, 26, 14, 3, 'Register'),
(10, 26, 6, 3, 'Register'),
(12, 23, 5, 3, 'Unregister'),
(13, 23, 12, 3, 'Unregister'),
(14, 23, 23, 3, 'Register'),
(15, 23, 11, 3, 'Unregister'),
(16, 23, 8, 3, 'Register'),
(17, 23, 14, 3, 'Register'),
(18, 23, 15, 3, 'Unregister');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course`
--

CREATE TABLE `teacher_course` (
  `id` int NOT NULL,
  `code` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teacher_course`
--

INSERT INTO `teacher_course` (`id`, `code`, `name`) VALUES
(1, 1000, 'Linear Algebra'),
(2, 1001, 'Probability and Statistics'),
(3, 1002, 'World literature'),
(4, 1003, 'Data Science'),
(5, 1004, 'Robotics Engineering'),
(6, 1005, 'Calculus '),
(7, 1006, 'Programming Fundamentals'),
(8, 1007, 'Digital and logic design'),
(9, 1008, 'Database management system');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'Hashim12', 'hashi@iqraisb.edu.pk', '1234', 'Admin'),
(4, 'Zahid4', 'zahid@iqraisb.edu.pk', '1234', 'teacher'),
(23, 'Adnan12', 'adnan@gmail.com', '1234', 'student'),
(26, 'jabir101', 'jabir101@stepscollege.com', '1234', 'student'),
(27, 'ZafarKhan1', 'zafar1@ikonic.com', '1234', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user_setting`
--

CREATE TABLE `user_setting` (
  `id` int NOT NULL,
  `key_field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `value_field` int NOT NULL,
  `user_id` int NOT NULL,
  `group_field` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Credit_Hour'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_setting`
--

INSERT INTO `user_setting` (`id`, `key_field`, `value_field`, `user_id`, `group_field`) VALUES
(11, 'Allowed', 18, 23, 'Credit_Hour'),
(12, 'NotAllowed', 0, 27, 'Credit_Hour'),
(13, 'Allowed', 17, 26, 'Credit_Hour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `id` (`course_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `register_course`
--
ALTER TABLE `register_course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register_semester`
--
ALTER TABLE `register_semester`
  ADD PRIMARY KEY (`smr_id`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `teacher_course`
--
ALTER TABLE `teacher_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_setting`
--
ALTER TABLE `user_setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `register_course`
--
ALTER TABLE `register_course`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register_semester`
--
ALTER TABLE `register_semester`
  MODIFY `smr_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_record`
--
ALTER TABLE `student_record`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher_course`
--
ALTER TABLE `teacher_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_setting`
--
ALTER TABLE `user_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_record`
--
ALTER TABLE `student_record`
  ADD CONSTRAINT `student_record_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `student_record_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `student_record_ibfk_3` FOREIGN KEY (`semester_id`) REFERENCES `register_semester` (`smr_id`);

--
-- Constraints for table `user_setting`
--
ALTER TABLE `user_setting`
  ADD CONSTRAINT `user_setting_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 08:24 PM
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
-- Database: `learning_plateform`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_level_tbl`
--

CREATE TABLE `course_level_tbl` (
  `course_level_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `course_level_name` varchar(255) NOT NULL,
  `course_level_image` varchar(255) NOT NULL,
  `course_level_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_level_tbl`
--

INSERT INTO `course_level_tbl` (`course_level_id`, `course_id`, `course_level_name`, `course_level_image`, `course_level_status`) VALUES
(1, 2, 'Beginner', 'Local Chruch Secretary_page-0001.jpg', 'active'),
(2, 3, 'Intermediate', '360_F_370426690_Pejt9KxjWTHPklsKwripaxr0iA17zupF.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `course_id` int(100) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `course_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`course_id`, `course_name`, `course_description`, `course_image`, `course_status`) VALUES
(1, 'English', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '360_F_370426690_Pejt9KxjWTHPklsKwripaxr0iA17zupF.jpg', 'active'),
(2, 'Hindi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1643797279303.jpg', 'active'),
(3, 'Malayalam', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1643797279303.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `filling_in_the_blanks_tbl`
--

CREATE TABLE `filling_in_the_blanks_tbl` (
  `fitb_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `course_level_id` int(100) NOT NULL,
  `fitb_title` varchar(255) NOT NULL,
  `fitb_description` varchar(255) NOT NULL,
  `first_sentence` varchar(255) NOT NULL,
  `last_sentence` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `answer_key` varchar(255) NOT NULL,
  `filb_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filling_in_the_blanks_tbl`
--

INSERT INTO `filling_in_the_blanks_tbl` (`fitb_id`, `course_id`, `course_level_id`, `fitb_title`, `fitb_description`, `first_sentence`, `last_sentence`, `option_a`, `option_b`, `option_c`, `option_d`, `answer_key`, `filb_status`) VALUES
(1, 3, 9, 'a,msnd', 'ansd', 'asd', 'asd', 'asdnm,', ',asmn', 'asn', 'asd', 'option_b', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_class_tbl`
--

CREATE TABLE `quiz_class_tbl` (
  `quiz_class_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `course_level_id` int(100) NOT NULL,
  `quiz_class_title` varchar(255) NOT NULL,
  `quiz_class_description` varchar(255) NOT NULL,
  `quiz_class_question` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `answer_key` varchar(255) NOT NULL,
  `quiz_class_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_class_tbl`
--

CREATE TABLE `video_class_tbl` (
  `video_class_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `course_level_id` int(100) NOT NULL,
  `video_class_title` varchar(255) NOT NULL,
  `video_class_description` varchar(255) NOT NULL,
  `video_class_videos` varchar(255) NOT NULL,
  `video_class_url` varchar(255) NOT NULL,
  `video_class_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_class_tbl`
--

INSERT INTO `video_class_tbl` (`video_class_id`, `course_id`, `course_level_id`, `video_class_title`, `video_class_description`, `video_class_videos`, `video_class_url`, `video_class_status`) VALUES
(1, 2, 8, 'sa', 'as', 'video1.mp4', 'sa', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_level_tbl`
--
ALTER TABLE `course_level_tbl`
  ADD PRIMARY KEY (`course_level_id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `filling_in_the_blanks_tbl`
--
ALTER TABLE `filling_in_the_blanks_tbl`
  ADD PRIMARY KEY (`fitb_id`);

--
-- Indexes for table `quiz_class_tbl`
--
ALTER TABLE `quiz_class_tbl`
  ADD PRIMARY KEY (`quiz_class_id`);

--
-- Indexes for table `video_class_tbl`
--
ALTER TABLE `video_class_tbl`
  ADD PRIMARY KEY (`video_class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_level_tbl`
--
ALTER TABLE `course_level_tbl`
  MODIFY `course_level_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filling_in_the_blanks_tbl`
--
ALTER TABLE `filling_in_the_blanks_tbl`
  MODIFY `fitb_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_class_tbl`
--
ALTER TABLE `quiz_class_tbl`
  MODIFY `quiz_class_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_class_tbl`
--
ALTER TABLE `video_class_tbl`
  MODIFY `video_class_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

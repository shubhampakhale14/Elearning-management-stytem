-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 10, 2021 at 01:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `adminpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `adminpassword`) VALUES
(1, 'admin1', 'admin'),
(2, 'virat1', 'virat18');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `a_id` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`a_id`, `answer`, `ans_id`) VALUES
(1, 'Home tool markup language', 1),
(2, 'hyperlinks markup language', 1),
(3, 'hyper text markup language', 1),
(4, 'none of above', 1),
(5, 'the first div element', 2),
(6, 'All div elements', 2),
(7, 'last div element', 2),
(8, 'none of above', 2),
(9, 'fat', 3),
(10, 'strong', 3),
(11, 'black', 3),
(12, 'emp', 3),
(13, 'nineteen ninety', 4),
(14, 'nineteen eighty', 4),
(15, 'two thousand', 4),
(16, 'nineteen ninety five\r\n', 4),
(17, 'h3', 5),
(18, 'h1', 5),
(19, 'h5', 5),
(20, 'h6', 5),
(21, 'guido var rossum', 6),
(22, 'zim den', 6),
(23, 'wick van rossum', 6),
(24, 'niene stom', 6),
(25, 'val', 7),
(26, 'raise', 7),
(27, 'try', 7),
(28, 'with', 7),
(29, 'python enhancement proposal', 8),
(30, 'python environment ppetx', 8),
(31, 'python environment in pplibrary8', 8),
(32, 'python envirnoment p8', 8),
(33, '$', 9),
(34, '//', 9),
(35, '/*...*/', 9),
(36, '#', 9),
(37, 'slice', 10),
(38, 'numbers', 10),
(39, 'numbers', 10),
(40, 'list', 10),
(41, 'All of below', 11),
(42, 'selector', 11),
(43, 'value', 11),
(44, 'property', 11),
(45, 'text-align', 12),
(46, 'text-indent\r\n', 12),
(47, 'text-transform', 12),
(48, 'text-decoration', 12),
(49, 'border', 13),
(50, 'height', 13),
(51, 'width', 13),
(52, 'moz-opacity', 13),
(53, 'pointer', 14),
(54, 'none of these\r\n', 14),
(55, 'move', 14),
(56, 'default', 14),
(57, 'empty-celss', 15),
(58, 'border-collapse', 15),
(59, 'border-spacing', 15),
(60, 'caption-side', 15),
(61, 'structure query language', 16),
(62, 'structure query list', 16),
(63, 'simple query language', 16),
(64, 'none of these', 16),
(65, 'like operator', 17),
(66, 'between operator', 17),
(67, 'exists operator', 17),
(68, 'none of these', 17),
(69, 'is null operator', 18),
(70, 'exists opetaror', 18),
(71, 'not opeartor', 18),
(72, 'none of these', 18),
(73, 'alter table', 19),
(74, 'modify table', 19),
(75, 'change table', 19),
(76, 'all of of above', 19),
(77, 'update', 20),
(78, 'revoke', 20),
(79, 'rename', 20),
(80, 'grant', 20),
(81, 'php hypertext processor', 21),
(82, 'php hypertex processor', 21),
(83, 'php hyper markup processor', 21),
(84, 'php hyper markup preprocessor ', 21),
(85, 'php 5', 22),
(86, 'php 4', 22),
(87, 'php 5.3', 22),
(88, 'php 7', 22),
(89, '.php', 23),
(90, '.html', 23),
(91, '.xml', 23),
(92, '.ph', 23),
(93, 'server-side', 24),
(94, 'client-side', 24),
(95, 'browser-side', 24),
(96, 'in-side', 24),
(97, '$ask', 25),
(98, '$get', 25),
(99, '$request', 25),
(100, '$post', 25),
(101, 'asa', 26),
(102, 'DF', 27);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(11) NOT NULL,
  `course_description` varchar(200) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_description`, `u_id`) VALUES
(1, 'html5', 'Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and sc', 1),
(2, 'python', 'Python is an interpreted, high-level and general-purpose programming language. Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace. Its language const', 2),
(3, 'css', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide W', 3),
(4, 'sql', 'SQL is a domain-specific language used in programming and designed for managing data held in a relational database management system, or for stream processing in a relational data stream management sy', 4),
(5, 'php', 'PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is a ', 5),
(6, 'go', 'go ......', 0);

--
-- Triggers `courses`
--
DELIMITER $$
CREATE TRIGGER `course_delete` AFTER DELETE ON `courses` FOR EACH ROW INSERT INTO old_course values(OLD.course_id,OLD.course_name,OLD.course_description,NOW(),"DELETED")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updatecourse` AFTER UPDATE ON `courses` FOR EACH ROW insert into old_course values(OLD.course_id,OLD.course_name,OLD.course_description,NOW(),"UPDATED")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `u_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `mobileno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`u_id`, `course_id`, `mobileno`) VALUES
(36, 2, 2147483647),
(37, 2, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `old_course`
--

CREATE TABLE `old_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_description` varchar(250) NOT NULL,
  `changedat` datetime NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_course`
--

INSERT INTO `old_course` (`course_id`, `course_name`, `course_description`, `changedat`, `action`) VALUES
(6, 'java', 'JAVA IS VERY POPULAR LANGUAGE', '2021-01-18 20:32:36', 'DELETED'),
(1, 'html', 'Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and sc', '2021-01-18 20:33:02', 'UPDATED'),
(6, 'java', 'java is ', '2021-01-21 20:06:00', 'UPDATED'),
(6, 'java', 'java is object oriented programming language', '2021-01-21 20:25:51', 'DELETED'),
(6, 'java', 'java is object oriented programming language', '2021-01-30 12:19:15', 'UPDATED');

-- --------------------------------------------------------

--
-- Table structure for table `old_user`
--

CREATE TABLE `old_user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `changedat` datetime NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `old_user`
--

INSERT INTO `old_user` (`u_id`, `username`, `email`, `changedat`, `action`) VALUES
(31, 'ram', 'ram@gmail.com', '0000-00-00 00:00:00', '2021-01-06 12:01:20'),
(31, 'ram67', 'ram@gmail.com', '0000-00-00 00:00:00', '2021-01-06 12:02:07'),
(32, 'msd', 'msd@gmail.com', '2021-01-06 12:27:14', 'updated'),
(32, 'ms', 'msd@gmail.com', '2021-01-06 12:27:20', 'updated'),
(27, 'shantanu', 'shantanu@gmail.com', '2021-01-06 13:32:44', 'updated'),
(31, 'ramesh', 'ram@gmail.com', '2021-01-06 13:32:58', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(250) NOT NULL,
  `course_id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `course_id`, `question`, `ans_id`) VALUES
(1, 1, 'What html stand for?', 3),
(2, 1, 'Look at the following:$(\"div\"),what does it select?', 5),
(3, 1, 'Apart from <b>tag,what other tag makes text bold?', 10),
(4, 1, 'The year in which html was first proposed?', 13),
(5, 1, 'which of the following tag is used for inserting the largest heading in html?', 18),
(6, 2, 'who developed the python language?', 21),
(7, 2, 'which of the following is not a keyword in python language?', 25),
(8, 2, 'what is long form of pep8?', 29),
(9, 2, 'which is the special symbol used in python to add comments?', 33),
(10, 2, 'which of the following data type is not supported in python?', 37),
(11, 3, 'which of the following is a component of css style rule?', 41),
(12, 3, 'which of the following property is used to align the text of a document?', 45),
(13, 3, 'which of the following property is used to set the width of an image border?', 49),
(14, 3, 'which of the following value of cursor shows it as pointing hand?', 53),
(15, 3, 'which of the following property of a table element specifies whether the border should be shown if a cell is empty?', 57),
(16, 4, 'what is full form of sql?', 61),
(17, 4, 'which opeartor performs pattern matching?', 65),
(18, 4, 'which opeartor tests column for the absence of data?', 69),
(19, 4, 'In sql,which command is used to change a table storage characterstics?', 73),
(20, 4, 'In sql,which of the following is not a data defination language commands?', 77),
(21, 5, 'what does php stand for?', 81),
(22, 5, 'which version of php introduced try/catch exception?', 85),
(23, 5, 'php files of default file extension of........', 89),
(24, 5, 'php is an example of which scripting language?', 93),
(25, 5, 'which variable is not predefined variable is not a predefined variable?', 97),
(26, 6, 'asdasd', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`, `cpassword`, `email`, `date`) VALUES
(1, 'shubhamp', 'shub14', 'shub14', 'shubham@gmail.com', '0000-00-00 00:00:00'),
(2, 'omm', 'om12', 'om12', 'om@gmail.com', '2020-12-27 17:40:41'),
(6, 'raj101', 'as', 'as', 'raj@gmail.com', '2020-12-27 18:05:38'),
(7, 'bhavesh14', 'asdf', 'asdf', 'bhavesg@gmail.com', '2020-12-27 18:08:41'),
(10, 'parth', '', '', 'parth@gmail.com', '2021-01-02 18:08:14'),
(23, 'sdfm', 'asd', 'asd', 'asd@gmail.com', '2021-01-03 11:04:36'),
(24, 'sunny12', '$2y$10$tfpdDshgf.EoPe/UC2xNJOUMQ6wETDZ2AKzQruQbtBxGTais51Kge', '', 'sunny@gmail.com', '2021-01-03 11:24:12'),
(25, 'sham7', '$2y$10$y9zCeVt3hKOotV.tVysS5eOcqh07uHPCY3BXA9i1GOvG9LNO82Glq', '', 'sham@gmail.com', '2021-01-03 11:46:52'),
(26, 'darsh12', '$2y$10$mpbijRUPVJLjPPoq/ngKgOtoOc0mj4tYhfDFn16JgpgBKm8ydXjqK', '', 'darsh@gmail.com', '2021-01-03 11:55:30'),
(27, 'aayush35', '$2y$10$IIH4CFWDnIwKtyJJ0hUUcOInpMEVnEv/JBNTxm5I1HXrPDKh5UINK', '', 'shantanu@gmail.com', '2021-01-05 21:24:06'),
(30, 'tejas', '$2y$10$om2ECF6NhpJjqoLHfeWlcOcqE.jQVrjyleGSGcBa4P9dr1knvhPAi', '', 'taj@gmail.com', '2021-01-06 11:24:12'),
(32, 'ms', '$2y$10$27ff2kIKNjqURoPNxyN0zuK/aRIGw6TofBmNB.GPTPMvFuQcXcFXe', '', 'ms@gmail.com', '2021-01-06 12:26:38'),
(33, 'rishi', '$2y$10$cNzENC1.zOr1kUo9P2wPbOhLanGZX9bIt/AKJQo6GSu1IG2rT4Myq', '', 'rishi@gmail.com', '2021-01-18 20:36:12'),
(34, 'rishi125', '$2y$10$4svM3LCkPP4pGWi385LITOpbKObC5PkcXwXx0xB15QxjCJbLaK.fG', '', 'r@gmail.com', '2021-01-18 20:37:52'),
(35, 'sam100', '$2y$10$6/JXo5anxQL8M6tdbMKFVOcqJp/TTiss/16E8FiaOsR03v6TNtR4y', '', 'samp@gmail.com', '2021-01-21 22:53:41'),
(36, 'kedar', '$2y$10$sWP6bL/oK3IcQfULvK69L.LAoG3MEgOcKd0otAFYQppDJzyJ6Tp32', '', 'kedar@gmail.com', '2021-01-30 00:08:32'),
(37, 'UNMESH', '$2y$10$Capt4Z.YLt1QoACNEZaMeepOmw2zU98tizgPL./5oQzDuwWemWveq', '', 'UNMESH@GMAIL.COM', '2021-01-30 14:10:24');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `student_delete_information` BEFORE DELETE ON `user` FOR EACH ROW INSERT INTO old_user VALUES(OLD.u_id,OLD.username,OLD.email,NOW(),"deleted")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `student_update_information` BEFORE UPDATE ON `user` FOR EACH ROW insert into old_user values(OLD.u_id,OLD.username,OLD.email,NOW(),"updated")
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `a_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

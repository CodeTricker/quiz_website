
--create user!!!!!
--GRANT ALL PRIVILEGES ON *.* TO 'myuser'@'localhost' IDENTIFIED BY PASSWORD '*6C8989366EAF75BB670AD8EA7A7FC1176A95CEF4' WITH GRANT OPTION;

--GRANT ALL PRIVILEGES ON `myuser\_%`.* TO 'myuser'@'localhost';





-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 05:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `quiz_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `choice1` varchar(500) DEFAULT NULL,
  `choice2` varchar(500) DEFAULT NULL,
  `choice3` varchar(500) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quiz_id`, `question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'Which is the capital of Sweden?', 'Uppsala', 'Gothenburg', 'Oslo', 'Stockholm'),
(2, 'Which is the 5th largest country by population?', 'United States of America', 'China', 'India', 'Brazil'),
(3, 'Which is the largest country by area?', 'China', 'Brazil', 'Australia', 'Russia'),
(4, 'Which is the highest mountain?', 'Olympus', 'Makalu', 'Manaslu', 'Everest'),
(5, 'Which is the largest ocean?', 'Caribbean Sea', 'Arctic Ocean', 'Mediterranean Sea', 'Pacific Ocean'),
(6, 'How many states do USA constist of?', '56', '48', '40', '50'),
(7, 'Which is the largest island by area in Greece?', 'Corfu', 'Mykonos', 'Euboea', 'Crete'),
(8, 'Which is the largest desert?', 'Sahara', 'Gobi Desert', 'Patagonian Desert', 'Maudlandia'),
(9, 'Which is the bussiest port?', 'Piraeus', 'Singapore', 'Santos', 'Shanghai'),
(10, 'Which is the largest forest', 'Taiga', 'Equador Cloud Forest', 'Daintree', 'Amazon Forests');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`quiz_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

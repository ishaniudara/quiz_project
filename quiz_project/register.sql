-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2019 at 03:01 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Home Tool markup Language', 1),
(2, 'HyperLinks and Text Markup Language', 1),
(3, 'Hyper Text Markup language', 1),
(4, 'None oh above', 1),
(5, 'The first div element', 2),
(6, 'All div elements', 2),
(7, 'The last div element', 2),
(8, 'None of above', 2),
(9, 'The head section', 3),
(10, 'The body section', 3),
(11, 'Both the head section and body section', 3),
(12, 'None of them', 3),
(13, 'function myfunction()', 4),
(14, 'function :myfunction()', 4),
(15, 'function=myfunction()', 4),
(16, 'None of these', 4),
(17, '.container', 5),
(18, '.container-fixed', 5),
(19, '.container-fluid', 5),
(20, 'None of these', 5);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `ans_id`) VALUES
(1, 'What does HTML stand for?', 1),
(1, 'What does HTML stand for?', 1),
(2, 'Look at the following selector ;$(\"div\"). what does it select?', 5),
(3, 'Where is the correct place to INSERT a javascript?', 9),
(4, 'How do you create a function in javascript?', 13),
(5, 'Which class provides a responsive fixed width container?', 17);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES
('ishnai', 'udara', '22dds', 'w2e'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', 'ert5y'),
('', '', '', 'ert5y'),
('', '', '', 'ert5y'),
('', '', '', 'ert5y'),
('', '', '', '2345'),
('', '', '', '2345'),
('amal', '', 'email', '2345'),
('amal', '', 'email', '2345'),
('amal', 'kumara', 'email', '2345'),
('amal', 'kumara', 'email', '2345'),
('amal', 'kumara', 'email', 'jfrio3'),
('amal', 'kumara', 'email', 'jfrio3'),
('amal', 'kumara', 'email', 'jfrio3'),
('amal', 'kumara', 'email', 'jfrio3'),
('randika', 'yasintha', 'randikayasintha@yahoo.com', '1234abcd'),
('randika', 'yasintha', 'randikayasintha@yahoo.com', '1234abcd'),
('piyal', 'namal', '123e', 'xjhdiil'),
('piyal', 'namal', '123e', 'xjhdiil'),
('piyal', 'namal', '123e', 'xjhdiil'),
('piyal', 'namal', '123e', 'xjhdiil'),
('rashmika', 'bandara', 'rty', '123ae'),
('rashmika', 'bandara', 'rty', '123ae'),
('randika', 'udara', 'ishaniudara94@gmail.com', 'uiiiou'),
('randika', 'udara', 'ishaniudara94@gmail.com', 'uiiiou'),
('sriyani', 'rajith', 'tyu', '18989uhj'),
('sriyani', 'rajith', 'tyu', '18989uhj'),
('ishnai', 'udara', 'tyu', 'sklalk'),
('ishnai', 'udara', 'tyu', 'sklalk'),
('ishnai', 'udara', 'tyu', ''),
('ishnai', 'udara', 'tyu', ''),
('ishnai', 'kumara', '123e', 'bjkjk'),
('ishnai', 'kumara', '123e', 'bjkjk'),
('', '', '', ''),
('anto', 'kal', 'sfh', '1234'),
('dileepa', 'hashan', 'dv', '45'),
('dileepa', 'hashan', 'dv', ''),
('p', 'q', 'h', 'i'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('8', 'l', 'p', '0'),
('8', 'l', 'p', ''),
('', '', '', ''),
('ishani', 'udara', 'hl', 'g'),
('ishani', 'u', 'h', 'k'),
('', '', '', ''),
('i', 'u', 'jk', 'p'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('k', 'k', 'o', 'p');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

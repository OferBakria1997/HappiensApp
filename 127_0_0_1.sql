-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: פברואר 05, 2019 בזמן 11:42 AM
-- גרסת שרת: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happy_app`
--
CREATE DATABASE IF NOT EXISTS `happy_app` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `happy_app`;

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `manuy_id` int(11) NOT NULL,
  `date_in` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `information`
--

INSERT INTO `information` (`id`, `num1`, `num2`, `manuy_id`, `date_in`) VALUES
(4, 9, 8, 76, '2019-01-17'),
(3, 66, 66, 76, '2019-01-17'),
(5, 55, 55, 77, '2019-01-17'),
(6, 33, 33, 74, '2019-01-17'),
(7, 22, 22, 74, '2019-01-17'),
(8, 11, 11, 78, '2019-01-17'),
(9, 12, 12, 78, '2019-01-17'),
(10, 12, 21, 74, '2019-01-17'),
(11, 34, 43, 74, '2019-01-17'),
(12, 22, 33, 74, '2019-01-17'),
(13, 54, 54, 74, '2019-01-17'),
(14, 14, 41, 74, '2019-01-17'),
(15, 99, 99, 74, '2019-01-17'),
(16, 0, 0, 74, '2019-01-17'),
(17, 33, 33, 74, '2019-01-17'),
(18, 45, 54, 74, '2019-01-17'),
(19, 97, 95, 77, '2019-01-17'),
(20, 99, 99, 80, '2019-01-17'),
(21, 99, 99, 81, '2019-01-17'),
(22, 25, 20, 74, '2019-01-17'),
(23, 77, 74, 74, '2019-01-17'),
(24, 88, 86, 77, '2019-01-17'),
(25, 23, 99, 77, '2019-01-17'),
(26, 33, 44, 74, '2019-01-17'),
(27, 45, 76, 77, '2019-01-17'),
(28, 70, 71, 84, '2019-01-17'),
(29, 1, 23, 74, '2019-01-17'),
(30, 44, 22, 77, '2019-01-05'),
(31, 22, 11, 74, '2019-01-17'),
(32, 10, 9, 77, '2019-01-30'),
(33, 40, 10, 77, '2019-01-01'),
(34, 60, 80, 77, '2019-01-17'),
(35, 56, 57, 77, '2018-01-01'),
(36, 67, 76, 77, '2019-01-17'),
(37, 33, 33, 77, '2019-01-17'),
(38, 44, 44, 77, '2019-01-17'),
(39, 56, 66, 77, '2019-01-17'),
(40, 32, 54, 74, '2019-01-17'),
(41, 23, 98, 77, '2019-01-21'),
(42, 12, 23, 74, '2019-01-21'),
(43, 77, 99, 88, '2019-01-21'),
(44, 78, 87, 74, '2019-01-24'),
(45, 43, 67, 74, '2019-01-29'),
(46, 23, 11, 74, '2019-02-04'),
(47, 34, 32, 74, '2019-02-04'),
(48, 55, 60, 84, '2019-02-04'),
(49, 11, 44, 84, '2019-02-04'),
(50, 99, 98, 74, '2019-02-04'),
(51, 11, 39, 74, '2019-02-04'),
(52, 99, 11, 74, '2019-02-05'),
(53, 69, 66, 84, '2019-02-05'),
(54, 88, 87, 84, '2019-02-05'),
(55, 99, 99, 84, '2019-02-05'),
(56, 98, 97, 102, '2019-02-05');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `uname`, `pass`) VALUES
(82, 'add', 'add', 'add', '83403041efcfc56a4b23209e3afa3233'),
(80, 'ofer', 'ofer', 'ofer', '39180871f03a63623f722fa3e5d2d1fc'),
(81, 'samih', 'samih', 'samih', '3355611732918b9b4b760bf05189175e'),
(78, 'abc', 'abc', 'abc', 'c3d9537025fce9a550cc2a59bb46ef39'),
(77, 'yofi', 'yofi', 'yofi', 'eb7d3afab3f4a40cc02d5a0597517c38'),
(76, 'bb', 'bb', 'bb', '55d2287cc0fbce96a19d7f5b8945055e'),
(79, 'aaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaa', '7a71e13fb979ea7bf5080f76fa260caf'),
(74, 'aa', 'aa', 'aa', '4d11b7e6ef8f7b287da4dca825a47216'),
(83, 'AA\'OR\'1\'=\'1', 'AA\'OR\'1\'=\'1', 'AA\'OR\'1\'=\'1', '3611b59acd4191eaa0b730512f47a027'),
(84, 'sanad', 'sanad', 'sanad', '5032b2fa4395d76194c9c80bb81c62b7'),
(87, 'qq', 'qq', 'qq', '1041e53caaf90d995b72d441f3bb732f'),
(88, 'matan', 'matan', 'matan', '664434c5cffb7dd5c05f22ac2a5ac6d8'),
(90, 'moshe', 'moshe', 'moshe', '03fd30a0cf3f70a2e43b8afada42fe6c'),
(91, 'q', 'q', 'q', 'd60619ecefe6e19d1b8f8c9c42b5a01e'),
(92, 'c', 'c', 'c', 'cfed7df5edbb3fa46542a933ca489452'),
(93, 'w', 'w', 'w', 'c75e3c99e915f4fbedf9068b9cc70772'),
(99, 'aaa', 'aaa', 'aaa', '2b24d495052a8ce66358eb576b8912c8'),
(100, 'amir', 'amir', 'amir', '2b24d495052a8ce66358eb576b8912c8'),
(101, 't', 't', 't', 'f54d7dccfb6547d3c58925f3a0a70d1f'),
(102, 'be_happy', 'be_happy', 'be_happy', '20a98a3a48321148f4a6bbf4c58eec0d');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

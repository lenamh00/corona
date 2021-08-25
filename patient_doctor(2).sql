-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25 أغسطس 2021 الساعة 07:46
-- إصدار الخادم: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_doctor`
--

-- --------------------------------------------------------

--
-- بنية الجدول `bed`
--

CREATE TABLE `bed` (
  `bed_id` int(11) NOT NULL,
  `recource_id` int(11) NOT NULL,
  `bed_name` text NOT NULL,
  `number_validate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `bed`
--

INSERT INTO `bed` (`bed_id`, `recource_id`, `bed_name`, `number_validate`) VALUES
(1, 3, 'normal', 10),
(2, 3, 'Intensive care', 10);

-- --------------------------------------------------------

--
-- بنية الجدول `chat`
--

CREATE TABLE `chat` (
  `chat-id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `msg` varchar(155) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `chat`
--

INSERT INTO `chat` (`chat-id`, `name`, `msg`, `date`) VALUES
(1, '', '', '2021-06-11'),
(2, '', '', '2021-06-11'),
(4, 'lena', 'hh', '2021-06-11'),
(26, '', '', '2021-06-21'),
(27, 'w', 'hh', '2021-06-21'),
(28, 'Aloa', 'vvvvvvvvvvvvvvvvvvvvvvvvvv', '2021-06-21'),
(29, '', '', '2021-06-21'),
(30, 'mais', 'qwer', '2021-06-21'),
(31, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'hwdopipdipqi3;2t', '2021-06-21'),
(32, '', '', '2021-06-25'),
(33, 'lena', 'hi', '2021-06-25');

-- --------------------------------------------------------

--
-- بنية الجدول `doctor`
--

CREATE TABLE `doctor` (
  `Doctor-id` int(11) NOT NULL,
  `Doctor-name` varchar(255) NOT NULL,
  `Jurisdiction` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `availabel_number` int(11) DEFAULT NULL,
  `recource_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `doctor`
--

INSERT INTO `doctor` (`Doctor-id`, `Doctor-name`, `Jurisdiction`, `university`, `availabel_number`, `recource_id`) VALUES
(1, 'Ali', 'An intensive care', ' Damascus', 4, 4);

-- --------------------------------------------------------

--
-- بنية الجدول `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `medicine`
--

CREATE TABLE `medicine` (
  `medicin_id` int(11) NOT NULL,
  `recource_id` int(11) NOT NULL,
  `medicin_name` text NOT NULL,
  `number_validate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `medicine`
--

INSERT INTO `medicine` (`medicin_id`, `recource_id`, `medicin_name`, `number_validate`) VALUES
(1, 1, 'tamiflu', 10),
(2, 1, 'levofloxacine', 10),
(3, 1, 'cefoxitin', 10),
(4, 1, 'Dexamethason', 10),
(5, 1, 'zink', 10);

-- --------------------------------------------------------

--
-- بنية الجدول `oxogen`
--

CREATE TABLE `oxogen` (
  `oxogen_id` int(11) NOT NULL,
  `recource_id` int(11) NOT NULL,
  `oxogen_name` text NOT NULL,
  `number_validate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `oxogen`
--

INSERT INTO `oxogen` (`oxogen_id`, `recource_id`, `oxogen_name`, `number_validate`) VALUES
(1, 2, 'oximeter', 10),
(2, 2, 'ventilator', 10);

-- --------------------------------------------------------

--
-- بنية الجدول `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(155) NOT NULL,
  `mobile` text NOT NULL,
  `password` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Oxygenation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `mobile`, `password`, `Age`, `Oxygenation`) VALUES
(2, 'le', '099', '88', 0, 3),
(3, 'le', '099', '88', 0, 3),
(4, 'lenamohamad', '099098', '88987', 0, 12),
(5, 'lenamohamad', '099098', '88987', 0, 12),
(6, 'lenamohamad', '099098', '88987', 0, 12),
(7, 'lenamohamad', '099098', '88987', 0, 12),
(8, 'lenamohamad', '099098', '88987', 0, 12),
(9, '', '', '', 0, 0),
(10, 'lenamohamad', '099098', '88987', 0, 12),
(11, 'lenamohamad', '099098', '88987', 0, 12),
(12, '', '', '', 0, 0),
(13, '', '', '', 0, 0),
(14, '', '', '', 0, 0),
(15, '', '', '', 0, 0),
(16, '', 'cvgbhnj', 'cvgbhnj', 0, 0),
(17, 'le', 'cvgbhnj', 'cvgbhnj', 0, -3),
(18, '', '', '', 0, 0),
(19, '', '', '', 0, 0),
(20, 'mais', '08765432', '09876543', 0, 4),
(21, 'mais', '08765432', '09876543', 0, 4),
(22, 'mais', '08765432', '09876543', 0, 4),
(23, 'mais', '08765432', '09876543', 0, 4),
(24, 'mais', '08765432', '09876543', 0, 4),
(29, 'le', '08765432', '09876543', 0, 0),
(30, 'le', '08765432', '', 0, 0),
(31, '', '', '', 0, 0),
(32, '', '', '', 0, 0),
(33, '', '', '', 0, 0),
(34, '', '', '', 0, 0),
(35, '', '08765432', '09876543', 0, 0),
(36, '', '08765432', '09876543', 0, 0),
(37, '', '', '', 0, 0),
(38, '', '', '', 0, 0),
(39, '', '', '', 0, 0),
(40, '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `resource`
--

CREATE TABLE `resource` (
  `recource_id` int(11) NOT NULL,
  `recource_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `resource`
--

INSERT INTO `resource` (`recource_id`, `recource_name`) VALUES
(1, 'medicin'),
(2, 'oxogen'),
(3, 'bed'),
(4, 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`bed_id`),
  ADD KEY `recource_id` (`recource_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat-id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor-id`),
  ADD KEY `recource_id` (`recource_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicin_id`),
  ADD KEY `recource_id` (`recource_id`);

--
-- Indexes for table `oxogen`
--
ALTER TABLE `oxogen`
  ADD PRIMARY KEY (`oxogen_id`),
  ADD KEY `recource_id` (`recource_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`recource_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `bed`
--
ALTER TABLE `bed`
  ADD CONSTRAINT `bed_ibfk_1` FOREIGN KEY (`recource_id`) REFERENCES `resource` (`recource_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`recource_id`) REFERENCES `resource` (`recource_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`recource_id`) REFERENCES `resource` (`recource_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `oxogen`
--
ALTER TABLE `oxogen`
  ADD CONSTRAINT `oxogen_ibfk_1` FOREIGN KEY (`recource_id`) REFERENCES `resource` (`recource_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

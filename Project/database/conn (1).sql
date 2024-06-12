-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 03:12 AM
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
-- Database: `conn`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `srno` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `UserID` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `ConfirmPassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`srno`, `FirstName`, `LastName`, `Email`, `DOB`, `UserID`, `Password`, `ConfirmPassword`) VALUES
(1, 'Deepika', 'Panwar', 'deepikapanwar3987@gmail.com', '2004-03-20', 'Deeps', 'e10adc39', 'e10adc39'),
(4, 'Anamika', 'Panwar', 'amipanwar29@gmail.com', '2002-04-10', 'ami123', '123456', '123456'),
(5, 'Namarta', 'Virdi', 'Namarta3@gmail.com', '2024-04-12', 'Namo', 'e10adc39', 'e10adc39'),
(6, 'hello', 'hy', 'hellohy@gmail.com', '2024-05-10', 'hyhi', 'bb2ba9a5', 'bb2ba9a5'),
(7, 'Anamika', 'Panwar', 'amipanwar69@gmail.com', '2024-05-01', 'Sanvii', 'e10adc39', 'e10adc39'),
(8, 'Namarta', 'Virdi', 'amipanwar@gmail.com', '2024-05-02', 'Dmru', 'e10adc39', 'e10adc39'),
(9, 'Nikhil', 'Chumber', 'Chumber@gmail.com', '2024-05-01', 'nikhil', 'e10adc39', 'e10adc39'),
(10, 'Nikhil', 'Virdi', 'deepsrajput7@gmail.com', '2024-05-16', 'nikil', '', ''),
(11, 'Deepika', 'Virdi', 'amipanw9@gmail.com', '2024-05-24', 'Sanvi', '123456', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `path`, `upload_date`, `comment`) VALUES
(1, 'demo1.jpg', 'demo1.jpg', '2024-05-20 01:09:19', 'LOVE is LOVE'),
(2, 'demo.jpg', 'demo.jpg', '2024-05-20 01:46:04', 'Pride '),
(3, 'demo2.jpg', 'demo2.jpg', '2024-05-20 01:47:03', ''),
(4, 'demo12.gif', 'demo12.gif', '2024-05-20 02:04:38', 'Colorful'),
(5, 'demo3.png', 'demo3.png', '2024-05-20 04:40:22', 'I Love   Me');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `Email` (`Email`,`UserID`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

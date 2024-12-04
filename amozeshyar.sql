-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 04:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amozeshyar`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `level` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `history` int(11) NOT NULL,
  `school` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `gender` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `level`, `history`, `school`, `gender`) VALUES
(1, 'محسن چاووشی', 'چهارم', 10, 'شهید خرمی', 1),
(2, 'زهرا سبزه کار', 'ششم', 12, 'فکوری', 1),
(3, 'مریم مکاری', 'سوم', 25, 'خوش نیت', 0),
(4, 'علی رضایی', 'اول', 8, 'دانا', 1),
(5, 'مهدی محمدی', 'ششم', 20, 'پسران خورشید', 1),
(6, 'هدیه روحانی', 'دوم', 28, 'شهید قاسمی', 0),
(7, 'فاطمه کاظمی', 'چهارم', 22, 'شهید مطهری', 0),
(8, 'حسین صادقی', 'سوم', 16, 'دانا', 1),
(9, 'الهام اقتداری', 'ششم', 18, 'خوش نیت', 0),
(10, 'لیلا اکرمی', 'اول', 10, 'سرزمین گلها', 0),
(11, 'رضا اکبری', 'ششم', 23, 'شهید مقدم', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `name`, `password`) VALUES
(1, 'f-p', 'فاطمه پورحیدریان', '1234'),
(2, 's-d', 'سمیه دهقان', '1234'),
(3, 'f', 'فاطمه', '1234'),
(4, 's', 'سمیه', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

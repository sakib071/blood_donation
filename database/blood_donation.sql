-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 07:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `name`, `blood_group`, `address`, `phone`) VALUES
(1, 'Sakib', 'A+', 'Momin Road', '01760886380');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `full_name`, `email`, `phone`, `password`, `confirm_password`, `gender`, `bloodgroup`, `address`) VALUES
(1, 'sakib071', 'Mohammad Sakib Chowdhury', 'mdsakibchy071@gmail.com', '01760886380', '123', '123', 'Male', 'A+', '703no. Jhautala, Momin road'),
(2, 'jubair031', 'Jubair Hossain', 'jubair@gmail.com', '01236225426', '121', '121', 'Male', 'A-', 'Rangunia'),
(3, 'rafi121', 'Al Rafi', 'alrafi@gmail.com', '01251224512', '15de21c670ae7c3f6f3f1f37029303', '15de21c670ae7c3f6f3f1f37029303', 'Male', 'A+', 'Nozumia hut'),
(4, 'ak1580', 'Kamal', 'kamal@gmail.com', '01452336520', '627aed15a7f0081b9ac6359e3940ea', '627aed15a7f0081b9ac6359e3940ea', 'Male', 'A-', 'CTG'),
(5, 'rahman12', 'Rahman', 'kamal@gmail.com', '01760886380', '202cb962ac59075b964b07152d234b', '202cb962ac59075b964b07152d234b', 'Male', 'O+', '703no. Jhautala, Momin road'),
(6, 'mamun000', 'Mamun Kader', 'mamun@gmail.com', '01230221510', '698d51a19d8a121ce581499d7b7016', '698d51a19d8a121ce581499d7b7016', 'Male', 'B+', 'Khulna'),
(7, 'miskat01', 'Miskatul Karim', 'miskat@gmail.com', '01252114528', 'b706835de79a2b4e80506f582af367', 'b706835de79a2b4e80506f582af367', 'Male', 'A+', 'Dhaka'),
(8, 'miskat02', 'Miskatul Karim', 'miskatul@gmail.com', '01452114785', '333', '333', 'Male', 'A+', 'Khulna'),
(9, 'tasnim071', 'Tasnim Chowdhury', 'tasnim@gmail.com', '01452116325', 'tasnim071', 'tasnim071', 'Female', 'O+', 'Jamal Khan'),
(10, 'hamid', 'Anila Khanam', 'anika@gmail.com', '01752336214', 'anika031', 'anika031', 'Female', 'AB+', 'Chawkbazar'),
(11, 'ashraf031', 'Mohammad Ashraf', 'ashraf031@gmail.com', '014523621', 'ashraf031', 'ashraf031', 'Male', 'A+', 'Chawkbazar'),
(12, 'shuvo', 'Shuvo Das', 'shuvo@gmail.com', '014582336', 'shuvo11', 'shuvo11', 'Male', 'A+', 'Andorkilla'),
(13, 'malek', 'Malek khan', 'malek@gmail.com', '014528745', '444', '444', 'Male', 'B+', 'CTG'),
(14, 'nusaiba', 'Nusaiba Zaman', 'nusaiba@gmail.com', '0125485201', 'abc', 'abc', 'Female', 'B+', 'Dhaka'),
(15, 'dba', 'dba', 'dba@gmail.com', '0145236521', 'ddd', 'ddd', 'Female', 'A-', 'CTG'),
(16, 'jack', 'Jack Farhan', 'jack@gmail.com', '0125411252', '555', '555', 'Male', 'B+', 'Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `username`, `full_name`, `email`, `phone`, `date`, `bloodgroup`, `address`) VALUES
(1, 'sakib071', 'Mohammad Sakib Chowdhury', 'mdsakibchy071@gmail.com', '01760886380', '25/02/2022', 'A+', '703no. Jhautala, Momin road'),
(2, 'tasnim071', 'Tasnim Chowdhury', 'tasnim@gmail.com', '0123652145', '03/07/2022', 'O+', 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
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
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 09:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lname` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tel.` varchar(15) NOT NULL,
  `urname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `statuts` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `tel.`, `urname`, `password`, `statuts`) VALUES
(1, '', '', '', '', '', 1),
(2, 'asdasdasd', 'asdasdasd', 'asdasdas', 'dasdasd', 'asdasdasd', 1),
(3, 'asdasdasd', 'asdasdasd', 'asdasdas', 'dasdasd', 'asdasdasd', 1),
(4, 'asdfda', 'sfdasdf', '0316534', 'sadas', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(5, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(6, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(7, 'lllllll', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(8, 'lklklk', 'dlslal', '50611111190', 'dhahsb', 'e3ceb5881a0a1fdaad01296d7554868d', 1),
(9, 'asdasdasd', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(10, '?????????', '?????????', '??????', 'asdasd??????', '7e64a11300fd85070c96341018075cb7', 1),
(11, 'asd??????', '?????????', '??????', '????????', 'c204db9d37c96812d9d8acba826952fb', 1),
(12, 'sdfsdกหด', 'กหดห', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(13, 'tiber', 'tiber', '0800943596', 'tiber', '22a102ad1e1c3a9ccc4970c53051ce20', 1),
(14, 'T20222022T', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(15, 'T20222022T', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

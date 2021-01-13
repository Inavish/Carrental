-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 09:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inavish`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `carname` varchar(255) NOT NULL,
  `fromdate` varchar(255) NOT NULL,
  `todate` varchar(255) NOT NULL,
  `license` blob NOT NULL,
  `comments` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `user`, `mobile`, `email`, `carname`, `fromdate`, `todate`, `license`, `comments`, `username`) VALUES
(5, 'sssssssssss', 'ssssssssssssss', 'sssssssssssssssss', '', 'ssssssssssss', 'ssssssssssss', 0x31372e6a7067, '             asdf', 'prad'),
(6, '12345654321', 'pradeep@gmail.com', 'asdfasdf', '', 'asdf', 'asdf', 0x31382e6a7067, '             asdfasdf', 'prad'),
(7, 'prad', 'pradpq', 'pradp', '', 'prapd', 'parad', 0x31392e6a7067, '             asdf', 'prad'),
(8, 'sdf', 'gh', 'jhk', 'fgh', 'fg', 'ghj', 0x31322e6a7067, '             kjhg', 'prad'),
(9, 'shiva', '8286455269', 'sdf', 'ssf', 'fd', 'fds', 0x31372e6a7067, '             gfds', 'prad'),
(10, 'shiva', '8286345269', 'shiv@gamil.com', 'fd', 'ds', 'ds', 0x53637265656e73686f745f32303230313131352d3233333131335f5f30312e6a7067, '             mAR', 'shiv'),
(11, '123', '123', '12', '12', '12', '12', 0x332e6a7067, '             mAR', 'shiv'),
(12, '123', '123', '12', '12', '12', '12', 0x332e6a7067, '             mAR', 'shiv'),
(13, 'Shivani Gupta', '8286455269', 'shivani151020@gmail.com', 'Mercedes-Benz C-Class', '12/10/2020', '19/10/2020', 0x33372e6a7067, '             thank you\r\n', 'shiv'),
(14, 'Shivani Gupta', '8286455269', 'shivani151020@gmail.com', 'BMW , ytb rvtr', '12/10/2020', '12/10/2020', 0x372e6a7067, '             Thank you!\r\n', 'shivaji');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `user`, `email`, `mobile`, `comment`) VALUES
(7, 'Shivani Gupta', 'shivani151020@gmail.com', '8286455269', '             data base me aja yrr'),
(8, 'Shivani Kale ', 'shivanikale27@gmail.com', '8286455269', '             hhdgfsrsdgcu'),
(9, 'ruchita', 'ruchita@gmail.com', '82467593225', '  jsnzkjnfk'),
(10, 'shivani kake', 'shivani151020@gmail.com', '8286455269', '             shembdi'),
(13, 'shivani', 'jk.jhd@jns', '525642452', '             kdgtyshjka'),
(14, 'shivani Kale', 'shivanikale@gmail.com', '828645529', '             Thank You'),
(15, 'shivani', 'jdkasd@jksd', '555555348', '             jdk,bfj'),
(16, 'shi', 'shivani151020@gmail.com', '8286455269', '             mar ja');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'elias', '123', 'Elias'),
(2, 'john', 'abc', 'John'),
(3, 'shiv', '202cb962ac59075b964b07152d234b70', 'Shivani'),
(4, 'shivan', '202cb962ac59075b964b07152d234b70', 'shivan'),
(5, 'sss', '202cb962ac59075b964b07152d234b70', 'waff'),
(6, 'shivaji', '202cb962ac59075b964b07152d234b70', 'shivani gupta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

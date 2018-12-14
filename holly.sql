-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 12:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holly`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `no_telp`, `jns_kelamin`, `email`, `address`, `password`, `id`, `role`) VALUES
('Nabella Permata Sari', 'nabellapermata', '+628977450021', 'Female', 'nabellaps27@gmail.com', 'YKP Pandugo II Blok R/1A', '$2y$10$PYQyvq8xHPjKYiUtT8r4WOBuYTU.ibJ6HPkqoUYBnSVPZdvt8JBXa', 13, 'user'),
('mifta', 'miftakiya', '0192983882', 'Male', 'miftakiya123@gmail.com', 'mana aja', '$2y$10$advLFrKEzvJiTHPm29HvRuIWE8/CzyRNLegas10KNhjoaaXyjQbvu', 14, 'user'),
('admin', 'admin1', '092928828', 'Male', 'admin123@gmail.com', 'gapunyarumah', '$2y$10$gebItdEYN1/xQh9/EMaJjOk3AEFdiSQpW8ZZ4DPAC0UL2VZ5lKbxG', 15, 'admin'),
('admin2', 'admin2', '82882829999', 'Male', 'admin2@gmail.com', 'asdasd', '$2y$10$8s5Z02fcvojnJGsvL8kRlOjXMo7s4lqTO4YyAoV8p0nXIZQYgoATq', 17, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

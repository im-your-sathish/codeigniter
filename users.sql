-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 01:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeignitertest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'sathish', 'sathish@gmail.com', '1234', '1234567890'),
(5, 'sandeep', 'sandeep@gmail.com', '1234', '123456898'),
(11, 'Giacomo Tran', 'wibof@mailinator.com', 'Pa$$w0rd!', '150'),
(12, 'Berk Deleon', 'rycugac@mailinator.com', 'Pa$$w0rd!', '867'),
(13, 'Alice Fisher', 'dokyco@mailinator.com', 'Pa$$w0rd!', '831'),
(17, 'Reuben Gonzalez', 'wimohi@mailinator.com', 'Pa$$w0rd!', '418'),
(18, 'Keiko Stafford', 'leqyb@mailinator.com', 'Pa$$w0rd!', '689'),
(19, 'Wanda Lee', 'walun@mailinator.com', 'Pa$$w0rd!', '626'),
(20, 'Cassidy May', 'naxucuw@mailinator.com', 'Pa$$w0rd!', '635'),
(21, 'Thor Hurst', 'xejiz@mailinator.com', 'Pa$$w0rd!', '30'),
(22, 'sai', 'saikumar@gmail.com', '1234', '123456789'),
(23, 'Demetrius Everett', 'mexyzy@mailinator.com', 'Pa$$w0rd!', '66'),
(24, 'Fitzgerald Carson', 'tejynuvidu@mailinator.com', 'Pa$$w0rd!', '809'),
(25, 'Kato Foreman', 'qogal@mailinator.com', 'Pa$$w0rd!', '197'),
(26, 'Signe Callahan', 'rarinupal@mailinator.com', 'Pa$$w0rd!', '337'),
(27, 'Carl Jacobs', 'socaxune@mailinator.com', 'Pa$$w0rd!', '609'),
(28, 'Cara Carpenter', 'noluzoca@mailinator.com', 'Pa$$w0rd!', '167'),
(29, 'Lael Hays', 'muxekota@mailinator.com', 'Pa$$w0rd!', '168'),
(30, 'Claudia Kent', 'jawycezax@mailinator.com', 'Pa$$w0rd!', '149');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

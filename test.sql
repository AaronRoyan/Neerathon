-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 06:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `Josephite` varchar(255) NOT NULL,
  `S_event` int(10) NOT NULL,
  `myImage` varchar(255) NOT NULL,
  `id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fullName`, `email`, `phoneNumber`, `Josephite`, `S_event`, `myImage`, `id`) VALUES
('sWD', 'anudeep313@gmail.com', '4323', 'Yes', 5, '', ''),
('allah', 'dfbxqjsd@metalunits.com', '78654', 'Faculty', 10, '', ''),
('allah', 'dfbxqjsd@metalunits.com', '78654', 'Faculty', 10, '', ''),
('allah', 'aaron.dj.royan@gmail.com', '2143253', 'Josephite', 5, '', ''),
('allah', 'aaron.dj.royan@gmail.com', '2143253', 'Josephite', 5, '', ''),
('allah', 'aaron.dj.royan@gmail.com', '2143253', 'Josephite', 5, '', ''),
('allah', 'aaron.dj.royan@gmail.com', '2143253', 'Josephite', 5, '', ''),
('efr', 'rfub2@asdn', '8978654', 'Josephite', 5, '', ''),
('allah', 'aaron.dom.royan@gmail.com', '7867', 'Josephite', 5, '', ''),
('aaron', 'aaron.dom.royan@gmail.com', '23', 'Yes', 2, '', ''),
('asd', 'ads@das', '4', 'No', 2, '', ''),
('ffa', 'aaron.dom.royan@gmail.com', '43254367', 'Yes', 2, '', ''),
('rrewtr', 'aaron.dom.royan@gmail.com', '4325', 'Yes', 2, '', ''),
('ffaeg', 'aaron.dom.royan@gmail.com', '54', 'Yes', 5, '', ''),
('ffaeg', 'aaron.dom.royan@gmail.com', '54', 'Yes', 5, '', ''),
('ffaeg', 'aaron.dom.royan@gmail.com', '54', 'Yes', 5, '', ''),
('ffaeg', 'aaron.dom.royan@gmail.com', '54', 'Yes', 5, '', ''),
('ffaeg', 'aaron.dom.royan@gmail.com', '54', 'Yes', 5, '', ''),
('ffaeg', 'aaron.dom.royan@gmail.com', '54', 'Yes', 5, '', ''),
('aaron', 'aaron.dom.royan@gmail.com', '9591771829', 'No', 5, '', ''),
('aaron', 'aaron.dom.royan@gmail.com', '9591771829', 'Yes', 2, 'http://localhost:3000/index.php', ''),
('aaron', 'aaron.dom.royan@gmail.com', '9591771829', 'Yes', 5, 'https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_math_rand', ''),
('aaron', 'aaron.dom.royan@gmail.com', '9591771829', 'Yes', 5, 'https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_math_rand', ''),
('aaron', 'studentcouncil@sjc.ac.in', '9591771829', 'Yes', 5, 'https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_math_rand', ''),
('aaron', 'ashleysusg@gmail.com', '9591771829', 'Yes', 5, 'https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_math_rand', ''),
('aaron outlook', 'aaron.dom.royan@outlook.com', '9591771829', 'No', 5, 'https://stackoverflow.com/questions/12142172/apache-shows-php-code-instead-of-executing-it', '504'),
('aaron outlook', 'aaron.dom.royan@outlook.com', '9591771829', 'No', 5, 'https://stackoverflow.com/questions/12142172/apache-shows-php-code-instead-of-executing-it', '4025'),
('aaron outlook', 'aaron.dom.royan@gmail.com', '9591771829', 'No', 5, 'https://stackoverflow.com/questions/12142172/apache-shows-php-code-instead-of-executing-it', 'NA-rand(1,10000)'),
('aaron outlook', 'aaron.dom.royan@gmail.com', '9591771829', 'No', 5, 'https://stackoverflow.com/questions/12142172/apache-shows-php-code-instead-of-executing-it', '4803');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `password`, `name`) VALUES
(1, 'team404', 'neerathon', 'The Boys/'),
(2, 'waccsjc', 'neerathon22', 'Board Members');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

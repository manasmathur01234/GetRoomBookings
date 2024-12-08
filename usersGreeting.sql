-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 04:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sno` int(25) NOT NULL,
  `Property_name` varchar(25) NOT NULL,
  `Full_name` varchar(25) NOT NULL,
  `Phone_number` int(12) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `City` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sno`, `Property_name`, `Full_name`, `Phone_number`, `Email`, `Password`, `City`) VALUES
(1, 'adore', '7654321123', 0, 'manojmathur729@gmail.com', 'manoj', ''),
(2, 'Adore', 'manas', 1234567890, 'manasmathur29@gmail.com', '12345', 'faridabad'),
(3, 'adore', '09289561567', 0, 'onlinetalky@gmail.com', 'online', 'Faridabad'),
(4, 'amit', '5656565656', 0, 'manoj@gmail.com', 'manoj', 'faridabad'),
(5, 'adore', '5656787890', 0, 'mathurm680@gmail.com', 'mns', 'gochi'),
(6, 'er', '3434343434', 0, 're@gmail.com', '123', 'goa'),
(7, 'amit', '09289561567', 0, 'mmm@gmail.com', 'mm', ''),
(8, 'adore', '09289561567', 0, 'get@gmail.com', 'get', ''),
(9, 'adore', 'Navtej Singh', 2147483647, 'give@gmail.com', 'give', ''),
(10, 'adore', 'Navtej Singh', 2147483647, 'asr@gmail.com', 'asr', ''),
(11, 'adore', 'Navtej Singh', 2147483647, 'rty@gmail.com', '$2y$10$0nkuTNq96ASgONuJv9ZenO1cSNWOcXIAccqkqNAtIxdvXoXMhZtpi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sno` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

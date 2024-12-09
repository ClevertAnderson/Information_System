-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 04:19 AM
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
-- Database: `user_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `password`, `email`, `course`, `program`) VALUES
(1, 'testing', '$2y$10$Qn/GEZVDfAW8JFiW3y4sLeCnWbK0CsrCB5lTwW7MBiOPcDzX/AQKC', '3', 'BSIT', 'WEB TRACK'),
(2, 'callme', '$2y$10$pz5.mYmOCAdmIcNWFxtrvO7gbY0BIX0l2cjqHKCLJrWbZZnuzyMue', '1', 'BSIT', 'NETWORK SECURITY'),
(3, 'failure', '$2y$10$k2M5aSQKoGTPf.G1Kb9KjepsBXi.slnnI7n11EbCtSXu9pnMciyJq', '2', 'BSIT', 'WEB TRACK'),
(4, 'test', '$2y$10$jLPUGwlh6eEMs1MjdmiEV.XijzSvt/ItnGz.TCEYYrY90TXiAjjVq', 'hello@gmail.com', '', ''),
(5, 'fest', '$2y$10$5hWujioV7RKfgBMyH4B.s.XT3x6DgjPIaFXXKjqafvPMf68QZPpoG', 'fest@gmail.com', '', ''),
(6, 'dead', '$2y$10$UGEsC3aEO9Z.iPFEjhAQO.jewOxmwZjYHLz9ePHvsY1RWKcNEGncq', 'dead@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

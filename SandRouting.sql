-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2023 at 03:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SandRouting`
--

-- --------------------------------------------------------

--
-- Table structure for table `Grain`
--

CREATE TABLE `Grain` (
  `id` int(11) NOT NULL,
  `uid` text NOT NULL,
  `redirectTo` text NOT NULL,
  `secret` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Grain`
--

INSERT INTO `Grain` (`id`, `uid`, `redirectTo`, `secret`) VALUES
(1, 'BagQaSjN', 'PageA.php', 'mWCZSJt6p'),
(2, 'YCzPTPIJ', 'PageB.php', 'N5wn4FS5x'),
(3, 'EMLKheZu', 'PageC.php', 'MsVTzQ6Q9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grain`
--
ALTER TABLE `Grain`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Grain`
--
ALTER TABLE `Grain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

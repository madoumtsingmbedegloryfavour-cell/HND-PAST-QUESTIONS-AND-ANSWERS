-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2026 at 01:05 AM
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
-- Database: `hnd_past_questions`
--
CREATE DATABASE IF NOT EXISTS `hnd_past_questions` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hnd_past_questions`;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `file`, `uploaded_at`) VALUES
(1, 'class.eddx', 'class.eddx', '2026-01-24 11:08:52'),
(2, 'Case study (HND 2025) .pdf', 'Case study (HND 2025) .pdf', '2026-01-24 11:23:40'),
(3, 'CASE STUDY 2020_ Answers.pdf', 'CASE STUDY 2020_ Answers.pdf', '2026-01-24 17:02:53'),
(4, 'CASE STUDY 2020_ Answers.pdf', 'CASE STUDY 2020_ Answers.pdf', '2026-01-24 17:03:06'),
(5, 'Case study (HND 2025) .pdf', 'Case study (HND 2025) .pdf', '2026-01-31 09:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'glory favour', 'madoumtsingmbedegloryfavour@gmail.com', '$2y$10$3nxvIEy4pKYjM2bBaCMwqOYzxYb7bBX/vqMDy/3rZsP5sIya3mEpG', '2026-02-04 09:26:51'),
(2, 'glory favour', 'blessing@gmail.com', '$2y$10$EBo6evBLNcq73GPLtqxPu.YABiCxXo56Q3mCv3Bxcie3dNpwzpa/S', '2026-02-04 10:54:48'),
(4, 'glory favour', 'glory@gmail.com', '$2y$10$aBLNK046P0l8Ksamf.tx3ubVbRczBHT6jva1CQsBNf.C/QZoeXv9e', '2026-02-04 11:07:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

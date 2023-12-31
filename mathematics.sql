-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 12:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `mathematics`
--

CREATE TABLE `mathematics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mathematics`
--

INSERT INTO `mathematics` (`id`, `fullname`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `answer10`, `created_at`, `updated_at`) VALUES
(1, 'Krishna', '105', '8metresperseconds', '$2000', '1200 square cm', '160 square metres', '3', '2', '4sides', '28squarecm', 'a-c/y', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mathematics`
--
ALTER TABLE `mathematics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mathematics`
--
ALTER TABLE `mathematics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

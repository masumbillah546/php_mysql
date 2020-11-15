-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 10:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess`
--

-- --------------------------------------------------------

--
-- Table structure for table `antor`
--

CREATE TABLE `antor` (
  `id` int(11) DEFAULT NULL,
  `bazar` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `antor`
--

INSERT INTO `antor` (`id`, `bazar`, `price`) VALUES
(NULL, 'orange', 150);

-- --------------------------------------------------------

--
-- Table structure for table `apple`
--

CREATE TABLE `apple` (
  `id` int(11) DEFAULT NULL,
  `bazar` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `id` int(11) NOT NULL,
  `apple` int(10) NOT NULL,
  `masum` int(10) NOT NULL,
  `tanvir` int(10) NOT NULL,
  `antor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`id`, `apple`, `masum`, `tanvir`, `antor`) VALUES
(2, 2, 2, 2, 2),
(3, 2, 2, 2, 1),
(12, 0, 0, 0, 0),
(30, 2, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `masum`
--

CREATE TABLE `masum` (
  `id` int(11) DEFAULT NULL,
  `bazar` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masum`
--

INSERT INTO `masum` (`id`, `bazar`, `price`) VALUES
(NULL, 'murgi', 250),
(NULL, 'potol', 30),
(NULL, 'potol', 30),
(NULL, 'alu', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tanvir`
--

CREATE TABLE `tanvir` (
  `id` int(11) DEFAULT NULL,
  `bazar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antor`
--
ALTER TABLE `antor`
  ADD KEY `id` (`id`);

--
-- Indexes for table `apple`
--
ALTER TABLE `apple`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `masum`
--
ALTER TABLE `masum`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tanvir`
--
ALTER TABLE `tanvir`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 09:05 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registracija`
--

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `id` int(11) NOT NULL,
  `ime` varchar(100) COLLATE utf16_croatian_ci NOT NULL,
  `prezime` varchar(100) COLLATE utf16_croatian_ci NOT NULL,
  `ulica` varchar(100) COLLATE utf16_croatian_ci NOT NULL,
  `grad` varchar(100) COLLATE utf16_croatian_ci NOT NULL,
  `datum` date DEFAULT NULL,
  `email` varchar(150) COLLATE utf16_croatian_ci NOT NULL,
  `username` varchar(100) COLLATE utf16_croatian_ci NOT NULL,
  `password1` varchar(100) COLLATE utf16_croatian_ci NOT NULL,
  `password2` varchar(100) COLLATE utf16_croatian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`id`, `ime`, `prezime`, `ulica`, `grad`, `datum`, `email`, `username`, `password1`, `password2`) VALUES
(1, 'Marko', 'Markic', 'Markoviceva 55 ', 'Zagreb', '2023-01-02', 'marko@markic.gmail', 'mmakrec', 'markomarko', 'markomarko'),
(17, 'Ana', 'Anić', 'Rječka 15', 'Rijeka', '2005-05-04', 'ana@gail.com', 'aana', 'anaanic2023', 'anaanic2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

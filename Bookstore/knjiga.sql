-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 09:04 AM
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
-- Database: `knjiga`
--

-- --------------------------------------------------------

--
-- Table structure for table `knjiga`
--

CREATE TABLE `knjiga` (
  `id` int(11) NOT NULL,
  `naziv` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `cijena` double NOT NULL,
  `fotografija` varchar(100) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `knjiga`
--

INSERT INTO `knjiga` (`id`, `naziv`, `cijena`, `fotografija`) VALUES
(1, 'Zli kralj', 6.99, 'kralj.jpg'),
(2, 'Okrutni princ', 5.99, 'okrutni.jpg'),
(3, 'Patuljci', 3.99, 'patuljci.jpg'),
(4, 'Kuharica za mlade chefove', 9.99, 'kuharica.jpg'),
(5, 'Klimatske promjene', 8.99, 'klima.jpg'),
(6, 'Vrtlarenje za malu djecu', 5.99, 'vrt.jpg'),
(7, 'Sve o Anne Frank', 6.99, 'anne.jpg'),
(8, 'Volim pse', 4.99, 'psi.jpg'),
(9, 'Art', 4.99, 'art.jpg'),
(10, 'Hakeri', 7.99, 'hakeri.jpg'),
(11, 'Korak po korak', 6.99, 'korak.jpg'),
(12, 'Samo igra', 5.99, 'igra.jpg'),
(13, 'Dnevnik gradske cure', 8.99, 'dnevnik.jpg'),
(14, 'Sanjarenje o konjima', 7.99, 'konji.jpg'),
(15, 'Bonton za djecu i mlade', 9.99, 'bonton.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knjiga`
--
ALTER TABLE `knjiga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knjiga`
--
ALTER TABLE `knjiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

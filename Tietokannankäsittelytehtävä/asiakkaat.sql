-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 06:18 AM
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
-- Database: `asiakkaat`
--

-- --------------------------------------------------------

--
-- Table structure for table `taulu1`
--

CREATE TABLE `taulu1` (
  `id` int(11) NOT NULL,
  `sukunimi` varchar(50) NOT NULL,
  `etunimi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `salasana` varchar(50) NOT NULL,
  `tiedot` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taulu1`
--

INSERT INTO `taulu1` (`id`, `sukunimi`, `etunimi`, `email`, `login`, `salasana`, `tiedot`) VALUES
(1, 'mathi', 'abc', 'abc@gmail.com', 'inba', '123inba', 'hi terve!'),
(2, 'rani', 'inba', 'rani@gmail.com', 'rani', '123rani', 'hi Rani!');

-- --------------------------------------------------------

--
-- Table structure for table `taulu2`
--

CREATE TABLE `taulu2` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `salasana` varchar(50) NOT NULL,
  `etunimi` varchar(50) NOT NULL,
  `sukunimi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taulu2`
--

INSERT INTO `taulu2` (`id`, `login`, `salasana`, `etunimi`, `sukunimi`, `email`) VALUES
(4, 'inba', '123inba', 'inba', 'rani', 'inba@gmail.com'),
(2, 'rani', '123rani', 'Rani', 'Inba', 'rani@gmail.com'),
(3, 'abc', '123abc', 'abc', 'def', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `viestit`
--

CREATE TABLE `viestit` (
  `id` int(11) NOT NULL,
  `pvm` date NOT NULL,
  `nimi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `viesti` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viestit`
--

INSERT INTO `viestit` (`id`, `pvm`, `nimi`, `email`, `viesti`) VALUES
(4, '2023-10-26', 'RST', 'rst@gmail.com', 'Hi Rst!'),
(2, '2023-10-22', 'rani', 'rani@gmail.com', 'Hi \'rani!'),
(3, '2023-10-23', 'Inbarani ', 'krishna@gmail.com', 'hi inba'),
(5, '2023-10-23', 'John Doe', 'john@example.com', 'Hi John!'),
(6, '2023-10-25', 'Rocky', 'rocky@gmail.com', 'Hi Rocky!'),
(7, '2023-10-23', 'John Doe', 'john@example.com', 'Hi John!'),
(8, '2023-10-23', 'John Doe', 'john@example.com', 'Hi John!'),
(9, '2023-10-23', 'John Doe', 'john@example.com', 'Hi John!'),
(10, '2023-10-25', 'PMR', 'pmr@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taulu1`
--
ALTER TABLE `taulu1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taulu2`
--
ALTER TABLE `taulu2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viestit`
--
ALTER TABLE `viestit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taulu1`
--
ALTER TABLE `taulu1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `taulu2`
--
ALTER TABLE `taulu2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `viestit`
--
ALTER TABLE `viestit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

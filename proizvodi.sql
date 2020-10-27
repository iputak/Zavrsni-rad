-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 12:22 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strongdor`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `Id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Naziv` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Vrsta` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Boja` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Gramaza` int(3) NOT NULL,
  `Natpis` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Cijena` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`Id`, `Naziv`, `Vrsta`, `Boja`, `Gramaza`, `Natpis`, `Cijena`) VALUES
('1', 'Eat big, lift big, get big', 'kratke', 'Pepeljasto siva', 160, 'Eat big, lift big, get big', 80),
('2', 'Problem? Riješen!', 'kratke', 'Crna', 160, 'Problem? Riješen!', 80),
('3', 'Strongdor', 'kratke', 'Plava', 160, 'Strongdor | Osjeti snagu svoga tijela', 80),
('4', 'The gym', 'kratke', 'Crna', 160, 'The gym', 80),
('5', 'Train hard', 'kratke', 'Crna', 160, 'Train hard | No excuses', 80),
('6', 'Today I shape me!', 'kratke', 'Bijela', 160, 'Today I shape me!', 80),
('7', 'Train hard', 'duge', 'Crna', 300, 'Train hard | No excuses', 200),
('8', 'Commitment', 'salice', 'bijela', 300, 'Commitment', 35),
('9', 'Train hard', 'salice', 'bijela', 300, 'Train hard', 35);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

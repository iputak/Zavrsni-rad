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
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `Ime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Prezime` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Adresa` mediumtext CHARACTER SET utf8 NOT NULL,
  `Grad` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Post_broj` int(6) NOT NULL,
  `Telefon` int(10) NOT NULL,
  `Email` mediumtext CHARACTER SET utf8 NOT NULL,
  `Zaporka` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_mysql561_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`Ime`, `Prezime`, `Adresa`, `Grad`, `Post_broj`, `Telefon`, `Email`, `Zaporka`) VALUES
('Ivan', 'Putak', 'GraÄaki 16', 'Zagreb', 10360, 917644529, 'iputak@hotmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

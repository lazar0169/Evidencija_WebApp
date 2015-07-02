-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2015 at 10:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evidencija`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanarine`
--

CREATE TABLE IF NOT EXISTS `clanarine` (
  `cena` int(6) NOT NULL,
  `idKorisnika` int(6) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clanarine`
--

INSERT INTO `clanarine` (`cena`, `idKorisnika`, `datum`) VALUES
(1500, 8, '2015-06-18'),
(6666, 8, '2015-06-17'),
(16000, 11, '2015-06-19'),
(16000, 11, '2015-06-19'),
(1, 11, '2015-06-12'),
(2, 13, '2015-06-13'),
(2, 11, '2015-06-13'),
(3, 12, '2015-06-05'),
(2, 12, '2015-06-05'),
(2, 12, '2015-06-04'),
(3, 12, '2015-06-02'),
(1, 12, '2015-06-05'),
(7, 12, '2015-06-05'),
(10, 12, '2015-06-11'),
(4, 12, '2015-06-11'),
(4, 12, '2015-06-18'),
(5, 11, '2015-06-04'),
(43243, 15, '2015-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `tezina` int(4) NOT NULL,
  `visina` int(4) NOT NULL,
  `datumRodj` date NOT NULL,
  `pol` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `tezina`, `visina`, `datumRodj`, `pol`) VALUES
(2, 'hg', 'gfdg', 43, 34, '0000-00-00', 'Z'),
(8, 'Lazar', 'Manasijevic', 415, 184, '2014-05-21', 'M'),
(10, 'jajaj', 'titi', 12, 418, '2015-06-05', 'M'),
(11, 'aaaaaa', 'bbbbbbb', 9, 1, '2015-06-03', 'M'),
(12, 'neki', 'tamo', 23, 2, '2015-06-03', 'M'),
(13, 'erwe', 'ewrwerw', 342, 3432, '2015-06-03', 'M'),
(14, 'jos', 'jedan', 3432, 2131, '1992-02-18', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `merenje`
--

CREATE TABLE IF NOT EXISTS `merenje` (
  `tezina` int(4) NOT NULL,
  `visina` int(4) NOT NULL,
  `idKorisnika` int(7) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merenje`
--

INSERT INTO `merenje` (`tezina`, `visina`, `idKorisnika`, `datum`) VALUES
(78, 156, 3, '2015-06-10'),
(213, 235, 2, '2015-06-03'),
(251, 152, 8, '0000-00-00'),
(122, 222, 8, '2015-06-03'),
(111, 23, 8, '2015-06-09'),
(333, 222, 8, '2015-06-06'),
(888, 333, 8, '2015-06-29'),
(2, 1, 12, '2015-06-03'),
(23, 2, 12, '2015-06-03'),
(5, 2, 11, '2015-06-19'),
(5, 2, 11, '2015-06-19'),
(2, 2, 11, '2015-06-19'),
(3, 3, 11, '2015-06-03'),
(9, 1, 11, '2015-06-10'),
(4324, 3243, 15, '2015-06-03'),
(5465, 5465, 8, '2015-06-10'),
(415, 184, 8, '2015-06-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 06:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agromobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `idKategorija` int(11) NOT NULL,
  `TypeofCategory` int(5) NOT NULL,
  `NameOfCategory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`idKategorija`, `TypeofCategory`, `NameOfCategory`) VALUES
(1, 5, 'Puhalniki'),
(2, 2, 'Kosilnice'),
(3, 3, 'Motorne žage'),
(4, 4, 'Brisalci'),
(5, 1, 'Akumulatorji');

-- --------------------------------------------------------

--
-- Table structure for table `partnerji`
--

CREATE TABLE `partnerji` (
  `idPartner` int(11) NOT NULL,
  `ImePartnerja` varchar(250) NOT NULL,
  `WebCon` varchar(250) NOT NULL,
  `imgPotPartner` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partnerji`
--

INSERT INTO `partnerji` (`idPartner`, `ImePartnerja`, `WebCon`, `imgPotPartner`) VALUES
(2, 'Pasquali', 'https://pasqualiagri.com/en-150/', 'slike/sidebarslike/pasquali.png'),
(3, 'Echo', 'https://www.echo-usa.com/home/', 'slike/sidebarslike/echo.png'),
(4, 'Husquarna', 'https://www.husqvarna.com/si/?gad_source=1', 'slike/sidebarslike/Husqvarna_logo.png'),
(12, 'Bcs', 'https://bcsgroup.it/en-150/', 'slike/sidebarslike/bcs.png');

-- --------------------------------------------------------

--
-- Table structure for table `trgovina`
--

CREATE TABLE `trgovina` (
  `idIzdelka` int(11) NOT NULL,
  `NameIzdelek` varchar(250) NOT NULL,
  `VrstaKategorije` int(11) NOT NULL,
  `DatumVnosa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Cena` float NOT NULL,
  `imgpath` varchar(250) NOT NULL,
  `pathweb` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trgovina`
--

INSERT INTO `trgovina` (`idIzdelka`, `NameIzdelek`, `VrstaKategorije`, `DatumVnosa`, `Cena`, `imgpath`, `pathweb`) VALUES
(1, 'ECHO CS 8010 ES X', 5, '2023-11-13 15:48:27', 50, 'slike/kosilniceslike/kosilnicaecho2.jpg', 'trgovina.php'),
(2, 'Puhalnik', 2, '2023-11-13 17:11:45', 25, 'slike/kosilniceslike/kosilnicaecho1.jpg', 'trgovina.php'),
(3, 'ECHO kosilnica x235', 2, '2023-11-13 17:11:48', 24, 'slike/kosilniceslike/echo3.jpg', 'trgovina.php'),
(4, 'Kosilnica ECHO x2345', 5, '2023-11-13 17:11:51', 75, 'slike/kosilniceslike/echo4.jpg', 'trgovina.php'),
(5, 'Motorna žaga Husquarna', 3, '2023-11-13 17:11:54', 150, 'slike/kosilniceslike/pasquali.jpg', 'trgovina.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `email`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`idKategorija`);

--
-- Indexes for table `partnerji`
--
ALTER TABLE `partnerji`
  ADD PRIMARY KEY (`idPartner`);

--
-- Indexes for table `trgovina`
--
ALTER TABLE `trgovina`
  ADD PRIMARY KEY (`idIzdelka`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `idKategorija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partnerji`
--
ALTER TABLE `partnerji`
  MODIFY `idPartner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trgovina`
--
ALTER TABLE `trgovina`
  MODIFY `idIzdelka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

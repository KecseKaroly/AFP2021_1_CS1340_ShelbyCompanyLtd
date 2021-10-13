-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 07:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pls`
--

-- --------------------------------------------------------

--
-- Table structure for table `alkalmazott`
--

CREATE TABLE `alkalmazott` (
  `id` int(11) NOT NULL,
  `teljesnev` varchar(60) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `felhasznalonev` varchar(40) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `jelszo` varchar(40) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `jog` varchar(30) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `alkalmazott`
--

INSERT INTO `alkalmazott` (`id`, `teljesnev`, `felhasznalonev`, `jelszo`, `jog`) VALUES
(0, ' - ', '', '', ''),
(1, 'Proba Dolgozo', 'ProbaDolgozo', '7773cd7f6c264debbc17f124380644d4', 'dolgozo'),
(2, 'Proba Futar', 'ProbaFutar', 'ad2b101f0a3e7cf2178854b64908bb51', 'futar'),
(3, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(8, 'Proba Dolgozo Masodik', 'ProbaDolgozo2', '49c5fc2f6d8fcafafe3ce214035277b9', 'dolgozo'),
(9, 'Proba Futar Masodik', 'ProbaFutar2', 'f6dcf3adfb7ba46a95f73689abdbe611', 'futar'),
(10, 'Proba Felvivo', 'ProbaFelvivo', '706c98b1d9e9fe447b155a5872b63002', 'felvivo');

-- --------------------------------------------------------

--
-- Table structure for table `cimzett`
--

CREATE TABLE `cimzett` (
  `id` int(11) NOT NULL,
  `nev` varchar(40) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `lakcim` varchar(60) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `telefonszam` varchar(13) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `cimzett`
--

INSERT INTO `cimzett` (`id`, `nev`, `lakcim`, `telefonszam`, `email`) VALUES
(1, 'Minta Márton', 'Próbafalva, Minta u 12', '0611111111', 'teszt@plsdepot.com'),
(2, 'Nagy Picúr', 'Budapest Próba urca 58', '061111111', 'nagypicur@proba.com');

-- --------------------------------------------------------

--
-- Table structure for table `csomag_elokeszites`
--

CREATE TABLE `csomag_elokeszites` (
  `megbizasid` int(11) NOT NULL,
  `alkalmazottid` int(11) NOT NULL,
  `fazis` int(11) NOT NULL,
  `fazisKesz` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `csomag_elokeszites`
--

INSERT INTO `csomag_elokeszites` (`megbizasid`, `alkalmazottid`, `fazis`, `fazisKesz`) VALUES
(1, 8, 1, 1),
(1, 1, 2, 1),
(1, 1, 3, 1),
(1, 9, 4, 1),
(1, 0, 5, 0),
(2, 1, 1, 0),
(9, 8, 1, 1),
(9, 8, 2, 1),
(9, 0, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kiszallitas`
--

CREATE TABLE `kiszallitas` (
  `megbizasid` int(11) NOT NULL,
  `kiszallito` int(11) NOT NULL,
  `datum` date NOT NULL,
  `fizetes_formaja` varchar(30) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `sikeres` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `kiszallitas`
--

INSERT INTO `kiszallitas` (`megbizasid`, `kiszallito`, `datum`, `fizetes_formaja`, `sikeres`) VALUES
(1, 2, '2021-10-04', 'Készpénz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `megbizas`
--

CREATE TABLE `megbizas` (
  `id` int(11) NOT NULL,
  `megnevezes` varchar(40) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `suly` int(11) NOT NULL,
  `ar` int(11) NOT NULL,
  `feladas_datum` date NOT NULL,
  `cimzettid` int(11) NOT NULL,
  `partnercegid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `megbizas`
--

INSERT INTO `megbizas` (`id`, `megnevezes`, `suly`, `ar`, `feladas_datum`, `cimzettid`, `partnercegid`) VALUES
(1, 'Próba Termék', 2, 1600, '2021-10-01', 1, 4),
(2, 'APróbaTermék2', 13, 6598, '2021-10-07', 2, 2),
(6, 'PróbaTermék3', 100, 100, '2021-10-09', 1, 5),
(7, 'PróbaTermék4', 100, 100, '2021-10-09', 2, 5),
(9, 'PróbaTermék5', 99, 99, '2021-10-09', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `partnercegek`
--

CREATE TABLE `partnercegek` (
  `id` int(11) NOT NULL,
  `nev` varchar(40) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `cim` varchar(60) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `partnercegek`
--

INSERT INTO `partnercegek` (`id`, `nev`, `cim`) VALUES
(1, 'BestGigabyte', 'DingDong, BestGig u. 23'),
(2, 'eMeg', 'DongDing, eMeg u. 4'),
(3, 'MédiaMárk', 'Sihuhu, Media u. 9'),
(4, 'Alza', 'Suhihu, Alza u 5'),
(5, 'Second Shop', 'Suhaha, Second u 11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alkalmazott`
--
ALTER TABLE `alkalmazott`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cimzett`
--
ALTER TABLE `cimzett`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csomag_elokeszites`
--
ALTER TABLE `csomag_elokeszites`
  ADD PRIMARY KEY (`megbizasid`,`fazis`),
  ADD KEY `fk_alkalmazott_csomagelo` (`alkalmazottid`);

--
-- Indexes for table `kiszallitas`
--
ALTER TABLE `kiszallitas`
  ADD PRIMARY KEY (`megbizasid`),
  ADD KEY `fk_alkalmazott_kiszallitas` (`kiszallito`);

--
-- Indexes for table `megbizas`
--
ALTER TABLE `megbizas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_partnercegek_megbizas` (`partnercegid`),
  ADD KEY `fk_cimzett_megbizas` (`cimzettid`);

--
-- Indexes for table `partnercegek`
--
ALTER TABLE `partnercegek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alkalmazott`
--
ALTER TABLE `alkalmazott`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cimzett`
--
ALTER TABLE `cimzett`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kiszallitas`
--
ALTER TABLE `kiszallitas`
  MODIFY `megbizasid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `megbizas`
--
ALTER TABLE `megbizas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partnercegek`
--
ALTER TABLE `partnercegek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `csomag_elokeszites`
--
ALTER TABLE `csomag_elokeszites`
  ADD CONSTRAINT `fk_alkalmazott_csomagelo` FOREIGN KEY (`alkalmazottid`) REFERENCES `alkalmazott` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_megbizas_csomagelo` FOREIGN KEY (`megbizasid`) REFERENCES `megbizas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kiszallitas`
--
ALTER TABLE `kiszallitas`
  ADD CONSTRAINT `fk_alkalmazott_kiszallitas` FOREIGN KEY (`kiszallito`) REFERENCES `alkalmazott` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_megbizas_kiszallitas` FOREIGN KEY (`megbizasid`) REFERENCES `megbizas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `megbizas`
--
ALTER TABLE `megbizas`
  ADD CONSTRAINT `fk_cimzett_megbizas` FOREIGN KEY (`cimzettid`) REFERENCES `cimzett` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_partnercegek_megbizas` FOREIGN KEY (`partnercegid`) REFERENCES `partnercegek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

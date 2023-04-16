-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 01. bře 2023, 00:23
-- Verze serveru: 10.4.22-MariaDB
-- Verze PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `maturita`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `poptavky`
--

CREATE TABLE `poptavky` (
  `poptavkaID` int(11) NOT NULL,
  `datum_poptavky` date DEFAULT NULL,
  `jmeno` varchar(255) DEFAULT NULL,
  `prijmeni` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sluzba` varchar(255) DEFAULT NULL,
  `zprava` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `poptavky`
--

INSERT INTO `poptavky` (`poptavkaID`, `datum_poptavky`, `jmeno`, `prijmeni`, `telefon`, `email`, `sluzba`, `zprava`) VALUES
(1, '2023-01-10', 'Andea', 'Králová', '60315 22 54', 'kralova.a@seznam.cz', 'STK', 'šlo by to někdy mezi 15. a 20. červnem?'),
(2, '2023-01-29', 'Radek', 'Valach', '77756 42 13', 'valach.radek@gmail.com', 'geometrie', 'mohly by jste ´to prosím udělat na počkání?'),
(3, '2023-02-14', 'Alena', 'Rokytníková', '73495 64 12', 'alena.rokytnikova@email.cz', 'pneumatiky', 'mám vlastní pneumatiky, stačí přezout');

-- --------------------------------------------------------

--
-- Struktura tabulky `seznam_aut`
--

CREATE TABLE `seznam_aut` (
  `autoID` int(11) NOT NULL,
  `poptavkaID` int(11) DEFAULT NULL,
  `znacka` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `rok` int(11) DEFAULT NULL,
  `palivo` varchar(255) DEFAULT NULL,
  `objem` varchar(255) DEFAULT NULL,
  `zaloha` int(11) DEFAULT NULL,
  `pujcovne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `seznam_aut`
--

INSERT INTO `seznam_aut` (`autoID`, `poptavkaID`, `znacka`, `model`, `rok`, `palivo`, `objem`, `zaloha`, `pujcovne`) VALUES
(1, 1, 'Škoda', 'Fabia', 2012, 'benzín', '0.1Vl', 300, 7000),
(2, 2, 'Škoda', 'Octavia II', 2010, 'diesel', '2.0', 700, 11000),
(3, 3, 'Škoda', 'Kodiaq', 2019, 'diesel', '2.0', 900, 14000);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `poptavky`
--
ALTER TABLE `poptavky`
  ADD PRIMARY KEY (`poptavkaID`);

--
-- Indexy pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  ADD PRIMARY KEY (`autoID`),
  ADD KEY `poptavkaID` (`poptavkaID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `poptavky`
--
ALTER TABLE `poptavky`
  MODIFY `poptavkaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  MODIFY `autoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  ADD CONSTRAINT `seznam_aut_ibfk_1` FOREIGN KEY (`poptavkaID`) REFERENCES `poptavky` (`poptavkaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

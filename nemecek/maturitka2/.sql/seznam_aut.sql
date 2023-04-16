-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 02. bře 2023, 18:07
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
-- Struktura tabulky `seznam_aut`
--

CREATE TABLE `seznam_aut` (
  `ID_auta` int(11) NOT NULL,
  `znacka` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `rok` varchar(255) NOT NULL,
  `palivo` varchar(255) NOT NULL,
  `objem` varchar(255) NOT NULL,
  `zaloha` int(11) NOT NULL,
  `pujcovne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `seznam_aut`
--

INSERT INTO `seznam_aut` (`ID_auta`, `znacka`, `model`, `rok`, `palivo`, `objem`, `zaloha`, `pujcovne`) VALUES
(1, 'Škoda', 'Fabia', '2012', 'benzín', '1.6', 300, 7000),
(2, 'Škoda', 'Octavia II', '2010', 'diesel', '2.0', 700, 11000),
(3, 'Škoda', 'Kodiaq', '2019', 'diesel', '2.0', 900, 14000);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  ADD PRIMARY KEY (`ID_auta`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  MODIFY `ID_auta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

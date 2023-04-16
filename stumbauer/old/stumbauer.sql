-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Sob 25. bře 2023, 16:08
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
-- Databáze: `seznam_aut`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `poptavky`
--

CREATE TABLE `poptavky` (
  `jmeno` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `telefon` text COLLATE utf8_czech_ci NOT NULL,
  `sluzba` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `zprava` varchar(255) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `poptavky`
--

INSERT INTO `poptavky` (`jmeno`, `email`, `telefon`, `sluzba`, `zprava`) VALUES
('Králová Andea', 'kralova.a@seznam.cz', '60315 22 54', 'STK', 'šlo by to někdy mezi 15. a 20. červnem?'),
('Radek Valach', 'valach.radek@gmail.com', '77756 42 13', 'geometrie', 'mohly by jste to prosím udělat na počkání?'),
('Alena Rokytníková', 'alena.rokytnikova@email.cz', '73495 64 12', 'pneumatiky', 'mám vlastní pneumatiky, stačí přezout'),
('Matěj', 'jiricka@seznam.cz', '123 456 789', 'stk', 'TOKYO DRIFT STK ZAPLACENO');

-- --------------------------------------------------------

--
-- Struktura tabulky `seznam_aut`
--

CREATE TABLE `seznam_aut` (
  `id` int(11) NOT NULL,
  `znacka` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `model` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `rok` year(4) NOT NULL,
  `palivo` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `objem` text COLLATE utf8_czech_ci NOT NULL,
  `zaloha` int(11) NOT NULL,
  `pujcovne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `seznam_aut`
--

INSERT INTO `seznam_aut` (`id`, `znacka`, `model`, `rok`, `palivo`, `objem`, `zaloha`, `pujcovne`) VALUES
(1, 'Škoda', 'Fabia', 2012, 'benzín', '01.VI', 300, 7000),
(2, 'Škoda', 'Octavia II', 2010, 'diesel', '2.0', 700, 11000),
(3, 'Škoda', 'Kodiaq', 2019, 'diesel', '2.0', 900, 14000);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

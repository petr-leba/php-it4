-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 04. dub 2023, 19:32
-- Verze serveru: 10.4.27-MariaDB
-- Verze PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `poptavky`
--

CREATE TABLE `poptavky` (
  `jmeno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `sluzba` varchar(255) NOT NULL,
  `zprava` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `poptavky`
--

INSERT INTO `poptavky` (`jmeno`, `email`, `telefon`, `sluzba`, `zprava`) VALUES
('Králová Andea', 'kralova.a@seznam.cz', '60315 22 54', 'STK', 'šlo by to někdy mezi 15. a 20. červnem?'),
('Radek Valach', 'valach.radek@gmail.com', '77756 42 13', 'geometrie', 'mohly by jste to prosím udělat na počkání?'),
('Alena Rokytníková', 'alena.rokytnikova@email.cz', '73495 64 12', 'pneumatiky', 'mám vlastní pneumatiky, stačí přezout'),
('Bob', 'bobek@nevim.com', '222111333', 'geometrie', 'ahojahojahoj');

-- --------------------------------------------------------

--
-- Struktura tabulky `seznam_aut`
--

CREATE TABLE `seznam_aut` (
  `znacka` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `rok` year(4) NOT NULL,
  `palivo` varchar(255) NOT NULL,
  `objem` varchar(255) NOT NULL,
  `zaloha` int(11) NOT NULL,
  `pujcovne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `seznam_aut`
--

INSERT INTO `seznam_aut` (`znacka`, `model`, `rok`, `palivo`, `objem`, `zaloha`, `pujcovne`) VALUES
('Škoda', 'Fabia', 2012, 'benzín', '01.VI', 300, 7000),
('Škoda', 'Octavia II', 2010, 'diesel', '2.0', 700, 11000),
('Škoda', 'Kodiaq', 2019, 'diesel', '2.0', 900, 14000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

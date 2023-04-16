-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 30. bře 2023, 23:44
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
-- Databáze: `odjedete_po_ctyrech`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `poptavky`
--

CREATE TABLE `poptavky` (
  `id` int(11) NOT NULL,
  `datum_poptavky` timestamp NOT NULL DEFAULT current_timestamp(),
  `jmeno` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `sluzba` varchar(50) NOT NULL,
  `zprava` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Vypisuji data pro tabulku `poptavky`
--

INSERT INTO `poptavky` (`id`, `datum_poptavky`, `jmeno`, `email`, `telefon`, `sluzba`, `zprava`) VALUES
(1, '2023-03-29 14:37:09', 'Králová Andea', 'kralova.a@seznam.cz', '60315 22 54', 'STK', 'šlo by to někdy mezi 15. a 20. červnem?'),
(2, '2023-03-29 14:37:09', 'Radek Valach', 'valach.radek@gmail.com', '77756 42 13', 'geometrie', 'mohly by jste to prosím udělat na počkání?'),
(3, '2023-03-29 14:37:09', 'Alena Rokytníková', 'alena.rokytnikova@email.cz', '73495 64 12', 'pneumatiky', 'mám vlastní pneumatiky, stačí přezout'),
(4, '2023-03-30 19:13:47', 'Patrik Le', 'patikleuv@gmail.com', '775182186', 'vymena pneumatik', 'najel jsem na ostrůvek a už to nejelo :('),
(5, '2023-03-30 19:14:26', 'Jan Sloup', 'sloup.jan@post.cz', '720276720', 'mereni emisi', 'moc plynů, jedl jsem fazole');

-- --------------------------------------------------------

--
-- Struktura tabulky `seznam_aut`
--

CREATE TABLE `seznam_aut` (
  `id` int(11) NOT NULL,
  `znacka` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `rok` year(4) NOT NULL,
  `palivo` varchar(20) NOT NULL,
  `objem` varchar(20) NOT NULL,
  `zaloha` int(11) NOT NULL,
  `pujcovne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Vypisuji data pro tabulku `seznam_aut`
--

INSERT INTO `seznam_aut` (`id`, `znacka`, `model`, `rok`, `palivo`, `objem`, `zaloha`, `pujcovne`) VALUES
(1, 'Škoda', 'Fabia', 2012, 'benzín', '1.6', 300, 7000),
(2, 'Škoda', 'Octavia II', 2010, 'diesel', '2.0', 700, 11000),
(3, 'Škoda', 'Kodiaq', 2019, 'diesel', '2.0', 900, 14000);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `poptavky`
--
ALTER TABLE `poptavky`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `poptavky`
--
ALTER TABLE `poptavky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pro tabulku `seznam_aut`
--
ALTER TABLE `seznam_aut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

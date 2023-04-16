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
-- Struktura tabulky `poptavky`
--

CREATE TABLE `poptavky` (
  `ID_poptavky` int(11) NOT NULL,
  `jmeno` varchar(255) NOT NULL,
  `prijmeni` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sluzba` varchar(255) NOT NULL,
  `zprava` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `poptavky`
--

INSERT INTO `poptavky` (`ID_poptavky`, `jmeno`, `prijmeni`, `telefon`, `email`, `sluzba`, `zprava`) VALUES
(1, 'Andrea', 'Králová', '603 152 254', 'kralova.a@seznam.cz', 'STK', 'šlo by to někdy mezi 15. a 20. červnem?'),
(2, 'Radek', 'Valach', '777 564 213', 'valach.radek@gmail.com', 'geometrie', 'mohl by jste to prosím udělat na počkání?'),
(3, 'Alena', 'Rokytníková', '734 956 412', 'alena.rokytnikova@email.cz', 'pneumatiky', 'mám, vlastní pneumatiky, stačí přezout'),
(4, 'Jan', 'Novák', '789 987 654', 'novak.jan@seznam.cz', 'prohlidka', 'Nějak mi chrčí motor, koukněte mi na to prosím.');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `poptavky`
--
ALTER TABLE `poptavky`
  ADD PRIMARY KEY (`ID_poptavky`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `poptavky`
--
ALTER TABLE `poptavky`
  MODIFY `ID_poptavky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

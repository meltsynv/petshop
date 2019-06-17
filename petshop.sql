-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Jun 2019 um 21:24
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `petshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bewertungen`
--

CREATE TABLE `bewertungen` (
  `ID` int(11) NOT NULL,
  `Kommentar` text COLLATE utf16_german2_ci NOT NULL,
  `Note` float(10,0) NOT NULL,
  `Datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `User` varchar(50) COLLATE utf16_german2_ci NOT NULL DEFAULT 'Unbekannt'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_german2_ci;

--
-- Daten für Tabelle `bewertungen`
--

INSERT INTO `bewertungen` (`ID`, `Kommentar`, `Note`, `Datum`, `User`) VALUES
(1, 'Super Leine!', 4, '2019-06-16 12:09:08', 'Unbekannt'),
(1, 'Schönes Blau!', 3, '2019-06-16 13:03:15', 'Unbekannt'),
(1, 'Ganz toll.', 4, '2019-06-17 13:17:50', 'Unbekannt'),
(1, 'Nicht ueberzeugt', 1, '2019-06-17 13:24:57', 'Unbekannt'),
(2, 'Toll...', 6, '2019-06-17 13:37:58', 'Unbekannt');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkte`
--

CREATE TABLE `produkte` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf16_german2_ci NOT NULL,
  `Preis` int(11) NOT NULL,
  `Stueck` int(11) NOT NULL,
  `Bild` text COLLATE utf16_german2_ci NOT NULL,
  `Beschreibung` text COLLATE utf16_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_german2_ci;

--
-- Daten für Tabelle `produkte`
--

INSERT INTO `produkte` (`ID`, `Name`, `Preis`, `Stueck`, `Bild`, `Beschreibung`) VALUES
(1, 'Leine', 15, 20, 'img/hundeleine1.jpg', 'Blaue Leine'),
(2, 'Katzenleine', 13, 12, 'img/cat-1373903_640.jpg', 'Rote Katzenleine. 75%Baumwolle');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `Vorname` text COLLATE utf16_german2_ci NOT NULL,
  `Nachname` text COLLATE utf16_german2_ci NOT NULL,
  `Email` text COLLATE utf16_german2_ci NOT NULL,
  `Username` text COLLATE utf16_german2_ci NOT NULL,
  `Passwort` text COLLATE utf16_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_german2_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`Vorname`, `Nachname`, `Email`, `Username`, `Passwort`) VALUES
('Nadine', 'Beka', 'nadine@beka', 'Nadine', '1234'),
('Viktor', 'Meltsyn', 'meltsyn@bla', 'vvv', '1234');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Username` (`Username`(20)) KEY_BLOCK_SIZE=20;

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `produkte`
--
ALTER TABLE `produkte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

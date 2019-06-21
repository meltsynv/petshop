-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Jun 2019 um 19:25
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
  `User` varchar(50) COLLATE utf16_german2_ci NOT NULL DEFAULT 'Unbekannt',
  `isBought` varchar(30) COLLATE utf16_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_german2_ci;

--
-- Daten für Tabelle `bewertungen`
--

INSERT INTO `bewertungen` (`ID`, `Kommentar`, `Note`, `Datum`, `User`, `isBought`) VALUES
(1, 'Schönes Blau!', 3, '2019-06-16 13:03:15', 'Unbekannt', ''),
(1, 'Nicht ueberzeugt', 1, '2019-06-17 13:24:57', 'Unbekannt', ''),
(1, 'Ganz toll!', 2, '2019-06-18 14:17:26', 'Unbekannt', ''),
(3, 'Ganz toll.', 2, '2019-06-19 12:59:03', 'Nadine', 'wurde von Nutzer gekauft'),
(1, 'Super', 1, '2019-06-19 20:52:21', 'Nadine', 'wurde von Nutzer gekauft'),
(3, 'Juhu', 1, '2019-06-19 21:04:40', 'vvv', 'wurde von Nutzer gekauft'),
(3, 'Rot.', 3, '2019-06-19 21:44:29', 'Unbekannt', ''),
(4, 'Mein Hund liebt diese Kekse.', 1, '2019-06-20 19:34:45', 'ally', 'wurde von Nutzer gekauft'),
(4, 'Meine Freundin hat uns die geschenkt, leider vertrÃ¤gt mein Hund die nicht so gut.', 4, '2019-06-20 19:38:57', 'Lulu', 'wurde von Nutzer gekauft'),
(3, 'Leider schnell kaputt gegangen.', 5, '2019-06-20 19:43:41', 'Unbekannt', ''),
(5, 'Sieht toll aus', 3, '2019-06-21 12:45:39', 'Lulu', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kaeufe`
--

CREATE TABLE `kaeufe` (
  `ArtikelID` int(11) NOT NULL,
  `Username` text COLLATE utf16_german2_ci NOT NULL,
  `Datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_german2_ci;

--
-- Daten für Tabelle `kaeufe`
--

INSERT INTO `kaeufe` (`ArtikelID`, `Username`, `Datum`) VALUES
(1, 'Nadine', '2019-06-19 20:32:51'),
(3, 'Nadine', '2019-06-19 20:32:57'),
(5, 'ally', '2019-06-20 19:35:30'),
(4, 'ally', '2019-06-20 19:35:37');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkte`
--

CREATE TABLE `produkte` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf16_german2_ci NOT NULL,
  `Preis` int(11) NOT NULL,
  `Stueck` int(11) UNSIGNED NOT NULL,
  `Bild` text COLLATE utf16_german2_ci NOT NULL,
  `Beschreibung` text COLLATE utf16_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_german2_ci;

--
-- Daten für Tabelle `produkte`
--

INSERT INTO `produkte` (`ID`, `Name`, `Preis`, `Stueck`, `Bild`, `Beschreibung`) VALUES
(1, 'Blaue Leine', 15, 19, 'hundeleine1.jpg', 'Helles Blau, mit einem Haken.'),
(3, 'Knallrotes Katzengeschirr.', 10, 24, 'geschirrKatze.jpg', 'Knallrot. Groesse ist anpassbar.'),
(4, 'Hundekekse', 7, 49, 'Hunde_Kekse.jpg', 'Kekse auf Haferbasis'),
(5, 'Katzenball', 13, 21, 'Spielzeug_Katze.jpg', 'Rotes Seil mit einem Ball dran. Am anderen Ende ist eine Schlaufe zum Festhalten.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `profil`
--

CREATE TABLE `profil` (
  `Username` text COLLATE utf16_german2_ci NOT NULL,
  `Datum` date NOT NULL,
  `Kommentar` text COLLATE utf16_german2_ci NOT NULL,
  `Note` double NOT NULL,
  `Artikel` text COLLATE utf16_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_german2_ci;

--
-- Daten für Tabelle `profil`
--

INSERT INTO `profil` (`Username`, `Datum`, `Kommentar`, `Note`, `Artikel`) VALUES
('Nadine', '2019-06-18', 'Tolles Geschirr!', 2, '2'),
('Nadine', '2019-06-19', 'Ganz toll.', 2, '3'),
('Nadine', '2019-06-19', 'Super', 1, '1'),
('vvv', '2019-06-19', 'Juhu', 1, '3'),
('', '2019-06-19', 'Rot.', 3, '3'),
('ally', '2019-06-20', 'Mein Hund liebt diese Kekse.', 1, '4'),
('Lulu', '2019-06-20', 'Meine Freundin hat uns die geschenkt, leider vertrÃ¤gt mein Hund die nicht so gut.', 4, '4'),
('', '2019-06-20', 'Leider schnell kaputt gegangen.', 5, '3'),
('Lulu', '2019-06-21', 'KÃ¶nnen die Katzen damit auch alleine spielen?', 3, '5'),
('Lulu', '2019-06-21', 'Nur zu empfehlen', 0, '5'),
('Lulu', '2019-06-21', 'Sieht toll aus', 3, '5');

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
('Viktor', 'Meltsyn', 'meltsyn@bla', 'vvv', '1234'),
('Luisa', 'Beka', 'luisa@beka', 'Lulu', '1234'),
('Alina', 'Beka', 'alina@beka', 'ally', '1234');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bewertungen`
--
ALTER TABLE `bewertungen`
  ADD KEY `Update` (`ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bewertungen`
--
ALTER TABLE `bewertungen`
  ADD CONSTRAINT `Update` FOREIGN KEY (`ID`) REFERENCES `produkte` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

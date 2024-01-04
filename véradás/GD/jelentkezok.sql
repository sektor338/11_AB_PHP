-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Dec 19. 22:10
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `voroskereszt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jelentkezok`
--

CREATE TABLE `jelentkezok` (
  `id` int(11) NOT NULL,
  `vezeteknev` varchar(255) NOT NULL,
  `keresztnev` varchar(255) NOT NULL,
  `telefonszam` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `lakcim` varchar(255) NOT NULL,
  `szuletesi_datum` date NOT NULL,
  `vercsoport` text NOT NULL,
  `alkohol` varchar(1) NOT NULL,
  `dohanyzas` varchar(1) NOT NULL,
  `feliratkozik` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `jelentkezok`
--

INSERT INTO `jelentkezok` (`id`, `vezeteknev`, `keresztnev`, `telefonszam`, `email`, `lakcim`, `szuletesi_datum`, `vercsoport`, `alkohol`, `dohanyzas`, `feliratkozik`) VALUES
(1, 'Lakatos', 'Ferenc', '06207878433', 'lakatos.feri@gmail.com', 'Eötvös út 97.', '2004-04-01', 'A', 'I', 'I', 'H'),
(2, 'Orbán', 'Viktor', '06209996969', 'fidesz@fideszmail.com', 'Felcsú, Rákóczi u. 3', '1963-05-31', 'A', 'H', 'H', 'H'),
(3, 'Jónás ', 'Attila', ' +36(96) 328-334', 'vegh.hunor@hotmail.com', 'Kárpát u. 7.', '1987-09-05', 'B', 'I', 'I', 'H'),
(4, 'Horváth', 'Szonja', '  +36  (88) 840-641', 'gabriella24@yahoo.com', 'Rákóczi út 48.', '1980-01-01', 'AB', 'I', 'H', 'H'),
(5, 'Barta ', 'Rebeka', '  +36  (48) 652-477', 'arpad29@hotmail.com', 'Szent Gellért tér 52.', '1967-06-02', '0', 'H', 'H', 'H');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `jelentkezok`
--
ALTER TABLE `jelentkezok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `jelentkezok`
--
ALTER TABLE `jelentkezok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

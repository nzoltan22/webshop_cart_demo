-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2019. Jan 19. 09:25
-- Kiszolgáló verziója: 5.7.24-0ubuntu0.16.04.1
-- PHP verzió: 7.0.33-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop_cart_demo`
--
CREATE DATABASE IF NOT EXISTS `webshop_cart_demo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `webshop_cart_demo`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cartsave`
--

CREATE TABLE `cartsave` (
  `sessionid` varchar(200) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `cartsave`
--

INSERT INTO `cartsave` (`sessionid`, `data`) VALUES
('iqvuoae0c3rd0l7hnotrc5o7d7', 'a:4:{i:0;i:1003;i:1;i:1004;i:2;i:1003;i:3;i:1003;}');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `title`, `author`, `publisher`, `price`) VALUES
(1001, 'Dreamweaver CS4', 'Janine Warner', 'PANEM', 3900),
(1002, 'JavaScript kliens oldalon', 'Sikos László', 'BBS-INFO', 2900),
(1003, 'Java', 'Barry Burd', 'PANEM', 3700),
(1004, 'C# 2008', 'Stephen Randy Davis', 'PANEM', 3700),
(1005, 'Az Ajax alapjai', 'Joshua Eichorn', 'PANEM', 4500),
(1006, 'Algoritmusok', 'Ivanyos Gábor, Rónyai Lajos, Szabó Réka', 'TYPOTEX', 3600);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cartsave`
--
ALTER TABLE `cartsave`
  ADD PRIMARY KEY (`sessionid`);

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

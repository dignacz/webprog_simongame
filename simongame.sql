-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 13. 17:41
-- Kiszolgáló verziója: 10.1.38-MariaDB
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `simongame`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contacts_list`
--

CREATE TABLE `contacts_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `sent_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `contacts_list`
--

INSERT INTO `contacts_list` (`id`, `name`, `email`, `phone`, `subject`, `Message`, `sent_date`) VALUES
(8, 'lumilla92', 'lumilla92@gmail.com', 123456789, 'Bejelentkezett Ã¼zenet', 'A listÃ¡ban a bejelentkezett felhasznÃ¡lÃ³ felhasznÃ¡lÃ³nevÃ©t mutatja nÃ©vkÃ©nt.', '2023-05-13 17:23:03'),
(9, 'VendÃ©g', 'vendeg@vendeg.cz', 123456789, 'VendÃ©g Ã¼zenet', 'Nem bejelentkezett felhasznÃ¡lÃ³nÃ¡l VendÃ©g nÃ©v jelenik meg.', '2023-05-13 17:23:58');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `image`
--

INSERT INTO `image` (`image_id`, `image`, `location`) VALUES
(2, '1683834057.jpg', 'upload/1683834057.jpg'),
(3, '1683984038.png', 'upload/1683984038.png'),
(4, '1683984110.jpg', 'upload/1683984110.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `lastname`, `firstname`, `email`, `password`) VALUES
(1, 'lumilla92', 'IgnÃ¡cz', 'Bernadett', 'drfrtzu@fhjfjk.hu', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `contacts_list`
--
ALTER TABLE `contacts_list`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `contacts_list`
--
ALTER TABLE `contacts_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

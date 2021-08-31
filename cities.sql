-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Сер 29 2021 р., 15:18
-- Версія сервера: 10.4.20-MariaDB
-- Версія PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `countrycity`
--

-- --------------------------------------------------------

--
-- Структура таблиці `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(64) NOT NULL,
  `countryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `cities`
--

INSERT INTO `cities` (`id`, `city`, `countryid`) VALUES
(1, 'СИДНЕЙ', 1),
(2, 'МЕЛЬБУРН', 1),
(3, 'БРИСБЕН', 1),
(4, 'АДЕЛАИДА', 1),
(5, 'ПЕРТ', 1),
(6, 'Лондон', 2),
(7, 'Бирмингем', 2),
(8, 'Лидс', 2),
(9, 'Берлин', 3),
(10, 'Гамбург', 3),
(11, 'Мюнхен', 3),
(12, 'Тбилиси', 4),
(13, 'Абаша', 4),
(14, 'Амбролаури', 4),
(15, 'Каир', 5),
(16, 'Александрия', 5),
(17, 'Гиза', 5),
(18, 'Шарм-эш-Шейх', 5),
(19, 'Торонто', 6),
(20, 'Монреаль', 6),
(21, 'Калгари', 6),
(22, 'Оттава', 6),
(23, 'Кишинев', 7),
(24, 'Бельцы', 7),
(25, 'Бендеры', 7),
(26, 'Бессарабка', 7),
(27, 'Варшава', 8),
(28, 'Августов', 8),
(29, 'Альверня', 8),
(30, 'Вашингтон', 9),
(31, 'Нью‑Йорк', 9),
(32, 'Лос‑Анджелес', 9),
(33, 'Чикаго', 9),
(34, 'Анкара', 10),
(35, 'Стамбул', 10),
(36, 'Измир', 10),
(37, 'Киев', 11),
(38, 'Харьков', 11),
(39, 'Одесса', 11),
(40, 'Днепр', 11),
(41, 'Донецк', 11),
(42, 'Запорожье', 11),
(43, 'Львов', 11),
(44, 'Херсон', 11);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countryid` (`countryid`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

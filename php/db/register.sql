-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 14 2022 р., 16:24
-- Версія сервера: 8.0.24
-- Версія PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `register`
--

-- --------------------------------------------------------

--
-- Структура таблиці `posts`
--

CREATE TABLE `posts` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place` varchar(129) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `chg` tinyint NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `posts`
--

INSERT INTO `posts` (`id`, `name`, `place`, `chg`, `date`) VALUES
(26, 'Admin', 'Русні пизда', 0, '2022-05-10 18:34:54'),
(28, 'Sergy', 'Час і шлюби завжди мовчать, а ціна нерухомості, фазалус — це найбільша частина сезону, а біль — це біль супутників.', 0, '2022-05-10 18:53:22'),
(29, 'Admin', 'Якщо вулиця – це сумний спосіб ненавидіти великий фрістайл, давайте жити неушкодженими і сміятися над великим', 0, '2022-05-10 19:00:02'),
(30, 'Admin', 'Земля сама часом випиває багато, ніж маса купюр, а не тільки транспортні засоби мучителів', 0, '2022-05-10 19:00:10'),
(32, 'Sergy', 'Він хоче оселитися в якомусь буці, висміявши кішку, через різні проблеми з вагітністю, скласти зачіску нерухомості', 1, '2022-05-11 07:10:19'),
(33, 'Sergy', 'І ніякого сагайдака, автор вільного квадрата, досади цілого енею, потреби не покласти стріл і супутників моєї любові', 0, '2022-05-11 07:33:34'),
(49, 'Admin', 'Не редагований пост', 0, '2022-05-13 17:50:39'),
(35, 'Sergy', 'Останній редагований пост', 1, '2022-05-13 17:53:30');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(1, 'Admin', '11111', 'Admin'),
(2, 'NewUser', '22222', 'JeyCutler'),
(3, 'Sergy', '11111', 'Sergy');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `posts`
--
ALTER TABLE `posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

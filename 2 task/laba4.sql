-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 30 2020 г., 19:52
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `labaa4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `laba4`
--

CREATE TABLE `laba4` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `laba4`
--

INSERT INTO `laba4` (`id`, `name`, `cost`) VALUES
(1, 'bread', 100),
(2, 'milk', 180),
(3, 'salad', 200),
(4, 'apple', 250),
(5, 'ice cream', 170),
(6, 'tomato', 210),
(7, 'Cola', 180),
(8, 'Potato', 120),
(9, 'onion', 130),
(10, 'yogurt', 170);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `laba4`
--
ALTER TABLE `laba4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `laba4`
--
ALTER TABLE `laba4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

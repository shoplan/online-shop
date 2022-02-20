-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 13 2022 г., 08:24
-- Версия сервера: 10.4.20-MariaDB
-- Версия PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `foodshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'суши'),
(2, 'сеты'),
(3, 'пицца'),
(7, 'ролл'),
(8, 'салаты');

-- --------------------------------------------------------

--
-- Структура таблицы `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `ingredient` varchar(255) NOT NULL,
  `qty` varchar(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `food`
--

INSERT INTO `food` (`id`, `img`, `title`, `price`, `ingredient`, `qty`, `category_id`) VALUES
(1, 'filakun.jpg', 'Филадельфия в кунжуте', '1850', 'Рис,нори,сыр сливочный,огурцы, лосось, кунжут', '8', 1),
(2, 'filadelfia.jpg', 'Филадельфия', '1600', 'Рис, сыр сливочный, огруцы, лосось', '8', 1),
(3, 'fakuda.jpg', 'Факуда', '1900', 'Рис японский, нори,лосось,лист салата, соус Лава', '6', 1),
(4, 'blcdrak.jpg', 'Черный дракон', '2100', 'Нори, рис,лосось,угорь,сыр,огурец,тобико', '8', 1),
(5, 'pizza1.jpeg', 'Салями', '1500', 'сыр моцарелла, салями', '8', 3),
(10, 'kaliforniya.jpeg', 'сет Калифорния', '3500', 'калифорния с маком и кунжутом', '24', 2),
(11, 'margarita.jpeg', 'Маргарита', '1800', 'помидоры, сыр', '8', 3),
(12, 'set1.jpeg', 'сет Капа маки', '3500', 'капа маки, сякэ маки, маки с крабом', '36', 2),
(13, 'peper.jpg', 'Пепероны', '2300', 'помидоры, сыр, перец', '8', 3),
(14, 'tobiko.jpg', 'Табико', '800', 'рисб нори,красное табико', '4', 7),
(15, 'roll.jpg', 'Ролл с угрем', '550', 'рис, нори, угор', '2', 7),
(16, 'pizza4.jpg', '4 сезона', '2200', 'грибы,сыр, помидоры', '8', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rolename` varchar(22) NOT NULL,
  `code` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `rolename`, `code`) VALUES
(1, 'пользователь', 'User'),
(2, 'админ', 'Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `fullname` varchar(222) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `fullname`, `role_id`) VALUES
(1, 'tan@mail.ru', '924056a073df29307937f36f33a2aa64e2a4e780', 'tan@mail.ru', 2),
(5, 'nur@mail.ru', 'eefa914f107760ebb4497c30d19997d1727d4ed5', 'nur@mail.ru', 2),
(6, 'qwer@mail.ru', '2665180d0ecc4ce0c74ba8ebde16bb67555950a2', 'qwer', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

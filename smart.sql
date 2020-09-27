-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 25 2020 г., 23:28
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `smart`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `category_id`) VALUES
(1, '3D Печать', 1),
(2, 'Виртуальная реальность', 2),
(5, 'Смешанная реальность', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders_3d`
--

CREATE TABLE `orders_3d` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `address` longtext NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Новый',
  `model` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `size_model` varchar(255) NOT NULL,
  `scale` varchar(255) NOT NULL,
  `accuracy` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `file_modeles` varchar(255) NOT NULL,
  `file_document` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_3d`
--

INSERT INTO `orders_3d` (`id`, `user_id`, `service`, `create_at`, `address`, `user_name`, `status`, `model`, `description`, `size_model`, `scale`, `accuracy`, `material`, `platform`, `packaging`, `file_modeles`, `file_document`, `category_id`) VALUES
(3, 0, '', '2020-09-24 06:40:52', '', '', 'Новый', 'to;', '', '', '', '', '', '', '', '', '', 0),
(4, 1, '', '2020-09-24 06:52:50', '', '', 'Новый', 'в', '', '', '', '', '', '', '', '', '', 0),
(5, 1, '', '2020-09-24 07:06:54', '', '', 'Новый', 'wer', '', '', '', '', '', '', '', '', '', 0),
(6, 1, '', '2020-09-24 07:07:43', '', '', 'Новый', 'wer', '', '', '', '', '', '', '', '', '', 0),
(7, 0, '', '2020-09-25 21:18:59', '', '', 'Новый', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '', '', 1),
(8, 0, '', '2020-09-26 00:27:13', '', '', 'Новый', '', '', '', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders_vr`
--

CREATE TABLE `orders_vr` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `equi` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `use_type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT '0',
  `balls` varchar(255) NOT NULL DEFAULT '0',
  `clothes` varchar(255) NOT NULL DEFAULT '0',
  `eat` varchar(255) NOT NULL DEFAULT '0',
  `quest` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'новый',
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_vr`
--

INSERT INTO `orders_vr` (`id`, `user_id`, `equi`, `description`, `use_type`, `quantity`, `place`, `photo`, `balls`, `clothes`, `eat`, `quest`, `status`, `category_id`) VALUES
(1, 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'в работу', 0),
(11, 1, 'Hololens 2', '555', 'Игры', '2', 'Ваша локация', '1', '1', '1', '1', '1', 'новый', 1),
(12, 1, 'Hololens 2', '5566654q', 'Кинематограф', '3', 'Ваша локация', '1', '1', '1', '1', '1', 'новый', 3),
(13, 1, 'Hololens 2', '5566654q', 'Кинематограф', '3', 'Ваша локация', '1', '1', '1', '1', '1', 'новый', 3),
(14, 1, 'Hololens 2', '5566654q', 'Кинематограф', '3', 'Ваша локация', '1', '1', '1', '1', '1', 'новый', 3),
(16, 1, '', '', '', '1', 'Наш офис', '', '', '', '', '', 'новый', 3),
(17, 1, '', '', '', '1', 'Наш офис', '', '', '', '', '', 'новый', 2),
(18, 1, '', '', '', '1', 'Наш офис', '', '', '', '', '', 'новый', 3),
(19, 1, '', '', '', '1', 'Наш офис', '', '', '', '', '', 'новый', 2),
(20, 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'в работу', 0),
(21, 1, 'Hololens 2', '555', 'Игры', '2', 'Ваша локация', '1', '1', '1', '1', '1', 'новый', 1),
(22, 1, 'Hololens 2', '5566654q', 'Кинематограф', '3', 'Ваша локация', '1', '1', '1', '1', '1', 'новый', 3),
(23, 1, 'Hololens 2', '5566654q', 'Кинематограф', '3', 'Ваша локация', '1', '1', '1', '1', '1', 'новый', 3),
(24, 1, 'Hololens 2', '5566654q', 'Кинематограф', '3', 'Ваша локация', '1', '1', '1', '1', '1', 'новый', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url_video` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `bg_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_mail` varchar(255) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `phone`, `email`, `password`, `confirm_mail`, `verified`) VALUES
(1, 'qwerty', '', 'q@werty.ru', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'LuuW8I5tDqRJ6223eZim', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_3d`
--
ALTER TABLE `orders_3d`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_vr`
--
ALTER TABLE `orders_vr`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `orders_3d`
--
ALTER TABLE `orders_3d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders_vr`
--
ALTER TABLE `orders_vr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

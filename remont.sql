-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 12 2017 р., 16:02
-- Версія сервера: 5.7.11
-- Версія PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `remont`
--

-- --------------------------------------------------------

--
-- Структура таблиці `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `default` smallint(6) NOT NULL DEFAULT '0',
  `date_update` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `lang`
--

INSERT INTO `lang` (`id`, `url`, `local`, `name`, `default`, `date_update`, `date_create`) VALUES
(1, 'en', 'en-EN', 'English', 0, 1497256943, 1497256943),
(2, 'ru', 'ru-RU', 'Русский', 1, 1497256943, 1497256943),
(3, 'uk', 'uk-UA', 'Українська', 0, 1497257010, 1497257010);

-- --------------------------------------------------------

--
-- Структура таблиці `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1497086869),
('m130524_201442_init', 1497086872);

-- --------------------------------------------------------

--
-- Структура таблиці `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `where_find` varchar(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `malfunction` varchar(255) NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `date` timestamp NOT NULL,
  `indicative_price` int(11) NOT NULL,
  `avans` int(11) NOT NULL,
  `urgently` int(11) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `executor` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `order`
--

INSERT INTO `order` (`id`, `user_id`, `type`, `client_name`, `phone`, `email`, `address`, `where_find`, `device_type`, `serial_number`, `brand`, `model`, `malfunction`, `appearance`, `equipment`, `notes`, `date`, `indicative_price`, `avans`, `urgently`, `manager`, `executor`) VALUES
(1, 1, '1', '2', '3', '4', '5', '6', '7', '8', '8', '9', '11', '12', '13', '14', '2010-04-20 14:00:00', 16, 17, 18, '19', '20'),
(2, 1, '1', '2', '43', '4', '5', '6', '7', '8', '9', '23', '423', '543', '3245', '6', '2012-04-20 11:00:00', 123, 234, 234, '5', '34'),
(3, 1, '0', '132', '123', 'qew', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '2012-04-20 11:00:00', 123, 123, 1, '123', '123'),
(4, 1, '1', '3454', '34543', '345', '435534', '543', '435', '345', '345', '345', '345', '435', '435', '435', '2012-04-20 11:00:00', 34, 5, 1, '3453', '5345');

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `zero` int(11) NOT NULL,
  `repair` int(11) NOT NULL,
  `retail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'agalio94', 'poWZgNOhIhYUGtx3xxokw2LItBkMAb5y', '$2y$13$cqF1jcw7XK5FkT44SMuu1ugmlmK7lSqkS/B2sifHrhhH.3qahw1iK', NULL, 'galifax94@gmail.com', 10, 1497087051, 1497087051);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Індекси таблиці `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

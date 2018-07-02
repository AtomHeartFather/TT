-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 02 2018 г., 22:34
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `schet`
--

CREATE TABLE `schet` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `summa` decimal(11,2) NOT NULL,
  `name` char(255) NOT NULL,
  `adres` char(255) NOT NULL,
  `inn` int(11) NOT NULL,
  `kpp` int(11) NOT NULL,
  `rschet` bigint(20) NOT NULL,
  `kschet` bigint(20) NOT NULL,
  `bik` int(11) NOT NULL,
  `bank` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `schet`
--

INSERT INTO `schet` (`id`, `number`, `date`, `summa`, `name`, `adres`, `inn`, `kpp`, `rschet`, `kschet`, `bik`, `bank`) VALUES
(1, 1, '2018-07-01', '100000.00', 'ООО \"Ромашка\"', 'Санкт-Петербург, пр.Невский, д.51, оф.15', 987654321, 987654321, 12345678987654321, 12365478987654321, 98765432, 'ОАО БАНК \"ВТОРОЙ БАНК\" г.Санкт-Петербург'),
(2, 2, '2018-07-02', '154689.00', 'Такая-то фирма', 'Малая Спасская', 134679, 134679, 1234567897654321, 123456987789654123, 123654789, 'Банк Такой-то'),
(123, 123, '0000-00-00', '123.00', '123', '123', 123, 123, 123, 123, 123, '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `schet`
--
ALTER TABLE `schet`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

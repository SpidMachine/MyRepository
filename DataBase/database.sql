-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2020 г., 19:59
-- Версия сервера: 5.6.41
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Структура таблицы `firsttable`
--

CREATE TABLE `firsttable` (
  `Name` int(11) NOT NULL,
  `FIO` varchar(50) NOT NULL,
  `ZP` float NOT NULL,
  `Dep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `firsttable`
--

INSERT INTO `firsttable` (`Name`, `FIO`, `ZP`, `Dep`) VALUES
(1, 'Ivanov', 950, 'Programmer'),
(2, 'Ковалев', 1500, 'Инженер-программист'),
(3, 'Новиков', 1050, 'Автомобилист международных перевозок'),
(4, 'Лещев', 750, 'Тракторист'),
(5, 'Царикова', 2000, 'Юрист'),
(12, 'Сугако', 2500, 'Врач-стоматолог'),
(7, 'Салиев', 1850, 'Криминалист'),
(8, 'Добыш', 2300, 'Переводчик'),
(9, 'Тишко', 2450, 'Врач'),
(0, 'Мандрик', 10, 'Киберспорт');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2023 г., 15:16
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pedm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
('uDwdBahNlZrLdcfyyGxL', 'Xusanbek99', 'ed2c23ec000c5189d9aec1a4c14a6e8bad218be8'),
('vh29gHOgX1VTPhInZkuk', 'Admin', '4e7afebcfbae000b22c7c85e5560f89a2a0280b4');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `number`, `message`) VALUES
('6ZnddADWfmpW1qGMCG4t', 'Xusan', 'Xusan0101@gmail.com', '9858', 'bnmjhbv mnhb   nb mb mjhb'),
('fMsPMRwUm3ze5V6ig9l4', 'Xusan', 'Xusan0101@gmail.com', '971131705', 'asdfghgfdsssdfggfd'),
('AK4q0Hvp1br2rLl0NwkW', 'Xusan', 'Xusan0101@gmail.com', '9854555', 'gbfgdsadfgggbfvdc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

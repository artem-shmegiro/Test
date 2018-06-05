-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 05 2018 г., 15:38
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calculdb`
--

CREATE TABLE IF NOT EXISTS `calculdb` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `fnumber` varchar(255) NOT NULL,
  `operation` varchar(255) NOT NULL,
  `snumber` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `calculdb`
--

INSERT INTO `calculdb` (`id`, `fnumber`, `operation`, `snumber`, `result`) VALUES
(17, '6', '+', '9', ''),
(18, '3', '+', '7', ''),
(19, '456', '-', '46', '');

-- --------------------------------------------------------

--
-- Структура таблицы `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Дамп данных таблицы `userreg`
--

INSERT INTO `userreg` (`id`, `login`, `email`, `password`) VALUES
(34, 'artem', 'shmegiro97@mail.ru', '123art'),
(36, 'artemio', 'shmegiro98@gmail.com', '1234artem'),
(41, 'andrey', 'andreyka97@mail.ru', '123andr'),
(50, 'timoha', 'timoha@mail.ru', '123tima'),
(51, 'olga', 'olga99@gmail.com', '12345o'),
(53, 'user1', 'oreo@mail.ru', '12345'),
(54, 'muxa', 'muxa@mail.ru', 'mixich123'),
(55, 'Lion', 'lev@gmail.com', '1234lion'),
(56, 'Dobriy', 'dobrota@mail.ru', 'haha'),
(57, 'artik', 'artik@gmail.com', 'passwdha'),
(58, 'RussianBear', 'greezly@mail.ru', 'baer45'),
(59, 'Zadrot', 'zadr99@mail.ru', 'yazadrotha123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 17 2018 г., 02:33
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
-- Структура таблицы `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

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
(58, 'RussianBear', 'greezly@mail.ru', 'baer45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

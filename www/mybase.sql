-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 04 2014 г., 15:18
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mybase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', 11111);

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `status_name` int(1) NOT NULL,
  `mini_content` varchar(400) NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL,
  `id_categorya` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `name`, `status_name`, `mini_content`, `content`, `status`, `id_categorya`) VALUES
(1, 'Без статей', 0, '', '', 0, 1),
(2, 'тест1', 1, 'тест1тест1тест1тест1 тест1тест1 тест1/', 'тест1тест1тест1тест1 тест1тест1 тест1тест1тест1 тест1тест1 тест1тест1 тест1тест1тест1тест1 тест1тест1 тест1тест1тест1 тест1тест1 тест1тест1 мтест1 мтест1тест1тест1 мтест1 мтест1тест1тест1', 1, 3),
(3, 'тест2', 1, 'тест2тест2 тест2тест2тест2 мтест2тест2/', 'тест2тест2 тест2тест2тест2 мтест2тест2тест2тест2тест2 тест2 тест2тест2 тест2тест2 тест2тест2тест2 мтест2тест2тест2тест2тест2 тест2 тест2тест2 тест2тест2тест2 тест2тест2тест2', 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `categorya`
--

CREATE TABLE IF NOT EXISTS `categorya` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `categorya`
--

INSERT INTO `categorya` (`id`, `name`, `alias`, `content`, `status`) VALUES
(2, 'Категория 1', 'main', '<p><span style="font-size: large;"><strong>Тестовая</strong>&nbsp;</span>информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span><span><strong>Тестовая</strong></span>&nbsp;информация категории которую я&nbsp;<span>делал</span></p>', 1),
(3, 'Категория 2', 'portfolio', '<p>Инфо №2Инфо №2Инфо №2Инфо №2</p>', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `controller`
--

CREATE TABLE IF NOT EXISTS `controller` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `prefix` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `controller`
--

INSERT INTO `controller` (`id`, `prefix`, `status`) VALUES
(1, 'main', 1),
(2, 'blog', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `status_menu` int(1) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `name_menu` varchar(30) NOT NULL,
  `id_categorya` int(2) NOT NULL,
  `id_contakt` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `status_menu`, `alias`, `name_menu`, `id_categorya`, `id_contakt`) VALUES
(1, 1, 'main', 'Главна', 2, 0),
(2, 1, 'portfolio', 'Вторая', 3, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `menucp`
--

CREATE TABLE IF NOT EXISTS `menucp` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `alias` varchar(30) NOT NULL,
  `id_controller` int(2) NOT NULL,
  `id_categorya` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `menucp`
--

INSERT INTO `menucp` (`id`, `name`, `alias`, `id_controller`, `id_categorya`) VALUES
(1, 'Меню', 'main', 1, 2),
(2, 'Категории', 'test', 2, 3),
(3, 'Материалы', 'articles', 1, 2),
(4, 'Модули', 'modules', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `position` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `modules`
--

INSERT INTO `modules` (`id`, `name`, `position`, `status`) VALUES
(1, 'mod_test', 1, 1),
(2, 'mod_t', 2, 1),
(3, 'footer', 3, 1),
(4, 'mod_test', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

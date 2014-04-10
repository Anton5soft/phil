-- phpMyAdmin SQL Dump
-- version 4.0.9deb1.precise~ppa.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 09 2014 г., 17:55
-- Версия сервера: 5.5.35-0ubuntu0.12.04.2
-- Версия PHP: 5.5.10-1+deb.sury.org~precise+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `phil`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_document`
--

CREATE TABLE IF NOT EXISTS `tbl_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(255) DEFAULT NULL,
  `doc_file` varchar(255) NOT NULL,
  `doc_type` varchar(50) DEFAULT NULL,
  `doc_size` varchar(50) DEFAULT NULL,
  `summary` text NOT NULL,
  `up_dated` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `tbl_document`
--

INSERT INTO `tbl_document` (`id`, `doc_name`, `doc_file`, `doc_type`, `doc_size`, `summary`, `up_dated`) VALUES
(5, 'ivey1', '1396874686_phil_ivey_01.jpg', 'image/jpeg', '28582', '', '2014-04-07'),
(7, 'ivey3', '1396874725_phil-ivey-31963.jpg', 'image/jpeg', '125531', '', '2014-04-07'),
(8, 'iveynew', '1396874857_images.jpg', 'image/jpeg', '9143', '', '2014-04-07');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `lang` char(2) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_time` int(11) DEFAULT NULL,
  `updated_time` int(11) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `tbl_news`
--

INSERT INTO `tbl_news` (`lang`, `title`, `id`, `title_ru`, `content`, `status`, `created_time`, `updated_time`, `author_id`) VALUES
('en', 'Phil Ivey and Patrik Antonius Win $482,176 Over the Weekend', 15, '', '<p><a href="http://iveypoker.com/pros/phil-ivey/">Phil Ivey</a> and <a href="http://iveypoker.com/pros/patrik-antonius/">Patrik Antonius</a> posted huge numbers this past weekend online. According to HighStakesDB.com, the pair won a combined $482,176 from Friday through Sunday. Phil won $392,024 while Patrik earned $90,152.</p><p>Phil kicked off his big weekend booking a solid win on Friday. Cottonseed became Phil’s primary target as the pair faced off for over six hours at FL Omaha Hi-Lo. Phil emerged from the heads-up battle up $221,000. He dropped a little back at day’s end to finish up $210,300.</p><p>Phil posted his largest online win of 2014 on Saturday, finishing up $372,163. Saturday was a big day at the 2-7 Triple Draw tables with multiple players walking away with six-figure scores. Phil had the best day at Triple Draw, booking his entire win there. He won $306,000 on table “Upper” where he dominated the likes of samrostan, Niklas “ragen70″ Heinecker and Phil “OMGClayAiken” Galfond.</p><p>Phil was actually up $582,479 through Saturday but ran somewhat cold in both Triple Draw and Omaha 8 or Better on Sunday. He finished the weekend up $392,024.</p>', 0, 1396964262, 1396964262, 0),
('en', 'Phil Ivey and Patrik Antonius Win $482,176 Over the Weekend', 16, '', '<p><a href="http://iveypoker.com/pros/phil-ivey/">Phil Ivey</a> and <a href="http://iveypoker.com/pros/patrik-antonius/">Patrik Antonius</a> posted huge numbers this past weekend online. According to HighStakesDB.com, the pair won a combined $482,176 from Friday through Sunday. Phil won $392,024 while Patrik earned $90,152.</p><p>Phil kicked off his big weekend booking a solid win on Friday. Cottonseed became Phil’s primary target as the pair faced off for over six hours at FL Omaha Hi-Lo. Phil emerged from the heads-up battle up $221,000. He dropped a little back at day’s end to finish up $210,300.</p><p>Phil posted his largest online win of 2014 on Saturday, finishing up $372,163. Saturday was a big day at the 2-7 Triple Draw tables with multiple players walking away with six-figure scores. Phil had the best day at Triple Draw, booking his entire win there. He won $306,000 on table “Upper” where he dominated the likes of samrostan, Niklas “ragen70″ Heinecker and Phil “OMGClayAiken” Galfond.</p><p>Phil was actually up $582,479 through Saturday but ran somewhat cold in both Triple Draw and Omaha 8 or Better on Sunday. He finished the weekend up $392,024.</p>', 0, 1396964384, 1396964384, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_tour`
--

CREATE TABLE IF NOT EXISTS `tbl_tour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `lang` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `tbl_tour`
--

INSERT INTO `tbl_tour` (`id`, `title`, `content`, `lang`) VALUES
(5, '12.12.12', 'Going to play poker', ''),
(6, '12.1.14', 'Going to play poker', ''),
(7, '12.11.12', 'Going to play poker', ''),
(8, '12.42.12', 'Going to play poker', ''),
(9, 'asd', 'as', 'ru');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `link`) VALUES
(1, '<iframe  width="860" height="480" src="//www.youtube.com/embed/Blc28XkTXuw" frameborder="0" allowfullscreen></iframe>'),
(2, '<iframe width="860" height="480" src="//www.youtube.com/embed/V1kaewFQQBI" frameborder="0" allowfullscreen></iframe>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

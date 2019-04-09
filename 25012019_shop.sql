-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2019 г., 10:53
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `25012019_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `item-name` varchar(350) NOT NULL,
  `parent_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `item-name`, `parent_id`) VALUES
(1, 'Куртки', 7),
(2, 'Кроссовки', 7),
(3, 'Джинсы', 7),
(4, 'Куртки', 8),
(5, 'Кроссовки', 8),
(6, 'Джинсы', 8),
(7, 'Женщинам', 0),
(8, 'Мужчинам', 0),
(9, 'Детям', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(3) NOT NULL,
  `category` int(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `article` int(10) NOT NULL,
  `description` text NOT NULL,
  `img_src` varchar(350) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `category`, `name`, `article`, `description`, `img_src`, `cost`) VALUES
(1, 5, 'Кеды с полоской', 385904, 'Отличные куды из водонепроницаемого материала. Отлично подходят для любой погоды.\r\nПриятно сидят на ноге, стильные и комфортные', '/images/catalog/9.jpg', 4500),
(2, 4, 'Куртка синяя', 385907, 'Удобная мужская стильная куртка\r\nХороший подарок для жителей Ростова, В Пиере уже холодно и подтекает.', '/images/catalog/1.jpg', 5400),
(3, 4, 'Кожаная куртка', 385917, 'Почувствуй себя байкером, который может завоевать любую девчонку.\r\nБонусы: +10 к уверенности, +20 к защите от дождя и ветра.\r\n', '/images/catalog/4.jpg', 22500),
(4, 4, 'Куртка с карманами', 385364, 'Зашитная куртка для путешественников. \r\n2 кармана снаружи, 2 на рукавах, 2 внутри и мини-карман на груди.\r\nОтличная защита от ветра', '/images/catalog/3.png', 9200),
(5, 4, 'Куртка с капюшоном', 385362, 'Зеленая куртка на холодную погоду. Капюшон надежно закрывается на клапоновую кнопку.', '/images/catalog/2.jpg', 6100),
(6, 4, 'Куртка Casual', 395352, 'Куртка настоящих модников. Чркие принты спереди и на спине, удобные карманы, надежный материал, который не стирается об рюкзак или сумку.\r\nКуртка прослужит долго.', '/images/catalog/5.jpg', 8800),
(7, 4, 'Стильная кожаная куртка', 385351, 'Легкая куртка на теплую погоду. ', '/images/catalog/6.jpg', 12800),
(8, 5, 'Кеды серые', 385354, 'Летняя обувь для прогулок по городу. Замшу легко чистить, кеды можно постирать в стиральной машине. Шви надежные, не разойдутся и не расклеятся', '/images/catalog/7.jpg', 2900),
(9, 5, 'Кеды черные', 385355, 'Стильная обувь для вечеринок.\r\nКлассический черный в молодежном оформлении. ', '/images/catalog/8.jpg', 4500),
(10, 5, 'Кеды всепогодные', 385356, 'Можно плавать, можно покорять Эверест, можно надеть на свидание. Всегда в тренде, всегда под защитой', '/images/catalog/10.jpg', 9200),
(11, 6, 'Джинсы', 385357, 'Классика, которая никогда не выходит из моды. В составе есть небольшое количество стрейч материала, так что джинсы тянутся. Поэтому хорошо садятся по фигуре.', '/images/catalog/11.jpg', 4800),
(12, 6, 'Джинсы голубые', 3853588, 'Штаны типа boyfriend можно носить на работу.\r\nСветлый цвет притягивает меньше света, поэтому летом в них намного легче, чем в темных джинсах.\r\nДля всех противников шорт.', '/images/catalog/12.jpg', 4200);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

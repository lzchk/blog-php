-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 24 2023 г., 17:41
-- Версия сервера: 5.7.39-log
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_post` int(11) DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `id_post`, `text`, `id_user`) VALUES
(1, 1, 'Супер! Очень информативно', 1),
(2, 2, 'Вау,классно', 1),
(8, 1, 'всем привет', 1),
(9, 15, '                cool', 2),
(10, 1, '                мне нравится', 3),
(11, 15, '                интересно', 3),
(13, 2, '                ХОРОШО\r\n', 1),
(14, 1, '                COOL', 5),
(15, 3, '                МНЕ НРАВИТСЯ', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `id_user`) VALUES
(1, 'NEW Винный туризм на Лансароте', 'Лансароте — древнейший  в группе Канарских островов, находящихся под управлением Испании. Процесс его образования начался около 22 миллионов лет назад. Его любят за вечную весну — тут почти не идут дожди, за исключением редких осадков зимой, а воздух круглый год прогрет в среднем до +24 °C. Но главная особенность — вулканические пейзажи, благодаря которым остров похож на Луну (тут даже испытывают роботов для космических миссий). Бескрайние долины из чёрного, белого и рыже-огненного песка, многочисленные холмы, горы и вулканы, застывшие осколки лавы инопланетных форм, тысячи фантазийных кактусов, прозрачно-голубой океан. И среди всего этого растут виноградники.\r\n\r\nКанарское виноделие оценивал ещё сам Шекспир и британско-европейская аристократия XVI–XVII вв., но на серьёзный уровень производство вышло с основанием первой винодельни El Grifo. Она появилась в центре лансаротовской долины Ла Герия (La Heria), в самом сердце современного энотуризма на Канарах. PR-служба Канарских островов настойчиво сообщает – не уезжайте с острова, не попробовав местное вулканическое вино. Проверим?', 1),
(2, 'Море недорого: куда поехать в сентябре', 'Начало осени — любимый многими бархатный сезон, когда туристический ажиотаж спадает, а погода радует солнечными днями. Наслаждайтесь этой прекрасной порой на море, мы как раз подобрали локации и отели, где в сентябре получится отдохнуть бюджетно. ', 1),
(3, 'Мальдивы: шесть необычных активностей', 'Райские острова в Индийском океане прежде всего ассоциируются с отпуском в отеле «Всё включено»‎. И правда, это идеальное место для спокойного отдыха и роскошного медового месяца. Но не только. Ещё это приключения, знакомство с экзотической природой, экстремальные виды спорта и адреналин. Рассказываем, как сделать поездку на Мальдивы яркой и незабываемой.', 1),
(15, 'От ненависти до любви: что меня бесит и что нравится в Санкт-Петербурге', 'Пожалуй, никакой другой город не вызывает у меня настолько полярных эмоций. Уж не знаю, почему так получается.\r\n\r\nПро то, что меня особенно раздражает в городе, написала очень эмоциональную статью, которая вызвала прям настоящую бурю среди жителей города.\r\n\r\nВ этой публикации я постаралась соблюсти баланс между хорошими и плохими вещами. Всё как есть.', 2),
(16, 'Автомобильные путешествия по России', 'Путешествия на автомобиле по России становятся все популярнее. Причин много: закрытые границы и аэропорты, возможность путешествовать в нужном для себя темпе и останавливаться в любом понравившемся по пути месте, можно взять все необходимое, если позволяют размеры машины, и не переживать о том, во сколько обойдется багаж.\r\nСобрали подборку вариантов, куда можно отправиться в путешествие по России на автомобиле.\r\n\r\nНапоминаем, что нашем сайте Привет Тур вы можете подобрать и забронировать жилье в Крыму, в Абхазии, в Краснодарском крае, а также на Домбае и на Алтае. Нужно указать в строке поиска интересующий курорт, выбрать даты заезда и выезда, настроить параметры: близость к морю или к подъемнику, детская площадка на территории, собственная кухня в номере. После этого сервис сгенерирует для вас подборку — можно выбирать, смотреть фото и бронировать.', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `login`, `password`) VALUES
(1, 'admin@mail.ru', 'admin', 'admin'),
(2, 'crottop@mail.ru', 'crottop', 'crottop'),
(3, 'milly01@mail.ru', 'milly01', 'milly01'),
(4, 'crottop13@mail.ru', 'crottop13', 'crottop13'),
(5, 'milly0109@mail.ru', 'milly0109', 'milly0109'),
(6, 'test1@mail.ru', 'test1', 'test1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

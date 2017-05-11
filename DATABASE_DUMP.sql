-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2017 г., 19:21
-- Версия сервера: 5.5.50-log
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `text`, `images`, `created_at`, `updated_at`) VALUES
(1, '33333', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>', 'about-img.jpg', NULL, '2017-03-04 01:33:08');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'home', 'hero_section', NULL, NULL),
(2, 'about us', 'aboutUs', NULL, NULL),
(3, 'service', 'service', NULL, NULL),
(5, 'team', 'team', NULL, NULL),
(6, 'contact', 'contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_27_153153_create_table_pages', 1),
(4, '2017_02_27_153230_create_table_services', 1),
(5, '2017_02_27_153253_create_table_portfolios', 1),
(6, '2017_02_27_153327_create_table_peoples', 1),
(7, '2017_02_28_094707_create_table_about', 2),
(8, '2017_02_28_095001_create_table_menu', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `megacom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billain` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owka` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `megacom`, `billain`, `owka`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Услуги сантехника в Бишкеке', '0707-266-860', '0707-222-666', '0707-266-866', '0_94517_647dc5a_XL.jpg', NULL, '2017-03-04 02:20:44');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adante91@mail.ru', '$2y$10$Kdv7xBM8ZbFee7TGhGPPL.t3QxFMU336RKAjOqhlyGv/6.C10RLZy', '2017-03-03 00:53:21');

-- --------------------------------------------------------

--
-- Структура таблицы `peoples`
--

CREATE TABLE IF NOT EXISTS `peoples` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `peoples`
--

INSERT INTO `peoples` (`id`, `name`, `images`, `position`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Tom Rensed', 'team_pic1.jpg', 'Chief Executive Officer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.', '2017-03-13 18:00:00', '2017-03-06 18:00:00'),
(2, 'Kathren Morry', 'team_pic3.jpg', 'Vice President', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.', '2017-03-06 18:00:00', '2017-02-28 18:00:00'),
(3, 'Lancer Jac', 'team_pic2.jpg', 'Senior Manager', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>', '2017-03-06 18:00:00', '2017-03-03 02:19:29');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `img`, `filter`, `created_at`, `updated_at`) VALUES
(1, 'SMS MOBILE APP', 'portfolio_pic1.jpg', 'design', NULL, NULL),
(2, 'SMS MOBILE APP', 'portfolio_pic2.jpg', 'android', NULL, NULL),
(3, 'SMS MOBILE APP', 'portfolio_pic3.jpg', 'prototype', NULL, NULL),
(4, 'SMS MOBILE APP', 'portfolio_pic4.jpg', 'web app', NULL, NULL),
(5, 'SMS MOBILE APP', 'portfolio_pic6.jpg', 'apple ios', NULL, NULL),
(6, 'SMS MOBILE APP', 'portfolio_pic7.jpg', 'apple ios', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `text`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Ванные комнаты "под ключ"', '<p>Газоэлектросварочные работы. Установка газовых котлов, теплообменников, тепловых узлов.</p>', 'LM_kvpdqnehqo.png', NULL, '2017-03-02 06:05:51'),
(4, 'Concept', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text.', 'lm_3915.png', NULL, NULL),
(5, 'User Researcы', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text.</p>', 'lm_3915.png', NULL, '2017-03-02 06:09:45'),
(6, 'User Experience', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text.', 'lm_3915.png', NULL, NULL),
(10, 'User Research', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text.</p>', 'lm_2912.png', '2017-03-02 04:43:35', '2017-03-02 04:43:35'),
(11, 'Автономное отопление', '<p>Услуги сантехника, автономное отопление, замена труб, радиаторов, водосчетчиков, титанов, бойлеров, стиральных и посудомоечных машин</p>', 'lm_2912.png', '2017-03-02 04:45:05', '2017-03-02 04:45:05');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nurlan', 'adante91@mail.ru', '$2y$10$4eqXf.PPrwPWt5gmtFPZvuxkCfwUDYFI6o828W492AsqQq7pJV2Ta', 'KRlAmMaQz41XV0ikONewsexHypsvgclmjYEQkZxw7qvZ0eOhqEqmY9GTcypD', '2017-03-01 10:07:27', '2017-03-01 10:07:27'),
(2, 'bambuk', 'viper@mail.ru', '$2y$10$Wm7DaDtx/dKyUcykqWyzIeTSVwmuiuDOk8zl9NkVWwY6DITF4d6sa', 'te8pbDgh1mG9hQODJNWGN6jRwcSKbRx1pgUlhTV66HZNGnLyAwNOBtqiDQLe', '2017-03-15 08:38:40', '2017-03-15 08:38:40'),
(3, 'nur', '1@mail.ru', '$2y$10$OQ9SjHHBUBzJ5BOyD7FDe.Dm28PFB4q3EXY7a7eiNds60qSvbnqv2', 'pFQuUD6TIySZZnIwLt7DIVpHTkdnwnfAaXLW4cjyRYF5XA9Y0A843KPWbTE5', '2017-03-15 08:42:30', '2017-03-15 08:42:30'),
(4, 'bfgfgfg', 'sdsdw@mail.ru', '$2y$10$JyGVu5APjznaR51lr8WOvOxVqGaGPp3Mg5jv9z/mBrMHVIQGGns8u', 'r3sLKmBRNV44Pv8Jdg8rojo7N26H3Uosm01MCKzurZCCEBroJtSGXB1WHobV', '2017-03-15 08:43:56', '2017-03-15 08:43:56'),
(5, 'ruslan', 'rus@mail.ru', '$2y$10$m4uPeadLepEPLrCYEXDL3OKMnP5Y4.53PVMOlX0XJ3pgPfAE7CGxi', NULL, '2017-04-02 05:28:36', '2017-04-02 05:28:36');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191)),
  ADD KEY `password_resets_token_index` (`token`(191));

--
-- Индексы таблицы `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

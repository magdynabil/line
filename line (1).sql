-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 01:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `line`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `parent_category` int(10) NOT NULL DEFAULT 0,
  `created_by` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `parent_category`, `created_by`, `created_at`, `updated_at`) VALUES
(25, '{\"AR\": \"افلام عربي\" , \"EN\": \"Arabic Movies\" , \"FR\": \"\" , \"GR\": \"arabische Filme\"}', '{\"AR\": \"جميع الافلام العربية من دور السينما مباشرة اليك\" , \"EN\": \"Alle arabischen Kinofilme direkt zu Ihnen\" , \"FR\": \"\" , \"GR\": \"All Arabic films from cinemas directly to you\"}', 0, 6, '2022-05-25 18:13:00', '2022-05-25 20:21:11'),
(26, '{\"AR\": \"افلام عربية 2022\" , \"EN\": \"Arab movies 2022\" , \"GR\": \"Arabische filme 2022\"}', '{\"AR\": \"جميعا لافلام العربية  2022\" , \"EN\": \"All Arabic movies 2022\" , \"GR\": \"Alle arabischen Filme 2022\"}', 25, 6, '2022-05-25 18:16:10', '2022-05-25 18:16:10'),
(27, '{\"AR\": \"افلام الاكشن العربية\" , \"EN\": \"arabic action movies\" , \"GR\": \"Arabische Actionfilme\"}', '{\"AR\": \"جميع افلام الاكشن العربي مباشرة من دور السينما اليك \" , \"EN\": \"All Arabic action movies directly from the cinemas to you\" , \"GR\": \"Alle arabischen Actionfilme direkt aus den Kinos zu Ihnen\"}', 25, 6, '2022-05-25 18:18:00', '2022-05-25 18:18:00'),
(28, '{\"AR\": \"افلام كومدية عربية\" , \"EN\": \"Arabic comedy films\" , \"GR\": \"Arabische Komödien\"}', '{\"AR\": \"جميع افلام الكومدية العربية مباشرة من دور السينما اليك \" , \"EN\": \"All Arabic comedy films directly from cinemas Lake\" , \"GR\": \"Alle arabischen Comedy-Filme direkt von Kinos Lake\"}', 25, 6, '2022-05-25 18:20:07', '2022-05-25 18:20:07'),
(29, '{\"AR\": \"افلام هندية\" , \"EN\": \"Hindi films\" , \"GR\": \"Indische Filme\"}', '{\"AR\": \"جميع الافلام الهندية الحصرية \" , \"EN\": \"All indian movies exclusive\" , \"GR\": \"Alle indischen Filme exklusiv\"}', 0, 6, '2022-05-25 18:22:14', '2022-05-25 18:22:14'),
(30, '{\"AR\": \"افلام هندية 2022\" , \"EN\": \"Hindi movies 2022\" , \"GR\": \"Hindifilme 2022\"}', '{\"AR\": \"جميع الافلام الهندية 2022\" , \"EN\": \"All Hindi Movies 2022\" , \"GR\": \"Alle Hindi-Filme 2022\"}', 29, 6, '2022-05-25 18:23:58', '2022-05-25 18:23:58'),
(31, '{\"AR\": \"افلام الاكشن الهندية\" , \"EN\": \"Hindi action movies\" , \"GR\": \"Hindi-Actionfilme\"}', '{\"AR\": \"جميع افلام الاكشن الهندية مباشرة من دور السينما اليك \" , \"EN\": \"All Indian action movies direct from cinemas to you\" , \"GR\": \"Alle indischen Actionfilme direkt aus den Kinos zu Ihnen\"}', 29, 6, '2022-05-25 18:25:37', '2022-05-25 18:25:37'),
(32, '{\"AR\": \"افلام الكومديا الهندية\" , \"EN\": \"Hindi comedy movies\" , \"GR\": \"HINDI-KOMÖDIEN\"}', '{\"AR\": \"جميع افلام الكومدية الهندية مباشرة من دور السينما اليك \" , \"EN\": \"All Hindi Comedy movies straight from cinemas Lake\" , \"GR\": \"Alle Hindi-Comedy-Filme direkt aus dem Kino Lake\"}', 29, 6, '2022-05-25 20:03:10', '2022-05-25 20:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('fbb7d43083d7c584a21297c5af589bb5', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 1653519696, 'a:7:{s:9:\"user_data\";s:0:\"\";s:16:\"default_language\";s:2:\"AR\";s:4:\"name\";s:5:\"magdy\";s:5:\"email\";s:15:\"magdy@gmail.com\";s:2:\"id\";s:1:\"6\";s:6:\"status\";s:1:\"1\";s:8:\"loggedin\";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `movies_id` int(10) NOT NULL,
  `created_by` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `movies_id`, `created_by`, `created_at`, `updated_at`) VALUES
(15, 'bnvbndvbvbvcbcvbv', 26, 6, '2022-05-25 23:03:16', '2022-05-25 23:03:16'),
(16, 'hgdfgdfsgfdsg', 26, 6, '2022-05-25 23:03:24', '2022-05-25 23:03:24'),
(17, 'hgdfgdfsgfdsg', 26, 6, '2022-05-25 23:03:29', '2022-05-25 23:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `language_shortcut` varchar(20) NOT NULL,
  `created_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language_shortcut`, `created_by`) VALUES
(10, 'arabic', 'AR', 6),
(11, 'english', 'EN', 6),
(12, 'GERMANY', 'GR', 6),
(13, 'frensh', 'FR', 6);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `poster` varchar(5000) NOT NULL,
  `trailer` varchar(5000) NOT NULL,
  `film` varchar(5000) NOT NULL,
  `category` int(10) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `poster`, `trailer`, `film`, `category`, `created_by`, `created_at`, `updated_at`) VALUES
(16, '{\"AR\": \"الانس والنمس\" , \"EN\": \"man and mongoose\" , \"FR\": \"homme et mangouste\" , \"GR\": \"MANN UND MUNGO\"}', '{\"AR\": \"فيلم الإنس والنمس 2021 في إطار الرعب الكوميدي،\" , \"EN\": \"The Man and the Mongoose 2021 movie in the framework of comedy horror,\" , \"FR\": \"Le film L\'Homme et la Mangouste 2021 dans le cadre d\'une comédie d\'horreur,\" , \"GR\": \"DER FILM THE MAN AND THE MONGOOSE 2021 IM RAHMEN DER HORRORKOMÖDIE,\"}', '{\"title\":\"MAN AND MONGOOSE\" , \"alt\":\" MAN AND MONGOOSE\" , \"path\": \"images/movies/6f1d0ce3166c76e574a0d2f110342f00.jpg\"}', '{\"title\":\"MAN AND MONGOOSE\" , \"alt\":\" MAN AND MONGOOSE\" , \"path\": \"images/movies/f29a4cb3802139df34415de9f6d41b29.mp4\"}', '{\"title\":\"MAN AND MONGOOSE\" , \"alt\":\" MAN AND MONGOOSE\" , \"path\": \"images/movies/8ecd8b5efc121aea59de8d8ed29f753a.mp4\"}', 28, 6, '2022-05-25 21:58:56', '2022-05-25 21:58:56'),
(17, '{\"AR\": \"واحد تاني\" , \"EN\": \"another one\" , \"FR\": \"Arabic movie in the context of comedy\" , \"GR\": \"noch einer\"}', '{\"AR\": \"فيلم عربي في اطار الكومديا \" , \"EN\": \"Arabic movie in the context of comedy\" , \"FR\": \"Arabic movie in the context of comedy\" , \"GR\": \"Arabic movie in the context of comedy\"}', '{\"title\":\"NOCH EINER\" , \"alt\":\" NOCH EINER\" , \"path\": \"images/movies/77382793bdac9fefe43f864a49e7aace.jpg\"}', '{\"title\":\"NOCH EINER\" , \"alt\":\" NOCH EINER\" , \"path\": \"images/movies/f256db76d7ab07b93e331f877794e35e.mp4\"}', '{\"title\":\"NOCH EINER\" , \"alt\":\" NOCH EINER\" , \"path\": \"images/movies/43c0ca3e9170c9fd18b9df0d5d771636.mp4\"}', 28, 6, '2022-05-25 22:02:25', '2022-05-25 22:02:25'),
(18, '{\"AR\": \"حامل اللقب\" , \"EN\": \"title holder\" , \"FR\": \"title holder\" , \"GR\": \"title holder\"}', '{\"AR\": \"فيلم عربي في اطار الكومديا \" , \"EN\": \"Arabic movie in the context of comedy\" , \"FR\": \"Arabic movie in the context of comedy\" , \"GR\": \"Arabic movie in the context of comedy\"}', '{\"title\":\"title holder\" , \"alt\":\" title holder\" , \"path\": \"images/movies/7b5c5df64581ebd9037a3f68aaefdaaa.jpg\"}', '{\"title\":\"title holder\" , \"alt\":\" title holder\" , \"path\": \"images/movies/7880a35152d507dea827dbcfa548b44a.mp4\"}', '{\"title\":\"title holder\" , \"alt\":\" title holder\" , \"path\": \"images/movies/1120a71a1baad63c3789a662edd4b858.mp4\"}', 28, 6, '2022-05-25 22:05:45', '2022-05-25 22:05:45'),
(19, '{\"AR\": \"العنكبوت\" , \"EN\": \"spider\" , \"FR\": \"spider\" , \"GR\": \"spider\"}', '{\"AR\": \"العنكبوت فيلم مغامرة واكشن مثير\" , \"EN\": \"Spider is a thrilling action adventure movie\" , \"FR\": \"Spider is a thrilling action adventure movie\" , \"GR\": \"Spider is a thrilling action adventure movie\"}', '{\"title\":\"spider\" , \"alt\":\" spider\" , \"path\": \"images/movies/9b63bd65dd925de07af39357ef3957e1.jpg\"}', '{\"title\":\"spider\" , \"alt\":\" spider\" , \"path\": \"images/movies/97b977ce1531bdb633f6096dc096c03f.mp4\"}', '{\"title\":\"spider\" , \"alt\":\" spider\" , \"path\": \"images/movies/d7878cbe770ffd017d4dbcf85f0946d5.mp4\"}', 27, 6, '2022-05-25 22:07:57', '2022-05-25 22:07:57'),
(20, '{\"AR\": \"الممر\" , \"EN\": \"the passage\" , \"FR\": \"the passage\" , \"GR\": \"the passage\"}', '{\"AR\": \"فيلم اكشن تدور احداثة في اطار عملية لتحرير بعض الاسري\" , \"EN\": \"An action movie that revolves around the process of liberating some prisoners\" , \"FR\": \"An action movie that revolves around the process of liberating some prisoners\" , \"GR\": \"An action movie that revolves around the process of liberating some prisoners\"}', '{\"title\":\"THE PASSAGE\" , \"alt\":\" THE PASSAGE\" , \"path\": \"images/movies/9a0acb1ffb3e8456762baed395b18a66.jpg\"}', '{\"title\":\"THE PASSAGE\" , \"alt\":\" THE PASSAGE\" , \"path\": \"images/movies/5647b2e4c21970e10cfd7259c86db0b5.mp4\"}', '{\"title\":\"THE PASSAGE\" , \"alt\":\" THE PASSAGE\" , \"path\": \"images/movies/0f3d851d12b7f930fa36a2514933ae83.mp4\"}', 27, 6, '2022-05-25 22:11:22', '2022-05-25 22:11:22'),
(21, '{\"AR\": \"العارف \" , \"EN\": \"the knower\" , \"FR\": \"the knower\" , \"GR\": \"the knower\"}', '{\"AR\": \"فيلم اثارة وتشويق \" , \"EN\": \"Thriller and suspense movie\" , \"FR\": \"Thriller and suspense movie\" , \"GR\": \"Thriller and suspense movie\"}', '{\"title\":\"the knower\" , \"alt\":\" the knower\" , \"path\": \"images/movies/7bfa1ccf5dd8a169280ba00dee3f2d7a.jpg\"}', '{\"title\":\"the knower\" , \"alt\":\" the knower\" , \"path\": \"images/movies/b977d10d9e4bfc77794fc6820e308c0a.mp4\"}', '{\"title\":\"the knower\" , \"alt\":\" the knower\" , \"path\": \"images/movies/62b7e8e7a9c414e2c0e9a251103f552f.mp4\"}', 26, 6, '2022-05-25 22:15:46', '2022-05-25 22:15:46'),
(22, '{\"AR\": \"الجريمة\" , \"EN\": \"the crime\" , \"FR\": \"the crime\" , \"GR\": \"the crime\"}', '{\"AR\": \"فيلم عربي 2022\" , \"EN\": \"The Crime Arabic movie 2022\" , \"FR\": \"The Crime Arabic movie 2022\" , \"GR\": \"The Crime Arabic movie 2022\"}', '{\"title\":\"the crime\" , \"alt\":\" the crime\" , \"path\": \"images/movies/1cd3f16c172c319f03384528584f3c65.jpg\"}', '{\"title\":\"THE CRIME\" , \"alt\":\" THE CRIME\" , \"path\": \"images/movies/ee5812dd3bbba7b58641ef94fce57f93.mp4\"}', '{\"title\":\"THE CRIME\" , \"alt\":\" THE CRIME\" , \"path\": \"images/movies/977a1dfd13417186837e752df111cd6b.mp4\"}', 26, 6, '2022-05-25 22:18:52', '2022-05-25 22:18:52'),
(23, '{\"AR\": \"اصحاب ولا اعز\" , \"EN\": \"Friends or dear ones\" , \"FR\": \"Friends or dear ones\" , \"GR\": \"Friends or dear ones\"}', '{\"AR\": \"فيلم عربي 2022\" , \"EN\": \"All Arabic movies 2022\" , \"FR\": \"ALL ARABIC MOVIES 2022\" , \"GR\": \"ALL ARABIC MOVIES 2022\"}', '{\"title\":\"Friends or dear ones\" , \"alt\":\" Friends or dear ones\" , \"path\": \"images/movies/840a7ba60642d5680b2960a6d2fc2c51.jpg\"}', '{\"title\":\"Friends or dear ones\" , \"alt\":\" Friends or dear ones\" , \"path\": \"images/movies/3c70e3e58cfbd4d0d16b16b164ad2dc6.mp4\"}', '{\"title\":\"Friends or dear ones\" , \"alt\":\" Friends or dear ones\" , \"path\": \"images/movies/a2a95ac8eaacb094ba1efbe004111a51.mp4\"}', 26, 6, '2022-05-25 22:21:07', '2022-05-25 22:21:07'),
(24, '{\"AR\": \"ماكو\" , \"EN\": \"mako\" , \"FR\": \"mako\" , \"GR\": \"mako\"}', '{\"AR\": \"فيلم عربي 2022\" , \"EN\": \"Arabic action movie\" , \"FR\": \"ARABIC ACTION MOVIE\" , \"GR\": \"ARABIC ACTION MOVIE\"}', '{\"title\":\"mako\" , \"alt\":\" ARABIC ACTION MOVIE\" , \"path\": \"images/movies/8945bea88147af705fb8a22d75a2d1a9.jpg\"}', '{\"title\":\"mako\" , \"alt\":\" mako\" , \"path\": \"images/movies/51880cd44984be081925789086a23693.mp4\"}', '{\"title\":\"mako\" , \"alt\":\" mako\" , \"path\": \"images/movies/1e11b1828d4f04913956d8785e2848d3.mp4\"}', 27, 6, '2022-05-25 22:23:23', '2022-05-25 22:23:23'),
(25, '{\"AR\": \"كولي نمبر وان \" , \"EN\": \"Collie number one\" , \"FR\": \"Collie number one\" , \"GR\": \"Collie number one\"}', '{\"AR\": \"فيلم هندي كومدي\" , \"EN\": \"Hindi comedy movie\" , \"FR\": \"Hindi comedy movie\" , \"GR\": \"Hindi comedy movie\"}', '{\"title\":\"Collie number one\" , \"alt\":\" Collie number one\" , \"path\": \"images/movies/99e9a9ac613b02330e857d8806bba308.jpg\"}', '{\"title\":\"Collie number one\" , \"alt\":\" Collie number one\" , \"path\": \"images/movies/ff63b478e3cdb8f02697583b5dca9bcf.mp4\"}', '{\"title\":\"Collie number one\" , \"alt\":\" Collie number one\" , \"path\": \"images/movies/9643bda5b2f89e334c0968fa494fb83a.mp4\"}', 32, 6, '2022-05-25 22:35:01', '2022-05-25 22:35:01'),
(26, '{\"AR\": \"باهوبالي 2\" , \"EN\": \"Bahubali 2\" , \"FR\": \"Bahubali 2\" , \"GR\": \"Bahubali 2\"}', '{\"AR\": \"افلام الاكشن الهندية\" , \"EN\": \"Hindi action movies\" , \"FR\": \"Hindi action movies\" , \"GR\": \"Hindi action movies\"}', '{\"title\":\"Bahubali 2\" , \"alt\":\" Bahubali 2\" , \"path\": \"images/movies/5a939e82269c204c6b4fec6376383f0f.jpeg\"}', '{\"title\":\"Bahubali 2\" , \"alt\":\" Bahubali 2\" , \"path\": \"images/movies/08e697ff54316cc98f9d0cd270044f4b.mp4\"}', '{\"title\":\"Bahubali 2\" , \"alt\":\" Bahubali 2\" , \"path\": \"images/movies/16b2c953fb366c6aa1b776a92b96fbb0.mp4\"}', 31, 6, '2022-05-25 22:38:33', '2022-05-25 22:38:33'),
(27, '{\"AR\": \"تايجر وزويا\" , \"EN\": \"tiger and zoya\" , \"FR\": \"tiger and zoya\" , \"GR\": \"tiger and zoya\"}', '{\"AR\": \"افلام هندية 2022\" , \"EN\": \"tiger and zoya hindi movies 2022\" , \"FR\": \"tiger and zoya hindi movies 2022\" , \"GR\": \"tiger and zoya hindi movies 2022\"}', '{\"title\":\"tiger and zoya\" , \"alt\":\" tiger and zoya\" , \"path\": \"images/movies/ed09c7dcad2cd631daa41a13b15b2f91.jpg\"}', '{\"title\":\"tiger and zoya\" , \"alt\":\" tiger and zoya\" , \"path\": \"images/movies/3989c3dac8172e2e463a88b6fbf770c7.mp4\"}', '{\"title\":\"tiger and zoya\" , \"alt\":\" tiger and zoya\" , \"path\": \"images/movies/aa20ca7cdf273ecf1c08c6a4ffc03918.mp4\"}', 30, 6, '2022-05-25 22:40:42', '2022-05-25 22:40:42'),
(28, '{\"AR\": \"أنغريزي متوسط\" , \"EN\": \"Angrezi Medium\" , \"FR\": \"ANGREZI MEDIUM\" , \"GR\": \"ANGREZI MEDIUM\"}', '{\"AR\": \"فيلم اكشن هندي\" , \"EN\": \"Hindi action movie\" , \"FR\": \"Hindi action movie\" , \"GR\": \"Hindi action movie\"}', '{\"title\":\"ANGREZI MEDIUM\" , \"alt\":\" ANGREZI MEDIUM\" , \"path\": \"images/movies/cf2e8c7ebdbe25d844c0c17e18df9e76.jpg\"}', '{\"title\":\"ANGREZI MEDIUM\" , \"alt\":\" ANGREZI MEDIUM\" , \"path\": \"images/movies/562af7cc83d60baff3b6879a93d4370a.mp4\"}', '{\"title\":\"ANGREZI MEDIUM\" , \"alt\":\" ANGREZI MEDIUM\" , \"path\": \"images/movies/b5b1c7138a6e84a1e3fe1661a2436cc5.mp4\"}', 31, 6, '2022-05-25 22:43:50', '2022-05-25 22:43:50'),
(29, '{\"AR\": \"  مذنب\" , \"EN\": \"Guilty\" , \"FR\": \"Guilty\" , \"GR\": \"Guilty\"}', '{\"AR\": \"افلام الاكشن الهندية\" , \"EN\": \"Hindi action movie\" , \"FR\": \"HINDI ACTION MOVIE\" , \"GR\": \"HINDI ACTION MOVIE\"}', '{\"title\":\"Guilty\" , \"alt\":\" Guilty\" , \"path\": \"images/movies/339e48641e9ee6e9af7e33e7514cea7b.jpg\"}', '{\"title\":\"Guilty\" , \"alt\":\" Guilty\" , \"path\": \"images/movies/8c74d21b156adb858509f025a992606b.mp4\"}', '{\"title\":\"Guilty\" , \"alt\":\" Guilty\" , \"path\": \"images/movies/885052047e19460e3affdb2869d3fbdb.mp4\"}', 31, 6, '2022-05-25 22:46:04', '2022-05-25 22:46:04'),
(30, '{\"AR\": \"هندي ميديم\" , \"EN\": \"Indian medium\" , \"FR\": \"Indian medium\" , \"GR\": \"Indian medium\"}', '{\"AR\": \"فيلم هندي كومدي\" , \"EN\": \"Hindi comedy movie\" , \"FR\": \"HINDI COMEDY MOVIE\" , \"GR\": \"HINDI COMEDY MOVIE\"}', '{\"title\":\"Indian medium\" , \"alt\":\" INDIAN MEDIUM\" , \"path\": \"images/movies/49996e61b91df34d7fb778696aab7d13.jpg\"}', '{\"title\":\"INDIAN MEDIUM\" , \"alt\":\" INDIAN MEDIUM\" , \"path\": \"images/movies/d74574ed72d55c5d25331f533f2fa783.mp4\"}', '{\"title\":\"INDIAN MEDIUM\" , \"alt\":\" INDIAN MEDIUM\" , \"path\": \"images/movies/d2b244eabbb5a1d407a788267a5e768c.mp4\"}', 32, 6, '2022-05-25 22:49:55', '2022-05-25 22:49:55'),
(31, '{\"AR\": \"باغي 3\" , \"EN\": \"Baaghi 3\" , \"FR\": \"BAAGHI 3\" , \"GR\": \"BAAGHI 3\"}', '{\"AR\": \"فيلم هندي كومدي\" , \"EN\": \"Hindi comedy movie\" , \"FR\": \"HINDI COMEDY MOVIE\" , \"GR\": \"HINDI COMEDY MOVIE\"}', '{\"title\":\"BAAGHI 3\" , \"alt\":\" BAAGHI 3\" , \"path\": \"images/movies/7a69b575e29e75de4ec06da6292e7739.jpg\"}', '{\"title\":\"BAAGHI 3\" , \"alt\":\" BAAGHI 3\" , \"path\": \"images/movies/a7df51ca176bc8b5992130e5166a1067.mp4\"}', '{\"title\":\"BAAGHI 3\" , \"alt\":\" BAAGHI 3\" , \"path\": \"images/movies/7fe7a94a6c2a60477c1ea2eb1c7b3926.mp4\"}', 32, 6, '2022-05-25 22:53:09', '2022-05-25 22:53:09'),
(32, '{\"AR\": \"ربوش 2022\" , \"EN\": \"RUPOSH 2022\" , \"FR\": \"RUPOSH 2022 \" , \"GR\": \"RUPOSH 2022 \"}', '{\"AR\": \"فيلم هندي 2022\" , \"EN\": \"Hindi  movies 2022\" , \"FR\": \"HINDI  MOVIES 2022\" , \"GR\": \"HINDI  MOVIES 2022\"}', '{\"title\":\"RUPOSH 2022\" , \"alt\":\" RUPOSH 2022\" , \"path\": \"images/movies/500d6c68575e722cdf235d187c359fbf.jpg\"}', '{\"title\":\"RUPOSH 2022\" , \"alt\":\" RUPOSH 2022\" , \"path\": \"images/movies/1122a2de8702bdee5e472ba0f187e54c.mp4\"}', '{\"title\":\"RUPOSH 2022\" , \"alt\":\" RUPOSH 2022\" , \"path\": \"images/movies/b7fbc3e12e7b1c473376355ae2c2670e.mp4\"}', 30, 6, '2022-05-25 22:56:02', '2022-05-25 22:56:02'),
(33, '{\"AR\": \"ضد الحقيقة النهائية\" , \"EN\": \"Antim The Final Truth\" , \"FR\": \" ANTIM THE FINAL TRUTH \" , \"GR\": \" ANTIM THE FINAL TRUTH \"}', '{\"AR\": \"فيلم هندي 2022\" , \"EN\": \"Hindi  movies 2022\" , \"FR\": \"HINDI  MOVIES 2022\" , \"GR\": \"HINDI  MOVIES 2022\"}', '{\"title\":\"ANTIM THE FINAL TRUTH\" , \"alt\":\" ANTIM THE FINAL TRUTH\" , \"path\": \"images/movies/32b2099d51c88670a0180a9ebe820b9b.jpg\"}', '{\"title\":\"ANTIM THE FINAL TRUTH\" , \"alt\":\" ANTIM THE FINAL TRUTH\" , \"path\": \"images/movies/09d69302ab0dbac1e0a3a60394c7d465.mp4\"}', '{\"title\":\"ANTIM THE FINAL TRUTH\" , \"alt\":\" ANTIM THE FINAL TRUTH\" , \"path\": \"images/movies/71d7e10ec9cfb2e876ed612a94c37495.mp4\"}', 30, 6, '2022-05-25 22:58:35', '2022-05-25 22:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0 is user 1 is admin ',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(6, 'magdy', 'magdy@gmail.com', '0a2ad9b7b5fd4878e3cd30bc7b987758973b2ba972cf878e6abe022a1a6878f8075a6e8bac44d714509f208a784178005380c8cc98d6359556a2622e23e7c114', 1, '2022-05-25 18:06:14', '2022-05-25 21:01:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_categorys_fk` (`created_by`),
  ADD KEY `categories_subcategories_fk` (`parent_category`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_comment_fk` (`movies_id`),
  ADD KEY `user_movies_fk` (`created_by`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_languages_fk` (`created_by`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorys_moves_fk` (`category`),
  ADD KEY `user_moves_fk` (`created_by`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `movies_comment_fk` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_movies_fk` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `user_languages_fk` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `categorys_moves_fk` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_moves_fk` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

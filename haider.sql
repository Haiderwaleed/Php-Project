-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 09:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haider`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gadgets`
--

CREATE TABLE `gadgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` longtext NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` longtext NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `link`, `image`) VALUES
(2, 'About Me', '<p><strong>Introduction</strong></p>\r\n<p>Bachelor degree in software engineering with a great understanding on software methodologies. Great communication skills with fluency in Arabic, Bulgarian and very good level in English. Fundamental knowledge in backend and frontend programming skills.</p>\r\n<p><strong>Where I\'m From</strong></p>\r\n<p>I\'m originally from Iraq, Baghdad.</p>\r\n<p><strong>What are your favorite hobbies?</strong></p>\r\n<p>My favorite hobby is building things on the internet like ecommerce sites and email marketing campaigns.</p>\r\n<p><strong>What\'s your dream job?</strong></p>\r\n<p>My dream job is Ethical Hacker.</p>\r\n<p><strong>Why do you want to be a web developer?</strong></p>\r\n<p>Because programming is awesome and programming for the internet is even more awesome.</p>', '', './uploads/5fa2b65927453.jpg'),
(3, 'Contact', '<h2 style=\"text-align: center;\"><strong>Get in touch with me</strong></h2>\r\n<p><strong>Email:</strong> haiderwaleed1994@gmail.com<br /><strong>Phone:</strong> 0893368755</p>\r\n<p><strong>Address:</strong> Sofia-Lozenets</p>\r\n<p><code><iframe style=\"border: 0;\" tabindex=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187673.308693818!2d23.18386297025225!3d42.69534680336567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2sSofia!5e0!3m2!1sen!2sbg!4v1603815401149!5m2!1sen!2sbg\" width=\"600\" height=\"450\" frameborder=\"0\" allowfullscreen=\"\" aria-hidden=\"false\"></iframe></code></p>', '', './uploads/5fa2b68bbcbdc.jpg'),
(4, 'My Web Projects', '', './', NULL),
(12, 'Video Projects', '<p><code><iframe src=\"https://www.youtube.com/embed/xMoVwPIL2rA\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"\"></iframe><iframe src=\"https://www.youtube.com/embed/z8BRnMH48BQ\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"\"></iframe></code></p>\r\n<p><code></code></p>', '', ''),
(13, 'Photoshop Project', '', '', './uploads/5fa2bf5c9848f.jpg'),
(16, '', '', '', './uploads/5fb4066b48bcd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `body`, `image`, `url`) VALUES
(9, 'Техноглас', '<p>Ние предлагаме не само продукт , а и услуга. Нашата задача е да разберем клиента и неговите нужди и желания и тогава даваме решение , което да задоволи неговите потребности.Подхождаме с внимание към всеки клиент индивидуално , като предоставяме консултация,вземане на размер и монтаж. Всички нестандартни решения са предизвикателство за нас. Нашата цел е да създадем доверие в клиента и да докажем , че продуктите на Tehnoglass са символ на съвременен дизайн и високо качество</p>', './uploads/5f9851987ca44.jpg', 'https://technoglassbg.com/'),
(10, 'ДНК - Паспорт', '<p>Генетичен паспорт. Научна и надеждна прогноза за здравето. Фактът, че гените ни играят огромна роля в живота ни, всеки знае. Много хора знаят, че е възможно да се направи генетичен анализ на бащинството или генетичното предразположение към болестта. Но малко хора се чудеха защо ви е необходим човешки генетичен паспорт. Междувременно генетиката се развива, наистина \"служи\" на човек и може да отговори не само на въпроса защо, но и какво да прави. Например, можете да установите генетична предразп</p>', './uploads/5f98536aacd76.jpg', 'https://dnapassport.bg/75611'),
(17, 'Маестро парк ООД', '<p>Маестро парк ООД е частна компания, работеща на пазара от 1995година. Собственици и управител на фирмата са ландшафтни архитекти. Работници и служители са водещи специалисти с над 10 годишен опит. През тези години ние сме изпълнили над 50 по-големи проекти и множество малки. В началото бяха малките обекти. В последствие в нашата листа присъстват изпълнени обекти от различен функционален тип.</p>', './uploads/5f985573985a5.jpg', 'https://maestro-park.com/'),
(18, 'Майор и Ко', '<p>Фирмата е създадена през 1995 година. Ние предлагаме на своите клиенти над 3000 артикула за изграждане на отоплителни, водопроводни, канализационни, газоснабдителни и климатични инсталации. За изминалите години се утвърдихме, като една от водещите в бранша с богат асортимент от помпи и хидрофорни системи. Дейността на Майор и Ко ООД развиваме в три основни направления: Внос и дистрибуция на компоненти за отоплителни, газови, водопроводни, канализационни и климатични системи; Инженеринг и консу</p>', './uploads/5f98570b98b5c.jpg', 'http://www.majorico.com/'),
(19, 'Езиков център', '<p>Езиков център &bdquo;EVEN- Evocation in Education&rdquo; Предлага целогодишно обучение по Английски език за деца и Възрастни Курсовете за ученици през учебната година са от м. октомври до края на м. май или средата на месец юни за сертификатните курсове. Посещенията са два пъти седмично по един, два или три учебни часа в зависимост от нивото и възрастта на учениците. Курсовете могат да се провеждат сутрин или следобяд.</p>', './uploads/5f98576d697f2.jpg', 'https://evenevocation.com/'),
(26, '3artfood', '<p>&ldquo;Агро Сантия&ldquo; ООД &ldquo;Агро Сантия&ldquo; ООД, &bdquo;Агро Сантино&ldquo; ООД, &bdquo;Агролоджик&ldquo; ООД, &bdquo;Агрохърбс&ldquo; ЕООД, &bdquo;Агросип&ldquo; ООД, &bdquo;Снак Арт&ldquo; АД, &bdquo;Конекс- Тива&ldquo; ООД, &bdquo;Беса Валей Уайнъри&ldquo; ООД. В областта на земеделието обработваме около 140 000 декара арендувана земя и произвеждаме годишно около 60 000 тона зърнени, маслодайни и технически култури, варива, картофи, билки, зеленчуци и плодове. При нас работят едни от най-добрите агрономи и агро-мениджъри в страната, това н</p>', './uploads/5fa2a2c2cb64e.jpg', 'http://3artfood.bg/'),
(27, 'Rubbish Movers', '<p><strong><em>Rubbish Movers іѕ а рrоfеѕѕіоnаl соmраnу thаt рrоvіdеѕ аll kіndѕ оf rubbіѕh rеmоvаl ѕеrvісеѕ. Wе fосuѕ оn сuѕtоmеr nееdѕ аnd аѕ thаt рrоvіdе thе bеѕt рrоfеѕѕіоnаlѕ fоr thе јоb. Ву bооkіng wіth uѕ, уоu rесеіvе thе fоllоwіng аdvаntаgеѕ: А tеаm оf twо wоrkеrѕ, whо аrе vеrу ехреrіеnсеd, ѕtrоng, quаlіfіеd, аnd рrоfеѕѕіоnаl. Тhеу аrе ѕресіаllу trаіnеd аnd еquірреd tо саrrу оut thе јоb uр tо ѕtаndаrdѕ аnd fаѕt аt thаt! Nо аddіtіоnаl сhаrgеѕ fоr dіѕроѕаlѕ, rесусlіng, fuеl соѕt etc.Frее vіеwіng аnd рrісе</em></strong></p>', './uploads/5fa2a32ab0593.jpg', 'https://rubbishmovers.co.uk/'),
(28, 'Pаботни дрехи', '<p>Създадена през 1999 год. в София, фирма &ldquo;ЕТ &ndash; 5-ко&rdquo; е успяла през годините да създаде една широка мрежа от клиенти в сферата на търговията.</p>\r\n<p>&nbsp;</p>\r\n<p>Като търговско представителство на френската фирма BAYLE&amp;CO , дистрибутор на италианската фирма GIBLOR&rsquo;S, както и на френската ROBUR , разполагаме с магазин и склад в гр.София, чрез който организираме дистрибуцията на работно облекло от Франция,Италия и Америка.</p>\r\n<p>&nbsp;</p>', './uploads/5fa2a838db804.PNG', 'https://rabotnidrehi.eu/'),
(32, 'haider111', '<p>ddddd1111</p>', './uploads/5fb4090e36841.PNG', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`) VALUES
(4, 'Haiderwaleed1994@gmail.com', '5544444444', 'Haider', 'Abdulhussein2'),
(5, 'steven.poh@talkremit.com', '5544444444', 'waleed', 'royal'),
(6, 'haider@gmail.com', '1234', 'Haider', 'Waleed'),
(9, 'admin@admin.admin', '1234', 'now', 'admin'),
(15, 'admin@a.com', '1234', 'admin', 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gadgets`
--
ALTER TABLE `gadgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gadgets`
--
ALTER TABLE `gadgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2019 at 08:04 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baigiamojodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojai`
--

DROP TABLE IF EXISTS `darbuotojai`;
CREATE TABLE IF NOT EXISTS `darbuotojai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vardas` varchar(100) NOT NULL,
  `pavarde` varchar(100) NOT NULL,
  `aprasymas` varchar(1000) NOT NULL,
  `nuotrauka` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `darbuotojai`
--

INSERT INTO `darbuotojai` (`id`, `vardas`, `pavarde`, `aprasymas`, `nuotrauka`) VALUES
(4, 'Jonas', 'Jonaitis', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.\r\n\r\nDonec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'img/profile1.jpg'),
(5, 'Petras', 'Petraitis', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'img/profile2.jpg'),
(6, 'Tomas', ' Tomaitis', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.\r\n\r\nDonec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'img/profile3.jpg'),
(7, 'Tadas', 'Tadaitis', 'Culpa animi cupiditate eligendi repellat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum quis, soluta molestiae iure tempore quidem laborum corporis dolore aliquam, ipsa sunt aspernatur aliquid suscipit tenetur, minus omnis deserunt unde maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eum corrupti quas voluptate, repellendus incidunt consectetur! Quidem officia obcaecati vero similique corrupti laborum rem dolores molestiae mollitia? Voluptate, officiis labore.', 'img/david.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

DROP TABLE IF EXISTS `foto`;
CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `foto1` varchar(30) CHARACTER SET utf8 NOT NULL,
  `foto2` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prek_id` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `foto1`, `foto2`, `prek_id`) VALUES
(24, 'ft21.jpg', 'ft21-2.jpg', 21),
(5, 'ft2.jpg', 'ft2-2.jpg', 2),
(6, 'ft3.jpg', 'ft3-2.jpg', 3),
(7, 'ft4.jpg', 'ft4-2.jpg', 4),
(8, 'ft5.jpg', 'ft5-2.jpg', 5),
(9, 'ft6.jpg', 'ft6-2.jpg', 6),
(10, 'ft7.jpg', 'ft7-2.jpg', 7),
(11, 'ft8.jpg', 'ft8-2.jpg', 8),
(12, 'ft9.jpg', 'ft9-2.jpg', 9),
(13, 'ft10.jpg', 'ft10-2.jpg', 10),
(14, 'ft11.jpg', 'ft11-2.jpg', 11),
(15, 'ft12.jpg', 'ft12-2.jpg', 12),
(16, 'ft13.jpg', 'ft13-2.jpg', 13),
(17, 'ft14.jpg', 'ft14-2.jpg', 14),
(18, 'ft15.jpg', 'ft15-2.jpg', 15),
(19, 'ft16.jpg', 'ft16-2.jpg', 16),
(20, 'ft17.jpg', 'ft17-2.jpg', 17),
(21, 'ft18.jpg', 'ft18-2.jpg', 18),
(22, 'ft19.jpg', 'ft19-2.jpg', 19),
(23, 'ft20.jpg', 'ft20-2.jpg', 20),
(31, 'ft22.jpg', 'ft22-2.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `kontaktai`
--

DROP TABLE IF EXISTS `kontaktai`;
CREATE TABLE IF NOT EXISTS `kontaktai` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pavadinimas` varchar(30) NOT NULL,
  `adresas` varchar(60) NOT NULL,
  `pastokod` varchar(60) NOT NULL,
  `tel` varchar(60) NOT NULL,
  `bankSasNr` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontaktai`
--

INSERT INTO `kontaktai` (`id`, `pavadinimas`, `adresas`, `pastokod`, `tel`, `bankSasNr`) VALUES
(1, 'MB Mediniai Medžiai', 'Kauno g. 100-10, Kaunas', 'LT-11122', '+37011111111', 'LT010101010101010101');

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

DROP TABLE IF EXISTS `prekes`;
CREATE TABLE IF NOT EXISTS `prekes` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pavadinimas` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kaina` float NOT NULL,
  `kiekis` int(6) NOT NULL,
  `aprasymas` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `pozicija` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `pavadinimas`, `kaina`, `kiekis`, `aprasymas`, `pozicija`) VALUES
(2, 'Christopher Sittin', 64.99, 989, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati autem nisi accusamus natus recusandae exercitationem ut facilis inventore atque unde voluptas assumenda laudantium sequi accusantium, est itaque laborum quibusdam. Porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aperiam, officiis mollitia numquam voluptate magni adipisci minus voluptates laboriosam porro distinctio maiores, perferendis saepe molestias amet et quia doloribus natus.', 9),
(3, 'Toad\'s Stool', 39.99, 969, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vero. Laborum minus animi dolores, dolorem, aspernatur nihil repellat quaerat amet, iure itaque eius. Doloremque minus voluptatibus, rem enim reprehenderit dicta!', 5),
(4, 'The Big Sit', 99.99, 1000, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quam corrupti, nesciunt eveniet, amet assumenda error vel maxime aut consequatur ipsum vitae, ratione odio reprehenderit itaque animi tenetur tempora! Enim?', 21),
(5, 'Emperor\'s throne', 80, 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, perspiciatis? Culpa, commodi nobis. Sit vero beatae eveniet doloribus ducimus est. In reprehenderit voluptates debitis fugiat, optio consequatur libero voluptatem beatae.', 40),
(6, 'Cloud3000', 15.5, 968, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi officia maxime explicabo neque, eligendi perspiciatis vel quidem provident ex illo, necessitatibus magnam delectus eum laudantium alias architecto recusandae exercitationem reprehenderit!', 2),
(7, 'SittenatorX', 30.66, 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem at consequatur excepturi incidunt tempora nobis nostrum, voluptatum quae sit, maxime possimus veniam repellendus praesentium dignissimos quisquam adipisci minus commodi quo.', 61),
(8, 'ipoggu', 25.25, 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, beatae delectus repudiandae aspernatur eligendi, praesentium asperiores omnis alias similique quod sint, numquam quasi quisquam. Aliquam esse illum voluptates animi. Voluptates.', 15),
(9, 'Eistedd', 31.11, 957, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quam animi aperiam, cumque rem quia amet fugit eius id aliquid ab tenetur dolor ullam perferendis aspernatur in. Nulla, eveniet. Expedita.', 33),
(10, 'The Iron Seat', 999.99, 1000, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos quisquam porro qui corporis rem quis cupiditate expedita pariatur, exercitationem corrupti. Delectus nemo dolorum laborum aperiam sapiente alias nisi. Neque, numquam!', 3),
(11, 'Sitting Dead', 666, 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quis quod quidem odio animi fugit pariatur! Impedit rerum quibusdam adipisci. Cupiditate sapiente minima fuga repudiandae fugiat corporis quibusdam excepturi neque.', 9),
(12, 'Kelmas', 5, 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, eligendi iure, earum dolore culpa in quas vitae eos minima saepe fuga omnis nostrum vero qui facilis laboriosam optio doloremque adipisci.', 1),
(13, 'Kupstelis', 13.13, 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nam aspernatur amet optio, temporibus adipisci cum iusto ratione recusandae quasi dolorem animi maxime unde quisquam molestiae eligendi voluptates repellat qui?', 4),
(14, 'Sitzen', 19.69, 1000, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum quidem, aut vel qui quibusdam nulla ut natus libero commodi. Voluptatem dignissimos cumque consectetur molestiae suscipit commodi sint, culpa optio fugiat.', 19),
(15, 'Sentar', 12.69, 1000, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui officiis voluptates temporibus repellat exercitationem. Unde impedit dolores repellendus a. Eligendi illum facere repellendus, qui ad officia nihil sint. Asperiores, cupiditate?', 18),
(16, 'Duduk', 33.33, 919, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore laudantium fugiat, consectetur eaque optio saepe nesciunt, culpa quibusdam reiciendis aspernatur enim unde quasi eveniet, ipsum quo sunt atque eius dicta.', 22),
(17, 'Oturmak', 51.29, 1000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, harum quidem beatae esse totam temporibus rem laborum quaerat nobis modi asperiores neque consectetur recusandae iusto voluptates consequuntur fuga dolor nostrum.', 26),
(18, 'Zauna', 49.45, 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, perspiciatis cumque omnis esse quasi, aspernatur mollitia vitae magni illum soluta maiores eos facere a expedita doloremque, reiciendis nobis ipsa incidunt.', 32),
(19, 'Hlala', 38.99, 1000, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab pariatur illum possimus, voluptate aliquid asperiores ipsum animi modi aut in perferendis voluptas fugit. Perferendis, dolore eius nisi doloremque dolores sit.', 44),
(20, 'Asseoir', 55.55, 1000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, possimus incidunt! Necessitatibus cupiditate perspiciatis provident voluptas minima sapiente non dignissimos consequuntur vel incidunt, corrupti eius sit, eum laboriosam mollitia et.', 47),
(21, 'Oturmaq', 77.17, 1000, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, excepturi. Ab impedit vero fugit quaerat sint, distinctio voluptatum at! Deleniti maiores voluptatum ab consequatur id, quis odio soluta similique non!', 46);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'adminas', 'adminas123', '2019-11-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `uzsakovas`
--

DROP TABLE IF EXISTS `uzsakovas`;
CREATE TABLE IF NOT EXISTS `uzsakovas` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vardas` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pavard` varchar(30) CHARACTER SET utf8 NOT NULL,
  `emailas` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(50) CHARACTER SET utf8 NOT NULL,
  `adresas` varchar(50) CHARACTER SET utf8 NOT NULL,
  `miestas` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pastkod` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzsakovas`
--

INSERT INTO `uzsakovas` (`id`, `vardas`, `pavard`, `emailas`, `tel`, `adresas`, `miestas`, `pastkod`) VALUES
(114, 'Ricardas', 'funkcijos', 'test@email.com', '+37011111111', 'gal', 'BBBBBB', 'CCCCCC'),
(115, 'Tadas', 'Tadaitis', 'Pastinis@pastas.lt', '3706666454', 'Adresu adresas 10', 'Meksika', '123264'),
(113, 'Petras', 'TESTAITIS', 'tomo@pastas.lt', '12345648941', 'PAskutinis1', 'PASKUTINIS1', 'PASKUTinis1'),
(111, 'Tadas', 'TESTAS', 'EL@et.lt', '+37011111111', 'Adr adr 10', 'varena', 'lt11111111'),
(110, 'Petras', 'Petraitis', 'Petras@petr.lt', '+37032323232', 'gatviu gatve 20', 'Klaipeda', 'LT1414141414'),
(108, 'Tomas', 'Tomaitis', 'tomo@pastas.lt', '+37011111111', 'Adr adr 10', 'Kaunas', 'lt11111111'),
(109, 'Juozas', 'Juozaitis', 'Juozas@juozas.lt', '+370121212121', 'Adresu adresas 10', 'Vilnius', 'LT12121212121');

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymai`
--

DROP TABLE IF EXISTS `uzsakymai`;
CREATE TABLE IF NOT EXISTS `uzsakymai` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adresas` varchar(50) CHARACTER SET utf8 NOT NULL,
  `miestas` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pastokod` varchar(50) CHARACTER SET utf8 NOT NULL,
  `totkaina` decimal(10,2) NOT NULL,
  `data` date NOT NULL,
  `uzsakov_id` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzsakymai`
--

INSERT INTO `uzsakymai` (`id`, `adresas`, `miestas`, `pastokod`, `totkaina`, `data`, `uzsakov_id`) VALUES
(112, 'Adresu adresas 10', 'Meksika', '123264', '2376.00', '2019-11-03', 115),
(110, 'PAskutinis1', 'PASKUTINIS1', 'PASKUTinis1', '1420.50', '2019-11-03', 113),
(111, 'gal', 'BBBBBB', 'CCCCCC', '3997.00', '2019-11-03', 114),
(108, 'Adr adr 10', 'varena', 'lt11111111', '1199.70', '2019-11-03', 111),
(107, 'gatviu gatve 20', 'Klaipeda', 'LT1414141414', '79200.00', '2019-10-31', 110),
(105, 'Adr adr 10', 'Kaunas', 'lt11111111', '2440.66', '2019-10-31', 108),
(106, 'Adresu adresas 10', 'Vilnius', 'LT12121212121', '8124.24', '2019-10-31', 109);

-- --------------------------------------------------------

--
-- Table structure for table `uzsdetales`
--

DROP TABLE IF EXISTS `uzsdetales`;
CREATE TABLE IF NOT EXISTS `uzsdetales` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uzsakymo_id` int(6) NOT NULL,
  `prekes_id` int(6) NOT NULL,
  `vnt` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzsdetales`
--

INSERT INTO `uzsdetales` (`id`, `uzsakymo_id`, `prekes_id`, `vnt`) VALUES
(57, 107, 11, 100),
(56, 107, 6, 100),
(55, 107, 21, 100),
(54, 106, 16, 30),
(53, 106, 11, 10),
(52, 106, 6, 20),
(51, 106, 21, 2),
(50, 105, 16, 4),
(49, 105, 11, 3),
(48, 105, 6, 10),
(47, 105, 21, 2),
(58, 107, 16, 100),
(59, 108, 3, 30),
(61, 110, 16, 10),
(62, 111, 16, 50),
(63, 112, 16, 20),
(64, 112, 6, 30),
(65, 112, 9, 40);

-- --------------------------------------------------------

--
-- Table structure for table `zinutes`
--

DROP TABLE IF EXISTS `zinutes`;
CREATE TABLE IF NOT EXISTS `zinutes` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vardas` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `data` date NOT NULL,
  `zinute` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zinutes`
--

INSERT INTO `zinutes` (`id`, `vardas`, `email`, `data`, `zinute`) VALUES
(3, 'Kazys', 'test@email.com', '2019-10-28', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2019 at 10:33 AM
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
-- Table structure for table `foto`
--

DROP TABLE IF EXISTS `foto`;
CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `foto1` varchar(30) CHARACTER SET utf8 NOT NULL,
  `foto2` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prek_id` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

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
(27, 'test1.jpeg', 'test2.jpeg', 22),
(28, 'test2.jpeg', 'test3.jpeg', 23),
(29, 'test3.jpeg', 'test3.jpeg', 28),
(30, 'test2.jpeg', 'test2.jpeg', 29);

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
(2, 'Christopher Sittin', 64.99, 12, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati autem nisi accusamus natus recusandae exercitationem ut facilis inventore atque unde voluptas assumenda laudantium sequi accusantium, est itaque laborum quibusdam. Porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aperiam, officiis mollitia numquam voluptate magni adipisci minus voluptates laboriosam porro distinctio maiores, perferendis saepe molestias amet et quia doloribus natus.', 9),
(3, 'Toad\'s Stool', 39.99, 41, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vero. Laborum minus animi dolores, dolorem, aspernatur nihil repellat quaerat amet, iure itaque eius. Doloremque minus voluptatibus, rem enim reprehenderit dicta!', 5),
(4, 'The Big Sit', 99.99, 1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quam corrupti, nesciunt eveniet, amet assumenda error vel maxime aut consequatur ipsum vitae, ratione odio reprehenderit itaque animi tenetur tempora! Enim?', 21),
(5, 'Emperor\'s throne', 80, 13, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, perspiciatis? Culpa, commodi nobis. Sit vero beatae eveniet doloribus ducimus est. In reprehenderit voluptates debitis fugiat, optio consequatur libero voluptatem beatae.', 40),
(6, 'Cloud3000', 15.5, 32, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi officia maxime explicabo neque, eligendi perspiciatis vel quidem provident ex illo, necessitatibus magnam delectus eum laudantium alias architecto recusandae exercitationem reprehenderit!', 2),
(7, 'SittenatorX', 30.66, 10, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem at consequatur excepturi incidunt tempora nobis nostrum, voluptatum quae sit, maxime possimus veniam repellendus praesentium dignissimos quisquam adipisci minus commodi quo.', 61),
(8, 'ipoggu', 25.25, 15, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, beatae delectus repudiandae aspernatur eligendi, praesentium asperiores omnis alias similique quod sint, numquam quasi quisquam. Aliquam esse illum voluptates animi. Voluptates.', 15),
(9, 'Eistedd', 31.11, 18, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quam animi aperiam, cumque rem quia amet fugit eius id aliquid ab tenetur dolor ullam perferendis aspernatur in. Nulla, eveniet. Expedita.', 33),
(10, 'The Iron Seat', 999.99, 5, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos quisquam porro qui corporis rem quis cupiditate expedita pariatur, exercitationem corrupti. Delectus nemo dolorum laborum aperiam sapiente alias nisi. Neque, numquam!', 3),
(11, 'Sitting Dead', 666, 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quis quod quidem odio animi fugit pariatur! Impedit rerum quibusdam adipisci. Cupiditate sapiente minima fuga repudiandae fugiat corporis quibusdam excepturi neque.', 9),
(12, 'Kelmas', 5, 32, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, eligendi iure, earum dolore culpa in quas vitae eos minima saepe fuga omnis nostrum vero qui facilis laboriosam optio doloremque adipisci.', 1),
(13, 'Kupstelis', 13.13, 16, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nam aspernatur amet optio, temporibus adipisci cum iusto ratione recusandae quasi dolorem animi maxime unde quisquam molestiae eligendi voluptates repellat qui?', 4),
(14, 'Sitzen', 19.69, 44, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum quidem, aut vel qui quibusdam nulla ut natus libero commodi. Voluptatem dignissimos cumque consectetur molestiae suscipit commodi sint, culpa optio fugiat.', 19),
(15, 'Sentar', 12.69, 39, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui officiis voluptates temporibus repellat exercitationem. Unde impedit dolores repellendus a. Eligendi illum facere repellendus, qui ad officia nihil sint. Asperiores, cupiditate?', 18),
(16, 'Duduk', 33.33, 21, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore laudantium fugiat, consectetur eaque optio saepe nesciunt, culpa quibusdam reiciendis aspernatur enim unde quasi eveniet, ipsum quo sunt atque eius dicta.', 22),
(17, 'Oturmak', 51.29, 34, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit, harum quidem beatae esse totam temporibus rem laborum quaerat nobis modi asperiores neque consectetur recusandae iusto voluptates consequuntur fuga dolor nostrum.', 26),
(18, 'Zauna', 49.45, 9, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, perspiciatis cumque omnis esse quasi, aspernatur mollitia vitae magni illum soluta maiores eos facere a expedita doloremque, reiciendis nobis ipsa incidunt.', 32),
(19, 'Hlala', 38.99, 99, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab pariatur illum possimus, voluptate aliquid asperiores ipsum animi modi aut in perferendis voluptas fugit. Perferendis, dolore eius nisi doloremque dolores sit.', 44),
(20, 'Asseoir', 55.55, 80, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, possimus incidunt! Necessitatibus cupiditate perspiciatis provident voluptas minima sapiente non dignissimos consequuntur vel incidunt, corrupti eius sit, eum laboriosam mollitia et.', 47),
(21, 'Oturmaq', 77.17, 70, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, excepturi. Ab impedit vero fugit quaerat sint, distinctio voluptatum at! Deleniti maiores voluptatum ab consequatur id, quis odio soluta similique non!', 46),
(22, 'TEST', 999, 999, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 999),
(23, 'sadasda', 777, 777, 'PPPPPPPPPPPPPPPPPPPP PPPPPPPPPPPPPPPP PPPPPPPPPPPPPPPPPPPP PPPPPPPPPPPPPPPPPPPPP', 777),
(28, 'TEST', 999, 999, '&lt;script&gt;!?@', 123),
(29, 'sadasda', 987, 111, '&quot;a&quot; &#039;a&#039;', 666);

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzsakovas`
--

INSERT INTO `uzsakovas` (`id`, `vardas`, `pavard`, `emailas`, `tel`, `adresas`, `miestas`, `pastkod`) VALUES
(2, 'toks', 'anoks', 'kazkoks@kazkoks.lt', '76465481561', 'blatu', 'varena', '1541as3d13'),
(3, 'TOMAS', 'TOMAITIS', 'EL@et.lt', '12345648941', 'Gatviu gatve', 'Kaunas', '16465'),
(6, 'Paskutinis', 'PASKUTINIS', 'PASKUTINIS', '1111111111111', 'PAskutinis1', 'PASKUTINIS1', 'PASKUTinis1'),
(8, 'Jonas', 'Petraitis', 'test@email.com', '+37011111111', 'Adr adr 10', 'kaunas', 'lt11111111');

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
  `totkaina` float NOT NULL,
  `data` date NOT NULL,
  `uzsakov_id` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzsakymai`
--

INSERT INTO `uzsakymai` (`id`, `adresas`, `miestas`, `pastokod`, `totkaina`, `data`, `uzsakov_id`) VALUES
(5, 'TEST', 'TEST', 'TEST123', 222, '2019-10-27', 3),
(6, 'baltijos', 'baltijos', 'TEST', 123456, '2019-10-27', 2);

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzsdetales`
--

INSERT INTO `uzsdetales` (`id`, `uzsakymo_id`, `prekes_id`, `vnt`) VALUES
(8, 6, 2, 10),
(7, 5, 10, 2);

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

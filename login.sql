-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 25, 2020 at 08:28 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `reteta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `reteta`, `Image`) VALUES
(2, 'Stefan', 'Reteta de chiftelute mexicane cu legume este ideala pentru perioada verii, atunci cand nu vrem sa consumam carne sau preparate cu carne. Inca din copilarie imi placea chiftelele de lume, in special cele cu dovlecei. In copilarie aveam o batranica de care parintii mei aveau grija si ea facea in fiecare vara chiftelute de dovlecei. Ne dadea si noua si erau mega delicioase. Nu erau sarate, ci dulci, un fel de gogosele, pudrate din belsug cu zahar. Imi place si varianta sarata a lor si imi plac toate chiftelutele cu legume in general. Imi plac si chiftelutele clasice, insa cele cu legume sunt perfecte pentru a folosi legumele din frigider si sunt mult mai sanatoase.\r\n\r\nPentru aceasta reteta de chiftelute mexicane cu legume am folosit amestecul Mexico mix de la Bonduelle. V-am spus ca sunt mare fan conserve si imi place sa le am in casa pentru a le folosi oricand vreau sa fac ceva repede. Scot una-doua conserve din dulap si incropesc ceva gustos, rapid si usor pentru ai mei. Acest amestec are porumb, mazare si ardei gras si e perfect pentru orice preparat. Cum eu iubesc porumbul, este genul meu de conserva. Daca doriti puteti folosi si porumbul simplu la conserva de la Bonduelle. Ambele sunt foarte bune si merg perfact in aceasta reteta. Evident, folositi ce va place mai mult sau ce aveti in casa.', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 31 mai 2022 à 13:45
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ersd`
--
CREATE DATABASE IF NOT EXISTS `ersd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ersd`;

-- --------------------------------------------------------

--
-- Structure de la table `utilisation`
--

DROP TABLE IF EXISTS `utilisation`;
CREATE TABLE IF NOT EXISTS `utilisation` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `classe` varchar(5) DEFAULT NULL,
  `marks` int(8) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `classe` (`classe`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisation`
--

INSERT INTO `utilisation` (`id`, `classe`, `marks`) VALUES
(1, 'B001X', 1),
(2, 'B002X', 0),
(3, 'B001X', 1),
(4, 'B001X', 1),
(5, 'B001X', 1),
(6, 'B002X', 0),
(7, 'B002X', 1),
(8, 'B002X', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

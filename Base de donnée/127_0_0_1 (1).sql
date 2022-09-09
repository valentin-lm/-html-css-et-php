-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 juin 2022 à 09:35
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
--
-- Base de données : `image`
--
CREATE DATABASE IF NOT EXISTS `image` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `image`;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Base de données : `inscription`
--
CREATE DATABASE IF NOT EXISTS `inscription` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `inscription`;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(450) DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `token` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `msg`, `ip`, `token`, `date_inscription`) VALUES
(64, 'pascel le moual', 'mapacevaal@hotmail.com', 'bounjour je suis pascal', '::1', '346683765db61c4dbdda1310ad94cc1eb154ee9fdaf7887c980ac8eb60a0d41002debb108a566bdb836e80bfafab1193f8991a5719e54b4c15dfe940eb62768c', '2022-06-02 21:54:36'),
(62, 'bounjour je suis pascal', 'bounjour@hotmail.com', 'bounjour je suis pascal', '::1', '810208b70ffc50eb8830ada31b98b473ba5805745907543e7b50fef6a21d1ab534275b1fc7eea3fbdd5ec7cb18168dfa9f59bcb101c1a3fbc2f2bb0d3a26c0f9', '2022-06-02 21:55:25'),
(78, 'valou', 'valou@gmaim.com', 'description', '::1', '9ee6603fdd4d3d71c251c11288901055d4d47932d8910669cc132d938495ab4c89865960d4bbf9b1eb83861831a2ad1eeb55248729ad6482024617891cf57523', '2022-06-02 22:33:57'),
(77, 'valentin', 'tutu@gmail.com', 'description test ', '::1', '437352a914aaa3797421f7129f270ca67ee7ba211eaef088db0ae20b3eb8f5264036b0cb7f4f12f45f2e9df01d47799d15f03b21ed792e334bdd59bf259f70fe', '2022-06-02 22:30:26');
--
-- Base de données : `villes`
--
CREATE DATABASE IF NOT EXISTS `villes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `villes`;

-- --------------------------------------------------------

--
-- Structure de la table `villes_france_free`
--

DROP TABLE IF EXISTS `villes_france_free`;
CREATE TABLE IF NOT EXISTS `villes_france_free` (
  `ville_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ville_departement` varchar(3) DEFAULT NULL,
  `ville_population_2012` int(8) UNSIGNED DEFAULT NULL COMMENT 'approximatif',
  PRIMARY KEY (`ville_id`),
  KEY `ville_departement` (`ville_departement`)
) ENGINE=MyISAM AUTO_INCREMENT=36835 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `villes_france_free`
--

INSERT INTO `villes_france_free` (`ville_id`, `ville_departement`, `ville_population_2012`) VALUES
(36831, '04', 25),
(36832, '04', 25),
(36833, '02', 15),
(36834, '02', 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

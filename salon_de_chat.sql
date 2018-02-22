-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 13 fév. 2018 à 09:54
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salon_de_chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL,
  `date_enregistrement` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_user`, `pseudo`, `email`, `password`, `date_enregistrement`) VALUES
(1, 'RENARD', 'renard@roux.fr', 'renardroux', '2018-02-07 23:00:00'),
(2, 'vyuftyqsd', 'Pd@admin.fr', 'connard', '2018-02-08 16:24:36'),
(3, 'fjk sdh', 'bqd@khdlgs.fr', 'connard', '2018-02-09 10:39:47'),
(4, 'fjk sdh', 'bqd@khdlgs.fr', 'connard', '2018-02-09 10:42:33'),
(5, 'fjk sdh', 'bqd@khdlgs.fr', 'dfdfhdsh', '2018-02-09 10:43:03'),
(6, 'fjk sdh', 'bqd@khdlgs.fr', '000000', '2018-02-09 10:44:27'),
(7, 'fjk sdh', 'bqd@khdlgs.fr', '00000', '2018-02-09 10:48:25'),
(8, 'fjk sdh', 'bqd@khdlgs.fr', '00000', '2018-02-09 12:39:39'),
(9, '0000', 'bqd@khdlgs.fr', '0000', '2018-02-09 12:52:04'),
(10, '0000', 'bqd@khdlgs.fr', 'hhhh', '2018-02-09 12:56:02'),
(11, 'coucou', 'coucou@admin.fr', 'coucou', '2018-02-09 14:05:53'),
(12, 'lol', 'lol@lol.lol', 'lol', '2018-02-09 15:58:18');

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

DROP TABLE IF EXISTS `minichat`;
CREATE TABLE IF NOT EXISTS `minichat` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `pseudo` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id_message`, `id_user`, `pseudo`, `message`, `created_at`) VALUES
(1, NULL, 'coucou', 'cc', '2018-02-09 15:50:00'),
(2, NULL, 'coucou', 'cc', '2018-02-09 15:50:35'),
(3, NULL, 'coucou', 'coucou', '2018-02-09 15:50:46'),
(4, NULL, 'lol', 'lol', '2018-02-09 15:58:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

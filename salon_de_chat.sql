-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 15 mars 2018 à 16:54
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_user`, `pseudo`, `email`, `password`, `date_enregistrement`) VALUES
(1, 'Gogole01600', 'Lormelet01@hotmail.fr', '$2y$10$uFFmyC13lncORAnVYOCb/u3unnTMB1BiN7zfrEpK7ReuJxFMVfEkS', '2018-03-14 16:43:25'),
(2, 'Nul63000', 'lol@gmail.fr', '$2y$10$VCpf8CKoSN55jBURgUwrl.poZ82oYU9GwQY3sI.HfedY9e1oFUMHW', '2018-03-14 16:49:15'),
(3, 'Coco63600', 'lol@hotnet.fr', '$2y$10$gtHAnXyx1JWH1We5AaXDHuHfuedvvVNOaHZUyDmVXDKKzonKvlzKK', '2018-03-15 08:59:27'),
(4, 'Footeux01', 'Lormelet01@hotmail.fr', '$2y$10$ILWcqoF4Akk/P4xPk7fkOuJiz4SHuI8fej1l8tUHnjmkB9eegEtx6', '2018-03-15 09:07:46'),
(5, 'Alicia03600', 'alicialormelet@gmail.com', '$2y$10$vlrjdgjrbyEdX.Di8naVBedmjqEmOfN9wUkA6sw.XPyDp9Poeht9S', '2018-03-15 09:11:43'),
(6, 'Footeux03600', 'stevelormelet@gmail.com', '$2y$10$NBosXKyRZs6PQKr99KeZPeh/YoZjgTUAFwUlxIqb0m8HVFFX0M4b6', '2018-03-15 10:58:06'),
(7, 'Allo03600', 'stevelormelet@hotmail.fr', '$2y$10$X1KJJSWdSm60BH1AruSJEOWEXFpsZ5iQsO/kQF.NS/P2hTwqQIvPO', '2018-03-15 16:08:30'),
(8, 'Allo03600', 'stevelormelet@hotmail.fr', '$2y$10$cd8jOoRWnkuZB97xi/GrIO4bmcceNNLiIQGOeUhJTeTvhQQaWScqy', '2018-03-15 16:10:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id_message`, `id_user`, `pseudo`, `message`, `created_at`) VALUES
(1, NULL, 'coucou', 'cc', '2018-02-09 15:50:00'),
(2, NULL, 'coucou', 'cc', '2018-02-09 15:50:35'),
(3, NULL, 'coucou', 'coucou', '2018-02-09 15:50:46'),
(4, NULL, 'lol', 'lol', '2018-02-09 15:58:27'),
(5, NULL, 'superman03', 'enfin connecté', '2018-03-07 15:57:07'),
(6, NULL, 'footeux01', 'tg', '2018-03-08 14:32:54'),
(7, NULL, 'Guignol63', 'fdp', '2018-03-09 14:10:23'),
(8, NULL, 'Gogole01600', 'cc', '2018-03-14 16:43:51'),
(9, NULL, 'Gogole01600', 'ça marche pas', '2018-03-14 16:44:25'),
(10, NULL, 'Nul63000', '', '2018-03-14 16:49:19'),
(11, NULL, 'Nul63000', '0245', '2018-03-14 16:49:21'),
(12, NULL, 'Nul63000', 'lol', '2018-03-14 16:50:23'),
(13, NULL, 'Nul63000', 'foxes', '2018-03-14 16:57:40'),
(14, NULL, 'Nul63000', 'oxes', '2018-03-14 16:57:45'),
(15, NULL, 'Nul63000', 'fox', '2018-03-14 16:57:51'),
(16, NULL, 'Nul63000', 'fox', '2018-03-14 16:57:56'),
(17, NULL, 'Nul63000', 'fox', '2018-03-14 16:57:59'),
(18, NULL, 'Nul63000', 'fox', '2018-03-14 16:58:02'),
(19, NULL, 'Nul63000', 'fox', '2018-03-14 16:58:04'),
(20, NULL, 'Nul63000', 'fox', '2018-03-14 16:58:06'),
(21, NULL, 'Nul63000', 'fox', '2018-03-14 16:58:14'),
(22, NULL, 'Coco63600', 'fdj', '2018-03-15 08:59:47'),
(23, NULL, 'Alicia03600', '0', '2018-03-15 09:11:47'),
(24, NULL, 'Alicia03600', 'coucou', '2018-03-15 10:00:17'),
(25, NULL, 'Alicia03600', 'cc', '2018-03-15 13:08:52'),
(26, NULL, 'Alicia03600', '', '2018-03-15 13:16:13'),
(27, NULL, 'Alicia03600', 'fff', '2018-03-15 13:39:19'),
(28, NULL, 'Allo03600', '03600', '2018-03-15 16:10:44'),
(29, NULL, 'Allo03600', 'coucou', '2018-03-15 16:11:05'),
(30, NULL, 'Allo03600', '03600', '2018-03-15 16:12:08'),
(31, NULL, 'Allo03600', 'Super', '2018-03-15 16:53:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

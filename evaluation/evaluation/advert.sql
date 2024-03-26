-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 oct. 2023 à 13:52
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wf3_php_intermediaire_zakaria`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` varchar(380) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL,
  `prix` varchar(10) NOT NULL,
  `reservation_message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `titre`, `description`, `code_postal`, `ville`, `type`, `prix`, `reservation_message`) VALUES
(16, 'eazfrzfzg', 'rgzergzg', '92230', 'gennevilliers', 'location', '1000', 'reservé !'),
(15, 'SAAAL', 'bien', '12345', 'bonneville', 'location', '450', 'reservé !'),
(14, 'Soleil', 'magnifique', '00000', 'maldive', 'location', '5000', 'reservé !'),
(13, 'Soleil', 'magnifique', '00000', 'maldive', 'location', '5000', 'reservé !'),
(11, 'oueee', 'pk pas', '10232', 'chepa', 'location', '550', 'incroyable'),
(12, 'pouaaah', 'pas mal', '13000', 'marseille', 'location', '210', 'incroyable');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

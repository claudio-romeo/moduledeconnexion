-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 déc. 2021 à 09:50
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(6, 'ert', 'jean', 'jean', '$2y$10$lkxZ.vpKQOZZU39lvwI43eyRICF/Mf2s6Lm.RWuS0G.oZDJXaedaW'),
(4, 'romeo', 'claudio', '7c222fb2927d828af22f592134e8932480637c0d', 'lemarsien13@gmail.com'),
(7, 'a', 'a', 'a', '$2y$10$O.qu0qUvsvnVEhv0o55I6.Z3WgE45UMt5Ok3cQJ4pvpa6rcAnkQ6a'),
(8, 'z', 'z', 'z', '$2y$10$4gJF2Zw6Qvv1a1RbYzuGjeTpUsAwzK8YKQcOWmeHyITcPGMiCd1q2'),
(9, 'JohanB', 'Johan', 'Bouguermouh', '$2y$10$ugtpFaTsBihEq08PLJfkHO3/prn.QeFsXfTm.Cxig6cVZ6L0ZAoge');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

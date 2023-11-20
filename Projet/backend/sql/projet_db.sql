-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 19 nov. 2023 à 18:16
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
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `aliments`
--

DROP TABLE IF EXISTS `aliments`;
CREATE TABLE IF NOT EXISTS `aliments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `glucide` decimal(10,2) DEFAULT NULL,
  `lipide` decimal(10,2) DEFAULT NULL,
  `proteine` decimal(10,2) DEFAULT NULL,
  `sel` decimal(10,2) DEFAULT NULL,
  `sucre` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `aliments`
--

INSERT INTO `aliments` (`id`, `nom`, `type`, `glucide`, `lipide`, `proteine`, `sel`, `sucre`) VALUES
(1, 'Pomme', 'Fruit', '19.00', '0.00', '1.50', '0.00', '19.00'),
(2, 'Poulet', 'Viande', '0.00', '0.00', '31.00', '0.07', '0.00'),
(6, 'Riz', 'Céréale', '28.00', '0.00', '3.00', '0.00', '0.00'),
(7, 'Brocoli', 'Légume', '11.00', '1.00', '4.00', '0.00', '2.00'),
(8, 'Lait', 'Produit laitier', '12.00', '0.00', '8.00', '0.00', '12.00'),
(9, 'Oeuf', 'Oeuf', '1.00', '6.00', '6.00', '0.00', '0.00'),
(10, 'Saumon', 'Poisson', '0.00', '13.00', '22.00', '0.00', '0.00'),
(11, 'Pâtes', 'Céréale', '26.00', '1.00', '5.00', '0.00', '0.00'),
(12, 'Banane', 'Fruit', '27.00', '0.00', '1.00', '0.00', '14.00'),
(13, 'Carotte', 'Légume', '10.00', '0.00', '1.00', '0.00', '5.00'),
(14, 'Yaourt', 'Produit laitier', '5.00', '3.00', '3.00', '0.00', '5.00'),
(15, 'Dinde', 'Viande', '0.00', '1.00', '30.00', '1.00', '0.00'),
(16, 'Pain', 'Céréale', '47.00', '2.00', '9.00', '1.00', '4.00'),
(17, 'Pomme de terre', 'Légume', '30.00', '0.00', '2.00', '0.00', '1.00'),
(18, 'Avocat', 'Légume', '9.00', '15.00', '2.00', '0.00', '1.00'),
(19, 'Quinoa', 'Céréale', '21.00', '2.00', '4.00', '0.00', '1.00'),
(20, 'Orange', 'Légume', '15.00', '0.00', '1.00', '0.00', '12.00'),
(21, 'Chou fleur', 'Légume', '5.00', '0.00', '2.00', '0.00', '2.00'),
(22, 'Cabillaud', 'Poisson', '0.00', '1.00', '18.00', '0.00', '0.00'),
(23, 'Emmental', 'Produit laitier', '0.00', '32.00', '28.00', '1.00', '0.00'),
(24, 'Steak', 'Viande', '0.00', '26.00', '26.00', '0.00', '0.00'),
(25, 'Aubergine', 'Légume', '6.00', '0.00', '1.00', '0.00', '4.00'),
(26, 'Chocolat', 'Dessert', '60.00', '31.00', '7.00', '0.00', '51.00'),
(27, 'Saucisse', 'Viande', '2.00', '26.00', '14.00', '2.00', '0.00'),
(28, 'Poivron', 'Légume', '6.00', '0.00', '1.00', '0.00', '4.00'),
(29, 'Thon', 'Poisson', '0.00', '1.00', '29.00', '1.00', '0.00');

-- --------------------------------------------------------

--
-- Structure de la table `journal`
--

DROP TABLE IF EXISTS `journal`;
CREATE TABLE IF NOT EXISTS `journal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int DEFAULT NULL,
  `id_aliment` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `quantite` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `journal`
--

INSERT INTO `journal` (`id`, `id_utilisateur`, `id_aliment`, `date`, `quantite`) VALUES
(1, 1, 1, '2023-11-19', '100.00'),
(2, 1, 10, '2023-11-18', '54.00'),
(3, 1, 15, '2023-11-16', '80.00'),
(4, 1, 20, '2023-11-16', '30.00'),
(5, 1, 2, '2023-11-12', '50.00'),
(6, 1, 22, '2023-11-01', '100.00'),
(7, 1, 24, '2023-11-03', '90.00'),
(8, 1, 26, '2023-11-07', '40.00'),
(9, 1, 21, '2023-11-04', '100.00'),
(10, 1, 24, '2023-11-14', '55.00'),
(11, 2, 6, '2023-11-08', '100.00'),
(12, 2, 8, '2023-11-16', '50.00'),
(13, 2, 28, '2023-11-18', '20.00'),
(14, 2, 25, '2023-11-19', '50.00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int NOT NULL,
  `sexe` varchar(200) NOT NULL,
  `sport` varchar(200) NOT NULL,
  `objectif` int NOT NULL,
  `identifiant` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `age`, `sexe`, `sport`, `objectif`, `identifiant`, `mdp`, `photo`) VALUES
(3, 'Domange', 'Alix', 'alix.domange@etu.imt-nord-europe.fr', 20, 'F', 'moyen', 1800, 'alixdomange', 'mdp1', NULL),
(4, 'nom2', 'prenom2', 'nom.prenom@etu.imt-nord-europe.fr', 65, 'M', 'bas', 2000, 'user1', 'mdpuser1', NULL),
(5, 'nom3', 'prenom3', 'nom.prenom3@etu.imt-nord-europe.fr', 40, 'F', 'élevé', 2500, 'user2', 'mdpuser2', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

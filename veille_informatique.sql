-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 25 nov. 2022 à 01:39
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `veille_informatique`
--

-- --------------------------------------------------------

--
-- Structure de la table `rss`
--

CREATE TABLE `rss` (
  `IdFlux` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `TitleFlux` varchar(30) DEFAULT NULL,
  `CategoryFlux` varchar(50) DEFAULT NULL,
  `TypeFlux` varchar(50) NOT NULL,
  `AuthorFlux` varchar(20) DEFAULT NULL,
  `DateFlux` date DEFAULT NULL,
  `UrlFlux` varchar(40) DEFAULT NULL,
  `DescriptionFlux` varchar(500) DEFAULT NULL,
  `ImageFlux` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rss`
--

INSERT INTO `rss` (`IdFlux`, `TitleFlux`, `CategoryFlux`, `TypeFlux`, `AuthorFlux`, `DateFlux`, `UrlFlux`, `DescriptionFlux`, `ImageFlux`) VALUES
(1, 'Titre', 'CyberSécurité', 'cybersecurite', 'Wallans', '2022-10-08', 'www.vaquie-pro.com', "Ceci est une toute petite description concernant l'article et le résumant.", 'https://www.kaspersky.com/content/en-global/images/repository/isc/2017-images/What-is-Cyber-Security.jpg'),
(2, 'Titre2', 'Intelligence Artficielle', 'ia', 'Wallans', '2022-10-19', 'www.youtube.com', 'IOE?fffkfkFIPOEFNIOEFIJEFIINIEFefejfepofjfpiozhjeifhjei', 'https://www.referenseo.com/wp-content/uploads/2019/03/image-attractive.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rss`
--
ALTER TABLE `rss`
  ADD PRIMARY KEY (`IdFlux`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rss`
--
ALTER TABLE `rss`
  MODIFY `IdFlux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `projet` (
  `IdProjet` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `TitleProjet` varchar(50) DEFAULT NULL,
  `TypeProjet` varchar(50) NOT NULL,
  `DifficulteProjet` int(11) NOT NULL,
  `UrlProjet` varchar(40) DEFAULT NULL,
  `DescriptionProjet` varchar(500) DEFAULT NULL,
  `ImageProjet` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `projet` (`IdProjet`, `TitleProjet`, `TypeProjet`, `DifficulteProjet`, `UrlProjet`, `DescriptionProjet`, `ImageProjet`) VALUES
(1, 'PhotoForYou', 'scolaire', '3', 'https://github.com/JohnWallans/photoforyou', "Site internet de ventes et achat de photos par des photographes.", 'img1.png'),
(2, 'Logiciel de gestion du cimetière', 'scolaire', '5', 'https://github.com/JohnWallans/lgc', "Logiciel de gestion et d'administration du cimetière.", 'img1.png');
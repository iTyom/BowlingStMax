-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 12 mars 2018 à 18:28
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Bowling`
--
CREATE DATABASE IF NOT EXISTS `Bowling` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Bowling`;

-- --------------------------------------------------------

--
-- Structure de la table `Formule`
--

CREATE TABLE `Formule` (
  `ID_Formule` int(11) NOT NULL,
  `Libelle_Formule` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `ID_Tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Formule`
--

INSERT INTO `Formule` (`ID_Formule`, `Libelle_Formule`, `Description`, `ID_Tarif`) VALUES
(8, 'Formule Pizza', 'Contient une pizza pour 2, une bouteille pour 4 et 2 parties au choix.', 30),
(9, 'Formule Anniversaire', 'À partir de 6 enfants, boissons et assiettes, 2 parties au choix.', 31),
(10, 'Formule Entreprise', 'Location du bowling/laser à partir de 60 personnes minimum. ', 32);

-- --------------------------------------------------------

--
-- Structure de la table `Horaire`
--

CREATE TABLE `Horaire` (
  `ID_Horaire` int(11) NOT NULL,
  `Libelle_Horaire` varchar(200) NOT NULL,
  `Horaire_Debut` varchar(6) NOT NULL,
  `Horaire_Fin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Horaire`
--

INSERT INTO `Horaire` (`ID_Horaire`, `Libelle_Horaire`, `Horaire_Debut`, `Horaire_Fin`) VALUES
(1, 'Semaine', '14', '23'),
(2, 'Dimanche vacances', '10', '23'),
(11, 'Samedi', '10:00', '01:00'),
(12, 'Dimanche', '10:00', '22:00'),
(13, 'Bowling standard', '10:00', '22:00'),
(14, 'Laser standard', '14:00', '20:00'),
(15, 'Bowling jours férié', '14:00', '20:00'),
(16, 'Semaine Vacances', '10:00', '00:00'),
(18, 'Samedi vacances', '10:00', '00:00');

-- --------------------------------------------------------

--
-- Structure de la table `Jeux`
--

CREATE TABLE `Jeux` (
  `ID_Jeux` int(11) NOT NULL,
  `Nom_Jeux` varchar(50) NOT NULL,
  `ID_Horaire` int(200) NOT NULL,
  `ID_Location` int(11) NOT NULL,
  `ID_Tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Location`
--

CREATE TABLE `Location` (
  `ID_Location` int(11) NOT NULL,
  `Libelle_Location` varchar(200) NOT NULL,
  `ID_Tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Location`
--

INSERT INTO `Location` (`ID_Location`, `Libelle_Location`, `ID_Tarif`) VALUES
(1, 'Location chaussure', 33);

-- --------------------------------------------------------

--
-- Structure de la table `Tab_User`
--

CREATE TABLE `Tab_User` (
  `ID_User` int(11) NOT NULL,
  `Prenom_User` varchar(255) NOT NULL,
  `Nom_User` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Tel` char(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Tab_User`
--

INSERT INTO `Tab_User` (`ID_User`, `Prenom_User`, `Nom_User`, `Mail`, `Tel`, `password`) VALUES
(18, 'tom', 'tom', 'itiome@icloud.com', '567856789', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Structure de la table `Tarif`
--

CREATE TABLE `Tarif` (
  `ID_Tarif` int(11) NOT NULL,
  `Libelle_Tarif` varchar(200) NOT NULL,
  `Valeur_Tarif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Tarif`
--

INSERT INTO `Tarif` (`ID_Tarif`, `Libelle_Tarif`, `Valeur_Tarif`) VALUES
(22, 'Bowling matin', 6.5),
(23, 'Bowling après-midi', 8.5),
(24, 'Bowling soir', 10),
(25, 'Bowling jour férié', 12),
(26, 'Laser matin', 6.5),
(27, 'Laser après-midi', 8.5),
(28, 'Laser soir', 10),
(29, 'Laser jour férié', 12),
(30, 'Formule pizza', 34),
(31, 'Formule anniversaire', 10),
(32, 'Formule entreprise', 34),
(33, 'Location chaussure', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Formule`
--
ALTER TABLE `Formule`
  ADD PRIMARY KEY (`ID_Formule`),
  ADD KEY `ID_Tarif` (`ID_Tarif`);

--
-- Index pour la table `Horaire`
--
ALTER TABLE `Horaire`
  ADD PRIMARY KEY (`ID_Horaire`);

--
-- Index pour la table `Jeux`
--
ALTER TABLE `Jeux`
  ADD PRIMARY KEY (`ID_Jeux`),
  ADD KEY `ID_Horaire` (`ID_Horaire`),
  ADD KEY `ID_Location` (`ID_Location`),
  ADD KEY `ID_Tarif` (`ID_Tarif`);

--
-- Index pour la table `Location`
--
ALTER TABLE `Location`
  ADD PRIMARY KEY (`ID_Location`),
  ADD KEY `FK_TarifLocation` (`ID_Tarif`) USING BTREE;

--
-- Index pour la table `Tab_User`
--
ALTER TABLE `Tab_User`
  ADD PRIMARY KEY (`ID_User`);

--
-- Index pour la table `Tarif`
--
ALTER TABLE `Tarif`
  ADD PRIMARY KEY (`ID_Tarif`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Formule`
--
ALTER TABLE `Formule`
  MODIFY `ID_Formule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `Horaire`
--
ALTER TABLE `Horaire`
  MODIFY `ID_Horaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `Jeux`
--
ALTER TABLE `Jeux`
  MODIFY `ID_Jeux` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Location`
--
ALTER TABLE `Location`
  MODIFY `ID_Location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Tab_User`
--
ALTER TABLE `Tab_User`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `Tarif`
--
ALTER TABLE `Tarif`
  MODIFY `ID_Tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Formule`
--
ALTER TABLE `Formule`
  ADD CONSTRAINT `FK_Tarif` FOREIGN KEY (`ID_Tarif`) REFERENCES `Tarif` (`ID_Tarif`);

--
-- Contraintes pour la table `Jeux`
--
ALTER TABLE `Jeux`
  ADD CONSTRAINT `FK_Horaire` FOREIGN KEY (`ID_Horaire`) REFERENCES `Horaire` (`ID_Horaire`),
  ADD CONSTRAINT `FK_Location` FOREIGN KEY (`ID_Location`) REFERENCES `Location` (`ID_Location`),
  ADD CONSTRAINT `FK_TarifJeux` FOREIGN KEY (`ID_Tarif`) REFERENCES `Tarif` (`ID_Tarif`);

--
-- Contraintes pour la table `Location`
--
ALTER TABLE `Location`
  ADD CONSTRAINT `FK_TarifLocation` FOREIGN KEY (`ID_Tarif`) REFERENCES `Tarif` (`ID_Tarif`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

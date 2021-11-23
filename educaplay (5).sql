-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 05:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educaplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `idAvis` int(11) NOT NULL,
  `contenu` longtext NOT NULL,
  `reclamation` tinytext NOT NULL,
  `dateAvis` date NOT NULL,
  `typeAvis` varchar(20) NOT NULL,
  `idUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `IdCategorie` int(11) NOT NULL,
  `idOffre` int(11) NOT NULL,
  `NomCategorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `contenuCours` longblob NOT NULL,
  `image` longblob NOT NULL,
  `url` varchar(20) NOT NULL,
  `dateCreationCours` date NOT NULL,
  `dateModificationCours` date NOT NULL,
  `idFormation` int(11) DEFAULT NULL,
  `idCours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

CREATE TABLE `enseignant` (
  `idEnseignant` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  `nbformation` int(11) NOT NULL,
  `idCategorie` int(11) DEFAULT NULL,
  `Cv` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `idFormation` int(9) NOT NULL,
  `dateCreation` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `descreptionFormation` varchar(200) DEFAULT NULL,
  `prixFormation` float DEFAULT NULL,
  `id2Categorie` int(11) DEFAULT NULL,
  `nomFormation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jeux`
--

CREATE TABLE `jeux` (
  `idJeux` int(11) NOT NULL,
  `question` varchar(10) DEFAULT NULL,
  `reponseA` varchar(10) DEFAULT NULL,
  `reponseB` varchar(10) DEFAULT NULL,
  `reponseC` varchar(10) DEFAULT NULL,
  `correctAnswer` varchar(10) DEFAULT NULL,
  `idCours` int(11) DEFAULT NULL,
  `idCategorie` int(11) DEFAULT NULL,
  `reponseD` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `joueur`
--

CREATE TABLE `joueur` (
  `idJoueur` int(11) NOT NULL,
  `nbEtoile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `joueur_score`
--

CREATE TABLE `joueur_score` (
  `idJeux` int(11) NOT NULL,
  `idJoueur` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idJeux` int(9) NOT NULL,
  `nbEtoile` int(3) NOT NULL,
  `libelle` varchar(20) NOT NULL,
  `idLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offres`
--

CREATE TABLE `offres` (
  `idOffre` int(11) NOT NULL,
  `dateDebutOffre` date NOT NULL,
  `pourcentageOffre` double NOT NULL,
  `dateFinOffre` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(9) NOT NULL,
  `nomUtilisateur` varchar(20) NOT NULL,
  `prenomUtilisateur` varchar(20) NOT NULL,
  `mdpUtilisateur` varchar(20) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idAvis`),
  ADD KEY `fk_avisUtilisateur` (`idUtilisateur`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IdCategorie`),
  ADD KEY `fk_categorieoffre` (`idOffre`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idCours`),
  ADD KEY `fk_coursFormation` (`idFormation`);

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`idEnseignant`),
  ADD UNIQUE KEY `idCategorie` (`idCategorie`),
  ADD KEY `fk_specialite` (`idCategorie`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idFormation`),
  ADD KEY `fk_idCat` (`id2Categorie`);

--
-- Indexes for table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`idJeux`),
  ADD KEY `idCours` (`idCours`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Indexes for table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`idJoueur`);

--
-- Indexes for table `joueur_score`
--
ALTER TABLE `joueur_score`
  ADD KEY `fk_joueurscore` (`idJeux`),
  ADD KEY `fk_joueurid` (`idJoueur`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD KEY `idJeux` (`idJeux`);

--
-- Indexes for table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`idOffre`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `idAvis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IdCategorie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `idCours` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formation`
--
ALTER TABLE `formation`
  MODIFY `idFormation` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `idJeux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateur` int(9) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`idOffre`) REFERENCES `offres` (`idOffre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`idFormation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`idEnseignant`) REFERENCES `utilisateurs` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enseignant_ibfk_2` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`IdCategorie`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_1` FOREIGN KEY (`id2Categorie`) REFERENCES `categorie` (`IdCategorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jeux`
--
ALTER TABLE `jeux`
  ADD CONSTRAINT `jeux_ibfk_1` FOREIGN KEY (`idCours`) REFERENCES `cours` (`idCours`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jeux_ibfk_2` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`IdCategorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`idJoueur`) REFERENCES `utilisateurs` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `joueur_score`
--
ALTER TABLE `joueur_score`
  ADD CONSTRAINT `joueur_score_ibfk_1` FOREIGN KEY (`idJoueur`) REFERENCES `joueur` (`idJoueur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joueur_score_ibfk_2` FOREIGN KEY (`idJeux`) REFERENCES `jeux` (`idJeux`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `level`
--
ALTER TABLE `level`
  ADD CONSTRAINT `level_ibfk_1` FOREIGN KEY (`idJeux`) REFERENCES `jeux` (`idJeux`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

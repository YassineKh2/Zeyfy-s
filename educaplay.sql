-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 09:47 AM
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
  `idJeux` int(11) NOT NULL,
  `idOffre` int(11) NOT NULL,
  `NomCategorie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `contenuCours` varchar(9) NOT NULL,
  `image` varchar(20) NOT NULL,
  `url` varchar(20) NOT NULL,
  `dateCreationCours` date NOT NULL,
  `dateModificationCours` date NOT NULL,
  `idFormation` int(11) DEFAULT NULL,
  `idCours` int(11) DEFAULT NULL
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
  `idLevel` int(11) DEFAULT NULL,
  `idCategorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeux`
--

INSERT INTO `jeux` (`idJeux`, `question`, `reponseA`, `reponseB`, `reponseC`, `correctAnswer`, `idCours`, `idLevel`, `idCategorie`) VALUES
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `joueur`
--

CREATE TABLE `joueur` (
  `idJoueur` int(11) NOT NULL,
  `nbEtoile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `joueur`
--

INSERT INTO `joueur` (`idJoueur`, `nbEtoile`) VALUES
(1, 3),
(2, 69),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `joueur_score`
--

CREATE TABLE `joueur_score` (
  `idJeux` int(11) NOT NULL,
  `idJoueur` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `joueur_score`
--

INSERT INTO `joueur_score` (`idJeux`, `idJoueur`, `score`) VALUES
(12, 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idJeux` int(9) NOT NULL,
  `nbEtoile` int(3) NOT NULL,
  `libelle` varchar(20) NOT NULL
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
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `mdpUtilisateur`, `admin`, `Email`) VALUES
(1, 'FARAH', 'TORKHANI', 'LOL', 0, 'asma.bouraoui@esprit'),
(2, 'taz', 'tazza', 'fefe', 0, 'ngh@jjyjy.com'),
(3, 'youssef', 'guetat', '0101', 0, 'youssef;guetat@€mail');

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
  ADD KEY `fk_categoriejeux` (`idJeux`),
  ADD KEY `fk_categorieoffre` (`idOffre`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD KEY `fk_coursFormation` (`idFormation`);

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`idEnseignant`),
  ADD KEY `fk_formationE` (`idFormation`),
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
  ADD KEY `FK_categorie` (`idCategorie`);

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
  ADD PRIMARY KEY (`idJeux`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `fk_avisUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_categoriejeux` FOREIGN KEY (`idJeux`) REFERENCES `jeux` (`idJeux`),
  ADD CONSTRAINT `fk_categorieoffre` FOREIGN KEY (`idOffre`) REFERENCES `offres` (`idOffre`);

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `fk_coursFormation` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`idFormation`);

--
-- Constraints for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `fk_formationE` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`idFormation`),
  ADD CONSTRAINT `fk_idenseignant` FOREIGN KEY (`idEnseignant`) REFERENCES `utilisateurs` (`idUtilisateur`),
  ADD CONSTRAINT `fk_specialite` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`IdCategorie`);

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `fk_idCat` FOREIGN KEY (`id2Categorie`) REFERENCES `categorie` (`IdCategorie`);

--
-- Constraints for table `jeux`
--
ALTER TABLE `jeux`
  ADD CONSTRAINT `FK_categorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`IdCategorie`);

--
-- Constraints for table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `fk_idjoueur` FOREIGN KEY (`idJoueur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Constraints for table `joueur_score`
--
ALTER TABLE `joueur_score`
  ADD CONSTRAINT `fk_joueurid` FOREIGN KEY (`idJoueur`) REFERENCES `joueur` (`idJoueur`),
  ADD CONSTRAINT `fk_joueurscore` FOREIGN KEY (`idJeux`) REFERENCES `jeux` (`idJeux`);

--
-- Constraints for table `level`
--
ALTER TABLE `level`
  ADD CONSTRAINT `fk_levelJeux` FOREIGN KEY (`idJeux`) REFERENCES `jeux` (`idJeux`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

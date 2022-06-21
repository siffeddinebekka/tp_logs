Drop databes if exists mlr1;
create database mlr1;
use mlr1;
-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 04 Juin 2017 à 11:04
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mlr1`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `appartements`
--

CREATE TABLE `appartements` (
  `NUMAPPARTEMENT` int(11) NOT NULL,
  `ADRESSE` varchar(120) DEFAULT NULL,
  `VILLE` varchar(120) DEFAULT NULL,
  `CODEPOSTAL` varchar(5) DEFAULT NULL,
  `NUMETAGE` int(11) DEFAULT NULL,
  `NUMPALIER` int(11) DEFAULT NULL,
  `COMPLEMENTADRESSE` varchar(120) DEFAULT NULL,
  `COEFPRIX` varchar(3) DEFAULT NULL,
  `IMAGE` varchar(255) DEFAULT NULL,
  `DESCRIPTIF` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `appartements`
--

INSERT INTO `appartements` (`NUMAPPARTEMENT`, `ADRESSE`, `VILLE`, `CODEPOSTAL`, `NUMETAGE`, `NUMPALIER`, `COMPLEMENTADRESSE`, `COEFPRIX`, `IMAGE`, `DESCRIPTIF`) VALUES
(1, '19 rue Arthur Croquette', 'Charenton Le Pont', '94220', 1, 2, NULL, '100', 'images/appart2.jpg', 'Luxueux appartement de 120m2, classé 4 *, idéalement situé au cœur de la ville, orienté plein sud.<br>Avec 2 chambres, 1 salle de bain, il permet d’accueillir jusqu’à 5 personnes'),
(2, '20 rue Arthur Croquette', 'Charenton Le Pont', '94220', 1, 3, NULL, '100', 'images/appartement2.jpg', ' Niché au cœur de la vieille ville, l’appartement 3 pièces « Modern » de 78 m² accueillir jusqu\'à 4 personnes.'),
(3, '21 rue Arthur Croquette', 'Charenton Le Pont', '94220', 1, 1, NULL, '100', 'images/louerappartement.jpg', ' l\'appartement Romantique est un appartement de charme, totalement rénové dans le style d’un appartement typiquement parisien.');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `NUMTIERS` int(11) NOT NULL,
  `PRENOMTIERS` varchar(30) DEFAULT NULL,
  `NOMTIERS` varchar(30) DEFAULT NULL,
  `DATENAISSTIERS` date DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL,
  `CODEPOSTAL` varchar(5) DEFAULT NULL,
  `ADRESSE` varchar(120) DEFAULT NULL,
  `TELEPHONE` varchar(10) DEFAULT NULL,
  `MAIL` varchar(50) DEFAULT NULL,
  `PASS` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`NUMTIERS`, `PRENOMTIERS`, `NOMTIERS`, `DATENAISSTIERS`, `VILLE`, `CODEPOSTAL`, `ADRESSE`, `TELEPHONE`, `MAIL`, `PASS`) VALUES
(2, 'aazeeer', 'aze', '2012-12-12', 'a', 'a', 'a', 'a', 'a@gmail.com', ''),
(7, 'aze', 'azzazzzz', '2012-12-12', 'az', 'z', 'z', 'z', 'az', ''),
(1, 'Benjamin', 'Kapoor', '1994-03-29', 'Charenton le Pont', '94220', '19 rue Arthur Croquette', '0621821781', 'benjaminkapoor@yahoo.fr', 'azerty94');

-- --------------------------------------------------------

--
-- Structure de la table `contrats`
--

CREATE TABLE `contrats` (
  `NUMCONTRAT` int(11) NOT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contrats`
--

INSERT INTO `contrats` (`NUMCONTRAT`, `DATEDEBUT`, `DATEFIN`) VALUES
(1, '2017-01-03', '2017-01-05');

-- --------------------------------------------------------

--
-- Structure de la table `contratsgestionlocation`
--

CREATE TABLE `contratsgestionlocation` (
  `NUMCONTRAT` int(11) NOT NULL,
  `NUMAPPARTEMENT` int(11) NOT NULL,
  `NUMTIERS` int(11) NOT NULL,
  `PRIXGESTTRIMESTRE` varchar(10) DEFAULT NULL,
  `TARIFTRIMESTRE` varchar(10) DEFAULT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contratsgestionlocation`
--

INSERT INTO `contratsgestionlocation` (`NUMCONTRAT`, `NUMAPPARTEMENT`, `NUMTIERS`, `PRIXGESTTRIMESTRE`, `TARIFTRIMESTRE`, `DATEDEBUT`, `DATEFIN`) VALUES
(855, 555, 5555, NULL, NULL, '2017-06-02', '2017-06-23'),
(16513, 525252, 989, NULL, NULL, '2017-02-18', '2017-02-26'),
(322, 222, 222, NULL, NULL, '2017-06-15', '2017-06-17'),
(12, 12, 12, NULL, NULL, '2017-06-15', '2017-06-22');

-- --------------------------------------------------------

--
-- Structure de la table `contratslocation`
--

CREATE TABLE `contratslocation` (
  `NUMCONTRAT` int(11) NOT NULL,
  `NUMSAISON` int(11) NOT NULL,
  `NUMAPPARTEMENT` int(11) NOT NULL,
  `NUMTIERS` int(11) NOT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contratslocation`
--

INSERT INTO `contratslocation` (`NUMCONTRAT`, `NUMSAISON`, `NUMAPPARTEMENT`, `NUMTIERS`, `DATEDEBUT`, `DATEFIN`) VALUES
(1, 1, 201, 1, '2017-04-02', '2017-04-28'),
(3, 1, 1, 3, '2017-05-01', '2017-05-04'),
(4, 1, 1, 3, '2017-05-08', '2017-05-10'),
(5, 1, 1, 3, '2017-05-08', '2017-05-10'),
(6, 1, 1, 3, '2017-06-26', '2017-06-29');

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE `options` (
  `IDOPTION` char(32) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaires`
--

CREATE TABLE `proprietaires` (
  `NUMTIERS` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `PRENOMTIERS` varchar(30) DEFAULT NULL,
  `NOMTIERS` varchar(30) DEFAULT NULL,
  `DATENAISSTIERS` date DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL,
  `CODEPOSTAL` varchar(5) DEFAULT NULL,
  `ADRESSE` varchar(120) DEFAULT NULL,
  `TELEPHONE` varchar(10) DEFAULT NULL,
  `MAIL` varchar(50) DEFAULT NULL,
  `PASS` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `proprietaires`
--

INSERT INTO `proprietaires` (`NUMTIERS`, `ID`, `PRENOMTIERS`, `NOMTIERS`, `DATENAISSTIERS`, `VILLE`, `CODEPOSTAL`, `ADRESSE`, `TELEPHONE`, `MAIL`, `PASS`) VALUES
(2, 1, 'Marcus', 'Marcus', '2017-04-02', 'Paris', '75010', '10 rue de je ne sais pas quoi', '0606060606', 'marcus@marcus.fr', 'azerty94');

-- --------------------------------------------------------

--
-- Structure de la table `represantants`
--

CREATE TABLE `represantants` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TELEPHONE` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `represantants`
--

INSERT INTO `represantants` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `TELEPHONE`, `password`) VALUES
(1, 'Kapoor', 'Benjamin', 'benjaminkapoor@yahoo.fr', 621821781, '9cf95dacd226dcf43da376cdb6cbba7035218921');

-- --------------------------------------------------------

--
-- Structure de la table `saison`
--

CREATE TABLE `saison` (
  `NUMSAISON` int(11) NOT NULL,
  `LIBELLE` varchar(255) DEFAULT NULL,
  `POURCENTAGESAISON` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `saison`
--

INSERT INTO `saison` (`NUMSAISON`, `LIBELLE`, `POURCENTAGESAISON`) VALUES
(1, 'Printemps ', 10);

-- --------------------------------------------------------

--
-- Structure de la table `tiers`
--

CREATE TABLE `tiers` (
  `NUMTIERS` int(11) NOT NULL,
  `PRENOMTIERS` varchar(30) DEFAULT NULL,
  `NOMTIERS` varchar(30) DEFAULT NULL,
  `DATENAISSTIERS` varchar(10) DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL,
  `CODEPOSTAL` int(5) DEFAULT NULL,
  `ADRESSE` varchar(120) DEFAULT NULL,
  `TELEPHONE` int(10) DEFAULT NULL,
  `MAIL` varchar(50) DEFAULT NULL,
  `PASS` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tiers`
--

INSERT INTO `tiers` (`NUMTIERS`, `PRENOMTIERS`, `NOMTIERS`, `DATENAISSTIERS`, `VILLE`, `CODEPOSTAL`, `ADRESSE`, `TELEPHONE`, `MAIL`, `PASS`) VALUES
(1, 'Benjamin', 'Kapoor', '1994-03-29', 'Charenton', 94220, '19 rue Arthur Croquette', 621821781, 'benjaminkapoor@yahoo.fr', 'Azerty94'),
(3, 'maxime', 'chevalier', '09/20/1996', 'rueil', 92500, '39 rue ', 664252125, 'maxime@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(4, 'azerty', 'azerty', '02/10/2017', 'paris', 75000, 'azerty', 302020202, 'azerty@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `appartements`
--
ALTER TABLE `appartements`
  ADD PRIMARY KEY (`NUMAPPARTEMENT`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`NUMTIERS`);

--
-- Index pour la table `contrats`
--
ALTER TABLE `contrats`
  ADD PRIMARY KEY (`NUMCONTRAT`);

--
-- Index pour la table `contratsgestionlocation`
--
ALTER TABLE `contratsgestionlocation`
  ADD PRIMARY KEY (`NUMCONTRAT`),
  ADD KEY `FK_CONTRATSGESTIONLOCATION_PROPRIETAIRES` (`NUMTIERS`),
  ADD KEY `FK_CONTRATSGESTIONLOCATION_APPARTEMENTS` (`NUMAPPARTEMENT`);

--
-- Index pour la table `contratslocation`
--
ALTER TABLE `contratslocation`
  ADD PRIMARY KEY (`NUMCONTRAT`),
  ADD KEY `FK_CONTRATSLOCATION_CLIENTS` (`NUMTIERS`),
  ADD KEY `FK_CONTRATSLOCATION_SAISON` (`NUMSAISON`),
  ADD KEY `FK_CONTRATSLOCATION_APPARTEMENTS` (`NUMAPPARTEMENT`);

--
-- Index pour la table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`IDOPTION`);

--
-- Index pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  ADD PRIMARY KEY (`NUMTIERS`),
  ADD KEY `FK_PROPRIETAIRES_REPRESANTANTS` (`ID`);

--
-- Index pour la table `represantants`
--
ALTER TABLE `represantants`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `saison`
--
ALTER TABLE `saison`
  ADD PRIMARY KEY (`NUMSAISON`);

--
-- Index pour la table `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`NUMTIERS`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `NUMTIERS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `contratslocation`
--
ALTER TABLE `contratslocation`
  MODIFY `NUMCONTRAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `NUMTIERS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 22 nov. 2020 à 13:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lakbire`
--

-- --------------------------------------------------------

--
-- Structure de la table `bacpc`
--

DROP TABLE IF EXISTS `bacpc`;
CREATE TABLE IF NOT EXISTS `bacpc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` text NOT NULL,
  `pdf_doc` mediumblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecoles`
--

DROP TABLE IF EXISTS `ecoles`;
CREATE TABLE IF NOT EXISTS `ecoles` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ecoles`
--

INSERT INTO `ecoles` (`id`, `name`) VALUES
(12, 'fmd'),
(13, 'fmp'),
(14, 'inpt'),
(15, 'ensam'),
(16, 'ensa'),
(17, 'bacsm'),
(18, 'bacpc'),
(19, 'variationnelles'),
(20, 'topologie'),
(21, 'statistique'),
(22, 'soboleve'),
(23, 'EspaceFonctions'),
(24, 'equationDrivvePartiell'),
(25, 'divers'),
(26, 'distributions'),
(27, 'convexe'),
(28, 'analysenum'),
(29, 'analyse');

-- --------------------------------------------------------

--
-- Structure de la table `maths`
--

DROP TABLE IF EXISTS `maths`;
CREATE TABLE IF NOT EXISTS `maths` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` text NOT NULL,
  `pdf_doc` mediumblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

DROP TABLE IF EXISTS `poste`;
CREATE TABLE IF NOT EXISTS `poste` (
  `id` int(70) NOT NULL AUTO_INCREMENT,
  `titre` varchar(70) DEFAULT NULL,
  `name` varchar(70) DEFAULT NULL,
  `lienvideo` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`id`, `titre`, `name`, `lienvideo`) VALUES
(6, 'Correction concours FMD Rabat 2015 (Ex 3)', 'fmd', 'IK05lSKmNCA'),
(7, ' Concours FMP Oujda Q4 2019/2020', 'fmp', '8FHJb7jO9aQ'),
(8, 'Correction concours FMD Rabat 2015 (Ex 2)', 'fmd', 'XFa1i5sl5LA'),
(9, '\r\n\r\nCorrction Q7 proba concours d\'accès au grandes écoles', 'fmd', 'yvz8AdSCgiA'),
(10, 'Correction Q1 à Q5 concours FMDC Casa 2018', 'fmd', 'Re8Cgl-xZXo'),
(11, 'Correction Q4 concours FMDC Casa 2010', 'fmd', 'zMQ6ZUtu3C8'),
(12, 'Correction concours FMD Rabat 2015 (Ex1)', 'fmd', '1h3XB3-KCyI'),
(13, 'Correction concours FMD Rabat 2016 (Ex2-Ex3)', 'fmd', 'GDmUSuk-gYk'),
(14, 'Correction concours FMD Rabat 2016 (Ex1)', 'fmd', 'tjTLUStGSN8'),
(15, 'Correction concours FMD Casa 2011', 'fmd', 'kAkaWgEfYik'),
(16, 'Correction concours FMD Casa 2010', 'fmd', '1BHFar7eRSw'),
(17, 'Correction Q10 fmd oujda 2014', 'fmd', 'oTq1XmyzzBE'),
(18, 'Q4 concours d\'accès en 1ère Année ENSA MAROC 2016', 'ensa', 'uxCaXBFlw_Q'),
(19, '\r\n\r\nQ1 concours d\'accès en 1ère Année ENSAM 2016', 'ensam', 'A3T5LTyVAb4'),
(20, 'Q11 INPT 2017', 'inpt', 'd-bxEuKxtEs'),
(21, 'Q8 concours d\'accÃ¨s en 1Ã¨re AnnÃ©e des ENSA Maroc 2016', 'ensa', 'BsqGXnzHRM8'),
(22, 'Bac maths Maroc 2018 (Sc maths Ex3)', 'bacsm', 'IP4wFaQugKc');

-- --------------------------------------------------------

--
-- Structure de la table `project_pdf`
--

DROP TABLE IF EXISTS `project_pdf`;
CREATE TABLE IF NOT EXISTS `project_pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` text NOT NULL,
  `pdf_doc` mediumblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'lakbirelomari', '123456789'),
(2, 'lakbirelomari', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

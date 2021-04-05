-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 05 Avril 2021 à 20:00
-- Version du serveur: 5.6.13
-- Version de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `prototype`
--
CREATE DATABASE IF NOT EXISTS `prototype` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prototype`;

-- --------------------------------------------------------

--
-- Structure de la table `ceed`
--

CREATE TABLE IF NOT EXISTS `ceed` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Departement` text NOT NULL,
  `Nombre_de_cle` int(11) NOT NULL,
  `Code_de_cle` text NOT NULL,
  `Nom_piece` text NOT NULL,
  `Batiment` text NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Depot` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `chg`
--

CREATE TABLE IF NOT EXISTS `chg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Departement` text NOT NULL,
  `Nombre_de_cle` int(11) NOT NULL,
  `Code_de_cle` text NOT NULL,
  `Nom_piece` text NOT NULL,
  `Batiment` int(11) NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Depot` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `crpuo`
--

CREATE TABLE IF NOT EXISTS `crpuo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Departement` text NOT NULL,
  `Nombre_de_cle` int(11) NOT NULL,
  `Code_de_cle` text NOT NULL,
  `Nom_piece` text NOT NULL,
  `Batiment` text NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Depot` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cvg`
--

CREATE TABLE IF NOT EXISTS `cvg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Departement` text NOT NULL,
  `Nombre_de_cle` int(11) NOT NULL,
  `Code_de_cle` text NOT NULL,
  `Nom_piece` text NOT NULL,
  `Batiment` text NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Depot` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `eecs`
--

CREATE TABLE IF NOT EXISTS `eecs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Departement` text NOT NULL,
  `Nombre_de_cle` int(11) NOT NULL,
  `Code_de_cle` text NOT NULL,
  `Nom_piece` text NOT NULL,
  `Batiment` text NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Depot` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `eecs`
--

INSERT INTO `eecs` (`ID`, `Nom`, `Prenom`, `Departement`, `Nombre_de_cle`, `Code_de_cle`, `Nom_piece`, `Batiment`, `Date_de_remise`, `Date_de_fin`, `Depot`) VALUES
(1, 'test123', 'jean123', 'eecs', 1, '123', 'fgh', 'STEM', '2021-04-15', '2022-03-11', 20),
(3, 'Miron', 'Gertude', 'CVL', 1, 'CVL-lab-23-c', 'Lab23', 'STEM', '2021-03-08', '2021-03-31', 20);

-- --------------------------------------------------------

--
-- Structure de la table `faculte`
--

CREATE TABLE IF NOT EXISTS `faculte` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Departement` text NOT NULL,
  `Nombre_de_cle` int(11) NOT NULL,
  `Code_de_cle` text NOT NULL,
  `Nom_piece` text NOT NULL,
  `Batiment` text NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Depot` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `general`
--

CREATE TABLE IF NOT EXISTS `general` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `courriel` varchar(50) NOT NULL,
  `Departement` text NOT NULL,
  `Nombre_de_cle` text NOT NULL,
  `Code_de_cle` text NOT NULL,
  `Nom_piece` text NOT NULL,
  `Batiment` text NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Depot` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `general`
--

INSERT INTO `general` (`ID`, `Nom`, `Prenom`, `courriel`, `Departement`, `Nombre_de_cle`, `Code_de_cle`, `Nom_piece`, `Batiment`, `Date_de_remise`, `Date_de_fin`, `Depot`) VALUES
(9, 'Miron', 'Gertude', 'jbake093@uottawa.ca', 'CVL', '1', 'CVL-lab-23-c', 'Lab23', 'STEM', '2021-03-08', '2021-03-31', 20),
(10, 'Test', 'Essai', '', 'PHY', '2', 'PHylab', '23', 'STEM', '2021-04-01', '2022-10-27', 40),
(12, 'Baker', 'Jonathan', 'jolobaker44380@gmail.com', 'ELG', '1', 'ELG2LAB2-c', 'LAB-2C', 'STEM', '2020-09-03', '2024-09-19', 20),
(14, 'test21', 'Jonathan', '', 'PHY', '1', 'lab', 'testing', 'STEM', '2021-03-23', '2021-03-27', 45),
(15, 'Lebrun', 'Patrick', '', 'Dram', '1', 'Local-dance-c01', 'Local-dance-c', 'Batiment', '2021-03-16', '2021-04-01', 20),
(25, 'Baker', 'John', '', 'CVL', '2', 'lab', 'Lab23', 'STEM', '2021-03-05', '2021-04-01', 45),
(26, 'Bakertest', 'Jonathantest', '', 'PHY', '1', 'lab', 'lab23', 'STEM', '2021-03-11', '2021-03-26', 30),
(27, 'Test4', 'Testing4', '', 'CVL', '1', 'CVL-lab-23-c', 'CVL Lab 23', 'STEM', '2021-03-13', '2024-06-01', 20),
(28, 'Test 1', 'Testing1', '', 'PHY', '1', 'lab', 'labo 24', 'STEM', '2021-03-10', '2024-06-14', 20),
(31, 'Prototype', 'Prototype1', '', 'ELG', '1', 'ELG2LAB2-c', 'Lab 2', 'STEM', '2021-03-17', '2021-03-11', 20),
(33, 'jjhh', 'Jonathan', '', 'eecs', '1', 'lab', 'bkr', 'STEM', '2021-03-27', '2022-02-24', 20),
(34, 'Baker', 'Jonathan', '', '', '', '', 'Jonathan Baker', '', '0000-00-00', '0000-00-00', 0),
(35, '123test123', 'luc', '', 'eecs', '1', 'phylab1d', 'phy lab 1', 'STEM', '2021-03-28', '2022-12-12', 20),
(36, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(37, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0),
(38, 'Baker', 'Jonathan', '', 'CVG', '1', 'phylab1d', 'Jonathan Baker', 'STE', '2021-04-21', '2021-04-02', 20),
(39, 'Baker', 'Jonathan', '', 'CHG', '2', 'phylab1d', 'Jonathan Baker', 'STE', '2021-04-07', '2021-04-15', 20),
(40, 'Baker', 'Jonathan', '', 'CHG', '', '', 'Jonathan Baker', 'CBY', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `mcg`
--

CREATE TABLE IF NOT EXISTS `mcg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Departement` text NOT NULL,
  `Nombre_de_cle` int(11) NOT NULL,
  `Code_de_cle` text NOT NULL,
  `Nom_piece` text NOT NULL,
  `Batiment` text NOT NULL,
  `Date_de_remise` date NOT NULL,
  `Date_de_fin` date NOT NULL,
  `Depot` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 05 Avril 2021 à 20:01
-- Version du serveur: 5.6.13
-- Version de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `phplogin`
--
CREATE DATABASE IF NOT EXISTS `phplogin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phplogin`;

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'),
(2, 'jonathan', '12345', 'jbake093@uottawa.ca');

-- --------------------------------------------------------

--
-- Structure de la table `accounts_ceed`
--

CREATE TABLE IF NOT EXISTS `accounts_ceed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `accounts_ceed`
--

INSERT INTO `accounts_ceed` (`id`, `username`, `password`, `email`) VALUES
(2, 'testceed', 'test', '');

-- --------------------------------------------------------

--
-- Structure de la table `accounts_chg`
--

CREATE TABLE IF NOT EXISTS `accounts_chg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `accounts_chg`
--

INSERT INTO `accounts_chg` (`id`, `username`, `password`, `email`) VALUES
(2, 'testchg', 'test', '');

-- --------------------------------------------------------

--
-- Structure de la table `accounts_crpuo`
--

CREATE TABLE IF NOT EXISTS `accounts_crpuo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `accounts_crpuo`
--

INSERT INTO `accounts_crpuo` (`id`, `username`, `password`, `email`) VALUES
(2, 'testcrpuo', 'test', '');

-- --------------------------------------------------------

--
-- Structure de la table `accounts_cvg`
--

CREATE TABLE IF NOT EXISTS `accounts_cvg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `accounts_cvg`
--

INSERT INTO `accounts_cvg` (`id`, `username`, `password`, `email`) VALUES
(2, 'testcvg', 'test', '');

-- --------------------------------------------------------

--
-- Structure de la table `accounts_eecs`
--

CREATE TABLE IF NOT EXISTS `accounts_eecs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `accounts_eecs`
--

INSERT INTO `accounts_eecs` (`id`, `username`, `password`, `email`) VALUES
(2, 'testeecs', 'test', '');

-- --------------------------------------------------------

--
-- Structure de la table `accounts_faculte`
--

CREATE TABLE IF NOT EXISTS `accounts_faculte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `accounts_faculte`
--

INSERT INTO `accounts_faculte` (`id`, `username`, `password`, `email`) VALUES
(2, 'testfaculte', 'test', '');

-- --------------------------------------------------------

--
-- Structure de la table `accounts_mcg`
--

CREATE TABLE IF NOT EXISTS `accounts_mcg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `accounts_mcg`
--

INSERT INTO `accounts_mcg` (`id`, `username`, `password`, `email`) VALUES
(2, 'testmcg', 'test', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

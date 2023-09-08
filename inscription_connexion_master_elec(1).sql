-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 07 Février 2022 à 10:31
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `master_elec`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription_connexion_master_elec`
--

CREATE TABLE IF NOT EXISTS `inscription_connexion_master_elec` (
  `Id` int(15) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(35) NOT NULL,
  `Prenom` varchar(35) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `inscription_connexion_master_elec`
--

INSERT INTO `inscription_connexion_master_elec` (`Id`, `Nom`, `Prenom`, `Email`, `Password`, `Date`) VALUES
(1, 'Assongo', 'Christ', 'assongo@gmail.com', '123', '2022-02-04 23:59:50'),
(2, 'NDOMBI', 'Fred', 'fred@gmail.com', '1234', '2022-02-05 00:03:17'),
(3, 'Napame', 'elie', 'elie@gmail.com', '123', '2022-02-06 18:40:47'),
(4, 'mabiala', 'eriga', 'mack@gmail.com', '123', '2022-02-07 09:19:28'),
(5, 'erer', 'zeze', 'assongo1@gmail.com', '&', '2022-02-07 09:26:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

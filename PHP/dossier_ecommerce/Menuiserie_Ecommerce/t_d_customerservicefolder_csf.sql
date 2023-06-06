-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 juil. 2022 à 11:17
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

--
-- Realisation_Olivier_BEDNAREK
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `menuiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_d_customerservicefolder_csf`
--

DROP TABLE IF EXISTS `t_d_customerservicefolder_csf`;
CREATE TABLE IF NOT EXISTS `t_d_customerservicefolder_csf` (
  `csf_ID` int(11) NOT NULL,
  `USR_ID` int(11) NOT NULL,
  `PRD_ID` int(11) NOT NULL,
  `OSS_ID` int(11) NOT NULL,
  `OHR_ID` int(11) NOT NULL,
  `tsd_ID` int(11) NOT NULL,
  `csf_status` varchar(45) NOT NULL,
  `csf_description` varchar(45) NOT NULL,
  PRIMARY KEY (`csf_ID`),
  KEY `USR_ID` (`USR_ID`),
  KEY `PRD_ID` (`PRD_ID`),
  KEY `OSS_ID` (`OSS_ID`),
  KEY `OHR_ID` (`OHR_ID`),
  KEY `tsd_ID` (`tsd_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

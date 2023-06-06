-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 juil. 2022 à 13:40
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
-- Structure de la table `t_d_ticketsavdetail_tsd`
--

DROP TABLE IF EXISTS `t_d_ticketsavdetail_tsd`;
CREATE TABLE `t_d_ticketsavdetail_tsd` (
  `tsd_ID` int(11) NOT NULL,
  `thi_ID` int(11) NOT NULL,
  `PRD_ID` int(11) NOT NULL,
  `USR_ID` int(11) NOT NULL,
  `tsd_description` varchar(45) NOT NULL,
  `tsd_IP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_d_ticketsavdetail_tsd`
--
ALTER TABLE `t_d_ticketsavdetail_tsd`
  ADD PRIMARY KEY (`tsd_ID`),
  ADD UNIQUE KEY `tsd_ID` (`tsd_ID`),
  ADD KEY `thi_ID` (`thi_ID`),
  ADD KEY `PRD_ID` (`PRD_ID`),
  ADD KEY `USR_ID` (`USR_ID`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_d_ticketsavdetail_tsd`
--
ALTER TABLE `t_d_ticketsavdetail_tsd`
  ADD CONSTRAINT `t_d_diagsavdetail` FOREIGN KEY (`tsd_ID`) REFERENCES `t_d_diagsav_dsa` (`dsa_ID`),
  ADD CONSTRAINT `t_d_historydetail_thi` FOREIGN KEY (`tsd_ID`) REFERENCES `t_d_tickethistory_thi` (`thi_ID`),
  ADD CONSTRAINT `t_d_product_prd` FOREIGN KEY (`tsd_ID`) REFERENCES `t_d_product_prd` (`PRD_ID`),
  ADD CONSTRAINT `t_d_product_prd_p` FOREIGN KEY (`tsd_ID`) REFERENCES `t_d_product_prd` (`PRD_ID`),
  ADD CONSTRAINT `t_d_user_usr_sup` FOREIGN KEY (`tsd_ID`) REFERENCES `t_d_user_usr` (`USR_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

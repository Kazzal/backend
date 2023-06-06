-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 juil. 2022 à 15:52
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

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
-- Structure de la table `t_d_productkit_kit`
--

DROP TABLE IF EXISTS `t_d_productkit_kit`;
CREATE TABLE `t_d_productkit_kit` (
  `PRD_ID_KIT` int(11) NOT NULL,
  `PRD_ID_COMPONENT` int(11) NOT NULL,
  `KIT_QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_d_productkit_kit`
--

INSERT INTO `t_d_productkit_kit` (`PRD_ID_KIT`, `PRD_ID_COMPONENT`, `KIT_QUANTITY`) VALUES
(8, 1, 5),
(8, 2, 4),
(9, 1, 3),
(9, 3, 3),
(10, 4, 3),
(10, 5, 5),
(11, 6, 2),
(11, 7, 1),
(12, 4, 3),
(12, 7, 2),
(13, 2, 10),
(13, 6, 3),
(16, 1, 5),
(16, 5, 2),
(17, 1, 2),
(17, 3, 5),
(18, 2, 2),
(18, 6, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_d_productkit_kit`
--
ALTER TABLE `t_d_productkit_kit`
  ADD PRIMARY KEY (`PRD_ID_KIT`,`PRD_ID_COMPONENT`),
  ADD KEY `FK_T_D_PROD_SE_COMPOS_T_D_PROD2` (`PRD_ID_COMPONENT`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_d_productkit_kit`
--
ALTER TABLE `t_d_productkit_kit`
  MODIFY `PRD_ID_KIT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_d_productkit_kit`
--
ALTER TABLE `t_d_productkit_kit`
  ADD CONSTRAINT `FK_SE_COMPOSE` 
  FOREIGN KEY (`PRD_ID_KIT`) 
  REFERENCES `t_d_product_prd` (`PRD_ID`),
  ADD CONSTRAINT `FK_T_D_PROD_SE_COMPOS_T_D_PROD2` 
  FOREIGN KEY (`PRD_ID_COMPONENT`) 
  REFERENCES `t_d_product_prd` (`PRD_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

SELECT ohr_id,prd.PRD_ID,ODT_QUANTITY
  as   quantitéCommandée,prd.quantite,ODT_QUANTITY * prd.quantite 
  as   QuantityTotal
  from t_d_orderdetails_odt odt
inner join (
SELECT prd.PRD_ID 
  as prd_id,prd.PRD_ID as kit, prd.PRD_CODE, prd.PRD_DESCRIPTION , 1 
  as quantite 
  FROM t_d_product_prd prd
  where pty_id=1
union all
select prd.PRD_ID 
  as prd_id,kit.prd_id_kit 
  as kit,prd.PRD_CODE, prd.PRD_DESCRIPTION , kit.KIT_QUANTITY 
  as quantite
from t_d_product_prd prdkit 
inner join t_d_productkit_kit kit 
  on prdkit.prd_id=PRD_ID_KIT
inner join t_d_product_prd prd 
  on kit.PRD_ID_COMPONENT=prd.PRD_ID 
  where prdkit.PTY_ID=2) prd 
  on odt.prd_id=prd.kit;
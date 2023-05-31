INSERT INTO `client` (`id_facture`, `nom_facture`, `ref_client`, `adresse_client`, `CP_client`, `ville_client`) 
VALUES ('5', '255148', 'Hubert', '52 rue Moliere', 93000, 'Paris');

INSERT INTO `facture`(`id_facture`, `num_facture`, `date_facture`) 
VALUES ('4','6523','2015-10-02');

INSERT INTO `commande`(`id_commande`, `num_commande`, `date_commande`) 
VALUES ('15','92407','2015-10-01');

INSERT INTO `produit`(`id_produit`, `design_produit`, `qte_produit`, `photo_produit`, `ref_produit`)
VALUES ('1','fleure','10','photo_fleure','124854');

INSERT INTO `livraison`(`id_livraison`, `num_livraison`, `date_livraison`) 
VALUES ('8','58916','2015-10-05');

INSERT INTO `categorie`(`id_categorie`, `nom_categorie`) 
VALUES ('6','categorie_fleure');

INSERT INTO `sous_categorie`(`id_sous_categorie`, `nom_sous_categorie`) 
VALUES ('2','sous_categorie_fleure');
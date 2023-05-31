CREATE DATABASE green_garden; /* creer une base de donnée */

USE green_garden; /* utliser labase de donnée */

/* créer une table avec entité id */
CREATE TABLE facture(
    id_facture varchar(50) PRIMARY KEY,
    num_facture int,
    date_facture date
    );


CREATE TABLE commande(
    id_commande varchar(50) PRIMARY KEY,
    num_commande int,
    date_commande date
);


CREATE TABLE client(
    id_client varchar(50) PRIMARY KEY,
    ref_client varchar(50),
    nom_client varchar(50),
    adresse_client varchar(50),
    CP_client int,
    ville_client varchar(50)
);


CREATE TABLE produit(
    id_produit varchar(50) PRIMARY KEY,
    design_produit varchar(50)
    qte_produit int,
    photo_produit varchar(50),
    ref_produit varchar(50)
);


CREATE TABLE categorie(
    id_categorie varchar(50) PRIMARY KEY,
    num_categorie varchar(50)
);


CREATE TABLE sous_categorie(
    id_sous_categorie varchar(50) PRIMARY KEY,
    nom_categorie varchar(50)
);


CREATE TABLE livraison(
    id_livraison varchar(50) PRIMARY KEY,
    date_livraison date
);




    
/*
   Ces commandes SQL permettent de créer les tables correspondant aux entités du MCD, avec les champs appropriés et les relations entre les tables en utilisant des clés étrangères (FOREIGN KEY).
   */


CREATE TABLE Employe (
  IdEmploye INT PRIMARY KEY
  , Nom VARCHAR(50)
  , Prenom VARCHAR(50)
  , Adresse VARCHAR(100)
  , Ville VARCHAR(50)
  , CodePostal VARCHAR(10)
  , Telephone VARCHAR(15)
  , Diplomes VARCHAR(255)
);

CREATE TABLE Commande (
  IdCommande INT PRIMARY KEY
  , DateCommande DATE
  , Service VARCHAR(10)
  , IdTable INT
  , IdEmploye INT
  , FOREIGN KEY (IdEmploye) REFERENCES Employe(IdEmploye)
);

CREATE TABLE Plat (
  IdPlat INT PRIMARY KEY
  , Nom VARCHAR(50)
  , Type VARCHAR(20)
  , Prix DECIMAL(10, 2)
);

CREATE TABLE Vin (
  IdVin INT PRIMARY KEY
  , Millesime INT
  , DateAchat DATE
  , PrixAchat DECIMAL(10, 2)
  , PrixVente DECIMAL(10, 2)
  , IdViticulteur INT
  , FOREIGN KEY (IdViticulteur) REFERENCES Viticulteur(IdViticulteur)
);

CREATE TABLE Viticulteur (
  IdViticulteur INT PRIMARY KEY
  , Nom VARCHAR(50)
  , Prenom VARCHAR(50)
  , Adresse VARCHAR(100)
  , Ville VARCHAR(50)
  , CodePostal VARCHAR(10)
  , Telephone VARCHAR(15)
);

CREATE TABLE Boisson (
  IdBoisson INT PRIMARY KEY
  , Libelle VARCHAR(50)
  , PrixVente DECIMAL(10, 2)
);
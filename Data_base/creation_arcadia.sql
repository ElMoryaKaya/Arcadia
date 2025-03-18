DROP DATABASE IF EXISTS db_arcadia;
CREATE DATABASE db_arcadia;
USE db_arcadia;

CREATE TABLE Utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(225) NOT NULL,
    prenom VARCHAR(225) NOT NULL,
    email VARCHAR(225) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    type_utilisateur ENUM('administrateur', 'utilisateur_simple', 'libraire', 'musicien', 'bibliothécaire', 'Organisateur_evt') NOT NULL,
    date_inscription DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Livre (
    id_livre INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL,
    format ENUM('livre electronique', 'audio book') NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    chemin_livre VARCHAR(255) DEFAULT NULL,
    disponibilite ENUM('disponible', 'indisponible') NOT NULL,
    evaluation DECIMAL(3, 1) NOT NULL,
    date_publication DATE NOT NULL,
    photo_livre VARCHAR(255) NOT NULL,
    livre LONGBLOB DEFAULT NULL,
    nom_fichier_livre VARCHAR(255) DEFAULT NULL
);

CREATE TABLE localisation (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom_lieu VARCHAR(255) NOT NULL,
  adresse VARCHAR(255) NOT NULL,
  ville VARCHAR(255) NOT NULL,
  code_postal VARCHAR(255) NOT NULL,
  pays VARCHAR(255) NOT NULL,
  Enseigne ENUM('librairie','Librairie','bibliothèque','Bibliothèque') NOT NULL,
  description TEXT NOT NULL
);


CREATE TABLE Musique (
    id_musique INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(225) NOT NULL,
    artiste VARCHAR(225) NOT NULL,
    photo_artiste VARCHAR(225) NOT NULL,
    genre VARCHAR(225) NOT NULL,
    album VARCHAR(225) NOT NULL,
    format ENUM('cd', 'vinyle') NOT NULL,
    prix INT NOT NULL,
    disponibilite VARCHAR(225) NOT NULL,
    duree TIME NOT NULL,
    chemin_audio VARCHAR(225) NOT NULL
);

CREATE TABLE Evenement (
    id_evenement INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    lieu VARCHAR(255) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    date_heure DATETIME NOT NULL,
    description VARCHAR(225) NOT NULL,
    prix_entre INT NOT NULL,
    disponibilite_billets INT NOT NULL,
    type_evenement VARCHAR(225) NOT NULL,
    Organisateur_evt VARCHAR(255) NOT NULL
);

CREATE TABLE Librairie (
    id_librairie INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(225) NOT NULL,
    adresse VARCHAR(225) NOT NULL,
    telephone INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    id_utilisateur INT,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE achat (
    id_achat INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT NOT NULL,
    produit  INT NOT NULL,
    quantite INT NOT NULL,
    date_ajout DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);



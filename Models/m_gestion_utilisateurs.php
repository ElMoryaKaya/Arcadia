<?php

function afficher_utilisateur(){
    require "db_connect.php";
    $stmt= $connect->prepare("SELECT id_utilisateur,nom,prenom,email,type_utilisateur FROM Utilisateur WHERE type_utilisateur != 'administrateur'");
    $stmt->execute();
    $afficher = $stmt->fetchAll();
    return $afficher;
};

function supprimer_utilisateur($id) {
    require "db_connect.php"; 
    $stmt = $connect->prepare("DELETE FROM Utilisateur WHERE id_utilisateur = :id_utilisateur");
    $stmt->bindParam(':id_utilisateur', $id, PDO::PARAM_INT);  
    $stmt->execute();
    return $stmt->rowCount();
  }
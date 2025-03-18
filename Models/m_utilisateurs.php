<?php

function ajouter_utilisateur($nom,$prenom,$email,$hash_motdepasse,$statut){
        require "db_connect.php";
        $stmt = $connect->prepare("INSERT INTO Utilisateur (nom,prenom,email,mot_de_passe,type_utilisateur) VALUES (?,?,?,?,?)");
        $stmt->execute(array($nom,$prenom,$email,$hash_motdepasse,$statut));
        $result = $stmt->fetch();
        return $result;
};

function identification_utilisateur($email, $motdepasse){
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT * FROM Utilisateur WHERE email = ?");
    $stmt->execute(array($email));
    $result = $stmt->fetch();
    return $result;
}
function verification_utilisateur($email){
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT type_utilisateur FROM Utilisateur WHERE email = ?");
    $stmt->execute(array($email));
    $result = $stmt->fetch();
    return $result;
};
<?php

function inserer_livre($titre,$auteur,$genre,$format,$prix,$chemin_livre,$disponibilite,$evaluation,$date_publication,$photo_livre,$livre,$nom_fichier_livre){
    require "db_connect.php";
    $stmt = $connect->prepare("INSERT INTO Livre (titre,auteur,genre,format,prix,chemin_livre,disponibilite,evaluation,date_publication,photo_livre,livre,nom_fichier_livre) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute(array($titre,$auteur,$genre,$format,$prix,$chemin_livre,$disponibilite,$evaluation,$date_publication,$photo_livre,$livre,$nom_fichier_livre));
    $result = $stmt->fetch();
    return $result;
};

function lister_livre(){
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT * FROM Livre");
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function lecture_livre($id){
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT * FROM Livre WHERE id_livre = ?");
    $stmt->execute(array($id));
    $result = $stmt->fetch();
    return $result;
}
<?php

function inserer_localisation($nom,$adresse,$enseigne,$ville,$code_postal,$pays,$description){
    require "db_connect.php";
    $stmt = $connect->prepare("INSERT INTO localisation (nom_lieu,adresse,enseigne,ville,code_postal,pays,description) VALUES (?,?,?,?,?,?,?)");
    $stmt->execute(array($nom,$adresse,$enseigne,$ville,$code_postal,$pays,$description));
    $result = $stmt->fetch();
    return $result;
};

function afficher_localisation_librairie() {
    require "db_connect.php";
    $stmt = $connect->prepare("SELECT * FROM localisation");
    $stmt->execute();
    $afficher = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $afficher;
}
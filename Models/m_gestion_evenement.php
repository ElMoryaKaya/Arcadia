<?php
function ajouter_evenement($titre, $lieu, $adresse, $date_heure, $description, $prix_entre, $disponibilite_billets, $type_evenement, $Organisateur_evt) {
    require "db_connect.php"; // Assurez-vous que ce fichier contient la connexion à votre base de données

    $stmt = $connect->prepare("INSERT INTO Evenement (titre, lieu, adresse, date_heure, description, prix_entre, disponibilite_billets, type_evenement, Organisateur_evt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($titre, $lieu, $adresse, $date_heure, $description, $prix_entre, $disponibilite_billets, $type_evenement, $Organisateur_evt));

}
?>


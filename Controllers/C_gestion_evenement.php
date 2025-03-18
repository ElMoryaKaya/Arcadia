<?php

require "../Models/m_gestion_evenement.php";

if (isset($_POST["submit"])) {
    $titre = $_POST['titre'];
    $lieu = $_POST['lieu'];
    $adresse = $_POST['adresse']; // Correction ici
    $date_heure = $_POST['date_heure']; // Correction de l'espace dans le nom du champ
    $description = $_POST['description'];
    $prix_entre = $_POST['prix_entre'];
    $disponibilite_billets = $_POST['disponibilite_billets'];
    $type_evenement = $_POST['type_evenement'];
    $Organisateur_evt = $_POST['organisateur'];

    // Appel de la fonction pour ajouter l'événement
    $nouveau_event = ajouter_evenement($titre, $lieu, $adresse, $date_heure, $description, $prix_entre, $disponibilite_billets, $type_evenement, $Organisateur_evt);
    
    // Redirection vers la page c_evenement.php après l'ajout
    header("Location: c_evenement.php");
    exit;
}

require "../Views/ajouter_evenement.php";

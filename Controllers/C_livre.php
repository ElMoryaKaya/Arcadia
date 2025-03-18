<?php
require "../Models/m_livre.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $genre = $_POST['genre'];
    $format = $_POST['format'];
    $prix = $_POST['prix'];
    $disponibilite = $_POST['disponibilite'];
    $evaluation = $_POST['evaluation'];
    $date_publication = $_POST['date_publication'];
    $photo_livre = $_POST['photo_livre'];
    $chemin_livre = $_POST['chemin_livre'];

    $fichier_livre = $_FILES['fichier_livre']['tmp_name'];
    $nom_fichier_livre = $_FILES['fichier_livre']['name'];

    if (!empty($fichier_livre)) {
        $livre = file_get_contents($fichier_livre);
    } else {
        die("Erreur : Aucun fichier sélectionné.");
    }

$inserer_livre = inserer_livre($titre,$auteur,$genre,$format,$prix,$chemin_livre,$disponibilite,$evaluation,$date_publication,$photo_livre,$livre,$nom_fichier_livre);
header("Location:afficherCatalogue_livre.php");
}

require "../Views/formulaire_livre.php";
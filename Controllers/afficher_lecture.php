<?php
session_start();
require "../Models/m_utilisateurs.php";

require "../Models/m_livre.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$lecture = lecture_livre($id);

if($lecture){
    $titre = $lecture['titre'];
    $auteur = $lecture['auteur'];
    $livre = $lecture['livre'];
    $nom_fichier_livre = $lecture['nom_fichier_livre'];
}
$email = $_SESSION["utilisateur"]["email"];
$statut_utilisateur = verification_utilisateur($email);

require "../Views/lire_livre.php";
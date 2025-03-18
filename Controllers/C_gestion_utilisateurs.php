<?php
session_start();

if(isset($_SESSION["utilisateur"]) != 'administrateur'){
    header("Location:afficherAccueil.php");
    exit(); 
 };

require "../Models/m_gestion_utilisateurs.php";
require "..\Models\m_utilisateurs.php";

$email = $_SESSION["utilisateur"]["email"];
$statut_utilisateur = verification_utilisateur($email);

$affichage = afficher_utilisateur();

require "../Views/affichage_utilisateurs.php";

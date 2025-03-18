<?php
session_start();

require "../Models/m_localisation.php";
require "..\Models\m_utilisateurs.php";

$email = $_SESSION["utilisateur"]["email"];
$statut_utilisateur = verification_utilisateur($email);

$afficher_liste = afficher_localisation_librairie();

require "../Views/localisation.php";
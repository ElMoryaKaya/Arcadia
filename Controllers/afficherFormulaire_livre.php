<?php
session_start();
require "../Models/m_utilisateurs.php";

$email = $_SESSION["utilisateur"]["email"];
$statut_utilisateur = verification_utilisateur($email);


require "../Views/formulaire_livre.php";
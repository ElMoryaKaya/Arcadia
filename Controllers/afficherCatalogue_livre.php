<?php
session_start();
require "../Models/m_utilisateurs.php";
require "../Models/m_livre.php";

$lister = lister_livre();

$email = $_SESSION["utilisateur"]["email"];
$statut_utilisateur = verification_utilisateur($email);

require "../Views/catalogue_livre.php";
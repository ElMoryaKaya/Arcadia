<?php
session_start();
require "../Models/m_utilisateurs.php";

if (isset($_SESSION["utilisateur"])) {
  $email = $_SESSION["utilisateur"]["email"];

  $statut_utilisateur = verification_utilisateur($email);

}

require "../Views/page_accueil.php";
?>

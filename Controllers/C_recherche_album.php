<?php
session_start();
require "../Models/db_connect.php";
require "../Models/m_recherche_album.php";
require "..\Models\m_utilisateurs.php";

$email = $_SESSION["utilisateur"]["email"];
$statut_utilisateur = verification_utilisateur($email);

function afficher_tous_les_albums($connect) {
    $results = recherche_tous_les_albums($connect);
    return ['results' => $results];
}

if (!isset($_GET['album']) && !isset($_GET['genre']) && !isset($_POST['qr'])) {
    $data = afficher_tous_les_albums($connect);
    require '../Views/page_album.php';
}
?>

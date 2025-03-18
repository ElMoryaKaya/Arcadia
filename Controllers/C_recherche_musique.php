<?php
session_start();
require "../Models/db_connect.php";
require "../Models/m_recherche_musique.php";

require "..\Models\m_utilisateurs.php";

$email = $_SESSION["utilisateur"]["email"];
$statut_utilisateur = verification_utilisateur($email);

function recherche_genres_music($connect) {
    $results = genres($connect);
    return ['results' => $results];
}

function afficher_albums_par_genre($connect) {
    $genre = isset($_GET["genre"]) ? $_GET["genre"] : '';
    $results = recherche_albums_par_genre($connect, $genre);
    return ['genre' => $genre, 'results' => $results];
}

function afficher_morceaux_par_album($connect) {
    $album = isset($_GET["album"]) ? $_GET["album"] : '';
    $results = recherche_morceaux_par_album($connect, $album);
    return ['album' => $album, 'results' => $results];
}

function rechercher_par_terme($connect, $terme) {
    $results = recherche_par_terme($connect, $terme);
    return ['results' => $results, 'qr' => $terme];
}

if (isset($_GET['album'])) {
    $data = afficher_morceaux_par_album($connect);
    require '../Views/page_morceaux.php';
} elseif (isset($_GET['genre'])) {
    $data = afficher_albums_par_genre($connect);
    require '../Views/page_morceaux_genre.php';
} elseif (isset($_POST['qr'])) {
    $terme = $_POST['qr'];
    $data = rechercher_par_terme($connect, $terme);
    require '../Views/page_musique.php';
} else {
    $data = recherche_genres_music($connect);
    require '../Views/page_musique.php';
}

?>

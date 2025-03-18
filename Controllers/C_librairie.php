<?php
require "../Models/db_connect.php";
require "../Models/m_recherche_livre.php";

function recherche_genre_Livre($connect) {
    $results = recherche_livre_genre($connect); 
    return ['results' => $results];
}

function afficher_livres_par_genre($connect) {
    $genre = isset($_GET["genre"]) ? $_GET["genre"] : '';
    $results = recherche_Livres_par_genre($connect, $genre); 
    return ['genre' => $genre, 'results' => $results];
}

function rechercher_genres_livre_par_terme($connect, $terme) {
    $results = recherche_genres_livre_par_terme($connect, $terme); 
    return ['results' => $results, 'qr' => $terme];
}

if (isset($_GET['genre'])) {
    $data = afficher_livres_par_genre($connect);
    require '../Views/page_des_livres.php';
} elseif (isset($_POST['qr'])) {
    $terme = $_POST['qr'];
    $data = rechercher_genres_livre_par_terme($connect, $terme);
    require '../Views/page_livre.php';
} else {
    $data = recherche_genre_Livre($connect);
    require '../Views/page_Livre.php';
}
require "..\Views\page_librairie.php";
<?php
function recherche_livre_genre($connect) {
    $stmt = $connect->query('SELECT DISTINCT genre FROM Livre ORDER BY genre');
    $results = $stmt;
    return $results;
}

function recherche_Livres_par_genre($connect, $genre) {
    $stmt = $connect->prepare('SELECT titre, photo_livre, chemin_livre, auteur, genre, format, prix, disponibilite, evaluation, date_publication FROM Livre WHERE genre = :genre ORDER BY titre');
    $stmt->execute(['genre' => $genre]);
    $results = $stmt;
    return $results;
}

function recherche_genres_livre_par_terme($connect, $terme) {
    $stmt = $connect->prepare('SELECT DISTINCT genre FROM Livre WHERE genre LIKE :terme ORDER BY genre');
    $stmt->execute(['terme' => '%' . $terme . '%']);
    $results = $stmt;
    return $results;
}

function recherche_tous_les_livres($connect) {
    $stmt = $connect->query('SELECT titre, auteur, genre, format, prix, chemin_livre, disponibilite, evaluation, date_publication FROM Livre ORDER BY titre');
    $results = $stmt;
    return $results;
}
?>

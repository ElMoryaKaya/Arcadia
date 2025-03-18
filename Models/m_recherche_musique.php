<?php
function genres($connect) {
    $stmt = $connect->query('SELECT DISTINCT genre FROM musique ORDER BY genre');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function recherche_albums_par_genre($connect, $genre) {
    $stmt = $connect->prepare('SELECT DISTINCT album, photo_artiste, artiste FROM musique WHERE genre = :genre ORDER BY album');
    $stmt->execute(['genre' => $genre]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function recherche_morceaux_par_album($connect, $album) {
    $stmt = $connect->prepare('SELECT titre, chemin_audio, artiste, photo_artiste FROM musique WHERE album = :album ORDER BY titre');
    $stmt->execute(['album' => $album]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function recherche_par_terme($connect, $terme) {
    $stmt = $connect->prepare('SELECT DISTINCT genre FROM musique WHERE genre LIKE :terme ORDER BY genre');
    $stmt->execute(['terme' => '%' . $terme . '%']);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

?>
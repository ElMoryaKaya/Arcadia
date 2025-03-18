<?php
function recherche_tous_les_albums($connect) {
    $stmt = $connect->query('SELECT DISTINCT album, photo_artiste, artiste FROM musique ORDER BY album');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
?>

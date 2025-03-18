<?php
function CD($connect) {
    $stmt = $connect->query("SELECT * FROM Musique WHERE format = 'cd';");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function vinyle($connect) {
    $stmt = $connect->query("SELECT * FROM Musique WHERE format = 'vinyle';");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    return $results;
}
?>

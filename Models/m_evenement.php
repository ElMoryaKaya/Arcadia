<?php

function get_all_events($connect) {
    require "db_connect.php";
    $query = "SELECT * FROM Evenement";
    $stmt = $connect->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_event_by_id($connect, $eventId) {
    require "db_connect.php"; 
    $query = "SELECT * FROM Evenement WHERE id_evenement = ?";
    $stmt = $connect->prepare($query);
    $stmt->execute([$eventId]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function acheter_ticket($quantite,$produit) {
    require "db_connect.php"; 
    $stmt = $connect->prepare("INSERT INTO Achat (quatit,produit) VALUES (?,?)");
        $stmt->execute(array($quantite,$produit));
        $result = $stmt->fetch();
        return $result;
}


?>

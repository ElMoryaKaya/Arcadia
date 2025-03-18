<?php
function recup_livre($connect, $id) {
    require "db_connect.php";
    $stmt = $connect->prepare('SELECT chemin_livre , titre , auteur , genre FROM livre ');
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
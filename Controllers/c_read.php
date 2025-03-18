<?php
require '../Models/m_recup_livre.php';

if (isset($_GET['id_livre'])) {
    $id = $_GET['id_livre'];

    $livre = recup_livre($connect, $id);
    if ($livre) {
        include '../Views/read.php';
    } else {
        echo 'Livre introuvable.';
    }
} else {
    echo 'Aucun livre sélectionné.';
}
//require 'index.php';
?>

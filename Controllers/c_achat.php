<?php
require '../Models/db_connect.php';
require '../Models/m_transaction.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_livre = $_POST['id_livre'];
    $id_utilisateur = $_SESSION['id_utilisateur'];
    $id_panier = $_SESSION['id_panier'];
    $quantite = 1; // Assumons que l'achat est d'une seule unité pour simplifier
    $prix_total = $_POST['prix_total']; // Vous devez passer le prix total dans le formulaire

    if (enregistrer_transaction($connect, $id_utilisateur, $id_panier, $id_livre, 'livre', 'achat', $quantite, $prix_total)) {
        echo "Achat réussi!";
    } else {
        echo "Erreur lors de l'achat.";
    }
}
?>

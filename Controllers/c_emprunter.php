<?php
require '../Models/db_connect.php'; // Inclusion de la connexion à la base de données
require '../Models/m_transaction.php'; // Inclusion du modèle Transaction

// Exemple d'utilisation dans un contrôleur
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $id_utilisateur = $_POST['id_utilisateur'];
    $id_panier = $_POST['id_panier'];
    $produit_id = $_POST['produit_id'];
    $type_produit = $_POST['type_produit'];
    $type_transaction = $_POST['type_transaction'];
    $quantite = $_POST['quantite'];
    $prix_total = $_POST['prix_total'];

    // Appel à la fonction pour enregistrer la transaction
    $success = enregistrer_transaction($connect, $id_utilisateur, $id_panier, $produit_id, $type_produit, $type_transaction, $quantite, $prix_total);

    if ($success) {
        // Redirection vers une page de confirmation ou une autre action
        header('Location: afficherAccueil.php');
        exit;
    } else {
        // Gestion de l'erreur si l'insertion a échoué
        echo "Erreur lors de l'enregistrement de la transaction.";
    }
}
?>

<?php
function enregistrer_transaction($connect, $id_utilisateur, $id_panier, $produit_id, $type_produit, $type_transaction, $quantite, $prix_total) {
    $stmt = $connect->prepare('INSERT INTO Transaction (id_utilisateur, id_panier, produit_id, type_produit, date_transaction, type_transaction, quantite, prix_total, statut) VALUES (:id_utilisateur, :id_panier, :produit_id, :type_produit, NOW(), :type_transaction, :quantite, :prix_total, "en_cours")');
    return $stmt->execute([
        'id_utilisateur' => $id_utilisateur,
        'id_panier' => $id_panier,
        'produit_id' => $produit_id,
        'type_produit' => $type_produit,
        'type_transaction' => $type_transaction,
        'quantite' => $quantite,
        'prix_total' => $prix_total
    ]);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'événement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Views/Style/evenement.css">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <link rel="stylesheet" href="..\Views\Style\page_album.css">
</head>
<body>
    <header><?php require "header.php";?></header>
        <h1>Détails de l'événement</h1>
        <div class="event-details">
            <h2><?php echo htmlspecialchars($event['titre']); ?></h2>
            <p><strong>Date et heure :</strong> <?php echo htmlspecialchars($event['date_heure']); ?></p>
            <p><strong>Lieu :</strong> <?php echo htmlspecialchars($event['lieu']); ?></p>
            <p><strong>Description :</strong> <?php echo htmlspecialchars($event['description']); ?></p>
            <p><strong>Prix d'entrée :</strong> <?php echo htmlspecialchars($event['prix_entre']); ?> EUR</p>
            <p><strong>Disponibilité des billets :</strong> <?php echo htmlspecialchars($event['disponibilite_billets']); ?></p>
            <p><strong>Type d'événement :</strong> <?php echo htmlspecialchars($event['type_evenement']); ?></p>
            <p><strong>Organisateur :</strong> <?php echo htmlspecialchars($event['Organisateur_evt']); ?></p>
            
            <!-- Formulaire d'achat de tickets -->
            <form action="../Controllers/c_evenement.php?action=buy" method="post" class="ticket-form">
            <input type="hidden" name="event_id" value="<?php echo htmlspecialchars($event['id_evenement']); ?>">
            <label for="quantity">Quantité :</label>
            <input type="number" id="quantity" name="quantity" min="1" max="<?php echo htmlspecialchars($event['disponibilite_billets']); ?>" required>
            <label for="adress"> Adresse :</label>
            <input type="text" id="adress" name="adress" required>
            <label for="code postale"> Code Postal :</label>
            <input type="number" id="code postal" name="code postal" required>
            <label for="phone">Téléphone :</label>
            <input type="number" id="phone" name="phone" pattern="[0-9]{10}" required>
            <label for="carte"> Carte </label>
            <input type="number" id="carte" name="carte" required>

                <button type="submit">Acheter</button>
            </form>

            <?php if (isset($_SESSION['achat_effectue']) && $_SESSION['achat_effectue']): ?>
                <p class="success-message">Achat effectué. Vos billets vous seront envoyés d'ici peu.</p>
                <?php unset($_SESSION['achat_effectue']); ?>
            <?php endif; ?>

            <!-- Bouton retour à la liste des événements -->
            <a href="../Controllers/c_evenement.php?action=list" class="back-button">Retour à la liste des événements</a>
        </div>
    </div>
</body>
</html>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des événements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Views/Style/evenement.css">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <link rel="stylesheet" href="..\Views\Style\page_album.css">
    

</head>
<body>
      <header>
    <div class="container">
    <?php require "header.php";?>
            <div class="search-bar">
                <form action="../Controllers/C_recherche_musique.php" method="POST" class="search-form">
                    <div class="search-container">
                        <input type="search" name="qr" id="search" placeholder="Recherche.." value="<?php echo isset($data['qr']) ? htmlspecialchars($data['qr']) : ''; ?>">
                        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    

    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start(); // Démarrer la session si elle n'est pas déjà démarrée
    }

    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']); // Supprimer le message après l'affichage
    }
    ?>
       <div class="container">
        <h1>Liste des événements à venir</h1>
        <?php if (count($events) > 0): ?>
            <?php foreach ($events as $event): ?>
                <a href="c_evenement.php?action=details&id=<?php echo $event['id_evenement']; ?>" class="event-button">
                    <?php echo htmlspecialchars($event['titre']); ?>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun événement à afficher pour le moment.</p>
        <?php endif; ?>
    </div>

    <footer>

</footer>


</body>  

</html>

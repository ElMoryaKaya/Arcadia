<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/Style/page_des_livres.css">
    <title>Livres - <?php echo htmlspecialchars($data['genre']); ?></title>
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo-arcadia">
                <img src="../Views/image_A_L/logo.png" alt="Logo Arcadia" class="logo">
                <p class="logo_text">Arcadia</p>
            </div>
            <nav>
                <div class="buttons">
                    <a href="../Controllers/C_recherche_livre.php" class="button">Retour à la recherche</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="Genre">  
            <h1>Genre: <?php echo htmlspecialchars($data['genre']); ?></h1>
        </div>
        <section class="livres-section">
            <?php
            if (isset($data)) {
                if (!empty($data['results'])) {
                    echo '<div class="Livres-container">';
                    foreach ($data['results'] as $row) {
                        echo '<div class="livre-container">';
                        echo '<img src="../' . htmlspecialchars($row['photo_livre']) . '" alt="' . htmlspecialchars($row['photo_livre']) . '" class="livre-image">';
                        echo '<p>Titre: ' . htmlspecialchars($row['titre']) . '</p>';
                        echo '<p>Auteur: ' . htmlspecialchars($row['auteur']) . '</p>';
                        echo '<p>Genre: ' . htmlspecialchars($row['genre']) . '</p>';
                        echo '<p>Format: ' . htmlspecialchars($row['format']) . '</p>';
                        echo '<p>Prix: ' . htmlspecialchars($row['prix']) . ' €</p>';
                        echo '<p>Disponibilité: ' . htmlspecialchars($row['disponibilite']) . '</p>';
                        echo '<p>Évaluation: ' . htmlspecialchars($row['evaluation']) . '/5</p>';
                        echo '<p>Date de publication: ' . htmlspecialchars($row['date_publication']) . '</p>';
                        echo '<form action="../Controllers/acheter_livre.php" method="POST">';
                        echo '<input type="hidden" name="id_livre" value="' . htmlspecialchars($row['id_livre']) . '">';
                        echo '<input type="hidden" name="prix_total" value="' . htmlspecialchars($row['prix']) . '">';
                        echo '<button type="submit" class="button">Acheter</button>';
                        echo '</form>';
                        echo '<form action="../Controllers/emprunter_livre.php" method="POST">';
                        echo '<input type="hidden" name="id_livre" value="' . htmlspecialchars($row['id_livre']) . '">';
                        echo '<button type="submit" class="button">Emprunter</button>';
                        echo '</form>';
                        echo '</div>';
                    }
                    echo '</div>';
                } else {
                    echo '<p class="no-results">Aucun livre trouvé pour ce genre</p>';
                }
            }
            ?>
        </section>
    </main>

    <footer>

    </footer>
</body>
</html>

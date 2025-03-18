<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/Style/page_des_livres.css">
    <title>Livres - <?php echo htmlspecialchars($data['genre']); ?></title>
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <link rel="stylesheet" href="..\Views\Style\page_musique.css">
</head>
<body>
<header>
    <div class="container">
    <?php require "header.php";?>
            <div class="search-bar">
                <form action="../Controllers/C_recherche_Livre.php" method="POST" class="search-form">
                    <div class="search-container">
                        <input type="search" name="qr" id="search" placeholder="Recherche.." value="<?php echo isset($data['qr']) ? htmlspecialchars($data['qr']) : ''; ?>">
                        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </header>


    <main>
        <div class="Genre">  
            <h1>Genre: <?php echo isset($data['genre']) ? htmlspecialchars ($data['genre']): 'Genre inconnu'; ?></h1>
        </div>
        <section class="livres-section">
            <?php
            if (isset($data)) {
                if (!empty($data['results'])) {
                    echo '<div class="Livres-container">';
                    foreach ($data['results'] as $row) {
                        echo '<div class="livre-container">';
                        echo '<a href="../'. htmlspecialchars($row['chemin_livre']) .'">';
                        echo '<img src="../' . htmlspecialchars($row['photo_livre']) . '" alt="' . htmlspecialchars($row['photo_livre']) . '" class="livre-image">';
                        echo'</a>';
                        echo '<p>Titre:' . htmlspecialchars($row['titre']) . '</p>';
                        echo '<p>Auteur: ' . htmlspecialchars($row['auteur']) . '</p>';
                        echo '<p>Genre: ' . htmlspecialchars($row['genre']) . '</p>';
                        echo '<p>Format: ' . htmlspecialchars($row['format']) . '</p>';
                        echo '<p>Évaluation: ' . htmlspecialchars($row['evaluation']) . '/5</p>';
                        echo '<p>Date de publication: ' . htmlspecialchars($row['date_publication']) . '</p>';
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

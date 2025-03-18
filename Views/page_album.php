<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <link rel="stylesheet" href="..\Views\Style\page_album.css">
    <title>page_album</title>
</head>
<body>
    <header>
    <div class="container">
    <?php require "header.php";?>
            <div class="search-bar">
                <form action="../Controllers/C_recherche_album.php" method="POST" class="search-form">
                    <div class="search-container">
                        <input type="search" name="qr" id="search" placeholder="Recherche.." value="<?php echo isset($data['qr']) ? htmlspecialchars($data['qr']) : ''; ?>">
                        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <main>
    <?php
        if (isset($data)) {
            if (!empty($data['results'])) {
                echo '<div class="albums-container">';
                foreach ($data['results'] as $row) {
                    echo '<div class="album-container">';
                    echo '<a href="../Controllers/C_recherche_musique.php?album=' . urlencode($row['album']) . '">';
                    echo '<img src="../../arcadia' . htmlspecialchars($row['photo_artiste']) . '" alt="' . htmlspecialchars($row['album']) . '" class="album-image">';
                    echo '<p>' . htmlspecialchars($row['album']) . '</p>';
                    echo '<p class="artiste">' . htmlspecialchars($row['artiste']) . '</p>';
                    echo '</a>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p class="no-results">Aucun album trouvé</p>';
            }
        }
    ?>
    </main>
    <footer>

    </footer>
</body>
</html>

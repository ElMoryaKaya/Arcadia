<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Views\Style\page_morceaux_genre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Musique - <?php echo htmlspecialchars($data['genre']); ?></title>
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">

</head>
<body>
<header>
        <div class="container">
                <div class="logo-arcadia">
                    <a href="../Controllers/afficherAccueil.php">
                        <img src="..\Views\images\logo.png" alt="Logo Arcadia" class="logo">
                    </a>
                    <p class="logo_text">Arcadia</p>
                </div>
                <div class="search-bar">
                <form action="../Controllers/C_recherche_musique.php" method="POST" class="search-form">
                    <div class="search-container">
                        <div class="search-icon-container">
                            <input type="search" name="qr" id="search" placeholder="Artist, songs, genres..." value="<?php echo isset($data['qr']) ? htmlspecialchars($data['qr']) : ''; ?>">
                        </div>
                        <button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                </div>
        </div>
    </header>
    <main>
        <div class="Genre">
            <h1><?php echo htmlspecialchars($data['genre']); ?></h1>
        </div>
        <section class="albums-section">
            <?php
            if (isset($data)) {
                if (!empty($data['results'])) {
                    echo '<div class="albums-container">'; 
                    foreach ($data['results'] as $row) {
                        echo '<div class="album-container">';
                        echo '<a href="../Controllers/C_recherche_musique.php?album=' . urlencode($row['album']) . '">';
                        echo '<img src="../../arcadia' . htmlspecialchars($row['photo_artiste']) . '" alt="' . htmlspecialchars($row['album']) . '" class="album-image">';
                        echo '<p class="album">' . htmlspecialchars($row['album']) . '</p>';
                        echo '<p class="artiste">' . htmlspecialchars($row['artiste']) . '</p>';
                        echo '</a>';
                        echo '</div>';
                    }
                    echo '</div>'; 
                } else {
                    echo '<p class="no-results">Aucun album trouvé pour ce genre</p>';
                }
            }
            ?>
        </section>
    </main>

    <footer>
        
    </footer>
</body>
</html>

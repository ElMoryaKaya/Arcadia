<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Views\Style\page_musique.css">
    <title>Librairie </title>
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
</head>

<body>

<header>
        <div class="container">
            <div class="logo-arcadia">
                <img src="../Views/image_A_L/logo.png" alt="Logo Arcadia" class="logo">
                <p class="logo_text">Arcadia</p>
            </div>
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
        <?php
            if (isset($data)) {
                if (!empty($data['results'])) {
                    echo '<div class="genres-container">'; 
                    foreach ($data['results'] as $row) {
                        echo '<div class="genre-container">'; 
                        echo '<a href="../Controllers/C_recherche_Livre.php?genre=' . urlencode($row['genre']) . '">';
                        echo '<p>' . htmlspecialchars($row['genre']) . '</p>';
                        echo '</a>';
                        echo '</div>';
                    }
                    echo '</div>'; 
                } else {
                    echo '<p>Aucun genre trouvé</p>';
                }
            }
        ?>
    </main>

    <footer>
      
    </footer>


</body>

</html>
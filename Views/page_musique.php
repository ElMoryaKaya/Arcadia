<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\Views\Style\page_musique.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="website icon" type="png" href="..\Views\image_A_L\logo_arcadia.png">
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
<body>
    
    <main>
    <?php
    if (isset($data)) {
        if (!empty($data['results'])) {
            echo '<div class="genres-container">'; 
            foreach ($data['results'] as $row) {
                echo '<div class="genre-container">'; 
                echo '<a href="../Controllers/C_recherche_musique.php?genre=' . urlencode($row['genre']) . '">';
                echo '<img src="../Views/image_A_L/genres/' . htmlspecialchars($row['genre']) . '.jpg" alt="' . htmlspecialchars($row['genre']) . '" class="genre-image">';
                echo '<p>' . htmlspecialchars($row['genre']) . '</p>';
                echo '</a>';
                echo '</div>';
            }
            echo '</div>'; 
        } else {
            echo '<p>Aucun genre trouvé</p>';
        }
    } else {
        echo '<p>Aucun genre trouvé</p>';
    }
    ?>

    </main>
    <footer>
      
    </footer>
</body>
</html>
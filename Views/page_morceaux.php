<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/Style/page_morceaux.css">
    <link rel="stylesheet" href="..\Views\Style\page_album.css">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <title>Album - <?php echo htmlspecialchars($data['album']); ?></title>
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($data['album']); ?></h1>
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
        <h1>Album: <?php echo htmlspecialchars($data['album']); ?></h1>
        <nav>
            <a href="../Controllers/C_recherche_musique.php" class="button">Retour à la recherche</a>
        </nav>
    </header>

    <main>
        <div class="artist-photo">
            <?php
            if (isset($data['results'][0]['photo_artiste'])) {
                echo '<img src="../' . htmlspecialchars($data['results'][0]['photo_artiste']) . '" alt="' . htmlspecialchars($data['album']) . '" class="artist-image">';
            } else {
                echo '<p>Image non disponible.</p>';
            }
            ?>
        </div>
        <div class="music-list">
        <?php
if (isset($data)) {
    if (!empty($data['results'])) {
        foreach ($data['results'] as $index => $row) {
            echo '<div class="audio-container" id="audio-' . $index . '">';
            echo '<p>' . htmlspecialchars($row['titre']) . '</p>';
            echo '<p>' . htmlspecialchars($row['artiste']) . '</p>';

            // Vérifier le type de fichier audio
        $audio_path = htmlspecialchars($row['chemin_audio']);
        $audio_extension = pathinfo($audio_path, PATHINFO_EXTENSION);

        echo '<audio controls>';
        if ($audio_extension === 'mp3') {
            echo '<source src="../../arcadia' . $audio_path . '" type="audio/mpeg">';
        } elseif ($audio_extension === 'webm') {
            echo '<source src="../../arcadia' . $audio_path . '" type="audio/webm">';
        } elseif ($audio_extension === 'm4a') {
            echo '<source src="../../arcadia' . $audio_path . '" type="audio/m4a">';
        } elseif ($audio_extension === 'wav') {
            echo '<source src="../../arcadia' . $audio_path . '" type="audio/wav">';
        } else {
            echo "Votre navigateur ne supporte pas l'élément audio.";
        }
        echo '</audio>';


            echo '<div class="music-buttons">';
            echo '<button class="prev-music-btn">Morceau précédent</button>';
            echo '<button class="next-music-btn">Morceau suivant</button>';
            echo '</div>';

            echo '</div>';
        }
    } else {
        echo '<p>Aucun morceau trouvé pour cet album</p>';
    }
}
?>

        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const musicContainers = document.querySelectorAll('.audio-container');
            let currentIndex = 0;
            let currentAudio = null;

            // Fonction pour changer de morceau
            function changeMusic(index) {
                if (currentAudio) {
                    currentAudio.pause();
                    currentAudio.currentTime = 0;
                }

                musicContainers[currentIndex].style.display = 'none';
                currentIndex = index;
                musicContainers[currentIndex].style.display = 'block';

                currentAudio = musicContainers[currentIndex].querySelector('audio');
                currentAudio.play();
            }

            // Initialisation : masquer tous sauf le premier morceau
            musicContainers.forEach((container, index) => {
                if (index !== currentIndex) {
                    container.style.display = 'none';
                }
            });

            // Ajout des événements pour les boutons de navigation
            musicContainers.forEach((container, index) => {
                const prevBtn = container.querySelector('.prev-music-btn');
                const nextBtn = container.querySelector('.next-music-btn');

                prevBtn.addEventListener('click', () => {
                    changeMusic(index === 0 ? musicContainers.length - 1 : index - 1);
                });

                nextBtn.addEventListener('click', () => {
                    changeMusic((index + 1) % musicContainers.length);
                });
            });
        });
    </script>
    <footer>

    </footer>
</body>
</html>

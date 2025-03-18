<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/Style/page_musique.css">
</head>
<body>
    <main>
        <?php
        if (isset($data)) {
            if (!empty($data['results'])) {
                echo '<div class="albums-container">';
                foreach ($data['results'] as $row) {
                    echo '<div class="album-container">';
                    echo '<p>' . htmlspecialchars($row['album']) . '</p>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>Aucun album trouvé pour cet artiste</p>';
            }
        } else {
            echo '<p>Aucun résultat trouvé</p>';
        }
        ?>
    </main>
</body>
</html>
 
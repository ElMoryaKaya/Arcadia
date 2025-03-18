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
                echo '<div class="morceaux-container">';
                foreach ($data['results'] as $row) {
                    echo '<div class="morceau-container">';
                    echo '<p>' . htmlspecialchars($row['titre']) . ' - ' . htmlspecialchars($row['artiste']) . '</p>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p>Aucune chanson trouvée pour ce titre</p>';
            }
        } else {
            echo '<p>Aucun résultat trouvé</p>';
        }
        ?>
    </main>
</body>
</html>

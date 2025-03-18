<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vente CD et Vinyles</title>
</head>
<body>
    <?php if (isset($datas)): ?>
        <h1>CD disponibles</h1>
        <?php var_dump($datas);?>
        <section>
            <?php if (!empty($datas['results'])): ?>
                <div>
                    <?php foreach ($datas['results'] as $row): ?>
                        <div>
                            <p>Titre: <?php echo htmlspecialchars($row['titre']); ?></p>
                            <p>Auteur: <?php echo htmlspecialchars($row['artiste']); ?></p>
                            <p>Genre: <?php echo htmlspecialchars($row['genre']); ?></p>
                            <p>Format: <?php echo htmlspecialchars($row['format']); ?></p>
                            <p>Prix: <?php echo htmlspecialchars($row['prix']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="no-results">Aucun CD trouvé</p>
            <?php endif; ?>
        </section>

        <h1>Vinyles disponibles</h1>
        <section>
            <?php if (!empty($datas['results'])): ?>
                <div>
                    <?php foreach ($datas['results'] as $row): ?>
                        <div>
                            <p>Titre: <?php echo htmlspecialchars($row['titre']); ?></p>
                            <p>Auteur: <?php echo htmlspecialchars($row['artiste']); ?></p>
                            <p>Genre: <?php echo htmlspecialchars($row['genre']); ?></p>
                            <p>Format: <?php echo htmlspecialchars($row['format']); ?></p>
                            <p>Prix: <?php echo htmlspecialchars($row['prix']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="no-results">Aucun vinyle trouvé</p>
            <?php endif; ?>
        </section>
    <?php else: ?>
        <p class="no-results">Aucune donnée disponible.</p>
    <?php endif; ?>
</body>
</html>

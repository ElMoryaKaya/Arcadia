<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($livre['titre']) ? htmlspecialchars($livre['titre']) : 'Titre inconnu'; ?></title>
</head>
<body>
    <?php if (isset($livre) && $book): ?>
        <h1><?php echo htmlspecialchars($livre['titre']); ?></h1>
        <h3>Par <?php echo htmlspecialchars($livre['auteur']); ?></h3>
        <embed src="<?php echo htmlspecialchars($livre['chemin']); ?>" width="600" height="500" type="application/pdf">
    <?php else: ?>
        <p>Livre introuvable.</p>
    <?php endif; ?>
</body>
</html>









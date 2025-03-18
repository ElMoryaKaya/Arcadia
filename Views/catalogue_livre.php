<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue de Livres</title>
</head>
<body>
<?php require "header.php";?>

<?php foreach ($lister as $liste): ?>
        <div>
            <h3><?php echo $liste['titre']; ?></h3>
            <p>Auteur: <?php echo $liste['auteur']; ?></p>
            <img src="<?php echo $liste['photo_livre']; ?>" alt="<?php echo $liste['titre']; ?>" style="max-width: 200px;"><br>
            <a href="../Controllers/afficher_lecture.php?id=<?php echo $liste['id_livre']; ?>">Lire ce livre</a>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>
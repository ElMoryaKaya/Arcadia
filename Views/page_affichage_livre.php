<?php
require( "../Models/db_connect.php");
$stmt = $connect->query('SELECT * FROM livre');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre</title>
  
</head>
<body>
    <h1>livre disponible</h1>
    <ul class="book-list">
        <?php
       while ($livres = $stmt->fetch()) { 
        ?>
            <li>
                <h2><?php echo htmlspecialchars($livres['titre']); ?></h2>
                <p>By <?php echo htmlspecialchars($livres['auteur']); ?></p>
                <a <?php echo htmlspecialchars ($livres['chemin_livre']); ?>>livre</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../page_accueil.css">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <title>Gestion</title>
</head>
<body>
    <?php
        if ($statut_utilisateur == true) {
            if ($statut_utilisateur['type_utilisateur'] == 'administrateur') {
                echo "<a class='button' href='../Controllers/C_gestion_utilisateurs.php'>Gestion Utilisateurs</a>";
                echo "<a class='button' href='#'>Gestion Livres</a>";
                echo "<a class='button' href='#'>Gestion musiques</a>";
                echo "<a class='button' href='#'>Gestion CD/Vinyle</a>";
                echo "<a class='button' href='#'>Gestion Evenements</a>";
                echo "<a class='button' href='#'>Gestion Achat</a>";
                echo "<a class='button' href='#'>Gestion Localisation</a>";
                echo "<a class='button' href='#'>Gestion des Emprunts</a>";

            } elseif ($statut_utilisateur['type_utilisateur'] == 'libraire') {
                echo "<a class='button' href='#'>Gestion Livres</a>";
                echo "<a class='button' href='#'>Gestion Localisation</a>";
                echo "<a class='button' href='#'>Gestion Achat</a>";

            }elseif ($statut_utilisateur['type_utilisateur'] == 'musicien') {
                echo "<a class='button' href='#'>Gestion musiques</a>";
                echo "<a class='button' href='#'>Gestion CD/Vinyle</a>";
                echo "<a class='button' href='#'>Gestion Achat</a>";

            }elseif ($statut_utilisateur['type_utilisateur'] == 'Organisateur_evt') {
                echo "<a class='button' href='#'>Gestion Evenements</a>";
                echo "<a class='button' href='#'>Gestion Achat</a>";

            }else if (($statut_utilisateur['type_utilisateur'] == 'bibliothécaire')) {
                echo "<a class='button' href='#'>Gestion Livres</a>";
                echo "<a class='button' href='#'>Gestion Localisation</a>";
                echo "<a class='button' href='#'>Gestion des Emprunts</a>";
            } else {
                header("Location:../Controllers/afficherAccueil.php");
            }
        }
    ?>
</body>
</html>
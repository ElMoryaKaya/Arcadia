<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Événement</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="..\Views\Style\Identification.css">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <link rel="stylesheet" type="text/css" href="../Views/Style/ajout_ent.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter un Événement</h1>
        <form action="../Controllers/c_gestion_evenement.php" method="post">
            <div class="form-group">
                <div class="form-label">Titre :</div>
                <input type="text" id="titre" name="titre" required>
            </div>

            <div class="form-group">
                <div class="form-label">Date et Heure :</div>
                <input type="datetime-local" id="date_heure" name="date_heure" required>
            </div>

            <div class="form-group">
                <div class="form-label">Lieu :</div>
                <input type="text" id="lieu" name="lieu" required>
            </div>

            <div class="form-group">
                <div class="form-label">Description :</div>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <div class="form-label">Prix d'entrée :</div>
                <input type="number" id="prix_entre" name="prix_entre" required>
            </div>

            <div class="form-group">
                <div class="form-label">Disponibilité des billets :</div>
                <input type="number" id="disponibilite_billets" name="disponibilite_billets" required>
            </div>

            <div class="form-group">
                <div class="form-label">Type d'événement :</div>
                <input type="text" id="type_evenement" name="type_evenement" required>
            </div>

            <div class="form-group">
                <div class="form-label">Organisateur :</div>
                <input type="text" id="organisateur_evt" name="organisateur_evt" required>
            </div>

            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>

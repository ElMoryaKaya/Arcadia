<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Gestion de Musique</title>
    <link rel="stylesheet" href="../Views/Style/page_gestion_musiques.css">
</head>
<body>
    <div class="form-container">
        <h2>Ajouter une musique</h2>
        <form action="../Controllers/C_gestion_musique.php" method="post" enctype="multipart/form-data">
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" required><br><br>
            
            <label for="artiste">Artiste :</label>
            <input type="text" id="artiste" name="artiste" required><br><br>
            
            <label for="photo_artiste">Photo de l'artiste :</label>
            <input type="file" id="photo_artiste" name="photo_artiste" accept="image/*" required><br><br>
            
            <label for="genre">Genre :</label>
            <input type="text" id="genre" name="genre" required><br><br>
            
            <label for="album">Album :</label>
            <input type="text" id="album" name="album" required><br><br>
            
            <label for="format">Format :</label>
            <select id="format" name="format" required>
                <option value="cd">CD</option>
                <option value="vinyle">Vinyle</option>
            </select><br><br>
            
            <label for="prix">Prix :</label>
            <input type="number" id="prix" name="prix" min="0" required><br><br>
            
            <label for="disponibilite">Disponibilité :</label>
            <input type="text" id="disponibilite" name="disponibilite" required><br><br>
            
            <label for="duree">Durée :</label>
            <input type="time" id="duree" name="duree" required><br><br>
            
            <label for="chemin_audio">Fichier audio :</label>
            <input type="file" id="chemin_audio" name="chemin_audio" accept="audio/*" required><br><br>
            
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>
</html>
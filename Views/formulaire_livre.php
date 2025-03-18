<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Livre</title>
</head>
<body>
    <h2>Ajouter un Livre</h2>
    <form action="../Controllers/C_livre.php" method="post" enctype="multipart/form-data">
        <label for="titre">Titre :</label><br>
        <input type="text" id="titre" name="titre" required><br><br>
        
        <label for="auteur">Auteur :</label><br>
        <input type="text" id="auteur" name="auteur" required><br><br>
        
        <label for="genre">Genre :</label><br>
        <input type="text" id="genre" name="genre" required><br><br>
        
        <label for="format">Format :</label><br>
        <select id="format" name="format" required>
            <option value="livre electronique">Livre électronique</option>
            <option value="audio book">Audio book</option>
        </select><br><br>
        
        <label for="prix">Prix :</label><br>
        <input type="number" id="prix" name="prix" required><br><br>
        
        <label for="disponibilite">Disponibilité :</label><br>
        <select id="disponibilite" name="disponibilite" required>
            <option value="disponible">Disponible</option>
            <option value="indisponible">Indisponible</option>
        </select><br><br>
        
        <label for="evaluation">Évaluation :</label><br>
        <input type="number" id="evaluation" name="evaluation" min="1" max="5" required><br><br>
        
        <label for="date_publication">Date de publication :</label><br>
        <input type="date" id="date_publication" name="date_publication" required><br><br>
        
        <label for="photo_livre">URL de la photo du livre :</label><br>
        <input type="text" id="photo_livre" name="photo_livre" required><br><br>
        
        <label for="chemin_livre">Chemin du livre :</label><br>
        <input type="text" id="chemin_livre" name="chemin_livre" required><br><br>
        
        <label for="fichier_livre">Télécharger le fichier du livre :</label><br>
        <input type="file" id="fichier_livre" name="fichier_livre" accept=".pdf" required><br><br>
        
        <input type="submit" value="Ajouter le Livre" name="submit">
    </form>
</body>
</html>

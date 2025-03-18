<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de localisation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="..\Views\Style\Identification.css">
  <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
</head>
<body>
<?php require "header.php";?>

  <div class="container">
    <h1>Formulaire de localisation</h1>
    <form action="../Controllers/C_localisation_form.php" method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control"  name="nom" placeholder="Entrez le nom de votre boutique">
      </div>
      <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" name="adresse" placeholder="Entrez l'adresse">
      </div>
      <div class="mb-3">
        <label for="enseigne" class="form-label">Enseigne</label>
       <select name="enseigne" class="form-control">
        <option value="Librairie">Librairie</option>
        <option value="Bibliothèque">bibliothèque</option>
       </select>
      </div>
      <div class="mb-3">
        <label for="ville" class="form-label">Ville</label>
        <input type="text" class="form-control" name="ville" placeholder="Entrez la ville">
      </div>
      <div class="mb-3">
        <label for="codePostal" class="form-label">Code postal</label>
        <input type="text" class="form-control" name="code_postal" placeholder="Entrez le code postal">
      </div>
      <div class="mb-3">
        <label for="pays" class="form-label">Pays</label>
        <input type="text" class="form-control" name="pays" placeholder="Entrez le pays">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Entrez une description"></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
    </form>
  </div>
  <footer>
        <p>&copy; 2024 Arcadia. Tous droits réservés.</p>
        <nav>
            <ul>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">Conditions d'utilisation</a></li>
                <li><a href="#">Contactez-nous</a></li>
            </ul>
        </nav>
    </footer>
  </body>
</html>
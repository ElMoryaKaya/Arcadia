<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Localisation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
  <link rel="stylesheet" href="../Views/Style/style.css">
  <link rel="stylesheet" href="..\Views\Style\tableau.css">
  <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
</head>
<body>
<?php require "header.php";?>
  <div class="jumbotron">
    <div class="container-fluid">
      <h1>Trouvez les librairies et les plus proches de chez vous</h1>
      <table>
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Enseigne</th>
            <th scope="col">Ville</th>
            <th scope="col">Pays</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if (isset($afficher_liste)) 
            foreach($afficher_liste as $liste) : ?>
                <tr>
                    <td scope="row"><?php echo htmlspecialchars($liste['nom_lieu']);?></td>
                    <td scope="row"><?php echo htmlspecialchars($liste['adresse']);?></td>
                    <td scope="row"><?php echo htmlspecialchars($liste['Enseigne']);?></td>
                    <td scope="row"><?php echo htmlspecialchars($liste['ville']);?></td>
                    <td scope="row"><?php echo htmlspecialchars($liste['code_postal']);?></td>
                    <td scope="row"><?php echo htmlspecialchars($liste['description']);?></td>
                </tr>
            <?php endforeach; ?>
    </tbody>
</table>
      <form class="form-horizontal">
        <div class="form-group row">
          <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i> Départ</label>
          <div class="col-xs-4">
            <input type="text" id="from" placeholder="choisir l'emplacement de départ" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i> Destination</label>
          <div class="col-xs-4">
            <input type="text" id="to" placeholder="choisir l'emplacement final" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="mode" class="col-xs-2 control-label"><i class="fas fa-car"></i> Mode de Transport</label>
          <div class="col-xs-4">
            <select id="mode" class="form-control">
              <option value="DRIVING">Voiture</option>
              <option value="WALKING">À pied</option>
              <option value="BICYCLING">Vélo</option>
              <option value="TRANSIT">Transport en commun</option>
            </select>
          </div>
        </div>
      </form>
      <div class="offset-2 col-10">  
        <button class="btn btn-primary" onclick="calcRoute();" style="margin:10px auto; text-align:center;"><i class="fas fa-directions"></i> Obtenir l'itinéraire</button>
      </div>
      <div class="container-fluid mt-3">
        <div id="googleMap" style="width:100%;height:400px;"></div>
        <div id="output" class="mt-3"></div>
      </div>
    </div>
  </div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDABTQK5OSrwK0LYwOcQXYxiPCohNjyN7A&libraries=places"></script>
  <script src="../Controllers/map.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="..\Views\Style\Identification.css">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
</head>
<body>
<div class="container">
   
   <?php 
 
 if (isset($erreurs))
 foreach($erreurs as $erreur){
         echo "<div class='alert alert-danger'>$erreur</div>";
     }; 
     
     if (isset($messages))     
     foreach($messages as $message){
        echo "<div class='alert alert-success'>$message</div>";
        echo "<a href='../Controllers/afficherConnexion.php'><button class='btn btn-primary'>Continuer</button></a>";
     };
     ?>
   
   <form action="../Controllers/C_inscription.php" method="post">
        <div class="form-group">
            <input type="text"  class="form-control" name="nom" placeholder="Nom :">
        </div> <br>
        <div class="form-group">
            <input type="text"  class="form-control" name="prenom" placeholder="Prenom :">
        </div> <br>
        <div class="form-group">
            <input type="email"  class="form-control" name="email" placeholder="email :">
        </div><br>
        <div class="form-group">
            <input type="password"  class="form-control" name="MDP" placeholder="Mot de passe :">
        </div><br>
        <div class="form-group">
            <input type="password"  class="form-control" name="CMDP" placeholder="confirmer votre mot de passe :">
        </div><br>
        <div class="form-group">
                <select id="statut" name="statut">
                    <option Value=""> --Quel est votre statut ?-- </option>
                    <option Value="administrateur">Administrateur</option>
                </select>
        </div><br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Inscription">
        </div>
    </form>
        
</div>
</body>
</html>
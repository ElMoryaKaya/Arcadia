<?php
 if (isset($_POST["submit"])) {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $motdepasse = $_POST["MDP"];
    $confirm_motdepasse = $_POST["CMDP"];
    $statut = $_POST["statut"];

    $hash_motdepasse = password_hash($motdepasse, PASSWORD_DEFAULT);
    
    $erreurs = array();

    if (empty($nom) || empty($prenom) || empty($email) || empty($motdepasse) || empty($confirm_motdepasse) || empty($statut)) {
        array_push($erreurs,"vous devez remplir tout les elements");
    } 
    if (strlen($motdepasse)<8) {
        array_push($erreurs,"Le mot de passe doit contenir au moins 8 caractères ");
    }
    if ($motdepasse !== $confirm_motdepasse) {
        array_push($erreurs,"Le mot de passe ne correspond pas");
    }

    if (count($erreurs)>0) {
        foreach ($erreurs as $erreur) {
            echo "<div class='alert alert-danger'>$erreur</div>";
        }
        } else {
                //$sql = "INSERT INTO Utilisateur (nom,prenom,email,mot_de_passe,type_utilisateur) VALUES (?,?,?,?,?)";
                    $stmt = $connect->prepare("INSERT INTO Utilisateur (nom,prenom,email,mot_de_passe,type_utilisateur) VALUES (?,?,?,?,?)");
                  //  $stmt->bindParam(":fullname", $fullname, PDO::PARAM_STR);
                  //  $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                  //  $stmt->bindParam(":passwordHash", $passwordHash, PDO::PARAM_STR);

                    try {
                        $stmt->execute(array($nom,$prenom,$email,$hash_motdepasse,$statut));
                        $result = $stmt->fetch();

                        echo "<div class='alert alert-success'>Vous avez bien été enregistré </div>";
                      echo  "<a href='..\Views\Connexion.php'><button class='btn btn-primary'> entrer</button></a>";
                    } catch (PDOException $e) {
                        echo "<p class='alert alert-danger'> Insertion : " . $e->getMessage() . "</p>";
                    }
                };

}

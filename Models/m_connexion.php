<?php
if (isset($_POST["connexion"])) {
    $email = $_POST["email"];
    $motdepasse = $_POST["MDP"];

    $stmt = $connect->prepare("SELECT * FROM Utilisateur WHERE email = ?");
    $stmt->execute(array($email));
    $result = $stmt->fetch();
    if($email !== $result["email"]){
        echo "<div class='alert alert-danger'>Votre email ne correspond pas</div>";
        }
    if(password_verify($motdepasse, $result["mot_de_passe"])){
        header("Location:..\Views\page_accueil.php ");    
    } else{
        echo "<div class='alert alert-danger'>Le mot de passe ne correspond pas</div>";
    };
    
}
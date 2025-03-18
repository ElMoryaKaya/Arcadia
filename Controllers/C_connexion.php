<?php
session_start();

if(isset($_SESSION["utilisateur"])){
   header("Location:afficherAccueil.php");
   exit();

};

require "..\Models\m_utilisateurs.php";

if (isset($_POST["connexion"])) {
    $email = $_POST["email"];
    $motdepasse = $_POST["MDP"];

    $erreurs = array();
   
    $utilisateur =  identification_utilisateur($email, $motdepasse);
    
    if($utilisateur == false){
        array_push($erreurs,"Votre email n'existe pas");
    } else {
        if(password_verify($motdepasse, $utilisateur["mot_de_passe"])){
            $_SESSION["utilisateur"] = $utilisateur;
            header("Location:afficherAccueil.php");    
            exit();
        } 
        else{
            
            array_push($erreurs,"Mot de passe incorrect");
        };
    }
}

require "..\Views\page_Connexion.php";

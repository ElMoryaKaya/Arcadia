<?php

require "..\Models\m_localisation.php";

if (isset($_POST["submit"])) {

    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    $enseigne = $_POST["enseigne"];
    $ville = $_POST["ville"];
    $code_postal = $_POST["code_postal"];
    $pays = $_POST["pays"];
    $description = $_POST["description"];

    $ajouter_lieu = inserer_localisation($nom,$adresse,$enseigne,$ville,$code_postal,$pays,$description);
   header("Location:afficherLocalisation_form.php");
}

   
require "..\Views\localisation_form.php";


    
    


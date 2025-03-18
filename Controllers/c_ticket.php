<?php
require "../Models/m_evenement.php";


if (isset($_POST["submit"])) {

    $quantite = $_POST["quantite"];
    $produit = $_POST["produit"];
   

        $transaction = acheter_ticket($quantite,$produit);
        header("Location:c_evenement.php");
    
    }
    
    require "../Views/event-details.php";
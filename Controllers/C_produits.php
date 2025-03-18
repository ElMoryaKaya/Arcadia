<?php
//require "../Models/db_connect.php";
//require "../Models/m_produits.php";

//function AllCD($connect) {
  //  $results = CD($connect); 
//    return ['results' => $results];
//}
//function Allvinyle($connect) {
    //$results = vinyle($connect); 
  //  return ['results' => $results];
//}

//if (isset($_GET['cd'])) {
  //  $datas = AllCD($connect);
//} elseif (isset($_GET['vinyle'])) {
  //  $datas = Allvinyle($connect);
//}

//require '../Views/page_produits.php';
?>
<?php
// Inclusion du fichier de connexion à la base de données et du modèle
require '../Models/db_connect.php';
require '../Models/m_produits.php';

// Initialisation de $data
$data = [
    'type' => '', // Valeur par défaut pour éviter les avertissements
    'results' => []
];

// Vérification des paramètres GET pour décider quel type de musique afficher
if (isset($_GET['cd'])) {
    $data['results'] = CD($connect); // Appel de la fonction pour récupérer les CDs
    $data['type'] = 'CDs'; // Définition du type de musique pour la vue
} elseif (isset($_GET['vinyle'])) {
    $data['results'] = vinyle($connect); // Appel de la fonction pour récupérer les vinyles
    $data['type'] = 'Vinyles'; // Définition du type de musique pour la vue
}

// Inclusion de la vue pour afficher les résultats
require '../Views/page_produits.php';
?>

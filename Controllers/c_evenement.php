<?php
session_start(); 
require "../Models/m_utilisateurs.php";
$email = $_SESSION["utilisateur"]["email"];
$statut_utilisateur = verification_utilisateur($email);

require "../Models/db_connect.php"; 
require "../Models/m_evenement.php";


function list_events() {
    global $db;
    $events = get_all_events($db);
    include '../Views/evnt-list.php';
}

function show_event_details($eventId) {
    global $db;
    $event = get_event_by_id($db, $eventId);
    include '../Views/event-details.php';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'list') {
        list_events();
    } elseif ($action == 'details' && isset($_GET['id'])) {
        $eventId = $_GET['id'];
        show_event_details($eventId);
    } else {
        list_events(); // Par défaut, afficher la liste des événements si aucune action ou action non reconnue
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Logique pour traiter l'achat des tickets ici (non incluse dans ce code)
    // Après traitement, définir le message de confirmation dans la session
    $_SESSION['message'] = "Achat effectué avec succès. Vos billets vous seront envoyés sous peu.";

    // Redirection vers la liste des événements après soumission du formulaire d'achat
    header("Location: c_evenement.php?action=list");
    exit();
} else {
    list_events(); // Par défaut, afficher la liste des événements si aucune action spécifiée
}
?>


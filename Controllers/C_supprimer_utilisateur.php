<?php

require "../Models/m_gestion_utilisateurs.php"; 

$id = $_GET['id_utilisateur'];


$supprimer = supprimer_utilisateur($id);

 
  header("Location: C_gestion_utilisateurs.php?message=");

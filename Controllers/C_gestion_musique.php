<?php
require '../Models/db_connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST['titre']) && isset($_POST['artiste']) && isset($_FILES['photo_artiste']) &&
        isset($_POST['genre']) && isset($_POST['album']) && isset($_POST['format']) &&
        isset($_POST['prix']) && isset($_POST['disponibilite']) && isset($_POST['duree']) &&
        isset($_FILES['chemin_audio'])
    ) {
        $titre = $_POST['titre'];
        $artiste = $_POST['artiste'];
        $genre = $_POST['genre'];
        $album = $_POST['album'];
        $format = $_POST['format'];
        $prix = $_POST['prix'];
        $disponibilite = $_POST['disponibilite'];
        $duree = $_POST['duree'];
        $fichier_temp_audio = $_FILES['chemin_audio']['tmp_name'];
        $fichier_nom_audio = $_FILES['chemin_audio']['name'];
        $fichier_type_audio = $_FILES['chemin_audio']['type'];
        $fichier_temp_photo = $_FILES['photo_artiste']['tmp_name'];
        $fichier_nom_photo = $_FILES['photo_artiste']['name'];
        $fichier_type_photo = $_FILES['photo_artiste']['type'];

        if (strpos($fichier_type_audio, 'audio') === 0) {
            $dossier_stockage_audio = '../fichiers/uploads/';
            $fichier_destination_audio = $dossier_stockage_audio . $fichier_nom_audio;

            if (move_uploaded_file($fichier_temp_audio, $fichier_destination_audio)) {
                $dossier_stockage_photo = '../fichiers/uploads/';
                $fichier_destination_photo = $dossier_stockage_photo . $fichier_nom_photo;

                if (move_uploaded_file($fichier_temp_photo, $fichier_destination_photo)) {
                    try {
                        $stmt = $connect->prepare("INSERT INTO Musique 
                            (titre, artiste, photo_artiste, genre, album, format, prix, disponibilite, duree, chemin_audio) 
                            VALUES (:titre, :artiste, :photo_artiste, :genre, :album, :format, :prix, :disponibilite, :duree, :chemin_audio)");
                        $stmt->bindParam(':titre', $titre);
                        $stmt->bindParam(':artiste', $artiste);
                        $stmt->bindParam(':photo_artiste', $fichier_destination_photo); 
                        $stmt->bindParam(':genre', $genre);
                        $stmt->bindParam(':album', $album);
                        $stmt->bindParam(':format', $format);
                        $stmt->bindParam(':prix', $prix);
                        $stmt->bindParam(':disponibilite', $disponibilite);
                        $stmt->bindParam(':duree', $duree);
                        $stmt->bindParam(':chemin_audio', $fichier_destination_audio); 

                       
                        if ($stmt->execute()) {
                            echo "Musique enregistrée avec succès.";
                        } else {
                            echo "Erreur lors de l'enregistrement de la musique.";
                        }
                    } catch (PDOException $e) {
                        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
                    }
                } else {
                    echo "Erreur lors du téléchargement de l'image de l'artiste.";
                }
            } else {
                echo "Erreur lors du téléchargement du fichier audio.";
            }
        } else {
            echo "Le fichier audio n'est pas un fichier audio valide.";
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>

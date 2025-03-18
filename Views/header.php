<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="..\views\Style\page_accueil.css">
<header>
<?php
if (isset($statut_utilisateur) == true) {
   if ($statut_utilisateur['type_utilisateur'] == 'utilisateur_simple') {
      echo "<nav>";
      echo "<ul>";
          echo "<li>";
              echo "<a href='../Controllers/afficherAccueil.php'><img src='..\Views\images\logo.png' alt='Arcadia Logo' class='logo'></a>";
          echo "</li>";
          echo "<li><a href='..\Controllers\Deconnexion.php'>Deconnexion</a></li>";
          echo "<li><a href='../Controllers/afficherCatalogue_livre.php'>Livre</a></li>";
          echo "<li class='menu-deroulant'>";
              echo "<a href='../Controllers/C_librairie.php'>Librairie</a>";
              echo "<ul class='sous-menu'>";
                  echo "<li><a href='../Controllers/afficherMap.php'>Adresse</a></li>";
                  echo "<li><a href='#'>Librairie 2</a></li>";
              echo "</ul>";
          echo "</li>";
          echo "<li class='menu-deroulant'>";
              echo "<a href='../Controllers/C_recherche_musique.php'>Musique</a>";
          echo "</li>";
          echo "<li class='menu-deroulant'>";
              echo "<a href='../Controllers/C_produits.php'>CD/Vinyle</a>";
          echo "</li>";
          echo "<li class='menu-deroulant'>";
              echo "<a href='../Controllers/C_evenement.php'>Evenement</a>";
              echo "<ul class='sous-menu'>";
                  echo "<li><a href='#'>Evenement 1</a></li>";
                  echo "<li><a href='#'>Evenement 2</a></li>";
              echo "</ul>";
          echo "</li>";
          echo "</ul>";
          echo "</nav>";
         } else {
            echo "<nav>";
            echo "<ul>";
                echo "<li>";
                echo "<a href='../Controllers/afficherAccueil.php'><img src='..\Views\images\logo.png' alt='Arcadia Logo' class='logo'></a>";
                echo "</li>";
                echo "<li><a href='..\Controllers\Deconnexion.php'>Deconnexion</a></li>";
                echo "<li><a href='../Controllers/afficherCatalogue_livre.php'>Livre</a></li>";
                echo "<li class='menu-deroulant'>";
                    echo "<a href='../Controllers/C_librairie.php'>Librairie</a>";
                    echo "<ul class='sous-menu'>";
                        echo "<li><a href='../Controllers/afficherMap.php'>Adresse</a></li>";
                        echo "<li><a href='#'>Librairie 2</a></li>";
                    echo "</ul>";
                echo "</li>";
                echo "<li class='menu-deroulant'>";
                    echo "<a href='../Controllers/C_recherche_musique.php'>Musique</a>";
                echo "</li>";
                echo "<li class='menu-deroulant'>";
                echo "<a href='../Controllers/C_produits.php'>CD/Vinyle</a>";
                echo "</li>";
                echo "<li class='menu-deroulant'>";
                    echo "<a href='../Controllers/C_evenement.php'>Evenement</a>";
                    echo "<ul class='sous-menu'>";
                        echo "<li><a href='#'>Evenement 1</a></li>";
                        echo "<li><a href='#'>Evenement 2</a></li>";
                    echo "</ul>";
                echo "</li>";
                if ($statut_utilisateur['type_utilisateur'] == 'administrateur') {
                echo "<li class='menu-deroulant'>";
                    echo "<a href='#'>Gestion</a>";
                    echo "<ul class='sous-menu'>";
                        echo "<li><a href='../Controllers/C_gestion_utilisateurs.php'>Gestion Utilisateurs</a></li>";
                        echo "<li><a href='../Controllers/afficherFormulaire_livre.php'>Gestion Livres</a></li>";
                        echo "<li><a href='#'>Gestion Musiques</a></li>";
                        echo "<li><a href='#'>Gestion CD/Vinyles</a></li>";
                        echo "<li><a href='../Controllers/c_gestion_evenement.php'>Gestion Evenement</a></li>";
                        echo "<li><a href='#'>Gestion Achat</a></li>";
                        echo "<li><a href='../Controllers/afficherLocalisation_form.php'>Gestion Localisation</a></li>";
                        echo "<li><a href='#'>Gestion Emprunts</a></li>";
                    echo "</ul>";
                echo "</li>";
                }elseif($statut_utilisateur['type_utilisateur'] == 'libraire'){
                  echo "<li class='menu-deroulant'>";
                  echo "<a href='#'>Gestion</a>";
                  echo "<ul class='sous-menu'>";
                      echo "<li><a href='../Controllers/afficherFormulaire_livre.php'>Gestion Livres</a></li>";
                      echo "<li><a href='#'>Gestion Achat</a></li>";
                      echo "<li><a href='../Controllers/afficherLocalisation_form.php'>Gestion Localisation</a></li>";
                  echo "</ul>";
              echo "</li>";
                }elseif ($statut_utilisateur['type_utilisateur'] == 'musicien') {
                  echo "<li class='menu-deroulant'>";
                    echo "<a href='#'>Gestion</a>";
                    echo "<ul class='sous-menu'>";
                        echo "<li><a href='../Views/page_gestion_musique.php'>Gestion Musiques</a></li>";
                        echo "<li><a href='#'>Gestion CD/Vinyles</a></li>";
                        echo "<li><a href='#'>Gestion Achat</a></li>";
                    echo "</ul>";
                echo "</li>";
                } elseif ($statut_utilisateur['type_utilisateur'] == 'bibliothécaire') {
                  echo "<li class='menu-deroulant'>";
                  echo "<a href='#'>Gestion</a>";
                  echo "<ul class='sous-menu'>";
                      echo "<li><a href='../Controllers/afficherFormulaire_livre.php'>Gestion Livres</a></li>";
                      echo "<li><a href='#'>Gestion Localisation</a></li>";
                      echo "<li><a href='#'>Gestion Emprunts</a></li>";
                  echo "</ul>";
              echo "</li>";                      
            } else {
               echo "<li class='menu-deroulant'>";
                    echo "<a href='#'>Gestion</a>";
                    echo "<ul class='sous-menu'>";
                        echo "<li><a href='#'>Gestion Evenement</a></li>";
                        echo "<li><a href='#'>Gestion Achat</a></li>";
                    echo "</ul>";
                echo "</li>";
            }
            echo "</ul>";
        echo "</nav>";               
      }
             }else {
               echo "<nav>";
               echo "<ul>";
                   echo "<li>";
                   echo "<a href='../Controllers/afficherAccueil.php'><img src='..\Views\images\logo.png' alt='Arcadia Logo' class='logo'></a>";
                   echo "</li>";
                   echo "<li><a href='..\Controllers\afficherConnexion.php'>Connexion</a></li>";
                   echo "<li><a href='..\Controllers\afficherInscription.php'>Inscription</a></li>";
                   echo "<li><a href='#'>Livre</a></li>";
                   echo "<li class='menu-deroulant'>";
                       echo "<a href='#'>Librairie</a>";

                   echo "</li>";
                   echo "<li class='menu-deroulant'>";
                       echo "<a href='#'>Musique</a>";
                   echo "</li>";
                   echo "<li class='menu-deroulant'>";
                       echo "<a href='#'>CD/Vinyle</a>";
                       echo "<ul class='sous-menu'>";
                           echo "<li><a href='#'>Liste</a></li>";
                           echo "<li><a href='#'>Album</a></li>";
                       echo "</ul>";
                   echo "</li>";
                   echo "<li class='menu-deroulant'>";
                       echo "<a href='#'>Evenement</a>";
                       echo "<ul class='sous-menu'>";
                           echo "<li><a href='#'>Evenement 1</a></li>";
                           echo "<li><a href='#'>Evenement 2</a></li>";
                       echo "</ul>";
                   echo "</li>";                              
                  echo "</ul>";
              echo "</nav>";                   
            }
  ?>

</header>
</html>

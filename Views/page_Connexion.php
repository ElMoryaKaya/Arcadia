<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <title>Connexion</title>
    <link rel="stylesheet" href="../Views/Style/Identification.css">
</head>
<body>
    <header>
        <div class="arcadia">
            <div class="logo-arcadia">
                <img src="../Views/image_A_L/logo.png" alt="Logo Arcadia" class="logo">
            </div>
            <div class="slogan">
                <p class="logo_text">Où l'utopie devient réalité</p>
            </div>
        </div>
    </header>
    <main>
        <div class="form-container">
            <?php
            if (isset($erreurs)) {
                foreach($erreurs as $erreur){
                    echo "<div class='alert alert-danger'>$erreur</div>";
                }
            }
            ?>
            <form class="form" action="../Controllers/C_connexion.php" method="POST">
                <h1>Connexion</h1>
                <div class="form-group">
                    <input type="email" placeholder="Entre votre email : " name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Entrer votre mot de passe : " name="MDP" class="form-control" required>
                </div>
                <div class="form-btn">
                    <button type="submit" value="Connexion" name="connexion" class="btn">Se Connecter</button>
                </div>
                <div class="register-link">
                    <label> Vous n'avez pas de compte? </label> <a class="btn-primary" href="../Controllers/afficherInscription.php">Inscrivez-vous</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>

<style>
*{
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins",sans-serif;
}
body {
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Pour s'assurer que le conteneur prend toute la hauteur de la page */
    margin: 0; /* Supprime les marges par défaut du body */
}
.form-container{
    width: 420px;
    background:#64b0e2;
    backdrop-filter: blur(20px);
    color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    border-radius: 10px;
    padding: 30px 40px;
}
.form-container h1{
    color: black;
    font-size: 36px;
    text-align: center;
}

.form-container .form-group{
    width: 100%;
    height: 50px;
    margin: 30px 0;
}
.form-group input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border:  1px solid black;
    border-radius: 40px;
    font-size: 16px;
    color: white;
    padding: 20px 45px 20px 20px;
}
.form-group input::placeholder{
    color: white;
}
.form-container .btn{
    width: 100%;
    height: 45px;
    background: black;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: #333;
    font-weight: 600;
    color: white;
}
.form-container .register-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}
.register-link .btn-primary{
    color: #7F00C4;
    text-decoration: none;
    font-weight: 600;
}
.arcadia {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center; /* Centrer le contenu */
            margin-right: 100px;
        }
.name {
            font-weight: bold; /* Mettre le texte en gras */
            font-size: 100px; /* Taille de police plus grande pour le nom */
            font-family: Brush Script MT, Brush Script Std, cursive; /* Utiliser une police sans-serif */
            color: #64b0e2;
        }
.slogan {
            font-style: italic; /* Mettre le texte en italique */
            font-size: 30px; /* Taille de police pour le slogan */
}
/*Logo*/
.logo-arcadia {
  display: flex;
  align-items: center;
}

.logo {
  width: 300px; 
  height: auto;
  margin-right: 10px;
}


</style>
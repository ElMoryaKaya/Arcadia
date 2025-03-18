<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\views\Style\page_accueil.css">
    <link rel="stylesheet" href="..\Views\Style\page_album.css">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
    <title>Arcadia</title>
</head>
<header>
    <div class="container">
    <?php require "header.php";?>
            <div class="search-bar">
                <form action="../Controllers/C_recherche_musique.php" method="POST" class="search-form">
                    <div class="search-container">
                        <input type="search" name="qr" id="search" placeholder="Recherche.." value="<?php echo isset($data['qr']) ? htmlspecialchars($data['qr']) : ''; ?>">
                        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </header>   
<body>
 
    <main>
        <section id="introduction">
            <h1>Bienvenue à Arcadia</h1>
            <p>Votre destination pour les livres, la musique et plus encore.</p>
        </section>

        <section id="carousel">
            
    </section>
        <section id="featured-content">
            <h2>Contenu en vedette</h2>
            <div class="top-section">
                <div class="top-musiques">
                    <h3>Top 5 Musiques</h3>
                    <ul>
                        <li>Espresso sabrina carpenter</li>
                        <li>Nom de la musique 2</li>
                        <li>Nom de la musique 3</li>
                        <li>Nom de la musique 4</li>
                        <li>Nom de la musique 5</li>
                    </ul>
                </div>
                <div class="top-livres">
                    <h3>Top 5 Livres</h3>
                    <ul>
                        <li>Titre du livre 1</li>
                        <li>Titre du livre 2</li>
                        <li>Titre du livre 3</li>
                        <li>Titre du livre 4</li>
                        <li>Titre du livre 5</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="news">
            <h2>Dernières Nouvelles</h2>
            <article>
                <h3>AC/DC électrise le stade de Wembley</h3>
                <p>Le groupe vétéran de hard-rock, qui jouera le 13 août à Paris à l’hippodrome de Longchamp, donnait dimanche 7 juillet...</p>
                <a href="https://www.lemonde.fr/culture/article/2024/07/09/ac-dc-electrise-le-stade-de-wembley_6248213_3246.html">Lire plus</a>
            </article>
            <article>
                <h3><a href="https://www.lemonde.fr/culture/article/2024/07/09/la-nuit-de-jazz-a-porquerolles-pour-dire-l-affection-a-frank-cassenti_6248185_3246.html"></a>La nuit de Jazz à Porquerolles pour dire l’affection à Frank Cassenti</h3>
                <p>Lundi 8 juillet, une vingtaine de musiciennes et musiciens ont rendu hommage au cinéaste, mort le 22 décembre 2023, créateur ...</p>
                <a href="https://www.lemonde.fr/culture/article/2024/07/09/la-nuit-de-jazz-a-porquerolles-pour-dire-l-affection-a-frank-cassenti_6248185_3246.html">Lire plus</a>
            </article>
        </section>

        <section id="testimonials">
            <h2>Témoignages</h2>
            <blockquote>
                <p>"Arcadia est la meilleure plateforme pour trouver de nouveaux livres et musiques!"</p>
                <cite>- Quentin</cite>
            </blockquote>
            <blockquote>
                <p>"J'adore la diversité des albums disponibles. Service incroyable!"</p>
                <cite>- James</cite>
            </blockquote>
        </section>

        <section id="newsletter">
            <h2>Abonnez-vous à notre newsletter</h2>
            <form action="#">
                <input type="email" placeholder="Votre email" required>
                <button type="submit">S'abonner</button>
            </form>
        </section>

        <section id="social-media">
            <h2>Suivez-nous</h2>
            <ul>
                <li><a href="#"><img src="..\views\image_A_L\facebook.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="..\views\image_A_L\twitter.png" alt="Twitter"></a></li>
                <li><a href="#"><img src="..\views\image_A_L\instagram.png" alt="Instagram"></a></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Arcadia. Tous droits réservés.</p>
        <nav>
            <ul>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">Conditions d'utilisation</a></li>
                <li><a href="#">Contactez-nous</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>

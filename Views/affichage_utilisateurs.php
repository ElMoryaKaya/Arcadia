<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher Utilisateurs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="..\Views\Style\tableau.css">
    <link rel="icon" type="image/png" href="../Views/image_A_L/logo.png">
</head>

<?php Require "header.php";?>

<body>
    <main>
    <div class="container my-5">
        <h2>Utilisateurs</h2>
        <table>
            <thead>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Statut</th>              
            </thead>
            <tbody>
            <?php if (isset($affichage))
            foreach ($affichage as $aff): ?>
                <tr>
                    <td scope="row"><?php echo $aff['id_utilisateur']; ?></td>
                    <td scope="row"><?php echo $aff['nom']; ?></td>
                    <td scope="row"><?php echo $aff['prenom']; ?></td>
                    <td scope="row"><?php echo $aff['email']; ?></td>
                    <td scope="row"><?php echo $aff['type_utilisateur']; ?></td>
                    <td>
                    <a class="btn btn-primary" href="../Controllers/C_supprimer_utilisateur.php?id_utilisateur=<?php echo $aff['id_utilisateur']; ?>">Supprimer</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </main>
    <?php Require "footer.php";?>
</body>
</html>
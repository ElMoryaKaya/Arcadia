<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?></title>
</head>
<body>
<?php require "header.php";?>

    <h2><?php echo $titre; ?></h2>
    <p>Auteur: <?php echo $auteur; ?></p>
    <embed src='data:application/pdf;base64,<?php echo base64_encode($livre); ?>' type='application/pdf' width='100%' height='600px' />
</body>
</html>
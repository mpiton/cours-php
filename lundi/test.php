<?php
$a = 1;
$b = 2;
$c = 3;
$d = $a + $b +$c;
$titre = "Ceci est le titre de ma page";
// Vous allez pouvoir écrire un commentaire
$css="monfichier.css";
$couleur = $_POST['css'];
$fichier = $couleur . ".css";
$method = "POST";
?>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= $fichier; ?>">
    <title>
    <?php echo $titre; ?>
    </title>

    </head>
    <body>
    <form method="<?= $method; ?>" action="">
    <label>Votre nom</label>
    <input type="text" name="nom">
    <input type="submit" value="Valider">
    </form>
    <h1>
    Bonjour <?php echo $_POST['nom']; ?> 
    </h1>

    <form method="<?= $method; ?>" action="">
    <label>Votre fichier CSS</label>
    <input type="text" name="css">
    <input type="submit" value="Valider">
    </form>
    <h1>
    Le fichier css demandé est : <?= $fichier; ?>
    </h1>

    </body>
</html>

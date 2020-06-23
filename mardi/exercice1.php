<?php
$method = "GET";
$titre = "Exercice 1";

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
    Bonjour <?php echo $_GET['nom']; ?> 
    </h1>
    
 
<form method="<?= $method; ?>" action="">
<label>Ajouter le premier nombre</label>
<input type="text" name="number1">
<label>Ajouter le deuxième nombre</label>
<input type="text" name="number2">
<input type="submit" value="Valider">
</form>

<h1> La somme de <?php echo $_GET["number1"]; ?> et de <?php echo $_GET["number2"]; ?> est égale à <?php echo $_GET["number1"] + $_GET["number2"];  ?>
</h1>



<h1> Bienvenue <?php echo $_GET["utilisateur"]; ?> , vous êtes sur la <?php echo $_GET["categorie"]; ?> à la page <?php echo $_GET["page"]; ?>



    <form method="<?= $method; ?>" action="">
<input type="submit" value="1" name="bouton">
<input type="submit" value="2" name="bouton">
<input type="submit" value="3" name="bouton">
</form>

<h1>Vous avez appuyé sur le bouton <?php echo $_GET["bouton"] ?></h1>
    </body>
</html>
